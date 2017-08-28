<?php
	
	require_once ( "libs/database.class.php" );
	require_once ( "libs/utility.class.php" );
	require_once ( "libs/header.class.php" );
	require_once ( "libs/footer.class.php" );
	
	$db     = new Database();
	$util   = new Utility();
	$header = new Header();
	$footer = new Footer();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php
		$content
			= "maufutsal, marketplace futsal, maufutsal indonesia, reservasi lapangan, turnamen futsal, turnamen, indonesia";
		
		$author     = "Saldinata Bobby Ardani";
		$author_dec = "Maufutsal Developer - 2017";
		$title      = "Maufutsal Indonesia";
		$fav_path   = "images/favicon.png";
		
		$header -> setKeyword ( $content );
		$header -> setAuthorInfo ( $author , $author_dec );
		$header -> setTitle ( $title );
		$header -> setFavicon ( $fav_path );
		
		echo $header -> getTitle ();
		echo $header -> getMetaInformation ();
		echo $header -> getKeyword ();
		echo $header -> getAuthorInfo ();
		echo $header -> getXUACimpatible ();
		echo $header -> getFavicon ();
		echo $header -> getStyleLink ();
		//echo $header -> getWebFont ();
	?>
</head>
<body>

<div class="sportsmagazine-main-wrapper">

    <header id="sportsmagazine-header" class="sportsmagazine-header-one">
