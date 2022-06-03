<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "nama" => "Admin PPSDA",
            "nik" => "123456789",
            "email" => "adminppsda@gmail.com",
            "password" => bcrypt("adminppsda"),
            "role" => "admin",
            "bidang" => "ppsda",
        ]);
        User::create([
            "nama" => "Admin KESOS",
            "nik" => "234567890",
            "email" => "adminkesos@gmail.com",
            "password" => bcrypt("adminkesos"),
            "role" => "admin",
            "bidang" => "kesos",
        ]);
        User::create([
            "nama" => "Sallie Mansurina",
            "nik" => "6474020207010009",
            "email" => "sallieeky@gmail.com",
            "password" => bcrypt("eky12345"),
            "ttl" => "Jakarta, 20 Juli 2020",
            "alamat" => "Jl. Raya Ciputat No.1",
            "no_telp" => "081234567890",
            "jenis_kelamin" => "Laki-laki",
        ]);
    }
}
