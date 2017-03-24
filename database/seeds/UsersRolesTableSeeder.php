<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\UsersRoles;

class UsersRolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users_roles')->truncate();
        UsersRoles::create([
            'id_users'      => 1,
            'id_roles' => 1,
        ]);
    }
}
