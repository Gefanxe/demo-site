<?php

namespace App\Controllers;

class Test extends BaseController
{
  public function sessionset()
  {
    $data = array(
      'user' => 'Andersen'
    );

    // return view('test/test', $data);

    $session = session();

    $session->set('data', $data);

    if ($session->has('data')) {
      echo 'set ok';
    } else {
      echo 'don\'t set';
    }
  }

  public function sessionget()
  {
    $session = session();

    if ($session->has('data')) {
      $dd = $session->get('data');
      echo '<pre>';
      print_r($dd);
      echo '</pre>';
    } else {
      echo 'no session';
    }
  }

  public function sessiondel()
  {
    $session = session();
    $session->remove('data');

    // sleep(5);

    if ($session->has('data')) {
      echo 'session still here!';
    } else {
      echo 'session destroy!';
    }
  }

  public function csrfform()
  {
    return view('test/csrfform');
  }

  public function okform()
  {
    echo 'ok';
  }

  public function modeltest()
  {
    $userModel = model('App\Models\UserModel');

    $user = $userModel->where([
      'email' => 'aaa@bbb.com',
      'password' => '123lkjlkj'
    ])->first();

    if ($user) {
      echo '<pre>';
      print_r($user);
      echo '</pre>';
    } else {
      echo 'no data!!!';
    }
  }

  // public function 
}
