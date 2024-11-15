<?php



namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori; // Tambahkan model Kategori
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function generateReport()
    {
        // Ambil data dari model Kategori
        $kategoris = Kategori::all();

        // Data tambahan untuk laporan
        $data = [
            'title' => 'Laporan Kategori Materi',
            'kategoris' => $kategoris
        ];

        // Buat PDF menggunakan data dan view 'admin.reports.template'
        $pdf = Pdf::loadView('admin.reports.template', $data);

        // Unduh file PDF
        return $pdf->download('Laporan_Kategori_Materi.pdf');
    }
}


