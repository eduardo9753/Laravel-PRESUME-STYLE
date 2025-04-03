<?php

namespace App\Http\Livewire\Admin\Size;

use App\Models\Category;
use App\Models\Size;
use Livewire\Component;

class Sizes extends Component
{

    //tabla talla
    public $sizes;

    //campos de la tabla sizes
    public $size_id;
    public $name;
    public $category_id;

    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
        $this->reload();
        $this->initialCategory();
    }

    public function render()
    {
        return view('livewire.admin.size.sizes');
    }

    public function create()
    {
        $this->validate([
            'name' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);


        Size::create([
            'name' => $this->name,
            'category_id' => $this->category_id
        ]);

        $this->reload();
        $this->resetFields();
    }

    public function edit($id)
    {
        $size = Size::find($id);
        $this->size_id = $size->id;
        $this->name = $size->name;
        $this->category_id = $size->category_id;
    }

    public  function update()
    {
        $this->validate([
            'name' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);
        $size = Size::find($this->size_id);
        $size->update([
            'name' => $this->name,
            'category_id' => $this->category_id
        ]);
        $this->reload();
        $this->resetFields();
    }

    public function delete($id)
    {
        $size = Size::find($id);
        if ($size) {
            $size->delete();
        }
        $this->reload();
    }

    public function reload()
    {
        $this->sizes = Size::all();
    }

    public function initialCategory()
    {
        $this->category_id = Category::orderBy('id', 'asc')->pluck('id')->first();
    }

    public function resetFields()
    {
        $this->size_id = '';
        $this->name = '';
    }
}
