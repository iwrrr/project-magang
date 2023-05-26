@extends('landing-page.template.main')

@section('hero')
    <section id="hero-fullscreen" class="hero-fullscreen d-flex align-items-center">
        <div class="container d-flex flex-column align-items-center position-relative text-center" data-aos="zoom-out">
            <h2>PT. NAUNGAN BERKAH AIRTEKNIKKA</h2>
            <p>Merupakan perusahaan yang berfokus pada lingkungan salah satuya pada pengolahan air limbah dan air bersih
                yang berfokus pada pelayanan Water and Wastewater Treatment, dan Chemical</p>
        </div>
    </section>
@endsection

@section('content')
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients pt-5">
        <div class="container" data-aos="zoom-out">

            <div class="section-header">
                <h3>SIAPA SAJA YANG TELAH MENGGUNAKAN SERVICE DAN PRODUK KAMI</h3>
            </div>

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services py-3">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h3>SERVICES</h3>
            </div>

            <div class="row gy-5">

                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="service-item">
                        <div class="img">
                            <img src="assets/img/services-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-activity"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Industrial Wastewater</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="service-item">
                        <div class="img">
                            <img src="assets/img/services-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-broadcast"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Domestic Wastewater</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="service-item">
                        <div class="img">
                            <img src="assets/img/services-3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-easel"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Recycle Water Treatment</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                    <div class="service-item">
                        <div class="img">
                            <img src="assets/img/services-4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-bounding-box-circles"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Sludge Treatment</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Service Item -->

            </div>

        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container">

            <div class="section-header pb-3">
                <h3>LOKASI KANTOR KAMI</h3>
            </div>

            <div class="row gy-3 gx-lg-5">

                <div class="col-lg-4">

                    <div class="info">

                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Alamat:</h4>
                                <p>NAWUNGAN 1, RT 001 RW 000, KELURAHAN SELOPAMIORO, KECAMATAN IMOGIRI, KABUPATEN
                                    BANTUL, PROVINSI DAERAH ISTIMEWA YOGYAKARTA</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                </div>

                <div class="col-lg-8">

                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.3270200107227!2d110.38192687582581!3d-7.965116479386957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7bab0bb252545b%3A0xbb7bd800fdb0711!2sNawungan%201%20Selopamioro!5e0!3m2!1sid!2sid!4v1683573346549!5m2!1sid!2sid"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div><!-- End Google Maps -->

                </div><!-- End Contact Form -->

            </div>

        </div>
    </section>
    <!-- End Contact Section -->

@endsection
