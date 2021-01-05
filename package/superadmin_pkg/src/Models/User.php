<?php 
namespace TeamBravo\SuperAdmin\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TeamBravo\SuperAdmin\Models\userDetail;
class User extends Model{

    protected $fillable =['name','email','password'];

    public function userDetails(){
        return $this->hasOne(Userdetail::class);
    }


}
