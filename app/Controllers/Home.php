<?php

namespace App\Controllers;
use App\Models\ProductModel;
use App\Models\SalesModel;



class Home extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }
    public function home(): string
    {
        $productModel = new ProductModel();
        $salesModel = new SalesModel();

        $data['products'] = $productModel->getProduct();
        $data['sales'] = $salesModel->getSales();
        return view('welcome_message',$data);
    }


    public function billing(): string
    {
        $productModel = new ProductModel();

        $data['products'] = $productModel->getProduct();
        return view('billing', $data);
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
        

        return view('welcome_message');
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

public function cartsearchproduct(): string
{
    $productModel = new ProductModel();

    $searchTerm = $this->request->getPost('search');

    if (!empty($searchTerm)) {
        $data['products'] = $productModel->like('pname', $searchTerm)->findAll();
    } else {
        $data['products'] = $productModel->getProduct();
    }
    return view('billing', $data);
}

public function additem()
{
    // Retrieve rowid sent through AJAX
    $rowid = $this->request->getPost('rowid');
    $qty = $this->request->getPost('qty');
    
    $cart = \Config\Services::cart();
    $cartitem = $cart->contents();
    $productModel = new ProductModel();
    $product_id=$cartitem[$rowid]["id"];
    $originalProduct = $productModel->getProduct($product_id);
    $orgqty = $originalProduct['quantity'];

    $qty=min($qty+1,$orgqty);
  

    // Load the Cart library
    

    // Update the quantity of the specified item by decrementing by 1
    $updated = $cart->update(array(
        'rowid'   => $rowid,
        'qty'     => $qty // Decrement the quantity by 1
    ));

    // Get updated cart contents
    $cartContents = $cart->contents();

    // Prepare and send JSON response with updated cart contents
    return $this->response->setJSON($cartContents);
}

public function removeitem()
{
    // Retrieve rowid sent through AJAX
    $rowid = $this->request->getPost('rowid');
    $qty = $this->request->getPost('qty');

    $qty=max($qty-1,1);

    // Load the Cart library
    $cart = \Config\Services::cart();

    // Update the quantity of the specified item by decrementing by 1
    $updated = $cart->update(array(
        'rowid'   => $rowid,
        'qty'     => $qty // Decrement the quantity by 1
    ));

    // Get updated cart contents
    $cartContents = $cart->contents();

    // Prepare and send JSON response with updated cart contents
    return $this->response->setJSON($cartContents);
}

    
public function addcartproduct()
{
    // Retrieve data sent through AJAX
    $product_id = $this->request->getPost('product_id');
    $product_name = $this->request->getPost('product_name');
    $product_price = $this->request->getPost('product_price');
    
    $product_status = $this->request->getPost('product_status');
    $product_category = $this->request->getPost('product_category');
    $product_orgqty = $this->request->getPost('product_orgqty');
    $product_qty = $this->request->getPost('product_qty');

    // Load the Cart library
    $cart = \Config\Services::cart();

    // Insert the received data into the cart
    $inserted = $cart->insert(array(
        'id'      => $product_id,
        'qty'     => $product_qty,
        'price'   => $product_price,
        'name'    => $product_name,
        'status'  => $product_status, // Assuming 'status' is the correct field name
        'category'  => $product_category,
        'orgqty'  => $product_orgqty
    ));
    

    // Get updated cart contents
    $cartContents = $cart->contents();
    // var_dump($cartContents);die();
  


 


    // Prepare JSON response
   

    // Send JSON response
    return $this->response->setJSON($cartContents);
}





 function destroy()
 {
    $cart = \Config\Services::cart();
    $cart->destroy();
    $cartContents = $cart->contents();
    return $this->response->setJSON($cartContents);

 }

 function submitcart()
 {
    $totalSum = $this->request->getPost('totalSum');
    $originalqty = $this->request->getPost('originalqty');
    $cname= $this->request->getPost('cname');
    $caddress= $this->request->getPost('caddress');
    $cart = \Config\Services::cart();
    $cartContents = $cart->contents();
    $productModel = new ProductModel();
    $salesModel = new SalesModel();

    

    


    foreach ($cartContents as $item){
        $datainsales = [
            'cname' => $this->request->getPost('cname'),
            'caddress' => $this->request->getPost('caddress'),
            'productid' => $item['id'],
            'totalsum' => $item['subtotal'],
            'qty' => $item['qty'],
            'category' => $item['category'],
            'pname' => $item['name']
        ];
        
        $salesModel->insertSales($datainsales);
         $originalProduct = $productModel->getProduct($item['id']); // Fetch the original product
    $originalqty = $originalProduct['quantity']; // Get the original quantity

    $newqty = $originalqty - $item['qty'];

    // Update the product quantity
    $productModel->updateProduct($item['id'], ['quantity' => $newqty]);
    if( $newqty == 0){
        $productModel->updateProduct($item['id'], ['status' => 0]);
    }


    }
    $data=[
        'orderdetails' => $cartContents,
        'cname' => $this->request->getPost('cname'),
        'caddress' => $this->request->getPost('caddress'),
        'totalSumcart' => $totalSum,
        'totalcount' => $cart->totalItems()
    ];
    $cart->destroy();

    
    return view('ordersummary',$data);
 }

 function ordersummary()
 {
   return view('ordersummary');

 }


}