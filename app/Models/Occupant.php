<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Occupant extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description',
        'note',
        'is_member',
        'is_verified',
    ];

    protected $casts = [
        'is_member' => 'boolean',
        'is_verified' => 'boolean',
    ];

    /**
     * Get the user that admin belongs to.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
