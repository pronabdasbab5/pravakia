@extends('admin.template.master')

@section('content')

<div class="right_col" role="main">
        @if(session()->has('msg'))
          {{session()->get('msg')}}
        @endif
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Class</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    </div>
                    
                    <form id="demo-form2" method="POST" action="{{route('admin.add_class')}}" data-parsley-validate class="form-horizontal form-label-left" enctype='multipart/form-data'>
                    	@csrf
                      <div class="form-group">
                        
                        <div>
                          <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                            <label for="stream_id">Stream Type</label>
                            <select id="stream_id"  name="stream_type" class="form-control col-md-7 col-xs-12">
                                <option selected disabled value="">Choose Stream Type</option>
                                        <option value="2" name="stream_type">Stream</option>
                                        <option value="1" name="stream_type">No stream</option>
                                
                              
                            </select>
                             
                            @error('stream_type')
                                {{ $message }}
                            @enderror
                        </div>
                         
                         
                         
                        <div class="clearfix"></div>
                         <label >Add Class</label>
                          <input type="text" name="studentclass" class="form-control" required  autocomplete="off" />
                          @error('studentclass')
                              {{$message}}
                          @enderror 

                          
                          
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection