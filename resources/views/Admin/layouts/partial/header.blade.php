<header>
    <button type="button" class="btn-slide" title="메뉴 숨기기">
        {!! icon('outdent', 'admin-icon') !!}
        <span class="sr-only">메뉴 숨기기</span>
    </button>
    <a href="{{ url('/') }}" class="btn-site-home">
        {!! icon('home', 'admin-icon') !!}
        <span class="sr-only">홈으로 이동</span>
    </a>
    <div class="right-menu navbar navbar-expand-md navbar-light box-shadow">
        <ul class="nav navbar-nav justify-content-end ml-auto">
            <li class="nav-item">
                <a href="#" class="dropdown-toggle-split nav-link" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="true">
                    <div>
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        {!! icon('down', 'admin-icon') !!}
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                    <ul class="list-unstyled">
                        <li>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); $('#logout-form').submit();">{!! icon('logout', 'admin-icon') !!} {{ __('auth.title_logout') }}</a>

                            @include('common.logout_form')
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</header>