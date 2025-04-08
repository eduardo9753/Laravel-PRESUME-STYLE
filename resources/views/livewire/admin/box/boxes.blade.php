<div class="container-fluid">
    <div class="row px-xl-5">

        <div class="col-md-4">
            {{-- si no hay id variante --}}
            @if (!$box_id)
                <form wire:submit.prevent='create'>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="from-group">
                                <label for="">Digite EL Producto</label>
                                <input wire:model='name' type="text" class="form-control"
                                    placeholder="Corset Gris Catania">
                            </div>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <div class="from-group">
                                <label for="">Precio de compra</label>
                                <input wire:model='purchase_price' type="number" class="form-control" min="1"
                                    max="300" step="0.01" placeholder="22.0">
                            </div>
                            @error('purchase_price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <div class="from-group">
                                <label for="">Precio de venta</label>
                                <input wire:model='sale_price' type="number" class="form-control" min="1"
                                    max="300" step="0.01" placeholder="45.0">
                            </div>
                            @error('sale_price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <div class="from-group">
                                <label for="">Descuento (opcional)</label>
                                <input wire:model='discount' type="number" class="form-control" min="0"
                                    max="300" placeholder="5.0">
                            </div>
                            @error('discount')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-2 text-white">Registrar Venta</button>
                </form>
            @endif

        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="lead text-center text-primary">INFORMACIÓN VENTA DIARIA</h2>
                </div>
                <div class="card-body">
                    {{-- lista de variantes del producto --}}
                    <div class="table-responsive mb-2">

                        <table class="table table-bordered text-center mb-0">
                            <thead class="bg-secondary text-dark">
                                <tr>
                                    <th>Producto</th>
                                    <th>Compra</th>
                                    <th>Venta</th>
                                    <th>Ganacia</th>
                                    <th>Fecha</th>
                                    <th>Remover</th>

                                </tr>
                            </thead>
                            <tbody class="align-middle">
                                @foreach ($boxes as $box)
                                    <tr>
                                        <td class="align-middle">{{ $box->name }}</td>
                                        <td class="align-middle">{{ $box->purchase_price }}</td>
                                        <td class="align-middle">{{ $box->sale_price }}</td>
                                        <td class="align-middle">{{ $box->revenue }}</td>
                                        <td class="align-middle">{{ $box->date_today }}</td>
                                        <td class="align-middle"><button wire:click='delete({{ $box->id }})'
                                                class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h1>Total : {{ $totalAmount }} </h1>

                                    <div>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary text-white" data-toggle="modal"
                                            data-target="#pdfModalVero">
                                            Genera tu pdf
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="pdfModalVero" tabindex="-1"
                                            aria-labelledby="pdfModalVeroLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="pdfModalVeroLabel">Mis Ventas</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('admin.box.generate') }}"
                                                            target="_blank" method="POST">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="">Fecha Inicio</label>
                                                                        <input type="date" name="fecha_inicio"
                                                                            value="{{ date('Y-m-d') }}"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="">Fecha Fin</label>
                                                                        <input type="date" name="fecha_fin"
                                                                            value="{{ date('Y-m-d') }}"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div>
                                                                <input type="submit" class="btn btn-danger w-100"
                                                                    value="GENERAR PDF">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Cerrar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>

    </div>
</div>
