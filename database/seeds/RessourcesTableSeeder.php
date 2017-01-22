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
            'description'   => 'Droit de lecture pour la page /intranet/actualites'
        ]);
	Ressources::create([
            'id'            => 2,
            'name'          => 'intranet-actualites-create',
            'description'   => 'Droit de créer pour la page /intranet/actualites'
        ]);
	Ressources::create([
            'id'            => 3,
            'name'          => 'intranet-actualites-update',
            'description'   => 'Droit de modifier pour la page /intranet/actualites'
        ]);
	Ressources::create([
            'id'            => 4,
            'name'          => 'intranet-actualites-delete',
            'description'   => 'Droit de supprimer pour la page /intranet/actualites'
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
            'name'          => 'intranet-ressourceshumaines-cra-search',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 27,
            'name'          => 'intranet-ressourceshumaines-cvtheque-read',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 28,
            'name'          => 'intranet-ressourceshumaines-cvtheque-create',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 29,
            'name'          => 'intranet-ressourceshumaines-cvtheque-update',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 30,
            'name'          => 'intranet-ressourceshumaines-cvtheque-delete',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 31,
            'name'          => 'intranet-ressourceshumaines-cvtheque-validate',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 32,
            'name'          => 'intranet-ressourceshumaines-cvtheque-search',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 33,
            'name'          => 'intranet-ressourceshumaines-notesfrais-read',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 34,
            'name'          => 'intranet-ressourceshumaines-notesfrais-create',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 35,
            'name'          => 'intranet-ressourceshumaines-notesfrais-update',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 36,
            'name'          => 'intranet-ressourceshumaines-notesfrais-delete',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 37,
            'name'          => 'intranet-ressourceshumaines-notesfrais-validate',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 38,
            'name'          => 'intranet-ressourceshumaines-notesfrais-search',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 39,
            'name'          => 'intranet-ressourceshumaines-offres-read',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 40,
            'name'          => 'intranet-ressourceshumaines-offres-create',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 41,
            'name'          => 'intranet-ressourceshumaines-offres-update',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 42,
            'name'          => 'intranet-ressourceshumaines-offres-delete',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 43,
            'name'          => 'intranet-ressourceshumaines-offres-validate',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 44,
            'name'          => 'intranet-ressourceshumaines-offres-search',
            'description'   => ''
        ]);
	Ressources::create([
            'id'            => 45,
            'name'          => 'intranet-boiteoutils-read',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 46,
            'name'          => 'intranet-boiteoutils-certifications-read',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 47,
            'name'          => 'intranet-boiteoutils-certifications-create',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 48,
            'name'          => 'intranet-boiteoutils-certifications-update',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 49,
            'name'          => 'intranet-boiteoutils-certifications-delete',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 50,
            'name'          => 'intranet-boiteoutils-certifications-search',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 51,
            'name'          => 'intranet-boiteoutils-documentstravail-read',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 52,
            'name'          => 'intranet-boiteoutils-documentstravail-create',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 53,
            'name'          => 'intranet-boiteoutils-documentstravail-update',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 54,
            'name'          => 'intranet-boiteoutils-documentstravail-delete',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 55,
            'name'          => 'intranet-boiteoutils-documentstravail-search',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 56,
            'name'          => 'intranet-administration-read',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 57,
            'name'          => 'intranet-administration-application-read',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 58,
            'name'          => 'intranet-administration-application-create',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 59,
            'name'          => 'intranet-administration-application-update',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 60,
            'name'          => 'intranet-administration-application-delete',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 61,
            'name'          => 'intranet-administration-gestionutilisateur-read',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 62,
            'name'          => 'intranet-administration-gestionutilisateur-create',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 63,
            'name'          => 'intranet-administration-gestionutilisateur-update',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 64,
            'name'          => 'intranet-administration-gestionutilisateur-delete',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 65,
            'name'          => 'intranet-administration-gestionrole-read',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 66,
            'name'          => 'intranet-administration-gestionrole-create',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 67,
            'name'          => 'intranet-administration-gestionrole-update',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 68,
            'name'          => 'intranet-administration-gestionrole-delete',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 69,
            'name'          => 'intranet-administration-gestionattributionrole-read',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 70,
            'name'          => 'intranet-administration-gestionattributionrole-create',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 71,
            'name'          => 'intranet-administration-gestionattributionrole-update',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 72,
            'name'          => 'intranet-administration-gestionattributionrole-delete',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 73,
            'name'          => 'intranet-administration-gestionattributionressource-read',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 74,
            'name'          => 'intranet-administration-gestionattributionressource-create',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 75,
            'name'          => 'intranet-administration-gestionattributionressource-update',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 76,
            'name'          => 'intranet-administration-gestionattributionressource-delete',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 77,
            'name'          => 'intranet-parametrage-read',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 78,
            'name'          => 'intranet-parametrage-ressourceshumaines-read',
            'description'   => ''
        ]);
    Ressources::create([
            'id'            => 79,
            'name'          => 'intranet-parametrage-crm-read',
            'description'   => ''
        ]);
    }
}
