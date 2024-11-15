<!DOCTYPE html>
<html lang="en" dir="">

<!-- Mirrored from htmlstream.com/preview/front-v4.2/html/demo-help-desk/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Aug 2022 18:12:02 GMT -->

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->


    <!-- Favicon -->
    <link rel="shortcut icon" href="../favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="../assets/css/vendor.min.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="../assets/css/theme.minc619.css?v=1.0">
</head>

<body>
    <!-- ========== HEADER ========== -->
    @extends('layout')
    @section('content')

        <!-- ========== END HEADER ========== -->

        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">
            <!-- Hero -->
            <div class="bg-light">
                <div class="container content-space-2">
                    <div class="row justify-content-lg-between align-items-md-center">
                        <div class="col-md-6 mb-5 mb-md-0">
                            <div class="mb-3">
                                <h1>Mau belajar apa hari ini ?</h1>
                            </div>

                            <form>
                                <!-- Input Card -->
                                <div class="input-card mb-3">
                                    <div class="input-card-form">
                                        <label for="searchAnswersForm" class="form-label visually-hidden"></label>
                                        <input type="text" class="form-control form-control-lg" id="searchAnswersForm"
                                            placeholder="Search for Courses" aria-label="Search for answers">
                                    </div>
                                    <button type="button" class="btn btn-primary btn-lg">
                                        <i class="bi-search"></i>
                                    </button>
                                </div>
                                <!-- End Input Card -->
                            </form>
                        </div>
                        <!-- End Col -->

                        <div class="col-md-5">
                            <img class="img-fluid" src="../assets/svg/illustrations/oc-looking-for-answers.svg"
                                alt="Image Description">
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
            </div>
            <!-- End Hero -->

            <!-- Card Grid -->
            <div class="container content-space-sm-2">
                <!-- Title -->
                <div class="w-md-75 text-center mx-md-auto mb-9">
                    <h2>Course Tersedia</h2>
                    <p>Pilih Course Yang Sesuai Dengan BidangMu.</p>
                </div>
                <!-- End Title -->

                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 mb-5">

                    <!-- End Col -->

                    <div class="col mb-5">
                        <!-- Card -->
                        <div class="card card-bordered h-100">
                            <!-- Card Pinned -->
                            <div class="card-pinned">
                                <img class="card-img-top" src="../assets/svg/components/card-15.svg"
                                    alt="Image Description">

                                <div class="card-pinned-top-start">
                                    <small class="badge bg-success rounded-pill">Rekomendasi</small>
                                </div>

                                <div class="card-pinned-bottom-start">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <!-- Rating -->
                                        <div class="d-flex gap-1">
                                            <img src="../assets/svg/illustrations/star.svg" alt="Review rating"
                                                width="16">
                                            <img src="../assets/svg/illustrations/star.svg" alt="Review rating"
                                                width="16">
                                            <img src="../assets/svg/illustrations/star.svg" alt="Review rating"
                                                width="16">
                                            <img src="../assets/svg/illustrations/star.svg" alt="Review rating"
                                                width="16">
                                            <img src="../assets/svg/illustrations/star.svg" alt="Review rating"
                                                width="16">
                                        </div>
                                        <!-- End Rating -->
                                        <div class="ms-1">
                                            <span class="fw-semi-bold text-white me-1">4.91</span>
                                            <span class="text-white-70">(1.5k+ reviews)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card Pinned -->

                            <!-- Card Body -->
                            <div class="card-body">
                                <small class="card-subtitle">Matematika</small>

                                <div class="mb-3">
                                    <h3 class="card-title">
                                        <a class="text-dark">Complete Python Bootcamp: Go from
                                            zero to hero in Python</a>
                                    </h3>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="avatar-group avatar-group-xs">
                                            <a class="avatar avatar-xs avatar-circle" data-toggle="tooltip"
                                                data-placement="top" title="Nataly Gaga">
                                                <img class="avatar-img" src="../assets/img/160x160/img3.jpg"
                                                    alt="Image Description"><a class="link ms-3 mt-1" href="author-profile.html">Christina Kray</a>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Col -->

                                    <div class="col-auto">
                                        <ul class="list-inline list-separator small ms-auto">
                                            <li class="list-inline-item">
                                                <i class="bi-clock me-1"></i> 3h 25m
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Col -->
                                </div>
                                <!-- End Row -->
                            </div>
                            <!-- End Card Body -->

                            <!-- Card Footer -->
                            <div class="card-footer pt-0 ">
                                <div class="d-flex justify-content-between align-items-center float-end">


                                    @auth
                                        <!-- Jika user sudah login, arahkan ke course-overview.html -->
                                        <a class="btn btn-primary btn-sm btn-transition "
                                            href="{{ route('courseOverview') }}">Preview</a>
                                    @else
                                        <!-- Jika user belum login, arahkan ke halaman login -->
                                        <a class="btn btn-primary btn-sm btn-transition "
                                            href="{{ route('showLoginForm') }}">Preview</a>
                                    @endauth

                                </div>
                            </div>
                            <!-- End Card Footer -->
                        </div>
                        <!-- End Card -->
                    </div>

                </div>
                <!-- End Row -->

                <div class="text-center">
                    <a class="btn btn-link" href="courses.html">See all courses <i
                            class="bi-chevron-right small ms-1"></i></a>
                </div>
            </div>
            <!-- End Card Grid -->

            <!-- Lists -->




            <!-- List -->
            <div class="overflow-hidden content-space-2">
                <div class="position-relative bg-light text-center rounded-2 zi-2 mx-3 mx-md-10">
                    <div class="container content-space-2">
                        <div class="text-center mb-5">
                            <img class="avatar avatar-lg avatar-4x3" src="../assets/svg/illustrations/oc-person-2.svg"
                                alt="Illustration">
                        </div>

                        <!-- Blockquote -->
                        <figure class="w-md-75 text-center mx-md-auto">
                            <blockquote class="blockquote mb-7">“ The best part about Front Course is the selection. You
                                can find a course for anything you want to learn! Thank you Front Course! You've renewed my
                                passion for learning and my dream of becoming a web developer. ”</blockquote>

                            <figcaption class="blockquote-footer mt-2">
                                Martin
                                <span class="blockquote-footer-source">Happy customer</span>
                            </figcaption>
                        </figure>
                        <!-- End Blockquote -->
                    </div>

                    <!-- SVG Shape -->
                    <figure class="position-absolute top-0 start-0 mt-10 ms-10">
                        <svg width="70" height="70" viewBox="0 0 200 200" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M60.6655 74.9992C80.4557 74.9992 96.4988 58.9561 96.4988 39.1659C96.4988 19.3757 80.4557 3.33252 60.6655 3.33252C40.8753 3.33252 24.8322 19.3757 24.8322 39.1659C24.8322 58.9561 40.8753 74.9992 60.6655 74.9992Z"
                                stroke="#97a4af" stroke-width="5" stroke-miterlimit="10" />
                            <path
                                d="M158.5 197.5C168.165 197.5 176 189.665 176 180C176 170.335 168.165 162.5 158.5 162.5C148.835 162.5 141 170.335 141 180C141 189.665 148.835 197.5 158.5 197.5Z"
                                stroke="#97a4af" stroke-width="5" stroke-miterlimit="10" />
                        </svg>
                    </figure>
                    <!-- End SVG Shape -->

                    <!-- SVG Shape -->
                    <figure class="position-absolute bottom-0 end-0 mb-n7 me-n7" style="width: 10rem;">
                        <img class="img-fluid" src="../assets/svg/components/dots.svg" alt="Image Description">
                    </figure>
                    <!-- End SVG Shape -->
                </div>
            </div>
            </div>
            <!-- End Row -->
            </div>
            <!-- End Lists -->
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

        <!-- ========== FOOTER ========== -->
        <footer class="bg-dark">
            <div class="container pb-1 pb-lg-5">
                <div class="row content-space-t-2">
                    <div class="col-lg-3 mb-7 mb-lg-0">
                        <!-- Logo -->
                        <div class="mb-5">
                            <a class="navbar-brand" href="../index.html" aria-label="Space">
                                <img class="navbar-brand-logo" src="../assets/svg/logos/logo-white.svg"
                                    alt="Image Description">
                            </a>
                        </div>
                        <!-- End Logo -->

                        <!-- List -->
                        <ul class="list-unstyled list-py-1">
                            <li><a class="link-sm link-light" href="#"><i class="bi-geo-alt-fill me-1"></i> 153
                                    Williamson Plaza, Maggieberg</a></li>
                            <li><a class="link-sm link-light" href="tel:1-062-109-9222"><i
                                        class="bi-telephone-inbound-fill me-1"></i> +1 (062) 109-9222</a></li>
                        </ul>
                        <!-- End List -->

                    </div>
                    <!-- End Col -->

                    <div class="col-sm mb-7 mb-sm-0">
                        <h5 class="text-white mb-3">Company</h5>

                        <!-- List -->
                        <ul class="list-unstyled list-py-1 mb-0">
                            <li><a class="link-sm link-light" href="#">About</a></li>
                            <li><a class="link-sm link-light" href="#">Careers <span
                                        class="badge bg-warning text-dark rounded-pill ms-1">We're hiring</span></a></li>
                            <li><a class="link-sm link-light" href="#">Blog</a></li>
                            <li><a class="link-sm link-light" href="#">Customers <i
                                        class="bi-box-arrow-up-right small ms-1"></i></a></li>
                            <li><a class="link-sm link-light" href="#">Hire us</a></li>
                        </ul>
                        <!-- End List -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm mb-7 mb-sm-0">
                        <h5 class="text-white mb-3">Features</h5>

                        <!-- List -->
                        <ul class="list-unstyled list-py-1 mb-0">
                            <li><a class="link-sm link-light" href="#">Press <i
                                        class="bi-box-arrow-up-right small ms-1"></i></a></li>
                            <li><a class="link-sm link-light" href="#">Release Notes</a></li>
                            <li><a class="link-sm link-light" href="#">Integrations</a></li>
                            <li><a class="link-sm link-light" href="#">Pricing</a></li>
                        </ul>
                        <!-- End List -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm">
                        <h5 class="text-white mb-3">Documentation</h5>

                        <!-- List -->
                        <ul class="list-unstyled list-py-1 mb-0">
                            <li><a class="link-sm link-light" href="#">Support</a></li>
                            <li><a class="link-sm link-light" href="#">Docs</a></li>
                            <li><a class="link-sm link-light" href="#">Status</a></li>
                            <li><a class="link-sm link-light" href="#">API Reference</a></li>
                            <li><a class="link-sm link-light" href="#">Tech Requirements</a></li>
                        </ul>
                        <!-- End List -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm">
                        <h5 class="text-white mb-3">Resources</h5>

                        <!-- List -->
                        <ul class="list-unstyled list-py-1 mb-5">
                            <li><a class="link-sm link-light" href="#"><i class="bi-question-circle-fill me-1"></i>
                                    Help</a></li>
                            <li><a class="link-sm link-light" href="#"><i class="bi-person-circle me-1"></i> Your
                                    Account</a></li>
                        </ul>
                        <!-- End List -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->

                <div class="border-top border-white-10 my-7"></div>

                <div class="row mb-7">
                    <div class="col-sm mb-3 mb-sm-0">
                        <!-- Socials -->
                        <ul class="list-inline list-separator list-separator-light mb-0">
                            <li class="list-inline-item">
                                <a class="link-sm link-light" href="#">Privacy &amp; Policy</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="link-sm link-light" href="#">Terms</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="link-sm link-light" href="#">Site Map</a>
                            </li>
                        </ul>
                        <!-- End Socials -->
                    </div>

                    <div class="col-sm-auto">
                        <!-- Socials -->
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a class="btn btn-soft-light btn-xs btn-icon" href="#">
                                    <i class="bi-facebook"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a class="btn btn-soft-light btn-xs btn-icon" href="#">
                                    <i class="bi-google"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a class="btn btn-soft-light btn-xs btn-icon" href="#">
                                    <i class="bi-twitter"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a class="btn btn-soft-light btn-xs btn-icon" href="#">
                                    <i class="bi-github"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <!-- Button Group -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-soft-light btn-xs dropdown-toggle"
                                        id="footerSelectLanguage" data-bs-toggle="dropdown" aria-expanded="false"
                                        data-bs-dropdown-animation>
                                        <span class="d-flex align-items-center">
                                            <img class="avatar avatar-xss avatar-circle me-2"
                                                src="../assets/vendor/flag-icon-css/flags/1x1/us.svg"
                                                alt="Image description" width="16" />
                                            <span>English (US)</span>
                                        </span>
                                    </button>

                                    <div class="dropdown-menu" aria-labelledby="footerSelectLanguage">
                                        <a class="dropdown-item d-flex align-items-center active" href="#">
                                            <img class="avatar avatar-xss avatar-circle me-2"
                                                src="../assets/vendor/flag-icon-css/flags/1x1/us.svg"
                                                alt="Image description" width="16" />
                                            <span>English (US)</span>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <img class="avatar avatar-xss avatar-circle me-2"
                                                src="../assets/vendor/flag-icon-css/flags/1x1/de.svg"
                                                alt="Image description" width="16" />
                                            <span>Deutsch</span>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <img class="avatar avatar-xss avatar-circle me-2"
                                                src="../assets/vendor/flag-icon-css/flags/1x1/es.svg"
                                                alt="Image description" width="16" />
                                            <span>Español</span>
                                        </a>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <img class="avatar avatar-xss avatar-circle me-2"
                                                src="../assets/vendor/flag-icon-css/flags/1x1/cn.svg"
                                                alt="Image description" width="16" />
                                            <span>中文 (繁體)</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Button Group -->
                            </li>
                        </ul>
                        <!-- End Socials -->
                    </div>
                </div>

                <!-- Copyright -->
                <div class="w-md-85 text-lg-center mx-lg-auto">
                    <p class="text-white-50 small">&copy; Front. 2021 Htmlstream. All rights reserved.</p>
                    <p class="text-white-50 small">When you visit or interact with our sites, services or tools, we or our
                        authorised service providers may use cookies for storing information to help provide you with a
                        better, faster and safer experience and for marketing purposes.</p>
                </div>
                <!-- End Copyright -->
            </div>
        </footer>

        <!-- ========== END FOOTER ========== -->

        <!-- ========== SECONDARY CONTENTS ========== -->
        <!-- Log In -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <!-- Header -->
                    <div class="modal-close">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="modal-body">
                        <!-- Log in -->
                        <div id="loginModalFormLogin">
                            <!-- Heading -->
                            <div class="text-center mb-7">
                                <h3 class="modal-title">Log in to Front</h3>
                                <p>Login to manage your account</p>
                            </div>
                            <!-- End Heading -->

                            <form class="js-validate needs-validation" novalidate>
                                <!-- Form -->
                                <div class="mb-3">
                                    <label class="form-label" for="loginModalFormLoginEmail">Your email</label>
                                    <input type="email" class="form-control" name="email"
                                        id="loginModalFormLoginEmail" placeholder="email@site.com"
                                        aria-label="email@site.com" required>
                                    <span class="invalid-feedback">Please enter a valid email address.</span>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label class="form-label" for="loginModalFormLoginPassword">Password</label>

                                        <a class="js-animation-link form-label-link" href="javascript:;"
                                            data-hs-show-animation-options='{
                       "targetSelector": "#loginModalFormResetPassword",
                       "groupName": "idForm"
                     }'>Forgot
                                            Password?</a>
                                    </div>

                                    <input type="password" class="form-control form-control-lg" name="password"
                                        id="loginModalFormLoginPassword" placeholder="8+ characters required"
                                        aria-label="8+ characters required" required minlength="8">
                                    <span class="invalid-feedback">Please enter a valid password.</span>
                                </div>
                                <!-- End Form -->

                                <div class="d-grid gap-3 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Log in</button>

                                    <span class="divider-center">OR</span>

                                    <button type="submit" class="btn btn-ghost-secondary">
                                        <span class="d-flex justify-content-center align-items-center">
                                            <img class="avatar avatar-xss me-2" src="../assets/svg/brands/google-icon.svg"
                                                alt="Image Description">
                                            Log in with Google
                                        </span>
                                    </button>

                                    <p>Don't have an account yet?
                                        <a class="js-animation-link link" href="javascript:;" role="button"
                                            data-hs-show-animation-options='{
                       "targetSelector": "#loginModalFormSignup",
                       "groupName": "idForm"
                     }'>Sign
                                            up</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                        <!-- End Log in -->

                        <!-- Log in -->
                        <div id="loginModalFormSignup" style="display: none; opacity: 0;">
                            <!-- Heading -->
                            <div class="text-center mb-7">
                                <h3 class="modal-title">Sign up</h3>
                                <p>Fill out the form to get started</p>
                            </div>
                            <!-- End Heading -->

                            <form class="js-validate needs-validation" novalidate>
                                <!-- Form -->
                                <div class="mb-3">
                                    <label class="form-label" for="loginModalFormSignupEmail">Your email</label>
                                    <input type="email" class="form-control form-control-lg" name="email"
                                        id="loginModalFormSignupEmail" placeholder="email@site.com"
                                        aria-label="email@site.com" required>
                                    <span class="invalid-feedback">Please enter a valid email address.</span>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="mb-3">
                                    <label class="form-label" for="loginModalFormSignupPassword">Password</label>
                                    <input type="password" class="form-control form-control-lg" name="password"
                                        id="loginModalFormSignupPassword" placeholder="8+ characters required"
                                        aria-label="8+ characters required" required>
                                    <span class="invalid-feedback">Your password is invalid. Please try again.</span>
                                </div>
                                <!-- End Form -->

                                <!-- Form -->
                                <div class="mb-3" data-hs-validation-validate-class>
                                    <label class="form-label" for="loginModalFormSignupConfirmPassword">Confirm
                                        password</label>
                                    <input type="password" class="form-control form-control-lg" name="confirmPassword"
                                        id="loginModalFormSignupConfirmPassword" placeholder="8+ characters required"
                                        aria-label="8+ characters required" required
                                        data-hs-validation-equal-field="#loginModalFormSignupPassword">
                                    <span class="invalid-feedback">Password does not match the confirm password.</span>
                                </div>
                                <!-- End Form -->

                                <div class="text-center mb-3">
                                    <p class="small mb-0">By continuing you agree to our <a href="#">Terms and
                                            Conditions</a></p>
                                </div>

                                <div class="d-grid gap-3 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Sign up</button>

                                    <span class="divider-center">OR</span>

                                    <button type="submit" class="btn btn-ghost-secondary">
                                        <span class="d-flex justify-content-center align-items-center">
                                            <img class="avatar avatar-xss me-2" src="../assets/svg/brands/google-icon.svg"
                                                alt="Image Description">
                                            Sign up with Google
                                        </span>
                                    </button>

                                    <p>Already have an account?
                                        <a class="js-animation-link link" href="javascript:;" role="button"
                                            data-hs-show-animation-options='{
                       "targetSelector": "#loginModalFormLogin",
                       "groupName": "idForm"
                     }'>Log
                                            in</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                        <!-- End Log in -->

                        <!-- Reset Password -->
                        <div id="loginModalFormResetPassword" style="display: none; opacity: 0;">
                            <!-- Heading -->
                            <div class="text-center mb-7">
                                <h3 class="modal-title">Forgot password</h3>
                                <p>Instructions will be sent to you</p>
                            </div>
                            <!-- End Heading -->

                            <form class="js-validate needs-validation" novalidate>
                                <!-- Form -->
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label class="form-label" for="signupModalFormResetPasswordEmail"
                                            tabindex="0">Your email</label>

                                        <a class="js-animation-link form-label-link" href="javascript:;"
                                            data-hs-show-animation-options='{
                         "targetSelector": "#loginModalFormLogin",
                         "groupName": "idForm"
                       }'>
                                            <i class="bi-chevron-left small"></i> Back to Log in
                                        </a>
                                    </div>

                                    <input type="email" class="form-control form-control-lg" name="email"
                                        id="signupModalFormResetPasswordEmail" tabindex="1"
                                        placeholder="Enter your email address" aria-label="Enter your email address"
                                        required>
                                    <span class="invalid-feedback">Please enter a valid email address.</span>
                                </div>
                                <!-- End Form -->

                                <div class="d-grid gap-3 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- End Reset Password -->
                    </div>
                    <!-- End Body -->
                </div>
            </div>
        </div>

        <!-- Go To -->
        <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
            data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": "2rem"
         },
         "show": {
           "bottom": "2rem"
         },
         "hide": {
           "bottom": "-2rem"
         }
       }
     }'>
            <i class="bi-chevron-up"></i>
        </a>
        <!-- ========== END SECONDARY CONTENTS ========== -->

        <!-- JS Implementing Plugins -->
        <script src="../assets/js/vendor.min.js"></script>

        <!-- JS Front -->
        <script src="../assets/js/theme.min.js"></script>

        <!-- JS Plugins Init. -->
        <script>
            (function() {
                // INITIALIZATION OF MEGA MENU
                // =======================================================
                new HSMegaMenu('.js-mega-menu', {
                    desktop: {
                        position: 'left'
                    }
                })


                // INITIALIZATION OF SHOW ANIMATIONS
                // =======================================================
                new HSShowAnimation('.js-animation-link')


                // INITIALIZATION OF BOOTSTRAP VALIDATION
                // =======================================================
                HSBsValidation.init('.js-validate', {
                    onSubmit: data => {
                        data.event.preventDefault()
                        alert('Submited')
                    }
                })


                // INITIALIZATION OF BOOTSTRAP DROPDOWN
                // =======================================================
                HSBsDropdown.init()


                // INITIALIZATION OF GO TO
                // =======================================================
                new HSGoTo('.js-go-to')
            })()
        </script>
    </body>

    <!-- Mirrored from htmlstream.com/preview/front-v4.2/html/demo-help-desk/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Aug 2022 18:12:04 GMT -->

    </html>
