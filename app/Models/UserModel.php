<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table      = 'users';
  protected $primaryKey = 'id';

  protected $returnType = 'App\Entities\User';

  protected $useSoftDeletes = true;
  protected $deletedField  = 'deleted_at';

  // 准許進事件的key(跟資料庫欄位無關)
  protected $allowedFields = ['email', 'password'];

  protected $useTimestamps = true;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';

  protected $validationRules = [
    'email' => 'required|valid_email|is_unique[users.email]',
    'password' => 'required|min_length[8]',
    'pass_confirm' => 'required_with[password]|matches[password]'
  ];

  protected $validationMessages = [
    'email' => [
      'is_unique' => 'Email不能重複哦',
      'valid_email' => '不是合法Email',
      'required' => 'Email不能為空'
    ],
    'password' => [
      'required' => '密碼不能為空',
      'min_length' => '密碼長度不足8'
    ],
    'pass_confirm' => [
      'required_with' => '重複密碼不能為空',
      'matches' => '重複密碼錯誤'
    ]
  ];
  protected $skipValidation = false;

  protected function hashPassword(array $data)
  {
    if (!isset($data['data']['password'])) return $data;

    $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_BCRYPT);

    return $data;
  }

  protected $beforeInsert = ['hashPassword'];
}
