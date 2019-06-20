@extends('layouts.dashboard')
@section('content')
<h3 class="plaats">Create Category</h1>
    <div class="row">
        <div class="col-md-5 spatie">
            {!! Form::open(['method'=>'POST', 'action'=>['CategoriesController@store'],
                'files'=>true])
                !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control'])!!}
                </div>        
                <div class="form-group">
                    {!! Form::label('photo_id', 'Photo:') !!}
                    {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>

        @endsection