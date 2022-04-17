<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

        public function category()
    {
      return $this->belongsTo(Category::class, 'category_id');
    }

    public function admin()
    {
      return $this->belongsTo(Admin::class, 'admin_id');
    }

        public function division()
    {
      return $this->belongsTo(Division::class, 'division_id');
    }
}
