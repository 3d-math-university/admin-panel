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
    <div class="errpage__content-self">
   <h1 class="errpage__content--header">Ooops...</h1>
    <h3 class="errpage__content--text">A 404 error occured. Maybe you're looking for another item?</h3>
</div>
</body>
</html>