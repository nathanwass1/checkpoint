<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Film Site ')</title>
<link rel ="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.0/css/bulma.css">
@yield('style') 

     <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                text-align: bottom;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .control{
                text-align: center;
            }
            
        </style>
@yield('style')
</head>
<body>
<div class="container">

</div>
@yield('content')
    <div class="links">
        <li><a href="/">Home Page</a></li>
        <li><a href="/contacts">Contacts Page</a></li>
        <li><a href="/Films">Films Page</a></li>
        <li><a href="/about">About Page</a></li>
        <li><a href="/Films/create">Add A Film </a></li>

    </div>
   
@yield('Content')
</body>
</html>