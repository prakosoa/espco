@extends('layouts.front.index')

@section('header')
    <section class="hero">
        <section class="navigation">
            @include('layouts.front.header')
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="hero-content text-center">
                        <h1 style="text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; font-weight: bold;">Esport Coaching Website</h1>
                        <p class="intro"  style="text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; font-weight: bold;">Find Your Esports Coach, Rise Your Skill, and be Esports Pro Player. </p>
                        <a href="{{ url('listcoach') }}" class="btn btn-fill btn-large btn-margin-right" style="font-weight: bold;">Find Coach</a>
                        <!-- <a href="#" class="btn btn-accent btn-large">Learn more</a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="down-arrow floating-arrow"><a href="#"><i class="fa fa-angle-down"></i></a></div>
    </section>
@endsection

@section('content')
    <section class="intro section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                        <span data-icon="&#xe007;" class="icon"></span>
                    </div>
                    <div class="intro-content">
                        <h5>Find Your Coach</h5>
                        <p>Easily customise Sedna to suit your start up, portfolio or product. Take advantage of the layered Sketch file and bring your product to life.</p>
                    </div>
                </div>
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                        <span data-icon="&#xe039;" class="icon"></span>
                    </div>
                    <div class="intro-content">
                        <h5>Increase Your Skill</h5>
                        <p>Designed with modern trends and techniques in mind, Sedna will help your product stand out in an already saturated market.</p>
                    </div>
                </div>
                <div class="col-md-4 intro-feature">
                    <div class="intro-icon">
                        <span data-icon="&#xe023;" class="icon"></span>
                    </div>
                    <div class="intro-content last">
                        <h5>Reach Your Goal</h5>
                        <p>Built using the latest web technologies like html5, css3, and jQuery, rest assured Sedna will look smashing on every device under the sun.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features section-padding" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-7">
                    <div class="feature-list">
                        <h3>Sedna will drive your product forward</h3>
                        <p>Present your product, start up, or portfolio in a beautifully modern way. Turn your visitors in to clients.</p>
                        <ul class="features-stack">
                            <li class="feature-item">
                                <div class="feature-icon">
                                    <span data-icon="&#xe03e;" class="icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h5>Universal & Responsive</h5>
                                    <p>Sedna is universal and will look smashing on any device.</p>
                                </div>
                            </li>
                            <li class="feature-item">
                                <div class="feature-icon">
                                    <span data-icon="&#xe040;" class="icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h5>User Centric Design</h5>
                                    <p>Sedna takes advantage of common design patterns, allowing for a seamless experience for users of all levels.</p>
                                </div>
                            </li>
                            <li class="feature-item">
                                <div class="feature-icon">
                                    <span data-icon="&#xe03c;" class="icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h5>Clean reusable code</h5>
                                    <p>Download and re-use the Sedna open source code for any other project you like.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="device-showcase">
            <div class="devices">
                <div class="ipad-wrap wp1"></div>
                <div class="iphone-wrap wp2"></div>
            </div>
        </div>
        <div class="responsive-feature-img"><img src="img/devices.png" alt="responsive devices"></div>
    </section>
    <section class="features-extra section-padding" id="assets">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="feature-list">
                        <h3>Esports</h3>
                        <p>eSports (also known as electronic sports, esports, e-sports, competitive (video) gaming, professional (video) gaming, or pro gaming) are a form of competition that is facilitated by electronic systems, particularly video games; the input of players and teams as well as the output of the eSports system are mediated by human-computer interfaces.</p>
                        <p>The most common video game genres associated with eSports are real-time strategy, fighting, first-person shooter (FPS), and multiplayer online battle arena (MOBA). Tournaments such as The International, the LoL World Championship, the Evolution Championship Series.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="macbook-wrap wp3"></div>
        <div class="responsive-feature-img"><img src="img/macbook-pro.png" alt="responsive devices"></div>
    </section>
    <section class="hero-strip section-padding">
        <div class="container">
            <div class="col-md-12 text-center">
                <h2>
                    Interested in becoming a coach?
                </h2>
                <p></p>
                <a href="/registerc" class="btn btn-ghost btn-accent btn-large">Register Now!</a>
                <div class="logo-placeholder floating-logo"><img src="img/sketch-logo.png" alt="Sketch Logo"></div>
            </div>
        </div>
    </section>
    <section class="blog-intro section-padding" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Showcase your smashing product with Sedna</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 leftcol">
                    <h5>EXCLUSIVE TO CODROPS</h5>
                    <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 rightcol">
                    <h5>SPREADING PIXELS AROUND THE WORLD</h5>
                    <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </section>
    {{--<section class="blog text-center">--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-4">--}}
                    {{--<article class="blog-post">--}}
                        {{--<figure>--}}
                            {{--<a href="img/blog-img-01.jpg" class="single_image">--}}
                                {{--<div class="blog-img-wrap">--}}
                                    {{--<div class="overlay">--}}
                                        {{--<i class="fa fa-search"></i>--}}
                                    {{--</div>--}}
                                    {{--<img src="img/blog-img-01.jpg" alt="Sedna blog image"/>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                            {{--<figcaption>--}}
                                {{--<h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Product</a></h2>--}}
                                {{--<p><a href="#" class="blog-post-title">Getting started with Sedna <i class="fa fa-angle-right"></i></a></p>--}}
                            {{--</figcaption>--}}
                        {{--</figure>--}}
                    {{--</article>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<article class="blog-post">--}}
                        {{--<figure>--}}
                            {{--<a href="img/blog-img-02.jpg" class="single_image">--}}
                                {{--<div class="blog-img-wrap">--}}
                                    {{--<div class="overlay">--}}
                                        {{--<i class="fa fa-search"></i>--}}
                                    {{--</div>--}}
                                    {{--<img src="img/blog-img-02.jpg" alt="Sedna blog image"/>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                            {{--<figcaption>--}}
                                {{--<h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Technology</a></h2>--}}
                                {{--<p><a href="#" class="blog-post-title">Why IE8 support is deminishing <i class="fa fa-angle-right"></i></a></p>--}}
                            {{--</figcaption>--}}
                        {{--</figure>--}}
                    {{--</article>--}}
                {{--</div>--}}
                {{--<div class="col-md-4">--}}
                    {{--<article class="blog-post">--}}
                        {{--<figure>--}}
                            {{--<a href="img/blog-img-03.jpg" class="single_image">--}}
                                {{--<div class="blog-img-wrap">--}}
                                    {{--<div class="overlay">--}}
                                        {{--<i class="fa fa-search"></i>--}}
                                    {{--</div>--}}
                                    {{--<img src="img/blog-img-03.jpg" class="single_image" alt="Sedna blog image"/>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                            {{--<figcaption>--}}
                                {{--<h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Product</a></h2>--}}
                                {{--<p><a href="#" class="blog-post-title">Sedna tutorial: How to begin your <i class="fa fa-angle-right"></i></a></p>--}}
                            {{--</figcaption>--}}
                        {{--</figure>--}}
                    {{--</article>--}}
                {{--</div>--}}
                {{--<a href="#" class="btn btn-ghost btn-accent btn-small">More news</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- <section class="testimonial-slider section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="avatar"><img src="img/avatar.jpg" alt="Sedna Testimonial Avatar"></div>
                                <h2>"Lorem ipsum dolor sit amet, nullam lucia nisi."</h2>
                                <p class="author">Peter Finlan, Product Designer.</p>
                            </li>
                            <li>
                                <div class="avatar"><img src="img/mani.jpg" alt="Sedna Testimonial Avatar"></div>
                                <h2>"Nunc vel maximus purus. Nullam ac urna ornare."</h2>
                                <p class="author">Manoela Ilic, Founder @ Codrops.</p>
                            </li>
                            <li>
                                <div class="avatar"><img src="img/130.jpg" alt="Sedna Testimonial Avatar"></div>
                                <h2>"Nullam ac urna ornare, ultrices nisl ut, lacinia nisi."</h2>
                                <p class="author">Blaz Robar, Pixel Guru</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section class="sign-up section-padding text-center" id="download">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h3>Get started with Sedna, absolutely free</h3>
                    <p>Grab your copy today, exclusively from Codrops</p>
                    <form class="signup-form" action="#" method="POST" role="form">
                        <div class="form-input-group">
                            <i class="fa fa-envelope"></i><input type="text" class="" placeholder="Enter your email" required>
                        </div>
                        <div class="form-input-group">
                            <i class="fa fa-lock"></i><input type="text" class="" placeholder="Enter your password" required>
                        </div>
                        <button type="submit" class="btn-fill sign-up-btn">Sign up for free</button>
                    </form>
                </div>
            </div>
        </div>
    </section> -->
@endsection


