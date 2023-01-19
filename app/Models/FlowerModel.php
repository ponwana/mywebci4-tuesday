<?php

namespace App\Models;
use CodeIgniter\Model;

class FlowerModel extends Model
{
    protected $table = 'flower';

    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'detail','image'];
}