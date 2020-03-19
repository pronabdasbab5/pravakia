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
			                    <h1>Acheivement</h1>
			                </div>
			                <div class="breadcrumb-list">
			                    <ul>
			                        <li><a href="{{route('web.index')}}">Home</a></li>
			                        <li><a href="#">Acheivement</a></li>
			                    </ul>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>

			<div class="research-sec pt-100 pb-100 achieve">
			    <div class="container">
			        <div class="row">
			            <div class="research-item">
			                <div class="col-md-3 col-sm-6 inner">
			                    <div class="course-inner">
		                            <div class="course-thumb">
		                                <img src="{{asset('web/img/teacher_1.jpg')}}" alt="" />		                                
		                                <div class="year">
		                                    <a>2019</a>
		                                </div>
		                            </div>
		                            <div class="course-meta">
		                                <span class="course-price">CEE 1st Rank</span><br>
		                                <span class="a-name">Vishal Nag</span>
		                            </div>
		                            <div class="studid">
		                            	<p>Student ID : R191110000151</p>
		                            </div>
		                            <div class="course-info">
		                                <ul>
		                                    <li><a>Class IX </a></li>
		                                </ul>
		                            </div>
		                        </div>
			                </div>
			            </div>
			            <div class="research-item">
			                <div class="col-md-3 col-sm-6 inner">
			                    <div class="course-inner">
		                            <div class="course-thumb">
		                                <img src="{{asset('web/img/teacher_2.jpg')}}" alt="" />		                                
		                                <div class="year">
		                                    <a>2019</a>
		                                </div>
		                            </div>
		                            <div class="course-meta">
		                                <span class="course-price">JEE 3rd Rank</span><br>
		                                <span class="a-name">Sanjiv Sutradhar</span>
		                            </div>
		                            <div class="studid">
		                            	<p>Student ID : R191110000151</p>
		                            </div>
		                            <div class="course-info">
		                                <ul>
		                                    <li><a>Class X </a></li>
		                                </ul>
		                            </div>
		                        </div>
			                </div>
			            </div>
			            <div class="research-item">
			                <div class="col-md-3 col-sm-6 inner">
			                    <div class="course-inner">
		                            <div class="course-thumb">
		                                <img src="{{asset('web/img/teacher_3.jpg')}}" alt="" />		                                
		                                <div class="year">
		                                    <a>2019</a>
		                                </div>
		                            </div>
		                            <div class="course-meta">
		                                <span class="course-price">AHSEC 8th Rank</span><br>
		                                <span class="a-name">Alex Das</span>
		                            </div>
		                            <div class="studid">
		                            	<p>Student ID : R191110000151</p>
		                            </div>
		                            <div class="course-info">
		                                <ul>
		                                    <li><a>Class XII </a></li>
		                                </ul>
		                            </div>
		                        </div>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
			<style>
				.achieve .course-info{
					font-weight: 500
				}
				.achieve .studid{
					padding: 0px 20px;
				}
				.achieve .a-name {
				    color: #22253a;
				    font-weight: 500;
				    text-transform: uppercase;
				}
				.achieve .course-meta {
				    line-height: 1.2
				}
				.achieve .course-thumb::before {
				    background: none;
				}
				.year {
				    text-align: center;
				    position: absolute;
				    top: 9%;
				    transform: translateY(-50%);
				    right: 0;
				    z-index: 4;
				}
				.year a {
				    background: #22253a;
				    color: #fff;
				    display: inline-block;
				    padding: 10px 26px;
				    text-transform: capitalize;
				    margin: 0;
				    position: relative;
				    z-index: 5;
				    font-weight: 600;
				}
				.achieve img {
					transform: scale(1)!important;
				}
			</style>
    	@endsection   

      