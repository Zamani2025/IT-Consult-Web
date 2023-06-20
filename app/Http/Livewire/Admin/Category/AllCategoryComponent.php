<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;

class AllCategoryComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.category.all-category-component')->layout("layouts.admin");
    }
}
