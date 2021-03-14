<?php

namespace App\Controllers;

class Test extends BaseController
{

    public function test()
    {
      $data = array(
        'isLogin' => TRUE
      );

      return view('test/test', $data);
    }

    public function csrfform()
    {
      return view('test/csrfform');
    }

    public function okform()
    {
      echo 'ok';
    }
}
