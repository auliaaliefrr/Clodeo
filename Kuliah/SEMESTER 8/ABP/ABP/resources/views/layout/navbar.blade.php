<style>
    li,
    a {
        color: #edf0f1;
        font-size: 16;
        text-decoration: none;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 30px 10%;
        background-color: #428EC5;
    }

    .logo {
        cursor: pointer;
        height: 50px;
        width: 200px;
    }

    .nav__links {
        list-style: none;
    }

    .nav__links li {
        display: inline-block;
        padding: 0px 20px;
    }

    /* button {
        padding: 9px 25px;
        border: 0;
        box-shadow: 20px;
        border-radius: 8px;
    } */

    /* search */
    .search-container {
        display: block;
        margin: 0 auto;
        height: 40px;
        width: 400px;
    }

    input#search-bar {
        margin: 0 auto;
        width: 100%;
        height: 45px;
        padding: 0 20px;
        font-size: 1rem;
        border: 1px solid #D0CFCE;
        outline: none;
    }

    .search-icon {
        position: relative;
        float: right;
        width: 75px;
        height: 75px;
        top: -62px;
        right: -45px;
    }

    /* search */
</style>

<body>
    <header>
        <a href="home"><img class="logo" src="{{ ('/image/Wattpad_logo.png' ) }}" alt="logo"></a>
        <nav>
            <ul class="nav__links">
                <form class="search-container">
                    <input type="text" id="search-bar" name="search" placeholder="Cari Berdasarkan Judul" style="width: 70%; height: 100%; border-radius: 5px; border: 1px solid grey; padding-left: 20px; padding-right:20px;">
                    <input type="submit" style="width: 20%; height: 100%; border-radius: 5px; border: 1px solid grey; padding-left: 10px; padding-right:10px;" value="Cari">
                </form>
                </div>
            </ul>
        </nav>

        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Akun</button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Profil</a></li>
                <li><a class="dropdown-item" href="write">Tulis Cerita Baru</a></li>
                <li><a class="dropdown-item" href="#">Notifikasi</a></li>
                <li><a class="dropdown-item" href="#">Keluar</a></li>
            </ul>
        </div>
    </header>


</body>