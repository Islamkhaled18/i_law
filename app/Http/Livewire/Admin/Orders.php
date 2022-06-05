<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\ShippingAddress;
use Livewire\Component;

class Orders extends Component
{
    protected $listeners =['order'];
    public $search;

    // search(trim($this->search))->

    public function render()
    {
        $search = '%'.$this->search . '%';
        $orders = Order::where('order_no','LIKE',$search)
                ->orWhere('created_at','LIKE',$search)
                ->orderBy('id','desc')->get();

        return view('livewire.admin.orders',['orders'=> $orders]);
    }

    

    public function deleteOrderConfirm($id){
        $info = Order::find($id);
        $this->dispatchBrowserEvent('SwalOrderConfirm',[
            'title'=>'Are you sure?',
            'html'=>'You want to delete <strong>'.$info->order_no.'</strong>',
            'id'=>$id
        ]);
    }


    public function order($id){
        $del =  Order::find($id)->delete();
        if($del){
            $this->dispatchBrowserEvent('ordered');
        }
    }
}
