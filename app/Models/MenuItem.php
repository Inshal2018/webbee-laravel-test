<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public function child_item()
    {
        return $this->hasMany($this, 'parent_id');
    }

    public function child_items()
    {
        return $this->child_item()->with('child_items');
    }
}
