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
                        <img src="{{ asset('clients/Frame_1.png')  }}" alt="">
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_2.png')  }}" alt="">
                        {{-- <h3>Mission</h3>
                        <p>We will deliver reliable, high quality solutions for
                            the service that we cater to our valued client,
                            always ensuring that integrity, Safety and sustain
                            ability are at the heart of everything we do.</p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_3.png')  }}" alt="">
                        {{-- <h3>Passion</h3>
                        <p>We understand client needs and respond with
                            speed and precision.</p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
            </div>
        </div>
        <div class="row-outer">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_4.png')  }}" alt="">
                        {{-- <h3>Ability</h3>
                        <p>We are differentiated by our 'Can Do' attitude and
                            the ire in our belly.</p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_5.png')  }}" alt="">
                        {{-- <h3>Core Value </h3>
                        <p>To realize our vision and mission,
                            we always turn to the corporate
                            values that we hold dear. We will
                            live and deliver these values with
                            uncompromising commitment
                            to safety and sustainability.</p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_6.png')  }}" alt="">
                        {{-- <h3>Team Work</h3>
                        <p>We can gain from the diversity
                            within our Group by sharing
                            knowledge and resources to
                            achieve individual and collective
                            success</p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
            </div>
        </div>
        <div class="row-outer">
            <div class="row no-gutters" style="justify-content: center">
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_7.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_8.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_9.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.row-outer -->
        <div class="row-outer">
            <div class="row no-gutters" style="justify-content: center">
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_10.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_11.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_12.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.row-outer -->
        <div class="row-outer">
            <div class="row no-gutters" style="justify-content: center">
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_13.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_14.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_15.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.row-outer -->
        <div class="row-outer">
            <div class="row no-gutters" style="justify-content: center">
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_16.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_17.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_18.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.row-outer -->
        <div class="row-outer">
            <div class="row no-gutters" style="justify-content: center">
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_19.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_20.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_21.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.row-outer -->
        <div class="row-outer">
            <div class="row no-gutters" style="justify-content: center">
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_22.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_23.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_24.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.row-outer -->

        <div class="row-outer">
            <div class="row no-gutters" style="justify-content: center">
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_25.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_26.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_27.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.row-outer -->
        <div class="row-outer">
            <div class="row no-gutters" style="justify-content: center">
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_28.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_29.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_30.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.row-outer -->
        <div class="row-outer">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_31.png')  }}" alt="">
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_32.png')  }}" alt="">
                        {{-- <h3>Mission</h3>
                        <p>We will deliver reliable, high quality solutions for
                            the service that we cater to our valued client,
                            always ensuring that integrity, Safety and sustain
                            ability are at the heart of everything we do.</p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_33.png')  }}" alt="">
                        {{-- <h3>Passion</h3>
                        <p>We understand client needs and respond with
                            speed and precision.</p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
            </div>
        </div>
        <div class="row-outer">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_34.png')  }}" alt="">
                        {{-- <h3>Ability</h3>
                        <p>We are differentiated by our 'Can Do' attitude and
                            the ire in our belly.</p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_35.png')  }}" alt="">
                        {{-- <h3>Core Value </h3>
                        <p>To realize our vision and mission,
                            we always turn to the corporate
                            values that we hold dear. We will
                            live and deliver these values with
                            uncompromising commitment
                            to safety and sustainability.</p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_36.png')  }}" alt="">
                        {{-- <h3>Team Work</h3>
                        <p>We can gain from the diversity
                            within our Group by sharing
                            knowledge and resources to
                            achieve individual and collective
                            success</p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
            </div>
        </div>
        <div class="row-outer">
            <div class="row no-gutters" style="justify-content: center">
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_37.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_38.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_39.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.row-outer -->
        <div class="row-outer">
            <div class="row no-gutters" style="justify-content: center">
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_40.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_41.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_42.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.row-outer -->
        <div class="row-outer">
            <div class="row no-gutters" style="justify-content: center">
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_43.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_44.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_45.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.row-outer -->
        <div class="row-outer">
            <div class="row no-gutters" style="justify-content: center">
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_46.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_47.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_48.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.row-outer -->
        <div class="row-outer">
            <div class="row no-gutters" style="justify-content: center">
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_49.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_50.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_51.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.row-outer -->
        <div class="row-outer">
            <div class="row no-gutters" style="justify-content: center">
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_52.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_53.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_54.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.row-outer -->
        <div class="row-outer">
            <div class="row no-gutters" style="justify-content: center">
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_55.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_56.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_57.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.row-outer -->
        <div class="row-outer">
            <div class="row no-gutters" style="justify-content: center">
                <div class="col-lg-6">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_58.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-6">
                    <div class="single-work-process text-center">
                        <img src="{{ asset('clients/Frame_59.png')  }}" alt="">
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    </div><!-- /.single-work-process -->
                </div><!-- /.col-lg-4 -->
                {{-- <div class="col-lg-4"> --}}
                    {{-- <div class="single-work-process text-center"> --}}
                        {{-- <img src="{{ asset('clients/Frame_60.png')  }}" alt=""> --}}
                        {{-- <h3>Performance</h3>
                        <p>We are here to make a valuable
                            deference to our client and we will
                            make it happen against all odds.
                            </p> --}}
                    {{-- </div><!-- /.single-work-process --> --}}
                {{-- </div><!-- /.col-lg-4 --> --}}
            </div><!-- /.row -->
        </div><!-- /.row-outer -->
    </div><!-- /.container -->
</section>

@endsection
