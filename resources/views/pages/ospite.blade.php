@extends('layouts.main-layout')
@section('content')



    <p class="dettagli">
        <strong>
            Dettaglio Ospite
        </strong>
    </p>
    
    <div class="dett-ospite">
        <label for="">
            <strong>
                Nome e Cognome
            </strong>
        </label>
        <p>
            {{$ospite->name}} {{$ospite->lastname}}
        </p>

        <label for="">
            <strong>
                Data di Nascita
            </strong>
        </label>
        <p>
            {{$ospite->date_of_birth}}
        </p>
    </div>
    

@endsection