@extends('layouts.admin')

@section('content')

<section class="page__inner">
    <form action="{{ route('add') }}" class="page__form" method="post" enctype="multipart/form-data">
        <div class="page__title">
            <input type="text" placeholder="Title" class="page__title-text page__title-text--large page__title-text--input" name="title">
        </div>
        <div class="page__content">
            <div class="page__content--ib page__content--main">

            </div>
            <div class="page__content--ib page__content--sidebar">
                <div class="page__form-item--background"></div>
                <div class="page__form-item">
                    <input type="file" class="btn page__form-input" name="image">
                </div>
                <div class="page__form-item">
                    <div>
                        <label for="" class="page__form-label">Type of page</label>
                    </div>
                    <select name="" id="">
                        <option value="menu">Menu</option>
                        <option value="terms">Terms</option>
                        <option value="department_menu">Department menu</option>
                        <option value="department_page">Department page</option>
                    </select>
                </div>
                <div class="page__form-item">
                    <input type="submit" class="btn page__form-input page__form-input--submit" value="Submit">
                </div>
            </div>
        </div>
        {{ csrf_field() }}
    </form>
</section>

@endsection