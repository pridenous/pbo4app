<?php

use Illuminate\Database\Seeder;
use App\sysuser;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        sysuser::insert([
            'uname' => 'test',
            'namalengkap' => 'Administrator',
            'email' => 'adminokk@pbo3.com',
            'upass' => sha1('test')
        ]);
    }
}
