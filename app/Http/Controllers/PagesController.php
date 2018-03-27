<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

	function abcd(){
		
		//$name = 'Anybody';
		//$address = ' <h3 style =  "color: green;" > Palo Alto </h3> ';
								// -with ('naam', $name); to send one variable only
		//return view('example.check')->with([ 'naam' => $name, 'add' => $address ]);
		/* return view('example.check')->with([
		'naam'= 'Batman',
		'add' = 'Batcave'
	]); */

		$data=[];
		$data['naam'] = 'Superman';
		$data['add'] = '<strong style ="color:red;"> PlanetX </strong>';

		return view('example.check', $data);
	}

	function abc()
	{
		
		$team = [ 'Insignificant guy', 'VIP', 'VVIP', 'Happy guy', 'Cool guy', 'Confident guy', 'Depressed guy'];

		return view('example.viewextension', compact('team'))->with(
			[ 'name'=>'funny',
				'contact'=>'345']);
		
	}


	function ab()
	{
		//$team=[];
		$team = [ 'Insignificant guy', 'VIP', 'VVIP', 'Happy guy', 'Cool guy', 'Confident guy', 'Depressed guy'];

		/*return view('example.viewextension', compact('team'))->with(
			[ 'name'=>'funny',
				'contact'=>'345']);
		*/
				return view('example.exten2',compact('team'));
			}
    //
}
