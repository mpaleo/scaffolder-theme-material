@extends('layouts.create')

@section('breadcrumb')

    <a href="/{{route_prefix}}/{{breadcrumb_lw}}">{{breadcrumb}}s</a> / Create

@endsection

@section('form-content')

    {{fields}}
@endsection

@push('scripts')

    <script>
        $('form').submit(function(event){
            event.preventDefault();

            $.ajax({
                url: '/{{route_prefix}}/{{class_name_lw}}',
                type: 'POST',
                data: $('form').serialize()
            })
            .done(function(response) {
                window.location = "/{{route_prefix}}/{{breadcrumb_lw}}";
            })
            .fail(function(response) {
                Materialize.toast('Error: ' + response.statusText, 4000);
                console.log(response);
            });
        });
    </script>

@endpush