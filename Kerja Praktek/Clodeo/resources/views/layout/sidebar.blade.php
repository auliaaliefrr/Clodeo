@include('layout.head')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        font-family: "Poppins", sans-serif;
    }

    .clodeo {
        font-style: normal;
        font-weight: 700;
        font-size: 24px;
        line-height: 28px;
        color: #57B8ED;
        display: inline-flex;
        margin-bottom: 40px;
        margin-top: 48px;
    }

    .clodeo .minilogo {
        width: 40px;
        height: 40px;
        margin-right: 7px;
        margin-left: 48px;
    }


    .sidebar {
        height: 85%;
        width: auto;
    }

    .sidebar-bt {
        height: 15%;
        width: auto;
    }

    .sidebar ul li {
        padding-left: 24px;
        padding-top: 16px;
    }

    .sidebar-bt ul li {
        padding-left: 24px;
        padding-top: 16px;
    }

    .sidebar ul li a {
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        color: #3B3B3B;
        text-decoration: none;
        border-radius: 8px;
        border: 1px black;
    }

    .sidebar-bt ul li a {
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        color: #3B3B3B;
        text-decoration: none;
        border-radius: 8px;
        border: 1px black;
    }

    .sidebar ul li a:hover {
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.15);
    }

    /* .wrapper .sidebar {
        width: 15%;
        height: 80%;
        background: rgba(230, 230, 230, 1);
        padding: 30px 0px;
        position: fixed;
    }



    .wrapper .sidebar ul li a {
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        color: #3B3B3B;
        text-decoration: none;
        border-radius: 8px;
        border: 1px black;
    }

    .wrapper .sidebar ul li a:hover {
        background-color: #3B3B3B;
    } */

    .logout {
        padding-left: 24px;
        padding-top: 16px;
    }

    .logout .logouttext {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        color: #3B3B3B;
        display: inline-flex;
    }

    .buttonnavbar {
        background: #FFFFFF;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.15);
        border-radius: 8px;
    }

    ul li .buttonnavbar {
        padding-top: 4px;
        padding-left: 6px;
    }

    span {
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        color: #3B3B3B;
    }
</style>

<div class="sidebar">
    <div class="clodeo">
        <img class="minilogo" src="{{ ('/image/minilogo.png') }}">
        <h1>Clodeo</h1>
    </div>
    <ul>
        <li>
            <a href="/upload">
                <div class="col-12 buttonnavbar">
                    <img src="{{ ('/image/CloudUpload.png') }}" style="margin-right: 12px;">
                    <span>Upload File</span>
                </div>
            </a>
        </li>
        <li>
            <a href="/mytask">
                <div class="col-12 buttonnavbar">
                    <img src="{{ ('/image/note.png') }}" style="margin-right: 12px;">
                    <span>My Task</span>
                </div>
            </a>
        </li>
    </ul>
</div>
<div class="sidebar-bt">
    <ul>
        <li>
            <a href="{{url('logout')}}">
                <div class="col-12 buttonnavbar">
                    <img src="{{ ('/image/logout.png') }} " style="margin-right: 12px;">
                    <span>Log Out</span>
                </div>
            </a>
        </li>
    </ul>
</div>

<!-- </div> -->