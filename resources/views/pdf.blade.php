<!DOCTYPE html>
<html>
    <head>
      
    </head>
    <body>
       <div>
          {{-- <img   src="{{public_path('assets/images/logo.jpeg')}}" alt=""> --}}
            {{-- <img  src="{{asset('assets/images/logo.jpeg')}}" alt=""> --}}
       </div>

       {{-- <p>
        Ja niżej podpisany/a {{$imie_nazwisko}}
        <br>
        <span>{{$ulicanr}}</span>
        <br> <br>
        Zamieszkały/a w  {{$miasto}} , {{$kodpocztowy}}<br> <br>

        Oświadczam, że w dniu {{$date}}  sprzedałem/am firmie „Anna Staniec” Nip:

        8792744469 Skąpe 29 87-140 Chełmża nastepujące towary:
       </p>
       <br>
       <br>
       <p>
        {{$model}}
       </p>
       <br>
       <br>
       <p>
        Zapłacono mi kwotę
        {{$suma}}
       </p>
       <br>
       <br>
       <br>
       <br>
       <p>
        Podpis
       </p>
       <img   src="{{$podpis}}" alt=""> -
       <br>
       <br>
       <br>
       <br>
       <div> --}}
        {{-- <img   src="{{public_path('assets/images/text.jpeg')}}" alt=""> --}}
          {{-- <img  src="{{asset('assets/images/text.jpeg')}}" alt=""> --}}
     </div>


     Ja niżej podpisany/a  {{$imie_nazwisko}}.
     <br>

     Zamieszkały/a w  {{$miasto}}}, {{$ulicanr}}, {{$kodpocztowy}}.
     <br>
     
     Oświadczam, że w dniu 	{{$date}} sprzedałem/am firmie „Anna Staniec” Nip: 8792744469 Skąpe 29 87-140 Chełmża .
     <br>
     Nastepujące towary: <br>
     {{$model}}.
     
     
     
     <br>
     
     Zapłacono mi kwotę  : <br>
     {cash}.{{$suma}} <br>
     
     Sposób płatności: <br>
     {{$sposob}}.
     

       
    </body>
</html>
