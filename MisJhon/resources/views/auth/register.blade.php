<x-layout>
  <main class="bg-gray-50 dark:bg-gray-900">
    <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-lg">
        <h2 class="text-center text-2xl font-bold text-gray-900 dark:text-white sm:text-3xl"
          data-translate="form_register_title">
          Crear una cuenta
        </h2>

        <form id="formRegistro" action="{{ route('register') }}" method="POST"
          class="mt-6 mb-0 space-y-6 rounded-lg p-6 shadow-xl bg-white dark:bg-gray-800">
          @csrf

          <p class="text-center text-lg font-medium text-gray-900 dark:text-white"
            data-translate="form_register_subtitle">
            Ingresa tus datos personales
          </p>

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
            <label class="sr-only" data-translate="form_name">Nombre Completo</label>
            <div class="relative flex items-center">
              <svg class="absolute left-4 size-5 text-gray-500 dark:text-gray-200" fill="none" stroke="currentColor"
                stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg>
              <input type="text" required name="name" value="{{ old('name') }}"
                class="w-full rounded-lg border-gray-300 bg-white dark:border-gray-600 dark:bg-gray-700 text-gray-900 dark:text-white pl-12 p-3 text-sm shadow-sm dark:placeholder-gray-200 placeholder-gray-500"
                placeholder="Nombre completo" data-translate-placeholder="placeholder_fullname">
            </div>
          </div>

          <div>
            <label class="sr-only" data-translate="form_email">Email</label>
            <div class="relative flex items-center">
              <svg class="absolute left-4 size-5 text-gray-500 dark:text-gray-200" fill="none" stroke="currentColor"
                stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
              </svg>
              <input type="email" required name="email" value="{{ old('email') }}"
                class="w-full rounded-lg border-gray-300 bg-white dark:border-gray-600 dark:bg-gray-700 text-gray-900 dark:text-white pl-12 p-3 text-sm shadow-sm dark:placeholder-gray-200 placeholder-gray-500"
                placeholder="Correo electrónico" data-translate-placeholder="placeholder_email">
            </div>
          </div>

          <div>
            <label class="sr-only" data-translate="form_phone">Teléfono</label>
            <div class="relative flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-4 size-5 text-gray-500 dark:text-gray-200"
                viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233a14 14 0 0 0 6.392 6.384" />
              </svg>
              <input type="tel" required name="telefono" value="{{ old('telefono') }}"
                class="w-full rounded-lg border-gray-300 bg-white dark:border-gray-600 dark:bg-gray-700 text-gray-900 dark:text-white pl-12 p-3 text-sm shadow-sm dark:placeholder-gray-200 placeholder-gray-500"
                placeholder="Número de teléfono" data-translate-placeholder="placeholder_phone_register">
            </div>
          </div>

          <div>
            <label class="sr-only" data-translate="form_address">Dirección</label>
            <div class="relative flex items-center">
              <svg class="absolute left-4 size-5 text-gray-500 dark:text-gray-200" fill="none" stroke="currentColor"
                stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 2a7 7 0 00-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 00-7-7z" />
              </svg>
              <input type="text" required name="direccion" value="{{ old('direccion') }}"
                class="w-full rounded-lg border-gray-300 bg-white dark:border-gray-600 dark:bg-gray-700 text-gray-900 dark:text-white pl-12 p-3 text-sm shadow-sm dark:placeholder-gray-200 placeholder-gray-500"
                placeholder="Dirección completa" data-translate-placeholder="placeholder_address_full">
            </div>
          </div>

          <div>
            <label class="sr-only" data-translate="select_district">Distrito</label>

            <select name="region" id="region" required
              class="w-full rounded-lg border border-gray-300 bg-white dark:bg-gray-700 text-gray-900 dark:text-white p-4 text-sm shadow-sm ">
              <option value="" disabled selected data-translate="select_district">Seleccione Distrito</option>
              <option value="trujillo" {{ old('region') == 'trujillo' ? 'selected' : '' }}>Trujillo</option>
              <option value="el_porvenir" {{ old('region') == 'el_porvenir' ? 'selected' : '' }}>El Porvenir</option>
              <option value="florencia_de_mora" {{ old('region') == 'florencia_de_mora' ? 'selected' : '' }}>Florencia de
                Mora</option>
              <option value="huanchaco" {{ old('region') == 'huanchaco' ? 'selected' : '' }}>Huanchaco</option>
              <option value="la_esperanza" {{ old('region') == 'la_esperanza' ? 'selected' : '' }}>La Esperanza</option>
              <option value="laredo" {{ old('region') == 'laredo' ? 'selected' : '' }}>Laredo</option>
              <option value="moche" {{ old('region') == 'moche' ? 'selected' : '' }}>Moche</option>
              <option value="poroto" {{ old('region') == 'poroto' ? 'selected' : '' }}>Poroto</option>
              <option value="salaverry" {{ old('region') == 'salaverry' ? 'selected' : '' }}>Salaverry</option>
              <option value="simbal" {{ old('region') == 'simbal' ? 'selected' : '' }}>Simbal</option>
              <option value="victor_larco_herrera" {{ old('region') == 'victor_larco_herrera' ? 'selected' : '' }}>Víctor
                Larco Herrera</option>
            </select>
          </div>

          <div>
            <label class="sr-only" data-translate="form_password">Contraseña</label>
            <div class="relative flex items-center">
              <svg class="absolute left-4 size-5 text-gray-500 dark:text-gray-200" fill="none" stroke="currentColor"
                stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
              </svg>
              <input type="password" id="password" name="password" required
                class="w-full rounded-lg border-gray-300 bg-white dark:border-gray-600 dark:bg-gray-700 text-gray-900 dark:text-white pl-12 p-3 text-sm shadow-sm dark:placeholder-gray-200 placeholder-gray-500"
                placeholder="Contraseña" data-translate-placeholder="placeholder_password">
            </div>
            <p class="text-red-500 text-sm text-center mt-2" data-translate="pass_length_hint">La contraseña debe tener
              al menos 8 caracteres</p>
          </div>

          <div>
            <label class="sr-only" data-translate="placeholder_confirm_password">Confirmar Contraseña</label>
            <div class="relative flex items-center">
              <svg class="absolute left-4 size-5 text-gray-500 dark:text-gray-200" fill="none" stroke="currentColor"
                stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
              </svg>

              <input type="password" id="password2" required name="password2"
                class="w-full rounded-lg border-gray-300 bg-white dark:border-gray-600 dark:bg-gray-700 text-gray-900 dark:text-white pl-12 p-3 text-sm shadow-sm dark:placeholder-gray-200 placeholder-gray-500"
                placeholder="Confirmar contraseña" data-translate-placeholder="placeholder_confirm_password">
            </div>
            <p id="msgPass" class="text-sm mt-1 font-medium text-center"></p>
          </div>
          <button type="submit"
            class="mt-4 w-full bg-pink-500 rounded-lg px-5 p-3 hover:bg-pink-600 active:bg-pink-600 font-medium text-white cursor-pointer shadow-md transition-all"
            data-translate="btn_create_account">
            Crear cuenta
          </button>
        </form>
      </div>
    </div>
  </main>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const pass = document.getElementById("password");
      const pass2 = document.getElementById("password2");
      const msg = document.getElementById("msgPass");

      function validarPasswords() {
        if (!pass.value || !pass2.value) {
          msg.textContent = "";
          return;
        }

        const lang = localStorage.getItem('misjhon-language') || 'es';
        const isMatch = pass.value === pass2.value;

        if (isMatch) {
          msg.textContent = window.translations?.[lang]?.passwords_match || "✔ Las contraseñas coinciden";
          msg.className = "text-green-500 text-sm mt-1 text-center";
        } else {
          msg.textContent = window.translations?.[lang]?.passwords_no_match || "✖ Las contraseñas no coinciden";
          msg.className = "text-red-500 text-sm mt-1 text-center";
        }
      }

      pass.addEventListener("input", validarPasswords);
      pass2.addEventListener("input", validarPasswords);

      // Suscribirse a cambios de idioma para actualizar el mensaje de validación
      window.addEventListener('languageChanged', validarPasswords);
    });
  </script>
</x-layout>