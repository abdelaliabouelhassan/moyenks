<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Formularz  | data</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class=" ">
      
        <div class=" w-full mx-auto pt-32">
           
            
            
<div class="relative overflow-x-auto shadow-md">
    <table class="w-full text-sm text-left text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Imię i Nazwisko
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Ulica, numer domu
                </th>
                <th scope="col" class="px-6 py-3">
                    Miasto
                </th>
                <th scope="col" class="px-6 py-3">
                    Kod pocztowy
                </th>
                <th scope="col" class="px-6 py-3">
                    Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Model i rozmiar
                </th>
                <th scope="col" class="px-6 py-3">
                    Suma (PLN)
                </th>
               
                <th scope="col" class="px-6 py-3">
                    sposob
                </th>
                <th scope="col" class="px-6 py-3">
                    PDF
                </th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr class="bg-white border-b  ">
               
                    
               
                <th scope="row" class="px-6 py-4 font-medium text-gray-900  ">
                  {{$item->imie_nazwisko}}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900  ">
                    {{$item->email}}
                  </th>
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900  ">
                    {{$item->ulicanr}}
                  </th>
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900  ">
                    {{$item->miasto}}
                  </th>
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900  ">
                    {{$item->kodpocztowy}}
                  </th>
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900  ">
                    {{$item->date}}
                  </th>
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900  ">
                    {{$item->model}}
                  </th>
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900  ">
                    {{$item->suma}}
                  </th>
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900  ">
                    {{$item->sposob}}
                  </th>
                  <th scope="row" class="px-6 py-4 font-medium  ">
                    <a href="{{$item->pdf}}" target="_blank" class=" text-blue-500 underline">Preview pdf</a>
                  </th>
             
                {{-- <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

        </div>

    </body>
</html>
