@foreach ($products as $product)
    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
        <div class="card product-item border-0">
            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                <a href="{{ route('user.shop.show', ['product' => $product]) }}">
                    <img class="img-fluid w-100"
                        style="width: 281px !important; height: 281px !important; object-fit: cover;"
                        src="{{ asset($product->images->first()?->image_url ?? 'assets/img/default.jpg') }}"
                        alt="{{ $product->name }}">
                </a>

            </div>
            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                <h6 class="text-truncate mb-3">{{ $product->name }}</h6>
                <div class="d-flex justify-content-center">
                    <h6> S/{{ $product->sale_price }} </h6>
                    <h6 class="text-muted ml-2"><del>S/ {{ $product->sale_price + 10 }} </del></h6>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-center bg-light border">
                <a href="{{ route('user.shop.show', ['product' => $product]) }}" class="btn btn-sm text-dark p-0">
                    <i class="fas fa-eye text-primary mr-1"></i>Ver Detalles
                </a>
            </div>
        </div>
    </div>
@endforeach
