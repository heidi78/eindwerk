@extends('layouts.dashboard')
@section('content')

    <h3 class="plaats">Edit Brands</h3>
    <div class="row">
        <div class="col-md-9 spatie">

            {!! Form::model($brand, ['method'=>'PATCH', 'action'=> ['BrandsController@update', $brand->id],'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control kleiner'])!!}
            </div>
        
            <div class="form-group">
                {!! Form::submit('Update Brand', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE', 'action'=> ['BrandsController@destroy', $brand->id]]) !!}
            <div class="form-group">
                {!! Form::submit(' Delete Brand', ['class'=>'btn btn-danger']) !!}
            </div>
            {!! Form::close() !!}

        </div>

    </div>
    <div>
        @include('includes.form_error')
    </div>

@endsection