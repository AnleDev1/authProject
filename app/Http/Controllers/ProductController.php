<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /*METODO QUE DEVUELVE TODOS LOS PRODUCTOS REGISTRADOS*/
    public function getProducts() {
        $products = Product::all();
        if ($products->isEmpty()) {
            return response()->json(['message' => 'No hay productos registrados'], 404);
        }
        return response()->json(['products' => $products], 200);
    }

    /*METODO QUE DEVUELVE UN PRODUCTO MEDIANTE EL ID*/
    public function getProductById($id){
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'El producto no existe'], 404);
        }
        return response()->json(['product' => $product], 200);
    }

    /*METODO QUE REGISTRA UN PRODUCTO NUEVO EN LA BASE DE DATOS*/
    public function addProduct(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|min:2|max:100',
            'price' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
        Product::create([
            'name' => $request->get('name'),
            'price' => $request->get('price')
        ]);
        return response()->json(['message' => 'Producto agregado correctamente'], 201);
    }

    /*ESTA FUNCION ACTUALIZA UN PRODUCTO YA REGISTRADO */
    public function updateProductById(Request $request, $id) {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'El producto no existe'], 404);
        }
         $validator = Validator::make($request->all(),[
            'name' => 'sometimes|string|min:2|max:100',
            'price' => 'sometimes|numeric',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
        if ($request->has('name')) {
            $product->name = $request->name;
        }
        if ($request->has('price')) {
            $product->price = $request->price;
        }
        $product->update();
        return response()->json(['message' => 'Producto Actualizado'], 200);
    }

    /*ELIMINA UN PRODUCTO*/
    public function deleteProductById($id) {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'El producto no existe'], 404);
        }
        $product->delete();
    }

}
