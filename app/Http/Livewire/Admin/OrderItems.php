<?php

namespace App\Http\Livewire\Admin;

use App\Models\Book;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Livewire\Component;

class OrderItems extends Component
{
    public function render()
    {
        $books = Book::all();
        $users = User::all();

        return view('livewire.admin.order-items',[
            'users' => $users,
            'books' => $books,
        ]);
    }
}
