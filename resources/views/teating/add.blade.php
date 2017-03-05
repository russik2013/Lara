<html>
<head>
    <title>Laravel</title>

    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;

            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }
        .alert {
            color: #000000;
            font-weight: 600;
        }
        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
            margin-bottom: 40px;
        }

        .quote {
            font-size: 24px;
        }
    </style>
</head>
<body>



<div class="row-">
    <div class="col-nd-12">

        @if(count($errors)>0)
            @foreach($errors->all() as $error)
           <p class="alert">     {{$error}} </p>
                @endforeach
        @endif


        <form action="{{ url('/test') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="POST">

            <div class="form-group">
                <label for="title" class="control-label col-md-2 required">Краткое описание</label>
                <div class="controls col-md-6">
                    <input maxlength="250" type="text" class="form-control" name="title" id="title" value="{{ old('title') }}"/>
                </div>
            </div >

            <div class="form-group">
                <label for="number" class="control-label col-md-2 required">Введите номер</label>
                <div class="controls col-md-6">
                    <input maxlength="250" type="text" class="form-control" name="number" id="number" value="{{ old('number') }}"/>
                </div>
            </div >

            <div class="form-group">
                <div class="col-md-offset-2">
                    <a href="{{ url('/') }}" class="btn btn-default"><i
                                class="fa fa-undo"></i>&nbsp;Вернутся</a>&nbsp;
                    <button class="btn btn-success"><i class="fa fa-save"></i>&nbsp;Создать</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>