<?php

namespace TeamBravo\SuperAdmin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use TeamBravo\SuperAdmin\Models\User;

class Project extends Model
{
    use HasFactory;
    protected $fillable=[
        'name','starting_date','ending_date','current_date','current_status',
        'budget','project_documents'
    ];

    public function users(){
        return $this->belongsToMany(User::class,'user_projects');
    }


}
