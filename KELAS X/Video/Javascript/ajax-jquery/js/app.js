$(document).ready(function() {
    function selectData() {
       $.ajax({
        type: "get",
        url: "php/select.php",
        dataType: "json",
        success: function (response) {
            let out = "";
            let No = 1;
            $.each(response, function (key, val) {
                out += `<tr>
                    <td>${no++}</td>
                    <td>${val.pelanggan}</td>
                    <td>${val.alamat}</td>
                    <td>${val.telp}</td>
                </tr>`;
            });

            $("#isidata").html(out);
        }
       });
    }
    function selectData() {
        alert("insert");
    }
    function selectData() {
        alert("delete");
    }
    function selectData() {
        alert("update");
    }

    selectData();
});