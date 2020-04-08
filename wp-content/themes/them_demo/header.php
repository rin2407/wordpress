<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <link rel="profile" href="http:://gmgp.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' );?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="menu">
        <div class="row mt-4">
            <div class="col-md-4"></div>
            <div class="col-md-4 ">
            <div class="image float-left">
            <img src="https://assets.classy.org/5134968/a16acad0-8ee0-11e7-b532-0ea101863572.png" alt="">
            </div>
            </div>
            <div class="col-md-4">
            <ul id="menu" class="mr-4">
                    <li><a href="#">ENGLISH</a>
                        <ul id="sub">
                            <li><a href="#">日本語</a></li>
                            <li><a href="#">中国</a></li>
                        </ul>

                    </li>
                </ul>
                <a href="#" class="btn btn btn-light btn-sm btn-lg check">CHECK RATE</a>   
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <?php theme_menu('primary-menu'); ?>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators carousel-head">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://i.ytimg.com/vi/SVLXGMfgU5s/maxresdefault.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://i.ytimg.com/vi/3ssL8vx7Xhg/maxresdefault.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://i.ytimg.com/vi/MU0Yp0qmYEs/maxresdefault.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <section class="search-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0 carousel-bottom text-center">
                            <h5>DESTINATION</h5>
                            <P>Select a hotel or resort</P>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0 carousel-bottom text-center">
                            <h5>CHECK IN-CHECK OUT</h5>
                            <P>Wed Apr 08 - Thu Apr 09</P>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0 carousel-bottom text-center">
                            <h5>GUESTS</h5>
                            <P>1Room • 1Adult • 0Child</P>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0 carousel-bottom text-center">
                            <a href="#" class="btn btn-primary btn-lg mt-2 check-rate">CHECK RATE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div id="container">
        <div class="logo">
            <?php theme_header(); ?>
        </div>