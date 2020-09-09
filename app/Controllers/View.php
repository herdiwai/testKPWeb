<?php namespace App\Controllers;

use App\Models\Galery_model;

class View extends BaseController
{
	// public function index()
	// {
 //        $data = [
 //            'title' => 'Home | TestKpWebDeveloper'
 //        ];

	// 	return view('view', $data);
	// }

	public function index()
    {
        $users = new Galery_model();
        $data = $users->getUsers();
        return view('view', compact('data'));
    }


}
