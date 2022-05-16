<?php


namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Routing\Controller as BaseController;

class WarmUpController extends BaseController
{

    public function getWarmupEvents() {

        return response()->json([
            [
                "name" =>  "Laravel convention 2020"
            ],
            [
                "name" =>  "Laravel convention 2021"
            ],
            [
                "name" =>  "React convention 2021"
            ]
        ]);
    }
}
