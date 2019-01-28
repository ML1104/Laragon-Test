<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        #formContainer {
            margin-top: 100px;
        }

        #contactForm {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        #contactForm input {
            margin: 10px;
            padding: 5px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Contact
        </div>

        <div class="links">
            <a href="home">Home</a>
            <a href="products">Products</a>
            <a href="services">Services</a>
            <a href="about">About</a>
        </div>

        <div id="formContainer">
            <form action="" id="contactForm">
                <label for="firstName">First Name:</label>
                <input type="text" name="firstName">

                <label for="lastName">Last Name:</label>
                <input type="text" name="lastname">

                <label for="email">Email:</label>
                <input type="email" name="email">

                <label for="message">Message:</label>
                <textarea name="message" id="contactMsg" cols="30" rows="10"></textarea>

                <input type="submit">
            </form>
        </div>
    </div>
</div>
</body>
</html>
