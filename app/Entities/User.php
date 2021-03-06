<?php namespace App\Entities;

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

    // 會依 "set + 屬性名稱" 的方式自動套用的邏輯
    // public function setPassword(string $pass)
    // {
    //     $this->attributes['password_hash'] = password_hash($pass, PASSWORD_BCRYPT);

    //     return $this;
    // }
}