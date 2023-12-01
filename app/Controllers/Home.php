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
        $productModel = new ProductModel();

        $data['products'] = $productModel->getProduct();
        return view('searchproduct', $data);
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


    public function update_product($id)
{
    $productModel = new ProductModel();

    if ($this->request->getMethod() === 'post') {
        $productId = $id;
        $status=($this->request->getPost('status') == "in_stock")? 1 : 0;
        date_default_timezone_set('Asia/Kolkata'); 

        $currentDateTime = date('Y-m-d H:i:s');
        $dataToUpdate = [
            'quantity' => $this->request->getPost('quantity-input'),
            'price' => $this->request->getPost('price'),
            'status' => $status,
            'updated_at' => $currentDateTime,
 
        ];
        // Perform the update operation
        $productModel->updateProduct($productId, $dataToUpdate);
    }

    return redirect()->to('searchproduct'); // Redirect back to the product listing page
}


public function insearchproduct(): string
{
    $productModel = new ProductModel();

    $searchTerm = $this->request->getPost('search');

    if (!empty($searchTerm)) {
        $data['products'] = $productModel->like('pname', $searchTerm)->findAll();
    } else {
        $data['products'] = $productModel->getProduct();
    }
    return view('searchproduct', $data);
}


}