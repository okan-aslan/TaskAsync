<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function index()
    {
        $data = [];

        $users = User::all();

        foreach ($users as $user) {

            $userTaskCount = $user->tasks()->count();

            $data[] = [
                'count' => $userTaskCount,
                'userName' => $user->name,
            ];
        }
        $usersTaskCount = collect($data)->sortBy('count')->reverse();

        // dd($usersTaskCount);

        return view('rankings', compact('usersTaskCount'));
    }
}
