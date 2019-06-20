@extends('layouts.dashboard')
@section('content')

<h3 class="plaats">Edit Sliders</h3>
<div class="row">
    <div class="col-md-3 spatie">
        <img src="{{$slider->photo ? asset($slider->photo->file) : 'http://place-hold.it/400x400'}}" alt="{{$slider->name}}"
        class="img-responsive">
    </div>
    <div class="col-md-9 spatie">
        {!! Form::model($slider, ['method'=>'PATCH', 'action'=> ['SlidersController@update', $slider->id],'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control kleiner'])!!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update Slider', ['class'=>'btn btn-primary update']) !!}
        </div>
        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=> ['SlidersController@destroy', $slider->id]]) !!}
        <div class="form-group">
            {!! Form::submit(' Delete Slider', ['class'=>'btn btn-danger']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>
<div>
    @include('includes.form_error')
</div>

@endsection