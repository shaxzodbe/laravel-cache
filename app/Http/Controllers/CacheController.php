<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class CacheController extends Controller
{
    public function index($id)
    {
        $data = Redis::get('cached_' . $id);

        if (isset($data)) {
            $cachedData = json_decode($data, FALSE);

            return response()->json([
                'status' => 201,
                'message' => 'Data fetched from Redis!',
                'data' => $data
            ]);
        } else {
            $data = \App\Models\Cache::find($id);
            Redis::set('cached_' . $id, $data);

            return response()->json([
                'status' => 201,
                'message' => 'Data fetched from Database!',
                'data' => $data
            ]);
        }
    }
}
