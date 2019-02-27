@extends('layouts.app')

@section('content')

    @php echo session('status'); @endphp

    @if (session('status'))

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

    @else

        <div class="auth-form">
            <div class="auth-form__bg"></div>
            <div class="auth-form__block">
                <div class="auth-form__block--left">
                    <img src="{{ asset('/images/backgrounds/background__admin.jpg') }}" alt="" class="auth-form__block--background">
                </div>
                <div class="auth-form__block--right auth-form__block--right-pos">
                    <div class="auth-form__block--content">
                        <div class="auth-form__logo">
                            <h1 class="auth-form__logo--title">Password restoration</h1>
                        </div>
                        <form method="POST" action="{{ route('password.email') }}" class="form__wrapper">
                            {{ csrf_field() }}

                            <div class="form__items">
                                <div class="form__item">
                                    <span class="form__text">Please enter your email. If it exists we'll send you an email with a restoration link. </span>
                                </div>
                                <div class="form__item">
                                    <label for="email" class="form__label form__label--auth">Your Email</label>
                                    <div class="form__input-wrapper">
                                        <input type="email" class="form__input--bar">
                                        <img src="{{ asset('/images/png/envelope.png') }}" alt="" class="form__icon form__icon--small form__icon--input">
                                    </div>
                                </div>
                                <!--here goes php code if error--> 
                                <div class="form__fail">
                                    <img src="../../images/png/alert.png" alt="" class="form__icon form__icon--small form__icon--fail">
                                    <span class="form__text form__text--fail">error ocurred</span>
                                </div>
                                <!--end of php code-->
                                <div class="form__item form__item--right">
                                    <input type="submit" class="btn btn--blue" value="Send message">
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

    @endif

@endsection
