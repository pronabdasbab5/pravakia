 <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-8">
                        <div class="header-left">
                            <ul>
                                <li><i class="fa fa-phone"></i>+00 0123456789</li>
                                <li><i class="fa fa-envelope-o"></i><a href="" class="__cf_email__">demomail@mail.co</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-4">
                        <div class="header-right-div">
                            <div class="soical-profile">
                                <span class="social-title">Follow Us</span>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hd-sec">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-4 col-sm-12 col-xs-8">
                        <div class="logo">
                            <a href="{{route('web.index')}}">
                                <img src="{{asset('web/img/logo/logo.jpg')}}" style="max-height: 80px;" />
                                <h3>
                                    Parakiaki Academy
                                    <span>Education center</span>
                                </h3>
                            </a>
                        </div>
                    </div>

                    <div class="mobile-nav-menu"></div>
                    <div class="col-md-8 col-sm-9 menu-center">
                        <div class="menu">
                            <nav id="main-menu" class="main-menu">
                                <ul>
                                    <li class="active"><a href="{{route('web.index')}}">Home</a></li>
                                    <li><a href="{{route('web.about.about')}}">About Us</a></li>
                                    <li><a href="{{route('web.gallery.gallery')}}">Gallery </a></li>
                                    <li><a href="{{route('web.acheivement.acheivement')}}">Achievement</a></li>
                                    <li><a class="topcat">Courses Offered<i class="fa fa-angle-down"></i></a>
                                        @auth('user')
                                            @if(!empty($header_data))
                                            <ul>
                                                <li>
                                         <a href="{{route('web.show_all_subjects',['id'=>$header_data->class_id,'stream_id'=>$header_data->stream_id])}}">
                                                        {{ $header_data->class_name }}
                                                    </a>
                                                </li>
                                            </ul>
                                            @endif
                                        @else
                                        <ul>
                                           
                                            <li><a href="{{route('web.login')}}">Class IX </a></li>
                                           
                                            <li><a href="{{route('web.login')}}">Class X </a></li>
                                            <li><a href="{{route('web.login')}}">Class XI</a></li>
                                            <li><a href="{{route('web.login')}}">Class XII </a></li>
                                        </ul>
                                        @endauth
                                    </li>
                                    <li><a class="topcat">Syllabus<i class="fa fa-angle-down"></i></a>
                                        <ul>
                                            <li><a href="{{route('web.syllabus.syllabus')}}">Class IX </a></li>
                                            <li><a href="{{route('web.syllabus.syllabus')}}">Class X </a></li>
                                            <li><a href="{{route('web.syllabus.syllabus')}}">Class XI</a></li>
                                            <li><a href="{{route('web.syllabus.syllabus')}}">Class XII </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Test Series</a></li>
                                    <li><a href="#">Contact</a></li>
                                    @auth('user')
                                    <li><a href="{{ url('/logout') }}">Logout</a></li>
                                    @else
                                    <li><a href="{{route('web.login')}}">Login</a></li>
                                    @endauth
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>