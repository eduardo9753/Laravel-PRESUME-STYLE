<div class="container-fluid">
    <div class="row px-xl-5">

        <div class="col-md-4">
            {{-- si no hay id variante --}}
            @if (!$category_id)
                <form wire:submit.prevent='create'>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="from-group">
                                <label for="">Digite la Categoria</label>
                                <input wire:model='name' type="text" class="form-control" placeholder="Saco">
                            </div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-2 text-white">Registrar Categoria</button>
                </form>
            @endif

            @if ($category_id)
                <form wire:submit.prevent='update'>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="from-group">
                                <label for="">Digite la Categoria</label>
                                <input wire:model='name' type="text" class="form-control" placeholder="SYBILLA">
                            </div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-2 text-white">Actualizar Categoria</button>
                </form>
            @endif
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="lead text-center text-primary">INFORMACIÓN DE LAS CATEGORIAS</h2>
                </div>
                <div class="card-body">
                    {{-- lista de variantes del producto --}}
                    <div class="table-responsive mb-2">

                        <table class="table table-bordered text-center mb-0">
                            <thead class="bg-secondary text-dark">
                                <tr>
                                    <th>Categoria</th>
                                    <th>Estado</th>
                                    <th>Remover</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody class="align-middle">
                                @foreach ($categories as $category)
                                    <tr>
                                        <td class="align-middle">{{ $category->name }}</td>
                                        <td class="align-middle">{{ $category->status }}</td>
                                        <td class="align-middle"><button wire:click='delete({{ $category->id }})'
                                                class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></td>
                                        <td class="align-middle"><button wire:click='edit({{ $category->id }})'
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
