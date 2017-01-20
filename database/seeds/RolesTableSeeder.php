<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Roles;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->truncate();
        Roles::create([
            'id'            => 1,
            'name'          => 'Technique',
            'description'   => 'Use this account with extreme caution. When using this account it is possible to cause irreversible damage to the system.'
        ]);
	Roles::create([
            'id'            => 2,
            'name'          => 'Administrateur',
            'description'   => 'Description du rôle Administrateur'
        ]);
	Roles::create([
            'id'            => 3,
            'name'          => 'Superviseur',
            'description'   => 'Description du rôle Superviseur'
        ]);
	Roles::create([
            'id'            => 4,
            'name'          => 'Manager',
            'description'   => 'Description du rôle Manager'
        ]);
	Roles::create([
            'id'            => 5,
            'name'          => 'RH',
            'description'   => 'Description du rôle RH'
        ]);
	Roles::create([
            'id'            => 6,
            'name'          => 'Collaborateur',
            'description'   => 'Description du rôle Collaborateur'
        ]);
	Roles::create([
            'id'            => 7,
            'name'          => 'Rédacteur',
            'description'   => 'Description du rôle Rédacteur'
        ]);
    }
}
