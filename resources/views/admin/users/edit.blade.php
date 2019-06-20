@extends('layouts.dashboard')
@section('content')

<h3 class="plaats">Edit User</h3>
<div class="row">
    <div class="col-md-3 spatie">
        <img src="{{$user->photo ? asset($user->photo->file) : 'http://place-hold.it/400x400'}}" alt="{{$user->name}}"
        class="img-responsive">
    </div>
    <div class="col-md-9 spatie">
        {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['AdminUsersController@update', $user->id],'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control kleiner'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class'=>'form-control kleiner'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('role_id', 'Role:') !!}
            {!! Form::select('role_id', [''=>'Choose Options'] + $roles , null, ['class'=>'form-control kleiner'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', array(1 => 'Active', 0=> 'Not Active'), null , ['class'=>'form-control kleiner'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class'=>'form-control kleiner'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control kleiner'])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update User', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminUsersController@destroy', $user->id]]) !!}
        <div class="form-group">
            {!! Form::submit(' Delete user ', ['class'=>'btn btn-danger']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>
<div>
    @include('includes.form_error')
</div>

@endsection

