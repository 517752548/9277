<!DOCTYPE html>
<html>
<head>
    <title>资源集</title>
    @include('Data.Header')

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">


</head>
<body>


<div class="body">
    <div class="types">
        <div class="all">
            @for($i = 0;$i< count($type_er);$i++)
                <div class="allitem">
                    <a name="clickName" class="tittles" href="{{url('Word/Receive?name=').$type_er[$i]->Types_LName}}"
                       target="_blank">{{$type_er[$i]->Types_LName}}</a>
                </div>
            @endfor
        </div>
    </div>


    <div class="types">

        <form class="clzz" action="{{ action('Data\DataController@ShowBuy')}}" method="post">

            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <p class="form"><input class="inputborder" type="text" name="name" value="请输入资源码"
                                   onfocus="javascript:if(this.value=='请输入资源码')this.value='';"></input></p>
            <br>
            <p class="form"><input class="button" type="submit" value="提取"></input></p>
        </form>
    </div>
</div>

</body>
<footer>
    @include('Data.Footer')
</footer>
</html>
