@include( 'templates/header' )

<div class="page-border bottom colors-e background-solid">
    <a href="#top" class="hover-effect">To <span class="highlight">Top</span></a>
</div>
<div class="page-border left colors-e background-solid"></div>
<div class="page-border right colors-e background-solid"></div>

<!-- BEGIN: Top menu -->
<nav class="navbar navbar-default navbar-fixed-top page-transition colors-e background-solid" role="navigation"
     id="top-nav">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="navbar-header">
                    <!--<a class="menu-toggle ext-nav-toggle visible-xs-block" data-target=".ext-nav" href="#"><span></span></a>-->
                    <a class="menu-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" href="#"><span></span></a>

                    <a class="navbar-brand" href=""><img src="/images/logo/Reefside_Logo_tiny.fw.png"
                                                         class="img-responsive"></a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home" class="hover-effect">Home</a>
                        </li>
                        <li><a href="{{route('product.index')}}" class="hover-effect">Express Pickup</a>
                        <li><a href="#about" class="hover-effect">About</a>
                        </li>
                        <li><a href="#membership" class="hover-effect">Membership</a>
                        </li>
                        <li><a href="#contact" class="hover-effect">Contact</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false" class="hover-effect">Menu <span
                                        class="caret"></span></a>
                            <ul style="margin-top: -10px" class="dropdown-menu">
                                <li><a href="https://weedmaps.com/dispensaries/green-acres" target="_blank"
                                       class="hover-effect">Weedmaps</a>
                                </li>
                                <li><a href="https://www.leafly.com/dispensary-info/greenacres" target="_blank"
                                       class="hover-effect">Leafly</a>
                                </li>
                            </ul>
                        </li>
                        <!--						<li><a href="<?= url('list') ?>" class="hover-effect">Store</a></li>
-->

                        <!--						<li><a href="#product_line" class="hover-effect">Product Line</a></li>-->
                        <!--						<li><a href="#medical_use" class="hover-effect">Medical</a></li>-->
                        <!--						<li><a href="https://www.leafly.com/dispensary-info/greenacres/menu"https://weedmaps.com/dispensaries/green-acres-->
                        <!--						<li><a href="https://weedmaps.com/dispensaries/green-acres"-->
                        <!--						       class="hover-effect">Menu</a></li>-->
                        <!--                        <li><a href="#menu" class="hover-effect">Menu</a></li>-->
                        <!--												<li><a href="#process" class="hover-effect">Process</a></li>
                                                                                           <li><a href="#skills" class="hover-effect">Skills</a></li>
                                                                   -->
                        <!--<li class="hidden-xs"><a class="menu-toggle ext-nav-toggle" data-target=".ext-nav" href="#"><span></span></a></li>-->
                    </ul>
                </div>

            </div>
        </div>
</nav>
<ul id="dot-scroll" class="colors-e background-solid"></ul>
<div class="overlay-window gallery-overlay colors-g background-95-g" data-overlay-zoom="#work .content">
    <div class="overlay-control background-90-b">
        <a class="previos" href="#"></a>
        <a class="next" href="#"></a>
        <a class="cross" href="#"></a>
    </div>
    <div class="overlay-view"></div>
    <ul class="loader">
        <li class="background-highlight-e"></li>
        <li class="background-highlight-e"></li>
        <li class="background-highlight-e"></li>
    </ul>
</div>
<div class="overlay-window map-overlay colors-g background-95-g">
    <div class="overlay-control background-20-b">
        <a class="cross" href="#"></a>
    </div>
    <!--36.963044, -121.965857
    36.989218, -121.980522-->
    <div class="overlay-view">
        <div class="map-canvas" data-latitude="36.989218" data-longitude="-121.980522" data-zoom="14">
            <div class="map-marker" data-latitude="36.989218" data-longitude="-121.980522"
                 data-text="Our awesome location"></div>
            <div class="map-marker" data-latitude="36.989218" data-longitude="-121.980522"
                 data-text="Our dispensary"></div>
        </div>
    </div>
</div>
</div>

<div class="gate colors-e background-solid">
    <div class="gate-bar background-heading-e"></div>
    <ul class="loader">
        <li class="background-heading-e"></li>
        <li class="background-heading-e"></li>
        <li class="background-heading-e"></li>
    </ul>
