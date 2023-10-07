<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Barang;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'username' => 'dimas17',
            'name' => 'dimas aditya',
            'email' => 'dimas@gmail.com',
            'password' => Hash::make('password')
        ]);
        
        User::create([
            'username' => 'guest',
            'name' => 'guest',
            'email' => 'guest@gmail.com',
            'password' => Hash::make('password')
        ]);

        Barang::create([
            'nama_barang' => 'kardus',
            'deskripsi' => 'Semua jenis kardus dapat dibuang disini!',
            'gambar' => 'https://pranatamultipackindo.com/wp-content/uploads/2021/09/WhatsApp-Image-2021-11-24-at-15.41.29.jpeg',
            'harga' => 2000
        ]);

        Barang::create([
            'nama_barang' => 'logam',
            'deskripsi' => 'Disini masukkan berbagai macam logam seperti kaleng dan apapun yang berbahan dasar logam',
            'gambar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTs5PCGWFVu4v2e_J-KrnCMCn5KiUloasCtbw&usqp=CAU',
            'harga' => 4000
        ]);

        Barang::create([
            'nama_barang' => 'plastik',
            'deskripsi' => 'Kamu bisa masukkan sampah apa saja yang berbahan dasar plastik ( botol, kantung kresek, dll)',
            'gambar' => 'https://images-tm.tempo.co/all/2020/01/18/734514/734514_720.jpg',
            'harga' => 3000
        ]);

        Barang::create([
            'nama_barang' => 'kaca',
            'deskripsi' => 'Kaca apapun dapat dibuang disini loh seperti lampu, kaca dirumah mu, dll. Kamu bisa taruh aja yaa',
            'gambar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQakSE0aNmR6z4-aEnUggOZStM6WK0GebkE2A&usqp=CAU',
            'harga' => 1000
        ]);
    }
}
