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
                <form action="{{ url('/shedule') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="POST">
                    <div class="form-group">
                        <label for="day_id" class="control-label col-md-2 required">Выберите день</label>
                        <div class="controls col-md-6">
                            <select class="form-control" name="day_id" id="day_id">
                                <option value="1">
                                    Понедельник
                                </option>
                                <option value="2">
                                    Вторник
                                </option>
                                <option value="3">
                                    Среда
                                </option>
                                <option value="4">
                                    Четверг
                                </option>
                                <option value="5">
                                    Пятница
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" id = "lessons">
                            <label for="shedule_name" class="control-label col-md-2 required">Название предмета</label>
                            <div class="controls col-md-6" id = "lessons">
                                <input maxlength="250" type="text" class="form-control" id ="shedule_name" name="shedule_name[]"  />
                            </div>
                    </div>



                        <div class="form-group">
                            <div class="col-md-offset-2">
                                <a href="{{ url('/shedule') }}" class="btn btn-default"><i
                                            class="fa fa-undo"></i>&nbsp;Вернутся</a>&nbsp;
                                <button class="btn btn-success"><i class="fa fa-save"></i>&nbsp;Создать</button>
                            </div>
                        </div>

                </form>
                <p><button id="add">Добавить предмет</button></p>

            </div>
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        $('#add').click(function(){

            $('#lessons').append('<p><input maxlength="250" type="text" class="form-control" name="shedule_name[]"/></p>');

        });
    });

</script>
</body>
</html>