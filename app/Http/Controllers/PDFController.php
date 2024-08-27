<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF; // Import DomPDF

class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'project_name' => 'Update SIBB',
            'change_name' => 'Mengaktifkan Fitur Laporan Quick Response',
            'ticket_number' => 'CR/UpdateSIBB/2024/07/466',
            'requested_by' => 'Dinas PU Sumber Daya Air Provinsi Jawa Timur',
            'contact' => 'Pak Ali',
            'date' => '22 Juli 2024',
            'description' => 'Permintaan untuk mengaktifkan kembali fitur laporan quick response',
            'priority' => 'High',
            'technician' => '1 person',
            'tasks' => '',
            'time_of_work' => '22 Juli 2024 – 22 Juli 2024',
            'duration' => '1 hari',
            'cost' => 'Rp 289.286',
            'date_needed' => '22 Juli 2024',
            'approval_date' => '22 Juli 2022',
        ];

        $pdf = PDF::loadView('pdf.change_request', $data);

        return $pdf->download('change_request.pdf');
    }
}
