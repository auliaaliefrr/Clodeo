@include('layout.head')
<style>
    .left-sidebar {
        box-shadow: 8px 0px 14px 0px rgba(0, 0, 0, 0.39);
        -webkit-box-shadow: 8px 0px 14px 0px rgba(0, 0, 0, 0.39);
        -moz-box-shadow: 8px 0px 14px 0px rgba(0, 0, 0, 0.39);
    }

    .filetitttle {
        font-style: normal;
        font-weight: 500;
        font-size: 24px;
        line-height: 36px;
        margin-top: 104px;
        color: #080808;
    }

    .pagination {
        justify-content: left;
    }

    .lidataset {
        float: left;
    }

    .liststyle {
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 20px;
        color: #545454;
    }

    .sortlogo {
        margin-left: 14px;
    }

    .modal-title {
        font-style: normal;
        font-weight: 400;
        font-size: 20px;
        line-height: 24px;
        color: #000000;
        margin-top: 4px;
    }
</style>

<body>
    <div class="row" style="width: 100%; height: 100%;">
        <div class="col-2 left-sidebar">
            @include('layout.sidebar')
        </div>

        <div class="col-10">
            @include('layout.navbar')
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h1 class="filetitttle">Dataset.csv</h1>
                    </div>
                    <div class="col-4" style="padding-bottom: 5px; padding-top:106px;">
                        <form class="search-container">
                            <input type="text" id="search-bar" placeholder="Search Address" style="width: 100%; height: 100%; border-radius: 5px; border: 1px solid grey; padding-left: 20px; padding-right:20px;">
                        </form>
                    </div>
                    <div class="col-2" style="padding-top: 105px;">
                        <button type="button" class="btn btn-primary" style="width: 100%;">Download</button>
                    </div>
                </div>

                <div style="padding-top: 12px;">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr class="liststyle">
                                <td>Order Number</td>
                                <td>Address</td>
                                <td>District</td>
                                <td>District Code</td>
                                <td>ML_Code</td>
                                <td>Status<a href="#"><img src="{{ ('/image/SortAscending.png') }}" class="sortlogo"></a></td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">73512</th>
                                <td>Jl. Tambun Bungai seberang...</td>
                                <td>SELAT</td>
                                <td>63.03.01</td>
                                <td>63.93.01</td>
                                <td>Different</td>
                                <td><button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button></td>
                            </tr>
                            <tr>
                                <th scope="row">15310</th>
                                <td>46 Jl. Vinca VII Blok G3 No.46...</td>
                                <td>SERPONG</td>
                                <td>36.64.01</td>
                                <td>36.64.01</td>
                                <td>Same</td>
                                <td><button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagenation -->
                <div>
                    <nav>
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Show Data</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                            <li class="page-item"><a class="page-link" href="#">50</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">All</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Pop Up -->
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">District</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">City</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Province</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">District Code</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">ML_Code</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>