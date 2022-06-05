<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Report;
use Livewire\Component;

class Reports extends Component
{
    public function render()
    {
        $orderItems =OrderItem::all();
        return view('livewire.admin.reports',[
            'orderItems'=>$orderItems
        ]);
    }
}
