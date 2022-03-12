<?php

use App\Services\BaseService;
use App\Repositories\UserRepository;


class UserService extends BaseService{
    public $userRepository ;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
}
