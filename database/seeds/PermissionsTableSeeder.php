<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//users
        Permission::create([
            'name'        =>  'Creación de usuarios',
            'slug'        =>  'users.create',
            'description' =>  'Crear usuarios del sistema',
        ]);
        Permission::create([
        	'name' 		  =>  'Navegar usuarios',
        	'slug'		  =>  'users.index',
        	'description' =>  'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
        	'name' 		  =>  'ver detalle de usuario',
        	'slug'		  =>  'users.show',
        	'description' =>  'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
        	'name' 		  =>  'Edición de usuarios',
        	'slug'		  =>  'users.edit',
        	'description' =>  'Editar cualquie dato de un usuarios del sistema',
        ]);
        Permission::create([
        	'name' 		  =>  'Eliminar usuario',
        	'slug'		  =>  'users.destroy',
        	'description' =>  'Eliminar cualquier usuario del sistma',
        ]);

        //roles

        Permission::create([
        	'name' 		  =>  'Navegar roles',
        	'slug'		  =>  'roles.index',
        	'description' =>  'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
        	'name' 		  =>  'Ver detalle de rol',
        	'slug'		  =>  'roles.show',
        	'description' =>  'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
        	'name' 		  =>  'Creación de roles',
        	'slug'		  =>  'roles.create',
        	'description' =>  'Crear roles del sistema',
        ]);
        Permission::create([
        	'name' 		  =>  'Edición de roles',
        	'slug'		  =>  'roles.edit',
        	'description' =>  'Editar cualquie dato de un rol del sistema',
        ]);
        Permission::create([
        	'name' 		  =>  'Eliminar rol',
        	'slug'		  =>  'roles.destroy',
        	'description' =>  'Eliminar cualquier rol del sistma',
        ]);

        //opciones
        Permission::create([
        	'name' 		  =>  'Navegar opciones landing',
        	'slug'		  =>  'landingOptions.index',
        	'description' =>  'Lista y navega todos los opciones landing del sistema',
        ]);
        Permission::create([
        	'name' 		  =>  'Ver detalle de opcion',
        	'slug'		  =>  'landingOptions.show',
        	'description' =>  'Ver en detalle cada opcion del sistema',
        ]);
        Permission::create([
        	'name' 		  =>  'Creación de opciones landing',
        	'slug'		  =>  'landingOptions.create',
        	'description' =>  'Crear opciones del sistema',
        ]);
        Permission::create([
        	'name' 		  =>  'Edición de opciones landing',
        	'slug'		  =>  'landingOptions.edit',
        	'description' =>  'Editar cualquie dato de un opcion del sistema',
        ]);
        Permission::create([
        	'name' 		  =>  'Eliminar opcion',
        	'slug'		  =>  'landingOptions.destroy',
        	'description' =>  'Eliminar cualquier opcion del sistma',
        ]);


    }
}
