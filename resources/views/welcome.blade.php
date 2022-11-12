<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>test</title>
    <!-- <script src="/js/app.js"></script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,500,500i,700,700i,900,900i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
</head>

<body style="background: #FF6700;">
   
    <nav class="navbar navbar-light navbar-expand-md justify-content-xl-center" style="padding-bottom: 50px;padding-top: 50px;">
        <div class="container-fluid">
            <div class="col-12 d-xl-flex justify-content-xl-center"><img class="justify-content-xl-center" src="{{url('images/logo.png')}}"></div>
        </div>
    </nav>
    <div id="app">
        <main-component route="{{ route('Dictionary.words') }}" ></main-component>
    </div>
 
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>