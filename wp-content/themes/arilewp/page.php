<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php esc_url(bloginfo( 'pingback_url' )); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/conversation.css">
</head>

<body class="home blog">
    <div class="lining">
        <div id="preloader">
            <div id="status" style="display: none;"></div>
        </div>
        <nav>

            <button class="hamburger hamburger--spin" type="button" style="display: none;">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>

            <a target="_blank" href="https://www.rosewoodhotels.com/" class="logomain"><img
                    src="https://www.rosewoodhotels.com/conversations/wp-content/themes/rosewood/images/logo.png"
                    alt="Rosewood Hotels"></a>

            <a href="https://www.rosewoodhotels.com/conversations/" class="logoint">Conversations</a>
            <ul class="prime-nav">
                <li id="menu-item-1698"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1698">
                    <a href="https://www.rosewoodhotels.com/conversations/articles/">Features</a>
                    <ul class="sub-menu">
                        <li id="menu-item-1495"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1495"><a
                                href="https://www.rosewoodhotels.com/conversations/category/arts-culture/">Art &amp;
                                Culture</a></li>
                        <li id="menu-item-1522"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1522"><a
                                href="https://www.rosewoodhotels.com/conversations/category/experiences/">Experiences</a>
                        </li>
                        <li id="menu-item-1523"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1523"><a
                                href="https://www.rosewoodhotels.com/conversations/category/food-drink/">Food &amp;
                                Drink</a></li>
                        <li id="menu-item-1524"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1524"><a
                                href="https://www.rosewoodhotels.com/conversations/category/curators/">Curators</a></li>
                        <li id="menu-item-1525"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1525"><a
                                href="https://www.rosewoodhotels.com/conversations/category/travel-intel/">Travel
                                Intel</a></li>
                        <li id="menu-item-2231"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2231"><a
                                href="https://www.rosewoodhotels.com/conversations/category/style/">Style</a></li>
                        <li id="menu-item-8570"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-8570"><a
                                href="https://www.rosewoodhotels.com/conversations/category/family/">Family</a></li>
                        <li id="menu-item-8573"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-8573"><a
                                href="https://www.rosewoodhotels.com/conversations/category/wellness/">Wellness</a></li>
                    </ul>
                </li>
                <li id="menu-item-1699"
                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1699">
                    <a href="#">Locations</a>
                    <ul class="sub-menu">
                        <li id="menu-item-1705"
                            class="menu-item menu-item-type-taxonomy menu-item-object-locales menu-item-1705"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/abu-dhabi/">Abu Dhabi</a>
                        </li>
                        <li id="menu-item-6099"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6099"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/bahamas/">Bahamas</a></li>
                        <li id="menu-item-7940"
                            class="menu-item menu-item-type-taxonomy menu-item-object-locales menu-item-7940"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/bangkok/">Bangkok</a></li>
                        <li id="menu-item-1700"
                            class="menu-item menu-item-type-taxonomy menu-item-object-locales menu-item-1700"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/beijing/">Beijing</a></li>
                        <li id="menu-item-2281"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2281"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/bermuda/">Bermuda</a></li>
                        <li id="menu-item-2994"
                            class="menu-item menu-item-type-taxonomy menu-item-object-locales menu-item-2994"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/bvi/">British Virgin
                                Islands</a></li>
                        <li id="menu-item-1702"
                            class="menu-item menu-item-type-taxonomy menu-item-object-locales menu-item-1702"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/dallas/">Dallas</a></li>
                        <li id="menu-item-9110"
                            class="menu-item menu-item-type-taxonomy menu-item-object-locales menu-item-9110"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/guangzhou/">Guangzhou</a>
                        </li>
                        <li id="menu-item-7433"
                            class="menu-item menu-item-type-taxonomy menu-item-object-locales menu-item-7433"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/hong-kong/">Hong Kong</a>
                        </li>
                        <li id="menu-item-2280"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2280"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/jeddah/">Jeddah</a></li>
                        <li id="menu-item-1703"
                            class="menu-item menu-item-type-taxonomy menu-item-object-locales menu-item-1703"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/london/">London</a></li>
                        <li id="menu-item-1708"
                            class="menu-item menu-item-type-taxonomy menu-item-object-locales menu-item-1708"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/los-cabos/">Los Cabos</a>
                        </li>
                        <li id="menu-item-2782"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2782"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/luang-prabang/">Luang
                                Prabang</a></li>
                        <li id="menu-item-7564"
                            class="menu-item menu-item-type-taxonomy menu-item-object-locales menu-item-7564"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/montecito/">Montecito</a>
                        </li>
                        <li id="menu-item-1701"
                            class="menu-item menu-item-type-taxonomy menu-item-object-locales menu-item-1701"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/new-york-city/">New York
                                City</a></li>
                        <li id="menu-item-4273"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4273"><a
                                href="http://www.rosewoodhotels.com/conversations/locales/northern-california/">Northern
                                California</a></li>
                        <li id="menu-item-2282"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2282"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/paris/">Paris</a></li>
                        <li id="menu-item-2284"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2284"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/phnom-penh/">Phnom Penh</a>
                        </li>
                        <li id="menu-item-2283"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2283"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/phuket/">Phuket</a></li>
                        <li id="menu-item-1706"
                            class="menu-item menu-item-type-taxonomy menu-item-object-locales menu-item-1706"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/riviera-maya/">Riviera
                                Maya</a></li>
                        <li id="menu-item-7550"
                            class="menu-item menu-item-type-taxonomy menu-item-object-locales menu-item-7550"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/san-miguel-de-allende/">San
                                Miguel de Allende</a></li>
                        <li id="menu-item-2195"
                            class="menu-item menu-item-type-taxonomy menu-item-object-locales menu-item-2195"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/santa-fe/">Santa Fe</a></li>
                        <li id="menu-item-7432"
                            class="menu-item menu-item-type-taxonomy menu-item-object-locales menu-item-7432"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/sanya/">Sanya</a></li>
                        <li id="menu-item-2777"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2777"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/tuscany/">Tuscany</a></li>
                        <li id="menu-item-1707"
                            class="menu-item menu-item-type-taxonomy menu-item-object-locales menu-item-1707"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/vancouver/">Vancouver</a>
                        </li>
                        <li id="menu-item-2290"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2290"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/d-c/">Washington, D.C.</a>
                        </li>
                        <li id="menu-item-10299"
                            class="menu-item menu-item-type-taxonomy menu-item-object-locales menu-item-10299"><a
                                href="https://www.rosewoodhotels.com/conversations/locales/yangon/">Yangon</a></li>
                    </ul>
                </li>
                <li id="menu-item-1709" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1709">
                    <a href="https://www.rosewoodhotels.com/conversations/category/curators/">Curators</a></li>
            </ul>

            <a href="#" class="searchable"><i class="fa fa-search ion-ios-search-strong"></i></a>

            <div class="hamburger">
                <a class="cheese" href="#"><span></span></a>
            </div>

        </nav>
        <div class="cookie-consent" style="display: block;">
            <p>
                Rosewood Hotels and Resorts site uses cookies. By using this site, you are agreeing to our <a
                    href="https://www.rosewoodhotels.com/en/privacy-policy" target="_blank">Privacy Policy</a>.
            </p>
            <div class="content-box-link cookie-btn">
                <a class="cookie-consent__accept-btn button">accept</a>
            </div>
        </div>
        <section class="intro" style="height: 355px;">

            <div class="full-bg"
                style="background-image: url(&quot;https://www.rosewoodhotels.com/conversations/conversations/wp-content/uploads/2018/07/Rosewood-Conversations-1806.jpg&quot;); height: 355.5px; transform: translate3d(0px, 0px, 0px);">

                <div class="floating-hello" style="transform: translate3d(0px, 0px, 0px);">

                    <h1 style="opacity: 1;">
                        <span class="flh-subtitle" style="padding-bottom: 20px;">Rosewood</span>
                        <span class="flh-title">Conversations</span>
                    </h1>

                    <i style="opacity: 1;">What the world is talking about: travel, culture, cuisine, and style</i>

                </div>

            </div>

        </section>
        <section class="featurettes">

            <div class="featurettes-container">

                <div class="featurettes-col left">
                    <div class="featurettes-box">
                        <div class="featurettes-img"
                            style="background-image: url(https://www.rosewoodhotels.com/conversations/conversations/wp-content/uploads/2020/03/Julia-homepage-3-Schlesinger-Library-Radcliffe-Institute-Harvard-University.jpg)">
                        </div>
                        <a href="https://www.rosewoodhotels.com/conversations/discovering-julia-childs-santa-barbara/"
                            class="dropanchor"></a>
                        <div class="featurettes-subbox">
                            <h2 class="featurettes-title">Discovering Julia Child’s Santa Barbara</h2>
                            <p class="featurettes-cat">
                                Food &amp; Drink </p>
                        </div>
                    </div>

                </div>
                <div class="featurettes-col right">
                    <div class="featurettes-box featurettes-box-space">
                        <div class="featurettes-img"
                            style="background-image: url(https://www.rosewoodhotels.com/conversations/conversations/wp-content/uploads/2020/03/Le-Banneton-Courtesy-of-Facebook_2-1.jpg)">
                        </div>
                        <a href="https://www.rosewoodhotels.com/conversations/the-francophiles-guide-to-luang-prabang/"
                            class="dropanchor"></a>
                        <div class="featurettes-subbox">
                            <h2 class="featurettes-title">The Francophile’s Guide to Luang Prabang</h2>
                            <p class="featurettes-cat">
                                Experiences </p>
                        </div>
                    </div>


                    <div class="featurettes-box ">
                        <div class="featurettes-img"
                            style="background-image: url(https://www.rosewoodhotels.com/conversations/conversations/wp-content/uploads/2020/02/Nohoch-Mul-Pyramid-Shutterstock.jpg)">
                        </div>
                        <a href="https://www.rosewoodhotels.com/conversations/mayan-ruins-at-coba-mexico/"
                            class="dropanchor"></a>
                        <div class="featurettes-subbox">
                            <h2 class="featurettes-title">Mysteries of the Maya</h2>
                            <p class="featurettes-cat">
                                Experiences </p>
                        </div>
                    </div>


                </div>

            </div>

            <div class="clear"></div>

        </section>
        <section class="greatest">


            <div class="homeboxes">

                <div class="homeboxes-container">


                    <div class="homebox ">

                        <a href="https://www.rosewoodhotels.com/conversations/tristan-auer-custom-vintage-car-tailoring/"
                            class="dropanchor"></a>
                        <div class="homebox-img"
                            style="background-image: url(https://www.rosewoodhotels.com/conversations/conversations/wp-content/uploads/2020/02/33-L1000850-1.jpg)">
                        </div>

                        <div class="homebox-copy">

                            <h2>The King of Custom Cars</h2>
                            <p class="homebox-cat">
                                Featured </p>

                        </div>

                    </div>
                    <div class="homebox ">

                        <a href="https://www.rosewoodhotels.com/conversations/things-to-do-in-yangon-myanmar/"
                            class="dropanchor"></a>
                        <div class="homebox-img"
                            style="background-image: url(https://www.rosewoodhotels.com/conversations/conversations/wp-content/uploads/2019/10/Rosewood-Conversations-Yangon-5.jpg)">
                        </div>

                        <div class="homebox-copy">

                            <h2>Why Yangon Should Be on Your 2020 Wish List</h2>
                            <p class="homebox-cat">
                                Travel Intel </p>

                        </div>

                    </div>



                    <div class="homebox homebox-firstlast">

                        <a href="https://www.rosewoodhotels.com/conversations/behind-the-scenes-with-steinway-sons/"
                            class="dropanchor"></a>
                        <div class="homebox-img"
                            style="background-image: url(https://www.rosewoodhotels.com/conversations/conversations/wp-content/uploads/2020/02/PB_STEINWAY_SON_030215_05_118_B_CMJN300_retouched.jpg)">
                        </div>

                        <div class="homebox-copy">

                            <h2>Behind the Scenes with Steinway &amp; Sons</h2>
                            <p class="homebox-cat">
                                Art &amp; Culture </p>

                        </div>

                    </div>

                    <div class="clear"></div>

                    <div class="homebox homebox-big">

                        <a href="https://www.rosewoodhotels.com/conversations/where-to-find-the-best-tacos-in-los-cabos/"
                            class="dropanchor"></a>
                        <div class="homebox-img"
                            style="background-image: url(https://www.rosewoodhotels.com/conversations/conversations/wp-content/uploads/2020/01/IMG_4217-2.jpg)">
                        </div>

                        <div class="homebox-copy">

                            <h2>Where to Find the Best Tacos in Los Cabos</h2>
                            <p class="homebox-cat">
                                Food &amp; Drink </p>

                        </div>

                    </div>



                    <div class="homebox homebox-big homebox-endlast">

                        <a href="https://www.rosewoodhotels.com/conversations/an-insiders-guide-to-phnom-penhs-best-cocktail-bars/"
                            class="dropanchor"></a>
                        <div class="homebox-img"
                            style="background-image: url(https://www.rosewoodhotels.com/conversations/conversations/wp-content/uploads/2020/01/IMG_0125-74.jpg)">
                        </div>

                        <div class="homebox-copy">

                            <h2>An Insider’s Guide to Phnom Penh’s Best Cocktail Bars</h2>
                            <p class="homebox-cat">
                                Food &amp; Drink </p>

                        </div>

                    </div>

                    <div class="clear"></div>

                    <div class="clear"></div>

                </div>

            </div>



            <div class="nakedbutton"><a href="https://www.rosewoodhotels.com/conversations/articles/">More Articles</a>
            </div>


        </section>
        <div class="homeinstagram">
            <div class="homeinstagram-explore">
                <a target="_blank" href="https://www.instagram.com/rosewoodhotels/">
                    <i class="fa fa-instagram"></i>
                    Explore Rosewood through the eyes of our guests #RWJourneys </a>
            </div>
            <div id="instafeed" class="instafeed"></div>
        </div>
        <div class="homefeatures">

		<div class="homefeatures-container">
			<h2 class="homefeatures-title">FEATURED HOTELS</h2>
			<div class="homefeatures-list owl-carousel owl-carousel-home owl-loaded owl-drag">
			<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1765px, 0px, 0px); transition: all 0s ease 0s; width: 7062px;"><div class="owl-item cloned" style="width: 548.5px; margin-right: 40px;"><div class="homefeatures-item">
					<div class="homefeatures-img" style="background-image: url(https://www.rosewoodhotels.com/conversations/conversations/wp-content/uploads/2018/04/Rosewood-Conversation-CASTIGLION-DEL-BOSCO.jpg);"></div>
					<a class="dropanchor" target="_blank" href="https://www.rosewoodhotels.com/en/castiglion-del-bosco"></a>
					<div class="homefeatures-place">
							<h3 class="homefeatures-hotelname">Rosewood Castiglion del Bosco</h3>
							<div class="homefeatures-address">
								<p>Tuscany</p>
							</div>
						</div>
				</div></div><div class="owl-item cloned" style="width: 548.5px; margin-right: 40px;"><div class="homefeatures-item">
					<div class="homefeatures-img" style="background-image: url(https://www.rosewoodhotels.com/conversations/conversations/wp-content/uploads/2018/04/Rosewood-Conversation-Jeddah.jpg);"></div>
					<a class="dropanchor" target="_blank" href="https://www.rosewoodhotels.com/en/jeddah"></a>
					<div class="homefeatures-place">
							<h3 class="homefeatures-hotelname">Rosewood Jeddah</h3>
							<div class="homefeatures-address">
								<p>Jeddah, Saudi Arabia</p>
							</div>
						</div>
				</div></div><div class="owl-item cloned" style="width: 548.5px; margin-right: 40px;"><div class="homefeatures-item">
					<div class="homefeatures-img" style="background-image: url(https://www.rosewoodhotels.com/conversations/conversations/wp-content/uploads/2018/04/Rosewood-Conversation-ANASAZI-1.jpg);"></div>
					<a class="dropanchor" target="_blank" href="https://www.rosewoodhotels.com/en/inn-of-the-anasazi-santa-fe"></a>
					<div class="homefeatures-place">
							<h3 class="homefeatures-hotelname">Rosewood Inn of the Anasazi</h3>
							<div class="homefeatures-address">
								<p>Santa Fe, NM</p>
							</div>
						</div>
				</div></div><div class="owl-item active" style="width: 548.5px; margin-right: 40px;"><div class="homefeatures-item">
					<div class="homefeatures-img" style="background-image: url(https://www.rosewoodhotels.com/conversations/conversations/wp-content/uploads/2018/04/Rosewood-Conversation-Phuket.jpg);"></div>
					<a class="dropanchor" target="_blank" href="https://www.rosewoodhotels.com/en/phuket"></a>
					<div class="homefeatures-place">
							<h3 class="homefeatures-hotelname">Rosewood Phuket</h3>
							<div class="homefeatures-address">
								<p>Phuket, Thailand</p>
							</div>
						</div>
				</div></div><div class="owl-item active" style="width: 548.5px; margin-right: 40px;"><div class="homefeatures-item">
					<div class="homefeatures-img" style="background-image: url(https://www.rosewoodhotels.com/conversations/conversations/wp-content/uploads/2018/04/Rosewood-Conversation-Baha-Mar.jpeg);"></div>
					<a class="dropanchor" target="_blank" href="https://www.rosewoodhotels.com/en/baha-mar"></a>
					<div class="homefeatures-place">
							<h3 class="homefeatures-hotelname">Rosewood Baha Mar</h3>
							<div class="homefeatures-address">
								<p>Nassau, The Bahamas</p>
							</div>
						</div>
				</div></div><div class="owl-item" style="width: 548.5px; margin-right: 40px;"><div class="homefeatures-item">
					<div class="homefeatures-img" style="background-image: url(https://www.rosewoodhotels.com/conversations/conversations/wp-content/uploads/2018/04/RW-San-Miguel-de-Allende-Hotel-Entrance-2.jpg);"></div>
					<a class="dropanchor" target="_blank" href="https://www.rosewoodhotels.com/en/san-miguel-de-allende"></a>
					<div class="homefeatures-place">
							<h3 class="homefeatures-hotelname">Rosewood San Miguel de Allende</h3>
							<div class="homefeatures-address">
								<p>San Miguel de Allende</p>
							</div>
						</div>
				</div></div><div class="owl-item" style="width: 548.5px; margin-right: 40px;"><div class="homefeatures-item">
					<div class="homefeatures-img" style="background-image: url(https://www.rosewoodhotels.com/conversations/conversations/wp-content/uploads/2018/04/Rosewood-Conversation-CASTIGLION-DEL-BOSCO.jpg);"></div>
					<a class="dropanchor" target="_blank" href="https://www.rosewoodhotels.com/en/castiglion-del-bosco"></a>
					<div class="homefeatures-place">
							<h3 class="homefeatures-hotelname">Rosewood Castiglion del Bosco</h3>
							<div class="homefeatures-address">
								<p>Tuscany</p>
							</div>
						</div>
				</div></div><div class="owl-item" style="width: 548.5px; margin-right: 40px;"><div class="homefeatures-item">
					<div class="homefeatures-img" style="background-image: url(https://www.rosewoodhotels.com/conversations/conversations/wp-content/uploads/2018/04/Rosewood-Conversation-Jeddah.jpg);"></div>
					<a class="dropanchor" target="_blank" href="https://www.rosewoodhotels.com/en/jeddah"></a>
					<div class="homefeatures-place">
							<h3 class="homefeatures-hotelname">Rosewood Jeddah</h3>
							<div class="homefeatures-address">
								<p>Jeddah, Saudi Arabia</p>
							</div>
						</div>
				</div></div><div class="owl-item" style="width: 548.5px; margin-right: 40px;"><div class="homefeatures-item">
					<div class="homefeatures-img" style="background-image: url(https://www.rosewoodhotels.com/conversations/conversations/wp-content/uploads/2018/04/Rosewood-Conversation-ANASAZI-1.jpg);"></div>
					<a class="dropanchor" target="_blank" href="https://www.rosewoodhotels.com/en/inn-of-the-anasazi-santa-fe"></a>
					<div class="homefeatures-place">
							<h3 class="homefeatures-hotelname">Rosewood Inn of the Anasazi</h3>
							<div class="homefeatures-address">
								<p>Santa Fe, NM</p>
							</div>
						</div>
				</div></div><div class="owl-item cloned" style="width: 548.5px; margin-right: 40px;"><div class="homefeatures-item">
					<div class="homefeatures-img" style="background-image: url(https://www.rosewoodhotels.com/conversations/conversations/wp-content/uploads/2018/04/Rosewood-Conversation-Phuket.jpg);"></div>
					<a class="dropanchor" target="_blank" href="https://www.rosewoodhotels.com/en/phuket"></a>
					<div class="homefeatures-place">
							<h3 class="homefeatures-hotelname">Rosewood Phuket</h3>
							<div class="homefeatures-address">
								<p>Phuket, Thailand</p>
							</div>
						</div>
				</div></div><div class="owl-item cloned" style="width: 548.5px; margin-right: 40px;"><div class="homefeatures-item">
					<div class="homefeatures-img" style="background-image: url(https://www.rosewoodhotels.com/conversations/conversations/wp-content/uploads/2018/04/Rosewood-Conversation-Baha-Mar.jpeg);"></div>
					<a class="dropanchor" target="_blank" href="https://www.rosewoodhotels.com/en/baha-mar"></a>
					<div class="homefeatures-place">
							<h3 class="homefeatures-hotelname">Rosewood Baha Mar</h3>
							<div class="homefeatures-address">
								<p>Nassau, The Bahamas</p>
							</div>
						</div>
				</div></div><div class="owl-item cloned" style="width: 548.5px; margin-right: 40px;"><div class="homefeatures-item">
					<div class="homefeatures-img" style="background-image: url(https://www.rosewoodhotels.com/conversations/conversations/wp-content/uploads/2018/04/RW-San-Miguel-de-Allende-Hotel-Entrance-2.jpg);"></div>
					<a class="dropanchor" target="_blank" href="https://www.rosewoodhotels.com/en/san-miguel-de-allende"></a>
					<div class="homefeatures-place">
							<h3 class="homefeatures-hotelname">Rosewood San Miguel de Allende</h3>
							<div class="homefeatures-address">
								<p>San Miguel de Allende</p>
							</div>
						</div>
				</div></div></div></div><div class="owl-nav disabled"><div class="owl-prev">prev</div><div class="owl-next">next</div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div>

		</div>

	</div>
		<div class="homeform">

		<div class="homeform-response">
			<div class="response">Thank you for signing up!</div>
		</div>

		<div class="homeform-container">

			<div class="homeform-content">
				<div class="table-parent">
				<div class="table-child">
					<h3>Calling all discerning travelers</h3>
					<p>Sign up for the Rosewood Conversations Newsletter to uncover our musings on travel, art, fashion and culture from the legendary personalities who embody the spirit of Rosewood Hotels &amp; Resorts.</p>
				</div>
				</div>
			</div>

			<form id="footer-signup" class="homeform-form" action="//esurvey.cendyn.com/esurvey_cendyn/SocialMediaAction.aspx" target="_blank" method="post" name="frmSurvey">

				<div class="homeform-fieldbox homeform-fieldbox-input">
					<label class="visuallyhidden" for="QID2096">E-mail Address</label>
					<input id="QID2096" name="QID2096" type="text" value="" placeholder="Your Email">
				</div>

				<div class="homeform-fieldbox homeform-fieldbox-submit">
					<input type="submit" value="submit">
				</div>
                 <input type="checkbox" name="privacy" value="" id="agree"><label for="agree">I agree to the <a href="https://www.rosewoodhotels.com/en/privacy-policy" target="_blank">Privacy Policy</a> of Rosewood Hotels and Resorts, L.L.C</label>
				<input name="QID39877" type="hidden" value=""> 
				<input name="IsMemberAgent" type="hidden" value="False"> 
				<input name="IsMemberSurveyPerence" type="hidden" value="False"> 
				<input name="MemberID" type="hidden" value="0"> 
				<input name="SourceCustomer" type="hidden" value="7"> 
				<input name="isCreateProfile" type="hidden" value="True"> 
				<input name="isUpdateProfile" type="hidden" value="False"> 
				<input name="ProfileSurveyID" type="hidden" value="213"> 
				<input name="EmailListID" type="hidden" value="247"> 
				<input name="CompanyID" type="hidden" value="6543"> 
				<input name="AdminOrOwnerEditResponse" type="hidden" value="No"> 
				<input name="AdminOrOwnerResponseID" type="hidden" value="0"> 
				<input name="SurveyID" type="hidden" value="98K16541"> 
				<input name="EmailAddressID" type="hidden" value="0"> 
				<input name="EmailMessageID" type="hidden" value="0"> 
				<input name="EID" type="hidden" value=""> 
				<input name="ResponseType" type="hidden" value="A"> 
				<input name="SurveyComplete" type="hidden" value=""> 
				<input name="DoneClicked" type="hidden" value="0"> 
				<input name="ItemIDValues" type="hidden" value=""> 
				<input name="PostedQueryString" type="hidden" value="key=vXaHfpdCGxlUq1Bo4eG1PkoCBG7FEghY&amp;email=sample@cendyn.com&amp;QuestionOnly=True"> 
				<input name="FirstPageQueryString" type="hidden" value="key=vXaHfpdCGxlUq1Bo4eG1PkoCBG7FEghY&amp;email=sample@cendyn.com&amp;QuestionOnly=True"> 
				<input name="DisplayPageNumber" type="hidden" value="1"> 
				<input name="ResponseStartDate" type="hidden" value=""> 
				<input name="ActualPageNumber" type="hidden" value="1"> 
				<input name="loadSecondTemplate" type="hidden" value="False"> 
				<input name="bypassLogin" type="hidden" value="False"> 
				<input name="hdnUpdatingSurvey" type="hidden" value="false"> 
				<input name="ResponseID" type="hidden" value="0"> 
				<input name="QuestionNumber" type="hidden" value="5"> 
				<input name="SP" type="hidden" value=","> 
				<input name="DisplayHeader" type="hidden" value=""> 
				<input name="TypePoll" type="hidden" value="P">

			</form>

			<div class="clear"></div>

		</div>

	</div>
    </div>
</body>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/conversation/icheck.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/conversation/chosen.jquery.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/conversation/chosen-script.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/conversation/jquery-ias.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/conversation/view.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/conversation/lightbox.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/conversation/jquery.smooth-scroll.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/conversation/jquery.sticky-kit.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/conversation/jquery.touchcarousel-1.2.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/conversation/js.cookie.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/conversation/lazyload.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/conversation/jquery.vide.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/conversation/instafeed.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/conversation/jquery.metadata.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/conversation/execute.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/conversation/wp-embed.min.js'></script></html>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arilewp
 */

// get_header();
// get_template_part('template-parts/site','breadcrumb');
// $page_sidebar_layout = get_post_meta( get_the_ID(), '_sidebar_layout', true );
?>

<!--/Blog & Sidebar-->

<?php
// get_footer();