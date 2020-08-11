$(document).ready( function () {
    $('#laravel_datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "/users",
        "order": [[4, "desc"], [0, "desc"]],
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'phonefield', name: 'phonefield' },
            { data: 'rname', name: 'rname' },
            { data: 'user_status', name: 'user_status' },
            { data: 'updated_at', name: 'updated_at' },
            { data: 'actions', name: 'action', "searchable": false }
        ]
    });
});