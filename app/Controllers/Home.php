<?php

namespace App\Controllers;
use App\Models\ProductModel;


class Home extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }
    public function home(): string
    {
        return view('welcome_message');
    }
    public function addproduct(): string
    {
        return view('addproducts');
    }
    public function searchproduct(): string
    {
        return view('searchproduct');
    }
    public function storeProduct()
    {
        $productModel = new ProductModel();
        $status=($this->request->getPost('status') == "in_stock")? 1 : 0;
        $data = [
            'pname' => $this->request->getPost('name'),
            'quantity' => $this->request->getPost('item-weight'),
            'price' => $this->request->getPost('price'),
            'category' => $this->request->getPost('brand'),
            'status' => $status,
            'description' => $this->request->getPost('description')
        ];
        $productModel->insertProduct($data);
        

        return redirect()->to('welcome_message');
    }
}
