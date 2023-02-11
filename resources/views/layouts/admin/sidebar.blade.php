<style>
    .side-bar {
        background-color: var(--bg_sidebar);
    }

    label {
        color: var(--c_label);
        font-size: 1.3rem;
    }
</style>
<div class="side-bar col-md-2 position-absolute h-100">
    <div class="app-header border-bottom">
        <div class="app-sidebar-logo mb-4 mx-4 pt-4 flex-shrink-0">
            <a href="index.html" class="d-flex justify-content-center">
                <h4 style="margin-bottom: 0;" class="fw600 lc1_5">Dirtylesc Company</h4>
            </a>
        </div>
    </div>
    <div class="app-wrapper m-4">
        <label for="" class="my-2 dt">
            <span class="menu-icon">
                <span class="svg-icon svg-icon-5">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        style="transform: rotate(90deg)" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"></path>
                        <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                            fill="currentColor"></path>
                    </svg>
                </span>
            </span>
            DashBoard</label>
        <div class="menu-sub flex-column list-unstyled m-0 p-0">
            <div class="menu-item py-2 my-2 flex-column @if ($currentRoute === 'users') current @endif">
                <a href="" class="px-1 d-flex align-items-center text-decoration-none">
                    <span class="bullet bullet-dot mx-3 "></span>
                    <span class="currentSpan">Users</span>
                </a>
            </div>
            <div class="menu-item py-2 my-2 @if ($currentRoute === 'comics') current @endif">
                <a href="" class="px-1 d-flex align-items-center text-decoration-none">
                    <span class="bullet bullet-dot mx-3 "></span>
                    <span class="currentSpan">Comics</span>
                </a>
            </div>
        </div>
    </div>
</div>
