<!DOCTYPE html>
<html>
<head>
    <title>Manage Product</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">'
    <link rel="stylesheet" href="app.css">
   <style>
    img {
        margin-top: 5%;
        width: 150px;
        height: 150px
        align-items: center;
        border-radius: 50%;
        margin-bottom: 30px;
        animation: app-logo-spin infinite 20s linear
        }
        @keyframes app-logo-spin {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .row {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .row .pull-left {
            margin-right: 10px;
        }

    </style>
</head>
<body>
  
<div class="container">
    @yield('content')
</div>
   
</body>
</html>
 
