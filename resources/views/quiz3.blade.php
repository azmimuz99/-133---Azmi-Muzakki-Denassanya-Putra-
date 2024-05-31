

<script src="js/quiz.js" defer></script> <!-- Path to your JS file -->
<style>
.bulgy-radios label {
    display: block;
    margin-bottom: 1em;
    cursor: pointer;
    user-select: none;
}

.bulgy-radios .radio {
    display: inline-block;
    width: 16px;
    height: 16px;
    border: 2px solid #999;
    border-radius: 50%;
    margin-right: 10px;
    vertical-align: middle;
    transition: border-color 0.2s;
}

.bulgy-radios input[type="radio"] {
    display: none;
}

.bulgy-radios input[type="radio"]:checked + .radio {
    border-color: #333;
    background-color: #333;
}

.bulgy-radios .label {
    display: inline-block;
    vertical-align: middle;
}

.bulgy-radios input[type="radio"]:checked + .radio + .label {
    font-weight: bold;
}

</style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

<div class="card-body">
    <h4>Kuis Power Point</h4>
    <div id="quiz-container">
        <form id="quiz-form">
        <div class="question" data-correct="option4">
                <p>Perintah Slide Baru pada Pita memungkinkan Anda memilih ________.</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question1" value="option1" />
                        <span class="radio"></span>
                        <span class="label">dimensi geser</span>
                    </label>
                    <label>
                        <input type="radio" name="question1" value="option2" />
                        <span class="radio"></span>
                        <span class="label">pengaturan cetak</span>
                    </label>
                    <label>
                        <input type="radio" name="question1" value="option3" />
                        <span class="radio"></span>
                        <span class="label">transisi</span>
                    </label>
                    <label>
                        <input type="radio" name="question1" value="option4" />
                        <span class="radio"></span>
                        <span class="label">tata letak slide</span>
                    </label>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="question" data-correct="option1">
                <p>Kebanyakan tata letak slide menyertakan setidaknya satu ________ secara default.</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question2" value="option1" />
                        <span class="radio"></span>
                        <span class="label">pengganti</span>
                    </label>
                    <label>
                        <input type="radio" name="question2" value="option2" />
                        <span class="radio"></span>
                        <span class="label">tombol tindakan</span>
                    </label>
                    <label>
                        <input type="radio" name="question2" value="option3" />
                        <span class="radio"></span>
                        <span class="label">animasi</span>
                    </label>
                    <label>
                        <input type="radio" name="question2" value="option4" />
                        <span class="radio"></span>
                        <span class="label">transisi</span>
                    </label>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="question" data-correct="option1">
                <p>Pada gambar ini, kita mengklik tombol pada Quick Access Toolbar. Apa yang terjadi setelah kita mengkliknya?</p>
                <img src="https://media.gcflearnfree.org/assets/quizzes/en/powerpoint-20192007_04_02_2020/powerpoint_clickbutton.png" alt="Quick Access Toolbar">
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question3" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Panel Animasi akan terbuka</span>
                    </label>
                    <label>
                        <input type="radio" name="question3" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Presentasi akan dimulai dari awal</span>
                    </label>
                    <label>
                        <input type="radio" name="question3" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Presentasi akan disimpan</span>
                    </label>
                    <label>
                        <input type="radio" name="question3" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Presentasi akan berhenti</span>
                    </label>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="question" data-correct="option1">
                <p>Misalkan Anda berbagi presentasi dengan beberapa rekan kerja, namun Anda tidak yakin apakah mereka semua memiliki PowerPoint. Apa cara terbaik untuk memastikan semua orang tetap dapat melihat presentasi Anda?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question4" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Ekspor sebagai PDF</span>
                    </label>
                    <label>
                        <input type="radio" name="question4" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Simpan sebagai File Teks Kaya</span>
                    </label>
                    <label>
                        <input type="radio" name="question4" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Jelaskan setiap slide melalui telepon</span>
                    </label>
                    <label>
                        <input type="radio" name="question4" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Cetak selebaran dan kirimkan</span>
                    </label>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="question" data-correct="option1">
                <p>Pada gambar ini, fitur manakah yang kemungkinan besar kami gunakan untuk mengubah latar belakang, font, dan tata letak dengan cepat?</p>
                <img src="https://media.gcflearnfree.org/assets/quizzes/en/powerpoint-20192007_04_02_2020/powerpoint_zen.png" alt="Theme">
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question5" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Tema</span>
                    </label>
                    <label>
                        <input type="radio" name="question5" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Tata Letak Otomatis</span>
                    </label>
                    <label>
                        <input type="radio" name="question5" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Transisi</span>
                    </label>
                    <label>
                        <input type="radio" name="question5" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Grafik SmartArt</span>
                    </label>
                </div>
            </div>

            <!-- Question 6 -->
            <div class="question" data-correct="option1">
                <p>Apa yang diwakili oleh ikon pada gambar ini?</p>
                <img src="https://media.gcflearnfree.org/assets/quizzes/en/powerpoint-20192007_04_02_2020/powerpoint_emphasis.png" alt="Animation Icon">
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question6" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Animasi</span>
                    </label>
                    <label>
                        <input type="radio" name="question6" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Warna tema</span>
                    </label>
                    <label>
                        <input type="radio" name="question6" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Tata letak slide</span>
                    </label>
                    <label>
                        <input type="radio" name="question6" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Transisi</span>
                    </label>
                </div>
            </div>

            <!-- Question 7 -->
            <div class="question" data-correct="option2">
                <p>Apa yang dapat Anda lakukan di Panel Animasi? Pilih semua yang berlaku.</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question7" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Cetak presentasinya</span>
                    </label>
                    <label>
                        <input type="radio" name="question7" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Menyusun ulang efek</span>
                    </label>
                    <label>
                        <input type="radio" name="question7" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Pratinjau efek</span>
                    </label>
                    <label>
                        <input type="radio" name="question7" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Lihat semua efek pada slide saat ini</span>
                    </label>
                </div>
            </div>

            <!-- Question 8 -->
            <div class="question" data-correct="option4">
                <p>Apa itu jalur gerak?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question8" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Garis waktu yang memungkinkan Anda menyusun ulang animasi</span>
                    </label>
                    <label>
                        <input type="radio" name="question8" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Sebuah fitur yang mengontrol waktu animasi</span>
                    </label>
                    <label>
                        <input type="radio" name="question8" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Sebuah fitur yang memungkinkan Anda memangkas video</span>
                    </label>
                    <label>
                        <input type="radio" name="question8" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Animasi yang menggerakkan objek sepanjang jalur</span>
                    </label>
                </div>
            </div>

            <!-- Question 9 -->
            <div class="question" data-correct="option2">
                <p>Foto-foto dalam contoh ini tidak ditempatkan secara merata. Fitur manakah yang dapat kami gunakan untuk memperbaikinya?</p>
                <img src="https://media.gcflearnfree.org/assets/quizzes/en/powerpoint-20192007_04_02_2020/powerpoint_spacing.jpg" alt="Photo Alignment">
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question9" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Sejajarkan bagian tengah</span>
                    </label>
                    <label>
                        <input type="radio" name="question9" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Distribusikan secara horizontal</span>
                    </label>
                    <label>
                        <input type="radio" name="question9" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Distribusikan secara vertikal</span>
                    </label>
                    <label>
                        <input type="radio" name="question9" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Sejajarkan bagian tengah</span>
                    </label>
                </div>
            </div>

            <!-- Question 10 -->
            <div class="question" data-correct="option1">
                <p>Benar atau Salah: Anda dapat mengatur presentasi agar berjalan secara otomatis.</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question10" value="option1" />
                        <span class="radio"></span>
                        <span class="label">BENAR</span>
                    </label>
                    <label>
                        <input type="radio" name="question10" value="option2" />
                        <span class="radio"></span>
                        <span class="label">SALAH</span>
                    </label>
                </div>
            </div>

            <!-- Question 11 -->
            <div class="question" data-correct="option2">
                <p>Apa yang ditunjukkan oleh gambar ini?</p>
                <img src="https://media.gcflearnfree.org/assets/quizzes/en/powerpoint-20192007_04_02_2020/powerpointgif.gif" alt="Slide Transition">
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question11" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Tampilan penyortir slide</span>
                    </label>
                    <label>
                        <input type="radio" name="question11" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Transisi diterapkan pada slide</span>
                    </label>
                    <label>
                        <input type="radio" name="question11" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Mengompresi grafik</span>
                    </label>
                    <label>
                        <input type="radio" name="question11" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Animasi yang diterapkan pada suatu objek</span>
                    </label>
                </div>
            </div>

            <!-- Question 12 -->
            <div class="question" data-correct="option2">
                <p>Jika Anda menambahkan musik latar belakang dan ingin musik tersebut terus diputar sepanjang presentasi, fitur mana yang harus Anda gunakan?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question12" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Mundur setelah bermain</span>
                    </label>
                    <label>
                        <input type="radio" name="question12" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Putar di seluruh slide</span>
                    </label>
                    <label>
                        <input type="radio" name="question12" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Pangkas audio</span>
                    </label>
                    <label>
                        <input type="radio" name="question12" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Tampilan Master Geser</span>
                    </label>
                </div>
            </div>

            <!-- Question 13 -->
            <div class="question" data-correct="option4">
                <p>Katakanlah Anda ingin menambahkan logo perusahaan ke pojok kanan bawah setiap slide. Apa cara paling efisien untuk melakukan ini?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question13" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Sisipkan logo satu kali, salin, lalu tempel ke slide lainnya</span>
                    </label>
                    <label>
                        <input type="radio" name="question13" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Salin gambar, pilih semua slide di Panel Navigasi, klik kanan, dan pilih Tempel</span>
                    </label>
                    <label>
                        <input type="radio" name="question13" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Gunakan alat pena untuk menggambar logo</span>
                    </label>
                    <label>
                        <input type="radio" name="question13" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Masukkan logo pada Slide Master</span>
                    </label>
                </div>
            </div>
            <div class="question" data-correct="option1">
    <p>Benar atau Salah: Anda dapat mengubah tema presentasi kapan saja setelah membuatnya.</p>
    <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
        <label>
            <input type="radio" name="question14" value="option1" />
            <span class="radio"></span>
            <span class="label">BENAR</span>
        </label>
        <label>
            <input type="radio" name="question14" value="option2" />
            <span class="radio"></span>
            <span class="label">SALAH</span>
        </label>
    </div>
