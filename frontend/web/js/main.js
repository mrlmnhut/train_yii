$(document).ready(function () {
    $('.select2').select2();
    $('#redo').click(function () {
        $(".select2").val(null).trigger("change");
    });
});
