function getFilmes() {

    let xmlHttp = new XMLHttpRequest();
    xmlHttp.open('GET', 'http://localhost/453-xml-pt2/filmes.xml')

    xmlHttp.onreadystatechange = () => {

        if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {

            let XMLFilmes = xmlHttp.responseText
            console.log(XMLFilmes)

        }

        if(xmlHttp.readyState == 4 && xmlHttp == 404) {

            //...

        }

    }

    xmlHttp.send()
}