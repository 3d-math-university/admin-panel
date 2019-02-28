@extends('layouts.admin')

@section('content')

    <section class="page__inner">
            <div class="page__title">
                <h1 class="page__title-text page__title-text--large">Departments</h1>
            </div>
            <div class="page__content">
                <div class="page__table_adapt">
                    <div class="page__table-item--header">
                        <div class="page__table-item page__table--number">
                            <p class="page__table--title">№</p>
                        </div>
                        <div class="page__table-item page__table--name">
                            <p class="page__table--title">Title</p>
                        </div>
                        <div class="page__table-item page__table--status">
                            <p class="page__table--title page__table--title-status">Is Active?</p>
                        </div>
                        <div class="page__table-item page__table--buttons">
                            <p class="page__table--title">Action</p>
                        </div>
                    </div>
                    <div class="page__table-item--block">
                        <div class="page__table-item page__table--number">
                            <p class="page__table--title page__table--title-number">0</p>
                        </div>
                        <div class="page__table-item page__table--name">
                            <a href="#" class="link page__table--title page__table--title-name">Page</a>
                        </div>
                        <div class="page__table-item page__table--status-select">
                            <select name="" id="">
                                <option value="true">True</option>
                                <option value="false">False</option>
                            </select>
                        </div>
                        <div class="page__table-item page__table--buttons">
                            <ul class="page__table--title page__list page__list--blocks">
                                <li class="page__table-item page__table-item--mx10">
                                    <a href="#" class="link link--box link--blue">
                                        <img src="{{ asset('images/png/pencil.png') }}" alt="edit" class="page__icon page__icon--small">
                                    </a>
                                </li>
                                <li class="page__table-item page__table-item--mx10">
                                    <a href="#" class="link link--box link--red">
                                        <img src="{{ asset('images/png/delete.png') }}" alt="delete" class="page__icon page__icon--small">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </section><br>
@endsection