</div>
<style>
    .flex-container {
        display: -webkit-flex;
        display: flex;
        -webkit-flex-direction: column;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;
    }

    .big-font {
        font-size: 17px;
    }

    .lead {
        font-size: 16px;
        /*font-weight: bold;*/
        color: black;
    }

    a:hover {
        text-decoration: underline;
    }

    p span {
        text-transform: uppercase;
    }

    .lead {
        text-align: left;
    }

    .colors-e a,
    a.colors-e,
    .colors-e a:hover,
    .colors-e .highlight {
        color: #00A651;
        font-weight: 600;
    }

    .colors-h .highlight,
    .colors-h.highlight {
        color: #00A651;
    }

    #top-nav.colors-e .navbar-nav a.active {
        color: #00A651;
    }

    h2 {
        font-size: 8em;
        text-transform: none;
        font-weight: normal;
    }
</style>

<section id="home">
    <div class="view">
        <img alt class="bg" src="/images/bg/Conceito1_cut.jpg"/>
        <!--		<img alt class="bg" src="/images/bg/Conceito2.jpg"/>
            <img alt class="bg" src="/images/Conceito3.jpg"/>
                <img alt class="bg" src="/images/medical-marijuana.jpg"/>
        -->
        <div class="content home-lucy colors-c background-20" style="height: 1200px;">
            <div class="container half-height flex-container">

                    <div class="hidden-xs">
                        <h2 style="font-size: 12em;">Welcome</h2>
                    </div>
                    <div class="hidden-lg">
                        <h2 style="font-size: 6em;">Welcome</h2>
                    </div>
                <div>
                    <h2><img class="img-responsive center-block" width="25%"
                             src="/images/logo/reefside green background.png"></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .align-bottom {
        vertical-align: baseline;
        /*margin-bottom: -1px;*/
    }
</style>
<section id="about">
    <div class="view">
        <div class="content full-size colors-e background-solid">
            <div class="container">
                <!--				<h2><img class="img-responsive center-block"  width="33%" src="/images/logo/reefside green background.png"></h2> -->
                <h2>About Us</h2>
                <p>&nbsp;</p>
                <p class="header-details">We are a full-service medical cannabis dispensary in Santa Cruz</p>
                <img class="img-responsive center-block" src="/images/bg/reefside_office_inside.JPG">
                <p>&nbsp;</p>
                <p class="lead"><span class="highlight"><img class="align-bottom"
                                                             src="/images/logo/Reefside Name.14.fw.png"></span> is proud
                    to offer exceptional customer service and high end lab tested products. We stay true to the Santa
                    Cruz community values of kindness and quality. Our staff is knowledgeable and friendly. They are
                    always available to help you in a professional, relaxed, and safe setting.</p>

                <p class="lead">Our members, are the heart and soul of <span class="highlight"><img class="align-bottom"
                                                                                                    src="/images/logo/Reefside Name.14.fw.png"></span>.
                    That’s why we offer you a full-service dispensary stocked with a wide range of the best products we
                    can find.</p>

                <p class="lead">We know you want choices. So we carry top quality flowers, concentrates, edibles,
                    tinctures and topicals.
                </p>

                <p class="lead"><span class="highlight"><img class="align-bottom"
                                                             src="/images/logo/Reefside Name.14.fw.png"></span> is open
                    every day from 8AM to 10PM. We are conveniently located right off the freeway next to Dominican
                    Hospital, and accessible by bike, public transit and car. </p>

                <img class="img-responsive center-block" src="/images/bg/reefside_office_outside.JPG">
                <div class="row">
                    <h2 style="padding: 15px 15px"><span class="highlight">Our</span> Values</h2>
                    <div class="col-md-4">
                        <div class="col-icon">
                            <i class="li_study"></i>
                        </div>
                        <div class="col-content">
                            <h4>trained staff</span></h4>
                            <p class="lead">At <span class="highlight"><img class="align-bottom"
                                                                            src="/images/logo/Reefside Name.14.fw.png"></span>
                                we employ staff that stay true to our values. We are always friendly, compassionate and
                                enthusiastic to educate patients about our medicine. </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-icon">
                            <i class="li_like"></i>
                        </div>
                        <div class="col-content">
                            <h4>top quality</span></h4>
                            <p class="lead"><span class="highlight"><img class="align-bottom"
                                                                         src="/images/logo/Reefside Name.14.fw.png"></span>
                                has won multiple cannabis cups and been featured in High Times carrying
                                <a href="http://hightimes.com/strains/the-strongest-strains-on-earth-2016/">"the most
                                    potent strains on earth”</a> We usually carry multiple cannabis cup winners and
                                strains testing over 30% THC potency.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-icon">
                            <i class="li_banknote"></i>
                        </div>
                        <div class="col-content">
                            <h4>low donations</h4>
                            <p class="lead"><span class="highlight"><img class="align-bottom"
                                                                         src="/images/logo/Reefside Name.14.fw.png"></span>
                                asks the lowest donations for some of the best strains on earth. Come by the shop to see
                                for yourself. We offer ongoing discounts to veterans, seniors and students. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
