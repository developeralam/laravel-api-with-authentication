<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyAPI extends Controller
{
    public function getData()
    {
        return ['name' => 'srity', 'email' => 'mail.alam.bd@gmail.com', 'address' => 'Dhanmondi, Dhaka, Bangladesh'];
    }
}
