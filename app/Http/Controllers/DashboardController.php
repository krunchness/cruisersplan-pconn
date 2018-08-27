<?php

namespace cruiserplan\Http\Controllers;

use Illuminate\Http\Request;
use cruiserplan\PersonInfo;

class DashboardController extends Controller
{
    public function showInquries()
    {
    	$inquiries = PersonInfo::all();

    	return view('dashboard.dashboard-inquriesmanagement', compact(['inquiries']));
    }
}
