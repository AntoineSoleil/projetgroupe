<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ressources;

class RessourcesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('ressources')->truncate();
        Ressources::create([
            'id'            => 1,
            'name'          => 'intranet-actualites-read',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 2,
            'name'          => 'intranet-actualites-create',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 3,
            'name'          => 'intranet-actualites-update',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 4,
            'name'          => 'intranet-actualites-delete',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 5,
            'name'          => 'intranet-ressourceshumaines-read',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 6,
            'name'          => 'intranet-ressourceshumaines-candidatures-read',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 7,
            'name'          => 'intranet-ressourceshumaines-candidatures-create',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 8,
            'name'          => 'intranet-ressourceshumaines-candidatures-update',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 9,
            'name'          => 'intranet-ressourceshumaines-candidatures-delete',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 10,
            'name'          => 'intranet-ressourceshumaines-candidatures-validate',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 11,
            'name'          => 'intranet-ressourceshumaines-collaborateurs-read',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 12,
            'name'          => 'intranet-ressourceshumaines-collaborateurs-create',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 13,
            'name'          => 'intranet-ressourceshumaines-collaborateurs-update',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 14,
            'name'          => 'intranet-ressourceshumaines-collaborateurs-delete',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 15,
            'name'          => 'intranet-ressourceshumaines-collaborateurs-validate',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 16,
            'name'          => 'intranet-ressourceshumaines-conges-read',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 17,
            'name'          => 'intranet-ressourceshumaines-conges-create',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 18,
            'name'          => 'intranet-ressourceshumaines-conges-update',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 19,
            'name'          => 'intranet-ressourceshumaines-conges-delete',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 20,
            'name'          => 'intranet-ressourceshumaines-conges-validate',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 21,
            'name'          => 'intranet-ressourceshumaines-cra-read',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 22,
            'name'          => 'intranet-ressourceshumaines-cra-create',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 23,
            'name'          => 'intranet-ressourceshumaines-cra-update',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 24,
            'name'          => 'intranet-ressourceshumaines-cra-delete',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 25,
            'name'          => 'intranet-ressourceshumaines-cra-validate',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 26,
            'name'          => 'intranet-ressourceshumaines-cvtheque-read',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 27,
            'name'          => 'intranet-ressourceshumaines-cvtheque-create',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 28,
            'name'          => 'intranet-ressourceshumaines-cvtheque-update',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 29,
            'name'          => 'intranet-ressourceshumaines-cvtheque-delete',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 30,
            'name'          => 'intranet-ressourceshumaines-cvtheque-validate',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 31,
            'name'          => 'intranet-ressourceshumaines-notesfrais-read',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 32,
            'name'          => 'intranet-ressourceshumaines-notesfrais-create',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 33,
            'name'          => 'intranet-ressourceshumaines-notesfrais-update',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 34,
            'name'          => 'intranet-ressourceshumaines-notesfrais-delete',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 35,
            'name'          => 'intranet-ressourceshumaines-notesfrais-validate',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 36,
            'name'          => 'intranet-ressourceshumaines-offres-read',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 37,
            'name'          => 'intranet-ressourceshumaines-offres-create',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 38,
            'name'          => 'intranet-ressourceshumaines-offres-update',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 39,
            'name'          => 'intranet-ressourceshumaines-offres-delete',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 40,
            'name'          => 'intranet-ressourceshumaines-offres-validate',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 41,
            'name'          => 'intranet-boiteoutils-read',
            'description'   => ''
        ]);
    }
}
