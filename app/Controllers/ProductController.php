<?php

namespace App\Controllers;

use App\Controllers\BaseController;
//use App\Models\ProductModel;

class ProductController extends BaseController
{
    private $product;

    public function __construct()
    {
        $this->product = new \App\Models\ProductModel(); 
    }

    public function delete($id)
    {
        $this->product->delete($id);
        return redirect()->to('/product');
    }

    public function edit($id)
    {
        $data = [
            'product' => $this->product->findALL(),
            'pro' => $this->product->where('id', $id)->first(),
        ];
        return view('products', $data);
    }


    public function save()
    {
        $id =$_POST['id'];
        $data = [
            'code' => $this->request->getVar('code'),
            'name' => $this->request->getVar('name'),
            'quantity' => $this->request->getVar('quantity'),
        ];
        if($id!= null){
            $this->product->set($data)->where('id', $id)->update();
        }else{
        $this->product->save($data);
     }
        return redirect()->to('/product');
    }

    public function product($product)
    {
        echo $product; 
    }

    public function Kenzaki1973()
    {
        $data['product'] = $this->product->findAll();
        return view('products', $data);
    }

    public function index()
    {
        // 
    }
}