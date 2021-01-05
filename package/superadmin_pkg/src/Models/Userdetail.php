<?php 

namespace TeamBravo\SuperAdmin\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TeamBravo\SuperAdmin\Models\User;
class Userdetail extends Model{

    protected $fillable =[
        'weight','phone','address','salary','photo','cv','appoinment_letter','user_type'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

}

