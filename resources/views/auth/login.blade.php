@extends('layouts.app')
@section('content')

    <div class="auth-form">
        <div class="auth-form__bg"></div>
        <div class="auth-form__block">
            <div class="auth-form__block--left">
                <img src="{{ asset('/images/backgrounds/background__admin.jpg') }}" alt="" class="auth-form__block--background">
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
                                    <input id="email" type="email" class="form__input--bar" name="email" value="{{ old('email') }}" required>
                                    <img src="{{ asset('/images/png/user.png') }}" alt="" class="form__icon form__icon--small form__icon--input">
                                </div>

                                @if ($errors->has('email'))

                                <div class="form__fail">
                                    <img src="{{ asset('/images/png/alert.png') }}" alt="" class="form__icon form__icon--small form__icon--fail">
                                    <span class="form__text form__text--fail">{{ $errors->first('email') }}</span>
                                </div>

                                @endif

                            </div>
                            <div class="form__item">
                                <label for="password" class="form__label form__label--auth">Your Password</label>
                                <div class="form__input-wrapper">
                                    <input id="password" type="password" class="form__input--bar" name="password" required>
                                    <img src="{{ asset('/images/png/key.png') }}" alt="" class="form__icon form__icon--small form__icon--input">
                                </div>

                                @if ($errors->has('password'))
                                <div class="form__fail">
                                    <img src="{{asset('/images/png/alert.png') }}" alt="" class="form__icon form__icon--small form__icon--fail">
                                    <span class="form__text form__text--fail">{{ $errors->first('password') }}</span>
                                </div>
                                @endif

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

@endsection
