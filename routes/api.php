<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/message',function(){
    return response()->json([
        'message' => 'Hello Shafin',
        'status_code' =>200,
        'data' => [
            'id' => 123,
            'name' => 'Shafin Junayed',
            'email' => 'shafinjunayed954@gmail.com'
        ],
        'meta' => [
            'total' => 10,
            'page' => 1,
            'per_page' => 3
        ],
        'links' => [
            'self' => 'https://example.com/api/users',
            'next' => 'https://example.com/api/users?page=2',
            'prev' => null,
            'last' => 'https://example.com/api/users?page=4'
        ],
        
    ]);
    
});