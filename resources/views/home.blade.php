@extends('layouts.app')

@section('content')
    <section class="sidebar">
        <div class="sidebar__item sidebar__logo">
            <img src="../../images/backgrounds/background__admin.jpg" alt="" class="sidebar__logo-image sidebar__logo-image--default">
        </div>
        <div class="sidebar__item sidebar__title">
            <h2 class="sidebar__title-text">My Faculty</h2>
        </div>
        <nav class="sidebar__item">
            <ul class="sidebar__menu">
                <li><a href="{{ route('home') }}" class="link sidebar__menu-item sidebar__menu-item--link">Dashboard</a></li>
                <li><a href="{{ route('home') }}" class="link sidebar__menu-item sidebar__menu-item--link">Departments</a></li>
                <li><a href="{{ route('home') }}" class="link sidebar__menu-item sidebar__menu-item--link">Settings</a></li>
                <li><a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"
                       class="link sidebar__menu-item sidebar__menu-item--exit">
                        Exit
                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>



            </ul>
        </nav>
        <footer class="sidebar__item sidebar__item--footer">
            <span>CFU &copy; 2019</span>
        </footer>
    </section>
    <section class="page__inner">
        <div class="page__title">
            <h1 class="page__title-text page__title-text--large">Title</h1>
        </div>
        <div class="page__content">
            <ul class="page__list page__list--blocks">
                <li class="page__item page__item--block">
                    <a href="{{ route('home') }}" class="link page__link--block page__link--block-orange">
                        <img src="../../images/png/university.png" alt="" class="page__icon page__icon--large">
                        <h5 class="page__title-text page__title-text--medium">Departments</h5>
                    </a>
                </li>
                <li class="page__item page__item--block">
                    <a href="{{ route('home') }}" class="link page__link--block page__link--block-green">
                        <img src="../../images/png/gear.png" alt="" class="page__icon page__icon--large">
                        <h5 class="page__title-text page__title-text--medium">Settings</h5>
                    </a>
                </li>
                <li class="page__item page__item--block">
                    <a href="{{ route('home') }}" class="link page__link--block page__link--block-blue">
                        <img src="/" alt="" class="page__icon page__icon--large">
                        <h5 class="page__title-text page__title-text--medium">Item 3</h5>
                    </a>
                </li>
            </ul>
            <div class="page__statistics">
                <h4 class="page__title-text--medium">Statistics:</h4>
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
