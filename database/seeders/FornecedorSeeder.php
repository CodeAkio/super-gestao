<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'https://fornecedor100.com.br';
        $fornecedor->uf = 'SP';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->save();

        Fornecedor::create([
            'nome' => 'Fornecedor 200',
            'site' => 'https://fornecedor200.com.br',
            'uf' => 'SP',
            'email' => 'contato@fornecedor200.com.br',
        ]);

        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 300',
            'site' => 'https://fornecedor300.com.br',
            'uf' => 'SP',
            'email' => 'contato@fornecedor300.com.br',
        ]);
    }
}