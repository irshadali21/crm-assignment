<x-guest-layout>





<div class="nk-split nk-split-page nk-split-lg">
    <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
        <div class="absolute-top-right d-lg-none p-3 p-sm-5"><a href="#" class="toggle btn-white btn btn-icon btn-light"
                data-target="athPromo"><em class="icon ni ni-info"></em></a></div>
        <div class="nk-block nk-block-middle nk-auth-body">
            <div class="brand-logo pb-5"><a href="/index.html" class="logo-link"><img
                        class="logo-light logo-img logo-img-lg" src="/images/logo.png" srcset="/images/logo2x.png 2x"
                        alt="logo"><img class="logo-dark logo-img logo-img-lg" src="/images/logo-dark.png"
                        srcset="/images/logo-dark2x.png 2x" alt="logo-dark"></a></div>
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h5 class="nk-block-title">Sign-In</h5>
                    <div class="nk-block-des">
                        <p>Access the DashLite panel using your email and passcode.</p>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ route('login') }}" class="form-validate is-alter" autocomplete="off">
                @csrf
                <div class="form-group">
                    <div class="form-label-group">
                        <x-input-label for="email" :value="__('Email')" class="form-label"/>

                        </div>
                    <div class="form-control-wrap">

                        <x-text-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />

<x-input-error :messages="$errors->get('email')" class="mt-2" />

                        </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <x-input-label for="password" :value="__('Password')" class="form-label" />

                        @if (Route::has('password.request'))
                <a class="link link-primary link-sm" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

    </div>
                    <div class="form-control-wrap"><a tabindex="-1" href="#"
                            class="form-icon form-icon-right passcode-switch lg" data-target="password"><em
                                class="passcode-icon icon-show icon ni ni-eye"></em><em
                                class="passcode-icon icon-hide icon ni ni-eye-off"></em></a>

                                <x-text-input id="password" class="form-control form-control-lg"
                                type="password"
                                name="password"
                                required autocomplete="current-password"  placeholder="Enter your passcode"/>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />


                             </div>
                             <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                </div>
                <div class="form-group"><button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button></div>
            </form>

            @if (Route::has('register'))
            <div class="form-note-s2 pt-4"> New on our platform?

                <a href="{{ route('register') }}" >Create an
                    account</a>


                </div>
                @endif
            <div class="text-center pt-4 pb-3">
                <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
            </div>
            <ul class="nav justify-center gx-4">
                <li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Google</a></li>
            </ul>
            <div class="text-center mt-5"><span class="fw-500">I don't have an account? <a href="#">Try 15 days
                        free</a></span></div>
        </div>
        <div class="nk-block nk-auth-footer">
            <div class="nk-block-between">
                <ul class="nav nav-sm">
                    <li class="nav-item"><a class="nav-link" href="#">Terms & Condition</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Privacy Policy</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                    <li class="nav-item dropup"><a class="dropdown-toggle dropdown-indicator has-indicator nav-link"
                            data-bs-toggle="dropdown" data-offset="0,10"><small>English</small></a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                            <ul class="language-list">
                                <li><a href="#" class="language-item"><img src="/images/flags/english.png"
                                            alt="" class="language-flag"><span class="language-name">English</span></a>
                                </li>
                                <li><a href="#" class="language-item"><img src="/images/flags/spanish.png"
                                            alt="" class="language-flag"><span class="language-name">Español</span></a>
                                </li>
                                <li><a href="#" class="language-item"><img src="/images/flags/french.png"
                                            alt="" class="language-flag"><span
                                            class="language-name">Français</span></a></li>
                                <li><a href="#" class="language-item"><img src="/images/flags/turkey.png"
                                            alt="" class="language-flag"><span class="language-name">Türkçe</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mt-3">
                <p>&copy; 2023 DashLite. All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right"
        data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
        <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
            <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                <div class="slider-item">
                    <div class="nk-feature nk-feature-center">
                        <div class="nk-feature-img"><img class="round" src="/images/slides/promo-a.png"
                                srcset="/images/slides/promo-a2x.png 2x" alt=""></div>
                        <div class="nk-feature-content py-4 p-sm-5">
                            <h4>Dashlite</h4>
                            <p>You can start to create your products easily with its user-friendly design & most completed
                                responsive layout.</p>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="nk-feature nk-feature-center">
                        <div class="nk-feature-img"><img class="round" src="/images/slides/promo-b.png"
                                srcset="/images/slides/promo-b2x.png 2x" alt=""></div>
                        <div class="nk-feature-content py-4 p-sm-5">
                            <h4>Dashlite</h4>
                            <p>You can start to create your products easily with its user-friendly design & most completed
                                responsive layout.</p>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="nk-feature nk-feature-center">
                        <div class="nk-feature-img"><img class="round" src="/images/slides/promo-c.png"
                                srcset="/images/slides/promo-c2x.png 2x" alt=""></div>
                        <div class="nk-feature-content py-4 p-sm-5">
                            <h4>Dashlite</h4>
                            <p>You can start to create your products easily with its user-friendly design & most completed
                                responsive layout.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-dots"></div>
            <div class="slider-arrows"></div>
        </div>
    </div>
</div>

</x-guest-layout>
