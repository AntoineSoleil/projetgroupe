<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ressources;

class RessourcesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('ressources')->truncate();
        Role::create([
            'id'            => 1,
            'name'          => 'Root',
            'description'   => 'Use this account with extreme caution. When using this account it is possible to cause irreversible damage to the system.'
        ]);
    }
}
