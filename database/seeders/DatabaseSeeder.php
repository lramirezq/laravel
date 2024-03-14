<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mantenedor;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         
       Mantenedor::create([
            'tipo' => 'SFTPHost',
            'valor' => 'sftp.porschecl.cl',
            'misc' => ''
            // Agrega aquí más campos y sus valores personalizados si es necesario
        ]);

        Mantenedor::create([
            'tipo' => 'SFTPPort',
            'valor' => '10022',
            'misc' => ''
            // Agrega aquí más campos y sus valores personalizados si es necesario
        ]);

        Mantenedor::create([
            'tipo' => 'SFTPUser',
            'valor' => 'tracking',
            'misc' => ''
            // Agrega aquí más campos y sus valores personalizados si es necesario
        ]);

        Mantenedor::create([
            'tipo' => 'SFTPPassword',
            'valor' => 'Ha31UWwqb5B{)Fc>+/L)',
            'misc' => ''
            // Agrega aquí más campos y sus valores personalizados si es necesario
        ]);

      
    }
}
