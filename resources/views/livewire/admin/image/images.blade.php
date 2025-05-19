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
                    <h2 class="lead text-center text-primary">IMAGENES DEL PRODUCTO</h2>
                </div>
                <div class="card-body">
                    {{-- si no hay id variante --}}
                    @if (!$image_id)
                        <form wire:submit.prevent='create'>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="from-group">
                                        <label for="">Url de la Imagen</label>
                                        <input wire:model='image_url' placeholder="url del producto" type="text"
                                            class="form-control">
                                    </div>
                                    @error('image_url')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12 mt-2">
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

                            <button type="submit" class="btn btn-primary mt-2 text-white">Registrar Imagen</button>
                        </form>
                    @endif

                    {{-- si hay hay del producto editamos --}}
                    @if ($image_id)
                        <form wire:submit.prevent='update'>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="from-group">
                                        <label for="">Url de la Imagen</label>
                                        <input wire:model='image_url' placeholder="url del producto" type="text"
                                            class="form-control">
                                    </div>
                                    @error('image_url')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-12 mt-2">
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

                            <button type="submit" class="btn btn-primary mt-2 text-white">Editar Imagen</button>
                        </form>
                    @endif

                </div>


                {{-- lista de variantes del producto --}}
                <div class="table-responsive mb-2">

                    <table class="table table-bordered text-center mb-0">
                        <thead class="bg-secondary text-dark">
                            <tr>
                                <th>Producto</th>
                                <th>Imagen</th>
                                <th>Remover</th>
                                <th>Editar</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">

                            @foreach ($product->images as $image)
                                <tr>
                                    <td class="align-middle"><img src="{{ $image->image_url }}" alt=""
                                            style="width: 50px;">
                                        {{ $image->product->name }}</td>
                                    <td class="align-middle">{{ $image->image_url }}</td>
                                    <td class="align-middle"><button wire:click='delete({{ $image->id }})'
                                            class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></td>
                                    <td class="align-middle"><button wire:click='edit({{ $image->id }})'
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
