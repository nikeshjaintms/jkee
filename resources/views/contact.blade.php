@extends('layouts.layout')
@section('content')

<div class="inner-banner text-center">
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('home')}}">Home</a>
            </li>
            <li>
                <span>Contact Us</span>
            </li>
        </ul><!-- /.breadcrumb -->
        <h1>Contact Us</h1>
    </div><!-- /.container -->
</div><!-- /.inner-banner -->


<section class="contact-form-wrapper sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="sec-title ">
                    <span class="tag-line">Get in touch with us</span>
                    <h2>You’ve any Question? <br> Feel Free to Contact <br> With us</h2>
                </div><!-- /.sec-title -->
                <div class="single-contact-infos">
                    <h3>Call us for imiditate support on this number</h3>
                    <p>+91 63593 88988 / 95102 04043</p>
                </div><!-- /.single-contact-infos -->
                <div class="single-contact-infos">
                    <h3>Send us email for any kind of inquiry</h3>
                    <p>jkee.marketing@gmail.</p>
                </div><!-- /.single-contact-infos -->
            </div><!-- /.col-lg-5 -->
            <div class="col-lg-7">
                <form action="http://ashik.templatepath.net/facdori-main-html/inc/sendemail.php" class="contact-form-validated contact-form">
                    <input type="text" placeholder="Full Name" name="name">
                    <input type="text" name="email" placeholder="Enter Email Address">
                    <textarea name="message" placeholder="Write Message"></textarea>
                    <button type="submit" class="thm-btn" >Send message</button>
                </form>
            </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-form-wrapper -->
@endsection
