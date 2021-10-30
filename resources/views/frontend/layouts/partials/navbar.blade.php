<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a href="#" class="navbar-brand" style="background: none">
            Aceh Pedia
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navb">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navb">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mx-md-2">
                    <a href="{{ route('home') }}" class="nav-link active">Home</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{ route('event.index') }}" class="nav-link">Acara</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{ route('news.index') }}" class="nav-link">Berita</a>
                </li>
                <li class="nav-item mx-md-2 dropdown">
                    <a href="" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                        Galeri
                    </a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Foto</a>
                        <a href="#" class="dropdown-item">Video</a>
                    </div>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{ route('culture.index') }}" class="nav-link">Kebudayaan</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{ route('culinary.index') }}" class="nav-link">Kuliner</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="{{ route('ticket.index') }}" class="nav-link">Tiket</a>
                </li>
                <li class="nav-item mx-md-2">
                    <a href="#" class="nav-link">Wisata</a>
                </li>

                <!-- Mobile Button -->
                <form class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login my-2 my-sm-0" type="button"
                        onclick="event.preventDefault(); location.href='http://noprob.my.id/login';">
                        Masuk
                    </button>
                </form>

                <!-- Desktop Button -->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                        onclick="event.preventDefault(); location.href='http://noprob.my.id/login';">
                        Masuk
                    </button>
                </form>


            </ul>
        </div>
    </nav>
</div>