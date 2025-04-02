<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    //tabla categoria
    public $categories;

    //campos de la tabla brands
    public $category_id;
    public $name;
    public $status;

    public function mount()
    {
        $this->reload();
    }

    public function render()
    {
        return view('livewire.admin.category.categories');
    }

    public function create()
    {
        $this->validate(['name' => 'required']);

        Category::create(['name' => $this->name]);

        $this->reload();
        $this->resetFields();
    }

    public function edit($id)
    {
        $brand = Category::find($id);
        $this->category_id = $brand->id;
        $this->name = $brand->name;
    }

    public function update()
    {
        $this->validate(['name' => 'required']);

        $category = Category::find($this->category_id);
        $category->update(['name' => $this->name]);
        $this->reload();
        $this->resetFields();
    }

    public function delete($id)
    {
        $category = Category::find($id);
        if ($category) {
            $category->delete();
        }
        $this->reload();
    }

    public function reload()
    {
        $this->categories = Category::where('status', '=', 'ACTIVO')->get();
    }

    public function resetFields()
    {
        $this->category_id = '';
        $this->name = '';
    }
}
