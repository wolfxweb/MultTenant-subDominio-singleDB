<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable=['men_titulo_menu','men_titulo','men_rota ','men_apelido-rota','men_icone'];
}
