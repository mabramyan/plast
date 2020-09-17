<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ImageRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ImageCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ImageCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Image::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/image');
        CRUD::setEntityNameStrings('image', 'images');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
       // CRUD::setFromDb(); // columns

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
        CRUD::addColumn(['name' => 'name', 'type' => 'text']);
        CRUD::addColumn([
            'name'      => 'src', // The db column name
            'label'     => 'Image', // Table column heading
            'type'      => 'image',
            // 'prefix' => 'folder/subfolder/',
            // image from a different disk (like s3 bucket)
            // 'disk'   => 'disk-name', 
            // optional width/height if 25px is not ok with you
            // 'height' => '30px',
            // 'width'  => '30px',
        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ImageRequest::class);

        //CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
        CRUD::addField([
            'name' => 'name',
            'type' => 'text'
        ]);
        CRUD::addField([
            'name' => 'src', 'label' => 'Image',
            'type'  => 'browse'
        ]);
        CRUD::addField([  // Select
            'label'     => "Gallery",
            'type'      => 'select',
            'name'      => 'gallery_id', // the db column for the foreign key

            // optional 
            // 'entity' should point to the method that defines the relationship in your Model
            // defining entity will make Backpack guess 'model' and 'attribute'
            'entity'    => 'gallery',

            // optional - manually specify the related model and attribute
            'model'     => "App\Models\Gallery", // related model
            'attribute' => 'title', // foreign key attribute that is shown to user

            // optional - force the related options to be a custom query, instead of all();
            'options'   => (function ($query) {
                return $query->orderBy('title', 'ASC')->get();
            }), //  you can use this to filter the results show in the select
        ]);

        CRUD::addField([
            'name' => 'title',
            'type' => 'text'
        ]);
        CRUD::addField([   // CKEditor
            'name'          => 'caption',
            'label'         => 'Caption',
            'type'  => 'wysiwyg',
        ]);
        CRUD::addField([
            'name' => 'link',
            'type' => 'text'
        ]);

        CRUD::addField([   // select_from_array
            'name'        => 'crop',
            'label'       => "Crop",
            'type'        => 'select_from_array',
            'options'     => ['' => 'None', '1' => 'Crop from center', '2' => 'Crop from top left', '3' => 'Proportial by width'],
            'allows_null' => true,
            'default'     => '',
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ]);

        CRUD::addField([   // Number
            'name' => 'width',
            'label' => 'Width',
            'type' => 'number',
        ]);
        CRUD::addField([   // Number
            'name' => 'height',
            'label' => 'Height',
            'type' => 'number',
        ]);
        
        CRUD::addField([   // Number
            'name' => 'quality',
            'label' => 'Quality',
            'type' => 'number',
        ]);
        

    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
