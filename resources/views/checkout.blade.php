@extends('layouts.payment')
@section('content')

@if (session('succes_message'))
    <div class="alert alert-success">
        {{session('success_message')}}
        @endif
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 pay-color">
            <div class="panel panel-default">
               

                <div class="panel-body">
                    <form method="post" id="payment-form" action="{{url('/checkout')}}">
                        @csrf
                        <section>
                            <div class="pay-top">
                            <label for="amount">
                                <span class="input-label">Amount</span>
                                <div class="input-wrapper amount-wrapper">
                                    <input id="amount" name="amount" type="tel" min="1" placeholder="Amount"
                                           value="{{Cart::subTotal()}}">
                                </div>
                            </label>
                            </div>
                            <div class="bt-drop-in-wrapper">
                                <div id="bt-dropin"></div>
                            </div>
                        </section>
                        <input id="nonce" name="payment_method_nonce" type="hidden" />
                        <button class="btn btn-primary" type="submit" {{url('checkout')}}><span>Betaal</span></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-8 check-top">
                    @if(!Auth::check())

                        <div class="row">
                            <div class="col-12">
                            {!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store','files'=>true]) !!}
                            <div class="form-group">
                                {!! Form::label('name', 'Name:') !!}
                                {!! Form::text('name', null, ['class'=>'form-control payform'])!!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('email', 'Email:') !!}
                                {!! Form::email('email', null, ['class'=>'form-control'])!!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('password', 'Password:') !!}
                                {!! Form::password('password', ['class'=>'form-control'])!!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
                            </div>

                            {!! Form::close() !!}
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-12">

                                {!! Form::model(Auth::user(), ['method'=>'PATCH', 'action'=> ['AdminUsersController@update', Auth::user()->id],'files'=>true]) !!}
                                <div class="form-group">
                                    {!! Form::label('name', 'Name:') !!}
                                    {!! Form::text('name', null, ['class'=>'form-control'])!!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('email', 'Email:') !!}
                                    {!! Form::email('email', null, ['class'=>'form-control'])!!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('password', 'Password:') !!}
                                    {!! Form::password('password', ['class'=>'form-control'])!!}
                                </div>

                                <div class="form-group">
                                    {!! Form::submit('Update User', ['class'=>'flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 p-15']) !!}
                                </div>

                                {!! Form::close() !!}

                            </div>
                        </div>
                        @endif
                </div>
    </div>
</div>
<script src="https://js.braintreegateway.com/web/dropin/1.13.0/js/dropin.min.js"></script>
<script>
    var form = document.querySelector('#payment-form');
    var client_token = "{{$token}}";
    braintree.dropin.create({
        authorization: client_token,
        selector: '#bt-dropin',
        paypal: {
            flow: 'vault'
        }
    }, function (createErr, instance) {
        if (createErr) {
            console.log('Create Error', createErr);
            return;
        }
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            instance.requestPaymentMethod(function (err, payload) {
                if (err) {
                    console.log('Request Payment Method Error', err);
                    return;
                }
                // Add the nonce to the form and submit
                document.querySelector('#nonce').value = payload.nonce;
                form.submit();
            });
        });
    });
</script>
@endsection