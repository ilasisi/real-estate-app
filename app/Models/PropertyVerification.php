<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyVerification extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'property_document' => 'array'
    ];

    protected $fillable = [
        'property_id',
        'document_type',
        'property_document',
        'description'
    ];


    public function property()
    {
        return $this->belongsTo('App\Models\Property');
    }
}
