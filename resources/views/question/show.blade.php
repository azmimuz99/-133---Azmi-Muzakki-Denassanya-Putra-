@extends('layout.main')

@section('title', 'EduLedge | ' . $title)
<script src="js/quiz.js" defer></script> <!-- Path to your JS file -->
@section('container')
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
                    <div class="card-header">{{ $quiz->title }}</div>

                    <div class="card-body">
    <h4>Kuis Excel</h4>
    <div id="quiz-container">
        <form id="quiz-form">
            <div class="question" data-correct="option1">
                <p>Perpotongan baris dan kolom disebut ________.</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question1" value="option1" />
                        <span class="radio"></span>
                        <span class="label">sel</span>
                    </label>
                    <label>
                        <input type="radio" name="question1" value="option2" />
                        <span class="radio"></span>
                        <span class="label">lembar kerja</span>
                    </label>
                    <label>
                        <input type="radio" name="question1" value="option3" />
                        <span class="radio"></span>
                        <span class="label">bagan</span>
                    </label>
                    <label>
                        <input type="radio" name="question1" value="option4" />
                        <span class="radio"></span>
                        <span class="label">jumlah</span>
                    </label>
                </div>
            </div>

            <div class="question" data-correct="option2">
                <p>Sekelompok sel disebut ________.</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question2" value="option1" />
                        <span class="radio"></span>
                        <span class="label">bagan</span>
                    </label>
                    <label>
                        <input type="radio" name="question2" value="option2" />
                        <span class="radio"></span>
                        <span class="label">rentang sel</span>
                    </label>
                    <label>
                        <input type="radio" name="question2" value="option3" />
                        <span class="radio"></span>
                        <span class="label">gugus sel</span>
                    </label>
                    <label>
                        <input type="radio" name="question2" value="option4" />
                        <span class="radio"></span>
                        <span class="label">multisel</span>
                    </label>
                </div>
            </div>

            <div class="question" data-correct="option1">
                <p>Di manakah lokasi pegangan pengisian?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question3" value="option1" />
                        <span class="radio"></span>
                        <span class="label">di sudut kanan bawah sel yang dipilih</span>
                    </label>
                    <label>
                        <input type="radio" name="question3" value="option2" />
                        <span class="radio"></span>
                        <span class="label">di sisi kanan tab Beranda di Pita</span>
                    </label>
                    <label>
                        <input type="radio" name="question3" value="option3" />
                        <span class="radio"></span>
                        <span class="label">di awal rumus atau fungsi apa pun</span>
                    </label>
                    <label>
                        <input type="radio" name="question3" value="option4" />
                        <span class="radio"></span>
                        <span class="label">dalam tampilan Belakang Panggung</span>
                    </label>
                </div>
            </div>

            <div class="question" data-correct="option1">
                <p>Pada gambar ini, mengapa nilai di sel G1 terlihat sedikit berbeda dengan nilai di bilah rumus?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question4" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Ini menggunakan format angka Mata Uang.</span>
                    </label>
                    <label>
                        <input type="radio" name="question4" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Itu menggunakan referensi sel absolut.</span>
                    </label>
                    <label>
                        <input type="radio" name="question4" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Itu menggunakan rumus.</span>
                    </label>
                    <label>
                        <input type="radio" name="question4" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Ini menggunakan pemformatan bersyarat.</span>
                    </label>
                </div>
                <img src="https://media.gcflearnfree.org/assets/quizzes/en/excel-20192007-final-quiz_04_01_2020/excel_1.png" alt="Excel Screenshot">
            </div>

            <div class="question" data-correct="option3">
                <p>Anda bisa mengklik tab di bagian bawah buku kerja untuk beralih antara ________.</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question5" value="option1" />
                        <span class="radio"></span>
                        <span class="label">format angka</span>
                    </label>
                    <label>
                        <input type="radio" name="question5" value="option2" />
                        <span class="radio"></span>
                        <span class="label">rumus</span>
                    </label>
                    <label>
                        <input type="radio" name="question5" value="option3" />
                        <span class="radio"></span>
                        <span class="label">lembar kerja</span>
                    </label>
                    <label>
                        <input type="radio" name="question5" value="option4" />
                        <span class="radio"></span>
                        <span class="label">izin</span>
                    </label>
                </div>
            </div>

            <div class="question" data-correct="option2">
                <p>Katakanlah Anda mencoba mencari nilai rata-rata Anda. Apa yang salah dengan rumus yang ditunjukkan pada gambar?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question6" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Seharusnya menggunakan fungsi COUNT sebagai gantinya.</span>
                    </label>
                    <label>
                        <input type="radio" name="question6" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Seharusnya ada tanda sama dengan (=) di awal.</span>
                    </label>
                    <label>
                        <input type="radio" name="question6" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Tidak ada yang salah dengan rumusnya.</span>
                    </label>
                    <label>
                        <input type="radio" name="question6" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Itu harus menggunakan tanda kutip, bukan tanda kurung.</span>
                    </label>
                </div>
                <img src="https://media.gcflearnfree.org/assets/quizzes/en/excel-20192007-final-quiz_04_01_2020/excel_3.png" alt="Excel Screenshot">
            </div>

            <div class="question" data-correct="option1">
                <p>Benar atau Salah: Anda dapat melihat rumus dengan mengklik dua kali sel yang berisi rumus tersebut.</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question7" value="option1" />
                        <span class="radio"></span>
                        <span class="label">BENAR</span>
                    </label>
                    <label>
                        <input type="radio" name="question7" value="option2" />
                        <span class="radio"></span>
                        <span class="label">SALAH</span>
                    </label>
                </div>
            </div>

            <div class="question" data-correct="option4">
                <p>Manakah dari berikut ini yang merupakan referensi sel absolut?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question8" value="option1" />
                        <span class="radio"></span>
                        <span class="label">#A2</span>
                    </label>
                    <label>
                        <input type="radio" name="question8" value="option2" />
                        <span class="radio"></span>
                        <span class="label">J:2</span>
                    </label>
                    <label>
                        <input type="radio" name="question8" value="option3" />
                        <span class="radio"></span>
                        <span class="label">A2</span>
                    </label>
                    <label>
                        <input type="radio" name="question8" value="option4" />
                        <span class="radio"></span>
                        <span class="label">$A$2</span>
                    </label>
                </div>
            </div>

            <div class="question" data-correct="option2,option4">
                <p>Rumus manakah di bawah ini yang valid? Pilih semua yang berlaku.</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="checkbox" name="question9" value="option1" />
                        <span class="checkbox"></span>
                        <span class="label">=5B+6B</span>
                    </label>
                    <label>
                        <input type="checkbox" name="question9" value="option2" />
                        <span class="checkbox"></span>
                        <span class="label">=F2+F3+F4-53</span>
                    </label>
                    <label>
                        <input type="checkbox" name="question9" value="option3" />
                        <span class="checkbox"></span>
                        <span class="label">A3+100</span>
                    </label>
                    <label>
                        <input type="checkbox" name="question9" value="option4" />
                        <span class="checkbox"></span>
                        <span class="label">=R2*D2</span>
                    </label>
                </div>
            </div>

            <div class="question" data-correct="option3">
                <p>Berapa nilai yang akan dikembalikan Excel untuk rumus ini? =(82-32)/5+8*2</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question10" value="option1" />
                        <span class="radio"></span>
                        <span class="label">7.69</span>
                    </label>
                    <label>
                        <input type="radio" name="question10" value="option2" />
                        <span class="radio"></span>
                        <span class="label">36</span>
                    </label>
                    <label>
                        <input type="radio" name="question10" value="option3" />
                        <span class="radio"></span>
                        <span class="label">26</span>
                    </label>
                    <label>
                        <input type="radio" name="question10" value="option4" />
                        <span class="radio"></span>
                        <span class="label">91.6</span>
                    </label>
                </div>
            </div>

            <div class="question" data-correct="option2">
                <p>Fitur apa yang kami gunakan untuk menerapkan pemformatan yang ditunjukkan pada gambar ini dengan cepat?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question11" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Pemformatan skenario data</span>
                    </label>
                    <label>
                        <input type="radio" name="question11" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Pemformatan bersyarat</span>
                    </label>
                    <label>
                        <input type="radio" name="question11" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Analisis bagaimana-jika</span>
                    </label>
                    <label>
                        <input type="radio" name="question11" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Tabel pivot</span>
                    </label>
                </div>
                <img src="https://media.gcflearnfree.org/assets/quizzes/en/excel-20192007-final-quiz_04_01_2020/excel_2.png" alt="Excel Screenshot">
            </div>

            <div class="question" data-correct="option1">
                <p>Apa keuntungan utama memilih opsi Tandai sebagai Akhir?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question12" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Ini membuat pengguna lain enggan mengedit buku kerja.</span>
                    </label>
                    <label>
                        <input type="radio" name="question12" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Ini mencegah pengguna lain melihat buku kerja.</span>
                    </label>
                    <label>
                        <input type="radio" name="question12" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Ini mencegah pengguna lain mengedit buku kerja.</span>
                    </label>
                    <label>
                        <input type="radio" name="question12" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Ini memastikan bahwa buku kerja bebas dari kesalahan.</span>
                    </label>
                </div>
            </div>

            <div class="question" data-correct="option4">
                <p>Empat area pada gambar ini digunakan untuk membuat ________.</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question13" value="option1" />
                        <span class="radio"></span>
                        <span class="label">rumus yang rumit</span>
                    </label>
                    <label>
                        <input type="radio" name="question13" value="option2" />
                        <span class="radio"></span>
                        <span class="label">penyaring khusus</span>
                    </label>
                    <label>
                        <input type="radio" name="question13" value="option3" />
                        <span class="radio"></span>
                        <span class="label">subtotal</span>
                    </label>
                    <label>
                        <input type="radio" name="question13" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Tabel pivot</span>
                    </label>
                </div>
                <img src="https://media.gcflearnfree.org/assets/quizzes/en/excel-20192007-final-quiz_04_01_2020/excel_4.png" alt="Excel Screenshot">
            </div>

            <div class="question" data-correct="option3">
                <p>Fitur mana yang memulai dengan hasil yang diinginkan, lalu menghitung nilai input yang akan memberikan hasil tersebut?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question14" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Seni pintar</span>
                    </label>
                    <label>
                        <input type="radio" name="question14" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Validasi data</span>
                    </label>
                    <label>
                        <input type="radio" name="question14" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Pencarian tujuan</span>
                    </label>
                    <label>
                        <input type="radio" name="question14" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Rumus terbalik</span>
                    </label>
                </div>
            </div>

            <div class="question" data-correct="option2">
                <p>Apa itu buku kerja di Excel?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question15" value="option1" />
                        <span class="radio"></span>
                        <span class="label">sejenis bagan</span>
                    </label>
                    <label>
                        <input type="radio" name="question15" value="option2" />
                        <span class="radio"></span>
                        <span class="label">file yang menyimpan satu atau lebih lembar kerja</span>
                    </label>
                    <label>
                        <input type="radio" name="question15" value="option3" />
                        <span class="radio"></span>
                        <span class="label">kumpulan file dalam satu folder</span>
                    </label>
                    <label>
                        <input type="radio" name="question15" value="option4" />
                        <span class="radio"></span>
                        <span class="label">selembar kertas dengan data tercetak di atasnya</span>
                    </label>
                </div>
            </div>
    </div>
