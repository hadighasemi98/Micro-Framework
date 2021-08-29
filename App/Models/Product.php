<?php

namespace App\Models;

use App\Models\Contracts\MysqlModel;

class Product extends MysqlModel{

    protected $table = "products";
}