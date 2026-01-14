@csrf
<div class="mb-4">
  <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nome</label>
  <input type="text" name="name" id="name" value="{{ $user->name ?? old('name') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600" required>
</div>

<div class="mb-4">
  <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">E-mail</label>
  <input type="email" name="email" id="email" value="{{ $user->email ?? old('email') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600" required>
</div>

<div class="mb-4">
  <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Senha</label>
  <input type="password" name="password" id="password" value="{{ old('password') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600" required>
</div>

<div class="mb-4">
  <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Confirmar Senha</label>
  <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" id="password_confirmation" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600" required>
</div>



            