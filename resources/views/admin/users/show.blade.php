@extends('admin.layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')
    <div class="py-1 mb-4 mt-8 flex gap-4">
      <a href="{{ route('users.index') }}" class="text-blue-500 hover:text-blue-700"> <i class="fa-solid fa-arrow-left"></i>
        Voltar
      </a>
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mb-4">
        Detalhes do Usuário {{ $user->name }}
      </h2>

      <a href="{{ route('users.edit', $user->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <i class="fa-solid fa-pencil"></i> Editar
      </a>
      <form action="{{ route('users.destroy', $user->id) }}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
            <i class="fa-solid fa-trash"></i> Deletar
          </button>
      </form>
    </div>
    
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-4">
        <p class="mb-2 text-white text-sm font-light"><strong>Nome:</strong> {{ $user->name }}</p>
        <p class="mb-2 text-white text-sm font-light"><strong>E-mail:</strong> {{ $user->email }}</p>
        <p class="mb-2 text-white text-sm font-light"><strong>Criado em:</strong> {{ $user->created_at->format('d/m/Y H:i:s') }}</p>
        <p class="mb-2 text-white text-sm font-light"><strong>Atualizado em:</strong> {{ $user->updated_at->format('d/m/Y H:i:s') }}</p>
        <p class="mb-2 text-white text-sm font-light"><strong>Deletado em:</strong> {{ $user->deleted_at ? $user->deleted_at->format('d/m/Y H:i:s') : 'Não deletado' }}</p>
    </div>
@endsection
