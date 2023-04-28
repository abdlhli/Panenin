$(document).ready(function () {
    $.ajax({
        url: "/path/to/your/script",
        type: "POST",
        data: { key: "value" },
        dataType: "json",
        success: function (response) {
            console.log(response);
        },
        error: function (response) {
            console.log(response);
        },
    });
});
