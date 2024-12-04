<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estados')->insert(['name'=>'Recibido','active'=>true]);
        DB::table('estados')->insert(['name'=>'En proceso','active'=>true]);
        DB::table('estados')->insert(['name'=>'Impreso','active'=>true]);
        DB::table('estados')->insert(['name'=>'Para Enviar','active'=>true]);
        DB::table('estados')->insert(['name'=>'Entregado','active'=>true]);
    }
}
