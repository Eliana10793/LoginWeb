@extends('layouts.app')

@section('title', 'Verificar Correo')

@section('content')
    <div class="bg-gray-200 p-4">
        @if (session('status') == 'verification-link-sent')
        <span class="block text-gray-700 text-center bg-gray-400 px-4 py-2">
                <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
                    <p class="font-bold">Mensaje de Informacion</p>
                    <p class="text-sm">El Correo fue enviado.</p>
                </div>

        </span>
        @endif
        <span class="block text-gray-700 text-center bg-gray-400 px-4 py-2 mt-2">

                {{ __('¡Gracias por registrarte! Antes de comenzar, ¿podría verificar su dirección de correo electrónico haciendo clic en el enlace que le acabamos de enviar? Si no recibiste el correo electrónico, con gusto te enviaremos otro.') }}

                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">{{ __('Correo de Verificacion') }}</button>.
                </form>
        </span>


    </div>
@endsection
