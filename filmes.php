<?php

echo'<h1 class="text-white">Filmes da saga Star Wars</h1>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th class="col">Titulo</th>
            <th class="col">Episódio</th>
            <th class="col">Diretor</th>
            <th class="col">Produtores</th>
        </tr>
    </thead>
    <tbody>';

        $url = "https://swapi.dev/api/films/";

        do{
            $resultado = json_decode(file_get_contents($url));

            foreach($resultado->results as $item){
                echo "<tr>\n";
                echo "<td>".ucwords($item->title)."</td>\n"; //Titulo
                echo "<td>$item->episode_id</td>\n"; //Número do episodio
                echo "<td>$item->director</td>\n"; //Diretor
                echo "<td>$item->producer</td>\n"; //Produtor
                echo "</tr>\n";
            }

            $url = $resultado->next;
        }while($resultado->next != NULL);

        
echo'
    </tbody>
</table>';