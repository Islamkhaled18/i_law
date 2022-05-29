<?php

namespace App\Http\Livewire\Admin;

use App\Models\Permission;
use App\Models\Role;
use Livewire\Component;

class Permissions extends Component
{
    public $name,$guard;
 
    public $upd_name,$upd_guard,$permission_id;
    

    protected $listeners =['vvv'];

    public function render()
    {
        return view('livewire.admin.permissions',[
            'permissions'=>Permission::orderBy('id','desc')->paginate(5),
        ]);
    }

    public function OpenAddPermissionsModal(){
        $this->name = '';
        $this->guard = '';
        
        $this->dispatchBrowserEvent('OpenAddPermissionsModal');
    }

    public function savePermission(){
        $this->validate([
            'name'=>'required',
            'guard'=>'required',
            
        ]);

        $permission = Permission::create([
            'name'=>$this->name,
            'guard'=>$this->guard,
        ]);

       

        if($permission){
            $this->dispatchBrowserEvent('CloseAddPermissionModal');
        }
    }

    public function OpenEditPermissionModal($id){
        $info = Permission::find($id);
        $this->upd_name = $info->name;
        $this->upd_guard = $info->guard;
        $this->permission_id = $info->id;
        $this->dispatchBrowserEvent('OpenEditPermissionModal',[
            'id'=>$id
        ]);
    }

    public function updatePermission(){
        $permission_id = $this->permission_id;
        $this->validate([
            'upd_name'=>'required',
            'upd_guard'=>'required',
            'upd_permission'=>'required'
        ],[
            'upd_name.required'=>'Enter name',
            'upd_guard.required'=>'Enter name',
            'upd_permission.required'=>'Enter name',
            
        ]);

        $permission = Permission::find($permission_id);
        $permission->name=$this->upd_name;
        $permission->upd_guard=$this->guard;
        $permission->permission_id=$this->upd_permission;

        if($permission){
            $this->dispatchBrowserEvent('CloseEditPermissionModal');
        }
    }

    public function deletePermissionConfirm($id){
        $info = Permission::find($id);
        $this->dispatchBrowserEvent('SwalpermissionConfirm',[
            'title'=>'Are you sure?',
            'html'=>'You want to delete <strong>'.$info->name.'</strong>',
            'id'=>$id
        ]);
    }


    public function vvv($id){
        $del =  Permission::find($id)->delete();
        if($del){
            $this->dispatchBrowserEvent('vvvd');
        }
    }

}
