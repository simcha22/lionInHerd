<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ארי שבחבורה</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header class="text-color bg-peru">
        <div class="m-2"></div>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-peru">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img class="logo-img" src="{{ asset('images/logo.png') }}"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-4 ">
                            <li class="nav-item mr-2 ">
                                <a class="nav-link active" href="{{ url('/') }}">דף הבית</a>
                            </li>
                            <li class="nav-item mr-2">
                                <a class="nav-link" href="{{ url('about') }}">אודות</a>
                            </li>
                            <li class="nav-item mr-2">
                                <a class="nav-link" href="{{url('lessons')}}">שיעורים ודרשות</a>
                            </li>
                            <li class="nav-item mr-2">
                                <a class="nav-link" href="{{url('live')}}">שידור חי</a>
                            </li>
                            <li class="nav-item mr-2">
                                <a class="nav-link" href="{{url('books')}}">ספרים</a>
                            </li>
                            <li class="nav-item mr-2">
                                <a class="nav-link" href="{{url('rabbis')}}">רבנים</a>
                            </li>
                            <li class="nav-item mr-2">
                                <a class="nav-link" href="#">חדש</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder=" חיפוש שיעור" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit"> חפש</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            
            @yield('content')
        </div>
    </main>
    
    <footer class="bg-peru">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md text-center m-3">
                    <img class="w-50" src="{{ asset('images/logo.png') }}">
                    <div class="p-2 text-color">
                        כל הזכויות שמורות למערכת ארזי הלבנון
                    </div>
                    <div>2021@</div>
                </div>
                <div class="col-6 col-md m-3">
                    <h5>עמודים</h5>
                    <ul class="list-unstyled text-small">
                        <li><a href="{{url('/')}}">דף הבית</a></li>
                        <li><a href="{{url('about')}}">אודות</a></li>
                        <li><a href="{{url('lessons')}}">שיעורים</a></li>
                        <li><a href="{{url('live')}}">שידור חי</a></li>
                        <li><a href="{{url('login')}}">כניסה</a></li>
                        <li><a href="{{url('signup')}}">הרשמה</a></li>
                        <li><a href="{{url('admin')}}">מערכת ניהול</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md m-3">
                    <h5>רבנים</h5>
                    <ul class="list-unstyled text-small">
                        <li><a href="#">הרב דניאל אלטר</a></li>
                        <li><a href="#">הרב שאול אלטר</a></li>
                        <li><a href="#">הרב אברהם מרדכי אלטר</a></li>
                        <li><a href="#">הרב ...</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md m-3">
                    <h5>שיעורים ודרשות</h5>
                    <ul class="list-unstyled text-small">
                        <li><a href="#">דף היומי בבלי</a></li>
                        <li><a href="#">דף היומי ירושלמי</a></li>
                        <li><a href="#">חומש רש"י</a></li>
                        <li><a href="#">רמב"ם יומי</a></li>
                        <li><a href="#">אבות</a></li>
                        <li><a href="#">שפת אמת</a></li>
                        <li><a href="#">דרשות</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md m-3">
                    <h5>ספרים</h5>
                    <ul class="list-unstyled text-small">
                        <li><a href="#">פני מנחם</a></li>
                        <li><a href="#">דרשות ושיעורים</a></li>
                        <li><a href="#">שולי הגליון</a></li>
                        <li><a href="#">עברא דדשא</a></li>
                        <li><a href="#">מאה ואחד</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md m-3">
                    <h5>צור קשר</h5>
                    <ul class="list-unstyled text-small">
                        <li><a href="{{url('contact-rabbi')}}">שאלה לרב</a></li>
                        <li><a href="{{url('contact-system')}}">פניה למערכת</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        </div>
    </footer>
</body>

</html>