<!--        <div class="sportsmagazine-topstrip">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <aside class="col-md-4">-->
<!--                        <ul class="sportsmagazine-social-network">-->
<!--                            <li><a href="#" class="sportsmagazine-colorhover fa fa-facebook-official"></a></li>-->
<!--                            <li><a href="#" class="sportsmagazine-colorhover fa fa-twitter-square"></a></li>-->
<!--                            <li><a href="#" class="sportsmagazine-colorhover fa fa-linkedin-square"></a></li>-->
<!--                            <li><a href="#" class="sportsmagazine-colorhover fa fa-google-plus-square"></a></li>-->
<!--                        </ul>-->
<!--                    </aside>-->
<!--                    <aside class="col-md-8">-->
<!--                        <ul class="sportsmagazine-user-section">-->
<!--                            <li><i class="fa fa-globe"></i> <a href="#">Support</a></li>-->
<!--                            <li><i class="fa fa-dollar"></i> <a href="#">Currency : USD</a></li>-->
<!--                            <li><i class="fa fa-shopping-cart"></i> <a href="#" class="sportsmagazine-open-cart">Cart-->
<!--                                    (0)</a>-->
<!--                                <div class="sportsmagazine-cart-box">-->
<!--                                    <h2>You have 2 items in the cart</h2>-->
<!--                                    <ul>-->
<!--                                        <li>-->
<!--                                            <figure>-->
<!--                                                <a href="#"><img src="extra-images/cartbox-1.png" alt=""></a>-->
<!--                                            </figure>-->
<!--                                            <div class="sportsmagazine-cartbox-text">-->
<!--                                                <h6><a href="#">Key Management Model The 60+ Models</a></h6>-->
<!--                                                <div class="sportsmagazine-rating"><span-->
<!--                                                            class="sportsmagazine-rating-box" style="width:80%"></span>-->
<!--                                                </div>-->
<!--                                                <span class="sportsmagazine-cartbox-price sportsmagazine-color">$35.99 <small>$43.00</small></span>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <figure>-->
<!--                                                <a href="#"><img src="extra-images/cartbox-2.png" alt=""></a>-->
<!--                                            </figure>-->
<!--                                            <div class="sportsmagazine-cartbox-text">-->
<!--                                                <h6><a href="#">Pyramid Principle: Logic Writing &amp; Thinking</a></h6>-->
<!--                                                <div class="sportsmagazine-rating"><span-->
<!--                                                            class="sportsmagazine-rating-box" style="width:100%"></span>-->
<!--                                                </div>-->
<!--                                                <span class="sportsmagazine-cartbox-price sportsmagazine-color">$21.00</span>-->
<!--                                            </div>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                    <h5>Subtotal <span class="sportsmagazine-color">$1343</span></h5>-->
<!--                                    <div class="sportsmagazine-cart-link"><a href="#"-->
<!--                                                                             class="sportsmagazine-cartbox-btn sportsmagazine-bgcolorhover"><i-->
<!--                                                    class="flaticon-tool"></i> Go to Checkout</a></div>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                            <li><i class="fa fa-user"></i> <a href="#" data-toggle="modal" data-target="#loginModal">Login</a>-->
<!--                            </li>-->
<!--                            <li><i class="fa fa-sign-in"></i> <a href="#" data-toggle="modal"-->
<!--                                                                 data-target="#signupModal">Sign Up</a></li>-->
<!--                        </ul>-->
<!--                    </aside>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

        <div class="sportsmagazine-main-header">
            <div class="container">
                <div class="row">
                    <aside class="col-md-2"><a href="index-2.html" class="sportsmagazine-logo"><img
                                    src="images/logo-1.png" alt=""></a></aside>
                    <div class="col-md-10">
                        <div class="sportsmagazine-right-section">
                            <nav class="navbar navbar-default">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target="#navbar-collapse-1" aria-expanded="true">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li><a href="#">Home</a>
                                            <ul class="sportsmagazine-dropdown-menu">
                                                <li><a href="index-2.html">Home One</a></li>
                                                <li><a href="index-two.html">Home Two</a></li>
                                                <li><a href="demo2/index.html">Demo Two</a></li>
                                                <li><a href="darkdemo/index.html">Dark - Version</a></li>
                                                <li><a href="rtl/index.html">RTL - Version</a></li>
                                            </ul>
                                        </li>
                                        <li class="sportsmagazine-megamenu-li active"><a href="#">FEATURES</a>
                                            <ul class="sportsmagazine-megamenu">
                                                <li class="row">
                                                    <div class="col-md-2">
                                                        <h4>Link 1</h4>
                                                        <ul class="sportsmagazine-megalist">
                                                            <li><a href="fixture.html">Fixture List</a></li>
                                                            <li><a href="fixture-wls.html">Fixture List W/L/S</a></li>
                                                            <li><a href="fixture-wrs.html">Fixture List W/R/S</a></li>
                                                            <li><a href="fixtures-dark1.html">Fixtures Classic</a></li>
                                                            <li><a href="fixtures-dark2.html">Fixtures Modren</a></li>
                                                            <li><a href="fixture-detail.html">Fixture Detail</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <h4>Link 2</h4>
                                                        <ul class="sportsmagazine-megalist">
                                                            <li><a href="fixture-detail-wls.html">Fixture Detail
                                                                    W/L/S</a></li>
                                                            <li><a href="gallery.html">Gallery Classic</a></li>
                                                            <li><a href="gallery-wls.html">Gallery Classic W/L/S</a>
                                                            </li>
                                                            <li><a href="gallery-wrs.html">Gallery Classic W/R/S</a>
                                                            </li>
                                                            <li><a href="gallery-modren.html">Gallery Modren</a></li>
                                                            <li><a href="gallery-modren-wls.html">Gallery Modren
                                                                    W/L/S</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <h4>Link 3</h4>
                                                        <ul class="sportsmagazine-megalist">
                                                            <li><a href="gallery-modren-wrs.html">Gallery Modren
                                                                    W/R/S</a></li>
                                                            <li><a href="login-register.html">Login Register</a></li>
                                                            <li><a href="search-result.html">No Search Result</a></li>
                                                            <li><a href="404.html">404 Error Page</a></li>
                                                            <li><a href="faq.html">Faq</a></li>
                                                            <li><a href="contact-us.html">Csontact Us</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a href="#" class="sportsmagazine-thumbnail">
                                                            <img src="extra-images/megamenu-frame.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">PLAYERS</a>
                                            <ul class="sportsmagazine-dropdown-menu">
                                                <li><a href="player-grid.html">Player Grid</a>
                                                    <ul class="sportsmagazine-dropdown-menu">
                                                        <li><a href="player-grid.html">Player Grid W/O/S</a></li>
                                                        <li><a href="player-grid-wls.html">Player Grid W/L/S</a></li>
                                                        <li><a href="player-grid-wrs.html">Player Grid W/R/S</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="player-modren.html">Player Modren</a>
                                                    <ul class="sportsmagazine-dropdown-menu">
                                                        <li><a href="player-modren.html">Player Modren W/O/S</a></li>
                                                        <li><a href="player-modren-wls.html">Player Modren W/L/S</a>
                                                        </li>
                                                        <li><a href="player-modren-wrs.html">Player Modren W/R/S</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="player-list.html">Player List</a></li>
                                                <li><a href="fullstanding.html">Full Standing</a></li>
                                                <li><a href="overview.html">Overview</a></li>
                                                <li><a href="roster.html">Roster</a></li>
                                                <li><a href="player-detail.html">Player Detail</a>
                                                    <ul class="sportsmagazine-dropdown-menu">
                                                        <li><a href="player-detail.html">Player Detail W/L/S</a></li>
                                                        <li><a href="player-detail-wls.html">Player Detail W/R/S</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">OUR NEWS</a>
                                            <ul class="sportsmagazine-dropdown-menu">
                                                <li><a href="blog-grid.html">Blog Grid</a>
                                                    <ul class="sportsmagazine-dropdown-menu">
                                                        <li><a href="blog-grid.html">Blog Grid W/O/S</a></li>
                                                        <li><a href="blog-grid-wls.html">Blog Grid W/L/S</a></li>
                                                        <li><a href="blog-grid-wrs.html">Blog Grid W/R/S</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-large.html">Blog Large</a></li>
                                                <li><a href="blog-large-wls.html">Blog Large W/L/S</a></li>
                                                <li><a href="blog-medium.html">Blog Medium</a></li>
                                                <li><a href="blog-modren.html">Blog Modren</a>
                                                    <ul class="sportsmagazine-dropdown-menu">
                                                        <li><a href="blog-modren.html">Blog Modren W/O/S</a></li>
                                                        <li><a href="blog-modren-wls.html">Blog Modren W/L/S</a></li>
                                                        <li><a href="blog-modren-wrs.html">Blog Modren W/R/S</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-detail.html">Blog Detail</a>
                                                    <ul class="sportsmagazine-dropdown-menu">
                                                        <li><a href="blog-detail.html">Blog Detail W/R/S</a></li>
                                                        <li><a href="blog-detail-wls.html">Blog Detail W/L/S</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">OUR SHOP</a>
                                            <ul class="sportsmagazine-dropdown-menu">
                                                <li><a href="shop-grid.html">Shop Grid</a>
                                                    <ul class="sportsmagazine-dropdown-menu">
                                                        <li><a href="shop-grid.html">Shop Grid W/O/S</a></li>
                                                        <li><a href="shop-grid-wls.html">Shop Grid W/L/S</a></li>
                                                        <li><a href="shop-grid-wrs.html">Shop Grid W/R/S</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop-list.html">Shop List</a></li>
                                                <li><a href="shop-list-wls.html">Shop List W/L/S</a></li>
                                                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                <li><a href="wishlist.html">WishList</a></li>
                                                <li><a href="account.html">Account</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="shop-detail.html">Shop Detail</a>
                                                    <ul class="sportsmagazine-dropdown-menu">
                                                        <li><a href="shop-detail.html">Shop Detail W/R/S</a></li>
                                                        <li><a href="shop-detail-wls.html">Shop Detail W/L/S</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="sportsmagazine-megamenu-li"><a href="#">Contact us</a>
                                            <ul class="sportsmagazine-megamenu">
                                                <li class="row">
                                                    <div class="col-md-2">
                                                        <h4>Links 1</h4>
                                                        <ul class="sportsmagazine-megalist">
                                                            <li><a href="404.html">404 Error Page</a></li>
                                                            <li><a href="faq.html">Faq</a></li>
                                                            <li><a href="login-register.html">Login Register</a></li>
                                                            <li><a href="search-result.html">Search Result</a></li>
                                                            <li><a href="contact-us.html">Contact Us</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <h4>Player text</h4>
                                                        <div class="sportsmagazine-mega-text">
                                                            <p>Your work is going to fill a large part of your life, and
                                                                the only way to be truly satisfied is to do what you
                                                                believe is great work. And the only way to do great work
                                                                is to love.</p>
                                                            <p>If you haven't found it yet, keep looking. Don't settle.
                                                                As with all matters of the heart, you'll know when you
                                                                find it.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <h4>sub category widget</h4>
                                                        <a href="#" class="sportsmagazine-thumbnail">
                                                            <img src="extra-images/mega-menuadd.jpg" alt=""/>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <a data-toggle="modal" data-target="#searchModal" href="#"
                               class="sportsmagazine-search-btn sportsmagazine-colorhover"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--// Header \\-->

    <!--// SubHeader \\-->
    <div class="sportsmagazine-subheader">
        <span class="subheader-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Fixtures</h1>
                </div>
                <div class="col-md-12">
                    <ul class="sportsmagazine-breadcrumb">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Fixtures</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--// SubHeader \\-->

    <!--// Main Content \\-->
    <div class="sportsmagazine-main-content">

        <!--// Main Section \\-->
        <div class="sportsmagazine-main-section sportsmagazine-fixture-listfull">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="sportsmagazine-fixture sportsmagazine-fixture-list">
                            <ul class="row">
                                <li class="col-md-12">
                                    <div class="sportsmagazine-fixture-wrap">
                                        <div class="sportsmagazine-teams-match">
                                            <div class="sportsmagazine-first-team">
                                                <figure><img src="extra-images/team-match-img1.png" alt=""></figure>
                                                <div class="sportsmagazine-first-team-info">
                                                    <h6><a href="404.html">Yorkshire</a></h6>
                                                    <span>Bepop Institute</span>
                                                </div>
                                            </div>
                                            <div class="sportsmagazine-match-view">
                                                <h5>Pool Match # 1</h5>
                                                <span>VS</span>
                                            </div>
                                            <div class="sportsmagazine-second-team">
                                                <figure><img src="extra-images/team-match-img2.png" alt=""></figure>
                                                <div class="sportsmagazine-second-team-info">
                                                    <h6><a href="404.html">Sharks Club</a></h6>
                                                    <span>Marine College</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sportsmagazine-buy-ticket">
                                            <div class="sportsmagazine-buy-ticket-text">
                                                <h5>Country Durham, UK</h5>
                                                <time datetime="2008-02-14 20:00">August 21st, 2017
                                                    <span>@ 9:00 PM</span></time>
                                            </div>
                                            <a href="404.html" class="ticket-buy-btn">Buy Ticket</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-12">
                                    <div class="sportsmagazine-fixture-wrap">
                                        <div class="sportsmagazine-teams-match">
                                            <div class="sportsmagazine-first-team">
                                                <figure><img src="extra-images/team-match-img3.png" alt=""></figure>
                                                <div class="sportsmagazine-first-team-info">
                                                    <h6><a href="404.html">Yorkshire</a></h6>
                                                    <span>Bepop Institute</span>
                                                </div>
                                            </div>
                                            <div class="sportsmagazine-match-view">
                                                <h5>Pool Match # 2</h5>
                                                <span>VS</span>
                                            </div>
                                            <div class="sportsmagazine-second-team">
                                                <figure><img src="extra-images/team-match-img4.png" alt=""></figure>
                                                <div class="sportsmagazine-second-team-info">
                                                    <h6><a href="404.html">Sharks Club</a></h6>
                                                    <span>Marine College</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sportsmagazine-buy-ticket">
                                            <div class="sportsmagazine-buy-ticket-text">
                                                <h5>Country Durham, UK</h5>
                                                <time datetime="2008-02-14 20:00">August 21st, 2017
                                                    <span>@ 9:00 PM</span></time>
                                            </div>
                                            <a href="404.html" class="ticket-buy-btn">Buy Ticket</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-12">
                                    <div class="sportsmagazine-fixture-wrap">
                                        <div class="sportsmagazine-teams-match">
                                            <div class="sportsmagazine-first-team">
                                                <figure><img src="extra-images/team-match-img2.png" alt=""></figure>
                                                <div class="sportsmagazine-first-team-info">
                                                    <h6><a href="404.html">Yorkshire</a></h6>
                                                    <span>Bepop Institute</span>
                                                </div>
                                            </div>
                                            <div class="sportsmagazine-match-view">
                                                <h5>Pool Match # 3</h5>
                                                <span>VS</span>
                                            </div>
                                            <div class="sportsmagazine-second-team">
                                                <figure><img src="extra-images/team-match-img3.png" alt=""></figure>
                                                <div class="sportsmagazine-second-team-info">
                                                    <h6><a href="404.html">Sharks Club</a></h6>
                                                    <span>Marine College</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sportsmagazine-buy-ticket">
                                            <div class="sportsmagazine-buy-ticket-text">
                                                <h5>Country Durham, UK</h5>
                                                <time datetime="2008-02-14 20:00">August 21st, 2017
                                                    <span>@ 9:00 PM</span></time>
                                            </div>
                                            <a href="404.html" class="ticket-buy-btn">Buy Ticket</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-12">
                                    <div class="sportsmagazine-fixture-wrap">
                                        <div class="sportsmagazine-teams-match">
                                            <div class="sportsmagazine-first-team">
                                                <figure><img src="extra-images/team-match-img4.png" alt=""></figure>
                                                <div class="sportsmagazine-first-team-info">
                                                    <h6><a href="404.html">Yorkshire</a></h6>
                                                    <span>Bepop Institute</span>
                                                </div>
                                            </div>
                                            <div class="sportsmagazine-match-view">
                                                <h5>Pool Match # 4</h5>
                                                <span>VS</span>
                                            </div>
                                            <div class="sportsmagazine-second-team">
                                                <figure><img src="extra-images/team-match-img1.png" alt=""></figure>
                                                <div class="sportsmagazine-second-team-info">
                                                    <h6><a href="404.html">Sharks Club</a></h6>
                                                    <span>Marine College</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sportsmagazine-buy-ticket">
                                            <div class="sportsmagazine-buy-ticket-text">
                                                <h5>Country Durham, UK</h5>
                                                <time datetime="2008-02-14 20:00">August 21st, 2017
                                                    <span>@ 9:00 PM</span></time>
                                            </div>
                                            <a href="404.html" class="ticket-buy-btn">Buy Ticket</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-12">
                                    <div class="sportsmagazine-fixture-wrap">
                                        <div class="sportsmagazine-teams-match">
                                            <div class="sportsmagazine-first-team">
                                                <figure><img src="extra-images/team-match-img3.png" alt=""></figure>
                                                <div class="sportsmagazine-first-team-info">
                                                    <h6><a href="404.html">Yorkshire</a></h6>
                                                    <span>Bepop Institute</span>
                                                </div>
                                            </div>
                                            <div class="sportsmagazine-match-view">
                                                <h5>Pool Match # 5</h5>
                                                <span>VS</span>
                                            </div>
                                            <div class="sportsmagazine-second-team">
                                                <figure><img src="extra-images/team-match-img2.png" alt=""></figure>
                                                <div class="sportsmagazine-second-team-info">
                                                    <h6><a href="404.html">Sharks Club</a></h6>
                                                    <span>Marine College</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sportsmagazine-buy-ticket">
                                            <div class="sportsmagazine-buy-ticket-text">
                                                <h5>Country Durham, UK</h5>
                                                <time datetime="2008-02-14 20:00">August 21st, 2017
                                                    <span>@ 9:00 PM</span></time>
                                            </div>
                                            <a href="404.html" class="ticket-buy-btn">Buy Ticket</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-12">
                                    <div class="sportsmagazine-fixture-wrap">
                                        <div class="sportsmagazine-teams-match">
                                            <div class="sportsmagazine-first-team">
                                                <figure><img src="extra-images/team-match-img4.png" alt=""></figure>
                                                <div class="sportsmagazine-first-team-info">
                                                    <h6><a href="404.html">Yorkshire</a></h6>
                                                    <span>Bepop Institute</span>
                                                </div>
                                            </div>
                                            <div class="sportsmagazine-match-view">
                                                <h5>Pool Match # 6</h5>
                                                <span>VS</span>
                                            </div>
                                            <div class="sportsmagazine-second-team">
                                                <figure><img src="extra-images/team-match-img3.png" alt=""></figure>
                                                <div class="sportsmagazine-second-team-info">
                                                    <h6><a href="404.html">Sharks Club</a></h6>
                                                    <span>Marine College</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sportsmagazine-buy-ticket">
                                            <div class="sportsmagazine-buy-ticket-text">
                                                <h5>Country Durham, UK</h5>
                                                <time datetime="2008-02-14 20:00">August 21st, 2017
                                                    <span>@ 9:00 PM</span></time>
                                            </div>
                                            <a href="404.html" class="ticket-buy-btn">Buy Ticket</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-12">
                                    <div class="sportsmagazine-fixture-wrap">
                                        <div class="sportsmagazine-teams-match">
                                            <div class="sportsmagazine-first-team">
                                                <figure><img src="extra-images/team-match-img1.png" alt=""></figure>
                                                <div class="sportsmagazine-first-team-info">
                                                    <h6><a href="404.html">Yorkshire</a></h6>
                                                    <span>Bepop Institute</span>
                                                </div>
                                            </div>
                                            <div class="sportsmagazine-match-view">
                                                <h5>Pool Match # 7</h5>
                                                <span>VS</span>
                                            </div>
                                            <div class="sportsmagazine-second-team">
                                                <figure><img src="extra-images/team-match-img2.png" alt=""></figure>
                                                <div class="sportsmagazine-second-team-info">
                                                    <h6><a href="404.html">Sharks Club</a></h6>
                                                    <span>Marine College</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sportsmagazine-buy-ticket">
                                            <div class="sportsmagazine-buy-ticket-text">
                                                <h5>Country Durham, UK</h5>
                                                <time datetime="2008-02-14 20:00">August 21st, 2017
                                                    <span>@ 9:00 PM</span></time>
                                            </div>
                                            <a href="404.html" class="ticket-buy-btn">Buy Ticket</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-12">
                                    <div class="sportsmagazine-fixture-wrap">
                                        <div class="sportsmagazine-teams-match">
                                            <div class="sportsmagazine-first-team">
                                                <figure><img src="extra-images/team-match-img2.png" alt=""></figure>
                                                <div class="sportsmagazine-first-team-info">
                                                    <h6><a href="404.html">Yorkshire</a></h6>
                                                    <span>Bepop Institute</span>
                                                </div>
                                            </div>
                                            <div class="sportsmagazine-match-view">
                                                <h5>Pool Match # 8</h5>
                                                <span>VS</span>
                                            </div>
                                            <div class="sportsmagazine-second-team">
                                                <figure><img src="extra-images/team-match-img1.png" alt=""></figure>
                                                <div class="sportsmagazine-second-team-info">
                                                    <h6><a href="404.html">Sharks Club</a></h6>
                                                    <span>Marine College</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sportsmagazine-buy-ticket">
                                            <div class="sportsmagazine-buy-ticket-text">
                                                <h5>Country Durham, UK</h5>
                                                <time datetime="2008-02-14 20:00">August 21st, 2017
                                                    <span>@ 9:00 PM</span></time>
                                            </div>
                                            <a href="404.html" class="ticket-buy-btn">Buy Ticket</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--// Pagination \\-->
                        <div class="sportsmagazine-pagination">
                            <ul class="page-numbers">
                                <li><a class="previous page-numbers" href="404.html"><span aria-label="Next"><i
                                                    class="fa fa-angle-left"></i></span></a></li>
                                <li><span class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="404.html">2</a></li>
                                <li><a class="page-numbers" href="404.html">3</a></li>
                                <li><a class="page-numbers" href="404.html">4</a></li>
                                <li><a class="next page-numbers" href="404.html"><span aria-label="Next"><i
                                                    class="fa fa-angle-right"></i></span></a></li>
                            </ul>
                        </div>
                        <!--// Pagination \\-->
                    </div>


                </div>
            </div>
        </div>
    </div>
    
    <?php require_once ("components/footer.php") ?>

    <div class="clearfix"></div>
</div>

<!-- SearchModal -->
<div class="searchmodal modal fade" id="searchModal" tabindex="-1" role="dialog">
    <a href="#" data-dismiss="modal" class="sportsmagazine-modal-close"><i class="icon-uniF106"></i></a>
    <div class="modal-dialog" role="document">
        <div class="container">
            <div class="row">
                <form class="sportsmagazine-search-box">
                    <input type="text" value="Search Your Keyword"
                           onblur="if(this.value == '') { this.value ='Search Your Keyword' }"
                           onfocus="if(this.value =='Search Your Keyword') { this.value = '' }">
                    <input type="submit" value="">
                    <i class="fa fa-search"></i>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- LoginModal -->
<div class="loginmodal modal fade" id="loginModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="sportsmagazine-login-box">
            <a href="#" data-dismiss="modal" class="sportsmagazine-login-close sportsmagazine-color"><i
                        class="icon-uniF106"></i></a>
            <h4>Login To Your Account</h4>
            <form>
                <input type="text" value="Enter username*"
                       onblur="if(this.value == '') { this.value ='Enter username*' }"
                       onfocus="if(this.value =='Enter username*') { this.value = '' }">
                <input type="password" value="Password*" onblur="if(this.value == '') { this.value ='Password*' }"
                       onfocus="if(this.value =='Password*') { this.value = '' }">
                <a href="#" class="sportsmagazine-colorhover">Forget Password?</a>
                <div class="clearfix"></div>
                <label><input type="submit" value="Sign In"
                              class="sportsmagazine-bordercolor sportsmagazine-color"></label>
            </form>
            <h4>Try Our Socials Also</h4>
            <ul class="login-network">
                <li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                <li class="sportsmagazine-twitter"><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                <li class="sportsmagazine-google-plus"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a>
                </li>
            </ul>
            <p>Not A Member Yet ? <a href="#" class="sportsmagazine-color">Sign - Up Now !</a></p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<!-- SignupModal -->
