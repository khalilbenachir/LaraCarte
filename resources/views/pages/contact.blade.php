@extends('layouts.default',['title'=>'Contact'])

@section('content')
        <div class="container">
                <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2>Get In Touch</h2>
                            <p> you having trouble with this service, please <a href="/">ask for help</a>.</p>
            
                        <form method="POST" action="{{route('contactPost_path')}}">
                                    {{ csrf_field() }}
                                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                            <label for="exampleFormControlInput1">Name</label>
                                    <input name="name" value="{{old('name')}}" type="text" class="form-control" placeholder="example name">
                                    {!!$errors->first('name','<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group {{ $errors->has('email') ? 'has-error':'' }}">
                                      <label for="exampleFormControlInput1">Email address</label>
                                    <input name="email" value="{{old('email')}}" type="email" class="form-control" placeholder="name@example.com">
                                      {!!$errors->first('email','<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group {{ $errors->has('message') ? 'has-error':'' }}">
                                      <textarea name="message" value="{{old('message')}}" class="form-control" rows="10" cols="10"></textarea>
                                      {!!$errors->first('message','<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group">
                                      <button type="submit" class="btn btn-primary btn-block">Submit Enquiry »</button>
                                    </div>    
                                  </form>
            
                        </div>
                    </div>
        </div>
   
@stop