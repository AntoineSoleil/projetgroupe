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
            'name'          => 'Root',
            'description'   => 'Use this account with extreme caution. When using this account it is possible to cause irreversible damage to the system.'
        ]);
    }
}
