<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Category;
use App\Models\Course;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::create([
            'name' => 'EduAdmin',
            'email' => 'azmimuzakki@gmail.com',
            'password' => bcrypt('eduadmin499')

        ]);
        category::create([
            'name' => 'MIcrosoft',
            'slug' => 'microsoft',

        ]);
        category::create([
            'name' => 'Google',
            'slug' => 'google',

        ]);
        course::create([
            'title' => 'Microsoft Excel Course',
            'slug' => 'microsoft-excel-course',
            'excerpt'=> 'diharapkan siswa sudah mempunyai perangkat yang sudah terinstall microsoft excel minimal versi 2016',
            'body' => 'Course Microsoft Excel dirancang untuk memberikan pemahaman mendalam tentang penggunan aplikasi spreadsheet yang paling populer di dunia',
            'course_list'=> '1. Memulai Excel
                            2. Menavigasi Antarmuka Pengguna Excel
                            3. Membuat dan Membuka Buku Kerja Baru
                            4. Menyimpan Buku Kerja
                            5. Memahami Tata Letak Lembar Kerja
                            6. Memasukkan dan Memformat Data
                            7. Memilih dan Menyalin Data
                            8. Modifikasi Sel dan Kolom
                            9. Menggunakan Rumus dan Fungsi Dasar
                            10. Memformat Buku Kerja dan Sel
                            11. Menyembunyikan, Menghapus, dan Memformat Sel
                            12. Menambahkan dan Menghapus Lembar Kerja
                            13. Mengelola Buku Kerja
                            14. Menampilkan dan Mencetak Data
                            15. Menggunakan Excel Online dan Fitur Kolaborasi
                            15. Quiz Excel',
            'instructor_id' => '01',
            'category_id' => '1',
            'user_id' => '1'
        ]);
        course::create([
            'title' => 'Microsoft Word Course',
            'slug' => 'microsoft-word-course',
            'excerpt'=> 'diharapkan siswa sudah mempunyai perangkat yang sudah terinstall microsoft word minimal versi 2016',
            'body' => 'Course Microsoft Word dirancang untuk memberikan pemahaman mendalam tentang penggunaan aplikasi pengolah kata yang paling populer di dunia, yaitu Microsoft Word',
            'course_list'=> '1. Pengenalan Word
                            2. Menavigasi Antarmuka Pengguna Word
                            3. Membuat dan Membuka Dokumen
                            4. Menyimpan Dokumen
                            5. Memahami Tata Letak Dokumen
                            6. Mengetik dan Memformat Teks
                            7. Menyisipkan dan Memformat Gambar
                            8. Menggunakan Alat Baku
                            9. Membuat dan Mengatur Daftar
                            10. Menambahkan dan Memformat Tabel
                            11. Menyisipkan Halaman dan Header/Footer
                            12. Mengatur Layout dan Tata Letak Halaman
                            13. Menggunakan Review dan Revisi
                            14. Melakukan Publikasi dan Berbagi Dokumen
                            15. Menggunakan Word Online dan Fitur Kolaborasi',
            'instructor_id' => '01',
            'category_id' => '1',
            'user_id' => '1'
        ]);
        course::create([
            'title' => 'Microsoft Power Point Course',
            'slug' => 'microsoft-powerpoint-course',
            'excerpt'=> 'diharapkan siswa sudah mempunyai perangkat yang sudah terinstall microsoft power point minimal versi 2016',
            'body' => 'Course PowerPoint dirancang untuk membantu peserta memahami dan menguasai penggunaan perangkat lunak presentasi Microsoft PowerPoint. Dalam kursus ini, peserta akan belajar berbagai fitur dan teknik dalam PowerPoint, mulai dari dasar-dasar seperti membuat slide, menambahkan teks dan gambar, hingga hal-hal yang lebih kompleks seperti animasi, hyperlink, dan desain slide yang menarik.',
            'course_list1'=> '1. Pengenalan PowerPoint
                            2. Navigasi Antarmuka Pengguna PowerPoint
                            3. Membuat dan Membuka Presentasi
                            4. Menyimpan Presentasi
                            5. Memahami Tata Letak Slide
                            6. Menambahkan dan Memformat Teks
                            7. Menyisipkan dan Memformat Gambar
                            8. Menggunakan Grafik SmartArt
                            9. Menambahkan dan Memformat Grafik
                            10. Bekerja dengan Bentuk dan Objek
                            11. Menambahkan Transisi dan Animasi
                            12. Mengatur dan Melatih Presentasi Anda
                            13. Meninjau dan Berkolaborasi pada Presentasi
                            14. Mempersembahkan Slide Show Anda
                            15. Menggunakan PowerPoint Online dan Fitur Kolaborasi',
            'instructor_id' => '01',
            'category_id' => '1',
            'user_id' => '1'
        ]);
        Course::create([
            'title' => 'Gmail Course',
            'slug' => 'gmail-course',
            'excerpt'=> 'diharapkan siswa sudah mempunyai perangkat yang sudah terinstall web browser (web browser manapun)',
            'body' => 'Dalam course gmail ini, siswa akan belajar mengenai pengenalan tentang Gmail dan pelajari cara mengelola, mengirim, dan merespons pesan',
            'course_list'=> '1. Perkenalan email
                            2. Pengaturan/Menyeting email
                            3. Mengirim email
                            4. Menjawab email
                            5. Mengelola email
                            6. Menggunakan email di mobile device
                            7. Cara Unsen email
                            8. Menggunakan Fitur Time-Saving email,
                            9. Quiz email',
            'instructor_id' => '01',
            'category_id' => '2',
            'user_id' => '1'
        ]);
        
    }
}
