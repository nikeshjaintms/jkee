@extends('layouts.layout')
@section('content')

<div class="inner-banner text-center">
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('home')}}">Home</a>
            </li>
            <li>
                <span>Clients</span>
            </li>
        </ul><!-- /.breadcrumb -->
        <h1>Our Clients</h1>
    </div><!-- /.container -->
</div><!-- /.inner-banner -->


<section class="work-process sec-pad">
    <div class="container">
        <div class="sec-title text-center">
            <span class="tag-line">Our Clients</span>
            <h2>Our Clients</h2>
        </div><!-- /.sec-title -->
        <div class="row-outer">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="clients/frame" alt="">
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <h3>Mission</h3>
                        <p>We will deliver reliable, high quality solutions for
                            the service that we cater to our valued client,
                            always ensuring that integrity, Safety and sustain
                            ability are at the heart of everything we do.</p>
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <h3>Passion</h3>
                        <p>We understand client needs and respond with
                            speed and precision.</p>
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
            </div>
        </div>
        <div class="row-outer">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <h3>Ability</h3>
                        <p>We are differentiated by our 'Can Do' attitude and
                            the ire in our belly.</p>
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <h3>Core Value </h3>
                        <p>To realize our vision and mission,
                            we always turn to the corporate
                            values that we hold dear. We will
                            live and deliver these values with
                            uncompromising commitment
                            to safety and sustainability.</p>
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <h3>Team Work</h3>
                        <p>We can gain from the diversity
                            within our Group by sharing
                            knowledge and resources to
                            achieve individual and collective
                            success</p>
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
            </div>
        </div>
        <div class="row-outer">
            <div class="row no-gutters" style="justify-content: center">
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p>
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.row-outer -->
    </div><!-- /.container -->
</section><!-- /.work-process sec-pad -->

@endsection
