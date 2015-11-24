<?php
use gpstax\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //Model::unguard();

        // $this->call(UserTableSeeder::class);

        //Model::reguard();
        \DB::table('users')->insert(array(
            'name'  => 'admin',
            'email'=> 'admin@admin.me',
            'password' => Hash::make('admin') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));
    }
}
