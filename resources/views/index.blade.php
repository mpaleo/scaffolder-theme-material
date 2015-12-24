@extends('layouts.page')

@section('breadcrumb')

    {{breadcrumb}}s

@endsection

@section('content')

    {{-- Datatable --}}
    <table class="centered striped">
        <thead>
        <tr>
            {{table_headers}}
            <th>Actions</th>
        </tr>
        </thead>
    </table>

    {{-- FAB --}}
    <div class="fixed-action-btn">
        <a href="/{{route_prefix}}/{{class_name_lw}}/create" class="btn-floating btn-large pink waves-effect">
            <i class="large material-icons">add</i>
        </a>
    </div>

@endsection

@push('scripts')

    <script>
        {{-- Datatable --}}
        var datatable = $('table').DataTable({
            processing: true,
            serverSide: true,
            bFilter: true,
            bLengthChange: false,
            ajax: '/{{route_prefix}}/get{{datatable_url}}s',
            oLanguage: {
                sProcessing: "Processing<div class=\"progress\"><div class=\"indeterminate\"></div></div>"
            },
            columns: [
                {{datatable_fields}}
                { data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });

        {{-- Delete model --}}
        function deleteModel(modelId)
        {
            if(!isNaN(modelId))
            {
                modelId = +modelId;
            }

            $.ajax({
                url: '/{{route_prefix}}/{{class_name_lw}}/' + modelId,
                type: 'DELETE',
                data: { id: modelId }
            })
            .done(function(response) {
                datatable.ajax.reload(null, false);
            })
            .fail(function(response) {
                Materialize.toast('Error', 4000);
            });
        }

        {{-- Search --}}
        $('#search').keyup(function() {
            datatable.search($(this).val()).draw();
        })
    </script>

@endpush