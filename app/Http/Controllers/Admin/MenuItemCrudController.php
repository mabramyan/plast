<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

class MenuItemCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;

    public function setup()
    {
        $this->crud->setModel("App\MenuItem");
        $this->crud->setRoute(config('backpack.base.route_prefix').'/menu-item');
        $this->crud->setEntityNameStrings('menu item', 'menu items');

        $this->crud->enableReorder('name', 3);

        $this->crud->operation('list', function () {
            $this->crud->addColumn([
                'name' => 'name',
                'label' => 'Label',
            ]);
            $this->crud->addColumn([
                'label' => 'Parent',
                'type' => 'select',
                'name' => 'parent_id',
                'entity' => 'parent',
                'attribute' => 'name',
                'model' => "App\MenuItem",
            ]);
            $this->crud->addColumn([
                'name' => 'locale',
                'label' => 'Locale',
            ]);
        });

        $this->crud->operation(['create', 'update'], function () {
            $this->crud->addField([
                'name' => 'name',
                'label' => 'Label',
            ]);
            $this->crud->addField([
                'label' => 'Parent',
                'type' => 'select',
                'name' => 'parent_id',
                'entity' => 'parent',
                'attribute' => 'name',
                'model' => "App\MenuItem",
            ]);
            $this->crud->addField([
                'name' => ['type', 'link', 'page_id'],
                'label' => 'Type',
                'type' => 'page_or_link',
                'page_model' => 'App\Page',
            ]);

            $this->crud->addField([   // select_from_array
                'name'        => 'locale',
                'label'       => "Locale",
                'type'        => 'select_from_array',
                'options'     => ['en' => 'English', 'ge' => 'Georgian', 'ru'=>'Russian'],
                'allows_null' => false,
                'default'     => 'ge',
                // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
            ]);


        });
    }
}
