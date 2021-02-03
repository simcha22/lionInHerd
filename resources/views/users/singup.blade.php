@extends('template')
@section('content')
<nav class="mt-2" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">דף הבית</a></li>
            <li class="breadcrumb-item active" aria-current="page">הרשמה</li>
        </ol>
    </nav>
<h1 class="text-center m-3">הרשמה למערכת</h1>
<div class="row">
    <div class="col-lg-4">
        <p class="text-center">אנא הכניסו את פרטיכם</p>
    </div>
    <div class="col-lg-4">
        <div class="shadow p-3 mb-5 bg-white rounded">
            <div style="direction: rtl;">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">שם מלא:</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">כתובת מייל:</label>
                        <input type="email" class="form-control" id="email">
                        <div class="form-text">לא נשתף את כתובת המייל שלך עם אף אחד</div>
                    </div>
                    <div class="mb-3">
                        <label for="password1" class="form-label">הקלד סיסמא:</label>
                        <input type="password" class="form-control" id="password1">
                    </div>
                    <div class="mb-3">
                        <label for="password2" class="form-label">הקלד שוב סיסמא:</label>
                        <input type="password" class="form-control" id="password2">
                    </div>
                    <div class="mb-3">
                        <input type="checkbox" class="form-check-input" id="approval">
                        <label class="form-check-label" for="approval"> מאשר לקבל עדכונים במייל</label>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">הרשם</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection