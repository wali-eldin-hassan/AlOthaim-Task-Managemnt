<?php

namespace App\Models;

use App\Enums\TaskStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'status', 'assigned_to'];

    protected $casts = [
        'status' => TaskStatus::class,
    ];

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}
