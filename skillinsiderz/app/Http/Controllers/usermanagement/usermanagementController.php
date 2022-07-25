<?php

namespace App\Http\Controllers\usermanagement;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\Role;
use App\Models\GrantPermission;
use App\Models\User;
use App\Models\userrole;
class usermanagementController extends Controller
{
    public function create(Request $request){
        $roles = Role::all();
        return view('admin.usermanagement.adduser',compact('roles'));
    }
    public function users(){
        $users = userrole::orderby('id','desc')->get();
        return view('admin.usermanagement.users',compact('users'));
    }
    public function user_save(Request $request){
        $validated = $request->validate([
            'image'  => 'required',
            'name' => 'required',
            'email'  => 'required|unique:users',
            'phone'  => 'required',
            'role'  => 'required',
            'description'  => 'required',
            'password'  => 'required|confirmed|min:6',
        ]);
        if($request->has('image')){
            $imageName = time().'.'.$request->image->extension(); 
            $img   = ImageManagerStatic::make($request->image)->encode('jpg');
            Storage::disk('public')->put($imageName, $img);
        } else {
            $image = "";
        }

        $user = new User;
        $user->thumbnail = "storage/".$imageName;
        $user->name  = $request->name;
        $user->email = $request->email;
        $user->desrciption = $request->description;
        $user->phone = $request->phone;
        $user->is_admin = 1;
        $user->password = Hash::make($request->password);
        $user->save();
        $role = new userrole;
        $role->user_id = $user->id;
        $role->role_id = $request->role;
        $role->save();
        return redirect()->back()->with('message','Succesfully Added User');
    }
    public function update_user(Request $request,$id){
        if($request->has('image')){
            $imageName = time().'.'.$request->image->extension(); 
            $img = ImageManagerStatic::make($request->image)->encode('jpg');
            Storage::disk('public')->put($imageName, $img);
        } else {
            $image = "";
        }
        $update = user::where('id',$id)->first();
        $update->thumbnail = "storage/".$imageName;
        $update->name = $request->uname;
        $update->email = $request->uemail;
        $update->phone = $request->uphone;
        $update->desrciption = $request->description;
        $update->save();
        return redirect()->back();
    }

    //
    public function permissions(){
        $permissions = permission::orderby('id','desc')->get();
        return view('admin.usermanagement.permission',compact('permissions'));
    }
    public function permissionsave(Request $request){
     $validated = $request->validate([
         'title'  => 'required',
         'slug'  => 'required',
         'route_name'  => 'required',
     ]);
     //return $request;
     $permission = new \App\Models\Permission();
     $permission->name = $request->title;
     $permission->slug = $request->slug;
     $permission->route_name = $request->route_name;
     $permission->save();
     return redirect()->back()->with('message','Permission Added Succesfully');
    }
    public function editpermission($id){
        $permission = \App\Models\Permission::find($id);
        $permissions = \App\Models\Permission::orderby('id','desc')->get();
        return view('admin.usermanagement.editpermission', compact('permissions','permission'));
    }

    public function updatepermission($id , Request $request){

        $permission = \App\Models\Permission::find($id);
        $permission->name = $request->title;
        $permission->slug = $request->slug;
        $permission->route_name = $request->route_name;
        $permission->save();
        return redirect(route('permissions'))->with('message','Permission Updated Succesfully');
    }

    public function deletepermission($id){

        $permission = \App\Models\Permission::find($id);
        $permission->delete();
        return redirect()->back()->with('message','Permissoin Deleted Succesfully');
    }
    public function roles(){
        $roles = Role::orderby('id','desc')->get();
        return view('admin.usermanagement.role',compact('roles'));
    }
    public function rolesave(Request $request){
        $validated = $request->validate([
            'title'  => 'required',
            'check'  => 'required',
        ]);
        $role = new \App\Models\Role();
        $role->name = $request->title;
        $slug = strtolower($request->title);
$slug = preg_replace('/\s+/', '-', $slug);
        $role->slug = $slug;
        $role->status = $request->check;
        $role->save();
        return redirect()->back()->with('message','Role Added Successfully');
    }
    // update hostel
    public function updaterole($id, Request $request){
        $validated = $request->validate([
            'title'  => 'required',
            'check'  => 'required',
        ]);
        $role = \App\Models\Role::find($id);
        $role->name = $request->title;
        $slug = strtolower($request->title);
        $slug = preg_replace('/\s+/', '-', $slug);
        $role->slug = $slug;
        $role->status = $request->check;
        $role->save();
        return redirect(route('roles'))->with('message','Role Added Successfully');
    }

    public function editrole($id){
        $role = \App\Models\Role::find($id);
        $roles = Role::orderby('id','desc')->get();
        return view('admin.usermanagement.editrole', compact('role','roles'));
    }

    public function deleterole($id){

        $role = \App\Models\Role::find($id);
        $role->delete();
        return redirect()->back()->with('message','Role Deleted Successfully');
        
    }

    public function assignpermissions($id){
        $permissions = \App\Models\Permission::orderby('id','desc')->get();
        $role = \App\Models\Role::where('id',$id)->first();
        $role_permission = GrantPermission::where('role_id',$role->id)->get();
        $grant_permission = array();
       foreach ($role_permission as $g_permission){
           $grant_permission[] = $g_permission->permission_id;
       }
        return view('admin.usermanagement.permissionlist', compact('permissions','role_permission','role','grant_permission'));
    }
    // role permission ..
    public function assignpermission($id,Request $request){ 
            if(!empty($request->permission)){
                \App\Models\GrantPermission::where('role_id',$id)->delete();
                foreach($request->permission as $permission){
                    $grant_permission = new \App\Models\GrantPermission();
                    $grant_permission->role_id = $id;
                    $grant_permission->permission_id = $permission;
                    $grant_permission->save();
                        
                }    
            } else  {
                \App\Models\GrantPermission::where('role_id',$id)->delete();
                return redirect()->back();
            }
            return redirect()->back()->with('success','Successfully Saved');
    }
}
