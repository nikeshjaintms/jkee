@extends('layouts.layout')
@section('content')

<div class="inner-banner text-center">
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <span>Our Services</span>
            </li>
        </ul><!-- /.breadcrumb -->
        <h1>Industrial Construction</h1>
    </div><!-- /.container -->
</div><!-- /.inner-banner -->
<br>

<section class="sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-service-widget">
                    <ul class="service-lists">
                        <li class="active"><a href="#motorrewinding">Motor Rewinding</a></li>
                        <li ><a href="#testequipment">Test Equipment </a></li>
                        <li><a href="#electrical">Electrical Equipment</a></li>
                        <li><a href="#mechanical">Mechanical Equipment</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#types">Types of Motor rewinding </a></li>
                    </ul><!-- /.service-lists -->
                </div><!-- /.single-service-widget -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-8">
                <div class="single-service-page-content" id="motorrewinding">
                    {{-- <img src="images/service-single-1-1.jpg" alt="Awesome Image" /> --}}
                    <br>
                    <br>
                    <h3>Motor Rewinding</h3>
                    <br>
                    <p> We provide all kinds of motor repair services, e.g. overhauling,
                        rewinding, conversion, insulation, reestablishment of all types of
                        heavy and light motors, solid and efficacious breakdown
                        administrations for any make, sort, and size of heavy and small
                        motors.</p>
                    <br>
                    {{-- <div class="row">
                        <div class="col-lg-6">
                            <img src="images/service-single-1-2.jpg" alt="Awesome Image" />
                            <br>
                            <br>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <img src="images/service-single-1-3.jpg" alt="Awesome Image" />
                            <br>
                            <br>
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row --> --}}
                    {{-- <p>Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto
                        beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis
                        gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the ndustry stan when an unknown printer took
                        a galley.</p>
                    <br>
                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen
                        book. It has survived not only five centuries, but also the leap into electronic
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                        release of sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like including versions of.</p>
                    <br>
                    <a href="#" class="thm-btn">Download our brochure</a> --}}
                </div><!-- /.single-service-page-content -->


                <div class="single-service-page-content" id="testequipment">
                    {{-- <img src="images/service-single-1-1.jpg" alt="Awesome Image" /> --}}
                    <br>
                    <br>
                    <h3>Test Equipment</h3>
                    <br>

                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{ asset('img/test.jpg') }}" alt="Awesome Image" />
                            <br>
                            <br>
                        </div><!-- /.col-lg-6 -->
                        {{-- <div class="col-lg-6">
                            <img src="images/service-single-1-3.jpg" alt="Awesome Image" />
                            <br>
                            <br>
                        </div><!-- /.col-lg-6 --> --}}
                    </div><!-- /.row -->
                    {{-- <p>Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto
                        beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis
                        gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the ndustry stan when an unknown printer took
                        a galley.</p>
                    <br>
                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen
                        book. It has survived not only five centuries, but also the leap into electronic
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                        release of sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like including versions of.</p>
                    <br>
                    <a href="#" class="thm-btn">Download our brochure</a> --}}
                </div><!-- /.single-service-page-content -->

                <div class="single-service-page-content" id="electrical">
                    {{-- <img src="{{ asset('img/lighting.jpg') }}" alt="Awesome Image" /> --}}
                    <br>
                    <br>
                    <h3>Electrical Equipment</h3>
                    <br>
                    <p>Clamp meter; megger meter - capacity 5000 Ohms; vibration
                        meter - capacity 180 degree Celsius; temperature gun - capacity
                        200 degree Celsius; all digital data in display panel board.</p>
                    <br>
                    {{-- <div class="row">
                        <div class="col-lg-6">
                            <img src="images/service-single-1-2.jpg" alt="Awesome Image" />
                            <br>
                            <br>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <img src="images/service-single-1-3.jpg" alt="Awesome Image" />
                            <br>
                            <br>
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row --> --}}
                    {{-- <p>Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto
                        beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis
                        gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the ndustry stan when an unknown printer took
                        a galley.</p>
                    <br>
                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen
                        book. It has survived not only five centuries, but also the leap into electronic
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                        release of sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like including versions of.</p>
                    <br>
                    <a href="#" class="thm-btn">Download our brochure</a> --}}
                </div><!-- /.single-service-page-content -->

                <div class="single-service-page-content" id="mechanical">
                    {{-- <img src="{{ asset('img/lighting.jpg') }}" alt="Awesome Image" /> --}}
                    <br>
                    <br>
                    <h3>Mechanical Equipment</h3>
                    <br>
                    <p>Oven capacity - 220 degree Celsius, lathe machine, hydraulic press machine capacity 70 tons, bearing heater, bearing puller
                        capacity 25 tons, bearing fitting tool kit, stand drill machine, rotor
                        balancing, growler.</p>
                    <br>
                    {{-- <div class="row">
                        <div class="col-lg-6">
                            <img src="images/service-single-1-2.jpg" alt="Awesome Image" />
                            <br>
                            <br>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <img src="images/service-single-1-3.jpg" alt="Awesome Image" />
                            <br>
                            <br>
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row --> --}}
                    {{-- <p>Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto
                        beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis
                        gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the ndustry stan when an unknown printer took
                        a galley.</p>
                    <br>
                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen
                        book. It has survived not only five centuries, but also the leap into electronic
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                        release of sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like including versions of.</p>
                    <br>
                    <a href="#" class="thm-btn">Download our brochure</a> --}}
                </div><!-- /.single-service-page-content -->

                <div class="single-service-page-content" id="service">
                    {{-- <img src="{{ asset('img/htlt.jpg') }}" alt="Awesome Image" /> --}}
                    <br>
                    <br>
                    <h3>Service</h3>

                    <br>
                    <p>
                        Service
                        We provide door-to-door solutions for all the industrial induction
                         motor malfunctions, i.e. motor over heating, rotor damage,
                         vibration problem, phase power problem, moisture and water
                         treatment, etc. as the main reasons behind the motor burning and
                         making the life of the motor short. In the case of rewinding job,
                         total replacement Of all stator coils with new copper insulated wire
                         Of the same cage, varnish, baking, reassembling and testing. For
                         motor overhauling and service jobs , it covers complete clearing of
                         motor, stator winding, all spares and revarnishig, baking and
                         moisture proof bectol red coating the vindings, re-insulation of
                         leads, reassembling and complete testing of entire motor with
                         new bearings.</p>
                    {{-- <p>All types of industrial LED lights FLP</p> --}}
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            {{-- <img src="{{ asset('img/htlt.jpg') }}" alt="Awesome Image" /> --}}
                            <br>
                            <br>
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            {{-- <img src="images/service-single-1-3.jpg" alt="Awesome Image" /> --}}
                            <br>
                            <br>
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                    {{-- <p>Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto
                        beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis
                        gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the ndustry stan when an unknown printer took
                        a galley.</p>
                    <br>
                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen
                        book. It has survived not only five centuries, but also the leap into electronic
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                        release of sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like including versions of.</p>
                    <br>
                    <a href="#" class="thm-btn">Download our brochure</a> --}}
                </div><!-- /.single-service-page-content -->

                <div class="single-service-page-content" id="types">
                    {{-- <img src="{{ asset('img/iea.jpg') }}" alt="Awesome Image" /> --}}
                    <br>
                    <br>
                    <h3>Types of Motor rewinding</h3>
                    <br>
                    {{-- <p>All types of industrial LED lights FLP</p> --}}
                    <h4>LT & HT  Motors (AC & DC - FLP and non-FLP)</h4>
                    We have expertise in dealing with motors starting from 0.25 HP to
                    600 HP for motor rewinding. We provide services beginning from
                    testing the motor, cleaning the motor, removing all parts of the
                    motor, servicing the motor, e.g. resistance testing, voltage testing,
                    ampere testing, megger testing, temperature testing, etc. (Note:
                    We deliver the motor only after our all testing and satisfaction).
                    <h4>Pump</h4>
                    All types of cable laying, tracing, and termination; motor
                    connection; lighting; pushbutton; switch; rotary switch; all types of
                    pole installation; earthing testing and installation; and electrical
                    service for all these kinds of works.
                    We also take annual rate contract (ARC)
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            {{-- <img src="{{ asset('img/iea.jpg') }}" alt="Awesome Image" /> --}}
                            <br>
                            <br>
                        </div><!-- /.col-lg-6 -->
                        {{-- <div class="col-lg-6">
                            <img src="images/service-single-1-3.jpg" alt="Awesome Image" />
                            <br>
                            <br>
                        </div><!-- /.col-lg-6 --> --}}
                    </div><!-- /.row -->
                    {{-- <p>Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto
                        beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis
                        gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the ndustry stan when an unknown printer took
                        a galley.</p>
                    <br>
                    <p>When an unknown printer took a galley of type and scrambled it to make a type specimen
                        book. It has survived not only five centuries, but also the leap into electronic
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                        release of sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like including versions of.</p>
                    <br>
                    <a href="#" class="thm-btn">Download our brochure</a> --}}
                </div><!-- /.single-service-page-content -->


            </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<br>
<br>
<br>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Select all menu items
        const menuItems = document.querySelectorAll('.service-lists li a');
        // Select all service content sections
        const serviceSections = document.querySelectorAll('.single-service-page-content');

        // Function to hide all service sections
        function hideAllSections() {
            serviceSections.forEach(section => {
                section.style.display = 'none';
            });
        }

        // Function to remove active class from all menu items
        function removeActiveClasses() {
            menuItems.forEach(item => {
                item.parentElement.classList.remove('active');
            });
        }

        // Initially hide all and show the first one
        hideAllSections();
        if(serviceSections.length > 0) {
            serviceSections[0].style.display = 'block';
        }

        // Add click event listener to each menu link
        menuItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();

                // Get the target id from href (e.g., #hotdip)
                const targetId = this.getAttribute('href').substring(1);

                // Hide all sections
                hideAllSections();

                // Show the targeted section
                const targetSection = document.getElementById(targetId);
                if (targetSection) {
                    targetSection.style.display = 'block';
                }

                // Update active class
                removeActiveClasses();
                this.parentElement.classList.add('active');
            });
        });
    });
</script>
@endsection
