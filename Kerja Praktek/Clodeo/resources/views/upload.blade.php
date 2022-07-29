@include('layout.head')

<style>
    .left-sidebar {
        box-shadow: 8px 0px 14px 0px rgba(0, 0, 0, 0.39);
        -webkit-box-shadow: 8px 0px 14px 0px rgba(0, 0, 0, 0.39);
        -moz-box-shadow: 8px 0px 14px 0px rgba(0, 0, 0, 0.39);
    }

    .container .h1 {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 24px;
        line-height: 36px;
        color: #080808;
        margin-top: 120px;
    }

    .dropify-wrapper {
        height: 350px !important;
        width: 100% !important;
        border-radius: 20px;
        border: 3px dashed #ABABAB !important;
    }

    .file-icon {
        font-size: 90px !important;
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
                <h1 class="h1">Upload File</h1>
                <input name="file1" type="file" class="dropify" data-height="100" />

            </div>
        </div>
    </div>
</body>

<script>
    $('.dropify').dropify();
</script>


@include('js.script')