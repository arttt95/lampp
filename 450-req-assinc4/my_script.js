function requisitarPagina(url) {

    document.getElementById('conteudo').innerHTML = ''

    // Incluir o gif de loading na página
    if(!document.getElementById('loading')) {

        let imgLoading = document.createElement('img')
        imgLoading.id = 'loading'
        imgLoading.src = 'loading.gif'
        imgLoading.class = 'rounded mx-auto d-block'

        document.getElementById('conteudo').appendChild(imgLoading)

    }

    let ajax = new XMLHttpRequest();

    // Requisição não iniciada, state = 0
    //console.log(ajax.readyState)

    ajax.open('GET', url)

    // Conexão estabelecida com o servidor, state = 1
    //console.log(ajax.readyState)

    // Lógica que permança escutando o progresso da requisição
    ajax.onreadystatechange = () => {

        if(ajax.readyState == 4 && ajax.status == 200) {

            document.getElementById('conteudo').innerHTML = 'Requisição finalizada com sucesso, o status é 200'
            //document.getElementById('loading').remove()

        }

        if(ajax.readyState == 4 && ajax.status == 404) {

            document.getElementById('conteudo').innerHTML = 'Requisição finalizada, porém o recurso solicitado não foi encontrado, o status é 404'
            //document.getElementById('loading').remove()

        }

    }

    ajax.send()
    //console.log(ajax)

}
