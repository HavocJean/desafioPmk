$(document).ready(function() {
    $.each($('[mask]'), function() {
        switch ($(this).attr('mask')) {
            case "cpf":
                $(this).mask('000.000.000-00');
                break;
            case "tel":
                $(this).mask('(00) 0000-00009');
                break;
            case "rg":
                $(this).mask('99.999.999-9');
                break;
            case "money":
                $(this).mask('#.##0,00', { reverse: true });
                break;
            default:
                break;
        }
    })
});