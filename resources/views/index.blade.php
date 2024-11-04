@extends('layout')
@section('content')
    <main id="content" role="main">
        <!-- Hero -->
        <div class="container content-space-t-4 content-space-t-lg-5 content-space-b-2 content-space-b-lg-3">
            <div class="row justify-content-lg-between align-items-lg-center mb-10">
                <div class="col-md-6 col-lg-5">
                    <!-- Heading -->
                    <div class="mb-5">
                        <h1>{{ $konfigurasi->title }}</h1>
                        <p>{{ $konfigurasi->description }}</p>
                    </div>


                    <!-- End Title & Description -->

                    <div class="d-grid d-sm-flex gap-3">
                        <a class="btn btn-primary btn-transition" href="{{ route('gridCourse') }}">Get started</a>
                        <a class="btn btn-link" href="#">Let's Talk <i class="bi-chevron-right small ms-1"></i></a>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-sm-7 col-md-6 d-none d-md-block">
                    <img class="img-fluid" src="{{ asset('/storage/' . $konfigurasi->image) }}" alt="Image Description">
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->

         <!-- Mitra -->
<!-- Mitra -->
<div class="js-swiper-hero-clients swiper text-center">
    <div class="swiper-wrapper">
        <!-- Looping semua data mitra -->
        @foreach ($mitra as $mitras)
            <div class="swiper-slide text-center">
                <img src="{{ asset('storage/' . $mitras->image) }}" alt="Logo" class="img-fluid"
                    style="max-width: 100px; max-height: 100px;">
            </div>
        @endforeach
    </div>
</div>
<!-- End Swiper Slider -->

<!-- Memberikan sedikit space di sini -->
<div id="featuresSection" class="container content-space-t-2 content-space-b-md-2 content-space-lg-3 mt-3"> <!-- Menggunakan mt-3 untuk memberi space -->
    <!-- Heading -->
    <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <h2 class="h1">{{ $benefit->first()->title }}</h2> <!-- Mengambil caption dari item pertama -->
        <p>{{ $benefit->first()->caption }}</p> <!-- Mengambil caption dari item pertama -->
    </div>
    <!-- End Heading -->

    <div class="row gx-3">
        @foreach ($benefit as $benefits)
            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0"> <!-- Setiap kartu dalam kolom -->
                <!-- Card -->
                <a class="card card-sm card-transition h-100" href="{{ route('about') }}">
                    <div class="card-body">
                        <span class="svg-icon text-primary mb-3 d-block text-start">
                            <img src="{{ asset('storage/' . $benefits->icon) }}" alt="icon" width="64" height="64" class="me-2">
                        </span>
                        <h4 class="card-title">{{ $benefits->title_benefit }}</h4>
                        <p class="card-text text-body">{{ $benefits->description }}</p>
                    </div>
                    <div class="card-footer pt-0">
                        <span class="card-link">Selengkapnya <i class="bi-chevron-right small ms-1"></i></span>
                    </div>
                </a>
                <!-- End Card -->
            </div>
        @endforeach
    </div>
</div>
<!-- End Row -->

