@extends('layouts._main')

@section('title')
    DC Comics
@endsection

@section('main')
<main>
    <div class="comics-container">
        @foreach ($comics as $comic)
            @include('partials._comic-card')
        @endforeach
    </div>
    <div class="blue-section">
        <ul>
            <li>
                <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="">
                <p>Descrizione</p>
            </li>
            <li>
                <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="">
               
                <p>Descrizione</p>
            </li>
                    <li>
                <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="">
                <p>Descrizione</p>
            </li>        <li>
                <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="">
                <p>Descrizione</p>
            </li>
                    <li>
                <img src="{{asset('images/buy-dc-power-visa.svg')}}" alt="">
                <p>Descrizione</p>
            </li>    
        </ul>
    </div>
</main>
@endsection