<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Jabatan Penjara Malaysia</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ URL('/') }}">Home</a></li>
                <li><a href="{{ route('members.rekod.index') }}">Rekod Maklumat</a></li>
                <li><a href="{{ route('members.rekod.kursus.index') }}">Rekod Kursus</a></li>
                <li><a href="{{ route('members.carian') }}">Carian</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Laporan <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('members.laporan.alorsetar') }}">Alor Setar</a></li>
                        <li><a href="{{ route('members.laporan.pokoksena') }}">Pokok Sena</a></li>
                        <li><a href="{{ route('members.laporan.sungaipetani') }}">Sungai Petani</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('admin.index') }}" target="_blank">Admin Slide</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                {{--<li><a href="../navbar/">Default</a></li>--}}
                {{--<li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>--}}
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Setup <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('members.setup.pengguna') }}">Pengguna</a></li>
                        <li><a href="{{ route('members.setup.lokasi') }}">Lokasi Kursus</a></li>
                        <li><a href="{{ route('members.setup.cawangan') }}">Institusi</a></li>
                        <li><a href="{{ route('members.setup.warganegara') }}">Warganegara</a></li>
                        <li><a href="{{ route('members.setup.jantina') }}">Jantina</a></li>
                        <li><a href="{{ route('members.setup.bangsa') }}">Bangsa</a></li>
                        <li><a href="{{ route('members.setup.kategori') }}">Kategori</a></li>
                        <li><a href="{{ route('members.setup.kesalahan') }}">Kesalahan</a></li>
                        <li><a href="{{ route('members.setup.pegawai') }}">Pegawai</a></li>
                        {{--<li role="separator" class="divider"></li>--}}
                        {{--<li class="dropdown-header">Nav header</li>--}}
                        {{--<li><a href="#">Separated link</a></li>--}}
                        {{--<li><a href="#">One more separated link</a></li>--}}
                    </ul>
                </li>
                <li><a href="{{ route('logout') }}">Log Keluar</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>