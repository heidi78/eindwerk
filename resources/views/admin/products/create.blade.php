@extends('layouts.dashboard')
@section('content')

<h3 class="plaats">Create Product</h3>
<div class="row">
    <div class="col-md-5 spatie">
        {!! Form::open(['method'=>'POST', 'action'=>['ProductsController@store'],
            'files'=>true])
            !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control'])!!}
            </div>        
            <div class="form-group">
                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('price', 'Price:') !!}
                {!! Form::text('price', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Category:') !!}
                {!! Form::select('category_id', [''=>'Choose options'] + $categories,null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('brand_id', 'Brand:') !!}
                {!! Form::select('brand_id', [''=>'Choose options'] + $brands,null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('user_id', 'User:') !!}
                {!! Form::select('user_id', [''=>'Choose options'] + $users,null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Create Product', ['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    
    @endsection