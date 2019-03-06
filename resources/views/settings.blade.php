@extends('layouts.admin')

@section('content')

    <section class="page__inner">
        <div class="page__title">
            <h1 class="page__title-text page__title-text--large">Settings</h1>

            @if (Session::has('success'))

                {{ session('success') }}

            @endif

        </div>
        <div class="page__content">
            <form action="{{ route('settings')  }}" class="page__form" method="POST">

                {{ csrf_field() }}

                <div class="page__form-item">
                    <div>
                        <label for="" class="page__form-label">Email</label>
                    </div>
                    <input type="email" class="btn page__form-input" name="email" value="@if(old('email')){{ old('email') }}@else{{ Auth::user()->email }}@endif">
                    <p>Current email: <span>{{ Auth::user()->email }}</span></p>

                    @if ($errors->has('email'))

                        <div class="form__fail">
                            <img src="{{ asset('/images/png/alert.png') }}" alt="" class="form__icon form__icon--small form__icon--fail">
                            <span class="form__text form__text--fail">{{ $errors->first('email') }}</span>
                        </div>

                    @endif

                </div>
                <div class="page__form-item">
                    <div>
                        <label for="" class="page__form-label">Change password</label>
                    </div>
                    <input type="password" class="btn page__form-input" name="password">

                    @if ($errors->has('password'))

                        <div class="form__fail">
                            <img src="{{ asset('/images/png/alert.png') }}" alt="" class="form__icon form__icon--small form__icon--fail">
                            <span class="form__text form__text--fail">{{ $errors->first('password') }}</span>
                        </div>

                    @endif

                </div>
                <div class="page__form-item">
                    <div>
                        <label for="" class="page__form-label">Repeat password</label>
                    </div>
                    <input type="password" class="btn page__form-input" name="password_confirmation">

                    @if ($errors->has('password_confirmation'))

                        <div class="form__fail">
                            <img src="{{ asset('/images/png/alert.png') }}" alt="" class="form__icon form__icon--small form__icon--fail">
                            <span class="form__text form__text--fail">{{ $errors->first('password_confirmation') }}</span>
                        </div>

                    @endif

                </div>
                <div class="page__form-item">
                    <input type="submit" class="btn btn--blue page__form-submit" value="Submit">
                </div>
            </form>
        </div>
    </section>

@endsection