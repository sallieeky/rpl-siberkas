<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormulirKeteranganKurangMampu extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    public function admin()
    {
        return $this->belongsTo(User::class, "admin_id", "id");
    }
}
