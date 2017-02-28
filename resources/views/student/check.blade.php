@extends('layout')
@section('content')
    <div class="container">
        @if(isset($error))
            <div class="error">
                {{$error}}
            </div>
        @endif
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
@endsection