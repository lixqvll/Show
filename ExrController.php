<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExrController extends Controller
{
    public function show($value)
    {
        return  "The Value: " . $value;
    }
}
