$(document).ready(() => {

    $('#enviar').on('click', (e) => {

        e.preventDefault();

        let dados = $('#formulario').serialize();
        console.log(dados);

        // Ajax
        $.ajax({
            type: 'post',
            url: 'app.php',
            data: dados, // x-www-form-urlencoded
            dataType: 'json',
            success: dados => {console.log(dados)},
            error: erro => {console.log(erro)}
        })

    })


})

/*
$.ajax({
            type: 'GET',
            url: 'app.php',
            data: `competencia=${competencia}`, //x-www-form-urlencoded -> competencia=2018-08&x=10&y=20
            dataType: 'json',
            success: dados => {
                $('#numeroVendas').html(dados.numeroVendas);
                $('#totalVendas').html(dados.totalVendas);
            },
            error: erro => {console.log('Erro!')}*/