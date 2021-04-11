@extends('property.master')

@section('content')

    <div class="container my-5">

        <h1>Listagem de produtos</h1>

        <?php

            if (!empty($properties)) {

                echo "<table class='table table-hover'>";

                echo "      <thead class='thead-dark'><tr>";
                echo "      <th>Titulo</th>";
                echo "      <th>Valor de locação</th>";
                echo "      <th>Valor de compra</th>";
                echo "      <th>Ações</th>";
                echo "  </tr></thead>";
                echo "  <tbody>";
                foreach ($properties as $property) {

                    $linkReadMore = url('/imoveis/' . $property->name);
                    $linkEditItem = url('/imoveis/editar/' . $property->name);
                    $linkRemoveItem = url('/imoveis/remover/' . $property->name);

                    echo "<tr>
                            <td>{$property->title}</td>
                            <td>R$ " . number_format($property->rental_price) . "</td>
                            <td>R$ " . number_format($property->sale_price) . "</td>
                            <td><a href='{$linkReadMore}'>Ver mais</a> | <a href='{$linkEditItem}'>Editar item</a> | <a href='{$linkRemoveItem}'>Deletar item</a></td>
                    </tr>";
                }

                echo "  </tbody>";
                echo "</table>";
            }

        ?>
    </div>

@endsection
