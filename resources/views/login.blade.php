@extends('layout')
@section('content')

    <main id="content" role="main">
        <!-- Form -->
        <div class="container content-space-3 content-space-t-lg-4 content-space-b-lg-3">
            <div class="flex-grow-1 mx-auto" style="max-width: 28rem;">
                <!-- Heading -->
                <div class="text-center mb-5 mb-md-7">
                    <h1 class="h2">Welcome back</h1>
                    <p>Login untuk memasukan akun</p>
                </div>
                <!-- End Heading -->

                <!-- Form -->
                <form action="{{ route('showLoginForm') }}" method="POST" novalidate>
                    @csrf
                    <!-- Form -->
                    <div class="mb-4">
                        <label class="form-label" for="signupSimpleLoginEmail">Masukan Email</label>
                        <input type="email" class="form-control form-control-lg" name="email"
                            id="signupSimpleLoginEmail" placeholder="user@mail.com" aria-label="user@mail.com" required>
                        <span class="invalid-feedback">Please enter a valid email address.</span>
                    </div>
                    <!-- End Form -->

                    <!-- Form -->
                    <div class="mb-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <label class="form-label" for="signupSimpleLoginPassword">Masukan Password</label>
                            <a class="form-label-link" href="page-reset-password-simple.html">Forgot Password?</a>
                        </div>

                        <div class="" data-hs-validation-validate-class>
                            <input type="password" class="js-toggle-password form-control form-control-lg" name="password"
                                id="signupSimpleLoginPassword" placeholder="abc123gb"
                                aria-label="8+ characters required" required minlength="8"
                                data-hs-toggle-password-options='{
                   "target": "#changePassTarget",
                   "defaultClass": "bi-eye-slash",
                   "showClass": "bi-eye",
                   "classChangeTarget": "#changePassIcon"
                 }'>
                           
                        </div>

                        <span class="invalid-feedback">Please enter a valid password.</span>
                    </div>
                    <!-- End Form -->

                    @if ($errors->has('email'))
                        <div class="alert alert-danger">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                    <div class="d-grid mb-3">
                      <button type="submit" class="btn btn-primary btn-lg">Login</button>
                    </div>
                    
            </div>

            <div class="text-center">
                <p>Don't have an account yet? <a class="link" href="{{ route('register') }}">Sign up here</a></p>
            </div>
            </form>
            <!-- End Form -->
        </div>
        </div>
        <!-- End Form -->
    </main>
