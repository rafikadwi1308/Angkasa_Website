<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="assets/Logo Web.png">
    <title>Angkasa | Gallery Page</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            background: #EBECF0;
        }

        html {
            scroll-behavior: smooth;
        }

        ::-webkit-scrollbar {
            width: 10px;
            border-radius: 50px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 30px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #bbb;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            padding: 5px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #EBECF0 0.5;
            backdrop-filter: blur(5px);
        }

        .navbar-logo img {
            max-height: 65px;
        }

        .navbar-menu {
            list-style: none;
            font-family: "Poppins", sans-serif;
            display: flex;
            gap: 20px;
            margin: 0;
            font-weight: bold;
        }

        .navbar-menu li {
            margin: 0;
        }

        .navbar-menu li a {
            color: #000;
            text-decoration: none;
            padding: 8px 16px;
            transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.2s ease;
            border-radius: 10px;
        }

        .navbar-menu #Gallery {
            color: #fff;
            text-decoration: none;
            padding: 8px 16px;
            transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.2s ease;
            border-radius: 10px;
        }

        .navbar-menu li a:hover {
            color: #fff;
            background-color: #000;
            transform: scale(1.1);
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .active-link {
            color: #fff;
            background-color: #000;
            transform: scale(1.1);
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            transition: 0.3;
        }

        .admin-link {
            color: #000;
            font-family: "Poppins", sans-serif;
            text-decoration: none;
            padding: 8px 16px;
            transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.2s ease;
            border-radius: 10px;
            font-weight: 700;
        }

        .admin-link:hover {
            color: #fff;
            background-color: #000;
            transform: scale(1);
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .dropbtn {
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 10px;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .pack {
            width: 100%;
            text-align: center;
            height: auto;
            background-color: transparent;
            justify-content: center;
            align-items: center;
            margin-top: 100px;
        }

        .pack-title p {
            margin-top: 10px;
            font-family: "Poppins", sans-serif;
            font-size: 18px;
        }

        .pack-title #klick {
            font-size: 20px;
            font-weight: 800;
        }

        .pack-title h1 {
            margin-bottom: 5px;
            font-family: "Poppins", sans-serif;
            font-size: 36px;
            font-weight: 800;
        }

        .photo-gallery {
            color: #313437;
            background-color: #EBECF0;
        }

        .photo-gallery p {
            color: #7d8285;
        }

        .photo-gallery h2 {
            font-weight: bold;
            margin-bottom: 40px;
            padding-top: 40px;
            color: inherit;
        }

        @media (max-width:767px) {
            .photo-gallery h2 {
                margin-bottom: 25px;
                padding-top: 25px;
                font-size: 24px;
            }
        }

        .photo-gallery .intro {
            font-size: 16px;
            max-width: 500px;
            margin: 0 auto 40px;
        }

        .photo-gallery .intro p {
            margin-bottom: 0;
        }

        .photo-gallery .photos {
            padding-bottom: 20px;
        }

        .photo-gallery .item {
            padding-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a class="navbar-logo" href="Dashboard.php"><img src="assets/Logo Angkasa Photobooth.png" alt="Logo"></a>
        <ul class="navbar-menu">
            <li><a href="Dashboard.php" id="Home">Home</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" id="Pemesanan" class="dropbtn">Pemesanan</a>
                <div class="dropdown-content">
                    <a href="./daerahjember.php">Daerah Jember</a>
                    <a href="./diluarjember.php">Diluar Jember</a>
                    <a href="./sponsor.php">Sponsor</a>
                </div>
            </li>
            <li><a href="Ourpackage.php" id="Our-Package">Our Package</a></li>
            <li><a href="Gallery.php" id="Gallery"  class="active-link">Gallery</a></li>
            <li><a href="Tentang.php" id="Tentang-Kami">Tentang Kami</a></li>
        </ul>
        <a class="admin-link" href="Login.php">Anda Admin?</a>
    </div>

    <div class="pack" data-aos="fade-down" data-aos-easing="ease" data-aos-duration="700">
        <div class="pack-title">
            <h1>Gallery</h1>
            <p>Berikut ini adalah contoh hasil dari foto-foto kami</p>
            <p id="klick"><span class="cursor-pointer">👉</span> Klik foto untuk melihat detail</p>
        </div>
    </div>

    <div class="photo-gallery">
        <div class="container mt-5">
            <div class="row photos" data-aos="fade-down" data-aos-easing="ease" data-aos-duration="500">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/Gallery/img1.gif" data-lightbox="photos"><img class="img-fluid" style="border-radius: 15px;" src="assets/Gallery/img1.gif"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/Gallery/img2.gif" data-lightbox="photos"><img class="img-fluid" style="border-radius: 15px;" src="assets/Gallery/img2.gif"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/Gallery/img3.gif" data-lightbox="photos"><img class="img-fluid" style="border-radius: 15px;" src="assets/Gallery/img3.gif"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/Gallery/img4.gif" data-lightbox="photos"><img class="img-fluid" style="border-radius: 15px;" src="assets/Gallery/img4.gif"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/Gallery/img5.jpg" data-lightbox="photos"><img class="img-fluid" style="border-radius: 15px;" src="assets/Gallery/img5.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/Gallery/img6.jpg" data-lightbox="photos"><img class="img-fluid" style="border-radius: 15px;" src="assets/Gallery/img6.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/Gallery/img7.jpg" data-lightbox="photos"><img class="img-fluid" style="border-radius: 15px;" src="assets/Gallery/img7.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/Gallery/img8.jpg" data-lightbox="photos"><img class="img-fluid" style="border-radius: 15px;" src="assets/Gallery/img8.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/Gallery/img9.gif" data-lightbox="photos"><img class="img-fluid" style="border-radius: 15px;" src="assets/Gallery/img9.gif"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/Gallery/img10.gif" data-lightbox="photos"><img class="img-fluid" style="border-radius: 15px;" src="assets/Gallery/img10.gif"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/Gallery/img11.gif" data-lightbox="photos"><img class="img-fluid" style="border-radius: 15px;" src="assets/Gallery/img11.gif"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/Gallery/img12.gif" data-lightbox="photos"><img class="img-fluid" style="border-radius: 15px;" src="assets/Gallery/img12.gif"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/Gallery/img13.gif" data-lightbox="photos"><img class="img-fluid" style="border-radius: 15px;" src="assets/Gallery/img13.gif"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/Gallery/img14.gif" data-lightbox="photos"><img class="img-fluid" style="border-radius: 15px;" src="assets/Gallery/img14.gif"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/Gallery/img15.gif" data-lightbox="photos"><img class="img-fluid" style="border-radius: 15px;" src="assets/Gallery/img15.gif"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="assets/Gallery/img16.gif" data-lightbox="photos"><img class="img-fluid" style="border-radius: 15px;" src="assets/Gallery/img16.gif"></a></div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>