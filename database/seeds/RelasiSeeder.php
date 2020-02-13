<?php

use Illuminate\Database\Seeder;
use App\wali;
use App\Mahasiswa;
use App\dosen;
use App\hobi;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('walis')->delete();
        DB::table('dosens')->delete();
        DB::table('mahasiswas')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();

        //membuat data dosen
        $dosen = dosen::create(array(
            'nipd' => '1234556',
            'nama' => 'abdul dudu'
        ));
        $this->command->info('Data Dosen Telah Di Isi');

        //membuat data mahasiswa
        $siswa = Mahasiswa::create(array(
            'nama' => 'asep nurdin',
            'nim' => '12131',
            'id_dosen' => $dosen->id

        ));
        $ndud = Mahasiswa::create(array(
            'nama' => 'asep soleh',
            'nim' => '122131',
            'id_dosen' => $dosen->id

        ));
        $ujang = Mahasiswa::create(array(
            'nama' => 'asep luqman',
            'nim' => '12135731',
            'id_dosen' => $dosen->id

        ));
        $this->command->info('Data Mahasiswa berhasil di isi');

        $dadang = wali::create(array(
            'nama' => 'asep ',
            'id_mahasiswa' => $siswa->id

        ));
        $dungdang = wali::create(array(
            'nama' => ' nurdin',
            'id_mahasiswa' => $ndud->id

        ));
        $usep = wali::create(array(
            'nama' => 'asep cilok',
            'id_mahasiswa' => $ujang->id

        ));
        $this->command->info('data wali berhasil di isi');

        //buat data hobi
        $pelukis = hobi::create(array(
            'Hobi' => 'Melukis',
        ));
        $ibak = hobi::create(array(
            'Hobi' => 'ibak cai',
        ));
        $modol = hobi::create(array(
            'Hobi' => 'berak terus',
        ));

        $siswa->hobi()->attach($pelukis->id);
        //attach menambah data baru ke tabel vivot(bantuan)
        //sync mengupdate data di table pivot(bantuan)
        $ndud->hobi()->attach($ibak->id);
        $ujang->hobi()->attach($modol->id);

        $this->command->info('mahasiswa beserta hobi telah di isi');
    }
}
