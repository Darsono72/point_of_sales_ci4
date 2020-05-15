<?php namespace App\Models;

use CodeIgniter\Model;

class Test_db_model extends Model
{

	protected $table      		= '_users';
    protected $primaryKey 		= 'user_name';

    protected $returnType     	= 'array';
    protected $useSoftDeletes 	= true;

    protected $allowedFields 	= ['user_name', 'full_name', 'user_level'];

    protected $useTimestamps 	= false;
    protected $createdField  	= 'created_at';
    protected $updatedField  	= 'updated_at';
    protected $deletedField  	= 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;


	public function get_user($user_name = false)
    {
        if($user_name === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['user_name' => $user_name]);
        }   
    }

}