$(document).ready( function () {
    $('#dataTable').DataTable({
        processing: true,
        serverSide: false,
        ajax: "/audits",
        "order": [[0, "desc"]],
        columns: [
            { data: 'id', name: 'id' },
            { data: 'updated_at', name: 'updated_at' },
            { data: 'user_type', name: 'user_type' },
            { data: 'event', name: 'event' },
            { data: 'auditable_type', name: 'auditable_type' },
            { data: 'old_values', name: 'old_values' },
            { data: 'new_values', name: 'new_values' },
            { data: 'url', name: 'url' },
            { data: 'ip_address', name: 'ip_address' },
            { data: 'user_agent', name: 'user_agent' },
            { data: 'tags', name: 'tags' },
        ]
    });
});