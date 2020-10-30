<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Avatar;
use Illuminate\Support\Facades\Storage;

class UserSeeder extends Seeder
{
    protected  $name = [
        'Daffa Hanif Rabbanee',
        'Ariq Jusuf Habibie',
        'Ibrahim Ahmad',
        'Arrijal Bintang',
        'Bintang Fabian',
        'Abdul Aziz',
        'Khafid Fuadi',
        'Mufid Hilmy',
        'Abdullah Said',
        'Arkan Adil Wicaksono',
        'Adzka Jaisy',
        'Muhammad Rifky',
        'Muhammad Haikal Faruq',
        'Ravy M',
        'Fitiyan Ilham Wahyudi',
        'Nashir Muhammad',
        'Achmad Divo',
        'Yusuf Edogawa',
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < count($this->name); $i++) {
            $email = explode(' ', $this->name[$i], 3);
            $user = new User([
                'name' => $this->name[$i],
                'email' => strtolower($email[0]) . strtolower($email[1]) . '@oxcode.dev',
                'email_verified_at' => now(),
                'password' => '12345678',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $user->save();
            $avatar = Avatar::create($user->name)->getImageObject()->encode('png');
            Storage::put('public/images/avatars/' . $user->id . '/avatar.png', (string) $avatar);
            $user->image()->create(['path' => "avatars/$user->id/avatar.png", 'thumbnail' => 'true']);
        }
    }
}
