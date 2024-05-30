<?php

namespace Database\Seeders;
use App\Models\Question;
use App\Models\User;
use App\Models\Course;
use App\Models\Quiz;
use App\Models\Coursex;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'EduAdmin',
            'email' => 'azmimuzakki@gmail.com',
            'password' => bcrypt('eduadmin499'),
            'username' => 'eduadmin'

        ]);
        category::create([
            'name' => 'Microsoft',
            'slug' => 'microsoft',
            'image' => 'clint-patterson--jCY4oEMA3o-unsplash.jpg'

        ]);
        category::create([
            'name' => 'Google',
            'slug' => 'google',
            'image' => 'pawel-czerwinski-fpZZEV0uQwA-unssh.jpg'

        ]);
        course::create([
            'title' => 'Microsoft Excel Course',
            'slug' => 'microsoft-excel-course',
            'excerpt'=> 'diharapkan siswa sudah mempunyai perangkat yang sudah terinstall microsoft excel minimal versi 2016',
            'body' => 'Course Microsoft Excel dirancang untuk memberikan pemahaman mendalam tentang penggunan aplikasi spreadsheet yang paling populer di dunia',
            'course_list' => ('
                            <h3>Memulai dengan Excel</h3>
                            <ul>
                                <li><a href="/coursex/1" class="text-decoration-none" style="color: black;">Memulai dengan Excel</a><br><small>Pelajari cara mengoperasikan lingkungan Excel.</small></li>
                                <li><a href=/coursex/2" class="text-decoration-none" style="color: black;">Membuat dan Membuka Buku Kerja</a><br><small>Pelajari cara membuat dan membuka buku kerja Excel.</small></li>
                                <li><a href="/coursex/3" class="text-decoration-none" style="color: black;">Menyimpan dan Membagikan Buku Kerja</a><br><small>Pelajari cara menyimpan dan membagikan buku kerja Excel.</small></li>
                            </ul>

                            <h3>Bekerja dengan Sel dan Lembar</h3>
                            <ul>
                                <li><a href="/coursex/4" class="text-decoration-none" style="color: black;">Dasar-dasar Sel</a><br><small>Pelajari cara menyisipkan dan menghapus sel dan konten sel, menyeret dan melepaskan sel, menggunakan pegangan isian, dan menggunakan fungsi potong, salin, dan tempel.</small></li>
                                <li><a href="/coursex/5" class="text-decoration-none" style="color: black;">Memodifikasi Kolom, Baris, dan Sel</a><br><small>Pelajari cara memodifikasi baris, kolom, dan sel di Excel.</small></li>
                                <li><a href="/coursex/6" class="text-decoration-none" style="color: black;">Bekerja dengan Banyak Lembar Kerja</a><br><small>Pelajari cara menambahkan, menghapus, menyalin, dan memindahkan lembar kerja, serta mengelompokkan dan memisahkan lembar kerja.</small></li>
                                <li><a href="/coursex/7" class="text-decoration-none" style="color: black;">Menggunakan Find & Replace</a><br><small>Pelajari cara menggunakan fitur Temukan dan Ganti di Excel untuk mencari data tertentu.</small></li>
                                <li><a href="/coursex/8" class="text-decoration-none" style="color: black;">Page Layout and Printing</a><br><small>Pelajari cara menggunakan perintah Excel yang memungkinkan Anda mengontrol cara konten Anda akan muncul di halaman cetak.</small></li>
                            </ul>

                            <h3>Rumus dan Fungsi</h3>
                            <ul>
                                <li><a href="/coursex/9" class="text-decoration-none" style="color: black;">Pengantar Rumus</a><br><small>Pelajari cara menggunakan referensi sel untuk membuat rumus sederhana di Excel.</small></li>
                                <li><a href="/coursex/10" class="text-decoration-none" style="color: black;">Membuat Rumus yang Lebih Kompleks</a><br><small>Pelajari cara membuat rumus yang kompleks di Excel.</small></li>
                                <li><a href="/coursex/11" class="text-decoration-none" style="color: black;">Referensi Sel Relatif dan Absolut</a><br><small>Pelajari semua tentang referensi sel absolut dan relatif dan cara penggunaannya di Excel.</small></li>
                                <li><a href="/coursex/12" class="text-decoration-none" style="color: black;">Fungsi</a><br><small>Pelajari bagian-bagian yang berbeda dari fungsi dan cara membuat argumen untuk menghitung nilai dan referensi sel.</small></li>
                            </ul>

                            <h3>Bekerja dengan Data</h3>
                            <ul>
                                <li><a href="/coursex/13" class="text-decoration-none" style="color: black;">Tips Dasar untuk Bekerja dengan Data</a><br><small>Pelajari tips dasar ini untuk bekerja dengan data untuk membantu Anda mengatur dan menemukan apa yang Anda butuhkan.</small></li>
                                <li><a href="/coursex/14" class="text-decoration-none" style="color: black;">Menyaring Data</a><br><small>Pelajari cara menyaring data di lembar kerja Anda untuk menampilkan hanya informasi yang Anda butuhkan.</small></li>
                                <li><a href="/coursex/15" class="text-decoration-none" style="color: black;">Grup dan Subtotal</a><br><small>Pelajari cara mengatur data dalam grup, merangkum grup yang berbeda menggunakan perintah Subtotal, dan membuat outline untuk lembar kerja Anda.</small></li>
                                <li><a href="/coursex/16" class="text-decoration-none" style="color: black;">Tabel</a><br><small>Pelajari cara menggunakan gaya untuk memformat tabel di Excel.</small></li>
                                <li><a href="/coursex/17" class="text-decoration-none" style="color: black;">Grafik</a><br><small>Pelajari cara menyisipkan dan memodifikasi grafik Excel untuk memvisualisasikan perbandingan dalam data Anda.</small></li>
                                <li><a href="/coursex/18" class="text-decoration-none" style="color: black;">Pemformatan Bersyarat</a><br><small>Pelajari cara menerapkan, memodifikasi, dan menghapus aturan pemformatan bersyarat di Excel.</small></li>
                            </ul>

                            <h3>Melakukan Lebih Banyak dengan Excel</h3>
                            <ul>
                                <li><a href="/coursex/19" class="text-decoration-none" style="color: black;">Memeriksa dan Melindungi Buku Kerja</a><br><small>Pelajari cara memeriksa dan melindungi buku kerja Excel Anda.</small></li>
                            </ul>

                            <h3>Kuis</h3>
                            <ul>
                                <li><a href="quizzes/{quiz}/questions" class="text-decoration-none" style="color: black;">Kuis Excel</a><br><small>Uji pengetahuan Anda tentang Excel dengan mengikuti kuis kami.</small></li>
                            </ul>'),
            'instructor_id' => '01',
            'category_id' => '1',
            'user_id' => '1',
            'image' => 'rubaitul-azad-GauA0hiEwDk-unsplash.jpg'
        ]);
        course::create([
            'title' => 'Microsoft Word Course',
            'slug' => 'microsoft-word-course',
            'excerpt'=> 'diharapkan siswa sudah mempunyai perangkat yang sudah terinstall microsoft word minimal versi 2016',
            'body' => 'Course Microsoft Word dirancang untuk memberikan pemahaman mendalam tentang penggunaan aplikasi pengolah kata yang paling populer di dunia, yaitu Microsoft Word',
            'course_list' => ('
                            <h3>Dasar-dasar Word</h3>
                            <ul>
                                <li><a href="/coursex/20" class="text-decoration-none" style="color: black;">Memulai dengan Word</a><br><small>Mengenal Ribbon, Quick Access Toolbar, dan Backstage view untuk membuat dokumen Word 2016.</small></li>
                                <li><a href="/coursex/21" class="text-decoration-none" style="color: black;">Membuat dan Membuka Dokumen</a><br><small>Pelajari cara membuka dokumen yang ada dan membuat yang baru.</small></li>
                                <li><a href="/coursex/22" class="text-decoration-none" style="color: black;">Menyimpan dan Berbagi Dokumen</a><br><small>Pelajari lebih lanjut tentang cara menyimpan dan berbagi dokumen.</small></li>
                            </ul>

                            <h3>Bekerja dengan Teks</h3>
                            <ul>
                                <li><a href="/coursex/23" class="text-decoration-none" style="color: black;">Dasar-dasar Teks</a><br><small>Pelajari cara menambah, menghapus, memindahkan, memotong, menyalin, dan menempelkan teks.</small></li>
                                <li><a href="/coursex/24" class="text-decoration-none" style="color: black;">Memformat Teks</a><br><small>Pelajari cara mengubah ukuran font, warna, dan penjajaran teks.</small></li>
                                <li><a href="/coursex/25" class="text-decoration-none" style="color: black;">Menggunakan Temukan dan Ganti</a><br><small>Pelajari cara menggunakan fitur Temukan dan Ganti untuk mencari dokumen Anda.</small></li>
                                <li><a href="/coursex/26" class="text-decoration-none" style="color: black;">Indentasi dan Tab</a><br><small>Pelajari cara menggunakan pemilih tab dan penggaris horizontal untuk mengatur tab dan indentasi.</small></li>
                                <li><a href="/coursex/27" class="text-decoration-none" style="color: black;">Spasi Baris dan Paragraf</a><br><small>Pelajari cara memodifikasi spasi baris dan paragraf dalam dokumen Anda.</small></li>
                                <li><a href="/coursex/28" class="text-decoration-none" style="color: black;">Daftar</a><br><small>Pelajari cara menambah dan memodifikasi daftar berpoin dan bernomor.</small></li>
                                <li><a href="/coursex/29" class="text-decoration-none" style="color: black;">Hyperlink</a><br><small>Pelajari cara menambah dan memodifikasi hyperlink.</small></li>
                            </ul>

                            <h3>Tata Letak dan Pencetakan</h3>
                            <ul>
                                <li><a href="/coursex/30" class="text-decoration-none" style="color: black;">Tata Letak Halaman</a><br><small>Pelajari cara memodifikasi orientasi, margin, dan ukuran halaman.</small></li>
                                <li><a href="/coursex/31" class="text-decoration-none" style="color: black;">Mencetak Dokumen</a><br><small>Pelajari semua tentang pencetakan di Word 2016.</small></li>
                                <li><a href="/coursex/32" class="text-decoration-none" style="color: black;">Header dan Footer</a><br><small>Pelajari cara menambah dan memodifikasi header dan footer.</small></li>
                                <li><a href="/coursex/33" class="text-decoration-none" style="color: black;">Nomor Halaman</a><br><small>Pelajari cara menambah dan memodifikasi nomor halaman.</small></li>
                            </ul>

                            <h3>Bekerja dengan Objek</h3>
                            <ul>
                                <li><a href="/coursex/34" class="text-decoration-none" style="color: black;">Gambar dan Pembungkusan Teks</a><br><small>Pelajari cara menambah gambar dan menggunakan fitur pembungkusan teks.</small></li>
                                <li><a href="/coursex/35" class="text-decoration-none" style="color: black;">Memformat Gambar</a><br><small>Pelajari lebih lanjut tentang memformat gambar, termasuk menghapus latar belakang dari gambar.</small></li>
                                <li><a href="/coursex/36" class="text-decoration-none" style="color: black;">Tabel</a><br><small>Pelajari lebih lanjut tentang bekerja dengan tabel.</small></li>
                                <li><a href="/coursex/37" class="text-decoration-none" style="color: black;">Grafik</a><br><small>Pelajari cara menambah dan memodifikasi grafik.</small></li>
                            </ul>

                            <h3>Kolaborasi dan Peninjauan</h3>
                            <ul>
                                <li><a href="/coursex/38" class="text-decoration-none" style="color: black;">Memeriksa Ejaan dan Tata Bahasa</a><br><small>Pelajari cara menggunakan fitur tinjauan yang tersedia di Word 2016.</small></li>
                                <li><a href="/coursex/39" class="text-decoration-none" style="color: black;">Melacak Perubahan dan Komentar</a><br><small>Pelajari cara melacak perubahan dan komentar saat berkolaborasi pada dokumen.</small></li>
                                <li><a href="/coursex/40" class="text-decoration-none" style="color: black;">Memeriksa dan Melindungi Dokumen</a><br><small>Ikuti langkah-langkah ini untuk memeriksa dan melindungi dokumen Anda.</small></li>
                            </ul>
                            <h3>Kuis Word</h3>
                            <ul>
                                <li><a href="" class="text-decoration-none" style="color: black;">Kuis Word</a><br><small>Uji pengetahuan Anda tentang Word dengan mengikuti kuis kami.</small></li>
                            </ul>
                            '),
            'instructor_id' => '01',
            'category_id' => '1',
            'user_id' => '1',
            'image' => 'rubaitul-azad-A6SchWHvyVY-unsplash.jpg'
        ]);
        course::create([
            'title' => 'Microsoft Power Point Course',
            'slug' => 'microsoft-powerpoint-course',
            'excerpt'=> 'diharapkan siswa sudah mempunyai perangkat yang sudah terinstall microsoft power point minimal versi 2016',
            'body' => 'Course PowerPoint dirancang untuk membantu peserta memahami dan menguasai penggunaan perangkat lunak presentasi Microsoft PowerPoint. Dalam kursus ini, peserta akan belajar berbagai fitur dan teknik dalam PowerPoint, mulai dari dasar-dasar seperti membuat slide, menambahkan teks dan gambar, hingga hal-hal yang lebih kompleks seperti animasi, hyperlink, dan desain slide yang menarik.',
            'course_list' => ('
                            <h3>Dasar-dasar PowerPoint</h3>
                            <ul>
                                <li><a href="/coursex/41" class="text-decoration-none" style="color: black;">Memulai dengan PowerPoint</a><br><small>Mengenal antarmuka PowerPoint 2016.</small></li>
                                <li><a href="/coursex/42" class="text-decoration-none" style="color: black;">Membuat dan Membuka Presentasi</a><br><small>Pelajari cara membuat dan membuka presentasi.</small></li>
                                <li><a href="/coursex/43" class="text-decoration-none" style="color: black;">Menyimpan Presentasi</a><br><small>Pelajari cara menyimpan presentasi.</small></li>
                            </ul>

                            <h3>Bekerja dengan Slide</h3>
                            <ul>
                                <li><a href="/coursex/44" class="text-decoration-none" style="color: black;">Dasar-dasar Slide</a><br><small>Pelajari dasar-dasar bekerja dengan slide.</small></li>
                                <li><a href="/coursex/45" class="text-decoration-none" style="color: black;">Dasar-dasar Teks</a><br><small>Pelajari cara memotong, menyalin, menempel, dan memformat teks.</small></li>
                                <li><a href="/coursex/46" class="text-decoration-none" style="color: black;">Menerapkan Tema</a><br><small>Pelajari cara menerapkan tema pada slide Anda.</small></li>
                                <li><a href="/coursex/47" class="text-decoration-none" style="color: black;">Menerapkan Transisi</a><br><small>Pelajari cara menerapkan transisi pada slide Anda.</small></li>
                                <li><a href="/coursex/48" class="text-decoration-none" style="color: black;">Mengelola Slide</a><br><small>Pelajari alat yang tersedia untuk membantu mengatur dan mempersiapkan presentasi slide Anda.</small></li>
                            </ul>

                            <h3>Teks dan Objek</h3>
                            <ul>
                                <li><a href="/coursex/49" class="text-decoration-none" style="color: black;">Menyisipkan dan Memformat Gambar</a><br><small>Pelajari cara menyisipkan, memodifikasi, dan memformat gambar.</small></li>
                                <li><a href="/coursex/50" class="text-decoration-none" style="color: black;">Bentuk</a><br><small>Pelajari cara menambah dan memodifikasi bentuk.</small></li>
                                <li><a href="/coursex/51" class="text-decoration-none" style="color: black;">Menganimasikan Teks dan Objek</a><br><small>Pelajari cara menganimasikan teks dan objek.</small></li>
                            </ul>

                            <h3>Objek Lebih Lanjut</h3>
                            <ul>
                                <li><a href="/coursex/52" class="text-decoration-none" style="color: black;">Menyisipkan Media (Video/Audio)</a><br><small>Pelajari cara menambah dan mengedit video dan audio dalam slide Anda.</small></li>
                                <li><a href="/coursex/53" class="text-decoration-none" style="color: black;">Tabel dan Grafik</a><br><small>Pelajari cara menambah dan memodifikasi tabel dan grafik.</small></li>
                            </ul>

                            <h3>Tinjauan dan Kolaborasi</h3>
                            <ul>
                                <li><a href="/coursex/54" class="text-decoration-none" style="color: black;">Memeriksa Ejaan dan Tata Bahasa</a><br><small>Pelajari cara menggunakan fitur pemeriksaan ejaan dan tata bahasa.</small></li>
                                <li><a href="/coursex/55" class="text-decoration-none" style="color: black;">Meninjau Presentasi</a><br><small>Pelajari cara meninjau presentasi sebelum menyajikannya kepada audiens.</small></li>
                            </ul>

                            <h3>Kustomisasi Presentasi</h3>
                            <ul>
                                <li><a href="/coursex/56" class="text-decoration-none" style="color: black;">Memodifikasi Tema</a><br><small>Pelajari cara memodifikasi tema.</small></li>
                            </ul>

                            <h3>Menyajikan dan Berbagi</h3>
                            <ul>
                                <li><a href="/coursex/57" class="text-decoration-none" style="color: black;">Latihan dan Merekam Presentasi</a><br><small>Pelajari cara melatih dan merekam presentasi Anda.</small></li>
                                <li><a href=/coursex/58" class="text-decoration-none" style="color: black;">Berbagi Presentasi Anda Secara Online</a><br><small>Pelajari cara berbagi presentasi Anda secara online.</small></li>
                            </ul>

                            <h3>Kuis PowerPoint</h3>
                            <ul>
                                <li><a href="" class="text-decoration-none" style="color: black;">Kuis PowerPoint</a><br><small>Uji pengetahuan Anda tentang PowerPoint dengan mengikuti kuis kami.</small></li>
                            </ul>
                            '),
            'instructor_id' => '01',
            'category_id' => '1',
            'user_id' => '1',
            'image' => 'rubaitul-azad-gOuM56LjP2c-unsplash.jpg'
        ]);
        Course::create([
            'title' => 'Gmail Course',
            'slug' => 'gmail-course',
            'excerpt'=> 'diharapkan siswa sudah mempunyai perangkat yang sudah terinstall web browser (web browser manapun)',
            'body' => 'Dalam course gmail ini, siswa akan belajar mengenai pengenalan tentang Gmail dan pelajari cara mengelola, mengirim, dan merespons pesan',
            'course_list' => '
                            <h3>Pengenalan Gmail</h3>
                            <ul>
                                <li><a href="/coursex/59" class="text-decoration-none"style="color: black;">Pengenalan Gmail</a><br><small>Dapatkan pengenalan tentang Gmail.</small></li>
                                <li><a href="/coursex/60" class="text-decoration-none"style="color: black;">Membuat Akun Gmail</a><br><small>Begini cara membuat akun Gmail baru.</small></li>
                                <li><a href="/coursex/61" class="text-decoration-none"style="color: black;">Mengirim Email</a><br><small>Pelajari cara mengirim pesan.</small></li>
                                <li><a href="/coursex/62" class="text-decoration-none"style="color: black;">Menanggapi Email</a><br><small>Pelajari cara menanggapi pesan.</small></li>
                                <li><a href="/coursex/63" class="text-decoration-none"style="color: black;">Mengelola Email</a><br><small>Pelajari cara mengelola pesan Gmail Anda.</small></li>
                                <li><a href="/coursex/64" class="text-decoration-none"style="color: black;">Gmail untuk Perangkat Seluler</a><br><small>Begini cara menggunakan aplikasi Gmail di perangkat seluler.</small></li>
                            </ul>

                            <h3>Tambahan</h3>
                            <ul>
                                <li><a href="/coursex/66" class="text-decoration-none" style="color: black;">Bagaimana Cara Membatalkan Pengiriman Email di Gmail</a><br><small>Pelajari cara membatalkan pengiriman email di Gmail.</small></li>
                                <li><a href="/coursex/67" class="text-decoration-none" style="color: black;">Tips Menghemat Waktu dalam Email</a><br><small>Gunakan tips menghemat waktu dalam email untuk produktivitas yang lebih baik.</small></li>
                            </ul>

                            <h3>Kuis</h3>
                            <ul>
                                <li><a href="" class="text-decoration-none" style="color: black;">Kuis Gmail</a><br><small>Uji pengetahuan Anda tentang Gmail dengan mengikuti kuis kami.</small></li>
                            </ul>
                            ',
            'instructor_id' => '01',
            'category_id' => '2',
            'user_id' => '1',
            'image' => 'rubaitul-azad-W3Z2ZNs1y4I-unsplash.jpg'
            
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Memulai Excel',
            'course_id' => '1',
            'desc' => '<h1>Pengenalan</h1>
            <p>Excel adalah program spreadsheet yang memungkinkan Anda untuk menyimpan, mengorganisir, dan menganalisis informasi. Meskipun Anda mungkin berpikir Excel hanya digunakan oleh orang-orang tertentu untuk memproses data yang rumit, siapa pun dapat belajar bagaimana memanfaatkan fitur-fitur kuat dari program ini. Apakah Anda sedang membuat anggaran, mengatur log pelatihan, atau membuat faktur, Excel memudahkan untuk bekerja dengan berbagai jenis data.</p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang Excel.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/lgIWIPDJuPo?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Tentang tutorial ini</h2>
            <p>Prosedur dalam tutorial ini akan bekerja untuk semua versi terbaru Microsoft Excel, termasuk Excel 2019, Excel 2016, dan Office 365. Mungkin ada beberapa perbedaan kecil, tetapi untuk sebagian besar versi ini serupa. Namun, jika Anda menggunakan versi yang lebih lama, Anda mungkin ingin merujuk ke salah satu tutorial Excel lainnya kami.</p>
        
            <h2>Layar Mulai Excel</h2>
            <p>Ketika Anda membuka Excel untuk pertama kalinya, Layar Mulai Excel akan muncul. Dari sini, Anda dapat membuat buku kerja baru, memilih template, dan mengakses buku kerja yang baru saja Anda edit.</p>
            <p>Dari Layar Mulai Excel, cari dan pilih Buku kerja kosong untuk mengakses antarmuka Excel.</p>
            <img src="https://media.gcflearnfree.org/content/563b9b9dca7fac0d9c7b3f7c_11_05_2015/getting_started_interface_start.png" alt="Ikon Tab">
            <h2>Bagian-bagian jendela Excel</h2>
            <p>Beberapa bagian jendela Excel (seperti Ribbon dan bilah gulir) adalah standar di sebagian besar program Microsoft lainnya. Namun, ada fitur lain yang lebih spesifik untuk spreadsheet, seperti bilah rumus, kotak nama, dan tab lembar kerja.</p>
            <p>Klik tombol dalam interaktif di bawah ini untuk mengenal bagian-bagian antarmuka Excel.</p>
            <img src="https://media.gcflearnfree.org/content/563b9b9dca7fac0d9c7b3f7c_11_05_2015/getting_started_interface_interactive2.png" alt="Ikon Tab">
            <h2>Bekerja dengan lingkungan Excel</h2>
            <p>Ribbon dan Bilah Alat Akses Cepat adalah tempat Anda akan menemukan perintah untuk melakukan tugas-tugas umum di Excel. Tampilan Backstage memberi Anda berbagai opsi untuk menyimpan, membuka file, mencetak, dan berbagi dokumen Anda.</p>
        
            <h3>Ribbon</h3>
            <p>Excel menggunakan sistem Ribbon tab alih-alih menu tradisional. Ribbon berisi beberapa tab, masing-masing dengan beberapa grup perintah. Anda akan menggunakan tab ini untuk melakukan tugas-tugas paling umum di Excel.</p>
            <ul>
                <li>Setiap tab akan memiliki satu atau lebih grup.
                    <img src="https://media.gcflearnfree.org/content/563b9b9dca7fac0d9c7b3f7c_11_05_2015/getting_started_ribbon_group.png" alt="Ikon Tab">
                </li>
                <li>Beberapa grup akan memiliki panah yang dapat Anda klik untuk lebih banyak opsi.
                    <img src="https://media.gcflearnfree.org/content/563b9b9dca7fac0d9c7b3f7c_11_05_2015/getting_started_ribbon_more.png" alt="Ikon Panah">
                </li>
                <li>Klik tab untuk melihat lebih banyak perintah.
                    <img src="https://media.gcflearnfree.org/content/563b9b9dca7fac0d9c7b3f7c_11_05_2015/getting_started_ribbon_tabs2.png" alt="Ikon Tab">
                </li>
                <li>Anda dapat menyesuaikan bagaimana Ribbon ditampilkan dengan Opsi Tampilan Ribbon.
                    <img src="https://media.gcflearnfree.org/content/563b9b9dca7fac0d9c7b3f7c_11_05_2015/getting_started_ribbon_display.png" alt="Ikon Opsi">
                </li>
                <li>Program tertentu, seperti Adobe Acrobat Reader, mungkin menginstal tab tambahan ke Ribbon. Tab ini disebut add-in.
            </ul>
        
            <h3>Untuk mengubah Opsi Tampilan Ribbon:</h3>
            <p>Ribbon dirancang untuk merespons tugas Anda saat ini, tetapi Anda dapat memilih untuk meminimalkan jika Anda merasa bahwa Ribbon tersebut memakan terlalu banyak ruang layar. Klik panah Opsi Tampilan Ribbon di sudut kanan atas Ribbon untuk menampilkan menu drop-down.</p>
            <img src="https://media.gcflearnfree.org/content/563b9b9dca7fac0d9c7b3f7c_11_05_2015/getting_started_ribbon_display.png" alt="Ikon Auto-hide">
            <ul>
                <li>Sembunyikan Ribbon Otomatis: Menyembunyikan Ribbon sepenuhnya dan menampilkan buku kerja Anda dalam mode layar penuh. Untuk menampilkan Ribbon, klik perintah Perluas Ribbon di bagian atas layar.
                    <img src="https://media.gcflearnfree.org/content/563b9b9dca7fac0d9c7b3f7c_11_05_2015/getting_started_display_hidden.png" alt="Ikon Auto-hide">
                </li>
                <li>Tampilkan Tab: Opsi ini menyembunyikan semua grup perintah ketika tidak digunakan, tetapi tab tetap terlihat. Untuk menampilkan Ribbon, cukup klik tab.
                    <img src="https://media.gcflearnfree.org/content/563b9b9dca7fac0d9c7b3f7c_11_05_2015/getting_started_display_only_tabs.png" alt="Ikon Tampilkan Tab">
                </li>
                <li>Tampilkan Tab dan Perintah: Opsi ini memaksimalkan Ribbon. Semua tab dan perintah akan terlihat. Opsi ini dipilih secara default ketika Anda membuka Excel untuk pertama kali.
            </ul>
        
            <h3>Bilah Alat Akses Cepat</h3>
            <p>Terletak tepat di atas Ribbon, Bilah Alat Akses Cepat memungkinkan Anda mengakses perintah umum apa pun tab yang dipilih. Secara default, ini termasuk perintah Simpan, Batalkan, dan Ulangi. Anda dapat menambahkan perintah lain sesuai preferensi Anda.</p>
        
            <h3>Untuk menambahkan perintah ke Bilah Alat Akses Cepat:</h3>
            <ul>
                <li>Klik panah drop-down di sebelah kanan Bilah Alat Akses Cepat.
                </li>
                <li>Pilih perintah yang ingin Anda tambahkan dari menu drop-down. Untuk memilih dari perintah tambahan, pilih Perintah Lainnya.
                    <img src="https://media.gcflearnfree.org/content/563b9b9dca7fac0d9c7b3f7c_11_05_2015/getting_started_quick_access_menu.png" alt="Ikon Tambah Perintah">
                </li>
                <li>Perintah akan ditambahkan ke Bilah Alat Akses Cepat.
                    <img src="https://media.gcflearnfree.org/content/563b9b9dca7fac0d9c7b3f7c_11_05_2015/getting_started_quick_access_added.png" alt="Ikon Tambah">
                </li>
            </ul>
        
            <h3>Bagaimana menggunakan "Beri tahu saya":</h3>
            <p>Kolom "Beri tahu saya" bekerja seperti kotak pencarian untuk membantu Anda dengan cepat menemukan alat atau perintah yang ingin Anda gunakan.</p>
            <img src="https://media.gcflearnfree.org/content/563b9b9dca7fac0d9c7b3f7c_11_05_2015/getting_started_tell_me.png" alt="Ikon Tulis">
            <ul>
                <li>Ketikkan dengan kata-kata Anda sendiri apa yang ingin Anda lakukan.
                    <img src="https://media.gcflearnfree.org/content/563b9b9dca7fac0d9c7b3f7c_11_05_2015/getting_started_tell_me_type.png" alt="Ikon Tulis">
                </li>
                <li>Hasilnya akan memberi Anda beberapa opsi yang relevan. Untuk menggunakan salah satunya, klik seperti Anda akan klik perintah di Ribbon.
                    <img src="https://media.gcflearnfree.org/content/563b9b9dca7fac0d9c7b3f7c_11_05_2015/getting_started_tell_me_menu.png" alt="Ikon Hasil Pencarian">
                </li>
            </ul>
        
            <h3>Tampilan lembar kerja</h3>
            <p>Excel memiliki berbagai opsi tampilan yang mengubah cara buku kerja Anda ditampilkan. Tampilan ini bisa berguna untuk berbagai tugas, terutama jika Anda berencana untuk mencetak spreadsheet. Untuk mengubah tampilan lembar kerja, temukan perintah di sudut kanan bawah jendela Excel dan pilih Tampilan Normal, Tampilan Tata Letak Halaman, atau Tampilan Pemisah Halaman.</p>
            <img src="https://media.gcflearnfree.org/content/563b9b9dca7fac0d9c7b3f7c_11_05_2015/getting_started_views_buttons.png" alt="Ikon Tampilan Normal">
            <ul>
                <li>Tampilan Normal adalah tampilan default untuk semua lembar kerja di Excel.
                    <img src="https://media.gcflearnfree.org/content/563b9b9dca7fac0d9c7b3f7c_11_05_2015/getting_started_views_normal.png" alt="Ikon Tampilan Normal">
                </li>
                <li>Tampilan Tata Letak Halaman menampilkan bagaimana lembar kerja Anda akan muncul ketika dicetak. Anda juga dapat menambahkan header dan footer dalam tampilan ini.
                    <img src="https://media.gcflearnfree.org/content/563b9b9dca7fac0d9c7b3f7c_11_05_2015/getting_started_views_page_layout.png" alt="Ikon Tata Letak Halaman">
                </li>
                <li>Tampilan Pemisah Halaman memungkinkan Anda mengubah lokasi pemisah halaman, yang sangat berguna saat mencetak banyak data dari Excel.
                    <img src="https://media.gcflearnfree.org/content/563b9b9dca7fac0d9c7b3f7c_11_05_2015/getting_started_views_page_break.png" alt="Ikon Pemisah Halaman">
                </li>
            </ul>
        
            <h3>Tampilan Backstage</h3>
            <p>Tampilan Backstage memberi Anda berbagai opsi untuk menyimpan, membuka file, mencetak, dan berbagi buku kerja Anda.</p>
        
            <h3>Untuk mengakses Tampilan Backstage:</h3>
            <p>Klik tab File pada Ribbon. Tampilan Backstage akan muncul.</p>
                    <img src="https://media.gcflearnfree.org/content/563b9b9dca7fac0d9c7b3f7c_11_05_2015/getting_started_backstage_file.png" alt="Ikon File Tab">
                </li>
            </ul>
            <h2>Tantangan!</h2>
            <ol>
                <li>Buka Excel.
                </li>
                <li>Klik Buku Kerja Kosong untuk membuka spreadsheet baru.
                </li>
                <li>Ubah Opsi Tampilan Ribbon menjadi Tampilkan Tab.
                </li>
                <li>Menggunakan Sesuaikan Bilah Alat Akses Cepat, klik untuk menambahkan Baru, Cetak Cepat, dan Ejaan.
                </li>
                <li>Di bilah Beri tahu saya, ketik kata Warna. Arahkan ke Warna Isi dan pilih kuning. Ini akan mengisi sel dengan warna kuning.
                </li>
                <li>Ubah tampilan lembar kerja ke opsi Tata Letak Halaman.
                </li>
                <li>Saat Anda selesai, layar Anda harus terlihat seperti ini:
                    <img src="https://media.gcflearnfree.org/content/563b9b9dca7fac0d9c7b3f7c_11_05_2015/getting%20to%20know%20challenge.png" alt="Ikon Tantangan Selesai">
                </li>
                <li>Ubah Opsi Tampilan Ribbon kembali ke Tampilkan Tab dan Perintah.
                </li>
                <li>Tutup Excel dan Jangan Simpan perubahan.
                </li>
            </ol>',
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Membuat dan Membuka Buku Kerja',
            'course_id' => '2',
            'desc' => '<h1>Perkenalan</h1>
            <p>File Excel disebut buku kerja. Setiap kali Anda memulai proyek baru di Excel, Anda harus membuat buku kerja baru. Ada beberapa cara untuk mulai bekerja dengan buku kerja di Excel. Anda bisa memilih untuk membuat buku kerja baru — baik dengan buku kerja kosong atau templat yang telah dirancang sebelumnya — atau membuka buku kerja yang sudah ada.</p>
            <p>Tonton video di bawah ini untuk mempelajari selengkapnya tentang membuat dan membuka buku kerja di Excel.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/EBGrJckHadw?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Tentang OneDrive</h2>
            <p>Kapan pun Anda membuka atau menyimpan buku kerja, Anda akan memiliki opsi untuk menggunakan OneDrive Anda, yang merupakan layanan penyimpanan file online yang disertakan dengan akun Microsoft Anda. Untuk mengaktifkan opsi ini, Anda harus masuk ke Office. Untuk mempelajari lebih lanjut, kunjungi pelajaran kami tentang Memahami OneDrive.</p>
            <img src="https://media.gcflearnfree.org/content/563d05f9ca7fac0d9c7b3f7e_11_06_2015/creating_opening_onedrive.png" alt="OneDrive di tab Buka">
            <h2>Untuk membuat buku kerja kosong baru:</h2>
            <ol>
                <li>Pilih tab File. Tampilan belakang panggung akan muncul.</li>
                <img src="https://media.gcflearnfree.org/content/563d05f9ca7fac0d9c7b3f7e_11_06_2015/getting_started_backstage_file.png" alt="Your Image Description">
                <li>Klik tab File untuk menuju ke tampilan Backstage.</li>
                <img src="https://media.gcflearnfree.org/content/563d05f9ca7fac0d9c7b3f7e_11_06_2015/creating_opening_new.png" alt="Your Image Description">
                <li>Pilih Baru, lalu klik Buku kerja kosong.</li>
                <li>Klik Buku kerja kosong di tab Baru. Buku kerja kosong baru akan muncul.</li>
            </ol>
            <p>Untuk membuka buku kerja yang sudah ada:</p>
            <ol>
                <li>Arahkan ke tampilan Backstage, lalu klik Buka.</li>
                <img src="https://media.gcflearnfree.org/content/563d05f9ca7fac0d9c7b3f7e_11_06_2015/creating_opening_open_open.png" alt="Your Image Description">
                <li>Pilih Komputer, lalu klik Telusuri. Anda juga dapat memilih OneDrive untuk membuka file yang disimpan di OneDrive Anda.</li>
                <img src="https://media.gcflearnfree.org/content/563d05f9ca7fac0d9c7b3f7e_11_06_2015/creating_opening_open_browse2.png" alt="Your Image Description">
                <li>Kotak dialog Buka akan muncul. Cari dan pilih buku kerja Anda, lalu klik Buka.</li>
                <img src="https://media.gcflearnfree.org/content/563d05f9ca7fac0d9c7b3f7e_11_06_2015/creating_opening_open_dialog.png" alt="Your Image Description">
            </ol>
            <p>Jika Anda baru saja membuka buku kerja yang diinginkan, Anda bisa menelusuri Buku Kerja Terbaru daripada mencari file.</p>
            <img src="https://media.gcflearnfree.org/content/563d05f9ca7fac0d9c7b3f7e_11_06_2015/creating_opening_open_recent.png" alt="Your Image Description">
            <p>Untuk menyematkan buku kerja:</p>
            <ol>
                <li>Arahkan ke tampilan Backstage, lalu klik Buka. Buku kerja Anda yang baru saja diedit akan muncul.</li>
                <img src="https://media.gcflearnfree.org/content/563d05f9ca7fac0d9c7b3f7e_11_06_2015/creating_opening_pin_open.png" alt="Your Image Description">
                <li>Arahkan mouse Anda ke buku kerja yang ingin Anda sematkan. Ikon pushpin akan muncul di sebelah buku kerja. Klik ikon peniti.</li>
                <img src="https://media.gcflearnfree.org/content/563d05f9ca7fac0d9c7b3f7e_11_06_2015/creating_opening_pin_pushpin.png" alt="Your Image Description">
            </ol>
            <p>Buku kerja akan tetap berada di Buku Kerja Terbaru. Untuk melepas pin buku kerja, cukup klik lagi ikon pin tekan.</p>
            <img src="https://media.gcflearnfree.org/content/563d05f9ca7fac0d9c7b3f7e_11_06_2015/creating_opening_pin_unpin.png" alt="Your Image Description">
            <p>Untuk menggunakan template:</p>
            <ol>
                <li>Klik tab File untuk mengakses tampilan Backstage.</li>
                <img src="https://media.gcflearnfree.org/content/563d05f9ca7fac0d9c7b3f7e_11_06_2015/getting_started_backstage_file.png" alt="Your Image Description">
                <li>Pilih Baru. Beberapa templat akan muncul di bawah opsi Buku kerja kosong.</li>
                <li>Pilih templat untuk meninjaunya.</li>
                <img src="https://media.gcflearnfree.org/content/563d05f9ca7fac0d9c7b3f7e_11_06_2015/creating_opening_template_new.png" alt="Your Image Description">
                <li>Pratinjau template akan muncul, bersama dengan informasi tambahan tentang bagaimana template tersebut dapat digunakan.</li>
                <li>Klik Buat untuk menggunakan templat yang dipilih.</li>
                <img src="https://media.gcflearnfree.org/content/563d05f9ca7fac0d9c7b3f7e_11_06_2015/creating_opening_template_preview.png" alt="Your Image Description">
            </ol>
            <p>Buku kerja baru akan muncul dengan templat yang dipilih.</p>
            <p>Modus Kompatibilitas</p>
            <p>Terkadang Anda mungkin perlu bekerja dengan buku kerja yang dibuat di versi Microsoft Excel yang lebih lama, seperti Excel 2010 atau Excel 2007. Saat Anda membuka jenis buku kerja ini, buku kerja tersebut akan muncul dalam Mode Kompatibilitas.</p>
            <p>Pada gambar di bawah, Anda dapat melihat bahwa buku kerja berada dalam Mode Kompatibilitas, yang ditunjukkan di bagian atas jendela di sebelah kanan nama file. Ini akan menonaktifkan beberapa fitur Excel, yang akan berwarna abu-abu di Ribbon.</p>
            <img src="https://media.gcflearnfree.org/content/563d05f9ca7fac0d9c7b3f7e_11_06_2015/creating_opening_compatibility_example.png" alt="Your Image Description">
            <p>Untuk keluar dari Mode Kompatibilitas, Anda harus mengonversi buku kerja ke tipe versi saat ini. Namun, jika Anda berkolaborasi dengan orang lain yang hanya memiliki akses ke versi Excel yang lebih lama, sebaiknya biarkan buku kerja dalam Mode Kompatibilitas agar formatnya tidak berubah.</p>
            <p>Untuk mengonversi buku kerja:</p>
            <ol>
                <li>Klik tab File untuk mengakses tampilan Backstage.</li>
                <img src="https://media.gcflearnfree.org/content/563d05f9ca7fac0d9c7b3f7e_11_06_2015/getting_started_backstage_file.png" alt="Your Image Description">
                <li>Cari dan pilih perintah Konversi.</li>
                <img src="https://media.gcflearnfree.org/content/563d05f9ca7fac0d9c7b3f7e_11_06_2015/creating_opening_compatibility_convert.png" alt="Your Image Description">
                <li>Kotak dialog Simpan Sebagai akan muncul. Pilih lokasi di mana Anda ingin menyimpan buku kerja, masukkan nama file untuk buku kerja tersebut, dan klik Simpan.</li>
                <img src="https://media.gcflearnfree.org/content/563d05f9ca7fac0d9c7b3f7e_11_06_2015/creating_opening_compatibility_dialog.png" alt="Your Image Description">
                </ol>
            <p>Buku kerja akan dikonversi ke tipe file terbaru.</p>
            <p>Tantangan!</p>
            <p><a href="https://media.gcflearnfree.org/content/5c097b9577c0500354728593_12_06_2018/excel_creatingopening_practice.xls">Buka buku kerja latihan kami.</a></p>
            <p>Perhatikan bahwa buku kerja kita terbuka dalam Mode Kompatibilitas. Konversikan buku kerja ke format file saat ini. Kotak dialog akan muncul menanyakan apakah Anda ingin menutup'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Menyimpan dan Berbagi Buku Kerja',
            'course_id' => '3',
            'desc' => ' <h1>Panduan Menyimpan dan Berbagi Buku Kerja di Excel</h1>
            <p>Setiap kali Anda membuat buku kerja baru di Excel, Anda harus mengetahui cara menyimpannya agar dapat mengakses dan mengeditnya nanti. Seperti versi Excel sebelumnya, Anda bisa menyimpan file secara lokal ke komputer Anda. Anda juga bisa menyimpan buku kerja ke cloud menggunakan OneDrive, serta mengekspor dan berbagi buku kerja dengan orang lain langsung dari Excel.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/IwSC5LUm5HE?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"></iframe></div>
            <h2>Tentang OneDrive</h2>
            <p>Kapan pun Anda membuka atau menyimpan buku kerja, Anda akan memiliki opsi untuk menggunakan OneDrive Anda, yang merupakan layanan penyimpanan file online yang disertakan dengan akun Microsoft Anda. Untuk mengaktifkan opsi ini, Anda harus masuk ke Office. Untuk mempelajari lebih lanjut, kunjungi pelajaran kami tentang Memahami OneDrive.</p>
            <img src="https://media.gcflearnfree.org/content/56423e6bca7fad0d9cc8050d_11_10_2015/saving_sharing_onedrive.png" alt="Mengklik perintah Simpan">
            <h2>Mengakses OneDrive</h2>
            <h3>Simpan dan Simpan Sebagai</h3>
            <p>Excel menawarkan dua cara untuk menyimpan file: Simpan dan Simpan Sebagai. Opsi-opsi ini bekerja dengan cara yang serupa, dengan beberapa perbedaan penting:</p>
            <ul>
                <li>
                    <strong>Simpan:</strong> Saat Anda membuat atau mengedit buku kerja, Anda akan menggunakan perintah Simpan untuk menyimpan perubahan Anda. Anda akan menggunakan perintah ini hampir sepanjang waktu. Saat Anda menyimpan file, Anda hanya perlu memilih nama file dan lokasinya untuk pertama kalinya. Selanjutnya, Anda tinggal klik perintah Simpan untuk menyimpannya dengan nama dan lokasi yang sama.
                </li>
                <li>
                    <strong>Save As:</strong> Anda akan menggunakan perintah ini untuk membuat salinan buku kerja sambil menyimpan aslinya. Saat Anda menggunakan Simpan Sebagai, Anda harus memilih nama dan/atau lokasi berbeda untuk versi yang disalin.
                </li>
            </ul>
            <h3>Untuk menyimpan buku kerja:</h3>
            <ul>
                <li>
                    <strong>Langkah 1:</strong> Cari dan pilih perintah Simpan di Quick Access Toolbar.
                    <img src="https://media.gcflearnfree.org/content/56423e6bca7fad0d9cc8050d_11_10_2015/saving_sharing_save_quick_access.png" alt="Mengklik perintah Simpan di Quick Access Toolbar">
                </li>
                <li>
                    <strong>Langkah 2:</strong> Jika Anda menyimpan file untuk pertama kalinya, panel Simpan Sebagai akan muncul dalam tampilan Backstage.
                </li>
                <li>
                    <strong>Langkah 3:</strong> Pilih tempat menyimpan file dan beri nama file. Untuk menyimpan buku kerja ke komputer Anda, pilih Komputer, lalu klik Telusuri. Anda juga bisa mengklik OneDrive untuk menyimpan file ke OneDrive Anda.
                    <img src="https://media.gcflearnfree.org/content/56423e6bca7fad0d9cc8050d_11_10_2015/saving_sharing_save_browse.png" alt="Menyimpan buku kerja secara lokal">
                </li>
                <li>
                    <strong>Langkah 4:</strong> Kotak dialog Simpan Sebagai akan muncul. Pilih lokasi di mana Anda ingin menyimpan buku kerja. Masukkan nama file untuk buku kerja, lalu klik Simpan.
                </li>
            </ul>
            <h3>Menggunakan Save As untuk membuat salinan</h3>
            <p>Jika Anda ingin menyimpan versi buku kerja yang berbeda sambil mempertahankan versi aslinya, Anda bisa membuat salinannya. Misalnya, jika Anda memiliki file bernama Data Penjualan, Anda dapat menyimpannya sebagai Data Penjualan 2 sehingga Anda dapat mengedit file baru dan tetap merujuk kembali ke versi aslinya.</p>
            <ul>
                <li>
                    <strong>Langkah 1:</strong> Klik perintah Save As dalam tampilan Backstage. Sama seperti saat menyimpan file untuk pertama kalinya, Anda harus memilih tempat menyimpan file dan memberinya nama file baru.
                    <img src="https://media.gcflearnfree.org/content/56423e6bca7fad0d9cc8050d_11_10_2015/saving_sharing_save_as.png" alt="Mengklik Simpan Sebagai">
                </li>
            </ul>
            <h3>Untuk mengubah lokasi penyimpanan default:</h3>
            <p>Jika Anda tidak ingin menggunakan OneDrive, Anda mungkin merasa frustrasi karena OneDrive dipilih sebagai lokasi default saat menyimpan. Jika Anda merasa kesulitan untuk memilih Komputer setiap kali, Anda dapat mengubah lokasi penyimpanan default sehingga Komputer dipilih secara default.</p>
            <ul>
                <li>
                    <strong>Langkah 1:</strong> Klik tab File untuk mengakses tampilan Backstage.
                    <img src="https://media.gcflearnfree.org/content/56423e6bca7fad0d9cc8050d_11_10_2015/getting_started_backstage_file.png" alt="Mengklik tab File">
                </li>
                <li>
                    <strong>Langkah 2:</strong> Klik Opsi.
                    <img src="https://media.gcflearnfree.org/content/56423e6bca7fad0d9cc8050d_11_10_2015/saving_sharing_change_location_menu.png" alt="Mengklik Opsi">
                </li>
                <li>
                    <strong>Langkah 3:</strong> Kotak dialog Opsi Excel akan muncul. Pilih Simpan, centang kotak di samping Simpan ke Komputer secara default, lalu klik OK. Lokasi penyimpanan default akan diubah.
                    <img src="https://media.gcflearnfree.org/content/56423e6bca7fad0d9cc8050d_11_10_2015/saving_sharing_change_location_options.png" alt="Mengklik lokasi penyimpanan default">
                </li>
            </ul>
            <h3>Pemulihan Otomatis</h3>
            <p>Excel secara otomatis menyimpan buku kerja Anda ke folder sementara saat Anda mengerjakannya. Jika Anda lupa menyimpan perubahan atau jika Excel mogok, Anda dapat memulihkan file menggunakan AutoRecover.</p>
            <ul>
                <li>
                    <strong>Langkah 1:</strong> Buka Excel. Jika versi file yang disimpan secara otomatis ditemukan, panel Pemulihan Dokumen akan muncul. Klik untuk membuka file yang tersedia. Buku kerja akan dipulihkan.
                    <img src="https://media.gcflearnfree.org/content/56423e6bca7fad0d9cc8050d_11_10_2015/saving_sharing_autorecover_pane.png" alt="Panel Pemulihan Dokumen">
                </li>
                <li>
                    <strong>Langkah 2:</strong> Jika Anda tidak melihat file yang diperlukan, Anda dapat menelusuri semua file yang disimpan otomatis dari tampilan Backstage. Pilih tab File, klik Kelola Buku Kerja, lalu pilih Pulihkan Buku Kerja yang Belum Disimpan.
                    <img src="https://media.gcflearnfree.org/content/56423e6bca7fad0d9cc8050d_11_10_2015/saving_sharing_autorecover_manage.png" alt="Mengakses semua file yang disimpan secara otomatis">
                </li>
            </ul>
            <h3>Mengekspor buku kerja</h3>
            <p>Secara default, buku kerja Excel disimpan dalam tipe file .xlsx. Namun, mungkin ada saatnya Anda perlu menggunakan tipe file lain, seperti buku kerja PDF atau Excel 97-2003. Sangat mudah untuk mengekspor buku kerja Anda dari Excel ke berbagai tipe file.</p>
            <h4>Untuk mengekspor buku kerja sebagai file PDF:</h4>
            <ul>
                <li>
                    <strong>Langkah 1:</strong> Klik tab File untuk mengakses tampilan Backstage.
                </li>
                <li>
                    <strong>Langkah 2:</strong> Klik Ekspor, lalu pilih Buat PDF/XPS.
                    <img src="https://media.gcflearnfree.org/content/56423e6bca7fad0d9cc8050d_11_10_2015/saving_sharing_export_menu.png" alt="Mengekspor file PDF">
                </li>
                <li>
                    <strong>Langkah 3:</strong> Kotak dialog Simpan Sebagai akan muncul. Pilih lokasi di mana Anda ingin mengekspor buku kerja, masukkan nama file, lalu klik Publikasikan.
                    <img src="https://media.gcflearnfree.org/content/56423e6bca7fad0d9cc8050d_11_10_2015/saving_sharing_export_publish.png" alt="Mengekspor file PDF">
                </li>
                <li>
                    <strong>Langkah 4:</strong> Secara default, Excel hanya akan mengekspor lembar kerja yang aktif. Jika Anda memiliki beberapa lembar kerja dan ingin menyimpan semuanya dalam file PDF yang sama, klik Opsi di kotak dialog Simpan Sebagai. Kotak dialog Opsi akan muncul. Pilih Seluruh buku kerja, lalu klik OK.
                    <img src="https://media.gcflearnfree.org/content/56423e6bca7fad0d9cc8050d_11_10_2015/saving_sharing_export_options.png" alt="Mengekspor seluruh buku kerja">
                </li>
            </ul>
            <h4>Untuk mengekspor buku kerja ke tipe file lain:</h4>
            <ul>
                <li>
                    <strong>Langkah 1:</strong> Klik tab File untuk mengakses tampilan Backstage.
                </li>
                <li>
                    <strong>Langkah 2:</strong> Klik Ekspor, lalu pilih Ubah Jenis File.
                    <img src="https://media.gcflearnfree.org/content/56423e6bca7fad0d9cc8050d_11_10_2015/saving_sharing_export_types_change.png" alt="Mengklik Ubah Jenis File">
                </li>
                <li>
                    <strong>Langkah 3:</strong> Pilih jenis file yang umum, lalu klik Simpan Sebagai.
                    <img src="https://media.gcflearnfree.org/content/56423e6bca7fad0d9cc8050d_11_10_2015/saving_sharing_export_types_file_type.png" alt="Memilih jenis file lain">
                </li>
                <li>
                    <strong>Langkah 4:</strong> Kotak dialog Simpan Sebagai akan muncul. Pilih lokasi di mana Anda ingin mengekspor buku kerja, masukkan nama file, lalu klik Simpan.
                    <img src="https://media.gcflearnfree.org/content/56423e6bca7fad0d9cc8050d_11_10_2015/saving_sharing_export_types_save_as.png" alt="Kotak dialog Simpan Sebagai">
                </li>
            </ul>
            <h3>Berbagi buku kerja</h3>
            <p>Excel memudahkan berbagi dan berkolaborasi di buku kerja menggunakan OneDrive. Sebelumnya, jika Anda ingin berbagi file dengan seseorang, Anda dapat mengirimkannya sebagai lampiran email. Meskipun nyaman, sistem ini juga membuat beberapa versi dari file yang sama, yang mungkin sulit untuk diatur.</p>
            <p>Saat Anda berbagi buku kerja dari Excel, Anda sebenarnya memberi orang lain akses ke file yang sama persis. Ini memungkinkan Anda dan orang yang Anda ajak berbagi mengedit buku kerja yang sama tanpa harus melacak beberapa versi.</p>
            <h4>Untuk berbagi buku kerja:</h4>
            <ul>
                <li>
                    <strong>Langkah 1:</strong> Buku kerja harus disimpan terlebih dahulu ke OneDrive Anda.
                    <img src="images/save_to_onedrive.png" alt="Menyimpan ke OneDrive">
                </li>
                <li>
                    <strong>Langkah 2:</strong> Klik tab File untuk mengakses tampilan Backstage, lalu klik Bagikan.
                    <img src="https://media.gcflearnfree.org/content/56423e6bca7fad0d9cc8050d_11_10_2015/saving_sharing_share_menu.png" alt="Mengklik Bagikan">
                </li>
                <li>
                    <strong>Langkah 3:</strong> Excel akan kembali ke tampilan Normal dan membuka panel Bagikan di sisi kanan jendela. Dari sini, Anda dapat mengundang orang untuk membagikan dokumen Anda, melihat daftar siapa saja yang memiliki akses ke dokumen tersebut, dan mengatur apakah mereka dapat mengedit atau hanya melihat dokumen tersebut.
                    <img src="https://media.gcflearnfree.org/content/56423e6bca7fad0d9cc8050d_11_10_2015/saving_sharing_share_pane.png" alt="Panel Bagikan">
                </li>
            </ul>
            <h4>Tantangan!</h4>
            <ul>
                <li><a href="https://media.gcflearnfree.org/content/5c097bfa77c0500354728594_12_06_2018/excel_savingsharing_practice.xlsx" download>Buka buku latihan kami.</a></li>
                <li>Menggunakan opsi Simpan Sebagai, buat salinan buku kerja dan beri nama Saving Practice Challenge. Anda bisa menyimpan salinan ke folder di komputer Anda atau ke OneDrive Anda.</li>
                <li>Ekspor buku kerja sebagai file PDF.</li>
            </ul>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Dasar Sel',
            'course_id' => '4',
            'desc' => ' <h1>Perkenalan</h1>
            <p>Kapan pun Anda bekerja dengan Excel, Anda akan memasukkan informasi—atau konten—ke dalam sel. Sel adalah blok bangunan dasar lembar kerja. Anda harus mempelajari dasar-dasar sel dan konten sel untuk menghitung, menganalisis, dan mengatur data di Excel.</p>
            <p>Opsional: <a href="https://media.gcflearnfree.org/content/5c097c3377c0500354728596_12_06_2018/excel_cellbasics_practice.xlsx">Unduh buku kerja latihan kami</a>.</p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang dasar-dasar bekerja dengan sel.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/6mSKsaquTAM?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Memahami Sel</h2>
            <p>Setiap lembar kerja terdiri dari ribuan persegi panjang, yang disebut sel. Sel merupakan perpotongan antara baris dan kolom. Dengan kata lain, ini adalah tempat bertemunya baris dan kolom.</p>
            <p>Kolom diidentifikasi dengan huruf (A, B, C), sedangkan baris diidentifikasi dengan angka (1, 2, 3). Setiap sel memiliki nama—atau alamat selnya sendiri—berdasarkan kolom dan barisnya. Pada contoh di bawah, sel yang dipilih memotong kolom C dan baris 5, sehingga alamat selnya adalah C5.</p>
            <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_intro_cell.png" alt="Sel C5">
            <p>Perhatikan bahwa alamat sel juga muncul di kotak Nama di sudut kiri atas, dan judul kolom dan baris sel disorot ketika sel dipilih.</p>
            <p>Anda juga dapat memilih beberapa sel sekaligus. Sekelompok sel dikenal sebagai rentang sel. Daripada menggunakan satu alamat sel, Anda akan merujuk ke suatu rentang sel menggunakan alamat sel dari sel pertama dan terakhir dalam rentang sel tersebut, dipisahkan dengan titik dua. Misalnya, rentang sel yang menyertakan sel A1, A2, A3, A4, dan A5 akan ditulis sebagai A1:A5. Lihatlah berbagai rentang sel di bawah ini:</p>
            <ul>
                <li>Rentang sel A1:A8</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_intro_range1.png" alt="Rentang sel A1:A8">
                <li>Rentang sel A1:F1</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_intro_range2.png" alt="Rentang sel A1:F1">
                <li>Rentang sel A1:F8</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_intro_range3.png" alt="Rentang sel A1:F8">
            </ul>
            <p>Jika kolom di spreadsheet Anda diberi label angka dan bukan huruf, Anda perlu mengubah gaya referensi default untuk Excel.</p>
        
            <h2>Untuk Memilih Sel</h2>
            <p>Untuk memasukkan atau mengedit konten sel, Anda harus memilih sel terlebih dahulu.</p>
            <ol>
                <li>Klik sel untuk memilihnya. Dalam contoh kita, kita akan memilih sel D9.</li>
                
                <li>Batas akan muncul di sekitar sel yang dipilih, dan judul kolom serta judul baris akan disorot. Sel akan tetap dipilih sampai Anda mengklik sel lain di lembar kerja.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_select.png" alt="Memilih sel D9">
                </ol>
            <p>Anda juga dapat memilih sel menggunakan tombol panah pada keyboard Anda.</p>
        
            <h2>Untuk Memilih Rentang Sel</h2>
            <p>Terkadang Anda mungkin ingin memilih grup sel yang lebih besar, atau rentang sel.</p>
            <ol>
                <li>Klik dan seret mouse hingga semua sel bersebelahan yang ingin Anda pilih tersorot. Dalam contoh kita, kita akan memilih rentang sel B5:C18.</li>
                
                <li>Lepaskan mouse untuk memilih rentang sel yang diinginkan. Sel-selnya akan tetap dipilih sampai Anda mengklik sel lain di lembar kerja.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_select_range.png" alt="Memilih rentang sel B5:C18">
                </ol>
        
            <h2>Konten Sel</h2>
            <p>Informasi apa pun yang Anda masukkan ke dalam spreadsheet akan disimpan dalam sel. Setiap sel bisa berisi tipe konten berbeda, termasuk teks, pemformatan, rumus, dan fungsi.</p>
            <ul>
                <li><strong>Teks:</strong> Sel dapat berisi teks, seperti huruf, angka, dan tanggal.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_format_none.png" alt="Konten teks">
                <li><strong>Atribut pemformatan:</strong> Sel dapat berisi atribut pemformatan yang mengubah cara huruf, angka, dan tanggal ditampilkan. Misalnya, persentase dapat muncul sebagai 0,15 atau 15%. Anda bahkan dapat mengubah teks sel atau warna latar belakang.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_format_table.png" alt="Konten dengan format berbeda">
                <li><strong>Rumus dan fungsi:</strong> Sel dapat berisi rumus dan fungsi yang menghitung nilai sel. Dalam contoh kita, SUM(B2:B8) menambahkan nilai setiap sel di rentang sel B2:B8 dan menampilkan totalnya di sel B9.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_format_formula.png" alt="Konten rumus">
            </ul>
        
            <h2>Untuk Menyisipkan Konten</h2>
            <ol>
                <li>Klik sel untuk memilihnya. Dalam contoh kita, kita akan memilih sel F9.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_insert_select.png" alt="Memilih sel F9">
                <li>Ketik sesuatu ke dalam sel yang dipilih, lalu tekan Enter pada keyboard Anda. Konten akan muncul di sel dan bilah rumus. Anda juga bisa memasukkan dan mengedit konten sel di bilah rumus.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_insert_done.png" alt="Mengetik di dalam sel">
            </ol>
        
            <h2>Untuk Menghapus (atau Menghapus) Konten Sel</h2>
            <ol>
                <li>Pilih sel dengan konten yang ingin Anda hapus. Dalam contoh kita, kita akan memilih rentang sel A10:H10.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_clear_select.png" alt="Memilih rentang sel A10:H10">
                <li>Pilih perintah Clear pada tab Home, lalu klik Clear Contents.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_clear_command.png" alt="Memilih perintah Clear Contents">
                <li>Isi sel akan dihapus.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_clear_done.png" alt="Rentang sel yang dibersihkan">
            </ol>
            <p>Anda juga dapat menggunakan tombol Hapus pada keyboard Anda untuk menghapus konten dari beberapa sel sekaligus. Tombol Backspace hanya akan menghapus konten dari satu sel dalam satu waktu.</p>
        
            <h2>Untuk Menghapus Sel</h2>
            <p>Ada perbedaan penting antara menghapus isi sel dan menghapus sel itu sendiri. Jika Anda menghapus seluruh sel, sel di bawahnya akan bergeser untuk mengisi kekosongan dan menggantikan sel yang terhapus.</p>
            <ol>
                <li>Pilih sel yang ingin Anda hapus. Dalam contoh kita, kita akan memilih A10:H10.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_delete_select.png" alt="Memilih rentang sel A10:H10">
                <li>Pilih perintah Hapus dari tab Beranda di Ribbon.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_delete_command.png" alt="Mengklik perintah Hapus pada tab Beranda">
                <li>Sel-sel di bawahnya akan bergeser ke atas dan mengisi kekosongan.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_delete_done.png" alt="Sel yang digeser setelah dihapus">
            </ol>
        
            <h2>Untuk Menyalin dan Menempelkan Konten Sel</h2>
            <p>Excel memungkinkan Anda menyalin konten yang sudah dimasukkan ke dalam spreadsheet dan menempelkan konten tersebut ke sel lain, sehingga dapat menghemat waktu dan tenaga Anda.</p>
            <ol>
                <li>Pilih sel yang ingin Anda salin. Dalam contoh kita, kita akan memilih F9.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_copy_select.png" alt="Memilih sel F9">
                <li>Klik perintah Salin pada tab Beranda, atau tekan Ctrl+C pada keyboard Anda.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_copy_command.png" alt="Mengklik perintah Salin pada tab Beranda">
                <li>Pilih sel tempat Anda ingin menempelkan konten. Dalam contoh kita, kita akan memilih F12:F17. Sel yang disalin akan memiliki kotak putus-putus di sekelilingnya.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_copy_paste_destination.png" alt="Memilih tujuan untuk sel yang disalin">
                <li>Klik perintah Tempel pada tab Beranda, atau tekan Ctrl+V pada keyboard Anda.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_copy_paste_comonly.png" alt="Memilih perintah Tempel">
                <li>Konten akan ditempelkan ke sel yang dipilih.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_copy_paste_done.png" alt="Konten yang ditempel">
            </ol>
        
            <h2>Untuk Mengakses Opsi Tempel Tambahan</h2>
            <p>Anda juga dapat mengakses opsi tempel tambahan, yang sangat berguna ketika bekerja dengan sel yang berisi rumus atau pemformatan. Cukup klik panah tarik-turun pada perintah Tempel untuk melihat opsi ini.</p>
            <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_paste_more.png" alt="Opsi tempel tambahan">
            <p>Daripada memilih perintah dari Ribbon, Anda dapat mengakses perintah dengan cepat dengan mengklik kanan. Cukup pilih sel yang ingin Anda format, lalu klik kanan mouse. Menu drop-down akan muncul, di mana Anda akan menemukan beberapa perintah yang juga terletak di Ribbon.</p>
            <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_paste_rightclick.png" alt="Klik kanan untuk mengakses opsi potong, salin, dan tempel">
        
            <h2>Untuk Memotong dan Menempelkan Konten Sel</h2>
            <p>Berbeda dengan menyalin dan menempel, yang menduplikasi konten sel, pemotongan memungkinkan Anda memindahkan konten antar sel.</p>
            <ol>
                <li>Pilih sel yang ingin Anda potong. Dalam contoh kita, kita akan memilih G5:G6.</li>
                <li>Klik kanan mouse dan pilih perintah Potong. Anda juga dapat menggunakan perintah pada tab Beranda, atau tekan Ctrl+X pada keyboard Anda.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_cut_rightclick.png" alt="Memilih perintah Potong dari menu klik kanan">
                <li>Pilih sel tempat Anda ingin menempelkan konten. Dalam contoh kita, kita akan memilih F10:F11. Sel yang dipotong sekarang akan memiliki kotak putus-putus di sekelilingnya.</li>
                <li>Klik kanan mouse dan pilih perintah Tempel. Anda juga dapat menggunakan perintah pada tab Beranda, atau tekan Ctrl+V pada keyboard Anda.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_paste_rightclickcommand.png" alt="Memilih perintah Tempel">
                <li>Konten yang dipotong akan dihapus dari sel asli dan ditempelkan ke sel yang dipilih.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_paste_done.png" alt="Konten yang dipindahkan">
            </ol>
        
            <h2>Untuk Menarik dan Melepas Sel</h2>
            <p>Daripada memotong, menyalin, dan menempel, Anda bisa menarik dan melepas sel untuk memindahkan kontennya.</p>
            <ol>
                <li>Pilih sel yang ingin Anda pindahkan. Dalam contoh kita, kita akan memilih H4:H12.</li>
                <li>Arahkan mouse ke tepi sel yang dipilih hingga mouse berubah menjadi penunjuk dengan empat panah.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_drag_select.png" alt="Melayang di atas batas rentang sel yang dipilih">
                <li>Klik dan seret sel ke lokasi yang diinginkan. Dalam contoh kita, kita akan memindahkannya ke G4:G12.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_drag_during.png" alt="Menyeret sel ke lokasi baru">
                <li>Lepaskan mousenya. Sel akan dijatuhkan di lokasi yang dipilih.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_drag_done.png" alt="Sel yang dijatuhkan di lokasi barunya">
            </ol>
        
            <h2>Untuk Menggunakan Gagang Isian</h2>
            <p>Jika Anda menyalin konten sel ke sel yang berdekatan di baris atau kolom yang sama, pengendali isian adalah alternatif yang baik untuk perintah salin dan tempel.</p>
            <ol>
                <li>Pilih sel yang berisi konten yang ingin Anda gunakan, lalu arahkan mouse ke sudut kanan bawah sel sehingga pengendali isian muncul.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_fill_select.png" alt="Pegangan pengisian">
                <li>Klik dan seret gagang isian hingga semua sel yang ingin Anda isi terpilih. Dalam contoh kita, kita akan memilih G13:G17.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_fill_down.png" alt="Menyeret gagang isian ke bawah">
                <li>Lepaskan mouse untuk mengisi sel yang dipilih.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_fill_done.png" alt="Sel-sel yang terisi">
            </ol>
        
            <h2>Untuk Melanjutkan Rangkaian dengan Gagang Isian</h2>
            <p>Pengendali isian juga dapat digunakan untuk melanjutkan rangkaian. Setiap kali konten baris atau kolom mengikuti urutan berurutan, seperti angka (1, 2, 3) atau hari (Senin, Selasa, Rabu), pengendali isian dapat menebak apa yang akan terjadi selanjutnya dalam rangkaian tersebut. Dalam kebanyakan kasus, Anda perlu memilih beberapa sel sebelum menggunakan gagang isian untuk membantu Excel menentukan urutan rangkaian.</p>
            <ol>
                <li>Pilih rentang sel yang berisi rangkaian yang ingin Anda lanjutkan. Dalam contoh kita, kita akan memilih E4:G4.</li>
                <li>Klik dan seret gagang isian untuk melanjutkan rangkaian.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_fillseries.png" alt="Melanjutkan rangkaian dengan gagang isian">
                <li>Lepaskan mousenya. Jika Excel memahami rangkaiannya, maka akan dilanjutkan di sel yang dipilih. Dalam contoh kita, Excel menambahkan Part 4, Part 5, dan Part 6 ke H4:J4.</li>
                <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/cellb_fillseries_done.png" alt="Seri yang sudah selesai">
            </ol>
            <p>Anda juga dapat mengeklik dua kali gagang isian alih-alih mengeklik dan menyeret. Ini dapat berguna pada spreadsheet yang lebih besar, di mana mengklik dan menyeret mungkin terasa canggung.</p>
        
            <h2>Tantangan Dasar-Dasar Sel</h2>
            <p><a href="https://media.gcflearnfree.org/content/5c097c3377c0500354728596_12_06_2018/excel_cellbasics_practice.xlsx" download>Buka buku kerja latihan kami.</a></p>
            <ol>
                <li>Pilih sel D6 dan ketik <strong>hlee</strong>.</li>
                <li>Hapus konten di baris 14.</li>
                <li>Hapus kolom G.</li>
                <li>Menggunakan potong dan tempel atau seret dan lepas, pindahkan konten baris 18 ke baris 14.</li>
                <li>Gunakan gagang isian untuk memberi tanda <strong>X</strong> pada sel F9:F17.</li>
            </ol>
            <p>Ketika Anda selesai, buku kerja Anda akan terlihat seperti ini:</p>
            <img src="https://media.gcflearnfree.org/content/5642417dca7fad0d9cc8050e_11_10_2015/screen%20shot%202015-11-20%20at%201.17.06%20pm.png" alt="Buku kerja setelah tantangan selesai">'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Memodifikasi Kolom, Baris, dan Sel',
            'course_id' => '5',
            'desc' => '    <h1>Panduan Mengubah Ukuran Kolom, Baris, dan Sel di Excel</h1>

            <ul>
                <li>Perkenalan
                    <p>Secara default, setiap baris dan kolom buku kerja baru diatur ke tinggi dan lebar yang sama. Excel memungkinkan Anda mengubah lebar kolom dan tinggi baris dengan berbagai cara, termasuk membungkus teks dan menggabungkan sel.</p>
                    <p>Opsional: Unduh buku kerja latihan kami.</p>
                    <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang memodifikasi kolom, baris, dan sel.</p>
                    <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/9s0OdXiuqL0?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
                    </li>
        
                <li>Untuk mengubah lebar kolom:
                    <ol>
                        <li>Posisikan mouse di atas garis kolom pada judul kolom sehingga kursor menjadi panah ganda.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_colwidth_select.png" alt="Memposisikan mouse di atas garis kolom">
                        </li>
                        <li>Klik dan seret mouse untuk menambah atau mengurangi lebar kolom.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_colwidth_during.png" alt="Menambah lebar kolom">
                        </li>
                        <li>Lepaskan mouse. Lebar kolom akan diubah.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_colwidth_done.png" alt="Kolom yang diubah ukurannya">
                        </li>
                    </ol>
                </li>
        
                <li>Untuk menyesuaikan lebar kolom AutoFit:
                    <ol>
                        <li>Posisikan mouse di atas garis kolom pada judul kolom sehingga kursor menjadi tanda panah ganda.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_colwidth_auto_start.png" alt="Menyesuaikan lebar kolom secara otomatis">
                        </li>
                        <li>Klik dua kali mouse. Lebar kolom akan diubah secara otomatis agar sesuai dengan konten.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_colwidth_auto_done.png" alt="Lebar kolom AutoFit">
                        </li>
                    </ol>
                </li>
        
                <li>Untuk mengubah tinggi baris:
                    <ol>
                        <li>Posisikan kursor di atas garis baris sehingga kursor menjadi tanda panah ganda.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_rowheight_start.png" alt="Melayang di atas garis baris">
                        </li>
                        <li>Klik dan seret mouse untuk menambah atau mengurangi tinggi baris.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_rowheight_during.png" alt="Mengurangi tinggi baris">
                        </li>
                        <li>Lepaskan mouse. Ketinggian baris yang dipilih akan diubah.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_rowheight_done.png" alt="Tinggi baris yang baru">
                        </li>
                    </ol>
                </li>
        
                <li>Untuk mengubah semua baris atau kolom:
                    <ol>
                        <li>Cari dan klik tombol Pilih Semua tepat di bawah kotak nama untuk memilih setiap sel di lembar kerja.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_selectall.png" alt="Memilih semua sel di lembar kerja">
                        </li>
                        <li>Posisikan mouse di atas garis baris sehingga kursor menjadi panah ganda.
                        </li>
                        <li>Klik dan seret mouse untuk menambah atau mengurangi tinggi baris, lalu lepaskan mouse jika Anda sudah puas. Ketinggian baris akan diubah untuk seluruh lembar kerja.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_selectall_done.png" alt="Tinggi baris yang baru dan seragam">
                        </li>
                    </ol>
                </li>
        
                <li>Memasukkan, menghapus, memindahkan, dan menyembunyikan:
                    <p>Setelah Anda bekerja dengan buku kerja selama beberapa waktu, Anda mungkin ingin menyisipkan kolom atau baris baru, menghapus baris atau kolom tertentu, memindahkannya ke lokasi lain di lembar kerja, atau bahkan menyembunyikannya.</p>
                </li>
        
                <li>Untuk menyisipkan baris:
                    <ol>
                        <li>Pilih judul baris di bawah tempat Anda ingin baris baru muncul. Dalam contoh ini, kita ingin menyisipkan baris di antara baris 4 dan 5, jadi kita akan memilih baris 5.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_insertrow_select.png" alt="Memilih baris 5">
                        </li>
                        <li>Klik perintah Sisipkan pada tab Beranda.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_insertrow_command.png" alt="Mengklik perintah Sisipkan">
                        </li>
                        <li>Baris baru akan muncul di atas baris yang dipilih.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_insertrow_done.png" alt="Baris yang baru disisipkan">
                        </li>
                    </ol>
                </li>
        
                <li>Untuk menyisipkan kolom:
                    <ol>
                        <li>Pilih judul kolom di sebelah kanan tempat Anda ingin kolom baru muncul. Misalnya, jika Anda ingin menyisipkan kolom di antara kolom D dan E, pilih kolom E.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_insertcol_select.png" alt="Memilih kolom E">
                        </li>
                        <li>Klik perintah Sisipkan pada tab Beranda.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_insertcol_command.png" alt="Mengklik perintah Sisipkan">
                        </li>
                        <li>Kolom baru akan muncul di sebelah kiri kolom yang dipilih.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_insertcol_done.png" alt="Kolom yang baru disisipkan">
                        </li>
                    </ol>
                </li>
        
                <li>Untuk menghapus baris atau kolom:
                    <ol>
                        <li>Pilih baris yang ingin Anda hapus. Dalam contoh kita, kita akan memilih baris 9.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_delete_select.png" alt="Memilih baris 9">
                        </li>
                        <li>Klik perintah Hapus pada tab Beranda.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_delete_command.png" alt="Mengklik perintah hapus">
                        </li>
                        <li>Baris yang dipilih akan dihapus, dan baris di sekitarnya akan bergeser. Dalam contoh kita, baris 10 telah berpindah ke atas, jadi sekarang menjadi baris 9.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_delete_done.png" alt="Baris yang digeser setelah dihapus">
                        </li>
                    </ol>
                </li>
        
                <li>Untuk memindahkan baris atau kolom:
                    <ol>
                        <li>Pilih judul kolom yang diinginkan untuk kolom yang ingin Anda pindahkan.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_move_select.png" alt="Memilih kolom yang akan dipindahkan">
                        </li>
                        <li>Klik perintah Potong pada tab Beranda, atau tekan Ctrl+X pada keyboard Anda.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_move_cut.png" alt="Memilih perintah Potong">
                        </li>
                        <li>Pilih judul kolom di sebelah kanan tempat Anda ingin memindahkan kolom. Misalnya, jika Anda ingin memindahkan kolom antara kolom E dan F, pilih kolom F.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_move_selectcol.png" alt="Memilih kolom yang berdekatan untuk menyisipkan sel yang dipotong">
                        </li>
                        <li>Klik perintah Sisipkan pada tab Beranda, lalu pilih Sisipkan Sel yang Dipotong dari menu tarik-turun.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_insert_command.png" alt="Memasukkan sel yang dipotong">
                        </li>
                        <li>Kolom akan dipindahkan ke lokasi yang dipilih, dan kolom di sekitarnya akan bergeser.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_move_done.png" alt="Kolom yang dipindahkan di lokasi barunya">
                        </li>
                    </ol>
                </li>
        
                <li>Untuk menyembunyikan dan memperlihatkan baris atau kolom:
                    <ol>
                        <li>Pilih kolom yang ingin Anda sembunyikan, klik kanan mouse, lalu pilih Sembunyikan dari menu pemformatan. Dalam contoh kita, kita akan menyembunyikan kolom C, D, dan E.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_hide_command.png" alt="Memilih perintah sembunyikan kolom">
                        </li>
                        <li>Kolom akan disembunyikan. Garis kolom berwarna hijau menunjukkan lokasi kolom tersembunyi.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_hide_hidden.png" alt="Kolom tersembunyi">
                        </li>
                        <li>Untuk memperlihatkan kolom, pilih kolom di kedua sisi kolom tersembunyi. Dalam contoh kita, kita akan memilih kolom B dan F. Kemudian klik kanan mouse dan pilih Unhide dari menu format.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_hide_unhide.png" alt="Memilih kolom yang berdekatan dengan kolom tersembunyi">
                        </li>
                        <li>Kolom tersembunyi akan muncul kembali.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_hide_unhidden.png" alt="Kolom yang tidak tersembunyi">
                        </li>
                    </ol>
                </li>
        
                <li>Membungkus teks dan menggabungkan sel:
                    <p>Kapan pun Anda memiliki terlalu banyak konten sel untuk ditampilkan dalam satu sel, Anda dapat memutuskan untuk membungkus teks atau menggabungkan sel daripada mengubah ukuran kolom. Membungkus teks akan secara otomatis mengubah tinggi baris sel, sehingga konten sel dapat ditampilkan dalam beberapa baris. Penggabungan memungkinkan Anda menggabungkan sel dengan sel kosong yang berdekatan untuk membuat satu sel besar.</p>
                </li>
        
                <li>Untuk membungkus teks dalam sel:
                    <ol>
                        <li>Pilih sel yang ingin Anda bungkus. Dalam contoh ini, kita akan memilih sel di kolom C.
                        </li>
                        <li>Klik perintah Bungkus Teks pada tab Beranda.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_wrap_command.png" alt="Mengklik perintah Bungkus Teks pada tab Beranda">
                        </li>
                        <li>Teks di sel yang dipilih akan dibungkus.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_wrap_done.png" alt="Teks dibungkus dalam kolom C">
                        </li>
                    </ol>
                </li>
        
                <li>Untuk menggabungkan sel menggunakan perintah Gabung & Pusatkan:
                    <ol>
                        <li>Pilih rentang sel yang ingin Anda gabungkan. Dalam contoh kita, kita akan memilih A1:F1.
                            <img src="path/to/select_cells_merge.png" alt="Memilih sel untuk digabungkan">
                        </li>
                        <li>Klik perintah Gabung & Pusatkan pada tab Beranda.Dalam contoh kita, kita akan memilih rentang sel A1:F1.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_merge_select.png" alt="Memilih perintah Gabung & Pusatkan">
                        </li>
                        <li>Sel yang dipilih akan digabungkan, dan teks akan dipusatkan.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_merge_don.png" alt="Sel yang baru digabungkan">
                        </li>
                    </ol>
                </li>
        
                <li>Untuk mengakses opsi penggabungan tambahan:
                    <ol>
                        <li>Klik panah drop-down di sebelah perintah Gabung & Pusatkan pada tab Beranda.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_merge_more.png" alt="Opsi penggabungan sel lainnya">
                        </li>
                        <li>Dari sini, Anda dapat memilih untuk:
                            <ul>
                                <li>Gabungkan & Pusatkan: Menggabungkan sel yang dipilih menjadi satu sel dan memusatkan teks.</li>
                                <li>Gabungkan Secara Horizontal: Menggabungkan sel yang dipilih menjadi sel yang lebih besar sambil menjaga setiap baris tetap terpisah.</li>
                                <li>Gabungkan Sel: Menggabungkan sel yang dipilih menjadi satu sel tetapi tidak memusatkan teks.</li>
                                <li>Pisahkan Sel: Memisahkan sel yang dipilih.</li>
                            </ul>
                        </li>
                    </ol>
                </li>
        
                <li>Berpusat pada Seleksi:
                    <p>Penggabungan dapat berguna untuk mengatur data Anda, namun juga dapat menimbulkan masalah di kemudian hari. Misalnya, mungkin sulit untuk memindahkan, menyalin, dan menempelkan konten dari sel yang digabungkan. Alternatif yang baik untuk menggabungkan adalah dengan Center Across Selection, yang menciptakan efek serupa tanpa benar-benar menggabungkan sel.</p>
                    <p>Tonton video di bawah ini untuk mempelajari mengapa Anda harus menggunakan Center Across Selection daripada menggabungkan sel.</p>
                    <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/8pRpG10X0UM?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"></iframe></div> 
                    </li>
        
                <li>Untuk menggunakan Pilihan Tengah Di Seluruh:
                    <ol>
                        <li>Pilih rentang sel yang diinginkan. Dalam contoh kita, kita akan memilih A1:F1. Catatan: Jika Anda sudah menggabungkan sel-sel ini, Anda harus memisahkannya sebelum melanjutkan ke langkah 2.
                        </li>
                        <li>Klik panah kecil di pojok kanan bawah grup Alignment pada tab Home.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_centeracross_arrow_call.png" alt="Mengklik panah pop-out Grup perataan">
                        </li>
                        <li>Sebuah kotak dialog akan muncul. Cari dan pilih menu drop-down Horizontal, pilih Center Across Selection, lalu klik OK.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_centeracross_dialog.png" alt="Memilih Pusat Di Seleksi">
                        </li>
                        <li>Kontennya akan dipusatkan pada rentang sel yang dipilih. Seperti yang Anda lihat, ini menciptakan hasil visual yang sama seperti penggabungan dan pemusatan, namun mempertahankan setiap sel dalam A1:F1.
                            <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/mod_centeracross_done.png" alt="Teks di tengah pilihan">
                        </li>
                    </ol>
                </li>
        
                <li>Tantangan!
                    <ol>
                        <li><a href="https://media.gcflearnfree.org/content/5c097c7e77c0500354728597_12_06_2018/excel_modifyingcells_practice.xlsx">Buka buku kerja latihan kami.</a></li>
                        <li>Lebar Kolom Paskan Otomatis untuk seluruh buku kerja.</li>
                        <li>Ubah tinggi baris untuk baris 3 menjadi 14 menjadi 22,5 (30 piksel).</li>
                        <li>Hapus baris 10.</li>
                        <li>Sisipkan kolom di sebelah kiri kolom C. Ketik SECONDARY CONTACT di sel C2.</li>
                        <li>Pastikan sel C2 masih dipilih dan pilih Bungkus Teks.</li>
                        <li>Gabungkan dan Pusatkan sel A1:F1.</li>
                        <li>Sembunyikan kolom Alamat Penagihan dan Telepon.</li>
                    </ol>
                    <p>Ketika Anda selesai, buku kerja Anda akan terlihat seperti ini:</p>
                    <img src="https://media.gcflearnfree.org/content/56422602ca7fad0d9cc8050c_11_10_2015/screen%20shot%202015-11-20%20at%202.44.54%20pm.png" alt="Buku kerja yang sudah selesai">
                </li>
            </ul>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Bekerja dengan Banyak Workbooks',
            'course_id' => '6',
            'desc' => ' <h1>Memperkenalkan</h1>
            <p>Setiap buku kerja berisi setidaknya satu lembar kerja secara default. Saat bekerja dengan banyak data, Anda dapat membuat beberapa lembar kerja untuk membantu mengatur buku kerja Anda dan memudahkan pencarian konten. Anda juga dapat mengelompokkan lembar kerja untuk menambahkan informasi ke beberapa lembar kerja secara bersamaan.</p>
            <p><em>Opsional: <a href="https://media.gcflearnfree.org/content/5c097cea77c050035472859e_12_06_2018/excel_multiplesheets_practice.xlsx" download>Unduh buku kerja latihan kami.</a></em></p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang menggunakan beberapa lembar kerja.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/qRShQc-v3LI?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Menyisipkan lembar kerja baru:</h2>
            <ol>
                <li>Temukan dan pilih tombol <strong>Lembar baru</strong> di dekat pojok kanan bawah jendela Excel.</li>
                <img src="https://media.gcflearnfree.org/content/56410d66ca7fad0d9cc8050a_11_09_2015/sheets_new.png" alt="Menambahkan lembar kerja baru">
                <li>Lembar kerja kosong baru akan muncul.</li>
                <img src="https://media.gcflearnfree.org/content/56410d66ca7fad0d9cc8050a_11_09_2015/sheets_new_done.png" alt="Lembar kerja baru, kosong yang ditambahkan ke buku kerja">
            </ol>
            <p>Secara default, setiap buku kerja baru yang Anda buat di Excel akan berisi satu lembar kerja, yang disebut Sheet1. Untuk mengubah jumlah lembar kerja default, buka tampilan <strong>Backstage</strong>, klik <strong>Options</strong>, lalu pilih jumlah lembar kerja yang diinginkan untuk disertakan dalam setiap buku kerja baru.</p>
        
            <h2>Menyalin lembar kerja:</h2>
            <ol>
                <li>Jika Anda perlu menggandakan konten dari satu lembar kerja ke lembar lainnya, Excel memungkinkan Anda untuk menyalin lembar kerja yang sudah ada.</li>
                <li>Klik kanan lembar kerja yang ingin Anda salin, lalu pilih <strong>Move or Copy</strong> dari menu lembar kerja.</li>
                <img src="https://media.gcflearnfree.org/content/56410d66ca7fad0d9cc8050a_11_09_2015/sheets_copy_rightclick.png" alt="Memilih perintah Move or Copy">
                <li>Kotak dialog <strong>Move or Copy</strong> akan muncul. Pilih di mana lembar tersebut akan muncul di bidang <strong>Before sheet:</strong>. Dalam contoh kami, kami akan memilih <strong>(move to end)</strong> untuk menempatkan lembar kerja di sebelah kanan lembar kerja yang sudah ada.</li>
                <li>Centang kotak di sebelah <strong>Create a copy</strong>, lalu klik <strong>OK</strong>.</li>
                <img src="https://media.gcflearnfree.org/content/56410d66ca7fad0d9cc8050a_11_09_2015/sheets_copy_dialog.png" alt="Memilih opsi copy worksheet dalam kotak dialog">
                <li>Lembar kerja akan disalin. Lembar kerja tersebut akan memiliki judul yang sama dengan lembar kerja asli, serta nomor versi. Dalam contoh kami, kami menyalin lembar kerja November, jadi lembar kerja baru kami bernama <strong>November (2)</strong>. Semua konten dari lembar kerja November juga telah disalin ke lembar kerja baru.</li>
                <img src="https://media.gcflearnfree.org/content/56410d66ca7fad0d9cc8050a_11_09_2015/sheets_copy_done.png" alt="Lembar kerja yang digandakan">
            </ol>
            <p>Anda juga dapat menyalin lembar kerja ke buku kerja yang sama sekali berbeda. Anda dapat memilih buku kerja yang sedang terbuka dari menu drop-down <strong>To book:</strong>.</p>
        
            <h2>Menamai ulang lembar kerja:</h2>
            <ol>
                <li>Klik kanan lembar kerja yang ingin Anda ganti namanya, lalu pilih <strong>Rename</strong> dari menu lembar kerja.</li>
                <img src="https://media.gcflearnfree.org/content/56410d66ca7fad0d9cc8050a_11_09_2015/sheets_rename_rightclick.png" alt="Memilih opsi Rename worksheet">
                <li>Ketik nama yang diinginkan untuk lembar kerja tersebut.</li>
                <li>Klik di mana saja di luar tab lembar kerja, atau tekan <strong>Enter</strong> pada keyboard Anda. Lembar kerja akan diganti namanya.</li>
                <img src="https://media.gcflearnfree.org/content/56410d66ca7fad0d9cc8050a_11_09_2015/sheets_rename_done.png" alt="Lembar kerja yang diganti namanya">
            </ol>
        
            <h2>Memindahkan lembar kerja:</h2>
            <ol>
                <li>Klik dan seret lembar kerja yang ingin Anda pindahkan hingga panah hitam kecil muncul di atas lokasi yang diinginkan.</li>
                <img src="https://media.gcflearnfree.org/content/56410d66ca7fad0d9cc8050a_11_09_2015/sheets_move_icon.png" alt="Memindahkan lembar kerja">
                <li>Lepaskan mouse. Lembar kerja akan dipindahkan.</li>
                <img src="https://media.gcflearnfree.org/content/56410d66ca7fad0d9cc8050a_11_09_2015/sheets_move_done.png" alt="Lembar kerja yang dipindahkan">
            </ol>
        
            <h2>Mengubah warna tab lembar kerja:</h2>
            <ol>
                <li>Klik kanan tab lembar kerja yang diinginkan, dan arahkan mouse ke atas <strong>Tab Color</strong>. Menu warna akan muncul.</li>
                <li>Pilih warna yang diinginkan.</li>
                <img src="https://media.gcflearnfree.org/content/56410d66ca7fad0d9cc8050a_11_09_2015/sheets_color_rightclick.png" alt="Memilih warna lembar kerja">
                <li>Warna tab lembar kerja akan diubah.</li>
                <img src="https://media.gcflearnfree.org/content/56410d66ca7fad0d9cc8050a_11_09_2015/sheets_color_done.png" alt="Warna tab lembar kerja yang diterapkan">
            </ol>
            <p>Warna tab lembar kerja jauh lebih kurang terlihat saat lembar kerja dipilih. Pilih lembar kerja lain untuk melihat bagaimana warna akan muncul saat lembar kerja tidak dipilih.</p>
        
            <h2>Menghapus lembar kerja:</h2>
            <ol>
                <li>Klik kanan lembar kerja yang ingin Anda hapus, lalu pilih <strong>Delete</strong> dari menu lembar kerja.</li>
                <img src="https://media.gcflearnfree.org/content/56410d66ca7fad0d9cc8050a_11_09_2015/sheets_delete_rightclick.png" alt="Menghapus lembar kerja kosong">
                <li>Lembar kerja akan dihapus dari buku kerja Anda.</li>
                <img src="https://media.gcflearnfree.org/content/56410d66ca7fad0d9cc8050a_11_09_2015/sheets_delete_done.png" alt="Buku kerja setelah menghapus lembar kerja kosong">
            </ol>
            <p>Jika Anda ingin mencegah lembar kerja tertentu untuk diedit atau dihapus, Anda dapat melindunginya dengan mengklik kanan lembar kerja yang diinginkan dan memilih <strong>Protect Sheet</strong> dari menu lembar kerja.</p>
        
            <h2>Beralih antara lembar kerja</h2>
            <p>Jika Anda ingin melihat lembar kerja yang berbeda, Anda cukup mengklik tab untuk beralih ke lembar kerja tersebut. Namun, dengan buku kerja yang lebih besar, ini terkadang bisa menjadi melelahkan, karena mungkin memerlukan pengguliran melalui semua tab untuk menemukan yang Anda inginkan. Sebagai gantinya, Anda cukup mengklik kanan panah gulir di pojok kiri bawah, seperti yang ditunjukkan di bawah ini.</p>
            <img src="https://media.gcflearnfree.org/content/5ac688981944ec1078757cd3_04_05_2018/jump_to_sheet_right_click.png" alt="Mengklik kanan panah gulir lembar kerja">
            <p>Kotak dialog akan muncul dengan daftar semua lembar dalam buku kerja Anda. Anda kemudian dapat mengklik dua kali lembar yang ingin Anda tuju.</p>
            <img src="https://media.gcflearnfree.org/content/5ac688981944ec1078757cd3_04_05_2018/jump_to_sheet_dialog_box.png" alt="Kotak dialog yang menunjukkan semua lembar dalam buku kerja">
        
            <h2>Mengelompokkan dan melepaskan lembar kerja</h2>
            <p>Anda dapat bekerja dengan setiap lembar kerja secara individu, atau Anda dapat bekerja dengan beberapa lembar kerja secara bersamaan. Beberapa lembar kerja dapat digabungkan menjadi satu grup. Setiap perubahan yang dilakukan pada satu lembar kerja dalam grup akan dilakukan pada setiap lembar kerja dalam grup tersebut.</p>
        
            <h3>Mengelompokkan lembar kerja:</h3>
            <ol>
                <li>Pilih lembar kerja pertama yang ingin Anda sertakan dalam grup lembar kerja.</li>
                <img src="https://media.gcflearnfree.org/content/56410d66ca7fad0d9cc8050a_11_09_2015/sheets_group_select.png" alt="Memilih lembar kerja pertama dalam grup">
                <li>Tekan dan tahan tombol <strong>Ctrl</strong> pada keyboard Anda. Pilih lembar kerja berikutnya yang Anda inginkan dalam grup.</li>
                <img src="https://media.gcflearnfree.org/content/56410d66ca7fad0d9cc8050a_11_09_2015/sheets_group_during.png" alt="Menambahkan lembar kerja ke grup">
                <li>Lanjutkan memilih lembar kerja hingga semua lembar kerja yang ingin Anda kelompokkan dipilih, lalu lepaskan tombol <strong>Ctrl</strong>. Lembar kerja sekarang dikelompokkan.</li>
                <img src="https://media.gcflearnfree.org/content/56410d66ca7fad0d9cc8050a_11_09_2015/sheets_group_done.png" alt="Lembar kerja yang dikelompokkan">
            </ol>
            <p>Saat lembar kerja dikelompokkan, Anda dapat menavigasi ke lembar kerja mana pun dalam grup. Setiap perubahan yang dilakukan pada satu lembar kerja akan muncul di setiap lembar kerja dalam grup. Namun, jika Anda memilih lembar kerja yang tidak ada dalam grup, semua lembar kerja Anda akan dilepaskan dari grup.</p>
        
            <h3>Melepaskan lembar kerja:</h3>
            <ol>
                <li>Klik kanan lembar kerja dalam grup, lalu pilih <strong>Ungroup Sheets</strong> dari menu lembar kerja.</li>
                <img src="https://media.gcflearnfree.org/content/56410d66ca7fad0d9cc8050a_11_09_2015/sheets_ungroup_rightclick.png" alt="Melepaskan lembar kerja">
                <li>Lembar kerja akan dilepaskan. Anda juga dapat mengklik lembar kerja mana pun yang tidak termasuk dalam grup untuk melepaskan semua lembar kerja.</li>
                <img src="https://media.gcflearnfree.org/content/56410d66ca7fad0d9cc8050a_11_09_2015/sheets_group_select.png" alt="Lembar kerja yang tidak dikelompokkan">
                </ol>
            
                <h2>Tantangan!</h2>
                <ol>
                    <li><a href="https://media.gcflearnfree.org/content/5c097cea77c050035472859e_12_06_2018/excel_multiplesheets_practice.xlsx">Buka buku kerja latihan kami.</li>
                    <li>Sisipkan lembar kerja baru, dan ganti namanya menjadi Ringkasan Kuartal 1.</li>
                    <li>Pindahkan lembar kerja Ringkasan Pengeluaran ke sebelah kanan, lalu pindahkan lembar kerja Ringkasan Kuartal 1 sehingga berada di antara Maret dan April.</li>
                    <li>Buat salinan lembar kerja Ringkasan Pengeluaran dengan mengklik kanan tabnya. Jangan hanya menyalin dan menempelkan konten lembar kerja ke lembar kerja baru.</li>
                    <li>Ubah warna tab Januari menjadi biru dan warna tab Februari menjadi merah.</li>
                    <li>Kelompokkan lembar kerja September, Oktober, dan November.</li>
                    <li>Saat selesai, buku kerja Anda harus terlihat seperti ini.</li>
                    <img src="https://media.gcflearnfree.org/content/56410d66ca7fad0d9cc8050a_11_09_2015/screen%20shot%202015-11-23%20at%204.20.04%20pm.png" alt="Lembar kerja yang tidak dikelompokkan">
                </ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Menggunakan Temukan & Ganti',
            'course_id' => '7',
            'desc' => '    <h1>Perkenalan</h1>
            <p>
                Saat bekerja dengan banyak data di Excel, mungkin sulit dan memakan waktu untuk menemukan informasi spesifik. Anda bisa dengan mudah mencari buku kerja Anda menggunakan fitur Temukan, yang juga memungkinkan Anda memodifikasi konten menggunakan fitur Ganti.
            </p>
            <p>
                <strong>Opsional:</strong> <a href="https://media.gcflearnfree.org/content/5c097d0f77c05003547285a0_12_06_2018/excel_findreplace_practice.xlsx">Unduh buku kerja latihan kami</a>.
            </p>
            <p>Tonton video di bawah untuk mempelajari lebih lanjut tentang menggunakan Temukan dan Ganti.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/hmizmgOjNYo?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Untuk menemukan konten sel:</h2>
            <ol>
                <li>Dari tab Beranda, klik perintah Temukan dan Pilih, lalu pilih Temukan dari menu tarik-turun.
                    <br><img src="https://media.gcflearnfree.org/content/563d118dca7fac0d9c7b3f7f_11_06_2015/2015-11-06_15-57-37.png" alt="Memilih fitur Temukan">
                </li>
                <li>Kotak dialog Temukan dan Ganti akan muncul. Masukkan konten yang ingin Anda temukan. Dalam contoh kita, kita akan mengetikkan nama departemen.
                </li>
                <li>Klik Temukan Berikutnya. Jika konten ditemukan, sel yang berisi konten tersebut akan dipilih.
                    <br><img src="https://media.gcflearnfree.org/content/563d118dca7fac0d9c7b3f7f_11_06_2015/2015-11-09_09-11-08.png" alt="Mengklik Temukan Berikutnya untuk menemukan konten">
                </li>
                <li>Klik Temukan Berikutnya untuk menemukan lebih banyak contoh atau Temukan Semua untuk melihat setiap contoh istilah pencarian.
                    <br><img src="https://media.gcflearnfree.org/content/563d118dca7fac0d9c7b3f7f_11_06_2015/2015-11-09_09-11-58.png" alt="Memilih Temukan Semua untuk menemukan setiap contoh istilah pencarian">
                </li>
                <li>Setelah selesai, klik Tutup untuk keluar dari kotak dialog Temukan dan Ganti.
                    <br><img src="https://media.gcflearnfree.org/content/563d118dca7fac0d9c7b3f7f_11_06_2015/2015-11-09_09-12-40.png" alt="Mengklik tutup untuk keluar dari kotak dialog">
                </li>
                <li>Anda juga dapat mengakses perintah Temukan dengan menekan Ctrl+F pada keyboard Anda.</li>
                <li>Klik Opsi untuk melihat kriteria pencarian lanjutan di kotak dialog Temukan dan Ganti.
                    <br><img src="https://media.gcflearnfree.org/content/563d118dca7fac0d9c7b3f7f_11_06_2015/2015-11-09_09-13-11.png" alt="Mengklik opsi untuk melihat kriteria pencarian lanjutan">
                </li>
            </ol>
            
            <h2>Untuk mengganti konten sel:</h2>
            <ol>
                <li>Dari tab Beranda, klik perintah Temukan & Pilih, lalu pilih Ganti... dari menu tarik-turun.
                    <br><img src="https://media.gcflearnfree.org/content/563d118dca7fac0d9c7b3f7f_11_06_2015/2015-11-09_09-57-40.png" alt="Memilih Ganti dari menu tarik-turun">
                </li>
                <li>Kotak dialog Temukan dan Ganti akan muncul. Ketikkan teks yang ingin Anda temukan di bidang Temukan apa:.
                </li>
                <li>Ketikkan teks yang ingin Anda ganti di kolom Ganti dengan:, lalu klik Temukan Berikutnya.
                    <br><img src="https://media.gcflearnfree.org/content/563d118dca7fac0d9c7b3f7f_11_06_2015/2015-11-09_10-00-11.png" alt="Mengklik temukan berikutnya">
                </li>
                <li>Jika konten ditemukan, sel yang berisi konten ini akan dipilih. Tinjau teks untuk memastikan Anda ingin menggantinya.
                </li>
                <li>Jika ingin menggantinya, pilih salah satu opsi ganti. Memilih Ganti akan menggantikan masing-masing instance, sedangkan Ganti Semua akan mengganti setiap teks di seluruh buku kerja. Dalam contoh kita, kita akan memilih opsi ini untuk menghemat waktu.
                    <br><img src="https://media.gcflearnfree.org/content/563d118dca7fac0d9c7b3f7f_11_06_2015/2015-11-09_10-18-35.png" alt="Mengklik ganti semua">
                </li>
                <li>Kotak dialog akan muncul, mengkonfirmasikan jumlah penggantian yang dilakukan. Klik OK untuk melanjutkan.
                    <br><img src="https://media.gcflearnfree.org/content/563d118dca7fac0d9c7b3f7f_11_06_2015/2015-11-09_10-01-21.png" alt="Mengklik oke">
                </li>
                <li>Konten sel yang dipilih akan diganti.
                    <br><img src="https://media.gcflearnfree.org/content/563d118dca7fac0d9c7b3f7f_11_06_2015/2015-11-09_10-24-15.png" alt="Konten yang dipilih telah diganti">
                </li>
                <li>Setelah selesai, klik Tutup untuk keluar dari kotak dialog Temukan dan Ganti.
                    <br><img src="https://media.gcflearnfree.org/content/563d118dca7fac0d9c7b3f7f_11_06_2015/2015-11-09_10-12-13.png" alt="Mengklik tutup untuk keluar dari kotak dialog">
                </li>
                <li>Sebagai aturan umum, sebaiknya hindari penggunaan Ganti Semua karena ini tidak memberi Anda pilihan untuk melewatkan apa pun yang tidak ingin Anda ubah. Anda sebaiknya hanya menggunakan opsi ini jika Anda benar-benar yakin opsi ini tidak akan menggantikan apa pun yang tidak Anda inginkan.</li>
            </ol>
        
            <h2>Tantangan!</h2>
            <ol>
                <li>Buka <a href="https://media.gcflearnfree.org/content/5c097d0f77c05003547285a0_12_06_2018/excel_findreplace_practice.xlsx">buku kerja latihan kami</a>.</li>
                <li>Klik tab Tantangan di kiri bawah buku kerja.</li>
                <li>Crystal Lewis menikah dan mengubah nama belakangnya menjadi Taylor. Gunakan Temukan dan Ganti untuk mengubah nama belakang Crystal dari Lewis menjadi Taylor. Berhati-hatilah untuk hanya mengubah nama belakang Crystal!</li>
                <li>Temukan dan ganti Bio dengan Biologi. Hati-hati jangan sampai pindah jurusan Teknik Biomedis!</li>
                <li>Gunakan Temukan dan Ganti Semua untuk menggantikan jurusan Fisika ke Ilmu Fisika.</li>
                <li>Setelah selesai, lembar kerja Anda akan terlihat seperti ini:
                    <br><img src="https://media.gcflearnfree.org/content/563d118dca7fac0d9c7b3f7f_11_06_2015/screen%20shot%202015-11-24%20at%203.24.37%20pm.png" alt="Lembar kerja setelah tantangan selesai">
                </li>
            </ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Layouting dan Pencetakan Halaman',
            'course_id' => '8',
            'desc' => '  <h1>Perkenalan</h1>
            <p>
                Mungkin ada saatnya Anda ingin mencetak buku kerja untuk menampilkan dan berbagi data secara offline. Setelah Anda memilih pengaturan tata letak halaman, mudah untuk melihat pratinjau dan mencetak buku kerja dari Excel menggunakan panel Cetak.
            </p>
            <p>
                <strong>Opsional:</strong> <a href="https://media.gcflearnfree.org/content/5c0981f377c05003547285a5_12_06_2018/excel_pagelayoutprint_practice.xlsx">Unduh buku kerja latihan kami</a>.
            </p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang tata letak halaman dan pencetakan.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/8XcFTeCu98k?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Untuk mengakses panel Cetak:</h2>
            <ol>
                <li>Pilih tab File. Tampilan belakang panggung akan muncul.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_pane_file_tab.png" alt="Tab File di Ribbon">
                </li>
                <li>Pilih Cetak. Panel Cetak akan muncul.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_pane_backstage.png" alt="Memilih Cetak pada tampilan belakang panggung">
                </li>
                <li>Klik tombol interaktif di bawah ini untuk mempelajari lebih lanjut tentang penggunaan panel Cetak.</li>
                <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_pane_print_pane.png" alt="Memilih Cetak pada tampilan belakang panggung">
            </ol>
            
            <h2>Untuk mencetak buku kerja:</h2>
            <ol>
                <li>Arahkan ke panel Print, lalu pilih printer yang diinginkan.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_to_print_1.png" alt="Pilih printer yang diinginkan">
                </li>
                <li>Masukkan jumlah salinan yang ingin Anda cetak.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_to_print_2.png" alt="Jumlah salinan">
                </li>
                <li>Pilih pengaturan tambahan apa pun jika diperlukan (lihat interaktif di atas).
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_to_print_3.png" alt="Pengaturan pencetakan tambahan">
                </li>
                <li>Klik Cetak.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_to_print_4.png" alt="Klik tombol Cetak">
                </li>
            </ol>
        
            <h2>Memilih area pencetakan</h2>
            <p>Sebelum Anda mencetak buku kerja Excel, penting untuk memutuskan dengan tepat informasi apa yang ingin Anda cetak. Misalnya, jika Anda memiliki beberapa lembar kerja di buku kerja Anda, Anda harus memutuskan apakah Anda ingin mencetak seluruh buku kerja atau hanya lembar kerja yang aktif saja. Mungkin juga ada saatnya Anda hanya ingin mencetak konten pilihan dari buku kerja Anda.</p>
        
            <h2>Untuk mencetak lembar aktif:</h2>
            <ol>
                <li>Lembar kerja dianggap aktif bila dipilih.</li>
                <li>Pilih lembar kerja yang ingin Anda cetak. Untuk mencetak beberapa lembar kerja, klik lembar kerja pertama, tahan tombol Ctrl pada keyboard Anda, lalu klik lembar kerja lain yang ingin Anda pilih.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_print_active_select.png" alt="Memilih beberapa lembar kerja">
                </li>
                <li>Arahkan ke panel Cetak.</li>
                <li>Pilih Cetak Lembar Aktif dari menu tarik-turun Jangkauan Cetak.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_print_active_settings.png" alt="Atur Rentang Cetak untuk Mencetak Lembar Aktif">
                </li>
                <li>Klik tombol Cetak.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_click_print.png" alt="Klik tombol Cetak">
                </li>
            </ol>
        
            <h2>Untuk mencetak seluruh buku kerja:</h2>
            <ol>
                <li>Arahkan ke panel Cetak.</li>
                <li>Pilih Cetak Seluruh Buku Kerja dari menu tarik-turun Rentang Cetak.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_print_entire_workbook.png" alt="Memilih Cetak Seluruh Buku Kerja">
                </li>
                <li>Klik tombol Cetak.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_click_print.png" alt="Klik tombol Cetak">
                </li>
            </ol>
        
            <h2>Untuk mencetak pilihan:</h2>
            <ol>
                <li>Dalam contoh kita, kita akan mencetak catatan untuk 40 tenaga penjualan teratas di lembar kerja Pusat.</li>
                <li>Pilih sel yang ingin Anda cetak.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_print_selection_select.png" alt="Pilih bagian lembar kerja yang akan dicetak">
                </li>
                <li>Arahkan ke panel Cetak.</li>
                <li>Pilih Pilihan Cetak dari menu drop-down Rentang Cetak.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_print_selection_settings.png" alt="Atur Rentang Cetak ke Pilihan Cetak">
                </li>
                <li>Pratinjau pilihan Anda akan muncul di panel Pratinjau.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_print_selection_preview.png" alt="Pratinjau cetak">
                </li>
                <li>Klik tombol Cetak untuk mencetak pilihan.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_click_print.png" alt="Klik tombol Cetak">
                </li>
            </ol>
        
            <h2>Menyesuaikan konten</h2>
            <p>Terkadang, Anda mungkin perlu melakukan sedikit penyesuaian dari panel Cetak agar konten buku kerja Anda pas dengan halaman yang dicetak. Panel Cetak menyertakan beberapa alat untuk membantu menyesuaikan dan menskalakan konten Anda, termasuk penskalaan dan margin halaman.</p>
        
            <h2>Untuk mengubah orientasi halaman:</h2>
            <p>Excel menawarkan dua opsi orientasi halaman: lanskap dan potret. Lansekap mengorientasikan halaman secara horizontal, sedangkan potret mengorientasikan halaman secara vertikal. Dalam contoh kita, kita akan mengatur orientasi halaman ke lanskap.</p>
            <ol>
                <li>Arahkan ke panel Cetak.</li>
                <li>Pilih orientasi yang diinginkan dari menu drop-down Orientasi Halaman. Dalam contoh kita, kita akan memilih Landscape Orientation.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_orientation_menu2.png" alt="Menu Orientasi Halaman pada panel Cetak">
                </li>
                <li>Orientasi halaman baru akan ditampilkan di panel Pratinjau.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_orientation_preview.png" alt="Panel Pratinjau memperlihatkan dokumen dalam orientasi Lanskap">
                </li>
            </ol>
        
            <h2>Untuk menyesuaikan konten sebelum dicetak:</h2>
            <p>Jika beberapa konten Anda terpotong oleh printer, Anda bisa menggunakan penskalaan untuk menyesuaikan buku kerja Anda ke halaman secara otomatis.</p>
            <ol>
                <li>Arahkan ke panel Cetak. Dalam contoh kita, kita dapat melihat di panel Pratinjau bahwa konten kita akan terpotong saat dicetak.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_orientation_preview.png" alt="Sebagian konten terpotong di Pratinjau">
                </li>
                <li>Pilih opsi yang diinginkan dari menu tarik-turun Penskalaan. Dalam contoh kita, kita akan memilih Fit All Columns on One Page.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_fit_menu.png" alt="Menu tarik-turun Penskalaan pada panel Cetak">
                </li>
                <li>Lembar kerja akan diringkas agar muat dalam satu halaman. Opsi penskalaan baru akan ditampilkan di panel Pratinjau.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_fit_preview.png" alt="Opsi penskalaan baru akan ditampilkan di panel Pratinjau">
                </li>
            </ol>
            <p>Ingatlah bahwa lembar kerja akan menjadi lebih sulit dibaca saat diperkecil, jadi Anda mungkin tidak ingin menggunakan opsi ini saat mencetak lembar kerja yang berisi banyak informasi. Dalam contoh kita, kita akan mengubah pengaturan penskalaan kembali ke No Scaling.</p>
        
            <h2>Untuk memasukkan Judul Cetak:</h2>
            <p>Jika lembar kerja Anda menggunakan judul judul, penting untuk menyertakan judul ini di setiap halaman lembar kerja yang Anda cetak. Akan sulit membaca buku kerja yang dicetak jika judulnya hanya muncul di halaman pertama. Perintah Cetak Judul memungkinkan Anda memilih baris dan kolom tertentu untuk muncul di setiap halaman.</p>
            <ol>
                <li>Klik tab Page Layout pada Ribbon, lalu pilih perintah Print Titles.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_print_titles_ribbon.png" alt="Perintah Cetak Judul pada tab Tata Letak Halaman">
                </li>
                <li>Kotak dialog Pengaturan Halaman akan muncul. Dari sini, Anda dapat memilih baris atau kolom untuk diulang di setiap halaman. Dalam contoh kita, kita akan mengulangi satu baris terlebih dahulu.
                </li>
                <li>Klik tombol Ciutkan Dialog di sebelah bidang Baris yang akan diulang di atas:.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_print_titles_setup_rows_callout.png" alt="Klik tombol Ciutkan Dialog">
                </li>
                <li>Kursor akan menjadi panah pilihan kecil, dan kotak dialog Page Setup akan diciutkan. Pilih baris yang ingin Anda ulangi di bagian atas setiap halaman yang dicetak. Dalam contoh kita, kita akan memilih baris 1.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_print_titles_setup_rows_select.png" alt="Memilih baris A untuk diulang">
                </li>
                <li>Baris 1 akan ditambahkan ke bidang Baris untuk diulang di atas:. Klik lagi tombol Ciutkan Dialog.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_print_titles_setup_rows_return.png" alt="Klik tombol ciutkan untuk kembali ke dialog Pengaturan Halaman">
                </li>
                <li>Kotak dialog Page Setup akan diperluas. Untuk mengulang kolom juga, gunakan proses yang sama seperti yang ditunjukkan pada langkah 4 dan 5. Dalam contoh kita, kita telah memilih untuk mengulang baris 1 dan kolom A.
                </li>
                <li>Jika Anda puas dengan pilihan Anda, klik OK.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_print_titles_setup_ok.png" alt="Klik Oke">
                </li>
                <li>Dalam contoh kita, baris 1 muncul di bagian atas setiap halaman, dan kolom A muncul di sebelah kiri setiap halaman.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_print_titles_preview.png" alt="Baris 1 dan kolom A ditampilkan pada setiap halaman dalam pratinjau cetak">
                </li>
            </ol>
        
            <h2>Untuk menyesuaikan hentian halaman:</h2>
            <ol>
                <li>Klik perintah Pratinjau Page Break untuk mengubah ke tampilan Page Break.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_break_view.png" alt="Pratinjau Istirahat Halaman di kanan bawah jendela">
                </li>
                <li>Garis putus-putus biru vertikal dan horizontal menunjukkan hentian halaman. Klik dan seret salah satu garis ini untuk menyesuaikan hentian halaman.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_break_drag1.png" alt="Tampilan hentian halaman">
                </li>
                <li>Dalam contoh kita, kita telah menetapkan batas halaman horizontal antara baris 21 dan 22.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_break_drag2.png" alt="Klik dan seret hentian halaman">
                </li>
                <li>Dalam contoh kita, semua halaman sekarang menampilkan jumlah baris yang sama karena perubahan pada hentian halaman.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_break_preview.png" alt="Istirahat halaman baru ditampilkan di Pratinjau Cetak">
                </li>
            </ol>
        
            <h2>Untuk mengubah margin di panel Pratinjau:</h2>
            <p>Margin adalah jarak antara konten Anda dan tepi halaman. Terkadang Anda mungkin perlu menyesuaikan margin agar data Anda lebih pas. Anda dapat mengubah margin halaman dari panel Cetak.</p>
            <ol>
                <li>Arahkan ke panel Cetak.</li>
                <li>Pilih ukuran margin yang diinginkan dari menu tarik-turun Margin Halaman. Dalam contoh kita, kita akan memilih Narrow.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_margins_menu.png" alt="Menu Margin Halaman pada panel Cetak">
                </li>
                <li>Margin halaman baru akan ditampilkan di panel Pratinjau.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_margins_preview.png" alt="Margin baru ditampilkan di panel Pratinjau">
                </li>
                <li>Anda dapat menyesuaikan margin secara manual dengan mengklik tombol Show Margins di sudut kanan bawah, lalu menyeret penanda margin di panel Pratinjau.
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/layout_margins_show.png" alt="Tombol tampilan Tampilkan Margin">
                </li>
            </ol>
        
            <h2>Tantangan!</h2>
            <ol>
                <li>Buka <a href="https://media.gcflearnfree.org/content/5c0981f377c05003547285a5_12_06_2018/excel_pagelayoutprint_practice.xlsx">buku kerja latihan kami</a>.</li>
                <li>Klik tab Pantai Timur di bagian bawah buku kerja.</li>
                <li>Pada tab Page Layout, gunakan fitur Print Titles untuk mengulang baris 1 di atas dan kolom A di kiri.</li>
                <li>Dengan menggunakan perintah Pratinjau Page Break, pindahkan jeda antara baris 47 dan 48 ke atas sehingga berada di antara baris 40 dan 41.</li>
                <li>Dalam tampilan Backstage, buka panel Print.</li>
                <li>Di panel Cetak, ubah orientasi menjadi Lanskap.</li>
                <li>Ubah margin menjadi Sempit.</li>
                <li>Ubah penskalaan untuk Menyesuaikan Semua Kolom dalam Satu Halaman.</li>
                <li>Setelah selesai, pratinjau cetak Anda akan terlihat seperti ini:
                    <br><img src="https://media.gcflearnfree.org/content/562e37c19c7faf1314ffe064_10_26_2015/printing%20and%20page%20layout%20challenge.png" alt="Pratinjau akhir tantangan">
                </li>
            </ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Pengantar Rumus',
            'course_id' => '9',
            'desc' => '    <h1>Perkenalan</h1>
            <p>
                Salah satu fitur paling canggih di Excel adalah kemampuan menghitung informasi numerik menggunakan rumus. Sama seperti kalkulator, Excel dapat melakukan penjumlahan, pengurangan, perkalian, dan pembagian. Dalam pelajaran ini, kami akan menunjukkan cara menggunakan referensi sel untuk membuat rumus sederhana.
            </p>
            <p>
                <strong>Opsional:</strong> <a href="https://media.gcflearnfree.org/content/5c09823d77c05003547285a7_12_06_2018/excel_introformulas_practice.xlsx">Unduh buku kerja latihan kami</a>.
            </p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang membuat rumus di Excel.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/xc14gFFyiTw?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Operator Matematika</h2>
            <p>
                Excel menggunakan operator standar untuk rumusnya: tanda plus untuk penjumlahan ( + ), tanda minus untuk pengurangan ( - ), tanda bintang untuk perkalian ( * ), garis miring untuk pembagian ( / ), dan tanda sisipan ( ^ ) untuk eksponen.
            </p>
            <img src="https://media.gcflearnfree.org/content/562933849c7fae1314796231_10_22_2015/simpform_graphic_operators4.png" alt="Rumus di Excel menggunakan referensi sel">
            <p>
                Semua rumus di Excel harus diawali dengan tanda sama dengan ( = ). Hal ini karena sel berisi, atau sama dengan, rumus dan nilai yang dihitungnya.
            </p>
        
            <h2>Memahami Referensi Sel</h2>
            <p>
                Meskipun Anda bisa membuat rumus sederhana di Excel menggunakan angka (misalnya, =2+2 atau =5*5 ), sering kali Anda akan menggunakan alamat sel untuk membuat rumus. Hal ini dikenal dengan membuat referensi sel. Menggunakan referensi sel akan memastikan rumus Anda selalu akurat karena Anda bisa mengubah nilai sel yang direferensikan tanpa harus menulis ulang rumus.
            </p>
            <p>
                Pada rumus di bawah ini, sel A3 menambahkan nilai sel A1 dan A2 dengan membuat referensi sel:
            </p>
            <img src="https://media.gcflearnfree.org/content/562933849c7fae1314796231_10_22_2015/formulas_understanding_1.png" alt="Rumus di Excel menggunakan referensi sel">
            <p>
                Saat Anda menekan Enter, rumus menghitung dan menampilkan jawabannya di sel A3:
            </p>
            <img src="https://media.gcflearnfree.org/content/562933849c7fae1314796231_10_22_2015/formulas_understanding_2.png" alt="Rumusnya secara otomatis menghitung hasilnya">
            <p>
                Jika nilai dalam sel yang direferensikan berubah, rumus akan menghitung ulang secara otomatis:
            </p>
            <img src="https://media.gcflearnfree.org/content/562933849c7fae1314796231_10_22_2015/formulas_understanding_3.png" alt="Rumusnya otomatis diperbarui jika salah satu sel yang direferensikan berubah">
            <p>
                Dengan menggabungkan operator matematika dengan referensi sel, Anda bisa membuat berbagai rumus sederhana di Excel. Rumus juga dapat menyertakan kombinasi referensi sel dan angka, seperti pada contoh di bawah ini:
            </p>
            <img src="https://media.gcflearnfree.org/ctassets/topics/198/simpform_graphic_formulas5.png" alt="Ilustrasi rumus sederhana">
        
            <h2>Untuk Membuat Rumus:</h2>
            <p>Dalam contoh di bawah ini, kami akan menggunakan rumus sederhana dan referensi sel untuk menghitung anggaran.</p>
            <ol>
                <li>Pilih sel yang akan berisi rumus. Dalam contoh kita, kita akan memilih sel D12.
                    <br><img src="https://media.gcflearnfree.org/content/562933849c7fae1314796231_10_22_2015/formulas_create_select.png" alt="Memilih sel">
                </li>
                <li>Ketikkan tanda sama dengan (=). Perhatikan tampilannya di sel dan bilah rumus.
                    <br><img src="https://media.gcflearnfree.org/content/562933849c7fae1314796231_10_22_2015/formulas_create_equals_sign.png" alt="Memulai rumus dengan tanda sama dengan">
                </li>
                <li>Ketikkan alamat sel dari sel yang ingin Anda referensikan terlebih dahulu pada rumus: sel D10 pada contoh kita. Batas biru akan muncul di sekitar sel yang direferensikan.
                    <br><img src="https://media.gcflearnfree.org/content/562933849c7fae1314796231_10_22_2015/formulas_create_cell_reference.png" alt="Memasukkan referensi sel untuk D10">
                </li>
                <li>Ketikkan operator matematika yang ingin Anda gunakan. Dalam contoh kita, kita akan mengetikkan tanda penjumlahan ( + ).
                </li>
                <li>Ketikkan alamat sel dari sel yang ingin Anda jadikan referensi kedua dalam rumus: sel D11 pada contoh kita. Batas merah akan muncul di sekitar sel yang direferensikan.
                    <br><img src="https://media.gcflearnfree.org/content/562933849c7fae1314796231_10_22_2015/formulas_create_operator.png" alt="Memasukkan referensi untuk sel D11">
                </li>
                <li>Tekan Enter pada keyboard Anda. Rumusnya akan dihitung, dan nilainya akan ditampilkan di sel. Jika Anda memilih sel itu lagi, perhatikan bahwa sel tersebut menampilkan hasilnya, sedangkan bilah rumus menampilkan rumusnya.
                    <br><img src="https://media.gcflearnfree.org/content/562933849c7fae1314796231_10_22_2015/formulas_create_result.png" alt="Tekan enter untuk melengkapi rumus dan menampilkan hasilnya">
                </li>
            </ol>
            <p>
                Jika hasil rumus terlalu besar untuk ditampilkan dalam sel, hasil tersebut mungkin muncul sebagai tanda pagar (#######) dan bukan nilai. Artinya kolomnya tidak cukup lebar untuk menampilkan konten sel. Cukup tambah lebar kolom untuk menampilkan konten sel.
            </p>
        
            <h2>Memodifikasi Nilai dengan Referensi Sel</h2>
            <p>
                Keuntungan sebenarnya dari referensi sel adalah memungkinkan Anda memperbarui data di lembar kerja tanpa harus menulis ulang rumus. Pada contoh di bawah, kami telah mengubah nilai sel D10 dari $1.200 menjadi $1.800. Rumus di D12 akan otomatis menghitung ulang dan menampilkan nilai baru di sel D12.
            </p>
            <img src="https://media.gcflearnfree.org/content/562933849c7fae1314796231_10_22_2015/formulas_modifying.png" alt="Rumusnya secara otomatis menghitung ulang jika sel yang direferensikan diubah">
        
            <h2>Memeriksa Rumus Anda</h2>
            <p>
                Excel tidak selalu memberi tahu Anda jika rumus Anda mengandung kesalahan, jadi terserah Anda untuk memeriksa semua rumus Anda. Untuk mempelajari cara melakukan ini, Anda dapat membaca pelajaran Periksa Kembali Rumus Anda dari tutorial Rumus Excel kami.
            </p>
        
            <h2>Untuk Membuat Rumus Menggunakan Metode Tunjuk dan Klik:</h2>
            <p>
                Daripada mengetikkan alamat sel secara manual, Anda bisa mengarahkan dan mengklik sel yang ingin Anda sertakan dalam rumus Anda. Cara ini dapat menghemat banyak waktu dan tenaga saat membuat rumus. Pada contoh di bawah ini, kami akan membuat rumus untuk menghitung biaya pemesanan beberapa kotak peralatan makan plastik.
            </p>
            <ol>
                <li>Pilih sel yang akan berisi rumus. Dalam contoh kita, kita akan memilih sel D4.
                    <br><img src="https://media.gcflearnfree.org/content/562933849c7fae1314796231_10_22_2015/formulas_pnc_select.png" alt="Memilih sel">
                </li>
                <li>Ketikkan tanda sama dengan (=).
                </li>
                <li>Pilih sel yang ingin Anda referensikan terlebih dahulu dalam rumus: sel B4 dalam contoh kita. Alamat sel akan muncul di rumus.
                    <br><img src="https://media.gcflearnfree.org/content/562933849c7fae1314796231_10_22_2015/formulas_pnc_click_1.png" alt="Memilih sel pertama yang dijadikan referensi dalam rumus">
                </li>
                <li>Ketikkan operator matematika yang ingin Anda gunakan. Dalam contoh kita, kita akan mengetikkan tanda perkalian (*).\
                </li>
                <li>Pilih sel yang ingin Anda referensikan kedua dalam rumus: sel C4 dalam contoh kita. Alamat sel akan muncul di rumus.
                    <br><img src="https://media.gcflearnfree.org/content/562933849c7fae1314796231_10_22_2015/formulas_pnc_click_2.png" alt="Memilih sel kedua untuk referensi dalam rumus">
                </li>
                <li>Tekan Enter pada keyboard Anda. Rumusnya akan dihitung, dan nilainya akan ditampilkan di sel.
                    <br><img src="https://media.gcflearnfree.org/content/562933849c7fae1314796231_10_22_2015/formulas_pnc_result.png" alt="Tekan enter untuk melengkapi rumus dan menampilkan hasilnya">
                </li>
            </ol>
        
            <h2>Menyalin Rumus dengan Gagang Isian</h2>
            <p>
                Rumus juga bisa disalin ke sel yang berdekatan dengan gagang isian, yang bisa menghemat banyak waktu dan tenaga jika Anda perlu melakukan penghitungan yang sama beberapa kali di lembar kerja. Pengendali isian adalah kotak kecil di pojok kanan bawah sel yang dipilih.
            </p>
            <ol>
                <li>Pilih sel yang berisi rumus yang ingin Anda salin. Klik dan seret gagang isian ke sel yang ingin Anda isi.
                    <br><img src="drag-fill-handle.pnghttps://media.gcflearnfree.org/content/562933849c7fae1314796231_10_22_2015/formulas_fill_select2.png" alt="Seret gagang isian">
                </li>
                <li>Setelah Anda melepaskan mouse, rumus akan disalin ke sel yang dipilih.
                    <br><img src="https://media.gcflearnfree.org/content/562933849c7fae1314796231_10_22_2015/formulas_fill_result.png" alt="Rumusnya disalin ke sel yang dipilih">
                </li>
            </ol>
        
            <h2>Untuk Mengedit Rumus:</h2>
            <p>
                Terkadang Anda mungkin ingin mengubah rumus yang sudah ada. Pada contoh di bawah, kita memasukkan alamat sel yang salah dalam rumus kita, jadi kita harus memperbaikinya.
            </p>
            <ol>
                <li>Pilih sel yang berisi rumus yang ingin Anda edit. Dalam contoh kita, kita akan memilih sel D12.
                    <br><img src="https://media.gcflearnfree.org/content/562933849c7fae1314796231_10_22_2015/formulas_edit_select.png" alt="Memilih sel">
                </li>
                <li>Klik bilah rumus untuk mengedit rumus. Anda juga bisa mengklik dua kali sel untuk melihat dan mengedit rumus langsung di dalam sel.
                    <br><img src="https://media.gcflearnfree.org/content/562933849c7fae1314796231_10_22_2015/formulas_edit_click.png" alt="Mengklik bilah rumus untuk mengedit rumus">
                </li>
                <li>Perbatasan akan muncul di sekitar sel yang direferensikan. Dalam contoh kita, kita akan mengubah bagian pertama rumus menjadi sel referensi D10, bukan sel D9.
                    <br><img src="https://media.gcflearnfree.org/content/562933849c7fae1314796231_10_22_2015/formulas_edit_edit.png" alt="Mengedit rumus">
                </li>
                <li>Setelah selesai, tekan Enter pada keyboard Anda atau pilih perintah Enter di bilah rumus.
                    <br><img src="https://media.gcflearnfree.org/content/562933849c7fae1314796231_10_22_2015/formulas_edit_enter.png" alt="Tekan enter untuk menyelesaikan pengeditan">
                </li>
                <li>Rumusnya akan diperbarui, dan nilai baru akan ditampilkan di sel.
                    <br><img src="https://media.gcflearnfree.org/content/562933849c7fae1314796231_10_22_2015/formulas_edit_result.png" alt="Rumus baru menampilkan hasilnya">
                </li>
            </ol>
            <p>
                Jika Anda berubah pikiran, Anda dapat menekan tombol Esc pada keyboard Anda atau mengklik perintah Batal di bilah rumus untuk menghindari perubahan pada rumus Anda secara tidak sengaja.
            </p>
            <img src="https://media.gcflearnfree.org/content/562933849c7fae1314796231_10_22_2015/formulas_edit_cancel.png" alt="Membatalkan pengeditan pada rumus">
            <p>
                Untuk menampilkan semua rumus dalam spreadsheet, Anda dapat menahan tombol Ctrl dan tekan ` (aksen berat). Tombol aksen berat biasanya terletak di pojok kiri atas keyboard. Anda dapat menekan Ctrl+` lagi untuk beralih kembali ke tampilan normal.
            </p>
        
            <h2>Tantangan!</h2>
            <ol>
                <li><a href="https://media.gcflearnfree.org/content/5c09823d77c05003547285a7_12_06_2018/excel_introformulas_practice.xlsx">Buka buku kerja latihan kami</a>.</li>
                <li>Klik tab Tantangan di kiri bawah buku kerja.</li>
                <li>Buat rumus di sel D4 yang mengalikan kuantitas di B4 dengan harga per unit di sel C4.</li>
                <li>Gunakan gagang isian untuk menyalin rumus di sel D4 ke sel D5:D7.</li>
                <li>Ubah harga per unit pisang raja goreng di sel C6 menjadi $2,25. Perhatikan bahwa total baris otomatis berubah juga.</li>
                <li>Edit rumus total di sel D8 agar juga menambah sel D7.</li>
                <li>Ketika Anda selesai, buku kerja Anda akan terlihat seperti ini:
                    <br><img src="https://media.gcflearnfree.org/content/562933849c7fae1314796231_10_22_2015/screen%20shot%202015-11-24%20at%203.27.57%20pm.png" alt="Buku kerja tantangan akhir">
                </li>
            </ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Menggunakan Rumus yang Lebih Kompleks',
            'course_id' => '10',
            'desc' => '<h1>Pengenalan</h1>
            <p>
                Anda mungkin sudah memiliki pengalaman bekerja dengan rumus yang hanya mengandung satu operator, seperti 7+9. Rumus yang lebih kompleks dapat mengandung beberapa operator matematika, seperti 5+2*8. Ketika ada lebih dari satu operasi dalam rumus, urutan operasi memberi tahu Excel operasi mana yang harus dihitung terlebih dahulu. Untuk menulis rumus yang akan memberikan jawaban yang benar, Anda perlu memahami urutan operasi.
            </p>
            <p>
                <strong>Opsional:</strong> <a href="https://media.gcflearnfree.org/content/5c09825977c05003547285a8_12_06_2018/excel_complexformulas_practice.xlsx">Unduh buku kerja latihan kami</a>.
            </p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang rumus kompleks.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/J-W3thqtDpQ?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Urutan Operasi</h2>
            <p>
                Excel menghitung rumus berdasarkan urutan operasi berikut:
            </p>
            <ul>
                <li>Operasi yang terdapat dalam tanda kurung</li>
                <li>Perhitungan eksponensial (misalnya, 3^2)</li>
                <li>Perkalian dan pembagian, mana saja yang muncul lebih dulu</li>
                <li>Penjumlahan dan pengurangan, mana saja yang muncul lebih dulu</li>
            </ul>
            <p>
                Mnemonic yang dapat membantu Anda mengingat urutan ini adalah PEMDAS, atau "Please Excuse My Dear Aunt Sally" (Mohon Maafkan Bibi Tercinta Saya).
            </p>
            <p>Klik panah di slideshow di bawah ini untuk mempelajari bagaimana urutan operasi digunakan untuk menghitung rumus di Excel.</p>
        
            <div class="slideshow-container">
                <div class="slide">
                    <h2>PEMDAS, 10+(6-3)/2^2*4-1</h2>
                    <p>Meskipun rumus ini mungkin terlihat rumit, kita bisa menggunakan urutan operasi langkah demi langkah untuk menemukan jawaban yang benar.</p>
                    <ul>
                        <li><strong>P</strong> (Parentheses): 10+(6-3)/2^2*4-1<br>Pertama, kita akan mulai dengan menghitung apa pun yang ada di dalam tanda kurung. Dalam hal ini, hanya ada satu hal yang perlu kita hitung: 6-3=3.</li>
                        <li><strong>E</strong> (Exponents): 10+3/2^2*4-1<br>Selanjutnya, kita akan melihat apakah ada eksponen. Ada satu: 2^2=4.</li>
                        <li><strong>MD</strong> (Multiplication and Division): 10+3/4*4-1<br>Berikutnya, kita akan menyelesaikan perkalian dan pembagian, bekerja dari kiri ke kanan. Karena operasi pembagian muncul sebelum perkalian, ini dihitung lebih dulu: 3/4=0.75.</li>
                        <li><strong>MD</strong> (Multiplication and Division): 10+0.75*4-1<br>Sekarang, kita akan menyelesaikan operasi perkalian yang tersisa: 0.75*4=3.</li>
                        <li><strong>AS</strong> (Addition and Subtraction): 10+3-1<br>Selanjutnya, kita akan menghitung penjumlahan atau pengurangan, bekerja dari kiri ke kanan. Penjumlahan muncul lebih dulu: 10+3=13.</li>
                        <li><strong>AS</strong> (Addition and Subtraction): 13-1<br>Akhirnya, kita memiliki satu operasi pengurangan yang tersisa: 13-1=12.</li>
                        <li>Jawaban: 12. Dan ini adalah hasil yang sama persis yang akan Anda dapatkan jika Anda memasukkan rumus ke dalam Excel.</li>
                    </ul>
                </div>
                <!-- Tambahkan slide tambahan jika diperlukan -->
            </div>
        
            <h2>Membuat Rumus Kompleks</h2>
            <p>
                Dalam contoh di bawah, kami akan menunjukkan bagaimana Excel menggunakan urutan operasi untuk menyelesaikan rumus yang lebih kompleks. Di sini, kami ingin menghitung biaya pajak penjualan untuk faktur katering. Untuk melakukannya, kami akan menulis rumus kami sebagai =(D3+D4+D5)*0.075 di sel D6. Rumus ini akan menambahkan harga item kami, lalu mengalikan nilai tersebut dengan tarif pajak 7,5% (yang ditulis sebagai 0.075) untuk menghitung jawabannya.
            </p>
            <p>
                Excel mengikuti urutan operasi dan pertama-tama menambahkan nilai di dalam tanda kurung: (45.80+68.70+159.60) = 274.10. Kemudian mengalikan nilai tersebut dengan tarif pajak: 274.10*0.075. Hasilnya akan menunjukkan bahwa pajak penjualan adalah $20.56.
            </p>
            <p>
                Sangat penting untuk mengikuti urutan operasi saat membuat rumus. Jika tidak, Excel tidak akan menghitung hasilnya dengan akurat. Dalam contoh kami, jika tanda kurung tidak disertakan, perkalian dihitung lebih dulu dan hasilnya tidak benar. Tanda kurung sering kali merupakan cara terbaik untuk menentukan perhitungan mana yang akan dilakukan terlebih dahulu di Excel.
            </p>
            <p>Tanpa tanda kurung, hasilnya akan berbeda dan salah.</p>
        
            <h2>Untuk Membuat Rumus Kompleks Menggunakan Urutan Operasi:</h2>
            <p>
                Dalam contoh di bawah, kami akan menggunakan referensi sel bersama dengan nilai numerik untuk membuat rumus kompleks yang akan menghitung subtotal untuk faktur katering. Rumus ini akan menghitung biaya setiap item menu terlebih dahulu, kemudian menambahkan nilai-nilai tersebut.
            </p>
            <ol>
                <li>Pilih sel yang akan berisi rumus. Dalam contoh kita, kita akan memilih sel C5.
                    <br><img src="https://media.gcflearnfree.org/content/5633ce29927faf14d04cade9_10_30_2015/complex_subtotal_cell.png" alt="Memilih sel">
                </li>
                <li>Masukkan rumus Anda. Dalam contoh kita, kita akan mengetik =B3*C3+B4*C4. Rumus ini akan mengikuti urutan operasi, pertama melakukan perkalian: 2.79*35 = 97.65 dan 2.29*20 = 45.80. Kemudian akan menambahkan nilai-nilai ini untuk menghitung total: 97.65+45.80.
                    <br><img src="https://media.gcflearnfree.org/content/5633ce29927faf14d04cade9_10_30_2015/complex_subtotal_formula.png" alt="Memasukkan rumus kompleks">
                </li>
                <li>Periksa kembali rumus Anda untuk akurasi, lalu tekan Enter pada keyboard Anda. Rumus akan dihitung dan menampilkan hasilnya. Dalam contoh kita, hasilnya menunjukkan bahwa subtotal untuk pesanan adalah $143.45.
                    <br><img src="https://media.gcflearnfree.org/content/5633ce29927faf14d04cade9_10_30_2015/complex_subtotal_result.png" alt="Hasil rumus">
                </li>
            </ol>
            <p>
                Anda dapat menambahkan tanda kurung ke persamaan apa pun untuk membuatnya lebih mudah dibaca. Meskipun tidak akan mengubah hasil rumus dalam contoh ini, kita dapat menyertakan operasi perkalian dalam tanda kurung untuk memperjelas bahwa mereka akan dihitung sebelum penjumlahan.
            </p>
            <img src="https://media.gcflearnfree.org/content/5633ce29927faf14d04cade9_10_30_2015/complex_subtotal_parentheses.png" alt="Rumus dengan tanda kurung">
            <p>
                Excel tidak selalu memberi tahu Anda jika rumus Anda mengandung kesalahan, jadi terserah Anda untuk memeriksa semua rumus Anda. Untuk mempelajari cara melakukannya, Anda dapat membaca pelajaran Periksa Kembali Rumus Anda dari tutorial Rumus Excel kami.
            </p>
            <h2>Tantangan!</h2>
            <p>
                Dalam tantangan ini, Anda akan bekerja dengan faktur lain seperti yang ada dalam contoh kami. Dalam faktur ini, Anda akan menemukan jumlah pajak untuk pesanan, total pesanan, dan total pesanan jika Anda diberikan diskon 10%.
            </p>
            <ol>
                <li><a href="https://media.gcflearnfree.org/content/5c09825977c05003547285a8_12_06_2018/excel_complexformulas_practice.xlsx">Buka buku kerja latihan kami</a>.</li>
                <li>Klik tab Tantangan di kiri bawah buku kerja.</li>
                <li>Di sel D7, buat rumus yang menghitung pajak untuk faktur. Gunakan tarif pajak penjualan sebesar 7.5%.</li>
                <li>Di sel D8, buat rumus yang menemukan total pesanan. Dengan kata lain, rumus ini harus menambahkan sel D3:D7.</li>
                <li>Di sel D9, buat rumus yang menghitung total setelah diskon 10%. Jika Anda memerlukan bantuan untuk memahami cara mengambil persentase dari total, tinjau pelajaran kami tentang Diskon, Penurunan Harga, dan Penjualan.</li>
                <li>Ketika Anda selesai, spreadsheet Anda akan terlihat seperti ini:
                    <br><img src="https://media.gcflearnfree.org/content/5633ce29927faf14d04cade9_10_30_2015/screen%20shot%202015-11-09%20at%202.12.56%20pm.png" alt="Tantangan akhir">
                </li>
            </ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Referensi Sel Relatif dan Absolut',
            'course_id' => '11',
            'desc' => ' <h1>Perkenalan</h1>
            <p>
                Ada dua jenis referensi sel: relatif dan absolut. Referensi relatif dan absolut berperilaku berbeda saat disalin dan diisi ke sel lain. Referensi relatif berubah ketika rumus disalin ke sel lain. Sebaliknya, referensi absolut tetap konstan di mana pun referensi tersebut disalin.
            </p>
            <p>
                <strong>Opsional:</strong> <a href="https://media.gcflearnfree.org/content/5c09829477c05003547285aa_12_06_2018/excel_cellreferences_practice.xlsx">Unduh buku kerja latihan kami</a>.
            </p>
            <p>Tonton video di bawah untuk mempelajari lebih lanjut tentang referensi sel.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/iDg9s7BJ2m4?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Referensi Relatif</h2>
            <p>
                Secara default, semua referensi sel adalah referensi relatif. Saat disalin ke beberapa sel, sel tersebut berubah berdasarkan posisi relatif baris dan kolom. Misalnya, jika Anda menyalin rumus =A1+B1 dari baris 1 ke baris 2, rumusnya akan menjadi =A2+B2. Referensi relatif sangat berguna ketika Anda perlu mengulangi penghitungan yang sama di beberapa baris atau kolom.
            </p>
        
            <h3>Untuk Membuat dan Menyalin Rumus Menggunakan Referensi Relatif:</h3>
            <p>Dalam contoh berikut, kita ingin membuat rumus yang akan mengalikan harga setiap barang dengan kuantitasnya. Daripada membuat rumus baru untuk setiap baris, kita bisa membuat satu rumus di sel D4 lalu menyalinnya ke baris lainnya. Kami akan menggunakan referensi relatif sehingga rumus menghitung total setiap item dengan benar.</p>
            <ol>
                <li>Pilih sel yang akan berisi rumus. Dalam contoh kita, kita akan memilih sel D4.
                    <br><img src="https://media.gcflearnfree.org/content/5637a999927fb014d03fa1b9_11_02_2015/references_relative_cell.png" alt="Memilih sel">
                </li>
                <li>Masukkan rumus untuk menghitung nilai yang diinginkan. Dalam contoh kita, kita akan mengetik =B4*C4.
                    <br><img src="https://media.gcflearnfree.org/content/5637a999927fb014d03fa1b9_11_02_2015/references_relative_formula.png" alt="Memasukkan rumus">
                </li>
                <li>Tekan Enter pada keyboard Anda. Rumusnya akan dihitung, dan hasilnya akan ditampilkan di sel.</li>
                <li>Temukan gagang isian di sudut kanan bawah sel yang diinginkan. Dalam contoh kita, kita akan menemukan pengendali isian untuk sel D4.
                    <br><img src="https://media.gcflearnfree.org/content/5637a999927fb014d03fa1b9_11_02_2015/references_relative_handle.png" alt="Menemukan gagang isian">
                </li>
                <li>Klik dan seret gagang isian ke sel yang ingin Anda isi. Dalam contoh kita, kita akan memilih sel D5:D13.
                    <br><img src="https://media.gcflearnfree.org/content/5637a999927fb014d03fa1b9_11_02_2015/references_relative_fill.png" alt="Menyeret gagang isian">
                </li>
                <li>Lepaskan mousenya. Rumusnya akan disalin ke sel yang dipilih dengan referensi relatif, menampilkan hasilnya di setiap sel.
                    <br><img src="https://media.gcflearnfree.org/content/5637a999927fb014d03fa1b9_11_02_2015/references_relative_result.png" alt="Hasil rumus">
                </li>
            </ol>
            <p>Anda dapat mengklik dua kali sel yang terisi untuk memeriksa keakuratan rumusnya. Referensi sel relatif harus berbeda untuk setiap sel, bergantung pada barisnya.</p>
            <img src="https://media.gcflearnfree.org/content/5637a999927fb014d03fa1b9_11_02_2015/references_relative_check_v2.png" alt="Memeriksa rumus">
        
            <h2>Referensi Absolut</h2>
            <p>
                Mungkin ada saatnya Anda tidak ingin referensi sel berubah saat disalin ke sel lain. Berbeda dengan referensi relatif, referensi absolut tidak berubah ketika disalin atau diisi. Anda dapat menggunakan referensi absolut untuk menjaga agar baris dan/atau kolom tetap konstan.
            </p>
            <p>
                Referensi absolut ditetapkan dalam rumus dengan penambahan tanda dolar ($). Itu bisa mendahului referensi kolom, referensi baris, atau keduanya.
            </p>
            <p>
                Biasanya Anda akan menggunakan format $A$2 saat membuat rumus yang berisi referensi absolut. Dua format lainnya lebih jarang digunakan.
            </p>
            <p>
                Saat menulis rumus, Anda dapat menekan tombol F4 pada keyboard Anda untuk beralih antara referensi sel relatif dan absolut. Ini adalah cara mudah untuk memasukkan referensi absolut dengan cepat.
            </p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/SVPlRHK-XbI?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"></iframe></div> 
            <h3>Untuk Membuat dan Menyalin Rumus Menggunakan Referensi Absolut:</h3>
            <p>Dalam contoh di bawah, kita akan menggunakan sel E2 (yang berisi tarif pajak 7,5%) untuk menghitung pajak penjualan untuk setiap item di kolom D. Untuk memastikan referensi ke tarif pajak tetap konstan—bahkan ketika rumus disalin dan diisi ke sel lain—kita perlu menjadikan sel $E$2 sebagai referensi absolut.</p>
            <ol>
                <li>Pilih sel yang akan berisi rumus. Dalam contoh kita, kita akan memilih sel D4.
                    <br><img src="https://media.gcflearnfree.org/content/5637a999927fb014d03fa1b9_11_02_2015/references_absolute_cell.png" alt="Memilih sel">
                </li>
                <li>Masukkan rumus untuk menghitung nilai yang diinginkan. Dalam contoh kita, kita akan mengetik =(B4*C4)*$E$2, menjadikan $E$2 sebagai referensi mutlak.
                    <br><img src="https://media.gcflearnfree.org/content/5637a999927fb014d03fa1b9_11_02_2015/references_absolute_formula.png" alt="Memasukkan rumus">
                </li>
                <li>Tekan Enter pada keyboard Anda. Rumusnya akan dihitung, dan hasilnya akan ditampilkan di sel.</li>
                <li>Temukan gagang isian di sudut kanan bawah sel yang diinginkan. Dalam contoh kita, kita akan menemukan pengendali isian untuk sel D4.
                    <br><img src="https://media.gcflearnfree.org/content/5637a999927fb014d03fa1b9_11_02_2015/references_absolute_handle.png" alt="Menemukan gagang isian">
                </li>
                <li>Klik dan seret gagang isian ke sel yang ingin Anda isi (sel D5:D13 dalam contoh kita).
                    <br><img src="https://media.gcflearnfree.org/content/5637a999927fb014d03fa1b9_11_02_2015/references_absolute_fill.png" alt="Menyeret gagang isian">
                </li>
                <li>Lepaskan mousenya. Rumusnya akan disalin ke sel yang dipilih dengan referensi absolut, dan nilainya akan dihitung di setiap sel.
                    <br><img src="https://media.gcflearnfree.org/content/5637a999927fb014d03fa1b9_11_02_2015/references_absolute_result.png" alt="Hasil rumus">
                </li>
            </ol>
            <p>Anda dapat mengklik dua kali sel yang terisi untuk memeriksa keakuratan rumusnya. Referensi absolut harus sama untuk setiap sel, sedangkan referensi lainnya relatif terhadap baris sel.</p>
            <img src="https://media.gcflearnfree.org/content/5637a999927fb014d03fa1b9_11_02_2015/references_absolute_check_v2.png" alt="Memeriksa rumusnya">
            <p>
                Pastikan untuk menyertakan tanda dolar ($) setiap kali Anda membuat referensi absolut di beberapa sel. Tanda dolar dihilangkan pada contoh di bawah ini. Hal ini menyebabkan Excel menafsirkannya sebagai referensi relatif, menghasilkan hasil yang salah saat disalin ke sel lain.
            </p>
            <img src="https://media.gcflearnfree.org/content/5637a999927fb014d03fa1b9_11_02_2015/references_absolute_error.png" alt="Rumus yang disalin salah">
        
            <h2>Menggunakan Referensi Sel dengan Banyak Lembar Kerja</h2>
            <p>
                Excel memungkinkan Anda merujuk ke sel mana pun di lembar kerja mana pun, yang bisa sangat membantu jika Anda ingin mereferensikan nilai tertentu dari satu lembar kerja ke lembar kerja lainnya. Untuk melakukan ini, Anda hanya perlu memulai referensi sel dengan nama lembar kerja diikuti dengan tanda seru (!). Misalnya, jika Anda ingin mereferensikan sel A1 pada Sheet1, referensi selnya adalah Sheet1!A1.
            </p>
            <p>
                Perhatikan bahwa jika nama lembar kerja berisi spasi, Anda harus menyertakan tanda kutip tunggal di sekitar namanya. Misalnya, jika Anda ingin mereferensikan sel A1 pada lembar kerja bernama July Budget, referensi selnya adalah July Budget !A1.
            </p>
        
            <h3>Untuk Mereferensikan Sel di Seluruh Lembar Kerja:</h3>
            <p>Dalam contoh di bawah ini, kami akan merujuk ke sel dengan nilai terhitung di antara dua lembar kerja. Ini akan memungkinkan kita untuk menggunakan nilai yang sama persis pada dua lembar kerja berbeda tanpa menulis ulang rumus atau menyalin data.</p>
            <ol>
                <li>Temukan sel yang ingin Anda referensikan, dan catat lembar kerjanya. Dalam contoh kita, kita ingin mereferensikan sel E14 pada lembar kerja Urutan Menu.
                    <br><img src="https://media.gcflearnfree.org/content/5637a999927fb014d03fa1b9_11_02_2015/references_sheet_cell.png" alt="Menemukan sel">
                </li>
                <li>Arahkan ke lembar kerja yang diinginkan. Dalam contoh kita, kita akan memilih lembar kerja Faktur Katering.
                    <br><img src="https://media.gcflearnfree.org/content/5637a999927fb014d03fa1b9_11_02_2015/references_sheet_worksheet.png" alt="Memilih lembar kerja">
                </li>
                <li>Temukan dan pilih sel tempat Anda ingin nilai muncul. Dalam contoh kita, kita akan memilih sel C4.
                    <br><img src="https://media.gcflearnfree.org/content/5637a999927fb014d03fa1b9_11_02_2015/references_sheet2_cell.png" alt="Memilih sel">
                </li>
                <li>Ketikkan tanda sama dengan (=), nama sheet diikuti tanda seru (!), dan alamat sel. Dalam contoh kita, kita akan mengetik = Menu Order (memakai tanda kutip)!E14.
                    <br><img src="https://media.gcflearnfree.org/content/5637a999927fb014d03fa1b9_11_02_2015/references_sheet2_formula.png" alt="Memasukkan referensi">
                </li>
                <li>Tekan Enter pada keyboard Anda. Nilai sel yang direferensikan akan muncul. Sekarang, jika nilai sel E14 berubah pada lembar kerja Urutan Menu, maka itu akan diperbarui secara otomatis pada lembar kerja Faktur Katering.
                    <br><img src="https://media.gcflearnfree.org/content/5637a999927fb014d03fa1b9_11_02_2015/references_sheet2_result.png" alt="Hasil rumus">
                </li>
            </ol>
            <p>
                Jika Anda mengganti nama lembar kerja di lain waktu, referensi sel akan diperbarui secara otomatis untuk mencerminkan nama lembar kerja baru.
            </p>
            <p>
                Jika Anda salah memasukkan nama lembar kerja, kesalahan #REF! kesalahan akan muncul di sel. Pada contoh di bawah ini, kami salah mengetikkan nama lembar kerja. Untuk mengedit, mengabaikan, atau menyelidiki kesalahannya, klik tombol Error di samping sel dan pilih opsi dari menu.
            </p>
            <img src="https://media.gcflearnfree.org/content/5637a999927fb014d03fa1b9_11_02_2015/references_sheet_error.png" alt="Memperbaiki kesalahan">
        
            <h2>Tantangan!</h2>
            <ol>
                <li>Buka <a href="https://media.gcflearnfree.org/content/5c09829477c05003547285aa_12_06_2018/excel_cellreferences_practice.xlsx">buku kerja latihan kami</a>.</li>
                <li>Klik tab Barang Kertas di kiri bawah buku kerja.</li>
                <li>Di sel D4, masukkan rumus yang mengalikan harga satuan di B4, kuantitas di C4, dan tarif pajak di E2. Pastikan untuk menggunakan referensi sel absolut untuk tarif pajak karena akan sama di setiap sel.</li>
                <li>Gunakan gagang isian untuk menyalin rumus yang baru saja Anda buat ke sel D5:D12.</li>
                <li>Ubah tarif pajak di sel E2 menjadi 6,5%. Perhatikan bahwa semua sel Anda telah diperbarui. Ketika Anda selesai, buku kerja Anda akan terlihat seperti ini:
                    <br><img src="https://media.gcflearnfree.org/content/5637a999927fb014d03fa1b9_11_02_2015/screen%20shot%202015-11-30%20at%204.22.49%20pm.png" alt="Tantangan akhir">
                </li>
                <li>Klik tab Faktur Katering.</li>
                <li>Hapus nilai di sel C5 dan gantikan dengan referensi total harga barang kertas. Petunjuk: Harga pokok barang kertas terdapat pada sel E13 pada lembar kerja Barang Kertas.</li>
                <li>Gunakan langkah yang sama di atas untuk menghitung pajak penjualan untuk setiap item pada lembar kerja Menu Order. Total biaya di sel E14 harus diperbarui. Lalu, di sel C4 lembar kerja Faktur Katering, buat referensi sel ke total yang baru saja Anda hitung. Catatan: Jika Anda menggunakan buku latihan kami untuk mengikuti pelajaran, Anda mungkin sudah menyelesaikan langkah ini.</li>
                <li>Setelah selesai, lembar kerja Faktur Katering akan terlihat seperti ini:
                    <br><img src="https://media.gcflearnfree.org/content/5637a999927fb014d03fa1b9_11_02_2015/excel_2016_cell_ref_challenge_edited.png" alt="Hasil Tantangan Faktur Katering">
                </li>
            </ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Fungsi',
            'course_id' => '12',
            'desc' => '     <h1>Perkenalan</h1>
            <p>
                Fungsi adalah rumus yang telah ditentukan sebelumnya yang melakukan penghitungan menggunakan nilai tertentu dalam urutan tertentu. Excel menyertakan banyak fungsi umum yang dapat digunakan untuk menemukan jumlah, rata-rata, hitungan, nilai maksimum, dan nilai minimum dengan cepat untuk rentang sel. Untuk menggunakan fungsi dengan benar, Anda harus memahami berbagai bagian fungsi dan cara membuat argumen untuk menghitung nilai dan referensi sel.
            </p>
            <p>
                <strong>Opsional:</strong> <a href="https://media.gcflearnfree.org/content/5c0982be77c05003547285ac_12_06_2018/excel_functions_practice.xlsx">Unduh buku kerja latihan kami</a>.
            </p>
            <p>Tonton video di bawah untuk mempelajari lebih lanjut tentang bekerja dengan fungsi.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/-9d4m79twdA?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Bagian-bagian dari suatu Fungsi</h2>
            <p>
                Agar berfungsi dengan benar, suatu fungsi harus ditulis dengan cara tertentu, yang disebut sintaksis. Sintaks dasar suatu fungsi adalah tanda sama dengan (=), nama fungsi (SUM, misalnya), dan satu atau lebih argumen. Argumen berisi informasi yang ingin Anda hitung. Fungsi pada contoh di bawah ini akan menambahkan nilai rentang sel A1:A20.
            </p>
            <br><img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/functions_syntax_graphic.png" alt="Memilih sel">
        
            <h2>Bekerja dengan Argumen</h2>
            <p>
                Argumen dapat mengacu pada masing-masing sel dan rentang sel dan harus diapit dalam tanda kurung. Anda dapat menyertakan satu argumen atau beberapa argumen, bergantung pada sintaksis yang diperlukan untuk fungsi tersebut.
            </p>
            <p>
                Misalnya, fungsi <strong>=AVERAGE(B1:B9)</strong> akan menghitung rata-rata nilai dalam rentang sel B1:B9. Fungsi ini hanya berisi satu argumen.
            </p>
            <br><img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/functions_argument_single.png" alt="Memilih sel">
            <h3>Fungsi dengan Argumen Tunggal</h3>
            <p>
                Beberapa argumen harus dipisahkan dengan koma. Misalnya, fungsi <strong>=SUM(A1:A3, C1:C2, E1)</strong> akan menambahkan nilai semua sel dalam tiga argumen.
            </p>
            <br><img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/functions_argument_multiple.png" alt="Memilih sel">
            <h2>Membuat Suatu Fungsi</h2>
            <p>
                Ada berbagai fungsi yang tersedia di Excel. Berikut beberapa fungsi paling umum yang akan Anda gunakan:
            </p>
            <ul>
                <li><strong>SUM:</strong> Fungsi ini menambahkan semua nilai sel dalam argumen.</li>
                <li><strong>AVERAGE:</strong> Fungsi ini menentukan rata-rata nilai yang disertakan dalam argumen. Ini menghitung jumlah sel dan kemudian membagi nilai tersebut dengan jumlah sel dalam argumen.</li>
                <li><strong>COUNT:</strong> Fungsi ini menghitung jumlah sel dengan data numerik dalam argumen. Fungsi ini berguna untuk menghitung item dalam suatu rentang sel dengan cepat.</li>
                <li><strong>MAX:</strong> Fungsi ini menentukan nilai sel tertinggi yang disertakan dalam argumen.</li>
                <li><strong>MIN:</strong> Fungsi ini menentukan nilai sel terendah yang disertakan dalam argumen.</li>
            </ul>
        
            <h3>Untuk Membuat Fungsi Menggunakan Perintah AutoSum:</h3>
            <p>Perintah AutoSum memungkinkan Anda untuk secara otomatis memasukkan fungsi paling umum ke dalam rumus Anda, termasuk SUM, AVERAGE, COUNT, MAX, dan MIN. Pada contoh di bawah, kita akan menggunakan fungsi SUM untuk menghitung total biaya daftar item yang baru dipesan.</p>
            <ol>
                <li>Pilih sel yang akan berisi fungsi tersebut. Dalam contoh kita, kita akan memilih sel D13.
                    <br><img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/functions_autosum_cell.png" alt="Memilih sel">
                </li>
                <li>Di grup Pengeditan pada tab Beranda, klik panah di sebelah perintah JumlahOtomatis. Selanjutnya, pilih fungsi yang diinginkan dari menu drop-down. Dalam contoh kita, kita akan memilih Sum.
                    <br><img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/functions_autosum_command.png" alt="Memilih fungsi">
                </li>
                <li>Excel akan menempatkan fungsi tersebut di dalam sel dan secara otomatis memilih rentang sel untuk argumennya. Dalam contoh kita, sel D3:D12 dipilih secara otomatis; nilainya akan ditambahkan untuk menghitung total biaya. Jika Excel memilih rentang sel yang salah, Anda bisa memasukkan sel yang diinginkan secara manual ke dalam argumen.
                    <br><img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/functions_autosum_function.png" alt="Argumen fungsi">
                </li>
                <li>Tekan Enter pada keyboard Anda. Fungsinya akan dihitung, dan hasilnya akan muncul di sel. Dalam contoh kita, jumlah D3:D12 adalah $765.29.
                    <br><img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/functions_autosum_result.png" alt="Hasil fungsi">
                </li>
            </ol>
            <p>Perintah AutoSum juga dapat diakses dari tab Rumus pada Ribbon.</p>
            <img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/functions_autosum_ribbon.png" alt="Perintah JumlahOtomatis pada tab Rumus">
            <p>Anda juga dapat menggunakan pintasan keyboard Alt+= alih-alih perintah JumlahOtomatis. Untuk menggunakan pintasan ini, tahan tombol Alt lalu tekan tanda sama dengan.</p>
            <p>Tonton video di bawah untuk melihat cara pintas ini beraksi.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/4MxeY2m-hcI?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"></iframe></div>
            <h3>Untuk Memasukkan Fungsi Secara Manual:</h3>
            <p>Jika Anda sudah mengetahui nama fungsinya, Anda dapat mengetikkannya sendiri dengan mudah. Pada contoh di bawah (penghitungan penjualan kue), kita akan menggunakan fungsi AVERAGE untuk menghitung jumlah rata-rata unit yang terjual oleh setiap pasukan.</p>
            <ol>
                <li>Pilih sel yang akan berisi fungsi tersebut. Dalam contoh kita, kita akan memilih sel C10.
                    <br><img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/functions_basic_cell.png" alt="Memilih sel">
                </li>
                <li>Ketikkan tanda sama dengan (=), lalu masukkan nama fungsi yang diinginkan. Anda juga dapat memilih fungsi yang diinginkan dari daftar fungsi yang disarankan yang muncul di bawah sel saat Anda mengetik. Dalam contoh kita, kita akan mengetik =AVERAGE.
                    <br><img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/functions_basic_function.png" alt="Memasukkan nama fungsi">
                </li>
                <li>Masukkan rentang sel untuk argumen di dalam tanda kurung. Dalam contoh kita, kita akan mengetik (C3:C9). Rumus ini akan menjumlahkan nilai sel C3:C9, lalu membagi nilai tersebut dengan jumlah total nilai dalam rentang tersebut.
                    <br><img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/functions_basic_argument.png" alt="Memasukkan argumen">
                </li>
                <li>Tekan Enter pada keyboard Anda. Fungsinya akan dihitung, dan hasilnya akan muncul di sel. Dalam contoh kita, jumlah rata-rata unit yang terjual oleh setiap pasukan adalah 849.
                    <br><img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/functions_basic_result.png" alt="Hasil fungsi">
                </li>
            </ol>
            <p>Excel tidak selalu memberi tahu Anda jika rumus Anda mengandung kesalahan, jadi terserah Anda untuk memeriksa semua rumus Anda. Untuk mempelajari cara melakukan ini, bacalah pelajaran Periksa Kembali Rumus Anda dari tutorial Rumus Excel kami.</p>
        
            <h2>Perpustakaan Fungsi</h2>
            <p>Meskipun ada ratusan fungsi di Excel, fungsi yang paling sering Anda gunakan akan bergantung pada tipe data yang ada di buku kerja Anda. Tidak perlu mempelajari setiap fungsi, namun menjelajahi beberapa jenis fungsi yang berbeda akan membantu saat Anda membuat proyek baru. Anda bahkan dapat menggunakan Pustaka Fungsi pada tab Rumus untuk menelusuri fungsi berdasarkan kategori, termasuk Finansial, Logis, Teks, dan Tanggal & Waktu.</p>
            <p>Untuk mengakses Pustaka Fungsi, pilih tab Rumus pada Ribbon. Cari grup Perpustakaan Fungsi.</p>
            <p>Klik tombol interaktif di bawah ini untuk mempelajari lebih lanjut tentang berbagai tipe fungsi di Excel.</p>
            <img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/functions_library.png" alt="Perpustakaan Fungsi interaktif">
        
            <h3>Untuk Menyisipkan Fungsi dari Pustaka Fungsi:</h3>
            <p>Pada contoh di bawah, kita akan menggunakan fungsi COUNTA untuk menghitung jumlah total item di kolom Items. Berbeda dengan COUNT, COUNTA dapat digunakan untuk menghitung sel yang berisi data apa pun, bukan hanya data numerik.</p>
            <ol>
                <li>Pilih sel yang akan berisi fungsi tersebut. Dalam contoh kita, kita akan memilih sel B17.
                    <br><img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/functions_insert_cell.png" alt="Memilih sel">
                </li>
                <li>Klik tab Rumus pada Ribbon untuk mengakses Pustaka Fungsi.
                </li>
                <li>Dari grup Function Library, pilih kategori fungsi yang diinginkan. Dalam contoh kita, kita akan memilih More Functions, thdan arahkan mouse ke Statistical.
                    <br><img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/functions_library_command2.png" alt="Memilih perintah Fungsi Lainnya/Statistik">
                </li>
                <li>Pilih fungsi yang diinginkan dari menu drop-down. Dalam contoh kita, kita akan memilih fungsi COUNTA, yang akan menghitung jumlah sel di kolom Item yang tidak kosong.
                    <br><img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/functions_library_menu2.png" alt="Memilih fungsi COUNTA">
                </li>
                <li>Kotak dialog Argumen Fungsi akan muncul. Pilih kolom Value1, lalu masukkan atau pilih sel yang diinginkan. Dalam contoh kita, kita akan memasukkan rentang sel A3:A12. Anda dapat terus menambahkan argumen di bidang Value2, namun dalam kasus ini kami hanya ingin menghitung jumlah sel dalam rentang sel A3:A12. Jika Anda sudah puas, klik OK.
                </li>
                <li>Fungsinya akan dihitung, dan hasilnya akan muncul di sel. Dalam contoh kita, hasilnya menunjukkan bahwa 10 item telah dipesan.
                    <br><img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/functions_insert_result.png" alt="Hasil fungsi">
                </li>
            </ol>
        
            <h3>Perintah Sisipkan Fungsi</h3>
            <p>Meskipun Pustaka Fungsi adalah tempat yang bagus untuk menelusuri fungsi, terkadang Anda mungkin lebih memilih untuk mencari fungsi tersebut. Anda dapat melakukannya menggunakan perintah Sisipkan Fungsi. Mungkin diperlukan beberapa percobaan dan kesalahan tergantung pada jenis fungsi yang Anda cari, namun dengan latihan, perintah Sisipkan Fungsi dapat menjadi cara yang ampuh untuk menemukan fungsi dengan cepat.</p>
        
            <h3>Untuk Menggunakan Perintah Sisipkan Fungsi:</h3>
            <p>Pada contoh di bawah ini, kita ingin mencari fungsi yang akan menghitung jumlah hari kerja yang diperlukan untuk menerima barang setelah dipesan. Kami akan menggunakan tanggal di kolom E dan F untuk menghitung waktu pengiriman di kolom G.</p>
            <ol>
                <li>Pilih sel yang akan berisi fungsi tersebut. Dalam contoh kita, kita akan memilih sel G3.
                    <br><img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/functions_library_cell.png" alt="Memilih sel">
                </li>
                <li>Klik tab Rumus pada Ribbon, lalu klik perintah Sisipkan Fungsi.
                    <br><img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/functions_insert_command2.png" alt="Sisipkan perintah Fungsi">
                </li>
                <li>Kotak dialog Sisipkan Fungsi akan muncul.
                </li>
                <li>Ketikkan beberapa kata kunci yang menjelaskan perhitungan yang Anda inginkan untuk dilakukan fungsi tersebut, lalu klik Jalankan. Dalam contoh kita, kita akan mengetikkan hitungan hari, namun Anda juga dapat mencari dengan memilih kategori dari daftar drop-down.
                    <br><img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/functions_insert_search2.png" alt="Mencari suatu fungsi">
                </li>
                <li>Tinjau hasilnya untuk menemukan fungsi yang diinginkan, lalu klik OK. Dalam contoh kita, kita akan memilih NETWORKDAYS, yang akan menghitung jumlah hari kerja antara tanggal pemesanan dan tanggal penerimaan.
                    <br><img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/functions_insert_networkdays.png" alt="Memilih suatu fungsi">
                </li>
                <li>Kotak dialog Argumen Fungsi akan muncul. Dari sini, Anda dapat memasukkan atau memilih sel yang akan membuat argumen dalam fungsi tersebut. Dalam contoh kita, kita akan memasukkan E3 di kolom Start_date dan F3 di kolom End_date. Jika Anda sudah puas, klik OK.
                    <br><img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/functions_library_ok.png" alt="Argumen fungsi">
                </li>
                <li>Fungsinya akan dihitung, dan hasilnya akan muncul di sel. Dalam contoh kami, hasilnya menunjukkan bahwa dibutuhkan empat hari kerja untuk menerima pesanan.
                    <br><img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/functions_library_result.png" alt="Hasil fungsi">
                </li>
            </ol>
            <p>Seperti rumus, fungsi dapat disalin ke sel yang berdekatan. Cukup pilih sel yang berisi fungsi tersebut, lalu klik dan seret gagang isian ke sel yang ingin Anda isi. Fungsi tersebut akan disalin, dan nilai sel tersebut akan dihitung relatif terhadap baris atau kolomnya.</p>
            <img src="fill-handle.png" alt="Menggunakan pegangan isian">
        
            <p>Untuk mempelajari lebih lanjut:</p>
            <p>Jika Anda merasa nyaman dengan fungsi dasar, Anda mungkin ingin mencoba fungsi yang lebih canggih seperti VLOOKUP. Tinjau pelajaran kita tentang Cara Menggunakan Fungsi VLOOKUP Excel untuk informasi lebih lanjut.</p>
            <p>Untuk mempelajari lebih lanjut tentang bekerja dengan fungsi, kunjungi tutorial Rumus Excel kami.</p>
        
            <h2>Tantangan!</h2>
            <ol>
                <li>Buka <a href="https://media.gcflearnfree.org/content/5c0982be77c05003547285ac_12_06_2018/excel_functions_practice.xlsx">buku kerja latihan kami</a>.</li>
                <li>Klik tab Tantangan di kiri bawah buku kerja.</li>
                <li>Di sel F3, sisipkan fungsi untuk menghitung rata-rata empat skor di sel B3:E3.</li>
                <li>Gunakan gagang isian untuk menyalin fungsi Anda di sel F3 ke sel F4:F17.</li>
                <li>Di sel B18, gunakan perintah AutoSum untuk menyisipkan fungsi yang menghitung skor terendah di sel B3:B17.</li>
                <li>Di sel B19, gunakan Pustaka Fungsi untuk menyisipkan fungsi yang menghitung median skor di sel B3:B17. Petunjuk: Anda dapat menemukan fungsi median dengan membuka Fungsi Lainnya > Statistik.</li>
                <li>Di sel B20, buat fungsi untuk menghitung skor tertinggi di sel B3:B17.</li>
                <li>Pilih sel B18:B20, lalu gunakan gagang isian untuk menyalin ketiga fungsi yang baru saja Anda buat ke sel C18:F20.</li>
                <li>Ketika Anda selesai, buku kerja Anda akan terlihat seperti ini:
                    <br><img src="https://media.gcflearnfree.org/content/563b7aa7ca7fac0d9c7b3f7a_11_05_2015/screen%20shot%202015-11-24%20at%203.36.08%20pm.png" alt="Hasil Tantangan">
                </li>
            </ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Tips Dasar untuk Bekerja dengan Data',
            'course_id' => '13',
            'desc' => '   <h1>Perkenalan</h1>
            <p>
                Buku kerja Excel dirancang untuk menyimpan banyak informasi. Baik Anda bekerja dengan 20 sel atau 20.000, Excel memiliki beberapa fitur untuk membantu Anda mengatur data dan menemukan apa yang Anda perlukan. Anda dapat melihat beberapa fitur paling berguna di bawah ini. Pastikan untuk meninjau pelajaran lain dalam tutorial ini untuk mendapatkan petunjuk langkah demi langkah untuk setiap fitur ini.
            </p>
        
            <h2>Membekukan Baris dan Kolom</h2>
            <p>
                Anda mungkin ingin melihat baris atau kolom tertentu sepanjang waktu di lembar kerja Anda, terutama sel header. Dengan membekukan baris atau kolom di tempatnya, Anda akan dapat menggulir konten Anda sambil terus melihat sel yang dibekukan. Dalam contoh ini, kita telah membekukan dua baris teratas, yang memungkinkan kita melihat tanggal di mana pun kita menggulir spreadsheet.
            </p>
            <img src="https://media.gcflearnfree.org/content/56464e6fca7fab1630997b28_11_13_2015/freeze-rows-after-change.png" alt="Baris yang dibekukan">
        
            <h2>Menyortir Data</h2>
            <p>
                Anda dapat dengan cepat mengatur ulang lembar kerja dengan mengurutkan data Anda. Konten dapat diurutkan berdasarkan abjad, numerik, dan dalam beberapa cara lainnya. Misalnya, Anda dapat mengatur daftar informasi kontak berdasarkan nama belakang.
            </p>
            <img src="https://media.gcflearnfree.org/content/56464e6fca7fab1630997b28_11_13_2015/sorting_types_sheet.png" alt="Mengurutkan lembar kerja berdasarkan abjad">
        
            <h2>Memfilter Data</h2>
            <p>
                Filter dapat digunakan untuk mempersempit data di lembar kerja Anda, memungkinkan Anda melihat informasi yang Anda perlukan saja. Dalam contoh ini, kami memfilter lembar kerja untuk memperlihatkan hanya baris yang berisi kata Laptop atau Proyektor di kolom B.
            </p>
            <img src="https://media.gcflearnfree.org/content/56464e6fca7fab1630997b28_11_13_2015/filtering_howto_dropdown_menu_select.png" alt="Menerapkan filter">
        
            <h2>Meringkas Data</h2>
            <p>
                Perintah subtotal memungkinkan Anda meringkas data dengan cepat. Dalam contoh kita, kita telah membuat subtotal untuk setiap ukuran T-shirt, yang memudahkan untuk melihat berapa banyak yang kita perlukan dalam setiap ukuran.
            </p>
            <img src="https://media.gcflearnfree.org/content/56464e6fca7fab1630997b28_11_13_2015/subtotals_create_result.png" alt="Subtotal dan kelompok">
        
            <h2>Memformat Data sebagai Tabel</h2>
            <p>
                Sama seperti pemformatan biasa, tabel bisa meningkatkan tampilan dan nuansa buku kerja Anda, namun tabel juga membantu menata konten dan membuat data Anda lebih mudah digunakan. Misalnya, tabel memiliki opsi pengurutan dan pemfilteran bawaan. Excel juga menyertakan beberapa gaya tabel yang telah ditentukan sebelumnya, memungkinkan Anda membuat tabel dengan cepat.
            </p>
            <img src="https://media.gcflearnfree.org/content/56464e6fca7fab1630997b28_11_13_2015/tables_format_complete.png" alt="Data diformat sebagai tabel di Excel">
        
            <h2>Memvisualisasikan Data dengan Grafik</h2>
            <p>
                Mungkin sulit untuk menafsirkan buku kerja Excel yang berisi banyak data. Bagan memungkinkan Anda mengilustrasikan data buku kerja Anda secara grafis, yang membuatnya mudah untuk memvisualisasikan perbandingan dan tren.
            </p>
            <img src="https://media.gcflearnfree.org/content/56464e6fca7fab1630997b28_11_13_2015/2015-11-05_14-44-32.png" alt="Bagan dimasukkan ke dalam lembar kerja">
        
            <h2>Menambahkan Pemformatan Bersyarat</h2>
            <p>
                Katakanlah Anda memiliki lembar kerja dengan ribuan baris data. Akan sangat sulit untuk melihat pola dan tren hanya dengan memeriksa informasi mentahnya. Pemformatan bersyarat memungkinkan Anda menerapkan pemformatan sel secara otomatis—termasuk warna, ikon, dan bilah data—ke satu atau beberapa sel berdasarkan nilai sel.
            </p>
            <img src="https://media.gcflearnfree.org/content/56464e6fca7fab1630997b28_11_13_2015/conditional_formatting_preset_result.png" alt="Pemformatan bersyarat diterapkan ke rentang sel">
        
            <h2>Menggunakan Temukan dan Ganti</h2>
            <p>
                Saat bekerja dengan banyak data, mungkin sulit dan memakan waktu untuk menemukan informasi spesifik. Anda dapat dengan mudah mencari buku kerja Anda menggunakan fitur Temukan, yang juga memungkinkan Anda mengubah konten menggunakan fitur Ganti.
            </p>
            <img src="https://media.gcflearnfree.org/content/56464e6fca7fab1630997b28_11_13_2015/2015-11-09_10-18-35.png" alt="Menggunakan fitur temukan dan ganti">'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Menyortir Data',
            'course_id' => '14',
            'desc' => '      <h1>Perkenalan</h1>
            <p>
                Saat Anda menambahkan lebih banyak konten ke lembar kerja, pengorganisasian informasi ini menjadi sangat penting. Anda dapat dengan cepat mengatur ulang lembar kerja dengan mengurutkan data Anda. Misalnya, Anda dapat mengatur daftar informasi kontak berdasarkan nama belakang. Konten dapat diurutkan berdasarkan abjad, numerik, dan dalam beberapa cara lainnya.
            </p>
            <p>
            <p><em>Opsional: <a href="https://media.gcflearnfree.org/content/5c09833077c05003547285b2_12_06_2018/excel_sorting_practice.xlsx" download>Unduh buku kerja latihan kami.</a></em></p>
            </p>
            <p>
                Tonton video di bawah ini untuk mempelajari lebih lanjut tentang pengurutan data di Excel.
            </p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/Ep5q1cUhQas?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Jenis Penyortiran</h2>
            <p>
                Saat mengurutkan data, penting untuk memutuskan terlebih dahulu apakah Anda ingin pengurutan diterapkan ke seluruh lembar kerja atau hanya rentang sel saja.
            </p>
            <p>
                <strong>Lembar pengurutan</strong> mengatur semua data di lembar kerja Anda berdasarkan satu kolom. Informasi terkait di setiap baris disimpan bersama ketika pengurutan diterapkan. Pada contoh di bawah, kolom Nama Kontak (kolom A) telah diurutkan untuk menampilkan nama berdasarkan abjad.
            </p>
            <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_types_sheet.png" alt="Lembar kerja yang diurutkan">
            <p>
                <strong>Rentang pengurutan</strong> mengurutkan data dalam rentang sel, yang dapat berguna saat bekerja dengan lembar yang berisi beberapa tabel. Mengurutkan rentang tidak akan memengaruhi konten lain di lembar kerja.
            </p>
            <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_types_range_2013.png" alt="Menyortir rentang">
        
            <h2>Untuk Mengurutkan Sheet:</h2>
            <p>Dalam contoh kita, kita akan mengurutkan formulir pemesanan T-shirt berdasarkan abjad berdasarkan Nama Belakang (kolom C).</p>
            <ol>
                <li>Pilih sel di kolom yang ingin Anda urutkan. Dalam contoh kita, kita akan memilih sel C2.</li>
                <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_whole_sheet_select_cell.png" alt="Memilih sel C2">
                <li>Pilih tab Data pada Ribbon, lalu klik perintah A-Z untuk mengurutkan A ke Z, atau perintah Z-A untuk mengurutkan Z ke A. Dalam contoh kita, kita akan mengurutkan A ke Z.</li>
                <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_whole_sheet_ascending_sort_button.png" alt="Mengurutkan A sampai Z">
                <li>Lembar kerja akan diurutkan berdasarkan kolom yang dipilih. Dalam contoh kita, lembar kerja sekarang diurutkan berdasarkan nama belakang.</li>
                <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_whole_sheet_after_changes.png" alt="Spreadsheet yang diurutkan berdasarkan nama belakang">
            </ol>
        
            <h2>Untuk Mengurutkan Rentang:</h2>
            <p>Dalam contoh kita, kita akan memilih tabel terpisah di formulir pemesanan kaos untuk mengurutkan jumlah kaos yang dipesan di setiap kelas.</p>
            <ol>
                <li>Pilih rentang sel yang ingin Anda urutkan. Dalam contoh kita, kita akan memilih rentang sel G2:H6.</li>
                <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_range_select_cells.png" alt="Memilih rentang sel">
                <li>Pilih tab Data pada Ribbon, lalu klik perintah Sortir.</li>
                <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_range_sort_button.png" alt="Tombol Urutkan pada tab Data">
                <li>Kotak dialog Sortir akan muncul. Pilih kolom yang ingin Anda urutkan. Dalam contoh kita, kita ingin mengurutkan data berdasarkan jumlah pesanan T-shirt, jadi kita pilih Orders.</li>
                <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_range_select_options.png" alt="Kotak dialog Urutkan">
                <li>Tentukan urutan penyortiran (baik menaik atau menurun). Dalam contoh kita, kita akan menggunakan Largest to Smallest.</li>
                <li>Setelah Anda puas dengan pilihan Anda, klik OK.</li>
                <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_range_click_ok.png" alt="Kotak dialog Urutkan">
                <li>Rentang sel akan diurutkan berdasarkan kolom yang dipilih. Dalam contoh kita, kolom Pesanan akan diurutkan dari yang tertinggi hingga terendah. Perhatikan bahwa konten lain di lembar kerja tidak terpengaruh oleh pengurutan.</li>
                <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_range_after_changes.png" alt="Kisarannya telah diurutkan">
            </ol>
        
            <p>Jika data Anda tidak diurutkan dengan benar, periksa kembali nilai sel Anda untuk memastikan nilai tersebut dimasukkan ke dalam lembar kerja dengan benar. Bahkan kesalahan ketik kecil pun dapat menyebabkan masalah saat menyortir lembar kerja yang besar. Pada contoh di bawah, kita lupa menyertakan tanda hubung di sel A18, menyebabkan pengurutan kita menjadi sedikit tidak akurat.</p>
            <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_range_typo.png" alt="Kesalahan ketik dapat merusak semacam itu">
        
            <h2>Penyortiran Khusus</h2>
            <p>
                Terkadang Anda mungkin menemukan bahwa opsi pengurutan default tidak dapat mengurutkan data sesuai urutan yang Anda perlukan. Untungnya, Excel memungkinkan Anda membuat daftar kustom untuk menentukan urutan pengurutan Anda sendiri.
            </p>
        
            <h2>Untuk Membuat Pengurutan Khusus:</h2>
            <p>Dalam contoh kita, kita ingin mengurutkan lembar kerja berdasarkan Ukuran T-Shirt (kolom D). Penyortiran biasa akan mengatur ukuran berdasarkan abjad, dan ini salah. Sebagai gantinya, kami akan membuat daftar khusus untuk mengurutkan dari yang terkecil hingga terbesar.</p>
            <ol>
                <li>Pilih sel di kolom yang ingin Anda urutkan. Dalam contoh kita, kita akan memilih sel D2.</li>
                <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_custom_select_cells.png" alt="Memilih sel D2">
                <li>Pilih tab Data, lalu klik perintah Sortir.</li>
                <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_range_sort_button.png" alt="Tombol Urutkan pada tab Data">
                <li>Kotak dialog Sortir akan muncul. Pilih kolom yang ingin Anda urutkan, lalu pilih Daftar Kustom... dari bidang Pesanan. Dalam contoh kita, kita akan memilih untuk mengurutkan berdasarkan Ukuran T-Shirt.</li>
                <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_custom_sort_dialog.png" alt="Kotak dialog Urutkan">
                <li>Kotak dialog Daftar Kustom akan muncul. Pilih DAFTAR BARU dari kotak Daftar Kustom:</li>
                <li>Ketik item dalam urutan khusus yang diinginkan dalam kotak Daftar entri:. Dalam contoh kita, kita ingin mengurutkan data berdasarkan ukuran kaus dari yang terkecil hingga yang terbesar, jadi kita akan mengetikkan Small, Medium, Large, dan X-Large, dengan menekan Enter pada keyboard setelah setiap item.</li>
                <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_custom_custom_lists_dialog.png" alt="Kotak dialog Daftar Kustom">
                <li>Klik Tambah untuk menyimpan urutan pengurutan baru. Daftar baru akan ditambahkan ke kotak Daftar kustom:. Pastikan daftar baru dipilih, lalu klik OK.</li>
                <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_custom_click_ok.png" alt="Mengklik Oke">
                <li>Kotak dialog Daftar Kustom akan ditutup. Klik OK di kotak dialog Sortir untuk melakukan pengurutan khusus.</li>
                <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_custom_click_ok_again.png" alt="Mengklik Oke">
                <li>Lembar kerja akan diurutkan berdasarkan urutan khusus. Dalam contoh kita, lembar kerja sekarang disusun berdasarkan ukuran kaos dari yang terkecil hingga yang terbesar.</li>
                <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_custom_after_changes.png" alt="Lembar tersebut sekarang telah diurutkan berdasarkan kriteria khusus kami">
            </ol>
        
            <h2>Tingkat Penyortiran</h2>
            <p>
                Jika Anda memerlukan kontrol lebih besar terhadap cara data diurutkan, Anda dapat menambahkan beberapa level ke pengurutan apa pun. Ini memungkinkan Anda mengurutkan data berdasarkan lebih dari satu kolom.
            </p>
        
            <h2>Untuk Menambahkan Tingkat:</h2>
            <p>Dalam contoh di bawah ini, kita akan mengurutkan lembar kerja berdasarkan Ukuran T-Shirt (Kolom D), lalu berdasarkan Wali Kelas # (kolom A).</p>
            <ol>
                <li>Pilih sel di kolom yang ingin Anda urutkan. Dalam contoh kita, kita akan memilih sel A2.</li>
                <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_levels_select.png" alt="Memilih sel A2">
                <li>Klik tab Data, lalu pilih perintah Sortir.</li>
                <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_range_sort_button.png" alt="Tombol Urutkan pada tab Data">
                <li>Kotak dialog Sortir akan muncul. Pilih kolom pertama yang ingin Anda urutkan. Pada contoh ini, kita akan mengurutkan berdasarkan Ukuran T-Shirt (kolom D) dengan custom list yang sebelumnya kita buat untuk kolom Order.</li>
                <li>Klik Tambah Level untuk menambahkan kolom lain untuk diurutkan.</li>
                <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_levels_sort_dialog_1.png" alt="Kotak dialog Urutkan">
                <li>Pilih kolom berikutnya yang ingin Anda urutkan, lalu klik OK. Dalam contoh kita, kita akan mengurutkan berdasarkan Wali Kelas # (kolom A).</li>
                <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_levels_sort_dialog_2.png" alt="Kotak dialog Urutkan">
                <li>Lembar kerja akan diurutkan berdasarkan urutan yang dipilih. Dalam contoh kita, pesanan diurutkan berdasarkan ukuran kaos. Dalam setiap kelompok ukuran kaos, siswa diurutkan berdasarkan nomor wali kelas.</li>
                <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_levels_result.png" alt="Pengurutan multi-level diterapkan ke lembar kerja">
            </ol>
            <p>Jika Anda perlu mengubah urutan pengurutan bertingkat, mudah untuk mengontrol kolom mana yang diurutkan terlebih dahulu. Cukup pilih kolom yang diinginkan, lalu klik panah Pindah ke Atas atau Pindah ke Bawah untuk mengatur prioritasnya.</p>
            <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/sorting_levels_change_order.png" alt="Pindahkan level ke atas atau ke bawah">
        
            <h2>Tantangan!</h2>
            <p>
            Buka buku kerja latihan kami. <em>Opsional: <a href="https://media.gcflearnfree.org/content/5c09833077c05003547285b2_12_06_2018/excel_sorting_practice.xlsx" download>Unduh buku kerja latihan kami.</a></em>
            </p>
                <ol>
                    <li>Klik tab Tantangan di kiri bawah buku kerja.</li>
                    <li>Untuk tabel utama, buat pengurutan khusus yang mengurutkan berdasarkan Kelas dari Terkecil ke Terbesar dan kemudian berdasarkan Nama Camper dari A hingga Z.</li>
                    <li>Buat semacam untuk bagian Informasi Tambahan. Urutkan berdasarkan Konselor (Kolom H) dari A sampai Z.</li>
                </ol>
                Ketika Anda selesai, buku kerja Anda akan terlihat seperti ini:
            </p>
            <img src="https://media.gcflearnfree.org/content/5621441b287fc20e14f45a5e_10_16_2015/screen%20shot%202015-11-24%20at%203.45.45%20pm.png" alt="Tantangan Penyortiran">'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Grup dan Subtotal',
            'course_id' => '15',
            'desc' => '<h1>Perkenalan</h1>
            <p>
                Lembar kerja dengan banyak konten terkadang terasa membebani dan bahkan sulit dibaca. Untungnya, Excel dapat mengatur data ke dalam kelompok, sehingga Anda dapat dengan mudah memperlihatkan dan menyembunyikan bagian berbeda pada lembar kerja Anda. Anda juga bisa meringkas grup yang berbeda menggunakan perintah Subtotal dan membuat kerangka untuk lembar kerja Anda.
            </p>
            <p>
            <p>
            Buka buku kerja latihan kami. <em>Opsional: <a href="https://media.gcflearnfree.org/content/5c09839377c05003547285b6_12_06_2018/excel_subtotals_practice.xlsx" download>Unduh buku kerja latihan kami.</a></em>
            </p>
            </p>
            <p>
                Tonton video di bawah ini untuk mempelajari selengkapnya tentang grup dan subtotal di Excel.
            </p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/7JJOBFSHbZk?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Untuk Mengelompokkan Baris atau Kolom:</h2>
            <ol>
                <li>Pilih baris atau kolom yang ingin Anda kelompokkan. Dalam contoh ini, kita akan memilih kolom B, C, dan D.</li>
                <img src="https://media.gcflearnfree.org/content/5627dca29c7fab1314179c4c_10_21_2015/subtotals_group_select_cells.png" alt="Memilih kolom B, C, dan D">
                <li>Pilih tab Data pada Ribbon, lalu klik perintah Group.</li>
                <img src="https://media.gcflearnfree.org/content/5627dca29c7fab1314179c4c_10_21_2015/subtotals_group_button.png" alt="Tombol Grup pada tab Data">
                <li>Baris atau kolom yang dipilih akan dikelompokkan. Dalam contoh kita, kolom B, C, dan D dikelompokkan.</li>
                <img src="https://media.gcflearnfree.org/content/5627dca29c7fab1314179c4c_10_21_2015/subtotals_group_results.png" alt="Kolom B, C, dan D yang dikelompokkan">
                <li>Untuk memisahkan data, pilih baris atau kolom yang dikelompokkan, lalu klik perintah Ungroup.</li>
                <img src="https://media.gcflearnfree.org/content/5627dca29c7fab1314179c4c_10_21_2015/subtotals_group_ungroup.png" alt="Tombol Pisahkan pada tab Data">
            </ol>
        
            <h2>Untuk Menyembunyikan dan Menampilkan Grup:</h2>
            <ol>
                <li>Untuk menyembunyikan grup, klik tanda minus, juga dikenal sebagai tombol Sembunyikan Detail.</li>
                <img src="https://media.gcflearnfree.org/content/5627dca29c7fab1314179c4c_10_21_2015/subtotals_group_hide.png" alt="Tombol Sembunyikan Detail">
                <li>Grup tersebut akan disembunyikan. Untuk menampilkan grup tersembunyi, klik tanda tambah, juga dikenal sebagai tombol Tampilkan Detail.</li>
                <img src="https://media.gcflearnfree.org/content/5627dca29c7fab1314179c4c_10_21_2015/subtotals_group_show.png" alt="Tombol Tampilkan Detail">
            </ol>
        
            <h2>Membuat Subtotal:</h2>
            <p>
                Perintah Subtotal memungkinkan Anda membuat grup secara otomatis dan menggunakan fungsi umum seperti SUM, COUNT, dan AVERAGE untuk membantu meringkas data Anda. Misalnya, perintah Subtotal dapat membantu menghitung biaya perlengkapan kantor berdasarkan jenis dari pesanan inventaris dalam jumlah besar. Ini akan membuat hierarki grup, yang dikenal sebagai kerangka, untuk membantu mengatur lembar kerja Anda.
            </p>
            <p>Data Anda harus diurutkan dengan benar sebelum menggunakan perintah Subtotal, jadi Anda mungkin ingin meninjau pelajaran kami tentang Menyortir Data untuk mempelajari lebih lanjut.</p>
        
            <h2>Untuk Membuat Subtotal:</h2>
            <ol>
                <li>Pertama, urutkan lembar kerja Anda berdasarkan data yang ingin Anda subtotal. Pada contoh ini, kita akan membuat subtotal untuk setiap ukuran kaos, sehingga lembar kerja kita sudah diurutkan berdasarkan ukuran kaos dari yang terkecil hingga yang terbesar.</li>
                <img src="https://media.gcflearnfree.org/content/5627dca29c7fab1314179c4c_10_21_2015/subtotals_create_select.png" alt="Mengurutkan lembar kerja berdasarkan ukuran kaos">
                <li>Pilih tab Data, lalu klik perintah Subtotal.</li>
                <img src="https://media.gcflearnfree.org/content/5627dca29c7fab1314179c4c_10_21_2015/subtotals_create_button.png" alt="Tombol Subtotal pada tab Data">
                <li>Kotak dialog Subtotal akan muncul. Klik panah tarik-turun pada bidang At each change in: untuk memilih kolom yang ingin Anda subtotal. Dalam contoh kita, kita akan memilih T-Shirt Size.</li>
                <li>Klik panah tarik-turun pada bidang Use function: untuk memilih fungsi yang ingin Anda gunakan. Dalam contoh kita, kita akan memilih COUNT untuk menghitung jumlah kaos yang dipesan dalam setiap ukuran.</li>
                <img src="https://media.gcflearnfree.org/content/5627dca29c7fab1314179c4c_10_21_2015/subtotals_create_dialog1.png" alt="Memilih fungsi Hitung">
                <li>Di bidang Add subtotal to:, pilih kolom tempat Anda ingin menampilkan subtotal terhitung. Dalam contoh kita, kita akan memilih T-Shirt Size. Jika Anda puas dengan pilihan Anda, klik OK.</li>
                <img src="https://media.gcflearnfree.org/content/5627dca29c7fab1314179c4c_10_21_2015/subtotals_create_dialog2.png" alt="Menambahkan subtotal ke kolom Ukuran T-shirt">
                <li>Lembar kerja akan diuraikan menjadi beberapa kelompok, dan subtotalnya akan dicantumkan di bawah setiap kelompok. Dalam contoh kita, data sekarang dikelompokkan berdasarkan ukuran kaos, dan jumlah kaos yang dipesan dalam ukuran tersebut muncul di bawah setiap grup.</li>
                <img src="https://media.gcflearnfree.org/content/5627dca29c7fab1314179c4c_10_21_2015/subtotals_create_result.png" alt="Lembar kerja dengan subtotal">
            </ol>
        
            <h2>Untuk Melihat Grup Berdasarkan Level:</h2>
            <p>
                Saat Anda membuat subtotal, lembar kerja Anda dibagi menjadi beberapa tingkatan. Anda dapat beralih di antara level-level ini untuk mengontrol dengan cepat berapa banyak informasi yang ditampilkan di lembar kerja dengan mengklik tombol Level di sebelah kiri lembar kerja. Dalam contoh kita, kita akan beralih di antara ketiga level dalam garis besar kita. Meskipun contoh ini hanya berisi tiga level, Excel dapat menampung hingga delapan level.
            </p>
            <ol>
                <li>Klik level terendah untuk menampilkan detail paling sedikit. Dalam contoh kita, kita akan memilih level 1, yang hanya berisi Grand Count, atau jumlah total T-shirt yang dipesan.</li>
                <img src="https://media.gcflearnfree.org/content/5627dca29c7fab1314179c4c_10_21_2015/subtotals_level_1.png" alt="Mengatur detail grup ke level 1">
                <li>Klik level berikutnya untuk memperluas detailnya. Dalam contoh kita, kita akan memilih level 2, yang berisi setiap baris subtotal namun menyembunyikan semua data lainnya dari lembar kerja.</li>
                <img src="https://media.gcflearnfree.org/content/5627dca29c7fab1314179c4c_10_21_2015/subtotals_level_2.png" alt="Mengatur detail grup ke level 2">
                <li>Klik tingkat tertinggi untuk melihat dan memperluas semua data lembar kerja Anda. Dalam contoh kita, kita akan memilih level 3.</li>
                <img src="https://media.gcflearnfree.org/content/5627dca29c7fab1314179c4c_10_21_2015/subtotals_level_3.png" alt="Mengatur detail grup ke level 3">
            </ol>
            <p>Anda juga dapat menggunakan tombol Show Detail dan Hide Detail untuk menampilkan dan menyembunyikan grup dalam kerangka.</p>
            <img src="https://media.gcflearnfree.org/content/5627dca29c7fab1314179c4c_10_21_2015/subtotals_level_groups.png" alt="Menggunakan tombol Tampilkan dan Sembunyikan Detail di subtotal">
        
            <h2>Untuk Menghapus Subtotal:</h2>
            <p>
                Terkadang Anda mungkin tidak ingin menyimpan subtotal di lembar kerja Anda, terutama jika Anda ingin mengatur ulang data dengan cara yang berbeda. Jika Anda tidak ingin lagi menggunakan subtotaling, Anda harus menghapusnya dari lembar kerja Anda.
            </p>
            <ol>
                <li>Pilih tab Data, lalu klik perintah Subtotal.</li>
                <img src="https://media.gcflearnfree.org/content/5627dca29c7fab1314179c4c_10_21_2015/subtotals_create_button.png" alt="Tombol Subtotal pada tab Data">
                <li>Kotak dialog Subtotal akan muncul. Klik Remove All.</li>
                <img src="https://media.gcflearnfree.org/content/5627dca29c7fab1314179c4c_10_21_2015/subtotals_remove_dialog.png" alt="Menghapus subtotal dalam dialog Subtotal">
                <li>Semua data lembar kerja tidak akan dikelompokkan, dan subtotalnya akan dihapus.</li>
                <li>Untuk menghapus semua grup tanpa menghapus subtotalnya, klik panah tarik-turun perintah Ungroup, lalu pilih Clear Outline.</li>
                <img src="https://media.gcflearnfree.org/content/5627dca29c7fab1314179c4c_10_21_2015/subtotals_remove_clear.png" alt="Hapus Garis Besar di menu Pisahkan pada tab Data">
            </ol>
        
            <h2>Tantangan!</h2>
            <ol>
                <li>Buka buku kerja latihan kami<em>Opsional: <a href="https://media.gcflearnfree.org/content/5c09839377c05003547285b6_12_06_2018/excel_subtotals_practice.xlsx" download>Unduh buku kerja latihan kami.</a></em></li>
                <li>Klik tab Tantangan di kiri bawah buku kerja.</li>
                <li>Urutkan buku kerja berdasarkan Kelas dari yang terkecil hingga yang terbesar.</li>
                <li>Gunakan perintah Subtotal untuk mengelompokkan pada setiap perubahan Grade. Gunakan fungsi SUM dan tambahkan subtotal ke Jumlah yang Dikumpulkan.</li>
                <li>Pilih level 2 sehingga Anda hanya melihat subtotal dan total keseluruhan.</li>
            </ol>
            <p>Ketika Anda selesai, buku kerja Anda akan terlihat seperti ini:</p>
            <img src="https://media.gcflearnfree.org/content/5627dca29c7fab1314179c4c_10_21_2015/screen%20shot%202015-11-25%20at%2011.48.52%20am.png" alt="Tantangan Pengelompokan dan Subtotal">'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Tabel',
            'course_id' => '16',
            'desc' => '<h1>Perkenalan</h1>
            <p>
                Setelah Anda memasukkan informasi ke dalam lembar kerja, Anda mungkin ingin memformat data Anda sebagai tabel. Sama seperti pemformatan biasa, tabel dapat meningkatkan tampilan dan nuansa buku kerja Anda, dan juga membantu menata konten serta membuat data Anda lebih mudah digunakan. Excel menyertakan beberapa alat dan gaya tabel yang telah ditentukan sebelumnya, memungkinkan Anda membuat tabel dengan cepat dan mudah.
            </p>
            <p>
            Buka buku kerja latihan kami. <em>Opsional: <a href="https://media.gcflearnfree.org/content/5c0983e677c05003547285b7_12_06_2018/excel_tables_practice.xlsx" download>Unduh buku kerja latihan kami.</a></em>
            </p>
        
            <p>
                Tonton video di bawah untuk mempelajari lebih lanjut tentang bekerja dengan tabel.
            </p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/iroIA8_3soo?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Untuk Memformat Data sebagai Tabel:</h2>
            <ol>
                <li>Pilih sel yang ingin Anda format sebagai tabel. Dalam contoh kita, kita akan memilih rentang sel A2:D9.</li>
                <img src="https://media.gcflearnfree.org/content/563d1309ca7fac0d9c7b3f80_11_06_2015/tables_format_cells.png" alt="Memilih rentang sel A2:D9">
                <li>Dari tab Beranda, klik perintah Format sebagai Tabel di grup Gaya.</li>
                <img src="https://media.gcflearnfree.org/content/563d1309ca7fac0d9c7b3f80_11_06_2015/tables_format_command.png" alt="Format sebagai perintah tabel">
                <li>Pilih gaya tabel dari menu drop-down.</li>
                <img src="https://media.gcflearnfree.org/content/563d1309ca7fac0d9c7b3f80_11_06_2015/tables_format_style.png" alt="Memilih gaya tabel">
                <li>Sebuah kotak dialog akan muncul, mengonfirmasi rentang sel yang dipilih untuk tabel tersebut. Jika tabel Anda memiliki header, centang kotak di samping Tabel saya memiliki header, lalu klik OK.</li>
                <img src="https://media.gcflearnfree.org/content/563d1309ca7fac0d9c7b3f80_11_06_2015/tables_format_dialog.png" alt="Mengkonfirmasi rentang sel">
                <li>Rentang sel akan diformat dalam gaya tabel yang dipilih.</li>
                <img src="https://media.gcflearnfree.org/content/563d1309ca7fac0d9c7b3f80_11_06_2015/tables_format_complete.png" alt="Tabel diformat dalam gaya yang dipilih">
            </ol>
            <p>Tabel menyertakan pemfilteran secara default. Anda dapat memfilter data Anda kapan saja menggunakan panah drop-down di sel header. Untuk mempelajari lebih lanjut, tinjau pelajaran kami tentang Memfilter Data.</p>
        
            <h2>Memodifikasi Tabel</h2>
            <p>Sangat mudah untuk mengubah tampilan dan nuansa tabel apa pun setelah menambahkannya ke lembar kerja. Excel menyertakan beberapa opsi untuk mengkustomisasi tabel, termasuk menambahkan baris atau kolom dan mengubah gaya tabel.</p>
        
            <h3>Untuk Menambahkan Baris atau Kolom ke Tabel:</h3>
            <p>Jika Anda perlu memasukkan lebih banyak konten ke dalam tabel, Anda dapat mengubah ukuran tabel dengan menyertakan baris dan kolom tambahan. Ada dua cara sederhana untuk mengubah ukuran tabel:</p>
            <ol>
                <li>Masukkan konten baru ke baris atau kolom yang berdekatan. Baris atau kolom akan diikat ke dalam tabel secara otomatis.</li>
                <img src="https://media.gcflearnfree.org/content/563d1309ca7fac0d9c7b3f80_11_06_2015/tables_add_manual.png" alt="Menambahkan satu baris">
                <li>Klik dan seret sudut kanan bawah tabel untuk membuat baris atau kolom tambahan.</li>
                <img src="https://media.gcflearnfree.org/content/563d1309ca7fac0d9c7b3f80_11_06_2015/tables_add_handle.png" alt="Menambahkan beberapa baris">
            </ol>
        
            <h3>Untuk Mengubah Gaya Tabel:</h3>
            <ol>
                <li>Pilih sel mana pun di tabel Anda, lalu klik tab Desain.</li>
                <img src="https://media.gcflearnfree.org/content/563d1309ca7fac0d9c7b3f80_11_06_2015/tables_style_tab.png" alt="Navigasi ke tab Desain">
                <li>Temukan grup Gaya Tabel, lalu klik panah tarik-turun Lainnya untuk melihat semua gaya tabel yang tersedia.</li>
                <img src="https://media.gcflearnfree.org/content/563d1309ca7fac0d9c7b3f80_11_06_2015/tables_style_more.png" alt="Lebih banyak gaya tabel">
                <li>Pilih gaya tabel yang diinginkan.</li>
                <img src="https://media.gcflearnfree.org/content/563d1309ca7fac0d9c7b3f80_11_06_2015/tables_style_selection.png" alt="Memilih gaya tabel">
                <li>Gaya tabel akan diterapkan.</li>
                <img src="https://media.gcflearnfree.org/content/563d1309ca7fac0d9c7b3f80_11_06_2015/tables_style_complete.png" alt="Gaya tabel diterapkan">
            </ol>
        
            <h3>Untuk Mengubah Opsi Gaya Tabel:</h3>
            <p>Anda dapat mengaktifkan atau menonaktifkan berbagai opsi untuk mengubah tampilan tabel mana pun. Ada beberapa opsi: Baris Header, Baris Total, Baris BerRibbon, Kolom Pertama, Kolom Terakhir, Kolom BerRibbon, dan Tombol Filter.</p>
            <ol>
                <li>Pilih sel mana pun di tabel Anda, lalu klik tab Desain.</li>
                <li>Centang atau hapus centang opsi yang diinginkan di grup Opsi Gaya Tabel. Dalam contoh kita, kita akan memeriksa Total Row untuk secara otomatis memasukkan total tabel kita.</li>
                <img src="https://media.gcflearnfree.org/content/563d1309ca7fac0d9c7b3f80_11_06_2015/tables_modify_options.png" alt="Opsi gaya tabel">
                <li>Gaya tabel akan diubah. Dalam contoh kita, baris baru telah ditambahkan ke tabel dengan rumus yang secara otomatis menghitung nilai total sel di kolom D.</li>
                <img src="https://media.gcflearnfree.org/content/563d1309ca7fac0d9c7b3f80_11_06_2015/tables_modify_complete.png" alt="Jumlah baris ditambahkan">
            </ol>
            <p>Bergantung pada jenis konten yang Anda miliki—dan gaya tabel yang Anda pilih—opsi ini dapat memengaruhi tampilan tabel Anda dalam berbagai cara. Anda mungkin perlu bereksperimen dengan beberapa opsi untuk menemukan gaya yang Anda inginkan.</p>
        
            <h3>Untuk Menghapus Tabel:</h3>
            <p>Anda dapat menghapus tabel dari buku kerja Anda tanpa kehilangan data apa pun. Namun, hal ini dapat menyebabkan masalah pada jenis pemformatan tertentu, termasuk warna, font, dan baris berRibbon. Sebelum menggunakan opsi ini, bersiaplah untuk memformat ulang sel Anda jika perlu.</p>
            <ol>
                <li>Pilih sel mana pun di tabel Anda, lalu klik tab Desain.</li>
                <li>Klik perintah Convert to Range di grup Tools.</li>
                <img src="https://media.gcflearnfree.org/content/563d1309ca7fac0d9c7b3f80_11_06_2015/tables_remove_command.png" alt="Ubah ke perintah rentang">
                <li>Sebuah kotak dialog akan muncul. Klik Ya.</li>
                <img src="https://media.gcflearnfree.org/content/563d1309ca7fac0d9c7b3f80_11_06_2015/tables_remove_dialog.png" alt="Konfirmasi ubah ke rentang">
                <li>Rentangnya tidak lagi berupa tabel, namun sel akan mempertahankan data dan formatnya.</li>
                <img src="https://media.gcflearnfree.org/content/563d1309ca7fac0d9c7b3f80_11_06_2015/tables_remove_complete.png" alt="Tabel yang dikonversi">
                <li>Untuk memulai ulang pemformatan Anda dari awal, klik perintah Clear pada tab Beranda. Selanjutnya, pilih Clear Formats dari menu.</li>
                <img src="https://media.gcflearnfree.org/content/563d1309ca7fac0d9c7b3f80_11_06_2015/tables_remove_clear.png" alt="Perintah Hapus">
            </ol>
        
            <h2>Tantangan!</h2>
            <ol>
                <li>Buka <a href="https://media.gcflearnfree.org/content/5c0983e677c05003547285b7_12_06_2018/excel_tables_practice.xlsx" download>buku kerja latihan kami</a>.</li>
                <li>Klik tab Tantangan di kiri bawah buku kerja.</li>
                <li>Pilih sel A2:D9 dan format sebagai tabel. Pilih salah satu gaya ringan.</li>
                <li>Sisipkan baris di antara baris 4 dan 5. Pada baris yang baru saja Anda buat, ketik <strong>Empanadas: Banana and Nutella</strong>, dengan harga satuan <strong>$3,25</strong> dan kuantitas <strong>12</strong>.</li>
                <li>Ubah gaya tabel menjadi Table Style Medium 10.</li>
                <li>Di Opsi Gaya Tabel, hapus centang pada baris berRibbon dan centang kolom berRibbon.</li>
            </ol>
            <p>Ketika Anda selesai, buku kerja Anda akan terlihat seperti ini:</p>
            <img src="https://media.gcflearnfree.org/content/563d1309ca7fac0d9c7b3f80_11_06_2015/tables%20challenge.png" alt="Tantangan Tabel">'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Grafik',
            'course_id' => '17',
            'desc' => '  <h1>Perkenalan</h1>
            <p>
                Mungkin sulit untuk menafsirkan buku kerja Excel yang berisi banyak data. Bagan memungkinkan Anda mengilustrasikan data buku kerja Anda secara grafis, yang membuatnya mudah untuk memvisualisasikan perbandingan dan tren.
            </p>
            <p>
            Buka buku kerja latihan kami. <em>Opsional: <a href="https://media.gcflearnfree.org/content/5c09840177c05003547285b9_12_06_2018/excel_charts_practice.xlsx" download>Unduh buku kerja latihan kami.</a></em>
            </p>
            <p>
                Tonton video di bawah ini untuk mempelajari lebih lanjut tentang grafik.
            </p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/_Wu7jYTr1Pk?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"></iframe></div>
            <h2>Memahami Grafik</h2>
            <p>Excel memiliki beberapa tipe bagan, memungkinkan Anda memilih salah satu yang paling sesuai dengan data Anda. Untuk menggunakan grafik secara efektif, Anda harus memahami bagaimana berbagai grafik digunakan.</p>

            <h2>Untuk Menyisipkan Bagan:</h2>
            <ol>
                <li>Pilih sel yang ingin Anda buat bagannya, termasuk judul kolom dan label baris. Sel-sel ini akan menjadi sumber data untuk bagan. Dalam contoh kita, kita akan memilih sel A1:F6.</li>
                <img src="https://media.gcflearnfree.org/content/563ba214ca7fac0d9c7b3f7d_11_05_2015/2015-11-05_14-20-09.png" alt="Memilih sel A1:F6">
                <li>Dari tab Sisipkan, klik perintah Bagan yang diinginkan. Dalam contoh kita, kita akan memilih Column.</li>
                <img src="https://media.gcflearnfree.org/content/563ba214ca7fac0d9c7b3f7d_11_05_2015/2015-11-05_14-33-40.png" alt="Memilih Bagan kolom dari tab Sisipkan">
                <li>Pilih jenis grafik yang diinginkan dari menu drop-down.</li>
                <img src="https://media.gcflearnfree.org/content/563ba214ca7fac0d9c7b3f7d_11_05_2015/2015-11-05_14-41-07.png" alt="Memilih jenis bagan">
                <li>Bagan yang dipilih akan dimasukkan ke dalam lembar kerja.</li>
                <img src="https://media.gcflearnfree.org/content/563ba214ca7fac0d9c7b3f7d_11_05_2015/2015-11-05_14-44-32.png" alt="Bagan dimasukkan ke dalam lembar kerja">
            </ol>
            <p>Jika Anda tidak yakin jenis bagan mana yang akan digunakan, perintah Bagan yang Direkomendasikan akan menyarankan beberapa bagan berdasarkan data sumber.</p>
        
            <h2>Gaya Bagan dan Tata Letak</h2>
            <p>Setelah menyisipkan bagan, ada beberapa hal yang mungkin ingin Anda ubah tentang cara data Anda ditampilkan. Sangat mudah untuk mengedit tata letak dan gaya bagan dari tab Desain.</p>
        
            <h3>Menambahkan Elemen Bagan:</h3>
            <p>Excel memungkinkan Anda menambahkan elemen bagan—termasuk judul bagan, legenda, dan label data—untuk membuat bagan Anda lebih mudah dibaca. Untuk menambahkan elemen bagan, klik perintah Tambahkan Elemen Bagan pada tab Desain, lalu pilih elemen yang diinginkan dari menu tarik-turun.</p>
            <img src="https://media.gcflearnfree.org/content/563ba214ca7fac0d9c7b3f7d_11_05_2015/2015-11-05_15-31-51.png" alt="Memilih perintah Tambahkan Elemen Bagan dari tab Desain">
            <p>Untuk mengedit elemen bagan, seperti judul bagan, cukup klik dua kali placeholder dan mulailah mengetik.</p>
            <img src="https://media.gcflearnfree.org/content/563ba214ca7fac0d9c7b3f7d_11_05_2015/2015-11-05_15-39-48.png" alt="Mengedit judul grafik">
        
            <h3>Menggunakan Tata Letak Cepat:</h3>
            <p>Jika Anda tidak ingin menambahkan elemen bagan satu per satu, Anda bisa menggunakan salah satu tata letak Excel yang telah ditentukan sebelumnya. Cukup klik perintah Quick Layout, lalu pilih tata letak yang diinginkan dari menu drop-down.</p>
            <img src="https://media.gcflearnfree.org/content/563ba214ca7fac0d9c7b3f7d_11_05_2015/2015-11-05_15-43-47.png" alt="Memilih perintah tata letak cepat">
        
            <h3>Mengubah Gaya Bagan:</h3>
            <p>Excel juga menyertakan beberapa gaya bagan, yang memungkinkan Anda dengan cepat mengubah tampilan dan nuansa bagan Anda. Untuk mengubah gaya bagan, pilih gaya yang diinginkan dari grup Gaya Bagan. Anda juga dapat mengeklik panah tarik-turun di sebelah kanan untuk melihat gaya lainnya.</p>
            <img src="https://media.gcflearnfree.org/content/563ba214ca7fac0d9c7b3f7d_11_05_2015/charts_callout1.jpg" alt="Memilih gaya bagan">
        
            <h3>Menggunakan Tombol Pintasan Pemformatan Bagan:</h3>
            <p>Anda juga dapat menggunakan tombol pintasan pemformatan bagan untuk menambahkan elemen bagan dengan cepat, mengubah gaya bagan, dan memfilter data bagan.</p>
            <img src="https://media.gcflearnfree.org/content/563ba214ca7fac0d9c7b3f7d_11_05_2015/chartformatting_callout.jpg" alt="Tombol pintasan pemformatan bagan">
        
            <h2>Opsi Grafik Lainnya</h2>
            <p>Ada banyak cara lain untuk menyesuaikan dan mengatur grafik Anda. Misalnya, Excel memungkinkan Anda mengatur ulang data bagan, mengubah tipe bagan, dan bahkan memindahkan bagan ke lokasi lain di buku kerja.</p>
        
            <h3>Untuk Mengganti Data Baris dan Kolom:</h3>
            <p>Terkadang Anda mungkin ingin mengubah cara diagram mengelompokkan data Anda. Misalnya, pada bagan di bawah, data Penjualan Buku dikelompokkan berdasarkan genre, dengan kolom untuk setiap bulannya. Namun, kita dapat mengganti baris dan kolom sehingga bagan akan mengelompokkan data berdasarkan bulan, dengan kolom untuk setiap genre. Dalam kedua kasus tersebut, bagan berisi data yang sama—hanya saja disusun secara berbeda.</p>
            <img src="https://media.gcflearnfree.org/content/563ba214ca7fac0d9c7b3f7d_11_05_2015/2015-11-05_16-07-49.png" alt="Grafik penjualan buku yang dikelompokkan berdasarkan genre">
            <ol>
                <li>Pilih bagan yang ingin Anda ubah.</li>
                <li>Dari tab Desain, pilih perintah Ganti Baris/Kolom.</li>
                <img src="https://media.gcflearnfree.org/content/563ba214ca7fac0d9c7b3f7d_11_05_2015/2015-11-05_16-04-43.png" alt="Memilih perintah Ganti Baris Kolom">
                <li>Baris dan kolom akan dialihkan. Dalam contoh kita, data kini dikelompokkan berdasarkan bulan, dengan kolom untuk setiap genre.</li>
                <img src="https://media.gcflearnfree.org/content/563ba214ca7fac0d9c7b3f7d_11_05_2015/2015-11-05_16-01-18.png" alt="Penjualan buku dikelompokkan berdasarkan bulan">
            </ol>
        
            <h3>Untuk Mengubah Jenis Bagan:</h3>
            <p>Jika Anda menemukan bahwa data Anda tidak berfungsi dengan baik di bagan tertentu, Anda dapat dengan mudah beralih ke jenis bagan baru. Dalam contoh kita, kita akan mengubah bagan kita dari bagan kolom menjadi bagan garis.</p>
            <ol>
                <li>Dari tab Desain, klik perintah Ubah Tipe Bagan.</li>
                <img src="https://media.gcflearnfree.org/content/563ba214ca7fac0d9c7b3f7d_11_05_2015/2015-11-05_16-11-49.png" alt="Memilih perintah Ubah jenis Bagan dari tab Desain">
                <li>Kotak dialog Ubah Tipe Bagan akan muncul. Pilih tipe dan tata letak bagan baru, lalu klik OK. Dalam contoh kita, kita akan memilih diagram Garis.</li>
                <img src="https://media.gcflearnfree.org/content/563ba214ca7fac0d9c7b3f7d_11_05_2015/2015-11-05_16-14-19.png" alt="Memilih diagram garis">
                <li>Jenis bagan yang dipilih akan muncul. Dalam contoh kita, diagram garis memudahkan untuk melihat tren data penjualan dari waktu ke waktu.</li>
                <img src="https://media.gcflearnfree.org/content/563ba214ca7fac0d9c7b3f7d_11_05_2015/2015-11-05_16-17-52.png" alt="Bagan garis"><h3>Untuk Memindahkan Grafik:</h3>
                <p>Setiap kali Anda menyisipkan bagan baru, bagan tersebut akan muncul sebagai objek pada lembar kerja yang sama yang berisi data sumbernya. Anda bisa dengan mudah memindahkan bagan ke lembar kerja baru untuk membantu mengatur data Anda.</p>
                <ol>
                    <li>Pilih grafik yang ingin Anda pindahkan.</li>
                    <li>Klik tab Design, lalu pilih perintah Move Chart.</li>
                    <img src="https://media.gcflearnfree.org/content/563ba214ca7fac0d9c7b3f7d_11_05_2015/2015-11-05_16-20-29.png" alt="Memilih perintah pindah grafik">
                    <li>Kotak dialog Pindahkan Bagan akan muncul. Pilih lokasi yang diinginkan untuk grafik. Dalam contoh kita, kita akan memilih untuk memindahkannya ke New sheet, yang akan membuat lembar kerja baru.</li>
                    <img src="https://media.gcflearnfree.org/content/563ba214ca7fac0d9c7b3f7d_11_05_2015/2015-11-05_16-25-06.png" alt="Memilih tombol OK untuk menutup kotak dialog">
                    <li>Bagan akan muncul di lokasi yang dipilih. Dalam contoh kita, bagan sekarang muncul di lembar kerja baru.</li>
                    <img src="https://media.gcflearnfree.org/content/563ba214ca7fac0d9c7b3f7d_11_05_2015/2015-11-05_16-29-05.png" alt="Bagan di lembar kerja baru">
                </ol>
                
                <h2>Menjaga Grafik Tetap Mutakhir</h2>
                <p>Secara default, saat Anda menambahkan lebih banyak data ke spreadsheet, diagram mungkin tidak menyertakan data baru. Untuk mengatasinya, Anda dapat menyesuaikan rentang data. Cukup klik bagan, dan itu akan menyorot rentang data di spreadsheet Anda. Anda kemudian dapat mengeklik dan menyeret pengendali di sudut kanan bawah untuk mengubah rentang data.</p>
                <img src="https://media.gcflearnfree.org/content/563ba214ca7fac0d9c7b3f7d_11_05_2015/chart_range_update.png" alt="Tangkapan layar penyesuaian rentang data">
                
                <p>Jika Anda sering menambahkan lebih banyak data ke spreadsheet, mungkin akan membosankan untuk memperbarui rentang data. Untungnya, ada cara yang lebih mudah. Cukup format data sumber Anda sebagai tabel, lalu buat bagan berdasarkan tabel tersebut. Saat Anda menambahkan lebih banyak data di bawah tabel, data tersebut secara otomatis akan disertakan dalam tabel dan diagram, menjaga semuanya tetap konsisten dan terkini.</p>
                
                <p>Tonton video di bawah ini untuk mempelajari cara menggunakan tabel agar grafik selalu diperbarui.</p>
                
                <h2>Tantangan!</h2>
                <p>Buka buku kerja latihan kami.</p>
                <ol>
                    <li>Buka <a href="https://media.gcflearnfree.org/content/5c09840177c05003547285b9_12_06_2018/excel_charts_practice.xlsx" download>buku kerja latihan kami</a>.</li>
                    <li>Pilih sel A1:E6 dan masukkan bagan Kolom Tergugus 2D.</li>
                    <li>Ubah judul grafik menjadi Penjualan September hingga Desember.</li>
                    <li>Gunakan perintah Ganti Baris/Kolom. Kolom sekarang harus dikelompokkan berdasarkan bulan, dengan warna berbeda untuk setiap tenaga penjualan.</li>
                    <li>Pindahkan bagan ke lembar baru.</li>
                    <li>Ubah jenis bagan menjadi garis dengan penanda.</li>
                    <li>Gunakan perintah Quick Layout untuk mengubah tata letak grafik.</li>
                </ol>
                <p>Ketika Anda selesai, buku kerja Anda akan terlihat seperti ini:</p>
                <img src="https://media.gcflearnfree.org/content/563ba214ca7fac0d9c7b3f7d_11_05_2015/screen%20shot%202015-11-30%20at%202.20.01%20pm.png" alt="Tangkapan layar penyesuaian rentang data">'
                
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Pemformatan Bersyarat',
            'course_id' => '18',
            'desc' => '    <h1>Perkenalan</h1>
            <p>Katakanlah Anda memiliki lembar kerja dengan ribuan baris data. Akan sangat sulit untuk melihat pola dan tren hanya dengan memeriksa informasi mentahnya. Mirip dengan bagan dan grafik mini, pemformatan bersyarat menyediakan cara untuk memvisualisasikan data dan membuat lembar kerja lebih mudah dipahami.</p>
            </p>
            Buka buku kerja latihan kami. <em>Opsional: <a href="https://media.gcflearnfree.org/content/5c09849c77c05003547285bc_12_06_2018/excel_conditionalformatting_practice.xlsx" download>Unduh buku kerja latihan kami.</a></em>
            </p>
            <p>
                Tonton video di bawah ini untuk mempelajari lebih lanjut tentang grafik.
            </p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/zfQ8uOBoIj8?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Memahami Pemformatan Bersyarat</h2>
            <p>Pemformatan bersyarat memungkinkan Anda menerapkan pemformatan secara otomatis—seperti warna, ikon, dan bilah data—ke satu atau beberapa sel berdasarkan nilai sel. Untuk melakukan ini, Anda harus membuat aturan pemformatan bersyarat. Misalnya, aturan pemformatan bersyarat mungkin: Jika nilainya kurang dari $2000, warnai sel dengan warna merah. Dengan menerapkan aturan ini, Anda akan dapat dengan cepat melihat sel mana yang berisi nilai kurang dari $2000.</p>
            <img src="https://media.gcflearnfree.org/content/56337061927faf14d04cade7_10_30_2015/conditional_formatting_understanding.png" alt="Pemformatan Bersyarat di Excel">
        
            <h3>Untuk Membuat Aturan Pemformatan Bersyarat:</h3>
            <ol>
                <li>Pilih sel yang diinginkan untuk aturan pemformatan bersyarat.</li>
                <img src="https://media.gcflearnfree.org/content/56337061927faf14d04cade7_10_30_2015/conditional_formatting_create_select.png" alt="Spreadsheet setelah menyelesaikan Tantangan">
                <li>Dari tab Beranda, klik perintah Pemformatan Bersyarat. Menu tarik-turun akan muncul.</li>
                <li>Arahkan mouse ke jenis pemformatan bersyarat yang diinginkan, lalu pilih aturan yang diinginkan dari menu yang muncul.</li>
                <img src="https://media.gcflearnfree.org/content/56337061927faf14d04cade7_10_30_2015/conditional_formatting_create_menu.png" alt="Spreadsheet setelah menyelesaikan Tantangan">
                <li>Sebuah kotak dialog akan muncul. Masukkan nilai yang diinginkan ke dalam kolom kosong.</li>
                <li>Pilih gaya pemformatan dari menu tarik-turun.</li>
                <img src="https://media.gcflearnfree.org/content/56337061927faf14d04cade7_10_30_2015/conditional_formatting_create_dialog.pngformatted-spreadsheet.png" alt="Spreadsheet setelah menyelesaikan Tantangan">
                <li>Pemformatan bersyarat akan diterapkan ke sel yang dipilih.</li>
                <img src="https://media.gcflearnfree.org/content/56337061927faf14d04cade7_10_30_2015/conditional_formatting_create_result.png" alt="Spreadsheet setelah menyelesaikan Tantangan">
            </ol>
        
            <!-- Untuk menyisipkan gambar-gambar atau video, gunakan tag <img> atau <video> -->
        
            <h2>Preset Pemformatan Bersyarat</h2>
            <p>Excel memiliki beberapa gaya yang telah ditentukan sebelumnya—atau preset—yang dapat Anda gunakan untuk menerapkan pemformatan bersyarat dengan cepat ke data Anda. Mereka dikelompokkan menjadi tiga kategori:</p>
            <ul>
                <li><strong>Bilah Data:</strong> adalah bilah horizontal yang ditambahkan ke setiap sel, seperti grafik batang.</li>
                <img src="https://media.gcflearnfree.org/content/56337061927faf14d04cade7_10_30_2015/conditional_formatting_data_bars.png" alt="Spreadsheet setelah menyelesaikan Tantangan">
                <li><strong>Skala Warna:</strong> mengubah warna setiap sel berdasarkan nilainya. Setiap skala warna menggunakan gradien dua atau tiga warna.</li>
                <img src="https://media.gcflearnfree.org/content/56337061927faf14d04cade7_10_30_2015/conditional_formatting_color_scales.png" alt="Spreadsheet setelah menyelesaikan Tantangan">
                <li><strong>Kumpulan Ikon:</strong> menambahkan ikon tertentu ke setiap sel berdasarkan nilainya.</li>
                <img src="https://media.gcflearnfree.org/content/56337061927faf14d04cade7_10_30_2015/conditional_formatting_icon_sets.png" alt="Spreadsheet setelah menyelesaikan Tantangan">
            </ul>
        
            <!-- Gunakan gambar atau video yang relevan -->
        
            <h3>Untuk Menghapus Pemformatan Bersyarat:</h3>
            <ol>
                <li>Pilih sel yang diinginkan untuk aturan pemformatan bersyarat.</li>
                <img src="https://media.gcflearnfree.org/content/56337061927faf14d04cade7_10_30_2015/conditional_formatting_preset_select.png" alt="Spreadsheet setelah menyelesaikan Tantangan">
                <li>Klik perintah Pemformatan Bersyarat. Menu tarik-turun akan muncul.</li>
                <li>Arahkan mouse ke Clear Rules, lalu pilih aturan mana yang ingin Anda hapus.</li>
                <img src="https://media.gcflearnfree.org/content/56337061927faf14d04cade7_10_30_2015/conditional_formatting_remove_menu.png" alt="Spreadsheet setelah menyelesaikan Tantangan">
                <li>Pemformatan bersyarat akan dihapus.</li>
                <img src="https://media.gcflearnfree.org/content/56337061927faf14d04cade7_10_30_2015/conditional_formatting_remove_result.png" alt="Spreadsheet setelah menyelesaikan Tantangan">
            </ol>
        
            <!-- Masukkan gambar atau video sesuai kebutuhan -->
        
            <h2>Tantangan!</h2>
            <</p>
             <em><a href="https://media.gcflearnfree.org/content/5c09849c77c05003547285bc_12_06_2018/excel_conditionalformatting_practice.xlsx" download>Unduh buku kerja latihan kami.</a></em>
            </p>
            <ol>
                <li>Klik tab lembar kerja Tantangan di kiri bawah buku kerja.</li>
                <li>Pilih sel B3:J17.</li>
                <li>Katakanlah Anda adalah gurunya dan ingin melihat dengan mudah semua nilai yang berada di bawah batas kelulusan. Terapkan Pemformatan Bersyarat sehingga Menyorot Sel yang berisi nilai Kurang dari 70 dengan isian merah terang.</li>
                <li>Sekarang Anda ingin melihat bagaimana nilainya dibandingkan satu sama lain. Di bawah tab Pemformatan Bersyarat, pilih Kumpulan Ikon yang disebut 3 Simbol (Dilingkari). Petunjuk: Nama kumpulan ikon akan muncul saat Anda mengarahkan kursor ke atasnya.</li>
            </ol>
            <p>Spreadsheet Anda akan terlihat seperti ini:</p>
            <img src="https://media.gcflearnfree.org/content/56337061927faf14d04cade7_10_30_2015/conditional_formatting_challenge.png" alt="Spreadsheet setelah menyelesaikan Tantangan">'
                
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Memeriksa dan Melindungi Buku Kerja',
            'course_id' => '19',
            'desc' => '    <h1>Perkenalan</h1>
            <p>Sebelum membagikan buku kerja, Anda sebaiknya memastikan buku tersebut tidak menyertakan kesalahan ejaan atau informasi apa pun yang ingin Anda rahasiakan. Untungnya, Excel menyertakan beberapa alat untuk membantu menyelesaikan dan melindungi buku kerja Anda, termasuk fitur Pemeriksa Dokumen dan Proteksi Buku Kerja.</p>
            <</p>
            Buka buku kerja latihan kami. <em>Opsional: <a href="https://media.gcflearnfree.org/content/5c0984ee77c05003547285c0_12_06_2018/excel_inspectprotect_practice.xlsx" download>Unduh buku kerja latihan kami.</a></em>
            </p>
            <p>Tonton video di bawah ini untuk mempelajari selengkapnya tentang memeriksa dan melindungi buku kerja.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/fsXS_VSuBvs?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Pemeriksa Dokumen</h2>
            <p>Setiap kali Anda membuat atau mengedit buku kerja, informasi pribadi tertentu mungkin ditambahkan ke file secara otomatis. Anda bisa menggunakan Pemeriksa Dokumen untuk menghapus informasi ini sebelum berbagi buku kerja dengan orang lain.</p>
            <p>Karena beberapa perubahan mungkin bersifat permanen, sebaiknya simpan salinan tambahan buku kerja Anda sebelum menggunakan Pemeriksa Dokumen untuk menghapus informasi.</p>
            <p>Untuk menggunakan Pemeriksa Dokumen:</p>
            <ol>
                <li>Klik tab File untuk mengakses tampilan Backstage.
                </li>
                <li>Dari panel Info, klik Periksa Masalah, lalu pilih Periksa Dokumen dari menu drop-down.
                    <img src="https://media.gcflearnfree.org/content/5644bbafca7fae0d9c67697d_11_12_2015/inspecting_inspector_info.png" alt="Pilih Periksa Dokumen">
                </li>
                <li>Anda mungkin diminta untuk menyimpan file Anda sebelum menjalankan Pemeriksa Dokumen.
                    <img src="https://media.gcflearnfree.org/content/5644bbafca7fae0d9c67697d_11_12_2015/inspecting_inspector_warning.png" alt="Peringatan Pemeriksa Dokumen">
                </li>
                <li>Pemeriksa Dokumen akan muncul. Centang atau hapus centang pada kotak, bergantung pada konten yang ingin Anda tinjau, lalu klik Periksa. Dalam contoh kita, kita akan membiarkan semuanya dipilih.
                    <img src="https://media.gcflearnfree.org/content/5644bbafca7fae0d9c67697d_11_12_2015/inspecting_inspector_inspect.png" alt="Memeriksa buku kerja">
                </li>
                <li>Hasil pemeriksaan akan muncul. Dalam contoh kita, kita bisa melihat bahwa buku kerja kita berisi komentar dan beberapa informasi pribadi, jadi kita akan mengklik Hapus Semua pada kedua item untuk menghapus informasi ini dari buku kerja.
                    <img src="https://media.gcflearnfree.org/content/5644bbafca7fae0d9c67697d_11_12_2015/inspecting_inspector_results.png" alt="Menghapus informasi pribadi dari buku kerja">
                </li>
                <li>Setelah selesai, klik Tutup.
                    <img src="https://media.gcflearnfree.org/content/5644bbafca7fae0d9c67697d_11_12_2015/inspecting_inspector_close2.png" alt="Menutup Pemeriksa Dokumen">
                </li>
            </ol>
        
            <h2>Melindungi buku kerja Anda</h2>
            <p>Secara default, siapa pun yang memiliki akses ke buku kerja Anda akan bisa membuka, menyalin, dan mengedit kontennya kecuali Anda memproteksinya. Ada beberapa cara untuk memproteksi buku kerja, bergantung pada kebutuhan Anda.</p>
            <p>Untuk melindungi buku kerja Anda:</p>
            <ol>
                <li>Klik tab File untuk mengakses tampilan Backstage.
                </li>
                <li>Dari panel Info, klik perintah Protect Workbook.
                </li>
                <li>Di menu tarik-turun, pilih opsi yang paling sesuai dengan kebutuhan Anda. Dalam contoh kita, kita akan memilih Tandai sebagai Final. Menandai buku kerja Anda sebagai final adalah cara yang baik untuk mencegah orang lain mengedit buku kerja, sementara opsi lainnya memberi Anda kontrol lebih besar jika diperlukan.
                    <img src="https://media.gcflearnfree.org/content/5644bbafca7fae0d9c67697d_11_12_2015/inspecting_protect_info.png" alt="Memilih Tandai sebagai Final">
                </li>
                <li>Sebuah kotak dialog akan muncul, meminta Anda untuk menyimpan. Klik Oke.
                    <img src="https://media.gcflearnfree.org/content/5644bbafca7fae0d9c67697d_11_12_2015/inspecting_protect_save_dialog.png" alt="Mengklik OK untuk menyimpan buku kerja">
                </li>
                <li>Kotak dialog lain akan muncul. Klik Oke.
                    <img src="https://media.gcflearnfree.org/content/5644bbafca7fae0d9c67697d_11_12_2015/inspecting_protect_message_dialog.png" alt="Mengklik Oke">
                </li>
                <li>Buku kerja akan ditandai sebagai final.
                    <img src="https://media.gcflearnfree.org/content/5644bbafca7fae0d9c67697d_11_12_2015/inspecting_protect_final.png" alt="Buku kerja ditandai sebagai final">
                </li>
            </ol>
        
            <h2>Tantangan!</h2>
            <ol>
                <li>Buka <a href="https://media.gcflearnfree.org/content/5c0984ee77c05003547285c0_12_06_2018/excel_inspectprotect_practice.xlsx" download>buku kerja latihan kami</a>.</li>
                <li>Gunakan Pemeriksa Dokumen untuk memeriksa buku kerja dan menghapus apa pun yang ditemukannya.
                </li>
                <li>Lindungi buku kerja dengan Menandai Sebagai Final.
                </li>
            </ol>
            <p>Ketika Anda selesai, buku kerja Anda akan terlihat seperti ini:</p>
            <img src="https://media.gcflearnfree.org/content/5644bbafca7fae0d9c67697d_11_12_2015/screen%20shot%202015-11-30%20at%201.09.16%20pm.png" alt="Menandai Sebagai Final">'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Memulai dengan Word',
            'course_id' => '20',
            'desc' => '<h1>Pengenalan</h1>
            <p>Microsoft Word 2016 adalah aplikasi pengolah kata yang memungkinkan Anda membuat berbagai dokumen, termasuk surat, resume, dan lainnya. Dalam pelajaran ini, Anda akan belajar bagaimana menavigasi antarmuka Word dan menjadi akrab dengan beberapa fitur terpentingnya, seperti Ribbon, Quick Access Toolbar, dan Backstage view.</p>
            <p>Tonton video di bawah ini untuk lebih mengenal Word 2016.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/j-ZAVHk5SaU?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span><span id="selection-marker-1" class="redactor-selection-marker"></span><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div> 
            <h2>Mengenal Word 2016</h2>
            <p>Word 2016 mirip dengan Word 2013 dan Word 2010. Jika Anda sebelumnya telah menggunakan salah satu versi tersebut, maka Word 2016 seharusnya terasa familiar. Namun jika Anda baru mengenal Word atau memiliki lebih banyak pengalaman dengan versi yang lebih lama, Anda sebaiknya meluangkan waktu untuk mengenal antarmuka Word 2016.</p>
            
            <h3>Antarmuka Word</h3>
            <p>Saat Anda membuka Word untuk pertama kali, Start Screen akan muncul. Dari sini, Anda dapat membuat dokumen baru, memilih template, dan mengakses dokumen yang baru saja diedit. Dari Start Screen, temukan dan pilih Blank document untuk mengakses antarmuka Word.</p>
            <div class="example">
                <img src="https://media.gcflearnfree.org/content/5690213b4ba91213b0054eb9_01_08_2016/create_new_blank.png" alt="Membuat dokumen baru">
            </div>
        
            <h3>Bekerja dengan Lingkungan Word</h3>
            <p>Seperti versi terbaru lainnya, Word 2016 terus menggunakan fitur seperti Ribbon dan Quick Access Toolbar—di mana Anda akan menemukan perintah untuk melakukan tugas-tugas umum di Word—serta Backstage view.</p>
        
            <h3>Ribbon</h3>
            <p>Word menggunakan sistem Ribbon bertab alih-alih menu tradisional. Ribbon berisi beberapa tab, yang dapat Anda temukan di dekat bagian atas jendela Word.</p>
            <div class="example">
                <img src="https://media.gcflearnfree.org/content/5690213b4ba91213b0054eb9_01_08_2016/start_ribbon_tabs.png" alt="Tab pada Ribbon">
            </div>
            <p>Setiap tab berisi beberapa grup perintah terkait. Misalnya, grup Font pada tab Home berisi perintah untuk memformat teks dalam dokumen Anda.</p>
            <div class="example">
                <img src="https://media.gcflearnfree.org/content/5690213b4ba91213b0054eb9_01_08_2016/start_ribbon_group.png" alt="Grup Font pada tab Home">
            </div>
            <p>Beberapa grup juga memiliki panah kecil di sudut kanan bawah yang dapat Anda klik untuk melihat lebih banyak opsi.</p>
            <div class="example">
                <img src="https://media.gcflearnfree.org/content/5690213b4ba91213b0054eb9_01_08_2016/start_ribbon_arrow.png" alt="Mengklik panah untuk melihat lebih banyak perintah grup">
            </div>
        
            <h4>Menampilkan dan Menyembunyikan Ribbon</h4>
            <p>Jika Anda merasa Ribbon memakan terlalu banyak ruang layar, Anda dapat menyembunyikannya. Untuk melakukan ini, klik panah Ribbon Display Options di sudut kanan atas Ribbon, lalu pilih opsi yang diinginkan dari menu drop-down:</p>
            <ul>
                <li>Auto-hide Ribbon: Menampilkan dokumen Anda dalam mode layar penuh dan sepenuhnya menyembunyikan Ribbon dari tampilan. Untuk menampilkan Ribbon, klik perintah Expand Ribbon di bagian atas layar.</li>
                <li>Show Tabs: Menyembunyikan semua grup perintah saat tidak digunakan, tetapi tab akan tetap terlihat. Untuk menampilkan Ribbon, cukup klik sebuah tab.</li>
                <li>Show Tabs and Commands: Memaksimalkan Ribbon. Semua tab dan perintah akan terlihat. Opsi ini dipilih secara default saat Anda membuka Word untuk pertama kali.</li>
            </ul>
            <div class="example" id="auto-hide-ribbon">
                <img src="https://media.gcflearnfree.org/content/5690213b4ba91213b0054eb9_01_08_2016/start_ribbon_tellme.png" alt="Auto-hide Ribbon">
            </div>
            <p>Untuk mempelajari cara menambahkan tab dan perintah kustom ke Ribbon, tinjau tambahan kami tentang Customizing the Ribbon.</p>
        
            <h3>Menggunakan Fitur Tell me</h3>
            <p>Jika Anda kesulitan menemukan perintah yang Anda inginkan, fitur Tell Me dapat membantu. Fitur ini bekerja seperti bilah pencarian biasa: Ketik apa yang Anda cari, dan daftar opsi akan muncul. Anda kemudian dapat menggunakan perintah langsung dari menu tanpa harus mencarinya di Ribbon.</p>
            <div class="example">
                <img src="https://media.gcflearnfree.org/content/5690213b4ba91213b0054eb9_01_08_2016/start_ribbon_tellme.png" alt="Menggunakan fitur Tell Me">
            </div>
        
            <h3>Quick Access Toolbar</h3>
            <p>Terletak tepat di atas Ribbon, Quick Access Toolbar memungkinkan Anda mengakses perintah umum tidak peduli tab mana yang dipilih. Secara default, toolbar ini menampilkan perintah Save, Undo, dan Redo, tetapi Anda dapat menambahkan perintah lain sesuai kebutuhan Anda.</p>
        
            <h4>Untuk menambahkan perintah ke Quick Access Toolbar:</h4>
            <ol>
                <li>Klik panah drop-down di sebelah kanan Quick Access Toolbar.</li>
                <img src="https://media.gcflearnfree.org/content/5690213b4ba91213b0054eb9_01_08_2016/start_quick_start.png" alt="Menambahkan perintah ke Quick Access Toolbar">
                <li>Pilih perintah yang ingin Anda tambahkan dari menu.</li>
                <img src="https://media.gcflearnfree.org/content/5690213b4ba91213b0054eb9_01_08_2016/start_quick_print.png" alt="Menambahkan perintah ke Quick Access Toolbar">
            </ol>
            <p>Perintah akan ditambahkan ke Quick Access Toolbar.</p>
            <div class="example">
                <img src="https://media.gcflearnfree.org/content/5690213b4ba91213b0054eb9_01_08_2016/start_quick_done.png" alt="Perintah Quick Print pada Quick Access Toolbar">
            </div>
        
            <h3>Ruler</h3>
            <p>Ruler terletak di bagian atas dan kiri dokumen Anda. Ini memudahkan Anda untuk menyesuaikan dokumen dengan presisi. Jika Anda mau, Anda dapat menyembunyikan Ruler untuk menciptakan lebih banyak ruang layar.</p>
        
            <h4>Untuk menampilkan atau menyembunyikan Ruler:</h4>
            <ol>
                <li>Klik tab View.</li>
                <img src="https://media.gcflearnfree.org/content/5690213b4ba91213b0054eb9_01_08_2016/start_ruler_tab.png" alt="Mengaktifkan Ruler">
                <li>Klik kotak centang di sebelah Ruler untuk menampilkan atau menyembunyikan Ruler.</li>
            </ol>
            <div class="example" id="toggle-ruler">
                <img src="https://media.gcflearnfree.org/content/5690213b4ba91213b0054eb9_01_08_2016/start_ruler_done.png" alt="Mengaktifkan Ruler">
            </div>
        
            <h3>Backstage View</h3>
            <p>Backstage view memberi Anda berbagai opsi untuk menyimpan, membuka file, mencetak, dan membagikan dokumen Anda. Untuk mengakses Backstage view, klik tab File pada Ribbon.</p>
            <div class="example">
                <img src="https://media.gcflearnfree.org/content/5690213b4ba91213b0054eb9_01_08_2016/start_backstage_file.png" alt="Mengklik tab File">
            </div>
            <p>Klik tombol di bawah ini untuk mempelajari lebih lanjut tentang menggunakan Backstage view.</p>
            <div class="example">
                <img src="https://media.gcflearnfree.org/content/5690213b4ba91213b0054eb9_01_08_2016/start_backstage_lg.png" alt="Backstage view">
            </div>
        
            <h3>Dokumen Views dan Zooming</h3>
            <p>Word memiliki berbagai opsi tampilan yang mengubah cara dokumen Anda ditampilkan. Anda dapat memilih untuk melihat dokumen dalam Read Mode, Print Layout, atau Web Layout. Tampilan ini dapat berguna untuk berbagai tugas, terutama jika Anda berencana mencetak dokumen. Anda juga dapat memperbesar dan memperkecil untuk membuat dokumen lebih mudah dibaca.</p>
        
            <h4>Berpindah antar Tampilan Dokumen</h4>
            <p>Berpindah antar tampilan dokumen sangat mudah. Cukup temukan dan pilih perintah tampilan dokumen yang diinginkan di sudut kanan bawah jendela Word.</p>
            <ul>
                <li>Read Mode: Tampilan ini membuka dokumen dalam layar penuh. Tampilan ini bagus untuk membaca teks dalam jumlah besar atau sekadar meninjau pekerjaan Anda.</li>
                <li>Print Layout: Ini adalah tampilan dokumen default di Word. Ini menunjukkan bagaimana dokumen akan terlihat di halaman yang dicetak.</li>
                <li>Web Layout: Tampilan ini menampilkan dokumen sebagai halaman web, yang dapat berguna jika Anda menggunakan Word untuk menerbitkan konten online.</li>
            </ul>
            <div class="example" id="read-mode">
                <img src="https://media.gcflearnfree.org/content/5690213b4ba91213b0054eb9_01_08_2016/start_view_read.png" alt="Read Mode">
            </div>
            <div class="example" id="print-layout">
                <img src="https://media.gcflearnfree.org/content/5690213b4ba91213b0054eb9_01_08_2016/start_view_print.png" alt="Print Layout Mode">
            </div>
            <div class="example" id="web-layout">
                <img src="https://media.gcflearnfree.org/content/5690213b4ba91213b0054eb9_01_08_2016/start_view_web.png" alt="Web Layout Mode">
            </div>
        
            <h4>Memperbesar dan Memperkecil</h4>
            <p>Untuk memperbesar atau memperkecil, klik dan seret slider kontrol zoom di sudut kanan bawah jendela Word. Anda juga dapat memilih perintah + atau - untuk memperbesar atau memperkecil dalam inkrement yang lebih kecil. Angka di sebelah slider menampilkan persentase zoom saat ini, yang juga disebut tingkat zoom.</p>
            <div class="example">
                <img src="https://media.gcflearnfree.org/content/5690213b4ba91213b0054eb9_01_08_2016/start_zoom.png" alt="Menggunakan Zoom Slider">
            </div>
        
            <h2>Tantangan!</h2>
            <ol>
                <li>Buka Word 2016, dan buat dokumen kosong.</li>
                <li>Ubah Ribbon Display Options menjadi Show Tabs.</li>
                <li>Menggunakan Customize Quick Access Toolbar, tambahkan New, Quick Print, dan Spelling & Grammar.</li>
                <li>Di bilah Tell me, ketik Shape dan tekan Enter.</li>
                <li>Pilih bentuk dari menu, dan klik dua kali di suatu tempat di dokumen Anda.</li>
                <li>Tampilkan Ruler jika belum terlihat.</li>
                <li>Perbesar dokumen hingga 120%.</li>
                <li>Ubah tampilan dokumen menjadi Web Layout.</li>
            </ol>
            <p>Setelah selesai, dokumen Anda harus terlihat seperti ini:</p>
            <div class="example">
                <img src="https://media.gcflearnfree.org/content/5690213b4ba91213b0054eb9_01_08_2016/word2016_gettingtoknow3_img.png" alt="Getting To Know Challenge">
            </div>
            <ol start="9">
                <li>Ubah Ribbon Display Options kembali ke Show Tabs and Commands, dan ubah Tampilan Dokumen kembali ke Print Layout.</li>
            </ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Membuat dan Membuka Dokumen',
            'course_id' => '21',
            'desc' => ' <h1>Pengenalan</h1>
            <p>File Word disebut dokumen. Setiap kali Anda memulai proyek baru di Word, Anda perlu membuat dokumen baru, yang bisa berupa kosong atau dari template. Anda juga perlu tahu cara membuka dokumen yang sudah ada.</p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang membuat dan membuka dokumen di Word.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/PafCMUVH_OA?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Untuk membuat dokumen kosong baru:</h2>
            <p>Saat memulai proyek baru di Word, Anda sering ingin memulai dengan dokumen kosong baru.</p>
            <ol>
                <li>Pilih tab File untuk mengakses Backstage view.</li>
                <div class="example">
                <img src="https://media.gcflearnfree.org/content/568bf73d8d7fa91e7c8d89a5_01_05_2016/create_new_file.png" alt="Membuat dokumen kosong baru">
                </div>
                <li>Klik Baru, lalu klik Dokumen kosong.</li>
                <div class="example">
                <img src="https://media.gcflearnfree.org/content/568bf73d8d7fa91e7c8d89a5_01_05_2016/create_new_blank.png" alt="Membuat dokumen kosong baru">
                </div>
                <li>Dokumen kosong baru akan muncul.</li>
            </ol>
        
            <h2>Untuk membuat dokumen baru dari template:</h2>
            <p>Template adalah dokumen yang sudah dirancang sebelumnya yang dapat Anda gunakan untuk membuat dokumen baru dengan cepat. Template sering kali mencakup pemformatan dan desain khusus, sehingga dapat menghemat banyak waktu dan usaha saat memulai proyek baru.</p>
            <ol>
                <li>Klik tab File untuk mengakses Backstage view, lalu pilih Baru.</li>
                <li>Beberapa template akan muncul di bawah opsi Dokumen kosong. Anda juga dapat menggunakan bilah pencarian untuk mencari sesuatu yang lebih spesifik. Dalam contoh ini, kita akan mencari template pamflet.</li>
                <div class="example">
                    <img src="https://media.gcflearnfree.org/content/568bf73d8d7fa91e7c8d89a5_01_05_2016/new_template_start.png" alt="Mencari template tertentu">
                </div>
                <li>Saat Anda menemukan sesuatu yang Anda sukai, pilih template untuk melihat pratinjaunya.</li>
                <div class="example">
                    <img src="https://media.gcflearnfree.org/content/568bf73d8d7fa91e7c8d89a5_01_05_2016/new_template_search_.jpg" alt="Mengklik template untuk melihat pratinjau">
                </div>
                <li>Pratinjau template akan muncul. Klik Buat untuk menggunakan template yang dipilih.</li>
                <div class="example">
                    <img src="https://media.gcflearnfree.org/content/568bf73d8d7fa91e7c8d89a5_01_05_2016/new_template_create.jpg" alt="Membuat dokumen dari template">
                </div>
                <li>Dokumen baru akan muncul dengan template yang dipilih.</li>
            </ol>
            <p>Anda juga dapat menelusuri template menurut kategori setelah melakukan pencarian.</p>
            <div class="example">
                <img src="https://media.gcflearnfree.org/content/568bf73d8d7fa91e7c8d89a5_01_05_2016/new_template_category_splat.png" alt="Menelusuri template menurut kategori">
            </div>
        
            <h2>Untuk membuka dokumen yang sudah ada:</h2>
            <p>Selain membuat dokumen baru, Anda sering kali perlu membuka dokumen yang telah disimpan sebelumnya. Untuk mempelajari lebih lanjut tentang menyimpan dokumen, kunjungi pelajaran kami tentang Menyimpan dan Berbagi Dokumen.</p>
            <ol>
                <li>Arahkan ke Backstage view, lalu klik Buka.</li>
                <div class="example">
                    <img src="https://media.gcflearnfree.org/content/568bf73d8d7fa91e7c8d89a5_01_05_2016/create_open_command.png" alt="Mengklik perintah Buka di Backstage view">
                </div>
                <li>Pilih PC ini, lalu klik Browse. Atau, Anda dapat memilih OneDrive untuk membuka file yang disimpan di OneDrive Anda.</li>
                <div class="example">
                    <img src="https://media.gcflearnfree.org/content/568bf73d8d7fa91e7c8d89a5_01_05_2016/new_open_browse.png" alt="Memilih Browse untuk mencari file yang akan dibuka">
                </div>
                <li>Kotak dialog Buka akan muncul. Temukan dan pilih dokumen Anda, lalu klik Buka.</li>
                <div class="example">
                    <img src="https://media.gcflearnfree.org/content/568bf73d8d7fa91e7c8d89a5_01_05_2016/new_open_select.png" alt="Membuka file yang sudah ada">
                </div>
                <li>Dokumen yang dipilih akan muncul.</li>
            </ol>
            <p>Kebanyakan fitur di Microsoft Office, termasuk Word, diarahkan untuk menyimpan dan berbagi dokumen secara online. Ini dilakukan dengan OneDrive, yang merupakan ruang penyimpanan online untuk dokumen dan file Anda. Jika Anda ingin menggunakan OneDrive, pastikan Anda masuk ke Word dengan akun Microsoft Anda. Tinjau pelajaran kami tentang Memahami OneDrive untuk mempelajari lebih lanjut.</p>
        
            <h2>Untuk menyematkan dokumen:</h2>
            <p>Jika Anda sering bekerja dengan dokumen yang sama, Anda dapat menyematkannya ke Backstage view untuk akses cepat.</p>
            <ol>
                <li>Arahkan ke Backstage view, klik Buka, lalu pilih Terbaru.</li>
                <li>Daftar dokumen yang baru saja diedit akan muncul. Arahkan mouse ke dokumen yang ingin Anda sematkan, lalu klik ikon pin.</li>
                <div class="example">
                    <img src="https://media.gcflearnfree.org/content/568bf73d8d7fa91e7c8d89a5_01_05_2016/new_pin_start.png" alt="Menyematkan dokumen">
                </div>
                <li>Dokumen akan tetap ada dalam daftar dokumen terbaru sampai dilepas. Untuk melepas dokumen, klik ikon pin lagi.</li>
                <div class="example">
                    <img src="https://media.gcflearnfree.org/content/568bf73d8d7fa91e7c8d89a5_01_05_2016/new_pin_unpin.png" alt="Melepas sematan dokumen">
                </div>
            </ol>
        
            <h2>Mode Kompatibilitas</h2>
            <p>Terkadang Anda perlu bekerja dengan dokumen yang dibuat dalam versi Microsoft Word sebelumnya, seperti Word 2010 atau Word 2007. Saat Anda membuka jenis dokumen ini, mereka akan muncul dalam Mode Kompatibilitas.</p>
            <p>Mode Kompatibilitas menonaktifkan fitur tertentu, sehingga Anda hanya dapat mengakses perintah yang ditemukan dalam program yang digunakan untuk membuat dokumen tersebut. Misalnya, jika Anda membuka dokumen yang dibuat di Word 2007, Anda hanya dapat menggunakan tab dan perintah yang ditemukan di Word 2007.</p>
            <div class="example">
                <img src="https://media.gcflearnfree.org/content/568bf73d8d7fa91e7c8d89a5_01_05_2016/new_convert_compare_crop.png" alt="Mode Kompatibilitas vs Mode Normal">
            </div>
            <p>Untuk keluar dari Mode Kompatibilitas, Anda perlu mengonversi dokumen ke jenis versi saat ini. Namun, jika Anda berkolaborasi dengan orang lain yang hanya memiliki akses ke versi Word yang lebih lama, sebaiknya biarkan dokumen dalam Mode Kompatibilitas sehingga formatnya tidak berubah.</p>
            <p>Anda dapat meninjau halaman dukungan ini dari Microsoft untuk mempelajari lebih lanjut tentang fitur mana yang dinonaktifkan dalam Mode Kompatibilitas.</p>
        
            <h2>Untuk mengonversi dokumen:</h2>
            <p>Jika Anda ingin mengakses semua fitur Word 2016, Anda dapat mengonversi dokumen ke format file 2016.</p>
            <ol>
                <li>Klik tab File untuk mengakses Backstage view, lalu temukan dan pilih perintah Convert.</li>
                <div class="example">
                    <img src="https://media.gcflearnfree.org/content/568bf73d8d7fa91e7c8d89a5_01_05_2016/new_convert_command.png" alt="Mengklik perintah Convert">
                </div>
                <li>Kotak dialog akan muncul. Klik OK untuk mengonfirmasi peningkatan file.</li>
                <div class="example">
                    <img src="https://media.gcflearnfree.org/content/568bf73d8d7fa91e7c8d89a5_01_05_2016/new_convert_ok.png" alt="Mengonversi file ke tipe file terbaru">
                </div>
                <li>Dokumen akan dikonversi ke tipe file terbaru.</li>
            </ol>
            <p>Mengonversi file mungkin menyebabkan beberapa perubahan pada tata letak asli dokumen.</p>
        
            <h2>Tantangan!</h2>
            <ol>
                <li><a href="https://media.gcflearnfree.org/content/568bf73d8d7fa91e7c8d89a5_01_05_2016/word2016_createopen_practice.doc" download>Buka dokumen latihan kami.</a></li>
                <li>Perhatikan bahwa dokumen terbuka dalam Mode Kompatibilitas. Konversikan ke format file 2016. Jika kotak dialog muncul yang menanyakan apakah Anda ingin menutup dan membuka kembali file untuk melihat fitur baru, pilih Ya.</li>
                <li>Di Backstage view, sematkan file atau folder.</li>
            </ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Menyimpan dan Berbagi Dokumen',
            'course_id' => '22',
            'desc' => '<h1>Perkenalan</h1>
            <p>Saat Anda membuat dokumen baru di Word, Anda harus mengetahui cara menyimpannya sehingga Anda dapat mengakses dan mengeditnya nanti. Seperti versi Word sebelumnya, Anda dapat menyimpan file ke komputer Anda. Jika mau, Anda juga dapat menyimpan file ke cloud menggunakan OneDrive. Anda bahkan dapat mengekspor dan berbagi dokumen langsung dari Word.</p>
            
            <p>Tonton video di bawah ini untuk mempelajari cara menyimpan dan berbagi dokumen Word.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/Az-i8sZHwcE?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Simpan dan Simpan Sebagai</h2>
            <p>Word menawarkan dua cara untuk menyimpan file: <strong>Simpan</strong> dan <strong>Simpan Sebagai</strong>. Opsi-opsi ini bekerja dengan cara yang serupa, dengan beberapa perbedaan penting.</p>
            
            <ul>
                <li><strong>Simpan:</strong> Saat Anda membuat atau mengedit dokumen, Anda akan menggunakan perintah Simpan untuk menyimpan perubahan Anda. Anda akan menggunakan perintah ini hampir sepanjang waktu. Saat Anda menyimpan file, Anda hanya perlu memilih nama file dan lokasinya untuk pertama kalinya. Setelah itu, Anda bisa klik perintah Save untuk menyimpannya dengan nama dan lokasi yang sama.</li>
                <li><strong>Save As:</strong> Anda akan menggunakan perintah ini untuk membuat salinan dokumen sambil menyimpan aslinya. Saat Anda menggunakan Simpan Sebagai, Anda harus memilih nama dan/atau lokasi berbeda untuk versi yang disalin.</li>
            </ul>
            
            <h2>Tentang OneDrive</h2>
            <p>Sebagian besar fitur di Microsoft Office, termasuk Word, ditujukan untuk menyimpan dan berbagi dokumen secara online. Hal ini dilakukan dengan OneDrive, yang merupakan ruang penyimpanan online untuk dokumen dan file Anda. Jika Anda ingin menggunakan OneDrive, pastikan Anda masuk ke Word dengan akun Microsoft Anda. Tinjau pelajaran kami tentang Memahami OneDrive untuk mempelajari lebih lanjut.</p>
        
            <h2>Untuk menyimpan dokumen:</h2>
            <ul>
                <li>Penting untuk menyimpan dokumen Anda setiap kali Anda memulai proyek baru atau membuat perubahan pada proyek yang sudah ada. Menyimpan sejak dini dan sering dapat mencegah pekerjaan Anda hilang. Anda juga harus memperhatikan dengan cermat tempat Anda menyimpan dokumen agar mudah ditemukan nanti.</li>
                <li>Cari dan pilih perintah Simpan di Quick Access Toolbar.</li>
                <li>
                <img src="https://media.gcflearnfree.org/content/568d29078d7fa91e7c8d89af_01_06_2016/save_command.png" alt="Mengklik perintah Simpan pada toolbar Akses Cepat">
                </li>
                <li>Jika Anda menyimpan file untuk pertama kalinya, panel Simpan Sebagai akan muncul dalam tampilan Backstage. Anda kemudian harus memilih tempat menyimpan file dan memberinya nama file. Klik Telusuri untuk memilih lokasi di komputer Anda. Alternatifnya, Anda bisa mengklik OneDrive untuk menyimpan file ke OneDrive Anda.</li>
                <li>
                    <img src="https://media.gcflearnfree.org/content/568d29078d7fa91e7c8d89af_01_06_2016/save_browse.png" alt="Mengklik Telusuri untuk memilih lokasi penyimpanan">
                </li>
                <li>Kotak dialog Simpan Sebagai akan muncul. Pilih lokasi di mana Anda ingin menyimpan dokumen. Masukkan nama file untuk dokumen tersebut, lalu klik Simpan.</li>
                <li>Dokumen akan disimpan. Anda dapat mengklik perintah Simpan lagi untuk menyimpan perubahan saat Anda memodifikasi dokumen. Anda juga dapat mengakses perintah Simpan dengan menekan Ctrl+S pada keyboard Anda.</li>
                <li>
                <img src="https://media.gcflearnfree.org/content/568d29078d7fa91e7c8d89af_01_06_2016/save_dialog.png" alt="Menggunakan kotak dialog Simpan Sebagai">
                </li>
                </ul>
        
            <h2>Menggunakan Save As untuk membuat salinan</h2>
            <ul>
                <li>Jika Anda ingin menyimpan versi dokumen yang berbeda sambil mempertahankan versi aslinya, Anda dapat membuat salinannya. Misalnya, jika Anda memiliki file bernama Laporan Penjualan, Anda dapat menyimpannya sebagai Laporan Penjualan 2 sehingga Anda dapat mengedit file baru dan tetap merujuk kembali ke versi aslinya.</li>
                <li>
                    <img src="https://media.gcflearnfree.org/content/568d29078d7fa91e7c8d89af_01_06_2016/save_saveas.png" alt="Mengklik perintah Simpan Sebagai untuk membuat salinan">
                </li>
            </ul>
        
            <h2>Untuk mengubah lokasi penyimpanan default:</h2>
            <ul>
                <li>Jika Anda tidak ingin menggunakan OneDrive, Anda mungkin merasa frustrasi karena OneDrive dipilih sebagai lokasi default saat menyimpan. Jika Anda merasa ini tidak nyaman, Anda dapat mengubah lokasi penyimpanan default sehingga PC ini dipilih secara default.</li>
                <li>Klik tab File untuk mengakses tampilan Backstage.</li>
                <li>
                <img src="https://media.gcflearnfree.org/content/568d29078d7fa91e7c8d89af_01_06_2016/create_new_file.png" alt="Mengklik tab File untuk membuka tampilan Backstage">
                </li>
                <li>Klik Opsi.</li>
                <li>
                    <img src="https://media.gcflearnfree.org/content/568d29078d7fa91e7c8d89af_01_06_2016/save_default_options.png" alt="Mengklik Opsi dalam tampilan Belakang Panggung">
                </li>
                <li>Kotak dialog Opsi Word akan muncul. Pilih Simpan di sebelah kiri, centang kotak di samping Simpan ke Komputer secara default, lalu klik OK. Lokasi penyimpanan default akan diubah.</li>
                <li>
                    <img src="https://media.gcflearnfree.org/content/568d29078d7fa91e7c8d89af_01_06_2016/save_default_dialog.png" alt="Mengubah lokasi penyimpanan default">
                </li>
            </ul>
        
            <h2>Pemulihan Otomatis</h2>
            <ul>
                <li>Word secara otomatis menyimpan dokumen Anda ke folder sementara saat Anda mengerjakannya. Jika Anda lupa menyimpan perubahan atau jika Word mogok, Anda dapat memulihkan file menggunakan AutoRecover.</li>
                <li>Buka Word. Jika versi file yang disimpan secara otomatis ditemukan, panel Pemulihan Dokumen akan muncul di sebelah kiri. Klik untuk membuka file yang tersedia. Dokumen tersebut akan dipulihkan.</li>
                <img src="https://media.gcflearnfree.org/content/568d29078d7fa91e7c8d89af_01_06_2016/save_autosave_recover.png" alt="Memilih perintah Ekspor sebagai PDF">
                <li>Secara default, Word menyimpan otomatis setiap 10 menit. Jika Anda mengedit dokumen kurang dari 10 menit, Word mungkin tidak membuat versi yang disimpan otomatis.</li>
                <li>Jika Anda tidak melihat file yang diperlukan, Anda dapat menelusuri semua file yang disimpan otomatis dari tampilan Backstage. Pilih tab File, klik Kelola Versi, lalu pilih Pulihkan Dokumen yang Belum Disimpan.</li>
                <li>
                    <img src="https://media.gcflearnfree.org/content/568d29078d7fa91e7c8d89af_01_06_2016/save_autosave_splat.png" alt="Mengakses semua versi yang belum disimpan">
                </li>
            </ul>
        
            <h2>Mengekspor dokumen</h2>
            <ul>
                <li>Secara default, dokumen Word disimpan dalam jenis file .docx. Namun, mungkin ada saatnya Anda perlu menggunakan jenis file lain, seperti dokumen PDF atau Word 97-2003. Sangat mudah untuk mengekspor dokumen Anda dari Word ke berbagai jenis file.</li>
                <li>Untuk mengekspor dokumen sebagai file PDF:</li>
                <li>Mengekspor dokumen Anda sebagai dokumen Adobe Acrobat, umumnya dikenal sebagai file PDF, bisa sangat berguna jika Anda berbagi dokumen dengan seseorang yang tidak memiliki Word. File PDF akan memungkinkan penerima untuk melihat—tetapi tidak mengedit—isi dokumen Anda.</li>
                <li>Klik tab File untuk mengakses tampilan Backstage, pilih Ekspor, lalu pilih Buat PDF/XPS.</li>
                <img src="https://media.gcflearnfree.org/content/568d29078d7fa91e7c8d89af_01_06_2016/save_export_pdf_command.png" alt="Mengekspor dokumen sebagai file PDF">
                <li>Kotak dialog Simpan Sebagai akan muncul. Pilih lokasi di mana Anda ingin mengekspor dokumen, masukkan nama file, lalu klik Publikasikan.</li>
                <li>
                    <img src="https://media.gcflearnfree.org/content/568d29078d7fa91e7c8d89af_01_06_2016/save_export_pdf_dialog.png" alt="Mengekspor dokumen sebagai file PDF">
                </li>
                <li>Jika Anda perlu mengedit file PDF, Word memungkinkan Anda mengonversi file PDF menjadi dokumen yang dapat diedit. Baca panduan kami tentang Mengedit File PDF untuk informasi lebih lanjut.</li>
            </ul>
        
            <h2>Untuk mengekspor dokumen ke jenis file lain:</h2>
            <ul>
                <li>Anda mungkin juga merasa terbantu jika mengekspor dokumen Anda ke tipe file lain, seperti Dokumen Word 97-2003 jika Anda perlu berbagi dengan orang yang menggunakan versi Word yang lebih lama atau sebagai file .txt jika Anda memerlukan versi teks biasa dokumen Anda.</li>
                <li>Klik tab File untuk mengakses tampilan Backstage, pilih Ekspor, lalu pilih Ubah Jenis File.</li>
                <li>
                    <img src="https://media.gcflearnfree.org/content/568d29078d7fa91e7c8d89af_01_06_2016/save_export_file_command.png" alt="Memilih Ubah Jenis File">
                </li>
                <li>Pilih jenis file, lalu klik Simpan Sebagai.</li>
                <img src="https://media.gcflearnfree.org/content/568d29078d7fa91e7c8d89af_01_06_2016/save_export_file_saveas.png" alt="Memilih Ubah Jenis File">
                <li>Kotak dialog Simpan Sebagai akan muncul. Pilih lokasi di mana Anda ingin mengekspor dokumen, masukkan nama file, lalu klik Simpan.</li>
                <li>
                    <img src="https://media.gcflearnfree.org/content/568d29078d7fa91e7c8d89af_01_06_2016/save_export_file_splat.png" alt="Memilih jenis file dari menu drop-down kotak Save As Type">
                </li>
            </ul>
        
            <h2>Berbagi dokumen</h2>
            <p>Word memudahkan berbagi dan berkolaborasi pada dokumen menggunakan OneDrive. Dulu, jika Anda ingin berbagi file dengan seseorang, Anda dapat mengirimkannya sebagai lampiran email. Meskipun nyaman, sistem ini juga membuat beberapa versi dari file yang sama, yang mungkin sulit untuk diatur.</p>
            <p>Saat Anda berbagi dokumen dari Word, Anda sebenarnya memberi orang lain akses ke file yang sama persis. Ini memungkinkan Anda dan orang yang Anda ajak berbagi mengedit dokumen yang sama tanpa harus melacak beberapa versi.</p>
            <p>Untuk membagikan dokumen, dokumen tersebut harus disimpan terlebih dahulu ke OneDrive Anda.</p>
        
            <h2>Untuk berbagi dokumen:</h2>
            <ul>
                <li>Klik tab File untuk mengakses tampilan Backstage, lalu klik Bagikan.</li>
                <li>
                    <img src="https://media.gcflearnfree.org/content/568d29078d7fa91e7c8d89af_01_06_2016/save_share_command.png" alt="Mengklik opsi Bagikan di tampilan Belakang Panggung">
                </li>
                <li>Panel Bagikan akan muncul.</li>
                <li>Klik tombol interaktif di bawah ini untuk mempelajari lebih lanjut tentang berbagai cara berbagi dokumen.</li>
                <li>
                    <img src="https://media.gcflearnfree.org/content/568d29078d7fa91e7c8d89af_01_06_2016/save_share_lg.png" alt="Panel berbagi">
                </li>
            </ul>
        
            <h2>Tantangan!</h2>
            <ul>
                <li><a href="https://media.gcflearnfree.org/content/568d29078d7fa91e7c8d89af_01_06_2016/word2016_saveshare_practice.docx" download>Buka dokumen latihan kami.</a></li>
                <li>Gunakan Simpan Sebagai untuk membuat salinan dokumen. Beri nama salinan baru Saving Challenge Practice. Anda bisa menyimpannya ke folder di komputer Anda atau ke OneDrive Anda.</li>
                <li>Ekspor dokumen Anda sebagai PDF.</li>
            </ul>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Dasar-Dasar Teks',
            'course_id' => '23',
            'desc' => '  <h1>Pengenalan Microsoft Word</h1>
            <p>Jika Anda baru mengenal Microsoft Word, Anda perlu mempelajari dasar-dasar mengetik, mengedit, dan mengatur teks. Tugas dasar mencakup kemampuan untuk menambah, menghapus, dan memindahkan teks dalam dokumen Anda, serta cara memotong, menyalin, dan menempel.</p>
            <p><strong>Opsional:</strong> <a href="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/word2016_textbasics_practice.docx">Unduh dokumen latihan kami</a>.</p>
            <p>Tonton video di bawah ini untuk mempelajari dasar-dasar bekerja dengan teks di Word.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/vmEzxQfVj5c?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Menggunakan titik penyisipan untuk menambahkan teks</h2>
            <p>Titik penyisipan adalah garis vertikal yang berkedip di dokumen Anda. Ini menunjukkan di mana Anda dapat memasukkan teks pada halaman. Anda dapat menggunakan titik penyisipan dengan berbagai cara:</p>
            <ul>
                <li>Dokumen kosong: Saat dokumen kosong baru terbuka, titik penyisipan akan muncul di sudut kiri atas halaman. Jika mau, Anda dapat mulai mengetik dari lokasi ini.</li>
                <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_insertion_point.png" alt="Dokumen kosong dengan titik penyisipan di sudut kiri atas">
                <li>Menambahkan spasi: Tekan spasi untuk menambahkan spasi setelah kata atau di antara teks.</li>
                <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_insertion_space_crop.png" alt="Menambahkan spasi dengan spasi">
                <li>Baris paragraf baru: Tekan Enter pada keyboard Anda untuk memindahkan titik penyisipan ke baris paragraf berikutnya.</li>
                <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_insertion_newline_crop.png" alt="Menekan Enter untuk membuat baris baru">
                <li>Penempatan manual: Setelah Anda mulai mengetik, Anda dapat menggunakan mouse untuk memindahkan titik penyisipan ke tempat tertentu di dokumen Anda. Cukup klik lokasi di teks tempat Anda ingin meletakkannya.</li>
                <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_insertion_move_crop.png" alt="Memindahkan titik penyisipan">
                <li>Tombol panah: Anda juga dapat menggunakan tombol panah pada keyboard Anda untuk memindahkan titik penyisipan. Tombol panah kiri dan kanan akan berpindah antar karakter yang berdekatan pada baris yang sama, sedangkan tombol panah atas dan bawah akan berpindah antar baris paragraf. Anda juga dapat menekan Ctrl+Kiri atau Ctrl+Kanan untuk berpindah antar kata dengan cepat.</li>
                <li>Di dokumen kosong baru, Anda dapat mengklik dua kali mouse untuk memindahkan titik penyisipan ke tempat lain di halaman.</li>
            </ul>
        
            <h2>Memilih teks</h2>
            <p>Sebelum Anda dapat memindahkan atau memformat teks, Anda harus memilihnya. Untuk melakukannya, klik dan seret mouse Anda ke atas teks, lalu lepaskan mouse. Kotak yang disorot akan muncul di atas teks yang dipilih.</p>
            <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_select.png" alt="Memilih teks">
            <p>Saat Anda memilih teks atau gambar di Word, toolbar hover dengan pintasan perintah akan muncul. Jika toolbar tidak muncul pada awalnya, coba arahkan mouse ke atas pilihan.</p>
            <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_select_splat.png" alt="Bilah Alat Arahkan">
            <ul>
                <li>Untuk memilih beberapa baris teks:
                    <ul>
                        <li>Gerakkan penunjuk mouse ke kiri garis mana pun sehingga menjadi panah miring ke kanan.</li>
                        <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_select_mult_place.png" alt="Menempatkan kursor di sebelah kiri teks">
                        <li>Klik mouse. Garis akan dipilih.</li>
                        <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_select_mult_oneline.png" alt="Memilih sebuah garis">
                        <li>Untuk memilih beberapa baris, klik dan seret mouse ke atas atau ke bawah.</li>
                        <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_select_mult_several.png" alt="Memilih beberapa baris teks">
                        <li>Untuk memilih semua teks dalam dokumen Anda, pilih perintah Select pada tab Home, lalu klik Select All. Alternatifnya, Anda dapat menekan Ctrl+A pada keyboard Anda.</li>
                        <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_select_mult_selectall.png" alt="Memilih semua teks dalam dokumen">
                    </ul>
                </li>
            </ul>
            <p>Pintasan lainnya termasuk mengklik dua kali untuk memilih kata dan mengklik tiga kali untuk memilih seluruh kalimat atau paragraf.</p>
        
            <h2>Untuk menghapus teks:</h2>
            <p>Ada beberapa cara untuk menghapus — atau menghapus — teks:</p>
            <ul>
                <li>Untuk menghapus teks di sebelah kiri titik penyisipan, tekan tombol Backspace pada keyboard Anda.</li>
                <li>Untuk menghapus teks di sebelah kanan titik penyisipan, tekan tombol Delete pada keyboard Anda.</li>
                <li>Pilih teks yang ingin Anda hapus, lalu tekan tombol Hapus.</li>
                <li>Jika Anda memilih teks dan mulai mengetik, teks yang dipilih akan otomatis dihapus dan diganti dengan teks baru.</li>
            </ul>
        
            <h2>Menyalin dan memindahkan teks</h2>
            <p>Word memungkinkan Anda menyalin teks yang sudah ada di dokumen Anda dan menempelkannya di tempat lain, sehingga dapat menghemat banyak waktu dan tenaga. Jika Anda ingin memindahkan teks di dalam dokumen, Anda dapat memotong dan menempel atau menarik dan melepas.</p>
            <h3>Untuk menyalin dan menempelkan teks:</h3>
            <ol>
                <li>Pilih teks yang ingin Anda salin.</li>
                <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_copy_select.png" alt="Memilih teks untuk disalin">
                <li>Klik perintah Salin pada tab Beranda. Alternatifnya, Anda dapat menekan Ctrl+C pada keyboard Anda.</li>
                <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_copy_command.png" alt="Mengklik perintah salin">
                <li>Tempatkan titik penyisipan di mana Anda ingin teks muncul.</li>
                <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_copy_destination.png" alt="Memilih di mana teks yang disalin akan muncul">
                <li>Klik perintah Tempel pada tab Beranda. Alternatifnya, Anda dapat menekan Ctrl+V pada keyboard Anda.</li>
                <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_copy_paste_command.png" alt="Mengklik perintah tempel">
                <li>Teks akan muncul.</li>
                <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_copy_done.png" alt="Teks yang ditempel di lokasi baru">
            </ol>
        
            <h3>Untuk memotong dan menempelkan teks:</h3>
            <ol>
                <li>Pilih teks yang ingin Anda potong.</li>
                <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_copy_select.png" alt="Memilih teks yang akan dipotong">
                <li>Klik perintah Potong pada tab Beranda. Alternatifnya, Anda dapat menekan Ctrl+X pada keyboard Anda.</li>
                <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_cut_command.png" alt="Mengklik perintah potong">
                <li>Tempatkan titik penyisipan di tempat yang Anda inginkan untuk menampilkan teks.</li>
                <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_cut_destination.png" alt="Memilih tempat untuk memotong teks">
                <li>Klik perintah Tempel pada tab Beranda. Alternatifnya, Anda dapat menekan Ctrl+V pada keyboard Anda.</li>
                <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_copy_paste_command.png" alt="Mengklik perintah tempel">
                <li>Teks akan muncul.</li>
                <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_cut_done.png" alt="Teks yang dipotong ditempel di lokasi baru">
            </ol>
        
            <p>Anda juga dapat memotong, menyalin, dan menempel dengan mengklik kanan dokumen Anda dan memilih tindakan yang diinginkan dari menu drop-down. Saat Anda menggunakan metode ini untuk menempel, Anda dapat memilih dari tiga opsi yang menentukan bagaimana teks akan diformat: Pertahankan Pemformatan Sumber, Gabungkan Pemformatan, dan Pertahankan Hanya Teks. Anda dapat mengarahkan mouse ke setiap ikon untuk melihat tampilannya sebelum Anda memilihnya.</p>
        
            <h3>Untuk menarik dan melepas teks:</h3>
            <ol>
                <li>Pilih teks yang ingin Anda pindahkan.</li>
                <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_drag_select.png" alt="Memilih teks yang akan dipindahkan">
                <li>Klik dan seret teks ke lokasi yang Anda inginkan untuk menampilkannya. Sebuah persegi panjang kecil akan muncul di bawah panah untuk menunjukkan bahwa Anda sedang memindahkan teks.</li>
                <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_drag_move.png" alt="Menyeret dan melepaskan teks">
                <li>Lepaskan mouse, dan teks akan muncul.</li>
                <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_drag_done.png" alt="Teks yang dipindahkan">
            </ol>
        
            <p>Jika teks tidak muncul tepat di lokasi yang Anda inginkan, Anda dapat menekan tombol Enter pada keyboard Anda untuk memindahkan teks ke baris baru.</p>
        
            <h2>Batalkan dan Ulangi</h2>
            <p>Katakanlah Anda sedang mengerjakan sebuah dokumen dan secara tidak sengaja menghapus beberapa teks. Untungnya, Anda tidak perlu mengetik ulang semua yang baru saja Anda hapus! Word memungkinkan Anda membatalkan tindakan terbaru saat Anda melakukan kesalahan seperti ini.</p>
            <p>Untuk melakukan ini, cari dan pilih perintah Undo pada Quick Access Toolbar. Alternatifnya, Anda dapat menekan Ctrl+Z pada keyboard Anda. Anda dapat terus menggunakan perintah ini untuk membatalkan beberapa perubahan berturut-turut.</p>
            <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_undo.png" alt="Menggunakan perintah Batalkan">
            <p>Sebaliknya, perintah Redo memungkinkan Anda membalikkan pembatalan terakhir. Anda juga dapat mengakses perintah ini dengan menekan Ctrl+Y pada keyboard Anda.</p>
            <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_undo_redo.png" alt="Mengklik perintah Ulangi">
        
            <h2>Simbol</h2>
            <p>Jika Anda perlu menyisipkan karakter tidak biasa yang tidak ada di keyboard Anda, seperti simbol hak cipta (©) atau merek dagang (™), Anda biasanya dapat menemukannya dengan perintah Simbol.</p>
        
            <h3>Untuk menyisipkan simbol:</h3>
            <ol>
                <li>Tempatkan titik penyisipan di tempat yang Anda inginkan untuk memunculkan simbol.</li>
                <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_symbol_select.png" alt="Memilih di mana simbol akan muncul">
                <li>Klik tab Sisipkan.</li>
                <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_symbol_insert.png" alt="Menavigasi ke tab Sisipkan">
                <li>Cari dan pilih perintah Simbol, lalu pilih simbol yang diinginkan dari menu drop-down. Jika Anda tidak melihat simbol yang diinginkan, pilih Simbol Lainnya.</li>
                <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_symbol_command.png" alt="Menyisipkan simbol">
                <li>Simbol tersebut akan muncul di dokumen.</li>
                <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/text_symbol_done.png" alt="Simbol yang disisipkan">
            </ol>
        
            <h2>Tantangan!</h2>
            <ol>
                <li><a href="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/word2016_textbasics_practice.docx" download>Buka dokumen latihan kami.</a></li>
                <li>Gulir ke halaman 2.</li>
                <li>Tempatkan titik penyisipan di bagian atas dokumen dan ketik Sekarang Memperkenalkan...</li>
                <li>Gunakan tombol panah untuk memindahkan titik penyisipan ke harga Paket Detail Tanda Tangan dan ubah menjadi $99,99 /bln.</li>
                <li>Di bagian bawah dokumen, gunakan seret dan lepas untuk memindahkan Serahkan saja detailnya kepada kami hingga akhir baris terakhir.</li>
                <li>Di akhir baris yang baru saja Anda pindahkan, masukkan simbol merek dagang. Jika Anda tidak dapat menemukan simbol merek dagang, masukkan simbol lain pilihan Anda.</li>
            </ol>
            <p>Setelah selesai, dokumen Anda akan terlihat seperti ini:</p>
            <img src="https://media.gcflearnfree.org/content/568ec6e64ba91213b0054eb2_01_07_2016/word2016_textbasics2_img.png" alt="Dokumen selesai">'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Memformat Teks',
            'course_id' => '24',
            'desc' => '<h1>Memformat Teks di Microsoft Word</h1>
            <p>Teks yang diformat dapat menarik perhatian pembaca ke bagian tertentu dari sebuah dokumen dan menekankan informasi penting. Di Word, Anda memiliki beberapa opsi untuk menyesuaikan teks, termasuk font, ukuran, dan warna. Anda juga dapat menyesuaikan perataan teks untuk mengubah tampilannya di halaman.</p>
            <p><strong>Opsional:</strong> <a href="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/word2016_formattext_practice.docx">Unduh dokumen latihan kami</a>.</p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang memformat teks di Word.</p>
        
            <h2>Untuk mengubah ukuran font:</h2>
            <ol>
                <li>Pilih teks yang ingin Anda ubah.
                    <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_size_select.png" alt="Memilih teks untuk diubah">
                </li>
                <li>Pada tab <strong>Beranda</strong>, klik panah tarik-turun <strong>Ukuran font</strong>. Pilih ukuran font dari menu. Jika ukuran font yang Anda butuhkan tidak tersedia di menu, Anda dapat mengklik kotak Ukuran font dan mengetikkan ukuran font yang diinginkan, lalu tekan <strong>Enter</strong>.
                    <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_size_menu.png" alt="Memilih ukuran font">
                </li>
                <li>Ukuran font akan berubah di dokumen.
                    <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_size_result.png" alt="Ukuran font baru">
                </li>
            </ol>
            <p>Anda juga dapat menggunakan perintah <strong>Grow Font</strong> dan <strong>Shrink Font</strong> untuk mengubah ukuran font.
                <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_size_grow_shrink.png" alt="Perintah Tumbuhkan Font dan Kecilkan Font">
            </p>
        
            <h2>Untuk mengubah font:</h2>
            <p>Secara default, font setiap dokumen baru diatur ke Calibri. Namun, Word menyediakan banyak font lain yang dapat Anda gunakan untuk mengkustomisasi teks.</p>
            <ol>
                <li>Pilih teks yang ingin Anda ubah.
                    <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_font_select.png" alt="Memilih teks untuk diubah">
                </li>
                <li>Pada tab <strong>Beranda</strong>, klik panah tarik-turun di sebelah kotak <strong>Font</strong>. Menu gaya font akan muncul.
                </li>
                <li>Pilih gaya font yang ingin Anda gunakan.
                    <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_font_menu.png" alt="Mengubah gaya font">
                </li>
                <li>Font akan berubah di dokumen.
                    <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_font_result.png" alt="Gaya font baru">
                </li>
            </ol>
            <p>Saat membuat dokumen profesional atau dokumen yang berisi banyak paragraf, Anda sebaiknya memilih font yang mudah dibaca. Selain Calibri, font bacaan standar mencakup Cambria, Times New Roman, dan Arial.</p>
        
            <h2>Untuk mengubah warna font:</h2>
            <ol>
                <li>Pilih teks yang ingin Anda ubah.
                    <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_color_select.png" alt="Memilih teks untuk diubah">
                </li>
                <li>Pada tab <strong>Beranda</strong>, klik panah tarik-turun <strong>Warna Font</strong>. Menu Warna Font muncul.
                    <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_color_menu2.png" alt="Mengubah warna font">
                </li>
                <li>Pilih warna font yang ingin Anda gunakan. Warna font di dokumen akan berubah.
                    <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_color_result2.png" alt="Warna font baru">
                </li>
            </ol>
            <p>Pilihan warna Anda tidak terbatas pada menu drop-down yang muncul. Pilih <strong>Lebih Banyak Warna</strong> di bagian bawah menu untuk mengakses kotak dialog Warna. Pilih warna yang Anda inginkan, lalu klik <strong>OK</strong>.
                <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_color_more_colors.png" alt="Kotak dialog Warna">
            </p>
        
            <h2>Untuk menggunakan perintah Tebal, Miring, dan Garis Bawah:</h2>
            <p>Perintah Tebal, Miring, dan Garis Bawah dapat digunakan untuk membantu menarik perhatian pada kata atau frasa penting.</p>
            <ol>
                <li>Pilih teks yang ingin Anda ubah.
                    <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_emphasis_select.png" alt="Memilih teks untuk diubah">
                </li>
                <li>Pada tab <strong>Home</strong>, klik perintah <strong>Bold (B)</strong>, <strong>Italic (I)</strong>, atau <strong>Underline (U)</strong> pada grup <strong>Font</strong>. Dalam contoh kita, kita akan mengklik Tebal.
                    <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_emphasis_command.png" alt="Membuat teks menjadi tebal">
                </li>
                <li>Teks yang dipilih akan diubah dalam dokumen.
                    <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_emphasis_result.png" alt="Teks yang dicetak tebal">
                </li>
            </ol>
        
            <h2>Untuk mengubah huruf besar-kecil:</h2>
            <p>Saat Anda perlu mengubah huruf besar/kecil dengan cepat, Anda dapat menggunakan perintah Ubah Huruf alih-alih menghapus dan mengetik ulang teks.</p>
            <ol>
                <li>Pilih teks yang ingin Anda ubah.
                    <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_case_select.png" alt="Memilih teks untuk diubah">
                </li>
                <li>Pada tab <strong>Beranda</strong>, klik perintah <strong>Ubah Huruf</strong> di grup <strong>Font</strong>.
                </li>
                <li>Menu tarik-turun akan muncul. Pilih opsi kasus yang diinginkan dari menu.
                    <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_case_menu.png" alt="Pilihan mengubah huruf besar/kecil">
                </li>
                <li>Kasus teks akan diubah dalam dokumen.
                    <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_case_result.png" alt="Kasus teks baru">
                </li>
            </ol>
        
            <h2>Untuk menyorot teks:</h2>
            <p>Menyoroti dapat menjadi alat yang berguna untuk menandai teks penting dalam dokumen Anda.</p>
            <ol>
                <li>Pilih teks yang ingin Anda sorot.
                    <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_highlight_select.png" alt="Memilih teks untuk disorot">
                </li>
                <li>Dari tab <strong>Beranda</strong>, klik panah tarik-turun <strong>Warna Sorotan Teks</strong>. Menu Warna Sorotan muncul.
                    <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_highlight_menu.png" alt="Memilih warna highlight">
                </li>
                <li>Pilih warna highlight yang diinginkan. Teks yang dipilih kemudian akan disorot dalam dokumen.
                    <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_highlight_result.png" alt="Teks yang disorot">
                </li>
            </ol>
            <p>Untuk menghapus sorotan, pilih teks yang disorot, lalu klik panah tarik-turun <strong>Warna Sorotan Teks</strong>. Pilih <strong>Tanpa Warna</strong> dari menu tarik-turun.
                <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_highlight_no_color.png" alt="Menghapus sorotan">
            </p>
            <p>Jika Anda perlu menyorot beberapa baris teks, mengubah mouse menjadi penyorot mungkin merupakan alternatif yang berguna untuk memilih dan menyorot setiap baris. Klik perintah <strong>Warna Sorotan Teks</strong>, dan kursor berubah menjadi penyorot. Anda kemudian dapat mengeklik dan menyeret penyorot ke atas garis yang ingin Anda sorot.</p>
        
            <h2>Untuk mengubah perataan teks:</h2>
            <p>Secara default, Word menyelaraskan teks ke margin kiri di dokumen baru. Namun, mungkin ada saatnya Anda ingin menyesuaikan perataan teks ke tengah atau kanan.</p>
            <ol>
                <li>Pilih teks yang ingin Anda ubah.
                    <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_alignment_select.png" alt="Memilih teks untuk disorot">
                </li>
                <li>Pada tab <strong>Beranda</strong>, pilih salah satu dari empat opsi perataan dari grup <strong>Paragraph</strong>. Dalam contoh kita, kita telah memilih <strong>Center Alignment</strong>.
                    <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_alignment_command.png" alt="Perintah perataan paragraf">
                </li>
                <li>Teks akan diselaraskan kembali dalam dokumen.
                    <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_alignment_result.png" alt="Teks yang diselaraskan kembali">
                </li>
            </ol>
            <p>Klik panah pada tayangan slide di bawah ini untuk mempelajari lebih lanjut tentang empat opsi perataan teks.</p>
            <ul>
                <li><strong>Align Text Left</strong>: Ini menyelaraskan semua teks yang dipilih ke margin kiri. Perintah Align Text Left adalah perataan yang paling umum dan dipilih secara default ketika dokumen baru dibuat.
                </li>
                <li><strong>Center</strong>: Ini menyelaraskan teks dengan jarak yang sama dari margin kiri dan kanan.
                </li>
                <li><strong>Align Text Right</strong>: Ini menyelaraskan semua teks yang dipilih ke margin kanan.
                </li>
                <li><strong>Justify</strong>: Teks yang dibenarkan sama di kedua sisi. Garisnya sejajar dengan margin kanan dan kiri. Banyak surat kabar dan majalah menggunakan pembenaran penuh.
                </li>
            </ul>
        
            <p>Anda dapat menggunakan fitur <strong>Set as Default</strong> di Word untuk menyimpan semua perubahan format yang Anda buat dan secara otomatis menerapkannya ke dokumen baru. Untuk mempelajari cara melakukan ini.</p>
        
            <h2>Tantangan!</h2>
            <ol>
                <li><a href="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/word2016_formattext_practice.docx">Buka dokumen latihan kami</a>.</li>
                <li>Gulir ke halaman 2.</li>
                <li>Pilih tulisan <strong>For Rent</strong> dan ubah ukuran font menjadi 48 pt.</li>
                <li>Dengan teks masih dipilih, ubah font menjadi <strong>Franklin Gothic Demi</strong>. <strong>Catatan:</strong> Jika Anda tidak melihat font ini di menu, Anda dapat memilih font lain.</li>
                <li>Gunakan perintah <strong>Change Case</strong> untuk mengubah <strong>For Rent</strong> menjadi UPPERCASE.</li>
                <li>Ubah warna tulisan <strong>For Rent</strong> menjadi <strong>Gold, Accent 4</strong>.</li>
                <li>Hapus sorotan dari nomor telepon <strong>(919-555-7237)</strong>.</li>
                <li>Pilih semua teks dari <strong>For Rent</strong> to <strong>(919-555-7237)</strong> dan <strong>Center Align</strong>.</li>
                <li>Cetak miring teks pada paragraf di bawah <strong>Tentang Villa Piña</strong>.</li>
            </ol>
            <p>Setelah selesai, halaman Anda akan terlihat seperti ini:
                <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/word2016_format_text_img.png" alt="Halaman selesai">
            </p>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Menggunakan Temukan dan Ganti',
            'course_id' => '25',
            'desc' => '<h1>Memanfaatkan Fitur Temukan dan Ganti di Microsoft Word</h1>
            <p>Saat Anda bekerja dengan dokumen yang lebih panjang, mungkin sulit dan memakan waktu untuk menemukan kata atau frasa tertentu. Word dapat secara otomatis mencari dokumen Anda menggunakan fitur <strong>Temukan</strong>, dan memungkinkan Anda mengubah kata atau frasa dengan cepat menggunakan <strong>Ganti</strong>.</p>
            <p><strong>Opsional:</strong> <a href="https://media.gcflearnfree.org/content/568bdf328d7fa91e7c8d89a2_01_05_2016/word2016_findreplace_practice.docx">Unduh dokumen latihan kami</a>.</p>
            <p>Tonton video di bawah untuk mempelajari lebih lanjut tentang menggunakan <strong>Temukan</strong> dan <strong>Ganti</strong>.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/p3Ql9y3eEyo?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Untuk menemukan teks</h2>
            <p>Dalam contoh kita, kita telah menulis makalah akademis dan akan menggunakan perintah <strong>Find</strong> untuk menemukan semua contoh kata tertentu.</p>
            <ol>
                <li>Dari tab <strong>Beranda</strong>, klik perintah <strong>Temukan</strong>. Alternatifnya, Anda dapat menekan <strong>Ctrl+F</strong> pada keyboard Anda.
                    <img src="https://media.gcflearnfree.org/content/5672fb048d7fa90eb4ddc8c0_12_17_2015/formatting_size_select.png" alt="Perintah Temukan">
                </li>
                <li>Panel navigasi akan muncul di sisi kiri layar.
                </li>
                <li>Ketikkan teks yang ingin Anda temukan di bidang di bagian atas panel navigasi. Dalam contoh kita, kita akan mengetikkan kata yang kita cari.
                    <img src="https://media.gcflearnfree.org/content/568bdf328d7fa91e7c8d89a2_01_05_2016/2016-01-05_12-22-01.png" alt="Mengetik teks yang dicari">
                </li>
                <li>Jika teks ditemukan dalam dokumen, teks tersebut akan disorot dengan warna kuning dan pratinjau hasilnya akan muncul di panel navigasi. Alternatifnya, Anda dapat mengeklik salah satu hasil di bawah tanda panah untuk melompat ke sana.
                    <img src="https://media.gcflearnfree.org/content/568bdf328d7fa91e7c8d89a2_01_05_2016/2016-01-11_08-48-30.png" alt="Teks yang disorot">
                </li>
                <li>Setelah selesai, klik <strong>X</strong> untuk menutup panel navigasi. Sorotan akan hilang.
                    <img src="https://media.gcflearnfree.org/content/568bdf328d7fa91e7c8d89a2_01_05_2016/2016-01-05_12-23-11.png" alt="Menutup panel navigasi">
                </li>
            </ol>
            <p>Untuk opsi pencarian lainnya, klik panah drop-down di sebelah kolom pencarian.
                <img src="https://media.gcflearnfree.org/content/568bdf328d7fa91e7c8d89a2_01_05_2016/2016-01-05_12-23-43.png" alt="Opsi pencarian lainnya">
            </p>
        
            <h2>Untuk mengganti teks</h2>
            <p>Terkadang, Anda mungkin menemukan bahwa Anda telah melakukan kesalahan berulang kali di seluruh dokumen—misalnya salah mengeja nama seseorang—atau Anda perlu mengganti kata atau frasa tertentu dengan kata atau frasa lain. Anda dapat menggunakan fitur <strong>Temukan dan Ganti</strong> di Word untuk melakukan revisi dengan cepat. Dalam contoh kita, kita akan menggunakan <strong>Temukan dan Ganti</strong> untuk mengubah judul majalah agar disingkat.</p>
            <ol>
                <li>Dari tab <strong>Beranda</strong>, klik perintah <strong>Ganti</strong>. Alternatifnya, Anda dapat menekan <strong>Ctrl+H</strong> pada keyboard Anda.
                    <img src="https://media.gcflearnfree.org/content/568bdf328d7fa91e7c8d89a2_01_05_2016/2016-01-05_12-25-23.png" alt="Perintah Ganti">
                </li>
                <li>Kotak dialog <strong>Temukan dan Ganti</strong> akan muncul.
                </li>
                <li>Ketikkan teks yang ingin Anda temukan di bidang <strong>Temukan apa:</strong>.
                </li>
                <li>Ketikkan teks yang ingin Anda gantikan di bidang <strong>Ganti dengan:</strong>. Lalu klik <strong>Temukan Berikutnya</strong>.
                    <img src="https://media.gcflearnfree.org/content/568bdf328d7fa91e7c8d89a2_01_05_2016/2016-01-05_12-26-17.png" alt="Mengetik teks yang ingin digantikan">
                </li>
                <li>Word akan menemukan teks pertama dan menyorotnya dengan warna abu-abu.
                </li>
                <li>Tinjau teks untuk memastikan Anda ingin menggantinya. Dalam contoh kita, teks merupakan bagian dari judul makalah dan tidak perlu diganti. Kami akan mengklik <strong>Temukan Berikutnya</strong> lagi untuk melompat ke contoh berikutnya.
                    <img src="https://media.gcflearnfree.org/content/568bdf328d7fa91e7c8d89a2_01_05_2016/2016-01-05_13-37-16.png" alt="Teks berikutnya yang ditemukan">
                </li>
                <li>Jika Anda ingin menggantinya, Anda dapat mengklik <strong>Ganti</strong> untuk mengubah masing-masing teks. Alternatifnya, Anda dapat mengklik <strong>Ganti Semua</strong> untuk mengganti setiap teks di seluruh dokumen.
                    <img src="https://media.gcflearnfree.org/content/568bdf328d7fa91e7c8d89a2_01_05_2016/2016-01-05_12-29-47.png" alt="Mengganti semua teks">
                </li>
                <li>Teksnya akan diganti.
                    <img src="https://media.gcflearnfree.org/content/568bdf328d7fa91e7c8d89a2_01_05_2016/2016-01-11_09-08-57.png" alt="Teks yang diganti">
                </li>
                <li>Setelah selesai, klik <strong>Tutup</strong> atau <strong>Batal</strong> untuk menutup kotak dialog.
                </li>
            </ol>
            <p>Untuk opsi pencarian lainnya, klik <strong>Lainnya</strong> di kotak dialog Temukan dan Ganti. Dari sini, Anda dapat memilih opsi pencarian tambahan, seperti mencocokkan huruf besar dan kecil dan mengabaikan tanda baca.
                <img src="https://media.gcflearnfree.org/content/568bdf328d7fa91e7c8d89a2_01_05_2016/2016-01-05_12-34-52.png" alt="Opsi pencarian tambahan">
            </p>
            <p>Saat menggunakan <strong>Ganti Semua</strong>, penting untuk diingat bahwa ini mungkin menemukan kecocokan yang tidak Anda antisipasi dan mungkin sebenarnya tidak ingin Anda ubah. Anda sebaiknya hanya menggunakan opsi ini jika Anda benar-benar yakin opsi ini tidak akan menggantikan apa pun yang tidak Anda inginkan.</p>
        
            <h2>Tantangan!</h2>
            <ol>
                <li><a href="https://media.gcflearnfree.org/content/568bdf328d7fa91e7c8d89a2_01_05_2016/word2016_findreplace_practice.docx">Buka dokumen latihan kami</a>.</li>
                <li>Dengan menggunakan fitur <strong>Temukan</strong>, tentukan halaman mana yang menyebutkan <strong>Caroline Gordon</strong>.</li>
                <li>Nama <strong>TS Eliot</strong> salah eja. Menggantikan semua contoh <strong>Elliot</strong> dengan <strong>Eliot</strong>. Setelah selesai, Anda seharusnya melakukan tiga penggantian.</li>
                <li>Nama <strong>Allen Tate</strong> juga salah eja. Temukan dan Gantikan <strong>Alan</strong> dengan <strong>Allen</strong>. <strong>Petunjuk:</strong> Jangan gunakan <strong>Ganti Semua</strong>. Jika tidak, Anda mungkin tidak sengaja mengganti kata <strong>balance</strong>.</li>
            </ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Indentasi dan Tab',
            'course_id' => '26',
            'desc' => '  <div class="content">
            <h1>Memanfaatkan Indentasi dan Tab di Microsoft Word</h1>
            <p>Teks yang diindentasi menambah struktur pada dokumen Anda dengan memungkinkan Anda memisahkan informasi. Baik Anda ingin memindahkan satu baris atau seluruh paragraf, Anda dapat menggunakan pemilih tab dan penggaris horizontal untuk mengatur tab dan indentasi.</p>
            <p><strong>Opsional:</strong> <a href="https://media.gcflearnfree.org/content/568c17f98d7fa91e7c8d89a9_01_05_2016/word2016_indentstabs_practice.docx">Unduh dokumen latihan kami</a>.</p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang cara menggunakan indentasi dan tab di Word.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/vJGYWVe52T4?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Teks Indentasi</h2>
            <p>Dalam banyak jenis dokumen, Anda mungkin ingin membuat indentasi hanya pada baris pertama setiap paragraf. Ini membantu memisahkan paragraf satu sama lain secara visual.</p>
            <img src="path/to/ruler.jpg" alt="Penggaris di Microsoft Word">
            <p>Setiap baris juga dapat diindentasi kecuali baris pertama, yang dikenal sebagai indentasi gantung.</p>
            <img src="path/to/ruler.jpg" alt="Penggaris di Microsoft Word">
            <h3>Untuk Membuat Indentasi Menggunakan Tombol Tab</h3>
            <ol class="instructions">
                <li>Tempatkan titik penyisipan di awal paragraf yang ingin Anda indentasi.</li>
                <img src="https://media.gcflearnfree.org/content/568c17f98d7fa91e7c8d89a9_01_05_2016/2016-01-05_15-52-21.png" alt="Penggaris di Microsoft Word">
                <li>Tekan tombol <strong>Tab</strong>. Pada Penggaris, Anda akan melihat penanda indentasi baris pertama bergerak ke kanan sebesar 1/2 inci.</li>
                <li>Baris pertama paragraf akan diindentasi.</li>
                <img src="https://media.gcflearnfree.org/content/568c17f98d7fa91e7c8d89a9_01_05_2016/2016-01-05_15-15-13.png" alt="Penggaris di Microsoft Word">
                <li>Jika Anda tidak dapat melihat Penggaris, pilih tab <strong>Lihat</strong>, lalu klik kotak centang di samping <strong>Penggaris</strong>.</li>
                <img src="https://media.gcflearnfree.org/content/568c17f98d7fa91e7c8d89a9_01_05_2016/2016-01-07_13-10-13.png" alt="Penggaris di Microsoft Word">
            </ol>
    
            <h3>Penanda Indentasi</h3>
            <p>Dalam beberapa kasus, Anda mungkin ingin memiliki kontrol lebih besar terhadap indentasi. Word menyediakan penanda indentasi yang memungkinkan Anda mengindentasi paragraf ke lokasi yang Anda inginkan.</p>
            <img src="https://media.gcflearnfree.org/content/568c17f98d7fa91e7c8d89a9_01_05_2016/2016-01-07_13-43-05.png" alt="Penggaris di Microsoft Word">
            <p>Penanda indentasi terletak di sebelah kiri penggaris horizontal, dan menyediakan beberapa opsi indentasi:</p>
            <ul>
                <li>Penanda indentasi baris pertama menyesuaikan indentasi baris pertama</li>
                <li>Penanda indentasi gantung menyesuaikan indentasi gantung</li>
                <li>Penanda inden kiri memindahkan penanda indentasi baris pertama dan penanda indentasi gantung secara bersamaan (ini akan membuat indentasi semua baris dalam sebuah paragraf)</li>
            </ul>
            <p>Untuk membuat indentasi menggunakan penanda indentasi:</p>
            <ol class="instructions">
                <li>Tempatkan titik penyisipan di mana saja dalam paragraf yang ingin Anda indentasi, atau pilih satu atau beberapa paragraf.</li>
                <img src="https://media.gcflearnfree.org/content/568c17f98d7fa91e7c8d89a9_01_05_2016/2016-01-05_15-19-55.png" alt="Penggaris di Microsoft Word">
                <li>Klik dan seret penanda indentasi yang diinginkan. Dalam contoh kita, kita akan mengklik dan menyeret penanda indentasi ke kiri.</li>
                <img src="https://media.gcflearnfree.org/content/568c17f98d7fa91e7c8d89a9_01_05_2016/2016-01-05_15-20-51.png" alt="Penggaris di Microsoft Word">
                <li>Lepaskan mousenya. Paragrafnya akan menjorok ke dalam.</li>
                <img src="https://media.gcflearnfree.org/content/568c17f98d7fa91e7c8d89a9_01_05_2016/2016-01-05_15-21-37.png" alt="Contoh penggunaan tab di resume">
            </ol>
    
            <h3>Untuk Membuat Indentasi Menggunakan Perintah Indent</h3>
            <ol class="instructions">
                <li>Pilih teks yang ingin Anda indentasi.</li>
                <img src="https://media.gcflearnfree.org/content/568c17f98d7fa91e7c8d89a9_01_05_2016/indent_commands_before.png" alt="Contoh penggunaan tab di resume">
                <li>Pada tab <strong>Beranda</strong>, klik perintah <strong>Tingkatkan Indentasi</strong> atau <strong>Kurangi Indentasi</strong>.</li>
                <img src="https://media.gcflearnfree.org/content/568c17f98d7fa91e7c8d89a9_01_05_2016/2016-01-08_11-24-47.png" alt="Contoh penggunaan tab di resume">
                <li>Teks akan menjadi indentasi.</li>
                <img src="https://media.gcflearnfree.org/content/568c17f98d7fa91e7c8d89a9_01_05_2016/indent_commands_after.png" alt="Contoh penggunaan tab di resume">
                <li>Untuk menyesuaikan jumlah indentasi, pilih tab <strong>Layout</strong> di dekat nilai yang diinginkan dalam kotak di bawah <strong>Indent</strong>.</li>
                <img src="https://media.gcflearnfree.org/content/568c17f98d7fa91e7c8d89a9_01_05_2016/2016-01-05_15-26-25.png" alt="Contoh penggunaan tab di resume">
            </ol>
    
            <h2>Tab</h2>
            <p>Menggunakan tab memberi Anda kontrol lebih besar atas penempatan teks. Secara default, setiap kali Anda menekan tombol Tab, titik penyisipan akan bergerak 1/2 inci ke kanan. Menambahkan perhentian tab ke Penggaris memungkinkan Anda mengubah ukuran tab, dan Word bahkan memungkinkan Anda menerapkan lebih dari satu perhentian tab ke satu baris. Misalnya, pada resume Anda bisa meratakan kiri awal baris dan meratakan kanan akhir baris dengan menambahkan Tab Kanan, seperti yang ditunjukkan pada gambar di bawah.</p>
            <img src="https://media.gcflearnfree.org/content/568c17f98d7fa91e7c8d89a9_01_05_2016/2016-01-05_15-29-35.png" alt="Contoh penggunaan tab di resume">
    
            <p>Menekan tombol Tab dapat menambahkan tab atau membuat indentasi baris pertama, bergantung pada lokasi titik penyisipan. Umumnya, jika titik penyisipan berada di awal paragraf yang sudah ada, maka akan dibuat indentasi baris pertama; jika tidak, itu akan membuat tab.</p>
    
            <h3>Pemilih Tab</h3>
            <p>Pemilih tab terletak di atas penggaris vertikal di sebelah kiri. Arahkan mouse ke atas pemilih tab untuk melihat nama perhentian tab yang aktif.</p>
            <img src="https://media.gcflearnfree.org/content/568c17f98d7fa91e7c8d89a9_01_05_2016/2016-01-05_15-30-55.png" alt="Menghapus tab stop dari penggaris">
            <p>Jenis perhentian tab:</p>
            <ul>
                <li><strong>Tab Kiri:</strong> Meratakan teks ke kiri pada tab stop.</li>
                <li><strong>Tab Tengah:</strong> Memusatkan teks di sekitar perhentian tab.</li>
                <li><strong>Tab Kanan:</strong> Menyelaraskan teks di perhentian tab.</li>
                <li><strong>Tab Desimal:</strong> Menyelaraskan angka desimal menggunakan titik desimal.</li>
                <li><strong>Bar Tab:</strong> Menggambar garis vertikal pada dokumen.</li>
                <li><strong>Indentasi Baris Pertama:</strong> Menyisipkan penanda indentasi pada Penggaris dan mengindentasi baris pertama teks dalam sebuah paragraf.</li>
                <li><strong>Indentasi Gantung:</strong> Menyisipkan penanda indentasi gantung dan mengindentasi semua baris selain baris pertama.</li>
            </ul>
            <p>Meskipun Bar Tab, First Line Indent, dan Hang Indent muncul di pemilih tab, secara teknis keduanya bukanlah tab.</p>
    
            <h3>Untuk Menambahkan Perhentian Tab</h3>
            <ol class="instructions">
                <li>Pilih paragraf atau paragraf yang ingin Anda tambahkan tab stop. Jika Anda tidak memilih paragraf apa pun, perhentian tab akan berlaku untuk paragraf saat ini dan paragraf baru yang Anda ketik di bawahnya.</li>
                <img src="https://media.gcflearnfree.org/content/568c17f98d7fa91e7c8d89a9_01_05_2016/2016-01-05_15-33-14.png" alt="Menghapus tab stop dari penggaris">
                <li>Klik pemilih tab hingga tab stop yang ingin Anda gunakan muncul. Dalam contoh kita, kita akan memilih Tab Kanan.</li>
                <img src="https://media.gcflearnfree.org/content/568c17f98d7fa91e7c8d89a9_01_05_2016/2016-01-07_14-49-26.png" alt="Menghapus tab stop dari penggaris">
                <li>Klik lokasi pada penggaris horizontal di mana Anda ingin teks Anda muncul (akan membantu jika mengeklik tepi bawah Penggaris). Anda dapat menambahkan perhentian tab sebanyak yang Anda inginkan.</li>
                <img src="https://media.gcflearnfree.org/content/568c17f98d7fa91e7c8d89a9_01_05_2016/2016-01-05_15-35-28.png" alt="Menghapus tab stop dari penggaris">
                <li>Tempatkan titik penyisipan di depan teks yang ingin Anda tab, lalu tekan tombol Tab. Teks akan melompat ke perhentian tab berikutnya. Dalam contoh kita, kita akan memindahkan setiap rentang tanggal ke tab stop yang kita buat.</li>
                <img src="https://media.gcflearnfree.org/content/568c17f98d7fa91e7c8d89a9_01_05_2016/2016-01-07_14-54-27.png" alt="Menghapus tab stop dari penggaris">
            </ol>
    
            <h3>Menghapus Tab Stop</h3>
            <p>Sebaiknya hapus tab stop yang tidak Anda gunakan agar tidak mengganggu. Untuk menghapus tab stop, pertama-tama pilih semua teks yang menggunakan tab stop. Kemudian klik dan seret keluar dari Ruler.</p>
            <img src="https://media.gcflearnfree.org/content/568c17f98d7fa91e7c8d89a9_01_05_2016/2016-01-05_15-39-36.png" alt="Menghapus tab stop dari penggaris">
    
            <p>Word juga dapat menampilkan simbol pemformatan tersembunyi seperti spasi, tanda paragraf, dan tab untuk membantu Anda melihat pemformatan di dokumen Anda. Untuk menampilkan simbol pemformatan tersembunyi, pilih tab <strong>Beranda</strong>, lalu klik perintah <strong>Tampilkan/Sembunyikan</strong>.</p>
            <img src="https://media.gcflearnfree.org/content/568c17f98d7fa91e7c8d89a9_01_05_2016/2016-01-05_16-39-51.png" alt="Menampilkan simbol pemformatan tersembunyi">
    
            <h2>Tantangan!</h2>
            <ol class="instructions">
                <li><a href="https://media.gcflearnfree.org/content/568c17f98d7fa91e7c8d89a9_01_05_2016/word2016_indentstabs_practice.docx">Buka dokumen latihan kami</a>.</li>
                <li>Gunakan tombol Tab untuk membuat indentasi awal setiap paragraf di badan surat lamaran. Ini dimulai dengan <strong>Saya sangat tertarik</strong>, <strong>Saat sedang mengerjakannya</strong>, dan <strong>Terlampir adalah salinannya</strong>.</li>
                <li>Setelah selesai, halaman pertama akan terlihat seperti ini:
                    <img src="https://media.gcflearnfree.org/content/568c17f98d7fa91e7c8d89a9_01_05_2016/word2016_indents2_img1.png" alt="Hasil tantangan pertama">
                </li>
                <li>Gulir ke halaman 2.</li>
                <li>Pilih semua teks di bawah <strong>Pelatihan & Pendidikan</strong> di halaman 2.</li>
                <li>Tempatkan tab kanan pada tanda 6" (15,25 cm).</li>
                <li>Masukkan kursor Anda sebelum setiap rentang tanggal, lalu tekan tombol Tab. Tanggal-tanggal tersebut meliputi tahun <strong>2008</strong>, <strong>1997-2001</strong>, dan <strong>1995-1997</strong>.</li>
                <li>Pilih setiap deskripsi pekerjaan di bagian <strong>Pengalaman</strong> dan pindahkan Indentasi Kiri ke tanda 0,25" (50 mm).</li>
                <li>Setelah selesai, halaman 2 akan terlihat seperti ini:
                    <img src="https://media.gcflearnfree.org/content/568c17f98d7fa91e7c8d89a9_01_05_2016/word2016_indents2_img2.png" alt="Hasil tantangan kedua">
                </li>
            </ol>
        </div>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Spasi Baris dan Paragraf',
            'course_id' => '27',
            'desc' => '    <div class="content">
            <h1>Meningkatkan Spasi Baris dan Paragraf di Microsoft Word</h1>
            <p>Saat Anda mendesain dokumen dan membuat keputusan pemformatan, Anda perlu mempertimbangkan spasi baris dan paragraf. Anda dapat menambah spasi untuk meningkatkan keterbacaan dan menguranginya agar dapat memuat lebih banyak teks pada halaman.</p>
            <p><strong>Opsional:</strong> <a href="https://media.gcflearnfree.org/content/568d25ef8d7fa91e7c8d89ad_01_06_2016/word2016_lineparagraphspacing_practice.docx">Unduh dokumen latihan kami</a>.</p>
            <p>Tonton video di bawah ini untuk mempelajari cara menyempurnakan spasi baris dan paragraf di dokumen Anda.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/mXWvKHWe2Co?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Tentang Spasi Baris</h2>
            <p>Spasi baris adalah jarak antar baris dalam sebuah paragraf. Word memungkinkan Anda menyesuaikan spasi baris menjadi spasi tunggal (tinggi satu baris), spasi ganda (tinggi dua baris), atau jumlah lainnya yang Anda inginkan. Spasi default di Word adalah 1,08 baris, yang sedikit lebih besar dari spasi tunggal.</p>
            <img src="https://media.gcflearnfree.org/content/568d25ef8d7fa91e7c8d89ad_01_06_2016/2016-01-08_10-34-42.png" alt="Contoh spasi baris">
            <p>Spasi baris juga dikenal sebagai lead (diucapkan berima dengan wedding).</p>
    
            <h3>Untuk Memformat Spasi Baris</h3>
            <ol class="instructions">
                <li>Pilih teks yang ingin Anda format.</li>
                <img src="https://media.gcflearnfree.org/content/568d25ef8d7fa91e7c8d89ad_01_06_2016/2016-01-11_09-46-34.png" alt="Halaman hasil tantangan">
                <li>Pada tab <strong>Home</strong>, klik perintah <strong>Line and Paragraph Spacing</strong>, lalu pilih line spacing yang diinginkan.</li>
                <img src="https://media.gcflearnfree.org/content/568d25ef8d7fa91e7c8d89ad_01_06_2016/2016-01-11_09-49-05.png" alt="Halaman hasil tantangan">
                <li>Spasi baris dalam dokumen akan berubah.</li>
                <img src="https://media.gcflearnfree.org/content/568d25ef8d7fa91e7c8d89ad_01_06_2016/2016-01-11_09-51-32.png" alt="Halaman hasil tantangan">
            </ol>
    
            <h3>Penyempurnaan Spasi Baris</h3>
            <p>Opsi spasi baris Anda tidak terbatas pada yang ada di menu <strong>Spasi Baris dan Paragraf</strong>. Untuk mengatur spasi dengan lebih presisi, pilih <strong>Opsi Spasi Baris</strong> dari menu untuk mengakses kotak dialog <strong>Paragraf</strong>. Anda kemudian akan memiliki beberapa opsi tambahan yang dapat Anda gunakan untuk menyesuaikan spasi.</p>
    
            <h2>Spasi Paragraf</h2>
            <p>Sama seperti Anda dapat memformat spasi antar baris dalam dokumen Anda, Anda juga dapat menyesuaikan spasi sebelum dan sesudah paragraf. Ini berguna untuk memisahkan paragraf, judul, dan subjudul.</p>
    
            <h3>Untuk Memformat Spasi Paragraf:</h3>
            <ol class="instructions">
                <li>Pilih paragraf atau paragraf yang ingin Anda format.</li>
                <img src="https://media.gcflearnfree.org/content/568d25ef8d7fa91e7c8d89ad_01_06_2016/2016-01-11_09-46-34.png" alt="Halaman hasil tantangan">
                <li>Pada tab <strong>Beranda</strong>, klik perintah <strong>Spasi Baris dan Paragraf</strong>. Klik <strong>Tambahkan Spasi Sebelum Paragraf</strong> atau <strong>Hapus Spasi Setelah Paragraf</strong> dari menu tarik-turun.</li>
                <img src="https://media.gcflearnfree.org/content/568d25ef8d7fa91e7c8d89ad_01_06_2016/2016-01-11_13-00-51.png" alt="Halaman hasil tantangan">
                <li>Spasi paragraf dalam dokumen akan berubah.</li>
                <img src="https://media.gcflearnfree.org/content/568d25ef8d7fa91e7c8d89ad_01_06_2016/2016-01-11_13-03-40.png" alt="Halaman hasil tantangan">
            </ol>
    
            <p>Dari menu drop-down, Anda juga dapat memilih <strong>Opsi Spasi Baris</strong> untuk membuka kotak dialog <strong>Paragraf</strong>. Dari sini, Anda dapat mengontrol berapa banyak ruang yang ada sebelum dan sesudah paragraf.</p>
            <img src="https://media.gcflearnfree.org/content/568d25ef8d7fa91e7c8d89ad_01_06_2016/2016-01-08_10-58-38.png" alt="Halaman hasil tantangan">
            <p>Anda dapat menggunakan fitur <strong>Set as Default</strong> di Word untuk menyimpan semua perubahan format yang Anda buat dan secara otomatis menerapkannya ke dokumen baru.</p>
    
            <h2>Tantangan!</h2>
            <ol class="instructions">
                <li><a href="https://media.gcflearnfree.org/content/568d25ef8d7fa91e7c8d89ad_01_06_2016/word2016_lineparagraphspacing_practice.docx">Buka dokumen latihan kami</a>.</li>
                <li>Pilih tanggal dan blok alamat. Ini dimulai pada <strong>13 April 2016</strong>, dan diakhiri dengan <strong>Trenton, NJ 08601</strong>.</li>
                <li>Ubah spasi sebelum paragraf menjadi <strong>12 pt</strong> dan spasi setelah paragraf menjadi <strong>30 pt</strong>.</li>
                <li>Pilih badan surat. Ini dimulai dengan <strong>saya sangat</strong> dan diakhiri dengan <strong>pertimbangan Anda</strong>.</li>
                <li>Ubah spasi baris menjadi <strong>1,15</strong>.</li>
                <li>Setelah selesai, halaman Anda akan terlihat seperti ini:
                    <img src="https://media.gcflearnfree.org/content/568d25ef8d7fa91e7c8d89ad_01_06_2016/word2016_linespacing_img3.png" alt="Halaman hasil tantangan">
                </li>
            </ol>
        </div>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Daftar',
            'course_id' => '28',
            'desc' => '    <div class="content">
            <h1>Membuat Daftar Berpoin dan Bernomor di Microsoft Word</h1>
            <p>Daftar berpoin dan bernomor dapat digunakan dalam dokumen Anda untuk menguraikan, mengatur, dan menekankan teks. Dalam pelajaran ini, Anda akan mempelajari cara memodifikasi poin yang ada, menyisipkan daftar berpoin dan bernomor baru, memilih simbol sebagai poin, dan memformat daftar bertingkat.</p>
            <p><strong>Opsional:</strong> <a href="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/word2016_lists_practice.docx">Unduh dokumen latihan kami</a>.</p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang daftar di Word.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/tyXahko-tX8?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Untuk membuat daftar berpoin:</h2>
            <ol class="instructions">
                <li>Pilih teks yang ingin Anda format sebagai daftar.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_create_bulleted_select.png" alt="Memilih teks untuk daftar berpoin">
                </li>
                <li>Pada tab <strong>Beranda</strong>, klik panah tarik-turun di sebelah perintah <strong>Poin</strong>. Menu gaya poin akan muncul.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_create_bulleted_command.png" alt="Menu gaya poin">
                </li>
                <li>Gerakkan mouse ke berbagai gaya poin. Pratinjau langsung gaya poin akan muncul di dokumen. Pilih gaya poin yang ingin Anda gunakan.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_create_bulleted_menu2.png" alt="Memilih gaya poin">
                </li>
                <li>Teks akan diformat sebagai daftar berpoin.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_create_bulleted_result2.png" alt="Teks diformat sebagai daftar berpoin">
                </li>
            </ol>
    
            <h2>Untuk membuat daftar bernomor:</h2>
            <ol class="instructions">
                <li>Pilih teks yang ingin Anda format sebagai daftar.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_create_numbered_select.png" alt="Memilih teks untuk daftar bernomor">
                </li>
                <li>Pada tab <strong>Beranda</strong>, klik panah tarik-turun di sebelah perintah <strong>Penomoran</strong>. Menu gaya penomoran akan muncul.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_create_numbered_command.png" alt="Menu gaya penomoran">
                </li>
                <li>Gerakkan mouse ke berbagai gaya penomoran. Pratinjau langsung gaya penomoran akan muncul di dokumen. Pilih gaya penomoran yang ingin Anda gunakan.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_create_numbered_menu.png" alt="Memilih gaya penomoran">
                </li>
                <li>Teks akan diformat sebagai daftar bernomor.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_create_numbered_result.png" alt="Teks diformat sebagai daftar bernomor">
                </li>
            </ol>
    
            <h2>Untuk memulai ulang daftar bernomor:</h2>
            <ol class="instructions">
                <li>Jika Anda ingin memulai ulang penomoran daftar, Word memiliki opsi <strong>Mulai Ulang di 1</strong>. Ini dapat diterapkan pada daftar numerik dan abjad.
                </li>
                <li>Klik kanan item daftar yang ingin Anda mulai ulang penomorannya, lalu pilih <strong>Mulai ulang pada 1</strong> dari menu yang muncul.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_restart_numbering_menu.png" alt="Memulai ulang penomoran pada 1">
                </li>
                <li>Penomoran daftar akan dimulai ulang.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_restart_numbering_result.png" alt="Daftar yang dimulai ulang">
                </li>
                <li>Anda juga dapat mengatur daftar untuk melanjutkan penomoran dari daftar sebelumnya. Untuk melakukannya, klik kanan dan pilih <strong>Lanjutkan Penomoran</strong>.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_restart_numbering_continue.png" alt="Melanjutkan penomoran">
                </li>
            </ol>
    
            <h2>Menyesuaikan poin:</h2>
            <p>Menyesuaikan tampilan poin dalam daftar Anda dapat membantu Anda menekankan item daftar tertentu dan mempersonalisasi desain daftar Anda. Word memungkinkan Anda memformat poin dalam berbagai cara. Anda dapat menggunakan simbol dan warna berbeda, atau bahkan mengunggah gambar sebagai poin.</p>
    
            <h3>Untuk menggunakan simbol sebagai poin:</h3>
            <ol class="instructions">
                <li>Pilih daftar yang ada yang ingin Anda format.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_bullet_symbol_select2.png" alt="Memilih daftar yang ada">
                </li>
                <li>Pada tab <strong>Beranda</strong>, klik panah tarik-turun di sebelah perintah <strong>Poin</strong>. Pilih <strong>Tentukan Poin Baru</strong> dari menu tarik-turun.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_bullet_symbol_menu2.png" alt="Mendefinisikan peluru baru">
                </li>
                <li>Kotak dialog <strong>Define New Bullet</strong> akan muncul. Klik tombol <strong>Simbol</strong>.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_bullet_symbol_define2.png" alt="Mengklik tombol Simbol">
                </li>
                <li>Kotak dialog <strong>Simbol</strong> akan muncul.
                </li>
                <li>Klik kotak drop-down Font dan pilih font. Font Wingdings dan Simbol adalah pilihan yang baik karena memiliki banyak simbol yang berguna.
                </li>
                <li>Pilih simbol yang diinginkan, lalu klik OK.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_bullet_symbol_wingdings.png" alt="Memilih simbol">
                </li>
                <li>Simbol akan muncul di bagian Pratinjau pada kotak dialog <strong>Define New Bullet</strong>. Klik Oke.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_bullet_symbol_ok.png" alt="Pratinjau simbol baru">
                </li>
                <li>Simbol tersebut akan muncul dalam daftar.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_bullet_symbol_result.png" alt="Daftar yang diformat">
                </li>
            </ol>
    
            <h3>Untuk mengubah warna poin:</h3>
            <ol class="instructions">
                <li>Pilih daftar yang ada yang ingin Anda format.
                    <img src="path/to/image24.jpghttps://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_bullet_color_select.png" alt="Memilih daftar">
                </li>
                <li>Pada tab <strong>Beranda</strong>, klik panah tarik-turun di sebelah perintah <strong>Poin</strong>. Pilih <strong>Tentukan Poin Baru</strong> dari menu tarik-turun.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_bullet_color_menu.png" alt="Memilih Tentukan Poin Baru di menu Poin">
                </li>
                <li>Kotak dialog <strong>Define New Bullet</strong> akan muncul. Klik tombol <strong>Font</strong>.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_bullet_color_define.png" alt="Mengklik tombol Font">
                </li>
                <li>Kotak dialog <strong>Font</strong> akan muncul. Klik kotak tarik-turun <strong>Warna Font</strong>. Menu warna font akan muncul.
                </li>
                <li>Pilih warna yang diinginkan, lalu klik OK.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_bullet_color_green.png" alt="Mengubah warna peluru">
                </li>
                <li>Warna poin akan muncul di bagian Pratinjau pada kotak dialog <strong>Tentukan Poin Baru</strong>. Klik Oke.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_bullet_color_ok.png" alt="Mengklik Oke">
                </li>
                <li>Warna poin dalam daftar akan berubah.
                    <img src="path/to/image30.jpghttps://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_bullet_color_result.png" alt="Warna peluru baru">
                </li>
            </ol>
    
            <h2>Daftar bertingkat:</h2>
            <p>Daftar bertingkat memungkinkan Anda membuat kerangka dengan beberapa tingkatan. Daftar berpoin atau bernomor apa pun dapat diubah menjadi daftar bertingkat dengan menggunakan tombol Tab.</p>
    
            <h3>Untuk membuat daftar bertingkat:</h3>
            <ol class="instructions">
                <li>Tempatkan titik penyisipan di awal garis yang ingin Anda pindahkan.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_multilevel_create_select2.png" alt="Menempatkan titik penyisipan">
                </li>
                <li>Tekan tombol Tab untuk menambah level indentasi garis. Garis akan bergerak ke kanan.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_multilevel_create_tab2.png" alt="Meningkatkan tingkat indentasi">
                </li>
            </ol>
    
            <h3>Untuk menambah atau mengurangi tingkat indentasi:</h3>
            <p>Anda dapat melakukan penyesuaian pada pengorganisasian daftar bertingkat dengan menambah atau mengurangi tingkat indentasi. Ada beberapa cara untuk mengubah level indentasi.</p>
            <ol class="instructions">
                <li>Untuk menambah indentasi lebih dari satu level, letakkan titik penyisipan di awal baris, lalu tekan tombol Tab hingga level yang diinginkan tercapai.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_multilevel_level_increase2.png" alt="Meningkatkan level indentasi lebih dari satu kali">
                </li>
                <li>Untuk mengurangi tingkat indentasi, letakkan titik penyisipan di awal baris, lalu tahan tombol Shift dan tekan tombol Tab.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_multilevel_level_decrease2.png" alt="Menurunkan level garis">
                </li>
                <li>Anda juga dapat menambah atau mengurangi tingkat teks dengan menempatkan titik penyisipan di mana saja dalam baris dan mengklik perintah <strong>Tingkatkan Indentasi</strong> atau <strong>Kurangi Indentasi</strong>.
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_multilevel_level_commands2.png" alt="Perintah Tambah Indent dan Kurangi Indent">
                </li>
            </ol>
    
            <p>Saat memformat daftar bertingkat, Word akan menggunakan gaya poin default. Untuk mengubah gaya daftar bertingkat, pilih daftar, lalu klik perintah <strong>Daftar bertingkat</strong> pada tab <strong>Beranda</strong>.
                <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/lists_multilevel_level_style.png" alt="Memformat daftar bertingkat">
            </p>
    
            <h2>Tantangan!</h2>
            <ol class="instructions">
                <li><a href="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/word2016_lists_practice.docx">Buka dokumen latihan kami</a>.
                </li>
                <li>Gulir ke halaman 3.
                </li>
                <li>Pilih teks di bawah <strong>Anggota Baru</strong> yang dimulai dengan <strong>Carolyn</strong> dan diakhiri dengan <strong>Co-Bendahara</strong>, dan format sebagai daftar berpoin.
                </li>
                <li>Dengan teks masih dipilih, gunakan kotak dialog <strong>Define New Bullet</strong> untuk mengubah poin menjadi bintang hijau. Petunjuk: Anda dapat menemukan bintang di font Wingdings.
                </li>
                <li>Tingkatkan level indent sebanyak 1 untuk baris <strong>Social Media Marketing</strong>, <strong>Fundraising</strong>, dan <strong>Co-Treasurer</strong>.
                </li>
                <li>Tingkatkan level indentasi sebesar 2 untuk garis <strong>Terutama Eropa</strong>.
                </li>
                <li>Dalam daftar <strong>Laporan Bendahara</strong>, turunkan tingkat indentasi sebesar 1 untuk baris <strong>Jumlah tersedia bulan ini</strong>.
                </li>
                <li>Dalam daftar <strong>Laporan Komunikasi</strong>, mulai ulang penomoran di 1.
                </li>
                <li>Ketika Anda selesai, halaman Anda akan terlihat seperti ini:
                    <img src="https://media.gcflearnfree.org/content/566853c4aaa9170d6ccc7ddc_12_09_2015/word2016_lists_img.png" alt="Halaman hasil tantangan">
                </li>
            </ol>
        </div>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Hyperlink',
            'course_id' => '29',
            'desc' => '    <div class="content">
            <h1>Menambahkan Hyperlink di Microsoft Word</h1>
            <p>Menambahkan hyperlink ke teks dapat memberikan akses ke situs web dan alamat email langsung dari dokumen Anda. Ada beberapa cara untuk menyisipkan hyperlink ke dalam dokumen Anda. Bergantung pada bagaimana Anda ingin tautan itu muncul, Anda bisa menggunakan pemformatan tautan otomatis Word atau mengonversi teks menjadi tautan.</p>
            <p><strong>Opsional:</strong> <a href="https://media.gcflearnfree.org/content/566ada8faaa9180d6cfc0f77_12_11_2015/word2016_hyperlinks_practice.docx">Unduh dokumen latihan kami</a>.</p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang hyperlink di Word.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/mNJZo8ESMp0?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Memahami hyperlink di Word</h2>
            <p>Hyperlink memiliki dua bagian dasar: alamat (URL) halaman web dan teks tampilan. Misalnya, alamatnya bisa berupa <a href="http://www.popsci.com">http://www.popsci.com</a>, dan teks tampilannya bisa berupa Majalah Sains Populer. Saat membuat hyperlink di Word, Anda dapat memilih alamat dan teks tampilan.</p>
            <p>Word sering kali mengenali alamat email dan web saat Anda mengetik dan secara otomatis akan memformatnya sebagai hyperlink setelah Anda menekan Enter atau spasi. Pada gambar di bawah, Anda dapat melihat alamat web hyperlink.</p>
            <img src="https://media.gcflearnfree.org/content/566ada8faaa9180d6cfc0f77_12_11_2015/hyperlinks_understanding_website_example.png" alt="Alamat web hyperlink">
            <p>Untuk mengikuti hyperlink di Word, tahan tombol Ctrl dan klik hyperlink.</p>
            <img src="https://media.gcflearnfree.org/content/566ada8faaa9180d6cfc0f77_12_11_2015/hyperlinks_understanding_ctrl_follow.png" alt="Mengikuti hyperlink">
    
            <h2>Untuk memformat teks dengan hyperlink:</h2>
            <ol class="instructions">
                <li>Pilih teks yang ingin Anda format sebagai hyperlink.
                    <img src="https://media.gcflearnfree.org/content/566ada8faaa9180d6cfc0f77_12_11_2015/hyperlinks_format_select.png" alt="Memilih teks untuk hyperlink">
                </li>
                <li>Pilih tab <strong>Sisipkan</strong>, lalu klik perintah <strong>Hyperlink</strong>.
                    <img src="https://media.gcflearnfree.org/content/566ada8faaa9180d6cfc0f77_12_11_2015/hyperlinks_format_command.png" alt="Mengklik perintah Hyperlink">
                </li>
                <li>Alternatifnya, Anda dapat membuka kotak dialog <strong>Sisipkan Hyperlink</strong> dengan mengklik kanan teks yang dipilih dan memilih <strong>Hyperlink...</strong> dari menu yang muncul.
                </li>
                <li>Kotak dialog <strong>Sisipkan Hyperlink</strong> akan muncul. Dengan menggunakan opsi di sisi kiri, Anda dapat memilih untuk menautkan ke file, halaman web, alamat email, dokumen, atau tempat di dokumen saat ini.
                </li>
                <li>Teks yang dipilih akan muncul di bidang <strong>Teks untuk ditampilkan:</strong> di bagian atas. Anda dapat mengubah teks ini jika Anda mau.
                </li>
                <li>Di kolom <strong>Alamat:</strong>, ketik alamat yang ingin Anda tautkan, lalu klik OK.
                    <img src="https://media.gcflearnfree.org/content/566ada8faaa9180d6cfc0f77_12_11_2015/hyperlinks_format_insert.png" alt="Mengetik alamat dan klik OK">
                </li>
                <li>Teks kemudian akan diformat sebagai hyperlink.
                    <img src="https://media.gcflearnfree.org/content/566ada8faaa9180d6cfc0f77_12_11_2015/hyperlinks_format_result.png" alt="Hyperlink yang sudah selesai">
                </li>
            </ol>
    
            <h2>Mengedit dan menghapus hyperlink:</h2>
            <p>Setelah Anda menyisipkan hyperlink, Anda dapat mengklik kanan hyperlink tersebut untuk mengedit, membuka, menyalin, atau menghapusnya.</p>
            <img src="https://media.gcflearnfree.org/content/566ada8faaa9180d6cfc0f77_12_11_2015/hyperlinks_format_edit.png" alt="Opsi hyperlink">
            <p>Untuk menghapus hyperlink, klik kanan hyperlink tersebut dan pilih <strong>Hapus Hyperlink</strong> dari menu yang muncul.</p>
            <img src="https://media.gcflearnfree.org/content/566ada8faaa9180d6cfc0f77_12_11_2015/hyperlinks_format_remove.png" alt="Menghapus hyperlink">
    
            <h2>Tantangan!</h2>
            <ol class="instructions">
                <li><a href="https://media.gcflearnfree.org/content/566ada8faaa9180d6cfc0f77_12_11_2015/word2016_hyperlinks_practice.docx">Buka dokumen latihan kami</a>.
                </li>
                <li>Gulir ke halaman 4.
                </li>
                <li>Pada poin pertama di bawah <strong>Pengingat Komunitas</strong>, format kata <strong>situs web</strong> sebagai hyperlink ke <a href="http://www.epa.gov/recycle">http://www.epa.gov/recycle</a>.
                </li>
                <li>Uji hyperlink Anda untuk memastikannya berfungsi.
                </li>
                <li>Pada poin kedua, hapus hyperlink dari kata <strong>Taman dan Rekreasi</strong>.
                </li>
                <li>Ketika Anda selesai, halaman Anda akan terlihat seperti ini:
                    <img src="https://media.gcflearnfree.org/content/566ada8faaa9180d6cfc0f77_12_11_2015/word2016_hyperlink_img2.png" alt="Halaman hasil tantangan">
                </li>
            </ol>
        </div>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Tata Letak Halaman',
            'course_id' => '30',
            'desc' => '     <div class="content">
            <h1>Menyesuaikan Tata Letak Halaman di Microsoft Word</h1>
            <p>Word menawarkan berbagai tata letak halaman dan opsi pemformatan yang memengaruhi tampilan konten di halaman. Anda dapat menyesuaikan orientasi halaman, ukuran kertas, dan margin halaman bergantung pada tampilan dokumen yang Anda inginkan.</p>
            <p><strong>Opsional:</strong> <a href="https://media.gcflearnfree.org/content/567083aaaaa918141448fb08_12_15_2015/word2016_pagelayout_practice.docx">Unduh dokumen latihan kami</a>.</p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang tata letak halaman di Word.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/jgNpoksYOLE?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Orientasi halaman</h2>
            <p>Word menawarkan dua opsi orientasi halaman: lanskap dan potret. Bandingkan contoh kami di bawah ini untuk melihat bagaimana orientasi dapat memengaruhi tampilan dan spasi teks dan gambar.</p>
            <ul>
                <li>Lanskap artinya halaman diorientasikan secara horizontal.
                    <img src="https://media.gcflearnfree.org/content/567083aaaaa918141448fb08_12_15_2015/layout_orientation_landscape.png" alt="Orientasi lanskap">
                </li>
                <li>Potret berarti halaman diorientasikan secara vertikal.
                    <img src="https://media.gcflearnfree.org/content/567083aaaaa918141448fb08_12_15_2015/layout_orientation_portrait.png" alt="Orientasi potret">
                </li>
            </ul>
            <h3>Untuk mengubah orientasi halaman:</h3>
            <ol class="instructions">
                <li>Pilih tab <strong>Tata Letak</strong>.</li>
                <li>Klik perintah <strong>Orientation</strong> di grup <strong>Page Setup</strong>.
                    <img src="https://media.gcflearnfree.org/content/567083aaaaa918141448fb08_12_15_2015/layout_orientation_command.png" alt="Mengklik perintah Orientasi">
                </li>
                <li>Menu tarik-turun akan muncul. Klik <strong>Potret</strong> atau <strong>Lanskap</strong> untuk mengubah orientasi halaman.
                    <img src="https://media.gcflearnfree.org/content/567083aaaaa918141448fb08_12_15_2015/layout_orientation_menu.png" alt="Mengubah orientasi halaman">
                </li>
                <li>Orientasi halaman dokumen akan diubah.</li>
            </ol>
    
            <h2>Ukuran halaman</h2>
            <p>Secara default, ukuran halaman dokumen baru adalah 8,5 inci kali 11 inci. Tergantung pada proyek Anda, Anda mungkin perlu menyesuaikan ukuran halaman dokumen Anda. Penting untuk dicatat bahwa sebelum mengubah ukuran halaman default, Anda harus memeriksa ukuran halaman mana yang dapat diakomodasi oleh printer Anda.</p>
            <h3>Untuk mengubah ukuran halaman:</h3>
            <ol class="instructions">
                <li>Pilih tab <strong>Layout</strong>, lalu klik perintah <strong>Size</strong>.
                    <img src="https://media.gcflearnfree.org/content/567083aaaaa918141448fb08_12_15_2015/layout_size_command.png" alt="Mengklik perintah Ukuran">
                </li>
                <li>Menu tarik-turun akan muncul. Ukuran halaman saat ini disorot. Klik ukuran halaman yang telah ditentukan sebelumnya.
                    <img src="https://media.gcflearnfree.org/content/567083aaaaa918141448fb08_12_15_2015/layout_size_menu.png" alt="Mengubah ukuran halaman">
                </li>
                <li>Ukuran halaman dokumen akan diubah.</li>
            </ol>
            <h3>Untuk menggunakan ukuran halaman khusus:</h3>
            <ol class="instructions">
                <li>Dari tab <strong>Tata Letak</strong>, klik <strong>Ukuran</strong>. Pilih <strong>Lebih Banyak Ukuran Kertas</strong> dari menu tarik-turun.
                    <img src="https://media.gcflearnfree.org/content/567083aaaaa918141448fb08_12_15_2015/layout_custom_size_menu.png" alt="Memilih Lebih Banyak Ukuran Kertas...">
                </li>
                <li>Kotak dialog <strong>Pengaturan Halaman</strong> akan muncul. Sesuaikan nilai <strong>Lebar</strong> dan <strong>Tinggi</strong>, lalu klik OK.
                    <img src="https://media.gcflearnfree.org/content/567083aaaaa918141448fb08_12_15_2015/layout_custom_size_page_setup.png" alt="Kotak dialog Pengaturan Halaman">
                </li>
                <li>Ukuran halaman dokumen akan diubah.</li>
            </ol>
    
            <h2>Margin halaman</h2>
            <p>Margin adalah jarak antara teks dan tepi dokumen Anda. Secara default, margin dokumen baru diatur ke Normal, yang berarti ada jarak satu inci antara teks dan setiap tepinya. Tergantung pada kebutuhan Anda, Word memungkinkan Anda mengubah ukuran margin dokumen Anda.</p>
            <h3>Untuk memformat margin halaman:</h3>
            <ol class="instructions">
                <li>Pilih tab <strong>Layout</strong>, lalu klik perintah <strong>Margins</strong>.
                    <img src="https://media.gcflearnfree.org/content/567083aaaaa918141448fb08_12_15_2015/layout_margins_command.png" alt="Mengklik perintah Margin">
                </li>
                <li>Menu tarik-turun akan muncul. Klik ukuran margin yang telah ditentukan sebelumnya yang Anda inginkan.
                    <img src="https://media.gcflearnfree.org/content/567083aaaaa918141448fb08_12_15_2015/layout_margins_menu.png" alt="Mengubah margin halaman">
                </li>
                <li>Margin dokumen akan diubah.</li>
            </ol>
            <h3>Untuk menggunakan margin khusus:</h3>
            <ol class="instructions">
                <li>Dari tab <strong>Tata Letak</strong>, klik <strong>Margin</strong>. Pilih <strong>Margin Kustom</strong> dari menu tarik-turun.
                    <img src="https://media.gcflearnfree.org/content/567083aaaaa918141448fb08_12_15_2015/layout_custom_margins_menu.png" alt="Memilih Margin Khusus...">
                </li>
                <li>Kotak dialog <strong>Pengaturan Halaman</strong> akan muncul. Sesuaikan nilai untuk setiap margin, lalu klik OK.
                    <img src="https://media.gcflearnfree.org/content/567083aaaaa918141448fb08_12_15_2015/layout_custom_margins_page_setup.png" alt="Kotak dialog Pengaturan Halaman">
                </li>
                <li>Margin dokumen akan diubah.</li>
                <li>Alternatifnya, Anda dapat membuka kotak dialog <strong>Page Setup</strong> dengan menavigasi ke tab <strong>Layout</strong> dan mengklik panah kecil di sudut kanan bawah grup <strong>Page Setup</strong>.
                    <img src="https://media.gcflearnfree.org/content/567083aaaaa918141448fb08_12_15_2015/layout_page_setup.png" alt="Membuka kotak dialog Pengaturan Halaman">
                </li>
            </ol>
            <p>Anda dapat menggunakan fitur <strong>Set as Default</strong> di Word untuk menyimpan semua perubahan format yang Anda buat dan secara otomatis menerapkannya ke dokumen baru. Untuk mempelajari cara melakukan ini, baca artikel kami tentang Mengubah Pengaturan Default Anda di Word.</p>
    
            <h2>Tantangan!</h2>
            <ol class="instructions">
                <li><a href="https://media.gcflearnfree.org/content/567083aaaaa918141448fb08_12_15_2015/word2016_pagelayout_practice.docx">Buka dokumen latihan kami</a>.
                </li>
                <li>Ubah orientasi halaman menjadi Potret.
                </li>
                <li>Ubah ukuran halaman menjadi Legal. Jika ukuran Legal tidak tersedia, Anda dapat memilih ukuran lain seperti A5.
                </li>
                <li>Ubah margin ke pengaturan Sempit.
                </li>
                <li>Jika sudah selesai, dokumen Anda akan menjadi satu halaman jika menggunakan ukuran Legal. Seharusnya terlihat seperti ini:
                    <img src="https://media.gcflearnfree.org/content/567083aaaaa918141448fb08_12_15_2015/word2016_page_layout_img.png" alt="Halaman hasil tantangan">
                </li>
            </ol>
        </div>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Mencetak Dokumen',
            'course_id' => '31',
            'desc' => '<h1>Mencetak Dokumen di Microsoft Word</h1>
            <p>Setelah Anda membuat dokumen, Anda mungkin ingin mencetaknya untuk melihat dan membagikan pekerjaan Anda secara offline. Sangat mudah untuk melihat dan mencetak dokumen di Word menggunakan panel Print.</p>
            <p><strong>Opsional:</strong> <a href="https://media.gcflearnfree.org/content/566ed7c4aaa9181fb06b25ba_12_14_2015/word2016_printing_practice.docx">Unduh dokumen latihan kami</a>.</p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang mencetak dokumen di Word.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/7bLQFTCsH8Y?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Untuk mengakses panel Cetak:</h2>
            <ol class="instructions">
                <li>Pilih tab <strong>File</strong>. Tampilan belakang panggung akan muncul.
                    <img src="https://media.gcflearnfree.org/content/566ed7c4aaa9181fb06b25ba_12_14_2015/printing_pane_file_tab.png" alt="Memilih tab File">
                </li>
                <li>Pilih <strong>Cetak</strong>. Panel Cetak akan muncul.
                    <img src="https://media.gcflearnfree.org/content/566ed7c4aaa9181fb06b25ba_12_14_2015/printing_pane_print_tab.png" alt="Mengklik Cetak">
                </li>
            </ol>
            <p>Klik tombol interaktif di bawah ini untuk mempelajari lebih lanjut tentang penggunaan panel Cetak.</p>
            <img src="https://media.gcflearnfree.org/content/566ed7c4aaa9181fb06b25ba_12_14_2015/printing_pane_print_pane.png" alt="Memilih pencetak">
            <p>Anda juga dapat mengakses panel Cetak dengan menekan <strong>Ctrl+P</strong> pada keyboard Anda.</p>
    
            <h2>Untuk mencetak dokumen:</h2>
            <ol class="instructions">
                <li>Arahkan ke panel Print, lalu pilih printer yang diinginkan.
                    <img src="https://media.gcflearnfree.org/content/566ed7c4aaa9181fb06b25ba_12_14_2015/printing_to_print_1.png" alt="Memilih pencetak">
                </li>
                <li>Masukkan jumlah salinan yang ingin Anda cetak.
                    <img src="https://media.gcflearnfree.org/content/566ed7c4aaa9181fb06b25ba_12_14_2015/printing_to_print_2.png" alt="Memilih jumlah salinan">
                </li>
                <li>Pilih pengaturan tambahan apa pun jika diperlukan.
                    <img src="https://media.gcflearnfree.org/content/566ed7c4aaa9181fb06b25ba_12_14_2015/printing_to_print_3.png" alt="Mengubah pengaturan tambahan">
                </li>
                <li>Klik <strong>Cetak</strong>.
                    <img src="https://media.gcflearnfree.org/content/566ed7c4aaa9181fb06b25ba_12_14_2015/printing_to_print_4.png" alt="Mengklik cetak">
                </li>
            </ol>
    
            <h2>Pencetakan khusus</h2>
            <p>Terkadang Anda mungkin merasa tidak perlu mencetak seluruh dokumen, sehingga pencetakan kustom mungkin lebih sesuai dengan kebutuhan Anda. Baik Anda mencetak beberapa halaman individual atau beberapa halaman, Word memungkinkan Anda menentukan dengan tepat halaman mana yang ingin Anda cetak.</p>
            <h3>Untuk mencetak dokumen secara kustom:</h3>
            <ol class="instructions">
                <li>Arahkan ke panel Cetak.
                </li>
                <li>Di bidang <strong>Halaman:</strong>, masukkan halaman yang ingin Anda cetak.
                    <img src="https://media.gcflearnfree.org/content/566ed7c4aaa9181fb06b25ba_12_14_2015/printing_custom_print_pages.png" alt="Mengatur halaman untuk dicetak">
                </li>
                <li>Klik <strong>Cetak</strong>.
                    <img src="https://media.gcflearnfree.org/content/566ed7c4aaa9181fb06b25ba_12_14_2015/printing_custom_print_print.png" alt="Mengklik Cetak">
                </li>
            </ol>
            <p>Jika dokumen Anda tidak dicetak sesuai keinginan, Anda mungkin perlu menyesuaikan beberapa pengaturan tata letak halaman. Untuk mempelajari lebih lanjut, lihat pelajaran Tata Letak Halaman kami.</p>
    
            <h2>Tantangan!</h2>
            <ol class="instructions">
                <li><a href="https://media.gcflearnfree.org/content/566ed7c4aaa9181fb06b25ba_12_14_2015/word2016_printing_practice.docx">Buka dokumen latihan kami</a>.
                </li>
                <li>Di panel Cetak, ubah pengaturan untuk mencetak hanya halaman 2 dan 5.
                </li>
                <li>Ubah jumlah salinan menjadi 2.
                </li>
                <li>Gunakan panah di bagian bawah pratinjau cetak untuk melihat setiap halaman.
                </li>
                <li>Setelah selesai, panel Print Anda akan terlihat seperti ini:
                    <img src="https://media.gcflearnfree.org/content/566ed7c4aaa9181fb06b25ba_12_14_2015/word2016_printing_img_2.png" alt="Panel Print selesai">
                </li>
            </ol>
            <p><strong>Opsional:</strong> Jika Anda memiliki printer, Anda dapat mengklik perintah <strong>Cetak</strong>. Seharusnya mencetak dua salinan halaman 2 dan 5.</p>
        </div>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Menambahkan Header dan Footer',
            'course_id' => '32',
            'desc' => '    <div class="content">
            <h1>Menambahkan Header dan Footer di Microsoft Word</h1>
            <p>Header adalah bagian dokumen yang muncul di margin atas, sedangkan footer adalah bagian dokumen yang muncul di margin bawah. Header dan footer umumnya berisi informasi tambahan seperti nomor halaman, tanggal, nama penulis, dan catatan kaki, yang dapat membantu mengatur dokumen yang lebih panjang dan membuatnya lebih mudah dibaca. Teks yang dimasukkan pada header atau footer akan muncul di setiap halaman dokumen.</p>
            <p><strong>Opsional:</strong> <a href="https://media.gcflearnfree.org/content/567451878d7fa90eb4ddc8c6_12_18_2015/word2016_headersfooters_practice.docx">Unduh dokumen latihan kami</a>.</p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang header dan footer di Word.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/lNdjuIYuB3o?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Untuk membuat header atau footer:</h2>
            <p>Dalam contoh kita, kita ingin menampilkan nama penulis di bagian atas setiap halaman, jadi kita akan menempatkannya di header.</p>
            <ol class="instructions">
                <li>Klik dua kali di mana saja pada margin atas atau bawah dokumen Anda. Dalam contoh kita, kita akan mengklik dua kali margin atas.
                    <img src="https://media.gcflearnfree.org/content/567451878d7fa90eb4ddc8c6_12_18_2015/header_create_click_callout.png" alt="Klik dua kali pada header">
                </li>
                <li>Header atau footer akan terbuka, dan tab Desain akan muncul di sisi kanan Ribbon. Titik penyisipan akan muncul di header atau footer.
                    <img src="https://media.gcflearnfree.org/content/567451878d7fa90eb4ddc8c6_12_18_2015/header_create_design_tab.png" alt="Header terbuka">
                </li>
                <li>Ketikkan informasi yang diinginkan ke dalam header atau footer. Dalam contoh kita, kita akan mengetikkan nama penulis dan tanggal.
                    <img src="https://media.gcflearnfree.org/content/567451878d7fa90eb4ddc8c6_12_18_2015/header_create_type.png" alt="Mengetik teks ke dalam header">
                </li>
                <li>Jika sudah selesai, klik <strong>Tutup Header dan Footer</strong>. Alternatifnya, Anda dapat menekan tombol Esc.
                    <img src="https://media.gcflearnfree.org/content/567451878d7fa90eb4ddc8c6_12_18_2015/header_create_close.png" alt="Mengklik Tutup Header dan Footer">
                </li>
                <li>Teks header atau footer akan muncul.
                    <img src="https://media.gcflearnfree.org/content/567451878d7fa90eb4ddc8c6_12_18_2015/header_create_result.png" alt="Tajuk yang sudah selesai">
                </li>
            </ol>
    
            <h2>Untuk menyisipkan header atau footer preset:</h2>
            <p>Word memiliki beragam header dan footer prasetel yang dapat Anda gunakan untuk menyempurnakan desain dan tata letak dokumen Anda. Dalam contoh kita, kita akan menambahkan header preset ke dokumen kita.</p>
            <ol class="instructions">
                <li>Pilih tab <strong>Sisipkan</strong>, lalu klik perintah <strong>Header</strong> atau <strong>Footer</strong>. Dalam contoh kita, kita akan mengklik perintah Header.
                    <img src="https://media.gcflearnfree.org/content/567451878d7fa90eb4ddc8c6_12_18_2015/header_preset_command.png" alt="Mengklik perintah Header">
                </li>
                <li>Pada menu yang muncul, pilih preset header atau footer yang diinginkan.
                    <img src="https://media.gcflearnfree.org/content/567451878d7fa90eb4ddc8c6_12_18_2015/header_preset_menu3.png" alt="Memilih header preset">
                </li>
                <li>Header atau footer akan muncul. Banyak header dan footer preset berisi placeholder teks yang disebut bidang Kontrol Konten. Bidang ini bagus untuk menambahkan informasi seperti judul dokumen, nama penulis, tanggal, dan nomor halaman.
                    <img src="https://media.gcflearnfree.org/content/567451878d7fa90eb4ddc8c6_12_18_2015/header_preset_content_control.png" alt="Bidang Kontrol Konten">
                </li>
                <li>Untuk mengedit bidang Kontrol Konten, klik bidang tersebut dan ketik informasi yang diinginkan.
                    <img src="https://media.gcflearnfree.org/content/567451878d7fa90eb4ddc8c6_12_18_2015/header_preset_type.png" alt="Mengedit bidang Kontrol Konten">
                </li>
                <li>Jika sudah selesai, klik <strong>Tutup Header dan Footer</strong>. Alternatifnya, Anda dapat menekan tombol Esc.
                    <img src="https://media.gcflearnfree.org/content/567451878d7fa90eb4ddc8c6_12_18_2015/header_create_close.png" alt="Menutup Header dan Footer">
                </li>
                <li>Jika Anda ingin menghapus bidang Kontrol Konten, klik kanan bidang tersebut dan pilih <strong>Hapus Kontrol Konten</strong> dari menu yang muncul.
                    <img src="https://media.gcflearnfree.org/content/567451878d7fa90eb4ddc8c6_12_18_2015/header_preset_remove_content.png" alt="Menghapus bidang Kontrol Konten">
                </li>
            </ol>
    
            <h2>Mengedit header dan footer</h2>
            <p>Setelah Anda menutup header atau footer, masih akan terlihat, namun akan dikunci. Cukup klik dua kali header atau footer untuk membukanya, yang memungkinkan Anda mengeditnya.</p>
            <img src="https://media.gcflearnfree.org/content/567451878d7fa90eb4ddc8c6_12_18_2015/header_edit_locked.png" alt="Membuka tajuk">
    
            <h2>Opsi tab desain</h2>
            <p>Saat header dan footer dokumen Anda tidak terkunci, tab Desain akan muncul di sisi kanan Ribbon, memberi Anda berbagai pilihan pengeditan:</p>
            <ul>
                <li><strong>Sembunyikan header dan footer halaman pertama:</strong> Untuk beberapa dokumen, Anda mungkin tidak ingin halaman pertama menampilkan header dan footer, seperti jika Anda memiliki halaman sampul dan ingin memulai penomoran halaman di halaman kedua. Jika Anda ingin menyembunyikan header dan footer halaman pertama, centang kotak di samping Halaman Pertama Berbeda.
                    <img src="https://media.gcflearnfree.org/content/567451878d7fa90eb4ddc8c6_12_18_2015/header_design_first_page.png" alt="Menyembunyikan header dan footer halaman pertama">
                </li>
                <li><strong>Hapus header atau footer:</strong> Jika Anda ingin menghapus semua informasi yang ada di header, klik perintah Header dan pilih Hapus Header dari menu yang muncul. Demikian pula, Anda dapat menghapus footer menggunakan perintah Footer.
                    <img src="https://media.gcflearnfree.org/content/567451878d7fa90eb4ddc8c6_12_18_2015/header_design_remove_header2.png" alt="Menghapus tajuk">
                </li>
                <li><strong>Nomor Halaman:</strong> Anda dapat memberi nomor otomatis pada setiap halaman dengan perintah Nomor Halaman. Baca pelajaran Nomor Halaman kami untuk mempelajari lebih lanjut.
                    <img src="https://media.gcflearnfree.org/content/567451878d7fa90eb4ddc8c6_12_18_2015/header_design_page_number.png" alt="Nomor halaman">
                </li>
                <li><strong>Opsi tambahan:</strong> Dengan perintah yang tersedia di grup Sisipkan, Anda dapat menambahkan tanggal dan waktu, info dokumen, gambar, dan lainnya ke header atau footer Anda.
                    <img src="https://media.gcflearnfree.org/content/567451878d7fa90eb4ddc8c6_12_18_2015/header_design_additional_options2.png" alt="Sisipkan grup pada Ribbon">
                </li>
            </ul>
    
            <h2>Untuk memasukkan tanggal atau waktu ke dalam header atau footer:</h2>
            <p>Terkadang menyertakan tanggal atau waktu di header atau footer akan membantu. Misalnya, Anda mungkin ingin dokumen Anda memperlihatkan tanggal pembuatannya. Di sisi lain, Anda mungkin ingin menampilkan tanggal pencetakannya, yang dapat Anda lakukan dengan mengaturnya agar diperbarui secara otomatis. Ini berguna jika Anda sering memperbarui dan mencetak dokumen karena Anda selalu dapat mengetahui versi mana yang terbaru.</p>
            <ol class="instructions">
                <li>Klik dua kali di mana saja pada header atau footer untuk membuka kuncinya. Tempatkan titik penyisipan di tempat yang Anda inginkan untuk menampilkan tanggal atau waktu. Dalam contoh kita, kita akan menempatkan titik penyisipan pada baris di bawah nama penulis.
                    <img src="https://media.gcflearnfree.org/content/567451878d7fa90eb4ddc8c6_12_18_2015/header_datetime_insert.png" alt="Menempatkan titik penyisipan di header yang tidak terkunci">
                </li>
                <li>Tab Desain akan muncul. Klik perintah <strong>Tanggal & Waktu</strong>.
                    <img src="https://media.gcflearnfree.org/content/567451878d7fa90eb4ddc8c6_12_18_2015/header_datetime_command.png" alt="Mengklik perintah Tanggal & Waktu">
                </li>
                <li>Kotak dialog Tanggal dan Waktu akan muncul. Pilih format tanggal atau waktu yang diinginkan.
                </li>
                <li>Centang kotak di samping Perbarui Secara Otomatis jika Anda ingin tanggal berubah setiap kali Anda membuka dokumen. Jika Anda tidak ingin tanggalnya berubah, biarkan opsi ini tidak dicentang.
                </li>
                <li>Klik <strong>Oke</strong>.
                    <img src="https://media.gcflearnfree.org/content/567451878d7fa90eb4ddc8c6_12_18_2015/header_datetime_dialog.png" alt="Klik Oke">
                </li>
                <li>Tanggal akan muncul di header.
                    <img src="https://media.gcflearnfree.org/content/567451878d7fa90eb4ddc8c6_12_18_2015/header_datetime_result.png" alt="Tanggal di header">
                </li>
            </ol>
    
            <h2>Tantangan!</h2>
            <ol class="instructions">
                <li><a href="https://media.gcflearnfree.org/content/567451878d7fa90eb4ddc8c6_12_18_2015/word2016_headersfooters_practice.docx">Buka dokumen latihan kami</a>. Jika Anda telah mengunduh dokumen latihan kami untuk mengikuti pelajaran, pastikan untuk mengunduh salinan baru dengan mengeklik tautan pada langkah ini.
                </li>
                <li>Buka tajuknya.
                    <img src="path/to/open-header.jpg" alt="Buka tajuknya">
                </li>
                <li>Pilih Sejajarkan Kanan pada tab Beranda dan ketikkan nama Anda.
                </li>
                <li>Di bawah nama Anda, gunakan perintah Tanggal & Waktu pada tab Desain dan masukkan tanggal. Anda dapat menggunakan format apa pun yang Anda suka.
                </li>
                <li>Di bagian footer, masukkan Grid footer yang telah ditetapkan sebelumnya. Jika versi Word Anda tidak memiliki preset Grid, Anda bisa memilih preset mana pun yang tersedia.
                </li>
                <li>Tutup header dan footer.
                </li>
                <li>Ketika Anda selesai, halaman Anda akan terlihat seperti ini:
                    <img src="https://media.gcflearnfree.org/content/567451878d7fa90eb4ddc8c6_12_18_2015/word2016_header_footer_challenge.png" alt="Halaman selesai">
                </li>
            </ol>
        </div>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Nomor Halaman',
            'course_id' => '33',
            'desc' => ' <div class="content">
            <h1>Menambahkan Nomor Halaman di Microsoft Word</h1>
            <p>Nomor halaman dapat digunakan untuk memberi nomor otomatis pada setiap halaman dalam dokumen Anda. Mereka tersedia dalam berbagai format angka dan dapat disesuaikan dengan kebutuhan Anda. Nomor halaman biasanya ditempatkan pada header, footer, atau margin samping. Saat Anda perlu memberi nomor pada beberapa halaman secara berbeda, Word memungkinkan Anda memulai ulang penomoran halaman.</p>
            <p><strong>Opsional:</strong> <a href="https://media.gcflearnfree.org/content/567b032f8d7fa91cb46b6fff_12_23_2015/word2016_pagenumbers_practice.docx">Unduh dokumen latihan kami</a>.</p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang nomor halaman di Word.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/JDqPR98mIZM?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Untuk menambahkan nomor halaman:</h2>
            <p>Word dapat secara otomatis memberi label pada setiap halaman dengan nomor halaman dan menempatkannya di header, footer, atau margin samping. Jika Anda sudah memiliki header atau footer, header atau footer tersebut akan dihapus dan diganti dengan nomor halaman.</p>
            <ol class="instructions">
                <li>Pada tab <strong>Sisipkan</strong>, klik perintah <strong>Nomor Halaman</strong>.
                    <img src="https://media.gcflearnfree.org/content/567b032f8d7fa91cb46b6fff_12_23_2015/page_numbers_insert_command.png" alt="Perintah Nomor Halaman pada tab Sisipkan">
                </li>
                <li>Buka menu <strong>Top of Page</strong>, <strong>Bottom of Page</strong>, atau <strong>Page Margin</strong>, tergantung di mana Anda ingin meletakkan nomor halaman. Kemudian pilih gaya header yang diinginkan.
                    <img src="https://media.gcflearnfree.org/content/567b032f8d7fa91cb46b6fff_12_23_2015/page_numbers_insert_menu.png" alt="Memilih gaya tajuk">
                </li>
                <li>Penomoran halaman akan muncul.
                    <img src="https://media.gcflearnfree.org/content/567b032f8d7fa91cb46b6fff_12_23_2015/page_numbers_insert_result.png" alt="Penomoran halaman di header">
                </li>
                <li>Tekan tombol <strong>Esc</strong> untuk mengunci header dan footer.
                    <img src="https://media.gcflearnfree.org/content/567b032f8d7fa91cb46b6fff_12_23_2015/page_numbers_insert_esc.png" alt="Mengunci tajuk">
                </li>
                <li>Jika Anda perlu melakukan perubahan pada nomor halaman, cukup klik dua kali header atau footer untuk membukanya.
                </li>
                <li>Jika Anda membuat nomor halaman di margin samping, itu masih dianggap sebagai bagian dari header atau footer. Anda tidak akan dapat memilih nomor halaman kecuali header atau footer dipilih.
                </li>
            </ol>
    
            <h2>Untuk menambahkan nomor halaman ke header atau footer yang ada:</h2>
            <p>Jika Anda sudah memiliki header atau footer dan ingin menambahkan nomor halaman ke dalamnya, Word memiliki opsi untuk secara otomatis memasukkan nomor halaman ke header atau footer yang ada. Dalam contoh kita, kita akan menambahkan penomoran halaman ke header dokumen kita.</p>
            <ol class="instructions">
                <li>Klik dua kali di mana saja pada header atau footer untuk membuka kuncinya.
                    <img src="https://media.gcflearnfree.org/content/567b032f8d7fa91cb46b6fff_12_23_2015/page_numbers_existing_unlock.png" alt="Membuka kunci header">
                </li>
                <li>Pada tab <strong>Desain</strong>, klik perintah <strong>Nomor Halaman</strong>. Di menu yang muncul, arahkan mouse ke <strong>Posisi Saat Ini</strong> dan pilih gaya penomoran halaman yang diinginkan.
                    <img src="https://media.gcflearnfree.org/content/567b032f8d7fa91cb46b6fff_12_23_2015/page_numbers_existing_menu.png" alt="Menu Nomor Halaman">
                </li>
                <li>Penomoran halaman akan muncul.
                    <img src="https://media.gcflearnfree.org/content/567b032f8d7fa91cb46b6fff_12_23_2015/page_numbers_existing_result.png" alt="Penomoran halaman di header">
                </li>
                <li>Setelah selesai, tekan tombol <strong>Esc</strong>.
                    <img src="https://media.gcflearnfree.org/content/567b032f8d7fa91cb46b6fff_12_23_2015/page_numbers_existing_esc.png" alt="Mengunci tajuk">
                </li>
            </ol>
    
            <h2>Untuk menyembunyikan nomor halaman pada halaman pertama:</h2>
            <p>Di beberapa dokumen, Anda mungkin tidak ingin halaman pertama menampilkan nomor halaman. Anda dapat menyembunyikan nomor halaman pertama tanpa mempengaruhi halaman lainnya.</p>
            <ol class="instructions">
                <li>Klik dua kali header atau footer untuk membukanya.
                </li>
                <li>Dari tab <strong>Desain</strong>, beri tanda centang di sebelah <strong>Halaman Pertama Berbeda</strong>. Header dan footer akan hilang dari halaman pertama. Jika mau, Anda bisa mengetikkan sesuatu yang baru di header atau footer, dan itu hanya akan memengaruhi halaman pertama.
                    <img src="https://media.gcflearnfree.org/content/567b032f8d7fa91cb46b6fff_12_23_2015/header_design_first_page.png" alt="Mengklik Halaman Pertama yang Berbeda">
                </li>
                <li>Jika Anda tidak dapat memilih <strong>Halaman Pertama Berbeda</strong>, mungkin karena objek dalam header atau footer dipilih. Klik di area kosong di dalam header atau footer untuk memastikan tidak ada yang dipilih.
                </li>
            </ol>
    
            <h2>Untuk memulai kembali penomoran halaman:</h2>
            <p>Word memungkinkan Anda memulai ulang penomoran halaman di halaman mana pun di dokumen Anda. Anda dapat melakukan ini dengan memasukkan pemisah bagian dan memilih nomor yang ingin Anda gunakan untuk memulai ulang penomoran. Dalam contoh kita, kita akan memulai ulang penomoran halaman untuk bagian Karya yang Dikutip di dokumen kita.</p>
            <ol class="instructions">
                <li>Tempatkan titik penyisipan di bagian atas halaman yang ingin Anda mulai ulang penomorannya. Jika ada teks pada halaman, letakkan titik penyisipan di awal teks.
                    <img src="https://media.gcflearnfree.org/content/567b032f8d7fa91cb46b6fff_12_23_2015/page_numbers_restart_insert.png" alt="Menempatkan titik penyisipan">
                </li>
                <li>Pilih tab <strong>Layout</strong>, lalu klik perintah <strong>Breaks</strong>. Pilih <strong>Halaman Berikutnya</strong> dari menu tarik-turun yang muncul.
                    <img src="https://media.gcflearnfree.org/content/567b032f8d7fa91cb46b6fff_12_23_2015/page_numbers_restart_break.png" alt="Memilih Halaman Berikutnya">
                </li>
                <li>Hentian bagian akan ditambahkan ke dokumen.
                </li>
                <li>Klik dua kali header atau footer yang berisi nomor halaman yang ingin Anda mulai ulang.
                    <img src="https://media.gcflearnfree.org/content/567b032f8d7fa91cb46b6fff_12_23_2015/page_numbers_restart_unlock.png" alt="Memilih nomor halaman untuk memulai kembali">
                </li>
                <li>Klik perintah <strong>Nomor Halaman</strong>. Pada menu yang muncul, pilih <strong>Format Nomor Halaman</strong>.
                    <img src="https://media.gcflearnfree.org/content/567b032f8d7fa91cb46b6fff_12_23_2015/page_numbers_restart_menu.png" alt="Memformat nomor halaman">
                </li>
                <li>Sebuah kotak dialog akan muncul. Klik tombol <strong>Mulai di:</strong>. Secara default, ini akan dimulai pada 1. Jika mau, Anda dapat mengubah nomornya. Setelah selesai, klik <strong>OK</strong>.
                    <img src="https://media.gcflearnfree.org/content/567b032f8d7fa91cb46b6fff_12_23_2015/page_numbers_restart_dialog.png" alt="Memulai ulang penomoran halaman">
                </li>
                <li>Penomoran halaman akan dimulai ulang.
                    <img src="https://media.gcflearnfree.org/content/567b032f8d7fa91cb46b6fff_12_23_2015/page_numbers_restart_result.png" alt="Penomoran halaman dimulai ulang">
                </li>
            </ol>
    
            <p>Untuk mempelajari lebih lanjut tentang menambahkan hentian bagian ke dokumen Anda, kunjungi pelajaran kami tentang Istirahat.</p>
    
            <h2>Tantangan!</h2>
            <ol class="instructions">
                <li><a href="https://media.gcflearnfree.org/content/567b032f8d7fa91cb46b6fff_12_23_2015/word2016_pagenumbers_practice.docx">Buka dokumen latihan kami</a>. Jika Anda telah mengunduh dokumen latihan kami untuk mengikuti pelajaran, pastikan untuk mengunduh salinan baru dengan mengeklik tautan pada langkah ini.
                </li>
                <li>Pada halaman 1, masukkan nomor halaman <strong>Accent Bar 4</strong> di bagian bawah halaman.</li>
                <li>Di Opsi Desain, pilih <strong>Halaman Pertama Berbeda</strong>. Nomor halaman sekarang harus disembunyikan di halaman pertama.
                    </li>
                    <li>Gulir ke halaman 27 dokumen.
                    </li>
                    <li>Tempatkan kursor Anda di awal judul <strong>Karya yang Dikutip</strong> dan masukkan jeda <strong>Bagian Berkelanjutan</strong>.
                    </li>
                    <li>Pada footer halaman 27, ulangi penomoran halaman menjadi 1.
                    </li>
                    <li>Setelah selesai, bagian bawah halaman 27 akan terlihat seperti ini:
                        <img src="https://media.gcflearnfree.org/content/567b032f8d7fa91cb46b6fff_12_23_2015/word2016_pagenumber_3_img.png" alt="Hasil akhir">
                    </li>
                </ol>
            </div>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Pembungkus Gambar dan Teks',
            'course_id' => '34',
            'desc' => ' <div>
            <h1>Perkenalan</h1>
            <p>Menambahkan gambar ke dokumen Anda bisa menjadi cara yang bagus untuk mengilustrasikan informasi penting dan menambahkan aksen dekoratif pada teks yang ada. Jika digunakan secukupnya, gambar dapat meningkatkan tampilan dokumen Anda secara keseluruhan.</p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang cara menambahkan gambar ke dokumen Anda.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/jh9IQuu8J_s?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Untuk menyisipkan gambar dari file:</h2>
            <p> Jika Anda memikirkan gambar tertentu, Anda dapat menyisipkan gambar dari file . Dalam contoh kita, kita akan menyisipkan gambar yang disimpan secara lokal di komputer kita. Jika Anda ingin mengerjakan contoh kami, klik kanan gambar di bawah dan simpan ke komputer Anda.<p>
            <img src="https://media.gcflearnfree.org/content/568d61cf8d7fa91e7c8d89b5_01_06_2016/logo.png" alt="Gambar 1">
            <ol>
                <li>Tempatkan titik penyisipan di tempat yang Anda inginkan untuk menampilkan gambar.</li>
                    <img src="https://media.gcflearnfree.org/content/568d61cf8d7fa91e7c8d89b5_01_06_2016/2016-01-11_10-50-52.png" alt="Gambar 1">
                <li>Pilih tab Sisipkan pada Ribbon, lalu klik perintah Gambar.</li>
                    <img src="https://media.gcflearnfree.org/content/568d61cf8d7fa91e7c8d89b5_01_06_2016/2016-01-06_15-03-43.png" alt="Gambar 2">
                <li>Kotak dialog Sisipkan Gambar akan muncul. Arahkan ke folder tempat gambar Anda berada, lalu pilih gambar dan klik Sisipkan.</li>
                    <img src="https://media.gcflearnfree.org/content/568d61cf8d7fa91e7c8d89b5_01_06_2016/2016-01-11_10-51-57.png" alt="Gambar 3">
                <li>Gambar akan muncul di dokumen.</li>
                    <img src="https://media.gcflearnfree.org/content/568d61cf8d7fa91e7c8d89b5_01_06_2016/2016-01-11_10-53-09.png" alt="Gambar 4">
                <li>Untuk mengubah ukuran gambar, klik dan seret salah satu pengendali ukuran sudut. Gambar akan berubah ukuran dengan tetap mempertahankan proporsi yang sama. Jika Anda ingin merenggangkannya secara horizontal atau vertikal, Anda dapat menggunakan pegangan pengatur ukuran samping.</li>
                    <img src="https://media.gcflearnfree.org/content/568d61cf8d7fa91e7c8d89b5_01_06_2016/insert_picture_resize.png" alt="Gambar 5">
            </ol>
            <h2>Mengubah pengaturan pembungkusan teks</h2>
            <p>Saat Anda menyisipkan gambar dari file, Anda mungkin menyadari bahwa sulit untuk memindahkannya tepat ke tempat yang Anda inginkan. Hal ini karena pembungkusan teks untuk gambar diatur ke Sejajar dengan Teks. Anda harus mengubah pengaturan pembungkusan teks jika Anda ingin memindahkan gambar dengan bebas, atau jika Anda hanya ingin teks membungkus gambar dengan cara yang lebih alami.</p>
            <h4>Untuk membungkus teks di sekitar gambar:</h4>
            <ol>
                <li>Pilih gambar yang ingin Anda bungkus teksnya. Tab Format akan muncul di sisi kanan Ribbon.</li>
                    <img src="https://media.gcflearnfree.org/content/568d61cf8d7fa91e7c8d89b5_01_06_2016/2016-01-12_09-23-34.png" alt="Gambar 7">
                <li>Pada tab Format, klik perintah Bungkus Teks di grup Susun. Kemudian pilih opsi pembungkusan teks yang diinginkan. Dalam contoh kita, kita akan memilih Di Depan Teks sehingga kita dapat dengan bebas memindahkannya tanpa mempengaruhi teks. Alternatifnya, Anda dapat memilih Opsi Tata Letak Lainnya untuk menyempurnakan tata letak.</li>
                    <img src="https://media.gcflearnfree.org/content/568d61cf8d7fa91e7c8d89b5_01_06_2016/2016-01-12_09-24-44.png" alt="Gambar 8">
                <li>Teks akan membungkus gambar. Anda sekarang dapat memindahkan gambar jika Anda mau. Cukup klik dan seret ke lokasi yang diinginkan. Saat Anda memindahkannya, panduan perataan akan muncul untuk membantu Anda menyelaraskan gambar pada halaman.</li>
                    <img src="https://media.gcflearnfree.org/content/568d61cf8d7fa91e7c8d89b5_01_06_2016/2016-01-12_09-26-17.png" alt="Gambar 9">
            </ol>
            <h4>Alternatifnya, Anda dapat mengakses opsi pembungkusan teks dengan memilih gambar dan mengklik tombol Opsi Tata Letak yang muncul.</h4>
            <ol>
                <li>Jika panduan perataan tidak muncul, pilih tab Page Layout, lalu klik perintah Align. Pilih Gunakan Panduan Penyelarasan dari menu tarik-turun yang muncul.</li>
            </ol>
            <h4>Menggunakan pengaturan pembungkusan teks yang telah ditentukan sebelumnya</h4>
            <p>Pembungkusan teks yang telah ditentukan sebelumnya memungkinkan Anda memindahkan gambar dengan cepat ke lokasi tertentu di halaman. Teks akan otomatis membungkus objek sehingga tetap mudah dibaca.</p>
            <h4>Memasukkan gambar online</h4>
            <p>Jika Anda tidak memiliki gambar yang diinginkan di komputer, Anda dapat mencari gambar online untuk ditambahkan ke dokumen Anda. Word menawarkan dua opsi untuk menemukan gambar online.</p>
            <ol>
                <li>OneDrive: Anda dapat menyisipkan gambar yang disimpan di OneDrive Anda. Anda juga dapat menghubungkan akun daring lainnya dengan akun Microsoft Anda, seperti Facebook dan Flickr.</li>
                <li>Pencarian Gambar Bing: Anda dapat menggunakan opsi ini untuk mencari gambar di Internet. Secara default, Bing hanya menampilkan gambar yang dilisensikan di bawah Creative Commons, yang berarti Anda dapat menggunakannya untuk proyek Anda sendiri. Namun, Anda harus mengeklik tautan ke situs web gambar tersebut untuk melihat apakah ada batasan mengenai cara penggunaannya.</li>
            </ol>
            <h3>Untuk menyisipkan gambar online:</h3>
            <ol>
                <li>Tempatkan titik penyisipan di tempat yang Anda inginkan untuk menampilkan gambar.</li>
                    <img src="https://media.gcflearnfree.org/content/568d61cf8d7fa91e7c8d89b5_01_06_2016/2015_images_onedrive.png" alt="Gambar 10">
                <li>Pilih tab Sisipkan, lalu klik perintah Gambar Online.</li>
                    <img src="https://media.gcflearnfree.org/content/568d61cf8d7fa91e7c8d89b5_01_06_2016/2016-01-06_15-11-38.png" alt="Gambar 11">
                <li>Kotak dialog Sisipkan Gambar akan muncul.</li>
                    <img src="gambar12.jpg" alt="Gambar 12">
                <li>Pilih Pencarian Gambar Bing atau OneDrive Anda. Dalam contoh kita, kita akan menggunakan Pencarian Gambar Bing.</li>
                    <img src="https://media.gcflearnfree.org/content/568d61cf8d7fa91e7c8d89b5_01_06_2016/2016-01-06_15-22-55.png" alt="Gambar 13">
                <li>Tekan tombol Enter. Hasil pencarian Anda akan muncul di dalam kotak.</li>
                    <li>Pilih gambar yang diinginkan, lalu klik Sisipkan.</li>
                    <img src="https://media.gcflearnfree.org/content/568d61cf8d7fa91e7c8d89b5_01_06_2016/2016-01-06_15-23-27.png" alt="Gambar 15">
            </ol>
            <p>Gambar akan muncul di dokumen.</p>
            <img src="https://media.gcflearnfree.org/content/568d61cf8d7fa91e7c8d89b5_01_06_2016/2016-01-06_15-29-52.png" alt="Gambar 15">
            <p>Saat menambahkan gambar, video, atau musik ke proyek Anda, penting untuk memastikan Anda memiliki hak hukum untuk menggunakannya. Kebanyakan barang yang Anda beli atau unduh secara online dilindungi oleh hak cipta, yang berarti Anda mungkin tidak diizinkan untuk menggunakannya. Untuk informasi lebih lanjut, kunjungi pelajaran Hak Cipta dan Penggunaan Wajar kami.</p>
            <h2>Tantangan!</h2>
            <p>Buka dokumen latihan kami dan gulir ke halaman 3.</p>
            <ol>
                <li>Ubah pembungkus teks gambar anjing menjadi Square.</li>
                <li>Seret gambar ke sisi kanan paragraf bawah.</li>
                <li>Tempatkan titik penyisipan Anda di sebelah judul Pengingat Komunitas.</li>
                <li>Gunakan perintah Gambar Online dan ketikkan kata Daur Ulang ke dalam pencarian.</li>
                <li>Masukkan simbol daur ulang.</li>
                <li>Jika perlu, gunakan pegangan pengukur sudut untuk mengubah ukuran simbol daur ulang agar semuanya sesuai di halaman 3.</li>
                <li>Ubah pembungkusan teks menjadi Kotak dan seret simbol ke sisi kanan poin pertama.</li>
                <li>Ketika Anda selesai, halaman 3 akan terlihat seperti ini:</li>
                <img src="https://media.gcflearnfree.org/content/568d61cf8d7fa91e7c8d89b5_01_06_2016/word2016_pictureswrapping2_img.png" alt="Gambar 15">
            </ol>
        </div>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Memformat Gambar',
            'course_id' => '35',
            'desc' => '<div>
            <h1>Perkenalan</h1>
            <p>Ada banyak cara untuk memformat gambar di Word. Misalnya, Anda dapat mengubah ukuran atau bentuk gambar agar lebih sesuai dengan dokumen Anda. Anda juga dapat menyempurnakan tampilannya menggunakan alat penyesuaian gambar Word.</p>
            <p>Opsional: <a href="https://media.gcflearnfree.org/content/568fe1f54ba91213b0054eb6_01_08_2016/word2016_formatpictures_practice.docx">Unduh dokumen latihan kami</a>.</p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang memformat gambar.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" rel="width: 853px; height: 480px;" src="https://www.youtube.com/embed/eC4bRXx9k6g?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Untuk memotong gambar:</h2>
            <ol>
                <li>Saat Anda memotong gambar, sebagian gambarnya terhapus. Memangkas dapat berguna jika Anda mengerjakan gambar yang terlalu besar dan ingin fokus pada sebagian saja.</li>
                <li>Pilih gambar yang ingin Anda potong</a>. Tab Format akan muncul.</li>
                <li>Dari tab Format, klik perintah Pangkas.</li>
                <img src="https://media.gcflearnfree.org/content/568fe1f54ba91213b0054eb6_01_08_2016/formatpics_crop_command2.png" alt="Langkah 2">
                <li>Cropping handle akan muncul di sisi dan sudut gambar. Klik dan seret pegangan apa pun untuk memotong gambar. Karena pengendali pemangkasan berada di dekat pengendali pengubah ukuran, berhati-hatilah agar tidak menyeret pengendali pengubah ukuran secara tidak sengaja.</li>
                <img src="https://media.gcflearnfree.org/content/568fe1f54ba91213b0054eb6_01_08_2016/formatpics_crop_handles2.png" alt="Langkah 3">
                <li>Untuk mengonfirmasi, klik lagi perintah Pangkas. Gambar akan dipotong.</li>
                <img src="https://media.gcflearnfree.org/content/568fe1f54ba91213b0054eb6_01_08_2016/formatpics_crop_result.png" alt="Langkah 4">
            </ol>
        
            <h2>Untuk memotong gambar menjadi bentuk:</h2>
            <ol>
                <li>Pilih gambar yang ingin Anda potong</a>, lalu klik tab Format.</li>
                <li>Klik panah tarik-turun Pangkas. Arahkan kursor ke Pangkas ke Bentuk, lalu pilih bentuk yang diinginkan dari menu tarik-turun.</li>
                <img src="https://media.gcflearnfree.org/content/568fe1f54ba91213b0054eb6_01_08_2016/formatpics_shape_command.png" alt="Langkah 2">
                <li>Gambar akan dipotong sesuai bentuk yang dipilih.</li>
                <img src="https://media.gcflearnfree.org/content/568fe1f54ba91213b0054eb6_01_08_2016/formatpics_shape_result.png" alt="Langkah 3">
            </ol>
        
            <h2>Untuk menambahkan batas pada gambar:</h2>
            <ol>
                <li>Pilih gambar yang ingin Anda tambahkan batasnya</a>, lalu klik tab Format.</li>
                <li>Klik perintah Perbatasan Gambar. Menu tarik-turun akan muncul.</li>
                <li>Dari sini, Anda dapat memilih warna, berat (ketebalan), dan apakah garisnya putus-putus.</li>
                <img src="https://media.gcflearnfree.org/content/568fe1f54ba91213b0054eb6_01_08_2016/formatpics_border_command.png" alt="Langkah 3">
                <li>Perbatasan akan muncul di sekitar gambar.</li>
            </ol>
        
            <h2>Melakukan penyesuaian gambar:</h2>
            <p>Dengan alat penyesuaian gambar Word, Anda dapat dengan mudah menyempurnakan properti seperti warna, kontras, saturasi, dan nada. Word juga menawarkan gaya gambar bawaan, yang dapat digunakan untuk menambahkan bingkai, bayangan jatuh, dan efek lain yang telah ditentukan sebelumnya.</p>
            <ol>
                <li>Saat Anda siap untuk menyesuaikan gambar, cukup pilih gambar tersebut</a>. Kemudian gunakan opsi di bawah ini, yang dapat ditemukan di tab Format.</li>
                <img src="https://media.gcflearnfree.org/content/568fe1f54ba91213b0054eb6_01_08_2016/formatpics_adjust_all.png" alt="Penyesuaian Gambar">
            </ol>
        
            <h3>Koreksi:</h3>
            <p>Dari sini, Anda dapat mempertajam atau memperhalus gambar untuk menyesuaikan seberapa jelas atau buram tampilannya. Anda juga dapat menyesuaikan kecerahan dan kontras, yang memengaruhi kecerahan gambar dan intensitas umum.</p>
            <img src="https://media.gcflearnfree.org/content/568fe1f54ba91213b0054eb6_01_08_2016/formatpics_adjust_corrections.png" alt="Menu Koreksi">
        
            <h3>Warna:</h3>
            <p>Dengan menggunakan perintah ini, Anda dapat menyesuaikan saturasi gambar (seberapa cerah warna yang muncul), tone (suhu warna gambar, dari dingin ke hangat), dan pewarnaan (rona keseluruhan gambar).</p>
            <img src="https://media.gcflearnfree.org/content/568fe1f54ba91213b0054eb6_01_08_2016/formatpics_adjust_color.png" alt="Menu Warna">
        
            <h3>Efek Artistik:</h3>
            <p>Di sini, Anda dapat menerapkan efek khusus pada gambar Anda, seperti warna pastel, cat air, atau tepian bercahaya. Karena hasilnya sangat tebal, Anda mungkin ingin menggunakan efek ini dengan hemat (terutama pada dokumen profesional).</p>
            <img src="https://media.gcflearnfree.org/content/568fe1f54ba91213b0054eb6_01_08_2016/formatpics_adjust_artistic.png" alt="Menu Efek Artistik">
        
            <h3>Grup Gaya Gambar:</h3>
            <p>Grup ini berisi banyak gaya berbeda yang telah ditentukan sebelumnya yang membuat pemformatan gambar menjadi lebih mudah. Gaya gambar dirancang untuk membingkai gambar Anda tanpa mengubah pengaturan atau efek dasarnya.</p>
            <img src="https://media.gcflearnfree.org/content/568fe1f54ba91213b0054eb6_01_08_2016/formatpics_adjust_styles.png" alt="Menu Gaya Gambar">
        
            <h2>Mengompresi gambar:</h2>
            <p>Jika Anda berencana mengirim dokumen berisi gambar melalui email, Anda harus memantau ukuran filenya. Gambar yang besar dan beresolusi tinggi dapat menyebabkan dokumen Anda menjadi sangat besar, sehingga sulit untuk dilampirkan ke email. Selain itu, area gambar yang dipotong disimpan dalam dokumen secara default, yang dapat menambah ukuran file.</p>
            <p>Untungnya, Anda dapat mengurangi ukuran file dokumen dengan mengompresi gambar Anda. Ini akan menurunkan resolusinya dan menghapus area yang dipotong.</p>
            <p>Mengompresi gambar dapat mempengaruhi kualitasnya secara nyata (misalnya, gambar menjadi buram atau berpiksel). Oleh karena itu, kami menyarankan untuk menyimpan salinan tambahan dokumen Anda sebelum Anda mengompresi gambar. Alternatifnya, bersiaplah untuk menggunakan perintah Undo jika Anda tidak puas dengan hasilnya.</p>
        
            <h3>Untuk mengompres gambar:</h3>
            <ol>
                <li>Pilih gambar yang ingin Anda kompres</a>, lalu navigasikan ke tab Format.</li>
                <li>Klik perintah Kompres Gambar.</li>
                <img src="https://media.gcflearnfree.org/content/568fe1f54ba91213b0054eb6_01_08_2016/formatpics_compress_command.png" alt="Langkah 2">
                <li>Sebuah kotak dialog akan muncul. Centang kotak di samping Hapus area gambar yang dipotong. Anda juga dapat memilih apakah akan menerapkan pengaturan pada gambar ini saja atau pada semua gambar di dokumen.</li>
                <li>Pilih keluaran Target. Jika Anda mengirim dokumen melalui email, Anda mungkin ingin memilih Email, yang menghasilkan ukuran file terkecil.</li>
                <li>Klik Oke.</li>
                <img src="https://media.gcflearnfree.org/content/568fe1f54ba91213b0054eb6_01_08_2016/formatpics_compress_dialog.png" alt="Langkah 5">
            </ol>
        
            <h2>Tantangan!</h2>
            <p><a href="https://media.gcflearnfree.org/content/568fe1f54ba91213b0054eb6_01_08_2016/word2016_formatpictures_practice.docx">Buka dokumen latihan kami</a>.</p>
            <p>Gulir ke halaman 2 dan pilih gambar perahu layar.</p>
            <p>Di tab Format, ubah gaya menjadi Bingkai Sederhana, Putih.</p>
            <p>Dengan gambar yang masih dipilih, gunakan Pangkas ke Bentuk dan potong menjadi bentuk Gelombang Ganda di kategori Bintang dan Spanduk. Petunjuk: Nama bentuk akan muncul saat Anda mengarahkan kursor ke atasnya.</p>
            <p>Pilih gambar jangkar.</p>
            <p>Di tab Format, gunakan menu drop-down Color untuk mewarnai ulang jangkar menjadi Gold, Accent color 2 Light.</p>
            <p>Setelah selesai, halaman Anda akan terlihat seperti ini:</p>
            <img src="https://media.gcflearnfree.org/content/568fe1f54ba91213b0054eb6_01_08_2016/word2016_formatpictures_img.png" alt="Tantangan Selesai">
        </div>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Tabel',
            'course_id' => '36',
            'desc' => '<h1>Perkenalan</h1>
            <p>Tabel adalah kisi-kisi sel yang disusun dalam baris dan kolom. Tabel dapat digunakan untuk mengatur semua jenis konten, baik Anda bekerja dengan teks atau data numerik. Di Word, Anda bisa dengan cepat menyisipkan tabel kosong atau mengonversi teks yang ada menjadi tabel. Anda juga dapat menyesuaikan tabel Anda menggunakan gaya dan tata letak yang berbeda.</p>
            <p>Opsional: <a href="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/word2016_tables_practice.docx">Unduh dokumen latihan kami</a>.</p>
            <p>Tonton video di bawah untuk mempelajari lebih lanjut tentang membuat tabel.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" rel="width: 853px; height: 480px;" src="https://www.youtube.com/embed/XNBrCEgzddw?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Untuk menyisipkan tabel kosong:</h2>
            <ol>
                <li>Tempatkan titik penyisipan di tempat yang Anda inginkan untuk menampilkan tabel.</li>
                <li>Arahkan ke tab Sisipkan, lalu klik perintah Tabel.</li>
                <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/table_blank_command" alt="Langkah 2">
                <li>Ini akan membuka menu drop-down yang berisi grid. Arahkan kursor ke grid untuk memilih jumlah kolom dan baris yang Anda inginkan.</li>
                <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/table_blank_menu.png" alt="Langkah 3">
                <li>Klik kisi untuk mengonfirmasi pilihan Anda, dan sebuah tabel akan muncul.</li>
                <li>Untuk memasukkan teks, tempatkan titik penyisipan di sel mana pun, lalu mulai mengetik.</li>
                <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/table_blank_result" alt="Langkah 5">
                <li>Untuk menavigasi antar sel, gunakan Tombol tab atau tombol panah pada keyboard Anda. Jika titik penyisipan berada di sel terakhir, menekan tombol Tab secara otomatis akan membuat baris baru.</li>
            </ol>
        
            <h2>Untuk mengonversi teks yang ada menjadi tabel:</h2>
            <ol>
                <li>Pada contoh di bawah, setiap baris teks berisi bagian dari daftar periksa, termasuk tugas dan hari dalam seminggu. Item dipisahkan berdasarkan tab. Word dapat mengubah informasi ini menjadi tabel, menggunakan tab untuk memisahkan data ke dalam kolom.</li>
                <li>Pilih teks yang ingin Anda konversi menjadi tabel</a>. Jika Anda menggunakan file latihan kami, Anda dapat menemukan teks ini di halaman 2 dokumen.</li>
                <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/table_convert_select" alt="Langkah 2">
                <li>Buka tab Sisipkan, lalu klik perintah Tabel.</li>
                <li>Pilih Konversi Teks ke Tabel dari menu tarik-turun.</li>
                <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/table_convert_menu" alt="Langkah 4">
                <li>Sebuah kotak dialog akan muncul. Pilih salah satu opsi di bawah Pisahkan teks di. Beginilah cara Word mengetahui apa yang harus dimasukkan ke dalam setiap kolom.</li>
                <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/table_convert_dialog" alt="Langkah 5">
                <li>Klik Oke. Teks akan muncul dalam tabel.</li>
                <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/table_convert_result" alt="Langkah 6">
            </ol>
        
            <h2>Memodifikasi tabel</h2>
            <p>Anda dapat dengan mudah mengubah tampilan tabel setelah Anda menambahkannya ke dokumen Anda. Ada beberapa opsi untuk penyesuaian, termasuk menambahkan baris atau kolom dan mengubah gaya tabel.</p>
        
            <h3>Untuk menambahkan baris atau kolom:</h3>
            <ol>
                <li>Arahkan kursor ke luar tabel tempat Anda ingin menambahkan baris atau kolom. Klik tanda plus yang muncul.</li>
                <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/table_add_hover" alt="Langkah 1">
                <li>Baris atau kolom baru akan ditambahkan ke tabel.</li>
                <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/table_add_result.png" alt="Langkah 2">
                <li>Alternatifnya, Anda dapat mengklik kanan tabel, lalu mengarahkan kursor ke Sisipkan untuk melihat berbagai opsi baris dan kolom.</li>
                <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/table_add_menu.png" alt="Langkah 3">
            </ol>
        
            <h3>Untuk menghapus baris atau kolom:</h3>
            <ol>
                <li>Tempatkan titik penyisipan pada baris atau kolom yang ingin Anda hapus.</li>
                <li>Klik kanan, lalu pilih Hapus Sel dari menu.</li>
                <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/table_delete_menu" alt="Langkah 2">
                <li>Sebuah kotak dialog akan muncul. Pilih Hapus seluruh baris atau Hapus seluruh kolom, lalu klik OK.</li>
                <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/table_delete_dialog" alt="Langkah 3">
                <li>Baris atau kolom akan dihapus.</li>
            </ol>
        
            <h3>Untuk menerapkan gaya tabel:</h3>
            <p>Gaya tabel memungkinkan Anda mengubah tampilan dan nuansa meja secara instan. Mereka mengontrol beberapa elemen desain, termasuk warna, batas, dan font.</p>
            <ol>
                <li>Klik di mana saja di tabel Anda untuk memilihnya</a>, lalu klik tab Desain di ujung kanan Ribbon.</li>
                <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/table_style_tab.png" alt="Langkah 1">
                <li>Temukan grup Gaya Tabel, lalu klik panah tarik-turun Lainnya untuk melihat daftar lengkap gaya.</li>
                <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/table_style_more.png" alt="Langkah 2">
                <li>Pilih gaya tabel yang Anda inginkan.</li>
                <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/table_style_menu.png" alt="Langkah 3">
                <li>Gaya tabel akan muncul.</li>
                <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/table_style_result.png" alt="Langkah 4">
            </ol>
        
            <h3>Untuk mengubah opsi gaya tabel:</h3>
            <p>Setelah memilih gaya tabel, Anda dapat mengaktifkan atau menonaktifkan berbagai opsi untuk mengubah tampilannya. Ada enam pilihan: Header Row, Total Row, Banded Rows, First Column, Last Column, dan Banded Columns.</p>
            <ol>
                <li>Klik di mana saja di tabel Anda</a>, lalu navigasikan ke tab Desain.</li>
                <li>Temukan grup Opsi Gaya Tabel, lalu centang atau hapus centang pada opsi yang diinginkan.</li>
                <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/table_modify_options" alt="Langkah 2">
                <li>Gaya tabel akan diubah.</li>
                <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/table_modify_result" alt="Langkah 3">
            </ol>
            <p>Tergantung pada Gaya Tabel yang Anda pilih, Opsi Gaya Tabel tertentu mungkin memiliki efek berbeda. Anda mungkin perlu bereksperimen untuk mendapatkan tampilan yang Anda inginkan.</p>
        
            <h3>Untuk menerapkan batas pada tabel:</h3>
            <ol>
                <li>Pilih sel yang ingin Anda beri batas</a>.</li>
                <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/table_border_select" alt="Langkah 1">
                <li>Gunakan perintah pada tab Desain untuk memilih Gaya Garis, Berat Garis, dan Warna Pena yang diinginkan.</li>
                <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/table_border_commands" alt="Langkah 2">
                <li>Klik panah drop-down di bawah perintah Borders.</li>
                <li>Pilih jenis perbatasan dari menu.</li>
                <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/table_border_menu" alt="Langkah 4">
                <li>Perbatasan akan diterapkan ke sel yang dipilih.</li>
                <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/table_border_result" alt="Langkah 5">
            </ol>
        
            <h3>Memodifikasi tabel menggunakan tab Layout</h3>
            <p>Di Word, tab Tata Letak muncul setiap kali Anda memilih tabel. Anda dapat menggunakan opsi pada tab ini untuk melakukan berbagai modifikasi.</p>
            <p>Klik tombol interaktif di bawah ini untuk mempelajari lebih lanjut tentang kontrol tata letak tabel Word.</p>
            <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/tables_layout_tab.png" alt="Tantangan">
            <h2>Tantangan!</h2>
            <p><a href="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/word2016_tables_practice.docx">Buka dokumen latihan kami</a>.</p>
            <ol>
                <li>Gulir ke halaman 3 dan pilih semuateks di bawah tanggal 8 Juli - 12 Juli.
                <li>Gunakan Konversi Teks ke Tabel untuk menyisipkan teks ke dalam tabel 6 kolom. Pastikan untuk Memisahkan teks di Tabs.</li>
                <li>Hapus kolom hari Sabtu.</li>
                <li>Sisipkan kolom di sebelah kiri kolom Jumat dan ketik Kamis di sel atas.</li>
                <li>Ubah gaya tabel ke gaya apa pun yang dimulai dengan Tabel Kisi 5. Petunjuk: Nama gaya muncul saat Anda mengarahkan kursor ke gaya tersebut.</li>
                <li>Di menu Table Style Options, hapus centang Banded Rows dan centang Banded Columns.</li>
                <li>Pilih seluruh tabel. Di menu tarik-turun Perbatasan, pilih Semua Perbatasan.</li>
                <li>Dengan meja tetap dipilih, tambah tinggi baris meja menjadi 0,3" (0,8 cm).</li>
                <li>Pilih baris pertama dan ubah perataan sel menjadi Align Center.</li>
                <li>Ketika Anda selesai, tabel Anda akan terlihat seperti ini:</li>
                <img src="https://media.gcflearnfree.org/content/5682cde98d7fa91cb46b7004_12_29_2015/word2016_tables_img.png" alt="Tantangan">
            </ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Grafik',
            'course_id' => '37',
            'desc' => '   <h1>Perkenalan</h1>
            <p>Bagan adalah alat yang dapat Anda gunakan untuk mengkomunikasikan informasi secara grafis. Menyertakan bagan dalam dokumen Anda dapat membantu Anda mengilustrasikan data numerik—seperti perbandingan dan tren—sehingga lebih mudah dipahami oleh pembaca.</p>
            <p>Opsional: <a href="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/word2016_charts_practice.docx">Unduh dokumen latihan kami</a>.</p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang membuat grafik.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/kiy81vkZQww?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <p>Ada beberapa jenis grafik untuk memilih dari. Untuk menggunakan bagan secara efektif, Anda harus memahami apa yang membuat masing-masing bagan unik.</p>
            <p>Klik panah pada tayangan slide di bawah ini untuk mempelajari selengkapnya tentang tipe bagan di Word.</p>
            
            <ul>
                <li>Word memiliki beragam tipe bagan, masing-masing dengan kelebihannya sendiri. Klik panah untuk melihat beberapa tipe bagan berbeda yang tersedia di Word.</li>
                <img src="https://media.gcflearnfree.org/ctassets/topics/234/chart_type_8.png" alt="Jenis Bagan">
                <li>Bagan kolom menggunakan batang vertikal untuk mewakili data. Mereka dapat bekerja dengan berbagai jenis data, namun paling sering digunakan untuk membandingkan informasi.</li>
                <img src="https://media.gcflearnfree.org/ctassets/topics/234/chart_type_8.png" alt="Bagan Kolom">
                <li>Bagan garis ideal untuk menunjukkan tren. Titik data dihubungkan dengan garis, sehingga memudahkan untuk melihat apakah nilai meningkat atau menurun seiring waktu.</li>
                <img src="https://media.gcflearnfree.org/ctassets/topics/234/chart_type_8.png" alt="Bagan Garis">
                <li>Diagram lingkaran memudahkan untuk membandingkan proporsi. Setiap nilai ditampilkan sebagai sepotong kue, sehingga mudah untuk melihat nilai mana yang membentuk persentase keseluruhan.</li>
                <img src="https://media.gcflearnfree.org/ctassets/topics/234/chart_type_8.png" alt="Diagram Lingkaran">
                <li>Bagan batang berfungsi seperti bagan kolom, namun menggunakan batang horizontal, bukan vertikal.</li>
                <img src="https://media.gcflearnfree.org/ctassets/topics/234/chart_type_8.png" alt="Bagan Batang">
                <li>Bagan area mirip dengan bagan garis, hanya saja area di bawah garis diisi.</li>
                <img src="https://media.gcflearnfree.org/ctassets/topics/234/chart_type_8.png" alt="Bagan Area">
                <li>Bagan permukaan memungkinkan Anda menampilkan data dalam lanskap 3D. Mereka bekerja paling baik dengan kumpulan data besar, memungkinkan Anda melihat berbagai informasi secara bersamaan.</li>
                <img src="https://media.gcflearnfree.org/ctassets/topics/234/chart_type_8.png" alt="Bagan Permukaan">
            </ul>
            
            <h2>Mengidentifikasi bagian-bagian bagan</h2>
            <p>Selain jenis bagan, Anda juga harus memahami cara membaca bagan. Bagan berisi beberapa elemen—atau bagian—yang berbeda yang dapat membantu Anda menafsirkan data.</p>
            <p>Klik tombol interaktif di bawah ini untuk mempelajari berbagai bagian bagan.</p>
            <img src="https://media.gcflearnfree.org/content/563ba214ca7fac0d9c7b3f7d_11_05_2015/2015-11-05_14-02-50.png" alt="Menyisipkan Bagan">
            <h2>Memasukkan grafik</h2>
            <p>Word menggunakan jendela spreadsheet terpisah untuk memasukkan dan mengedit data grafik, seperti spreadsheet di Excel. Proses memasukkan data cukup sederhana, namun jika Anda belum terbiasa dengan Excel, Anda mungkin ingin meninjau <a href="/coursex/4">pelajaran Dasar-dasar Sel kami</a>.</p>
            
            <h3>Untuk menyisipkan bagan:</h3>
            <ul>
                <li>Tempatkan titik penyisipan di tempat yang Anda inginkan untuk menampilkan grafik.</li>
                <li>Arahkan ke tab Sisipkan, lalu klik perintah Bagan di grup Ilustrasi.</li>
                <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/charts_insert_command.png" alt="Perintah Bagan">
                <li>Sebuah kotak dialog akan muncul. Untuk melihat pilihan Anda, pilih jenis bagan dari panel kiri, lalu telusuri bagan di sebelah kanan.</li>
                <li>Pilih grafik yang diinginkan, lalu klik OK.</li>
                <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/charts_insert_dialog.png" alt="Memilih Bagan">
                <li>Jendela bagan dan spreadsheet akan muncul. Teks dalam spreadsheet hanyalah pengganti yang harus Anda ganti dengan data sumber Anda sendiri. Sumber data adalah apa yang akan digunakan Word untuk membuat bagan.</li>
                <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/charts_insert_appear.png" alt="Jendela Bagan dan Spreadsheet">
                <li>Masukkan data sumber Anda ke dalam spreadsheet.</li>
                <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/charts_insert_data.png" alt="Memasukkan Data">
                <li>Hanya data yang terlampir dalam kotak biru yang akan muncul di grafik. Jika perlu, klik dan seret pojok kanan bawah kotak biru untuk menambah atau mengurangi rentang data secara manual.</li>
                <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/charts_insert_box.png" alt="Memperluas Rentang Data">
                <li>Setelah selesai, klik X untuk menutup jendela spreadsheet.</li>
                <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/charts_insert_close.png" alt="Menutup Jendela Spreadsheet">
                <li>Bagan akan selesai.</li>
                <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/charts_insert_result.png" alt="Bagan Lengkap">
                <li>Untuk mengedit bagan Anda lagi, cukup pilih bagan tersebut, lalu klik perintah Edit Data pada tab Desain. Jendela spreadsheet akan muncul kembali.</li>
                <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/charts_insert_edit.png" alt="Mengedit Data Sumber">
            </ul>
            
            <h3>Membuat grafik dengan data Excel yang ada</h3>
            <p>Jika Anda sudah memiliki data dalam file Excel yang ingin Anda gunakan di Word, Anda bisa menyalin dan menempelkannya alih-alih memasukkannya secara manual. Buka saja spreadsheet di Excel, salin datanya, lalu tempelkan sebagai sumber data di Word.</p>
            <p>Anda juga bisa menyematkan bagan Excel yang sudah ada ke dalam dokumen Word Anda. Ini berguna jika Anda tahu Anda akan memperbarui file Excel Anda nanti; bagan di Word akan diperbarui secara otomatis setiap kali ada perubahan.</p>
            
            <h2>Memodifikasi grafik dengan alat grafik</h2>
            <p>Ada banyak cara untuk mengkustomisasi dan mengatur bagan Anda di Word. Misalnya, Anda dapat dengan cepat mengubah jenis bagan, mengatur ulang data, dan bahkan mengubah tampilan bagan.</p>
            
            <h3>Untuk mengganti data baris dan kolom:</h3>
            <ul>
                <li>Terkadang Anda mungkin ingin mengubah cara data bagan Anda dikelompokkan. Misalnya, pada diagram di bawah, data dikelompokkan berdasarkan genre, dengan kolom untuk setiap bulannya. Jika kita mengganti baris dan kolom, datanya akan dikelompokkan berdasarkan bulan. Dalam kedua kasus tersebut, diagram berisi data yang sama—hanya saja disajikan dengan cara yang berbeda.</li>
                <li>Pilih bagan yang ingin Anda ubah. Tab Desain akan muncul di sisi kanan Ribbon.</li>
                <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/charts_switch_select.png" alt="Memilih Bagan">
                <li>Dari tab Desain, klik perintah Edit Data di grup Data.</li>
                <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/charts_switch_edit.png" alt="Perintah Edit Data">
                <li>Klik lagi bagan untuk memilihnya kembali, lalu klik perintah Ganti Baris/Kolom.</li>
                <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/charts_switch_command.png" alt="Ganti Baris/Kolom">
                <li>Baris dan kolom akan dialihkan. Dalam contoh kita, data kini dikelompokkan berdasarkan bulan, dengan kolom untuk setiap genre.</li>
                <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/charts_switch_result.png" alt="Bagan Lengkap">
            </ul>
            
            <h3>Untuk mengubah jenis bagan:</h3>
            <ul>
                <li>Jika ternyata jenis bagan pilihan Anda tidak sesuai dengan data Anda, Anda dapat mengubahnya ke jenis bagan lain. Dalam contoh kita, kita akan mengubah tipe bagan dari bagan kolom menjadi bagan garis.</li>
                <li>Pilih bagan yang ingin Anda ubah. Tab Desain akan muncul.</li>
                <li>Dari tab Desain, klik perintah Ubah Tipe Bagan.</li>
                <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/charts_type_command.png" alt="Perintah Ubah Tipe Bagan">
                <li>Sebuah kotak dialog akan muncul. Pilih grafik yang diinginkan, lalu klik OK.</li>
                <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/charts_type_dialog.png" alt="Memilih Grafik">
                <li>Tipe grafik baru akan diterapkan. Dalam contoh kita, diagram garis memudahkan untuk melihat tren dari waktu ke waktu.</li>
                <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/charts_type_result.png" alt="Grafik Garis">
            </ul>
            
            <h3>Untuk mengubah tata letak grafik:</h3>
            <ul>
                <li>Untuk mengubah susunan bagan Anda, coba pilih tata letak yang berbeda. Tata letak dapat mempengaruhi beberapa elemen, termasuk judul bagan dan label data.</li>
                <li>Pilih bagan yang ingin Anda ubah. Tab Desain akan muncul.</li>
                <li>Dari tab Desain, klik perintah Quick Layout.</li>
                <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/charts_layout_command.png" alt="Quick Layout">
                <li>Pilih tata letak yang diinginkan dari menu drop-down.</li>
                <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/charts_layout_menu.png" alt="Memilih Tata Letak">
                <li>Bagan akan diperbarui untuk mencerminkan tata letak baru.</li>
                <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/charts_layout_result.png" alt="Bagan Lengkap">
            </ul>
            
            <h3>Jika Anda tidak melihat tata letak bagan yang sesuai dengan kebutuhan Anda, Anda dapat mengklik perintah Tambahkan Elemen Bagan pada tab Desain untuk menambahkan judul sumbu, garis kisi, dan elemen bagan lainnya.</h3>
            <p>Untuk mengisi placeholder (seperti judul bagan atau judul sumbu), klik elemen dan masukkan teks Anda.</p>
            <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/charts_layout_element.png" alt="Mengedit Elemen Bagan">
            
            <h3>Untuk mengubah gaya bagan:</h3>
            <ul>
                <li>Gaya bagan Word memberi Anda cara mudah untuk mengubah desain bagan, termasuk warna, gaya, dan elemen tata letak tertentu.</li>
                <li>Pilih bagan yang ingin Anda ubah. Tab Desain akan muncul.</li>
                <li>Dari tab Design, klik panah drop-down More di grup Chart Styles.</li>
                <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/charts_style_command.png" alt="Menu More Styles">
                <li>Menu tarik-turun gaya akan muncul. Pilih gaya yang Anda inginkan.</li>
                <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/charts_style_menu.png" alt="Memilih Gaya Bagan">
                <li>Gaya bagan akan diterapkan.</li>
                <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/charts_style_result.png" alt="Bagan Lengkap">
            </ul>
            
            <p>Untuk penyesuaian yang lebih cepat, gunakan pintasan pemformatan di sebelah kanan bagan Anda. Ini memungkinkan Anda menyesuaikan gaya bagan, elemen bagan, dan bahkan menambahkan filter ke data Anda.</p>
            <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/charts_style_shortcuts.png" alt="Pintasan Pemformatan Bagan">
            
            <h3>Tantangan!</h3>
            <ul>
                <li><a href="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/word2016_charts_practice.docx">Buka dokumen latihan kami</a>. Anda juga perlu mengunduh buku kerja latihan kami.</li>
                <li>Sisipkan diagram Garis ke dalam dokumen latihan Word kita.</li>
                <li>Buka buku kerja latihan kami di Excel. Salin data dan tempelkan ke dalam spreadsheet bagan.</li>
                <li>Ubah judul grafik menjadi Penjualan Bulanan.</li>
                <li>Ubah jenis bagan menjadi Kolom Bertumpuk.</li>
                <li>Gunakan menu drop-down Quick Layout untuk mengubah ke Layout 3.</li>
                <li>Gunakan menu tarik-turun Tambahkan Elemen Bagan untuk menambahkan Judul Sumbu Vertikal Utama.</li>
                <li>Klik dua kali judul sumbu, lalu ganti namanya menjadi Keuntungan Penjualan.</li>
                <li>Ganti data Baris/Kolom.</li>
                <li>Setelah selesai, bagan Anda akan terlihat seperti ini:</li>
                <img src="https://media.gcflearnfree.org/content/568bd8038d7fa91e7c8d89a1_01_05_2016/word2016_charts3_img.png" alt="Bagan Akhir">
            </ul>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Memeriksa Ejaan dan Tata Bahasa',
            'course_id' => '38',
            'desc' => 'h1>Perkenalan</h1>
            <p>Khawatir membuat kesalahan saat mengetik? Jangan. Word memberi Anda beberapa fitur pemeriksaan—termasuk alat Ejaan dan Tata Bahasa—yang dapat membantu Anda menghasilkan dokumen profesional dan bebas kesalahan.</p>
            <p>Opsional: <a href="https://media.gcflearnfree.org/content/568d5ed38d7fa91e7c8d89b3_01_06_2016/word2016_spellinggrammar_practice.docx">Unduh dokumen latihan kami</a>.</p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang penggunaan alat Ejaan dan Tata Bahasa.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/h20EBvn1UCY?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Untuk menjalankan pemeriksaan Ejaan dan Tata Bahasa:</h2>
            <ol>
                <li>Dari tab Review, klik perintah Ejaan & Tata Bahasa.</li>
                <img src="https://media.gcflearnfree.org/content/568d5ed38d7fa91e7c8d89b3_01_06_2016/spell_command.png" alt="mengklik perintah Ejaan & Tata Bahasa">
                <li>Panel Ejaan dan Tata Bahasa akan muncul di sebelah kanan. Untuk setiap kesalahan dalam dokumen Anda, Word akan mencoba menawarkan satu atau beberapa saran. Anda dapat memilih saran dan mengklik Ubah untuk memperbaiki kesalahan.</li>
                <img src="https://media.gcflearnfree.org/content/568d5ed38d7fa91e7c8d89b3_01_06_2016/spell_check_change.png " alt="memperbaiki kesalahan ejaan">
                <li>Word akan menelusuri setiap kesalahan sampai Anda meninjau semuanya. Setelah kesalahan terakhir ditinjau, kotak dialog akan muncul yang mengonfirmasi bahwa pemeriksaan ejaan dan tata bahasa telah selesai. Klik Oke.</li>
                <img src="https://media.gcflearnfree.org/content/568d5ed38d7fa91e7c8d89b3_01_06_2016/spell_check_done.png" alt="menyelesaikan pemeriksaan ejaan dan tata bahasa">
                <li>Jika tidak ada saran yang diberikan, Anda dapat mengetikkan ejaan yang benar secara manual di dokumen Anda.</li>
            </ol>
        
            <h2>Mengabaikan "kesalahan"</h2>
            <p>Pemeriksaan ejaan dan tata bahasa tidak selalu benar. Khususnya dalam tata bahasa, ada banyak kesalahan yang tidak disadari oleh Word. Ada juga saat ketika pemeriksaan ejaan dan tata bahasa akan mengatakan ada sesuatu yang salah padahal sebenarnya tidak. Hal ini sering terjadi pada nama dan kata benda lain yang mungkin tidak ada dalam kamus.</p>
            <p>Jika Word mengatakan ada sesuatu yang salah, Anda dapat memilih untuk tidak mengubahnya. Bergantung pada kesalahan ejaan atau tata bahasa, Anda dapat memilih dari beberapa opsi.</p>
        
            <h3>Untuk ejaan "kesalahan":</h3>
            <ul>
                <li>Abaikan: Ini akan melewatkan kata tanpa mengubahnya.</li>
                <li>Abaikan Semua: Ini akan melewatkan kata tanpa mengubahnya, dan juga akan melewatkan semua contoh kata lainnya dalam dokumen.</li>
                <li>Tambahkan: Ini menambahkan kata ke kamus sehingga tidak akan muncul kesalahan. Pastikan kata tersebut dieja dengan benar sebelum memilih opsi ini.</li>
            </ul>
            <img src="https://media.gcflearnfree.org/content/568d5ed38d7fa91e7c8d89b3_01_06_2016/spell_ignore_spelling.png" alt="mengabaikan kesalahan ejaan">
        
            <h3>Untuk "kesalahan" tata bahasa:</h3>
            <ul>
                <li>Abaikan: Ini akan melewatkan kata atau frasa tanpa mengubahnya.</li>
            </ul>
            <img src="https://media.gcflearnfree.org/content/568d5ed38d7fa91e7c8d89b3_01_06_2016/spell_ignore_grammar.png" alt="mengabaikan kesalahan tata bahasa">
        
            <p>Untuk beberapa kesalahan tata bahasa, Word akan memberikan penjelasan mengapa menurutnya ada sesuatu yang salah. Ini dapat membantu Anda menentukan apakah Anda ingin mengubah atau mengabaikannya.</p>
            <img src="https://media.gcflearnfree.org/content/568d5ed38d7fa91e7c8d89b3_01_06_2016/spell_grammar_common_splat.png" alt="penjelasan tentang kesalahan tata bahasa">
        
            <h2>Pemeriksaan ejaan dan tata bahasa otomatis</h2>
            <p>Secara default, Word secara otomatis memeriksa dokumen Anda untuk kesalahan ejaan dan tata bahasa, sehingga Anda bahkan mungkin tidak perlu menjalankan pemeriksaan terpisah. Kesalahan ini ditunjukkan dengan garis bergelombang berwarna.</p>
            <ul>
                <li>Garis merah menunjukkan kata yang salah eja.</li>
                <li>Garis biru menunjukkan kesalahan tata bahasa, termasuk kata-kata yang disalahgunakan.</li>
            </ul>
            <img src="https://media.gcflearnfree.org/content/568d5ed38d7fa91e7c8d89b3_01_06_2016/spell_auto_bluered.png" alt="pemeriksaan ejaan otomatis dan penanda pemeriksaan tata bahasa">
        
            <p>Kata yang disalahgunakan—juga dikenal sebagai kesalahan ejaan kontekstual—terjadi ketika sebuah kata dieja dengan benar tetapi digunakan secara salah. Misalnya, jika Anda menggunakan frasa Deer Mr. Theodore di awal surat, deer akan menjadi kesalahan ejaan kontekstual. Rusa dieja dengan benar, tetapi penggunaannya salah dalam suratnya. Kata yang benar adalah Sayang.</p>
        
            <h3>Untuk memperbaiki kesalahan ejaan:</h3>
            <ol>
                <li>Klik kanan kata yang digarisbawahi, lalu pilih ejaan yang benar dari daftar saran.</li>
                <img src="https://media.gcflearnfree.org/content/568d5ed38d7fa91e7c8d89b3_01_06_2016/spell_fix_commercial.png" alt="memperbaiki kesalahan ejaan">
                <li>Kata yang dikoreksi akan muncul di dokumen.</li>
                <li>Anda juga dapat memilih untuk Abaikan Semua contoh kata yang digarisbawahi atau menambahkannya ke kamus.</li>
            </ol>
        
            <h3>Untuk memperbaiki kesalahan tata bahasa:</h3>
            <ol>
                <li>Klik kanan kata atau frasa yang digarisbawahi, lalu pilih ejaan atau frasa yang benar dari daftar saran.</li>
                <img src="https://media.gcflearnfree.org/content/568d5ed38d7fa91e7c8d89b3_01_06_2016/spell_fix_grammar.png" alt="memperbaiki kesalahan tata bahasa">
                <li>Frasa yang dikoreksi akan muncul di dokumen.</li>
            </ol>
        
            <h2>Untuk mengubah pengaturan pemeriksaan ejaan dan tata bahasa otomatis:</h2>
            <ol>
                <li>Klik tab File untuk mengakses tampilan Backstage, lalu klik Opsi.</li>
                <img src="https://media.gcflearnfree.org/content/568d5ed38d7fa91e7c8d89b3_01_06_2016/save_default_options.png" alt="mengklik Opsi dalam tampilan Belakang Panggung">
                <li>Sebuah kotak dialog akan muncul. Di sisi kiri kotak dialog, pilih Pemeriksaan. Dari sini, Anda memiliki beberapa opsi untuk dipilih. Misalnya, jika Anda tidak ingin Word menandai kesalahan ejaan, kesalahan tata bahasa, atau kata-kata yang sering membingungkan secara otomatis, cukup hapus centang pada opsi yang diinginkan.</li>
                <img src="https://media.gcflearnfree.org/content/568d5ed38d7fa91e7c8d89b3_01_06_2016/spell_options_dialog.png" alt="menyesuaikan opsi pemeriksaan ejaan">
            </ol>
        
            <p>Jika Anda telah menonaktifkan pemeriksaan ejaan dan/atau tata bahasa otomatis, Anda masih dapat membuka tab Tinjau dan klik perintah Ejaan & Tata Bahasa untuk menjalankan pemeriksaan baru.</p>
        
            <h2>Untuk menyembunyikan kesalahan ejaan dan tata bahasa dalam dokumen:</h2>
            <p>Jika Anda berbagi dokumen seperti resume dengan seseorang, Anda mungkin tidak ingin orang tersebut melihat garis merah dan biru. Menonaktifkan pemeriksaan ejaan dan tata bahasa otomatis hanya berlaku di komputer Anda, sehingga baris tersebut mungkin masih muncul saat orang lain melihat dokumen Anda. Untungnya, Word memungkinkan Anda menyembunyikan kesalahan ejaan dan tata bahasa sehingga baris tersebut tidak akan muncul di komputer mana pun.</p>
            <ol>
                <li>Klik tab File untuk menuju ke tampilan Backstage, lalu klik Opsi.</li>
                <li>Sebuah kotak dialog akan muncul. Pilih Pemeriksaan, lalu centang kotak di samping Sembunyikan kesalahan ejaan dalam dokumen ini saja dan Sembunyikan kesalahan tata bahasa hanya dalam dokumen ini, lalu klik OK.</li>
                <img src="https://media.gcflearnfree.org/content/568d5ed38d7fa91e7c8d89b3_01_06_2016/spell_options_hide.png" alt="menyembunyikan pemeriksaan ejaan untuk dokumen tertentu">
                <li>Garis-garis dalam dokumen akan disembunyikan.</li>
            </ol>
        
            <h2>Tantangan!</h2>
            <ol>
                <li><a href="https://media.gcflearnfree.org/content/568d5ed38d7fa91e7c8d89b3_01_06_2016/word2016_spellinggrammar_practice.docx">Buka dokumen latihan kami</a>. Jika Anda sudah mengunduh dokumen latihan kami untuk mengikuti pelajaran, pastikan untuk mengunduh salinan baru dengan mengeklik tautan pada langkah ini.</li>
                <li>Jalankan pemeriksaan Ejaan & Tata Bahasa.</li>
                <li>Abaikan ejaan nama seperti Marcom.</li>
                <li>Perbaiki semua kesalahan ejaan dan tata bahasa lainnya.</li>
                <li>Setelah selesai, dokumen Anda akan terlihat seperti ini:</li>
            </ol>
            <img src="https://media.gcflearnfree.org/content/568d5ed38d7fa91e7c8d89b3_01_06_2016/word2016_spelling_img.png" alt="Dokumen Akhir">'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Lacak Perubahan dan Komentar',
            'course_id' => '39',
            'desc' => '<h1>Perkenalan</h1>
            <p>Katakanlah seseorang meminta Anda untuk mengoreksi atau berkolaborasi pada sebuah dokumen. Jika Anda memiliki salinan cetak, Anda dapat menggunakan pena merah untuk mencoret kalimat, menandai kesalahan ejaan, dan menambahkan komentar di margin. Word memungkinkan Anda melakukan semua hal ini secara elektronik menggunakan fitur <strong>Lacak Perubahan</strong> dan <strong>Komentar</strong>.</p>
            <p>Opsional: <a href="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/word2016_trackchanges_practice.docx">Unduh dokumen latihan kami</a>.</p>
            <p>Tonton video di bawah untuk mempelajari lebih lanjut tentang Lacak Perubahan dan Komentar.</p>
        
            <h2>Memahami Perubahan Jalur</h2>
            <p>Saat Anda mengaktifkan Lacak Perubahan, setiap perubahan yang Anda buat pada dokumen akan muncul sebagai markup berwarna. Jika Anda menghapus teks, teks tersebut tidak akan hilang—sebaliknya, teks tersebut akan dicoret. Jika Anda menambahkan teks, itu akan digarisbawahi. Ini memungkinkan Anda melihat hasil edit sebelum membuat perubahan permanen.</p>
            <img src="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/track_changes_intro.png" alt="melacak perubahan dalam dokumen">
            <p>Jika ada beberapa pengulas, setiap orang akan diberi warna markup yang berbeda.</p>
        
            <h3>Untuk mengaktifkan Lacak Perubahan:</h3>
            <ol>
                <li>Dari tab Review, klik perintah Lacak Perubahan.</li>
                <img src="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/track_changes_command.png" alt="menyalakan Lacak Perubahan">
                <li>Lacak Perubahan akan diaktifkan. Mulai saat ini, setiap perubahan yang Anda buat pada dokumen akan muncul sebagai markup berwarna.</li>
                <img src="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/track_changes_on.png" alt="melacak perubahan dalam dokumen">
            </ol>
        
            <h3>Meninjau perubahan</h3>
            <p>Perubahan yang terlacak sebenarnya hanyalah perubahan yang disarankan. Untuk menjadi permanen, mereka harus diterima. Di sisi lain, penulis asli mungkin tidak setuju dengan beberapa perubahan yang dilacak dan memilih untuk menolaknya.</p>
        
            <h3>Untuk menerima atau menolak perubahan:</h3>
            <ol>
                <li>Pilih perubahan yang ingin Anda terima atau tolak.</li>
                <img src="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/track_accept_select.png" alt="memilih perubahan untuk diterima atau ditolak">
                <li>Dari tab Tinjau, klik perintah Terima atau Tolak.</li>
                <img src="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/track_accept_command.png" alt="menerima suatu perubahan">
                <li>Markup akan hilang, dan Word secara otomatis akan melompat ke perubahan berikutnya. Anda dapat terus menerima atau menolak setiap perubahan hingga Anda meninjau semuanya.</li>
                <img src="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/track_accept_next.png" alt="beralih ke perubahan terlacak berikutnya">
                <li>Setelah selesai, klik perintah Lacak Perubahan untuk mematikan Lacak Perubahan.</li>
                <img src="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/track_accept_turnoff.png" alt="mematikan perubahan jalur">
                <li>Untuk menerima semua perubahan sekaligus, klik panah tarik-turun Terima, lalu pilih Terima Semua. Jika Anda tidak ingin lagi melacak perubahan, Anda dapat memilih Terima Semua dan Hentikan Pelacakan.</li>
                <img src="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/track_accept_all_splat.png" alt="menerima semua perubahan dalam dokumen">
            </ol>
        
            <h3>Opsi tampilan Lacak Perubahan</h3>
            <p>Jika Anda memiliki banyak perubahan yang terlacak, perubahan tersebut mungkin mengganggu jika Anda mencoba membaca dokumen secara menyeluruh. Untungnya, Word menyediakan beberapa cara untuk mengkustomisasi tampilan perubahan terlacak:</p>
            <ul>
                <li><strong>Markup Sederhana</strong>: Ini menunjukkan versi final tanpa markup sebaris. Penanda merah akan muncul di margin kiri untuk menunjukkan di mana perubahan telah dilakukan.</li>
                <li><strong>Semua Markup</strong>: Ini menunjukkan versi final dengan markup sebaris.</li>
                <li><strong>Tanpa Markup</strong>: Ini menampilkan versi final dan menyembunyikan semua markup.</li>
                <li><strong>Asli</strong>: Ini menampilkan versi asli dan menyembunyikan semua markup.</li>
            </ul>
        
            <h3>Untuk menyembunyikan perubahan yang terlacak:</h3>
            <ol>
                <li>Dari tab Review, klik perintah Display for Review. Perintah Display for Review terletak di sebelah kanan perintah Track Changes.</li>
                <img src="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/track_view_command.png" alt="mengklik perintah Tampilkan untuk Tinjauan">
                <li>Pilih opsi yang diinginkan dari menu drop-down. Dalam contoh kita, kita akan memilih Tanpa Markup untuk melihat pratinjau versi final dokumen sebelum menerima perubahan.</li>
                <img src="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/track_view_nomarkup.png" alt="menyembunyikan tanda">
                <li>Anda juga dapat mengklik penanda di margin kiri untuk beralih antara Markup Sederhana dan Semua Markup.</li>
                <img src="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/track_view_splat.png" alt="menyembunyikan perubahan terlacak dari dalam dokumen">
            </ol>
            <p>Ingatlah bahwa menyembunyikan Lacak Perubahan tidak sama dengan meninjau perubahan. Anda tetap harus menerima atau menolak perubahan sebelum mengirimkan versi final dokumen Anda.</p>
        
            <h3>Untuk menampilkan revisi pada balon:</h3>
            <p>Secara default, sebagian besar revisi muncul sebaris, artinya teks itu sendiri ditandai. Anda juga dapat memilih untuk menampilkan revisi dalam bentuk balon, yang memindahkan sebagian besar revisi ke margin kanan. Menghapus markup sebaris dapat membuat dokumen lebih mudah dibaca, dan balon juga memberi Anda informasi lebih detail tentang beberapa markup.</p>
            <ol>
                <li>Dari tab Review, klik Show Markup > Balloons > Show Revisions in Balloons.</li>
                <img src="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/track_balloon_command.png" alt="menyalakan revisi balon">
                <li>Sebagian besar revisi akan muncul di margin kanan, meskipun teks tambahan apa pun akan tetap muncul sebaris.</li>
                <img src="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/track_balloon_done.png" alt="trek berubah dalam bentuk balon, bukan sebaris dengan teks">
                <li>Untuk kembali ke markup sebaris, Anda dapat memilih Tampilkan Semua Revisi Sebaris atau Hanya Tampilkan Komentar dan Pemformatan dalam Balon.</li>
            </ol>
        
            <h3>Komentar</h3>
            <p>Terkadang Anda mungkin ingin menambahkan komentar untuk memberikan umpan balik daripada mengedit dokumen. Meskipun sering digunakan bersama dengan Lacak Perubahan, Anda tidak perlu mengaktifkan Lacak Perubahan untuk menambahkan komentar.</p>
        
            <h3>Untuk menambahkan komentar:</h3>
            <ol>
                <li>Sorot beberapa teks, atau tempatkan titik penyisipan di tempat yang Anda inginkan untuk menampilkan komentar.</li>
                <img src="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/track_comment_select.png" alt="memilih teks">
                <li>Dari tab Review, klik perintah Komentar Baru.</li>
                <img src="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/track_comment_command.png" alt="menambahkan komentar">
                <li>Ketik komentar Anda. Setelah selesai, Anda dapat menutup kotak komentar dengan menekan tombol Esc atau dengan mengklik dimana saja di luar kotak komentar.</li>
                <img src="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/track_comment_add.png" alt="komentar yang ditambahkan">
            </ol>
        
            <h3>Untuk menghapus komentar:</h3>
            <ol>
                <li>Pilih komentar yang ingin Anda hapus.</li>
                <img src="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/track_comment_delete_select.png" alt="memilih komentar">
                <li>Dari tab Review, klik perintah Hapus.</li>
                <img src="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/track_comment_delete_command.png" alt="menghapus komentar">
                <li>Komentar tersebut akan dihapus.</li>
                <li>Untuk menghapus semua komentar, klik panah tarik-turun Hapus dan pilih Hapus Semua Komentar di Dokumen.</li>
                <img src="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/track_comment_delete_all_splat.png" alt="menghapus semua komentar sekaligus">
            </ol>
        
            <h3>Membandingkan dokumen</h3>
            <p>Jika Anda mengedit dokumen tanpa melacak perubahan, fitur peninjauan seperti Terima dan Tolak masih dapat digunakan. Anda dapat melakukannya dengan membandingkan dua versi dokumen. Yang Anda butuhkan hanyalah dokumen asli dan dokumen hasil revisi (dokumen juga harus memiliki nama file yang berbeda).</p>
        
            <h3>Untuk membandingkan dua dokumen:</h3>
            <ol>
                <li>Dari tab Review, klik perintah Bandingkan, lalu pilih Bandingkan dari menu drop-down.</li>
                <img src="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/track_compare_command.png" alt="mengklik perintah Bandingkan pada tab Review">
                <li>Sebuah kotak dialog akan muncul. Pilih dokumen Asli Anda dengan mengklik panah drop-down dan memilih dokumen dari daftar. Jika file tidak ada dalam daftar, klik tombol Telusuri untuk menemukannya.</li>
                <li>Pilih dokumen Revisi, lalu klik OK.</li>
                <img src="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/track_compare_selectfiles.png" alt="memilih file untuk dibandingkan">
                <li>Word akan membandingkan kedua file tersebut untuk menentukan apa yang diubah dan kemudian membuat dokumen baru. Perubahan akan muncul sebagai markup berwarna, seperti Lacak Perubahan. Anda kemudian dapat menggunakan perintah Terima dan Tolak untuk menyelesaikan dokumen.</li>
                <img src="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/track_compare_combined.png" alt="membandingkan dua dokumen berbeda di jendela yang sama">
            </ol>
        
            <h1>Tantangan!</h1>
            <p>Buka <a href="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/word2016_trackchanges_practice.docx">dokumen latihan kami</a>.</p>
            <ol>
                <li>Aktifkan <strong>Lacak Perubahan</strong> dan tampilkan <strong>Semua Markup</strong>.</li>
                <li>Di grup <strong>Pelacakan</strong>, pilih <strong>Tampilkan Revisi di Balon</strong>.</li>
                <li>Di paragraf pertama, edit kalimat kedua sehingga terbaca <em>Senang bertemu dengan Anda dan menjelajahi fasilitasnya</em>.</li>
                <li>Pada paragraf kedua, ubahlah kata <em>teknik</em> menjadi <em>strategi</em>.</li>
                <li>Ubah font surat menjadi <strong>Cambria, 12 pt</strong>.</li>
                <li>Di paragraf ketiga, pilih kata <em>Terima Kasih</em> dan masukkan komentar yang mengatakan <em>Letakkan ini di baris yang sama dengan Quality Furnishings</em>.</li>
            </ol>
            <p>Pada titik ini, surat Anda akan terlihat seperti ini (Catatan: Warna markup mungkin berbeda-beda):</p>
            <img src="https://media.gcflearnfree.org/content/568d8ac38d7fa91e7c8d89b7_01_06_2016/word2016_trackchanges_img_edited.png" alt="Tantangan Lacak Perubahan">
            <p>Klik panah tarik-turun <strong>Terima</strong> dan pilih <strong>Terima Semua Perubahan dan Hentikan Pelacakan</strong>.</p>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Memeriksa dan Melindungi Dokumen',
            'course_id' => '40',
            'desc' => '    <h1>Perkenalan</h1>
            <p>Sebelum membagikan dokumen, Anda sebaiknya memastikan dokumen tersebut tidak menyertakan informasi apa pun yang ingin Anda rahasiakan. Anda mungkin juga ingin mencegah orang lain mengedit file Anda. Untungnya, Word menyertakan beberapa alat untuk membantu memeriksa dan melindungi dokumen Anda.</p>
            <p>Opsional: <a href="https://media.gcflearnfree.org/content/5670764eaaa918141448fb06_12_15_2015/word2016_inspectprotect_practice.docx">Unduh dokumen latihan kami</a>.</p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang menyelesaikan dokumen Anda.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/SlpIpWe_kNI?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Pemeriksa Dokumen</h2>
            <p>Setiap kali Anda membuat atau mengedit dokumen, informasi pribadi tertentu dapat ditambahkan ke file secara otomatis—misalnya, informasi tentang pembuat dokumen. Anda dapat menggunakan Pemeriksa Dokumen untuk menghapus informasi jenis ini sebelum berbagi dokumen dengan orang lain.</p>
            <p>Karena beberapa perubahan mungkin bersifat permanen, sebaiknya gunakan Simpan Sebagai untuk membuat salinan cadangan dokumen Anda sebelum menggunakan Pemeriksa Dokumen.</p>
        
            <h3>Untuk menggunakan Pemeriksa Dokumen:</h3>
            <ol>
                <li>Klik tab <strong>File</strong> untuk menuju ke tampilan Backstage.</li>
                <li>Dari panel <strong>Info</strong>, klik <strong>Periksa Masalah</strong>, lalu pilih <strong>Periksa Dokumen</strong> dari menu drop-down.</li>
                <img src="https://media.gcflearnfree.org/content/5670764eaaa918141448fb06_12_15_2015/inspect_command.png" alt="membandingkan dua dokumen berbeda di jendela yang sama">
                <li>Pemeriksa Dokumen akan muncul. Centang atau hapus centang pada kotak, bergantung pada konten yang ingin Anda tinjau, lalu klik <strong>Periksa</strong>. Dalam contoh kita, kita akan membiarkan semuanya dipilih.</li>
                <img src="https://media.gcflearnfree.org/content/5670764eaaa918141448fb06_12_15_2015/inspect_dialog.png" alt="membandingkan dua dokumen berbeda di jendela yang sama">
                <li>Itu hasil pemeriksaan akan menampilkan tanda seru untuk setiap kategori yang berisi data yang berpotensi sensitif, dan juga akan memiliki tombol <strong>Hapus Semua</strong> untuk setiap kategori tersebut. Klik <strong>Hapus Semua</strong> untuk menghapus data.</li>
                <img src="https://media.gcflearnfree.org/content/5670764eaaa918141448fb06_12_15_2015/inspect_dialog_results.png" alt="membandingkan dua dokumen berbeda di jendela yang sama">
                <li>Setelah selesai, klik <strong>Tutup</strong>.</li>
            </ol>
        
            <h2>Melindungi Dokumen Anda</h2>
            <p>Secara default, siapa pun yang memiliki akses ke dokumen Anda akan dapat membuka, menyalin, dan mengedit kontennya kecuali Anda melindunginya. Ada beberapa cara untuk melindungi dokumen, tergantung kebutuhan Anda.</p>
        
            <h3>Untuk melindungi dokumen Anda:</h3>
            <ol>
                <li>Klik tab <strong>File</strong> untuk menuju ke tampilan Backstage.</li>
                <li>Dari panel <strong>Info</strong>, klik perintah <strong>Lindungi Dokumen</strong>.</li>
                <li>Di menu tarik-turun, pilih opsi yang paling sesuai dengan kebutuhan Anda. Dalam contoh kita, kita akan memilih <strong>Tandai sebagai Final</strong>. Menandai dokumen Anda sebagai dokumen final adalah cara yang baik untuk mencegah orang lain mengedit file, sementara opsi lain memberi Anda kontrol lebih besar jika Anda memerlukannya.</li>
                <img src="https://media.gcflearnfree.org/content/5670764eaaa918141448fb06_12_15_2015/inspect_final_command.png" alt="membandingkan dua dokumen berbeda di jendela yang sama">
                <li>Sebuah kotak dialog akan muncul meminta Anda untuk menyimpan. Klik <strong>Oke</strong>.</li>
                <img src="https://media.gcflearnfree.org/content/5670764eaaa918141448fb06_12_15_2015/inspect_final_dialog1.png" alt="membandingkan dua dokumen berbeda di jendela yang sama">
                <li>Kotak dialog lain akan muncul. Klik <strong>Oke</strong>.</li>
                <img src="https://media.gcflearnfree.org/content/5670764eaaa918141448fb06_12_15_2015/inspect_final_dialog2.png" alt="membandingkan dua dokumen berbeda di jendela yang sama">
                <li>Dokumen tersebut akan ditandai sebagai final. Setiap kali orang lain membuka file, sebuah bilah akan muncul di bagian atas untuk mencegah mereka mengedit dokumen.</li>
                <img src="https://media.gcflearnfree.org/content/5670764eaaa918141448fb06_12_15_2015/inspect_final_done.png" alt="membandingkan dua dokumen berbeda di jendela yang sama">
                </ol>
            <p>Menandai dokumen sebagai final sebenarnya tidak akan menghalangi orang lain untuk mengeditnya karena mereka cukup memilih <strong>Edit Pokoknya</strong>. Jika Anda ingin mencegah orang lain mengedit dokumen, Anda dapat menggunakan opsi <strong>Batasi Akses</strong>.</p>
        
            <h2>Tantangan!</h2>
            <ol>
                <li>Buka <a href="https://media.gcflearnfree.org/content/5670764eaaa918141448fb06_12_15_2015/word2016_inspectprotect_practice.docx">dokumen latihan kami</a>. Jika Anda membuka dokumen latihan kami untuk mengikuti pelajaran, pastikan untuk mengunduh salinan baru dengan mengklik kembali link tersebut.</li>
                <li>Gunakan Pemeriksa Dokumen untuk memeriksa dan menghapus informasi tersembunyi.</li>
                <li>Lindungi dokumen dengan menandainya sebagai final.</li>
            </ol>
            <p>Setelah selesai, bagian atas halaman Anda akan terlihat seperti ini:</p>
            <img src="https://media.gcflearnfree.org/content/5670764eaaa918141448fb06_12_15_2015/word2016_inspect_protect_img.png" alt="Tantangan Lacak Perubahan">'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Memulai dengan PowerPoint',
            'course_id' => '41',
            'desc' => '    <h1>Perkenalan</h1>
            <p>PowerPoint adalah program presentasi yang memungkinkan Anda membuat presentasi slide dinamis. Presentasi ini dapat berupa animasi, narasi, gambar, video, dan masih banyak lagi. Dalam pelajaran ini, Anda akan mempelajari lingkungan PowerPoint, termasuk Ribbon, Quick Access Toolbar, dan tampilan Backstage.</p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang memulai dengan PowerPoint.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/k6pg4nZS6fA?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"></iframe></div>
            <h2>Mengenal PowerPoint</h2>
            <p>PowerPoint 2016 mirip dengan PowerPoint 2013 dan PowerPoint 2010. Jika sebelumnya Anda pernah menggunakan versi ini, PowerPoint 2016 pasti terasa familier. Namun jika Anda baru mengenal PowerPoint atau memiliki lebih banyak pengalaman dengan versi yang lebih lama, Anda harus terlebih dahulu meluangkan waktu untuk mengenal antarmuka PowerPoint 2016.</p>
        
            <h3>Antarmuka PowerPoint</h3>
            <p>Saat Anda membuka PowerPoint untuk pertama kalinya, Layar Mulai akan muncul. Dari sini, Anda dapat membuat presentasi baru, memilih template, dan mengakses presentasi yang baru saja diedit. Dari Layar Mulai, cari dan pilih Presentasi Kosong untuk mengakses antarmuka PowerPoint.</p>
            <img src="https://media.gcflearnfree.org/content/56e1bb7b6aa915221cb48d1b_03_10_2016/getting_started_interface_backstage.png" alt="Lebih banyak opsi dalam grup">
            <h2>Bekerja dengan lingkungan PowerPoint</h2>
            <p>Ribbon dan Quick Access Toolbar adalah tempat Anda akan menemukan perintah untuk melakukan tugas-tugas umum di PowerPoint. Tampilan di belakang panggung memberi Anda berbagai pilihan untuk menyimpan, membuka file, mencetak, dan berbagi dokumen Anda.</p>
        
            <h3>Ribbon</h3>
            <p>PowerPoint menggunakan sistem Ribbon bertab, bukan menu tradisional. Ribbon berisi beberapa tab, masing-masing dengan beberapa kelompok perintah. Misalnya, grup Font pada tab Beranda berisi perintah untuk memformat teks dalam dokumen Anda.</p>
            <img src="https://media.gcflearnfree.org/content/56e1bb7b6aa915221cb48d1b_03_10_2016/getting_started_ribbon_groups.png" alt="Lebih banyak opsi dalam grup">
            <h4>Grup di Ribbon</h4>
            <ul>
                <li>
                    Beberapa grup juga memiliki panah kecil di pojok kanan bawah yang dapat Anda klik untuk melihat opsi lainnya.
                    <img src="https://media.gcflearnfree.org/content/56e1bb7b6aa915221cb48d1b_03_10_2016/getting_started_ribbon_more.png" alt="Lebih banyak opsi dalam grup">
                </li>
            </ul>
        
            <h4>Menampilkan dan menyembunyikan Ribbon</h4>
            <ul>
                <li>
                    Ribbon dirancang untuk merespons tugas Anda saat ini, namun Anda dapat memilih untuk meminimalkannya jika Anda merasa tugas tersebut memakan terlalu banyak ruang layar.
                    <img src="https://media.gcflearnfree.org/content/56e1bb7b6aa915221cb48d1b_03_10_2016/getting_started_ribbon_display.png" alt="Opsi Tampilan Ribbon">
                </li>
            </ul>
        
            <ul>
                <li>Sembunyikan Otomatis Ribbon: Sembunyikan otomatis menampilkan buku kerja Anda dalam mode layar penuh dan menyembunyikan Ribbon sepenuhnya. Untuk menampilkan Ribbon, klik perintah Expand Ribbon di bagian atas layar.</li>
                <li>Tampilkan Tab: Opsi ini menyembunyikan semua grup perintah saat tidak digunakan, namun tab akan tetap terlihat. Untuk menampilkan Ribbon, cukup klik tab.</li>
                <li>Tampilkan Tab dan Perintah: Opsi ini memaksimalkan Ribbon. Semua tab dan perintah akan terlihat. Opsi ini dipilih secara default saat Anda membuka PowerPoint untuk pertama kalinya.</li>
            </ul>
        
            <h4>Menggunakan fitur Beritahu saya</h4>
            <ul>
                <li>
                    Jika Anda kesulitan menemukan perintah yang diinginkan, fitur Beritahu Saya dapat membantu. Ini berfungsi seperti bilah pencarian biasa: Ketik apa yang Anda cari, dan daftar opsi akan muncul. Anda kemudian dapat menggunakan perintah langsung dari menu tanpa harus menemukannya di Ribbon.
                    <img src="https://media.gcflearnfree.org/content/56e1bb7b6aa915221cb48d1b_03_10_2016/getting_started_tell_me.png" alt="Menggunakan fitur Beritahu saya">
                </li>
            </ul>
        
            <h3>Bilah Alat Akses Cepat</h3>
            <ul>
                <li>
                    Terletak tepat di atas Ribbon, Quick Access Toolbar memungkinkan Anda mengakses perintah umum tidak peduli tab mana yang dipilih. Secara default, ini mencakup perintah Simpan, Undo, Redo, dan Mulai Dari Awal. Anda dapat menambahkan perintah lain tergantung pada preferensi Anda.
                </li>
            </ul>
        
            <h4>Untuk menambahkan perintah ke Quick Access Toolbar:</h4>
            <ol>
                <li>Klik panah drop-down di sebelah kanan Quick Access Toolbar.</li>
                <img src="https://media.gcflearnfree.org/content/56e1bb7b6aa915221cb48d1b_03_10_2016/getting_started_quick_dropdown.png" alt="Bilah Alat Akses Cepat">
                <li>Pilih perintah yang ingin Anda tambahkan dari menu drop-down. Untuk memilih dari lebih banyak perintah, pilih Perintah Lainnya.</li>
                <img src="https://media.gcflearnfree.org/content/56e1bb7b6aa915221cb48d1b_03_10_2016/getting_started_quick_menu.png" alt="Bilah Alat Akses Cepat">
                <li>Perintah tersebut akan ditambahkan ke Quick Access Toolbar.</li>
                <img src="https://media.gcflearnfree.org/content/56e1bb7b6aa915221cb48d1b_03_10_2016/getting_started_quick_result.png" alt="Bilah Alat Akses Cepat">
            </ol>
        
            <h4>Penggaris, pemandu, dan garis kisi</h4>
            <ul>
                <li>
                    PowerPoint menyertakan beberapa alat untuk membantu mengatur dan mengatur konten pada slide Anda, termasuk Penggaris, panduan, dan garis kisi. Alat-alat ini memudahkan untuk menyelaraskan objek pada slide Anda. Cukup klik kotak centang di grup Tampilkan pada tab Tampilan untuk menampilkan dan menyembunyikan alat ini.
                    <img src="https://media.gcflearnfree.org/content/56e1bb7b6aa915221cb48d1b_03_10_2016/getting_started_ruler_all.png" alt="Penggaris, Pedoman, dan Grid">
                </li>
            </ul>
        
            <h4>Zoom dan opsi tampilan lainnya</h4>
            <ul>
                <li>
                    PowerPoint memiliki beragam opsi tampilan yang mengubah cara presentasi Anda ditampilkan. Anda dapat memilih untuk melihat presentasi Anda dalam tampilan Normal, tampilan Pengurut Slide, tampilan Baca, atau tampilan Peragaan Slide. Anda juga dapat memperbesar dan memperkecil agar presentasi Anda lebih mudah dibaca.
                </li>
            </ul>
        
            <h4>Beralih di antara tampilan slide yang berbeda itu mudah. Cukup cari dan pilih perintah tampilan slide yang diinginkan di sudut kanan bawah jendela PowerPoint.</h4>
            <ul>
                <li>
                    <img src="https://media.gcflearnfree.org/content/56e1bb7b6aa915221cb48d1b_03_10_2016/getting_started_zoom_views.png" alt="Perintah Tampilan Slide">
                </li>
            </ul>
        
            <h4>Memperbesar dan memperkecil</h4>
            <ul>
                <li>
                    Untuk memperbesar atau memperkecil, klik dan seret penggeser kontrol zoom di sudut kanan bawah jendela PowerPoint. Anda juga dapat memilih perintah + atau - untuk memperbesar atau memperkecil tampilan secara bertahap. Angka di sebelah penggeser menampilkan persentase pembesaran saat ini, disebut juga tingkat pembesaran.
                    <img src="https://media.gcflearnfree.org/content/56e1bb7b6aa915221cb48d1b_03_10_2016/getting_started_zoom_slider.png" alt="Penggeser kontrol Zoom">
                </li>
            </ul>
        
            <h2>Pemandangan di belakang panggung</h2>
            <ul>
                <li>
                    Tampilan belakang panggung memberi Anda berbagai pilihan untuk menyimpan, membuka, mencetak, dan berbagi presentasi Anda. Untuk mengakses tampilan Backstage, klik tab File di Ribbon.
                    <img src="https://media.gcflearnfree.org/content/56e1bb7b6aa915221cb48d1b_03_10_2016/getting_started_backstage_ribbon.png" alt="Mengklik tab File">
                </li>
            </ul>
        
            <h3>Tantangan!</h3>
            <ol>
                <li>Buka PowerPoint 2016, dan buat presentasi kosong.</li>
                <li>Ubah Opsi Tampilan Ribbon menjadi Tampilkan Tab.</li>
                <li>Klik panah drop-down di sebelah Quick Access Toolbar dan tambahkan New, Quick Print, dan Spelling.</li>
                <li>Di bilah Beri tahu saya, ketik Bentuk dan tekan Enter.</li>
                <li>Pilih bentuk dari menu, dan klik dua kali di suatu tempat pada slide Anda.</li>
                <li>Tunjukkan Penggaris jika belum terlihat.</li>
                <li>Perbesar presentasi hingga 120%.</li>
                <li>Ketika Anda selesai, presentasi Anda akan terlihat seperti ini:</li>
                <img src="https://media.gcflearnfree.org/content/56e1bb7b6aa915221cb48d1b_03_10_2016/getting_started.png" alt="Mengklik tab File">
            </ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Membuat dan Membuka Presentasi',
            'course_id' => '42',
            'desc' => '<h1>Perkenalan PowerPoint</h1>
            <p>File PowerPoint disebut presentasi. Setiap kali Anda memulai proyek baru di PowerPoint, Anda harus membuat presentasi baru, yang bisa kosong atau dari templat. Anda juga harus mengetahui cara membuka presentasi yang sudah ada.</p>
            
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang membuat dan membuka presentasi di PowerPoint.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/OX3vRazm4fw?rel=0&amp;showinfo=0" allowfullscreen frameborder="0">&amp;amp;amp;lt;span id="selection-marker-1" class="redactor-selection-marker"&amp;amp;amp;gt;&amp;amp;amp;lt;/span&amp;amp;amp;gt;</iframe></div>
            <h2>Untuk membuat presentasi baru:</h2>
            <p>Saat memulai proyek baru di PowerPoint, Anda sering kali ingin memulai dengan presentasi kosong baru.</p>
            <ul>
                <li>Pilih tab <strong>File</strong> untuk menuju ke tampilan Backstage.</li>
                <img src="https://media.gcflearnfree.org/content/56d45cf96aa91509c874341e_02_29_2016/create_new_ribbon.png" alt="Mengklik tab File">
                <li>Pilih <strong>Baru</strong> di sisi kiri jendela, lalu klik <strong>Presentasi Kosong</strong>.</li>
                <img src="https://media.gcflearnfree.org/content/56d45cf96aa91509c874341e_02_29_2016/create_new_blank.png" alt="Mengklik tab File">
                <li>Presentasi baru akan muncul.</li>
            </ul>
        
            <h2>Untuk membuat presentasi baru dari templat:</h2>
            <p>Templat adalah presentasi pradesain yang dapat Anda gunakan untuk membuat peragaan slide baru dengan cepat. Templat sering kali menyertakan pemformatan dan desain khusus, sehingga dapat menghemat banyak waktu dan tenaga saat memulai proyek baru.</p>
            <ul>
                <li>Klik tab <strong>File</strong> untuk mengakses tampilan Backstage, lalu pilih <strong>New</strong>.</li>
                <li>Anda dapat mengeklik penelusuran yang disarankan untuk menemukan templat atau menggunakan bilah penelusuran untuk menemukan sesuatu yang lebih spesifik. Dalam contoh kita, kita akan mencari kata kunci papan tulis.</li>
                <img src="https://media.gcflearnfree.org/content/56d45cf96aa91509c874341e_02_29_2016/create_template_new.png" alt="Mencari template">
                <li>Pilih templat untuk meninjaunya.</li>
                <li>Memilih templat</li>
                <img src="https://media.gcflearnfree.org/content/56d45cf96aa91509c874341e_02_29_2016/create_template_search.png" alt="Memilih template">
                <li>Pratinjau template akan muncul, bersama dengan informasi tambahan tentang bagaimana template tersebut dapat digunakan.</li>
                <li>Klik <strong>Buat</strong> untuk menggunakan templat yang dipilih.</li>
                <li>Membuat presentasi baru dengan template</li>
                <img src="https://media.gcflearnfree.org/content/56d45cf96aa91509c874341e_02_29_2016/create_template_preview.png" alt="Membuat presentasi baru dengan template">
                <li>Presentasi baru akan muncul dengan template yang dipilih.</li>
            </ul>
        
            <h2>Untuk membuka presentasi yang sudah ada:</h2>
            <p>Selain membuat presentasi baru, Anda sering kali harus membuka presentasi yang telah disimpan sebelumnya. Untuk mempelajari lebih lanjut tentang menyimpan presentasi, kunjungi pelajaran kami tentang Menyimpan Presentasi.</p>
            <ul>
                <li>Pilih tab <strong>File</strong> untuk menuju ke tampilan Backstage, lalu klik <strong>Open</strong>.</li>
                <li>Mengklik Buka</li>
                <img src="https://media.gcflearnfree.org/content/56d45cf96aa91509c874341e_02_29_2016/create_existing_open.png" alt="Mengklik Buka">
                <li>Klik <strong>Telusuri</strong>. Alternatifnya, Anda bisa memilih <strong>OneDrive</strong> untuk membuka file yang disimpan di OneDrive Anda.</li>
                <li>Mengklik Telusuri</li>
                <img src="https://media.gcflearnfree.org/content/56d45cf96aa91509c874341e_02_29_2016/create_existing_browse.png" alt="Mengklik Telusuri">
                <li>Kotak dialog Buka akan muncul. Cari dan pilih presentasi Anda, lalu klik <strong>Buka</strong>.</li>
                <li>Membuka presentasi</li>
                <img src="https://media.gcflearnfree.org/content/56d45cf96aa91509c874341e_02_29_2016/create_existing_dialog.png" alt="Membuka presentasi">
            </ul>
        
            <p>Sebagian besar fitur di Microsoft Office, termasuk PowerPoint, ditujukan untuk menyimpan dan berbagi dokumen secara online. Hal ini dilakukan dengan OneDrive, yang merupakan ruang penyimpanan online untuk dokumen dan file Anda. Jika Anda ingin menggunakan OneDrive, pastikan Anda masuk ke PowerPoint dengan akun Microsoft Anda. Tinjau pelajaran kami tentang Memahami OneDrive untuk mempelajari lebih lanjut.</p>
        
            <h2>Untuk menyematkan presentasi:</h2>
            <p>Jika Anda sering bekerja dengan presentasi yang sama, Anda dapat menyematkannya ke tampilan Backstage untuk memudahkan akses.</p>
            <ul>
                <li>Pilih tab <strong>File</strong> untuk menuju ke tampilan Backstage, lalu klik <strong>Open</strong>. Presentasi Terbaru Anda akan muncul.</li>
                <li>Arahkan mouse ke presentasi yang ingin Anda sematkan, lalu klik ikon pushpin.</li>
                <li>Menyematkan presentasi</li>
                <img src="https://media.gcflearnfree.org/content/56d45cf96aa91509c874341e_02_29_2016/create_pin_icon.png" alt="Menyematkan presentasi">
                <li>Presentasi akan tetap berada di daftar Presentasi terbaru hingga pinnya dilepas. Untuk melepas pin presentasi, klik lagi ikon pushpin.</li>
                <li>Presentasi yang disematkan</li>
                <img src="https://media.gcflearnfree.org/content/56d45cf96aa91509c874341e_02_29_2016/create_pin_pinned.png" alt="Presentasi yang disematkan">
            </ul>
        
            <h2>Modus Kompatibilitas</h2>
            <p>Terkadang Anda mungkin perlu bekerja dengan presentasi yang dibuat di versi PowerPoint yang lebih lama, seperti PowerPoint 2003 atau PowerPoint 2000. Saat Anda membuka jenis presentasi ini, presentasi tersebut akan muncul dalam Mode Kompatibilitas.</p>
            <ul>
                <li>Mode Kompatibilitas menonaktifkan fitur tertentu, jadi Anda hanya dapat mengakses perintah yang terdapat dalam program yang digunakan untuk membuat presentasi. Misalnya, jika Anda membuka presentasi yang dibuat di PowerPoint 2003, Anda hanya bisa menggunakan tab dan perintah yang ditemukan di PowerPoint 2003.</li>
                <li>Pada gambar di bawah, Anda dapat melihat di bagian atas jendela bahwa presentasi berada dalam Mode Kompatibilitas. Ini akan menonaktifkan beberapa fitur PowerPoint 2016, termasuk tipe transisi slide yang lebih baru.</li>
                <li>Modus kompatibilitas</li>
                <img src="https://media.gcflearnfree.org/content/56d45cf96aa91509c874341e_02_29_2016/create_compatibility_intro.png" alt="Modus kompatibilitas">
                <li>Untuk keluar dari Mode Kompatibilitas, Anda harus mengonversi presentasi ke tipe versi saat ini. Namun, jika Anda berkolaborasi dengan orang lain yang hanya memiliki akses ke versi PowerPoint yang lebih lama, sebaiknya biarkan presentasi dalam Mode Kompatibilitas agar formatnya tidak berubah.</li>
                <li>Anda dapat meninjau halaman dukungan ini dari Microsoft untuk mempelajari selengkapnya tentang fitur mana yang dinonaktifkan dalam Mode Kompatibilitas.</li>
            </ul>
        
            <h2>Untuk mengonversi presentasi:</h2>
            <p>Jika Anda ingin mengakses semua fitur PowerPoint 2016, Anda dapat mengonversi presentasi ke format file 2016.</p>
            <ul>
                <li>Perhatikan bahwa mengonversi file dapat menyebabkan beberapa perubahan pada tata letak asli presentasi.</li>
                <li>Klik tab <strong>File</strong> untuk mengakses tampilan Backstage.</li>
                <li>Mengklik tab File</li>
                <img src="https://media.gcflearnfree.org/content/56d45cf96aa91509c874341e_02_29_2016/create_compatibility_ribbon.png" alt="Mengklik tab File">
                <li>Cari dan pilih perintah <strong>Konversi</strong>.</li>
                <li>Mengonversi presentasi ke jenis file terbaru</li>
                <img src="https://media.gcflearnfree.org/content/56d45cf96aa91509c874341e_02_29_2016/create_compatibility_info_pane.png" alt="Mengonversi presentasi ke jenis file terbaru">
                <li>Kotak dialog Simpan Sebagai akan muncul. Pilih lokasi di mana Anda ingin menyimpan presentasi, masukkan nama file, dan klik <strong>Simpan</strong>.</li>
                <li>Menyimpan versi baru buku kerja</li>
                <img src="https://media.gcflearnfree.org/content/56d45cf96aa91509c874341e_02_29_2016/create_compatibility_save_dialog.png" alt="Menyimpan versi baru buku kerja">
                <li>Presentasi akan dikonversi ke jenis file terbaru.</li>
            </ul>
        
            <h2>Tantangan!</h2>
            <ul>
                <li><a href="https://media.gcflearnfree.org/content/56d45cf96aa91509c874341e_02_29_2016/powerpoint2016_creatingopening_practice.ppt" download>Buka presentasi latihan kami.</a></li>
                <li>Perhatikan bahwa presentasi terbuka dalam Mode Kompatibilitas. Konversikan ke format file 2016. Jika muncul kotak dialog yang menanyakan apakah Anda ingin menutup dan membuka kembali file untuk melihat fitur baru, pilih Ya.</li>
                <li>Dalam tampilan Backstage, sematkan file atau folder.</li>
            </ul>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Menyimpan Presentasi',
            'course_id' => '43',
            'desc' => '    <h1>Menyimpan dan Berbagi Presentasi PowerPoint</h1>
            <p>Setiap kali Anda membuat presentasi baru di PowerPoint, Anda harus mengetahui cara menyimpannya agar dapat mengakses dan mengeditnya nanti. Seperti PowerPoint versi sebelumnya, Anda dapat menyimpan file ke komputer Anda. Jika mau, Anda juga dapat menyimpan file ke cloud menggunakan OneDrive. Anda bahkan dapat mengekspor dan berbagi presentasi langsung dari PowerPoint.</p>
            
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang menyimpan dan berbagi presentasi PowerPoint.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/6904g24ElmM?rel=0&amp;showinfo=0" allowfullscreen frameborder="0">&amp;amp;amp;lt;span id="selection-marker-1" class="redactor-selection-marker"&amp;amp;amp;gt;&amp;amp;amp;lt;/span&amp;amp;amp;gt;</iframe></div>
            <h2>Simpan dan Simpan Sebagai</h2>
            <p>PowerPoint menawarkan dua cara untuk menyimpan file: Simpan dan Simpan Sebagai. Opsi-opsi ini bekerja dengan cara yang serupa, dengan beberapa perbedaan penting.</p>
            <ul>
                <li><strong>Simpan</strong>: Saat Anda membuat atau mengedit presentasi, Anda akan menggunakan perintah Simpan untuk menyimpan perubahan Anda. Anda akan menggunakan perintah ini hampir sepanjang waktu. Saat Anda menyimpan file, Anda hanya perlu memilih nama file dan lokasinya untuk pertama kalinya. Setelah itu, Anda tinggal klik perintah Simpan untuk menyimpannya dengan nama dan lokasi yang sama.</li>
                <li><strong>Save As</strong>: Anda akan menggunakan perintah ini untuk membuat salinan presentasi sambil tetap menyimpan aslinya. Saat Anda menggunakan Simpan Sebagai, Anda harus memilih nama dan/atau lokasi berbeda untuk versi yang disalin.</li>
            </ul>
        
            <h2>Tentang OneDrive</h2>
            <p>Sebagian besar fitur di Microsoft Office, termasuk PowerPoint, ditujukan untuk menyimpan dan berbagi dokumen secara online. Hal ini dilakukan dengan OneDrive, yang merupakan ruang penyimpanan online untuk dokumen dan file Anda. Jika Anda ingin menggunakan OneDrive, pastikan Anda masuk ke PowerPoint dengan akun Microsoft Anda. Tinjau pelajaran kami tentang Memahami OneDrive untuk mempelajari lebih lanjut.</p>
        
            <h2>Untuk menyimpan presentasi:</h2>
            <p>Penting untuk menyimpan presentasi Anda setiap kali Anda memulai proyek baru atau membuat perubahan pada proyek yang sudah ada. Menabung sejak dini dan sering dapat mencegah pekerjaan Anda hilang. Anda juga harus memperhatikan dengan cermat di mana Anda menyimpan presentasi agar mudah ditemukan nanti.</p>
            <ul>
                <li>Cari dan pilih perintah <strong>Simpan</strong> di Quick Access Toolbar.</li>
                <li>Mengklik perintah Simpan</li>
                <img src="https://media.gcflearnfree.org/content/56d5a87d6aa91509c8743420_03_01_2016/saving_save_ribbon.png" alt="Mengklik perintah Simpan">
                <li>Jika Anda menyimpan file untuk pertama kalinya, panel Simpan Sebagai akan muncul dalam tampilan Backstage.</li>
                <li>Anda kemudian harus memilih tempat menyimpan file dan memberinya nama file. Klik <strong>Telusuri</strong> untuk memilih lokasi di komputer Anda. Alternatifnya, Anda bisa mengklik <strong>OneDrive</strong> untuk menyimpan file ke OneDrive Anda.</li>
                <li>Mengklik Telusuri</li>
                <img src="https://media.gcflearnfree.org/content/56d5a87d6aa91509c8743420_03_01_2016/saving_save_browse.png" alt="Mengklik Telusuri">
                <li>Kotak dialog Simpan Sebagai akan muncul. Pilih lokasi di mana Anda ingin menyimpan presentasi.</li>
                <li>Masukkan nama file untuk presentasi, lalu klik <strong>Simpan</strong>.</li>
                <li>Menyimpan presentasi</li>
                <img src="https://media.gcflearnfree.org/content/56d5a87d6aa91509c8743420_03_01_2016/saving_save_dialog.png" alt="Menyimpan presentasi">
                <li>Presentasi akan disimpan. Anda dapat mengklik perintah Simpan lagi untuk menyimpan perubahan saat Anda memodifikasi presentasi.</li>
                <li>Anda juga dapat mengakses perintah Simpan dengan menekan Ctrl+S pada keyboard Anda.</li>
            </ul>
        
            <h2>Menggunakan Save As untuk membuat salinan</h2>
            <p>Jika Anda ingin menyimpan versi presentasi yang berbeda namun tetap mempertahankan versi aslinya, Anda dapat membuat salinannya. Misalnya, jika Anda memiliki file bernama Presentasi Klien, Anda dapat menyimpannya sebagai Presentasi Klien 2 sehingga Anda dapat mengedit file baru dan tetap merujuk kembali ke versi aslinya.</p>
            <ul>
                <li>Untuk melakukan ini, Anda akan mengklik perintah <strong>Save As</strong> dalam tampilan Backstage. Sama seperti saat menyimpan file untuk pertama kalinya, Anda harus memilih tempat menyimpan file dan memberinya nama file baru.</li>
                <li>Mengklik Simpan Sebagai</li>
                <img src="https://media.gcflearnfree.org/content/56d5a87d6aa91509c8743420_03_01_2016/saving_save_as.png" alt="Mengklik Simpan Sebagai">
            </ul>
        
            <h2>Untuk mengubah lokasi penyimpanan default:</h2>
            <p>Jika Anda tidak ingin menggunakan OneDrive, Anda mungkin merasa frustrasi karena OneDrive dipilih sebagai lokasi default saat menyimpan. Jika Anda merasa ini tidak nyaman, Anda dapat mengubah lokasi penyimpanan default sehingga PC ini dipilih secara default.</p>
            <ul>
                <li>Klik tab <strong>File</strong> untuk mengakses tampilan Backstage.</li>
                <li>Mengklik tab File</li>
                <img src="https://media.gcflearnfree.org/content/56d5a87d6aa91509c8743420_03_01_2016/saving_default_ribbon.png" alt="Mengklik tab File">
                <li>Klik <strong>Opsi</strong>.</li>
                <li>Mengklik Opsi</li>
                <img src="https://media.gcflearnfree.org/content/56d5a87d6aa91509c8743420_03_01_2016/saving_default_options.png" alt="Mengklik Opsi">
                <li>Kotak dialog Opsi PowerPoint akan muncul. Pilih <strong>Simpan</strong>, centang kotak di samping <strong>Simpan ke Komputer secara default</strong>, lalu klik <strong>OK</strong>. Lokasi penyimpanan default akan diubah.</li>
                <li>Mengubah lokasi penyimpanan default</li>
                <img src="https://media.gcflearnfree.org/content/56d5a87d6aa91509c8743420_03_01_2016/saving_default_dialog.png" alt="Mengubah lokasi penyimpanan default">
            </ul>
        
            <h2>Menggunakan Pemulihan Otomatis</h2>
            <p>PowerPoint secara otomatis menyimpan presentasi Anda ke folder sementara saat Anda mengerjakannya. Jika Anda lupa menyimpan perubahan atau jika PowerPoint mogok, Anda dapat memulihkan file menggunakan AutoRecover.</p>
            <ul>
                <li>Buka PowerPoint. Jika versi file yang disimpan secara otomatis ditemukan, panel Pemulihan Dokumen akan muncul.</li>
                <li>Klik untuk membuka file yang tersedia. Presentasi akan dipulihkan.</li>
                <li>Panel Pemulihan Dokumen</li>
                <img src="https://media.gcflearnfree.org/content/56d5a87d6aa91509c8743420_03_01_2016/saving_autorecover_pane.png" alt="Panel Pemulihan Dokumen">
                <li>Secara default, PowerPoint disimpan secara otomatis setiap 10 menit. Jika Anda mengedit presentasi kurang dari 10 menit, PowerPoint mungkin tidak membuat versi yang disimpan otomatis.</li>
                <li>Jika Anda tidak melihat file yang diperlukan, Anda dapat menelusuri semua file yang disimpan otomatis dari tampilan Backstage. Cukup pilih tab <strong>File</strong>, klik <strong>Kelola Presentasi</strong>, lalu pilih <strong>Pulihkan Presentasi yang Belum Disimpan</strong>.</li>
                <li>Memulihkan file yang belum disimpan</li>
                <img src="https://media.gcflearnfree.org/content/56d5a87d6aa91509c8743420_03_01_2016/saving_autorecover_manage.png" alt="Memulihkan file yang belum disimpan">
            </ul>
        
            <h2>Mengekspor presentasi</h2>
            <p>Secara default, presentasi PowerPoint disimpan dalam jenis file .pptx. Namun, mungkin ada saatnya Anda perlu menggunakan jenis file lain, seperti presentasi PDF atau PowerPoint 97-2003. Sangat mudah untuk mengekspor presentasi Anda dari PowerPoint dalam berbagai jenis file.</p>
            <ul>
                <li><strong>PDF</strong>: Menyimpan presentasi sebagai dokumen PDF, bukan file PowerPoint</li>
                <li><strong>Video</strong>: Menyimpan presentasi sebagai video</li>
                <li><strong>Paket untuk CD</strong>: Menyimpan presentasi dalam folder bersama dengan Microsoft PowerPoint Viewer, pemutar tayangan slide khusus yang dapat diunduh siapa saja</li>
                <li><strong>Handout</strong>: Mencetak versi handout slide Anda</li>
                <li><strong>Tipe file lainnya</strong>: Menyimpan dalam tipe file lain, termasuk PNG dan PowerPoint 97-2003</li>
            </ul>
        
            <h2>Untuk mengekspor presentasi:</h2>
            <p>Dalam contoh kita, kita akan menyimpan presentasi sebagai file PowerPoint 97-2003.</p>
            <ul>
                <li>Klik tab <strong>File</strong> untuk mengakses tampilan Backstage.</li>
                <li>Klik <strong>Ekspor</strong>, lalu pilih opsi yang diinginkan. Dalam contoh kita, kita akan memilih <strong>Ubah Jenis File</strong>.</li>
                <li>Mengklik Ubah Jenis File</li>
                <img src="https://media.gcflearnfree.org/content/56d5a87d6aa91509c8743420_03_01_2016/saving_export_file_type.png" alt="Mengklik Ubah Jenis File">
                <li>Pilih jenis file, lalu klik <strong>Simpan Sebagai</strong>.</li>
                <li>Memilih jenis file dan mengklik Simpan Sebagai</li>
                <img src="https://media.gcflearnfree.org/content/56d5a87d6aa91509c8743420_03_01_2016/saving_export_save_as.png" alt="Memilih jenis file dan mengklik Simpan Sebagai">
                <li>Kotak dialog Simpan Sebagai akan muncul. Pilih lokasi di mana Anda ingin mengekspor presentasi, ketikkan nama file, lalu klik <strong>Simpan</strong>.</li>
                <li>Menyimpan sebagai presentasi PowerPoint 97-2003</li>
                <img src="https://media.gcflearnfree.org/content/56d5a87d6aa91509c8743420_03_01_2016/saving_export_dialog.png" alt="Menyimpan sebagai presentasi PowerPoint 97-2003">
                <li>Anda juga dapat menggunakan menu tarik-turun Simpan sebagai tipe di kotak dialog Simpan Sebagai untuk menyimpan presentasi dalam berbagai jenis file. Berhati-hatilah dalam memilih jenis file yang dapat dibuka orang lain.</li>
                <li>Memilih jenis file dari kotak dialog Simpan Sebagai</li>
                <img src="https://media.gcflearnfree.org/content/56d5a87d6aa91509c8743420_03_01_2016/saving_export_type.png" alt="Memilih jenis file dari kotak dialog Simpan Sebagai">
            </ul>
        
            <h2>Berbagi presentasi</h2>
            <p>PowerPoint memudahkan berbagi dan berkolaborasi dalam presentasi menggunakan OneDrive. Dulu, jika Anda ingin berbagi file dengan seseorang, Anda dapat mengirimkannya sebagai lampiran email. Meskipun nyaman, sistem ini juga membuat beberapa versi dari file yang sama, yang mungkin sulit untuk diatur.</p>
            <p>Saat Anda berbagi presentasi dari PowerPoint, Anda sebenarnya memberi orang lain akses ke file yang sama persis. Ini memungkinkan Anda dan orang yang Anda ajak berbagi mengedit presentasi yang sama tanpa harus melacak beberapa versi.</p>
            <p>Untuk membagikan presentasi, presentasi harus disimpan terlebih dahulu ke OneDrive Anda.</p>
        
            <h2>Untuk berbagi presentasi:</h2>
            <ul>
                <li>Klik tab <strong>File</strong> untuk mengakses tampilan Backstage, lalu klik <strong>Bagikan</strong>.</li>
                <li>Mengklik Bagikan</li>
                <img src="https://media.gcflearnfree.org/content/56d5a87d6aa91509c8743420_03_01_2016/saving_share_backstage.png" alt="Mengklik Bagikan">
                <li>Panel Bagikan akan muncul.</li>
                <img src="https://media.gcflearnfree.org/content/56d5a87d6aa91509c8743420_03_01_2016/saving_share_interactive.png" alt="Mengklik Bagikan">
            </ul>
        
            <h2>Tantangan!</h2>
            <ul>
                <li><a href="https://media.gcflearnfree.org/content/56d5a87d6aa91509c8743420_03_01_2016/powerpoint2016_saving_practice.pptx" download>Buka presentasi latihan kami.</a></li>
                <li>Gunakan <strong>Simpan Sebagai</strong> untuk membuat salinan presentasi. Beri nama salinan baru <em>Saving Challenge Practice</em>. Anda bisa menyimpannya ke folder di komputer Anda atau ke OneDrive Anda.</li>
                <li>Ekspor presentasi sebagai file PDF.</li>
            </ul>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Dasar-dasar Slide',
            'course_id' => '44',
            'desc' => '   <h1>Dasar-dasar Bekerja dengan Slide di PowerPoint</h1>
            <p>Setiap presentasi PowerPoint terdiri dari serangkaian slide. Untuk mulai membuat peragaan slide, Anda harus mengetahui dasar-dasar bekerja dengan slide. Anda harus merasa nyaman dengan tugas-tugas seperti menyisipkan slide baru, mengubah tata letak slide, mengatur slide yang ada, mengubah tampilan slide, dan menambahkan catatan ke slide.</p>
            <p>Opsional: Unduh <a href="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/powerpoint2016_slidebasics_practice.pptx">presentasi latihan kami</a>.</p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang dasar-dasar slide di PowerPoint.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/TZfcVbKJs1E?rel=0&amp;showinfo=0" allowfullscreen frameborder="0">&amp;amp;amp;lt;span id="selection-marker-1" class="redactor-selection-marker"&amp;amp;amp;gt;&amp;amp;amp;lt;/span&amp;amp;amp;gt;</iframe></div>
            <h2>Memahami Slide dan Tata Letak Slide</h2>
            <p>Saat Anda menyisipkan slide baru, biasanya slide tersebut memiliki placeholder untuk menunjukkan di mana konten akan ditempatkan. Slide memiliki tata letak placeholder yang berbeda, bergantung pada jenis informasi yang ingin Anda sertakan. Setiap kali Anda membuat slide baru, Anda harus memilih tata letak slide yang sesuai dengan konten Anda.</p>
            <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_understanding_layouts.png" alt="Mengklik bagian bawah perintah Slide Baru">    
            <h3>Tata Letak Slide yang Berbeda</h3>
            <p>Placeholder dapat berisi berbagai jenis konten, termasuk teks, gambar, dan video. Banyak placeholder memiliki ikon thumbnail yang dapat Anda klik untuk menambahkan tipe konten tertentu. Pada contoh di bawah, slide memiliki placeholder untuk judul dan konten.</p>
            <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_understanding_slides2.png" alt="Slide dengan placeholder kosong">
        
            <h3>Untuk Menyisipkan Slide Baru:</h3>
            <p>Setiap kali Anda memulai presentasi baru, presentasi tersebut akan berisi satu slide dengan tata letak Judul Slide. Anda dapat menyisipkan slide sebanyak yang Anda perlukan dari berbagai tata letak.</p>
            <ol>
                <li>Dari tab <strong>Beranda</strong>, klik bagian bawah perintah <strong>Slide Baru</strong>.</li>
                <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_insert_bottom.png" alt="Mengklik bagian bawah perintah Slide Baru">
                <li>Pilih tata letak slide yang diinginkan dari menu yang muncul.</li>
                <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_insert_layout.png" alt="Memilih tata letak slide">
                <li>Slide baru akan muncul. Klik placeholder mana pun dan mulailah mengetik untuk menambahkan teks. Anda juga dapat mengklik ikon untuk menambahkan tipe konten lain, seperti gambar atau bagan.</li>
                <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_insert_result.png" alt="Slide baru">
                </ol>
            <h3>Untuk Mengubah Tata Letak Slide yang Ada:</h3>
            <p>Klik perintah <strong>Layout</strong>, lalu pilih tata letak yang diinginkan.</p>
            <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_insert_change.png" alt="Menerapkan tata letak baru ke slide yang ada">
            
            <h3>Mengatur Slide</h3>
            <p>Presentasi PowerPoint dapat berisi slide sebanyak yang Anda perlukan. Panel Navigasi Slide di sisi kiri layar memudahkan pengorganisasian slide Anda. Dari sana, Anda dapat menduplikasi, mengatur ulang, dan menghapus slide dalam presentasi Anda.</p>
            <img src="panel-navigasi-slide.png" alt="Panel Navigasi Slide">
        
            <h4>Bekerja dengan Slide</h4>
            <ul>
                <li><strong>Duplikat Slide</strong>: Jika Anda ingin menyalin dan menempelkan slide dengan cepat, Anda dapat menduplikasinya. Untuk menduplikasi slide, pilih slide yang ingin Anda duplikat, klik kanan mouse, dan pilih <strong>Duplikat Slide</strong> dari menu yang muncul. Anda juga dapat menduplikasi beberapa slide sekaligus dengan memilihnya terlebih dahulu.</li>
                <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_organizing_duplicate.jpg" alt="Menggandakan slide">
                <li><strong>Memindahkan Slide</strong>: Sangat mudah untuk mengubah urutan slide Anda. Cukup klik dan seret slide yang diinginkan di panel Navigasi Slide ke posisi yang diinginkan.</li>
                <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_organizing_move.jpg" alt="Memindahkan slide">
                <li><strong>Hapus Slide</strong>: Jika Anda ingin menghapus slide dari presentasi Anda, Anda bisa menghapusnya. Cukup pilih slide yang ingin Anda hapus, lalu tekan tombol <strong>Delete</strong> atau <strong>Backspace</strong> pada keyboard Anda.</li>
            </ul>        
            <h4>Untuk Menyalin dan Menempelkan Slide:</h4>
            <ol>
                <li>Pilih slide yang ingin Anda salin di panel Navigasi Slide, lalu klik perintah <strong>Salin</strong> pada tab <strong>Beranda</strong>. Alternatifnya, Anda dapat menekan <strong>Ctrl+C</strong> pada keyboard Anda.</li>
                <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_organizing_copy.jpg" alt="Memilih slide dan mengklik perintah Salin">
                <li>Di panel Navigasi Slide, klik tepat di bawah slide (atau di antara dua slide) untuk memilih lokasi tempel. Titik penyisipan horizontal akan muncul.</li>
                <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_organizing_location.jpg" alt="Memilih lokasi tempel">
                <li>Klik perintah <strong>Tempel</strong> pada tab <strong>Beranda</strong>. Alternatifnya, Anda dapat menekan <strong>Ctrl+V</strong> pada keyboard Anda.</li>
                <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_organizing_paste.jpg" alt="Mengklik perintah Tempel">
            </ol>
        
            <h3>Menyesuaikan Tata Letak Slide</h3>
            <p>Terkadang Anda mungkin menemukan bahwa tata letak slide tidak sesuai dengan kebutuhan Anda. Misalnya, tata letak mungkin memiliki terlalu banyak—atau terlalu sedikit—placeholder. Anda mungkin juga ingin mengubah cara placeholder disusun pada slide. Untungnya, PowerPoint memudahkan penyesuaian tata letak slide sesuai kebutuhan.</p>
        
            <h4>Menyesuaikan Placeholder</h4>
            <ul>
                <li><strong>Untuk Memilih Placeholder</strong>: Arahkan mouse ke tepi placeholder dan klik (Anda mungkin perlu mengklik teks di placeholder terlebih dahulu untuk melihat batasnya). Placeholder yang dipilih akan memiliki garis padat, bukan garis putus-putus.</li>
                <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_placeholders_select.png" alt="Memilih placeholder">
                <li><strong>Untuk Memindahkan Placeholder</strong>: Pilih placeholder, lalu klik dan seret ke lokasi yang diinginkan.</li>
                <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_placeholders_move.png" alt="Memindahkan placeholder">
                <li><strong>Untuk Mengubah Ukuran Placeholder</strong>: Pilih placeholder yang ingin Anda ubah ukurannya. Pegangan pengatur ukuran akan muncul. Klik dan seret gagang pengatur ukuran hingga placeholder sesuai ukuran yang diinginkan. Anda dapat menggunakan pengendali ukuran sudut untuk mengubah tinggi dan lebar placeholder secara bersamaan.</li>
                <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_placeholders_resize.png" alt="Mengubah ukuran placeholder">
                <li><strong>Untuk Menghapus Placeholder</strong>: Pilih placeholder yang ingin Anda hapus, lalu tekan tombol <strong>Delete</strong> atau <strong>Backspace</strong> pada keyboard Anda.</li>
            </ul>
        
            <h4>Untuk Menambahkan Kotak Teks:</h4>
            <p>Teks dapat disisipkan ke dalam placeholder dan kotak teks. Memasukkan kotak teks memungkinkan Anda menambahkan tata letak slide. Tidak seperti placeholder, kotak teks selalu berada di tempat yang sama, meskipun Anda mengubah tema.</p>
            <ol>
                <li>Dari tab <strong>Sisipkan</strong>, pilih perintah <strong>Kotak Teks</strong>.</li>
                <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_box_ribbon.png" alt="Mengklik perintah Kotak Teks">
                <li>Klik dan seret untuk menggambar kotak teks pada slide.</li>
                <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_box_drag.png" alt="Menggambar kotak teks">
                <li>Kotak teks akan muncul. Untuk menambahkan teks, cukup klik kotak teks dan mulailah mengetik.</li>
                <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_box_result.png" alt="Kotak teks baru">
            </ol>

            <h4>Menggunakan Slide Kosong</h4>
            <p>Jika Anda ingin kontrol lebih besar atas konten Anda, Anda mungkin lebih suka menggunakan slide kosong, yang tidak berisi placeholder. Slide kosong dapat dikustomisasi dengan menambahkan kotak teks, gambar, bagan, dan lainnya milik Anda sendiri.</p>
            <ol>
                <li>Untuk menyisipkan slide kosong, klik bagian bawah perintah <strong>New Slide</strong>, lalu pilih <strong>Blank</strong> dari menu yang muncul.</li>
            </ol>
            <img src=" <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_blank_slide2.png" alt="Mengklik perintah Mulai Dari Awal">" alt="Memasukkan slide kosong">
            <p>Meskipun slide kosong menawarkan lebih banyak fleksibilitas, perlu diingat bahwa Anda tidak akan dapat memanfaatkan tata letak yang telah dirancang sebelumnya yang disertakan dalam setiap tema.</p>
        
            <h3>Untuk Memutar Presentasi:</h3>
            <ol>
                <li>Klik perintah <strong>Mulai Dari Awal</strong> pada Quick Access Toolbar untuk melihat presentasi Anda.</li>
                <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_start_beginning2.png" alt="Memilih ukuran slide">
                <li>Presentasi akan muncul dalam mode layar penuh.</li>
                <li>Anda dapat melanjutkan ke slide berikutnya dengan mengklik mouse atau menekan spasi pada keyboard Anda. Alternatifnya, Anda dapat menggunakan tombol panah pada keyboard Anda untuk bergerak maju atau mundur dalam presentasi.</li>
                <li>Tekan tombol <strong>Esc</strong> untuk keluar dari mode presentasi.</li>
                <li>Anda juga dapat menekan tombol <strong>F5</strong> di bagian atas keyboard Anda untuk memulai presentasi.</li>
            </ol>
           
        
            <h3>Menyesuaikan Slide</h3>
            <h4>Untuk Mengubah Ukuran Slide:</h4>
            <p>Secara default, semua slide di PowerPoint 2013 menggunakan rasio aspek 16:9—atau layar lebar. Slide layar lebar akan berfungsi paling baik dengan monitor dan proyektor layar lebar. Namun, jika Anda ingin presentasi Anda sesuai dengan layar 4:3, Anda dapat dengan mudah mengubah ukuran slide agar sesuai.</p>
            <ol>
                <li>Untuk mengubah ukuran slide, pilih tab <strong>Design</strong>, lalu klik perintah <strong>Slide Size</strong>. Pilih ukuran slide yang diinginkan dari menu yang muncul, atau klik <strong>Ukuran Slide Khusus</strong> untuk opsi lainnya.</li>
            </ol>
            <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_slide_size.png" alt="Memilih ukuran slide">
        
            <h4>Untuk Memformat Latar Belakang Slide:</h4>
            <p>Secara default, semua slide dalam presentasi Anda menggunakan latar belakang putih. Sangat mudah untuk mengubah gaya latar belakang untuk beberapa atau seluruh slide Anda. Latar belakang dapat memiliki isi padat, gradien, pola, atau gambar.</p>
            <ol>
                <li>Pilih tab <strong>Design</strong>, lalu klik perintah <strong>Format Background</strong>.</li>
                <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_background_ribbon.png" alt="Mengklik perintah Format Latar Belakang">
                <li>Panel Format Latar Belakang akan muncul di sebelah kanan. Pilih opsi pengisian yang diinginkan. Dalam contoh kita, kita akan menggunakan <strong>Solid fill</strong> dengan warna emas terang.</li>
                <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_background_pane.png" alt="Memilih opsi pengisian latar belakang">
                <li>Gaya latar belakang slide yang dipilih akan diperbarui.</li>
                <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_background_result.jpg" alt="Mengklik Terapkan ke Semua">
                <li>Jika mau, Anda bisa mengklik <strong>Terapkan ke Semua</strong> untuk menerapkan gaya latar belakang yang sama ke semua slide dalam presentasi Anda.</li>
            </ol>
            <h4>Untuk Menerapkan Tema:</h4>
            <p>Tema adalah kombinasi warna, font, dan efek yang telah ditentukan sebelumnya yang dapat dengan cepat mengubah tampilan dan nuansa keseluruhan peragaan slide Anda. Tema yang berbeda juga menggunakan tata letak slide yang berbeda, yang dapat mengubah susunan placeholder yang ada.</p>
            <ol>
                <li>Pilih tab <strong>Design</strong> di Ribbon, lalu klik panah tarik-turun <strong>Lainnya</strong> untuk melihat semua tema yang tersedia.</li>
                <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_theme_ribbon.png" alt="Mengklik panah tarik-turun Lainnya">
                <li>Pilih tema yang diinginkan.</li>
                <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_theme_menu.png" alt="Memilih tema">
                <li>Tema akan diterapkan ke seluruh presentasi Anda.</li>
                <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/slide_basics_theme_result.jpg" alt="Tema yang diterapkan">
            </ol>
            <p>Coba terapkan beberapa tema berbeda pada presentasi Anda. Beberapa tema akan berfungsi lebih baik daripada yang lain, bergantung pada konten Anda.</p>
        
            <h3>Tantangan!</h3>
            <ul>
                <li>Buka <a href="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/powerpoint2016_slidebasics_practice.pptx">presentasi latihan kami</a>.</li>
                <li>Ubah tema presentasi.</li>
                <li>Hapus slide 7. Slide ini seharusnya kosong.</li>
                <li>Tambahkan slide baru dengan tata letak Judul dan Konten di akhir presentasi.</li>
                <li>Di placeholder Judul, ketik <em>Tanggal Acara Adopsi</em>.</li>
                <li>Pilih placeholder Konten dan hapus.</li>
                <li>Sisipkan kotak teks dan ketik <em>17 Juli 2017</em>, di dalamnya.</li>
                <li>Ubah ukuran slide menjadi Standar (4:3). Kotak dialog akan muncul menanyakan apakah Anda ingin memaksimalkan atau memastikan kecocokan. Pilih <strong>Pastikan Pas</strong>.</li>
            </ul>
            <p>Ketika Anda selesai, presentasi Anda akan terlihat seperti ini:</p>
            <img src="https://media.gcflearnfree.org/content/56cdcb2d6aa91513bce2d7c3_02_24_2016/screen%20shot%202016-03-07%20at%202.38.29%20pm.png" alt="Hasil tantangan">'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Dasar-Dasar Teks',
            'course_id' => '45',
            'desc' => '    <h1>Dasar-dasar Bekerja dengan Teks di PowerPoint</h1>
            <p>Jika Anda baru mengenal PowerPoint, Anda harus mempelajari dasar-dasar bekerja dengan teks. Dalam pelajaran ini, Anda akan mempelajari cara memotong, menyalin, menempel, dan memformat teks.</p>
            <p>Opsional: Unduh <a href="https://media.gcflearnfree.org/content/56def3266aa9151abc73207f_03_08_2016/powerpoint2016_textbasics_practice.pptx">presentasi latihan kami</a>.</p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang dasar-dasar bekerja dengan teks di PowerPoint.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/F9RL0Lk5cmw?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe><br></div>
            <h2>Untuk Memilih Teks:</h2>
            <p>Sebelum Anda dapat memindahkan atau menyusun teks, Anda harus memilihnya.</p>
            <p>Klik di samping teks yang ingin Anda pilih, seret mouse ke atas teks, lalu lepaskan mouse Anda. Teksnya akan menjadi terpilih.</p>
            <img src="https://media.gcflearnfree.org/content/56def3266aa9151abc73207f_03_08_2016/text_select.png" alt="Memilih teks dan mengklik perintah Salin">
            <h2>Menyalin dan Memindahkan Teks</h2>
            <p>PowerPoint memungkinkan Anda menyalin teks yang sudah ada di slide dan menempelkannya di tempat lain, sehingga dapat menghemat waktu Anda. Jika Anda ingin memindahkan teks, Anda dapat memotong dan menempelkan atau menarik dan melepas teks tersebut.</p>
        
            <h3>Untuk Menyalin dan Menempelkan Teks:</h3>
            <ol>
                <li>Pilih teks yang ingin Anda salin, lalu klik perintah <strong>Salin</strong> pada tab <strong>Beranda</strong>.</li>
                <img src="https://media.gcflearnfree.org/content/56def3266aa9151abc73207f_03_08_2016/text_copy_command.png" alt="Memilih teks dan mengklik perintah Salin">
                <li>Tempatkan titik penyisipan di mana Anda ingin teks muncul.</li>
                <li>Klik perintah <strong>Tempel</strong> pada tab <strong>Beranda</strong>.</li>
                <img src="https://media.gcflearnfree.org/content/56def3266aa9151abc73207f_03_08_2016/text_paste_command.png" alt="Mengklik perintah Tempel">
                <li>Teks yang disalin akan muncul.</li>
            </ol>
        
            <h3>Untuk Memotong dan Menempelkan Teks:</h3>
            <ol>
                <li>Pilih teks yang ingin dipindahkan, lalu klik perintah <strong>Potong</strong>.</li>
                <img src="https://media.gcflearnfree.org/content/56def3266aa9151abc73207f_03_08_2016/text_cut_command.png" alt="Memilih teks dan mengklik perintah Potong">
                <li>Tempatkan titik penyisipan di tempat yang Anda inginkan untuk menampilkan teks, lalu klik perintah <strong>Tempel</strong>.</li>
                <img src="https://media.gcflearnfree.org/content/56def3266aa9151abc73207f_03_08_2016/text_paste_command.png" alt="Menempatkan titik penyisipan">
                <li>Teks akan muncul di lokasi baru.</li>
            </ol>
            <p>Anda dapat mengakses perintah potong, salin, dan tempel dengan menggunakan pintasan keyboard. Tekan <strong>Ctrl+X</strong> untuk memotong, <strong>Ctrl+C</strong> untuk menyalin, dan <strong>Ctrl+V</strong> untuk menempel.</p>
        
            <h3>Untuk Menarik dan Melepas Teks:</h3>
            <ol>
                <li>Pilih teks yang ingin Anda pindahkan, lalu klik dan seret teks tersebut ke lokasi yang diinginkan.</li>
                <img src="https://media.gcflearnfree.org/content/56def3266aa9151abc73207f_03_08_2016/text_drag_drop_before.png" alt="Memilih teks dan menyeretnya">
                <li>Teks akan muncul di lokasi baru.</li>
                <img src="https://media.gcflearnfree.org/content/56def3266aa9151abc73207f_03_08_2016/text_drag_drop_after.png" alt="Teks muncul di lokasi baru">
            </ol>
        
            <h2>Memformat dan Menyelaraskan Teks</h2>
            <p>Teks yang diformat dapat menarik perhatian audiens ke bagian tertentu dari presentasi dan menekankan informasi penting. Di PowerPoint, Anda memiliki beberapa opsi untuk menyesuaikan teks, termasuk ukuran dan warna. Anda juga dapat menyesuaikan perataan teks untuk mengubah tampilannya pada slide.</p>
            <p>Klik tombol interaktif di bawah ini untuk mempelajari tentang berbagai perintah di grup Font dan Paragraf.</p>
            <img src="https://media.gcflearnfree.org/content/56def3266aa9151abc73207f_03_08_2016/text_lg.jpg" alt="Buka presentasi latihan">
            <h2>Tantangan!</h2>
            <ol>
                <li>Buka <a href="https://media.gcflearnfree.org/content/56def3266aa9151abc73207f_03_08_2016/powerpoint2016_textbasics_practice.pptx">presentasi latihan kami</a>.</li>
                <li>Pilih geser 4.</li>
                <li>Gunakan potong dan tempel atau seret dan lepas untuk memindahkan teks <em>Menurunkan tekanan darah</em> antara <em>Peluang Persahabatan</em> dan <em>Sosial</em>.</li>
                <li>Pilih daftar manfaat dan tambahkan huruf miring.</li>
                <li>Pilih teks <em>Tahukah Anda?</em>, hapus huruf tebal, dan ubah ukurannya menjadi 36pt.</li>
            </ol>
            <p>Setelah selesai, slide Anda akan terlihat seperti ini:</p>
            <img src="https://media.gcflearnfree.org/content/56def3266aa9151abc73207f_03_08_2016/text_basics_edited_2.jpg" alt="Hasil tantangan">'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Menerapkan Tema',
            'course_id' => '46',
            'desc' => '<h1>Menerapkan Tema di PowerPoint</h1>
            <p>Tema adalah kombinasi warna, font, dan efek yang telah ditentukan sebelumnya. Tema yang berbeda juga menggunakan tata letak slide yang berbeda. Anda telah menggunakan sebuah tema, meskipun Anda tidak mengetahuinya: tema Office default. Anda dapat memilih dari berbagai tema baru kapan saja, sehingga seluruh presentasi Anda terlihat konsisten dan profesional.</p>
            <p>Opsional: Unduh <a href="https://media.gcflearnfree.org/content/56def3cc6aa9151abc732080_03_08_2016/powerpoint2016_themes_practice.pptx">presentasi latihan kami</a>.</p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang menerapkan tema di PowerPoint.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/_gYShFl6i94?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Apa itu Tema?</h2>
            <p>Di PowerPoint, tema memberi Anda cara cepat dan mudah untuk mengubah desain presentasi Anda. Mereka mengontrol palet warna utama, font dasar, tata letak slide, dan elemen penting lainnya. Semua elemen tema akan bekerja sama dengan baik, yang berarti Anda tidak perlu menghabiskan banyak waktu untuk memformat presentasi Anda.</p>
            <p>Setiap tema menggunakan kumpulan tata letak slidenya sendiri. Tata letak ini mengontrol cara konten Anda disusun, sehingga efeknya bisa dramatis. Pada contoh di bawah, Anda dapat melihat bahwa placeholder, font, dan warna berbeda.</p>
            <img src="https://media.gcflearnfree.org/content/56def3cc6aa9151abc732080_03_08_2016/themes_layout_comparison2.png" alt="Tema Bingkai dan tema Integral">
        
            <p>Jika Anda menggunakan tata letak slide yang unik—seperti Kutipan dengan Keterangan atau Kartu Nama—lalu beralih ke tema yang tidak menyertakan tata letak tersebut, hasilnya mungkin tidak diharapkan.</p>
            <p>Setiap tema PowerPoint—termasuk tema default Office—memiliki elemen temanya sendiri. Elemen-elemen ini adalah:</p>
        
            <h3>Warna Tema</h3>
            <p>Ada 10 warna tema, beserta variasi yang lebih gelap dan terang, tersedia di setiap menu Warna.</p>
            <img src="https://media.gcflearnfree.org/content/56def3cc6aa9151abc732080_03_08_2016/themes_elements_colors.png" alt="Warna Tema">
        
            <h3>Font Tema</h3>
            <p>Ada dua font tema yang tersedia di bagian atas menu Font di bawah Font Tema.</p>
            <img src="https://media.gcflearnfree.org/content/56def3cc6aa9151abc732080_03_08_2016/themes_elements_fonts.png" alt="Font Tema">
        
            <h3>Efek Tema</h3>
            <p>Ini mempengaruhi gaya bentuk preset. Anda dapat menemukan gaya bentuk di tab Format kapan pun Anda memilih bentuk atau grafik SmartArt.</p>
            <img src="https://media.gcflearnfree.org/content/56def3cc6aa9151abc732080_03_08_2016/themes_elements_effects.png" alt="Efek Tema">
        
            <p>Saat Anda beralih ke tema lain, semua elemen ini akan diperbarui untuk mencerminkan tema baru. Anda dapat mengubah tampilan presentasi Anda secara drastis dalam beberapa klik.</p>
            <p>Jika Anda menerapkan font atau warna yang bukan bagian dari tema, font atau warna tersebut tidak akan berubah saat Anda memilih tema lain. Ini termasuk warna yang dipilih dari opsi Warna Standar atau Warna Lainnya dan font yang dipilih dari Semua Font. Menggunakan elemen non-tema dapat berguna ketika Anda ingin teks tertentu memiliki warna atau font tertentu, seperti logo.</p>
            <p>Anda juga dapat menyesuaikan tema dan menentukan sendiri elemen tema. Untuk mempelajari lebih lanjut, lihat pelajaran Memodifikasi Tema kami.</p>
        
            <h2>Menerapkan Tema</h2>
            <p>Semua tema yang disertakan dalam PowerPoint terletak di grup Tema pada tab Desain. Tema dapat diterapkan atau diubah kapan saja.</p>
        
            <h3>Untuk Menerapkan Tema:</h3>
            <ol>
                <li>Pilih tab <strong>Desain</strong> di Ribbon, lalu cari grup <strong>Tema</strong>. Setiap gambar mewakili sebuah tema.</li>
                <li>Klik panah tarik-turun <strong>Lainnya</strong> untuk melihat semua tema yang tersedia.</li>
                <img src="https://media.gcflearnfree.org/content/56def3cc6aa9151abc732080_03_08_2016/themes_apply_dropdown.png" alt="Mengklik panah tarik-turun Lainnya">
                <li>Pilih tema yang diinginkan.</li>
                <img src="https://media.gcflearnfree.org/content/56def3cc6aa9151abc732080_03_08_2016/themes_apply_menu.png" alt="Memilih tema">
                <li>Tema akan diterapkan ke seluruh presentasi. Untuk menerapkan tema yang berbeda, cukup pilih dari tab Desain.</li>
                <img src="https://media.gcflearnfree.org/content/56def3cc6aa9151abc732080_03_08_2016/themes_apply_result.png" alt="Tema yang diterapkan">
            </ol>
            <p>Setelah menerapkan tema, Anda juga dapat memilih varian untuk tema tersebut dari grup Varian. Varian menggunakan warna tema berbeda dengan tetap mempertahankan tampilan tema secara keseluruhan.</p>
            <img src="https://media.gcflearnfree.org/content/56def3cc6aa9151abc732080_03_08_2016/themes_apply_variant.png" alt="Menerapkan varian tema">
        
            <h2>Tantangan!</h2>
            <ol>
                <li>Buka <a href="https://media.gcflearnfree.org/content/56def3cc6aa9151abc732080_03_08_2016/powerpoint2016_themes_practice.pptx">presentasi latihan kami</a>.</li>
                <li>Terapkan tema <strong>Galeri</strong> yang memiliki latar belakang terang dengan tekstur kayu di bagian bawah. Catatan: Nama tema akan muncul saat Anda mengarahkan kursor ke tema tersebut.</li>
                <li>Pilih varian tema.</li>
            </ol>
            <p>Berikut adalah contoh tampilan presentasi Anda:</p>
            <img src="https://media.gcflearnfree.org/content/56def3cc6aa9151abc732080_03_08_2016/applying_themes.jpg" alt="Hasil tantangan">'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Menerapkan Transisi',
            'course_id' => '47',
            'desc' => '<h1>Menerapkan Transisi di PowerPoint</h1>
            <p>Jika Anda pernah melihat presentasi PowerPoint yang memiliki efek khusus di antara setiap slide, Anda pasti pernah melihat transisi slide. Transisi bisa sesederhana memudar ke slide berikutnya atau mencolok seperti efek yang menarik perhatian. PowerPoint memudahkan penerapan transisi ke beberapa atau seluruh slide, sehingga presentasi Anda terlihat sempurna dan profesional.</p>
            <p>Opsional: Unduh <a href="https://media.gcflearnfree.org/content/56d898fc6aa91509c874342e_03_03_2016/powerpoint2016_transitions_practice.pptx">presentasi latihan kami</a>.</p>
            <p>Tonton video di bawah ini untuk mempelajari lebih lanjut tentang menerapkan transisi di PowerPoint.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/Ey1atEavZ-M?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h2>Tentang Transisi</h2>
            <p>Ada tiga kategori transisi unik yang dapat dipilih, semuanya dapat ditemukan di tab Transisi.</p>
            <h3>Subtle</h3>
            <p>Ini adalah jenis transisi paling dasar. Mereka menggunakan animasi sederhana untuk berpindah antar slide.</p>
            <img src="https://media.gcflearnfree.org/content/56d898fc6aa91509c874342e_03_03_2016/transitions_about_subtle.png" alt="Transisi yang halus">
            
            <h3>Exciting</h3>
            <p>Ini menggunakan animasi yang lebih kompleks untuk transisi antar slide. Meskipun secara visual lebih menarik dibandingkan transisi halus, menambahkan terlalu banyak dapat membuat presentasi Anda terlihat kurang profesional. Namun, bila digunakan dalam jumlah sedang, mereka dapat menambahkan sentuhan yang bagus di antara slide-slide penting.</p>
            <img src="https://media.gcflearnfree.org/content/56d898fc6aa91509c874342e_03_03_2016/transitions_about_exciting.png" alt="Transisi yang menarik">
        
            <h3>Konten Dinamis</h3>
            <p>Jika Anda melakukan transisi antara dua slide yang menggunakan tata letak slide serupa, transisi dinamis hanya akan memindahkan placeholder, bukan slide itu sendiri. Jika digunakan dengan benar, transisi dinamis dapat membantu menyatukan slide Anda dan menambahkan tingkat kesempurnaan pada presentasi Anda.</p>
            <img src="https://media.gcflearnfree.org/content/56d898fc6aa91509c874342e_03_03_2016/transitions_about_dynamic.png" alt="Transisi dinamis">
        
            <p>Transisi paling baik digunakan dalam jumlah sedang. Menambahkan terlalu banyak transisi dapat membuat presentasi Anda terlihat sedikit konyol dan bahkan mengganggu audiens Anda. Pertimbangkan untuk menggunakan sebagian besar transisi yang halus, atau tidak menggunakan transisi sama sekali.</p>
        
            <h2>Untuk Menerapkan Transisi</h2>
            <ol>
                <li>Pilih slide yang diinginkan dari panel Navigasi Slide. Ini adalah slide yang akan muncul setelah transisi.</li>
                <img src="https://media.gcflearnfree.org/content/56d898fc6aa91509c874342e_03_03_2016/transitions_apply_select.png" alt="Memilih slide">
                <li>Klik tab <strong>Transisi</strong>, lalu cari grup <strong>Transisi ke Slide Ini</strong>. Secara default, Tidak Ada yang diterapkan pada setiap slide.</li>
                <li>Klik panah tarik-turun <strong>Lainnya</strong> untuk menampilkan semua transisi.</li>
                <img src="https://media.gcflearnfree.org/content/56d898fc6aa91509c874342e_03_03_2016/transitions_apply_drop_down.png" alt="Mengklik panah tarik-turun Lainnya">
                <li>Klik transisi untuk menerapkannya ke slide yang dipilih. Ini secara otomatis akan melihat pratinjau transisi.</li>
                <img src="https://media.gcflearnfree.org/content/56d898fc6aa91509c874342e_03_03_2016/transitions_apply_menu.png" alt="Memilih transisi">
                <li>Anda dapat menggunakan perintah <strong>Terapkan Ke Semua</strong> di grup Waktu untuk menerapkan transisi yang sama ke semua slide dalam presentasi Anda. Ingatlah bahwa ini akan mengubah transisi lain yang telah Anda terapkan.</li>
                <img src="https://media.gcflearnfree.org/content/56d898fc6aa91509c874342e_03_03_2016/transitions_apply_to_all.png" alt="Menerapkan transisi yang sama ke semua slide">
            </ol>
            <p>Coba terapkan beberapa jenis transisi berbeda ke berbagai slide dalam presentasi Anda. Anda mungkin menemukan bahwa beberapa transisi bekerja lebih baik daripada yang lain, bergantung pada konten slide Anda.</p>
        
            <h2>Untuk Melihat Pratinjau Transisi</h2>
            <p>Anda dapat mempratinjau transisi untuk slide yang dipilih kapan saja menggunakan salah satu dari dua metode berikut:</p>
            <ul>
                <li>Klik perintah <strong>Pratinjau</strong> pada tab Transisi.</li>
                <img src="https://media.gcflearnfree.org/content/56d898fc6aa91509c874342e_03_03_2016/transitions_preview_ribbon.png" alt="Mengklik perintah Pratinjau">
                <li>Klik perintah <strong>Putar Animasi</strong> di panel Navigasi Slide.</li>
                <img src="https://media.gcflearnfree.org/content/56d898fc6aa91509c874342e_03_03_2016/transitions_preview_navigation_pane.png" alt="Mengklik perintah Play Animations di panel Navigasi Slide">
            </ul>
        
            <h2>Memodifikasi Transisi</h2>
            <h3>Untuk Mengubah Efek Transisi</h3>
            <ol>
                <li>Pilih slide dengan transisi yang ingin Anda modifikasi.</li>
                <li>Klik perintah <strong>Opsi Efek</strong> dan pilih opsi yang diinginkan. Opsi-opsi ini akan bervariasi tergantung pada transisi yang dipilih.</li>
                <img src="https://media.gcflearnfree.org/content/56d898fc6aa91509c874342e_03_03_2016/transitions_modify_effect.png" alt="Memodifikasi efek transisi">
                <li>Transisi akan diubah, dan pratinjau transisi akan muncul.</li>
            </ol>
            <p>Beberapa transisi tidak memungkinkan Anda mengubah arah.</p>
        
            <h3>Untuk Mengubah Durasi Transisi</h3>
            <ol>
                <li>Pilih slide dengan transisi yang ingin Anda modifikasi.</li>
                <li>Di bidang <strong>Durasi</strong> di grup <strong>Waktu</strong>, masukkan waktu transisi yang diinginkan. Dalam contoh ini, kita akan mengurangi waktu menjadi setengah detik—atau 00.50—untuk mempercepat transisi.</li>
                <img src="https://media.gcflearnfree.org/content/56d898fc6aa91509c874342e_03_03_2016/transitions_modify_duration.png" alt="Memodifikasi durasi transisi">
            </ol>
        
            <h3>Untuk Menambahkan Suara</h3>
            <ol>
                <li>Pilih slide dengan transisi yang ingin Anda modifikasi.</li>
                <li>Klik menu tarik-turun <strong>Suara</strong> di grup <strong>Waktu</strong>.</li>
                <li>Klik suara untuk menerapkannya ke slide yang dipilih, lalu pratinjau transisi untuk mendengarkan suaranya.</li>
                <img src="https://media.gcflearnfree.org/content/56d898fc6aa91509c874342e_03_03_2016/transitions_modify_sound.png" alt="Menambahkan suara ke transisi">
            </ol>
            <p>Suara paling baik digunakan dalam jumlah sedang. Menerapkan suara di antara setiap slide dapat membuat penonton kewalahan atau bahkan mengganggu saat menyajikan tayangan slide Anda.</p>
        
            <h3>Untuk Menghapus Transisi</h3>
            <ol>
                <li>Pilih slide dengan transisi yang ingin Anda hapus.</li>
                <li>Pilih <strong>Tidak Ada</strong> dari grup <strong>Transisi ke Slide Ini</strong>. Transisi akan dihapus.</li>
                <img src="https://media.gcflearnfree.org/content/56d898fc6aa91509c874342e_03_03_2016/transitions_modify_remove.png" alt="Menghapus transisi dari slide">
            </ol>
            <p>Untuk menghapus transisi dari semua slide, terapkan transisi <strong>Tidak Ada</strong> ke slide, lalu klik perintah <strong>Terapkan ke Semua</strong>.</p>
        
            <h2>Memajukan Slide</h2>
            <p>Biasanya, dalam tampilan Peragaan Slide Anda akan melanjutkan ke slide berikutnya dengan mengklik mouse Anda atau dengan menekan tombol spasi atau panah pada keyboard Anda. Pengaturan <strong>Advance Slides</strong> di grup Timing memungkinkan presentasi untuk maju sendiri dan menampilkan setiap slide untuk jangka waktu tertentu. Fitur ini khususnya berguna untuk presentasi tanpa pengawasan, seperti presentasi di stan pameran dagang.</p>
        
            <h3>Untuk Memajukan Slide Secara Otomatis</h3>
            <ol>
                <li>Pilih slide yang ingin Anda modifikasi.</li>
                <li>Temukan grup <strong>Timing</strong> pada tab <strong>Transisi</strong>. Di bawah <strong>Advance Slide</strong>, hapus centang pada kotak di sebelah <strong>On Mouse Click</strong>.</li>
                <li>Di kolom <strong>Setelah</strong>, masukkan jumlah waktu yang Anda inginkan untuk menampilkan slide. Dalam contoh ini, kita akan memajukan slide secara otomatis setelah 1 menit 15 detik, atau 01:15:00.</li>
                <img src="https://media.gcflearnfree.org/content/56d898fc6aa91509c874342e_03_03_2016/transitions_advance_automatically.png" alt="Mengatur durasi slide otomatis">
                </ol>
            <p>Pilih slide lain dan ulangi prosesnya hingga semua slide memiliki waktu yang diinginkan. Anda juga dapat mengklik perintah <strong>Terapkan ke Semua</strong> untuk menerapkan pengaturan waktu yang <ol>
            <li>Pilih slide yang ingin Anda modifikasi.</li>
            <li>Temukan grup <strong>Timing</strong> pada tab <strong>Transisi</strong>. Di bawah <strong>Advance Slide</strong>, hapus centang pada kotak di sebelah <strong>On Mouse Click</strong>.</li>
            <li>Di kolom <strong>Setelah</strong>, masukkan jumlah waktu yang Anda inginkan untuk menampilkan slide. Dalam contoh ini, kita akan memajukan slide secara otomatis setelah 1 menit 15 detik, atau 01:15:00.</li>
        </ol>
        <p>Pilih slide lain dan ulangi prosesnya hingga semua slide memiliki waktu yang diinginkan. Anda juga dapat mengklik perintah <strong>Terapkan ke Semua</strong> untuk menerapkan pengaturan waktu yang sama ke semua slide.</p>
        <p>Jika Anda perlu melanjutkan ke slide berikutnya sebelum transisi otomatis, Anda selalu dapat mengklik mouse atau menekan bilah spasi untuk melanjutkan slide seperti biasa.</p>
    
        <h2>Tantangan!</h2>
        <ol>
            <li><a href="https://media.gcflearnfree.org/content/56d898fc6aa91509c874342e_03_03_2016/powerpoint2016_transitions_practice.pptx">presentasi latihan kami</a>Buka presentasi latihan kami.</li>
            <li>Dengan slide pertama dipilih, terapkan transisi Push dari kategori Halus.</li>
            <li>Ubah Opsi Efek untuk menekan Dari Kanan.</li>
            <li>Ubah Durasi menjadi 2.00.</li>
            <li>Atur slide ke Maju Otomatis setelah 3 detik, atau 00:03.00.</li>
            <li>Gunakan perintah Terapkan ke Semua untuk menerapkan perubahan Anda ke setiap slide.</li>
            <li>Menggunakan tombol Peragaan Slide di bagian bawah jendela Anda, putar tayangan slide Anda. Setiap slide akan maju secara otomatis seperti pada gambar di bawah ini:</li>
            <p class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d898fc6aa91509c874342e_03_03_2016/transitiongif.gif"></p>
        </ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Mengelola Slide',
            'course_id' => '48',
            'desc' => '<h3>Pendahuluan</h3>
            <p>Ketika Anda menambahkan lebih banyak slide ke presentasi, bisa jadi sulit untuk menjaga semuanya tetap <strong>terorganisir</strong>. Untungnya, PowerPoint menawarkan alat untuk membantu Anda mengatur dan mempersiapkan slide show Anda.</p>
            <p class="moreInfo">Opsional: Unduh <a href="https://media.gcflearnfree.org/content/56cf50476aa9151798b7910d_02_25_2016/powerpoint2016_managingslides_practice.pptx">presentasi latihan</a> kami.</p>
            <p class="chevron">Tonton video di bawah ini untuk mempelajari lebih lanjut tentang mengelola slide di PowerPoint.<br></p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/UmOJXAr_riE?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h4 class="clearfl">Tentang tampilan slide</h4>
            <p>PowerPoint menyertakan beberapa <strong>tampilan slide</strong> yang berbeda, yang semuanya berguna untuk berbagai tugas. <strong>Perintah tampilan slide</strong> terletak di bagian kanan bawah jendela PowerPoint. Ada empat tampilan slide utama.</p>
            <div class="centerImage"><img loading="lazy" class="imageBorder" alt="Perintah tampilan slide yang berbeda" src="https://media.gcflearnfree.org/content/56cf50476aa9151798b7910d_02_25_2016/managing_slides_about_commands.png"></div>
            <ul><li><strong>Tampilan normal:</strong> Ini adalah tampilan <strong>bawaan</strong>, di mana Anda membuat dan mengedit slide. Anda juga dapat memindahkan slide di panel Navigasi Slide di sebelah kiri.<div class="centerImage"><img loading="lazy" style="width: 700px; height: 320px;" class="imageBorder" alt="Tampilan Normal" src="https://media.gcflearnfree.org/content/56cf50476aa9151798b7910d_02_25_2016/managing_slides_about_normal.png" width="700" height="320"></div></li><li><strong>Tampilan pengurut slide:</strong> Dalam tampilan ini, Anda akan melihat <strong>versi thumbnail</strong> dari setiap slide. Anda dapat menyeret dan melepaskan slide untuk mengurutkannya dengan cepat.<div class="centerImage"><img loading="lazy" style="width: 700px; height: 320px;" class="imageBorder" alt="Pengurut Slide" src="https://media.gcflearnfree.org/content/56cf50476aa9151798b7910d_02_25_2016/managing_slides_about_sorter.jpg" width="700" height="320"></div></li><li><strong>Tampilan membaca:</strong> Tampilan ini mengisi jendela PowerPoint dengan <strong>pratinjau</strong> presentasi Anda. Tampilan ini menyertakan <strong>tombol navigasi</strong> yang mudah diakses di bagian kanan bawah.<div class="centerImage"><img loading="lazy" style="width: 701px; height: 449px;" class="imageBorder" alt="Tampilan Membaca" src="https://media.gcflearnfree.org/content/56cf50476aa9151798b7910d_02_25_2016/managing_slides_about_reading.png" width="701" height="449"></div></li><li><strong>Tampilan slide show:</strong> Ini adalah tampilan yang akan Anda gunakan untuk <strong>menyajikan</strong> kepada audiens. Perintah ini akan memulai presentasi dari <strong>slide saat ini</strong>. Anda juga dapat menekan <strong>F5</strong> pada keyboard Anda untuk memulai dari awal. Menu akan muncul di sudut kiri bawah saat Anda menggerakkan mouse. Perintah ini memungkinkan Anda menavigasi melalui slide dan mengakses fitur lain, seperti <strong>pena</strong> dan <strong>stabilo</strong>.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Memutar slide show" src="https://media.gcflearnfree.org/content/56cf50476aa9151798b7910d_02_25_2016/managing_slides_about_show_small.png"></div></li></ul>
            
            <h3>Tampilan outline</h3>
            <p><strong>Tampilan outline</strong> menampilkan teks slide Anda dalam bentuk <strong>outline</strong>. Ini memungkinkan Anda untuk cepat mengedit teks slide Anda dan melihat konten beberapa slide sekaligus. Anda dapat menggunakan tata letak ini untuk meninjau organisasi slide show Anda dan mempersiapkan untuk menyajikan presentasi Anda.</p>
            <h4>Untuk melihat outline:</h4>
            <ol class="numbered-list"><li>Dari tab <strong>View</strong>, klik perintah <strong>Outline View</strong>.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Mengklik perintah Tampilan Outline" src="https://media.gcflearnfree.org/content/56cf50476aa9151798b7910d_02_25_2016/managing_slides_outline_ribbon.png"></div></li><li>Outline teks slide Anda akan muncul di panel navigasi slide.</li><li>Anda dapat mengetik langsung di outline untuk membuat perubahan pada teks slide Anda.<div class="centerImage"><img loading="lazy" style="width: 702px; height: 302px;" class="imageBorder" alt="Mengedit outline" src="https://media.gcflearnfree.org/content/56cf50476aa9151798b7910d_02_25_2016/managing_slides_outline_pane.png" width="702" height="302"></div></li></ol>
            <h3>Catatan slide</h3>
            <p>Anda dapat menambahkan <strong>catatan</strong> ke slide Anda dari panel <strong>Notes</strong>. Sering disebut <strong>catatan pembicara</strong>, catatan ini dapat membantu Anda menyajikan atau mempersiapkan presentasi Anda.</p>
            <h4>Untuk menambahkan catatan:</h4>
            <ol class="numbered-list"><li>Klik perintah <strong>Notes</strong> di bagian bawah layar untuk membuka panel <strong>Notes</strong>.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Mengklik perintah Notes" src="https://media.gcflearnfree.org/content/56cf50476aa9151798b7910d_02_25_2016/managing_slides_notes_command.png"></div></li><li>Klik dan seret <strong>tepi</strong> panel untuk <strong>mengubah ukurannya</strong> jika diinginkan.<div class="centerImage"><img loading="lazy" imageborder"="" alt="Mengubah ukuran panel Notes" src="https://media.gcflearnfree.org/content/56cf50476aa9151798b7910d_02_25_2016/managing_slides_notes_drag.png"></div></li><li>Klik panel <strong>Notes</strong>, dan mulai mengetik untuk menambahkan catatan.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Menambahkan catatan" src="https://media.gcflearnfree.org/content/56cf50476aa9151798b7910d_02_25_2016/managing_slides_notes_typing.png"></div></li></ol>
            <p class="moreInfo">Anda juga dapat mengakses tampilan <strong>Notes Page</strong> untuk mengedit dan meninjau catatan Anda. Cukup klik perintah <strong>Notes Page</strong> dari tab <strong>View</strong>. Dari sana, Anda dapat mengetik catatan di <strong>kotak teks</strong> di bawah setiap slide.</p>
            <div class="centerImage"><img loading="lazy" class="imageBorder" alt="Tampilan Halaman Catatan" src="https://media.gcflearnfree.org/content/56cf50476aa9151798b7910d_02_25_2016/managing_slides_notes_view.png"></div>
            <h4>Untuk membuat section slide:</h4>
            <p>Dalam contoh kami, kami akan menambahkan dua section: satu untuk anjing yang tersedia untuk diadopsi, dan lainnya untuk kucing dan hewan peliharaan lainnya.</p>
            <ol class="numbered-list"><li>Pilih <strong>slide</strong> yang ingin Anda mulai section.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Memilih slide untuk memulai section" src="https://media.gcflearnfree.org/content/56cf50476aa9151798b7910d_02_25_2016/managing_slides_sections_select.png"></div></li><li>Dari tab <strong>Home</strong>, klik perintah <strong>Section</strong>, lalu pilih <strong>Add Section</strong> dari menu drop-down.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Mengklik Tambahkan Section" src="https://media.gcflearnfree.org/content/56cf50476aa9151798b7910d_02_25_2016/managing_slides_sections_add.png"></div></li><li>Sebuah <strong>Untitled Section</strong> akan muncul di panel Navigasi Slide.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Sebuah section yang baru dibuat" src="https://media.gcflearnfree.org/content/56cf50476aa9151798b7910d_02_25_2016/managing_slides_sections_untitled.png"></div></li><li>Untuk <strong>mengganti nama</strong> section, klik perintah <strong>Section</strong>, lalu pilih <strong>Rename Section</strong> dari menu drop-down.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Mengklik Ganti Nama Section" src="https://media.gcflearnfree.org/content/56cf50476aa9151798b7910d_02_25_2016/managing_slides_sections_rename.png"></div></li><li>Ketik nama section baru di kotak dialog, lalu klik <strong>Rename</strong>.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Mengganti nama section" src="https://media.gcflearnfree.org/content/56cf50476aa9151798b7910d_02_25_2016/managing_slides_sections_dialog.png"></div></li><li>Ulangi untuk menambahkan sebanyak mungkin section yang Anda butuhkan.</li><li>Di panel Navigasi Slide, klik <strong>panah</strong> di sebelah nama section untuk <strong>melipat</strong> atau <strong>memperluas</strong>nya.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Melipat section" src="https://media.gcflearnfree.org/content/56cf50476aa9151798b7910d_02_25_2016/managing_slides_sections_collapse.png"></div></li></ol>
            <p class="moreInfo">Untuk <strong>menghapus</strong> section, klik perintah <strong>Section</strong>, lalu klik <strong>Remove Section</strong>. Anda juga dapat mengklik <strong>Remove All Sections</strong> untuk menghapus semua section dari slide Anda.</p>
            <div class="centerImage"><img loading="lazy" class="imageBorder" alt="Menghapus section" src="https://media.gcflearnfree.org/content/56cf50476aa9151798b7910d_02_25_2016/managing_slides_sections_remove.png"></div>          
            <h3>Tantangan!</h3>
            <ol class="numbered-list"><li>Buka <a href="https://media.gcflearnfree.org/content/56cf50476aa9151798b7910d_02_25_2016/powerpoint2016_managingslides_practice.pptx">presentasi latihan</a> kami. Jika Anda sudah mengunduh presentasi latihan kami untuk diikuti dengan pelajaran ini, pastikan untuk mengunduh salinan baru.</li><li>Pilih slide pertama dan <strong>buat seksi</strong>.</li><li>Ganti nama seksi menjadi <strong>Pendahuluan</strong>.</li><li>Pilih slide berjudul <strong>Mans Best Friend</strong> dan buat seksi bernama <strong>Anjing</strong>.</li><li>Pilih slide berjudul <strong>The Little Things In Life</strong> dan buat seksi bernama <strong>Kucing & Lainnya</strong>.</li><li>Pindahkan slide berjudul <strong>Pogo</strong> sehingga berada di seksi <strong>Anjing</strong>.</li><li>Beralih ke <strong>Tampilan Outline</strong>.</li><li>Buat catatan pada slide 4 yang mengatakan <strong>Pindahkan sebelum slide 3 atau hapus</strong>.</li><li>Kembali ke <strong>Tampilan Normal</strong>.</li><li>Ketika Anda selesai, presentasi Anda akan terlihat seperti ini:<div class="centerImage"><img loading="lazy" style="width: 750px; height: 714px;" longdesc="" class="imageBorder" alt="Tantangan Mengelola Slide" src="https://media.gcflearnfree.org/content/56cf50476aa9151798b7910d_02_25_2016/managing_slides_edited.png" width="750" height="714"></div></li></ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Memformat Gambar',
            'course_id' => '49',
            'desc' => '<h3>Pendahuluan</h3>
            <p>Ada berbagai cara untuk <strong>memformat</strong> gambar dalam slide presentasi Anda. <strong>Alat gambar</strong> di PowerPoint memudahkan Anda untuk <strong>memperibadikan</strong> dan <strong>memodifikasi</strong> gambar dengan cara yang menarik. PowerPoint memungkinkan Anda untuk mengubah <strong>gaya gambar</strong> dan <strong>bentuk</strong>, menambahkan <strong>border</strong>, <strong>memotong</strong> dan <strong>mengompres</strong> gambar, menambahkan <strong>efek artistik</strong>, dan lainnya.</p>
            <p class="moreInfo">Opsional: Unduh <a href="https://media.gcflearnfree.org/content/56bca0a16e7fba119047e9ab_02_11_2016/powerpoint2016_formattingpictures_practice.pptx">presentasi latihan</a> kami.</p>
            <p class="chevron">Tonton video di bawah ini untuk mempelajari lebih lanjut tentang memformat gambar di PowerPoint.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/LD52XcAhL3s?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"></iframe></div>
            <h4 class="clearfl">Untuk memotong gambar:</h4>
            <p>Ketika Anda memotong gambar, bagian dari gambar tersebut dihapus. Memotong dapat membantu saat sebuah gambar memiliki banyak konten dan Anda ingin fokus pada bagian tertentu saja.</p>
            <ol class="numbered-list"><li>Pilih gambar yang ingin Anda potong. Tab <strong>Format</strong> akan muncul.</li><li>Pada tab Format, klik perintah <strong>Crop</strong>.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Mengklik perintah Crop" src="https://media.gcflearnfree.org/content/56bca0a16e7fba119047e9ab_02_11_2016/formatting_pictures_crop_ribbon.png"></div></li><li><strong>Handle pemotongan</strong> akan muncul di sekitar gambar. Klik dan seret salah satu handle untuk memotong gambar. Pastikan mouse berada tepat di atas handle pemotongan hitam sehingga Anda tidak sengaja memilih handle pengubahan ukuran.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Memotong gambar" src="https://media.gcflearnfree.org/content/56bca0a16e7fba119047e9ab_02_11_2016/formatting_pictures_crop_handles.png"></div></li><li>Klik perintah <strong>Crop</strong> lagi. Gambar akan dipotong.</li></ol>
            <h4>Untuk memotong gambar menjadi bentuk tertentu:</h4>
            <ol class="numbered-list"><li>Pilih gambar yang ingin Anda potong, lalu klik tab <strong>Format</strong>.</li><li>Klik panah drop-down <strong>Crop</strong>. Arahkan mouse ke <strong>Crop to Shape</strong>, lalu pilih <strong>bentuk</strong> yang diinginkan dari menu drop-down yang muncul.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Memilih bentuk" src="https://media.gcflearnfree.org/content/56bca0a16e7fba119047e9ab_02_11_2016/formatting_pictures_shape_ribbon.png"></div></li><li>Gambar akan muncul dalam bentuk yang dipilih.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Gambar dipotong menjadi bentuk" src="https://media.gcflearnfree.org/content/56bca0a16e7fba119047e9ab_02_11_2016/formatting_pictures_shape_result2.png"></div></li></ol>
            <p class="moreInfo">Anda mungkin ingin memotong gambar ke ukuran yang diinginkan sebelum memotongnya menjadi bentuk tertentu.</p>
            <h4>Untuk menambahkan border ke gambar:</h4>
            <ol class="numbered-list"><li>Pilih gambar yang ingin Anda tambahkan border-nya, lalu klik tab <strong>Format</strong>.</li><li>Klik perintah <strong>Picture Border</strong>. Sebuah menu drop-down akan muncul.</li><li>Dari sini, Anda dapat memilih <strong>warna</strong>, <strong>ketebalan</strong> (tebal), dan apakah garisnya <strong>bergaris</strong>.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Mengubah border gambar" src="https://media.gcflearnfree.org/content/56bca0a16e7fba119047e9ab_02_11_2016/formatting_pictures_border_ribbon.png"></div></li><li>Border akan muncul di sekitar gambar.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Gambar dengan border hijau" src="https://media.gcflearnfree.org/content/56bca0a16e7fba119047e9ab_02_11_2016/formatting_pictures_border_result.png"></div></li></ol>
            
            <h3>Penyesuaian gambar</h3>
            <p>PowerPoint menawarkan beberapa opsi untuk mengubah tampilan gambar dalam slide presentasi Anda. Misalnya, Anda dapat menambahkan <strong>bingkai</strong>, melakukan <strong>koreksi</strong> pada gambar, mengubah <strong>warna</strong> atau <strong>kecerahan</strong> gambar, dan bahkan menambahkan beberapa <strong>efek artistik</strong> yang bergaya. Opsi-opsi ini terletak di grup <strong>Adjust</strong> dan <strong>Picture Styles</strong> pada tab <strong>Format</strong>.</p>
            <div class="centerImage"><img loading="lazy" class="imageBorder" alt="Opsi Penyesuaian Gambar" src="https://media.gcflearnfree.org/content/56bca0a16e7fba119047e9ab_02_11_2016/formatting_pictures_adjustments_ribbon.png"></div>
            <p>Saat Anda siap membuat penyesuaian atau bereksperimen dengan tampilan gambar, pilih gambar tersebut dan pilih salah satu opsi ini dari tab Format.</p>
            <ul><li><strong>Corrections</strong>: Perintah ini terletak di grup <strong>Adjust</strong>. Dari sini, Anda dapat <strong>mempertajam</strong> atau <strong>melunakkan</strong> gambar untuk mengatur seberapa buram atau jelas gambar tersebut. Anda juga dapat mengatur <strong>kecerahan</strong> dan <strong>kontras</strong>, yang mengontrol seberapa terang atau gelap gambar tersebut muncul.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Perintah Corrections" src="https://media.gcflearnfree.org/content/56bca0a16e7fba119047e9ab_02_11_2016/formatting_pictures_adjustments_corrections.png"></div></li><li><strong>Color</strong>: Perintah ini terletak di grup <strong>Adjust</strong>. Dari sini, Anda dapat mengatur <strong>saturasi</strong> gambar (seberapa hidup warnanya), <strong>tone</strong> (suhu gambar, dari dingin ke hangat), dan <strong>pewarnaan</strong> (mengubah warna keseluruhan gambar).<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Perintah Color" src="https://media.gcflearnfree.org/content/56bca0a16e7fba119047e9ab_02_11_2016/formatting_pictures_adjustments_color.png"></div></li><li><strong>Artistic Effects</strong>: Perintah ini terletak di grup <strong>Adjust</strong>. Dari sini, Anda dapat menambahkan efek artistik seperti pastel, cat air, dan tepi bercahaya.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Perintah Artistic Effects" src="https://media.gcflearnfree.org/content/56bca0a16e7fba119047e9ab_02_11_2016/formatting_pictures_adjustments_effects.png"></div></li><li><strong>Picture Styles Group</strong>: Grup ini berisi berbagai gaya yang dapat Anda terapkan pada gambar Anda, seperti bingkai, border, dan tepi lembut.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Menu drop-down Picture Styles" src="https://media.gcflearnfree.org/content/56bca0a16e7fba119047e9ab_02_11_2016/formatting_pictures_adjustments_styles.png"></div></li></ul>
            
            <h3>Mengompres gambar</h3>
            <p>Jika Anda ingin mengirim presentasi yang berisi gambar melalui email, Anda perlu memperhatikan <strong>ukuran file</strong>-nya. Gambar beresolusi tinggi yang besar dapat dengan cepat membuat presentasi Anda menjadi sangat besar, yang mungkin meny
            
            ulitkan atau bahkan tidak mungkin untuk dilampirkan pada email. Selain itu, <strong>area yang dipotong</strong> dari gambar disimpan bersama presentasi secara default, yang dapat menambah ukuran file. PowerPoint dapat mengurangi ukuran file dengan <strong>mengompres</strong> gambar, menurunkan <strong>resolusi</strong>nya, dan <strong>menghapus area yang dipotong</strong>.</p>
            <h4>Untuk mengompres gambar:</h4>
            <ol class="numbered-list"><li>Pilih gambar yang ingin Anda kompres, lalu klik tab <strong>Format</strong>.</li><li>Klik perintah <strong>Compress Pictures</strong>.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Mengklik perintah Compress Pictures" src="https://media.gcflearnfree.org/content/56bca0a16e7fba119047e9ab_02_11_2016/formatting_pictures_compress_ribbon.png"></div></li><li>Sebuah kotak dialog akan muncul. Beri tanda centang di sebelah <strong>Delete cropped areas of pictures</strong>. Anda juga dapat memilih apakah akan menerapkan pengaturan ke <strong>gambar ini saja</strong> atau ke semua gambar dalam presentasi.</li><li>Pilih <strong>Target output</strong>. Jika Anda mengirim presentasi melalui email, Anda mungkin ingin memilih <strong>Email</strong>, yang menghasilkan ukuran file terkecil. Setelah selesai, klik <strong>OK</strong>.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Kotak dialog Compress Pictures" src="https://media.gcflearnfree.org/content/56bca0a16e7fba119047e9ab_02_11_2016/formatting_pictures_compress_dialog.png"></div></li></ol>
            <p class="moreInfo">Mengompres gambar Anda di PowerPoint mungkin tidak cukup mengurangi ukuran file sesuai kebutuhan Anda. Untuk hasil yang lebih baik, Anda dapat menggunakan program pengeditan gambar untuk mengubah ukuran gambar sebelum memasukkannya ke dalam presentasi Anda. Untuk mempelajari lebih lanjut, lihat tutorial kami <a target="_blank" href="http://www.gcflearnfree.org/imageediting101">Image Editing 101</a>.</p>
            
            <h3>Tantangan!</h3>
            <ol class="numbered-list"><li>Buka <a href="https://media.gcflearnfree.org/content/56bca0a16e7fba119047e9ab_02_11_2016/powerpoint2016_formattingpictures_practice.pptx">presentasi latihan</a> kami.</li><li>Pada slide 7, <strong>pilih</strong> gambar treadmill.</li><li><strong>Potong</strong> gambar sehingga sedikit lebih kecil dan treadmill memenuhi sebagian besar bingkai.</li><li>Ubah <strong>gaya</strong> gambar.</li><li>Terapkan <strong>koreksi</strong> pada gambar. Misalnya, tingkatkan <strong>kecerahan</strong>.</li><li><strong>Kompres</strong> gambar Anda dan pilih <strong>Email</strong> sebagai target output Anda.</li><li>Setelah selesai, slide Anda seharusnya terlihat seperti ini:<div class="centerImage"><img loading="lazy" style="width: 750px; height: 421px;" longdesc="" class="imageBorder" alt="Tantangan Memformat Gambar" src="https://media.gcflearnfree.org/content/56bca0a16e7fba119047e9ab_02_11_2016/formatting_pictures_edited.jpg" width="750" height="421"></div><div class="centerImage"></div><div class="centerImage"></div></li></ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Bentuk',
            'course_id' => '50',
            'desc' => '<h3>Pengenalan</h3>
            <p>Bentuk adalah cara yang bagus untuk membuat presentasi Anda lebih menarik. PowerPoint memberi Anda banyak bentuk berbeda untuk dipilih, dan bentuk-bentuk ini dapat disesuaikan sesuai kebutuhan Anda, menggunakan palet warna, preferensi, dan lainnya. Meskipun Anda mungkin tidak memerlukan bentuk di setiap presentasi yang Anda buat, bentuk-bentuk ini dapat menambah daya tarik visual. <br></p>
            <p class="moreInfo">Opsional: Unduh <a href="https://media.gcflearnfree.org/content/56be4c416e7fba14e47110ea_02_12_2016/powerpoint2016_shapes_practice.pptx">presentasi latihan</a> kami.</p>
            <p class="chevron">Tonton video di bawah ini untuk mempelajari lebih lanjut tentang bentuk di PowerPoint.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/lwBSCkmhwJA?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h4 class="clearfl">Untuk menyisipkan bentuk:</h4>
            <ol class="numbered-list"><li>Pilih tab <strong>Insert</strong>, lalu klik perintah <strong>Shapes</strong> di grup <strong>Illustrations</strong>. Menu drop-down bentuk akan muncul.</li><li>Pilih <strong>bentuk</strong> yang diinginkan.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Memilih bentuk" src="https://media.gcflearnfree.org/content/56be4c416e7fba14e47110ea_02_12_2016/shapes_insert_menu3.png"></div></li><li>Klik dan seret di lokasi yang diinginkan untuk menambahkan bentuk ke slide.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Menyisipkan bentuk baru" src="https://media.gcflearnfree.org/content/56be4c416e7fba14e47110ea_02_12_2016/shapes_insert_drag3.png"></div></li></ol>
            <h4>Memodifikasi bentuk atau kotak teks</h4>
            <p>Ketika Anda mengklik bentuk atau kotak teks, <strong>handle</strong> akan muncul yang memungkinkan Anda memanipulasi bentuk tersebut. Ada beberapa jenis handle.</p>
            <ul><li><strong>Sizing handles</strong>: Klik dan seret <strong>sizing handles</strong> hingga bentuk atau kotak teks berukuran yang diinginkan. Anda dapat menggunakan handle sudut untuk mengubah <strong>tinggi</strong> dan <strong>lebar</strong> sekaligus.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Mengubah ukuran bentuk" src="https://media.gcflearnfree.org/content/56be4c416e7fba14e47110ea_02_12_2016/shapes_modifying_sizing_handle3.png"></div></li><li><strong>Rotation handle</strong>: Klik dan seret <strong>rotation</strong> handle untuk memutar bentuk.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Memutar bentuk" src="https://media.gcflearnfree.org/content/56be4c416e7fba14e47110ea_02_12_2016/shapes_modifying_rotation_handle4.png"></div></li><li><strong>Yellow handles</strong>: Beberapa bentuk memiliki satu atau lebih <strong>yellow handles</strong> yang dapat digunakan untuk menyesuaikan bentuk. Misalnya, dengan bentuk matahari, Anda dapat mengubah proporsi bentuk.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Memodifikasi bentuk" src="https://media.gcflearnfree.org/content/56be4c416e7fba14e47110ea_02_12_2016/shapes_modifying_yellow_handle3.png"></div></li></ul>
            <p class="moreInfo">Selain mengubah ukuran, menyesuaikan, dan memutar bentuk, Anda dapat menyelaraskan, mengurutkan, dan mengelompokkan bentuk-bentuk tersebut. Untuk mempelajari lebih lanjut, lihat pelajaran kami <a href="https://edu.gcfglobal.org/en/powerpoint2016/aligning-ordering-and-grouping-objects/1/">Aligning, Ordering, and Grouping Objects</a>.</p>
            <h3>Memformat bentuk dan kotak teks</h3>
            <p>PowerPoint memungkinkan Anda memodifikasi bentuk dan kotak teks dalam berbagai cara sehingga Anda dapat menyesuaikannya dengan proyek Anda. Anda dapat <strong>mengubah</strong> bentuk dan kotak teks menjadi <strong>bentuk yang berbeda</strong>, <strong>memformat gaya dan warna</strong> mereka, dan menambahkan <strong>efek</strong>.</p>
            <h4>Untuk mengubah gaya bentuk:</h4>
            <p>Memilih <strong>gaya bentuk</strong> memungkinkan Anda menerapkan warna dan efek preset untuk dengan cepat mengubah tampilan bentuk atau kotak teks Anda. Opsi-opsi ini akan bergantung pada warna yang merupakan bagian dari tema Anda saat ini.</p>
            <ol class="numbered-list"><li>Pilih bentuk atau kotak teks yang ingin Anda ubah.</li><li>Pada tab <strong>Format</strong>, klik panah drop-down <strong>More</strong> di grup <strong>Shape Styles</strong>.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Mengklik panah drop-down More" src="https://media.gcflearnfree.org/content/56be4c416e7fba14e47110ea_02_12_2016/shapes_style_ribbon.png"></div></li><li>Sebuah menu drop-down gaya akan muncul. Pilih <strong>gaya</strong> yang ingin Anda gunakan.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Memilih gaya bentuk" src="https://media.gcflearnfree.org/content/56be4c416e7fba14e47110ea_02_12_2016/shapes_style_menu3.png"></div></li><li>Bentuk atau kotak teks akan muncul dalam gaya yang dipilih.</li></ol>
            <h4>Untuk mengubah warna isi bentuk:</h4>
            <ol class="numbered-list"><li>Pilih bentuk atau kotak teks yang ingin Anda ubah.</li><li>Pada tab <strong>Format</strong>, klik panah drop-down <strong>Shape Fill</strong>. Menu <strong>Shape Fill</strong> muncul.</li><li>Arahkan mouse ke berbagai warna. Pilih <strong>warna</strong> yang ingin Anda gunakan. Untuk melihat lebih banyak opsi warna, pilih <strong>More Fill Colors</strong>.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Mengubah warna isi bentuk" src="https://media.gcflearnfree.org/content/56be4c416e7fba14e47110ea_02_12_2016/shapes_fill_menu3.png"></div></li><li>Bentuk atau kotak teks akan muncul dalam warna yang dipilih.</li></ol>
            <p class="moreInfo">Jika Anda ingin menggunakan jenis isian yang berbeda, pilih <strong>Gradient</strong> atau <strong>Texture</strong> dari menu drop-down. Anda juga dapat memilih <strong>No Fill</strong> untuk membuatnya transparan.</p>
            <h4>Untuk mengubah outline bentuk:</h4>
            <ol class="numbered-list"><li>Pilih bentuk atau kotak teks yang ingin Anda ubah.</li><li>Pada tab <strong>Format</strong>, klik panah drop-down <strong>Shape Outline</strong>. Menu <strong>Shape Outline</strong> akan muncul.</li><li>Pilih <strong>warna</strong> yang ingin Anda gunakan. Jika Anda ingin membuat outline transparan, pilih <strong>No Outline</strong>.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Mengubah warna outline bentuk" src="https://media.gcflearnfree.org/content/56be4c416e7fba14e47110ea_02_12_2016/shapes_outline_menu3.png"></div></li><li>Bentuk atau kotak teks akan muncul dalam warna outline yang dipilih.</li></ol>
            <p class="moreInfo">Dari menu drop-down, Anda dapat mengubah <strong>warna</strong>, <strong>berat</strong> (ketebalan), dan apakah itu garis <strong>bergaris</strong>.</p>
            <div class="centerImage"><img loading="lazy" class="imageBorder" alt="Outline yang lebih tebal" src="https://media.gcflearnfree.org/content/56be4c416e7fba14e47110ea_02_12_2016/shapes_outline_weight3.png"></div>
            <h4>Untuk menambahkan efek bentuk:</h4>
            <ol class="numbered-list"><li>Pilih bentuk atau kotak teks yang ingin Anda ubah.</li><li>Pada tab <strong>Format</strong>, klik panah drop-down <strong>Shape Effects</strong>. Di menu yang muncul, arahkan mouse ke gaya efek yang ingin
            
             Anda tambahkan, lalu pilih efek preset yang diinginkan.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Menu Shape Effects" src="https://media.gcflearnfree.org/content/56be4c416e7fba14e47110ea_02_12_2016/shapes_effects_menu3.png"></div></li><li>Bentuk akan muncul dengan efek yang dipilih.</li></ol>
            <p class="moreInfo">Untuk lebih menyesuaikan efek bentuk Anda, pilih <strong>Options</strong> di akhir setiap menu. Panel Format Shape akan muncul, memungkinkan Anda menyesuaikan efek.</p>
            <div class="centerImage"><img loading="lazy" class="imageBorder" alt="Panel Shape Options" src="https://media.gcflearnfree.org/content/56be4c416e7fba14e47110ea_02_12_2016/shapes_effects_options2.png"></div>
            <h4>Untuk mengubah ke bentuk yang berbeda:</h4>
            <ol class="numbered-list"><li>Pilih bentuk atau kotak teks yang ingin Anda ubah. Tab <strong>Format</strong> akan muncul.</li><li>Pada tab <strong>Format</strong>, klik perintah <strong>Edit Shape</strong>. Di menu yang muncul, arahkan mouse ke <strong>Change Shape</strong> dan pilih <strong>bentuk</strong> yang diinginkan.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Mengubah bentuk" src="https://media.gcflearnfree.org/content/56be4c416e7fba14e47110ea_02_12_2016/shapes_change_menu3.png"></div></li><li>Bentuk baru akan muncul.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Bentuk baru" src="https://media.gcflearnfree.org/content/56be4c416e7fba14e47110ea_02_12_2016/shapes_change_result3.png"></div></li></ol>
            <p class="moreInfo">Jika Anda mau, Anda dapat memasukkan teks ke dalam bentuk. Ketika bentuk muncul dalam dokumen Anda, Anda bisa langsung mulai mengetik. Anda kemudian dapat menggunakan <strong>opsi pemformatan</strong> pada tab <strong>Home</strong> untuk mengubah font, ukuran font, atau warna teks.</p>
            <div class="centerImage"><img loading="lazy" class="imageBorder" alt="Memasukkan teks dalam bentuk" src="https://media.gcflearnfree.org/content/56be4c416e7fba14e47110ea_02_12_2016/shapes_text.png"></div>
            
            <h3>Tantangan!</h3>
            <ol class="numbered-list"><li>Buka <a href="https://media.gcflearnfree.org/content/56be4c416e7fba14e47110ea_02_12_2016/powerpoint2016_shapes_practice.pptx">presentasi latihan</a> kami.</li><li>Pada slide 5, berjudul Stress Management Tips, sisipkan <strong>bentuk Folded Corner</strong> dari kategori <strong>Basic Shapes</strong>.</li><li><strong>Putar</strong> bentuk sedikit.</li><li>Ubah <strong>isi bentuk</strong> menjadi emas.</li><li>Ubah outline bentuk menjadi <strong>No Outline</strong>.</li><li>Gunakan efek bentuk untuk menambahkan <strong>bayangan</strong> dari kategori <strong>Outer</strong>.</li><li>Tambahkan teks berikut ke bentuk: <strong>Make stress relief a priority!</strong></li><li><strong>Ubah bentuk</strong> menjadi salah satu pilihan Anda. <strong>Catatan</strong>: Anda mungkin harus mengubah ukuran bentuk agar semua teks terlihat.</li><li>Ketika Anda selesai, slide Anda seharusnya terlihat seperti ini:<div class="centerImage"><img loading="lazy" style="width: 751px; height: 423px;" longdesc="" class="imageBorder" alt="Tantangan Bentuk" src="https://media.gcflearnfree.org/content/56be4c416e7fba14e47110ea_02_12_2016/shapes.png" width="751" height="423"></div></li></ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Menganimasikan Teks dan Objek',
            'course_id' => '51',
            'desc' => '<h3>Pengenalan</h3>
            <p>Di PowerPoint, Anda dapat <strong>menganimasikan</strong> teks dan objek seperti klip art, bentuk, dan gambar. Animasi&#x2014;atau gerakan&#x2014;pada slide dapat digunakan untuk <strong>menarik</strong> <strong>perhatian audiens</strong> ke konten tertentu atau untuk membuat slide lebih mudah dibaca.</p>
            <p class="moreInfo">Opsional: Unduh <a href="https://media.gcflearnfree.org/content/56d9d8046aa91509c8743432_03_04_2016/powerpoint2016_animation_practice.pptx">presentasi latihan</a> kami.</p>
            <p class="chevron">Tonton video di bawah ini untuk mempelajari lebih lanjut tentang menganimasikan teks dan objek di PowerPoint.<br></p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/kw_udjD2xwo?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h4 class="clearfl">Empat jenis animasi</h4>
            <p>Ada beberapa efek animasi yang bisa Anda pilih, dan efek ini dikelompokkan menjadi empat jenis.</p>
            <ul><li><strong>Masuk:</strong> Mengontrol bagaimana objek masuk ke slide. Misalnya, dengan animasi <strong>Bounce</strong>, objek akan &quot;jatuh&quot; ke slide dan kemudian memantul beberapa kali.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Efek Masuk" src="https://media.gcflearnfree.org/content/56d9d8046aa91509c8743432_03_04_2016/animating_types_entrance.png"></div></li><li><strong>Penekanan:</strong> Animasi ini terjadi saat objek berada di slide, sering kali dipicu oleh <strong>klik mouse</strong>. Misalnya, Anda bisa mengatur objek untuk <strong>berputar</strong> saat Anda mengklik mouse.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Efek Penekanan" src="https://media.gcflearnfree.org/content/56d9d8046aa91509c8743432_03_04_2016/animating_types_emphasis.png"></div></li><li><strong>Keluar:</strong> Mengontrol bagaimana objek keluar dari slide. Misalnya, dengan animasi <strong>Fade</strong>, objek akan memudar.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Efek Keluar" src="https://media.gcflearnfree.org/content/56d9d8046aa91509c8743432_03_04_2016/animating_types_exit.png"></div></li><li><strong>Jalur Gerak:</strong> Mirip dengan efek <strong>Penekanan</strong>, kecuali objek bergerak di dalam slide sepanjang jalur yang telah ditentukan, seperti <strong>lingkaran</strong>.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Jalur Gerak" src="https://media.gcflearnfree.org/content/56d9d8046aa91509c8743432_03_04_2016/animating_types_motion.png"></div></li></ul>
            <h4>Untuk menerapkan animasi ke objek:</h4>
            <ol class="numbered-list"><li>Pilih objek yang ingin Anda animasikan.</li><li>Di tab <strong>Animations</strong>, klik panah drop-down More di grup <strong>Animation</strong>.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Klik panah drop-down More" src="https://media.gcflearnfree.org/content/56d9d8046aa91509c8743432_03_04_2016/animating_apply_dropdown.png"></div></li><li>Menu drop-down efek animasi akan muncul. Pilih efek yang diinginkan.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Memilih efek" src="https://media.gcflearnfree.org/content/56d9d8046aa91509c8743432_03_04_2016/animating_apply_menu.png"></div></li><li>Efek akan diterapkan ke objek. Objek akan memiliki <strong>angka</strong> kecil di sebelahnya untuk menunjukkan bahwa objek memiliki animasi. Di panel Slide, simbol <strong>bintang</strong> juga akan muncul di sebelah slide.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Angka dan bintang menunjukkan bahwa efek telah ditambahkan" src="https://media.gcflearnfree.org/content/56d9d8046aa91509c8743432_03_04_2016/animating_apply_result_callout.jpg"></div></li></ol>
            <p class="moreInfo">Di bagian bawah menu, Anda dapat mengakses lebih banyak efek.</p>
            <div class="centerImage"><img loading="lazy" class="imageBorder" alt="Efek animasi lainnya" src="https://media.gcflearnfree.org/content/56d9d8046aa91509c8743432_03_04_2016/animating_apply_more_callout.png"></div>
            <h4>Opsi efek</h4>
            <p>Beberapa efek memiliki<strong> opsi</strong> yang bisa Anda ubah. Misalnya, dengan efek <strong>Fly In</strong> Anda bisa mengontrol <strong>arah</strong> dari mana objek datang. Opsi ini dapat diakses dari perintah <strong>Effect Options</strong> di grup Animations.</p>
            <div class="centerImage"><img loading="lazy" class="imageBorder" alt="Melihat opsi untuk efek Fly In" src="https://media.gcflearnfree.org/content/56d9d8046aa91509c8743432_03_04_2016/animating_effect_options.jpg"></div>
            <h4>Untuk menghapus animasi:</h4>
            <ol class="numbered-list"><li>Pilih <strong>angka</strong> kecil yang terletak di sebelah objek yang dianimasikan.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Memilih angka" src="https://media.gcflearnfree.org/content/56d9d8046aa91509c8743432_03_04_2016/animating_remove.jpg"></div></li><li>Tekan tombol <strong>Delete</strong>. Animasi akan dihapus.</li></ol>
            <p class="attention">Animasi sebaiknya digunakan secara moderat. Menambahkan terlalu banyak animasi bisa membuat presentasi Anda terlihat sedikit konyol dan bahkan bisa mengalihkan perhatian audiens Anda. Pertimbangkan untuk menggunakan animasi yang halus, atau tidak menggunakan animasi sama sekali.</p>
            
            <h3>Bekerja dengan animasi</h3>
            <h4>Untuk menambahkan beberapa animasi ke objek:</h4>
            <p>Jika Anda memilih animasi baru dari menu di grup Animasi, itu akan <strong>menggantikan animasi saat ini</strong> pada objek. Namun, terkadang Anda ingin menempatkan <strong>lebih dari satu animasi</strong> pada objek, seperti efek <strong>Masuk</strong> dan <strong>Keluar</strong>. Untuk melakukannya, Anda perlu menggunakan perintah <strong>Add Animation</strong>, yang memungkinkan Anda menyimpan animasi saat ini sambil menambahkan animasi baru.</p>
            <ol class="numbered-list"><li>Pilih objek.</li><li>Klik tab <strong>Animations</strong>.</li><li>Di grup <strong>Advanced Animation</strong>, klik perintah <strong>Add Animation</strong> untuk melihat animasi yang tersedia.</li><li>Pilih efek animasi yang diinginkan.<div class="centerImage"><img loading="lazy" style="width: 699px; height: 453px;" class="imageBorder" alt="Menambahkan animasi tambahan" src="https://media.gcflearnfree.org/content/56d9d8046aa91509c8743432_03_04_2016/animating_multiple_menu.jpg" width="699" height="453"></div></li><li>Jika objek memiliki lebih dari satu efek, objek tersebut akan memiliki <strong>nomor</strong> yang berbeda untuk setiap efek. Angka tersebut menunjukkan <strong>urutan</strong> di mana efek akan terjadi.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Objek dengan dua animasi" src="https://media.gcflearnfree.org/content/56d9d8046aa91509c8743432_03_04_2016/animating_multiple_result_callout.jpg"></div></li></ol>
            <h4>Untuk mengurutkan ulang animasi:</h4>
            <ol class="numbered-list"><li>Pilih <strong>nomor</strong> dari efek yang ingin Anda ubah.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Memilih efek" src="https://media.gcflearnfree.org/content/56d9d8046aa91509c8743432_03_04_2016/animating_reorder.jpg"></div></li><li>Dari grup <strong>Timing</strong>, klik panah <strong>Move Earlier</strong> atau <strong>Move Later</strong> untuk mengubah urutan animasi. <div class="centerImage"><img loading="lazy" class="imageBorder" alt="Memindahkan animasi lebih awal" src="https://media.gcflearnfree.org/content/56d9d8046aa91509c8743432_03_04_2016/animating_reorder_buttons.png"></div></li></ol>
            <h4>Untuk mempratinjau animasi:</h4>
            <p>Kapan saja Anda dapat <strong>mempratinjau</strong> animasi Anda dengan mengklik perintah <strong>Preview</strong> di tab Animations.</p>
            <div class="centerImage"><img loading="lazy" class="imageBorder" alt="Tombol Preview" src="https://media.gcflearnfree.org/content/56d9d8046aa91509c8743432_03_04_2016/animating_preview.jpg"></div>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Memasukkan Video',
            'course_id' => '52',
            'desc' => '<h3>Pendahuluan</h3>
            <p>PowerPoint memungkinkan Anda untuk <strong>menyisipkan video</strong> ke dalam slide dan memutarnya selama presentasi Anda. Ini adalah cara yang bagus untuk membuat presentasi Anda lebih menarik bagi audiens Anda.</p>
            <p>Anda bahkan bisa <strong>mengedit</strong> video di dalam PowerPoint dan menyesuaikan tampilannya. Misalnya, Anda dapat <strong>memotong</strong> durasi video, menambahkan <strong>fade in</strong>, dan banyak lagi.</p>
            <p class="moreInfo">Opsional: Unduh <a href="https://media.gcflearnfree.org/content/56cc70b6a17fa60ae065f89e_02_23_2016/powerpoint2016_videos_practice.pptx">presentasi latihan</a> kami.</p>
            <p class="chevron">Tonton video di bawah ini untuk mempelajari lebih lanjut tentang menyisipkan video di PowerPoint.<br></p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/UJBCanWJD0k?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h4 class="clearfl">Untuk menyisipkan video dari file:</h4>
            <p>Dalam contoh ini, kami akan <strong>menyisipkan video dari file</strong> yang tersimpan di komputer kami. Jika Anda ingin bekerja bersama dengan contoh kami, klik kanan pada <a href="https://media.gcflearnfree.org/content/56cc70b6a17fa60ae065f89e_02_23_2016/butterfly.mp4">tautan ke video contoh kami</a> dan simpan ke komputer Anda.</p>
            <ol class="numbered-list"><li>Dari tab <strong>Insert</strong>, klik panah drop-down <strong>Video</strong>, lalu pilih <strong>Video on My PC</strong>.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Menyisipkan video dari file" src="https://media.gcflearnfree.org/content/56cc70b6a17fa60ae065f89e_02_23_2016/videos_insert_ribbon.png"></div></li><li>Temukan dan pilih file video yang diinginkan, lalu klik <strong>Insert</strong>.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Memilih video untuk disisipkan" src="https://media.gcflearnfree.org/content/56cc70b6a17fa60ae065f89e_02_23_2016/videos_insert_dialog.png"></div></li><li>Video akan ditambahkan ke slide.<div class="centerImage"><img loading="lazy" style="width: 700px; height: 395px;" class="imageBorder" alt="Video yang disisipkan" src="https://media.gcflearnfree.org/content/56cc70b6a17fa60ae065f89e_02_23_2016/videos_insert_result.jpg" width="700" height="395"></div></li></ol>
            <p class="moreInfo">Dengan fitur Perekaman Layar di tab Insert, Anda dapat membuat video dari apa pun yang Anda lakukan di komputer dan menyisipkannya ke dalam slide.</p>
            <div class="centerImage"><img loading="lazy" class="imageBorder" alt="Tombol Perekaman Layar di tab Insert" src="https://media.gcflearnfree.org/content/56cc70b6a17fa60ae065f89e_02_23_2016/videos_screen_recording.png"></div>
            <h4>Untuk menyisipkan video online:</h4>
            <p>Beberapa situs web&#x2014;seperti YouTube&#x2014;memungkinkan Anda untuk <strong>embed</strong> video ke dalam slide Anda. Video yang di-embed masih akan dihosting di situs web aslinya, yang berarti video itu sendiri tidak akan ditambahkan ke file Anda. Embedding dapat menjadi cara yang praktis untuk mengurangi ukuran file presentasi Anda, tetapi Anda juga perlu terhubung ke Internet agar video dapat diputar.</p>
            <div class="centerImage"><img loading="lazy" class="imageBorder" alt="Menyisipkan video online" src="https://media.gcflearnfree.org/content/56cc70b6a17fa60ae065f89e_02_23_2016/videos_insert_online.png"></div>
            
            <h3>Bekerja dengan video</h3>
            <h4>Untuk mempratinjau video:</h4>
            <ol class="numbered-list"><li>Klik video untuk memilihnya.</li><li>Klik tombol <strong>Play/Pause</strong> di bawah video. Video akan mulai diputar, dan <strong>timeline</strong> di sebelah tombol Play/Pause akan maju.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Tombol Play/Pause dan timeline" src="https://media.gcflearnfree.org/content/56cc70b6a17fa60ae065f89e_02_23_2016/videos_working_preview.jpg"></div></li><li>Untuk melompat ke bagian lain dari video, klik di mana saja pada <strong>timeline</strong>.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Melompat ke depan di timeline" src="https://media.gcflearnfree.org/content/56cc70b6a17fa60ae065f89e_02_23_2016/videos_working_timeline.jpg"></div></li></ol>
            <h4>Untuk mengubah ukuran video:</h4>
            <ul><li>Klik dan seret <strong>handle sudut</strong> sampai video mencapai ukuran yang diinginkan.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Mengubah ukuran video" src="https://media.gcflearnfree.org/content/56cc70b6a17fa60ae065f89e_02_23_2016/videos_working_resize.jpg"></div></li></ul>
            <p class="moreInfo">Handle sudut akan mengubah ukuran video sambil mempertahankan <strong>rasio aspek asli</strong>. Jika Anda menggunakan handle sisi, video akan menjadi <strong>terdistorsi</strong>.</p>
            <h4>Untuk memindahkan video:</h4>
            <ul><li>Klik dan seret untuk <strong>memindahkan</strong> video ke lokasi baru di slide.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Memindahkan video" src="https://media.gcflearnfree.org/content/56cc70b6a17fa60ae065f89e_02_23_2016/videos_working_move.jpg"></div></li></ul>
            <h4>Untuk menghapus video:</h4>
            <ul><li>Pilih video yang ingin Anda hapus, lalu tekan tombol <strong>Backspace</strong> atau <strong>Delete</strong> pada keyboard Anda.</li></ul>
            
            <h3>Mengedit dan memformat video</h3>
            <p>Tab <strong>Playback</strong> memiliki beberapa opsi yang dapat Anda gunakan untuk <strong>mengedit</strong> video Anda. Misalnya, Anda dapat <strong>memotong</strong> video untuk memutar cuplikan dari aslinya, menambahkan <strong>fade in</strong> dan <strong>fade out</strong>, dan menambahkan <strong>bookmark</strong> yang memungkinkan Anda melompat ke titik tertentu dalam video.</p>
            <p class="attention">Sebagian besar fitur di tab Playback hanya dapat digunakan dengan video yang disisipkan <strong>dari file</strong>. Fitur tersebut tidak akan berfungsi dengan video yang di-embed.</p>
            <h4 class="clearfl">Untuk memotong video:</h4>
            <ol class="numbered-list"><li>Pilih video, lalu klik tab <strong>Playback</strong> pada Ribbon.</li><li>Klik perintah <strong>Trim Video</strong>.<div class="centerImage"><img loading="lazy" style="width: 701px; height: 137px;" class="imageBorder" alt="Mengklik perintah Trim Video" src="https://media.gcflearnfree.org/content/56cc70b6a17fa60ae065f89e_02_23_2016/videos_trim_ribbon.png" width="701" height="137"></div></li><li>Kotak dialog akan muncul. Gunakan <strong>handle hijau</strong> untuk mengatur <strong>waktu mulai</strong> dan <strong>handle merah</strong> untuk mengatur <strong>waktu selesai</strong>.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Mengatur waktu mulai dan selesai" src="https://media.gcflearnfree.org/content/56cc70b6a17fa60ae065f89e_02_23_2016/videos_trim_dialog.jpg"></div></li><li>Untuk mempratinjau video, klik tombol <strong>Play</strong>.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Mengklik tombol Play untuk mempratinjau perubahan" src="https://media.gcflearn
            
            free.org/content/56cc70b6a17fa60ae065f89e_02_23_2016/videos_trim_preview.jpg"></div></li><li>Ketika Anda sudah puas dengan perubahan yang Anda buat, klik <strong>OK</strong>.</li></ol>
            <h4>Untuk menambahkan fade in dan fade out:</h4>
            <ol class="numbered-list"><li>Pilih video, lalu klik tab <strong>Playback</strong>.</li><li>Di grup <strong>Fade Duration</strong>, masukkan waktu yang diinginkan untuk <strong>Fade In</strong> dan <strong>Fade Out</strong>. Dalam contoh kami, kami akan menambahkan fade in dengan durasi 2 detik.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Menambahkan fade in dan fade out" src="https://media.gcflearnfree.org/content/56cc70b6a17fa60ae065f89e_02_23_2016/videos_fade.png"></div></li></ol>
            <h4>Untuk menambahkan bookmark:</h4>
            <ol class="numbered-list"><li>Pilih video, lalu klik tab <strong>Playback</strong>.</li><li>Gunakan timeline untuk menemukan bagian yang diinginkan dari video Anda.</li><li>Klik perintah <strong>Add Bookmark</strong>.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Menambahkan bookmark" src="https://media.gcflearnfree.org/content/56cc70b6a17fa60ae065f89e_02_23_2016/videos_bookmark.png"></div></li><li>Bookmark akan muncul di timeline. Klik bookmark untuk melompat ke lokasi itu.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Melompat ke bookmark" src="https://media.gcflearnfree.org/content/56cc70b6a17fa60ae065f89e_02_23_2016/videos_bookmark_icon.png"></div></li></ol>
            
            <h3>Opsi pemutaran video</h3>
            <p>PowerPoint menyediakan berbagai opsi untuk mengontrol bagaimana video Anda diputar selama presentasi. Opsi-opsi ini ditemukan di tab <strong>Playback</strong>.</p>
            <h4>Untuk memulai video secara otomatis atau saat diklik:</h4>
            <p>Secara default, video diputar <strong>On Click</strong>, yang berarti video hanya akan diputar saat diklik. Namun, jika Anda lebih suka video dimulai secara otomatis, ini adalah pengaturan yang mudah untuk diubah.</p>
            <ol class="numbered-list"><li>Pilih video yang diinginkan, lalu klik tab <strong>Playback</strong> di Ribbon.</li><li>Di grup <strong>Video Options</strong>, klik drop-down <strong>Start</strong>.</li><li>Pilih <strong>Automatically</strong> atau <strong>When Clicked</strong>.<div class="centerImage"><img loading="lazy" class="imageBorder" alt="Mengubah pengaturan video ke otomatis atau saat diklik" src="https://media.gcflearnfree.org/content/56cc70b6a17fa60ae065f89e_02_23_2016/videos_autoplay.png"></div></li></ol>
            <p>Untuk membuat video Anda lebih menarik secara visual, Anda dapat menambahkan <strong>animasi</strong> atau <strong>transisi</strong> ke dalam slide. Opsi-opsi ini memungkinkan Anda untuk mengontrol kapan dan bagaimana video muncul dan menghilang dari layar.</p>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Tabel dan Grafik',
            'course_id' => '53',
            'desc' => '<h3>Pendahuluan Tabel</h3>
            <p><strong>Tabel</strong> adalah alat lain yang dapat Anda gunakan untuk menampilkan informasi di PowerPoint. Tabel adalah kisi sel yang diatur dalam <strong>baris</strong> dan <strong>kolom</strong>. Tabel berguna untuk berbagai tugas, termasuk menyajikan informasi teks dan data numerik. Anda bahkan dapat <strong>menyesuaikan</strong> tabel agar sesuai dengan presentasi Anda.</p>
            <p class="moreInfo">Opsional: Unduh <a href="https://media.gcflearnfree.org/content/56e1a9c76aa915221cb48d18_03_10_2016/powerpoint2016_tables_practice.pptx">presentasi latihan</a> kami.</p>
            <p class="chevron">Tonton video di bawah ini untuk mempelajari lebih lanjut tentang menyisipkan tabel di PowerPoint.<br></p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/LX8cxAHvnlg?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h4 class="clearfl">Untuk menyisipkan tabel:</h4>
            <ol class="numbered-list"><li>Dari tab <strong>Insert</strong>, klik perintah <strong>Table</strong>.</li><li>Arahkan mouse ke grid kotak untuk memilih jumlah <strong>kolom</strong> dan <strong>baris</strong> yang diinginkan dalam tabel. Dalam contoh kami, kami akan menyisipkan tabel dengan <strong>enam baris</strong> dan <strong>enam kolom</strong> (6x6).<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="menyisipkan tabel" src="https://media.gcflearnfree.org/content/56e1a9c76aa915221cb48d18_03_10_2016/table_insert_command.png"></div></li><li>Tabel akan muncul pada slide yang saat ini dipilih. Dalam contoh kami, itu adalah slide 3. </li><li>Klik di mana saja dalam tabel, dan mulai mengetik untuk menambahkan teks. Anda juga dapat menggunakan tombol <strong>Tab</strong> atau <strong>tombol panah</strong> di keyboard Anda untuk menavigasi melalui tabel.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e1a9c76aa915221cb48d18_03_10_2016/table_insert_done.jpg" alt="menambahkan teks ke tabel baru"></div></li></ol>
            <p class="moreInfo">Anda juga dapat menyisipkan tabel dengan mengklik perintah <strong>Insert Table</strong> dalam <strong>placeholder</strong>.</p>
            <div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="menyisipkan tabel dari placeholder" src="https://media.gcflearnfree.org/content/56e1a9c76aa915221cb48d18_03_10_2016/table_insert_placeholder.jpg"></div>
            <h3>Memodifikasi tabel</h3>
            <p> PowerPoint mencakup beberapa opsi untuk menyesuaikan tabel, termasuk <strong>memindahkan</strong> dan <strong>mengubah ukuran</strong>, serta <strong>menambahkan baris</strong> dan <strong>kolom</strong>.<strong></strong></p>
            <h4 class="clearfl">Untuk memindahkan tabel:</h4>
            <ul><li>Klik dan seret <strong>tepi</strong> tabel untuk <strong>memindahkannya</strong> ke lokasi baru pada slide.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="memindahkan tabel" src="https://media.gcflearnfree.org/content/56e1a9c76aa915221cb48d18_03_10_2016/table_move.jpg"></div></li></ul>
            <h4></h4>
            <h4>Untuk mengubah ukuran tabel:</h4>
            <ul><li>Klik dan seret <strong>handle ukuran</strong> hingga tabel berukuran yang diinginkan.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="mengubah ukuran tabel" src="https://media.gcflearnfree.org/content/56e1a9c76aa915221cb48d18_03_10_2016/table_resize.jpg"></div></li></ul>
            <h4 class="clearfl">Untuk menambahkan baris atau kolom:</h4>
            <ol class="numbered-list"><li>Klik sel <strong>bersebelahan dengan</strong> lokasi di mana Anda ingin menambahkan baris atau kolom. Dalam contoh kami, kami akan memilih sel yang bertuliskan <strong>Mystery</strong>.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="memilih sel" src="https://media.gcflearnfree.org/content/56e1a9c76aa915221cb48d18_03_10_2016/table_column_select.png"></div></li><li>Klik tab <strong>Layout</strong> di sisi kanan Ribbon.</li><li>Temukan grup <strong>Rows &amp; Columns</strong>. Jika Anda ingin menyisipkan <strong>baris</strong> baru, pilih <strong>Insert Above</strong> atau <strong>Insert Below</strong>. Jika Anda ingin menyisipkan <strong>kolom</strong> baru, pilih <strong>Insert Left</strong> atau <strong>Insert Right</strong>.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="menyisipkan baris" src="https://media.gcflearnfree.org/content/56e1a9c76aa915221cb48d18_03_10_2016/table_column_insert.png"></div></li><li>Baris atau kolom baru akan muncul.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="baris yang baru disisipkan" src="https://media.gcflearnfree.org/content/56e1a9c76aa915221cb48d18_03_10_2016/table_column_done.png"></div></li></ol>
            <h4 class="clearfl">Untuk menghapus baris atau kolom:</h4>
            <ol class="numbered-list"><li>Pilih baris atau kolom yang diinginkan. Dalam contoh kami, kami akan memilih <strong>baris kosong</strong> di bagian bawah tabel.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="memilih baris kosong" src="https://media.gcflearnfree.org/content/56e1a9c76aa915221cb48d18_03_10_2016/table_row_select.png"></div></li><li>Dari tab <strong>Layout</strong> dalam grup <strong>Rows &amp; Columns</strong>, klik perintah <strong>Delete</strong>, lalu pilih <strong>Delete Rows</strong> atau <strong>Delete Columns</strong> dari menu.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e1a9c76aa915221cb48d18_03_10_2016/table_row_delete.png" alt="menghapus baris"></div></li><li>Baris atau kolom yang dipilih akan dihapus.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e1a9c76aa915221cb48d18_03_10_2016/table_row_done.png" alt="baris yang dihapus"></div></li></ol>
            <p class="moreInfo">Anda juga dapat mengakses perintah <strong>Insert</strong> dan <strong>Delete</strong> dengan mengklik kanan tabel.</p>
            <div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="klik kanan untuk mengakses opsi Insert dan Delete" src="https://media.gcflearnfree.org/content/56e1a9c76aa915221cb48d18_03_10_2016/table_delete_splat.png"></div>
            <h4>Untuk menghapus tabel:</h4>
            <ul><li>Klik tepi tabel yang ingin Anda hapus, lalu tekan tombol <strong>Backspace</strong> atau <strong>Delete</strong> pada keyboard Anda.</li></ul>
            <h3>Memodifikasi tabel dengan tab Layout</h3>
            <p>Ketika Anda memilih tabel, tab <strong>Design</strong> dan <strong>Layout</strong> akan muncul di sisi kanan Ribbon. Anda dapat membuat berbagai perubahan pada tabel menggunakan perintah di tab <strong>Layout</strong>.</p>
            <p class="chevron">Klik tombol dalam interaktif di bawah ini untuk mempelajari tentang perintah berbeda pada tab Layout.</p>
            <div class="centerImage"><div class="ict tooltip"><span class="ict-edit-option">edit hotspots</span><img loading="lazy" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e1a9c76aa915221cb48d18_03_10_2016/table_tools_layout.png" alt="antarmuka PowerPoint 2016"></div></div>
            <ul><li><strong>Select:</strong> Menggunakan perintah ini untuk memilih bagian dari tabel yang Anda inginkan.</li><li><strong>View Gridlines:</strong> Menampilkan garis grid pada tabel yang biasanya tersembunyi.</li><li><strong>Insert Above / Below:</strong> Menyisipkan baris di atas atau di bawah sel yang dipilih.</li><li><strong>Insert Left / Right:</strong> Menyisipkan kolom di kiri atau kanan sel yang dipilih.</li><li><strong>Delete:</strong> Menghapus baris, kolom, atau tabel seluruhnya.</li><li><strong>Merge Cells:</strong> Menggabungkan dua atau lebih sel yang dipilih menjadi satu sel besar.</li><li><strong>Split Cells:</strong> Membagi sel yang dipilih menjadi beberapa sel yang lebih kecil.</li><li><strong>Cell Size:</strong> Menggunakan perintah ini untuk memasukkan ukuran spesifik sel, atau menyesuaikan tinggi baris dan lebar kolom secara manual.</li><li><strong>Distribute Rows / Columns:</strong> Menyesuaikan baris atau kolom yang dipilih menjadi ukuran yang seragam.</li><li><strong>Align Cell Text:</strong> Memilih opsi penyelarasan yang diinginkan untuk teks dalam sel yang dipilih.</li></ul>
            <p><strong>Memodifikasi tabel dengan tab Design</strong></p>
            <p>Anda dapat membuat tabel terlihat unik dengan menerapkan <strong>gaya tabel</strong> dan <strong>border</strong>. PowerPoint mencakup berbagai gaya tabel yang memungkinkan Anda mengubah <strong>warnanya</strong>, <strong>border tabel</strong>, dan <strong>mengisi</strong> dalam tabel.</p>
            <h4>Untuk menerapkan gaya tabel:</h4>
            <ol class="numbered-list"><li>Pilih <strong>sel apa saja</strong> di tabel Anda, lalu klik tab <strong>Design</strong> di sisi kanan Ribbon.</li><li>Temukan grup <strong>Table Styles</strong>, lalu klik panah <strong>More</strong> untuk melihat gaya tabel yang tersedia.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="mengklik panah drop-down More untuk melihat lebih banyak gaya tabel" src="https://media.gcflearnfree.org/content/56e1a9c76aa915221cb48d18_03_10_2016/table_style_more.png"></div></li><li>Pilih gaya yang diinginkan.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="memilih gaya tabel" src="https://media.gcflearnfree.org/content/56e1a9c76aa915221cb48d18_03_10_2016/table_style_select.png"></div></li><li>Gaya tabel yang dipilih akan diterapkan.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="gaya tabel yang diterapkan" src="https://media.gcflearnfree.org/content/56e1a9c76aa915221cb48d18_03_10_2016/table_style_done.jpg"></div></li></ol>
            <h4>Untuk mengubah opsi gaya tabel:</h4>
            <p>Anda dapat mengaktifkan atau menonaktifkan berbagai opsi untuk mengubah tampilan tabel. Ada enam opsi: <strong>Header Row</strong>, <strong>Total Row</strong>, <strong>Banded Rows</strong>, <strong>First Column</strong>, <strong>Last Column</strong>, dan <strong>Banded Columns</strong>.</p>
            <ol class="numbered-list"><li>Pilih <strong>sel apa saja</strong> di tabel Anda.</li><li>Dari tab <strong>Design</strong>, <strong>centang</strong> atau <strong>hapus centang</strong> pada opsi yang diinginkan dalam grup <strong>Table Style Options</strong>.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="menerapkan opsi Gaya Tabel yang berbeda" src="https://media.gcflearnfree.org/content/56e1a9c76aa915221cb48d18_03_10_2016/table_style_options.png"></div></li></ol>
            <p class="moreInfo">Opsi-opsi ini dapat mempengaruhi gaya tabel Anda dengan berbagai cara, tergantung pada jenis konten dalam tabel Anda. Anda mungkin perlu bereksperimen dengan beberapa opsi untuk menemukan gaya yang Anda inginkan.</p>
            <h4>Untuk menambahkan border pada tabel:</h4>
            <p>Anda dapat menambahkan <strong>border</strong> untuk membantu mendefinisikan bagian-bagian yang berbeda dari tabel. Beberapa gaya tabel mungkin sudah menyertakan border secara otomatis, tetapi mudah untuk menambahkannya secara manual atau menyesuaikannya. Anda dapat mengatur <strong>ketebalan</strong>, <strong>warna</strong>, dan <strong>gaya garis</strong> border untuk beberapa atau semua bagian dari tabel.</p>
            <ol class="numbered-list"><li>Pilih sel-sel tempat Anda ingin menambahkan border. Dalam contoh kami, kami akan memilih <strong>setiap sel</strong> dalam tabel kami.</li><li>Dari tab <strong>Design</strong>, pilih <strong>Line Style</strong>, <strong>Line Weight</strong>, dan <strong>Pen Color</strong> yang diinginkan.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="menyesuaikan gaya border" src="https://media.gcflearnfree.org/content/56e1a9c76aa915221cb48d18_03_10_2016/table_border_customize.png"></div></li><li>Klik panah drop-down <strong>Borders</strong>, lalu pilih jenis <strong>border</strong> yang diinginkan.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="menerapkan border sel" src="https://media.gcflearnfree.org/content/56e1a9c76aa915221cb48d18_03_10_2016/table_border_command.jpg"></div></li><li>Border akan ditambahkan ke sel yang dipilih.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="border yang diterapkan" src="https://media.gcflearnfree.org/content/56e1a9c76aa915221cb48d18_03_10_2016/table_border_done.jpg"></div></li><li>Untuk <strong>menghapus</strong> border, pilih sel yang diinginkan, klik perintah <strong>Borders</strong>, dan pilih <strong>No Border</strong>.</li></ol>
            <h3>Tantangan!</h3>
            <ol class="numbered-list"><li>Buka <a href="https://media.gcflearnfree.org/content/56e1a9c76aa915221cb48d18_03_10_2016/powerpoint2016_tables_practice.pptx">presentasi latihan</a> kami.</li><li>Pada slide terakhir, <strong>sisipkan tabel</strong> dengan 5 kolom dan 3 baris.</li><li>Pada baris pertama, ketik nama bulan dari Januari hingga Mei. Pada baris kedua dan ketiga, ketik jumlah penjualan pilihan Anda (misalnya, $1329).</li><li>Ubah <strong>gaya</strong> tabel.</li><li><strong>Sisipkan</strong> kolom di sisi kiri tabel.</li><li>Pada <strong>baris kedua</strong> kolom baru, ketik <strong>North Region</strong>. Pada <strong>baris ketiga</strong>, ketik <strong>South Region</strong>.<strong></strong></li><li><strong>Hapus</strong> kolom terakhir.</li><li><strong>Ubah ukuran</strong> tabel sehingga mengambil sebagian besar slide.</li><li><strong>Pusatkan</strong> teks Anda secara horizontal dan vertikal.</li><li>Ketika Anda selesai, slide Anda harus terlihat seperti ini (gaya dan warna tabel dapat bervariasi):<div class="centerImage"><img loading="lazy" style="width: 751px; height: 422px;" longdesc="" class="imageBorder" alt="Tantangan Tabel" src="https://media.gcflearnfree.org/content/56e1a9c76aa915221cb48d18_03_10_2016/tables_edited.jpg" width="751" height="422"></div><div class="centerImage"></div></li></ol>
           
            <h3>Pendahuluan Grafik</h3>
            <p>Sebuah <strong>grafik</strong> adalah alat yang dapat Anda gunakan untuk <strong>mengomunikasikan data secara grafis</strong>. Menyertakan grafik dalam presentasi memungkinkan audiens Anda melihat <strong>arti di balik angka-angka</strong>, yang membuatnya mudah untuk memvisualisasikan <strong>perbandingan</strong> dan <strong>tren</strong>.</p>
            <p class="moreInfo">Opsional: Unduh <a href="https://media.gcflearnfree.org/content/56e1ae226aa915221cb48d1a_03_10_2016/powerpoint2016_charts_practice.pptx">presentasi latihan</a> kami untuk pelajaran ini.</p>
            <p class="chevron">Tonton video di bawah ini untuk mempelajari lebih lanjut tentang menggunakan grafik di PowerPoint.<br></p>
            <div class="video-embed">
                <iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/zrD4FhKt7Qg?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"></iframe>
            </div>

            <h4 class="clearfl">Jenis-jenis grafik</h4>
            <p>PowerPoint memiliki beberapa jenis grafik, memungkinkan Anda memilih yang paling sesuai dengan data Anda. Untuk menggunakan grafik secara efektif, Anda perlu memahami bagaimana berbagai grafik digunakan.</p>
            <p class="chevron">Klik panah di slideshow di bawah ini untuk mempelajari lebih lanjut tentang jenis-jenis grafik di PowerPoint.</p>
            <ul class="slideshowlist">
                <li>
                    <img loading="lazy" src="https://media.gcflearnfree.org/ctassets/topics/234/chart_type_1.png" alt="Slide 1" width="768" height="432">
                    <p>PowerPoint memiliki berbagai jenis grafik, masing-masing dengan keunggulannya sendiri. Klik panah untuk melihat beberapa jenis grafik yang tersedia di PowerPoint.</p>
                </li>
                <li>
                    <img loading="lazy" src="https://media.gcflearnfree.org/ctassets/topics/234/chart_type_2.png" alt="Slide 2" width="768" height="432">
                    <p>Grafik kolom menggunakan batang vertikal untuk mewakili data. Mereka dapat bekerja dengan baik untuk menunjukkan perubahan data selama periode waktu tertentu, atau untuk menggambarkan perbandingan antar item.</p>
                </li>
                <li>
                    <img loading="lazy" src="https://media.gcflearnfree.org/ctassets/topics/234/chart_type_3.png" alt="Slide 3" width="768" height="432">
                    <p>Grafik garis sangat cocok untuk menunjukkan tren. Titik data terhubung dengan garis, membuatnya mudah untuk melihat apakah nilai meningkat atau menurun selama periode waktu tertentu.</p>
                </li>
                <li>
                    <img loading="lazy" src="https://media.gcflearnfree.org/ctassets/topics/234/chart_type_4.png" alt="Slide 4" width="768" height="432">
                    <p>Grafik lingkaran (pie chart) memungkinkan Anda menunjukkan proporsi. Setiap nilai ditampilkan sebagai bagian dari keseluruhan (seperti sepotong kue), yang membuatnya mudah untuk melihat elemen mana yang paling banyak menyumbang pada data.</p>
                </li>
                <li>
                    <img loading="lazy" src="https://media.gcflearnfree.org/ctassets/topics/234/chart_type_5.png" alt="Slide 5" width="768" height="432">
                    <p>Grafik batang menggunakan batang horizontal. Ini berguna untuk membandingkan beberapa nilai sekaligus, memungkinkan Anda untuk segera melihat item mana yang memiliki nilai lebih tinggi atau lebih rendah.</p>
                </li>
                <li>
                    <img loading="lazy" src="https://media.gcflearnfree.org/ctassets/topics/234/chart_type_6.png" alt="Slide 6" width="768" height="432">
                    <p>Grafik area mirip dengan grafik garis, tetapi area di bawah garis diisi. Ini dapat membantu menunjukkan volume total, seperti total penjualan dari waktu ke waktu.</p>
                </li>
            </ul>

            <h4>Memasukkan grafik</h4>
            <p>PowerPoint memudahkan untuk memasukkan grafik ke dalam presentasi Anda. Untuk memasukkan grafik:</p>
            <ol>
                <li>Pilih tab <strong>Sisipkan</strong>, lalu klik <strong>Perintah Grafik</strong> di grup Ilustrasi.</li>
                <li>Dialog <strong>Sisipkan Grafik</strong> akan muncul. Pilih kategori dari panel kiri, pilih jenis grafik, lalu klik <strong>OK</strong>.</li>
                <li>Sebuah lembar kerja akan muncul. Masukkan data Anda ke dalam lembar kerja.</li>
                <li>Hanya data yang diatur dalam kotak biru akan muncul di grafik. Jika perlu, klik dan seret sudut biru untuk menyesuaikan data yang akan disertakan.</li>
            </ol>

            <h4>Memodifikasi grafik</h4>
            <p>Setelah memasukkan grafik, mudah untuk mengubah data yang muncul di dalamnya. Cukup klik grafik, lalu edit data di lembar kerja.</p>

            <h4>Untuk mengubah tata letak grafik:</h4>
            <p>Tata letak grafik yang sudah ditentukan memungkinkan Anda untuk mengubah elemen-elemen grafik—termasuk <strong>judul grafik</strong>, <strong>legenda</strong>, dan <strong>label data</strong>—untuk membuat grafik Anda lebih mudah dibaca.</p>
            <ol class="numbered-list">
                <li>Pilih <strong>grafik</strong> yang ingin Anda ubah. Tab <strong>Desain</strong> akan muncul.</li>
                <li>Dari tab <strong>Desain</strong>, klik perintah <strong>Quick Layout</strong>.<div class="centerImage">
                    <img loading="lazy" style="width: 798px; height: 148px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e1ae226aa915221cb48d1a_03_10_2016/charts_quick_layout_command.png" width="798" height="148">
                </div></li>
                <li>Pilih tata letak yang diinginkan dari menu yang muncul.<div class="centerImage">
                    <img loading="lazy" style="width: 251px; height: 403px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e1ae226aa915221cb48d1a_03_10_2016/charts_quick_layout_menu.png" width="251" height="403">
                </div></li>
                <li>Grafik akan diperbarui sesuai dengan tata letak baru.<div class="centerImage">
                    <img loading="lazy" style="width: 759px; height: 345px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e1ae226aa915221cb48d1a_03_10_2016/charts_new_layout.jpg" width="759" height="345">
                </div></li>
            </ol>
            <p class="moreInfo">Untuk mengubah elemen grafik (seperti judul grafik), klik elemen tersebut dan mulai mengetik.</p>
            <div class="centerImage">
                <img loading="lazy" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e1ae226aa915221cb48d1a_03_10_2016/charts_title_edit.png">
            </div>

            <h4>Untuk mengubah gaya grafik:</h4>
            <p><strong>Gaya grafik</strong> memungkinkan Anda untuk dengan cepat mengubah tampilan dan nuansa grafik Anda.</p>
            <ol class="numbered-list">
                <li>Pilih <strong>grafik</strong> yang ingin Anda ubah. Tab <strong>Desain</strong> akan muncul.</li>
                <li>Dari tab <strong>Desain</strong>, klik panah drop-down <strong>More</strong> di grup <strong>Chart Styles</strong>.<div class="centerImage">
                    <img loading="lazy" style="width: 626px; height: 151px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e1ae226aa915221cb48d1a_03_10_2016/charts_styles_dropdown.png" width="626" height="151">
                </div></li>
                <li>Pilih gaya yang diinginkan dari menu yang muncul.<div class="centerImage">
                    <img loading="lazy" style="width: 619px; height: 359px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e1ae226aa915221cb48d1a_03_10_2016/charts_styles_menu.png" width="619" height="359">
                </div></li>
                <li>Grafik akan muncul dalam gaya yang dipilih.<div class="centerImage">
                    <img loading="lazy" style="width: 757px; height: 349px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e1ae226aa915221cb48d1a_03_10_2016/charts_new_style.jpg" width="757" height="349">
                </div></li>
            </ol>
            <p class="moreInfo">Anda juga dapat menggunakan tombol pintas pemformatan grafik untuk dengan cepat <strong>menambahkan elemen grafik</strong>, mengubah <strong>gaya grafik</strong>, dan <strong>memfilter</strong> data grafik.</p>
            <div class="centerImage">
                <img loading="lazy" style="width: 839px; height: 355px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e1ae226aa915221cb48d1a_03_10_2016/charts_elements_button.jpg" width="839" height="355">
            </div>

            <h3>Tantangan!</h3>
            <ol class="numbered-list">
                <li>Buka <a href="https://media.gcflearnfree.org/content/56e1ae226aa915221cb48d1a_03_10_2016/powerpoint2016_charts_practice.pptx">presentasi latihan</a> kami. Anda juga perlu mengunduh <a href="https://media.gcflearnfree.org/content/56e1ae226aa915221cb48d1a_03_10_2016/powerpoint2016_charts_practice_data.xlsx">buku kerja latihan</a> kami.</li>
                <li>Pada slide terakhir, sisipkan grafik <strong>garis</strong>.</li>
                <li>Buka <strong>buku kerja latihan</strong> kami di Excel. Salin data dan tempelkan ke dalam spreadsheet grafik.</li>
                <li><strong>Hapus</strong> <strong>judul grafik</strong>.</li>
                <li>Ubah <strong>jenis grafik</strong> menjadi <strong>Kolom Bertumpuk</strong>.</li>
                <li>Gunakan menu drop-down <strong>Quick Layout</strong> untuk mengubah ke <strong>Tata Letak 10</strong>.</li>
                <li>Klik tombol pintas <strong>Elemen Grafik</strong>, klik panah di samping <strong>Judul Sumbu</strong>, dan pilih judul sumbu <strong>Vertikal Utama</strong>.</li>
                <li>Ganda klik judul sumbu, lalu ganti namanya menjadi <strong>Laba Penjualan</strong>.</li>
                <li><strong>Tukar</strong> data <strong>Baris/Kolom</strong>.</li>
                <li>Setelah selesai, slide Anda akan terlihat seperti ini:<div class="centerImage">
                    <img loading="lazy" style="width: 751px; height: 422px;" longdesc="" class="imageBorder" alt="Chart Challenge" src="https://media.gcflearnfree.org/content/56e1ae226aa915221cb48d1a_03_10_2016/charts_edited.jpg" width="751" height="422">
                </div></li>
            </ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Memeriksa Ejaan dan Tata Bahasa',
            'course_id' => '54',
            'desc' => '
            <h3>Pengenalan</h3>
            <p>Khawatir membuat kesalahan saat mengetik? Jangan khawatir. PowerPoint menyediakan beberapa <strong>fitur pemeriksaan</strong>&#x2014;termasuk alat <strong>Ejaan dan Tata Bahasa</strong>&#x2014;yang dapat membantu Anda menghasilkan presentasi yang profesional dan bebas dari kesalahan.</p>
            <p class="moreInfo">Opsional: Unduh <a href="https://media.gcflearnfree.org/content/56e6b9acc87fa60f2092502c_03_14_2016/powerpoint2016_spellinggrammar_practice.pptx">presentasi latihan</a> kami.</p>
            <p class="chevron">Tonton video di bawah ini untuk mempelajari cara menggunakan alat Ejaan dan Tata Bahasa.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/shZEeHwWbpE?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h4 class="clearfl">Untuk menjalankan pemeriksaan ejaan:</h4>
            <ol class="numbered-list">
                <li>Dari tab <strong>Review</strong>, klik perintah <strong>Spelling</strong>.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="memilih perintah Ejaan pada tab Review" src="https://media.gcflearnfree.org/content/56e6b9acc87fa60f2092502c_03_14_2016/spell_command.png"></div></li>
                <li>Panel <strong>Spelling</strong> akan muncul di sebelah kanan. Untuk setiap kesalahan dalam presentasi Anda, PowerPoint akan mencoba memberikan satu atau lebih <strong>saran</strong>. Anda dapat memilih saran dan mengklik <strong>Change</strong> untuk memperbaiki kesalahan tersebut.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="memperbaiki kesalahan ejaan" src="https://media.gcflearnfree.org/content/56e6b9acc87fa60f2092502c_03_14_2016/spell_check_change.png"></div></li>
                <li>PowerPoint akan bergerak melalui setiap kesalahan sampai Anda meninjau semuanya. Setelah kesalahan terakhir ditinjau, sebuah kotak dialog akan muncul mengonfirmasi bahwa pemeriksaan ejaan telah selesai. Klik <strong>OK</strong>.<div><div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="menyelesaikan pemeriksaan ejaan" src="https://media.gcflearnfree.org/content/56e6b9acc87fa60f2092502c_03_14_2016/spell_done.png"></div></div></li>
            </ol>
            <p class="moreInfo">Jika tidak ada saran yang diberikan, Anda dapat mengetik ejaan yang benar secara manual di slide.</p>
            
            <h3>Mengabaikan "kesalahan" ejaan</h3>
            <p>Pemeriksaan ejaan <strong>tidak selalu benar</strong>. Terkadang alat ini mungkin menganggap sebuah kata salah eja padahal sebenarnya tidak. Hal ini sering terjadi pada nama orang dan kata benda khusus, yang mungkin tidak ada di kamus. Jika PowerPoint mengatakan ada kesalahan, Anda dapat memilih <strong>tidak</strong> mengubahnya dengan salah satu dari tiga opsi berikut:</p>
            <ul>
                <li><strong>Ignore</strong>: Ini akan melewati kata tersebut tanpa mengubahnya.</li>
                <li><strong>Ignore All</strong>: Ini akan melewati kata tersebut tanpa mengubahnya, dan juga akan melewati semua kejadian lain dari kata tersebut di presentasi Anda.</li>
                <li><strong>Add</strong>: Ini menambahkan kata tersebut ke kamus sehingga tidak akan muncul lagi sebagai kesalahan. Pastikan kata tersebut dieja dengan benar sebelum memilih opsi ini.</li>
            </ul>
            <div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="abaikan, abaikan semua, dan tambahkan ke kamus" src="https://media.gcflearnfree.org/content/56e6b9acc87fa60f2092502c_03_14_2016/spell_ignore.png"></div>
            
            <h3>Pemeriksaan ejaan otomatis</h3>
            <p>Secara default, PowerPoint <strong>secara otomatis</strong> memeriksa presentasi Anda untuk kesalahan ejaan, sehingga Anda mungkin tidak perlu menjalankan pemeriksaan terpisah menggunakan perintah Spelling. Kesalahan ini ditandai dengan <strong>garis bergelombang merah</strong>.</p>
            <h4>Untuk menggunakan fitur pemeriksaan ejaan otomatis:</h4>
            <ol class="numbered-list">
                <li>Klik kanan pada <strong>kata yang digarisbawahi</strong>. Sebuah menu akan muncul.</li>
                <li>Klik <strong>ejaan yang benar</strong> dari daftar <strong>saran</strong>.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="memperbaiki kesalahan ejaan dengan mengklik kanan" src="https://media.gcflearnfree.org/content/56e6b9acc87fa60f2092502c_03_14_2016/spell_right_click.jpg"></div></li>
                <li>Koreksi akan muncul di presentasi.</li>
            </ol>
            <p class="moreInfo">Anda juga dapat memilih untuk <strong>Ignore</strong> kata yang digarisbawahi atau <strong>Add to Dictionary</strong>.</p>
            
            <h3>Memodifikasi opsi pemeriksaan</h3>
            <p>PowerPoint memungkinkan Anda memodifikasi opsi pemeriksaan, memberikan Anda lebih banyak kontrol atas cara PowerPoint meninjau teks Anda. Misalnya, Anda dapat menyesuaikan <strong>pemeriksaan ejaan otomatis</strong> untuk mengubah cara PowerPoint menandai kesalahan ejaan. Anda juga dapat mengaktifkan opsi <strong>pemeriksaan tata bahasa</strong> untuk membantu Anda menemukan dan memperbaiki <strong>kesalahan ejaan kontekstual</strong> (seperti <strong>their</strong> vs. <strong>they&apos;re</strong>).</p>
            <h4>Untuk memodifikasi opsi pemeriksaan:</h4>
            <ol class="numbered-list">
                <li>Klik tab <strong>File</strong> untuk mengakses <strong>Tampilan Backstage</strong>.<div><div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="mengklik tab File" src="https://media.gcflearnfree.org/content/56e6b9acc87fa60f2092502c_03_14_2016/create_new_ribbon.png"></div></div></li>
                <li>Pilih <strong>Options</strong>. Sebuah kotak dialog akan muncul.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="mengklik Options di Tampilan Backstage" src="https://media.gcflearnfree.org/content/56e6b9acc87fa60f2092502c_03_14_2016/spell_detault_options.png"></div></li>
                <li>Pilih <strong>Proofing</strong>, lalu sesuaikan opsi sesuai kebutuhan. Setelah selesai, klik <strong>OK</strong>.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="memodifikasi opsi pemeriksaan di kotak dialog Options" src="https://media.gcflearnfree.org/content/56e6b9acc87fa60f2092502c_03_14_2016/spell_default_dialog.png"></div></li>
            </ol>
            <p class="attention">Memodifikasi pengaturan di <strong>PowerPoint Options</strong>&#x2014;termasuk pemeriksaan&#x2014;<strong></strong>akan mempengaruhi<strong> presentasi apa pun </strong>yang Anda edit di PowerPoint<strong></strong>, bukan hanya presentasi Anda saat ini.</p>
            
            <h3>Tantangan!</h3>
            <ol class="numbered-list">
                <li>Buka <a href="https://media.gcflearnfree.org/content/56e6b9acc87fa60f2092502c_03_14_2016/powerpoint2016_spellinggrammar_practice.pptx">presentasi latihan</a> kami. Jika Anda sudah mengunduh presentasi latihan untuk mengikuti pelajaran, pastikan untuk mengunduh salinan baru.</li>
                <li>Jalankan pemeriksaan <strong>Ejaan dan Tata Bahasa</strong>.</li>
                <li><strong>Abaikan</strong> ejaan <strong>candygrams</strong> pada slide 7 dan nama toko roti pada slide terakhir.</li>
                <li>Perbaiki <strong>semua</strong> kesalahan ejaan dan tata bahasa lainnya.</li>
            </ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Meninjau Presentasi',
            'course_id' => '55',
            'desc' => '<h3>Pendahuluan</h3>
            <p>Sebelum menyampaikan presentasi Anda, Anda mungkin meminta seseorang untuk meninjaunya dan memberikan masukan tentang slide Anda. Anda bahkan mungkin bekerja dengan seorang kolaborator untuk membuat presentasi bersama. Jika Anda merevisi salinan cetak, Anda dapat menambahkan <strong>komentar</strong> di margin atau <strong>membandingkan</strong> draf kasar dan final Anda berdampingan. Anda dapat melakukan hal-hal ini di PowerPoint menggunakan fitur <strong>Komentar</strong> dan <strong>Bandingkan</strong>.</p>
            <p class="moreInfo">Opsional: Unduh <a href="https://media.gcflearnfree.org/content/56e09f5e6aa9151abc732092_03_09_2016/powerpoint2016_reviewing_practice.pptx">presentasi latihan</a> kami.</p>
            <p class="chevron">Tonton video di bawah ini untuk mempelajari lebih lanjut tentang fitur peninjauan PowerPoint.<br></p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/tiwNS31Z5iE?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h3>Memberi Komentar pada Presentasi</h3>
            <p>Saat merevisi atau berkolaborasi pada presentasi, Anda mungkin ingin membuat catatan atau saran tanpa benar-benar mengubah slide. Meninggalkan <strong>komentar</strong> memungkinkan Anda mencatat sesuatu tanpa mengubah slide itu sendiri. Komentar dapat ditambahkan dan dibaca oleh penulis asli atau pengulas lainnya.</p>
            <h4>Untuk menambahkan komentar:</h4>
            <ol class="numbered-list"><li>Pilih <strong>teks atau objek</strong> (atau klik area <strong></strong>slide) tempat Anda ingin komentar muncul.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="memilih objek pada slide" src="https://media.gcflearnfree.org/content/56e09f5e6aa9151abc732092_03_09_2016/review_comment_start.png"></div></li><li>Buka tab <strong>Review</strong>, lalu klik perintah <strong>New Comment</strong>.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="mengklik perintah komentar baru" src="https://media.gcflearnfree.org/content/56e09f5e6aa9151abc732092_03_09_2016/review_comment_command.png"></div></li><li>Panel <strong>Comments</strong> akan muncul. Dalam contoh kami, panel tersebut berisi komentar yang ada dari pengulas lain (<strong>Javier</strong>), serta ruang untuk komentar Anda.</li><li>Ketik komentar Anda di dalam <strong>kotak</strong>, lalu tekan <strong>Enter</strong> atau klik di mana saja di luar kotak untuk menyimpan komentar.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="menambahkan komentar" src="https://media.gcflearnfree.org/content/56e09f5e6aa9151abc732092_03_09_2016/review_comment_added.png"></div></li><li>Komentar akan diwakili oleh <strong>ikon</strong> kecil di slide.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="ikon komentar di slide" src="https://media.gcflearnfree.org/content/56e09f5e6aa9151abc732092_03_09_2016/review_comment_onslide.png"></div></li></ol>
            <h4>Melihat komentar</h4>
            <p>Anda dapat melihat atau membalas komentar apa pun, termasuk komentar pengulas lainnya, dengan kembali ke panel <strong>Comments</strong>. Cukup klik <strong>ikon komentar</strong> di slide, atau klik perintah <strong>Show Comments</strong> di tab <strong>Review</strong>.</p>
            <div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="menampilkan komentar" src="https://media.gcflearnfree.org/content/56e09f5e6aa9151abc732092_03_09_2016/review_comments_show.png"></div>
            <h4>Untuk mengedit komentar:</h4>
            <ol class="numbered-list"><li>Di panel <strong>Comments</strong>, pilih komentar yang ingin Anda edit.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="memilih komentar" src="https://media.gcflearnfree.org/content/56e09f5e6aa9151abc732092_03_09_2016/review_comment_edit_select.png"></div></li><li>Ketik perubahan yang diinginkan, lalu tekan <strong>Enter</strong> atau klik di mana saja di luar kotak komentar. Perubahan Anda akan diterapkan.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="mengedit komentar" src="https://media.gcflearnfree.org/content/56e09f5e6aa9151abc732092_03_09_2016/review_comment_edit_done.png"></div></li></ol>
            <h4>Untuk membalas komentar:</h4>
            <ol class="numbered-list"><li>Di panel <strong>Comments</strong>, klik <strong>Reply</strong> di bawah komentar yang ingin Anda tanggapi.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="mengklik opsi Balas" src="https://media.gcflearnfree.org/content/56e09f5e6aa9151abc732092_03_09_2016/review_comment_reply_select.png"></div></li><li>Ketik tanggapan Anda, lalu tekan <strong>Enter</strong> atau klik di mana saja di luar kotak. Komentar Anda akan muncul di bawah komentar asli, dan ikon tambahan akan ditambahkan ke slide.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="membalas komentar" src="https://media.gcflearnfree.org/content/56e09f5e6aa9151abc732092_03_09_2016/review_comment_reply_done.png"></div></li></ol>
            <h4>Menghapus komentar</h4>
            <ul><li>Untuk <strong>menghapus komentar</strong>, pilih komentar yang ingin Anda <strong>hapus</strong>, lalu buka tab <strong>Review</strong> dan klik perintah <strong>Delete</strong>.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="menghapus komentar" src="https://media.gcflearnfree.org/content/56e09f5e6aa9151abc732092_03_09_2016/review_comment_delete.png"></div></li><li>Untuk menghapus <strong>beberapa komentar</strong>, klik <strong>panah drop-down</strong> di bawah perintah <strong>Delete</strong>. Anda dapat menghapus komentar dari slide saat ini atau dari seluruh presentasi.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="menghapus beberapa komentar" src="https://media.gcflearnfree.org/content/56e09f5e6aa9151abc732092_03_09_2016/review_comment_delete_all.png"></div></li></ul>
            
            <h3>Membandingkan Presentasi</h3>
            <p>Ada situasi di mana Anda mungkin memiliki <strong>lebih dari satu</strong><strong> versi</strong> dari presentasi yang sama. Misalnya, Anda bisa membuat beberapa draf, atau kolaborator atau rekan kerja bisa menyimpan salinan unik mereka sendiri.</p>
            <p>Anda dapat dengan mudah membandingkan dan menggabungkan beberapa versi menggunakan fitur <strong>Bandingkan</strong> PowerPoint. Ini memungkinkan Anda melihat perbedaan antara dua versi dari presentasi yang sama, sehingga Anda dapat memutuskan perubahan mana yang akan disertakan dalam versi final.</p>
            <h4>Untuk membandingkan dua presentasi:</h4>
            <p>Dalam contoh ini, kita akan membandingkan dua versi presentasi <strong>Internet Safety for Everyone</strong>. Untuk mengikuti, Anda perlu <strong>presentasi latihan asli</strong> (<a href="https://media.gcflearnfree.org/content/56e09f5e6aa9151abc732092_03_09_2016/powerpoint2016_reviewing_practice.pptx">powerpoint2016_reviewing_practice</a>), ditambah versi yang telah <strong>sedikit diubah</strong>: <a href="https://media.gcflearnfree.org/content/56e09f5e6aa9151abc732092_03_09_2016/internet safety - tim&apos;s edits.pptx">internet safety - tim&apos;s edits</a>.</p>
            <ol class="numbered-list"><li>Buka <strong>satu</strong><strong> versi</strong> dari presentasi yang ingin Anda bandingkan. Dalam contoh ini, kita akan memulai dengan <strong>power
            
            point2016_reviewing_practice</strong>.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="membuka presentasi asli" src="https://media.gcflearnfree.org/content/56e09f5e6aa9151abc732092_03_09_2016/review_compare_open.png"></div></li><li>Dari tab <strong>Review</strong>, klik perintah <strong>Compare</strong>.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="mengklik perintah Bandingkan" src="https://media.gcflearnfree.org/content/56e09f5e6aa9151abc732092_03_09_2016/review_compare_command.png"></div></li><li>Dialog kotak akan muncul. Pilih versi kedua dari presentasi yang ingin Anda bandingkan, lalu klik <strong>Merge</strong>. Dalam contoh ini, kita akan memilih <strong>internet safety - tim edits</strong>.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="menggabungkan versi kedua" src="https://media.gcflearnfree.org/content/56e09f5e6aa9151abc732092_03_09_2016/review_compare_merge.png"></div></li><li>Panel <strong>Revisions</strong> akan muncul, menampilkan perubahan dari versi kedua di <strong>Slides</strong>, <strong>Comments</strong>, dan <strong>Details</strong>. Perubahan akan muncul sebagai <strong>highlighted</strong>. Klik ikon <strong>revision icon</strong> untuk melihat detail tentang perubahan tersebut.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="mengedit perubahan" src="https://media.gcflearnfree.org/content/56e09f5e6aa9151abc732092_03_09_2016/review_compare_revisions.png"></div></li><li>Gunakan <strong>tombol</strong> di panel <strong>Revisions</strong> untuk menerima atau menolak perubahan. Jika Anda tidak yakin apakah akan menerima atau menolak perubahan, klik <strong>Next</strong> untuk melanjutkan ke perubahan berikutnya.</li><li>Setelah selesai, tutup panel <strong>Revisions</strong>. Semua perubahan yang diterima akan disimpan ke presentasi Anda.</li></ol>
            <h3>Tantangan!</h3>
            <ol class="numbered-list">
            <li><p>Unduh presentasi latihan <strong>asli</strong> kami (<a href="https://media.gcflearnfree.org/content/56e09f5e6aa9151abc732092_03_09_2016/powerpoint2016_reviewing_practice.pptx">powerpoint2016_reviewing_practice</a>) dan versi yang <strong>sedikit diubah</strong> (<a href="https://media.gcflearnfree.org/content/56e09f5e6aa9151abc732092_03_09_2016/internet safety - tim&apos;s edits.pptx">internet safety - tim edits</a>). Jika Anda sudah mengunduh file latihan kami, pastikan untuk mengunduh salinan baru.</p></li>
            <li>Buka <strong>powerpoint2016_reviewing_practice</strong>. Pada slide 9, <strong>tambahkan komentar</strong> di suatu tempat pada slide yang mengatakan <strong>Haruskah kita memperbesar teks ini?</strong></li>
            <li>Setelah selesai, slide 9 Anda seharusnya terlihat seperti ini:<br><img loading="lazy" style="width: 751px; height: 354px;" class="imageBorder" alt="Reviewing 1" src="https://media.gcflearnfree.org/content/56e09f5e6aa9151abc732092_03_09_2016/reviewing_1.png" width="751" height="354"></li>
            <li>Pada slide terakhir, <strong>hapus</strong> komentar.</li>
            <li>Setelah selesai, slide terakhir Anda seharusnya terlihat seperti ini:<br><div class="centerImage"><img loading="lazy" style="width: 751px; height: 351px;" class="imageBorder" alt="Reviewing Challenge 2" src="https://media.gcflearnfree.org/content/56e09f5e6aa9151abc732092_03_09_2016/reviewing_2.png" width="751" height="351"></div></li>
            <li>Gunakan perintah <strong>Bandingkan</strong> untuk membandingkan versi asli dengan versi yang sedikit diubah (<strong>internet safety - tim edits</strong>).</li>
            <li>Pilih perintah <strong>Terima</strong> dan <strong>Terima Semua Perubahan pada Presentasi</strong>.</li>
            </ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Memodifikasi Tema',
            'course_id' => '56',
            'desc' => '<h3>Pendahuluan</h3>
            <p>Katakanlah Anda sangat menyukai gaya sebuah <strong>tema</strong>, tetapi ingin bereksperimen dengan berbagai <strong>skema warna</strong>. Tidak masalah: Anda dapat mencampur dan mencocokkan <strong>warna</strong>, <strong>font</strong>, dan <strong>efek</strong> untuk menciptakan tampilan unik untuk presentasi Anda. Jika masih tidak terlihat sempurna, Anda dapat <strong>mengustomisasi</strong> tema tersebut sesuai keinginan Anda.</p>
            <p class="moreInfo">Jika Anda baru mengenal PowerPoint, Anda mungkin ingin meninjau pelajaran kami tentang <a href="https://edu.gcfglobal.org/en/powerpoint2016/applying-themes/1/">Menerapkan Tema</a> untuk mempelajari dasar-dasar penggunaan tema. <br></p>
            <p class="moreInfo">Opsional: Unduh <a href="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/powerpoint2016_modifyingthemes_practice.pptx">presentasi latihan</a> kami.</p>
            <p class="chevron">Tonton video untuk mempelajari lebih lanjut tentang memodifikasi tema di PowerPoint.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/UH7Gzjd3rGA?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"></iframe></div>
            <h4>Untuk memilih warna tema baru:</h4>
            <p>Jika Anda tidak menyukai warna dari suatu tema, mudah untuk menerapkan <strong>warna tema baru</strong>; segala sesuatu tentang tema tersebut akan tetap tidak berubah.</p>
            <ol class="numbered-list"><li>Dari tab <strong>Desain</strong>, klik panah drop-down di grup <strong>Varian</strong> dan pilih <strong>Warna</strong>.<div class="centerImage"><img loading="lazy" style="width: 670px; height: 129px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/variants group drop down edit.png" width="670" height="129"></div></li><li>Pilih warna tema yang diinginkan.</li><li>Presentasi akan diperbarui untuk menunjukkan warna tema baru.<div class="centerImage"><img loading="lazy" style="width: 724px; height: 642px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/save theme color edit.png" width="724" height="642"></div></li></ol>
            <h4>Untuk mengustomisasi warna:</h4>
            <p>Terkadang Anda mungkin tidak menyukai setiap warna yang termasuk dalam satu set warna tema. Mudah untuk mengubah beberapa atau semua warna agar sesuai dengan kebutuhan Anda.</p>
            <ol class="numbered-list"><li>Dari tab <strong>Desain</strong>, klik panah drop-down di grup <strong>Varian</strong>.</li><li>Pilih <strong>Warna</strong>, lalu klik <strong>Sesuaikan Warna</strong>.<div class="centerImage"><img loading="lazy" style="width: 276px; height: 189px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/2016-03-03_14-54-06.png" width="276" height="189"></div> </li><li>Sebuah kotak dialog akan muncul dengan <strong>12 warna tema saat ini</strong>. Untuk mengedit warna, klik panah drop-down dan pilih warna yang berbeda. Anda mungkin perlu mengklik <strong>Warna Lainnya</strong> untuk menemukan warna yang tepat.<div class="centerImage"><img loading="lazy" style="width: 487px; height: 496px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/custom color dialog box.png" width="487" height="496"></div></li><li>Di bidang <strong>Nama:</strong>, ketik nama yang diinginkan untuk warna tema, lalu klik <strong>Simpan</strong>.<div class="centerImage"><img loading="lazy" style="width: 492px; height: 501px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/name custom colors.png" width="492" height="501"></div></li><li>Presentasi akan diperbarui untuk menunjukkan warna tema kustom baru.</li></ol>
            <p>Pada beberapa presentasi, Anda mungkin tidak melihat perbedaan yang signifikan saat mengubah warna tema. Misalnya, <strong>latar belakang bertekstur</strong> tidak akan berubah ketika warna tema diubah. Saat mencoba warna tema yang berbeda, sebaiknya pilih slide yang menggunakan beberapa warna untuk melihat bagaimana warna tema baru akan memengaruhi presentasi Anda.</p>
            
            <h4>Untuk memilih font tema baru:</h4>
            <p>Mudah untuk menerapkan satu set <strong>font tema</strong> baru tanpa mengubah tampilan keseluruhan tema. Font tema bawaan dirancang agar cocok satu sama lain, yang dapat membantu menyatukan presentasi Anda.</p>
            <ol class="numbered-list"><li>Dari tab <strong>Desain</strong>, klik panah drop-down di grup <strong>Varian</strong> dan pilih <strong>Font</strong>.<div class="centerImage"><img loading="lazy" style="width: 665px; height: 128px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/modify_variants_dropdown.png" width="665" height="128"></div></li><li>Pilih font tema yang diinginkan.<div class="centerImage"><img loading="lazy" style="width: 686px; height: 575px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/modify_theme_fontsedit.png" width="686" height="575"></div></li><li>Presentasi akan diperbarui untuk menunjukkan font tema baru.</li></ol>
            <h4>Untuk mengustomisasi font tema:</h4>
            <p>Jika Anda memiliki font spesifik dalam pikiran untuk presentasi, mudah untuk memilih font tema Anda sendiri.</p>
            <ol class="numbered-list"><li>Dari tab <strong>Desain</strong>, klik panah drop-down di grup <strong>Varian</strong>.</li><li>Pilih <strong>Font</strong>, lalu klik <strong>Sesuaikan Font</strong>.<div class="centerImage"><img loading="lazy" style="width: 260px; height: 234px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/customize fonts.png" width="260" height="234"></div></li><li>Sebuah kotak dialog akan muncul dengan <strong>dua font tema saat ini</strong>. Untuk mengubah font, klik panah drop-down dan pilih font yang diinginkan.</li><li>Di bidang <strong>Nama</strong>: ketik nama yang diinginkan untuk font tema, lalu klik <strong>Simpan</strong>.<div class="centerImage"><img loading="lazy" style="width: 513px; height: 230px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/name custom fonts.png" width="513" height="230"></div></li><li>Presentasi akan diperbarui untuk menunjukkan font tema kustom baru.</li></ol>
            <p class="moreInfo">Mengubah font tema tidak akan otomatis memperbarui semua teks dalam presentasi Anda. Hanya teks yang menggunakan <strong>font tema saat ini</strong> yang akan diperbarui ketika Anda mengubah font tema.</p>
            <div class="centerImage"><img loading="lazy" style="width: 335px; height: 177px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/current theme fonts.png" width="335" height="177"></div>
            
            <h4>Untuk memilih efek tema baru:</h4>
            <p>PowerPoint membuatnya mudah untuk menerapkan <strong>efek tema baru</strong>, yang dapat dengan cepat mengubah tampilan <strong>bentuk</strong> dalam presentasi Anda.</p>
            <ol class="numbered-list"><li>Dari <strong>tab Desain</strong>, klik panah drop-down di grup <
            
            strong>Varian</strong> dan pilih <strong>Efek</strong>.<div class="centerImage"><img loading="lazy" style="width: 674px; height: 132px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/variants dropdown effects.png" width="674" height="132"></div></li><li>Pilih efek tema yang diinginkan.<div class="centerImage"><img loading="lazy" style="width: 575px; height: 341px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/theme_effects.png" width="575" height="341"></div></li><li>Presentasi akan diperbarui untuk menunjukkan efek tema baru.</li></ol>
            
            <h4>Untuk mengubah latar belakang:</h4>
            <p>Anda dapat memodifikasi <strong>latar belakang</strong> dari tema Anda dengan memilih <strong>gaya latar belakang</strong> yang berbeda. PowerPoint termasuk berbagai gaya latar belakang.</p>
            <ol class="numbered-list"><li>Dari <strong>tab Desain</strong>, klik panah drop-down di grup <strong>Varian</strong> dan pilih <strong>Gaya Latar Belakang</strong>.<div class="centerImage"><img loading="lazy" style="width: 526px; height: 400px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/background styles.png" width="526" height="400"></div></li><li>Pilih gaya latar belakang yang diinginkan.<div class="centerImage"><img loading="lazy" style="width: 560px; height: 388px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/background style applied.png" width="560" height="388"></div></li><li>Presentasi akan diperbarui untuk menunjukkan gaya latar belakang baru.</li></ol>
            <p>Anda juga dapat menyesuaikan latar belakang dengan membuka panel <strong>Format Latar Belakang</strong>. Di sini, Anda akan memiliki akses ke lebih banyak opsi lanjutan, seperti menambahkan <strong>gradien atau gambar</strong> latar belakang.</p>
            <ol class="numbered-list"><li>Dari tab <strong>Desain</strong>, klik panah drop-down di grup <strong>Varian</strong> dan pilih <strong>Gaya Latar Belakang</strong>, lalu pilih <strong>Format Latar Belakang</strong>.</li><li>Panel Format Latar Belakang akan muncul di sebelah kanan. Sesuaikan pengaturan latar belakang yang diinginkan.</li><li>Setelah selesai, klik <strong>Terapkan ke Semua</strong> untuk menerapkan gaya latar belakang ke semua slide atau klik <strong>Tutup</strong> untuk hanya menerapkan ke slide yang dipilih saat ini.</li></ol>
            <p class="moreInfo">Meskipun menerapkan gaya latar belakang baru dapat memberikan tampilan segar pada presentasi Anda, penting untuk mempertimbangkan keterbacaan teks dan konsistensi visual dengan keseluruhan tema. Pastikan untuk meninjau presentasi secara keseluruhan setelah melakukan perubahan signifikan pada latar belakang.</p>
            <h4>Menyimpan Tema Kustom</h4>
            <p>Setelah Anda menemukan pengaturan yang Anda sukai, Anda mungkin ingin <strong>menyimpan tema</strong> agar dapat menggunakannya dalam presentasi lain. Jika Anda hanya ingin menggunakan tema tersebut dalam presentasi saat ini, Anda tidak perlu menyimpannya.</p>
            <h4>Untuk menyimpan tema:</h4>
            <ol class="numbered-list">
            <li>Dari tab <strong>Desain</strong>, klik panah drop-down di grup <strong>Tema</strong>.<div class="centerImage"><img loading="lazy" style="width: 656px; height: 135px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/themes group dropdown.png" width="656" height="135"></div></li>
            <li>Klik <strong>Simpan Tema Saat Ini</strong>.<div class="centerImage"><img loading="lazy" style="width: 617px; height: 430px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/modify_save_theme.jpg" width="617" height="430"></div></li>
            <li>Sebuah kotak dialog akan muncul. Ketik <strong>nama file</strong>, lalu klik <strong>Simpan</strong>.<div class="centerImage"><img loading="lazy" style="width: 633px; height: 458px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/save theme dialog.png" width="633" height="458"></div></li>
            <li>Saat Anda mengklik panah drop-down di grup <strong>Tema</strong>, Anda akan melihat tema kustom di bawah <strong>Kustom</strong>.<div class="centerImage"><img loading="lazy" style="width: 598px; height: 437px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/modify_custom_theme.jpg" width="598" height="437"></div></li>
            </ol>
            <p class="moreInfo">Tema kustom memiliki fitur unik dan kuat lainnya: Tema kustom yang Anda simpan di PowerPoint dapat digunakan di <strong>aplikasi Microsoft Office</strong> lainnya, seperti Word dan Excel.</p>

            <h3>Tantangan!</h3>
            <ol class="numbered-list">
            <li>Buka <a href="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/powerpoint2016_modifyingthemes_practice.pptx">presentasi latihan</a> kami.</li>
            <li>Ubah <strong>warna tema</strong>.</li>
            <li>Gunakan perintah <strong>Sesuaikan Font</strong> untuk mengubah font judul tema menjadi <strong>Garamond</strong> dan font isi menjadi <strong>Arial</strong>.</li>
            <li>Ubah <strong>gaya latar belakang</strong> tema.</li>
            <li><strong>Opsional:</strong> Simpan tema kustom Anda.</li>
            <li>Setelah selesai, slide pertama Anda seharusnya terlihat seperti ini (warna dan gaya latar belakang Anda mungkin berbeda):<div class="centerImage"><img loading="lazy" style="width: 750px; height: 519px;" longdesc="" class="imageBorder" alt="Modifying Themes Challenge" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/modifying_themes.png" width="750" height="519"></div></li>
            </ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Memodifikasi Tema',
            'course_id' => '57',
            'desc' => '<h3>Pendahuluan</h3>
            <p>Katakanlah Anda sangat menyukai gaya sebuah <strong>tema</strong>, tetapi ingin bereksperimen dengan berbagai <strong>skema warna</strong>. Tidak masalah: Anda dapat mencampur dan mencocokkan <strong>warna</strong>, <strong>font</strong>, dan <strong>efek</strong> untuk menciptakan tampilan unik untuk presentasi Anda. Jika masih tidak terlihat sempurna, Anda dapat <strong>mengustomisasi</strong> tema tersebut sesuai keinginan Anda.</p>
            <p class="moreInfo">Jika Anda baru mengenal PowerPoint, Anda mungkin ingin meninjau pelajaran kami tentang <a href="https://edu.gcfglobal.org/en/powerpoint2016/applying-themes/1/">Menerapkan Tema</a> untuk mempelajari dasar-dasar penggunaan tema. <br></p>
            <p class="moreInfo">Opsional: Unduh <a href="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/powerpoint2016_modifyingthemes_practice.pptx">presentasi latihan</a> kami.</p>
            <p class="chevron">Tonton video untuk mempelajari lebih lanjut tentang memodifikasi tema di PowerPoint.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/UH7Gzjd3rGA?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"></iframe></div>
            <h4>Untuk memilih warna tema baru:</h4>
            <p>Jika Anda tidak menyukai warna dari suatu tema, mudah untuk menerapkan <strong>warna tema baru</strong>; segala sesuatu tentang tema tersebut akan tetap tidak berubah.</p>
            <ol class="numbered-list"><li>Dari tab <strong>Desain</strong>, klik panah drop-down di grup <strong>Varian</strong> dan pilih <strong>Warna</strong>.<div class="centerImage"><img loading="lazy" style="width: 670px; height: 129px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/variants group drop down edit.png" width="670" height="129"></div></li><li>Pilih warna tema yang diinginkan.</li><li>Presentasi akan diperbarui untuk menunjukkan warna tema baru.<div class="centerImage"><img loading="lazy" style="width: 724px; height: 642px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/save theme color edit.png" width="724" height="642"></div></li></ol>
            <h4>Untuk mengustomisasi warna:</h4>
            <p>Terkadang Anda mungkin tidak menyukai setiap warna yang termasuk dalam satu set warna tema. Mudah untuk mengubah beberapa atau semua warna agar sesuai dengan kebutuhan Anda.</p>
            <ol class="numbered-list"><li>Dari tab <strong>Desain</strong>, klik panah drop-down di grup <strong>Varian</strong>.</li><li>Pilih <strong>Warna</strong>, lalu klik <strong>Sesuaikan Warna</strong>.<div class="centerImage"><img loading="lazy" style="width: 276px; height: 189px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/2016-03-03_14-54-06.png" width="276" height="189"></div> </li><li>Sebuah kotak dialog akan muncul dengan <strong>12 warna tema saat ini</strong>. Untuk mengedit warna, klik panah drop-down dan pilih warna yang berbeda. Anda mungkin perlu mengklik <strong>Warna Lainnya</strong> untuk menemukan warna yang tepat.<div class="centerImage"><img loading="lazy" style="width: 487px; height: 496px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/custom color dialog box.png" width="487" height="496"></div></li><li>Di bidang <strong>Nama:</strong>, ketik nama yang diinginkan untuk warna tema, lalu klik <strong>Simpan</strong>.<div class="centerImage"><img loading="lazy" style="width: 492px; height: 501px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/name custom colors.png" width="492" height="501"></div></li><li>Presentasi akan diperbarui untuk menunjukkan warna tema kustom baru.</li></ol>
            <p>Pada beberapa presentasi, Anda mungkin tidak melihat perbedaan yang signifikan saat mengubah warna tema. Misalnya, <strong>latar belakang bertekstur</strong> tidak akan berubah ketika warna tema diubah. Saat mencoba warna tema yang berbeda, sebaiknya pilih slide yang menggunakan beberapa warna untuk melihat bagaimana warna tema baru akan memengaruhi presentasi Anda.</p>
            
            <h4>Untuk memilih font tema baru:</h4>
            <p>Mudah untuk menerapkan satu set <strong>font tema</strong> baru tanpa mengubah tampilan keseluruhan tema. Font tema bawaan dirancang agar cocok satu sama lain, yang dapat membantu menyatukan presentasi Anda.</p>
            <ol class="numbered-list"><li>Dari tab <strong>Desain</strong>, klik panah drop-down di grup <strong>Varian</strong> dan pilih <strong>Font</strong>.<div class="centerImage"><img loading="lazy" style="width: 665px; height: 128px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/modify_variants_dropdown.png" width="665" height="128"></div></li><li>Pilih font tema yang diinginkan.<div class="centerImage"><img loading="lazy" style="width: 686px; height: 575px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/modify_theme_fontsedit.png" width="686" height="575"></div></li><li>Presentasi akan diperbarui untuk menunjukkan font tema baru.</li></ol>
            <h4>Untuk mengustomisasi font tema:</h4>
            <p>Jika Anda memiliki font spesifik dalam pikiran untuk presentasi, mudah untuk memilih font tema Anda sendiri.</p>
            <ol class="numbered-list"><li>Dari tab <strong>Desain</strong>, klik panah drop-down di grup <strong>Varian</strong>.</li><li>Pilih <strong>Font</strong>, lalu klik <strong>Sesuaikan Font</strong>.<div class="centerImage"><img loading="lazy" style="width: 260px; height: 234px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/customize fonts.png" width="260" height="234"></div></li><li>Sebuah kotak dialog akan muncul dengan <strong>dua font tema saat ini</strong>. Untuk mengubah font, klik panah drop-down dan pilih font yang diinginkan.</li><li>Di bidang <strong>Nama</strong>: ketik nama yang diinginkan untuk font tema, lalu klik <strong>Simpan</strong>.<div class="centerImage"><img loading="lazy" style="width: 513px; height: 230px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/name custom fonts.png" width="513" height="230"></div></li><li>Presentasi akan diperbarui untuk menunjukkan font tema kustom baru.</li></ol>
            <p class="moreInfo">Mengubah font tema tidak akan otomatis memperbarui semua teks dalam presentasi Anda. Hanya teks yang menggunakan <strong>font tema saat ini</strong> yang akan diperbarui ketika Anda mengubah font tema.</p>
            <div class="centerImage"><img loading="lazy" style="width: 335px; height: 177px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/current theme fonts.png" width="335" height="177"></div>
            
            <h4>Untuk memilih efek tema baru:</h4>
            <p>PowerPoint membuatnya mudah untuk menerapkan <strong>efek tema baru</strong>, yang dapat dengan cepat mengubah tampilan <strong>bentuk</strong> dalam presentasi Anda.</p>
            <ol class="numbered-list"><li>Dari <strong>tab Desain</strong>, klik panah drop-down di grup <
            
            strong>Varian</strong> dan pilih <strong>Efek</strong>.<div class="centerImage"><img loading="lazy" style="width: 674px; height: 132px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/variants dropdown effects.png" width="674" height="132"></div></li><li>Pilih efek tema yang diinginkan.<div class="centerImage"><img loading="lazy" style="width: 575px; height: 341px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/theme_effects.png" width="575" height="341"></div></li><li>Presentasi akan diperbarui untuk menunjukkan efek tema baru.</li></ol>
            
            <h4>Untuk mengubah latar belakang:</h4>
            <p>Anda dapat memodifikasi <strong>latar belakang</strong> dari tema Anda dengan memilih <strong>gaya latar belakang</strong> yang berbeda. PowerPoint termasuk berbagai gaya latar belakang.</p>
            <ol class="numbered-list"><li>Dari <strong>tab Desain</strong>, klik panah drop-down di grup <strong>Varian</strong> dan pilih <strong>Gaya Latar Belakang</strong>.<div class="centerImage"><img loading="lazy" style="width: 526px; height: 400px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/background styles.png" width="526" height="400"></div></li><li>Pilih gaya latar belakang yang diinginkan.<div class="centerImage"><img loading="lazy" style="width: 560px; height: 388px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/background style applied.png" width="560" height="388"></div></li><li>Presentasi akan diperbarui untuk menunjukkan gaya latar belakang baru.</li></ol>
            <p>Anda juga dapat menyesuaikan latar belakang dengan membuka panel <strong>Format Latar Belakang</strong>. Di sini, Anda akan memiliki akses ke lebih banyak opsi lanjutan, seperti menambahkan <strong>gradien atau gambar</strong> latar belakang.</p>
            <ol class="numbered-list"><li>Dari tab <strong>Desain</strong>, klik panah drop-down di grup <strong>Varian</strong> dan pilih <strong>Gaya Latar Belakang</strong>, lalu pilih <strong>Format Latar Belakang</strong>.</li><li>Panel Format Latar Belakang akan muncul di sebelah kanan. Sesuaikan pengaturan latar belakang yang diinginkan.</li><li>Setelah selesai, klik <strong>Terapkan ke Semua</strong> untuk menerapkan gaya latar belakang ke semua slide atau klik <strong>Tutup</strong> untuk hanya menerapkan ke slide yang dipilih saat ini.</li></ol>
            <p class="moreInfo">Meskipun menerapkan gaya latar belakang baru dapat memberikan tampilan segar pada presentasi Anda, penting untuk mempertimbangkan keterbacaan teks dan konsistensi visual dengan keseluruhan tema. Pastikan untuk meninjau presentasi secara keseluruhan setelah melakukan perubahan signifikan pada latar belakang.</p>
            <h4>Menyimpan Tema Kustom</h4>
            <p>Setelah Anda menemukan pengaturan yang Anda sukai, Anda mungkin ingin <strong>menyimpan tema</strong> agar dapat menggunakannya dalam presentasi lain. Jika Anda hanya ingin menggunakan tema tersebut dalam presentasi saat ini, Anda tidak perlu menyimpannya.</p>
            <h4>Untuk menyimpan tema:</h4>
            <ol class="numbered-list">
            <li>Dari tab <strong>Desain</strong>, klik panah drop-down di grup <strong>Tema</strong>.<div class="centerImage"><img loading="lazy" style="width: 656px; height: 135px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/themes group dropdown.png" width="656" height="135"></div></li>
            <li>Klik <strong>Simpan Tema Saat Ini</strong>.<div class="centerImage"><img loading="lazy" style="width: 617px; height: 430px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/modify_save_theme.jpg" width="617" height="430"></div></li>
            <li>Sebuah kotak dialog akan muncul. Ketik <strong>nama file</strong>, lalu klik <strong>Simpan</strong>.<div class="centerImage"><img loading="lazy" style="width: 633px; height: 458px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/save theme dialog.png" width="633" height="458"></div></li>
            <li>Saat Anda mengklik panah drop-down di grup <strong>Tema</strong>, Anda akan melihat tema kustom di bawah <strong>Kustom</strong>.<div class="centerImage"><img loading="lazy" style="width: 598px; height: 437px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/modify_custom_theme.jpg" width="598" height="437"></div></li>
            </ol>
            <p class="moreInfo">Tema kustom memiliki fitur unik dan kuat lainnya: Tema kustom yang Anda simpan di PowerPoint dapat digunakan di <strong>aplikasi Microsoft Office</strong> lainnya, seperti Word dan Excel.</p>

            <h3>Tantangan!</h3>
            <ol class="numbered-list">
            <li>Buka <a href="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/powerpoint2016_modifyingthemes_practice.pptx">presentasi latihan</a> kami.</li>
            <li>Ubah <strong>warna tema</strong>.</li>
            <li>Gunakan perintah <strong>Sesuaikan Font</strong> untuk mengubah font judul tema menjadi <strong>Garamond</strong> dan font isi menjadi <strong>Arial</strong>.</li>
            <li>Ubah <strong>gaya latar belakang</strong> tema.</li>
            <li><strong>Opsional:</strong> Simpan tema kustom Anda.</li>
            <li>Setelah selesai, slide pertama Anda seharusnya terlihat seperti ini (warna dan gaya latar belakang Anda mungkin berbeda):<div class="centerImage"><img loading="lazy" style="width: 750px; height: 519px;" longdesc="" class="imageBorder" alt="Modifying Themes Challenge" src="https://media.gcflearnfree.org/content/56d886966aa91509c874342c_03_03_2016/modifying_themes.png" width="750" height="519"></div></li>
            </ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Melatih dan Merekam Presentasi Anda',
            'course_id' => '58',
            'desc' => '<h3>Pengenalan</h3>
            <p>Ada banyak hal yang perlu diingat saat mempersiapkan presentasi. Berapa lama durasinya? Apa yang akan Anda katakan? Untungnya, PowerPoint menawarkan beberapa alat yang dapat membantu Anda <strong>melatih</strong> slide show Anda. Anda bahkan dapat merekam salinan dengan <strong>narasi suara</strong>, sehingga penonton dapat menonton presentasi secara mandiri.</p>
            <p class="moreInfo">Opsional: Unduh <a href="https://media.gcflearnfree.org/content/56e32ee8c87fa60f20925029_03_11_2016/powerpoint2016_rehearserecord_practice.pptx">presentasi latihan</a> kami.</p>
            <p class="chevron">Tonton video di bawah ini untuk mempelajari cara melatih dan merekam presentasi Anda.<br></p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/UdeRJpIxCF0?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <h4>Melatih Pengaturan Waktu Slide Show</h4>
            <p><strong>Melatih pengaturan waktu</strong> bisa berguna jika Anda ingin mengatur presentasi agar berjalan dengan kecepatan tertentu tanpa harus mengklik slide sendiri. Ini juga memberi Anda kesempatan untuk <strong>berlatih</strong> poin pembicaraan Anda. Dengan menggunakan fitur ini, Anda dapat menyimpan pengaturan waktu untuk setiap slide dan animasi. PowerPoint kemudian akan memutar presentasi secara otomatis menggunakan pengaturan waktu ini.</p>
            <p class="moreInfo">Latihan sering kali menjadi salah satu langkah terakhir dalam membuat presentasi yang rapi. Jika Anda belum pernah menyajikan slide show, Anda mungkin ingin meninjau pelajaran kami tentang <a href="https://edu.gcfglobal.org/en/powerpoint2016/presenting-your-slide-show/1/">Menyajikan Slide Show Anda</a> untuk membiasakan diri dengan dasar-dasarnya.</p>
            <h4>Untuk melatih pengaturan waktu:</h4>
            <ol class="numbered-list">
            <li>Buka tab <strong>Slide Show</strong>, lalu klik perintah <strong>Rehearse Timings</strong>.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="mengklik perintah Rehearse Timings" src="https://media.gcflearnfree.org/content/56e32ee8c87fa60f20925029_03_11_2016/record_rehearse_command.png"></div></li>
            <li>Anda akan dibawa ke tampilan layar penuh dari presentasi Anda. Latihlah menyajikan slide show Anda. Saat Anda siap untuk pindah ke slide berikutnya, klik tombol <strong>Next</strong> di <strong>Recording toolbar</strong> di sudut kiri atas. Anda juga bisa menggunakan tombol panah kanan di keyboard Anda.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="berpindah ke slide berikutnya" src="https://media.gcflearnfree.org/content/56e32ee8c87fa60f20925029_03_11_2016/record_rehearse_next.png"></div></li>
            <li>Ketika Anda mencapai akhir dari presentasi, kotak dialog akan muncul dengan <strong>total waktu</strong> presentasi Anda. Jika Anda puas dengan pengaturan waktunya, klik <strong>Yes</strong>.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="menyimpan pengaturan waktu" src="https://media.gcflearnfree.org/content/56e32ee8c87fa60f20925029_03_11_2016/record_rehearse_dialog.png"></div></li>
            <li>Pengaturan waktu akan disimpan. Pada saat Anda menyajikan kembali, PowerPoint akan menggunakan pengaturan waktu ini untuk menggerakkan slide secara <strong>otomatis</strong>.</li>
            </ol>
            <p class="moreInfo">Jika Anda memerlukan lebih dari satu kali percobaan untuk mendapatkan pengaturan waktu yang tepat, <strong>Recording toolbar</strong> dapat digunakan untuk beristirahat atau memulai kembali pada sebuah slide. Untuk menjeda pengatur waktu, klik tombol <strong>Pause</strong>. Tidak ada tindakan yang diambil saat pengatur waktu dijeda akan disertakan dalam pengaturan waktu. Untuk merekam ulang pengaturan waktu pada slide saat ini, klik tombol <strong>Repeat</strong>.</p>
            <div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="menggunakan tombol Pause dan Repeat" src="https://media.gcflearnfree.org/content/56e32ee8c87fa60f20925029_03_11_2016/record_rehearse_splat.png"></div>
            <h4>Merekam Slide Show Anda</h4>
            <p>Fitur <strong>Record Slide Show</strong> mirip dengan fitur <strong>Rehearse Timings</strong>, tetapi lebih komprehensif. Jika Anda memiliki mikrofon untuk komputer Anda, Anda dapat <strong>merekam</strong> <strong>narasi suara</strong> untuk seluruh presentasi. Ini berguna jika Anda berencana menggunakan slide show Anda sebagai presentasi mandiri atau video.</p>
            <h4>Untuk merekam slide show:</h4>
            <ol class="numbered-list">
            <li>Dari tab <strong>Slide Show</strong>, pilih panah drop-down <strong>Record Slide Show</strong>, lalu pilih <strong>Start Recording from Beginning</strong> atau <strong>Start Recording from Current Slide</strong>.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="memilih perintah Record Slide Show" src="https://media.gcflearnfree.org/content/56e32ee8c87fa60f20925029_03_11_2016/record_command.png"></div></li>
            <li>Sebuah kotak dialog akan muncul. Pilih opsi yang diinginkan, lalu klik <strong>Start Recording</strong>. Ingat, Anda hanya dapat merekam narasi jika Anda memiliki <strong>mikrofon</strong> yang terhubung ke komputer Anda.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="mengatur opsi rekaman presentasi" src="https://media.gcflearnfree.org/content/56e32ee8c87fa60f20925029_03_11_2016/record_dialog.png"></div></li>
            <li>Presentasi Anda akan muncul dalam tampilan layar penuh. Lakukan slide show Anda. Pastikan untuk berbicara dengan jelas ke mikrofon jika Anda merekam narasi.</li>
            <li> Saat Anda siap untuk pindah ke slide berikutnya, klik tombol <strong>Next</strong> di <strong>Recording toolbar</strong> atau gunakan tombol panah kanan.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="berpindah ke slide berikutnya" src="https://media.gcflearnfree.org/content/56e32ee8c87fa60f20925029_03_11_2016/record_next.png"></div></li>
            <li>Ketika Anda mencapai akhir presentasi, PowerPoint akan menutup tampilan layar penuh.</li>
            <li>Pengaturan waktu slide dan narasi Anda sekarang menjadi bagian dari presentasi Anda. Slide yang memiliki narasi akan ditandai dengan <strong>ikon pengeras suara</strong> di sudut kanan bawah.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="slide dengan rekaman audio" src="https://media.gcflearnfree.org/content/56e32ee8c87fa60f20925029_03_11_2016/record_callouts.png"></div></li>
            </ol>
            <p class="moreInfo">Dalam slide show yang direkam, penunjuk mouse tidak terlihat pada produk akhir; oleh karena itu, jika Anda ingin menunjukkan sesuatu, Anda perlu menggunakan fitur <strong>laser pointer</strong>. Cukup tahan <strong>Ctrl</strong> pada keyboard Anda sambil mengklik dan menahan mouse Anda. Kursor akan muncul sebagai titik merah kecil.<img loading="lazy" longdesc="" class="imageBorder" alt="menggunakan laser pointer" src="https://media.gcflearnfree.org/content/56e32ee8c87fa60f20925029_03_11_2016/record_laser_splat.png"></p>
            <h4>Untuk menghapus pengaturan waktu atau narasi slide:</h4>
            <p>Jika Anda berubah pikiran tentang menyertakan pengaturan waktu atau narasi slide, Anda dapat dengan mudah menghapus salah satu atau keduanya. Anda dapat menghapusnya dari <strong>seluruh presentasi</strong> atau hanya dari <strong>slide saat ini</strong>.</p>
            <p>Untuk melakukannya, cukup buka tab <strong>Slide Show</strong>, klik panah drop-down <strong>Record Slide Show</strong>, arahkan kursor ke <strong>Clear</strong>, lalu pilih opsi yang diinginkan dari menu.</p>
            <div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="menghapus pengaturan waktu slide"
            
             src="https://media.gcflearnfree.org/content/56e32ee8c87fa60f20925029_03_11_2016/record_clear.png"></div>
            
            <h3>Tantangan!</h3>
            <ol class="numbered-list">
            <li>Buka <a href="https://media.gcflearnfree.org/content/56e32ee8c87fa60f20925029_03_11_2016/powerpoint2016_rehearserecord_practice.pptx">presentasi latihan</a> kami. Jika Anda sudah mengunduh presentasi latihan untuk mengikuti pelajaran, pastikan untuk mengunduh salinan yang baru.</li>
            <li><strong>Rekam</strong> slide show. Jika Anda memiliki mikrofon dan ingin berlatih merekam narasi, Anda dapat membaca slide.</li>
            <li>Setelah selesai, <strong>putar</strong> slide show Anda. Slide harus maju secara otomatis sesuai dengan kecepatan yang Anda rekam.</li>
            </ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Berbagi Presentasi Anda Secara Online',
            'course_id' => '59',
            'desc' => '<h3>Pengenalan</h3>
            <p>PowerPoint menawarkan beberapa opsi untuk meningkatkan atau bahkan mengubah total cara Anda menyampaikan presentasi. Alih-alih menyajikan slide show Anda secara normal, Anda dapat memilih untuk menyajikannya sebagai <strong>video</strong>, atau bahkan <strong>menyajikannya secara online</strong> agar orang lain dapat melihatnya dari jarak jauh. Tidak peduli bagaimana Anda memilih untuk memberikan presentasi Anda, Anda dapat meningkatkannya dengan <strong>menyesuaikan</strong> slide show Anda untuk menghapus atau mengatur ulang slide. Semua opsi ini dapat membantu Anda memberikan presentasi yang rapi dan profesional.</p>
            <p class="moreInfo">Opsional: Unduh <a href="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/powerpoint2016_sharingonline_practice.pptx">presentasi latihan</a> kami untuk pelajaran ini.</p>
            <p class="chevron">Tonton video di bawah ini untuk mempelajari lebih lanjut tentang berbagai cara Anda dapat membagikan presentasi Anda.<br></p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/mLADYCqjYcc?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <p><br></p>
            <h4>Mengekspor Presentasi sebagai Video</h4>
            <p class="clearfl">Fitur <strong>Create a Video</strong> memungkinkan Anda menyimpan presentasi sebagai video. Ini bisa berguna karena memungkinkan penonton menonton presentasi kapan pun mereka mau. Untuk memastikan penonton Anda memiliki cukup waktu untuk melihat setiap slide, Anda mungkin ingin <strong>melatih</strong> pengaturan waktu atau <strong>merekam</strong> slide show Anda sebelum menggunakan fitur ini.</p>
            <h4>Untuk membuat video:</h4>
            <ol class="numbered-list"><li>Klik tab <strong>File</strong> untuk mengakses <strong>Backstage view</strong>.<div></div></li><li>Pilih <strong>Export</strong>, lalu klik <strong>Create a Video</strong>. Opsi ekspor video akan muncul di sebelah kanan.<div class="centerImage"><img loading="lazy" style="width: 780px; height: 439px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/sharing_create_video.jpg" width="780" height="439"><div></div></div></li><li>Klik panah drop-down di sebelah <strong>Presentation Quality</strong> untuk memilih ukuran dan kualitas video Anda.<div class="centerImage"><img loading="lazy" style="width: 491px; height: 167px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/sharing_internet_quality.png" width="491" height="167"></div></li><li><span class="centerImage">Pilih panah drop-down di sebelah <strong>Use Recorded Timings and Narrations</strong>. Pilih <strong>Don&apos;t Use Recorded Timings and Narrations</strong> jika Anda tidak memiliki atau tidak ingin menggunakan pengaturan waktu yang direkam. Anda juga bisa memilih <strong>Use Recorded Timings and Narrations</strong> jika Anda sudah merekam pengaturan waktu dan narasi dan ingin menggunakannya dalam video Anda.<div class="centerImage"><img loading="lazy" style="width: 731px; height: 233px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/sharing_use_timings_narrations.jpg" width="731" height="233"></div></li><li>Klik <strong>Create Video</strong>. Kotak dialog <strong>Save As</strong> akan muncul.</li><li>Pilih lokasi di mana Anda ingin menyimpan presentasi, lalu masukkan nama untuk presentasi tersebut.<div class="centerImage"><img loading="lazy" style="width: 641px; height: 464px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/sharing_save.jpg" width="641" height="464"></div></li><li>Klik <strong>Save</strong>. Saat PowerPoint membuat video Anda, bilah status akan muncul di bagian bawah jendela PowerPoint. Ketika bilah ini selesai, video Anda siap untuk ditonton, dikirim, atau diunggah.<div class="centerImage"><img loading="lazy" style="width: 643px; height: 77px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/sharing_status_bar.png" width="643" height="77"></div></li></ol>
            <p class="moreInfo">Selain mengirimkan video Anda melalui email, Anda bisa <strong>mengunggah</strong> video Anda ke situs berbagi video gratis seperti <a href="http://youtube.com" target="_blank">YouTube</a>. Setelah video Anda diunggah, Anda bisa memberikan tautan kepada siapa pun yang ingin melihatnya. Untuk mempelajari lebih lanjut tentang menggunakan YouTube untuk berbagi video secara online, kunjungi tutorial kami di <a href="https://edu.gcfglobal.org/en/youtube">YouTube</a>.</p>
            <div class="centerImage"><img loading="lazy" style="width: 458px; height: 530px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/sharing_youtube.jpg" width="458" height="530"></div>
            <h3>Menyajikan Slide Show Anda Secara Online</h3>
            <p>Menyajikan slide show <strong>secara online</strong> ternyata mudah. Yang Anda dan penonton Anda butuhkan hanyalah koneksi internet—mereka bahkan tidak memerlukan PowerPoint. Setelah penonton Anda terhubung, Anda bisa memulai presentasi seperti biasa.</p>
            <p class="attention">Perlu diperhatikan bahwa Anda tidak bisa mengedit presentasi Anda atau menandainya dengan penyorot atau pena saat Anda menyajikan slide show secara online. Anda juga tidak bisa menggunakan PowerPoint untuk berbicara kepada penonton Anda. Rencanakan untuk berkomunikasi dengan penonton Anda melalui telekonferensi, atau prarekamlah narasi Anda.</p>
            <h4>Untuk menyajikan secara online:</h4>
            <ol class="numbered-list"><li>Pilih tab <strong>Slide Show</strong>, lalu cari grup <strong>Start Slide Show</strong>.</li><li>Klik perintah <strong>Present Online</strong>.<div class="centerImage"><img loading="lazy" style="width: 593px; height: 321px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/sharing_present_online.png" width="593" height="321"></div></li><li>Sebuah kotak dialog akan muncul. Klik <strong>Connect</strong>. Pesan status akan muncul saat PowerPoint mempersiapkan presentasi online Anda.<div class="centerImage"><img loading="lazy" style="width: 520px; height: 439px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/sharing_connect.png" width="520" height="439"></div></li><li>Sebuah tautan akan muncul. Jika tidak sudah terpilih, pilih tautan tersebut.</li><li>Klik <strong>Copy Link</strong> untuk membuat salinan tautan, yang dapat Anda tempel di mana saja—termasuk Facebook, blog, atau email. Pastikan setiap penonton Anda menerima salinan tautan sebelum Anda memulai presentasi.<div class="centerImage"><img loading="lazy" style="width: 516px; height: 424px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/sharing_start_presentation.png" width="516" height="424"></div></li><li>Klik <strong>Start Presentation</strong>.</li><li>Sajikan slide show seperti biasa, menggunakan mouse atau keyboard untuk memajukan slide.</li><li>Ketika Anda selesai, klik <strong>End Online Presentation</strong>.<div class="centerImage"><img loading="lazy" style="width: 744px; height: 213px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/sharing_end_presentation_command.png" width="744" height="213"></div></li><li>Sebuah kotak dialog akan muncul untuk mengkonfirmasi bahwa Anda ingin mengakhiri presentasi. Klik <strong>End Online Presentation</strong>.<div class="centerImage"><img loading="lazy" style="width: 720px; height: 139px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/sharing_end_online_presentation.png" width="720" height="139"></div></li></ol>
            <h3>Tantangan!</h3>
            <ol class="numbered-list"><li>Buka <a href="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/powerpoint2016_sharingonline_practice.pptx">presentasi latihan kami</a>.</li><li><strong>Ekspor</strong> presentasi latihan sebagai video, dan simpan di komputer Anda.</li><li>Jika Anda memiliki teman atau anggota keluarga dengan koneksi internet, coba <strong>menyajikan slide show secara online</strong>.</li></ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Berbagi Presentasi Anda Secara Online',
            'course_id' => '60',
            'desc' => '<h3>Pengenalan</h3>
            <p>PowerPoint menawarkan beberapa opsi untuk meningkatkan atau bahkan mengubah total cara Anda menyampaikan presentasi. Alih-alih menyajikan slide show Anda secara normal, Anda dapat memilih untuk menyajikannya sebagai <strong>video</strong>, atau bahkan <strong>menyajikannya secara online</strong> agar orang lain dapat melihatnya dari jarak jauh. Tidak peduli bagaimana Anda memilih untuk memberikan presentasi Anda, Anda dapat meningkatkannya dengan <strong>menyesuaikan</strong> slide show Anda untuk menghapus atau mengatur ulang slide. Semua opsi ini dapat membantu Anda memberikan presentasi yang rapi dan profesional.</p>
            <p class="moreInfo">Opsional: Unduh <a href="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/powerpoint2016_sharingonline_practice.pptx">presentasi latihan</a> kami untuk pelajaran ini.</p>
            <p class="chevron">Tonton video di bawah ini untuk mempelajari lebih lanjut tentang berbagai cara Anda dapat membagikan presentasi Anda.<br></p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/mLADYCqjYcc?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"><span id="selection-marker-1" class="redactor-selection-marker"></span></iframe></div>
            <p><br></p>
            <h4>Mengekspor Presentasi sebagai Video</h4>
            <p class="clearfl">Fitur <strong>Create a Video</strong> memungkinkan Anda menyimpan presentasi sebagai video. Ini bisa berguna karena memungkinkan penonton menonton presentasi kapan pun mereka mau. Untuk memastikan penonton Anda memiliki cukup waktu untuk melihat setiap slide, Anda mungkin ingin <strong>melatih</strong> pengaturan waktu atau <strong>merekam</strong> slide show Anda sebelum menggunakan fitur ini.</p>
            <h4>Untuk membuat video:</h4>
            <ol class="numbered-list"><li>Klik tab <strong>File</strong> untuk mengakses <strong>Backstage view</strong>.<div></div></li><li>Pilih <strong>Export</strong>, lalu klik <strong>Create a Video</strong>. Opsi ekspor video akan muncul di sebelah kanan.<div class="centerImage"><img loading="lazy" style="width: 780px; height: 439px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/sharing_create_video.jpg" width="780" height="439"><div></div></div></li><li>Klik panah drop-down di sebelah <strong>Presentation Quality</strong> untuk memilih ukuran dan kualitas video Anda.<div class="centerImage"><img loading="lazy" style="width: 491px; height: 167px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/sharing_internet_quality.png" width="491" height="167"></div></li><li><span class="centerImage">Pilih panah drop-down di sebelah <strong>Use Recorded Timings and Narrations</strong>. Pilih <strong>Don&apos;t Use Recorded Timings and Narrations</strong> jika Anda tidak memiliki atau tidak ingin menggunakan pengaturan waktu yang direkam. Anda juga bisa memilih <strong>Use Recorded Timings and Narrations</strong> jika Anda sudah merekam pengaturan waktu dan narasi dan ingin menggunakannya dalam video Anda.<div class="centerImage"><img loading="lazy" style="width: 731px; height: 233px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/sharing_use_timings_narrations.jpg" width="731" height="233"></div></li><li>Klik <strong>Create Video</strong>. Kotak dialog <strong>Save As</strong> akan muncul.</li><li>Pilih lokasi di mana Anda ingin menyimpan presentasi, lalu masukkan nama untuk presentasi tersebut.<div class="centerImage"><img loading="lazy" style="width: 641px; height: 464px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/sharing_save.jpg" width="641" height="464"></div></li><li>Klik <strong>Save</strong>. Saat PowerPoint membuat video Anda, bilah status akan muncul di bagian bawah jendela PowerPoint. Ketika bilah ini selesai, video Anda siap untuk ditonton, dikirim, atau diunggah.<div class="centerImage"><img loading="lazy" style="width: 643px; height: 77px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/sharing_status_bar.png" width="643" height="77"></div></li></ol>
            <p class="moreInfo">Selain mengirimkan video Anda melalui email, Anda bisa <strong>mengunggah</strong> video Anda ke situs berbagi video gratis seperti <a href="http://youtube.com" target="_blank">YouTube</a>. Setelah video Anda diunggah, Anda bisa memberikan tautan kepada siapa pun yang ingin melihatnya. Untuk mempelajari lebih lanjut tentang menggunakan YouTube untuk berbagi video secara online, kunjungi tutorial kami di <a href="https://edu.gcfglobal.org/en/youtube">YouTube</a>.</p>
            <div class="centerImage"><img loading="lazy" style="width: 458px; height: 530px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/sharing_youtube.jpg" width="458" height="530"></div>
            <h3>Menyajikan Slide Show Anda Secara Online</h3>
            <p>Menyajikan slide show <strong>secara online</strong> ternyata mudah. Yang Anda dan penonton Anda butuhkan hanyalah koneksi internet—mereka bahkan tidak memerlukan PowerPoint. Setelah penonton Anda terhubung, Anda bisa memulai presentasi seperti biasa.</p>
            <p class="attention">Perlu diperhatikan bahwa Anda tidak bisa mengedit presentasi Anda atau menandainya dengan penyorot atau pena saat Anda menyajikan slide show secara online. Anda juga tidak bisa menggunakan PowerPoint untuk berbicara kepada penonton Anda. Rencanakan untuk berkomunikasi dengan penonton Anda melalui telekonferensi, atau prarekamlah narasi Anda.</p>
            <h4>Untuk menyajikan secara online:</h4>
            <ol class="numbered-list"><li>Pilih tab <strong>Slide Show</strong>, lalu cari grup <strong>Start Slide Show</strong>.</li><li>Klik perintah <strong>Present Online</strong>.<div class="centerImage"><img loading="lazy" style="width: 593px; height: 321px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/sharing_present_online.png" width="593" height="321"></div></li><li>Sebuah kotak dialog akan muncul. Klik <strong>Connect</strong>. Pesan status akan muncul saat PowerPoint mempersiapkan presentasi online Anda.<div class="centerImage"><img loading="lazy" style="width: 520px; height: 439px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/sharing_connect.png" width="520" height="439"></div></li><li>Sebuah tautan akan muncul. Jika tidak sudah terpilih, pilih tautan tersebut.</li><li>Klik <strong>Copy Link</strong> untuk membuat salinan tautan, yang dapat Anda tempel di mana saja—termasuk Facebook, blog, atau email. Pastikan setiap penonton Anda menerima salinan tautan sebelum Anda memulai presentasi.<div class="centerImage"><img loading="lazy" style="width: 516px; height: 424px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/sharing_start_presentation.png" width="516" height="424"></div></li><li>Klik <strong>Start Presentation</strong>.</li><li>Sajikan slide show seperti biasa, menggunakan mouse atau keyboard untuk memajukan slide.</li><li>Ketika Anda selesai, klik <strong>End Online Presentation</strong>.<div class="centerImage"><img loading="lazy" style="width: 744px; height: 213px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/sharing_end_presentation_command.png" width="744" height="213"></div></li><li>Sebuah kotak dialog akan muncul untuk mengkonfirmasi bahwa Anda ingin mengakhiri presentasi. Klik <strong>End Online Presentation</strong>.<div class="centerImage"><img loading="lazy" style="width: 720px; height: 139px;" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/sharing_end_online_presentation.png" width="720" height="139"></div></li></ol>
            <h3>Tantangan!</h3>
            <ol class="numbered-list"><li>Buka <a href="https://media.gcflearnfree.org/content/56e6fd98c87fa60f2092502e_03_14_2016/powerpoint2016_sharingonline_practice.pptx">presentasi latihan kami</a>.</li><li><strong>Ekspor</strong> presentasi latihan sebagai video, dan simpan di komputer Anda.</li><li>Jika Anda memiliki teman atau anggota keluarga dengan koneksi internet, coba <strong>menyajikan slide show secara online</strong>.</li></ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Pengantar Gmail',
            'course_id' => '61',
            'desc' => '<h3>Pendahuluan</h3>
            <p><strong>Gmail</strong> adalah layanan email gratis yang disediakan oleh Google. Dalam banyak hal, Gmail mirip dengan layanan email lainnya: Anda dapat <strong>mengirim dan menerima email</strong>, <strong>memblokir spam</strong>, membuat <strong>buku alamat</strong>, dan melakukan tugas-tugas email dasar lainnya. Namun, Gmail juga memiliki beberapa fitur unik yang menjadikannya salah satu layanan email online yang paling populer.</p>
            <p>Dalam pelajaran ini, kita akan membahas beberapa <strong>fitur</strong> dan <strong>keuntungan</strong> dari Gmail, serta memberikan gambaran tentang <strong>jendela Gmail</strong>.</p>
            <div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073847dd48174331f5193_01_17_2014/intro_inbox_gmail2.jpg" alt="kotak masuk Gmail" title="kotak masuk Gmail"></div>
            <h3>Akun Google</h3>
            <p>Membuat <strong>akun Google</strong> diperlukan untuk mengakses <strong>Gmail</strong> karena Gmail adalah salah satu dari banyak layanan yang ditawarkan oleh Google kepada pengguna terdaftar. Mendaftar untuk akun Google gratis dan mudah, dan memberi nama alamat <strong>Gmail</strong> baru Anda akan menjadi bagian dari proses pendaftaran. Ini berarti setiap kali Anda masuk ke Gmail, Anda secara otomatis masuk ke akun Google Anda. Anda akan dapat dengan mudah mengakses layanan Google lainnya seperti <strong>Google Docs</strong>, <strong>Kalender</strong>, dan <strong>YouTube</strong>.</p>
            <p>Tentu saja, Anda tidak harus menggunakan semua fitur ini. Anda mungkin hanya ingin fokus pada email untuk saat ini. Namun, jika Anda menginginkan informasi lebih lanjut, Anda dapat melihat tutorial <a title="Google Accounts tutorial" href="https://edu.gcfglobal.org/en/googleaccount/">Akun Google</a> kami, di mana kami membahas beberapa <strong>layanan berbeda</strong> yang ditawarkan Google dan menunjukkan cara mengubah <strong>pengaturan privasi</strong> Anda.</p>
            <h3>Fitur Gmail</h3>
            <p>Gmail menawarkan beberapa <strong>fitur</strong> berguna untuk membuat pengalaman email Anda semulus mungkin, termasuk:</p>
            <ul><li><strong>Penyaringan spam</strong>. Spam adalah nama lain untuk email sampah. Gmail menggunakan teknologi canggih untuk menjaga spam keluar dari kotak masuk Anda. Sebagian besar spam secara otomatis dikirim ke <strong>folder spam terpisah</strong>, dan setelah 30 hari akan dihapus.</li></ul>
            <ul><li><strong>Tampilan Percakapan</strong>. Percakapan email terjadi setiap kali Anda mengirim email bolak-balik dengan orang lain (atau sekelompok orang), sering kali tentang topik atau acara tertentu. Gmail <strong>mengelompokkan</strong> email ini secara default, yang membuat kotak masuk Anda lebih teratur.</li><li><strong>Obrolan Bawaan</strong>. Alih-alih mengirim email, Anda dapat mengirim <strong>pesan instan</strong> kepada seseorang atau menggunakan fitur <strong>obrolan suara</strong> dan <strong>video</strong> jika komputer Anda memiliki mikrofon dan/atau webcam.</li><li><strong>Panggilan Telepon</strong>. Fitur ini mirip dengan obrolan suara, kecuali bahwa fitur ini memungkinkan Anda untuk menghubungi nomor telepon sebenarnya untuk menelepon <strong>telepon mana pun di dunia</strong>. <strong>Gratis</strong> untuk melakukan panggilan ke mana saja di Amerika Serikat atau Kanada, dan Anda dapat melakukan panggilan ke negara lain dengan tarif yang relatif rendah.</li></ul>
            <h3>Kenali Antarmuka Gmail</h3>
            <p>Saat Anda bekerja dengan Gmail, Anda akan menggunakan <strong>antarmuka utama Gmail</strong>. Jendela ini berisi <strong>kotak masuk</strong> Anda, dan memungkinkan Anda menavigasi ke <strong>kontak</strong> Anda, <strong>pengaturan email</strong>, dan lainnya. Juga, jika Anda menggunakan layanan Google lainnya seperti <strong>YouTube</strong> atau <strong>Kalender</strong>, Anda dapat mengaksesnya dari bagian atas jendela Gmail.</p>
            <p class="chevron">Klik tombol-tombol di bawah ini untuk mempelajari bagian-bagian berbeda dari antarmuka Gmail.</p>
            <div><div class="ict tooltip"><span class="ict-edit-option">edit hotspots</span><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073847dd48174331f5193_01_17_2014/intro_LG_v6.jpg" alt="antarmuka interaktif Gmail" title="antarmuka interaktif Gmail"><div class="hotspot ui-draggable ui-draggable-handle ui-draggable-disabled" style="left: 153px; top: 12px;"></div><div class="hotspot-content ui-draggable ui-draggable-handle ui-draggable-disabled" style="width: 250px; left: 163px; top: 22px; display: none;"><span class="hsPosition"></span><span class="hsDelete"></span><h2>Menu Drop-Down Gmail</h2><p><strong>Menu drop-down Gmail</strong> memungkinkan Anda menavigasi ke <strong>Mail</strong>, <strong>Kontak</strong>, dan <strong>Daftar Tugas</strong>. Jika Anda pernah tersesat, Anda bisa klik opsi Gmail untuk kembali ke tampilan default.</p></div><div class="hotspot ui-draggable ui-draggable-handle ui-draggable-disabled" style="left:119px;top:145px;"></div><div class="hotspot-content ui-draggable ui-draggable-handle ui-draggable-disabled" style="width: 250px; left: 129px; top: 155px; display: none;"><span class="hsPosition"></span><span class="hsDelete"></span><h2>Panel Menu Kiri</h2><p><strong>Panel menu kiri</strong> memungkinkan Anda <strong>menyusun</strong> email baru, menavigasi ke <strong>email</strong> Anda, melihat <strong>email terkirim</strong>, dan mengelola <strong>label</strong> Anda, serta tugas lainnya.</p></div><div class="hotspot ui-draggable ui-draggable-handle ui-draggable-disabled" style="left: 102px; top: 303px;"></div><div class="hotspot-content ui-draggable ui-draggable-handle ui-draggable-disabled" style="width: 250px; left: 112px; top: 313px; display: none;"><span class="hsPosition"></span><span class="hsDelete"></span><h2>Label</h2><p><strong>Label</strong> memungkinkan Anda mengatur pesan di kotak masuk Anda. Anda dapat menerapkan <strong>lebih dari satu label</strong> ke pesan apa pun dan <strong>membuat label baru</strong> untuk mengatur pesan Anda sesuai keinginan Anda. Anda juga dapat memilih <strong>warna</strong> untuk label Anda agar lebih menonjol.</p></div><div class="hotspot ui-draggable ui-draggable-handle ui-draggable-disabled" style="left:382px;top:296px;"></div><div class="hotspot-content ui-draggable ui-draggable-handle ui-draggable-disabled posLeftTop" style="width: 250px; left: 142px; top: 119px; display: none;"><span class="hsPosition"></span><span class="hsDelete"></span><h2>Kotak Masuk</h2><p><strong>Kotak masuk</strong> Anda adalah tempat pesan yang diterima akan muncul. Anda dapat mengklik pesan untuk membacanya.<br></p></div><div class="hotspot ui-draggable ui-draggable-handle ui-draggable-disabled" style="left:667px;top:30px;"></div><div class="hotspot-content ui-draggable ui-draggable-handle ui-draggable-disabled" style="width: 250px; left: 677px; top: 40px; display: none;"><span class="hsPosition"></span><span class="hsDelete"></span><h2>Kotak Pencarian</h2><p>Jika Anda kesulitan menemukan email penting, Anda dapat mulai mengetik di <strong>kotak pencarian</strong> untuk menemukannya.</p></div><div class="hotspot ui-draggable ui-draggable-handle ui-draggable-disabled" style="left: 822px; top: 125px;"></div><div class="hotspot-content ui-draggable ui-draggable-handle posLeftTop ui-draggable-disabled" style="width: 250px; left: 582px; top: -52px; display: none;"><span class="hsPosition"></span><span class="hsDelete"></span><h2>Panel Samping</h2><p><strong>Panel samping</strong> memungkinkan Anda dengan cepat mengakses kalender, membuat daftar, membuat catatan, dan melacak tenggat waktu.<br></p></div></div></div>
            <div><br></div>
            <h3>Tantangan!</h3>
            <p>Jawab pertanyaan-pertanyaan berikut. Anda bisa menuliskan jawaban Anda atau hanya memikirkannya.</p>
            <ol class="numbered-list"><li>Apa <strong>keuntungan</strong> memiliki akun Gmail?</li><li>Adakah <strong>fitur</strong> di Gmail yang akan Anda gunakan selain email?</li><li><strong>Opsional</strong>: Jika Anda sudah memiliki akun Google, masuklah, lalu jelajahi antarmuka Gmail.</li></ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Menyiapkan Akun Gmail',
            'course_id' => '62',
            'desc' => '<h3>Pendahuluan</h3>
            <p>Membuat akun Gmail itu mudah. Anda akan memulai dengan membuat akun Google, dan selama proses pendaftaran yang cepat, Anda akan memilih nama akun Gmail Anda. Dalam pelajaran ini, kami akan menunjukkan cara <strong>menyiapkan</strong> <strong>akun Google untuk Gmail</strong>, menambahkan dan mengedit <strong>kontak</strong>, serta mengedit <strong>pengaturan email</strong> Anda.</p>
            
            <h3>Menyiapkan akun Gmail</h3>
            <p>Untuk membuat alamat <strong>Gmail</strong>, Anda harus terlebih dahulu membuat akun <strong>Google</strong>. Gmail akan mengarahkan Anda ke halaman pendaftaran akun Google. Anda perlu memberikan beberapa informasi dasar seperti <strong>nama</strong>, <strong>tanggal lahir</strong>, <strong>jenis kelamin</strong>, dan <strong>lokasi</strong>. Anda juga perlu memilih <strong>nama</strong> untuk alamat Gmail baru Anda. Setelah Anda membuat akun, Anda akan dapat mulai menambahkan <strong>kontak</strong> dan menyesuaikan <strong>pengaturan email</strong> Anda.</p>
            
            <h4 class="clearfl">Untuk membuat akun:</h4>
            <ol class="numbered-list">
              <li>Buka <a target="_blank" href="http://www.gmail.com">www.gmail.com</a>.</li>
              <li>Klik <strong>Buat akun</strong>.
                <div>
                  <img loading="lazy" src="https://media.gcflearnfree.org/content/55e0738f7dd48174331f5194_01_17_2014/create_account_button.jpg" style="width: 505px; height: 562.283px;" alt="Mengklik tautan buat akun" title="Mengklik tautan buat akun" width="505" height="562.283">
                </div>
              </li>
              <li>Formulir <strong>pendaftaran</strong> akan muncul. Ikuti petunjuk dengan memasukkan informasi yang diperlukan.
                <div>
                  <img loading="lazy" src="https://media.gcflearnfree.org/content/55e0738f7dd48174331f5194_01_17_2014/create_username.jpg" alt="Mengisi formulir pendaftaran" title="Mengisi formulir pendaftaran">
                </div>
              </li>
              <li>Selanjutnya, masukkan <strong>nomor telepon</strong> Anda untuk memverifikasi akun Anda. Google menggunakan proses verifikasi dua langkah untuk keamanan Anda.
                <div>
                  <img loading="lazy" src="https://media.gcflearnfree.org/content/55e0738f7dd48174331f5194_01_17_2014/create_verify_phone.jpg" alt="verifikasi nomor telepon" title="verifikasi nomor telepon">
                </div>
              </li>
              <li>Anda akan menerima pesan teks dari Google dengan <strong>kode verifikasi</strong>. <strong>Masukkan kode</strong> tersebut untuk menyelesaikan verifikasi akun.
                <div>
                  <img loading="lazy" src="https://media.gcflearnfree.org/content/55e0738f7dd48174331f5194_01_17_2014/create_enter_verification.jpg" alt="mengetik kode verifikasi lalu mengklik tombol Verifikasi" title="mengetik kode verifikasi lalu mengklik tombol Verifikasi">
                </div>
              </li>
              <li>Selanjutnya, Anda akan melihat formulir untuk memasukkan beberapa informasi pribadi Anda, seperti nama dan tanggal lahir.
                <div>
                  <img loading="lazy" src="https://media.gcflearnfree.org/content/55e0738f7dd48174331f5194_01_17_2014/create_personal_info.jpg" alt="Masukkan informasi pribadi" title="Masukkan informasi pribadi">
                </div>
              </li>
              <li>Tinjau <a target="_blank" href="http://www.google.com/intl/en/policies/terms/">Persyaratan Layanan</a> dan <a target="_blank" href="http://www.google.com/intl/en/policies/privacy/">Kebijakan Privasi</a> Google, lalu klik <strong>Saya setuju</strong>.
                <div>
                  <img loading="lazy" src="https://media.gcflearnfree.org/content/55e0738f7dd48174331f5194_01_17_2014/create_privacy_terms.jpg" alt="Mengklik tombol Saya Setuju" title="Mengklik tombol Saya Setuju">
                </div>
              </li>
              <li>Akun Anda akan dibuat.
                <div>
                  <img loading="lazy" src="https://media.gcflearnfree.org/content/55e0738f7dd48174331f5194_01_17_2014/create_google_account.jpg" alt="membuka menu akun di pojok kanan atas Google" title="membuka menu akun di pojok kanan atas Google">
                </div>
              </li>
            </ol>
            
            <p class="attention">Seperti halnya layanan online lainnya, penting untuk memilih <strong>kata sandi yang kuat</strong> - dengan kata lain, yang sulit ditebak orang lain. Untuk informasi lebih lanjut, tinjau pelajaran kami tentang <a href="https://edu.gcfglobal.org/en/internetsafety/creating-strong-passwords/1/">membuat kata sandi yang kuat</a>.</p>
            
            <h3>Masuk ke akun Anda</h3>
            <p>Saat Anda pertama kali membuat akun, Anda akan secara otomatis masuk. Sebagian besar waktu, bagaimanapun, Anda perlu <strong>masuk</strong> ke akun Anda dan <strong>keluar</strong> saat Anda selesai menggunakannya. Keluar sangat penting jika Anda menggunakan komputer bersama (misalnya di <strong>perpustakaan</strong> atau <strong>kantor</strong>) karena mencegah orang lain melihat email Anda.</p>
            
            <h4>Untuk masuk:</h4>
            <ol class="numbered-list">
              <li>Buka <a target="_blank" href="http://www.gmail.com">www.gmail.com</a>.</li>
              <li>Ketik <strong>nama pengguna</strong> (alamat email Anda) dan <strong>kata sandi</strong>, lalu klik <strong>Berikutnya</strong>.
                <div>
                  <img loading="lazy" src="https://media.gcflearnfree.org/content/55e0738f7dd48174331f5194_01_17_2014/create_sign_in.jpg" style="width: 466px; height: 515.017px;" alt="Masuk" title="Masuk" width="466" height="515.017">
                </div>
              </li>
            </ol>
            
            <h4>Untuk keluar:</h4>
            <p>Di pojok kanan atas halaman, temukan lingkaran yang memiliki inisial pertama Anda (jika Anda sudah memilih gambar avatar, itu akan menampilkan gambar tersebut). Untuk keluar, klik lingkaran dan pilih <strong>Keluar</strong>.</p>
            <div>
              <img loading="lazy" src="https://media.gcflearnfree.org/content/55e0738f7dd48174331f5194_01_17_2014/create_sign_out.jpg" style="width: 384px; height: 252px;" alt="Keluar" title="Keluar" width="384" height="252">
            </div>
            
            <h3>Pengaturan email</h3>
            <p>Sesekali, Anda mungkin ingin membuat penyesuaian pada <strong>tampilan</strong> atau <strong>perilaku</strong> Gmail. Misalnya, Anda bisa membuat <strong>tanda tangan</strong> atau <strong>balasan liburan</strong>, mengedit <strong>label</strong> Anda, atau mengubah <strong>tema</strong>. Penyesuaian ini dapat dilakukan dari <strong>pengaturan email</strong> Anda.</p>
            
            <h4>Untuk mengakses pengaturan email Anda:</h4>
            <ol class="numbered-list">
              <li>Klik ikon <strong>gerigi</strong> di pojok kanan atas halaman, lalu pilih <strong>Pengaturan</strong>.
                <div>
                  <img loading="lazy" src="https://media.gcflearnfree.org/content/55e0738f7dd48174331f5194_01_17_2014/create_account_settings.jpg" style="width: 254px; height: 377.65px;" alt="Menuju pengaturan email" title="Menuju pengaturan email" width="254" height="377.65">
                </div>
              </li>
              <li>Dari sini, Anda dapat mengklik salah satu <strong>kategori</strong> di bagian atas untuk mengedit pengaturan yang diinginkan.
                <div class="centerImage">
                  <img loading="lazy" style="width: 755px; height: 394px;" class="imageBorder" alt="Kategori pengaturan umum" src="https://media.gcflearnfree.org/content/55e0738f7dd48174331f5194_01_17_2014/account_settings_category.jpg" width="755" height="394">
                </div>
              </li>
            </ol>
            
            <h3>Menambahkan kontak</h3>
            <p>Seperti semua penyedia email utama, Gmail memungkinkan Anda menyimpan buku alamat <strong>kontak</strong>
            
             sehingga Anda tidak perlu menghafal alamat email semua orang. Anda juga dapat menambahkan informasi kontak lainnya, seperti <strong>nomor telepon</strong>, <strong>tanggal lahir</strong>, dan <strong>alamat fisik</strong>.</p>
            
            <h4>Untuk menambahkan kontak:</h4>
            <ol class="numbered-list">
              <li>Klik tombol <strong>Google apps</strong>.
                <div>
                  <img loading="lazy" src="https://media.gcflearnfree.org/content/55e0738f7dd48174331f5194_01_17_2014/create_apps_button.jpg" style="width: 268px; height: 130.2px;" alt="Tombol Google apps" title="Tombol Google apps" width="268" height="130.2">
                </div>
              </li>
              <li>Klik tombol <strong>Kontak</strong> di menu drop-down.
                <div>
                  <img loading="lazy" src="https://media.gcflearnfree.org/content/55e0738f7dd48174331f5194_01_17_2014/create_contacts_button.jpg" style="width: 375px; height: 410.517px;" alt="Mengklik tombol kontak" title="Mengklik tombol kontak" width="375" height="410.517">
                </div>
              </li>
              <li>Layar kontak Anda akan muncul. Klik tombol <strong>Tambah kontak baru</strong> di pojok kanan bawah.
                <strong>
                  <div>
                    <img loading="lazy" src="https://media.gcflearnfree.org/content/55e0738f7dd48174331f5194_01_17_2014/create_add_contact.jpg" style="width: 127px; height: 122px;" alt="Mengklik tambah kontak baru" title="Mengklik tambah kontak baru" width="127" height="122">
                  </div>
                  <br>
                </strong>
              </li>
              <li>Masukkan informasi kontak, lalu klik <strong>Simpan</strong>.
                <div>
                  <img loading="lazy" src="https://media.gcflearnfree.org/content/55e0738f7dd48174331f5194_01_17_2014/create_new_contact_form.jpg" alt="memasukkan informasi kontak dan mengklik tombol Simpan" title="memasukkan informasi kontak dan mengklik tombol Simpan">
                </div>
              </li>
            </ol>
            
            <h4>Untuk mengedit kontak:</h4>
            <ol class="numbered-list">
              <li>Di <strong>menu drop-down Google apps</strong>, pilih <strong>Kontak</strong>.
                <div>
                  <img loading="lazy" src="https://media.gcflearnfree.org/content/55e0738f7dd48174331f5194_01_17_2014/create_contacts_button.jpg" style="width: 337px; height: 368.083px;" alt="Mengklik kontak" title="Mengklik kontak" width="337" height="368.083">
                </div>
              </li>
              <li>Temukan kontak yang ingin Anda edit, lalu klik <strong>Edit Kontak</strong>.
                <div>
                  <img loading="lazy" src="https://media.gcflearnfree.org/content/55e0738f7dd48174331f5194_01_17_2014/create_edit_contact.jpg" style="width: 497px; height: 191.567px;" alt="Mengedit kontak" title="Mengedit kontak" width="497" height="191.567">
                </div>
              </li>
              <li>Anda sekarang dapat membuat <strong>perubahan</strong> yang Anda inginkan pada kontak tersebut.
                <div>
                  <img loading="lazy" src="https://media.gcflearnfree.org/content/55e0738f7dd48174331f5194_01_17_2014/create_edit_info.jpg" alt="Mengedit kontak" title="Mengedit kontak">
                </div>
              </li>
            </ol>
            
            <p class="moreInfo">Secara default, saat Anda mengirim email ke alamat baru, Gmail menambahkan alamat tersebut ke kontak Anda. Anda kemudian dapat membuka kontak Anda untuk <strong>mengedit</strong> informasi orang tersebut sesuai kebutuhan.</p>
            
            <h4>Mengimpor email dan kontak</h4>
            <p>Anda mungkin sudah memiliki daftar kontak dari alamat email lain, dan akan banyak pekerjaan untuk memasukkan semua informasi ini secara manual. Gmail memungkinkan Anda mengimpor kontak dari akun email lain, dan Anda bahkan dapat mengimpor semua pesan email Anda dari akun tersebut. Beberapa penyedia email didukung, termasuk <strong>Yahoo!</strong>, <strong>Hotmail</strong>, dan <strong>AOL</strong>.</p>
            
            <h4>Untuk menambahkan akun lain:</h4>
            <ol class="numbered-list">
              <li>Klik ikon gerigi di pojok kanan atas halaman, lalu pilih <strong>Pengaturan</strong>.</li>
              <li>Buka <strong>Akun</strong> dan klik <strong>Tambah akun email</strong>. Anda kemudian dapat mengikuti petunjuk di layar untuk mengimpor email Anda.
                <div>
                  <img loading="lazy" src="https://media.gcflearnfree.org/content/55e0738f7dd48174331f5194_01_17_2014/create_add_mail_account.jpg" alt="Mengimpor email" title="Mengimpor email">
                </div>
              </li>
            </ol>
            
            <h3>Tantangan!</h3>
            <ol class="numbered-list">
              <li>Jika Anda belum memiliki akun Gmail, <strong>buat</strong> satu.</li>
              <li><strong>Buka</strong> Gmail.</li>
              <li><strong>Arahkan</strong> ke pengaturan Gmail Anda.</li>
              <li><strong>Atur preferensi</strong> Anda di pengaturan Gmail Anda.</li>
              <li>Tambahkan <strong>kontak baru</strong>. Anda bisa menambahkan yang sudah Anda kenal, atau jika Anda mau, Anda bisa membuat satu dengan informasi berikut:<br>
                <strong>Nama</strong>: Julia Fillory<br>
                <strong>Email</strong>: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="771d111e1b1b18050e37101a161e1b5914181a">[email&#160;protected]</a>
              </li>
            </ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Mengirim Email',
            'course_id' => '63',
            'desc' => '<h3>Pendahuluan</h3>
            <p>Sekarang setelah Anda membuat akun Gmail, Anda dapat mulai mengirim pesan email. Menulis email bisa semudah mengetik pesan, atau Anda dapat menggunakan <strong>pemformatan teks</strong>, <strong>lampiran</strong>, dan <strong>tanda tangan</strong> untuk menyesuaikan pesan Anda.</p>
            <p>Dalam pelajaran ini, kami akan menunjukkan cara <strong>menyusun email</strong>, menambahkan <strong>lampiran</strong>, dan membuat <strong>tanda tangan</strong> yang akan muncul di semua pesan yang Anda kirim.</p>
            <p class="chevron">Tonton video di bawah ini untuk mempelajari lebih lanjut tentang mengirim email dengan Gmail.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/2eH0JbEE-6k?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"></iframe></div>
            
            <h3>Mengirim email</h3>
            <p>Saat Anda menulis email, Anda akan menggunakan <strong>jendela penyusunan</strong>. Di sinilah Anda akan menambahkan <strong>alamat email penerima</strong>, <strong>subjek</strong>, dan <strong>isi</strong> email, yang merupakan pesan itu sendiri. Anda juga dapat menambahkan berbagai jenis <strong>pemformatan teks</strong>, serta satu atau lebih <strong>lampiran</strong>. Jika Anda mau, Anda bahkan dapat membuat <strong>tanda tangan</strong> yang akan ditambahkan ke akhir setiap email yang Anda kirim.</p>
            
            <h4 class="clearfl">Jendela penyusunan</h4>
            <p class="chevron">Klik tombol-tombol di interaktif di bawah ini untuk mempelajari tentang berbagai bagian dari jendela penyusunan.</p>
            <div></div>
            <div><div class="ict tooltip"><span class="ict-edit-option">edit hotspots</span><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073917dd48174331f5195_01_17_2014/sending_compose_LG2.jpg"><div class="hotspot ui-draggable ui-draggable-handle ui-draggable-disabled" style="left:639px;top:103px;"></div><div class="hotspot-content ui-draggable ui-draggable-handle posLeftTop ui-draggable-disabled" style="width: 250px; left: 399px; top: -194px; display: none;"><span class="hsPosition"></span><span class="hsDelete"></span><h2>Penerima</h2><p><strong>Penerima</strong> adalah orang-orang yang Anda kirimi email. Anda harus mengetik <strong>alamat email</strong> untuk setiap penerima. Sebagian besar waktu, Anda akan menambahkan penerima ke <strong>kolom Kepada:</strong>, tetapi Anda juga dapat menambahkan penerima ke <strong>kolom Cc:</strong> atau <strong>Bcc:</strong>.</p></div><div class="hotspot ui-draggable ui-draggable-handle ui-draggable-disabled" style="left:775px;top:152px;"></div><div class="hotspot-content ui-draggable ui-draggable-handle posLeftTop ui-draggable-disabled" style="width: 250px; left: 535px; top: -337px; display: none;"><span class="hsPosition"></span><span class="hsDelete"></span><h2>Cc dan Bcc</h2><p><strong>Cc</strong> adalah singkatan dari <strong>carbon copy</strong>. Ini digunakan saat Anda ingin mengirim email kepada seseorang yang bukan penerima utama. Ini membantu menjaga orang tersebut <strong>tetap terhubung</strong> sambil memberi tahu mereka bahwa mereka mungkin tidak perlu membalas pesan Anda. <strong>Bcc</strong> adalah singkatan dari <strong>blind carbon copy</strong>. Ini hampir sama dengan Cc, kecuali semua alamat email di kolom Bcc <strong>tersembunyi</strong>, membuatnya ideal saat mengirim email ke <strong>banyak penerima</strong> atau saat <strong>privasi</strong> dibutuhkan.</p></div><div class="hotspot ui-draggable ui-draggable-handle ui-draggable-disabled" style="left:405px;top:200px;"></div><div class="hotspot-content ui-draggable ui-draggable-handle posLeftTop ui-draggable-disabled" style="width: 250px; left: 165px; top: -1px; display: none;"><span class="hsPosition"></span><span class="hsDelete"></span><h2>Subjek</h2><p><strong>Subjek</strong> harus menyatakan tentang apa email tersebut. Buat subjek <strong>singkat</strong>, tetapi beri penerima gambaran yang wajar tentang apa yang ada dalam pesan.</p></div><div class="hotspot ui-draggable ui-draggable-handle ui-draggable-disabled" style="left: 26px; top: 588px;"></div><div class="hotspot-content ui-draggable ui-draggable-handle posLeftTop ui-draggable-disabled" style="width: 250px; left: 36px; top: 598px; display: none;"><span class="hsPosition"></span><span class="hsDelete"></span><h2>Tombol Kirim</h2><p>Ketika Anda puas dengan pesan Anda, klik <strong>Kirim</strong> untuk mengirimkannya ke penerima.</p></div><div class="hotspot ui-draggable ui-draggable-handle ui-draggable-disabled" style="left:193px;top:613px;"></div><div class="hotspot-content ui-draggable ui-draggable-handle posLeftTop ui-draggable-disabled" style="width: 250px; left: -47px; top: 340px; display: none;"><span class="hsPosition"></span><span class="hsDelete"></span><h2>Opsi Pemformatan</h2><p>Klik tombol <strong>Pemformatan</strong> untuk mengakses <strong>opsi pemformatan</strong>. Pemformatan memungkinkan Anda mengubah tampilan dan nuansa pesan Anda. Misalnya, Anda dapat mengubah <strong>gaya font</strong>, <strong>ukuran</strong>, dan <strong>warna</strong>, serta menyertakan <strong>tautan</strong>.</p></div><div class="hotspot ui-draggable ui-draggable-handle ui-draggable-disabled" style="left:240px;top:585px;"></div><div class="hotspot-content ui-draggable ui-draggable-handle posLeftTop ui-draggable-disabled" style="width: 250px; left: 0px; top: 288px; display: none;"><span class="hsPosition"></span><span class="hsDelete"></span><h2>Menambahkan Lampiran</h2><p><strong>Lampiran</strong> adalah <strong>file</strong> (seperti gambar atau dokumen) yang dikirim bersama pesan email. Gmail memungkinkan Anda menyertakan <strong>beberapa lampiran</strong>. Klik tombol <strong>lampiran</strong> untuk menyertakan lampiran dengan email.</p></div><div class="hotspot ui-draggable ui-draggable-handle ui-draggable-disabled" style="left: 178px; top: 272px;"></div><div class="hotspot-content ui-draggable ui-draggable-handle posLeftTop ui-draggable-disabled" style="width: 250px; left: 188px; top: 282px; display: none;"><span class="hsPosition"></span><span class="hsDelete"></span><h2>Isi</h2><p><strong>Isi</strong> adalah teks sebenarnya dari email. Umumnya, Anda akan menulis ini seperti surat biasa, dengan salam, satu atau lebih paragraf, dan penutup dengan nama Anda.</p></div></div></div>
            <div class="centerImage"><div class="ict tooltip"><span class="ict-edit-option"></span><span class="ict-edit-option"></span><span class="ict-edit-option"><br></span><div class="hotspot-content ui-draggable ui-draggable-handle posLeftTop ui-draggable-disabled" style="width: 250px; left: -237px; top: -325px; display: none;" rel="width: 250px; left: -237px; top: -325px; display: none;"><span class="hsPosition"></span><span class="hsDelete"></span><h2>Cc dan Bcc</h2><p><strong>Cc</strong> adalah singkatan dari <strong>carbon copy</strong>. Ini digunakan saat Anda ingin mengirim email kepada seseorang yang bukan penerima utama. Ini membantu menjaga orang tersebut <strong>tetap terhubung</strong> sambil memberi tahu mereka bahwa mereka mungkin tidak perlu membalas pesan Anda. <strong>Bcc</strong> adalah singkatan dari <strong>blind carbon copy</strong>. Ini hampir sama dengan Cc, kecuali semua alamat email di kolom Bcc <strong>tersembunyi</strong>, membuatnya ideal saat mengirim email ke <strong>banyak penerima</strong> atau saat <strong>privasi</strong> dibutuhkan.</p></div></div></div>
            
            <h4>Untuk mengirim email:</h4>
            <ol class="
            
            transcript"><li><p>Di sebelah kiri kotak masuk Anda, klik tombol <strong>Tulis</strong>.</p></li><li><p>Jendela penyusunan akan muncul di sudut kanan bawah halaman.</p></li><li><p>Anda perlu menambahkan satu atau lebih penerima ke <strong>kolom Kepada:</strong>. Anda dapat melakukan ini dengan mengetik satu atau lebih alamat email, dipisahkan dengan koma.</p></li><li><p>Ketik <strong>subjek</strong> untuk pesan Anda.</p></li><li><p>Di badan pesan, ketik pesan yang ingin Anda kirim. Ketika Anda selesai menulis pesan, klik <strong>kirim</strong>.</p></li></ol>
            
            <h3>Menambahkan lampiran</h3>
            <p>Email Anda tidak harus berisi teks saja. Anda juga dapat menyertakan <strong>lampiran</strong> dalam pesan Anda. Lampiran bisa berupa file apa saja, termasuk gambar, file, dan dokumen. Setiap email dapat berisi hingga <strong>25 MB</strong> lampiran.</p>
            <p>Ingat bahwa Anda tidak boleh membuka lampiran dari email yang tidak Anda percayai, karena lampiran ini dapat berisi <strong>virus</strong> dan <strong>malware</strong> yang berbahaya. Selain itu, pastikan bahwa lampiran Anda sesuai untuk penerima email Anda dan sesuai untuk bekerja.</p>
            <h4>Untuk menambahkan lampiran:</h4>
            <ol class="transcript"><li><p>Saat menyusun email, klik tombol <strong>lampiran</strong> di bagian bawah jendela penyusunan.</p></li><li><p>Dialog <strong>Buka File</strong> akan muncul. Pilih file yang ingin Anda lampirkan, lalu klik <strong>Buka</strong>.</p></li><li><p>Lampiran akan muncul di bagian bawah jendela penyusunan.</p></li></ol>
            
            <h3>Membuat tanda tangan</h3>
            <p>Tanda tangan adalah teks opsional yang muncul di bagian bawah setiap email yang Anda kirim. Tanda tangan biasanya mencakup nama dan informasi kontak Anda, seperti nomor telepon atau alamat email alternatif. Tanda tangan memungkinkan email Anda terlihat lebih profesional, dan menghemat waktu Anda sehingga Anda tidak perlu mengetik informasi ini di akhir setiap email yang Anda kirim.</p>
            
            <h4>Untuk membuat tanda tangan:</h4>
            <ol class="transcript"><li><p>Klik ikon <strong>gerigi</strong> di sudut kanan atas layar, lalu pilih <strong>Setelan</strong>.</p></li><li><p>Gulir ke bawah hingga Anda menemukan bagian <strong>Tanda tangan</strong>.</p></li><li><p>Ketikkan tanda tangan yang Anda inginkan di kotak teks. Anda dapat menambahkan informasi kontak Anda, atau informasi apa pun yang Anda inginkan.</p></li><li><p>Setelah selesai, gulir ke bawah ke bagian bawah halaman dan klik <strong>Simpan Perubahan</strong>.</p></li></ol>
            
            <h4 class="clearfl">Tanda tangan Anda akan muncul di bagian bawah setiap email yang Anda kirim. Jika Anda mau, Anda dapat kembali ke setelan Gmail kapan saja untuk mengedit tanda tangan Anda.</h4>
            <p class="carouselTitle">Untuk mengirim email:</p>
            <ol class="carouselList"><li><span class="carouselCircle">1</span><p>Di sebelah kiri kotak masuk Anda, klik tombol <strong>Tulis</strong>.</p></li><li><span class="carouselCircle">2</span><p>Jendela penyusunan akan muncul di sudut kanan bawah halaman.</p></li><li><span class="carouselCircle">3</span><p>Anda perlu menambahkan satu atau lebih penerima ke <strong>kolom Kepada:</strong>. Anda dapat melakukan ini dengan mengetik satu atau lebih alamat email, dipisahkan dengan koma.</p></li><li><span class="carouselCircle">4</span><p>Ketik <strong>subjek</strong> untuk pesan Anda.</p></li><li><span class="carouselCircle">5</span><p>Di badan pesan, ketik pesan yang ingin Anda kirim. Ketika Anda selesai menulis pesan, klik <strong>kirim</strong>.</p></li></ol>
            
            <h3>Menambahkan lampiran</h3>
            <p>Email Anda tidak harus berisi teks saja. Anda juga dapat menyertakan <strong>lampiran</strong> dalam pesan Anda. Lampiran bisa berupa file apa saja, termasuk gambar, file, dan dokumen. Setiap email dapat berisi hingga <strong>25 MB</strong> lampiran.</p>
            <p>Ingat bahwa Anda tidak boleh membuka lampiran dari email yang tidak Anda percayai, karena lampiran ini dapat berisi <strong>virus</strong> dan <strong>malware</strong> yang berbahaya. Selain itu, pastikan bahwa lampiran Anda sesuai untuk penerima email Anda dan sesuai untuk bekerja.</p>
            <h4>Untuk menambahkan lampiran:</h4>
            <ol class="transcript"><li><p>Saat menyusun email, klik tombol <strong>lampiran</strong> di bagian bawah jendela penyusunan.</p></li><li><p>Dialog <strong>Buka File</strong> akan muncul. Pilih file yang ingin Anda lampirkan, lalu klik <strong>Buka</strong>.</p></li><li><p>Lampiran akan muncul di bagian bawah jendela penyusunan.</p></li></ol>
            
            <h3>Membuat tanda tangan</h3>
            <p>Tanda tangan adalah teks opsional yang muncul di bagian bawah setiap email yang Anda kirim. Tanda tangan biasanya mencakup nama dan informasi kontak Anda, seperti nomor telepon atau alamat email alternatif. Tanda tangan memungkinkan email Anda terlihat lebih profesional, dan menghemat waktu Anda sehingga Anda tidak perlu mengetik informasi ini di akhir setiap email yang Anda kirim.</p>
            
            <h4>Untuk membuat tanda tangan:</h4>
            <ol class="transcript"><li><p>Klik ikon <strong>gerigi</strong> di sudut kanan atas layar, lalu pilih <strong>Setelan</strong>.</p></li><li><p>Gulir ke bawah hingga Anda menemukan bagian <strong>Tanda tangan</strong>.</p></li><li><p>Ketikkan tanda tangan yang Anda inginkan di kotak teks. Anda dapat menambahkan informasi kontak Anda, atau informasi apa pun yang Anda inginkan.</p></li><li><p>Setelah selesai, gulir ke bawah ke bagian bawah halaman dan klik <strong>Simpan Perubahan</strong>.</p></li></ol>
            
            <h4 class="clearfl">Tanda tangan Anda akan muncul di bagian bawah setiap email yang Anda kirim. Jika Anda mau, Anda dapat kembali ke setelan Gmail kapan saja untuk mengedit tanda tangan Anda.</h4>
            <h3>Tantangan!</h3>
            <ol class="numbered-list">
            <li>Buka <strong>Gmail</strong>.</li>
            <li>Buat <strong>tanda tangan</strong> untuk email Anda.</li>
            <li><strong>Tulis</strong> email baru.</li>
            <li>Alamatkan email ke diri Anda sendiri dengan memasukkan alamat email Anda sebagai <strong>penerima</strong>.</li>
            <li>Ketik <strong>subjek</strong> dan pesan di <strong>badan</strong> email.</li>
            <li><strong>Lampirkan</strong> sebuah file atau gambar ke email. Jika Anda tidak memilikinya, Anda dapat mengunduh dan menggunakan gambar di bawah ini dengan mengklik kanan dan memilih <strong>Simpan Gambar Sebagai</strong>.
                <img loading="lazy" longdesc="" class="imageBorder" alt="gambar anjing" src="https://media.gcflearnfree.org/content/55e073917dd48174331f5195_01_17_2014/pug-801826_640.jpg">
            </li>
            <li>Ketika Anda selesai, email Anda seharusnya terlihat seperti ini:
                <div>
                <img loading="lazy" src="https://media.gcflearnfree.org/content/55e073917dd48174331f5195_01_17_2014/sending_challenge.jpg" alt="Contoh email" title="Contoh email">
                </div>
            </li>
            <li><strong>Opsional</strong>: Pilih <strong>kirim</strong> untuk benar-benar mengirim email kepada diri Anda sendiri.</li>
            </ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Membalas Email',
            'course_id' => '64',
            'desc' => '<h3>Pendahuluan</h3>
            <p>Selain <strong>mengirim</strong> email, Anda juga akan <strong>menerima</strong> email dari orang lain. Setelah Anda membaca email, ada beberapa tindakan yang dapat Anda lakukan, termasuk <strong>membuka lampiran</strong> (jika ada), <strong>membalas</strong> pesan, <strong>meneruskannya</strong> ke orang lain, atau—jika Anda tidak punya waktu untuk menangani email tersebut—menambahkan <strong>bintang</strong> untuk mengingatkan diri sendiri agar membacanya nanti. Jika Anda akan <strong>keluar kota</strong> selama beberapa hari atau lebih, Anda juga dapat membuat <strong>balasan liburan otomatis</strong> agar orang-orang tahu bahwa Anda tidak dapat memeriksa email.<br></p>
            <p class="chevron">Tonton video di bawah ini untuk mempelajari lebih lanjut tentang membaca email, membalas, meneruskan, dan membuat balasan liburan.<br></p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/a9e7XNo4agE?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"></iframe></div>
            <h3>Membaca email</h3>
            <p>Secara default, email apa pun yang Anda terima akan masuk ke <strong>kotak masuk</strong> Anda. Anda dapat mengetahui email mana yang <strong>belum dibaca</strong> karena mereka akan ditandai dengan <strong>tebal</strong>. Anda juga dapat melihat nama <strong>pengirim</strong>, <strong>subjek</strong> email, dan beberapa kata pertama dari <strong>isi email</strong>. Ini berarti bahkan sebelum Anda memilih email, Anda dapat mengetahui beberapa hal tentangnya.</p>
            <div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_intro_image.jpg" alt="Membaca email di Gmail" title="Membaca email di Gmail"></div>
            <h4>Untuk membaca email:</h4>
            <ol class="numbered-list"><li>Dari <strong>kotak masuk</strong> Anda, klik email yang ingin Anda baca.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_inbox.jpg" alt="Mengklik email" title="Mengklik email"></div></li><li>Email akan terbuka di jendela yang sama.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_email_open.jpg" alt="Membaca email" title="Membaca email"></div></li></ol>
            <h4>Opsi membaca</h4>
            <p>Selain membaca email, Anda memiliki beberapa opsi membaca.</p>
            <ul><li>Anda dapat mengklik <strong>tampilkan detail</strong> untuk melihat alamat email <strong>pengirim</strong> dan <strong>penerima</strong> lainnya, serta <strong>tanggal</strong> email dikirim.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_show_details.jpg" alt="Melihat detail pesan" title="Melihat detail pesan"></div></li></ul>
            <ul><li>Anda dapat mengklik <strong>Bintang</strong> di sebelah nama pengirim untuk mengingatkan diri sendiri agar membaca email nanti.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_star_message.jpg" alt="Menambahkan bintang" title="Menambahkan bintang"></div></li></ul>
            <ul><li>Anda juga dapat mengklik tombol <strong>Lebih banyak</strong> dan memilih <strong>Tambahkan bintang</strong> dari menu tarik-turun.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_star_menu.jpg" alt="Memilih dan menandai email dari menu Opsi Lainnya" title="Memilih dan menandai email dari menu Opsi Lainnya"></div></li><li>Anda dapat <strong>Membalas</strong>, <strong>Balas ke semua</strong>, atau <strong>Meneruskan</strong> email ke orang lain.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_reply_options.jpg" style="width: 350px; height: 89px;" alt="Opsi balasan" title="Opsi balasan" width="350" height="89"></div></li><li>Anda dapat mengklik <strong>Lebih Baru </strong>atau <strong>Lebih Lama </strong>di sisi kanan jendela untuk melihat email berikutnya (atau sebelumnya).<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_older_message.jpg" style="width: 197px; height: 123px;" alt="Menavigasi antara pesan yang lebih baru dan lebih lama" title="Menavigasi antara pesan yang lebih baru dan lebih lama" width="197" height="123"></div></li></ul>
            <ul><li>Anda dapat kembali ke <strong>Kotak Masuk</strong>.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_back_inbox.jpg" style="width: 232px; height: 125.133px;" alt="Kembali ke kotak masuk dari email yang terbuka" title="Kembali ke kotak masuk dari email yang terbuka" width="232" height="125.13300000000001"></div></li></ul>
            <h4>Membuka lampiran</h4>
            <p>Terkadang Anda akan menerima email yang berisi <strong>lampiran</strong>. Umumnya, Anda perlu <strong>mengunduh</strong> lampiran untuk melihatnya. Namun, banyak jenis file umum, seperti <strong>dokumen Word</strong> dan <strong>gambar</strong>, dapat dilihat dalam jendela browser. Jika lampiran tersebut adalah gambar, Anda juga akan melihat salinan yang lebih kecil dari gambar tersebut—disebut <strong>thumbnail</strong>—di dalam badan email. Anda dapat mengetahui email mana yang berisi lampiran karena mereka akan memiliki ikon <strong>klip kertas</strong> di sebelah kanan <strong>subjek</strong>.<br></p>
            <h4>Untuk membuka lampiran:</h4>
            <ol class="numbered-list"><li>Buka <strong>pesan email</strong> yang berisi lampiran.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_message_attachment.jpg" alt="Membuka email yang memiliki lampiran" title="Membuka email yang memiliki lampiran"></div></li><li>Klik <strong></strong>ikon<strong> Unduh</strong> untuk menyimpan lampiran ke komputer Anda. Jika komputer Anda menanyakan apakah Anda ingin <strong>Membuka</strong> atau <strong>Menyimpan</strong>nya, pilih <strong>Simpan</strong>. Anda kemudian dapat menemukan file di komputer Anda dan mengklik dua kali untuk membukanya.<p><br></p>
            <div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_download_attachment.jpg" style="width: 398px; height: 361.883px;" alt="Mengunduh lampiran" title="Mengunduh lampiran" width="398" height="361.883"></div></li></ol>
            <p class="attention">Anda umumnya hanya boleh membuka lampiran jika berasal dari sumber yang tepercaya. Beberapa lampiran dapat berisi <strong>virus</strong>, terutama file <strong>.exe</strong>. Jika Anda tidak mengenali pengirim—atau jika Anda tidak tahu mengapa seseorang mengirimkan lampiran tersebut—yang terbaik adalah tidak membukanya. Untuk informasi lebih lanjut, baca pelajaran kami tentang <a title="Menangani Lampiran Email" href="https://edu.gcfglobal.org/en/internetsafety/avoiding-spam-and-phishing/1/">menghindari spam dan phishing</a> dari tutorial <a target="_self" href="https://edu.gcfglobal.org/en/internetsafety">Keamanan Internet</a> kami.</p>
            
            <h3>Membalas email</h3>
            <p>Seringkali, Anda akan <strong>membalas</strong> email yang dikirimkan orang lain kepada Anda daripada menyusun pesan baru. Saat Anda<strong> membalas</strong>, alamat email penerima akan otomatis muncul di
            
             bidang <strong>Kepada</strong>, sehingga Anda tidak perlu khawatir mengetiknya. Juga, jika pesan aslinya menyertakan lampiran, lampiran tersebut tidak akan disertakan dalam balasan Anda.</p>
            <h4>Untuk membalas email:</h4>
            <ol class="numbered-list"><li>Dengan email terbuka, klik tombol <strong>Balas</strong> di bawah pesan.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_reply_button.jpg" alt="Membalas email" title="Membalas email"></div></li><li>Anda juga dapat mengklik tombol <strong>Balas</strong> di sisi kanan jendela.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_reply_dropdown.jpg" alt="Tombol Balas di sisi kanan jendela" title="Tombol Balas di sisi kanan jendela"></div></li><li>Jika Anda ingin mengirim pesan ke semua orang yang menerima email asli, pilih opsi <strong>Balas ke semua</strong> dari menu tarik-turun.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_reply_all.jpg" alt="Balas ke semua" title="Balas ke semua"></div></li><li>Kotak <strong>pesan</strong> akan muncul. Ketikkan pesan Anda ke dalam kotak tersebut, lalu klik tombol <strong>Kirim</strong>.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_reply_message.jpg" alt="Mengirim balasan" title="Mengirim balasan"></div></li></ol>
            <p>Setelah Anda mengklik tombol <strong>Kirim</strong>, balasan Anda akan dikirim ke penerima.</p>
            <h4>Meneruskan email</h4>
            <p>Anda juga dapat berbagi email yang Anda terima dengan orang lain dengan menggunakan fitur <strong>Teruskan</strong>. Saat Anda meneruskan email, pesan aslinya akan disalin ke dalam pesan baru. Anda kemudian akan mengetik satu atau lebih alamat email di bidang <strong>Kepada</strong> dan menambahkan pesan, jika mau.</p>
            <h4>Untuk meneruskan email:</h4>
            <ol class="numbered-list"><li>Dengan email terbuka, klik tombol <strong>Teruskan</strong> di bawah pesan.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_forward_button.jpg" alt="Meneruskan email" title="Meneruskan email"></div></li><li>Anda juga dapat mengklik tombol <strong>Teruskan</strong> di sisi kanan jendela.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_forward_dropdown.jpg" alt="Tombol Teruskan di sisi kanan jendela" title="Tombol Teruskan di sisi kanan jendela"></div></li><li>Ketikan satu atau lebih <strong>alamat email</strong> di bidang <strong>Kepada</strong>, tambahkan pesan jika mau, lalu klik tombol <strong>Kirim</strong>.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_forward_message.jpg" alt="Meneruskan pesan" title="Meneruskan pesan"></div></li></ol>
            <p>Setelah Anda mengklik tombol <strong>Kirim</strong>, pesan yang diteruskan akan dikirim ke penerima.</p>
            <h3>Percakapan</h3>
            <p>Terkadang saat Anda melihat email, Anda akan melihat bahwa email tersebut dikelompokkan dengan beberapa <strong>email terkait</strong> lainnya. Ini disebut sebagai <strong>percakapan</strong>. Gmail mengelompokkan email terkait ke dalam percakapan untuk membantu menjaga kotak masuk Anda tetap rapi dan terorganisir. Alih-alih memilih satu email dari kotak masuk Anda, Anda sebenarnya memilih seluruh percakapan, dan Anda kemudian dapat memilih untuk <strong>melihat</strong> atau <strong>memperkecil</strong> email individu.</p>
            <p class="moreInfo">Saat Anda melihat kotak masuk Anda, Anda dapat mengetahui berapa banyak pesan yang ada di setiap percakapan dengan menemukan <strong>angka</strong> di sebelah nama <strong>pengirim</strong>.</p>
            <div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_conversation_number2.jpg" style="width: 470px; height: 247.267px;" alt="Angka menunjukkan berapa banyak email yang ada dalam percakapan" title="Angka menunjukkan berapa banyak email yang ada dalam percakapan" width="470" height="247.267"></div>
            <h4>Untuk melihat atau memperkecil email individu:</h4>
            <ol class="numbered-list"><li><div>Dari <strong>kotak masuk</strong> Anda, pilih <strong>percakapan</strong>.</div></li><li>Semua pesan dalam percakapan akan muncul <strong>ditumpuk</strong> satu sama lain. Klik pesan untuk memperbesarnya.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_stacked_message.jpg" alt="Memperbesar pesan" title="Memperbesar pesan"></div><div></div></li><li>Klik bagian atas pesan lagi untuk memperkecil pesan.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_stacked_open.jpg" alt="Memperkecil pesan" title="Memperkecil pesan"></div><div></div></li></ol>
            <h3>Menambahkan balasan liburan</h3>
            <p>Ketika Anda pergi berlibur, Anda mungkin tidak mau atau tidak bisa memeriksa email Anda selama beberapa hari atau lebih. Email akan tetap berada di kotak masuk Anda saat Anda kembali, jadi mungkin itu bukan masalah. Namun, jika seseorang mengirim pesan <strong>mendesak</strong> yang membutuhkan tanggapan pada hari yang sama, orang tersebut mungkin tidak menyadari bahwa Anda tidak akan menerima pesan tepat waktu.</p>
            <p>Anda dapat mencegah hal ini dengan membuat <strong>balasan liburan</strong>, yang akan secara otomatis mengirim balasan kepada siapa pun yang mengirim email kepada Anda. Balasan liburan Anda dapat berisi pesan apa pun yang Anda inginkan, tetapi biasanya akan mencakup <strong>tanggal</strong> Anda berencana kembali dan <strong>informasi kontak</strong> Anda saat Anda berada di luar kota (atau mungkin informasi kontak <strong>rekan kerja</strong> yang dapat menangani pertanyaan saat Anda pergi).</p>
            <h4>Untuk menambahkan balasan liburan:</h4>
            <ol class="numbered-list"><li>Klik <strong>ikon roda gigi</strong> di sudut kanan atas, lalu pilih <strong>Pengaturan</strong>.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_settings.jpg" style="width: 222px; height: 336px;" alt="Mengklik pengaturan" title="Mengklik pengaturan" width="222" height="336"></div></li><li>Gulir ke bawah sampai Anda melihat bagian <strong>Penjawab liburan</strong>. Klik bidang <strong>Hari pertama</strong> untuk memilih tanggal mulai balasan liburan. Jika Anda mau, Anda juga bisa memilih <strong>Hari terakhir</strong>, tetapi ini tidak wajib.<div></div></li><li>Ketik <strong>subjek</strong> dan <strong>pesan</strong> yang diinginkan.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_vacation.jpg" alt="Mengetik balasan liburan" title="Mengetik balasan liburan"></div></li><li>Anda mungkin ingin memilih <strong>Hanya kirim balasan kepada orang-orang di Kontak saya</strong> untuk menghindari memberikan keberadaan Anda dan informasi kontak kepada orang asing. Namun, jika Anda berpikir Anda mungkin menerima pesan mendesak dari seseorang yang tidak ada di kontak Anda, Anda bisa membiarkannya tidak dicentang. Ketika Anda selesai, gulir ke bawah ke bagian bawah halaman dan klik <strong>Simpan Perubahan</strong>.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_save_vacation.jpg" alt="Menyimpan balasan liburan" title="Menyimpan balasan liburan"></div></li></ol>
            <p class="moreInfo">Ketika balasan liburan Anda aktif, akan ada <strong>bar</strong> di bagian atas jendela Gmail yang menunjukkan pesan Anda. Untuk mengakhiri balasan liburan, klik <strong>Akhiri sekarang</strong>.</p>
            <div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073927dd48174331f5196_01_17_2014/responding_end_vacation.jpg" alt="Mengakhiri balasan liburan" title="Mengakhiri balasan liburan"></div>
            <h3>Tantangan!</h3>
            <p>Untuk tantangan ini, Anda bisa menggunakan email di kotak masuk Anda. Jika Anda tidak memilikinya, Anda dapat menyelesaikan tantangan dari <a href="http://www.gcflearnfree.org/gmail/sending-email/2/">pelajaran kami sebelumnya</a> dan menggunakannya.</p>
            <ol class="numbered-list"><li><strong>Buka</strong> email tersebut.</li><li>Jika email Anda memiliki <strong>lampiran</strong>, cobalah membukanya.</li><li><strong>Teruskan</strong> email tersebut ke diri Anda sendiri dengan menggunakan alamat email Anda sebagai penerima.</li><li><strong>Bintangi</strong> sebuah email di kotak masuk Anda.</li><li>Tambahkan <strong>balasan liburan</strong>, lalu kirimkan email ke diri Anda sendiri. Anda bisa menuliskan apa saja di subjek dan badan email.</li><li>Ketika Anda selesai, Anda seharusnya melihat baik email Anda maupun balasan liburan di kotak masuk Anda. Jangan lupa untuk <strong>mematikan</strong> balasan liburan Anda!</li></ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Mengelola Email',
            'course_id' => '65',
            'desc' => '<h3>Pendahuluan</h3>
            <p>Seiring penggunaan email yang semakin meningkat, kotak masuk Anda bisa menjadi penuh dengan pesan-pesan lama. Penting untuk menjaga kotak masuk Anda tetap terorganisir agar Anda dapat menemukan pesan saat Anda membutuhkannya. Cara paling sederhana untuk menangani kekacauan email adalah dengan <strong>menghapus</strong> pesan yang tidak diinginkan. Namun, Anda juga dapat <strong>mengarsipkan</strong> pesan untuk memindahkannya dari kotak masuk Anda, atau Anda dapat menerapkan <strong>label</strong> pada pesan Anda berdasarkan kategori yang ada.</p>
            <p>Dalam pelajaran ini, kita akan membahas tentang <strong>menghapus</strong> pesan yang tidak diinginkan, <strong>mengarsipkan</strong>, menerapkan <strong>label</strong>, menambahkan <strong>filter</strong>, dan menggunakan fitur <strong>pencarian</strong> Gmail.</p>
            <p class="chevron">Tonton video di bawah ini untuk mempelajari cara menghapus dan mengarsipkan pesan, serta cara mengelola label Anda.</p>
            <div class="video-embed"><iframe style="width: 853px; height: 480px;" src="https://www.youtube.com/embed/qTeZlPja5N4?rel=0&amp;showinfo=0" allowfullscreen frameborder="0"></iframe></div>
            <h3 class="clearfl">Menghapus pesan yang tidak diinginkan</h3>
            <p>Tidak peduli berapa banyak email yang Anda terima, Anda mungkin tidak akan pernah kehabisan ruang. Gmail memberikan Anda ruang yang cukup untuk menyimpan banyak email dan lampirannya. Namun, sebaiknya Anda menghapus pesan yang tidak diinginkan untuk memudahkan menemukan pesan yang Anda inginkan.</p>
            <h4>Untuk menghapus pesan:</h4>
            <p>Saat melihat pesan, klik tombol <strong>Hapus</strong>.</p>
            <div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073937dd48174331f5197_01_17_2014/managing_delete_button.jpg" style="width: 501px; height: 99.367px;" alt="Menghapus pesan" title="Menghapus pesan" width="501" height="99.36699999999999"></div>
            <p class="attention">Jika pesan tersebut merupakan bagian dari <strong>percakapan</strong>, seluruh percakapan akan dihapus. Jika Anda hanya ingin menghapus satu pesan dalam percakapan, klik <strong>panah drop-down</strong> di sudut kanan atas pesan dan pilih <strong>Hapus pesan ini</strong>.</p>
            <div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073937dd48174331f5197_01_17_2014/managing_delete_dropdown2.jpg" style="width: 294px; height: 448px;" alt="Menghapus pesan dalam percakapan" title="Menghapus pesan dalam percakapan" width="294" height="448"></div>
            <h4>Menangani spam</h4>
            <p>Biasanya, <strong>spam</strong>—atau email sampah—secara otomatis dikirim ke folder <strong>Spam</strong> Anda, sehingga tidak pernah masuk ke kotak masuk Anda. Namun, beberapa spam masih bisa melewati filter spam Gmail. Daripada sekadar <strong>menghapus</strong> pesan-pesan ini, lebih baik <strong>Melaporkannya sebagai spam</strong> agar Gmail tahu untuk menyaringnya di masa depan. Prosesnya sama dengan menghapus pesan, hanya saja Anda akan mengklik tombol <strong>Laporkan spam</strong>.</p>
            <div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073937dd48174331f5197_01_17_2014/managing_spam_button.jpg" style="width: 530px; height: 113.983px;" alt="Melaporkan pesan sebagai spam" title="Melaporkan pesan sebagai spam" width="530" height="113.983"></div>
            <p class="moreInfo">Pesan di folder <strong>Spam</strong> Anda secara otomatis <strong>dihapus setelah 30 hari</strong>, sehingga Anda tidak perlu khawatir menghapusnya secara manual.</p>
            <h3>Mengarsipkan pesan</h3>
            <p>Terkadang Anda mungkin ingin menghapus email dari kotak masuk Anda, tetapi tidak ingin menghapusnya. Gmail memungkinkan Anda untuk <strong>mengarsipkan</strong> pesan sehingga tidak lagi muncul di kotak masuk Anda. Karena Anda masih dapat mengakses pesan yang diarsipkan, ini adalah alternatif yang <strong>lebih aman</strong> dibandingkan menghapus.</p>
            <h4>Untuk mengarsipkan pesan:</h4>
            <p>Saat melihat pesan, klik tombol <strong>Arsip</strong>.</p>
            <div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073937dd48174331f5197_01_17_2014/managing_archive_button.jpg" style="width: 526px; height: 112.917px;" alt="Mengarsipkan pesan" title="Mengarsipkan pesan" width="526" height="112.917"></div>
            <h4>Untuk melihat pesan yang diarsipkan:</h4>
            <p>Di <strong>panel menu kiri</strong>, klik panah drop-down <strong>lainnya</strong> dan pilih <strong>Semua Email</strong>.</p>
            <div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073937dd48174331f5197_01_17_2014/managing_more_dropdown.jpg" style="width: 294px; height: 412.367px;" alt="Mengklik menu drop-down lebih banyak" title="Mengklik menu drop-down lebih banyak" width="294" height="412.367"></div>
            <p>Ini akan menampilkan semua pesan Anda, termasuk <strong>pesan yang diarsipkan</strong> dan pesan di <strong>kotak masuk</strong> Anda.</p>
            <div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073937dd48174331f5197_01_17_2014/managing_all_mail.jpg" style="width: 575px; height: 430.467px;" alt="Melihat semua email, termasuk pesan yang diarsipkan" title="Melihat semua email, termasuk pesan yang diarsipkan" width="575" height="430.467"></div>
            <h3>Mengelola beberapa pesan</h3>
            <p>Jika Anda <strong>menghapus</strong>, <strong>mengarsipkan</strong>, atau <strong>melaporkan spam</strong>, Anda dapat mengambil tindakan pada <strong>beberapa pesan sekaligus</strong> dengan memilihnya di <strong>kotak masuk</strong> Anda. Cukup beri <strong>tanda centang</strong> di sebelah setiap pesan yang ingin Anda kelola, lalu klik tombol yang diinginkan. Anda juga dapat mengklik tanda centang di bagian atas untuk <strong>memilih semua</strong> pesan yang saat ini terlihat.</p>
            <div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073937dd48174331f5197_01_17_2014/managing_archive_multiple.jpg" style="width: 539px; height: 345.367px;" alt="Mengarsipkan beberapa pesan sekaligus" title="Mengarsipkan beberapa pesan sekaligus" width="539" height="345.367"></div>
            <h3>Bekerja dengan label</h3>
            <p><strong>Label</strong> memungkinkan Anda untuk mengatur pesan Anda dan membuatnya lebih mudah ditemukan. Menerapkan label pada pesan seperti menaruhnya ke dalam folder, dengan satu perbedaan penting: Anda dapat menerapkan <strong>lebih dari satu label</strong> pada pesan. Misalnya, jika Anda menerima pesan tentang <strong>perjalanan perusahaan</strong>, Anda dapat melabelinya sebagai <strong>Perjalanan</strong> dan <strong>Pekerjaan</strong>. Anda dapat memilih untuk melabeli hanya pesan-pesan penting, atau Anda dapat melabeli setiap pesan<strong></strong>—itu terserah Anda. Anda dapat <strong>membuat label baru</strong> kapan pun Anda membutuhkannya, dan Anda juga dapat memilih <strong>warna</strong> yang akan membuat label menonjol.</p>
            <h4>Untuk menerapkan label pada pesan:</h4>
            <ol class="numbered-list"><li><div></div>Saat melihat pesan, klik tombol <strong>Label</strong>. Menu drop-down akan muncul dengan daftar label. </li><li>Beri <strong>tanda centang</strong> di sebelah semua label yang Anda inginkan, lalu klik <strong>Terapkan</strong>.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073937dd48174331f5197_01_17_2014/managing_apply_label.jpg" style="width: 312px; height: 532.367px;" alt="Menerapkan label" title="Menerapkan label" width="312" height="532.367"></div></li><li>Sekarang, saat Anda melihat <strong>kotak masuk</strong> Anda, Anda akan dapat melihat semua pesan dengan <strong>label tersebut</strong>.</li></ol>
            <p>Jika Anda ingin <strong>menambahkan label baru</strong>, Anda dapat <strong>mengetiknya</strong> ke dalam bidang di bagian bawah menu, lalu klik <strong>Buat baru</strong>.</p>
            <div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073937dd48174331f5197_01_17_2014/managing_create_new_label.jpg" style="width: 293px; height: 533.367px;" alt="Menambahkan label baru" title="Menambahkan label baru" width="293" height="533.367"></div>
            <h4>Untuk mengelola label Anda:</h4>
            <ol class="numbered-list"><li><div></div>Klik panah drop-down <strong>Lainnya</strong> di panel menu kiri, lalu pilih <strong>Kelola label</strong>.</li><li>Panel <strong>Pengaturan</strong> akan muncul. Dari sini, Anda dapat mengedit, menghapus, dan membuat label baru. </li></ol>
            <div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073937dd48174331f5197_01_17_2014/managing_manage_labels.jpg" style="width: 311px; height: 417.617px;" alt="Mengelola label Anda" title="Mengelola label Anda" width="311" height="417.617"></div>
            <h3>Menambahkan filter</h3>
            <p>Jika Anda menerima banyak email, Anda mungkin merasa <strong>sulit</strong> untuk mengelola semuanya. Untungnya, Gmail memungkinkan Anda untuk membuat <strong>filter</strong> yang dapat <strong>mengatur email</strong> untuk Anda secara otomatis. Anda dapat membuat filter yang menandai email tertentu, menerapkan label, mengirimnya langsung ke arsip atau kotak masuk Anda, atau bahkan langsung menghapusnya.</p>
            <p>Anda dapat membuat filter dari menu <strong>Pengaturan</strong>, atau saat melihat pesan tertentu. Misalnya, jika Anda terus menerima pesan dari pengirim yang tidak diinginkan, Anda dapat langsung membuat filter dari pesan tersebut dan mengirimnya langsung ke folder <strong>Spam</strong>. </p>
            <h4>Untuk membuat filter dari menu pengaturan:</h4>
            <ol class="numbered-list"><li><div></div>Klik <strong>roda gigi Pengaturan</strong> di sudut kanan atas halaman, lalu pilih <strong>Lihat semua pengaturan</strong>.</li><li>Pilih tab <strong>Filter dan Alamat yang Diblokir</strong>, lalu klik <strong>Buat filter baru</strong>.</li><li>Masukkan kriteria filter Anda. Dalam contoh ini, kami akan memfilter pesan dari <strong>pengirim tertentu</strong>. Anda juga dapat memasukkan kata kunci, nama, atau alamat email. Ketika Anda selesai, klik <strong>Buat filter</strong>.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073937dd48174331f5197_01_17_2014/managing_create_filter.jpg" style="width: 515px; height: 401.617px;" alt="Membuat filter" title="Membuat filter" width="515" height="401.617"></div></li><li>Pilih satu atau lebih <strong>aksi</strong> yang ingin Anda terapkan pada filter. Dalam contoh ini, kami akan mengarsipkan pesan ini, tetapi Anda juga dapat memilih opsi lain, seperti menerapkan label, memindahkannya ke spam, atau menghapusnya.</li><li>Klik <strong>Buat filter</strong>. Filter Anda sekarang telah dibuat.</li></ol>
            <div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073937dd48174331f5197_01_17_2014/managing_create_filter_action.jpg" style="width: 502px; height: 410.617px;" alt="Membuat filter aksi" title="Membuat filter aksi" width="502" height="410.617"></div>
            <h3>Menggunakan fitur pencarian Gmail</h3>
            <p>Gmail memiliki fitur <strong>pencarian</strong> yang kuat yang memungkinkan Anda untuk menemukan pesan dengan cepat, tidak peduli berapa banyak email yang Anda miliki. Cukup ketikkan <strong>kata kunci</strong> di <strong>kotak pencarian</strong> di bagian atas halaman. Misalnya, jika Anda mencari email dari seorang teman, ketikkan namanya di kotak pencarian. Semua pesan dari orang tersebut akan muncul.</p>
            <h4>Menambah operator pencarian</h4>
            <p>Jika Anda memiliki banyak email dan ingin menemukan pesan tertentu dengan lebih cepat, Anda dapat menambahkan <strong>operator pencarian</strong> untuk mempersempit pencarian Anda. Misalnya, jika Anda mencari pesan dari <strong>pengirim tertentu</strong> dengan kata kunci tertentu, Anda dapat menggunakan operator <strong>from:</strong> dan <strong>subject:</strong> untuk mempersempit pencarian Anda.</p>
            <p>Berikut adalah beberapa operator pencarian yang dapat Anda gunakan di Gmail:</p>
            <ul class="bulleted-list"><li><div><strong>from:</strong> - Mencari pesan dari pengirim tertentu (mis. <code>from:amy</code>)</div></li><li><div><strong>to:</strong> - Mencari pesan yang dikirim ke penerima tertentu (mis. <code>to:david</code>)</div></li><li><div><strong>subject:</strong> - Mencari pesan dengan subjek tertentu (mis. <code>subject:dinner</code>)</div></li><li><div><strong>has:</strong> - Mencari pesan yang memiliki lampiran tertentu (mis. <code>has:attachment</code>)</div></li></ul>
            <h3>Tantangan!</h3>
            <p>Untuk tantangan ini, Anda memerlukan email di kotak masuk Anda. Jika Anda telah menyelesaikan tantangan pelajaran sebelumnya, Anda dapat menggunakan email tersebut. Jika tidak, kirimkan email kepada diri sendiri dengan menulis alamat email Anda sebagai penerima.</p>
            <ol class="numbered-list"><li>Buka email yang Anda kirimkan kepada diri sendiri, buat <strong>label</strong>, dan beri nama <strong>Latihan</strong>.</li><li>Ubah <strong>warna label</strong> menjadi ungu.</li><li>Buat <strong>filter</strong> untuk hanya menampilkan email yang Anda kirimkan kepada diri sendiri.</li><li>Ketika selesai, kotak masuk Anda harus terlihat seperti ini:<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073937dd48174331f5197_01_17_2014/filter_practice_label.jpg" alt="Mengelola tantangan" title="Mengelola tantangan"></div></li><li><strong>Opsional</strong>:<strong> Arsipkan</strong> salah satu email Anda.</li></ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Gmail untuk Perangkat Seluler',
            'course_id' => '66',
            'desc' => '<h3>Pengenalan</h3>
            <p>Tidak peduli jenis <strong>perangkat seluler</strong> apa yang Anda gunakan, mudah untuk mengirim dan menerima pesan Gmail <strong>di mana saja</strong>. Dalam pelajaran ini, kami akan menunjukkan cara mengatur Gmail dengan <strong>aplikasi email bawaan</strong> di perangkat Anda. Kami juga akan membahas penggunaan <strong>aplikasi Gmail resmi</strong> untuk iPhone dan Android.</p>
            
            <h3>Gmail untuk perangkat seluler</h3>
            <p>Jika Anda memiliki perangkat seluler, ada dua cara utama untuk mengakses akun Gmail Anda:</p>
            <ul>
            <li><strong>Opsi 1</strong>: <strong>Aplikasi email bawaan</strong> di perangkat Anda. Jika Anda memiliki beberapa akun email dari penyedia email yang berbeda (seperti email pribadi dan email kantor), Anda mungkin merasa aplikasi email bawaan lebih nyaman karena memungkinkan Anda melihat dan mengelola semua pesan Anda di satu tempat.</li>
            <li><strong>Opsi 2</strong>: <strong>Aplikasi Gmail resmi</strong>, tersedia untuk <a href="https://itunes.apple.com/us/app/gmail-email-from-google/id422689480?mt=8" target="_blank">iOS</a> dan <a href="https://play.google.com/store/apps/details?id=com.google.android.gm" target="_blank">Android</a>. Jika Anda sudah berpengalaman menggunakan Gmail, Anda mungkin lebih suka menggunakan aplikasi Gmail resmi. Aplikasi ini tampak dan terasa mirip dengan versi desktop, dan mencakup beberapa fitur khusus Gmail yang mungkin tidak tersedia di aplikasi email bawaan perangkat Anda.</li>
            </ul>
            
            <h4>Untuk mengatur Gmail dengan aplikasi email bawaan:</h4>
            <p>Dalam contoh ini, kami akan menjelaskan cara menyinkronkan akun Gmail dengan aplikasi <strong>Mail</strong> untuk perangkat <strong>iOS</strong>, termasuk iPhone dan iPad. Ingat, proses ini mungkin bervariasi tergantung pada perangkat Anda.</p>
            <ol class="numbered-list">
            <li>Masuk ke <strong>pengaturan email</strong> di perangkat Anda, lalu pilih <strong>Tambahkan Akun</strong>.<div class="centerImage"><img loading="lazy" style="width: 396px; height: 705px;" class="imageBorder" alt="Memilih Tambahkan Akun" src="https://media.gcflearnfree.org/content/55e073947dd48174331f5198_01_17_2014/mobile_add_account.jpg" width="396" height="705"></div></li>
            <li>Pilih <strong>Google</strong>.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073947dd48174331f5198_01_17_2014/mobile_google_gmail.jpg" style="width: 404px; height: 717.883px;" alt="Pilih Google" title="Pilih Google" width="404" height="717.883"></div></li>
            <li>Ikuti petunjuk untuk menghubungkan akun Anda.</li>
            <li>Setelah selesai, Anda akan dapat mengirim dan menerima email dari akun Gmail Anda di aplikasi Mail.<div><img loading="lazy" src="https://media.gcflearnfree.org/content/55e073947dd48174331f5198_01_17_2014/mobile_mail_inbox.jpg" style="width: 399px; height: 708.433px;" alt="Kotak masuk Gmail di iPhone" title="Kotak masuk Gmail di iPhone" width="399" height="708.433"></div></li>
            </ol>
            
            <h3>Menggunakan aplikasi Gmail</h3>
            <p>Kami ingin memberikan gambaran singkat tentang <strong>Gmail untuk Android</strong> dan <strong>Gmail untuk iPhone</strong>. Meskipun antarmuka untuk aplikasi ini agak berbeda, Anda akan melihat bahwa setiap aplikasi memberi Anda akses ke fitur dasar yang sama.</p>
            
            <h4>Gmail untuk Android</h4>
            <p class="chevron">Klik tombol di bawah ini untuk mempelajari lebih lanjut tentang penggunaan Gmail untuk Android.</p>
            <div class="centerImage">
              <div class="ict tooltip">
                <img loading="lazy" style="width: 386px; height: 685px;" class="imageBorder" alt="Gmail untuk Android" src="https://media.gcflearnfree.org/content/55e073947dd48174331f5198_01_17_2014/mobile_android.jpg" width="386" height="685">
                <div class="hotspot" style="left:43px;top:68px;"></div>
                <div class="hotspot-content" style="width: 250px; left: 53px; top: 78px; display: none;">
                  <h2>Menu</h2>
                  <p>Ketuk di sini atau <strong>geser ke kanan</strong> untuk mengakses folder Anda, beralih antara akun, dan lainnya.</p>
                </div>
                <div class="hotspot" style="left: 294px; top: 632px; width: 22px; right: auto; height: 22px; bottom: auto;"></div>
                <div class="hotspot-content" style="width: 250px; left: 54px; top: 504px; display: none;">
                  <h2>Buat</h2>
                  <p>Ketuk di sini untuk membuat <strong>pesan email baru</strong>.</p>
                </div>
                <div class="hotspot" style="left: 348px; top: 70px; width: 22px; right: auto; height: 22px; bottom: auto;"></div>
                <div class="hotspot-content" style="width: 250px; left: 358px; top: 80px; display: none;">
                  <h2>Pencarian</h2>
                  <p>Ketuk di sini, lalu masukkan istilah pencarian untuk <strong>mencari</strong> di kotak masuk Anda.</p>
                </div>
                <div class="hotspot" style="left: 250px; top: 304px; width: 22px; right: auto; height: 22px; bottom: auto;"></div>
                <div class="hotspot-content" style="width: 250px; left: 260px; top: 314px; display: none;">
                  <h2>Kotak Masuk</h2>
                  <p>Cukup ketuk pesan di kotak masuk Anda untuk membukanya. Dari sini, Anda dapat <strong>membalas</strong> atau <strong>meneruskan</strong> pesan. Anda juga dapat <strong>menggeser ke kiri</strong> untuk mengarsipkan pesan.</p>
                </div>
              </div>
            </div>
            
            <h4>Gmail untuk iPhone</h4>
            <p class="chevron">Klik tombol di bawah ini untuk mempelajari lebih lanjut tentang penggunaan Gmail untuk iPhone.</p>
            <div class="centerImage">
              <div class="ict tooltip">
                <img loading="lazy" src="https://media.gcflearnfree.org/content/55e073947dd48174331f5198_01_17_2014/iphone_screenshot_gmail.jpg" style="width: 401px; height: 712.717px;" alt="Gmail untuk iPhone" title="Gmail untuk iPhone" width="401" height="712.717">
                <div class="hotspot" style="left: 49px; top: 39px;"></div>
                <div class="hotspot-content" style="width: 250px; left: 59px; top: 49px; display: none;">
                  <h2>Menu</h2>
                  <p>Ketuk di sini atau <strong>geser ke kanan</strong> untuk melihat <strong>folder</strong> Anda, mengakses <strong>pengaturan</strong> Anda, dan <strong>lainnya</strong>.</p>
                </div>
                <div class="hotspot" style="left: 336px; top: 41px;"></div>
                <div class="hotspot-content" style="width: 250px; left: 96px; top: -88px; display: none;">
                  <h2>Pencarian</h2>
                  <p>Ketuk di sini, lalu masukkan istilah pencarian untuk <strong>mencari</strong> di kotak masuk Anda.</p>
                </div>
                <div class="hotspot" style="left: 187px; top: 368px;"></div>
                <div class="hotspot-content" style="width: 250px; left: -53px; top: 143px; display: none;">
                  <h2>Kotak Masuk</h2>
                  <p>Cukup ketuk pesan di kotak masuk Anda untuk membukanya. Dari sini, Anda dapat <strong>membalas</strong> atau <strong>meneruskan</strong> pesan. Anda juga dapat <strong>menggeser ke kiri</strong> dan kemudian ketuk <strong>Arsipkan</strong> untuk mengarsipkan pesan tersebut.</p>
                </div>
                <div class="hotspot" style="left:325px;top:637px;"></div>
                <div class="hotspot
            
            -content posLeftTop" style="width: 250px; left: 85px; top: 508px; display: none;">
                  <h2>Buat</h2>
                  <p>Ketuk di sini untuk membuat <strong>pesan email baru</strong>.</p>
                </div>
              </div>
            </div>
            <p class="&quot;moreInfo moreInfo">Ingat, jika Anda menggunakan aplikasi email bawaan di ponsel Anda, tampilannya akan berbeda dari aplikasi Gmail resmi di atas. Anda dapat meninjau pelajaran kami tentang menggunakan aplikasi Mail di iOS dalam tutorial <a target="_self" title="menggunakan aplikasi mail" href="https://edu.gcfglobal.org/en/iphonebasics/mail/1/">iPhone Dasar</a> dan <a title="menggunakan aplikasi mail" href="https://edu.gcfglobal.org/en/ipadbasics/mail/1/">iPad Dasar</a> untuk mempelajari lebih lanjut.</p>
            
            <h3>Tantangan!</h3>
            <ol class="numbered-list">
            <li>Buka <strong>Gmail</strong> di perangkat seluler Anda menggunakan aplikasi email bawaan atau aplikasi Gmail resmi. Jika Anda menggunakan aplikasi email bawaan, <strong>tambahkan</strong> akun Anda jika belum melakukannya.</li>
            <li><strong>Buat</strong> email, dan kirimkan kepada diri Anda sendiri.</li>
            <li>Buka, lalu <strong>hapus</strong> email yang baru saja Anda kirimkan.</li>
            <li>Cobalah beralih antara folder <strong>kotak masuk</strong> dan folder <strong>sampah</strong> Anda.</li>
            </ol>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Cara Membatalkan Pengiriman Email di Gmail',
            'course_id' => '67',
            'desc' => '<h3>Cara Membatalkan Pengiriman Email di Gmail</h3>
            <div class="centerImage"><img loading="lazy" class="imageBorder" src="https://media.gcflearnfree.org/ctassets/topics/255/unsend_email.png" alt="Ilustrasi membatalkan pengiriman email" style="width: 610px; margin-top: 0;" width="610" height="235"></div>
            <p>Ini terjadi pada kita semua. Anda mengklik <strong>Kirim</strong>, lalu menyadari Anda membuat kesalahan.</p>
            <p>Mungkin itu hanya <strong>kesalahan ejaan</strong>. Mungkin Anda tidak sengaja mengklik <strong>Reply all</strong>. Atau mungkin Anda mengirim email ke <strong>orang yang salah</strong>, dan Anda benar-benar tidak ingin orang tersebut membacanya, karena mungkin mengandung sesuatu yang sangat memalukan.</p>
            <p>Jika Anda menggunakan <strong>Gmail</strong>, Anda beruntung. Gmail baru-baru ini memperkenalkan fitur yang memungkinkan Anda <strong>membatalkan pengiriman email</strong> hingga 30 detik setelah Anda mengirimnya.</p>
            <p>Fitur ini—disebut <strong>Undo Send</strong>—harus diaktifkan sebelum Anda dapat menggunakannya. Setelah itu, Anda akan dapat menarik kembali email terbaru Anda hanya dengan satu klik.</p>
            <h4>Untuk mengaktifkan Undo Send:</h4>
            <ol class="numbered-list">
              <li>Buka akun <strong>Gmail</strong> Anda.</li>
              <li>Klik tombol <strong>Pengaturan</strong> di pojok kanan atas, lalu pilih <strong>Pengaturan</strong> dari menu.<div class="centerImage"><img loading="lazy" style="width: 750px; height: 330px;" longdesc="" class="imageBorder" alt="Membuka pengaturan Gmail" src="https://media.gcflearnfree.org/content/55e092af24929be027950abf_02_19_2015/unsend_settings.png" width="750" height="330"></div></li>
              <li>Pastikan Anda berada di tab <strong>Umum</strong>, lalu gulir ke bawah ke <strong>Batalkan Pengiriman</strong>.</li>
              <li>Centang kotak yang bertuliskan <strong>Aktifkan Batalkan Pengiriman</strong>. Anda dapat memilih <strong>periode pembatalan</strong> hingga 30 detik.<div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="Mengaktifkan pembatalan pengiriman" style="width: 748px; height: 259px;" src="https://media.gcflearnfree.org/content/55e092af24929be027950abf_02_19_2015/unsend_enable.png" width="748" height="259"></div></li>
            </ol>
            <h4>Untuk menggunakan Batalkan Pengiriman:</h4>
            <p>Mulai sekarang, setiap kali Anda mengirim email, sebuah pop-up kecil akan muncul di bagian atas halaman. Untuk membatalkan pengiriman email, cukup klik <strong>Urungkan</strong>. Pop-up tersebut akan hilang ketika periode pembatalan berakhir, jadi jangan ragu-ragu!</p>
            <div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" alt="Menggunakan pembatalan pengiriman" style="width: 588px; height: 132px;" src="https://media.gcflearnfree.org/content/55e092af24929be027950abf_02_19_2015/unsend_undo.png" width="588" height="132"></div>'
        ]);
        \DB::table('coursesx')->insert([
            'title' => 'Tips Email Menghemat Waktu',
            'course_id' => '68',
            'desc' => '<h3>Tips Hemat Waktu untuk Email</h3>
            <p>Banyak klien email memiliki berbagai fitur bermanfaat yang mungkin tidak Anda ketahui. Fitur-fitur ini cukup mudah digunakan, dan dapat menghemat waktu serta membantu Anda mengatur email dengan lebih baik. Dalam pelajaran ini, kami akan membahas beberapa tips dan trik ini untuk membantu Anda mengoptimalkan pengalaman email Anda.<br></p>
            <h4>Memilih Banyak Email</h4>
            <p>Katakanlah Anda memiliki sejumlah besar email yang ingin Anda hapus. Akan memakan waktu cukup lama jika harus menghapus setiap email satu per satu. Untungnya, sebagian besar klien email memiliki fitur yang memungkinkan Anda untuk <strong>memilih banyak email</strong><span style="font-size: 1em; text-align: center;">. Fitur ini biasanya berupa kotak centang di samping masing-masing email Anda. Banyak klien juga memiliki tombol </span><strong>Pilih Semua </strong><span style="font-size: 1em; text-align: center;">, yang akan memilih semua email di halaman, seperti yang terlihat di bawah ini.</span></p>
            <div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/5971eeb58444e81d1ca6ce03_07_21_2017/timesaving_selectall.jpg"></div>
            <p>Setelah email dipilih, Anda dapat melakukan tindakan apa pun yang diinginkan, termasuk menghapus, menyortir, dan mengarsipkan.</p>
            <p><span style="font-family: &quot;Source Sans Pro&quot;; font-size: 1.6em; font-weight: 400; letter-spacing: -0.015em; text-align: center;">Pintasan Keyboard</span></p>
            <p>Kebanyakan klien email memiliki beberapa <strong>pintasan keyboard</strong> yang dapat membantu Anda menavigasi email lebih cepat. Contoh yang cukup universal adalah menggunakan <strong>tombol panah</strong> untuk menggulir melalui pesan email alih-alih harus mengklik tombol tertentu. Pintasan keyboard lainnya (seperti membalas dan menghapus) akan bervariasi dari klien ke klien. Di bawah ini adalah beberapa halaman dukungan yang mencantumkan pintasan untuk beberapa klien populer:</p>
            <ul>
              <li><a target="_blank" href="https://support.google.com/mail/answer/6594?co=GENIE.Platform%3DDesktop&amp;hl=en">Gmail</a></li>
              <li><a target="_blank" href="https://support.office.com/en-us/article/Keyboard-shortcuts-for-Outlook-3cdeb221-7ae5-4c1d-8c1d-9e63216c1efd">Outlook</a></li>
              <li><a target="_blank" href="https://help.yahoo.com/kb/SLN3578.html">Yahoo! Mail</a></li>
            </ul>
            <p>Jika Anda menggunakan layanan email selain yang tercantum di atas, Anda dapat menemukan pintasan keyboard yang sesuai melalui halaman bantuan atau pencarian cepat di Internet.<br></p>
            <h4>Membuat Grup</h4>
            <p>Jika Anda sering mengirim email ke orang yang sama, mungkin sebaiknya Anda <strong>membuat grup</strong>. Banyak klien memungkinkan Anda memilih berbagai alamat email dan menyimpannya sebagai satu grup. Dengan cara ini, Anda dapat langsung memilih grup tersebut sebagai penerima alih-alih memilih setiap alamat individu. Fitur ini biasanya dapat diakses dari halaman <strong>Kontak</strong> di klien email Anda.</p>
            <div class="centerImage"> <img loading="lazy" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/5971eeb58444e81d1ca6ce03_07_21_2017/timesaving_group.jpg"></div>
            <h4>Filter Email</h4>
            <p>Ketika Anda menerima banyak email setiap hari, bisa sulit untuk menjaga agar tetap teratur. Untungnya, berbagai klien email menawarkan fitur yang disebut <strong>filter</strong>, yang pada dasarnya menyortir email Anda ke dalam folder saat Anda menerimanya.</p>
            <p>Anda dapat membuat filter yang menyortir email berdasarkan berbagai karakteristik, termasuk <strong>pengirim</strong> atau <strong>penerima</strong> tertentu, <strong>kata kunci</strong> dalam subjek atau badan email, dan <strong>lampiran</strong>. Misalnya, katakanlah Anda ingin memastikan email dari Twitter tidak hilang di antara pesan lainnya. Anda dapat membuat filter yang menyortir setiap email yang diterima dari Twitter, seperti yang ditunjukkan di bawah ini.</p>
            <div class="centerImage"><img loading="lazy" longdesc="" class="imageBorder" src="https://media.gcflearnfree.org/content/5971eeb58444e81d1ca6ce03_07_21_2017/managing_filter_message.png"></div>
            <p class="moreInfo">Untuk informasi lebih lanjut tentang filter dan cara membuatnya di Gmail, tinjau pelajaran kami tentang <a href="https://edu.gcfglobal.org/en/gmail/managing-email/1/">Mengelola Email</a>.<br></p>'
        ]);
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Perpotongan baris dan kolom disebut ________.',
            'quiz_detail' => 'Pertanyaan 1 dari 30',
            'option1' => 'sel',
            'option2' => 'lembar kerja',
            'option3' => 'bagan',
            'option4' => 'jumlah',
            'correct_answer' => 'sel', // Asumsi '1' merujuk pada 'option1', yaitu 'sel'
        ]);
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Sekelompok sel disebut ________.',
            'quiz_detail' => 'Pertanyaan 2 dari 30',
            'option1' => 'bagan',
            'option2' => 'rentang sel',
            'option3' => 'gugus sel',
            'option4' => 'multisel',
            'correct_answer' => 'rentang sel', // Asumsi '2' merujuk pada 'option2', yaitu 'rentang sel'
        ]);
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Di manakah lokasi pegangan pengisian?',
            'quiz_detail' => 'Pertanyaan 3 dari 30',
            'option1' => 'di sudut kanan bawah sel yang dipilih',
            'option2' => 'di sisi kanan tab Beranda di Pita',
            'option3' => 'di awal rumus atau fungsi apa pun',
            'option4' => 'dalam tampilan Belakang Panggung',
            'correct_answer' => 'di sudut kanan bawah sel yang dipilih', // Asumsi '1' merujuk pada 'option1', yaitu 'di sudut kanan bawah sel yang dipilih'
        ]);
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Pada gambar ini, mengapa nilai di sel G1 terlihat sedikit berbeda dengan nilai di bilah rumus?',
            'quiz_detail' => 'Pertanyaan 4 dari 30',
            'option1' => 'Ini menggunakan format angka Mata Uang.',
            'option2' => 'Itu menggunakan referensi sel absolut.',
            'option3' => 'Itu menggunakan rumus.',
            'option4' => 'Ini menggunakan pemformatan bersyarat.',
            'correct_answer' => 'Ini menggunakan format angka Mata Uang.', // Asumsi '1' merujuk pada 'option1', yaitu 'Ini menggunakan format angka Mata Uang.'
            'image' => 'https://media.gcflearnfree.org/assets/quizzes/en/excel-20192007-final-quiz_04_01_2020/excel_1.png'
        ]);
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Anda bisa mengklik tab di bagian bawah buku kerja untuk beralih antara ________.',
            'quiz_detail' => 'Pertanyaan 5 dari 30',
            'option1' => 'format angka',
            'option2' => 'rumus',
            'option3' => 'lembar kerja',
            'option4' => 'izin',
            'correct_answer' => 'lembar kerja', // Isi option yang benar
        ]);
        
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Katakanlah Anda mencoba mencari nilai rata-rata Anda. Apa yang salah dengan rumus yang ditunjukkan pada gambar?',
            'quiz_detail' => 'Pertanyaan 6 dari 30',
            'option1' => 'Seharusnya menggunakan fungsi COUNT sebagai gantinya.',
            'option2' => 'Seharusnya ada tanda sama dengan (=) di awal.',
            'option3' => 'Tidak ada yang salah dengan rumusnya.',
            'option4' => 'Itu harus menggunakan tanda kutip, bukan tanda kurung.',
            'correct_answer' => 'Seharusnya ada tanda sama dengan (=) di awal.', // Isi option yang benar
            'image' => 'https://media.gcflearnfree.org/assets/quizzes/en/excel-20192007-final-quiz_04_01_2020/excel_3.png'
        ]);
        
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Benar atau Salah: Anda dapat melihat rumus dengan mengklik dua kali sel yang berisi rumus tersebut.',
            'quiz_detail' => 'Pertanyaan 7 dari 30',
            'option1' => 'BENAR',
            'option2' => 'SALAH',
            'correct_answer' => 'BENAR', // Isi option yang benar
        ]);
        
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Manakah dari berikut ini yang merupakan referensi sel absolut?',
            'quiz_detail' => 'Pertanyaan 8 dari 30',
            'option1' => '#A2',
            'option2' => 'J:2',
            'option3' => 'A2',
            'option4' => '$A$2',
            'correct_answer' => '$A$2', // Isi option yang benar
        ]);
        
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Rumus manakah di bawah ini yang valid? Pilih semua yang berlaku.',
            'quiz_detail' => 'Pertanyaan 9 dari 30',
            'option1' => '=5B+6B',
            'option2' => '=F2+F3+F4-53',
            'option3' => 'A3+100',
            'option4' => '=R2*D2',
            'correct_answer' => '=F2+F3+F4-53,=R2*D2', // Isi option yang benar
        ]);
        
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Berapa nilai yang akan dikembalikan Excel untuk rumus ini? =(82-32)/5+8*2',
            'quiz_detail' => 'Pertanyaan 10 dari 30',
            'option1' => '7.69',
            'option2' => '36',
            'option3' => '26',
            'option4' => '91.6',
            'correct_answer' => '26', // Isi option yang benar
        ]);
        
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Fitur apa yang kami gunakan untuk menerapkan pemformatan yang ditunjukkan pada gambar ini dengan cepat?',
            'quiz_detail' => 'Pertanyaan 11 dari 30',
            'option1' => 'Pemformatan skenario data',
            'option2' => 'Pemformatan bersyarat',
            'option3' => 'Analisis bagaimana-jika',
            'option4' => 'Tabel pivot',
            'correct_answer' => 'Pemformatan bersyarat', // Isi option yang benar
            'image' => 'https://media.gcflearnfree.org/assets/quizzes/en/excel-20192007-final-quiz_04_01_2020/excel_2.png'
        ]);
        
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Apa keuntungan utama memilih opsi Tandai sebagai Akhir?',
            'quiz_detail' => 'Pertanyaan 12 dari 30',
            'option1' => 'Ini membuat pengguna lain enggan mengedit buku kerja.',
            'option2' => 'Ini mencegah pengguna lain melihat buku kerja.',
            'option3' => 'Ini mencegah pengguna lain mengedit buku kerja.',
            'option4' => 'Ini memastikan bahwa buku kerja bebas dari kesalahan.',
            'correct_answer' => 'Ini membuat pengguna lain enggan mengedit buku kerja.', // Isi option yang benar
        ]);
        
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Empat area pada gambar ini digunakan untuk membuat ________.',
            'quiz_detail' => 'Pertanyaan 13 dari 30',
            'option1' => 'rumus yang rumit',
            'option2' => 'penyaring khusus',
            'option3' => 'subtotal',
            'option4' => 'Tabel pivot',
            'correct_answer' => 'Tabel pivot', // Isi option yang benar
            'image' => 'https://media.gcflearnfree.org/assets/quizzes/en/excel-20192007-final-quiz_04_01_2020/excel_4.png'
        ]);
        
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Fitur mana yang memulai dengan hasil yang diinginkan, lalu menghitung nilai input yang akan memberikan hasil tersebut?',
            'quiz_detail' => 'Pertanyaan 14 dari 30',
            'option1' => 'Seni pintar',
            'option2' => 'Validasi data',
            'option3' => 'Pencarian tujuan',
            'option4' => 'Rumus terbalik',
            'correct_answer' => 'Pencarian tujuan', // Isi option yang benar
        ]);
        
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Apa itu buku kerja di Excel?',
            'quiz_detail' => 'Pertanyaan 15 dari 30',
            'option1' => 'sejenis bagan',
            'option2' => 'file yang menyimpan satu atau lebih lembar kerja',
            'option3' => 'kumpulan file dalam satu folder',
            'option4' => 'selembar kertas dengan data tercetak di atasnya',
            'correct_answer' => 'file yang menyimpan satu atau lebih lembar kerja', // Isi option yang benar
        ]);
        
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Bagaimana Anda bisa memilih beberapa sel sekaligus di Excel?',
            'quiz_detail' => 'Pertanyaan 16 dari 30',
            'option1' => 'Tahan tombol Shift sambil mengklik sel yang ingin Anda pilih.',
            'option2' => 'Tahan tombol Ctrl sambil mengklik sel yang ingin Anda pilih.',
            'option3' => 'semua cara ini',
            'option4' => 'Klik dan seret sel yang ingin Anda pilih.',
            'correct_answer' => 'semua cara ini', // Isi option yang benar
        ]);
        
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Bagaimana cara mengubah ukuran kolom atau baris di Excel?',
            'quiz_detail' => 'Pertanyaan 17 dari 30',
            'option1' => 'tidak satu pun dari cara-cara ini',
            'option2' => 'Klik dua kali batas kolom atau baris.',
            'option3' => 'Gunakan kotak dialog Format Sel.',
            'option4' => 'Klik dan seret batas kolom atau baris.',
            'correct_answer' => 'Klik dan seret batas kolom atau baris.', // Isi option yang benar
        ]);
        
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Bagaimana cara menggabungkan dua sel atau lebih di Excel?',
            'quiz_detail' => 'Pertanyaan 18 dari 30',
            'option1' => 'tidak satu pun dari cara-cara ini',
            'option2' => 'Klik kanan sel yang ingin Anda gabungkan, lalu pilih "Gabungkan Sel" dari menu konteks.',
            'option3' => 'Pilih sel yang ingin Anda gabungkan, lalu klik tombol "Gabungkan & Tengahkan" pada tab Beranda.',
            'option4' => 'Gunakan kotak dialog Format Sel.',
            'correct_answer' => 'Pilih sel yang ingin Anda gabungkan, lalu klik tombol "Gabungkan & Tengahkan" pada tab Beranda.', // Isi option yang benar
        ]);
        
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Manakah dari berikut ini yang merupakan cara untuk memformat angka di Excel?',
            'quiz_detail' => 'Pertanyaan 19 dari 30',
            'option1' => 'mata uang',
            'option2' => 'persentase',
            'option3' => 'tanggal',
            'option4' => 'semua format ini',
            'correct_answer' => 'semua format ini', // Isi option yang benar
        ]);
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Manakah dari berikut ini yang BUKAN merupakan jenis perataan di Excel?',
            'quiz_detail' => 'Pertanyaan 21 dari 30',
            'option1' => 'kiri',
            'option2' => 'maju',
            'option3' => 'Kanan',
            'option4' => 'tengah',
            'correct_answer' => 'maju', // 'maju' adalah jawaban yang benar

        ]);
        
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Apa tujuan mengelompokkan lembar kerja di Excel?',
            'quiz_detail' => 'Pertanyaan 22 dari 30',
            'option1' => 'semua fungsi ini',
            'option2' => 'untuk memindahkan atau menyalin data di antara beberapa lembar kerja sekaligus',
            'option3' => 'untuk menerapkan perubahan pemformatan ke beberapa lembar kerja sekaligus',
            'option4' => 'untuk melakukan perhitungan di beberapa lembar kerja sekaligus',
            'correct_answer' => 'semua fungsi ini', // 'semua fungsi ini' adalah jawaban yang benar
        ]);
        
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Simbol apa yang digunakan dalam rumus Excel untuk melambangkan perkalian?',
            'quiz_detail' => 'Pertanyaan 23 dari 30',
            'option1' => '-',
            'option2' => '*',
            'option3' => '+',
            'option4' => '/',
            'correct_answer' => '*', // '*' adalah jawaban yang benar
        ]);
        
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Apa rumus menghitung jumlah sel A1 sampai A5?',
            'quiz_detail' => 'Pertanyaan 24 dari 30',
            'option1' => 'A1:A5',
            'option2' => '=Jumlah(A1:A5)',
            'option3' => 'A1+A5',
            'option4' => 'JUMLAH(A1, A5)',
            'correct_answer' => '=Jumlah(A1:A5)', // '=Jumlah(A1:A5)' adalah jawaban yang benar
        ]);
        
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Apa contoh referensi sel relatif?',
            'quiz_detail' => 'Pertanyaan 25 dari 30',
            'option1' => '$A$1',
            'option2' => '$A1',
            'option3' => 'A1',
            'option4' => '$1',
            'correct_answer' => 'A1', // 'A1' adalah contoh referensi sel relatif
        ]);
        
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Opsi mana yang memungkinkan Anda mengunci baris atau kolom tertentu pada tempatnya saat menggulir lembar kerja besar?',
            'quiz_detail' => 'Pertanyaan 26 dari 30',
            'option1' => 'Bekukan Panel',
            'option2' => 'Panel Kunci',
            'option3' => 'Lihat Opsi',
            'option4' => 'Panel Terpisah',
            'correct_answer' => 'Bekukan Panel', // 'Bekukan Panel' adalah jawaban yang benar
        ]);
        
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Apa itu pemfilteran di Excel?',
            'quiz_detail' => 'Pertanyaan 27 dari 30',
            'option1' => 'melihat data berdasarkan kriteria tertentu',
            'option2' => 'menghapus sel kosong dari lembar kerja',
            'option3' => 'mengurutkan data berdasarkan abjad',
            'option4' => 'menyusun data ke dalam kategori',
            'correct_answer' => 'melihat data berdasarkan kriteria tertentu', // 'melihat data berdasarkan kriteria tertentu' adalah jawaban yang benar
        ]);
        
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Jenis bagan manakah yang terbaik untuk membandingkan nilai antar kategori?',
            'quiz_detail' => 'Pertanyaan 28 dari 30',
            'option1' => 'bagan kolom',
            'option2' => 'grafik wilayah',
            'option3' => 'grafik garis',
            'option4' => 'grafik sebar',
            'correct_answer' => 'bagan kolom', // 'bagan kolom' adalah jawaban yang benar
        ]);
        
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Apa itu Tabel Pivot?',
            'quiz_detail' => 'Pertanyaan 29 dari 30',
            'option1' => 'alat yang digunakan untuk merangkum data',
            'option2' => 'suatu jenis rumus',
            'option3' => 'sejenis bagan',
            'option4' => 'cara untuk membuat makro',
            'correct_answer' => 'alat yang digunakan untuk merangkum data', // 'alat yang digunakan untuk merangkum data' adalah jawaban yang benar
        ]);
        
        Question::create([
            'title' => 'Kuis Excel',
            'course_id' => '1',
            'question' => 'Apa tujuan dari analisis “Bagaimana-jika”?',
            'quiz_detail' => 'Pertanyaan 30 dari 30',
            'option1' => 'untuk mengeksplorasi bagaimana perubahan nilai masukan memengaruhi nilai terhitung',
            'option2' => 'untuk membandingkan versi buku kerja yang berbeda',
            'option3' => 'untuk menghitung nilai maksimum dan minimum dalam suatu rentang',
            'option4' => 'untuk membuat diagram dan grafik',
            'correct_answer' => 'untuk mengeksplorasi bagaimana perubahan nilai masukan memengaruhi nilai terhitung', // 'untuk mengeksplorasi bagaimana perubahan nilai masukan memengaruhi nilai terhitung' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Manakah dari berikut ini yang paling menggambarkan Pita?',
            'quiz_detail' => 'Pertanyaan 1 dari 30',
            'option1' => 'fitur yang dapat menerjemahkan teks ke bahasa apa pun',
            'option2' => 'toolbar dengan berbagai perintah',
            'option3' => 'kabel yang menghubungkan komputer Anda ke printer',
            'option4' => 'penggeser yang dapat Anda gunakan untuk memperbesar dokumen',
            'correct_answer' => 'toolbar dengan berbagai perintah', // 'toolbar dengan berbagai perintah' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Metode manakah yang dapat Anda gunakan untuk memindahkan teks dari satu bagian dokumen ke bagian lainnya? Pilih semua yang berlaku.',
            'quiz_detail' => 'Pertanyaan 2 dari 30',
            'option1' => 'Pilih teks, lalu klik dan seret ke lokasi lain.',
            'option2' => 'Tekan tombol Print Screen pada keyboard Anda.',
            'option3' => 'Pergi ke tampilan Backstage dan klik tombol Pindah.',
            'option4' => 'Potong dan tempel teksnya.',
            'correct_answer' => 'Potong dan tempel teksnya.', // 'Pilih teks, lalu klik dan seret ke lokasi lain.' dan 'Potong dan tempel teksnya.' adalah jawaban yang benar
        ]);               
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Dalam gambar ini, "Calibri" adalah ________.',
            'quiz_detail' => 'Pertanyaan 3 dari 30',
            'option1' => 'font',
            'option2' => 'warna',
            'option3' => 'nama belakang',
            'option4' => 'tema',
            'correct_answer' => 'font', // 'font' adalah jawaban yang benar
            'image' => 'https://media.gcflearnfree.org/assets/quizzes/en/word-20192007-final-quiz_04_02_2020/word_calibri.png' // Gambar untuk pertanyaan ini
        ]);        
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Benar atau Salah: Pemeriksaan Ejaan dan Tata Bahasa Kata selalu 100% akurat.',
            'quiz_detail' => 'Pertanyaan 4 dari 30',
            'option1' => 'benar',
            'option2' => 'salah',
            'correct_answer' => 'salah', // 'salah' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Misalkan Anda membuat kesalahan saat membuat dokumen. Anda menggunakan kata “maroon” dan bukan “burgundy” di beberapa tempat. Apa cara tercepat bagi Anda untuk memperbaiki kesalahan Anda?',
            'quiz_detail' => 'Pertanyaan 5 dari 30',
            'option1' => 'Gunakan fitur Ejaan dan Tata Bahasa.',
            'option2' => 'Gunakan fitur Temukan dan Ganti.',
            'option3' => 'Masukkan SmartArt.',
            'option4' => 'Hapus semua teks dan mulai lagi dari awal.',
            'correct_answer' => 'Gunakan fitur Temukan dan Ganti.', // 'Gunakan fitur Temukan dan Ganti.' adalah jawaban yang benar
        ]);        
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Orientasi halaman mana yang digunakan dalam gambar ini?',
            'quiz_detail' => 'Pertanyaan 6 dari 30',
            'option1' => 'Lanskap',
            'option2' => 'catatan kaki',
            'option3' => 'Potret',
            'option4' => 'Pekerjaan',
            'correct_answer' => 'Potret', // 'Potret' adalah jawaban yang benar
            'image' => 'https://media.gcflearnfree.org/assets/quizzes/en/word-20192007-final-quiz_04_02_2020/word_application.png' // Tautan gambar untuk pertanyaan ini
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Jika Anda mencetak banyak salinan dokumen dan ingin halamannya diurutkan 1, 2, 3, 1, 2, 3, opsi mana yang akan Anda gunakan?',
            'quiz_detail' => 'Pertanyaan 7 dari 30',
            'option1' => 'Disusun',
            'option2' => 'Ekspor',
            'option3' => 'Orientasi tegak',
            'option4' => 'Tidak disusun',
            'correct_answer' => 'Disusun', // 'Disusun' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Misalkan Anda telah membuat daftar poin, namun poinnya terlalu dekat dengan teks. Apa cara terbaik untuk memperbaikinya?',
            'quiz_detail' => 'Pertanyaan 8 dari 30',
            'option1' => 'Tekan tombol Caps Lock pada keyboard Anda.',
            'option2' => 'Tekan tombol Tab untuk membuat indentasi teks.',
            'option3' => 'Ubah orientasi halaman.',
            'option4' => 'Sesuaikan penanda indentasi pada Ruler.',
            'correct_answer' => 'Sesuaikan penanda indentasi pada Ruler.', // 'Sesuaikan penanda indentasi pada Ruler.' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Apa keuntungan utama menggunakan kotak teks?',
            'quiz_detail' => 'Pertanyaan 9 dari 30',
            'option1' => 'Secara otomatis membuat teks lebih besar.',
            'option2' => 'Ini secara otomatis muncul di setiap halaman dokumen Anda.',
            'option3' => 'Ini memungkinkan Anda untuk mengubah orientasi halaman.',
            'option4' => 'Ini memberi Anda lebih banyak kebebasan untuk memindahkan teks.',
            'correct_answer' => 'Ini memberi Anda lebih banyak kebebasan untuk memindahkan teks.', // 'Ini memberi Anda lebih banyak kebebasan untuk memindahkan teks.' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Saat menyisipkan hyperlink, apa yang bisa Anda tautkan? Pilih semua yang berlaku.',
            'quiz_detail' => 'Pertanyaan 10 dari 30',
            'option1' => 'sebuah halaman web',
            'option2' => 'alamat email',
            'option3' => 'tempat di dokumen saat ini',
            'option4' => 'file',
            'correct_answer' => 'sebuah halaman web,tempat di dokumen saat ini,file', // Jawaban yang benar adalah pilihan 1, 3, dan 4
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Jika Anda ingin menambahkan teks ke bagian atas setiap halaman dokumen Anda, fitur manakah yang akan Anda gunakan?',
            'quiz_detail' => 'Pertanyaan 11 dari 30',
            'option1' => 'Tajuk',
            'option2' => 'Pemandangan di belakang panggung',
            'option3' => 'catatan kaki',
            'option4' => 'Tata letak halaman',
            'correct_answer' => 'Tajuk', // 'Tajuk' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Jika Anda ingin memulai ulang penomoran halaman di tengah-tengah dokumen Anda, apa yang perlu Anda lakukan terlebih dahulu?',
            'quiz_detail' => 'Pertanyaan 12 dari 30',
            'option1' => 'Tambahkan hentian bagian.',
            'option2' => 'Tutup dan buka kembali dokumen.',
            'option3' => 'Matikan Lacak Perubahan.',
            'option4' => 'Buat daftar isi.',
            'correct_answer' => 'Tambahkan hentian bagian.', // 'Tambahkan hentian bagian.' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Manakah dari berikut ini yang merupakan keuntungan menggunakan gaya bawaan Word? Pilih semua yang berlaku.',
            'quiz_detail' => 'Pertanyaan 13 dari 30',
            'option1' => 'Anda dapat dengan cepat mengubah tampilan seluruh dokumen Anda.',
            'option2' => 'Anda dapat dengan cepat memformat semua gambar di dokumen Anda.',
            'option3' => 'Anda dapat menggunakan Gaya Revisi untuk melacak perubahan pada dokumen.',
            'option4' => 'Anda dapat dengan mudah memberikan tampilan dan nuansa profesional pada dokumen Anda.',
            'correct_answer' => 'Anda dapat dengan cepat mengubah tampilan seluruh dokumen Anda.', // 'Anda dapat dengan mudah memberikan tampilan dan nuansa profesional pada dokumen Anda.' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Dalam gambar ini, dokumen tersebut menyertakan bidang untuk blok alamat dan garis sapaan. Fitur apa yang kemungkinan besar kita gunakan?',
            'quiz_detail' => 'Pertanyaan 14 dari 30',
            'option1' => 'Mail Merge',
            'option2' => 'Kotak teks',
            'option3' => 'Setelan gaya',
            'option4' => 'IsiOtomatis',
            'correct_answer' => 'Mail Merge', // 'Mail Merge' adalah jawaban yang benar
            'image' => 'https://media.gcflearnfree.org/assets/quizzes/en/word-20192007-final-quiz_04_02_2020/word_addressblock.png' // Menyisipkan URL gambar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Apa pintasan keyboard untuk membuat dokumen baru?',
            'quiz_detail' => 'Pertanyaan 15 dari 30',
            'option1' => 'Ctrl + S',
            'option2' => 'Ctrl + P',
            'option3' => 'Ctrl + N',
            'option4' => 'Ctrl + O',
            'correct_answer' => 'Ctrl + N', // 'Ctrl + N' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Bagaimana Anda menyimpan dokumen dengan nama baru?',
            'quiz_detail' => 'Pertanyaan 16 dari 30',
            'option1' => 'Tekan Ctrl + S dan masukkan nama baru.',
            'option2' => 'Klik Format dan pilih "Simpan Sebagai".',
            'option3' => 'Ketik Ctrl + V dan masukkan nama baru.',
            'option4' => 'Klik tombol Simpan Sebagai.',
            'correct_answer' => 'Klik tombol Simpan Sebagai.', // 'Klik tombol Simpan Sebagai' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Apa pintasan keyboard untuk membatalkan tindakan di Word?',
            'quiz_detail' => 'Pertanyaan 17 dari 30',
            'option1' => 'Ctrl + X',
            'option2' => 'Ctrl + Z',
            'option3' => 'Ctrl + Y',
            'option4' => 'Ctrl + C',
            'correct_answer' => 'Ctrl + Z', // 'Ctrl + Z' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Apa ekstensi file default untuk dokumen Word?',
            'quiz_detail' => 'Pertanyaan 18 dari 30',
            'option1' => '.txt',
            'option2' => '.pdf',
            'option3' => '.jpg',
            'option4' => '.docx',
            'correct_answer' => '.docx', // '.docx' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Bagaimana cara melindungi dokumen dari perubahan yang tidak diinginkan?',
            'quiz_detail' => 'Pertanyaan 19 dari 30',
            'option1' => 'dengan menyembunyikan dokumen tersebut',
            'option2' => 'dengan mengaktifkan fitur "Read-only".',
            'option3' => 'dengan menggunakan kata sandi untuk membuka dokumen',
            'option4' => 'dengan menonaktifkan fitur "Lacak Perubahan".',
            'correct_answer' => 'dengan menggunakan kata sandi untuk membuka dokumen', // 'dengan menggunakan kata sandi untuk membuka dokumen' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Apa cara termudah untuk berbagi dan mengedit dokumen Word dengan orang lain?',
            'quiz_detail' => 'Pertanyaan 20 dari 30',
            'option1' => 'dengan mengirimkan dokumen sebagai lampiran email',
            'option2' => 'dengan mengunggah dokumen ke layanan penyimpanan cloud',
            'option3' => 'dengan mencetak dokumen dan mengirimkannya',
            'option4' => 'tidak satupun dari ini akan berhasil',
            'correct_answer' => 'dengan mengunggah dokumen ke layanan penyimpanan cloud', // 'dengan mengunggah dokumen ke layanan penyimpanan cloud' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Apa pintasan keyboard untuk membuat teks tebal di Word 2016?',
            'quiz_detail' => 'Pertanyaan 21 dari 30',
            'option1' => 'Ctrl + U',
            'option2' => 'Ctrl + I',
            'option3' => 'Ctrl + Shift + B',
            'option4' => 'Ctrl + B',
            'correct_answer' => 'Ctrl + B', // 'Ctrl + B' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Manakah dari berikut ini yang BUKAN merupakan cara membuat dokumen baru di Word?',
            'quiz_detail' => 'Pertanyaan 22 dari 30',
            'option1' => 'menekan Ctrl + N',
            'option2' => 'mengklik tombol "Buka" pada bilah alat',
            'option3' => 'mengklik dua kali ikon desktop Word',
            'option4' => 'mengklik tombol "Baru" pada toolbar',
            'correct_answer' => 'mengklik tombol "Buka" pada bilah alat', // 'mengklik tombol "Buka" pada bilah alat' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Bagaimana Anda bisa mengganti semua kemunculan kata atau frasa di Word?',
            'quiz_detail' => 'Pertanyaan 23 dari 30',
            'option1' => 'dengan menggunakan Panel Navigasi',
            'option2' => 'dengan mengklik tombol Ganti pada tab Beranda',
            'option3' => 'dengan menggunakan kotak dialog Temukan dan Ganti',
            'option4' => 'dengan menghapus dan mengganti setiap kejadian secara manual',
            'correct_answer' => 'dengan menggunakan kotak dialog Temukan dan Ganti', // 'dengan menggunakan kotak dialog Temukan dan Ganti' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Apa itu spasi baris di Word?',
            'quiz_detail' => 'Pertanyaan 24 dari 30',
            'option1' => 'jumlah spasi antara teks dan margin',
            'option2' => 'jumlah spasi antar baris teks',
            'option3' => 'jumlah spasi antar paragraf',
            'option4' => 'jumlah baris teks',
            'correct_answer' => 'jumlah spasi antar baris teks', // 'jumlah spasi antar baris teks' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Apa itu daftar berpoin di Word?',
            'quiz_detail' => 'Pertanyaan 25 dari 30',
            'option1' => 'daftar item yang diurutkan berdasarkan abjad',
            'option2' => 'daftar item yang disorot dengan poin',
            'option3' => 'daftar item yang diberi nomor',
            'option4' => 'daftar item yang berada di tengah halaman',
            'correct_answer' => 'daftar item yang disorot dengan poin', // 'daftar item yang disorot dengan poin' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Apa itu hyperlink?',
            'quiz_detail' => 'Pertanyaan 26 dari 30',
            'option1' => 'sejenis gaya font',
            'option2' => 'cara untuk menambahkan catatan ke dokumen',
            'option3' => 'tautan dari satu dokumen ke dokumen lain atau ke halaman web atau URL lainnya',
            'option4' => 'tombol yang digunakan untuk menutup dokumen',
            'correct_answer' => 'tautan dari satu dokumen ke dokumen lain atau ke halaman web atau URL lainnya', // 'tautan dari satu dokumen ke dokumen lain atau ke halaman web atau URL lainnya' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Apa fungsi pintasan keyboard "Ctrl + Enter"?',
            'quiz_detail' => 'Pertanyaan 27 dari 30',
            'option1' => 'tutup dokumen saat ini',
            'option2' => 'tambahkan hentian halaman',
            'option3' => 'menyimpan dokumen',
            'option4' => 'menambahkan jeda baris',
            'correct_answer' => 'Sejalan dengan Teks menyelaraskan gambar dengan teks, sementara "Ketat" membungkus teks di sekitar gambar.', // 'tambahkan hentian halaman' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Apa tujuan komentar di dokumen Word?',
            'quiz_detail' => 'Pertanyaan 29 dari 30',
            'option1' => 'untuk menyorot teks penting dalam dokumen',
            'option2' => 'untuk memberikan umpan balik atau catatan kepada pengulas lain',
            'option3' => 'untuk menyorot kesalahan dalam dokumen',
            'option4' => 'untuk mengubah format dokumen',
            'correct_answer' => 'untuk memberikan umpan balik atau catatan kepada pengulas lain', // 'untuk memberikan umpan balik atau catatan kepada pengulas lain' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Word',
            'course_id' => '2',
            'question' => 'Apa itu SmartArt?',
            'quiz_detail' => 'Pertanyaan 30 dari 30',
            'option1' => 'fitur untuk membuat diagram dan grafik',
            'option2' => 'gaya font di Word',
            'option3' => 'satu set tata letak grafis yang telah ditentukan sebelumnya',
            'option4' => 'alat untuk membuat tabel',
            'correct_answer' => 'satu set tata letak grafis yang telah ditentukan sebelumnya', // 'satu set tata letak grafis yang telah ditentukan sebelumnya' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Perintah Slide Baru pada Pita memungkinkan Anda memilih ________.',
            'quiz_detail' => 'Pertanyaan 1 dari 30',
            'option1' => 'dimensi geser',
            'option2' => 'pengaturan cetak',
            'option3' => 'transisi',
            'option4' => 'tata letak slide',
            'correct_answer' => 'tata letak slide', // 'tata letak slide' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Kebanyakan tata letak slide menyertakan setidaknya satu ________ secara default.',
            'quiz_detail' => 'Pertanyaan 2 dari 30',
            'option1' => 'pengganti',
            'option2' => 'tombol tindakan',
            'option3' => 'animasi',
            'option4' => 'transisi',
            'correct_answer' => 'pengganti', // 'transisi' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Pada gambar ini, kita mengklik tombol pada Quick Access Toolbar. Apa yang terjadi setelah kita mengkliknya?',
            'quiz_detail' => 'Pertanyaan 3 dari 30',
            'option1' => 'Panel Animasi akan terbuka',
            'option2' => 'Presentasi akan dimulai dari awal',
            'option3' => 'Presentasi akan disimpan',
            'option4' => 'Presentasi akan berhenti',
            'correct_answer' => 'Panel Animasi akan terbuka', // 'Panel Animasi akan terbuka' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Pada gambar ini, kita mengklik tombol pada Quick Access Toolbar. Apa yang terjadi setelah kita mengkliknya?',
            'quiz_detail' => 'Pertanyaan 3 dari 30',
            'option1' => 'Panel Animasi akan terbuka',
            'option2' => 'Presentasi akan dimulai dari awal',
            'option3' => 'Presentasi akan disimpan',
            'option4' => 'Presentasi akan berhenti',
            'correct_answer' => 'Presentasi akan dimulai dari awal', // 'Panel Animasi akan terbuka' adalah jawaban yang benar
            'image' => 'https://media.gcflearnfree.org/assets/quizzes/en/powerpoint-20192007_04_02_2020/powerpoint_clickbutton.png'
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Misalkan Anda berbagi presentasi dengan beberapa rekan kerja, namun Anda tidak yakin apakah mereka semua memiliki PowerPoint. Apa cara terbaik untuk memastikan semua orang tetap dapat melihat presentasi Anda?',
            'quiz_detail' => 'Pertanyaan 4 dari 30',
            'option1' => 'Ekspor sebagai PDF',
            'option2' => 'Simpan sebagai File Teks Kaya',
            'option3' => 'Jelaskan setiap slide melalui telepon',
            'option4' => 'Cetak selebaran dan kirimkan',
            'correct_answer' => 'Ekspor sebagai PDF', // 'Ekspor sebagai PDF' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Pada gambar ini, fitur manakah yang kemungkinan besar kami gunakan untuk mengubah latar belakang, font, dan tata letak dengan cepat?',
            'quiz_detail' => 'Pertanyaan 5 dari 30',
            'option1' => 'Tema',
            'option2' => 'Tata Letak Otomatis',
            'option3' => 'Transisi',
            'option4' => 'Grafik SmartArt',
            'correct_answer' => 'Tema', // 'Tema' adalah jawaban yang benar
            'image' => 'https://media.gcflearnfree.org/assets/quizzes/en/powerpoint-20192007_04_02_2020/powerpoint_zen.png',
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Apa yang diwakili oleh ikon pada gambar ini?',
            'quiz_detail' => 'Pertanyaan 6 dari 30',
            'option1' => 'Animasi',
            'option2' => 'Warna tema',
            'option3' => 'Tata letak slide',
            'option4' => 'Transisi',
            'correct_answer' => 'Animasi', // 'Animasi' adalah jawaban yang benar
            'image' => 'https://media.gcflearnfree.org/assets/quizzes/en/powerpoint-20192007_04_02_2020/powerpoint_emphasis.png'
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Apa yang dapat Anda lakukan di Panel Animasi? Pilih semua yang berlaku.',
            'quiz_detail' => 'Pertanyaan 7 dari 30',
            'option1' => 'Cetak presentasinya',
            'option2' => 'Menyusun ulang efek',
            'option3' => 'Pratinjau efek',
            'option4' => 'Lihat semua efek pada slide saat ini',
            'correct_answer' => 'Menyusun ulang efek', // 'Menyusun ulang efek' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Apa itu jalur gerak?',
            'quiz_detail' => 'Pertanyaan 8 dari 30',
            'option1' => 'Garis waktu yang memungkinkan Anda menyusun ulang animasi',
            'option2' => 'Sebuah fitur yang mengontrol waktu animasi',
            'option3' => 'Sebuah fitur yang memungkinkan Anda memangkas video',
            'option4' => 'Animasi yang menggerakkan objek sepanjang jalur',
            'correct_answer' => 'Animasi yang menggerakkan objek sepanjang jalur', // 'Animasi yang menggerakkan objek sepanjang jalur' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Foto-foto dalam contoh ini tidak ditempatkan secara merata. Fitur manakah yang dapat kami gunakan untuk memperbaikinya?',
            'quiz_detail' => 'Pertanyaan 9 dari 30',
            'option1' => 'Sejajarkan bagian tengah',
            'option2' => 'Distribusikan secara horizontal',
            'option3' => 'Distribusikan secara vertikal',
            'option4' => 'Sejajarkan bagian tengah',
            'correct_answer' => 'Distribusikan secara horizontal', // 'Distribusikan secara horizontal' adalah jawaban yang benar
            'image' => 'https://media.gcflearnfree.org/assets/quizzes/en/powerpoint-20192007_04_02_2020/powerpoint_spacing.jpg'
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Benar atau Salah: Anda dapat mengatur presentasi agar berjalan secara otomatis.',
            'quiz_detail' => 'Pertanyaan 10 dari 30',
            'option1' => 'BENAR',
            'option2' => 'SALAH',
            'correct_answer' => 'BENAR', // 'BENAR' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Apa yang ditunjukkan oleh gambar ini?',
            'quiz_detail' => 'Pertanyaan 11 dari 30',
            'option1' => 'Tampilan penyortir slide',
            'option2' => 'Transisi diterapkan pada slide',
            'option3' => 'Mengompresi grafik',
            'option4' => 'Animasi yang diterapkan pada suatu objek',
            'correct_answer' => 'Transisi diterapkan pada slide', // 'Transisi diterapkan pada slide' adalah jawaban yang benar
            'image' => 'https://media.gcflearnfree.org/assets/quizzes/en/powerpoint-20192007_04_02_2020/powerpointgif.gif'
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Jika Anda menambahkan musik latar belakang dan ingin musik tersebut terus diputar sepanjang presentasi, fitur mana yang harus Anda gunakan?',
            'quiz_detail' => 'Pertanyaan 12 dari 30',
            'option1' => 'Mundur setelah bermain',
            'option2' => 'Putar di seluruh slide',
            'option3' => 'Pangkas audio',
            'option4' => 'Tampilan Master Geser',
            'correct_answer' => 'Putar di seluruh slide', // 'Putar di seluruh slide' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Katakanlah Anda ingin menambahkan logo perusahaan ke pojok kanan bawah setiap slide. Apa cara paling efisien untuk melakukan ini?',
            'quiz_detail' => 'Pertanyaan 13 dari 30',
            'option1' => 'Sisipkan logo satu kali, salin, lalu tempel ke slide lainnya',
            'option2' => 'Salin gambar, pilih semua slide di Panel Navigasi, klik kanan, dan pilih Tempel',
            'option3' => 'Gunakan alat pena untuk menggambar logo',
            'option4' => 'Masukkan logo pada Slide Master',
            'correct_answer' => 'Masukkan logo pada Slide Master', // 'Masukkan logo pada Slide Master' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Benar atau Salah: Anda dapat menambahkan tombol tindakan dalam tampilan Master Slide.',
            'quiz_detail' => 'Pertanyaan 14 dari 30',
            'option1' => 'BENAR',
            'option2' => 'SALAH',
            'correct_answer' => 'BENAR', // 'BENAR' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Untuk memulai tayangan slide dari awal, Anda dapat menekan "Shift + ____."',
            'quiz_detail' => 'Pertanyaan 15 dari 30',
            'option1' => 'F8',
            'option2' => 'F5',
            'option3' => 'F6',
            'option4' => 'F7',
            'correct_answer' => 'F5', // 'F5' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Apa ekstensi file default untuk presentasi PowerPoint?',
            'quiz_detail' => 'Pertanyaan 16 dari 30',
            'option1' => '.pptx',
            'option2' => '.pdf',
            'option3' => '.docx',
            'option4' => '.xlsx',
            'correct_answer' => '.pptx', // '.pptx' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Apa yang dapat Anda lakukan dengan fungsi "Simpan Sebagai" di PowerPoint?',
            'quiz_detail' => 'Pertanyaan 17 dari 30',
            'option1' => 'simpan presentasi saat ini dengan nama yang berbeda',
            'option2' => 'simpan presentasi saat ini dalam format file yang berbeda',
            'option3' => 'membuat salinan presentasi saat ini',
            'option4' => 'semua hal ini',
            'correct_answer' => 'semua hal ini', // 'semua hal ini' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Bagaimana cara mengompresi gambar dalam presentasi untuk mengurangi ukuran file?',
            'quiz_detail' => 'Pertanyaan 18 dari 30',
            'option1' => 'Tekan "Ctrl + C."',
            'option2' => 'Anda tidak dapat mengompresi gambar.',
            'option3' => 'Klik kanan dan pilih "Kompres Gambar".',
            'option4' => 'Klik "Kompres Gambar" di pita.',
            'correct_answer' => 'Klik "Kompres Gambar" di pita.', // 'Klik "Kompres Gambar" di pita.' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Apa itu slide di PowerPoint?',
            'quiz_detail' => 'Pertanyaan 19 dari 30',
            'option1' => 'sejenis font',
            'option2' => 'suatu jenis animasi',
            'option3' => 'satu halaman presentasi',
            'option4' => 'transisi antar slide',
            'correct_answer' => 'satu halaman presentasi', // 'satu halaman presentasi' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Apa itu placeholder di PowerPoint?',
            'quiz_detail' => 'Pertanyaan 20 dari 30',
            'option1' => 'sejenis font',
            'option2' => 'suatu jenis transisi',
            'option3' => 'sebuah kotak pada slide yang menampung teks atau objek',
            'option4' => 'suatu jenis animasi',
            'correct_answer' => 'sebuah kotak pada slide yang menampung teks atau objek', // 'sebuah kotak pada slide yang menampung teks atau objek' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Apa itu gaya latar belakang di PowerPoint?',
            'quiz_detail' => 'Pertanyaan 21 dari 30',
            'option1' => 'sejenis transisi slide',
            'option2' => 'serangkaian warna dan efek yang telah ditentukan sebelumnya yang diterapkan pada latar belakang slide',
            'option3' => 'suatu jenis animasi',
            'option4' => 'sejenis font',
            'correct_answer' => 'serangkaian warna dan efek yang telah ditentukan sebelumnya yang diterapkan pada latar belakang slide', // 'serangkaian warna dan efek yang telah ditentukan sebelumnya yang diterapkan pada latar belakang slide' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Apa tampilan Slide Sorter di PowerPoint?',
            'quiz_detail' => 'Pertanyaan 22 dari 30',
            'option1' => 'tampilan yang menampilkan catatan pembicara untuk slide',
            'option2' => 'tampilan yang menampilkan satu slide dalam satu waktu',
            'option3' => 'tampilan yang menampilkan semua slide dalam presentasi dalam format kisi',
            'option4' => 'tampilan yang menampilkan garis besar presentasi',
            'correct_answer' => 'tampilan yang menampilkan semua slide dalam presentasi dalam format kisi', // 'tampilan yang menampilkan semua slide dalam presentasi dalam format kisi' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Bagaimana Anda bisa mengakses fitur "Temukan" di PowerPoint?',
            'quiz_detail' => 'Pertanyaan 23 dari 30',
            'option1' => 'Klik tombol "Temukan" di bagian "Pengeditan" pada Pita.',
            'option2' => 'Ketik "Temukan" di bilah pencarian menu.',
            'option3' => 'Tekan "Ctrl + F."',
            'option4' => 'Klik kanan pada slide dan pilih "Temukan".',
            'correct_answer' => 'Tekan "Ctrl + F."', // 'Tekan "Ctrl + F."' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Apa perbedaan antara mode "Potret" dan "Lanskap"?',
            'quiz_detail' => 'Pertanyaan 24 dari 30',
            'option1' => 'Mode lanskap mencetak slide secara vertikal, sedangkan mode potret mencetak slide secara horizontal.',
            'option2' => 'Mode Potret mencetak slide secara vertikal, sedangkan mode lanskap mencetak slide secara horizontal.',
            'option3' => 'Mode Potret mencetak slide dalam skala abu-abu, sedangkan mode lanskap mencetak slide dalam warna.',
            'option4' => 'Mode lanskap mencetak slide dalam skala abu-abu, sedangkan mode potret mencetak slide dalam warna.',
            'correct_answer' => 'Mode Potret mencetak slide secara vertikal, sedangkan mode lanskap mencetak slide secara horizontal.', // 'Mode Potret mencetak slide secara vertikal, sedangkan mode lanskap mencetak slide secara horizontal.' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Bagaimana Anda mengakhiri tayangan slide di PowerPoint?',
            'quiz_detail' => 'Pertanyaan 25 dari 30',
            'option1' => 'semua ini akan berhasil',
            'option2' => 'Klik tab "Slide Show" pada pita, lalu klik "End Slide Show."',
            'option3' => 'Tekan tombol "ESC" pada keyboard Anda.',
            'option4' => 'Klik tab "Lihat" pada pita, lalu klik "Akhiri Pertunjukan Slide".',
            'correct_answer' => 'semua ini akan berhasil', // 'semua ini akan berhasil' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Jenis file gambar apa yang dapat Anda sisipkan ke dalam presentasi PowerPoint?',
            'quiz_detail' => 'Pertanyaan 26 dari 30',
            'option1' => 'jpeg',
            'option2' => 'semua jenis file gambar ini',
            'option3' => 'PNG',
            'option4' => 'GIF',
            'correct_answer' => 'semua jenis file gambar ini', // 'semua jenis file gambar ini' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Apa tujuan alat "Putar" untuk bentuk?',
            'quiz_detail' => 'Pertanyaan 27 dari 30',
            'option1' => 'untuk mengubah warna isian bentuk',
            'option2' => 'untuk mengubah ukuran bentuk secara proporsional',
            'option3' => 'untuk mengubah sudut bentuk',
            'option4' => 'untuk menghapus bentuknya',
            'correct_answer' => 'untuk mengubah sudut bentuk', // 'untuk mengubah sudut bentuk' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Bagaimana cara menyisipkan video di PowerPoint?',
            'quiz_detail' => 'Pertanyaan 28 dari 30',
            'option1' => 'Buka Sisipkan > Unduh > Video.',
            'option2' => 'Buka Sisipkan > Media > Video.',
            'option3' => 'Buka Sisipkan > Audio > Video.',
            'option4' => 'Buka Sisipkan > Gambar > Video.',
            'correct_answer' => 'Buka Sisipkan > Media > Video.', // 'Buka Sisipkan > Media > Video.' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Apa itu bagan di PowerPoint?',
            'quiz_detail' => 'Pertanyaan 29 dari 30',
            'option1' => 'representasi visual dari data',
            'option2' => 'gambar dekoratif',
            'option3' => 'bentuk yang digunakan untuk menyorot teks',
            'option4' => 'gambar clipart',
            'correct_answer' => 'representasi visual dari data', // 'representasi visual dari data' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Power Point',
            'course_id' => '3',
            'question' => 'Untuk apa SmartArt digunakan?',
            'quiz_detail' => 'Pertanyaan 30 dari 30',
            'option1' => 'untuk membuat grafik dan tabel',
            'option2' => 'untuk memasukkan audio dan video',
            'option3' => 'untuk membuat grafik dan diagram',
            'option4' => 'untuk membuat animasi dan transisi',
            'correct_answer' => 'untuk membuat grafik dan diagram', // 'untuk membuat grafik dan diagram' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Gmail',
            'course_id' => '4',
            'question' => 'Benar atau Salah: Saat Anda mendaftar ke Gmail, Anda secara otomatis memiliki akses ke Google Drive, Google Kalender, dan layanan lainnya.',
            'quiz_detail' => 'Pertanyaan 1 dari 20',
            'option1' => 'BENAR',
            'option2' => 'SALAH',
            'correct_answer' => 'BENAR', // 'BENAR' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Gmail',
            'course_id' => '4',
            'question' => 'Saat mengatur pesan, Anda dapat menerapkan satu atau lebih ________ untuk mengkategorikannya.',
            'quiz_detail' => 'Pertanyaan 2 dari 20',
            'option1' => 'perekat',
            'option2' => 'label',
            'option3' => 'balasan',
            'option4' => 'spam',
            'correct_answer' => 'label', // 'label' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Gmail',
            'course_id' => '4',
            'question' => 'Jika Anda ingin menghapus pesan dari kotak masuk tanpa menghapusnya, gunakan tombol ________.',
            'quiz_detail' => 'Pertanyaan 3 dari 20',
            'option1' => 'Arsip',
            'option2' => 'Laporkan spam',
            'option3' => 'Menghapus',
            'option4' => 'Label',
            'correct_answer' => 'Arsip', // 'Arsip' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Gmail',
            'course_id' => '4',
            'question' => 'Benar atau Salah: Gmail mengharuskan Anda membuat tanda tangan email.',
            'quiz_detail' => 'Pertanyaan 4 dari 20',
            'option1' => 'BENAR',
            'option2' => 'SALAH',
            'correct_answer' => 'SALAH', // 'SALAH' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Gmail',
            'course_id' => '4',
            'question' => 'Jika Anda ingin merespons sekelompok orang, Anda harus menggunakan opsi ________.',
            'quiz_detail' => 'Pertanyaan 5 dari 20',
            'option1' => 'Membalas',
            'option2' => 'Tanda tangan',
            'option3' => 'Balas ke semua',
            'option4' => 'Maju',
            'correct_answer' => 'Balas ke semua', // 'Balas ke semua' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Gmail',
            'course_id' => '4',
            'question' => 'Untuk membuka pengaturan, Anda harus mengeklik ikon ________ terlebih dahulu.',
            'quiz_detail' => 'Pertanyaan 6 dari 20',
            'option1' => 'gear',
            'option2' => 'amplop',
            'option3' => 'pemberitahuan',
            'option4' => 'kunci',
            'correct_answer' => 'gear', // 'gigi' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Gmail',
            'course_id' => '4',
            'question' => 'Untuk keluar dari Gmail, Anda harus mengeklik ________ terlebih dahulu.',
            'quiz_detail' => 'Pertanyaan 7 dari 20',
            'option1' => 'ikon nama/profil Anda',
            'option2' => 'ikon roda gigi',
            'option3' => 'Membalas',
            'option4' => 'Kontak',
            'correct_answer' => 'ikon nama/profil Anda', // 'ikon nama/profil Anda' adalah jawaban yang benar
        ]);
        Question::create([
            'title' => 'Kuis Gmail',
            'course_id' => '4',
            'question' => 'Mengapa Anda ingin membuat filter email? Pilih semua yang berlaku.',
            'quiz_detail' => 'Pertanyaan 8 dari 20',
            'option1' => 'untuk menghapus pesan tertentu secara otomatis',
            'option2' => 'untuk membalas pesan masuk secara otomatis',
            'option3' => 'untuk mengarsipkan pesan tertentu secara otomatis',
            'option4' => 'untuk secara otomatis memberi label pada pesan tertentu',
            'correct_answer' => 'untuk menghapus pesan tertentu secara otomatis,untuk mengarsipkan pesan tertentu secara otomatis,untuk secara otomatis memberi label pada pesan tertentu', // Pilihan yang benar adalah 'untuk menghapus pesan tertentu secara otomatis', 'untuk mengarsipkan pesan tertentu secara otomatis', dan 'untuk secara otomatis memberi label pada pesan tertentu'
        ]);
        Question::create([
            'title' => 'Kuis Gmail',
            'course_id' => '4',
            'question' => 'Berapa ukuran maksimal lampiran di Gmail?',
            'quiz_detail' => 'Pertanyaan 9 dari 20',
            'option1' => '30 MB',
            'option2' => '50 MB',
            'option3' => '10 MB',
            'option4' => '25 MB',
            'correct_answer' => '25 MB', // Ukuran maksimal lampiran di Gmail adalah 25 MB
        ]);
        Question::create([
            'title' => 'Kuis Gmail',
            'course_id' => '4',
            'question' => 'Apa tujuan dari folder Spam di Gmail?',
            'quiz_detail' => 'Pertanyaan 10 dari 20',
            'option1' => 'untuk menaruh pesan yang tidak diinginkan',
            'option2' => 'untuk menjaga keamanan email penting',
            'option3' => 'untuk mengatur email berdasarkan pengirim',
            'option4' => 'untuk menyimpan cadangan semua email',
            'correct_answer' => 'untuk menaruh pesan yang tidak diinginkan', // Folder Spam di Gmail digunakan untuk menaruh pesan yang tidak diinginkan
        ]);
        Question::create([
            'title' => 'Kuis Gmail',
            'course_id' => '4',
            'question' => 'Bagaimana cara menjadwalkan email untuk dikirim di lain waktu di Gmail?',
            'quiz_detail' => 'Pertanyaan 11 dari 20',
            'option1' => 'Klik tombol Balas.',
            'option2' => 'Klik tombol Teruskan.',
            'option3' => 'Klik tombol Lampirkan.',
            'option4' => 'Klik panah di sebelah tombol Kirim.',
            'correct_answer' => 'Klik panah di sebelah tombol Kirim.', // Menjadwalkan email untuk dikirim di lain waktu di Gmail dilakukan dengan mengklik panah di sebelah tombol Kirim
        ]);
        Question::create([
            'title' => 'Kuis Gmail',
            'course_id' => '4',
            'question' => 'Apa tujuan dari alamat email pemulihan di Gmail?',
            'quiz_detail' => 'Pertanyaan 12 dari 20',
            'option1' => 'untuk meneruskan email',
            'option2' => 'untuk memulihkan email yang dihapus',
            'option3' => 'untuk mengirim pesan spam',
            'option4' => 'untuk mengatur ulang kata sandi Anda',
            'correct_answer' => 'untuk mengatur ulang kata sandi Anda', // Tujuan dari alamat email pemulihan di Gmail adalah untuk mengatur ulang kata sandi Anda
        ]);
        Question::create([
            'title' => 'Kuis Gmail',
            'course_id' => '4',
            'question' => 'Apa yang dimaksud dengan "tanggapan terekam" di Gmail?',
            'quiz_detail' => 'Pertanyaan 13 dari 20',
            'option1' => 'pesan email yang telah ditulis sebelumnya yang dapat digunakan kembali',
            'option2' => 'pesan yang terhapus secara otomatis',
            'option3' => 'email spam yang dikirim ke banyak penerima',
            'option4' => 'pesan yang secara otomatis ditandai sebagai "sudah dibaca"',
            'correct_answer' => 'pesan email yang telah ditulis sebelumnya yang dapat digunakan kembali', // Tanggapan terekam di Gmail adalah pesan email yang telah ditulis sebelumnya yang dapat digunakan kembali
        ]);
        Question::create([
            'title' => 'Kuis Gmail',
            'course_id' => '4',
            'question' => 'Berapa lama Anda harus membatalkan pengiriman email di Gmail?',
            'quiz_detail' => 'Pertanyaan 14 dari 20',
            'option1' => '10 detik',
            'option2' => '5 detik',
            'option3' => '15 detik',
            'option4' => '20 detik',
            'correct_answer' => '10 detik', // Anda memiliki 10 detik untuk membatalkan pengiriman email di Gmail
        ]);
        Question::create([
            'title' => 'Kuis Gmail',
            'course_id' => '4',
            'question' => 'Apa tujuan dari kolom "CC" di Gmail?',
            'quiz_detail' => 'Pertanyaan 15 dari 20',
            'option1' => 'untuk mengirim "tanda terima telah dibaca" kepada pengirim',
            'option2' => 'untuk mengirim "salinan buta" kepada seseorang',
            'option3' => 'untuk menyertakan penerima lain dalam rangkaian email',
            'option4' => 'untuk melampirkan file ke email',
            'correct_answer' => 'untuk menyertakan penerima lain dalam rangkaian email', // Kolom "CC" digunakan untuk menyertakan penerima lain dalam rangkaian email
        ]);
        Question::create([
            'title' => 'Kuis Gmail',
            'course_id' => '4',
            'question' => 'Bagaimana cara melampirkan file ke email di Gmail?',
            'quiz_detail' => 'Pertanyaan 16 dari 20',
            'option1' => 'Klik pada ikon "Lampirkan file".',
            'option2' => 'Seret dan lepas file.',
            'option3' => 'Salin dan tempel file tersebut.',
            'option4' => 'Ketikkan nama file.',
            'correct_answer' => 'Klik pada ikon "Lampirkan file".', // Cara melampirkan file ke email di Gmail adalah dengan mengklik ikon "Lampirkan file".
        ]);
        Question::create([
            'title' => 'Kuis Gmail',
            'course_id' => '4',
            'question' => 'Apa tujuan mengarsipkan email di Gmail?',
            'quiz_detail' => 'Pertanyaan 17 dari 20',
            'option1' => 'untuk menandai email sebagai penting',
            'option2' => 'untuk meneruskan email ke seseorang',
            'option3' => 'untuk menghapus email secara permanen',
            'option4' => 'untuk menyimpan email untuk referensi nanti',
            'correct_answer' => 'untuk menyimpan email untuk referensi nanti', // Tujuan mengarsipkan email di Gmail adalah untuk menyimpan email untuk referensi nanti.
        ]);
        Question::create([
            'title' => 'Kuis Gmail',
            'course_id' => '4',
            'question' => 'Bagaimana cara mencari email di Gmail?',
            'quiz_detail' => 'Pertanyaan 18 dari 20',
            'option1' => 'Klik tombol "Cari".',
            'option2' => 'Ketikkan permintaan pencarian di bilah alamat.',
            'option3' => 'Klik tombol "Pencarian lanjutan".',
            'option4' => 'Ketikkan permintaan pencarian di bilah pencarian.',
            'correct_answer' => 'Ketikkan permintaan pencarian di bilah pencarian.', // Cara mencari email di Gmail adalah dengan mengetikkan permintaan pencarian di bilah pencarian.
        ]);
        Question::create([
            'title' => 'Kuis Gmail',
            'course_id' => '4',
            'question' => 'Jika Anda ingin memilih setiap email di halaman kotak masuk, Anda dapat...',
            'quiz_detail' => 'Pertanyaan 19 dari 20',
            'option1' => 'pindahkan ke bagian arsip.',
            'option2' => 'klik kanan dan seret kotak ke atasnya.',
            'option3' => 'klik tombol Pilih Semua.',
            'option4' => 'ketik "hapus" di bilah pencarian.',
            'correct_answer' => 'klik tombol Pilih Semua.', // Jika Anda ingin memilih setiap email di halaman kotak masuk, Anda dapat melakukannya dengan mengklik tombol "Pilih Semua".
        ]);
        Question::create([
            'title' => 'Kuis Gmail',
            'course_id' => '4',
            'question' => 'Apa tujuan fitur "Kotak Prioritas" Gmail?',
            'quiz_detail' => 'Pertanyaan 20 dari 20',
            'option1' => 'untuk menyaring email spam',
            'option2' => 'untuk membuat tanda tangan email khusus',
            'option3' => 'untuk mengatur email berdasarkan pengirim',
            'option4' => 'untuk secara otomatis mengurutkan email berdasarkan kepentingannya',
            'correct_answer' => 'untuk secara otomatis mengurutkan email berdasarkan kepentingannya', // Fitur "Kotak Prioritas" Gmail bertujuan untuk secara otomatis mengurutkan email berdasarkan kepentingannya.
        ]);
        Quiz::create([
            'title' => 'Kuis Excel',
        ]); 
        Quiz::create([
            'title' => 'Kuis Word',
        ]); 
        Quiz::create([
            'title' => 'Kuis Power Point',
        ]); 
        Quiz::create([
            'title' => 'Kuis Gmail',
        ]); 
                                          
    }
}