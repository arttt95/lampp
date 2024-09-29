function requisitarPagina(url) {

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

        if(ajax.readyState == 4) {
            console.log('Requisição finalizada com sucesso')
            document.getElementById('loading').remove()
        }

    }

    ajax.send()
    //console.log(ajax)

}
