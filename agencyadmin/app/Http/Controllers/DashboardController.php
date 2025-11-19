<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;

class DashboardController extends Controller
{
    public function index()
    {
        // Get total inquiry count
        $inquiryCount = Inquiry::count();

        // You can also add other stats later, for example:
        // $todayInquiries = Inquiry::whereDate('created_at', today())->count();

        return view('admin.index', compact('inquiryCount'));
    }
}
