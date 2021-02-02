<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;

use App\Services\UserService as Service;

class User extends Controller
{

    protected $service;
    
    public function __construct(Service $service) {
        $this->service = $service;
    }

    public function listing() {
        return view('admin.user.list', ['title' => 'user', 'list' => $this->service->listing()]);
    } 
    
     public function create() {
        
    }
    
    public function store(Post $request) {
        
    }
    
    public function put(Put $request) {
        
    }

    public function view(Request $request) {
        
    }
    
    public function showLiveStreaming() {
        
    }
}
