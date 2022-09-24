<header id="home" class="welcome-hero">
    <div class="top-area">
        <div class="header-area">
            <!-- Start Navigation -->
            <div class="wrap-sticky" style="height: 114px;"><nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy on menu-center no-full" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->

                <div class="container">            
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            @if (session()->has('loginId'))
                            <li class="nav-setting" style="display: flex;">
                                <a href="#"><span class="lnr lnr-cog"></span></a>
                                <div class="dropdown-content">
                                    <a href="/user/{{(session()->get("loginId")) }}"  >Profile</a>
                                    <a href="/setting">Setting</a>
                                    <a href="/logout">Logout</a>
                                </div>
                            </li><!--/.search-->
                            
                            @else
                            <li class="sign-in-btn"><a href="/login">Login</a></li><!--sign-in btn-->
                            <li class="sign-up-btn"><a href="/join">Join</a></li><!--sign-up btn-->
                            @endif
                            <li class="search">
                                <a href="#"><span class="lnr lnr-magnifier"></span></a>
                            </li><!--/.search-->
                        </ul>
                    </div><!--/.attr-nav-->
                    <!-- End Atribute Navigation -->



                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        
                   
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="/"> RentU</a>

                    </div><!--/.navbar-header-->
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class=""><a href="/" data-id = "home" >home</a></li>
                            <li class=""><a href="/category" data-id = "shop">Shop</a></li>
                            <li class=""><a href="/about" data-id = "about">About</a></li>
                            <li class=""><a href="/contact" data-id="contact" id="contact">Contact</a></li>
                        </ul><!--/.nav -->
                    </div><!-- /.navbar-collapse -->
                </div><!--/.container-->
            </nav></div><!--/nav-->
            <!-- End Navigation -->
        </div><!--/.header-area-->
        <div class="clearfix"></div>

    </div>

    </div>

</header>