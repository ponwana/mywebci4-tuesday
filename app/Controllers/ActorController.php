<?php

namespace App\Controllers;
use App\Models\ActorModel;

class ActorController extends BaseController
{
    public function index()
    {
        $ActorModel = new ActorModel();
        $data['persons'] = $ActorModel->orderBy('id', 'DESE')->findAll();
        
        return view('templates/header')
            .view('actor/actorlist',$data)
            .view('templates/footer');
    }
}
