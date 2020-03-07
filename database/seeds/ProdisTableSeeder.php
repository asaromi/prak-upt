<?php

use Illuminate\Database\Seeder;

class ProdisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('prodis')->insert([
            'name' => 'S1 Fisika',
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d")
        ]);

        DB::table('prodis')->insert([
            'name' => 'S1 Kimia',
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d")
        ]);

        DB::table('prodis')->insert([
            'name' => 'S1 Biologi',
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d")
        ]);

        DB::table('prodis')->insert([
            'name' => 'S1 Matematika',
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d")
        ]);

        DB::table('prodis')->insert([
            'name' => 'S1 Informatika',
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d")
        ]);

        DB::table('prodis')->insert([
            'name' => 'D3 Farmasi',
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d")
        ]);

        DB::table('prodis')->insert([
            'name' => 'D3 Teknik Informatika',
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d")
        ]);

        DB::table('prodis')->insert([
            'name' => 'S1 Statistika',
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d")
        ]);

        DB::table('prodis')->insert([
            'name' => 'S1 Farmasi',
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d")
        ]);

        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin.mipa@uns.ac.id',
            'is_admin' => 1,
            'password' => Hash::make('admin'),
            'angkatan' => 2017,
            'departemen' => 1,
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d")
        ]);

        DB::table('users')->insert([
            'name' => 'User#1',
            'email' => 'user.mipa@uns.ac.id',
            'is_admin' => 0,
            'angkatan' => 2016,
            'password' => Hash::make('user'),
            'departemen' => 5,
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d")
        ]);

        DB::table('surats')->insert([
            'semester' => '2018 (A)',
            'created_at' => '2020-03-07',
            'updated_at' => '2020-03-07',
            'keterangan' => 'Untuk keperluan pengajuan beasiswa',
            'status' => 0,
            'user' => 2,
        ]);
    }
}
