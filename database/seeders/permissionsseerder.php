<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Importamos de spatie
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class permissionsseerder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $permiso= [
            //articulo

            'See-article',
            'Create-article',
            'Editr-article',
            'Eliminate-article',
            //categoria 
            'Ver-categorie',
            'Crear-categorie',
            'Editar-categorie',
            'Eliminar-categorie',
            //income_detail 
            'Ver-income_detail',
            'Crear-income_detail',
            'Editar-income_detail',
            'Eliminar-income_detail',
             //income 
             'Ver-income',
             'Crear-income',
             'Editar-income',
             'Eliminar-income',
              //income_detail 
            'Ver-income_detail',    
            'Crear-income_detail',
            'Editar-income_detail',
            'Eliminar-income_detail',
             //person 
             'Ver-person',
             'Crear-person',
             'Editar-person',
             'Eliminar-person',
             //sale_detail 
             'Ver-sale_detail',
             'Crear-sale_detail',
             'Editar-sale_detail',
             'Eliminar-sale_detail',
             //sale 
             'Ver-sale',
             'Crear-sale',
             'Editar-sale',
             'Eliminar-sale',
      ];
      foreach($permisos as $permiso ){
      Permission::create(['name'=>$permiso]);
      }
    }
}
