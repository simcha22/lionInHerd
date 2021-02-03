@extends('template')
@section('content')
<nav class="mt-2" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">דף הבית</a></li>
        <li class="breadcrumb-item active" aria-current="page">שלח הודעה לרב</li>
    </ol>
</nav>
<div class="row">
    <div class="col-lg-3">
        <p class="text-center m-5">אנא הכניסו פרטים ובחרו לאיזה רב ברצונכם לשלוח שאלה</p>
    </div>
    <div class="col-lg-9">
        <h1 class="text-center">שלח הודעה לרב</h1>

        <div class="shadow p-3 mb-5 bg-white rounded">
            <div class="" style="direction: rtl;">
                <form>
                    <div class="row">
                        <div class="col-lg-6">
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
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>בחר רב</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="mb-3">
                                <label for="title" class="form-label">כותרת השאלה:</label>
                                <input type="text" class="form-control" id="title">
                            </div>
                            <div class="mb-3">
                                <label for="body" class="form-label">תוכן השאלה:</label>
                                <textarea rows="6" class="form-control" id="body"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">שלח</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection