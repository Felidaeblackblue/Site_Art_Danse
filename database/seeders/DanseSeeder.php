<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('danses')->insert([
            [
             'name'=>'Danse Afro',
             'description'=>'La danse afro très énergétique et rythmée, elle est un très moyen de rester en forme. Les chorégraphies sont adaptées en fonction du niveau.',
            ],
            [
             'name'=>'Danse Bollywood',
             'description'=>'Très à la mode de nos jours, la danse Bollywood allie danse classique et moderne. Elle vous permettra de vous lâcher mais avant tout de vous amuser.',
            ],
            [
             'name'=>'Tango',
             'description'=>'Le tango est une danse avec toute une histoire à multiples facettes. Nous vous invitons à venir les découvrir et vibrer aux sons de tous ses rythmes.',
            ],
            [
             'name'=>'Zumba',
             'description'=>'Basé sur des pas variés sur de la musique principalement latino-américaine, la zumba vous permettra de travailler tous les muscles de votre corps. Ainsi vous resterait en forme tout en prenant du plaisir.',
             
            ],
            [
            'name'=>'Rock Acrobatique',
            'description'=>'La danse acrobatique est une danse basée sur le principe du rock à six temps dans lequel sont introduits des acrobaties. Pratiquée surtout lors de compétitions et démonstrations.Let\'s Rock\'n\'roll !',
            ],
            [
            'name'=>'Modern Jazz',
            'description'=>'Le Modern Jazz peut procurer un véritable bien-être. Cette danse est de plus en plus popularisée et aimée. Moyen d\'expression comme toutes les danses, elle demande une souplesse et une douceur particulière.',   
            ],
        ]);
    
    }
}
