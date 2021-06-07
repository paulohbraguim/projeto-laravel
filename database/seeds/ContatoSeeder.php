<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class ContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $contato = new SiteContato();

        $contato->nome = "Sistema SG";
        $contato->telefone = "17 99678-6521";
        $contato->email = "contato@sg.com.br";
        $contato->motivo_contato = 1;
        $contato->mensagem = "Seja bem vindo ao sistema!";

        $contato->save();*/

        factory(SiteContato::class, 100)->create();
    }
}
