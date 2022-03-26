<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <x-app-layout>
                <x-slot name="header">
                <div class="barra-inf">
                    <div class="barra-inf-esq">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Gerenciamento de Certificados SSL') }}
                        </h2>
                    </div>
                    <div class="barra-inf-dir">
                        <form class="form-busca" action="/dashboard" method="GET">
                            <input type="text" id="search" name="search" class="form-control" placeholder="Buscar Domínio">
                        </form>
                    </div>
                </div>
                </x-slot>
            </x-app-layout>
        </header>
        @yield('content')
        <footer>
            <div class="footer">
                <p>Área Local &copy; 2022</p>
            </div>
        </footer>
    </body>
</html>