</div>

<!-- Question 15 -->
<div class="question" data-correct="option3">
    <p>Perintah manakah yang memungkinkan Anda menyimpan presentasi PowerPoint sebagai file video?</p>
    <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
        <label>
            <input type="radio" name="question15" value="option1" />
            <span class="radio"></span>
            <span class="label">Simpan Sebagai</span>
        </label>
        <label>
            <input type="radio" name="question15" value="option2" />
            <span class="radio"></span>
            <span class="label">Ekspor</span>
        </label>
        <label>
            <input type="radio" name="question15" value="option3" />
            <span class="radio"></span>
            <span class="label">Simpan & Kirim</span>
        </label>
        <label>
            <input type="radio" name="question15" value="option4" />
            <span class="radio"></span>
            <span class="label">Bagikan</span>
        </label>
    </div>
</div>
<div class="question" data-correct="option1">
            <p>Apa ekstensi file default untuk presentasi PowerPoint?</p>
            <div class="bulgy-radios" role="radiogroup">
                <label>
                    <input type="radio" name="question16" value="option1" />
                    <span class="radio"></span>
                    <span class="label">.pptx</span>
                </label>
                <label>
                    <input type="radio" name="question16" value="option2" />
                    <span class="radio"></span>
                    <span class="label">.pdf</span>
                </label>
                <label>
                    <input type="radio" name="question16" value="option3" />
                    <span class="radio"></span>
                    <span class="label">.docx</span>
                </label>
                <label>
                    <input type="radio" name="question16" value="option4" />
                    <span class="radio"></span>
                    <span class="label">.xlsx</span>
                </label>
            </div>
        </div>

        <!-- Question 17 -->
        <div class="question" data-correct="option4">
            <p>Apa yang dapat Anda lakukan dengan fungsi "Simpan Sebagai" di PowerPoint?</p>
            <div class="bulgy-radios" role="radiogroup">
                <label>
                    <input type="radio" name="question17" value="option1" />
                    <span class="radio"></span>
                    <span class="label">simpan presentasi saat ini dengan nama yang berbeda</span>
                </label>
                <label>
                    <input type="radio" name="question17" value="option2" />
                    <span class="radio"></span>
                    <span class="label">simpan presentasi saat ini dalam format file yang berbeda</span>
                </label>
                <label>
                    <input type="radio" name="question17" value="option3" />
                    <span class="radio"></span>
                    <span class="label">membuat salinan presentasi saat ini</span>
                </label>
                <label>
                    <input type="radio" name="question17" value="option4" />
                    <span class="radio"></span>
                    <span class="label">semua hal ini</span>
                </label>
            </div>
        </div>

        <!-- Question 18 -->
        <div class="question" data-correct="option4">
            <p>Bagaimana cara mengompresi gambar dalam presentasi untuk mengurangi ukuran file?</p>
            <div class="bulgy-radios" role="radiogroup">
                <label>
                    <input type="radio" name="question18" value="option1" />
                    <span class="radio"></span>
                    <span class="label">Tekan "Ctrl + C."</span>
                </label>
                <label>
                    <input type="radio" name="question18" value="option2" />
                    <span class="radio"></span>
                    <span class="label">Anda tidak dapat mengompresi gambar.</span>
                </label>
                <label>
                    <input type="radio" name="question18" value="option3" />
                    <span class="radio"></span>
                    <span class="label">Klik kanan dan pilih "Kompres Gambar".</span>
                </label>
                <label>
                    <input type="radio" name="question18" value="option4" />
                    <span class="radio"></span>
                    <span class="label">Klik "Kompres Gambar" di pita.</span>
                </label>
            </div>
        </div>

        <!-- Question 19 -->
        <div class="question" data-correct="option3">
            <p>Apa itu slide di PowerPoint?</p>
            <div class="bulgy-radios" role="radiogroup">
                <label>
                    <input type="radio" name="question19" value="option1" />
                    <span class="radio"></span>
                    <span class="label">sejenis font</span>
                </label>
                <label>
                    <input type="radio" name="question19" value="option2" />
                    <span class="radio"></span>
                    <span class="label">suatu jenis animasi</span>
                </label>
                <label>
                    <input type="radio" name="question19" value="option3" />
                    <span class="radio"></span>
                    <span class="label">satu halaman presentasi</span>
                </label>
                <label>
                    <input type="radio" name="question19" value="option4" />
                    <span class="radio"></span>
                    <span class="label">transisi antar slide</span>
                </label>
            </div>
        </div>

        <!-- Question 20 -->
        <div class="question" data-correct="option3">
            <p>Apa itu placeholder di PowerPoint?</p>
            <div class="bulgy-radios" role="radiogroup">
                <label>
                    <input type="radio" name="question20" value="option1" />
                    <span class="radio"></span>
                    <span class="label">sejenis font</span>
                </label>
                <label>
                    <input type="radio" name="question20" value="option2" />
                    <span class="radio"></span>
                    <span class="label">suatu jenis transisi</span>
                </label>
                <label>
                    <input type="radio" name="question20" value="option3" />
                    <span class="radio"></span>
                    <span class="label">sebuah kotak pada slide yang menampung teks atau objek</span>
                </label>
                <label>
                    <input type="radio" name="question20" value="option4" />
                    <span class="radio"></span>
                    <span class="label">suatu jenis animasi</span>
                </label>
            </div>
        </div>

        <!-- Question 21 -->
        <div class="question" data-correct="option2">
            <p>Apa itu gaya latar belakang di PowerPoint?</p>
            <div class="bulgy-radios" role="radiogroup">
                <label>
                    <input type="radio" name="question21" value="option1" />
                    <span class="radio"></span>
                    <span class="label">sejenis transisi slide</span>
                </label>
                <label>
                    <input type="radio" name="question21" value="option2" />
                    <span class="radio"></span>
                    <span class="label">serangkaian warna dan efek yang telah ditentukan sebelumnya yang diterapkan pada latar belakang slide</span>
                </label>
                <label>
                    <input type="radio" name="question21" value="option3" />
                    <span class="radio"></span>
                    <span class="label">suatu jenis animasi</span>
                </label>
                <label>
                    <input type="radio" name="question21" value="option4" />
                    <span class="radio"></span>
                    <span class="label">sejenis font</span>
                </label>
            </div>
        </div>

        <!-- Question 22 -->
        <div class="question" data-correct="option3">
            <p>Apa tampilan Slide Sorter di PowerPoint?</p>
            <div class="bulgy-radios" role="radiogroup">
                <label>
                    <input type="radio" name="question22" value="option1" />
                    <span class="radio"></span>
                    <span class="label">tampilan yang menampilkan catatan pembicara untuk slide</span>
                </label>
                <label>
                    <input type="radio" name="question22" value="option2" />
                    <span class="radio"></span>
                    <span class="label">tampilan yang menampilkan satu slide dalam satu waktu</span>
                </label>
                <label>
                    <input type="radio" name="question22" value="option3" />
                    <span class="radio"></span>
                    <span class="label">tampilan yang menampilkan semua slide dalam presentasi dalam format kisi</span>
                </label>
                <label>
                    <input type="radio" name="question22" value="option4" />
                    <span class="radio"></span>
                    <span class="label">tampilan yang menampilkan garis besar presentasi</span>
                </label>
            </div>
        </div>

        <!-- Question 23 -->
        <div class="question" data-correct="option3">
            <p>Bagaimana Anda bisa mengakses fitur "Temukan" di PowerPoint?</p>
            <div class="bulgy-radios" role="radiogroup">
                <label>
                    <input type="radio" name="question23" value="option1" />
                    <span class="radio"></span>
                    <span class="label">Klik tombol "Temukan" di bagian "Pengeditan" pada Pita.</span>
                </label>
                <label>
                    <input type="radio" name="question23" value="option2" />
                    <span class="radio"></span>
                    <span class="label">Ketik "Temukan" di bilah pencarian menu.</span>
                </label>
                <label>
                    <input type="radio" name="question23" value="option3" />
                    <span class="radio"></span>
                    <span class="label">Tekan "Ctrl + F."</span>
                </label>
                <label>
                    <input type="radio" name="question23" value="option4" />
                    <span class="radio"></span>
                    <span class="label">Klik kanan pada slide dan pilih "Temukan".</span>
                </label>
            </div>
        </div>

        <!-- Question 24 -->
        <div class="question" data-correct="option2">
            <p>Apa perbedaan antara mode "Potret" dan "Lanskap"?</p>
            <div class="bulgy-radios" role="radiogroup">
                <label>
                    <input type="radio" name="question24" value="option1" />
                    <span class="radio"></span>
                    <span class="label">Mode lanskap mencetak slide secara vertikal, sedangkan mode potret mencetak slide secara horizontal.</span>
                </label>
                <label>
                    <input type="radio" name="question24" value="option2" />
                    <span class="radio"></span>
                    <span class="label">Mode Potret mencetak slide secara vertikal, sedangkan mode lanskap mencetak slide secara horizontal.</span>
                </label>
                <label>
                    <input type="radio" name="question24" value="option3" />
                    <span class="radio"></span>
                    <span class="label">Mode Potret mencetak slide dalam skala abu-abu, sedangkan mode lanskap mencetak slide dalam warna.</span>
                </label>
                <label>
                    <input type="radio" name="question24" value="option4" />
                    <span class="radio"></span>
                    <span class="label">Mode lanskap mencetak slide dalam skala abu-abu, sedangkan mode potret mencetak slide dalam warna.</span>
                </label>
            </div>
        </div>

        <!-- Question 25 -->
        <div class="question" data-correct="option1">
            <p>Bagaimana Anda mengakhiri tayangan slide di PowerPoint?</p>
            <div class="bulgy-radios" role="radiogroup">
                <label>
                    <input type="radio" name="question25" value="option1" />
                    <span class="radio"></span>
                    <span class="label">semua ini akan berhasil</span>
                </label>
                <label>
                    <input type="radio" name="question25" value="option2" />
                    <span class="radio"></span>
                    <span class="label">Klik tab "Slide Show" pada pita, lalu klik "End Slide Show."</span>
                </label>
                <label>
                    <input type="radio" name="question25" value="option3" />
                    <span class="radio"></span>
                    <span class="label">Tekan tombol "ESC" pada keyboard Anda.</span>
                </label>
                <label>
                    <input type="radio" name="question25" value="option4" />
                    <span class="radio"></span>
                    <span class="label">Klik tab "Lihat" pada pita, lalu klik "Akhiri Pertunjukan Slide".</span>
                </label>
            </div>
        </div>

        <!-- Question 26 -->
        <div class="question" data-correct="option2">
            <p>Jenis file gambar apa yang dapat Anda sisipkan ke dalam presentasi PowerPoint?</p>
            <div class="bulgy-radios" role="radiogroup">
                <label>
                    <input type="radio" name="question26" value="option1" />
                    <span class="radio"></span>
                    <span class="label">jpeg</span>
                </label>
                <label>
                    <input type="radio" name="question26" value="option2" />
                    <span class="radio"></span>
                    <span class="label">semua jenis file gambar ini</span>
                </label>
                <label>
                    <input type="radio" name="question26" value="option3" />
                    <span class="radio"></span>
                    <span class="label">PNG</span>
                </label>
                <label>
                    <input type="radio" name="question26" value="option4" />
                    <span class="radio"></span>
                    <span class="label">GIF</span>
                </label>
            </div>
        </div>

        <!-- Question 27 -->
        <div class="question" data-correct="option3">
            <p>Apa tujuan alat "Putar" untuk bentuk?</p>
            <div class="bulgy-radios" role="radiogroup">
                <label>
                    <input type="radio" name="question27" value="option1" />
                    <span class="radio"></span>
                    <span class="label">untuk mengubah warna isian bentuk</span>
                </label>
                <label>
                    <input type="radio" name="question27" value="option2" />
                    <span class="radio"></span>
                    <span class="label">untuk mengubah ukuran bentuk secara proporsional</span>
                </label>
                <label>
                    <input type="radio" name="question27" value="option3" />
                    <span class="radio"></span>
                    <span class="label">untuk mengubah sudut bentuk</span>
                </label>
                <label>
                    <input type="radio" name="question27" value="option4" />
                    <span class="radio"></span>
                    <span class="label">untuk menghapus bentuknya</span>
                </label>
            </div>
        </div>

        <!-- Question 28 -->
        <div class="question" data-correct="option2">
            <p>Bagaimana cara menyisipkan video di PowerPoint?</p>
            <div class="bulgy-radios" role="radiogroup">
                <label>
                    <input type="radio" name="question28" value="option1" />
                    <span class="radio"></span>
                    <span class="label">Buka Sisipkan > Unduh > Video.</span>
                </label>
                <label>
                    <input type="radio" name="question28" value="option2" />
                    <span class="radio"></span>
                    <span class="label">Buka Sisipkan > Media > Video.</Video.</span>
                </label>
                <label>
                    <input type="radio" name="question28" value="option3" />
                    <span class="radio"></span>
                    <span class="label">Buka Sisipkan > Audio > Video.</span>
                </label>
                <label>
                    <input type="radio" name="question28" value="option4" />
                    <span class="radio"></span>
                    <span class="label">Buka Sisipkan > Gambar > Video.</span>
                </label>
            </div>
        </div>

        <!-- Question 29 -->
        <div class="question" data-correct="option1">
            <p>Apa itu bagan di PowerPoint?</p>
            <div class="bulgy-radios" role="radiogroup">
                <label>
                    <input type="radio" name="question29" value="option1" />
                    <span class="radio"></span>
                    <span class="label">representasi visual dari data</span>
                </label>
                <label>
                    <input type="radio" name="question29" value="option2" />
                    <span class="radio"></span>
                    <span class="label">gambar dekoratif</span>
                </label>
                <label>
                    <input type="radio" name="question29" value="option3" />
                    <span class="radio"></span>
                    <span class="label">bentuk yang digunakan untuk menyorot teks</span>
                </label>
                <label>
                    <input type="radio" name="question29" value="option4" />
                    <span class="radio"></span>
                    <span class="label">gambar clipart</span>
                </label>
            </div>
        </div>

        <!-- Question 30 -->
        <div class="question" data-correct="option3">
            <p>Untuk apa SmartArt digunakan?</p>
            <div class="bulgy-radios" role="radiogroup">
                <label>
                    <input type="radio" name="question30" value="option1" />
                    <span class="radio"></span>
                    <span class="label">untuk membuat grafik dan tabel</span>
                </label>
                <label>
                    <input type="radio" name="question30" value="option2" />
                    <span class="radio"></span>
                    <span class="label">untuk memasukkan audio dan video</span>
                </label>
                <label>
                    <input type="radio" name="question30" value="option3" />
                    <span class="radio"></span>
                    <span class="label">untuk membuat grafik dan diagram</span>
                </label>
                <label>
                    <input type="radio" name="question30" value="option4" />
                    <span class="radio"></span>
                    <span class="label">untuk membuat animasi dan transisi</span>
                </label>
            </div>
        </div>
    </div>
            <button type="button" class="btn btn-dark" id="submit-quiz">Submit</button>
        </form>
        <div id="result"></div>
    </div>
