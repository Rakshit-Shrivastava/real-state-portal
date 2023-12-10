<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Broker extends Model
{
    use HasFactory;
    protected $table = 'brokers';
    protected $primaryKey = 'id';
    protected $fillable = array('name', 'contact', 'email', 'experience', 'status', 'property', 'commission');
}
