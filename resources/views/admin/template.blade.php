@extends('template')
@section('content')

<div class="row m-2">
    <div class="col-md-3">

        <div class="nav flex-column nav-pills mb-3 text-center">
            <a href="#" class="nav-link ">מערכת ניהול</a>
            <a href="#" class="nav-link ">קטגוריות</a>
            <a href="#" class="nav-link ">שיעורים</a>
            <a href="#" class="nav-link ">ספרים</a>
            <a href="#" class="nav-link ">רבנים</a>
            <a href="#" class="nav-link ">משתמשים</a>
            <a href="#" class="nav-link ">שידורים חיים</a>
            <a href="#" class="nav-link ">חדשים</a>
            <a href="#" class="nav-link ">עמודים</a>
        </div>

    </div>
    <div class="col-md-9">
        @yield('admin-content')
    </div>
</div>
@endsection