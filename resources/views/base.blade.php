<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <title>BOOK APP</title>
</head>
<body>


    @include('_navbar')

    @include('messages')

    <div class="container">
        @yield('content')
    </div>
</body>
<style>
    body {
    background-image: url('https://www.nypl.org/sites/default/files/8435321969_c1eea0631a_o.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    }
    </style> 
</html>
