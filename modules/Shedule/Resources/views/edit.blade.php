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
                <form action="{{ url('shedule/'.$item[0]->day_id) }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">

                    @if($item[0]->day_id == 1)
                        Понедельник
                    @endif
                    @if($item[0]->day_id == 2)
                        Вторник
                    @endif
                    @if($item[0]->day_id == 3)
                        >Среда
                    @endif
                    @if($item[0]->day_id == 4)
                        Четверг
                    @endif
                    @if($item[0]->day_id == 5)
                        Пятница
                    @endif

                    @foreach($item as $one)

                      <p>  <input maxlength="250" type="text" class="form-control" id ="shedule_name" name="shedule_name[]" value="{{ old('shedule_name',$one->shedule_name) }}" /> </p>

                    @endforeach


                    <div class="form-group">
                        <div class="col-md-offset-2">
                            <a href="{{ url('shedule/') }}" class="btn btn-default"><i
                                        class="fa fa-undo"></i>&nbsp;Вернутся</a>&nbsp;
                            <button class="btn btn-success"><i class="fa fa-save"></i>&nbsp;Сохранить</button>
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