</div>
<div class="question" data-correct="option3">
                <p>Bagaimana Anda bisa memilih beberapa sel sekaligus di Excel?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question16" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Tahan tombol Shift sambil mengklik sel yang ingin Anda pilih.</span>
                    </label>
                    <label>
                        <input type="radio" name="question16" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Tahan tombol Ctrl sambil mengklik sel yang ingin Anda pilih.</span>
                    </label>
                    <label>
                        <input type="radio" name="question16" value="option3" />
                        <span class="radio"></span>
                        <span class="label">semua cara ini</span>
                    </label>
                    <label>
                        <input type="radio" name="question16" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Klik dan seret sel yang ingin Anda pilih.</span>
                    </label>
                </div>
            </div>
            
            <!-- Pertanyaan 17 -->
            <div class="question" data-correct="option4">
                <p>Bagaimana cara mengubah ukuran kolom atau baris di Excel?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question17" value="option1" />
                        <span class="radio"></span>
                        <span class="label">tidak satu pun dari cara-cara ini</span>
                    </label>
                    <label>
                        <input type="radio" name="question17" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Klik dua kali batas kolom atau baris.</span>
                    </label>
                    <label>
                        <input type="radio" name="question17" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Gunakan kotak dialog Format Sel.</span>
                    </label>
                    <label>
                        <input type="radio" name="question17" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Klik dan seret batas kolom atau baris.</span>
                    </label>
                </div>
            </div>
            
            <!-- Pertanyaan 18 -->
            <div class="question" data-correct="option3">
                <p>Bagaimana cara menggabungkan dua sel atau lebih di Excel?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question18" value="option1" />
                        <span class="radio"></span>
                        <span class="label">tidak satu pun dari cara-cara ini</span>
                    </label>
                    <label>
                        <input type="radio" name="question18" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Klik kanan sel yang ingin Anda gabungkan, lalu pilih "Gabungkan Sel" dari menu konteks.</span>
                    </label>
                    <label>
                        <input type="radio" name="question18" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Pilih sel yang ingin Anda gabungkan, lalu klik tombol "Gabungkan & Tengahkan" pada tab Beranda.</span>
                    </label>
                    <label>
                        <input type="radio" name="question18" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Gunakan kotak dialog Format Sel.</span>
                    </label>
                </div>
            </div>
            
            <!-- Pertanyaan 19 -->
            <div class="question" data-correct="option4">
                <p>Manakah dari berikut ini yang merupakan cara untuk memformat angka di Excel?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question19" value="option1" />
                        <span class="radio"></span>
                        <span class="label">mata uang</span>
                    </label>
                    <label>
                        <input type="radio" name="question19" value="option2" />
                        <span class="radio"></span>
                        <span class="label">persentase</span>
                    </label>
                    <label>
                        <input type="radio" name="question19" value="option3" />
                        <span class="radio"></span>
                        <span class="label">tanggal</span>
                    </label>
                    <label>
                        <input type="radio" name="question19" value="option4" />
                        <span class="radio"></span>
                        <span class="label">semua format ini</span>
                    </label>
                </div>
            </div>
            
            <!-- Pertanyaan 21 -->
            <div class="question" data-correct="option2">
                <p>Manakah dari berikut ini yang BUKAN merupakan jenis perataan di Excel?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question21" value="option1" />
                        <span class="radio"></span>
                        <span class="label">kiri</span>
                    </label>
                    <label>
                        <input type="radio" name="question21" value="option2" />
                        <span class="radio"></span>
                        <span class="label">maju</span>
                    </label>
                    <label>
                        <input type="radio" name="question21" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Kanan</span>
                    </label>
                    <label>
                        <input type="radio" name="question21" value="option4" />
                        <span class="radio"></span>
                        <span class="label">tengah</span>
                    </label>
                </div>
            </div>
            
            <!-- Pertanyaan 22 -->
            <div class="question" data-correct="option1">
                <p>Apa tujuan mengelompokkan lembar kerja di Excel?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question22" value="option1" />
                        <span class="radio"></span>
                        <span class="label">semua fungsi ini</span>
                    </label>
                    <label>
                        <input type="radio" name="question22" value="option2" />
                        <span class="radio"></span>
                        <span class="label">untuk memindahkan atau menyalin data di antara beberapa lembar kerja sekaligus</span>
                    </label>
                    <label>
                        <input type="radio" name="question22" value="option3" />
                        <span class="radio"></span>
                        <span class="label">untuk menerapkan perubahan pemformatan ke beberapa lembar kerja sekaligus</span>
                    </label>
                    <label>
                        <input type="radio" name="question22" value="option4" />
                        <span class="radio"></span>
                        <span class="label">untuk melakukan perhitungan di beberapa lembar kerja sekaligus</span>
                    </label>
                </div>
            </div>
            
            <!-- Pertanyaan 23 -->
            <div class="question" data-correct="option2">
                <p>Simbol apa yang digunakan dalam rumus Excel untuk melambangkan perkalian?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question23" value="option1" />
                        <span class="radio"></span>
                        <span class="label">-</span>
                    </label>
                    <label>
                        <input type="radio" name="question23" value="option2" />
                        <span class="radio"></span>
                        <span class="label">*</span>
                    </label>
                    <label>
                        <input type="radio" name="question23" value="option3" />
                        <span class="radio"></span>
                        <span class="label">+</span>
                    </label>
                    <label>
                        <input type="radio" name="question23" value="option4" />
                        <span class="radio"></span>
                        <span class="label">/</span>
                    </label>
                </div>
            </div>
            
            <!-- Pertanyaan 24 -->
            <div class="question" data-correct="option2">
                <p>Apa rumus menghitung jumlah sel A1 sampai A5?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question24" value="option1" />
                        <span class="radio"></span>
                        <span class="label">A1:A5</span>
                    </label>
                    <label>
                        <input type="radio" name="question24" value="option2" />
                        <span class="radio"></span>
                        <span class="label">=Jumlah(A1:A5)</span>
                    </label>
                    <label>
                        <input type="radio" name="question24" value="option3" />
                        <span class="radio"></span>
                        <span class="label">A1+A5</span>
                    </label>
                    <label>
                        <input type="radio" name="question24" value="option4" />
                        <span class="radio"></span>
                        <span class="label">JUMLAH(A1, A5)</span>
                    </label>
                </div>
            </div>
            
            <!-- Pertanyaan 25 -->
            <div class="question" data-correct="option3">
                <p>Apa contoh referensi sel relatif?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question25" value="option1" />
                        <span class="radio"></span>
                        <span class="label">$A$1</span>
                    </label>
                    <label>
                        <input type="radio" name="question25" value="option2" />
                        <span class="radio"></span>
                        <span class="label">$A1</span>
                    </label>
                    <label>
                        <input type="radio" name="question25" value="option3" />
                        <span class="radio"></span>
                        <span class="label">A1</span>
                    </label>
                    <label>
                        <input type="radio" name="question25" value="option4" />
                        <span class="radio"></span>
                        <span class="label">$1</span>
                    </label>
                </div>
            </div>
            
            <!-- Pertanyaan 26 -->
            <div class="question" data-correct="option1">
                <p>Opsi mana yang memungkinkan Anda mengunci baris atau kolom tertentu pada tempatnya saat menggulir lembar kerja besar?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question26" value="option1" />
                        <span class="radio"></span>
                        <span class="label">Bekukan Panel</span>
                    </label>
                    <label>
                        <input type="radio" name="question26" value="option2" />
                        <span class="radio"></span>
                        <span class="label">Panel Kunci</span>
                    </label>
                    <label>
                        <input type="radio" name="question26" value="option3" />
                        <span class="radio"></span>
                        <span class="label">Lihat Opsi</span>
                    </label>
                    <label>
                        <input type="radio" name="question26" value="option4" />
                        <span class="radio"></span>
                        <span class="label">Panel Terpisah</span>
                    </label>
                </div>
            </div>
            
            <!-- Pertanyaan 27 -->
            <div class="question" data-correct="option1">
                <p>Apa itu pemfilteran di Excel?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question27" value="option1" />
                        <span class="radio"></span>
                        <span class="label">melihat data berdasarkan kriteria tertentu</span>
                    </label>
                    <label>
                        <input type="radio" name="question27" value="option2" />
                        <span class="radio"></span>
                        <span class="label">menghapus sel kosong dari lembar kerja</span>
                    </label>
                    <label>
                        <input type="radio" name="question27" value="option3" />
                        <span class="radio"></span>
                        <span class="label">mengurutkan data berdasarkan abjad</span>
                    </label>
                    <label>
                        <input type="radio" name="question27" value="option4" />
                        <span class="radio"></span>
                        <span class="label">menyusun data ke dalam kategori</span>
                    </label>
                </div>
            </div>
            
            <!-- Pertanyaan 28 -->
            <div class="question" data-correct="option1">
                <p>Jenis bagan manakah yang terbaik untuk membandingkan nilai antar kategori?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question28" value="option1" />
                        <span class="radio"></span>
                        <span class="label">bagan kolom</span>
                    </label>
                    <label>
                        <input type="radio" name="question28" value="option2" />
                        <span class="radio"></span>
                        <span class="label">grafik wilayah</span>
                    </label>
                    <label>
                        <input type="radio" name="question28" value="option3" />
                        <span class="radio"></span>
                        <span class="label">grafik garis</span>
                    </label>
                    <label>
                        <input type="radio" name="question28" value="option4" />
                        <span class="radio"></span>
                        <span class="label">grafik sebar</span>
                    </label>
                </div>
            </div>
            
            <!-- Pertanyaan 29 -->
            <div class="question" data-correct="option1">
                <p>Apa itu Tabel Pivot?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question29" value="option1" />
                        <span class="radio"></span>
                        <span class="label">alat yang digunakan untuk merangkum data</span>
                    </label>
                    <label>
                        <input type="radio" name="question29" value="option2" />
                        <span class="radio"></span>
                        <span class="label">suatu jenis rumus</span>
                    </label>
                    <label>
                        <input type="radio" name="question29" value="option3" />
                        <span class="radio"></span>
                        <span class="label">sejenis bagan</span>
                    </label>
                    <label>
                        <input type="radio" name="question29" value="option4" />
                        <span class="radio"></span>
                        <span class="label">cara untuk membuat makro</span>
                    </label>
                </div>
            </div>
            
            <!-- Pertanyaan 30 -->
            <div class="question" data-correct="option1">
                <p>Apa tujuan dari analisis “Bagaimana-jika”?</p>
                <div class="bulgy-radios" role="radiogroup" aria-labelledby="bulgy-radios-label">
                    <label>
                        <input type="radio" name="question30" value="option1" />
                        <span class="radio"></span>
                        <span class="label">untuk mengeksplorasi bagaimana perubahan nilai masukan memengaruhi nilai terhitung</span>
                    </label>
                    <label>
                        <input type="radio" name="question30" value="option2" />
                        <span class="radio"></span>
                        <span class="label">untuk membandingkan versi buku kerja yang berbeda</span>
                    </label>
                    <label>
                        <input type="radio" name="question30" value="option3" />
                        <span class="radio"></span>
                        <span class="label">untuk menghitung nilai maksimum dan minimum dalam suatu rentang</span>
                    </label>
                    <label>
                        <input type="radio" name="question30" value="option4" />
                        <span class="radio"></span>
                        <span class="label">untuk membuat diagram dan grafik</span>
                    </label>
                </div>
            </div>           
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
@endsection