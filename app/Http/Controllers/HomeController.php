<?php

namespace App\Http\Controllers;

use App\Exports\ExcelExport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users     = User::get();
        return view('home', compact('users'));
    }
    public function spinroulette()
    {
        $users     = User::get();
        $userWined = User::inRandomOrder()->first();
        return view('home', compact('users', 'userWined'));
    }

    /**
     * @return BinaryFileResponse
     */
    public function export()
    {
        return Excel::download(new ExcelExport(), 'Usuarios.xlsx');
    }
}