<?php
require __DIR__ . "/model.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css" rel="stylesheet">
    <title>Title2</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="main-wrapper">
    <div class="wrapper-item">
        <ul id="elements">

        </ul>
    </div>
    <div class="preloader">
        <img src="img/preloader.gif" alt="loading"/>
    </div>
    <div class="wrapper-load">
        <button class="btn-load hide-load">Load more</button>
    </div>
    <footer>
        <ul>
            <li>
                <h2>hot offers</h2>
                <div class="description-footer">
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae. Suspendisse
                    sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit magna, hend.
                </div>
                <div class="wrapper-footer-list">
                    <ul>
                        <li>Vestibulum ante ipsum primis in faucibus orci luctus</li>
                        <li>Nam elit magna hendrerit sit amet tincidunt ac</li>
                        <li>Quisque diam lorem interdum vitae dapibus ac scele</li>
                        <li>Donec eget tellus non erat lacinia fermentum</li>
                        <li>Donec in velit vel ipsum auctor pulvin</li>
                    </ul>
                </div>
            </li>
            <li>
                <h2>hot offers</h2>
                <div class="description-footer">
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae. Suspendisse
                    sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit magna, hend.
                </div>
                <div class="wrapper-footer-list">
                    <ul>
                        <li>Vestibulum ante ipsum primis in faucibus orci luctus</li>
                        <li>Nam elit magna hendrerit sit amet tincidunt ac</li>
                        <li>Quisque diam lorem interdum vitae dapibus ac scele</li>
                        <li>Donec eget tellus non erat lacinia fermentum</li>
                        <li>Donec in velit vel ipsum auctor pulvin</li>
                    </ul>
                </div>
            </li>
            <li>
                <h2>Store information</h2>
                <div class="wrapper-contacts">
                    <ul>
                        <li><img src="img/location.png" alt="Location">
                            Company Inc., 8901 Marmora Road, Glasgow, D04 89GR
                        </li>
                        <li><img src="img/call.png" alt="Call">
                            <a href="tel:(800) 2345-6789">Call us now toll free: (800) 2345-6789</a>
                        </li>
                        <li>
                            <img src="img/post.png" alt="Post">
                            <a href="mailto:support@example.com">Customer support: support@example.com</a><br/>
                            <a href="mailto:pressroom@example.com" style="padding-left: 38px;">Press: pressroom@example.com</a>
                        </li>
                        <li><img src="img/skype.png" alt="Skype">
                            <a href="skype:sample-username?call">Skype: sample-username</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </footer>
</div>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>