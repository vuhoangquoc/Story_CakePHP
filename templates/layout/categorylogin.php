<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>webdoctruyen</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/webdoctruyen/webroot/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/webdoctruyen/webroot/css/style.css" rel="stylesheet">

    <link href="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/webdoctruyen/webroot/css/doc.css" rel="stylesheet">
</head>

<body>
    
    <?= $this->element('nav_top'); ?>

    <div class="container-fluid mb-5">
	    <div class="row border-top px-xl-5">
            <div class="col-lg-9">
               
                <?= $this->element('navlogin'); ?>
            </div>
        </div>
    </div>

    <?= $this->fetch('content'); ?>

    <?= $this->element('footer'); ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/webdoctruyen/webroot/lib/easing/easing.min.js"></script>
    <script src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/webdoctruyen/webroot/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/webdoctruyen/webroot/mail/jqBootstrapValidation.min.js"></script>
    <script src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/webdoctruyen/webroot/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/webdoctruyen/webroot/js/main.js"></script>
</body>

</html>