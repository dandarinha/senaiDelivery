<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produtos =[
            'Lanches' => [
                ['nome'=> 'X-Burger', 
                'descricao'=>'Pão, Hambúrguer, Queijo e Molho', 
                'preco'=>18.90, 
                'destaque'=>true],

                ['nome'=> 'X-Bacon', 
                'descricao'=>'Pão, Hambúrguer, Queijo e Bacon', 
                'preco'=>18.90, 
                'destaque'=>true],
            ],

            'Porções'=> [
                ['nome'=> 'Batata Frita',
                'descricao'=> 'Porção de Batata Frita',
                'preco'=>22.90,
                'destaque'=>false],

                ['nome'=> 'Calabresa Acebolada',
                'descricao'=> 'Porção de Calabresa Fatiada com Cebola',
                'preco'=>29.90,
                'destaque'=>true],
            ],

            'Bebidas'=>[
                ['nome'=> 'Refrigerante',
                'descricao'=> 'Refrigerante Lata',
                'preco'=>6.00,
                'destaque'=>false],

                 ['nome'=> 'Suco de Laranja',
                'descricao'=> 'Suco Natural de Laranja',
                'preco'=>10.00,
                'destaque'=>true],
            ],

            'Sobremesas'=>[
                ['nome'=> 'Pudim',
                'descricao'=> 'Fatia de Pudim',
                'preco'=>9.90,
                'destaque'=>false],

                 ['nome'=> 'Sorvete',
                'descricao'=> 'Sorvete com Cobertura',
                'preco'=>10.00,
                'destaque'=>true],
            ],
        ];

        foreach ($produtos as $nomeCategoria => $itens){
            $categoria = Categoria::where('nome', $nomeCategoria)->firstOrFail();

            foreach ($itens as $produto) {
                Produto::create(
                    [
                        'categoria_id' => $categoria->id,
                        'nome' => $produto['nome'],
                        'descricao' => $produto['descricao'],
                        'preco' => $produto['preco'],
                        'img_url' => null,
                        'ativo' => true,
                        'destaque' => $produto['destaque'],
                    ]
                    );
            }
        }
    }
}
