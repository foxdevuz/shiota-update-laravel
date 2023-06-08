<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ShiOta choyxonasi</title>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <section class="navigation">
            <div class="container">
                <div class="nav-container">
                    <div class="brand">
                        <a href="/">Shi Ota</a>
                    </div>
                    <nav>
                        <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                        <ul class="nav-list">
                            <li>
                                <a href="/#main">Asosiy</a>
                            </li>
                            <li>
                                <a href="/#foods_section">Taomlar</a>
                            </li>
                            <li>
                                <a href="/#about">Haqida</a>
                            </li>
                            <li>
                                <a href="/#contact">Aloqa</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
         </section>

        {{ $slot }}


        <!-- footer start -->
            <footer>
                <h5>ShiOta choyxonasi <span>2022</span></h5>
                <p>© Barcha huquqlar himoyalangan</p>
            </footer>
        <!-- footer end -->
        <!--  js -->
        <script src="/assets/js/app.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
        <script>
            import Swup from 'swup';
            const swup = new Swup();

        </script>
        <!--AOS-->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();

        </script>
        <!--nav script-->
        <script>
            (function ($) { // Begin jQuery
                $(function () { // DOM ready
                    // If a link has a dropdown, add sub menu toggle.
                    $('nav ul li a:not(:only-child)').click(function (e) {
                        $(this).siblings('.nav-dropdown').toggle();
                        // Close one dropdown when selecting another
                        $('.nav-dropdown').not($(this).siblings()).hide();
                        e.stopPropagation();
                    });
                    // Clicking away from dropdown will remove the dropdown class
                    $('html').click(function () {
                        $('.nav-dropdown').hide();
                    });
                    // Toggle open and close nav styles on click
                    $('#nav-toggle').click(function () {
                        $('nav ul').slideToggle();
                    });
                    // Hamburger to X toggle
                    $('#nav-toggle').on('click', function () {
                        this.classList.toggle('active');
                    });
                }); // end DOM ready
            })(jQuery); // end jQuery

        </script>
    </body>

</html>
