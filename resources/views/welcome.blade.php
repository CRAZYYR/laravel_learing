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
                font-size: 30px;
            }
        </style>
    </head>
    <body>

        <div class="container">
            <div class="content">
                <div class="title">
    
                   @if($data['num']<60)
                   不及格
                   @else
                   及格
                   @endif
                   <hr/>
                @unless($data['num']<60)
                    及格
                @endunless
            <hr/>
                @for($i=0;$i<$data['num'];$i++)
                {{$i}} 
                @endfor
            <hr/>
                @foreach($data['article'] as $v)
                {{$v}}
                @endforeach

                <hr/>
                @forelse($data['article'] as $v)
                {{$v}}
                @empty
                没有数据
                @endforelse

                <hr/>

                <!-- foreach&&if 嵌套试用 -->
                    @foreach($data['article'] as $k=>$v)
                       @if($k>0)
                       {{$k}}=>{{$v}}<br/>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </body>
</html>
