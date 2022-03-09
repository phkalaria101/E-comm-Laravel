<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Comm Project</title>
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous">
    </script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{ View::make('header')}}
    @yield('content')
    {{ View::make('footer')}}
</body>
    <style>
        .custom-login{
            height: 500px;
            padding-top: 100px;
        }
        img.slider-img
        {
            height: 400px !important;
        }
        .custom-product
        {
            height: 600px;
        }
        .slider-text
        {
            background-color: #24465454 !important
        }
        .trending-img
        {
            height: 100px;
        }
        .trending-item 
        {
            float: right;
            width: 20%;
        }
        .trending-wrapper
        {
            margin: 20px;
        }
        .detail-img
        {
            height: 200px ;
        }
        .search-box 
        {
            width: 617px !important;
        }
        .cart-list-devider
        {
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }
        .footer 
        {
             /* position: fixed;  */
             left: 0; 
             bottom: 0; 
             width: 100%;
             background-color: whitesmoke;
        }
        .bgcolor
        {
            background-color: lightblue;
        }
        .bgcolor-footer
        {
            background-color: darkgray;
        }
        .h1, .h2, .h3, h1, h2, h3 
        {
            margin-top: 20px;
            margin-bottom: -4px;
        }
        .h3, h3 
        {
           font-size: 18px;
        }
        body 
        {
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 19px;
            line-height: 1.42857143;
            color: black;
            background-color: lightblue;
        }
        .navbar-default 
        {
            background-color: darkgray;
            border-color: darkgray;
        }
        /* @media screen and (min-width: 768px) */
        .carousel-caption 
        {
            right: 9%;
            left: 44%;
            padding-bottom: 214px;
        }
    }
      
    </style>

</html>