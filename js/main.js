(() => {
    'use strict';

    $(document).ready(() => {
        let getCardElement = data => {
            const {title, description, cost, discountCost, img} = data;
            return `<li class="fadeIn">
                <div class="img-box">
                <img class="img-responsive" src="${img}" alt="${title}">
                <div class="sale-container">
                    ${data["new"] ? `<div class="sale">Sale</div> 
                                     <div class="new">New</div>` : ''}
                </div>
            </div>
            <div class="wrapper-description_card">
                <div class="title">${title}</div>
                 <div class="description">
                 <p>${description}</p>
                 </div>
                <div class="cost-container">
                    ${discountCost ? `<div class="discountCost">${discountCost}</div>` : `<div class="discountCost">${cost}</div>`}
                    ${discountCost !== null ? `<div class="cost">${cost}</div>` : ''}
                </div>
                <div class="controls">
                    <button class="btn-add">add to cart</button>
                    <button class="btn-view" type="submit">view</button>
                </div>
            </div>
        </li>`;
        };

        class Pages {
            constructor(request, container, showImmediately) {
                this.state = {
                    request: request,
                    container: container,
                    showImmediately: showImmediately
                };

                function* GenPage() {
                    let page = 1;
                    while (true) {
                        yield page++;
                    }
                }

                const generatePage = GenPage();

                let getPages = async (page, per_page) => {
                    try {
                        this.state.request = true;

                        const response = await axios.get("./list.php", {
                            params: {
                                page,
                                per_page
                            }
                        });

                        Pages.preloadEnd();
                        this.state.request = false;

                        const objectsArray = response.data.entities;

                        objectsArray.length === 0 ? $(".btn-load").hide() : '';

                        this.state.container = document.createDocumentFragment();

                        objectsArray.forEach(card => {
                            let wrapper = document.createElement("div");
                            wrapper.innerHTML = getCardElement(card);
                            this.state.container.appendChild(wrapper.firstElementChild);
                        });

                        this.state.showImmediately ? showCards() : this.state.showImmediately = false;
                    } catch (error) {
                        console.log(error);
                    }
                };
                this.preloadStart();
                getPages(generatePage.next().value, 4);

                $(".btn-load").on("click", () => {
                    if (this.state.request) {
                        this.preloadStart();
                    } else if (this.state.container) {
                        showCards();
                    } else {
                        getPages(generatePage.next().value, 4);
                    }
                });

                let showCards = () => {
                    document.querySelector("#elements").appendChild(this.state.container);
                    this.state.showImmediately = false;
                    this.state.container = null;
                    getPages(generatePage.next().value, 4);
                }
            }

            preloadStart() {
                $(".preloader").css("display", "block");
                $(".preloader").animate({opacity: 1}, 50);
                $(".btn-load").hide();
                this.state.showImmediately = true;
            };

            static preloadEnd() {
                $(".preloader").animate({opacity: 0}, 50);
                $(".preloader").css("display", "none");
                $(".btn-load").show();
            };
        }

        new Pages(false, null, true);
    });
})();