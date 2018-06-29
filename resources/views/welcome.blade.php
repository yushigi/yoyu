<!doctype html>
<html lang="{{ app()->getLocale() }}">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
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
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
         @include('commons.navbar')
        
            <div class="content">
                <div class="title m-b-md">
                   <img src="http://www.ox.ac.uk/sites/files/oxford/styles/ow_medium_feature/public/field/field_image_main/Oxford_PAX003429-01_SuperRes_0.JPG?itok=7W--PLul">
                    <p>yoyu</p>
                    
            
                </div>
                
                <div class="links">
                    
                    {!! link_to_route('yushikawaii', 'yushi', null, ['class' => 'btn btn-success ']) !!}
                    {!! link_to_route('yoyo', 'yo', null, ['class' => 'btn btn-primary ' ]) !!}
                    {!! link_to_route('news', 'news', null, ['class' => 'btn btn-danger ' ]) !!}
                    {!! link_to_route('contact', 'contact', null, ['class' => 'btn btn-warning ' ]) !!}
                    
                
        
                </div>
                
                
            </div>
        </div>
    </body>
</html>
