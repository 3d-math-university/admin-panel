@extends('layouts.admin')

@section('content')

    <section class="page__inner">
        <div class="page__title">
            <h1 class="page__title-text page__title-text--large">Title</h1>
        </div>
        <div class="page__content">
            <ul class="page__list page__list--blocks">
                <li class="page__item page__item--block">
                    <a href="{{ route('departments') }}" class="link page__link--block page__link--block-orange">
                        <img src="{{ asset('/images/png/university.png') }}" alt="" class="page__icon page__icon--large">
                        <h5 class="page__title-text page__title-text--medium">Departments</h5>
                    </a>
                </li>
                <li class="page__item page__item--block">
                    <a href="{{ route('settings') }}" class="link page__link--block page__link--block-green">
                        <img src="{{ asset('/images/png/gear.png') }}" alt="" class="page__icon page__icon--large">
                        <h5 class="page__title-text page__title-text--medium">Settings</h5>
                    </a>
                </li>
                <li class="page__item page__item--block">
                    <a href="{{ route('page') }}" class="link page__link--block page__link--block-blue">
                        <img src="{{asset('/')}}" alt="" class="page__icon page__icon--large">
                        <h5 class="page__title-text page__title-text--medium">Item 3</h5>
                    </a>
                </li>
            </ul>
            <div class="page__statistics">
                <h4 class="page__title-text--medium">Statistics: </h4>
                <ul class="page__list">
                    <li class="page__item">
                        <p class="page__text">Departments: </p>
                    </li>
                    <li class="page__item">
                        <p class="page__text">Users: </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

@endsection
