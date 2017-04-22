<!DOCTYPE html>
<html>
    <head>
        <title>主页面</title>

        

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
                font-size: 96px;
            }
        </style>
    </head>
    <body>

        <div class="container">
            <div class="content">
                <div class="title">
         <!--        <?php echo isset($name)?$name:'xixi'; ?> -->
            <!--     {{isset($name)?$name:'xixi'}},正在开启... -->
                 {!!$str!!}

                {{$hh or '哈哈哈'}}

   
                </div>
            </div>
        </div>
    </body>
</html>
