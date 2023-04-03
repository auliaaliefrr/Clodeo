@include('layout.head')
@include('layout.navbar')

<style>
    .form {
        margin-top: 48px;
    }
</style>

<body>
    <div class="row" style="width: 100%; height: 100%;">
        <div class="col-12">
            <div class="container">
                <form class="form">
                    <div class="mb-3">
                        <label for="judulcerita" class="form-label">Judul Cerita</label>
                        <input type="text" class="form-control" id="judulcerita" aria-describedby="textHelp">
                    </div>
                    <div class="mb-3">
                        <label for="fotosampul" class="form-label">Foto Sampul (1000px, 800px)</label><br>
                        <input type="file" id="fotosampul" name="filename">
                    </div>
                    <div class="mb-3">
                        <label for="poster" class="form-label">Poster (600px, 250px)</label><br>
                        <input type="file" id="poster" name="filename">
                    </div>
                    <div class="mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" class="form-control" id="penulis" aria-describedby="textHelp">
                    </div>
                    <div class="mb-3">
                        <label for="isicerita" class="form-label">Cerita</label>
                        <textarea class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Kategori</option>
                            <option value="1">Horror</option>
                            <option value="2">Romantis</option>
                            <option value="3">Fiksi</option>
                            <option value="4">Sejarah</option>
                            <option value="5">Fiksi Ilmiah</option>
                            <option value="6">Lainnya</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>