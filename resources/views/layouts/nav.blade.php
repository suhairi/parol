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
                <li class="active"><a href="{{ URL('/') }}">Home</a></li>
                <li><a href="#contact">Rekod Maklumat</a></li>
                <li><a href="{{ route('members.carian') }}">Carian</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Laporan <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Laporan 1</a></li>
                        <li><a href="#">Laporan 2</a></li>
                        <li><a href="#">Laporan 3</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                {{--<li><a href="../navbar/">Default</a></li>--}}
                {{--<li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>--}}
                <li><a href="{{ route('logout') }}">Log Keluar</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>