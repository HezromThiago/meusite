<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'site_email',
        'site_address',
        'instagram_url',
        'facebook_url',
        'whatsapp_number',
        'whatsapp_message',
        'header_scripts',
        'footer_scripts',
        'favicon_path',
    ];
}
