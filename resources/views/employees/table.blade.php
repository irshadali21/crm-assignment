@include('layouts.datatables_css')
{!! $dataTable->table(['width' => '100%']) !!}

@push('scripts')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}



@endpush
