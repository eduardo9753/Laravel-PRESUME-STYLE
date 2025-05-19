<?php

namespace App\Http\Livewire\Admin\Variant;

use App\Models\Color;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\Size;
use Livewire\Component;

class Variants extends Component
{
    //tabla product
    public $product;
    public $name;

    public $colors;
    public $sizes;

    //campos de la tabla ProductVariant
    public $variant_id;
    public $color_id;
    public $size_id;
    public $stock = 1;
    public $product_id;

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->colors = Color::all();
        //$this->sizes = Size::all();

        $this->initialProduct($product);
        $this->initialColor();
        $this->initialSize();
    }

    public function render()
    {
        return view('livewire.admin.variant.variants');
    }

    public function create()
    {
        $this->validate([
            'color_id' => 'required',
            'size_id' => 'required',
            'stock' => 'required|integer|min:1|max:25',
            'product_id' => 'required|exists:products,id'
        ]);

        $variant = ProductVariant::create([
            'color_id' => $this->color_id,
            'size_id' => $this->size_id,
            'stock' => $this->stock,
            'product_id' => $this->product_id
        ]);

        //actualizacion de datos
        $this->reload($variant);

        //resetear los datos



        session()->flash('message', 'Variante registrada correctamente');
    }

    //eliminar una varianza
    public function delete($id)
    {
        $variant = ProductVariant::find($id);
        if ($variant) {
            $data = $variant;
            $variant->delete();
            $this->reload($data);
        }
    }

    //edita o asignar los valores
    public function edit($id)
    {
        $variant = ProductVariant::find($id);
        $this->variant_id = $variant->id;
        $this->color_id = $variant->color_id;
        $this->size_id = $variant->size_id;
        $this->stock = $variant->stock;
        $this->product_id = $variant->product_id;
    }

    //para actualizar el producto
    public function update()
    {
        $this->validate([
            'color_id' => 'required',
            'size_id' => 'required',
            'stock' => 'required|integer|min:1|max:25',
            'product_id' => 'required|exists:products,id'
        ]);

        $variant = ProductVariant::find($this->variant_id);
        $variant->update([
            'color_id' => $this->color_id,
            'size_id' => $this->size_id,
            'stock' => $this->stock,
            'product_id' => $this->product_id
        ]);
        $this->reload($variant);
        $this->resetFields();
    }

    public function reload($variant)
    {
        $product = Product::find($variant->product_id); //buscamos el id del productos actual
        $this->product = $product;  //le asigamos esa misma informacion
    }

    public function resetFields()
    {
        $this->variant_id = '';
        $this->stock = 1;
        $this->initialColor();
        $this->initialSize();
    }

    //iniciando datos da los select
    public function initialProduct($product)
    {
        $this->product_id = $product->id;
        $this->name = $product->name;
    }

    public function initialColor()
    {
        $this->color_id = Color::orderBy('id', 'asc')->pluck('id')->first();
    }

    public function initialSize()
    {
        // Obtener todas las tallas de la categoría
        $this->sizes = Size::where('subcategory_id', $this->product->subcategory_id)->orderBy('id', 'asc')->get();

        // Obtener el primer ID de la lista
        $this->size_id = $this->sizes->isNotEmpty() ? $this->sizes->first()->id : null;
    }
}
