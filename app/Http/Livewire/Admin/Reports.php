<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Report;
use Carbon\Carbon;
use Livewire\Component;

class Reports extends Component
{    
    
    protected $listeners =['report'];
    public $search;


    public function render()
    {
        $search = '%'.$this->search . '%';
        $orderItems = OrderItem::whereBetween('created_at', 
        [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->where('order_id','LIKE',$search)
        ->orWhere('created_at','LIKE',$search)
        ->orWhere('user_id','LIKE',$search)
        ->orWhere('book_id','LIKE',$search)
        ->orderBy('id','desc')->latest()->take(25)->get();    

        return view('livewire.admin.reports',[
            'orderItems'=>$orderItems
        ]);
    }

    public function deleteReportConfirm($id){
        $info = OrderItem::find($id);
        $this->dispatchBrowserEvent('SwalReportConfirm',[
            'title'=>'Are you sure?',
            'html'=>'You want to delete <strong>'.$info->order->order_no .'</strong>',
            'id'=>$id
        ]);
    }
    public function report($id){
        $del =  OrderItem::find($id)->delete();
        if($del){
            $this->dispatchBrowserEvent('reportd');
        }
    }
}
