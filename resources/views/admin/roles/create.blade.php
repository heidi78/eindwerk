@extends('layouts.dashboard')
@section('content')
<h3 class="plaats">Create Role</h3>
<div class="row">
    <div class="col-md-5 spatie">
        {!! Form::open(['method'=>'POST', 'action'=> 'RolesController@store','files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control '])!!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Role', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>
<div>
    @include('includes.form_error')
</div>
@endsection