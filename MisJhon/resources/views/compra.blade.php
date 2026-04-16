<x-layout>
  <main class="bg-gray-50 dark:bg-gray-900">
    <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-lg">
        <h2 class="text-center text-2xl font-bold text-gray-900 dark:text-white sm:text-3xl"
          data-translate="form_purchase_title">
          Formulario de Compra por Delivery
        </h2>

        <form action="{{ route('compra') }}" method="POST"
          class="mt-6 mb-0 space-y-4 rounded-xl p-4 shadow-xl sm:p-6 lg:p-8 bg-white dark:bg-gray-800">
          @csrf
          <p class="text-center text-lg font-medium text-gray-900 dark:text-white"
            data-translate="form_purchase_subtitle">Completa tus datos de envío</p>

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

          <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div>
              <label for="nombre" class="sr-only" data-translate="form_name">Nombre</label>
              <input required type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"
                class="w-full rounded-lg dark:bg-gray-700 dark:text-white dark:placeholder-gray-200 placeholder-gray-500 p-4 text-sm shadow-sm"
                placeholder="Nombre" data-translate-placeholder="placeholder_name" />
            </div>

            <div>
              <label for="apellido" class="sr-only" data-translate="placeholder_surname">Apellido</label>
              <input required type="text" name="apellido" id="apellido" value="{{ old('apellido') }}"
                class="w-full rounded-lg dark:bg-gray-700 dark:text-white dark:placeholder-gray-200 placeholder-gray-500 p-4 text-sm shadow-sm"
                placeholder="Apellido" data-translate-placeholder="placeholder_surname" />
            </div>
          </div>
          <div>
            <label for="email" class="sr-only" data-translate="form_email">Email</label>
            <div class="relative">
              <input required type="email" name="email" id="email" value="{{ old('email') }}"
                class="w-full rounded-lg dark:bg-gray-700 dark:text-white dark:placeholder-gray-200 placeholder-gray-500 p-4 pe-12 text-sm shadow-sm"
                placeholder="Correo Electrónico" data-translate-placeholder="placeholder_email" />
              <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-gray-500 dark:text-gray-200"
                  viewBox="0 0 20 20" fill="currentColor">
                  <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                  <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                </svg>
              </span>
            </div>
          </div>

          <div>
            <label for="telefono" class="sr-only" data-translate="form_phone">Teléfono</label>
            <div class="relative">
              <input required type="tel" name="telefono" id="telefono" value="{{ old('telefono') }}"
                class="w-full rounded-lg border-gray-200 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-200 placeholder-gray-500 p-4 pe-12 text-sm shadow-sm"
                placeholder="Teléfono (ej. 987654321)" data-translate-placeholder="placeholder_phone" />
              <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-gray-400 dark:text-gray-200"
                  viewBox="0 0 24 24">
                  <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2"
                    d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233a14 14 0 0 0 6.392 6.384" />
                </svg>
              </span>
            </div>
          </div>

          <div>
            <label for="direccion" class="sr-only" data-translate="form_address">Dirección</label>
            <div class="relative">
              <input required type="text" name="direccion" id="direccion" value="{{ old('direccion') }}"
                class="w-full rounded-lg border-gray-200 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-200 placeholder-gray-500 p-4 pe-12 text-sm shadow-sm"
                placeholder="Dirección (Calle, Av., Nro, Dpto.)" data-translate-placeholder="placeholder_address" />
              <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-gray-500 dark:text-gray-200"
                  viewBox="0 0 20 20" fill="currentColor">
                  <path
                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg>
              </span>
            </div>
          </div>
          <div>
            <label for="region" class="sr-only" data-translate="select_district">Distritos de Trujillo</label>
            <select name="region" id="region" required
              class="w-full rounded-lg dark:bg-gray-700 dark:text-white p-4 text-sm shadow-sm ">
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
            <fieldset>
              <legend class="text-lg font-medium text-gray-900 dark:text-white mb-2 " data-translate="payment_method">
                Método de Pago</legend>
              <div class="space-y-2">
                <div class="flex items-center">
                  <input id="pago_tarjeta" name="metodo_pago" type="radio" value="tarjeta"
                    class="h-4 w-4 focus:ring-pink-500" {{ old('metodo_pago') == 'tarjeta' ? 'checked' : '' }}>
                  <label for="pago_tarjeta" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300"
                    data-translate="payment_card">
                    Tarjeta de Crédito/Débito
                  </label>
                </div>
                <div class="flex items-center">
                  <input id="pago_yape" name="metodo_pago" type="radio" value="yape_plin"
                    class="h-4 w-4 focus:ring-pink-500" {{ old('metodo_pago') == 'yape_plin' ? 'checked' : '' }}>
                  <label for="pago_yape" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-300"
                    data-translate="payment_yape">
                    Yape / Plin
                  </label>
                </div>
              </div>
            </fieldset>
          </div>

          <div id="info_tarjeta" class="hidden space-y-4">
            <h3 class="text-md font-semibold text-gray-900 dark:text-white" data-translate="card_data">Datos de la
              Tarjeta</h3>
            <div>
              <label for="tarjeta_num" class="sr-only" data-translate="placeholder_card_number">Número de
                Tarjeta</label>
              <input type="text" id="tarjeta_num" name="tarjeta_num" value="{{ old('tarjeta_num') }}"
                class="w-full rounded-lg dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-200 placeholder-gray-500 p-4 text-sm shadow-sm"
                placeholder="Número de Tarjeta (xxxx xxxx xxxx xxxx)"
                data-translate-placeholder="placeholder_card_number" />
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div>
                <label for="tarjeta_fecha" class="sr-only" data-translate="placeholder_card_date">Fecha (MM/AA)</label>
                <input type="text" id="tarjeta_fecha" name="tarjeta_fecha" value="{{ old('tarjeta_fecha') }}"
                  class="w-full rounded-lg dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-200 placeholder-gray-500 p-4 text-sm shadow-sm"
                  placeholder="MM/AA" data-translate-placeholder="placeholder_card_date" />
              </div>
              <div>
                <label for="tarjeta_cvc" class="sr-only" data-translate="placeholder_cvc">CVC</label>
                <input type="text" id="tarjeta_cvc" name="tarjeta_cvc" value="{{ old('tarjeta_cvc') }}"
                  class="w-full rounded-lg dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-200 placeholder-gray-500 p-4 text-sm shadow-sm"
                  placeholder="CVC" data-translate-placeholder="placeholder_cvc" />
              </div>
            </div>
          </div>

          <div id="info_yape" class="hidden text-center">
            <h3 class="text-md font-semibold text-gray-900 dark:text-white" data-translate="scan_to_pay">Escanea para
              Pagar (Yape)</h3>
            <img src="{{ asset('imagenes/i__principal/QR.png') }}" alt="Código QR Yape"
              class="mx-auto mt-2 h-[150px]" />
            <p class="text-sm text-gray-500 dark:text-gray-400 mt-2" data-translate="send_screenshot">Envía la captura
              de pantalla al WhatsApp.</p>
          </div>

          <button type="submit"
            class="mt-4 w-full bg-pink-500 rounded-lg px-5 p-3 hover:bg-pink-600 font-medium text-white shadow-lg transition-all"
            data-translate="btn_purchase">
            COMPRAR
          </button>
        </form>
      </div>
    </div>
  </main>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const radiosMetodoPago = document.querySelectorAll('input[name="metodo_pago"]');
      const infoTarjeta = document.getElementById('info_tarjeta');
      const infoYape = document.getElementById('info_yape');

      function actualizarVistaPago() {
        const selectedRadio = document.querySelector('input[name="metodo_pago"]:checked');
        if (!selectedRadio) return;

        const valorSeleccionado = selectedRadio.value;

        infoTarjeta.classList.add('hidden');
        infoYape.classList.add('hidden');

        if (valorSeleccionado === 'tarjeta') {
          infoTarjeta.classList.remove('hidden');
        } else if (valorSeleccionado === 'yape_plin') {
          infoYape.classList.remove('hidden');
        }
      }

      radiosMetodoPago.forEach(radio => {
        radio.addEventListener('change', actualizarVistaPago);
      });

      actualizarVistaPago();
    });
  </script>
</x-layout>