<?php

namespace App\Services;
use Illuminate\Http\Request;
use App\Repositories\User\IUser as Repository;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected $repository;

    public function __constuct(Repository $repository){
        $this->repository = $repository;
    }

    public function listing() 
    {
        return $this->repository->paginate(env('PAGINATION_LIMIT'));
    }
    

}
