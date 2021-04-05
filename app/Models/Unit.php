<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number',
        'suffix',
    ];

    /**
     * The occupants that live in this unit.
     */
    public function occupants()
    {
        return $this->belongsToMany(Occupant::class);
    }

    /**
     * The unit group that this unit belongs to.
     */
    public function unitgroup()
    {
        return $this->belongsTo(UnitGroup::class);
    }    
}
