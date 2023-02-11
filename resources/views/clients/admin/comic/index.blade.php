@extends('layouts.admin.master')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-selection__choice {
            background-color: #0dcaf0 !important;

            padding-right: 10px !important;
            padding-left: 30px !important;
            padding-top: 5px !important;
            padding-bottom: 4px !important;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem;
        }

        .select2-container .select2-selection--multiple {
            min-height: 38px !important;
        }

        .select2-selection__choice__remove {
            color: #fff !important;
            font-size: 1.4rem !important;
        }

        .select2-selection__choice__remove:hover {
            background-color: #0dcaf0 !important;
            color: black !important;
        }

        .badge {
            padding: .4em .7em !important;
            cursor: default;
        }

        .b_status {
            padding: .6em .9em !important;
            font-size: .9rem !important;
        }
    </style>
@endpush
@section('content-header')
    @include('layouts.admin.content_header')
@endsection
@section('content-wrapper')
    <div class="content-wrapper m-4" style="margin-top: 1rem !important;">
        <div class="col-12 d-flex align-items-center justify-content-between">
            <div class="form-group mb-3 position-relative col-6 px-0 d-flex">
                <div class="form-group mb-3 position-relative col-3 px-0">
                    <label for="" class="fs16">Status:</label>
                    <select type="text" name="status" id="select-status" class="col-12 form-control">
                        <option value="-1">All</option>
                        @foreach ($arrStatus as $status => $key)
                            <option value="{{ $key }}">{{ $status }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-9">
                    <label for="" class="fs16">Category:</label>
                    <select type="text" name="categories[]" id="select-category" class="ms-2 col-12" multiple>
                    </select>
                    <button class="btn position-absolute border-left-1" style="height: 38px; right: 10px"
                        onclick="filterCategory()">
                        <i class="fa-solid fa-filter"></i>
                    </button>
                </div>
            </div>
            @if (isAdmin())
                <div class="form-group">
                    <a href="{{ route('admin.comics.create') }}" class="btn btn-primary">Add Comic</a>
                </div>
            @endif
        </div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">Info</th>
                    <th scope="col">Categories</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="tbody-data">
            </tbody>
        </table>
        <div class="modal" id="modal-privew-chapter" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <iframe src="{{ route('reader.index') }}" frameborder="0" height="1000px" id=""></iframe>
                </div>
            </div>
        </div>
        <nav>
            <ul class="pagination pagination-rounded" style="float: right" id="pagination">
            </ul>
        </nav>
    </div>
@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        function submitDeleted() {
            if (confirm('You want to delete this comic, right?')) {
                $('#form-delete').submit();
            }
        }

        const filterCategory = () => {
            showDataTable();
        }

        const changeStatus = (chapter_id, old_status, status, status_name) => {
            if (confirm('You want to change status this comic, right?')) {
                var url = "{{ route('api.comics.change_status', ':id') }}";
                url = url.replace(':id', chapter_id);

                $.ajax({
                    url: url,
                    data: {
                        status: status || 0
                    },
                    type: 'POST',
                    success: function(response) {
                        if (response.success) {
                            $('.status[data-id="' + chapter_id + '"]')
                                .text(status_name || 'Đang tiến hành')
                                .removeClass(addClassStatus(old_status ?? 4))
                                .addClass(addClassStatus(status ?? 0));

                            notifySuccess(response.message);
                        }
                    },
                    error: function(data) {}
                });
            };
        }

        const showDataTable = (isSuperAdmin) => {
            $.ajax({
                url: "{{ route('api.comics.index') }}",
                dataType: 'json',
                data: {
                    page: {{ request()->get('page') ?? 1 }},
                    categories: $('#select-category').val() || [],
                    status: $('#select-status').val() || -1,
                    q: $('#search').val() || '',
                },
                success: function(response) {
                    $('#tbody-data').empty();
                    response.data.data.forEach(each => {
                        let avatar =
                            `<img width = '85px' height = '85px'
                                class="bg-info rounded-circle"
                                style="object-fit: cover"
                                src = "${window.location.origin + '/' + each.avatar}" />`

                        let url = "{{ route('admin.comics.chapters.index', ':slug') }}";
                        url = url.replace(':slug', each.slug);

                        let rate = '';
                        for (let index = 1; index <= 5; index++) {
                            if (index <= parseFloat(each.rate)) {
                                rate += '<i class="fas fa-star fs12 _on"></i>'
                            } else {
                                rate += '<i class="fas fa-star fs12"></i>'
                            }
                        }
                        let info =
                            `<a href="${url}" 
                                class="fw700">
                                ${each.name}
                            </a>
                            ${each.alias ? ' - ' + each.alias : ''}
                            <br>
                            Author: <strong>${each.author}</strong>
                            <br>
                            <div class="rate">${rate} (${each.count_rate})</div>`

                        let categories =
                            `<span class="badge bg-info">${each.language}</span>`;
                        each.categories.forEach(category => {
                            categories +=
                                `<span class="badge bg-info">${category.name}</span>`
                        })
                        let description = !!each.description ?
                            `<span class='text-ellipsis' style="-webkit-line-clamp: 3;">${each.description}</span>` :
                            ''

                        const arrStatus = $('#select-status')[0].options;

                        let bagde = addClassStatus(each.status);
                        let string = '';

                        if (!isSuperAdmin) {
                            string = `
                        <div class="dropdown notification-list topbar-dropdown ps-0 max_content">
                            <a class="nav-link dropdown-toggle arrow-none p-0 lh_0" data-toggle="dropdown" id="topbar-languagedrop" href="#"
                                role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="badge ${bagde} status b_status cursor_pointer" data-id=${each.id}>${each.status_name}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu"
                                style="right: 22% !important; min-width: 0; max-width: 100px;"
                                aria-labelledby="topbar-languagedrop">
                            `
                            arrStatus.forEach(element => {
                                if (parseInt(element.value) != each.status &&
                                    element.value != 4) {
                                    string +=
                                        `<span class="badge 
                                    ${addClassStatus(element.value)} 
                                    cursor_pointer col-12"
                                    onclick="changeStatus(${each.id}, ${each.status}, ${element.value}, '${element.text}')">
                                    ${element.text}
                                    </span>`;
                                };
                            });
                            string += `</div>`
                        } else {
                            string =
                                `<span class="badge ${bagde} status b_status" data-id=${each.id}>${each.status_name}</span>`;
                        }

                        let status =
                            `
                            ${
                                each.status_name !== 'Pending' 
                                ? string
                                : `<span class="badge badge-danger status b_status cursor_pointer" ${isSuperAdmin ? `onclick=changeStatus(${each.id})` : ''} data-id=${each.id}>Pending</span>`
                                }
                                `;

                        let created_at = convertDateToDateTime(each.created_at)
                        let action = `
                            <a  class="btn btn-primary col-12 mb-1" 
                                href="${window.location + '/edit/' + each.id}"
                            >
                                Edit
                            </a>
                            <form action=${window.location + '/destroy/' + each.id} method="POST" id="form-delete">
                                @csrf
                                <button class="btn btn-secondary col-12" onclick="submitDeleted()">Delete</button>
                            </form>
                            `

                        $('#tbody-data').append($('<tr>')
                            .append($('<td>').append(each.id))
                            .append($('<td>').append(avatar))
                            .append($('<td class="col-3">').append(info))
                            .append($('<td class="col-1">').append(categories))
                            .append($('<td class="col-2">').append(description))
                            .append($('<td>').append(status))
                            .append($('<td>').append(created_at))
                            .append($('<td class="col-1">').append(action))
                        )
                    });
                    $('.pagination').empty();
                    renderPagination(response.data.pagination);
                },
                error: function(response) {
                    notifyError(response.responseJSON.message);
                }
            });
        }
        $(document).ready(function() {
            //Show Data For Select2 Category
            $("#select-category").select2({
                ajax: {
                    delay: 250,
                    url: `{{ route('api.categories.index') }}`,
                    data: function(params) {
                        var queryParameters = {
                            q: params.term
                        }

                        return queryParameters;
                    },
                    processResults: function(data) {
                        return {
                            results: $.map(data.data, function(item) {
                                return {
                                    text: item.name,
                                    id: item.id
                                }
                            })
                        };
                    },

                }
            });

            $('#select-status').change(function() {
                showDataTable();
            })

            $('#search').change(function() {
                showDataTable();
            });

            $('button#new').on('click', function() {
                $('#modal-edit-chapter').modal('show');
            });

            //Event Click Pagination
            $(document).on('click', '#pagination > li > a', function(e) {
                let page = $(this)[0].getAttribute('page') || 1;

                var url = new URL(window.location.href);
                url.searchParams.set('page', page);

                window.location.href = url;
            })
        });
    </script>
    @if (isSuperAdmin())
        <script>
            showDataTable(1);
        </script>
    @else
        <script>
            showDataTable(0);
        </script>
    @endif
@endpush
