<?php

// app/Models/Contact.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Bu alanlara izin veriyoruz
    protected $fillable = [
        'name',
        'email',
        'message',
    ];
}

