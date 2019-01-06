<?php
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();
        // Register the user seeder
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class, 10)->create();
        // Model::reguard();
    }
}
