<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CacheController extends Controller
{
    public function index()
    {
        \Cache::put('cacheKey', 'There should be specific value for Key', now()->addDay());
        dd(\Cache::get('cacheKey'));
        return view('index');
    }
}
