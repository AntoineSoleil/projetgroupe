<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->truncate();
    	User::create([
            'id'            => 1,
            'name'          => 'jonathan clairet',
            'email'   => 'admin@intranet.com',
            'password' => bcrypt('password123')
        ]);
    }
}
