<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CadastroDesempregoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $entries = \App\Models\Desemprego::all();

        foreach($entries as $entrie)
        {
            $entrie->user()->save(factory(\App\Desemprego::class)->make());               
        }
    }
}
