@extends('property.master')

@section('content')

    <div class="container my-5">

        <h3 class="text-center">Pagina do imovel</h3>

        <?php
            if (!empty($property)) {
                foreach ($property as $prop)  {
        ?>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-dark">
                        Titulo do imovel: <?= $prop->title; ?>
                    </li>
                    <li class="list-group-item">
                        Descrição: <?= $prop->description; ?>
                    </li>
                    <li class="list-group-item">
                        Valor da locação: <?= $prop->rental_price; ?>
                    </li>
                    <li class="list-group-item">
                        Valor da venda: <?= $prop->sale_price; ?>
                    </li>
                </ul>
        <?php
                }
            }
        ?>

    </div>

@endsection
