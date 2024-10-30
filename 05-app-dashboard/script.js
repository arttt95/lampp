$(document).ready(() => {
 
    $('#documentacao').on('click', () => {

        //$('#pagina').load('documentacao.html');

        /*
        $.get('documentacao.html', data => {
            $('#pagina').html(data);
        })
        */

        $.post('documentacao.html', data => {
            $('#pagina').html(data);
        })

    })

    $('#suporte').on('click', () => {

        //$('#pagina').load('suporte.html');

        /*
        $.get('suporte.html', data => {
            $('#pagina').html(data);
        })
        */

        $.post('suporte.html', data => {
            $('#pagina').html(data);
        })

    })

    // Ajax
    $('#competencia').on('change', e => {

        let competencia = $(e.target).val();
        //console.log(competencia);

        $.ajax({
            type: 'GET',
            url: 'app.php',
            data: `competencia=${competencia}`, //x-www-form-urlencoded -> competencia=2018-08&x=10&y=20
            dataType: 'json',
            success: dados => {
                $('#numeroVendas').html(dados.numeroVendas);
                $('#totalVendas').html(dados.totalVendas);
                $('#clientesAtivos').html(dados.clientes_ativos);
            },
            error: erro => {console.log('Erro!')}
            
        });

        // Método, URL, Dados, Sucesso, Erro

    })

})