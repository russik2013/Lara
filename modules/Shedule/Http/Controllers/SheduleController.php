<?php
namespace Modules\Shedule\Http\Controllers;

use Illuminate\Http\Request;
use Pingpong\Modules\Routing\Controller;
use App\Shedule as Repo;
class SheduleController extends Controller {
	
	public function index(){
		$item = Repo::all()->groupBy('day_id');
		return view('shedule::index',compact('item'));
	}

	public function create(){

		return view('shedule::create');
	}

	public function store(Request $request){
		$validator = [
			'day_id' => 'required|numeric',
			'shedule_name' => 'required'
		];
		$message = ['day_id' => 'Выберите день',
					'shedule_name' => 'Заполните все поля с уроками'];
		$this->validate($request, $validator, $message);


		for($i = 0; $i < count($request->shedule_name); $i++){
			$mass[$i]['day_id'] =$request->day_id;
			$mass[$i]['shedule_name'] =$request->shedule_name[$i];
		}

		Repo::insert($mass);


		$item = Repo::all()->groupBy('day_id');
		//dd($item);
		return view('shedule::index',compact('item'));
	}

	public function edit($id)
	{
		$item = Repo::where('day_id','=',$id)->get();
		//dd($item);
		return view('shedule::edit',compact('item'));
	}

	public function update(Request $request, $id)
	{
		$model = Repo::where('day_id', '=', $id)->delete();

		for($i = 0; $i < count($request->shedule_name); $i++){
			$mass[$i]['day_id'] =$id;
			$mass[$i]['shedule_name'] =$request->shedule_name[$i];
		}

		Repo::insert($mass);
 
		$item = Repo::all()->groupBy('day_id');
		//dd($item);
		return view('shedule::index',compact('item'));

	}
}