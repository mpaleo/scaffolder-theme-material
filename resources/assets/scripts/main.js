$(document).ready(function () {
    // Ajax settings
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Side-nav
    $(".button-collapse").sideNav();

    // Select
    $('select').material_select();
});