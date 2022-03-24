@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        html,
        body {
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
            align-items: flex-start;
            display: flex;
            justify-content:center;
            margin-left: 5%;
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

        .video {
            margin-top: 12%;
            margin-left: 12%;
        }

        .contact {
            margin-top: 20%;
            font-size: 13px;
            text-align: center;
            color: #636b6f;
            letter-spacing: .07rem;
            margin-bottom: 2px;
        }

        .info {
            margin-top: 2px;
            color: #636b6f;
            font-size: 13px;
            text-align: center;
            color: #636b6f;
            letter-spacing: .07rem;
        }

        .title {
            font-size: 24px;
        }

        .links>a {
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

        .margin{
            margin-right: 20px;
        }

        .top{
            margin-top: 15%;
        }
    </style>
</head>

<body>
    <div class="content top">
        <div class="flex-center">
            <div class="title m-b-md margin">
                <p>Structured Query Language</p>
                <a href="{{ url('learning') }}"><img src="{{asset('lte/dist/img/logo-sql.png')}}" alt="APLAS logo" class="brand-image elevation-3" style="opacity: .8"></a>
            </div>
            <div class="title m-b-md">
                <p>Android</p>
                <a href="{{ url('home') }}"><img src="{{asset('lte/dist/img/logo-android.png')}}" alt="APLAS logo" class="brand-image elevation-3" style="opacity: .8"></a>
            </div>
            <!-- <div class="video">
        <iframe width="460" height="325" src="//www.youtube.com/embed/Fxb83_UFI0M" frameborder="0" allowfullscreen></iframe>
    </div> -->
        </div>
    </div>
</body>

</html>
<!-- <div class="card-body"> -->
<!-- <form action="{{ url('/login') }}"> -->


<!-- </form> -->
<!-- </div> -->