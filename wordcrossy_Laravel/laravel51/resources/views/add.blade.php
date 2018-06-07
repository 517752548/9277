<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 26px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
        @for($i=0;$i<count($word);$i++)
                    <div>目前的值为{{$word[$i]->TypeName}}</div>
        @endfor

                {{--@foreach($word as $value)--}}
                    {{--<div>目前的值为11</div>--}}
                {{--@endforeach--}}

            </div>
        </div>
    </body>
</html>
