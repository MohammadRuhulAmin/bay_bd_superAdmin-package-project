<?php 
namespace TeamBravo\SuperAdmin\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TeamBravo\SuperAdmin\Models\Attendence;

use TeamBravo\SuperAdmin\Models\Project;

class User extends Model{

    protected $fillable =['name','email','password'];
    
    public function attendences(){
        return $this->hasMany(Attendence::class);
    }

    public function projects(){
        return $this->belongsToMany(Project::class,'user_projects');
    }
    


}
