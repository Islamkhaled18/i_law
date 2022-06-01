<?php

namespace App\Http\Livewire\Admin;

use App\Models\Permission;
use App\Models\Role;
use Livewire\Component;

class Roles extends Component
{
    public $name;
    public $permission =[];
    public $upd_name,$role_id;
    public $upd_permission = [];
    protected $listeners =['rrr'];

    public function render()
    {
        return view('livewire.admin.roles',[
            'roles'=>Role::orderBy('id','desc')->get(),
            'permissions'=>Permission::orderBy('id','asc')->get(),
        ]);
    }
    public function OpenAddRolesModal(){
        $this->name = '';
        $this->permission ='';
        $this->dispatchBrowserEvent('OpenAddRolesModal');
    }
    public function saveRole(){
        $this->validate([
            'name'=>'required',
            'permission'=>'required'
        ]);

        $role = Role::create([
            'name'=>$this->name,            
        ]);
        $permission = $this->permission;
        $role->permissions()->attach($permission);
        if($role){
            $this->dispatchBrowserEvent('CloseAddRoleModal');
        }
    }
    public function OpenEditRoleModal($id){
        $info = Role::find($id);
        $this->upd_name = $info->name;
        $this->role_id = $info->id;
        $this->dispatchBrowserEvent('OpenEditRoleModal',[
            'id'=>$id
        ]);
    }
    public function updateRole(){
        $role_id = $this->role_id;
        $this->validate([
            'upd_name'=>'required',            
        ]);

        $role = Role::find($role_id);
        $role->name = $this->upd_name;        
        $permission = $this->upd_permission;
        $role->permissions()->sync($permission);

        if($role){
            $this->dispatchBrowserEvent('CloseEditRoleModal');
        }
    }
    public function deleteRoleConfirm($id){
        $info = Role::find($id);
        $this->dispatchBrowserEvent('SwalRoleConfirm',[
            'title'=>'Are you sure?',
            'html'=>'You want to delete <strong>'.$info->name.'</strong>',
            'id'=>$id
        ]);
    }


    public function rrr($id){
        $del =  Role::find($id)->delete();
        if($del){
            $this->dispatchBrowserEvent('rrrd');
        }
    }
}
