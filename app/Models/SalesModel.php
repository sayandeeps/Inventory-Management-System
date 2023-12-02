<?php

namespace App\Models;

use CodeIgniter\Model;

class SalesModel extends Model
{
    protected $table = 'sales';
    protected $primaryKey = 'id';
    protected $allowedFields = ['cname', 'caddress', 'productid', 'totalsum', 'qty', 'created_at','updated_at'];
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';

    public function insertSales($data)
    {
        return $this->insert($data);
    }

    public function getSales($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }

        return $this->find($id);
    }

    public function updateSales($id, $data)
    {
        return $this->where('id', $id)->set($data)->update();
    }
}
