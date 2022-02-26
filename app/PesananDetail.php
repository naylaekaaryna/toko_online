<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    public function barang()
   {
      return $this->belongsTo('App\barang','barang_id', 'id');
   }


}
