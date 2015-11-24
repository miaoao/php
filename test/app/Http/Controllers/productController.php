<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests ;
use App\Models;
use App\Models\Product;
use Illuminate\Http\Request as Request;
use App\Facades\MyMailFacades as Mymail;
abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
class productController extends Controller
{
    public function index()
    {
        $products = Product::all();

//        $products = ['id'=>1,'product'=>'a','price'=>11];
        return view('product.index', ['products' => $products]);
    }

    public function show($id)
    {
        $p =  Product::find($id);
        return view('product.show', ['product' => $p]);
    }

    public function edit($id = null)
    {
        if (isset($id))
         $p = Product::find($id);
        else $p = new Product();
        return view('product.edit', ['product' => $p]);
    }

    public function save(request $request, $id = null)
    {
        if (isset($id)) {
            product::updateorcreate(['id' => $id], $request->input());
        } else product::create($request->input());
        return redirect("/products");
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect("/products");
    }
    public function  testsend(){
        Mymail::send(",yes it is dent by Mymail");
    }
    public function testreceive(){
        Mymail::receive (",ok receive through Mymail");
    }
}