<?php

namespace cruiserplan\Http\Controllers;

use Illuminate\Http\Request;
use cruiserplan\PersonInfo;

class DashboardController extends Controller
{
    public function showInquiries()
    {
    	$inquiries = PersonInfo::all();

    	return view('dashboard.dashboard-inquriesmanagement', compact(['inquiries']));
    }

    public function exportToCSV(Request $request)
    {

    	$inquiries_data = PersonInfo::all()->toArray();

        unset($inquiries_data[0]['updated_at']);

        $headers = [
            'Content-type'        => 'text/csv',
            'Content-Disposition' =>  'attachment',
        ];


        $path = public_path('files\\') .'\\test.csv';
        $fp = fopen($path , 'w');

        fputcsv($fp, array_keys($inquiries_data[0]));

        foreach ($inquiries_data as $key => $data) {

            unset($data['updated_at']);
            fputcsv($fp, $data);
        }
        fclose($fp);

        return response()->download($path, '', $headers);
    }
}
