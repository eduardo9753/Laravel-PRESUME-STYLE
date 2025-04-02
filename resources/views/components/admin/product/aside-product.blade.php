<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
    <aside class="">
        <ul class="list-group z-index">

            <li class="list-group-item">
                <a class="cursor-status" href="{{ route('admin.product.edit', ['product' => $product]) }}">Informacion
                    del Producto</a>
            </li>
            <li class="list-group-item">
                <a class="cursor-status" href="{{ route('admin.variant.index', ['product' => $product]) }}">Variantes del
                    Producto</a>
            </li>

            <li class="list-group-item">
                <a class="cursor-status" href="{{ route('admin.image.index', ['product' => $product]) }}">Imagenes del
                    Producto</a>
            </li>

        </ul>
    </aside>
</div>
