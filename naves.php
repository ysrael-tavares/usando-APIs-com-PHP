<?php

echo'<h1 class="text-white">Naves da saga Star Wars</h1>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th class="col">Nome</th>
            <th class="col">Modelo</th>
            <th class="col">Classe</th>
            <th class="col">Tamanho</th>
        </tr>
    </thead>
    <tbody>';

        $url = "https://swapi.dev/api/starships/";

        do{
            $resultado = json_decode(file_get_contents($url));

            foreach($resultado->results as $item){
                echo "<tr>\n";
                echo "<td>".ucwords($item->name)."</td>\n"; //Nome
                echo "<td>$item->model</td>\n"; //Modelo
                echo "<td>$item->starship_class</td>\n"; //Classe
                echo "<td>$item->length m</td>\n"; //Tamanho
                echo "</tr>\n";
            }

            $url = $resultado->next;
        }while($resultado->next != NULL);

        
echo'
    </tbody>
</table>';