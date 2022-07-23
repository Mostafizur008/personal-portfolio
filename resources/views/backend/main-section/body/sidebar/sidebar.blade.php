<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head center">
@include('backend.main-section.body.sidebar.logo.logo')
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">USER MODULE</h6>
                    </li><!-- .nk-menu-heading -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-round"></em></span>
                            <span class="nk-menu-text">Profile Management</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('profile.view')}}" class="nk-menu-link"><span class="nk-menu-text">My Profile</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('change.password')}}" class="nk-menu-link"><span class="nk-menu-text">Change Password</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li>
                    
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Setup Module</h6>
                    </li><!-- .nk-menu-heading -->
                    <li class="nk-menu-item has-sub">
                        <a href="{{route('about.view')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-alert-circle-fill"></em></span>
                            <span class="nk-menu-text">About Management</span>
                        </a>
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="{{route('work.view')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-grid"></em></span>
                            <span class="nk-menu-text">Work Management</span>
                        </a>
                    </li>
                    
                     
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-clipboad-check"></em></span>
                            <span class="nk-menu-text">Resume Management</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('resume.view')}}" class="nk-menu-link"><span class="nk-menu-text">Experiance</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('ed.view')}}" class="nk-menu-link"><span class="nk-menu-text">Education</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('sk.view')}}" class="nk-menu-link"><span class="nk-menu-text">Skills</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li>

                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-info-i"></em></span>
                            <span class="nk-menu-text">Others Management</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('resume.view')}}" class="nk-menu-link"><span class="nk-menu-text">Tyeping</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('social.view')}}" class="nk-menu-link"><span class="nk-menu-text">Social Netwrok</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li>

                    <li class="nk-menu-item has-sub">
                        <a href="{{route('setting.view')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting-alt"></em></span>
                            <span class="nk-menu-text">Site Settings</span>
                        </a>
                    </li>
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>