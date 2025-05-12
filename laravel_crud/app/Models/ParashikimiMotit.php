<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParashikimiMotit extends Model
{
	public $timestamps = false;
    protected $table = 'crudapp_parashikimetemotit';
    protected $primaryKey = 'id';
    protected $fillable = ['qytetiparashikuar_umpm', 'temperatura_umpm', 'lageshtia_umpm'];

}
