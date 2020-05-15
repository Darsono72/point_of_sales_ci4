<?php namespace App\Controllers;

class Test_db extends BaseController
{

	// use CodeIgniter\Controller;
	use App\Models\Test_db_model;	

	public function index()
	{
		// $db = \Config\Database::connect();

		// $query = $db->query('SELECT * FROM _users');
		// $results = $query->getResult();



		$model = new Test_db_model();

		// foreach ($results as $row)
		// {
		// 	$data=[
		//         'user_name'		=> $row->user_name,
		//         'full_name'		=> $row->full_name,
		//         'user_level'	=> $row->user_level
		// 	];

		// }
		$data['user'] = $model->get_user();

		// $data.= 'Total Results: ' . count($results);
		return view('test_db_v',$data);
	}

	//--------------------------------------------------------------------

}
