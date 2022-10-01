<div class="content-header d-flex align-items-center justify-content-between m-4 border-bottom"
    style="padding-bottom: .7rem">
    <h5 class="page-heading d-flex flex-column justify-content-center my-0">
        Dashboard
        <!--begin::Description-->
        <span class="page-desc small fw-semibold pt-1" style="color: #B5B0A1">@yield('small-text-content-heading')</span>
        <!--end::Description-->
    </h5>
    <div class="form-group position-relative">
        <span class="position-absolute mt-1 ms-2">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" style=" color:#989486"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z"
                    fill="currentColor"></path>
                <path opacity="0.3"
                    d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z"
                    fill="currentColor"></path>
            </svg>
        </span>
        <form>
            <input type="text" id="search" class="form-control ps-5" style="width: 300px;" name="q"
                value="{{ request()->get('q') }}" placeholder="{{ __('admin.search') }}..."
                data-kt-search-element="input">
        </form>
        <div class="d-flex align-items-center justify-content-between">
            <form action="{{ route('logout') }}" method="POST" class="col-6">
                @csrf
                <button class="btn btn-warning mt-2 c_fff">Logout</button>
            </form>
            {{-- <div class="dropdown notification-list topbar-dropdown col-6">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown"
                                    id="topbar-languagedrop" href="#" role="button" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa-solid fa-flag mr-1" style="font-size: 16px"></i><span
                                        class="align-middle">Languages</span>
                                    <i class="mdi mdi-chevron-down align-middle"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu"
                                    aria-labelledby="topbar-languagedrop">
                                    <a href="{{ route('language', 'en') }}" class="dropdown-item notify-item">
                                        <img src="{{ asset('storage/img_country/usa.png') }}" alt="user-image"
                                            class="mr-1" height="30"> <span
                                            class="align-middle">English</span>
                                    </a>
                                    <a href="{{ route('language', 'vi') }}" class="dropdown-item notify-item">
                                        <img src="{{ asset('storage/img_country/vietnam.png') }}" alt="user-image"
                                            class="mr-1" height="30"> <span
                                            class="align-middle">Vietnamese</span>
                                    </a>
                                </div>
                            </div> --}}
        </div>
    </div>
</div>
