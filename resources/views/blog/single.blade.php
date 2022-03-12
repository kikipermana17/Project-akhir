@extends('layouts.front')
@section('content')
    <section class="section">
        <div class="container">
            <div class="row lg-4 align-items-center">
                <div class="col-xl-6" data-aos="fade-up">
                    <h2>{{ $wisata->nama_wisata }}</h2>
                    <p>{{ $wisata->deskripsi }}</p>
                </div>
            </div>
        </div>

        <div class="site-section pb-0">
            <div class="container">
                <div class="row align-items-stretch">
                    <div class="col-md-8" data-aos="fade-up">
                        <img src="{{ $wisata->image() }}" style="width: 616px; height:616px; alt= " Image
                            class="img-fluid">
                    </div>
                    <div class="col-md-3 ml-auto" data-aos="fade-up" data-aos-delay="100">
                        <div class="sticky-content">
                            <h3 class="h3">Biro Jasa 
                                <br>{{ $wisata->nama_wisata }}</h3>
                            <h3 class="h3">Nama Biro</h3>
                            <p class="mb-4"><span class="text-muted">{{ $wisata->biro->nama }}</span></p>
                            <div class="mb-5">
                                <h3 class="h3">Alamat Biro</h3>
                                <p>{{ $wisata->biro->alamat }}</p>

                            </div>
                            <div class="mb-5">
                                <h3 class="h3">Telpon Biro</h3>
                                <p>{{ $wisata->biro->telpon }}</p>

                            </div>

                            <h4 class="h4 mb-3">Fasilitas</h4>
                            <ul class="list-unstyled list-line mb-5">
                                <li>{{ $wisata->fasilitas }}</li>
                            </ul>


                        </div>
                    </div>
                </div>
            </div>
    </section>


    <!-- ======= Testimonials Section ======= -->
    <!-- <section class="section pt-0">
        <div class="container">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial">
                                <img src="{{ asset('tampilan/assets/img/person_1.jpg') }}" alt="Image"
                                    class="img-fluid">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                                        necessitatibus incidunt ut officiis
                                        explicabo inventore.</p>
                                </blockquote>
                                <p>&mdash; Jean Hicks</p>
                            </div>
                        </div>
                    </div>
                    

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial">
                                <img src="{{ asset('tampilan/assets/img/person_2.jpg') }}" alt="Image"
                                    class="img-fluid">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                                        necessitatibus incidunt ut officiis
                                        explicabo inventore.</p>
                                </blockquote>
                                <p>&mdash; Chris Stanworth</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section> -->
    <!-- End Testimonials Section -->
@endsection
