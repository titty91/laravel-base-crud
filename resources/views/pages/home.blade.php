@extends('layouts.main-layout')
@section('content')  
<div class="contain">
<p> <strong>Lista Ospiti</strong></p>
<ul>
     @foreach ($ospiti as $ospite)
     <li> 
        <a href="{{route('show-ospite', $ospite -> id)}}">

         {{$ospite->name}}
         {{$ospite->lastname}} 

        </a>
     
    </li> 
    @endforeach
</ul>
</div>
@endsection
