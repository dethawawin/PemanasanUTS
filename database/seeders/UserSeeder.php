<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\kelas;
use App\Models\nim;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(5)->create()->each(
            function($user){
                $nim = nim::factory()->make();
                $kelas = kelas::factory(5)->make();
                $user->nim()->save($nim);
                $nim->kelas()->saveMany($kelas);

            }
        );
    }
}
