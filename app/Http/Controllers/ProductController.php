<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {         
         $balik = Product::where('status','Y')->get(); 
         return view("/wew", ['product'=> $balik]);     
       // return "hello index";
    }
    public function homepage()
    {
       // return "hello"
        $pasa = Product::where('status','Y')->get(); 
        return view("homepage", ['productlist'=> $pasa]); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/dashboard/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Validate the inputs
         $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'file' => 'required',
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('product', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $product = new Product([
                "name" => $request->get('name'),
                "price" => $request->get('price'),
                "description" => $request->get('description'),
                "file_path" => $request->file->hashName()
            ]);
            $product->save(); // Finally, save the record.
        }

        return redirect('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return "Hello show";
    }

    public function updateproduct(Request $request)
    {  
        $request->validate([
            'name' => 'required',
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('product', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
         
         $product = DB::table('products')
         ->where('id', $request->id)
         ->update([
          'name' => $request['name'],
          'price' => $request['price'],
          'description' => $request['description'],
          "file_path" => $request->file->hashName(),
          ]);  
         return redirect('products'); 
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Product::find($id);
        return view("/dashboard/edit_product", ['data'=> $data]);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updates($id)
    {
        //return "Hello updates";
        // $data = DB::table('products')
        //         ->where('id', $id)
        //         ->update(['status' =>'N']);
        $data=Product::find($id);
        $data->update(['status' =>'N']); 
         if($data == true){
             return redirect('products');
            return response()->json('Success', 202);
         }else{
            return response()->json('not found', 404);
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 
        $data=Product::find($id);
        $data->delete();
        return redirect('list');
    }

        public function shop($id)
    {
       // return "hello" 
            // if(isset(session(['cart' => 'carted'])))
            // {
            //     return "true";
            // }
            // else
            // {
            //     return "fale";
            // }
            
                // $pasa = Product::where('id', $id)->get(); 
                // return view("shop", ['cartitem'=> $pasa]);     
        }
       


}
