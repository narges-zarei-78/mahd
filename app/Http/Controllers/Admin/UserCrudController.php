<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

/**
 * Class UserCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class UserCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation {
        store as traitStore;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation {
        update as traitUpdate;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user');
        CRUD::setEntityNameStrings('کاربر', 'کاربران');
        $this->crud->denyAccess('show');
        if (!(backpack_user()->hasRole('admin') || backpack_user()->hasRole('teacher'))) {
            $this->crud->denyAccess(['create', 'update', 'show', 'delete', 'store']);
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
        if (!(backpack_user()->hasRole('admin'))) {
            $this->crud->addClause('justStudents');
        }
        CRUD::addColumn([
            'name'   => 'image',
            'label'  => 'تصویر',
            'type'   => 'image',
            'prefix' => 'storage/',
            'height' => '70px',
            'width'  => '70px',
        ]);
        CRUD::column('name')
            ->label('نام و نام خانوادگی');
        CRUD::column('email')
            ->label('ایمیل');
        CRUD::column('national_code')
            ->label('کدملی');
        CRUD::column('madrak')
            ->label('مدرک');
        CRUD::column('semat')
            ->label('سمت');
        CRUD::addColumn([
            'label'     => 'نقش',
            'type'      => 'select_multiple',
            'name'      => 'roles',
            'entity'    => 'roles',
            'attribute' => 'name',
            'model'     => config('permission.models.role'),
        ]);

        // Role Filter
        $this->crud->addFilter(
            [
                'name'  => 'role',
                'type'  => 'dropdown',
                'label' => trans('backpack::permissionmanager.role'),
            ],
            config('permission.models.role')::all()
                                            ->pluck('name', 'id')
                                            ->toArray(),
            function ($value) { // if the filter is active
                $this->crud->addClause('whereHas', 'roles', function ($query) use ($value) {
                    $query->where('role_id', '=', $value);
                });
            }
        );

        // Extra Permission Filter
        $this->crud->addFilter(
            [
                'name'  => 'permissions',
                'type'  => 'select2',
                'label' => trans('backpack::permissionmanager.extra_permissions'),
            ],
            config('permission.models.permission')::all()
                                                  ->pluck('name', 'id')
                                                  ->toArray(),
            function ($value) { // if the filter is active
                $this->crud->addClause('whereHas', 'permissions', function ($query) use ($value) {
                    $query->where('permission_id', '=', $value);
                });
            }
        );

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
        $this->crud->addFields([
            [
                'name'  => 'name',
                'label' => 'نام و نام خانوادگی',
                'type'  => 'text',
            ],
            [
                'name'    => 'email',
                'label'   => 'ایمیل',
                'type'    => 'email',
                'wrapper' => [
                    'class' => 'form-group col-md-6',
                ],
            ],
            [
                'name'    => 'national_code',
                'label'   => 'کدملی',
                'type'    => 'text',
                'wrapper' => [
                    'class' => 'form-group col-md-6',
                ],
            ],
            [
                'name'    => 'madrak',
                'label'   => 'مدرک تحصیلی',
                'type'    => 'text',
                'wrapper' => [
                    'class' => 'form-group col-md-6',
                ],
            ],
            [
                'name'    => 'semat',
                'label'   => 'سمت در مهد',
                'type'    => 'text',
                'wrapper' => [
                    'class' => 'form-group col-md-6',
                ],
            ],
            [
                'name'   => 'image',
                'label'  => 'عکس',
                'type'   => 'upload',
                'upload' => true,
            ],
            [
                'name'  => 'password',
                'label' => 'رمزعبور',
                'type'  => 'password',
            ],
            [
                'name'  => 'password_confirmation',
                'label' => 'تایید رمزعبور',
                'type'  => 'password',
            ],
        ]);
        if (backpack_user()->hasRole('admin')) {
            CRUD::addField([
                // two interconnected entities
                'label'             => 'نقش ها و دسترسی ها',
                'field_unique_name' => 'user_role_permission',
                'type'              => 'checklist_dependency',
                'name'              => ['roles', 'permissions'],
                'subfields'         => [
                    'primary'   => [
                        'label'            => 'نقش ها',
                        'name'             => 'roles',
                        'entity'           => 'roles',
                        'entity_secondary' => 'permissions',
                        'attribute'        => 'name',
                        'model'            => config('permission.models.role'),
                        'pivot'            => true,
                        'number_columns'   => 3,
                    ],
                    'secondary' => [
                        'label'          => 'دسترسی ها',
                        'name'           => 'permissions',
                        'entity'         => 'permissions',
                        'entity_primary' => 'roles',
                        'attribute'      => 'name',
                        'model'          => config('permission.models.permission'),
                        'pivot'          => true,
                        'number_columns' => 3,
                    ],
                ],
            ]);
        }
        CRUD::setValidation(UserRequest::class);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']);
         */
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    public function store()
    {
        $this->crud->setRequest($this->crud->validateRequest());
        $this->crud->setRequest($this->handlePasswordInput($this->crud->getRequest()));
        $this->crud->unsetValidation();

        return $this->traitStore();
    }

    public function update()
    {
        $this->crud->setRequest($this->crud->validateRequest());
        $this->crud->setRequest($this->handlePasswordInput($this->crud->getRequest()));
        $this->crud->unsetValidation();

        return $this->traitUpdate();
    }


    /**
     * Handle password input fields.
     */
    protected function handlePasswordInput($request)
    {
        // Remove fields not present on the user.
        $request->request->remove('password_confirmation');
        $request->request->remove('roles_show');
        $request->request->remove('permissions_show');

        // Encrypt password if specified.
        if ($request->input('password')) {
            $request->request->set('password', Hash::make($request->input('password')));
        } else {
            $request->request->remove('password');
        }

        return $request;
    }
}
