@extends('layouts.app')

@section('content')

    <div class="auth-form">
        <div class="auth-form__bg"></div>
        <div class="auth-form__block">
            <div class="auth-form__block--success">
                <div class="auth-form__block--content">
                    <div class="auth-form__logo form__item--center">
                        <img src="{{ asset('/images/png/success.png') }}" alt="" class="form__icon form__icon--large form__icon--success">
                        <h1 class="auth-form__logo--title">Success!</h1>
                    </div>
                    <form action="" class="form__wrapper">
                        <div class="form__items">
                            <div class="form__item form__item--center">
                                <span class="form__text">Email was sent. Check your mailbox.</span>
                            </div>
                            <div class="form__item form__item--center form__item--mt30">
                                <a href="{{ route('login') }}" class="btn btn--blue">Back to sign up</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
