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
                        <li class="active"><a href="#hotdip">HOT DIP Galvanizing Product</a></li>
                        <li ><a href="#cablewire">Cable & Wires </a></li>
                        <li><a href="#lighting">Lighting</a></li>
                        <li><a href="#htlt">HT/LT Power Distribution Switchgear</a></li>
                        <li><a href="#industrial">Industrial Electrical Accessories</a></li>
                        <li><a href="#panels">PANELS</a></li>
                    </ul><!-- /.service-lists -->
                </div><!-- /.single-service-widget -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-8">
                <div class="single-service-page-content" id="hotdip">
                    {{-- <img src="images/service-single-1-1.jpg" alt="Awesome Image" /> --}}
                    <br>
                    <br>
                    <h3>HOT DIP Galvanizing Product</h3>
                    <br>
                    <ul>
                        <li>Cable tray</li>
                        <li>Earthing strip</li>
                        <li>Pole steel light, high must</li>
                        <li>Grating(as customer require)</li>
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


                <div class="single-service-page-content" id="cablewire">
                    {{-- <img src="images/service-single-1-1.jpg" alt="Awesome Image" /> --}}
                    <br>
                    <br>
                    <h3>Cable & Wires</h3>
                    <br>
                    <ul>
                        <li>LT Cables – All Types of Aluminum
                            and Cooper Armoured Cables</li>
                        <li>HT Cables / EHV Wires and Cables</li>
                        <li> House Wire FR/FRLS</li>
                        <li>PVC Insulated Cable</li>
                        <li>Instrument Cable</li>
                        <li> Telephone/LAN Cable</li>
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

                <div class="single-service-page-content" id="lighting">
                    <img src="{{ asset('img/lighting.jpg') }}" alt="Awesome Image" />
                    <br>
                    <br>
                    <h3>Lighting</h3>
                    <br>
                    <p>All types of industrial LED lights FLP</p>
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

                <div class="single-service-page-content" id="htlt">
                    {{-- <img src="{{ asset('img/htlt.jpg') }}" alt="Awesome Image" /> --}}
                    <br>
                    <br>
                    <h3>HT/LT Power Distribution
                        Switchgear</h3>
                    <br>
                    {{-- <p>All types of industrial LED lights FLP</p> --}}
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{ asset('img/htlt.jpg') }}" alt="Awesome Image" />
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

                <div class="single-service-page-content" id="industrial">
                    {{-- <img src="{{ asset('img/iea.jpg') }}" alt="Awesome Image" /> --}}
                    <br>
                    <br>
                    <h3>Industrial Electrical
                        Accessories</h3>
                    <br>
                    {{-- <p>All types of industrial LED lights FLP</p> --}}
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{ asset('img/iea.jpg') }}" alt="Awesome Image" />
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

                <div class="single-service-page-content" id="panels">
                    {{-- <img src="{{ asset('img/iea.jpg') }}" alt="Awesome Image" /> --}}
                    <br>
                    <br>
                    <h3>Panels</h3>
                    <br>

                    <div class="row">
                        <h5>Power Distribution Panel Boards </h5>
                    <br>
                    <ul>
                        <li>PCC Panels</li>
                        <li> MCC Panels</li>
                        <li>APFC/RTPFC Panels</li>
                        <li>IMCC Panels</li>
                        <li>PDB/MLDB Panels</li>
                        <li>AMF/Synchronizing Panels</li>
                        <li>Instrument Panels</li>
                    </ul>

                    </div><!-- /.row -->
                    <div class="row">
                        <h5>HT STRUCTURE ACCESSORY </h5>
                    <br>
                    <div class="col-lg-6">
                        <img src="{{ asset('img/htstructure.jpg') }}" alt="Awesome Image" />
                        <br>
                        <br>
                    </div>

                    </div><!-- /.row -->

                    <div class="row">
                        <h5>FPR Products </h5>
                    <br>
                    <div class="col-lg-6">
                        <ul>
                            <li>Cable Tray</li>
                            <li>FPR Grating</li>
                            <li>FPR Pole</li>
                            <li>Motor Guard</li>
                            <li>Push Button</li>
                        </ul>
                        <br>
                        <br>
                    </div>

                    </div><!-- /.row -->

                    </div><!-- /.row -->
                    {{-- <a href="#" class="thm-btn">Download our brochure</a> --}}
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
