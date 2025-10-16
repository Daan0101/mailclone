<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Http\Controllers\MailServerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Attributes\Validated;

class Register extends Component
{
    // public function register()
    // {

    //     $user = User::create([
    //         'name' => 'test',
    //         'password' => 'RsGwAxZHqm5q',
    //     ]);

    //     Auth::login($user);

    //     $mailPass = Str::random(32);

    //     $response = Http::withOptions(['verify' => false])
    //         ->withBasicAuth(env('MIAB_ADMIN'), env('MIAB_ADMIN_PASSWORD'))
    //         ->asForm()
    //         ->post(env('MIAB_HOST') . '/admin/mail/users/add', [
    //             'email'    => $user->name . '@privmail.lol',
    //             'password' => $mailPass,
    //         ]);

    //     if ($response->failed()) {
    //         return back()->withErrors(['mail' => 'Failed to create mailbox.']);
    //     }

    //     dd($response->status(), $response->body());
    // }

    #[Validate('required|string|max:255|unique:users,email')]
    public $email;

    #[Validate('required|string|min:8|max:255')]
    public $password;

    public function __construct()
    {
        
    }

    public function createMiaBMailBox($user, $mailPass)
    {
        $response = Http::withOptions(['verify' => false])
            ->withBasicAuth(env('MIAB_ADMIN'), env('MIAB_ADMIN_PASSWORD'))
            ->asForm()
            ->post(env('MIAB_HOST') . '/admin/mail/users/add', [
                'email'    => $user->email,
                'password' => $mailPass,
            ]);

        if ($response->failed()) {
            return false;
        }

        return true;
    }

    public function register()
    {
        $this->validate();

        $miabPass = bcrypt(Str::random(32));

        $user = User::create([
            'email' => $this->email . '@privmail.lol',
            'miab_password' => $miabPass,
            'password' => Hash::make($this->password),
        ]);

        Auth::login($user);

        $mailCreated = $this->createMiaBMailBox($user, $miabPass);

        if (!$mailCreated) {
            return back()->withErrors(['mail' => 'Failed to create mailbox.']);
        }
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
