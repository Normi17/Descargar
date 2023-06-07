$(document).ready(() => {
    $("#open_menu").on("click", function() {
        if ($(this).data('active') == 0) {
            $("#menu_body").removeClass('d-none')
            $(this).data('active', 1)
        } else {
            $("#menu_body").addClass('d-none')
            $(this).data('active', 0)
        }
    })
})




