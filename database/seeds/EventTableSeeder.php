
<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create 15 users using the user factory
        factory(App\Event::class, 15)->create();
    }
}
