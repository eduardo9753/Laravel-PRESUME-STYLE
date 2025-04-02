<?php

namespace App\Http\Livewire\Admin\Image;

use App\Models\Product;
use App\Models\ProductImage;
use Livewire\Component;

class Images extends Component
{
    //tabla productos
    public $product;
    public $name;

    //campos de la tabla ProductImage
    public $image_id;
    public $image_url;
    public $product_id;



    public function mount(Product $product)
    {
        $this->product = $product;

        $this->initialProduct($product);
    }

    public function render()
    {
        return view('livewire.admin.image.images');
    }

    public function create()
    {
        $this->validate([
            'image_url' => 'required',
            'product_id' => 'required|exists:products,id'
        ]);

        $image = ProductImage::create([
            'image_url' => $this->image_url,
            'product_id' => $this->product_id,
        ]);

        //actualizacion de datos
        $this->reload($image);
    }

    public function delete($id)
    {
        $image = ProductImage::find($id);
        if ($image) {
            $data = $image;
            $image->delete();
            $this->reload($data);
        }
    }

    public function edit($id)
    {
        $image = ProductImage::find($id);
        $this->image_id = $image->id;
        $this->image_url = $image->image_url;
        $this->product_id = $image->product_id;
    }

    //actualizamos el producto
    public function update()
    {
        $this->validate([
            'image_url' => 'required',
            'product_id' => 'required|exists:products,id'
        ]);

        $image = ProductImage::find($this->image_id);
        $image->update([
            'image_url' => $this->image_url,
            'product_id' => $this->product_id
        ]);

        $this->reload($image);
        $this->resetFields();
    }

    public function reload($image)
    {
        $product = Product::find($image->product_id);
        $this->product = $product;
    }

    public function resetFields()
    {
        $this->image_id = '';
    }

    //iniciando datos del producto
    public function initialProduct($product)
    {
        $this->product_id = $product->id;
        $this->name = $product->name;
    }
}
