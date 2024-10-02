function getFilmes() {

    let xmlHttp = new XMLHttpRequest()
    xmlHttp.open('GET', 'http://localhost/454-xml-pt3/filmes.xml');

    xmlHttp.onreadystatechange = () => {

        if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {

            let XMLFilmes = xmlHttp.responseText;
            console.log(XMLFilmes);
            
            let parser = new DOMParser();

            domFilmes = parser.parseFromString(XMLFilmes, 'text/xml');

            //console.log(domFilmes);

            jsonFilmes = xmlToJson(domFilmes);

            //console.log(jsonFilmes);

            for(let i in jsonFilmes['filmes']['filme']) {
                item = jsonFilmes['filmes']['filme'][i];

                let divRow = document.createElement('div');
                divRow.className = 'row';

                let divCol = document.createElement('div');
                divCol.className = 'col';

                //////////////
                //  Título  //
                //////////////

                let p1 = document.createElement('p'); // Título
                p1.innerHTML = '<strong>Título:</strong> ' + item['titulo']['#text'];

                //////////////
                //  Resumo  //
                //////////////

                let p2 = document.createElement('p'); // Resumo
                p2.innerHTML = '<strong>Resumo:</strong> ' + item['resumo']['#text'];

                //////////////
                //  Genero  //
                //////////////

                let genero = '';

                for(let g in item.genero) {
                    if(genero) genero += ', ';
                    genero += item.genero[g]['#text'];
                }

                genero += '.';

                let p3 = document.createElement('p'); // Gênero
                p3.innerHTML = '<strong>Gênero:</strong> ' + genero;

                //////////////
                //  Elenco  //
                //////////////

                let elenco = '';
                
                for(let e in item.elenco.ator) {

                    if(elenco) elenco += ', ';
                    elenco += item.elenco.ator[e]['#text'];
                    
                }

                elenco += '.';

                let p4 = document.createElement('p'); // Elenco
                p4.innerHTML = '<strong>Gênero:</strong> ' + elenco;

                //////////////
                //  Data L  //
                //////////////

                let p5 = document.createElement('p'); // Data de lançamento
                p5.innerHTML = '<strong>Data de lançamento:</strong> ' + item.dataLancamento['#text'] + ' (' + item.dataLancamento['@attributes']['pais'] + ').';

                let hr = document.createElement('hr');

                divRow.appendChild(divCol);
                divCol.appendChild(p1);
                divCol.appendChild(p2);
                divCol.appendChild(p3);
                divCol.appendChild(p4);
                divCol.appendChild(p5);
                divCol.appendChild(hr);

                document.getElementById('lista').appendChild(divRow);

            }

            /*

            <div class="row">
                <div class="col">
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>

            */

        }

        if(xmlHttp.readyState == 4 && xmlHttp.status == 404) {

            //...

        }

    }

    xmlHttp.send();
}