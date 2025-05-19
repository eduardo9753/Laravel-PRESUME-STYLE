<?php

namespace App\Http\Livewire\Admin\Size;

use App\Models\Category;
use App\Models\Size;
use App\Models\Subcategory;
use Livewire\Component;

class Sizes extends Component
{

    //tabla talla
    public $sizes;

    //campos de la tabla sizes
    public $size_id;
    public $name;
    public $subcategory_id;

    public $subcategories;

    public function mount()
    {
        $this->subcategories = Subcategory::all();
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
            'subcategory_id' => 'required|exists:subcategories,id',
        ]);


        Size::create([
            'name' => $this->name,
            'subcategory_id' => $this->subcategory_id
        ]);

        $this->reload();
        $this->resetFields();
    }

    public function edit($id)
    {
        $size = Size::find($id);
        $this->size_id = $size->id;
        $this->name = $size->name;
        $this->subcategory_id = $size->subcategory_id;
    }

    public  function update()
    {
        $this->validate([
            'name' => 'required',
            'subcategory_id' => 'required|exists:subcategories,id',
        ]);
        $size = Size::find($this->size_id);
        $size->update([
            'name' => $this->name,
            'subcategory_id' => $this->subcategory_id
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
        $this->subcategory_id = Subcategory::orderBy('id', 'asc')->pluck('id')->first();
    }

    public function resetFields()
    {
        $this->size_id = '';
        $this->name = '';
    }
}
