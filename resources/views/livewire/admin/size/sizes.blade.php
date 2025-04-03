<div class="container-fluid">
    <div class="row px-xl-5">

        <div class="col-md-4">
            {{-- si no hay id variante --}}
            @if (!$size_id)
                <form wire:submit.prevent='create'>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="from-group">
                                <label for="">Digite la Talla</label>
                                <input wire:model='name' type="text" class="form-control" placeholder="XL">
                            </div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Escoga la Categoria</label>
                                <select wire:model='category_id' class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-2 text-white">Registrar Talla</button>
                </form>
            @endif

            @if ($size_id)
                <form wire:submit.prevent='update'>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="from-group">
                                <label for="">Digite la marca</label>
                                <input wire:model='name' type="text" class="form-control" placeholder="XL">
                            </div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Escoga la Categoria</label>
                                <select wire:model='category_id' class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('color_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-2 text-white">Actualizar Talla</button>
                </form>
            @endif
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="lead text-center text-primary">INFORMACIÓN DE LAS TALLAS</h2>
                </div>
                <div class="card-body">
                    {{-- lista de variantes del producto --}}
                    <div class="table-responsive mb-2">

                        <table class="table table-bordered text-center mb-0">
                            <thead class="bg-secondary text-dark">
                                <tr>
                                    <th>Talla</th>
                                    <th>Categoria</th>
                                    <th>Remover</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody class="align-middle">
                                @foreach ($sizes as $size)
                                    <tr>
                                        <td class="align-middle">{{ $size->name }}</td>
                                        <td class="align-middle">{{ $size->category->name }}</td>
                                        <td class="align-middle"><button wire:click='delete({{ $size->id }})'
                                                class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></td>
                                        <td class="align-middle"><button wire:click='edit({{ $size->id }})'
                                                class="btn btn-sm btn-dark"><i class="fa fa-edit"></i></button></td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>



            </div>
        </div>

    </div>
</div>
