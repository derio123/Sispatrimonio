$(document).ready(function () {
    $('#Monitore').on('change', function () {
        var selectVal = '#'+$(this).val();

        $('#qtd1').children('div').hide();
        $('#qtd1').children(selectVal).show();
        $('#qtd2').children('div').hide();
        $('#qtd2').children(selectVal).show();
    })
})

