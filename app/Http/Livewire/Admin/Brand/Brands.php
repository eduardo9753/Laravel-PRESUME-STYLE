<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Models\Brand;
use Livewire\Component;
use phpDocumentor\Reflection\Types\This;

class Brands extends Component
{
    //tabla marca
    public $brands;

    //campos de la tabla brands
    public $brand_id;
    public $name;
    public $status;


    public function mount()
    {
        $this->reload();
    }

    public function create()
    {
        $this->validate(['name' => 'required']);

        Brand::create(['name' => $this->name]);

        $this->reload();
        $this->resetFields();
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        $this->brand_id = $brand->id;
        $this->name = $brand->name;
    }

    public function update()
    {
        $this->validate(['name' => 'required']);

        $brand = Brand::find($this->brand_id);
        $brand->update(['name' => $this->name]);
        $this->reload();
        $this->resetFields();
    }

    public function delete($id)
    {
        $brand = Brand::find($id);
        if ($brand) {
            $brand->delete();
        }
        $this->reload();
    }

    public function reload()
    {
        $this->brands = Brand::where('status', '=', 'ACTIVO')->get();
    }

    public function resetFields()
    {
        $this->brand_id = '';
        $this->name = '';
    }

    public function render()
    {
        return view('livewire.admin.brand.brands');
    }
}
