@extends('layouts.layout')
@section('content')

<div id="minimal-bootstrap-carousel"
    class="carousel slide carousel-fade slider-content-style-two slider-home-two">
    <ol class="carousel-indicators">
        <li data-target="#minimal-bootstrap-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#minimal-bootstrap-carousel" data-slide-to="1"></li>
        <li data-target="#minimal-bootstrap-carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="carousel-item active slide-1"
            style="background-image: url(images/banner-2-1.jpg);background-position: center left;">
            <div class="carousel-caption">
                <div class="container">
                    <div class="box valign-bottom">
                        <div class="content text-left">
                            <div class="main-content" data-animation="animated fadeInUp">
                                <h3>We are <span>Building</span> the <br> Future and Restoring <br> the Past
                                </h3>
                                <p>There are many variations of passages of lorem ipsum available but the
                                    majority have <br> suffered alteration in some form.</p>
                            </div><!-- /.main-content -->
                            <a href="#" data-animation="animated fadeInDown" class="thm-btn">Discover more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item slide-2"
            style="background-image: url(images/banner-2-2.jpg);background-position: top center;">
            <div class="carousel-caption">
                <div class="container">
                    <div class="box valign-bottom">
                        <div class="content text-left">
                            <div class="main-content" data-animation="animated fadeInUp">
                                <h3>We are <span>Building</span> the <br> Future and Restoring <br> the Past
                                </h3>
                                <p>There are many variations of passages of lorem ipsum available but the
                                    majority have <br> suffered alteration in some form.</p>
                            </div><!-- /.main-content -->
                            <a href="#" data-animation="animated fadeInDown" class="thm-btn">Discover more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Controls -->
    <a class="carousel-control-prev carousel-control-one-prev" href="#minimal-bootstrap-carousel" role="button"
        data-slide="prev">
        <i class="fa fa-arrow-left"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next carousel-control-one-next" href="#minimal-bootstrap-carousel" role="button"
        data-slide="next">
        <i class="fa fa-arrow-right"></i>
        <span class="sr-only">Next</span>
    </a>
</div>

<section class="about-style-three sec-pad-with-content-margin-30">
    <div class="container">
        <div class="sec-title text-center">
            <span class="tag-line">About JKEE Groups</span>
            <h2>We are a pioneer and leading group in the field
                of electrical maintenance and service.
                </h2>
        </div><!-- /.sec-title -->
        <div class="row">
            <div class="col-xl-9 col-lg-12">
                <div class="image-block">
                    <img src="images/plan-1-1.jpg" alt="Awesome Image" />
                </div><!-- /.image-block -->
            </div><!-- /.col-lg-9 -->
            <div class="col-xl-3 col-lg-12">
                <div class="text-block base-color-bg">
                    <h3><a href="#">Find an Authorized Service Provider in your area: </a></h3>
                    <a href="#services" class="more-link">Click Here</a>
                </div><!-- /.text-block -->
            </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
        <div class="row" style="justify-content: space-around;">
            <div class="col-lg-12">
                <div class="single-about-style-three">
                    <p>Welcome to Jay Khodiyar Electrical & Electronics, a trusted name in the field of electrical and electronic solutions. Established with a vision to deliver innovation, quality, and reliability, we proudly serve as both manufacturers and traders of a wide range of electrical and electronic products. With years of experience and a deep understanding of industry standards, we specialize in producing durable, efficient, and cost-effective products that meet the evolving needs of our clients. Our trading division complements our manufacturing strength by offering a curated selection of high-performance products sourced from reputable brands. At Jay Khodiyar, customer satisfaction is at the core of everything we do. We are committed to maintaining excellence in product quality, timely delivery, and after-sales support. Whether you are looking for custom manufacturing solutions or ready-to-use components, we are here to power your progress.</p>
                </div><!-- /.single-about-style-three -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-style-three -->

<section class="sec-pad-with-content-margin-30 gray-bg" id="services">
    <div class="container">
        <div class="sec-title text-center">
            <span class="tag-line">Our Services</span>
            <h2>Industries Served</h2>
        </div><!-- /.sec-title -->
        <div class="row" style="justify-content: space-around;">
            <div class="col-lg-6">
                <div class="single-service-style-two">
                    <div class="image-block">
                        <img src="images/services-2-1.jpg" alt="Awesome Image" />
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <div class="dotted"></div><!-- /.dotted -->
                                </div><!-- /.content -->
                            </div><!-- /.box -->
                        </div><!-- /.overlay -->
                    </div><!-- /.image-block -->
                    <div class="text-block">
                        <div class="icon-block">
                            <i class="facdori-icon-factory-1"></i>
                        </div><!-- /.icon-block -->
                        <h3><a href="service-details.html">Jay Khodiyar
                            Electrical & Electronics</a></h3>
                        <p>Manufacturer and trader</p>
                        <a href="#" class="read-more">Read More</a>
                    </div><!-- /.text-block -->
                </div><!-- /.single-service-style-two -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="single-service-style-two">
                    <div class="image-block">
                        <img src="images/services-2-2.jpg" alt="Awesome Image" />
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <div class="dotted"></div><!-- /.dotted -->
                                </div><!-- /.content -->
                            </div><!-- /.box -->
                        </div><!-- /.overlay -->
                    </div><!-- /.image-block -->
                    <div class="text-block">
                        <div class="icon-block">
                            <i class="facdori-icon-industry"></i>
                        </div><!-- /.icon-block -->
                        <h3><a href="service-details.html">Jay Khodiyar Engineering</a></h3>
                        <p>A government - approved contractor
                            of all turnkey projects and electrical
                            work.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div><!-- /.text-block -->
                </div><!-- /.single-service-style-two -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="single-service-style-two">
                    <div class="image-block">
                        <img src="images/services-2-3.jpg" alt="Awesome Image" />
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <div class="dotted"></div><!-- /.dotted -->
                                </div><!-- /.content -->
                            </div><!-- /.box -->
                        </div><!-- /.overlay -->
                    </div><!-- /.image-block -->
                    <div class="text-block">
                        <div class="icon-block">
                            <i class="facdori-icon-factory-2"></i>
                        </div><!-- /.icon-block -->
                        <h3><a href="service-details.html">Jay Khodiyar Motor Rewinding</a></h3>
                        <p>We do all types of motor and pump
                            rewinding, servicing, and new motor
                            and all motor parts trading.
                            </p>
                        <a href="#" class="read-more">Read More</a>
                    </div><!-- /.text-block -->
                </div><!-- /.single-service-style-two -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.sec-pad-with-content-margin-30 -->

<hr class="style-one" />

<section class="cta-style-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cta-content">
                    <h3>We Provide you the Highest <br> Quality Work that Meets <br> your Expectations</h3>
                    <div class="box-wrapper">
                        <div class="single-cta-content">
                            <i class="facdori-icon-strategy"></i>
                            <h4>Strong <br> Structures</h4>
                        </div><!-- /.single-cta-content -->
                        <div class="single-cta-content">
                            <i class="facdori-icon-training"></i>
                            <h4>Creative <br> & Professional</h4>
                        </div><!-- /.single-cta-content -->
                        <div class="single-cta-content">
                            <i class="facdori-icon-human-resources"></i>
                            <h4>Quality <br> Land Building</h4>
                        </div><!-- /.single-cta-content -->
                    </div><!-- /.box-wrapper -->
                    <a href="{{route('about')}}" class="thm-btn">Our responsibility</a>
                </div><!-- /.cta-content -->
            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.cta-style-one -->

@endsection
