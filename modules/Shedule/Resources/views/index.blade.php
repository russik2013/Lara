@extends('shedule::layouts.master')

@section('content')


	<table>
	@if(isset($item))

		@for($i = 0; $i < count($item); $i++)

			@if($item[$i][0]->day_id == 1)
					<tr>
						<td>Понедельник</td>
						<td><a href="/shedule/1/edit" >Редактировать</a></td>
					</tr>
			@endif
			@if($item[$i][0]->day_id == 2)
					<tr>
						<td>Вторник</td>
						<td><a href="/shedule/2/edit" >Редактировать</a></td>
					</tr>
			@endif
			@if($item[$i][0]->day_id == 3)
					<tr>
						<td>Среда</td>
						<td><a href="/shedule/3/edit" >Редактировать</a></td>
					</tr>
			@endif
			@if($item[$i][0]->day_id == 4)
					<tr>
						<td>Четверг</td>
						<td><a href="/shedule/4/edit" >Редактировать</a></td>
					</tr>
			@endif
			@if($item[$i][0]->day_id == 5)
					<tr>
						<td>Пятница</td>
						<td><a href="/shedule/5/edit" >Редактировать</a></td>
					</tr>
			@endif

			@foreach($item[$i] as $one)
					<tr>
						<td></td>
						<td>{{$one->shedule_name}}</td>
					</tr>
			@endforeach

		@endfor

	@endif

	</table>

	<a href="/shedule/create" >Добавить предметы в рассписание</a>







@endsection