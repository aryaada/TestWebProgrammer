<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Penjualan;
use Illuminate\Database\Seeder;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penjualan::create([
            'nama_produk' => 'Minyak Goreng 2L',
            'deskripsi' => 'Minyak Goreng dengan kemasan 2 Liter',
            'stok' => 10,
            'harga' => '32000',
        ]);
        Penjualan::create([
            'nama_produk' => 'Sabun Mandi Cair 600ml',
            'deskripsi' => 'Sabun Mandi Cair dengan kemasan botol ukuran 600ml',
            'stok' => 5,
            'harga' => '15000',
        ]);
        Penjualan::create([
            'nama_produk' => 'Shampo 400ml',
            'deskripsi' => 'Shampo untuk menghaluskan rambut dan rambut menjadi lebih kuat',
            'stok' => 8,
            'harga' => '17500',
        ]);
        Penjualan::create([
            'nama_produk' => 'Beras Merah 5Kg',
            'deskripsi' => 'Beras merah berkualitas dari beras pilihan',
            'stok' => 7,
            'harga' => '82000',
        ]);
    }
}
