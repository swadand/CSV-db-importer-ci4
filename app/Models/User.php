<?php 

namespace App\Models;
use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $returnType = 'array';

    protected $validationRules = [
        'name'     => 'required|max_length[50]|alpha_numeric_space|min_length[3]',
        'email'        => 'required|max_length[50]|valid_email|is_unique[users.email]',
    ];

    protected $validationMessages = [
        'name' => [
            'required' => 'We need a Name.',
        ],
        'email' => [
            'is_unique' => 'Sorry. That email has already been taken. Please choose another.',
        ],
    ];

    protected $allowedFields = [
        'name',
        'email',
        'role'
    ];

    public function __construct()
    {
        parent::__construct();
    }

    public function getDisplayData() {
        $query = $this->db->table('users')->select(['users.id', 'users.name', 'users.email', 'roletype.role'])
                                          ->join('roletype', 'roletype.id = users.role')
                                          ->get();
        
        return $query;
    }
}