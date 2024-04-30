<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class User extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $users = new UserModel;
        return $this->respond(['users' => $users->findAll()], 200);
    }
}

/* namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup                 = 'default';
    protected $table                   = 'users';
    protected $primaryKey              = 'id';
    protected $useAutoIncrement        = true;
    protected $insertID                = 0;
    protected $returntype              = 'array';
    protected $useSoftDeletes          = false;
    protected $protectFields           = true;
    protected $allowedFields           = ['email', 'password'] ;

    //Dates
    protected $useTimestamps           = true;
    protected $dateFormat              = 'datetime';
    protected $createdField            = 'created_at';
    protected $updatedField            = 'update_at';
    protected $deletedField            = 'deleted_at';

    //Validation
    protected $validationRules        = [];
    protected $validationMessages     = [];
    protected $skipValidation         = false;
    protected $cleanValidationRules   = true;

    //Callbacks
    protected $allowCallbacks        = true;
    protected $beforeInsert          = [];
    protected $afterInsert           = [];
    protected $beforeUpdate          = [];
    protected $afterUpdate           = [];
    protected $beforeFind            = [];
    protected $afterFind             = [];
    protected $beforeDelete          = [];
    protected $afterDelete           = [];
} */