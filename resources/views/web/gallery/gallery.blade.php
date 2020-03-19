	  	@extends('web.templete.master')

	    {{-- META --}}
	    @section('meta')
	     <title>Parakiaki Academy</title>
	     <!--<meta name="description" content="">-->
	     <!--<meta name="author" content="">-->
	     <!--<meta name="keywords" content="">-->
	    @endsection

	    @section('content') 
	        <div class="pagehding-sec">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12">
		                    <div class="page-heading">
		                        <h1>Gallery</h1>
		                    </div>
		                    <div class="breadcrumb-list">
		                        <ul>
		                            <li><a href="{{route('web.index')}}">Home</a></li>
		                            <li><a href="#">Gallery </a></li>
		                        </ul>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="gallery-sec pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="gallery-area">

                <div class="navbarsort">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarfiltr" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="shorttitle">
                        <h2>Sort Gallery</h2>
                    </div>
                </div>

                <div class="gallery-container">

                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="gallery-item">
                            <img src="{{asset('web/img/g1.jpg')}}" alt="">
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-text">
                                    <span class="gallery-button">
										<a href="{{asset('web/img/g1.jpg')}}" class="gallery-photo"><i class="fa fa-file-image-o"></i></a>
									</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="gallery-item">
                            <img src="{{asset('web/img/g2.jpg')}}" alt="">
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-text">
                                    <span class="gallery-button">
										<a href="{{asset('web/img/g2.jpg')}}" class="gallery-photo"><i class="fa fa-file-image-o"></i></a>
									</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="gallery-item">
                            <img src="{{asset('web/img/g3.jpg')}}" alt="">
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-text">
                                    <span class="gallery-button">
										<a href="{{asset('web/img/g3.jpg')}}" class="gallery-photo"><i class="fa fa-file-image-o"></i></a>
									</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="gallery-item">
                            <img src="{{asset('web/img/g4.jpg')}}" alt="">
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-text">
                                    <span class="gallery-button">
										<a href="{{asset('web/img/g4.jpg')}}" class="gallery-photo"><i class="fa fa-file-image-o"></i></a>
									</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="gallery-item">
                            <img src="{{asset('web/img/g5.jpg')}}" alt="">
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-text">
                                    <span class="gallery-button">
										<a href="{{asset('web/img/g5.jpg')}}" class="gallery-photo"><i class="fa fa-file-image-o"></i></a>
									</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="gallery-item">
                            <img src="{{asset('web/img/g6.jpg')}}" alt="">
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-text">
                                    <span class="gallery-button">
										<a href="{{asset('web/img/g6.jpg')}}" class="gallery-photo"><i class="fa fa-file-image-o"></i></a>
									</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <div class="gallery-item">
                            <img src="{{asset('web/img/g7.jpg')}}" alt="">
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-text">
                                    <span class="gallery-button">
										<a href="{{asset('web/img/g7.jpg')}}" class="gallery-photo"><i class="fa fa-file-image-o"></i></a>
									</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3 ">
                        <div class="gallery-item">
                            <img src="{{asset('web/img/g8.jpg')}}" alt="">
                            <div class="gallery-overlay">
                                <div class="gallery-overlay-text">
                                    <span class="gallery-button">
										<a href="{{asset('web/img/g8.jpg')}}" class="gallery-photo"><i class="fa fa-file-image-o"></i></a>
									</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-12">
                    <div class="gallery-load-more-btn">
                        <a href="#">Load More Gallery</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
    	@endsection   

      