<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function show($month){
        $expenses = Expense::whereRaw("DATE_FORMAT(created_at, '%Y-%m') = ?", [$month])->get();

        return view('report.show-report', [
            'month' => $month,
            'expenses' => $expenses,
        ]);
    }

    public function export($month){
        $expenses = Expense::whereRaw("DATE_FORMAT(created_at, '%Y-%m') = ?", [$month])->get();
        
        $pdf = PDF::loadView('report.pdf', [
            'month' => $month,
            'expenses' => $expenses,
        ]);

        return $pdf->download("report-{$month}.pdf");
    }
}