<div class="loginmodal modal fade" id="signupModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="sportsmagazine-login-box">
            <a href="#" data-dismiss="modal" class="sportsmagazine-login-close sportsmagazine-color"><i
                        class="icon-uniF106"></i></a>
            <h4>Sign Up Now</h4>
            <form>
                <input type="text" value="Enter username*"
                       onblur="if(this.value == '') { this.value ='Enter username*' }"
                       onfocus="if(this.value =='Enter username*') { this.value = '' }">
                <input type="text" value="Type your password*"
                       onblur="if(this.value == '') { this.value ='Type your password*' }"
                       onfocus="if(this.value =='Type your password*') { this.value = '' }">
                <input type="text" value="Confirm your password*"
                       onblur="if(this.value == '') { this.value ='Confirm your password*' }"
                       onfocus="if(this.value =='Confirm your password*') { this.value = '' }">
                <a href="#" class="sportsmagazine-colorhover">Forget Password?</a>
                <div class="clearfix"></div>
                <label><input type="submit" value="Sign Up"
                              class="sportsmagazine-bordercolor sportsmagazine-color"></label>
            </form>
            <h4>Try Our Socials Also</h4>
            <ul class="login-network">
                <li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                <li class="sportsmagazine-twitter"><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                <li class="sportsmagazine-google-plus"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a>
                </li>
            </ul>
            <p>Not A Member Yet ? <a href="#" class="sportsmagazine-color">Login - Now !</a></p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<?php echo $footer -> getAllScript (); ?>

</body>
</html>