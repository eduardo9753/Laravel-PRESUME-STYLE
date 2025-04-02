<div class="mb-4">
    {{-- PRIMER PARAMETRO : son los campos del modelo mejor dicho de la tabla --}}
    {!! Form::label('titulo', 'titulo del producto') !!}
    {!! Form::text('name', null, ['class' => 'form-control block', 'placeholder' => 'Ingrese el nombre']) !!}

    @error('name')
        <span class="text-danger"><strong>{{ $message }}</strong></span>
    @enderror
</div>


<div class="mb-4">
    {{-- PRIMER PARAMETRO : son los campos del modelo mejor dicho de la tabla --}}
    {!! Form::label('description', 'Description del curso') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control block']) !!}

    @error('description')
        <span class="text-danger"><strong>{{ $message }}</strong></span>
    @enderror
</div>

<div class="row">
    <div class="col-md-3">
        {!! Form::label('category_id', 'Categorias') !!}
        {!! Form::select('category_id', $dataCategories, null, ['class' => 'form-control']) !!}
    </div>

    <div class="col-md-3">
        {!! Form::label('brand_id', 'Marcas') !!}
        {!! Form::select('brand_id', $brands, null, ['class' => 'form-control']) !!}
    </div>

    <div class="col-md-3">
        {!! Form::label('price', 'Precio de compra') !!}
        {!! Form::text('purchase_price', null, [
            'class' => 'form-control',
            'placeholder' => '59.90',
        ]) !!}

        @error('purchase_price')
            <span class="text-danger"><strong>{{ $message }}</strong></span>
        @enderror
    </div>

    <div class="col-md-3">
        {!! Form::label('price', 'Precio de venta') !!}
        {!! Form::text('sale_price', null, ['class' => 'form-control', 'placeholder' => '79.90']) !!}

        @error('sale_price')
            <span class="text-danger"><strong>{{ $message }}</strong></span>
        @enderror
    </div>

</div>
