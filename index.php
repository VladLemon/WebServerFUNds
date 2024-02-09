<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #000;
        }

        nav a {
            position: relative;
            font-size: 1.1em;
            font-weight: 500;
            color: #333;
            text-decoration: none;
            padding: 6px 20px;
            transition: 0.5s;
        }

        nav a:hover {
            color: #8ef;
        }

        nav a span {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            border-bottom: 2px solid #bef;
            border-radius: 15px;
            transform: scale(0) translateY(50px);
            opacity: 0;
            transition: 0.5s;
        }

        nav a:hover span {
            transform: scale(1) translateY(0);
            opacity: 1;
        }
    </style>
</head>

<body>
    <nav>
        <a href="#">Home <span></span></a>
        <a href="#">About<span></span></a>
        <a href="#">Services <span></span></a>
        <a href="#">Contact <span></span></a>
        <a href="#">Help <span></span></a>
    </nav>
</body>

</html>

<!-- <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description"
            content="A layout example with a side menu that hides on mobile, just like the Pure website.">
        <title>Responsive Side Menu &ndash;
            Layout Examples &ndash;
            Pure</title>
        <link rel="stylesheet" href="/css/pure/pure-min.css">
        <link rel="stylesheet" href="/layouts/side-menu/styles.css">
    </head>

    <body>
        <div id="layout">
            < !-- Menu toggle <a href="#menu" id="menuLink" class="menu-link">
                < !-- Hamburger icon <span></span></a>
                    <div id="menu">
                        <div class="pure-menu"><a class="pure-menu-heading" href="#company">Company</a>
                            <ul class="pure-menu-list">
                                <li class="pure-menu-item"><a href="#home" class="pure-menu-link">Home</a></li>
                                <li class="pure-menu-item"><a href="#about" class="pure-menu-link">About</a></li>
                                <li class="pure-menu-item menu-item-divided pure-menu-selected"><a href="#"
                                        class="pure-menu-link">Services</a></li>
                                <li class="pure-menu-item"><a href="#contact" class="pure-menu-link">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="main">
                        <div class="header">
                            <h1>Page Title</h1>
                            <h2>A subtitle for your page goes here</h2>
                        </div>
                        <div class="content">
                            <h2 class="content-subhead">How to use this layout</h2>
                            <p>To use this layout,
                                you can just copy paste the HTML,
                                along with the CSS in <a href="/layouts/side-menu/styles.css"
                                    alt="Side Menu CSS">side-menu.css</a>,
                                and the JavaScript in <a href="/js/ui.js">ui.js</a>. The JS file uses vanilla JavaScript
                                to simply toggle an <code>active</code>class that makes the menu responsive. </p>
                            <h2 class="content-subhead">Now Let's Speak Some Latin</h2>
                            <p>Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident,
                                sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                            <div class="pure-g">
                                <div class="pure-u-1-4"><img class="pure-img-responsive"
                                        src="http://farm3.staticflickr.com/2875/9069037713_1752f5daeb.jpg"
                                        alt="Peyto Lake"></div>
                                <div class="pure-u-1-4"><img class="pure-img-responsive"
                                        src="http://farm3.staticflickr.com/2813/9069585985_80da8db54f.jpg" alt="Train">
                                </div>
                                <div class="pure-u-1-4"><img class="pure-img-responsive"
                                        src="http://farm6.staticflickr.com/5456/9121446012_c1640e42d0.jpg"
                                        alt="T-Shirt Store"></div>
                                <div class="pure-u-1-4"><img class="pure-img-responsive"
                                        src="http://farm8.staticflickr.com/7357/9086701425_fda3024927.jpg"
                                        alt="Mountain"></div>
                            </div>
                            <h2 class="content-subhead">Try Resizing your Browser</h2>
                            <p>Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident,
                                sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                        </div>
                    </div>
        </div>
        <script src="/js/ui.js"></script>
    </body>

    </html>-->