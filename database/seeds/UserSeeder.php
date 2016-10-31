<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//para crear usuarios random
		//factory(App\User::class, 10)->create();
		DB::table('users')->insert([
			'name'     => 'Martin',
			'email'    => 'marlopez04@hotmail.com',
			'password' => bcrypt('12345'),
			'type'     => 'admin'
			]);
    }
}
