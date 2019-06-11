@extends('layouts.dashboard')
@section('content')
<h1>Create Slider</h1>
<div class="row">
    
    <div class="col-md-5">
        {!! Form::open(['method'=>'POST', 'action'=>['SlidersController@store'],
            'files'=>true])
            !!}
            
            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Create Sliders', ['class'=>'btn btn-primary col-md-6']) !!}
            </div>

            
            {!! Form::close() !!}
        </div>
    </div>
    
    @endsection