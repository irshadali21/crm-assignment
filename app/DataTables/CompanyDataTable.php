<?php

namespace App\DataTables;

use App\Models\Company;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
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

        $dataTable = datatables()
            ->eloquent($query)
            ->editColumn('logo', function ($company) {
                $logo = $company->logo ?  Storage::url($company->logo) : asset('/images/dummy.png');
                return '<img src="' . $logo  . '" alt="logo" srcset="">';
            })
            ->addColumn('action', 'companies.datatables_actions')
            ->rawColumns(['logo', 'action']);
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
            ->columns($this->getColumns());
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [


            Column::make('name'),
            Column::make('email'),
            Column::make('website'),
            Column::computed('logo')
                ->exportable(false)
                ->printable(false)
                ->searchable(false)
                ->width(100),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }
}
