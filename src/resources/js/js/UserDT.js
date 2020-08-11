$(document).ready( function () {
    $('#laravel_datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "/users-table",
        "order": [[0, "desc"]],
        columns: [
            { data: 'id', name: 'users.id' },
            { data: 'name', name: 'users.name' },
            { data: 'email', name: 'users.email' },
            { data: 'updated_at', name: 'users.updated_at' },
            { data: 'actions', name: 'action' }
        ]
    });
});