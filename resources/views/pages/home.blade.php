@extends('layouts.default')
@section('content')

    <div class="banner">
        <h1>BARRIL <span style="color: #FF6A38;">FIT</span></h1>
        <p class="subtitle">VENHA PARA A ACADEMIA MAIS BARRIL DOBRADO DA CIDADE!</p>
        <p class="texto-planos">Veja nossos planos e treine na unidade mais próxima de você!</p>
        <div class="botoes-banner">
            <button class="botao-cadastre" type="button">Cadastre-se</button>
            <button class="botao-planos" type="button">Planos</button>
        </div>

    </div>

    <div class="card-container">
        <div class="card">
            <div class="card-header">
                <h3>Barra</h3>
            </div>

            <img src="/assets/images/img-card1.jpg" alt="plano Barra" style="width:100%">
            <div class="card-info">

                <p><i class="fa-solid fa-location-dot" style="color: #1D1B20;"></i>  Avenida Vasco da Gama, n° 40028922</p>

            </div>

            <div class="card-buttons">
                <button class="planos-button" type="button">Planos</button>
                <button class="conheca-button" type="button">Conheça</button>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3>Cabula</h3>
            </div>

            <img src="/assets/images/img-card2.jpg" alt="plano Cabula" style="width:100%">

            <div class="card-info">

                <p><i class="fa-solid fa-location-dot" style="color: #1D1B20;"></i>  Alameda Uberaba, n° 40028922</p>

            </div>

            <div class="card-buttons">
                <button class="planos-button" type="button">Planos</button>
                <button class="conheca-button" type="button">Conheça</button>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3>Federação</h3>
            </div>

            <img src="/assets/images/img-card3.jpg" alt="plano Federação" style="width:100%">

            <div class="card-info">
                <p><i class="fa-solid fa-location-dot" style="color: #1D1B20;"></i>  Avenida Garibaldi, n° 40028922</p>

            </div>

            <div class="card-buttons">
                <button class="planos-button" type="button">Planos</button>
                <button class="conheca-button" type="button">Conheça</button>
            </div>
        </div>

    </div>


@stop
