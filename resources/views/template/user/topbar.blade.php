<div class="container-fluid">
    <div class="row bg-secondary py-2 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center">
                <a class="text-dark" href="">Moda</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="">Estilos</a>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-dark px-2" target="_blank" href="https://www.instagram.com/presumestyleofficial/">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-dark px-2" target="_blank" href="https://www.tiktok.com/@presumestyleofficial">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row align-items-center py-3 px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a href="{{ route('user.home.index') }}" class="text-decoration-none">
                <h1 class="font-weight-bold">Presume<span
                        class="text-primary m-0 display-5 font-weight-semi-bold">Style</span></h1>
            </a>
        </div>
        <div class="col-lg-6 col-6 text-left">
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar Productos">
                    <div class="input-group-append">
                        <span class="input-group-text bg-transparent text-primary">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3 col-6 text-right">
            {{-- <a href="" class="btn border">
                <i class="fas fa-heart text-primary"></i>
                <span class="badge">0</span>
            </a> --}}
            <a href="" class="btn border">
                <i class="fas fa-shopping-cart text-primary"></i>
                <span class="badge">0</span>
            </a>
        </div>
    </div>
</div>
