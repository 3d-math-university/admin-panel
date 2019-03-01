@extends('layouts.admin')

@section('content')

<section class="page__inner">
    <div class="page__title">
        <h1 class="page__title-text page__title-text--large">Settings</h1>
    </div>
    <div class="page__content">
        <form action="{{ route('change.credentials')  }}" class="page__form" method="post">
            <div class="page__form-item">
                <div>
                    <label for="" class="page__form-label">Email</label>
                </div>
                <input type="text" class="btn page__form-input" name="email">
                <p>Current email: <span>{{ Auth::user()->email }}</span></p>
            </div>
            <div class="page__form-item">
                <div>
                    <label for="" class="page__form-label">Change password</label>
                </div>
                <input type="password" class="btn page__form-input" name="new_password">
            </div>
            <div class="page__form-item">
                <div>
                    <label for="" class="page__form-label">Repeat password</label>
                </div>
                <input type="password" class="btn page__form-input" name="repeat_password">
            </div>
            <div class="page__form-item">
                <input type="submit" class="btn btn--blue page__form-submit" value="Submit">
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
    </div>
</section>

@endsection