<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('images/cruise-planner-logo.jpg') }}" alt="Cruise Planner" />
           <!-- Logo -->
        </a>
    </div>
    <div class="menu-sidebar2__content js-scrollbar1">
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
           
                <!-- <li>
                    <a href="chart.html">
                        <i class="fas fa-chart-bar"></i>Charts</a>
                </li> -->
               <!--  <li>
                    <a href="">
                        <i class="fas fa-table"></i>File Lists</a>
                </li> -->

                
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-mail-bulk"></i>Inquiries
                        <span class="arrow">
                            <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('inquiries.showInquiries') }}">All Inquiries</a>
                        </li>
                        <!-- <li>
                            <a href="">Manage Roles</a>
                        </li> -->
                       <!--  <li>
                            <a href="forget-pass.html">Forget Password</a>
                        </li> -->
                    </ul>
                </li>

                @if(auth()->user()->hasRole->role_name == 'System Admin')
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-users"></i>User Management
                            <span class="arrow">
                                <i class="fas fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="{{ route('usermanagement.usersList') }}">All Users</a>
                            </li>
                            <li>
                                <a href="{{ route('usermanagement.rolesList') }}">Manage Roles</a>
                            </li>
                           <!--  <li>
                                <a href="forget-pass.html">Forget Password</a>
                            </li> -->
                        </ul>
                    </li>
                @endif
              
                <!-- <li>
                    <a href="#">
                        <i class="fas fa-calendar-alt"></i>Calendar</a>
                </li>
                <li>
                    <a href="map.html">
                        <i class="fas fa-map-marker-alt"></i>Maps</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>UI Elements</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="button.html">Button</a>
                        </li>
                        <li>
                            <a href="badge.html">Badges</a>
                        </li>
                        <li>
                            <a href="tab.html">Tabs</a>
                        </li>
                        <li>
                            <a href="card.html">Cards</a>
                        </li>
                        <li>
                            <a href="alert.html">Alerts</a>
                        </li>
                        <li>
                            <a href="progress-bar.html">Progress Bars</a>
                        </li>
                        <li>
                            <a href="modal.html">Modals</a>
                        </li>
                        <li>
                            <a href="switch.html">Switchs</a>
                        </li>
                        <li>
                            <a href="grid.html">Grids</a>
                        </li>
                        <li>
                            <a href="fontawesome.html">Fontawesome Icon</a>
                        </li>
                        <li>
                            <a href="typo.html">Typography</a>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </nav>
    </div>
</aside>