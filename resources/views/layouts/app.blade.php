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
    @stack('3rd-party-css')
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
        function confirmDelete(url) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                showLoaderOnConfirm: !0,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: url,
                        type: 'delete',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        processData: false,
                        cache: false,
                        contentType: false,
                        success: function(response) {
                            window.LaravelDataTables.dataTableBuilder.ajax.reload()
                            Swal.fire({
                                icon: "success",
                                title: response.message,
                                showConfirmButton: !1,
                                timer: 1500
                            })
                        },
                        error: function(response) {
                            toastr.clear()
                            Toast('there wasn an error', "error")
                        }
                    });
                }
            });
        }




        function openModal(action, url = null) {
            $('#m-body').empty()
            $('#modal').modal('show');
            var url = url;
            var methode = 'get';
            $.ajax({
                type: methode,
                url: url,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(respond) {
                    $('#m-body').append(respond.data);
                    $('#modal-title').html(respond.title);
                    options = {
                        allowClear: false,
                        dir: "ltr",
                        dropdownAutoWidth: false,
                        minimumResultsForSearch: 1,
                        placeholder: "",
                        theme: "default"
                    }
                    $('.jsjsjsseleec').select2(options);
                }
            })
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
                            $('#modal').modal('hide');
                            Swal.fire({
                                icon: "success",
                                title: response.message,
                                showConfirmButton: !1,
                                timer: 1500
                            })
                            if (response.tableReload == true) {
                                window.LaravelDataTables.dataTableBuilder.ajax.reload()
                            }

                        } else if (!response.success) {
                            var error123 = response.message.errorInfo
                            console.log(error123)
                            toastr.clear()
                            Toast(response.message, "error")
                        }
                    },
                    error: function(response) {
                        if (response.status == 422) {
                            const errors = response.responseJSON.errors;
                            for (const key in errors) {
                                $(`[name="${key}"]`).addClass('border-danger');
                                if (errors.hasOwnProperty.call(errors, key)) {
                                    const error = errors[key];
                                    Toast(error[0], "error")

                                }
                            }
                        } else {
                            toastr.clear()
                            Toast(response.message, "error")

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

        function fasdasd(e, n) {
                return Object.keys(n).forEach(function(t) {
                    e[t] = n[t]
                }), e
            }

        Toast = function(t, e, n) {
            var a = "info" === (e = e || "info") ? "ni ni-info-fill" : "success" === e ? "ni ni-check-circle-fill" : "error" === e ?
                "ni ni-cross-circle-fill" : "warning" === e ? "ni ni-alert-fill" : "",
                i = {
                    position: "bottom-right",
                    ui: "",
                    icon: "auto",
                    clear: !1
                },
                n = n ? f(i, n) : i;
            n.position = "toast-bottom-right",
                n.icon = "auto" === n.icon ? a : n.icon || "",
                n.ui = n.ui ? " " + n.ui : "",
                i = "" !== n.icon ? '<span class="toastr-icon"><em class="icon ' + n.icon + '"></em></span>' : "",
                "" !== (t = "" !== t ? i +
                    '<div class="toastr-text">' + t + "</div>" : "") && (!0 === n.clear && toastr.clear(),
                    a = {
                        closeButton: !0,
                        debug: !1,
                        newestOnTop: !1,
                        progressBar: !1,
                        positionClass: n.position + n.ui,
                        closeHtml: '<span class="btn-trigger">Close</span>',
                        preventDuplicates: !0,
                        showDuration: "1500",
                        hideDuration: "1500",
                        timeOut: "2000",
                        toastClass: "toastr",
                        extendedTimeOut: "3000"
                    },
                    toastr.options = fasdasd(a, n), toastr[e](t))
        }
    </script>
    @stack('3rd-party-js')


</body>

</html>
