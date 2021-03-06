<?php
namespace App\Repositories\User;

use App\Repositories\IRepository;
use Illuminate\Pagination\LengthAwarePaginator;

interface IUser extends IRepository {
    
    public function paginate (int $limit):LengthAwarePaginator;
}