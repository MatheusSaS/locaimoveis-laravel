@extends('layouts.base')

@section('conteudo')
<style>
    .cards-list {
        z-index: 0;
        width: 100%;
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .card {
        margin: 30px auto;
        width: 300px;
        height: 300px;
        border-radius: 40px;
        cursor: pointer;
        transition: 0.4s;
    }

    .card .card_image {
        width: inherit;
        height: inherit;
        border-radius: 40px;
    }

    .card .card_image img {
        width: inherit;
        height: inherit;
        border-radius: 40px;
        object-fit: cover;
    }

    .card .card_title {
        text-align: center;
        border-radius: 0px 0px 40px 40px;
        font-family: sans-serif;
        font-weight: bold;
        font-size: 30px;
        margin-top: -80px;
        height: 40px;
    }

    .card:hover {
        transform: scale(0.9, 0.9);
        box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.25),
            -5px -5px 30px 5px rgba(0, 0, 0, 0.22);
    }

    .title-white {
        color: white;
    }

    .title-black {
        color: black;
    }

    .button {
        background: #42afc2;
        border: 0;
        padding: 10px 30px;
        color: #fff;
        transition: 0.4s;
        border-radius: 4px;
    }

    @media all and (max-width: 500px) {
        .card-list {
            /* On small screens, we are no longer using row direction but column */
            flex-direction: column;
        }
    }
</style>

<section class="py-10 text-center container">
    <div class="py-5 text-center">
        <h2>Meus Imóveis</h2>
    </div>
    <div class="col-lg-6 mx-auto">
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button class="btn button btn-lg px-4 gap-3">Criar Imovel para locação</button>
        </div>
    </div>
</section>

<div class="container">
    <div class="cards-list">
        @foreach($imoveis as $imovel)   
            <a href="#">
                <div class="card shadow">
                    <div class="card_image"> <img src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}" /> </div>
                    <div class="card_title title-white">
                        <p class="text-muted"> </p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

</div>
@endsection