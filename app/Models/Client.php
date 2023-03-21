<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\facades\DB;
class Client extends Model
{
    use HasFactory;
    public function services(){
        return $this->belongsToMany(Service::class);
        
    }

    public static function ListClientes(){

        $sql = "SELECT *FROM clients";
        $lista = DB::select($sql);
        return ($lista);

    }

}
