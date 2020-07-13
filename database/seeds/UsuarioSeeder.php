<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
            'usu_usuario' => 'andre',
            'password' => bcrypt('andre')
        ]);
        DB::table('rol')->insert([
            'rol_nombre' => 'ADMINISTRADOR'
        ]);
        DB::table('usuario_rol')->insert([
            'usu_rol_estado' => 1,
            'usu_id' => 1,
            'rol_id' => 1
        ]);

    }
}
