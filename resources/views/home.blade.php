@extends('layout\main')

@section('container')

<style>
                                ul {
                                    list-style-type: none;
                                    padding: 0;
                                }
                                h2,p {
                                    margin: 10px 0;
                                    color:#2c3e50; /* Pastikan teks berwarna hitam */
                                    transition: font-size 0.3s; /* Tambahkan transisi untuk efek halus */

                                }
                                h2,p:hover {
                                    font-size: 1.2em; /* Perbesar ukuran font saat dihover */
                                    color: #2c3e50; /* Pastikan teks tetap hitam saat dihover */
                                }
                                <style>
                                h1, h3, h3 {
                                    color: #2c3e50;
                                }
                                ul {
                                    list-style-type: none;
                                    padding: 0;
                                }
                                li {
                                    margin: 10px 0;
                                    color:#2c3e50; /* Pastikan teks berwarna hitam */
                                    transition: font-size 0.3s; /* Tambahkan transisi untuk efek halus */

                                }
                                li:hover {
                                    font-size: 1.2em; /* Perbesar ukuran font saat dihover */
                                    color: #2c3e50; /* Pastikan teks tetap hitam saat dihover */
                                }
                                li:before {
                                    content: "• ";
                                    color: #322C2B;
                                }
                                
            </style> 
</style> 
  <main>
  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="{{ URL('images/eduledge.jpg') }}" class="d-block w-100" alt="Welcome">
        <div class="container">
        <div class="carousel-caption text-start custom-caption">
          <h1 style="text-align: left;">Selamat Datang di Eduledge.</h1>
          <p class="opacity-75" style="text-align: left; color: white;">Semoga Selalu Semangat Belajar!</p>
        </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="{{ URL('images/priscilla-du-preez-XkKCui44iM0-unsplash.jpg') }}" class="d-block w-100" alt="Welcome">
        <div class="container">
          <div class="carousel-caption text-start">
          <h1>Coba Course yang Tersedia</h1>
            <p style="text-align: right; color: white;">Pelajari Beberapa Course Sekarang!</p> 
            <p><a class="btn btn-lg btn-dark" href="/course">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="{{ URL('images/cole-keister-vEgVWRBr2VY-unsplash.jpg') }}" class="d-block w-100" alt="Welcome">
        <div class="container">
          <div class="carousel-caption text-end">
          <h1>Kategori Course</h1>
            <p style="text-align: left; color: white;">Ada Beberapa Kategori Course Yang Kamu Bisa Coba.</p>
            <p><a class="btn btn-lg btn-dark" href="/categories">Learn more</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 id="about-heading" class="featurette-heading fw-normal lh-1 animate__animated animate__slideInLeft">Apa itu Eduledge?<span class="text-body-secondary"></span></h2>
        <p class="lead justify-text animate__animated animate__slideInLeft">Eduledge adalah platform kursus online yang bertujuan menyediakan akses mudah dan terjangkau ke berbagai materi pembelajaran di berbagai bidang ilmu pengetahuan. Dengan fokus pada pendidikan inovatif. Eduledge menawarkan fleksibilitas dan aksesibilitas dalam pembelajaran dengan beragam konten, mendukung misi meningkatkan akses pendidikan bagi individu dari berbagai latar belakang.</p>
      </div>
      <div class="col-md-5">
        <img src="images/edu1.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto animate__animated animate__slideInRight" width="500" height="500" alt="Placeholder: 500x500">
      </div>
    </div>


    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 id="about-heading" class="featurette-heading fw-normal lh-1 animate__animated animate__slideInRight">Fitur Unggulan <span class="text-body-secondary">Dari Eduledge</span></h2>
        <p class="lead">Eduledge adalah platform kursus online inovatif yang dirancang untuk menghadirkan pengalaman belajar yang interaktif dan menyenangkan. Salah satu fitur unggulan Eduledge yang membedakannya dari platform kursus online lainnya adalah penerapan Game-based learning dalam proses pembelajarannya.</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="images/leader.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto animate__animated animate__slideInRight" width="500" height="500" alt="Placeholder: 500x500">
      </div>
    </div>

    <hr class="featurette-divider">
        <div class="row featurette">
      <div class="col-md-7">
      <h2 id="about-heading" class="featurette-heading fw-normal lh-1 animate__animated animate__slideInLeft">About<span class="text-body-secondary"></span></h2>
      <p id="about-text" class="lead justify-text animate__animated animate__slideInLeft">Selamat Datang di Eduledge! Web ini merupakan salah satu proyek sebagai implementasi Program Full Stack Developer dari Jabar Digital Academy. Semoga melalui web ini, pengguna dapat meningkatkan pemahaman mereka dalam berbagai bidang ilmu pengetahuan.</p>
      </div>
      <div class="col-md-5">
        <img src="images/about.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto animate__animated animate__slideInRight" width="500" height="500" alt="Placeholder: 500x500">
      </div>
    </div>
      </div>
    </div>

    <hr class="featurette-divider">
  <!-- FOOTER -->
  <footer class="container">
    <p class="page-content"><a href="#"style="color: black;">Kembali ke Atas</a></p>
    <p>&copy; 2024 Eduledge. &middot; <a href="#"style="color: black;">Privacy</a> &middot; <a href="#"style="color: black;">Terms</a></p>
  </footer>
</main>
@endsection

@section('scripts')
<script>
 document.addEventListener("DOMContentLoaded", function() {
            const aboutHeading = document.getElementById("main");
            const aboutText = document.getElementById("main");
            const aboutImage = document.getElementById("img");

            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }

            function addAnimation() {
                if (isInViewport(aboutHeading)) {
                    aboutHeading.classList.add("animate__animated", "animate__slideInLeft");
                }
                if (isInViewport(aboutText)) {
                    aboutText.classList.add("animate__animated", "animate__slideInLeft");
                }
                if (isInViewport(aboutImage)) {
                    aboutImage.classList.add("animate__animated", "animate__slideInRight");
                }
            }

            window.addEventListener("scroll", addAnimation);
        });
</script>
@endsection
