@extends('layouts.app')

@section('content')

    <div class="auth-form">
        <div class="auth-form__bg"></div>
        <div class="auth-form__block">
            <div class="auth-form__block--left">
                <img src="/images/backgrounds/background__admin.jpg" alt="" class="auth-form__block--background">
            </div>
            <div class="auth-form__block--right auth-form__block--right-pos">
                <div class="auth-form__block--content">
                    <div class="auth-form__logo">
                        <h1 class="auth-form__logo--title">My Faculty</h1>
                    </div>
                    <form method="POST" action="{{ route('login') }}" class="form__wrapper">

                        {{ csrf_field() }}

                        <div class="form__items">
                            <div class="form__item">
                                <label for="email" class="form__label form__label--auth">Your Login</label>
                                <div class="form__input-wrapper">
                                    <input id="email" type="email" class="form__input--bar" name="email" required>
                                    <img src="/images/png/user.png" alt="" class="form__icon form__icon--small form__icon--input">
                                </div>
                                <div class="form__fail">
                                    <img src="/images/png/alert.png" alt="" class="form__icon form__icon--small form__icon--fail">
                                    <span class="form__text form__text--fail">Error message</span>
                                </div>
                            </div>
                            <div class="form__item">
                                <label for="password" class="form__label form__label--auth">Your Password</label>
                                <div class="form__input-wrapper">
                                    <input id="password" type="password" class="form__input--bar" name="password" required>
                                    <img src="/images/png/key.png" alt="" class="form__icon form__icon--small form__icon--input">
                                </div>
                                <div class="form__fail">
                                    <img src="/images/png/alert.png" alt="" class="form__icon form__icon--small form__icon--fail">
                                    <span class="form__text form__text--fail">Error message</span>
                                </div>
                            </div>
                            <div class="form__item form__item--right">
                                <input type="submit" class="btn btn--blue" value="Let me in!">
                            </div>
                            <div class="form__item form__item--center">
                                <a href="{{ route('password.request') }}" class="link">Forgot your password?</a>
                            </div>
                        </div>
                    </form>
                    <!-- <footer class="footer__auth footer__auth--p">
                        <span>No Contest &copy; 2019</span>
                    </footer> -->
                </div>
            </div>

        </div>
    </div>



    {{----}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Login</div>--}}

                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-8 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Login--}}
                                {{--</button>--}}

                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--Forgot Your Password?--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

@endsection
