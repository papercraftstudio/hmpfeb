$(document).ready(function () {
    $('#users').DataTable({
        "bLengthChange": false,
        "bInfo": false,
        "language": {
            "zeroRecords": "Tidak ada data yang ditemukan.",
            "sSearch": "Pencarian",
            "oPaginate": {
                "sPrevious": "Sebelumnya",
                "sNext": "Selanjutnya"
            }
        }
    })
});