<?php 
namespace TeamBravo\SuperAdmin\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model{

    protected $fillable =['name','email','password'];

    


}
