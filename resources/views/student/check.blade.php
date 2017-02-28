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
            color: #B0BEC5;
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
            margin-bottom: 40px;
        }

        .quote {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="container">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row-">
            <div class="col-nd-12">
                <form action="{{ url('/check/check') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="POST">

                        <div class="form-group">
                            <label for="name" class="control-label col-md-2 required">Логин</label>
                            <div class="controls col-md-6">
                                <input maxlength="250" type="text" class="form-control" name="name" id="name" value="{{ old('name') }}"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="control-label col-md-2 required">Пароль</label>
                            <div class="controls col-md-6">
                                <input maxlength="250" type="password" class="form-control" name="password" id="password" value="{{ old('password') }}"/>
                            </div>
                        </div>

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
    </div>
</body>
</html>