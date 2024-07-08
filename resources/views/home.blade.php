<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    @vite('resources/js/app.js')
    @extends('layouts.app')
    @section('title', 'Home')
</head>

@section('content')
<main class="container">
    <div class="row">
        @foreach ($products as $product)
            <div class="col-33">
                <div class="content margin-top-80">
                    <div class="images">
                        <img class="visible-image" src="{{ asset('./img/' . $product['frontImage']) }}" alt="img">
                        <img class="invisible-image" src="{{ asset('./img/' . $product['backImage']) }}" alt="img">
                    </div>
                    
                    <div class="labels">
                        @foreach ($product['badges'] as $badge)
                            @if ($badge['type'] === 'discount')
                                <div class="red-bg p-5"><span>{{ $badge['value'] }}</span></div>
                            @elseif ($badge['type'] === 'tag')
                                <div class="green-bg p-5"><span>{{ $badge['value'] }}</span></div>
                            @endif
                        @endforeach
                    </div>

                    <div class="clothes-info position-relative">
                        <h4>{{ $product['brand'] }}</h4>
                        <h3>{{ $product['name'] }}</h3>
                        <span class="red-txt">${{ $product['price'] }}</span>
                    </div>

                    <div class="red-heart position-relative">
                        &#10084;
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</main>
@endsection

</html>
