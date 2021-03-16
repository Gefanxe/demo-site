<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
      return view('pages/index');
    }

    public function about()
    {
      return view('pages/about');
    }

    public function portfolio()
    {
      return view('pages/portfolio');
    }

    public function portfoliosingle()
    {
      return view('pages/portfoliosingle');
    }

    public function services()
    {
      return view('pages/services');
    }

    public function contact()
    {
      return view('pages/contact');
    }

    public function toLogin()
    {
      $result = [
        'result' => false,
        'errMsg' => ''
      ];

      $method = $this->request->getMethod();
        
      if (!$this->request->isAJAX()) die('bad request ajax');
      if ($method != 'post') die('bad request');

      $postData = $this->request->getJSON();

      $user = new \App\Entities\User();

      if ($user->doLogin($postData->email, $postData->password)) {
        $result['result'] = true;
      } else {
        $result['errMsg'] = '登入失敗,請確認帳戶及密碼是否正確';
      }

      return $this->response->setJSON($result);
    }

    public function toRegister()
    {
      $method = $this->request->getMethod();
        
      if (!$this->request->isAJAX()) die('bad request ajax');
      if ($method != 'post') die('bad request');

      $postData = $this->request->getJSON();

      $user = new \App\Entities\User();

      $doRegist = $user->doRegister((array)$postData);

      return $this->response->setJSON($doRegist);
    }

    public function logout()
    {
      $user = new \App\Entities\User();
      $user->doLogout();
      return redirect('/home/index');
    }
}
