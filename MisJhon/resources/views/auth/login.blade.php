<x-layout>
  <main class="bg-gray-50 dark:bg-gray-900">
    <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-lg">
        <h2 class="text-center text-2xl font-bold text-gray-900 dark:text-white sm:text-3xl"
          data-translate="form_login_title">
          Ingresar
        </h2>

        <form action="{{ route('login') }}" method="POST"
          class="mt-6 mb-0 space-y-4 rounded-lg p-4 shadow-xl sm:p-6 lg:p-8 bg-white dark:bg-gray-800">
          @csrf
          <p class="text-center text-lg font-medium text-gray-900 dark:text-white" data-translate="form_login_subtitle">
            Ingresa tus datos</p>

          @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
              <strong class="font-bold">¡Error!</strong>
              <ul class="mt-2 list-inside">
                @foreach ($errors->all() as $error)
                  <li class="ml-2">{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <div>
            <label for="email" class="sr-only" data-translate="form_email">Email</label>

            <div class="relative">
              <input required type="email" name="email" id="email" value="{{ old('email') }}"
                class="w-full rounded-lg border-gray-200 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-200 placeholder-gray-500 p-4 pe-12 text-sm shadow-sm"
                placeholder="Email" data-translate-placeholder="placeholder_email" />

              <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-gray-500 dark:text-gray-200" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
              </span>
            </div>
          </div>

          <div>
            <label for="password" class="sr-only" data-translate="form_password">Contraseña</label>

            <div class="relative">
              <input required type="password" name="password" id="password"
                class="w-full rounded-lg border-gray-200 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-200 placeholder-gray-500 p-4 pe-12 text-sm shadow-sm"
                placeholder="Contraseña" data-translate-placeholder="placeholder_password" />

              <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-gray-500 dark:text-gray-200" fill="none"
                  viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
              </span>
            </div>
            <button type="submit"
              class=" mt-4 w-full bg-pink-500 rounded-lg px-5 p-3 hover:bg-pink-600 font-medium text-white shadow-md transition-all"
              data-translate="btn_login">
              Ingresar
            </button>
          </div>
        </form>
        <p class="text-center mt-4 text-gray-500 dark:text-gray-400">
          <span data-translate="no_account">¿No tienes una cuenta?</span>
          <a class="text-pink-600 hover:underline font-semibold" href="{{ route('register') }}"
            data-translate="register_link">Regístrate</a>
        </p>
      </div>
    </div>
  </main>
</x-layout>