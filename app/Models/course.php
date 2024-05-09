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
        ]
    ];

    public static function all() 
    {
        return self::$courses;
    }
    public static function find($slug) 
    {
        $course1 = self::$courses;
        $course = [];
    foreach($course as $c) {
      if($c["slug"] == $slug) {
          $course = $c;
        }
    }
    
    return $course;
    }
        
}   