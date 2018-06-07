<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        @include('Data.Header')
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">


    </head>
    <body>





<div class="body">
<div class="types">
    @for($i = 0;$i< count($type_er);$i++)
        <a name="clickName" class="tittles" href="{{url('Word/Receive?name=').$type_er[$i]->Types_LName}}" target="_blank">12{{$type_er[$i]->Types_LName}}</a>
    @endfor
</div>


        <form class="clzz" action="{{ action('Data\DataController@ShowBuy')}}" method="post">

            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <p class="form"><input class="inputborder" type="text" name="name" value="请输入资源码" onfocus="javascript:if(this.value=='请输入资源码')this.value='';" ></input></p>
<br>
            <p class="form"><input class="button" type="submit" value="提取"></input></p>
        </form>

    </div>

    </body>
</html>
