<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoPost extends Model
{
    use HasFactory;

        public function videocategory()
    {
      return $this->belongsTo(VideoCategory::class, 'postcategory_id');
    }

    public function admin()
    {
      return $this->belongsTo(Admin::class, 'admin_id');
    }
}
