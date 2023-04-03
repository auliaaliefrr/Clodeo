@include('layout.head')
@include('layout.navbar')

<body>
    <div class="row" style="width: 100%; height: 100%;">
        <div class="col-12">
            <div class="container">
                <section>
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <h1>Judul Cerita (get dari database kolom judulcerita)</h1>
                        <h3>Sinopsis singkat (get dari databse kolom sinopsis)</h3>
                        <div class="carousel-inner" style="width: 1300px; height: 500px;">
                            <!-- banyaknya slide maksimal 5, ngambil teratas (pagination, kalo gakeberatan, kl keberatan gausah gapapaa) -->
                            <!-- ini dibawah ini, yang href kl bisa kan datanya get dari database, pas konten di klik, auto routing ke page itu -->
                            <a href="#">
                                <div class="carousel-item active">
                                    <img src="masukin_dari_database" class="d-block w-100" alt="...">
                                </div>
                            </a>
                            <a href="#">
                                <div class="carousel-item active">
                                    <img src="masukin_dari_database" class="d-block w-100" alt="...">
                                </div>
                            </a>
                            <a href="#">
                                <div class="carousel-item active">
                                    <img src="masukin_dari_database" class="d-block w-100" alt="...">
                                </div>
                            </a>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>