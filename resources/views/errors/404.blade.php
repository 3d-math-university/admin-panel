<!--404 ERROR! Not found page...-->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Whoops! There is an error.</title>

        <!-- Styles -->
        {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
        <link href="{{ asset('css/errors.css') }}" rel="stylesheet">
</head>
<body class="errpage__content-root">
    <div class="errpage__content-text--header">404</div>
    <span class="errpage__content-text">sorry, the page you are looking for doesn't exist</span>
    <div class="errpage__return--wrapper"><a href="{{ route('departments') }}" class="errpage__return">return to main</a></div>
</body>
</html>