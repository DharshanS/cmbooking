<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Role extends Model
{
    //

  protected $fillable=['name','slug','permissions'];

    public function users(){
        return $this->belongsToMany(User::class,"role_users");
    }

    public function hasAccess(array $permissions){
        Log::info("Permissions- 1 ->".$permissions);
//        foreach ($permissions as $permission){
//            if($this->hasPermission($permission)){
//                return true;
//            }
//        }

        return true;
    }


    protected  function hasPermission(string $permission){
        Log::info("Permissions-->".$this->permissions);
        $permissions=json_decode($this->permissions,true);
        return $permissions[$permission]??false;

    }
}
