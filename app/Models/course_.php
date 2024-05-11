<?php

namespace App\Models;

class course 
{
    private static $courses =  [
        [
            "title" => "Microsoft Excel Course",
            "slug" => "microsoft-excel-course",
            "Teacher" => "EduAdmin",
            "body" => "Course Microsoft Excel dirancang untuk memberikan pemahaman mendalam tentang penggunaan aplikasi spreadsheet yang paling populer di dunia."
        ],
        [
            "title" => "Microsoft Office Course",
            "slug" => "microsoft-office-course",
            "Teacher" => "EduAdmin",
            "body" => "Course Microsoft Word dirancang untuk memberikan pemahaman mendalam tentang penggunaan aplikasi pengolah kata yang paling populer di dunia, yaitu Microsoft Word."
        ],
        [
            "title" => "Microsoft Power Point Course",
            "slug" => "microsoft-PowerPoint-course",
            "Teacher" => "EduAdmin",
            "body" => "Kursus PowerPoint dirancang untuk membantu peserta memahami dan menguasai penggunaan perangkat lunak presentasi Microsoft PowerPoint. Dalam kursus ini, peserta akan belajar berbagai fitur dan teknik dalam PowerPoint, mulai dari dasar-dasar seperti membuat slide, menambahkan teks dan gambar, hingga hal-hal yang lebih kompleks seperti animasi, hyperlink, dan desain slide yang menarik."
        ]
    ];

    public static function all() 
    {
        return collect(self::$courses);
    }

    public static function find($slug) 
    {
        $course1 = static::all();
        return $course1->firstWhere('slug',$slug);
    }
}
