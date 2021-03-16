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

  // public function __construct()
  // {
  //   parent::__construct();
  // }

  private function _saveToSession($user)
  {
    $session = session();
    $session->set('user', $user);
  }

  public function isLogin()
  {
    $session = session();
    return $session->has('user');
  }

  public function getCurrentUser()
  {
    $session = session();
    return $session->get('user');
  }

  public function doLogin($email, $password)
  {
    $result = false;

    $userModel = model('App\Models\UserModel');

    $hash_pass = password_hash($password, PASSWORD_BCRYPT);
    // password_verify
    $user = $userModel->where([
      'email' => $email
    ])->first();

    $isValid = password_verify($password, $user->password);

    if ($isValid) {
      $this->_saveToSession($user);
      $result = true;
    }

    return $result;
  }

  public function doLogout()
  {
    $session = session();
    $session->remove('user');
    $session->destroy();
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
