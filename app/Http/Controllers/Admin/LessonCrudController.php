<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LessonRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class LessonCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class LessonCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Lesson::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/lesson');
        CRUD::setEntityNameStrings('درس', 'دروس');
        if (!(backpack_user()->hasRole('admin') || backpack_user()->hasRole('teacher'))) {
            $this->crud->denyAccess(['create', 'update', 'delete', 'store']);
            $this->crud->removeAllButtons();
            $this->crud->removeColumn('action');
        }
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('title')
            ->label('عنوان');
        CRUD::addColumn([
            'name'   => 'image',
            'label'  => 'تصویر',
            'type'   => 'image',
            'prefix' => 'storage/',
            'height' => '70px',
            'width'  => '70px',
        ]);
        CRUD::column('subject')
            ->label('موضوع');
        CRUD::column('for_age')
            ->label('سن');
        CRUD::column('class_time')
            ->label('وقت کلاس');
        CRUD::addColumn([
            'name'     => 'capacity',
            'label'    => 'گنجایش',
            'type'     => 'closure',
            'function' => function ($entry) {
                return $entry->capacity . ' نفر';
            },
        ]);
        CRUD::column('user_id')
            ->label('مربی');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(LessonRequest::class);

        CRUD::field('title')
            ->label('عنوان درس');
        CRUD::field('subject')
            ->label('موضوع درس');
        CRUD::addField([
            'name'  => 'body',
            'label' => 'متن',
            'type'  => 'tinymce',
        ]);
        CRUD::addField([
            'name'   => 'image',
            'label'  => 'عکس',
            'type'   => 'upload',
            'upload' => true,
        ]);
        CRUD::addField([
            'name'   => 'attach',
            'label'  => 'فایل پیوست',
            'type'   => 'upload',
            'upload' => true,
        ]);
        CRUD::field('for_age')
            ->label('سن')
            ->attributes(['placeholder' => '5 - 7 سال']);
        CRUD::field('class_time')
            ->label('ساعت کلاس')
            ->attributes(['placeholder' => '8 - 10']);
        CRUD::field('capacity')
            ->type('number');
        CRUD::addField([
            'label'     => "مربی",
            'type'      => 'select2',
            'name'      => 'user_id',
            'entity'    => 'user',
            'model'     => "App\Models\User",
            'attribute' => 'name',
            'options'   => (function ($query) {
                return $query->role('teacher')
                             ->get();
            }),
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
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

    protected function setupShowOperation()
    {
        CRUD::addColumn([
            'name'   => 'image',
            'label'  => 'تصویر',
            'type'   => 'image',
            'prefix' => 'storage/',
            'height' => '100%',
            'width'  => '100%',
        ]);
        CRUD::column('title')
            ->label('عنوان');
        CRUD::column('subject')
            ->label('موضوع');
        CRUD::addColumn([
            'name'     => 'body',
            'label'    => 'محتوا',
            'type'     => 'closure',
            'function' => function ($entry) {
                return $entry->body;
            },
        ]);
        CRUD::addColumn([
            'name'     => 'attach',
            'label'    => 'فایل پیوست',
            'type'     => 'closure',
            'function' => function ($entry) {
                if (!empty($entry->attach)) {
                    return '<a download href="/storage/'.$entry->attach.'" class="btn btn-warning"><i class="las la-paperclip"></i> دانلود</a>';
                }
            },
        ]);
        CRUD::column('for_age')
            ->label('سن');
        CRUD::column('class_time')
            ->label('وقت کلاس');
        CRUD::addColumn([
            'name'     => 'capacity',
            'label'    => 'گنجایش',
            'type'     => 'closure',
            'function' => function ($entry) {
                return $entry->capacity . ' نفر';
            },
        ]);
        CRUD::column('user_id')
            ->label('مربی');
    }
}
