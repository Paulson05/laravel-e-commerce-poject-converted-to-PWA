
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
@include('backend.admin.template.partials.head')

<body class=" sidebar-mini ">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->





<div class="wrapper ">

    <div class="sidebar" data-color="orange">
        <!--
            Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
        -->

        <div class="logo">
            <a href="http://www.creative-tim.com/" class="simple-text logo-mini">
                CT
            </a>

            <a href="http://www.creative-tim.com/" class="simple-text logo-normal">
                Creative Tim
            </a>

            <div class="navbar-minimize">
                <button id="minimizeSidebar" class="btn btn-outline-white btn-icon btn-round">
                    <i class="now-ui-icons text_align-center visible-on-sidebar-regular"></i>
                    <i class="now-ui-icons design_bullet-list-67 visible-on-sidebar-mini"></i>
                </button>
            </div>

        </div>

        <div class="sidebar-wrapper" id="sidebar-wrapper">

            <div class="user">
                <div class="photo">
                    <img src="../assets/img/james.jpg" />
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                        James Amos
                        <b class="caret"></b>
                    </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#">
                                    <span class="sidebar-mini-icon">MP</span>
                                    <span class="sidebar-normal">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sidebar-mini-icon">EP</span>
                                    <span class="sidebar-normal">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sidebar-mini-icon">S</span>
                                    <span class="sidebar-normal">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

           @include('backend.admin.template.partials.sidenavbar')
        </div>
    </div>


    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
      @include('backend.admin.template.partials.navbar')
        <!-- End Navbar -->




        <div class="panel-header panel-header-lg" style="height: 20px!important;">




        </div>


        <div class="content">






          @yield('body')

        </div>

        <footer class="footer" >

            <div class=" container-fluid ">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com/">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com/">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com/">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright" id="copyright">
                    &copy; <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>, Designed by <a href="https://www.invisionapp.com/" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a>.
                </div>
            </div>



        </footer>


    </div>

</div>

@include('backend.admin.template.partials.script')
</body>
</html>
