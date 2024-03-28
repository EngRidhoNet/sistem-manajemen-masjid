<?php
namespace App\Http\Controllers\Admin;
use App\Http\Requests\MasjidRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
class MasjidCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Masjid::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/masjid');
        CRUD::setEntityNameStrings('masjid', 'masjids');
    }
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.
        $this->crud->addColumns($this->getFieldData(TRUE));
    }
private function getFieldData($show = false)
{
    return[
        [
                'name' => 'foto_masjid',
                'label' => 'Foto Masjid',
                'type' => ($show ? 'view' : 'upload'),
                'upload' => true,
                'view' => 'partials/image',
        ]
    ];
}
    protected function setupCreateOperation()
    {
        CRUD::setFromDb(); // set fields from db columns.
        CRUD::addField([

                'name' => 'foto_masjid',
                'label' => 'Foto Masjid',
                'type' => 'upload',
                'upload' => true,
                'view' => 'partials/image',
            // tambahkan opsi lainnya seperti 'upload' => true, 'disk' => 'public', dll. sesuai kebutuhan
        ]);
        CRUD::addField([
                'name' => 'deskripsi',
                'label' => 'deskripsi',
                'type' => 'textarea',
        ]);
        CRUD::addField([
                'name' => 'email',
                'label' => 'email',
                'type' => 'email',
        ]);
    }
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
