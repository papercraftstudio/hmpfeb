<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>SlidesJS Basic Code Example</title>
    <meta name="description" content="SlidesJS is a simple slideshow plugin for jQuery. Packed with a useful set of features to help novice and advanced developers alike create elegant and user-friendly slideshows.">
    <meta name="author" content="Nathan Searles">
    
    <link rel='stylesheet prefetch' href='<?=base_url();?>asset/font-awesome/css/font-awesome.min.css'>

    <!-- SlidesJS Required (if responsive): Sets the page width to the device width. -->
    <meta name="viewport" content="width=device-width">
    <!-- End SlidesJS Required -->

    <!-- SlidesJS Required: These styles are required if you'd like a responsive slideshow -->
    <style>
        /* Prevent the slideshow from flashing on load */

        #slides {
            display: no 
        }

        /* Center the slideshow */

        .container {
            margin: 0 auto
        }

        /* Show active item in the pagination */

        .slidesjs-pagination .active {
            color: red;
        }

        /* Media quires for a responsive layout */

        /* For tablets & smart phones */

        @media (max-width: 767px) {
            body {
                padding-left: 10px;
                padding-right: 10px;
            }
            .container {
                width: auto
            }
        }

        /* For smartphones */

        @media (max-width: 480px) {
            .container {
                width: auto
            }
        }

        /* For smaller displays like laptops */

        @media (min-width: 768px) and (max-width: 979px) {
            .container {
                width: 724px
            }
        }

        /* For larger displays */

        @media (min-width: 1200px) {
            .container {
                width: 1170px
            }
        }
    </style>
    <!-- SlidesJS Required: -->
</head>
<?php require_once 'head.php' ?>

<body>
    <?php require_once 'header.php' ?>
    <main>
        <?php if(is_callable('main')) main(); ?>
    </main>
    <?php require_once 'footer.php' ?>
</body>

</html>