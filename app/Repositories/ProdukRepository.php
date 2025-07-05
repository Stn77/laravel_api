<?php

namespace App\Repositories;

use App\Interfaces\ProdukRepositoryInterface;
use App\Models\Produk;

class ProdukRepository implements ProdukRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        
    }

    public function index(){
        return Produk::all();
    }

    public function getById($id){
       return Produk::findOrFail($id);
    }

    public function store(array $data){
       return Produk::create($data);
    }

    public function update(array $data,$id){
       return Produk::whereId($id)->update($data);
    }
    
    public function delete($id){
       Produk::destroy($id);
    }
}
