@extends('layouts.dashboard')
@section('content')

<h3 class="plaats">Edit Roles</h3>
<div class="row">
    <div class="col-md-9 spatie">

        {!! Form::model($role, ['method'=>'PATCH', 'action'=> ['RolesController@update', $role->id],'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control kleiner'])!!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('Update Role', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=> ['RolesController@destroy', $role->id]]) !!}
        <div class="form-group">
            {!! Form::submit(' Delete Role ', ['class'=>'btn btn-danger']) !!}
        </div>
        {!! Form::close() !!}

    </div>

</div>
<div>
    @include('includes.form_error')
</div>

@endsection
