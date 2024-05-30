<?php
namespace App\Http\Controllers;

use App\Models\Coursesx;
use Illuminate\Http\Request;

class CoursexController extends Controller
{
    public function show($id)
    {
        // Mengambil data course berdasarkan id
        $coursesx = Coursesx::findOrFail($id);

        // Mengirim data ke view
        return view('coursex.show', [
            "title" => $coursesx->title, // Sesuaikan judul dengan judul kursus
            "coursesx" => $coursesx,
        ]);
    }
}

