<?php

namespace App\Entities;

use CodeIgniter\Entity;

class User extends Entity
{
  protected $attributes = [
    'id' => null,
    'email' => null,
    'password' => null,
    'pass_confirm' => null,
    'password_hash' => null,
    'created_at' => null,
    'updated_at' => null,
    'deleted_at' => null
  ];

  public function __construct()
  {
    $session = session();
    $user = $session->has('user') ? $session->get('user') : null;

    parent::__construct($user);
  }

  private function _saveToSession($user)
  {
    $session = session();
    $session->set('user', $user);
  }

  public function doLogin($email, $password)
  {
    $result = false;

    $userModel = model('App\Models\UserModel');

    $user = $userModel->where([
      'email' => $email,
      'password' => $password
    ])->first();

    if ($user) {
      $this->fill((array)$user);
      $this->_saveToSession($user);
      $result = true;
    }

    return $result;
  }

  public function doRegister($userData)
  {
    $result = [
      'result' => false,
      'errMsg' => null
    ];

    $this->fill($userData);
    
    $userModel = model('App\Models\UserModel');

    if ($userModel->save($userData) === false) {
      $result['errMsg'] = $userModel->errors();
    } else {
      $result['result'] = true;
    }

    return $result;
  }

  // 會依 "set + 屬性名稱" 的方式自動套用的邏輯
  // public function setPassword(string $pass)
  // {
  //     $this->attributes['password_hash'] = password_hash($pass, PASSWORD_BCRYPT);

  //     return $this;
  // }
}
