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
            'valor' => '~Ha31UWwqb5B~{)Fc>+/L)',
            'misc' => ''
        ]);

        Mantenedor::create([
            'tipo' => 'TypeDocument',
            'valor' => '33',
            'misc' => 'Factura Electrónica'
        ]);
        Mantenedor::create([
            'tipo' => 'TypeDocument',
            'valor' => '34',
            'misc' => 'Factura No Afecta o Exenta Electrónica'
        ]);

        Mantenedor::create([
            'tipo' => 'TypeDocument',
            'valor' => '43',
            'misc' => 'Liquidación-Factura Electrónica'
        ]);

        Mantenedor::create([
            'tipo' => 'TypeDocument',
            'valor' => '46',
            'misc' => 'Factura de Compra Electrónica.'
        ]);

        Mantenedor::create([
            'tipo' => 'TypeDocument',
            'valor' => '52',
            'misc' => 'Guía de Despacho Electrónica'
        ]);

        Mantenedor::create([
            'tipo' => 'TypeDocument',
            'valor' => '56',
            'misc' => 'Nota de Débito Electrónica'
        ]);


        Mantenedor::create([
            'tipo' => 'TypeDocument',
            'valor' => '61',
            'misc' => 'Nota de Crédito Electrónica'
        ]);


        Mantenedor::create([
            'tipo' => 'TypeDocument',
            'valor' => '110',
            'misc' => 'Factura de Exportación.'
        ]);

        Mantenedor::create([
            'tipo' => 'TypeDocument',
            'valor' => '111',
            'misc' => 'Nota de Débito de Exportación.'
        ]);

        Mantenedor::create([
            'tipo' => 'TypeDocument',
            'valor' => '112',
            'misc' => 'Nota de Crédito de Exportación'
        ]);

   
    }
}
