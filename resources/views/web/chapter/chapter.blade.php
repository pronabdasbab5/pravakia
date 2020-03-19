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
			            	@foreach($document_record as $values)
			                <div class="page-heading">
			                    <h1>{{$values->category_name}}</h1>
			                </div>
			                @endforeach
			                <div class="breadcrumb-list">
			                    <ul>
			                        <li><a href="{{route('web.index')}}">Home</a></li>
			                        @foreach($document_record as $values)
			                        <li><a href="#">{{$values->category_name}}</a></li>
			                        @endforeach
			                    </ul>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>

			<div class="research-sec pt-100 pb-100">
			    <div class="container">
			        <div class="row">
			            <div class="research-item chapter faq-style1-sec col-md-10 col-md-offset-1">
			            	{{-- <div class="sec-title inner-HGS">
		                        <h1>ACCOUNTANCY & FINANCE</h1>
		                    </div> --}}
		                    @if(!empty($data) && (count($data) > 0))
		                    <div class="panel-group" id="accordion" role="tablist">
		                    	 @php
	                            $counter=0;
	                            @endphp
                                @foreach($data as $key => $item)
	                            <div class="panel">
	                            	 @php
	                            $counter++;
	                            @endphp
	                             	@if(!empty($item['topic']) && (count($item['topic']) > 0))
	                             	<div class="panel-heading" role="tab" id="titleOne">
	                                    <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{$counter}}" aria-expanded="true" aria-controls="collapseOne">
											{{$item['chapter_no']}}</a>
										</h4>
	                                </div>
	                                <div id="collapseOne{{$counter}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="titleOne">
	                                    <div class="panel-content">	                                        
							                <table class="table table-borderless">
												<thead>
												    <tr>
												      	<th class="number">Sl.No</th>
												      	<th class="name">Name</th>
												      	<th class="action">Action</th>			
												    </tr>
												</thead>
												<tbody>
													@foreach($item['topic'] as $key_1 => $item_1)
												    <tr>
												      	<td>1</td>
												      	
												      	<td>{{$item_1->name}}</td>
												        
												      	<td class="action">
												      		<button type="button" class="btn btn-warning" ><i class="fa fa-eye" aria-hidden="true" ></i>
												      			<a href="{{ route('web.file_download', ['topic_id' => encrypt($item_1->id)]) }}" target="_blank">View</a>
												      		</button>
												      	</td>			
												    </tr>	
												    @endforeach						    
												</tbody>
										    </table>
	                                    </div>
	                                </div>
	                            </div>
								@endif
	                           @endforeach
	                        </div>
	                        @endif
			            </div>
			        </div>
			    </div>
			</div>
    	@endsection   

      