<!-- End Row -->

            <!-- Browser Device -->
          
       
        <!-- End Feature Nav -->

        <!-- Features Nav -->
        <div class="container content-space-2 content-space-lg-3">
            <div class="row align-items-lg-center">
                <div class="col-lg-5 mb-7 mb-lg-0">
                    <!-- Heading -->
                    <div class="mb-5">
                        <h2>Dedicated app development platform</h2>
                        <p>From open source to premium services, Front makes app creation lightning fast.</p>
                    </div>
                    <!-- End Heading -->

                    <div class="row mb-4">
                        <div class="col-6">
                            <!-- List Checked -->
                            <ul class="list-checked list-checked-success mb-0">
                                <li class="list-checked-item">Mobile devs</li>
                                <li class="list-checked-item">App builder</li>
                                <li class="list-checked-item">Subscriptions <span
                                        class="badge bg-primary rounded-pill ms-1">Beta</span></li>
                                <li class="list-checked-item">Integrations</li>
                            </ul>
                            <!-- End List Checked -->
                        </div>
                        <!-- End Col -->

                        <div class="col-6">
                            <!-- List Checked -->
                            <ul class="list-checked list-checked-success mb-0">
                                <li class="list-checked-item">Reporting</li>
                                <li class="list-checked-item">Dashboard</li>
                                <li class="list-checked-item">Feedback</li>
                            </ul>
                            <!-- End List Checked -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->

                    <a class="link" href="#">Full API reference <i class="bi-chevron-right small ms-1"></i></a>
                </div>
                <!-- End Col -->

                <div class="col-lg-7">
                    <!-- Card -->
                    <div class="card bg-dark" style="min-height: 27rem;">
                        <div class="card-body">
                            <!-- Nav Scroller -->
                            <div class="js-nav-scroller hs-nav-scroller-horizontal hs-nav-scroller-light">
                                <span class="hs-nav-scroller-arrow-prev" style="display: none;">
                                    <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                                        <i class="bi-chevron-left"></i>
                                    </a>
                                </span>

                                <span class="hs-nav-scroller-arrow-next" style="display: none;">
                                    <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                                        <i class="bi-chevron-right"></i>
                                    </a>
                                </span>

                                <div class="text-center">
                                    <!-- Nav Pills -->
                                    <ul class="nav nav-sm nav-pills nav-light nav-justified mb-5" id="featuresCodingTab"
                                        role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" href="#featuresCodingOne"
                                                id="featuresCodingOne-tab" data-bs-toggle="tab"
                                                data-bs-target="#featuresCodingOne" role="tab"
                                                aria-controls="featuresCodingOne" aria-selected="true">JS</a>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" href="#featuresCodingTwo" id="featuresCodingTwo-tab"
                                                data-bs-toggle="tab" data-bs-target="#featuresCodingTwo" role="tab"
                                                aria-controls="featuresCodingTwo" aria-selected="false">PHP</a>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" href="#featuresCodingThree" id="featuresCodingThree-tab"
                                                data-bs-toggle="tab" data-bs-target="#featuresCodingThree" role="tab"
                                                aria-controls="featuresCodingThree" aria-selected="false">Ruby</a>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" href="#featuresCodingFour" id="featuresCodingFour-tab"
                                                data-bs-toggle="tab" data-bs-target="#featuresCodingFour" role="tab"
                                                aria-controls="featuresCodingFour" aria-selected="false">C++</a>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" href="#featuresCodingFive" id="featuresCodingFive-tab"
                                                data-bs-toggle="tab" data-bs-target="#featuresCodingFive" role="tab"
                                                aria-controls="featuresCodingFive" aria-selected="false">Python</a>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" href="#featuresCodingSix" id="featuresCodingSix-tab"
                                                data-bs-toggle="tab" data-bs-target="#featuresCodingSix" role="tab"
                                                aria-controls="featuresCodingSix" aria-selected="false">Java</a>
                                        </li>
                                    </ul>
                                    <!-- End Nav Pills -->
                                </div>
                            </div>
                            <!-- End Nav Scroller -->

                            <!-- Tab Content -->
                            <div class="tab-content" id="featuresCodingTabContent">
                                <div class="tab-pane fade show active" id="featuresCodingOne" role="tabpanel"
                                    aria-labelledby="featuresCodingOne-tab">
                                    <!-- Code -->
                                    <div class="text-monospace">
                                        <div class="mb-4">
                                            <span class="text-danger pe-2">public class</span>
                                            <span class="text-white-70">AppInheritanceTest {</span>
                                        </div>
                                        <div class="ps-3 mb-1">
                                            <span class="text-danger pe-2">public static void</span>
                                            <span class="text-white-70">main(String[] args) {</span>
                                        </div>
                                        <div class="ps-6 mb-4">
                                            <span class="text-white-70">Front</span>
                                            <span class="text-danger">front</span>
                                            <span class="text-white-70">=</span>
                                            <span class="text-danger">new</span>
                                            <span class="text-white-70">Front(</span><span
                                                class="text-danger">true</span><span class="text-white-70">,</span>
                                            <span class="text-primary">"theme"</span><span class="text-white-70">,</span>
                                            <span class="text-danger">4</span><span class="text-white-70">);</span>
                                        </div>
                                        <div class="ps-6 mb-1">
                                            <span class="text-white-70">System.</span><span
                                                class="text-primary"><em>out</em></span><span
                                                class="text-white-70">.println(</span><span class="text-primary">"Is Front
                                                Responsive?"</span>
                                            <span class="text-white-70">+</span>
                                            <span class="text-danger">front</span><span
                                                class="text-white-70">.isResponsive());</span>
                                        </div>
                                        <div class="ps-6 mb-1">
                                            <span class="text-white-70">System.</span><span
                                                class="text-primary"><em>out</em></span><span
                                                class="text-white-70">.println(</span><span class="text-primary">"Front
                                                HTML "</span>
                                            <span class="text-white-70">+</span>
                                            <span class="text-danger">front</span><span
                                                class="text-white-70">.getHTML());</span>
                                        </div>
                                        <div class="ps-6 mb-1">
                                            <span class="text-white-70">System.</span><span
                                                class="text-primary"><em>out</em></span><span
                                                class="text-white-70">.println(</span><span class="text-primary">"Front
                                                has "</span>
                                            <span class="text-white-70">+</span>
                                            <span class="text-danger">front</span><span
                                                class="text-white-70">.getDemos()</span>
                                            <span class="text-white-70">+</span>
                                            <span class="text-primary">" demos."</span><span
                                                class="text-white-70">);</span>
                                        </div>
                                        <div class="ps-3 mb-1">
                                            <span class="text-white-70">}</span>
                                        </div>
                                        <div class="mb-1">
                                            <span class="text-white-70">}</span>
                                        </div>
                                    </div>
                                    <!-- End Code -->
                                </div>

                                <div class="tab-pane fade" id="featuresCodingTwo" role="tabpanel"
                                    aria-labelledby="featuresCodingTwo-tab">
                                    Coming soon...
                                </div>

                                <div class="tab-pane fade" id="featuresCodingThree" role="tabpanel"
                                    aria-labelledby="featuresCodingThree-tab">
                                    Coming soon...
                                </div>

                                <div class="tab-pane fade" id="featuresCodingFour" role="tabpanel"
                                    aria-labelledby="featuresCodingFour-tab">
                                    Coming soon...
                                </div>

                                <div class="tab-pane fade" id="featuresCodingFive" role="tabpanel"
                                    aria-labelledby="featuresCodingFive-tab">
                                    Coming soon...
                                </div>

                                <div class="tab-pane fade" id="featuresCodingSix" role="tabpanel"
                                    aria-labelledby="featuresCodingSix-tab">
                                    Coming soon...
                                </div>
                            </div>
                            <!-- End Tab Content -->
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Features Nav -->

        <!-- Icon Blocks -->
        <div class="container">
            <!-- Heading -->
            <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                <span class="text-cap">Why Front</span>
                <h2>Do more with an end-to-end solution</h2>
            </div>
            <!-- End Heading -->

            <div class="row mb-5 mb-md-9">
                <div class="col-sm-6 col-md-4 mb-3 mb-sm-7">
                    <!-- Icon Block -->
                    <div class="d-flex align-items-center mb-2">
                        <div class="flex-shrink-0">
                            <span class="svg-icon svg-icon-sm text-primary">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.302 11.35L12.002 20.55H21.202C21.802 20.55 22.202 19.85 21.902 19.35L17.302 11.35Z"
                                        fill="#035A4B" />
                                    <path opacity="0.3"
                                        d="M12.002 20.55H2.802C2.202 20.55 1.80202 19.85 2.10202 19.35L6.70203 11.45L12.002 20.55ZM11.302 3.45L6.70203 11.35H17.302L12.702 3.45C12.402 2.85 11.602 2.85 11.302 3.45Z"
                                        fill="#035A4B" />
                                </svg>

                            </span>
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <h4 class="mb-0">Robust libraries</h4>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <p>Use Front thoroughly thought and automated libraries to manage your businesses.</p>
                </div>
                <!-- End Col -->

                <div class="col-sm-6 col-md-4 mb-3 mb-sm-7">
                    <!-- Icon Block -->
                    <div class="d-flex align-items-center mb-2">
                        <div class="flex-shrink-0">
                            <span class="svg-icon svg-icon-sm text-primary">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3"
                                        d="M21 2H13C12.4 2 12 2.4 12 3V13C12 13.6 12.4 14 13 14H21C21.6 14 22 13.6 22 13V3C22 2.4 21.6 2 21 2ZM15.7 8L14 10.1V5.80005L15.7 8ZM15.1 4H18.9L17 6.40002L15.1 4ZM17 9.59998L18.9 12H15.1L17 9.59998ZM18.3 8L20 5.90002V10.2L18.3 8ZM9 2H3C2.4 2 2 2.4 2 3V21C2 21.6 2.4 22 3 22H9C9.6 22 10 21.6 10 21V3C10 2.4 9.6 2 9 2ZM4.89999 12L4 14.8V9.09998L4.89999 12ZM4.39999 4H7.60001L6 8.80005L4.39999 4ZM6 15.2L7.60001 20H4.39999L6 15.2ZM7.10001 12L8 9.19995V14.9L7.10001 12Z"
                                        fill="#035A4B" />
                                    <path
                                        d="M21 18H13C12.4 18 12 17.6 12 17C12 16.4 12.4 16 13 16H21C21.6 16 22 16.4 22 17C22 17.6 21.6 18 21 18ZM19 21C19 20.4 18.6 20 18 20H13C12.4 20 12 20.4 12 21C12 21.6 12.4 22 13 22H18C18.6 22 19 21.6 19 21Z"
                                        fill="#035A4B" />
                                </svg>

                            </span>
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <h4 class="mb-0">Simplified Snippets tools</h4>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <p>Quickly Front sample components, copy-paste codes, and start right off.</p>
                </div>
                <!-- End Col -->

                <div class="col-sm-6 col-md-4 mb-3 mb-sm-7 mb-md-0">
                    <!-- Icon Block -->
                    <div class="d-flex align-items-center mb-2">
                        <div class="flex-shrink-0">
                            <span class="svg-icon svg-icon-sm text-primary">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.85714 1H11.7364C12.0911 1 12.4343 1.12568 12.7051 1.35474L17.4687 5.38394C17.8057 5.66895 18 6.08788 18 6.5292V19.0833C18 20.8739 17.9796 21 16.1429 21H4.85714C3.02045 21 3 20.8739 3 19.0833V2.91667C3 1.12612 3.02045 1 4.85714 1ZM7 13C7 12.4477 7.44772 12 8 12H15C15.5523 12 16 12.4477 16 13C16 13.5523 15.5523 14 15 14H8C7.44772 14 7 13.5523 7 13ZM8 16C7.44772 16 7 16.4477 7 17C7 17.5523 7.44772 18 8 18H11C11.5523 18 12 17.5523 12 17C12 16.4477 11.5523 16 11 16H8Z"
                                        fill="#035A4B" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M6.85714 3H14.7364C15.0911 3 15.4343 3.12568 15.7051 3.35474L20.4687 7.38394C20.8057 7.66895 21 8.08788 21 8.5292V21.0833C21 22.8739 20.9796 23 19.1429 23H6.85714C5.02045 23 5 22.8739 5 21.0833V4.91667C5 3.12612 5.02045 3 6.85714 3ZM7 13C7 12.4477 7.44772 12 8 12H15C15.5523 12 16 12.4477 16 13C16 13.5523 15.5523 14 15 14H8C7.44772 14 7 13.5523 7 13ZM8 16C7.44772 16 7 16.4477 7 17C7 17.5523 7.44772 18 8 18H11C11.5523 18 12 17.5523 12 17C12 16.4477 11.5523 16 11 16H8Z"
                                        fill="#035A4B" />
                                </svg>

                            </span>
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <h4 class="mb-0">Comprehensive docs</h4>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <p>Whether you're a startup or a global enterprise, learn how to integrate with Front.</p>
                </div>
                <!-- End Col -->

                <div class="col-sm-6 col-md-4 mb-3 mb-sm-7 mb-md-0">
                    <!-- Icon Block -->
                    <div class="d-flex align-items-center mb-2">
                        <div class="flex-shrink-0">
                            <span class="svg-icon svg-icon-sm text-primary">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3"
                                        d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                        fill="#035A4B" />
                                    <path
                                        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                        fill="#035A4B" />
                                </svg>

                            </span>
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <h4 class="mb-0">Layout options</h4>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <p>Apart from 100+ HTML-pages, the theme comes with 6 ready-to-use and stand-alone demo options.</p>
                </div>
                <!-- End Col -->

                <div class="col-sm-6 col-md-4 mb-3 mb-sm-7 mb-md-0">
                    <!-- Icon Block -->
                    <div class="d-flex align-items-center mb-2">
                        <div class="flex-shrink-0">
                            <span class="svg-icon svg-icon-sm text-primary">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15 19.5229C15 20.265 15.9624 20.5564 16.374 19.9389L22.2227 11.166C22.5549 10.6676 22.1976 10 21.5986 10H17V4.47708C17 3.73503 16.0376 3.44363 15.626 4.06106L9.77735 12.834C9.44507 13.3324 9.80237 14 10.4014 14H15V19.5229Z"
                                        fill="#035A4B" />
                                    <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3 6.5C3 5.67157 3.67157 5 4.5 5H9.5C10.3284 5 11 5.67157 11 6.5C11 7.32843 10.3284 8 9.5 8H4.5C3.67157 8 3 7.32843 3 6.5ZM3 18.5C3 17.6716 3.67157 17 4.5 17H9.5C10.3284 17 11 17.6716 11 18.5C11 19.3284 10.3284 20 9.5 20H4.5C3.67157 20 3 19.3284 3 18.5ZM2.5 11C1.67157 11 1 11.6716 1 12.5C1 13.3284 1.67157 14 2.5 14H6.5C7.32843 14 8 13.3284 8 12.5C8 11.6716 7.32843 11 6.5 11H2.5Z"
                                        fill="#035A4B" />
                                </svg>

                            </span>
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <h4 class="mb-0">Speed up</h4>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <p>Reduce time and effort on building modern look design with Front only.</p>
                </div>
                <!-- End Col -->

                <div class="col-sm-6 col-md-4">
                    <!-- Icon Block -->
                    <div class="d-flex align-items-center mb-2">
                        <div class="flex-shrink-0">
                            <span class="svg-icon svg-icon-sm text-primary">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M5 8.04999L11.8 11.95V19.85L5 15.85V8.04999Z"
                                        fill="#035A4B" />
                                    <path
                                        d="M20.1 6.65L12.3 2.15C12 1.95 11.6 1.95 11.3 2.15L3.5 6.65C3.2 6.85 3 7.15 3 7.45V16.45C3 16.75 3.2 17.15 3.5 17.25L11.3 21.75C11.5 21.85 11.6 21.85 11.8 21.85C12 21.85 12.1 21.85 12.3 21.75L20.1 17.25C20.4 17.05 20.6 16.75 20.6 16.45V7.45C20.6 7.15 20.4 6.75 20.1 6.65ZM5 15.85V7.95L11.8 4.05L18.6 7.95L11.8 11.95V19.85L5 15.85Z"
                                        fill="#035A4B" />
                                </svg>

                            </span>
                        </div>

                        <div class="flex-grow-1 ms-3">
                            <h4 class="mb-0">A full solution for start-ups</h4>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <p>Front comes with design layouts from Corporate to Course platform.</p>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->

            <div class="text-center">
                <div class="d-grid d-sm-flex justify-content-center gap-2 mb-3">
                    <a class="btn btn-primary btn-transition" href="#">Sign up and Start Building</a>
                    <a class="btn btn-link" href="#">Let's Talk <i class="bi-chevron-right small ms-1"></i></a>
                </div>

                <p class="small">Start free trial. * No credit card required.</p>
            </div>
        </div>
        <!-- End Icon Blocks -->

        <!-- Testimonials -->
        <div class="container content-space-2 content-space-lg-3">
            <div class="text-center mb-5">
                <img class="avatar avatar-lg avatar-4x3" src="assets/svg/illustrations/oc-person-1.svg"
                    alt="Illustration">
            </div>

            <!-- Blockquote -->
            <figure class="w-md-75 text-center mx-md-auto">
                <blockquote class="blockquote">“ I just wanted to say that I'm very happy with my purchase of Front so far.
                    The documentation is outstanding - clear and detailed. ”</blockquote>

                <figcaption class="blockquote-footer text-center">
                    Christina
                    <span class="blockquote-footer-source">Product Manager | Mailchimp</span>
                </figcaption>
            </figure>
            <!-- End Blockquote -->
        </div>
        <!-- End Testimonials -->

        <!-- Contacts -->
        <div class="position-relative">
            <div class="bg-dark" style="background-image: url(assets/svg/components/wave-pattern-light.svg);">
                <div class="container content-space-t-2 content-space-t-lg-3 content-space-b-1">
                    <!-- Heading -->
                    <div class="w-lg-50 text-center mx-lg-auto mb-7">
                        <span class="text-cap text-white-70">Contact us</span>
                        <h2 class="text-white lh-base">We collaborate with ambitious brands and people. <span
                                class="text-warning">Let's chat.</span></h2>
                    </div>
                    <!-- End Heading -->

                    <div class="mx-auto" style="max-width: 35rem;">
                        <!-- Card -->
                        <div class="card zi-2">
                            <div class="card-body">
                                <!-- Form -->
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <!-- Form -->
                                            <div class="mb-4">
                                                <label class="form-label" for="hireUsFormFirstName">First name</label>
                                                <input type="text" class="form-control form-control-lg"
                                                    name="hireUsFormNameFirstName" id="hireUsFormFirstName"
                                                    placeholder="First name" aria-label="First name">
                                            </div>
                                            <!-- End Form -->
                                        </div>
                                        <!-- End Col -->

                                        <div class="col-sm-6">
                                            <!-- Form -->
                                            <div class="mb-4">
                                                <label class="form-label" for="hireUsFormLasttName">Last name</label>
                                                <input type="text" class="form-control form-control-lg"
                                                    name="hireUsFormNameLastName" id="hireUsFormLasttName"
                                                    placeholder="Last name" aria-label="Last name">
                                            </div>
                                            <!-- End Form -->
                                        </div>
                                        <!-- End Col -->
                                    </div>
                                    <!-- End Row -->

                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label class="form-label" for="hireUsFormWorkEmail">Email address</label>
                                        <input type="email" class="form-control form-control-lg"
                                            name="hireUsFormNameWorkEmail" id="hireUsFormWorkEmail"
                                            placeholder="email@site.com" aria-label="email@site.com">
                                    </div>
                                    <!-- End Form -->

                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label class="form-label" for="hireUsFormCompanyName">Company name <span
                                                class="form-label-secondary">(Optional)</span></label>
                                        <input type="text" class="form-control form-control-lg"
                                            name="hireUsFormNameCompanyName" id="hireUsFormCompanyName"
                                            placeholder="Htmlstream" aria-label="Htmlstream">
                                    </div>
                                    <!-- End Form -->

                                    <!-- Select -->
                                    <div class="mb-4">
                                        <label class="form-label" for="hireUsFormBudget">Budget</label>
                                        <select id="hireUsFormBudget" class="form-select form-select-lg"
                                            name="hireUsFormNameBudget" aria-label="Tell us about your budget">
                                            <option selected>Tell us about your budget</option>
                                            <option value="1">$1,000 - $10,000</option>
                                            <option value="2">$10,000 - $20,000</option>
                                            <option value="3">$20,000 - $30,000</option>
                                            <option value="4">$30,000 - $40,000</option>
                                            <option value="5">$40,000 - $50,000</option>
                                            <option value="6">$50,000 - and more</option>
                                        </select>
                                    </div>
                                    <!-- End Select -->

                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label class="form-label" for="hireUsFormDetails">Details</label>
                                        <textarea class="form-control form-control-lg" name="hireUsFormNameDetails" id="hireUsFormDetails"
                                            placeholder="Tell us about your project" aria-label="Tell us about your project" rows="4"></textarea>
                                    </div>
                                    <!-- End Form -->

                                    <!-- Check -->
                                    <div class="form-check mb-4">
                                        <input type="checkbox" class="form-check-input" id="signupFormPrivacyCheck"
                                            name="signupFormPrivacyCheck" required
                                            data-msg="Please accept our Privacy Policy.">
                                        <label class="form-check-label" for="signupFormPrivacyCheck"> By submitting this
                                            form I have read and acknowledged the <a href=page-privacy.html>Privacy
                                                Policy</a></label>
                                    </div>
                                    <!-- End Check -->

                                    <div class="d-grid mb-2">
                                        <button type="submit" class="btn btn-primary btn-lg">Send inquiry</button>
                                    </div>

                                    <div class="text-center">
                                        <span class="form-text">We'll get back to you in 1-2 business days.</span>
                                    </div>
                                </form>
                                <!-- End Form -->
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                </div>
            </div>

            <!-- Shape -->
            <div class="shape shape-bottom zi-1">
                <svg width="3000" height="500" viewBox="0 0 3000 500" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 500H3000V0L0 500Z" fill="#fff" />
                </svg>
            </div>
            <!-- End Shape -->
        </div>
        <!-- End Contacts -->
    </main>
@endsection
