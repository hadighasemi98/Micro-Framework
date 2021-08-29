<?php

namespace App\Models;

use App\Models\Contracts\MysqlModel;

class User extends MysqlModel{

    protected $table = "users";
}

