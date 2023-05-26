<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $this->data['pageTitle'] = 'Beranda';
        return view('landing-page.pages.home', $this->data);
    }
    
    public function checkProducts()
    {
        $this->data['pageTitle'] = 'Cek Produk';
        $this->data['products'] = Product::paginate(10);
        // dd($this->data['products']);die;
        return view('landing-page.pages.check-product', $this->data);
    }
    
    public function addProduct(Request $request)
    {
        $params = $request->all();
        $params['product_stock'] = str_replace(".", "", $params['product_stock']);
        $params['product_price'] = str_replace(".", "", $params['product_price']);

        if (Product::create($params)) {
            return redirect()->route('check-products')->with('success', 'Produk berhasil ditambahkan!');
        } else {
            return redirect()->route('check-products')->with('failed', 'Produk gagal ditambahkan!');
        };
    }
    
    public function getProduct(int $id)
    {
        $product =Product::find($id);

        if (!$product) {
            return;
        }

        return response()->json($product, 200);
    }

    public function editProduct(Request $request, int $id)
    {
        $params = $request->all();
        $params['product_stock'] = str_replace(".", "", $params['product_stock']);
        $params['product_price'] = str_replace(".", "", $params['product_price']);

        if (Product::create($params)) {
            return redirect()->route('check-products')->with('success', 'Produk berhasil ditambahkan!');
        } else {
            return redirect()->route('check-products')->with('failed', 'Produk gagal ditambahkan!');
        };
    }
}
