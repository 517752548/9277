<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        @include('Data.Header')
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <style>

        </style>

    </head>
    <body>

    <div class="body">


        <form method="post" class="clzz">

            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <p class="form"><input class="inputborder" type="text" name="name" value="please input ..."></input></p>

            <p class="form"><input class="button" type="submit" value="确定"></input></p>
        </form>
    </div>

    </body>
</html>
