function requisitarPagina(url) {

    let ajax = new XMLHttpRequest();

    // Requisição não iniciada, state = 0
    console.log(ajax.readyState)

    ajax.open('GET', url)

    // Conexão estabelecida com o servidor, state = 1
    console.log(ajax.readyState)

    // Lógica que permança escutando o progresso da requisição
    ajax.onreadystatechange = () => {
        console.log(ajax.readyState)
    }

    ajax.send()
    //console.log(ajax)

}
