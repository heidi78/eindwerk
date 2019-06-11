@extends('layouts.dashboard')
@section('content')

<h3 class="plaats">Edit Products</h3>
<div class="row">
    <div class="col-md-3 spatie">
        <img src="{{$product->photo ? asset($product->photo->file) : 'http://place-hold.it/400x400'}}" alt="{{$product->name}}"
        class="img-responsive">
    </div>
    <div class="col-md-9 spatie">
        {!! Form::model($product, ['method'=>'PATCH', 'action'=> ['ProductsController@update', $product->id],'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control kleiner'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description', null, ['class'=>'form-control kleiner']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('price', 'Price:') !!}
            {!! Form::text('price', null, ['class'=>'form-control kleiner']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Category:') !!}
            {!! Form::select('category_id', [''=>'Choose options'] + $categories,null, ['class'=>'form-control kleiner']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('brand_id', 'Brand:') !!}
            {!! Form::select('brand_id', [''=>'Choose options'] + $brands,null, ['class'=>'form-control kleiner']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('user_id', 'User:') !!}
            {!! Form::select('user_id', [''=>'Choose options'] + $users,null, ['class'=>'form-control kleiner']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control kleiner'])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update Product', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=> ['ProductsController@destroy', $product->id]]) !!}
        <div class="form-group">
            {!! Form::submit(' Delete Product ', ['class'=>'btn btn-danger']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>
<div>
    @include('includes.form_error')
</div>

@endsection