@extends('admin.layouts.app')

@section('title', 'Cadastrar Usuário')

@section('content')
    <div class="py-1 mb-4 mt-8 flex gap-4">
      <a href="{{ route('users.index') }}" class="text-blue-500 hover:text-blue-700"> <i class="fa-solid fa-arrow-left"></i>
        Voltar
      </a>
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mb-4">
        Cadastrar Usuário
      </h2>
    </div>

    <x-alert />

    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-4">
        <form action="{{ route('users.store') }}" method="POST">
          @include('admin.users.partials.form')

          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cadastrar</button>
        </form>
    </div>
@endsection