</div>
<div id="result"></div>
                            </form>
                            <div id="result"></div>
                        </div>
                        <a href="/course" class="btn btn-dark">Kembali ke Course</a>
                    </div>
                </div>
                <script>
       document.getElementById('submit-quiz').addEventListener('click', function() {
    var questions = document.querySelectorAll('.question');
    var score = 0;

    questions.forEach(function(question) {
        var correctAnswers = question.getAttribute('data-correct').split(',');
        var selectedAnswers = [];

        var inputs = question.querySelectorAll('input[type="radio"]:checked, input[type="checkbox"]:checked');
        inputs.forEach(function(input) {
            selectedAnswers.push(input.value);
        });

        if (arraysEqual(correctAnswers, selectedAnswers)) {
            score++;
        }
    });

    var totalQuestions = questions.length;
    var percentageScore = (score / totalQuestions) * 100; // Mengubah ke rentang 0-100
    var result = "Skor Anda: " + percentageScore.toFixed(2); // Memformat menjadi dua desimal
    document.getElementById('result').innerText = result;
});

function arraysEqual(arr1, arr2) {
    if (arr1.length !== arr2.length) return false;
    for (var i = 0; i < arr1.length; i++) {
        if (arr1[i] !== arr2[i]) return false;
    }
    return true;
}

    </script>
            </div>
        </div>
    </div>
    
