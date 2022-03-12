<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository{
    // public function getModel()
    // {
    //     return User::class;
    // }
    public function getTable()
    {
        return 'users';
    }
    public function getById($id)
    {

    }
    public function store($data)
    {

    }
    public function deleteById($id)
    {

    }
}