</section>
<section id="membership">

    <div class="view">
        <div class="content  full-size colors-e background-solid">
            <div class="container">
                <h2>Membership</h2>
                <p>&nbsp;</p>

                <p class="header-details"><span class="highlight"><img class="align-bottom"
                                                                       src="/images/logo/Reefside Name.14.fw.png"></span>
                    -- a full-service medical cannabis dispensary in Santa Cruz</p>
                <p>&nbsp;</p>

                <div class="row">
                    <div class="col-md-6">
                        <div class="col-icon">
                            <i class="li_like"></i>
                        </div>
                        <div class="col-content">
                            <h4>How to become a member</h4>
                            <p class="lead">
                                Easy. Just bring an ID that verifies your CA residency. We accept a government issued ID
                                card, passport, or driver’s license. The only other thing you’ll need is a doctor’s
                                recommendation. That can be a caregiver’s certificate or the paper you received at the
                                doc’s office or a card. That’s it. Once that’s done, we’ll ask you to fill out and sign
                                our new member form that requires you to abide by a few sensible house rules.
                                <br> It’s that easy to become part of the growing
                                <span class="highlight"><img class="align-bottom"
                                                             src="/images/logo/Reefside Name.14.fw.png"></span> family!
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-icon">
                            <i class="li_pen"></i>
                        </div>
                        <div class="col-content">
                            <h4>How to obtain a doctor's recommandation</h4>
                            <p class="lead">You are free to go to any of the Doc’s in CA that write prescriptions for
                                medical cannabis. If you prefer, you could go to your personal Doc. They’ll need to fill
                                out the CDPH form 9044. </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="view">
        <img alt class="bg" src="/images/bg/Conceito3a.jpg"/>
        <!--    <img alt class="bg" src="/images/bg/Conceito2a.jpg"/>
               <img alt class="bg" src="/images/bg/Conceito3a.jpg"/>-->
        <div class="content full-size background-20 colors-h">

            <!--<div class="content home-lucy full-size colors-c background-20">-->
            <div class="container">
                <h2>Contact Us <!--<img class="img-responsive center-block" width="33%"
                         src="/images/logo/reefside green background.png"> --></h2>
                <p>&nbsp;</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center scroll-in-animation" data-animation="fadeInLeft">
                            <p class="big-font uppercase">
                                Tel: <strong>831-475-8420</strong>
                            </p>
                            <p class="big-font uppercase">
                                3110 Mission Drive
                                <br/> Santa Cruz, CA 95065
                            </p>
                            <p class="big-font">
                                <a style="color:white" href="mailto:canna@reefsidehealth.com">canna@reefsidehealth
                                    .com</a>
                            <p>&nbsp;</p>
                            <a class="map-open button background-lite-b border-heading-b heading-b"
                               data-map-overlay=".map-overlay" href="#">Locate Us on Map</a>

                            </p>
                            <p class="big-font">
                                <a target="_blank" href="https://twitter.com/ReefsideHC"><span class="fa-stack"><i
                                                class="fa fa-circle fa-stack-2x heading"></i><i
                                                class="fa fa-twitter fa-stack-1x text-background"></i></span></a>
                                <a target="_blank"
                                   href="https://www.facebook.com/Reefside-Health-Center-1223246351074885/?ref=br_rs"><span
                                            class="fa-stack"><i class="fa fa-circle fa-stack-2x heading"></i><i
                                                class="fa fa-facebook fa-stack-1x text-background"></i></span></a>
                                <a target="_blank" href="https://www.instagram.com/reefside_healthcenter/?hl=en"><span
                                            class="fa-stack"><i
                                                class="fa fa-circle fa-stack-2x heading"></i><i
                                                class="fa fa-instagram fa-stack-1x text-background"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--                <div class="text-center">-->
                <!--                    <a class="map-open button background-lite-b border-heading-b heading-b"-->
                <!--                       data-map-overlay=".map-overlay" href="#">Locate Us on Map</a>-->
                <!--                </div>-->
            </div>
        </div>
    </div>
</section>

<!--
<section id="store">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="http://deliver.reefsidehealth.com/list"></iframe>
    </div>
</section>
-->


@include('templates/footer')
@include('templates/bottom_scripts')