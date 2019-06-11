@extends('layouts.dashboard')
@section('content')

<h3 class="plaats">Edit Categories</h3>

    <div class="row">
        <div class="col-md-3 spatie">
            <img src="{{$cat->photo ? asset($cat->photo->file) : 'http://place-hold.it/400x400'}}" alt="{{$cat->name}}" class="img-responsive ">
        </div>
        <div class="col-md-9 spatie">

            {!! Form::model($cat, ['method'=>'PATCH', 'action'=> ['CategoriesController@update', $cat->id],'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control kleiner'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::submit('Update Category', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE', 'action'=> ['CategoriesController@destroy', $cat->id]]) !!}
            <div class="form-group">
                {!! Form::submit(' Delete Category ', ['class'=>'btn btn-danger']) !!}
            </div>
            {!! Form::close() !!}

        </div>

    </div>
    <div>

    @include('includes.form_error')
</div>

@endsection