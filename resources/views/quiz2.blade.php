<script src="{{ asset('js/quiz.js') }}" defer></script> <!-- Correctly referencing the JS file -->
<script src="js/quiz.js" defer></script> 
<style>
/* Your existing CSS for radio buttons */
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
    <h4>Kuis Word</h4>
    <div id="quiz-container">
        <form id="quiz-form">
            <!-- Excel Quiz Question -->
            <div class="question" data-correct="option1">
                <p>Apa tujuan dari analisis “Bagaimana-jika”?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question1" value="option1" />
                        <span class="radio"></span>
                        <span class="label">untuk mengeksplorasi bagaimana perubahan nilai masukan memengaruhi nilai terhitung</span>
                    </label>
                    <label>
                        <input type="radio" name="question1" value="option2" />
                        <span class="radio"></span>
                        <span class="label">untuk membandingkan versi buku kerja yang berbeda</span>
                    </label>
                    <label>
                        <input type="radio" name="question1" value="option3" />
                        <span class="radio"></span>
                        <span class="label">untuk menghitung nilai maksimum dan minimum dalam suatu rentang</span>
                    </label>
                    <label>
                        <input type="radio" name="question1" value="option4" />
                        <span class="radio"></span>
                        <span class="label">untuk membuat diagram dan grafik</span>
                    </label>
                </div>
            </div>
            
            <!-- Word Quiz Question 1 -->
            <div class="question" data-correct="option2">
                <p>Manakah dari berikut ini yang paling menggambarkan Pita?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question2" value="option1" />
                        <span class="radio"></span>
                        <span class="label">fitur yang dapat menerjemahkan teks ke bahasa apa pun</span>
                    </label>
                    <label>
                        <input type="radio" name="question2" value="option2" />
                        <span class="radio"></span>
                        <span class="label">toolbar dengan berbagai perintah</span>
                    </label>
                    <label>
                        <input type="radio" name="question2" value="option3" />
                        <span class="radio"></span>
                        <span class="label">kabel yang menghubungkan komputer Anda ke printer</span>
                    </label>
                    <label>
                        <input type="radio" name="question2" value="option4" />
                        <span class="radio"></span>
                        <span class="label">penggeser yang dapat Anda gunakan untuk memperbesar dokumen</span>
                    </label>
                </div>
            </div>
            
            <!-- Word Quiz Question 2 -->
            <div class="question" data-correct="option4">
                <p>Metode manakah yang dapat Anda gunakan untuk memindahkan teks dari satu bagian dokumen ke bagian lainnya? Pilih semua yang berlaku.</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question3" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Pilih teks, lalu klik dan seret ke lokasi lain.</span>
                    </label>
                    <label>
                        <input type="radio" name="question3" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Tekan tombol Print Screen pada keyboard Anda.</span>
                    </label>
                    <label>
                        <input type="radio" name="question3" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Pergi ke tampilan Backstage dan klik tombol Pindah.</span>
                    </label>
                    <label>
                        <input type="radio" name="question3" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Potong dan tempel teksnya.</span>
                    </label>
                </div>
            </div>
            
            <!-- Word Quiz Question 3 -->
            <div class="question" data-correct="option1">
                <p>Dalam gambar ini, "Calibri" adalah ________.</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question4" value="option1" />
                        <span class="radio"></span>
                        <span class="label">font</span>
                    </label>
                    <label>
                        <input type="radio" name="question4" value="option2" />
                        <span class="radio"></span>
                        <span class="label">warna</span>
                    </label>
                    <label>
                        <input type="radio" name="question4" value="option3" />
                        <span class="radio"></span>
                        <span class="label">nama belakang</span>
                    </label>
                    <label>
                        <input type="radio" name="question4" value="option4" />
                        <span class="radio"></span>
                        <span class="label">tema</span>
                    </label>
                </div>
                <img src="https://media.gcflearnfree.org/assets/quizzes/en/word-20192007-final-quiz_04_02_2020/word_calibri.png" alt="Calibri font">
            </div>
            
            <!-- Word Quiz Question 4 -->
            <div class="question" data-correct="option2">
                <p>Benar atau Salah: Pemeriksaan Ejaan dan Tata Bahasa Kata selalu 100% akurat.</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question5" value="option1" />
                        <span class="radio"></span>
                        <span class="label">benar</span>
                    </label>
                    <label>
                        <input type="radio" name="question5" value="option2" />
                        <span class="radio"></span>
                        <span class="label">salah</span>
                    </label>
                </div>
            </div>
            
            <!-- Word Quiz Question 5 -->
            <div class="question" data-correct="option2">
                <p>Misalkan Anda membuat kesalahan saat membuat dokumen. Anda menggunakan kata “maroon” dan bukan “burgundy” di beberapa tempat. Apa cara tercepat bagi Anda untuk memperbaiki kesalahan Anda?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question6" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Gunakan fitur Ejaan dan Tata Bahasa.</span>
                    </label>
                    <label>
                        <input type="radio" name="question6" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Gunakan fitur Temukan dan Ganti.</span>
                    </label>
                    <label>
                        <input type="radio" name="question6" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Masukkan SmartArt.</span>
                    </label>
                    <label>
                        <input type="radio" name="question6" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Hapus semua teks dan mulai lagi dari awal.</span>
                    </label>
                </div>
            </div>
            
            <!-- Word Quiz Question 6 -->
            <div class="question" data-correct="option3">
                <p>Orientasi halaman mana yang digunakan dalam gambar ini?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question7" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Lanskap</span>
                    </label>
                    <label>
                        <input type="radio" name="question7" value="option2" />
                        <span class="radio"></span>
                        <span class="label">catatan kaki</span>
                    </label>
                    <label>
                        <input type="radio" name="question7" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Potret</span>
                    </label>
                    <label>
                        <input type="radio" name="question7" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Pekerjaan</span>
                    </label>
                </div>
                <img src="https://media.gcflearnfree.org/assets/quizzes/en/word-20192007-final-quiz_04_02_2020/word_application.png" alt="Portrait orientation">
            </div>
            
            <!-- Word Quiz Question 7 -->
            <div class="question" data-correct="option1">
                <p>Jika Anda mencetak banyak salinan dokumen dan ingin halamannya diurutkan 1, 2, 3, 1, 2, 3, opsi mana yang akan Anda gunakan?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question8" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Disusun</span>
                    </label>
                    <label>
                        <input type="radio" name="question8" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Ekspor</span>
                    </label>
                    <label>
                        <input type="radio" name="question8" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Orientasi tegak</span>
                    </label>
                    <label>
                        <input type="radio" name="question8" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Tidak disusun</span>
                    </label>
                </div>
            </div>
            
            <!-- Word Quiz Question 8 -->
            <div class="question" data-correct="option4">
                <p>Misalkan Anda telah membuat daftar poin, namun poinnya terlalu dekat dengan teks. Apa cara terbaik untuk memperbaikinya?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question9" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Tekan tombol Caps Lock pada keyboard Anda.</span>
                    </label>
                    <label>
                        <input type="radio" name="question9" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Tekan tombol Tab untuk membuat indentasi teks.</span>
                    </label>
                    <label>
                        <input type="radio" name="question9" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Ubah orientasi halaman.</span>
                    </label>
                    <label>
                        <input type="radio" name="question9" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Sesuaikan penanda indentasi pada Ruler.</span>
                    </label>
                </div>
            </div>
            
            <!-- Word Quiz Question 9 -->
            <div class="question" data-correct="option4">
                <p>Apa keuntungan utama menggunakan kotak teks?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question10" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Secara otomatis membuat teks lebih besar.</span>
                    </label>
                    <label>
                        <input type="radio" name="question10" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Ini secara otomatis muncul di setiap halaman dokumen Anda.</span>
                    </label>
                    <label>
                        <input type="radio" name="question10" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Ini memungkinkan Anda untuk mengubah orientasi halaman.</span>
                    </label>
                    <label>
                        <input type="radio" name="question10" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Ini memberi Anda lebih banyak kebebasan untuk memindahkan teks.</span>
                    </label>
                </div>
            </div>
            
            <!-- Word Quiz Question 10 -->
            <div class="question" data-correct="option1,option3,option4">
                <p>Saat menyisipkan hyperlink, apa yang bisa Anda tautkan? Pilih semua yang berlaku.</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="checkbox" name="question11" value="option1" />
                        <span class="radio"></span>
                        <span class="label">sebuah halaman web</span>
                    </label>
                    <label>
                        <input type="checkbox" name="question11" value="option2" />
                        <span class="radio"></span>
                        <span class="label">alamat email</span>
                    </label>
                    <label>
                        <input type="checkbox" name="question11" value="option3" />
                        <span class="radio"></span>
                        <span class="label">tempat di dokumen saat ini</span>
                    </label>
                    <label>
                        <input type="checkbox" name="question11" value="option4" />
                        <span class="radio"></span>
                        <span class="label">file</span>
                    </label>
                </div>
            </div>
            
            <!-- Word Quiz Question 11 -->
            <div class="question" data-correct="option1">
                <p>Jika Anda ingin menambahkan teks ke bagian atas setiap halaman dokumen Anda, fitur manakah yang akan Anda gunakan?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question12" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Tajuk</span>
                    </label>
                    <label>
                        <input type="radio" name="question12" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Pemandangan di belakang panggung</span>
                    </label>
                    <label>
                        <input type="radio" name="question12" value="option3" />
                        <span class="radio"></span>
                        <span class="label">catatan kaki</span>
                    </label>
                    <label>
                        <input type="radio" name="question12" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Tata letak halaman</span>
                    </label>
                </div>
            </div>
            
            <!-- Word Quiz Question 12 -->
            <div class="question" data-correct="option1">
                <p>Jika Anda ingin memulai ulang penomoran halaman di tengah-tengah dokumen Anda, apa yang perlu Anda lakukan terlebih dahulu?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question13" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Tambahkan hentian bagian.</span>
                    </label>
                    <label>
                        <input type="radio" name="question13" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Tutup dan buka kembali dokumen.</span>
                    </label>
                    <label>
                        <input type="radio" name="question13" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Matikan Lacak Perubahan.</span>
                    </label>
                    <label>
                        <input type="radio" name="question13" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Buat daftar isi.</span>
                    </label>
                </div>
            </div>
            
            <!-- Word Quiz Question 13 -->
            <div class="question" data-correct="option1,option4">
                <p>Manakah dari berikut ini yang merupakan keuntungan menggunakan gaya bawaan Word? Pilih semua yang berlaku.</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="checkbox" name="question14" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Anda dapat dengan cepat mengubah tampilan seluruh dokumen Anda.</span>
                    </label>
                    <label>
                        <input type="checkbox" name="question14" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Anda dapat dengan cepat memformat semua gambar di dokumen Anda.</span>
                    </label>
                    <label>
                        <input type="checkbox" name="question14" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Anda dapat menggunakan Gaya Revisi untuk melacak perubahan pada dokumen.</span>
                    </label>
                    <label>
                        <input type="checkbox" name="question14" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Anda dapat dengan mudah memberikan tampilan dan nuansa profesional pada dokumen Anda.</span>
                    </label>
                </div>
            </div>
            
            <!-- Word Quiz Question 14 -->
            <div class="question" data-correct="option1">
                <p>Dalam gambar ini, dokumen tersebut menyertakan bidang untuk blok alamat dan garis sapaan. Fitur apa yang kemungkinan besar kita gunakan?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question15" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Mail Merge</span>
                    </label>
                    <label>
                        <input type="radio" name="question15" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Kotak teks</span>
                    </label>
                    <label>
                        <input type="radio" name="question15" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Setelan gaya</span>
                    </label>
                    <label>
                        <input type="radio" name="question15" value="option4" />
                        <span class="radio"></span>
                        <span class="label">IsiOtomatis</span>
                    </label>
                </div>
                <img src="https://media.gcflearnfree.org/assets/quizzes/en/word-20192007-final-quiz_04_02_2020/word_addressblock.png" alt="Mail Merge example">
            </div>
            
            <!-- Word Quiz Question 15 -->
            <div class="question" data-correct="option3">
                <p>Apa pintasan keyboard untuk membuat dokumen baru?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question16" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Ctrl + S</span>
                    </label>
                    <label>
                        <input type="radio" name="question16" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Ctrl + P</span>
                    </label>
                    <label>
                        <input type="radio" name="question16" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Ctrl + N</span>
                    </label>
                    <label>
                        <input type="radio" name="question16" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Ctrl + O</span>
                    </label>
                </div>
            </div>
            <div class="question" data-correct="option4">
                <p>Bagaimana Anda menyimpan dokumen dengan nama baru?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question16" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Tekan Ctrl + S dan masukkan nama baru.</span>
                    </label>
                    <label>
                        <input type="radio" name="question16" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Klik Format dan pilih "Simpan Sebagai".</span>
                    </label>
                    <label>
                        <input type="radio" name="question16" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Ketik Ctrl + V dan masukkan nama baru.</span>
                    </label>
                    <label>
                        <input type="radio" name="question16" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Klik tombol Simpan Sebagai.</span>
                    </label>
                </div>
            </div>
            <div class="question" data-correct="option2">
                <p>Apa pintasan keyboard untuk membatalkan tindakan di Word?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question17" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Ctrl + X</span>
                    </label>
                    <label>
                        <input type="radio" name="question17" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Ctrl + Z</span>
                    </label>
                    <label>
                        <input type="radio" name="question17" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Ctrl + Y</span>
                    </label>
                    <label>
                        <input type="radio" name="question17" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Ctrl + C</span>
                    </label>
                </div>
            </div>
            <div class="question" data-correct="option4">
                <p>Apa ekstensi file default untuk dokumen Word?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question18" value="option1" />
                        <span class="radio"></span>
                        <span class="label">.txt</span>
                    </label>
                    <label>
                        <input type="radio" name="question18" value="option2" />
                        <span class="radio"></span>
                        <span class="label">.pdf</span>
                    </label>
                    <label>
                        <input type="radio" name="question18" value="option3" />
                        <span class="radio"></span>
                        <span class="label">.jpg</span>
                    </label>
                    <label>
                        <input type="radio" name="question18" value="option4" />
                        <span class="radio"></span>
                        <span class="label">.docx</span>
                    </label>
                </div>
            </div>
            <div class="question" data-correct="option3">
                <p>Bagaimana cara melindungi dokumen dari perubahan yang tidak diinginkan?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question19" value="option1" />
                        <span class="radio"></span>
                        <span class="label">dengan menyembunyikan dokumen tersebut</span>
                    </label>
                    <label>
                        <input type="radio" name="question19" value="option2" />
                        <span class="radio"></span>
                        <span class="label">dengan mengaktifkan fitur "Read-only".</span>
                    </label>
                    <label>
                        <input type="radio" name="question19" value="option3" />
                        <span class="radio"></span>
                        <span class="label">dengan menggunakan kata sandi untuk membuka dokumen</span>
                    </label>
                    <label>
                        <input type="radio" name="question19" value="option4" />
                        <span class="radio"></span>
                        <span class="label">dengan menonaktifkan fitur "Lacak Perubahan".</span>
                    </label>
                </div>
            </div>
            <div class="question" data-correct="option2">
                <p>Apa cara termudah untuk berbagi dan mengedit dokumen Word dengan orang lain?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question20" value="option1" />
                        <span class="radio"></span>
                        <span class="label">dengan mengirimkan dokumen sebagai lampiran email</span>
                    </label>
                    <label>
                        <input type="radio" name="question20" value="option2" />
                        <span class="radio"></span>
                        <span class="label">dengan mengunggah dokumen ke layanan penyimpanan cloud</span>
                    </label>
                    <label>
                        <input type="radio" name="question20" value="option3" />
                        <span class="radio"></span>
                        <span class="label">dengan mencetak dokumen dan mengirimkannya</span>
                    </label>
                    <label>
                        <input type="radio" name="question20" value="option4" />
                        <span class="radio"></span>
                        <span class="label">tidak satupun dari ini akan berhasil</span>
                    </label>
                </div>
            </div>
            <div class="question" data-correct="option4">
                <p>Apa pintasan keyboard untuk membuat teks tebal di Word 2016?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question21" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Ctrl + U</span>
                    </label>
                    <label>
                        <input type="radio" name="question21" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Ctrl + I</span>
                    </label>
                    <label>
                        <input type="radio" name="question21" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Ctrl + Shift + B</span>
                    </label>
                    <label>
                        <input type="radio" name="question21" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Ctrl + B</span>
                    </label>
                </div>
            </div>
            <div class="question" data-correct="option2">
                <p>Manakah dari berikut ini yang BUKAN merupakan cara membuat dokumen baru di Word?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question22" value="option1" />
                        <span class="radio"></span>
                        <span class="label">menekan Ctrl + N</span>
                    </label>
                    <label>
                        <input type="radio" name="question22" value="option2" />
                        <span class="radio"></span>
                        <span class="label">mengklik tombol "Buka" pada bilah alat</span>
                    </label>
                    <label>
                        <input type="radio" name="question22" value="option3" />
                        <span class="radio"></span>
                        <span class="label">mengklik dua kali ikon desktop Word</span>
                    </label>
                    <label>
                        <input type="radio" name="question22" value="option4" />
                        <span class="radio"></span>
                        <span class="label">mengklik tombol "Baru" pada toolbar</span>
                    </label>
                </div>
            </div>
            <div class="question" data-correct="option3">
                <p>Bagaimana Anda bisa mengganti semua kemunculan kata atau frasa di Word?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question23" value="option1" />
                        <span class="radio"></span>
                        <span class="label">dengan menggunakan Panel Navigasi</span>
                    </label>
                    <label>
                        <input type="radio" name="question23" value="option2" />
                        <span class="radio"></span>
                        <span class="label">dengan mengklik tombol Ganti pada tab Beranda</span>
                    </label>
                    <label>
                        <input type="radio" name="question23" value="option3" />
                        <span class="radio"></span>
                        <span class="label">dengan menggunakan kotak dialog Temukan dan Ganti</span>
                    </label>
                    <label>
                        <input type="radio" name="question23" value="option4" />
                        <span class="radio"></span>
                        <span class="label">dengan menghapus dan mengganti setiap kejadian secara manual</span>
                    </label>
                </div>
            </div>
            <div class="question" data-correct="option2">
                <p>Apa itu spasi baris di Word?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question24" value="option1" />
                        <span class="radio"></span>
                        <span class="label">jumlah spasi antara teks dan margin</span>
                    </label>
                    <label>
                        <input type="radio" name="question24" value="option2" />
                        <span class="radio"></span>
                        <span class="label">jumlah spasi antar baris teks</span>
                    </label>
                    <label>
                        <input type="radio" name="question24" value="option3" />
                        <span class="radio"></span>
                        <span class="label">jumlah spasi antar paragraf</span>
                    </label>
                    <label>
                        <input type="radio" name="question24" value="option4" />
                        <span class="radio"></span>
                        <span class="label">jumlah baris teks</span>
                    </label>
                </div>
            </div>
            <div class="question" data-correct="option2">
                <p>Apa itu daftar berpoin di Word?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question25" value="option1" />
                        <span class="radio"></span>
                        <span class="label">daftar item yang diurutkan berdasarkan abjad</span>
                    </label>
                    <label>
                        <input type="radio" name="question25" value="option2" />
                        <span class="radio"></span>
                        <span class="label">daftar item yang disorot dengan poin</span>
                    </label>
                    <label>
                        <input type="radio" name="question25" value="option3" />
                        <span class="radio"></span>
                        <span class="label">daftar item yang diberi nomor</span>
                    </label>
                    <label>
                        <input type="radio" name="question25" value="option4" />
                        <span class="radio"></span>
                        <span class="label">daftar item yang berada di tengah halaman</span>
                    </label>
                </div>
            </div>
            <!-- Repeat similar blocks for other questions -->
            <div class="question" data-correct="option3">
                <p>Apa itu hyperlink?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question26" value="option1" />
                        <span class="radio"></span>
                        <span class="label">sejenis gaya font</span>
                    </label>
                    <label>
                        <input type="radio" name="question26" value="option2" />
                        <span class="radio"></span>
                        <span class="label">cara untuk menambahkan catatan ke dokumen</span>
                    </label>
                    <label>
                        <input type="radio" name="question26" value="option3" />
                        <span class="radio"></span>
                        <span class="label">tautan dari satu dokumen ke dokumen lain atau ke halaman web atau URL lainnya</span>
                    </label>
                    <label>
                        <input type="radio" name="question26" value="option4" />
                        <span class="radio"></span>
                        <span class="label">tombol yang digunakan untuk menutup dokumen</span>
                    </label>
                </div>
            </div>
            <div class="question" data-correct="option2">
                <p>Apa fungsi pintasan keyboard "Ctrl + Enter"?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question27" value="option1" />
                        <span class="radio"></span>
                        <span class="label">tutup dokumen saat ini</span>
                    </label>
                    <label>
                        <input type="radio" name="question27" value="option2" />
                        <span class="radio"></span>
                        <span class="label">tambahkan hentian halaman</span>
                    </label>
                    <label>
                        <input type="radio" name="question27" value="option3" />
                        <span class="radio"></span>
                        <span class="label">menyimpan dokumen</span>
                    </label>
                    <label>
                        <input type="radio" name="question27" value="option4" />
                        <span class="radio"></span>
                        <span class="label">menambahkan jeda baris</span>
                    </label>
                </div>
            </div>
            <div class="question" data-correct="option2">
                <p>Apa tujuan komentar di dokumen Word?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question29" value="option1" />
                        <span class="radio"></span>
                        <span class="label">untuk menyorot teks penting dalam dokumen</span>
                    </label>
                    <label>
                        <input type="radio" name="question29" value="option2" />
                        <span class="radio"></span>
                        <span class="label">untuk memberikan umpan balik atau catatan kepada pengulas lain</span>
                    </label>
                    <label>
                        <input type="radio" name="question29" value="option3" />
                        <span class="radio"></span>
                        <span class="label">untuk menyorot kesalahan dalam dokumen</span>
                    </label>
                    <label>
                        <input type="radio" name="question29" value="option4" />
                        <span class="radio"></span>
                        <span class="label">untuk mengubah format dokumen</span>
                    </label>
                </div>
            </div>
            <div class="question" data-correct="option3">
                <p>Apa itu SmartArt?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question30" value="option1" />
                        <span class="radio"></span>
                        <span class="label">fitur untuk membuat diagram dan grafik</span>
                    </label>
                    <label>
                        <input type="radio" name="question30" value="option2" />
                        <span class="radio"></span>
                        <span class="label">gaya font di Word</span>
                    </label>
                    <label>
                        <input type="radio" name="question30" value="option3" />
                        <span class="radio"></span>
                        <span class="label">satu set tata letak grafis yang telah ditentukan sebelumnya</span>
                    </label>
                    <label>
                        <input type="radio" name="question30" value="option4" />
                        <span class="radio"></span>
                        <spanclass="label">alat untuk membuat tabel</span>
                    </label>
                </div>
            </div>
        </form>
        <button type="button" class="btn btn-dark" id="submit-quiz">Submit</button>
        </form>
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
