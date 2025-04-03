<?php

namespace App\Http\Controllers\admin\product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function __construct() {}

    //lista de productos
    public function index()
    {
        $products = Product::all(); //cambiar por  los activos
        return view('admin.product.index', [
            'products' => $products
        ]);
    }

    //form para crear producto
    public function create()
    {
        //para laravel collective 
        $dataCategories = Category::pluck('name', 'id');
        $brands = Brand::pluck('name', 'id');
        return view('admin.product.create', [
            'dataCategories' => $dataCategories,
            'brands' => $brands
        ]);
    }

    //para guardar los datos
    public function store(Request $request)
    {
        $request->request->add(['slug' => Str::slug($request->name)]); //PONER EN MINUSCULA Y LOS ESPACION LO RELLENA CON "-"

        //dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'purchase_price' => 'required',
            'sale_price' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
        ]);

        $product = Product::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'purchase_price' => $request->purchase_price,
            'sale_price' => $request->sale_price,
            'user_id' => 1, //auth()->user()->id
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
        ]);

        if ($product) {
            return redirect()->route('admin.product.edit', $product);
        } else {
            echo "producto no guardado";
        }
    }

    public function edit(Product $product)
    {
        //para laravel collective 
        $dataCategories = Category::pluck('name', 'id');
        $brands = Brand::pluck('name', 'id');

        return view('admin.product.edit', [
            'dataCategories' => $dataCategories,
            'brands' => $brands,
            'product' => $product
        ]);
    }
}
