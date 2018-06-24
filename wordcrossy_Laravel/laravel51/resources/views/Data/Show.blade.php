<!DOCTYPE html>
<html>
    <head>
        <title>资源集</title>
        @include('Data.Header')
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">


    </head>
    <body>

    <div  align="center">

        <form action="{{ action('Data\DataController@Add')}}" method="post">
            选择: <select name="from">
                @for($i=0;$i<count($typeall['typer']);$i++)
                <option >{{$typeall['typer'][$i]->Types_LName}}</option>
                    @endfor
            </select>

            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <p>课程名称:<textarea type="text" name="name" class="inputer"></textarea></p>
            <p>课程链接:<textarea type="text" name="url" class="inputer"></textarea></p>
            <p>课程描述:<textarea type="text" name="des" class="inputer"></textarea></p>
            <p><input type="submit"></input></p>
        </form>
    </div>


    </body>
</html>
