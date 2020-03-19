@extends('admin.template.master')

@section('content')

 <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
             
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  @if(session()->has('msg'))
                                <div class="alert alert-success" role="alert">
                                            {{ session()->get('msg') }}
                                 </div>
                   @endif
                 
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create User Account </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{route('admin.create_account')}}">
                      @csrf

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="full_name">Full Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="full_name" required="required" class="form-control col-md-7 col-xs-12" value="{{ old('full_name') }}" name="full_name">
                        </div>
                         @error('full_name')
                              <div class="alert alert-warning">
                                {{$message}}
                              </div>
                           @enderror
                      </div>
                     
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" required="required" class="form-control col-md-7 col-xs-12" autocomplete="off" name="email">
                        </div>
                           @error('email')
                              <div class="alert alert-warning">
                                {{$message}}
                              </div>
                           @enderror
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mobile">Mobile <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel" id="mobile" required="required" class="form-control col-md-7 col-xs-12" autocomplete="off" name="mobile">
                        </div>
                         @error('mobile')
                              <div class="alert alert-warning">
                                {{$message}}
                              </div>
                           @enderror
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Stream</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="stream_id">
                            <option>Choose option</option>
                             @if(isset($stream_record) && !empty($stream_record) && (count($stream_record) > 0))
                                    @foreach($stream_record as $key => $value)
                                      @if($value->status==2)
                                        <option value="{{ $value->id }}">{{ ucwords($value->stream) }}</option>
                                      @endif
                                    @endforeach
                                @endif
            
                          </select>
                           @error('stream_id')
                              <div class="alert alert-warning">
                                {{$message}}
                              </div>
                           @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Class</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="class_id">
                            <option>Choose option</option>
                             @if(isset($class_record) && !empty($class_record) && (count($class_record) > 0))
                                    @foreach($class_record as $key => $value)
                                      @if($value->status==2)
                                        <option value="{{ $value->id }}">{{ ucwords($value->class_name) }}</option>
                                      @endif
                                    @endforeach
                                @endif
            
                          </select>
                           @error('class_id')
                              <div class="alert alert-warning">
                                {{$message}}
                              </div>
                           @enderror
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="city" required="required" class="form-control col-md-7 col-xs-12" autocomplete="off" name="city">
                        </div>
                         @error('city')
                              <div class="alert alert-warning">
                                {{$message}}
                              </div>
                         @enderror
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="state">State <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="state" required="required" class="form-control col-md-7 col-xs-12" autocomplete="off" name="state">
                        </div>
                          @error('state')
                              <div class="alert alert-warning">
                                {{$message}}
                              </div>
                         @enderror
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="address" name="address"></textarea>
                        </div>
                          @error('address')
                              <div class="alert alert-warning">
                                {{$message}}
                              </div>
                         @enderror
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pin">PIN <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="state" required="required" class="form-control col-md-7 col-xs-12" autocomplete="off" name="pin">
                        </div>
                        @error('pin')
                              <div class="alert alert-warning">
                                {{$message}}
                              </div>
                         @enderror

                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="state">Image<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="file" required="required" class="form-control col-md-7 col-xs-12" autocomplete="off" name="file">
                        </div>
                         @error('file')
                              <div class="alert alert-warning">
                                {{$message}}
                              </div>
                         @enderror
                      </div>

                      

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                            <input type="radio" name="gender" value="female"> Female
                          </div>
                           @error('gender')
                              <div class="alert alert-warning">
                                {{$message}}
                              </div>
                           @enderror
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="birthday" type="date" name="dob" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                         @error('dob')
                              <div class="alert alert-warning">
                                {{$message}}
                              </div>
                           @enderror
                      </div>
                        
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Create Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" class="date-picker form-control col-md-7 col-xs-12" required="required" name="password" type="password">
                        </div>
                         @error('password')
                              <div class="alert alert-warning">
                                {{$message}}
                              </div>
                           @enderror
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Retype Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="retype_password" class="date-picker form-control col-md-7 col-xs-12" required="required" name="retype_password" type="password">
                        </div>
                      </div>
                       @error('retype_password')
                              <div class="alert alert-warning">
                                {{$message}}
                              </div>
                           @enderror


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
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
