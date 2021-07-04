<?php

echo'<h1 class="text-white">Planetas da saga Star Wars</h1>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th class="col">Nome</th>
            <th class="col">Diâmetro</th>
            <th class="col">População</th>
            <th class="col">Clima</th>
        </tr>
    </thead>
    <tbody>';

        $url = "https://swapi.dev/api/planets/";

        do{
            $resultado = json_decode(file_get_contents($url));

            foreach($resultado->results as $item){
                echo "<tr>\n";
                echo "<td>".ucwords($item->name)."</td>\n";
                echo "<td>$item->diameter km<sup>2</sup></td>\n";
                echo "<td>$item->population</td>\n";
                echo "<td>".ucwords($item->climate)."</td>\n";
                echo "</tr>\n";
            }

            $url = $resultado->next;
        }while($resultado->next != NULL);

        
echo'
    </tbody>
</table>';