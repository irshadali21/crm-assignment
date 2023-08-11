<?php

namespace App\DataTables;

use App\Models\Company;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\Datatable;
use Illuminate\Support\Facades\Storage;

class CompanyDataTable extends Datatable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);
        $columns = array_column($this->getColumns(), 'data');
        $dataTable = $dataTable
            ->editColumn('logo', function ($company) {
                $logo = $company->logo ?  Storage::url($company->logo) : asset('/images/dummy.png');
                return '<img src="' . $logo  . '" alt="logo" srcset="" width=100px>';
            })
            ->addColumn('action', 'companies.datatables_actions')
            ->rawColumns(array_merge($columns, ['action']));

        return $dataTable;
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Company $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Company $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
        ->columns($this->getColumns())
        ->minifiedAjax()
        ->addAction(['width' => '80px', 'printable' => false, 'responsivePriority' => '100'])
        ;
    }

    /**
     * Get columns.
     *
     * @return array
     */

    protected function getColumns()
    {
        $columns = [
            ['data' => 'name',],
            ['data' => 'email',],
            ['data' => 'website',],
            ['data' => 'logo',],
        ];

        return $columns;
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'CompanyDataTable' . time();
    }
}
