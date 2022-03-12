@extends('layouts.front')
@section('content')
    <!-- ======= Works Section ======= -->
    <section class="section site-portfolio">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
                    <h2>Selamat Datang Dihalaman Resmi Kami</h2>
                    <p class="mb-0">Temukan Destinasi Wisata Anda</p>
                </div>
                <div class="col-md-12 col-lg-6 text-start text-lg-end" data-aos="fade-up" data-aos-delay="100">
                    <div id="filters" class="filters">
                        <a href="#" data-filter="*" class="active">All</a>
                        @foreach ($kategori as $data)
                            @if ($data->Wisata->count() > 0)
                                <a href="#" data-filter=".{{ $data->nama }}">{{ $data->nama }}</a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
                @foreach ($wisata as $data)
                    <div class="item {{ $data->kategori->nama }} col-sm-6 col-md-4 col-lg-4 mb-4">
                        <a href="wisata/{{ $data->slug }}" class="item-wrap fancybox">
                            <div class="work-info">
                                <h3>{{ $data->nama_wisata }}</h3>
                                <span>{{ $data->Kategori->nama }}</span><br>
                                <span>{{ $data->alamat }}</span>
                            </div>
                            <img class="img-fluid" src="{{ $data->image() }}" style="width: 416px; height:416px;">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End  Works Section -->

    <!-- ======= Clients Section ======= -->
    <!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section class="section pt-0">
        <div class="container">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial">
                                <img src="{{ asset('tampilan/assets/img/pr_1.jpg') }}" alt="Image"
                                    class="img-fluid">
                                <blockquote>
                                    <p>Situs ini sangat berguna sekali.Ketika saya pertama kali berkunjung ke Bandung saya
                                        bingung akan berlibur kemana,lalu saya menemukan website ini dengan segala macam
                                        wisata ada disana.</p>
                                </blockquote>
                                <p>&mdash; Jean Hicks</p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial">
                                <img src="{{ asset('tampilan/assets/img/pr_2.jpg') }}" alt="Image"
                                    class="img-fluid">
                                <blockquote>
                                    <p>Situs ini sangat berguna sekali.Ketika saya pertama kali berkunjung ke Bandung saya
                                        bingung akan berlibur kemana,lalu saya menemukan website ini dengan segala macam
                                        wisata ada disana.</p>
                                </blockquote>
                                <p>&mdash; Jean Hicks</p>
                            </div>
                        </div>
                    </div> <!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->
@endsection
