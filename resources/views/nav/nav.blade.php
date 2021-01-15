<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="{{route('home.index')}}" class="nav-link">Aplikasi Tabungan Siswa</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:#fff">
                        <img src="{{asset('images/aktif2.png')}}" alt="" height="30" weight="30">
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                    </div>
                </div>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<!-- Nav Sidebar -->
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse show" style="">
            <div class="sidebar-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                    <a class="nav-link active text-muted" href="">
                        <h6 class="font-weight-bold">
                            Home
                        </h6> 
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active text-muted" href="#">
                        <h6 class="font-weight-bold">
                            Data Kelas
                        </h6> 
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active text-muted" href="#">
                        <h6 class="font-weight-bold">
                            Data Nasabah
                        </h6> 
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active text-muted" href="#">
                        <h6 class="font-weight-bold">
                            Transaksi
                        </h6> 
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active text-muted" href="#">
                        <h6 class="font-weight-bold">
                            Laporan
                        </h6> 
                    </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Main Content -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-2">
                <h4 class="h2">Home</h4>             
            </div>
            <div class="card border-0 shadow">
                <div class="card-body bg-warning">
                    <h4 class="font-weight-bold">Welcome !</h4>
                    <h6>Hey selamat datang kembali di aplikasi Tabungan Siswa. Ada yang bisa kami bantu?</h6>
                </div>
            </div>
            <div class="container pt-4">
                <div class="row d-flex pt-4">
                    <h4 class="h2">Data Petugas</h4>
                </div>
            </div>        
            <a href="" class="btn btn-warning">Tambah Petugas</a>
            <div class="container">
                <div class="row d-flex pt-2">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1234567</th>
                                <th>Rachmat Ababil</th>
                                <th>Admin</th>
                                <th>
                                    <a href="" class="btn btn-primary">Detail</a>
                                    <a href="" class="btn btn-danger">Hapus</a>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>