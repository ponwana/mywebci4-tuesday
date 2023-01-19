<?php

namespace App\Controllers;
use App\Models\FlowerModel;

class FlowerController extends BaseController
{
    public function index()
    {
        $FlowerModel = new FlowerModel();
        $data['persons'] = $FlowerModel->orderBy('id', 'DESE')->findAll();
        
        return view('templates/header')
            .view('flower/flowerlist',$data)
            .view('templates/footer');
    }
}
?>