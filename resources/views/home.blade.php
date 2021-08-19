@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Utente User') }} {{Auth::user()->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Dati anagrafici:') }}

                    <ul>
                       <li>Nome: {{Auth::user()->name}}</li>
                       <li>Cognome: {{Auth::user()->lastname}}</li>
                       <li>Numero di telefono: {{Auth::user()->phone_number}}</li>
                       <li>Data di nascita: {{Auth::user()->birth_date}}</li>
                       <li>Indirizzo: {{Auth::user()->address}}</li>
                   </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
