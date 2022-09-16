<?php
include 'includes/configImgs.php';
include 'includes/configLinks.php';
error_reporting(0);

$p = $_GET['page'];
$gg;
if ($p == 1) {
    $gg = 1;
} elseif ($p == 2) {
    $gg = 2;
} elseif ($p == 3) {
    $gg = 3;
} else {
    $gg = 0;
}

?>
<!doctype html>
<html lang='en'>

<head>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet' />
    <!-- Bootstrap CSS -->
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <link rel='icon' type='image/x-icon' href='./assets/imgs/contact.png'>
    <!-- <link href = '/includes/styles.css' rel = 'stylesheet'> -->
    <link rel='stylesheet' href='./includes/styles.css' crossorigin='anonymous'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js">
    </script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js">
    </script>

    <title><?php echo $name_web ?></title>
</head>

<body>

        <?php include 'pages/page_slide.php'; ?>

        <div class="row menubar-mini">
            <div class="col"><?php include 'includes/headerPhone.php'; ?></div>
        </div>

        <div class="img-fix2 text-end" id="del">
            <div onclick="onclickdel()" style="margin: 0 0.2rem 0rem 0 ; z-index:10;"><i class="bi bi-x-circle-fill " ></i></div>
            <a href=<?php echo $link_line ?> target="_blank">
                <img object-fit: cover;  class="star2 cur-pointer" src=<?php echo $img_star2 ?> alt=""></a>
        </div>
        <div class="title-box">
            <?php include 'includes/header.php'; ?>
        </div>

        <?php
        if ($gg == 2) {
            include 'pages/page2.php';
        } else {
            include 'pages/page1.php';
        } ?>

        <hr class="x-hr mt-3">

        <div class="box-footer mt-4 p-2">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-center">
                    <?php for ($i = 1; $i <= 29; $i++) { ?>
                        <img class="d-block m-1" src='./assets/imgs/<?php echo $i; ?>.png' alt="" width="100px">
                    <?php
                    } ?>
                </div>
                <br>
                <p class="text-center text-light">Copyright © <?php echo date("Y"); ?> <?php echo $name_title ?> . All Rights Reserved.</p>

            </div>
        </div>




    <!-- <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0<?php echo $name_title ?>7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM' crossorigin='anonymous'></script> -->
    <script>
        
        console.log("assssssssss")
        console.log("width",window.screen.width);
        $('li').hover(function() {
            $(this).addClass('active');
        }, function() {
            $(this).removeClass('active');
        })

        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 3,
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true
        });
    </script>

    <script>

        function onclickdel() {
            var elem = document.getElementById("del");
            elem.parentElement.removeChild(elem);

        }

        function myFunction1() {
            var x = document.getElementById("myDIV1");
            var y = document.getElementById("bt-myDIV1"); //+
            var z = document.getElementById("bt-myDIV2"); //-
            if (x.style.display === "none") {
                x.style.display = "block";
                y.style.display = "none";
                z.style.display = "block";
            } else {
                x.style.display = "none";
                y.style.display = "block";
                z.style.display = "none";
            }
        }
        // function id="sh-menu-left" onclick="myFunctionClose()"d-flex
        function myFunctionClose() {
            var b = document.getElementById("sh-menu-left");
            var o = document.getElementById("o-menu-left");
            var s = document.getElementById("menu-left");
            var c = document.getElementById("c-menu-left");

            // c-menu-left
            if (s.style.display === "none") {
                console.log("o")
            } else {

                setTimeout(function() {
                    s.style.display = "none";
                    s.style.transform = "translateX(0)";
                    b.style.width = "100%";
                }, 600);

                s.style.transform = "translateX(-15rem)";
                // s.style.display = "none";
                b.style.width = "140%";
                o.style.display = "block";
                c.style.display = "none";
            }
        }

        function openMenubar() {
            var s = document.getElementById("menu-left");
            var c = document.getElementById("c-menu-left");
            var o = document.getElementById("o-menu-left");

            if (s.style.display === "none") {
                s.style.display = "flex";
                c.style.display = "block";
                o.style.display = "none";
                console.log("o")
            } else {
                console.log("c")

            }
        }
    </script>

</body>

</html>