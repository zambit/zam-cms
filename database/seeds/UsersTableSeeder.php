<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create()->each(function (User $u) {
            $u->update([
                'email' => sprintf('user%s@demo.com', $u->id),
            ]);
        });
    }
}
