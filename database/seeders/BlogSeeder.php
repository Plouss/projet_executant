<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'title' => "Décrivez vos besoins et vos consignes",
                'content' => "Indiquez vos consignes de rédaction et choisissez vos options (HTML, SEO, recherche...)
                Sur le formulaire de commande, sélectionnez en quelques clics vos besoins, consignes, la rubrique des textes et visualisez le tarif en direct. Validez votre commande afin qu'elle soit diffusée aux rédacteurs qui correspondent à voscritères de sélectionC’est vous qui choisissez le ou les rédacteurs qui vous conviennent. Mais vous pouvez aussi vous faire aider par nos conseillères.Commander des textes."
            ],
            [
                'title' => "Choisissez un ou plusieurs rédacteurs",
                'content' => "Comparez les rédacteurs et sélectionnez ceux qui vous correspondent
                Une fois la commande publiée vous recevez plusieurs candidatures de rédacteurs professionnelsNos rédacteurs ont des profils très variés (journaliste, professeur ou encore expert SEO) pour répondre à tous vos besoins.Commander des textes . A vous de choisir ceux qui répondent à vos critères ou contactez notre équipe pour vous faire aider dans le choix des rédacteurs."
            ],
            [
                'title' => "Recevez vos contenus dans les délais",
                'content' => "Vérifiez les textes et demandez gratuitement des ajustements si nécessaire
                Les textes rédigés sont automatiquement testés par le logiciel CopyScape, vous recevez le rapport anti-plagiat. Si les textes ne correspondent pas à vos consignes vous pouvez demander des ajustements gratuitement aux rédacteurs."
            ]
        ]);
    }
}
