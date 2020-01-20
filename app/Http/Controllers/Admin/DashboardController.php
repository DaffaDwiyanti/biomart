<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use DB;

class DashboardController extends Controller
{
    public function index()
    {
        $breadcumb = [
            ["name" => "Dashboard", "url" => route("admin.dashboard"), "icon" => "fa fa-dashboard"],
            ["name" => "Home", "url" => route("admin.dashboard"), "icon" => "fa fa-home"],

        ];

        $omzet = DB::select("SELECT DATE_FORMAT(created_at, '%M %Y') As Month, sum(total) as Omzet FROM orders GROUP BY MONTH(created_at)");

        populate_breadcumb($breadcumb);
        return view('admin.dashboard', ['omzet' => $omzet]);
    }
}
