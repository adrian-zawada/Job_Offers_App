<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            body {
                margin:20px;
            }
        </style>
    </head>
    <body>
            <div class="container">
                <div class="text-center">
                    <h1>Aktualne oferty pracy</h1>
                    <p class="lead">Nowoczesna rekrutacja</p>
                </div>

                <div class="card-columns">
                    @foreach ($data['data'] as $offer)
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    @foreach ($offer['categories'] as $categories)
                                        <p class="card-text">{{ $categories ?? ''}}</p>
                                    @endforeach
                                </div>
                                <h5 class="card-title">{{ $offer['id'] }}. {{ $offer['admin_name'] }}</h5>
                                    <div class="text-center">
                                        @foreach ($offer['cities'] as $cities)
                                            <p class="card-text">{{ $cities ?? ''}}</p>
                                        @endforeach
                                    </div>
                                    <p class="card-text float-right"><small class="text-muted">Opublikowano {{ $offer['date_start'] ?? '-- brak danych --' }}</small></p>
                                    <a href="#" class="btn btn-primary float-left mb-3">Aplikuj</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
    </body>