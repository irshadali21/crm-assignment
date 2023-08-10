@extends('layouts.app')


@section('content')
    <style>
        .link-list-opt button {
            display: flex;
            align-items: center;
            padding: 0.625rem 1.25rem;
            font-size: 12px;
            font-weight: 500;
            color: #526484;
            transition: all .4s;
            line-height: 1.3rem;
            position: relative;
        }
    </style>
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-body">
                <div class="components-preview wide-xl mx-auto">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to" href="{{ route('dashboard') }}"><em
                                            class="icon ni ni-arrow-left"></em><span>Dashboard</span></a></div>
                                <h2 class="nk-block-title fw-normal">All Employees</h2>

                            </div>
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle"><a class="btn btn-icon btn-trigger toggle-expand me-n1"
                                        data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li class="nk-block-tools-opt"><a onclick="openModal('create', '{{ route('employees.create') }}')"
                                                    class="btn btn-primary"><em class="icon ni ni-reports"></em><span>Add New Employees</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="nk-block nk-block-lg">

                        <div class="card card-preview">
                            <div class="card-inner">

                                @include('employees.table')

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@push('scripts')
    <script>
        setTimeout(() => {
            var parentDiv = document.querySelector('.dataTables_filter').parentNode;
            parentDiv.classList.remove('col-md-6');
            parentDiv.classList.add('col-md-4');
            var siblingElements = Array.from(parentDiv.parentNode.children);
            siblingElements.forEach(function(sibling) {
                if (sibling !== parentDiv && sibling.classList.contains('col-md-6')) {
                    sibling.classList.remove('col-md-6');
                    sibling.classList.add('col-md-8');
                }
            });
        }, 1000);



    </script>
@endpush
