<?php

namespace App\Http\Livewire\Admin\Box;

use App\Models\Box;
use Livewire\Component;
use phpDocumentor\Reflection\Types\This;

class Boxes extends Component
{
    //tabla caja
    public $boxes;

    //campos de la tabla caja
    public $box_id;
    public $name;
    public $purchase_price; //precio de compra
    public $sale_price;     //precio de venta
    public $discount = 0;       //descuento
    public $date_today;     //fecha hoy
    public $revenue;        //ganancia
    public $user_id;


    public $totalAmount;

    public function mount()
    {
        $this->reload();
        $this->total();
    }

    public function render()
    {
        return view('livewire.admin.box.boxes');
    }

    public function create()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'purchase_price' => 'required|numeric|min:1|max:300',
            'sale_price' => 'required|numeric|min:1|max:300',
            'discount' => 'nullable|numeric|min:-300|max:300',
        ]);

        Box::create([
            'name' => $this->name,
            'purchase_price' => $this->purchase_price, //precio de compra
            'sale_price' => $this->sale_price, //precio de venta
            'discount' => $this->discount, //descuento
            'date_today' => date('Y-m-d'), //fecha hoy
            'revenue' => $this->revenueSale($this->purchase_price, $this->sale_price), //ganancia
            'user_id' => 1,
        ]);

        $this->reload();
        $this->total();
        $this->resetFields();
    }

    public function delete($id)
    {
        $box = Box::find($id);
        if ($box) {
            $box->delete();
        }
        $this->reload();
        $this->total();
    }

    public function revenueSale($purchase_price, $sale_price)
    {
        if ($sale_price > $purchase_price) {
            $revenue = $sale_price - $purchase_price;
        } else {
            $revenue = "-" . ($purchase_price - $sale_price);
        }

        return $revenue;
    }

    public function reload()
    {
        $this->boxes = Box::where('date_today', '=', date('Y-m-d'))->get();
    }

    public function total()
    {
        $this->totalAmount = Box::where('date_today', '=', date('Y-m-d'))->sum('revenue');
    }

    public function resetFields()
    {
        $this->name = '';
        $this->purchase_price = 0;
        $this->sale_price = 0;
        $this->discount = 0;
    }
}
