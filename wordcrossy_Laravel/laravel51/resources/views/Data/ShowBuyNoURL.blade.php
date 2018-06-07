<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        @include('Data.Header')
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <style type="text/css">
            <!--
            .keycontent {
                height: 200px;
                width: 300px;
                background-position: center center;
                position: relative;
                margin:auto;
            }
            .keyGroup {
                position: relative;
            }
            -->
        </style>

    </head>
    <body>



<div class="body">
        @for($i = 0;$i< count($typesall[0]);$i++)
            <div class="for">
            <br> {{$i."、"}}
                <p class="forname">{{$typesall[0][$i]->name}}</p>
                <p class="for">{{$typesall[0][$i]->des}}</p>
                <p class="for"><a href="{{$typesall[1][0]->Url}}" target="_blank">地址>></a></p>
            </div>
            {{--<br>{{$typesall[$i]->url}}--}}
        @endfor
    </div>

    </body>
</html>
