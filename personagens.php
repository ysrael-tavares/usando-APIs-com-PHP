<?php

echo'<h1 class="text-white">Personagens da saga Star Wars</h1>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th class="col">Nome</th>
            <th class="col">Gênero</th>
            <th class="col">Altura</th>
            <th class="col">Peso</th>
        </tr>
    </thead>
    <tbody>';

        $url = "https://swapi.dev/api/people/";

        do{
            $resultado = json_decode(file_get_contents($url));

            foreach($resultado->results as $item){
                echo "<tr>\n";
                echo "<td>".ucwords($item->name)."</td>\n"; //Nome
                echo "<td>$item->gender</td>\n"; //Gênero
                echo "<td>$item->height Cm</td>\n"; //Altura
                echo "<td>$item->mass Kg</td>\n"; //Peso
                echo "</tr>\n";
            }

            $url = $resultado->next;
        }while($resultado->next != NULL);

        
echo'
    </tbody>
</table>';