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
			                    <h1>Subject</h1>
			                </div>
			                <div class="breadcrumb-list">
			                    <ul>
			                        <li><a href="{{route('web.index')}}">Home</a></li>
			                        <li><a href="#">Subject</a></li>
			                    </ul>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>

			<div class="research-sec pt-100 pb-100">
			    <div class="container">
			        <div class="row">
			            <div class="research-item">
			                <div class="col-md-4 col-sm-6 inner">
			                    <div class="media">
			                        <div class="research-thumb">
			                            <a href="{{route('web.material.material')}}"><img src="{{asset('web/img/s1.jpg')}}" alt="" /></a>
			                            <div class="research-icon">
			                                <div class="readmore-button">
			                                    <a href="{{route('web.material.material')}}">View</a>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="research-inner-text">
			                            <div class="media-body">
			                                <h2><a href="{{route('web.material.material')}}">Accounting & Finance</a></h2>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			            <div class="research-item">
			                <div class="col-md-4 col-sm-6 inner">
			                    <div class="media">
			                        <div class="research-thumb">
			                            <a href="{{route('web.material.material')}}"><img src="{{asset('web/img/s2.jpg')}}" alt="" /></a>
			                            <div class="research-icon">
			                                <div class="readmore-button">
			                                    <a href="{{route('web.material.material')}}">View</a>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="research-inner-text">
			                            <div class="media-body">
			                                <h2><a href="{{route('web.material.material')}}">Accounting & Finance</a></h2>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			            <div class="research-item">
			                <div class="col-md-4 col-sm-6 inner">
			                    <div class="media">
			                        <div class="research-thumb">
			                            <a href="{{route('web.material.material')}}"><img src="{{asset('web/img/s3.jpg')}}" alt="" /></a>
			                            <div class="research-icon">
			                                <div class="readmore-button">
			                                    <a href="{{route('web.material.material')}}">View</a>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="research-inner-text">
			                            <div class="media-body">
			                                <h2><a href="{{route('web.material.material')}}">Accounting & Finance</a></h2>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			            <div class="research-item">
			                <div class="col-md-4 col-sm-6 inner">
			                    <div class="media">
			                        <div class="research-thumb">
			                            <a href="{{route('web.material.material')}}"><img src="{{asset('web/img/s4.jpg')}}" alt="" /></a>
			                            <div class="research-icon">
			                                <div class="readmore-button">
			                                    <a href="{{route('web.material.material')}}">View</a>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="research-inner-text">
			                            <div class="media-body">
			                                <h2><a href="{{route('web.material.material')}}">Accounting & Finance</a></h2>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			            <div class="research-item">
			                <div class="col-md-4 col-sm-6 inner">
			                    <div class="media">
			                        <div class="research-thumb">
			                            <a href="{{route('web.material.material')}}"><img src="{{asset('web/img/s5.jpg')}}" alt="" /></a>
			                            <div class="research-icon">
			                                <div class="readmore-button">
			                                    <a href="{{route('web.material.material')}}">View</a>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="research-inner-text">
			                            <div class="media-body">
			                                <h2><a href="{{route('web.material.material')}}">Accounting & Finance</a></h2>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			            <div class="research-item">
			                <div class="col-md-4 col-sm-6 inner">
			                    <div class="media">
			                        <div class="research-thumb">
			                            <a href="{{route('web.material.material')}}"><img src="{{asset('web/img/s6.jpg')}}" alt="" /></a>
			                            <div class="research-icon">
			                                <div class="readmore-button">
			                                    <a href="{{route('web.material.material')}}">View</a>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="research-inner-text">
			                            <div class="media-body">
			                                <h2><a href="{{route('web.material.material')}}">Accounting & Finance</a></h2>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
    	@endsection   

      