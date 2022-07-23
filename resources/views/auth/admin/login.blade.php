@include('backend.code-section.js.head.head')

<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- wrap @s -->
        <div class="nk-wrap nk-wrap-nosidebar">
            <!-- content @s -->
            <div class="nk-content ">
                <div class="nk-block nk-block-middle nk-auth-body  wide-xs">

                    <div class="card card-bordered">
                        <div class="card-inner card-inner-lg">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <div class="brand-logo pb-4 text-center">
                                        <a href="/auth/login" class="logo-link">
                                            <img class="logo-light logo-img logo-img-lg" src="{{asset('backend/all-images/web/default/mrsbd.png')}}" srcset="./images/logo2x.png 2x" alt="logo">
                                            <img class="logo-dark logo-img logo-img-lg" src="{{asset('backend/all-images/web/default/mrsbd.png')}}" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                        </a>
                                    </div>
                                    <div class="nk-block-des">
                                        <p>Access the Mrsbd panel using your email and password.</p>
                                    </div>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('submit.login') }}">
                                @csrf

                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="default-01">{{ __('Email Address') }}</label>
                                    </div>
                                    <div class="form-control-wrap">
                                        <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your Email" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="password">{{ __('Password') }}</label>
                                        <a class="link link-primary link-sm" href="{{ route('password.request') }}">{{ __('Forgot Code?') }}</a>
                                    </div>
                                    <div class="form-control-wrap">
                                        <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                        </a>
                                        <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Enter Your Password" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- wrap @e -->
        </div>
        <!-- content @e -->
    </div>
    <!-- main @e -->
</div>


@include('backend.code-section.js.footer.footer')

