<?php
use App\Models\Permission;
use App\Models\GrantPermission;
function hasPermission($url){
    
    $url = explode("/",$url);
    $url = $url['0'];
    $permission = Permission::where('slug',$url)->first();
    if(!empty($permission)){
        $role = Auth::user()->userrole;
        $gp = GrantPermission::where('role_id',$role->role_id)->where('permission_id',$permission->id)->first();
        if(!empty($gp)){
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
    
    return true;
}