<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ressources;

class RessourcesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('ressources')->truncate();
        //Ressources::create([
        //    'id'            => 1,
        //    'name'          => 'Root',
        //    'description'   => ''
        //]);
    }
}
