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

    console.log(ajax.responseText)

    // Requisição não iniciada, state = 0
    //console.log(ajax.readyState)

    ajax.open('GET', url)

    // Conexão estabelecida com o servidor, state = 1
    //console.log(ajax.readyState)

    // Lógica que permança escutando o progresso da requisição
    ajax.onreadystatechange = () => {

        if(ajax.readyState == 4 && ajax.status == 200) {

            document.getElementById('conteudo').innerHTML = ajax.responseText
            //document.getElementById('loading').remove()

        }

        if(ajax.readyState == 4 && ajax.status == 404) {

            document.getElementById('conteudo').innerHTML = '.. Tente novamente mais tarde ...'
            //document.getElementById('loading').remove()

        }

    }

    ajax.send()
    //console.log(ajax)

}
