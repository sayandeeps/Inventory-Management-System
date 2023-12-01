<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'tbl_product';
    protected $primaryKey = 'id';
    protected $allowedFields = ['pname', 'quantity', 'price', 'category', 'status', 'description', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';

    public function insertProduct($data)
    {
        return $this->insert($data);
    }

    public function getProduct($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }

        return $this->find($id);
    }

    // public function updateProduct($id, $data)
    // {
    //     return $this->update($id, $data);
    // }
    public function updateProduct($id, $data)
{
    return $this->where('id', $id)->set($data)->update();
}

}
