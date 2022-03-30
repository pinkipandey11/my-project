<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UserExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Model\User;
use PDF;
use Log;



class UserExportController extends Controller
{
    public function view(){
        return view('table');
    }
    
    public function export() 
    {
        return Excel::download(new UserExport, 'users.xlsx');
    }  


    public function generatePDF(Request $request)
    {    
        $users = User::all();
        $pdf = \PDF::loadView('pdf', compact('request', 'users'));
        return $pdf->stream('user.pdf');
        
    }

    public function exportcsv() {
        return Excel::download(new UserExport, 'users.csv');
    }
}
