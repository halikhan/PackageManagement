<!DOCTYPE html>
<html>
<head>
    <title>Custom Auth in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic);

    body {
        background: #111d27;
        color: #111;
        min-width: 320px;
        font-size: 16px;
        font-weight: 300;
        line-height: 1.6;
        -webkit-font-smoothing: antialiased;
        -webkit-backface-visibility: hidden;
        position: relative;
        padding: 50px 20px;
    }

    .pricing {
        text-align: center;
        border: 1px solid #f0f0f0;
        color: #777;
        font-size: 14px;
        padding-left: 0;
        margin-bottom: 30px;
        font-family: 'Lato';
    }

    .pricing img {
        display: block;
        margin: auto;
        width: 32px;
    }

    .pricing li:first-child,
    .pricing li:last-child {
        padding: 20px 13px;
    }

    .pricing li {
        list-style: none;
        padding: 13px;
    }

    .pricing li+li {
        border-top: 1px solid #f0f0f0;
    }

    .pricing big {
        font-size: 32px;
    }

    .pricing h3 {
        margin-bottom: 0;
        font-size: 36px;
    }

    .pricing span {
        font-size: 12px;
        color: #999;
        font-weight: normal;
    }

    .pricing li:nth-last-child(2) {
        padding: 30px 13px;
    }

    .pricing button {
        width: auto;
        margin: auto;
        font-size: 15px;
        font-weight: bold;
        border-radius: 50px;
        color: #fff;
        padding: 9px 24px;
        background: #aaa;
        opacity: 1;
        transition: opacity .2s ease;
        border: none;
        outline: none;
    }

    .pricing button:hover {
        opacity: .9;
    }

    .pricing button:active {
        box-shadow: inset 0px 2px 2px rgba(0, 0, 0, 0.1);
    }

    /* pricing color */
    .p-green big,
    .p-green h3 {
        color: #4c7737;
    }

    .p-green button {
        background: #4c7737;
    }

    .p-yel big,
    .p-yel h3 {
        color: #ffbb42;
    }

    .p-yel button {
        background: #ffbb42;
    }

    .p-red big,
    .p-red h3 {
        color: #e13c4c;
    }

    .p-red button {
        background: #e13c4c;
    }

    .p-blue big,
    .p-blue h3 {
        color: #3f4bb8;
    }

    .p-blue button {
        background: #3f4bb8;
    }
</style>
<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">Package Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Package') }}">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('plans') }}">Plans</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>


                    @endguest
                </ul>
            </div>

        </div>
    </nav>
    @yield('content')
</body>
</html>
