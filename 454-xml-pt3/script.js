function getFilmes() {

    let xmlHttp = new XMLHttpRequest()
    xmlHttp.open('GET', 'http://localhost/454-xml-pt3/filmes.xml');

    xmlHttp.onreadystatechange = () => {

        if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {

            let XMLFilmes = xmlHttp.responseText;
            console.log(XMLFilmes);
            
            let parser = new DOMParser();

            domFilmes = parser.parseFromString(XMLFilmes, 'text/xml');

            console.log(domFilmes);

            jsonFilmes = xmlToJson(domFilmes);

            console.log(jsonFilmes);

            console.log('Yeah buddy!');

        }

        if(xmlHttp.readyState == 4 && xmlHttp.status == 404) {

            //...

        }

    }

    xmlHttp.send()
}