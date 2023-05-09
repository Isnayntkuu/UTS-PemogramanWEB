<?php

namespace Database\Seeders;

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
        $administrator = new \App\Models\User;
        $administrator->username = "user";
        $administrator->name = "Isna Yunitakuu";
        $administrator->email = "yunitakuisna@gmail.com";
        $administrator->roles = json_encode(["USER"]);
        $administrator->password = \Hash::make("Isnayntku1706");
        $administrator->avatar = "saat-ini-tidak-ada-file.png";
        $administrator->address = "Trans Kalimantan, Handil Bakti, Kalimantan Selatan";

        $administrator->save();

        $this->command->info("User berhasil diinsert");
    }
}
