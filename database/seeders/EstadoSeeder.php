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
        DB::table('estados')->insert(['name'=>'Para imprimir','active'=>true]);
        DB::table('estados')->insert(['name'=>'Enviado','active'=>true]);
        DB::table('estados')->insert(['name'=>'Impreso','active'=>true]);
    }
}
