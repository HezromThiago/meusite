<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function show()
    {
        return Setting::query()->first();
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'site_name' => ['sometimes', 'string', 'max:120'],
            'site_email' => ['nullable', 'email'],
            'site_address' => ['nullable', 'string', 'max:255'],
            'instagram_url' => ['nullable', 'url'],
            'facebook_url' => ['nullable', 'url'],
            'whatsapp_number' => ['nullable', 'string', 'max:30'],
            'whatsapp_message' => ['nullable', 'string', 'max:255'],
            'header_scripts' => ['nullable', 'string'],
            'footer_scripts' => ['nullable', 'string'],
            'favicon_path' => ['nullable', 'string', 'max:255'],
        ]);

        $settings = Setting::query()->firstOrCreate([]);
        $settings->update($data);

        return $settings;
    }
}
