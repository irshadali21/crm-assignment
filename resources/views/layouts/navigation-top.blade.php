<div class="nk-header is-light nk-header-fixed is-light">
    <div class="container-xl wide-xl">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ms-n1 me-3"><a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                        class="icon ni ni-menu"></em></a></div>
            <div class="nk-header-brand d-xl-none"><a href="/copywriter/index.html" class="logo-link"><img class="logo-light logo-img"
                        src="/images/logo.png" srcset="/images/logo2x.png 2x" alt="logo"><img class="logo-dark logo-img"
                        src="/images/logo-dark.png" srcset="/images/logo-dark2x.png 2x" alt="logo-dark"></a></div>

            <div class="nk-header-tools">
                <ul class="nk-quick-nav">

                    <li class="dropdown language-dropdown d-none d-sm-block me-n1"><a href="#" class="dropdown-toggle nk-quick-nav-icon"
                            data-bs-toggle="dropdown">
                            <div class="quick-icon border border-light"><img class="icon" src="/images/flags/english-sq.png" alt="">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <ul class="language-list">
                                <li><a href="#" class="language-item"><img src="/images/flags/english.png" alt=""
                                            class="language-flag"><span class="language-name">English</span></a></li>
                                <li><a href="#" class="language-item"><img src="/images/flags/spanish.png" alt=""
                                            class="language-flag"><span class="language-name">Español</span></a></li>
                                <li><a href="#" class="language-item"><img src="/images/flags/french.png" alt=""
                                            class="language-flag"><span class="language-name">Français</span></a></li>
                                <li><a href="#" class="language-item"><img src="/images/flags/turkey.png" alt=""
                                            class="language-flag"><span class="language-name">Türkçe</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown user-dropdown"><a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em></div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar"><span>AB</span></div>
                                    <div class="user-info"><span class="lead-text">Abu Bin Ishtiyak</span><span
                                            class="sub-text">info@softnio.com</span></div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{ route('profile.edit') }}"><em class="icon ni ni-user-alt"></em><span>View
                                                Profile</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">

                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                                <em class="icon ni ni-signout"></em><span> {{ __('Log Out') }}</span></a>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
