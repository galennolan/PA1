<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new Mahasiswa;
        $mhs1->nim="11192938";
        $mhs1->nama_mhs="Selvy Permatahati";
        $mhs1->jurusan="Sistem Informasi Akuntansi";
        $mhs1->save();

        $mhs2 = new Mahasiswa;
        $mhs2->nim="12190832";
        $mhs2->nama_mhs="Razqa Rafisqy";
        $mhs2->jurusan="Sistem Informasi";
        $mhs2->save();
    }
}
