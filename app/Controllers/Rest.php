<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class Rest extends ResourceController
{
    use ResponseTrait;

    // 通常取全部資料
    public function index()
    {
        // $data = array(
        //     'id' => 1,
        //     'name' => 'Andersen',
        //     'data' =>
        //     array(
        //       0 => array(
        //         'key1' => 'val1',
        //       ),
        //       1 => array(
        //         'key2' => 'val2',
        //       ),
        //       2 => array(
        //         'key3' => 'val3',
        //       ),
        //     ),
        // );

        $db = db_connect();
        
        $sql = "SELECT `id`, `name`, `created_date` from friends WHERE `id` > ?;";
        // xdebug_break();
        $query = $db->query($sql, [1]);
        
        $result = $query->getResult();
        
        $db->close();

        return $this->respond($result);
    }

    // 通常取一筆資料
    public function show($id = null)
    {
        $data = [
            'id' => 1,
            'name' => 'Tom'
        ];
        return $this->respond($data);
    }

    // 通常是建一筆資料
    public function create()
    {
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data Saved'
            ]
        ];
        return $this->respondCreated($response);
    }

    // 通常是更新資料
    public function update($id = null)
    {
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data Updated'
            ]
        ];
        return $this->respond($response);
    }

    // 通常是刪除資料
    public function delete($id = null)
    {
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data Deleted'
            ]
        ];
        return $this->respondDeleted($response);
    }
}
