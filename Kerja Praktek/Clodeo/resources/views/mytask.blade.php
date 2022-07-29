@include('layout.head')

<style>
    .left-sidebar {
        box-shadow: 8px 0px 14px 0px rgba(0, 0, 0, 0.39);
        -webkit-box-shadow: 8px 0px 14px 0px rgba(0, 0, 0, 0.39);
        -moz-box-shadow: 8px 0px 14px 0px rgba(0, 0, 0, 0.39);
    }

    .h1title {
        font-style: normal;
        font-weight: 500;
        line-height: 36px;
        margin-top: 104px;
        color: #080808;
    }

    .pagination {
        justify-content: left;
    }

    .tittle {
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 20px;
        color: #545454;
        flex: none;
    }

    .form-control {
        margin-top: 104px;
    }

    .field {
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 21px;
        color: #080808;
        flex: none;
        border-top-width: thick;
    }

    .sortlogo {
        margin-left: 14px;
    }

    .btn {
        margin-right: 12px;
    }

    /* Search Bar */
    .search-container {
        display: block;
        margin: 0 auto;
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

    /* End Search Bar */
</style>

<body>
    <div class="row" style="width: 100%; height: 100%;">
        <div class="col-2 left-sidebar">
            @include('layout.sidebar')
        </div>

        <div class="col-10">
            @include('layout.navbar')
            <div class="container">

                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }} <br />
                    @endforeach
                </div>
                @endif

                <div class="row">
                    <div class="col-6">
                        <h1 class="h1title" style="font-size:25px;">Dataset Lists</h1>
                    </div>
                    <div class="col-6" style="padding-bottom: 5px; padding-top:106px;">
                        <form class="search-container">
                            <input type="text" id="search-bar" placeholder="Search File" style="width: 100%; height: 100%; border-radius: 5px; border: 1px solid grey; padding-left: 20px; padding-right:20px;">
                        </form>
                    </div>

                    <!-- Table -->
                    <div class="col-12" style="padding-top: 12px;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">File Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Progress<a href="#"><img src="{{ ('/image/SortAscending.png') }}" class="sortlogo"></a></th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Dataset.csv</th>
                                    <td>20/02/2022</td>
                                    <td>Complete</td>
                                    <td>
                                        <button onclick="location.href='/openfile'" type="button" class="btn btn-outline-primary btn-sm">View</button>
                                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                    </td>
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
                </div>
            </div>
        </div>
</body>