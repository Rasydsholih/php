<?php
echo '<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="?page=pagetop">kimsy0_</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="?page=about">About</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="?page=services">Services</a></li> -->
                <li class="nav-item"><a class="nav-link" href="?page=album">Album</a></li>
                <li class="nav-item"><a class="nav-link" href="?page=contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<header class="masthead">
<div class="container px-4 px-lg-5 h-100">
    <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-8 align-self-end">
            <h1 class="text-white font-weight-bold">WELCOME</h1>
            <hr class="divider" />
        </div>
        <div class="col-lg-8 align-self-baseline">
            <p class="text-white-75 mb-5">Rasyd, a student in vocational school WKIRAMA</p>
            /
        </div>
    </div>
</div>
</header>';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'pagetop':
        include "pagetop.php";
        break;
    case 'about':
        include "about.php";
        break;
    case 'album':
        include "album.php";
        break;
    case 'contact':
        include "contact.php";
        break;
    default:
        // echo "<center><h1>maaf tidak dapat ke halaman</h1></center>";
        include "pagetop.php";
        break;
}




?>