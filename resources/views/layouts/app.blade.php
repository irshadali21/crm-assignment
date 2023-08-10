<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <title>Home - AI Copywriter | DashLite Admin Template</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=3.2.1') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=3.2.1') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>


<body class="nk-body ui-rounder has-sidebar ui-light ">
    <div class="nk-app-root">
        <div class="nk-main ">

            @include('layouts.navigation')
            <div class="nk-wrap ">
                @include('layouts.navigation-top')

                <!-- Page Content -->
                <main>
                    {{ $slot ?? '' }}
                    @yield('content')
                </main>

            </div>
        </div>
    </div>
    <div class="modal fade zoom" tabindex="-1" id="modal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content"> <a href="#" class="close" data-dismiss="modal" aria-label="Close"> <em class="icon ni ni-cross"
                        onclick="closemodal()"> </em> </a>
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">Please wait ...</h5>
                </div>

                <div id="m-body">

                </div>

            </div>
        </div>
    </div>


    <script src="{{ asset('assets/js/bundle.js?ver=3.2.1') }}"></script>
    <script src="{{ asset('assets/js/scripts.js?ver=3.2.1') }}"></script>






    <script>
        function openModal(action, url = null) {
            $('#m-body').empty()
            $('#modal').modal('show');

            var url = url;
            var methode = 'get';
            if (action == 'delete') {
                var html =  `<form action="`+url+`" data-method="delete" data-ajax='true' >
                                <div class="modal-body" id="modal-body">
                                    <div class="card card-preview">
                                        <div class="card-inner">
                                            <div class="preview-block">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <a onclick="closemodal()" class="btn btn-xl btn-dim btn-success">Close</a>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button type="submit" class="btn btn-xl btn-dim btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>`;
                $('#modal-title').html('Are You Sure');
                $('#m-body').html(html);
            } else {
                $.ajax({
                    type: methode,
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(respond) {
                        $('#m-body').append(respond.data);
                        $('#modal-title').html(respond.title);
                    }
                })
            }
        }

        $(document).on('submit', 'form', function(e) {
            if ($(this).data('ajax')) {
                e.preventDefault();
                var selector = $(this).find('button[type="submit"]');
                selector.attr('disabled', true);
                let url = $(this).prop('action');
                let method = $(this).data('method') ?? 'GET';
                let _token = "{{ csrf_token() }}"
                var formData = new FormData($(this)[0]);
                formData.append('_token', _token);
                console.log(formData);
                $.ajax({
                    url: url,
                    data: formData,
                    type: method,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    processData: false,
                    cache: false,
                    contentType: false,
                    success: function(response) {
                        if (response.success) {

                            $('#m-body').empty()
                            $('#modal-title').html('Data Saved')
                            $('#modal').modal('hide');

                            if (response.tableReload == true) {

                                window.LaravelDataTables.dataTableBuilder.ajax.reload()

                            }

                        } else if (response.error) {

                            $('#m-body').empty()
                            $('#modal-title').html('There was an Error')

                        }

                    },
                    complete: function() {
                        selector.removeAttr('disabled');
                    }
                });
            }
        });




        function closemodal() {
            $('#modal').modal('hide');

        }
    </script>
    @stack('scripts')


</body>

</html>
