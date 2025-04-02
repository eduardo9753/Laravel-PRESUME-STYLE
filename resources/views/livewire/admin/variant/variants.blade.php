<div class="container-fluid">
    <div class="row px-xl-5">

        <div class="col-md-4">
            {{-- LLAMADA DEL COMPONENTE ASIDE --}}
            @component('components.admin.product.aside-product')
                {{-- Puedes pasar datos al componente si es necesario --}}
                @slot('product', $product)
            @endcomponent
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="lead text-center text-primary">INFORMACIÓN DEL PRODUCTO</h2>
                </div>
                <div class="card-body">
                    {{-- si no hay id variante --}}
                    @if (!$variant_id)
                        <form wire:submit.prevent='create'>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Escoga el color</label>
                                        <select wire:model='color_id' class="form-control">
                                            @foreach ($colors as $color)
                                                <option value="{{ $color->id }}"> {{ $color->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('color_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Escoga la talla</label>
                                        <select wire:model='size_id' class="form-control">
                                            {{$sizes}}
                                            @foreach ($sizes as $size)
                                                <option value="{{ $size->id }}"> {{ $size->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('size_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="from-group">
                                        <label for="">Digite el stock</label>
                                        <input wire:model='stock' type="number" class="form-control" min="1"
                                            max="25">
                                    </div>
                                    @error('stock')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="from-group">
                                        <label for="">Producto actual</label>
                                        <select wire:model="product_id" class="form-control">
                                            <option value="{{ $product_id }}" class="text-bg-dark">
                                                {{ $name }}
                                            </option>
                                        </select>
                                    </div>
                                    @error('product_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-2 text-white">Registrar Variante</button>
                        </form>
                    @endif

                    {{-- si hay id variante se mostrara el edit para actualizar --}}
                    @if ($variant_id)
                        <form wire:submit.prevent='update'>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Escoga el color</label>
                                        <select wire:model='color_id' class="form-control">
                                            @foreach ($colors as $color)
                                                <option value="{{ $color->id }}"> {{ $color->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('color_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Escoga la talla</label>
                                        <select wire:model='size_id' class="form-control">
                                            @foreach ($sizes as $size)
                                                <option value="{{ $size->id }}"> {{ $size->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('size_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="from-group">
                                        <label for="">Digite el stock</label>
                                        <input wire:model='stock' type="number" class="form-control" min="1"
                                            max="25">
                                    </div>
                                    @error('stock')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="from-group">
                                        <label for="">Producto actual</label>
                                        <select wire:model="product_id" class="form-control">
                                            <option value="{{ $product_id }}" class="text-bg-dark">
                                                {{ $name }}
                                            </option>
                                        </select>
                                    </div>
                                    @error('product_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-2 text-white">Actualizar Variante</button>
                        </form>
                    @endif


                </div>


                {{-- lista de variantes del producto --}}
                <div class="table-responsive mb-2">

                    <table class="table table-bordered text-center mb-0">
                        <thead class="bg-secondary text-dark">
                            <tr>
                                <th>Producto</th>
                                <th>Color</th>
                                <th>Talla</th>
                                <th>Stock</th>
                                <th>Remover</th>
                                <th>Editar</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            color id {{ $size_id }}
                            @foreach ($product->variants as $variant)
                                <tr>
                                    <td class="align-middle"><img src="{{ asset('assets/img/product-1.jpg') }}"
                                            alt="" style="width: 50px;">
                                        {{ $variant->name }}</td>
                                    <td class="align-middle">{{ $variant->color->name }}</td>
                                    <td class="align-middle">{{ $variant->size->name }}</td>
                                    <td class="align-middle">{{ $variant->stock }}</td>
                                    <td class="align-middle"><button wire:click='delete({{ $variant->id }})'
                                            class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></td>
                                    <td class="align-middle"><button wire:click='edit({{ $variant->id }})'
                                            class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
