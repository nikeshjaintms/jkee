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
                        <li class="active"><a href="#all"> All type of Electrical and
                            Instrument project </a></li>
                        <li ><a href="#ourteam">Our Team </a></li>
                        <li><a href="#electrical">Electrical Project</a></li>
                        <li><a href="#instrument">Instrument Project</a></li>
                    </ul><!-- /.service-lists -->
                </div><!-- /.single-service-widget -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-8">
                <div class="single-service-page-content" id="all">
                    {{-- <img src="images/service-single-1-1.jpg" alt="Awesome Image" /> --}}
                    <br>
                    <br>
                    <h3>All type of Electrical and
                        Instrument project </h3>
                    <br>
                    <p>We are the government-approved contractors of all kinds of
                        turnkey projects, electrical maintenance work, HT work & LT work.</p>

                    <div class="d-flex  flex-column flex-wrap">
                        <h4>
                            HT Work:
                        </h4>
                        <p>New transformer, VCB, PCC panels, APFC
                            panels, MCC panels, bus duct installation,
                            4-pole structure, 2-pole structure. Also, we
                            provide services and maintenance work for
                            all these.
                        </p>
                    </div>
                    <div class="d-flex  flex-column flex-wrap">
                        <h4>
                            LT Work:
                        </h4>
                        <p> All types of cable laying, tracing, and
                            termination; motor connection; lighting;
                            pushbutton; switch; rotary switch; all types
                            of pole installation; earthing testing and
                            installation; and electrical service for all
                            these kinds of works
                        </p>
                        <p>We also take annual rate contract (ARC).</p>
                    </div>
                    </ul>
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


                <div class="single-service-page-content" id="ourteam">
                    {{-- <img src="images/service-single-1-1.jpg" alt="Awesome Image" /> --}}
                    <br>
                    <br>
                    <h3>Our Team</h3>
                    <br>
                    <ul>
                        <li>Supervisors</li>
                        <li>Engineers</li>
                        <li>Technicians</li>
                        <li>Workmen</li>
                    </ul>
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

                <div class="single-service-page-content" id="electrical">
                    {{-- <img src="{{ asset('img/lighting.jpg') }}" alt="Awesome Image" /> --}}
                    <br>
                    <br>
                    <h3>Electrical Project</h3>
                    <br>
                    <ul>
                        <li>Cable laying & termination job work</li>
                        <li>All type of transformer and Bus duct installation job.</li>
                        <li>All type plant lighting and earthing commissioning job.</li>
                    </ul>
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

                <div class="single-service-page-content" id="instrument">
                    {{-- <img src="{{ asset('img/htlt.jpg') }}" alt="Awesome Image" /> --}}
                    <br>
                    <br>
                    <h3>Instrument Project</h3>
                    <br>
                    {{-- <p>All types of industrial LED lights FLP</p> --}}
                    <br>
                        <ul>
                            <li>All type cable tray fabrication with laying and cable laying termination job.</li>
                            <li>All type of ss & copper tubing job</li>
                            <li>All type of instrument equimenet termination commissioning job</li>
                        </ul>
                    <!-- /.row -->
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
