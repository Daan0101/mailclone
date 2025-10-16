<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class MailServerController extends Controller
{
    protected $baseUrl;
    protected $admin;
    protected $password;

    public function __construct()
    {
        $this->baseUrl = env('MIAB_HOST');
        $this->admin = env('MIAB_ADMIN');
        $this->password = env('MIAB_ADMIN_PASSWORD');
    }

    public function createMailboxForUser()
    {
        $user = Auth::user();

        $mailPass = Str::random(32);

        $response = Http::withOptions(['verify' => false])
            ->withBasicAuth($this->admin, $this->password)
            ->post("{$this->baseUrl}/admin/mail/users/add", [
                'email'    => $user->name,
                'password' => $mailPass,
            ]);

        if ($response->failed()) {
            return response()->json(['error' => 'Failed to create mailbox.'], 500);
        }

        if ($response->json()['status'] !== 'success') {
            return response()->json(['error' => 'Mailbox creation was not successful.'], 500);
        }
    }
}
