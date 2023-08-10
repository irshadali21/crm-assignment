{!! $dataTable->table(['width' => '100%', 'class' => ' .datatable-init-export  table ']) !!}
@push('scripts')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}



@endpush
