@extends('layouts.main-layout')
@section('content')

    <h1>Nuovo Ospite</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method='POST' action="{{ route('store')}}">

        @csrf 
        @method('POST')
        <div>
            <label for="name">Nome</label>
            <input id='name' type="text" name='name' placeholder="Mario">
    
            <label for="lastname">Cognome</label>
            <input id='lastname' type="text" name='lastname' placeholder="Rossi">
            
            <label for="lastname">Data di Nascita</label>
            <input id='date_of_birth' type="text" name='date_of_birth' placeholder="12/02/2000">
        </div>

        <div>

            <label for="lastname">Documento</label>
            <input id='document_type' type="text" name='document_type' placeholder="CI">
    
            
            <label for="lastname">Documento Numero</label>
            <input id='document_number' type="text" name='document_number' placeholder="AV15268"> 
        </div>

      
        
        <button>aggiungi</button>
    </form>
    

@endsection