<x-layout>
  <main class="bg-gray-50 dark:bg-gray-900">
    <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-lg">
        <h2 class="text-center text-2xl font-bold text-gray-900 dark:text-white sm:text-3xl"
          data-translate="form_purchase_title">
          Formulario de Compra por Delivery
        </h2>

        <form action="{{ route('compra') }}" method="POST" id="checkout-form"
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
                class="border-gray-200 bg-white text-gray-900 w-full rounded-lg dark:bg-gray-700 dark:text-white dark:placeholder-gray-200 placeholder-gray-500 p-4 text-sm shadow-sm"
                placeholder="Nombre" data-translate-placeholder="placeholder_name" />
            </div>

            <div>
              <label for="apellido" class="sr-only" data-translate="placeholder_surname">Apellido</label>
              <input required type="text" name="apellido" id="apellido" value="{{ old('apellido') }}"
                class="border-gray-200 bg-white text-gray-900 w-full rounded-lg dark:bg-gray-700 dark:text-white dark:placeholder-gray-200 placeholder-gray-500 p-4 text-sm shadow-sm"
                placeholder="Apellido" data-translate-placeholder="placeholder_surname" />
            </div>
          </div>
          <div>
            <label for="email" class="sr-only" data-translate="form_email">Email</label>
            <div class="relative">
              <input required type="email" name="email" id="email" value="{{ old('email') }}"
                class="border-gray-200 bg-white text-gray-900 w-full rounded-lg dark:bg-gray-700 dark:text-white dark:placeholder-gray-200 placeholder-gray-500 p-4 pe-12 text-sm shadow-sm"
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
                class="border-gray-200 bg-white text-gray-900 w-full rounded-lg dark:bg-gray-700 dark:text-white dark:placeholder-gray-200 placeholder-gray-500 p-4 pe-12 text-sm shadow-sm"
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
                class="border-gray-200 bg-white text-gray-900 w-full rounded-lg dark:bg-gray-700 dark:text-white dark:placeholder-gray-200 placeholder-gray-500 p-4 pe-12 text-sm shadow-sm"
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
              class="border-gray-200 bg-white text-gray-900 w-full rounded-lg dark:bg-gray-700 dark:text-white p-4 text-sm shadow-sm ">
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
            <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2" data-translate="order_summary">Resumen
              del Pedido</h3>
            <div id="cart-items-list" class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4 mb-4">
              <!-- Cart items injected here -->
            </div>
            <div class="flex justify-between items-center text-lg font-bold text-gray-900 dark:text-white mt-2">
              <span data-translate="total_amount">Total a Pagar:</span>
              <span>S/ <span id="cart-total-amount">0.00</span></span>
            </div>
            <input type="hidden" name="total_pago" id="total_pago_input" value="0">
          </div>

          <div>
            <fieldset>
              <legend class="text-lg font-medium text-gray-900 dark:text-white mb-2 " data-translate="payment_method">
                Método de Pago</legend>
              <div class="space-y-4">
                <div
                  class="flex items-center bg-gray-50 dark:bg-gray-700 p-3 rounded-lg border border-gray-200 dark:border-gray-600 transition-colors hover:border-pink-500 cursor-pointer"
                  onclick="document.getElementById('pago_tarjeta').click()">
                  <input id="pago_tarjeta" name="metodo_pago" type="radio" value="tarjeta"
                    class="h-4 w-4 text-pink-600 focus:ring-pink-500 border-gray-300" {{ old('metodo_pago') == 'tarjeta' ? 'checked' : '' }}>
                  <label for="pago_tarjeta"
                    class="ml-3 flex items-center text-sm font-medium text-gray-700 dark:text-gray-200 cursor-pointer w-full">
                    <span data-translate="payment_card">Tarjeta de Crédito/Débito</span>
                    <div class="flex items-center gap-1.5 ml-auto">
                      <!-- Visa SVG -->
                      <svg width="32" height="20" viewBox="0 0 32 20" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="shrink-0 shadow-sm rounded-sm">
                        <rect width="32" height="20" rx="2" fill="#1434CB" />
                        <g transform="translate(1.14, -5.33) scale(1.3)">
                          <path
                            d="M16.539 9.186a4.155 4.155 0 0 0-1.451-.251c-1.6 0-2.73.806-2.738 1.963-.01.85.803 1.329 1.418 1.613.631.292.842.476.84.737-.004.397-.504.577-.969.577-.639 0-.988-.089-1.353-.223l-.184-.085-.19 1.183c.334.154.954.286 1.603.292 1.705 0 2.825-.841 2.836-2.146.008-.716-.426-1.258-1.36-1.703-.585-.291-.944-.486-.941-.782.003-.284.316-.583.94-.583.528-.008.905.116 1.196.22l.142.067.228-1.085zM11.666 9.04H9.988c-.3 0-.541.134-.666.386l-2.071 4.962h-1.63L7.74 9.04h1.722l.332 1.636L11.666 9.04zM19.108 9.04h-1.332c-.347 0-.612.1-.76.435l-2.316 5.508h1.669l.332-.91h2.039l.191.91h1.464L19.108 9.04zm-1.054 3.42l-.513-1.401-.264-.737-.146.702-.686 1.436h1.609zM6.168 9.04L4.821 12.87 4.385 10c-.11-.532-.46-.867-.937-.96h-2.1l-.031.144c.433.09.924.258 1.252.48l1.096 5.32h1.696L8.4 9.04H6.168z"
                            fill="white" />
                        </g>
                      </svg>

                      <!-- Mastercard SVG -->
                      <svg width="32" height="20" viewBox="0 0 32 20" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="shrink-0 shadow-sm rounded-sm">
                        <rect width="32" height="20" rx="2" fill="#363A45" />
                        <circle cx="12" cy="10" r="5.5" fill="#EB001B" />
                        <circle cx="20" cy="10" r="5.5" fill="#F79E1B" />
                        <path
                          d="M16 14.47A5.48008 5.48008 0 0113.82 10 5.48008 5.48008 0 0116 5.53003 5.48008 5.48008 0 0118.18 10 5.48008 5.48008 0 0116 14.47Z"
                          fill="#FF5F00" />
                      </svg>
                      <!-- PayPal SVG -->
                      <svg width="32" height="20" viewBox="0 0 32 20" fill="none" xmlns="http://www.w3.org/2000/svg"
                        class="shrink-0 shadow-sm rounded-sm">
                        <rect width="32" height="20" rx="2" fill="#003087" />
                        <g transform="translate(1.5, 2)">
                          <path
                            d="M19.8398 7.30606C19.8098 8.03606 19.4198 9.13606 18.5598 9.77606C17.7698 10.3661 16.5698 10.4861 15.4198 10.4861H14.0798L13.2398 15.7961H13.2498L11.9998 15.7961H10.5998L11.4998 10.1561L12.2998 5.08606H15.7898C17.6898 5.08606 19.1698 4.80606 20.1798 3.46606C20.9498 4.48606 21.2298 5.98606 21.0598 7.56606"
                            fill="#009CDE" />

                          <path
                            d="M20.1798 3.46606C19.9898 1.72606 18.9598 0.38606 17.0998 -0.0539401C16.3298 -0.23394 15.5398 -0.21394 14.5798 -0.21394H9.5998V-0.22394H9.30985L7.35985 12.1261H10.3598L11.1498 7.10606V7.10606L11.4798 5.04606L11.5498 4.71606H14.2198C16.1198 4.71606 17.5998 4.43606 18.6098 3.09606C19.3798 4.11606 19.6598 5.61606 19.4898 7.19606"
                            fill="white" />
                        </g>
                      </svg>

                    </div>
                  </label>
                </div>
                <div
                  class="flex items-center bg-gray-50 dark:bg-gray-700 p-3 rounded-lg border border-gray-200 dark:border-gray-600 transition-colors hover:border-pink-500 cursor-pointer"
                  onclick="document.getElementById('pago_yape').click()">
                  <input id="pago_yape" name="metodo_pago" type="radio" value="yape"
                    class="h-4 w-4 text-pink-600 focus:ring-pink-500 border-gray-300" {{ old('metodo_pago') == 'yape' ? 'checked' : '' }}>
                  <label for="pago_yape"
                    class="ml-3 flex items-center text-sm font-medium text-gray-700 dark:text-gray-200 cursor-pointer w-full">
                    <span data-translate="payment_yape_title">Pago con Yape</span>
                    <img src="{{ asset('imagenes/i__principal/yape_logo.svg') }}" alt="Yape"
                      class="ml-auto h-6 object-contain rounded-sm"
                      onerror="this.onerror=null; this.style.display='none'">
                  </label>
                </div>

                <div
                  class="flex items-center bg-gray-50 dark:bg-gray-700 p-3 rounded-lg border border-gray-200 dark:border-gray-600 transition-colors hover:border-pink-500 cursor-pointer"
                  onclick="document.getElementById('pago_plin').click()">
                  <input id="pago_plin" name="metodo_pago" type="radio" value="plin"
                    class="h-4 w-4 text-pink-600 focus:ring-pink-500 border-gray-300" {{ old('metodo_pago') == 'plin' ? 'checked' : '' }}>
                  <label for="pago_plin"
                    class="ml-3 flex items-center text-sm font-medium text-gray-700 dark:text-gray-200 cursor-pointer w-full">
                    <span data-translate="payment_plin_title">Pago con Plin</span>
                    <img src="{{ asset('imagenes/i__principal/plin_logo.svg') }}" alt="Plin"
                      class="ml-auto h-6 object-contain rounded-sm"
                      onerror="this.onerror=null; this.style.display='none'">
                  </label>
                </div>
              </div>
            </fieldset>
          </div>

          <div id="info_tarjeta"
            class="hidden space-y-4 bg-gray-50 dark:bg-gray-700 p-4 rounded-lg border border-gray-200 dark:border-gray-600">
            <h3 class="text-md font-semibold text-gray-900 dark:text-white flex items-center gap-2"
              data-translate="card_data">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
              </svg>
              Datos de la Tarjeta Segura
            </h3>
            <div>
              <label for="tarjeta_num" class="sr-only" data-translate="placeholder_card_number">Número de
                Tarjeta</label>
              <input type="text" id="tarjeta_num" name="tarjeta_num" value="{{ old('tarjeta_num') }}"
                class="text-gray-900 border-gray-200 bg-white w-full rounded-lg dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:placeholder-gray-400 placeholder-gray-500 p-4 text-sm shadow-sm"
                placeholder="Número de Tarjeta (xxxx xxxx xxxx xxxx)"
                data-translate-placeholder="placeholder_card_number" />
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div>
                <label for="tarjeta_fecha" class="sr-only" data-translate="placeholder_card_date">Fecha (MM/AA)</label>
                <input type="text" id="tarjeta_fecha" name="tarjeta_fecha" value="{{ old('tarjeta_fecha') }}"
                  class="text-gray-900 border-gray-200 bg-white w-full rounded-lg dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:placeholder-gray-400 placeholder-gray-500 p-4 text-sm shadow-sm"
                  placeholder="MM/AA" data-translate-placeholder="placeholder_card_date" />
              </div>
              <div>
                <label for="tarjeta_cvc" class="sr-only" data-translate="placeholder_cvc">CVC</label>
                <input type="text" id="tarjeta_cvc" name="tarjeta_cvc" value="{{ old('tarjeta_cvc') }}"
                  maxlength="3"
                  class="text-gray-900 border-gray-200 bg-white w-full rounded-lg dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:placeholder-gray-400 placeholder-gray-500 p-4 text-sm shadow-sm"
                  placeholder="CVC" data-translate-placeholder="placeholder_cvc" />
              </div>
            </div>
            <p class="text-xs text-gray-500 dark:text-gray-400 text-center flex items-center justify-center gap-1 mt-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-500" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                  d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                  clip-rule="evenodd" />
              </svg>
              Tus datos están protegidos y encriptados.
            </p>
          </div>

          <!-- Yape Checkout Section -->
          <div id="info_yape"
            class="hidden space-y-4 bg-gray-50 dark:bg-gray-700 p-4 rounded-lg border border-gray-200 dark:border-gray-600 text-center">
            <h3 class="text-md font-semibold text-gray-900 dark:text-white" data-translate="yape_step_1">1. Escanea el QR de Yape para Pagar</h3>
            <div class="bg-white p-2 rounded-xl inline-block shadow-sm">
              <img src="{{ asset('imagenes/i__principal/QR-yape.png') }}" alt="Código QR Yape"
                class="mx-auto h-[180px] w-auto border-4 border-white rounded-lg" />
            </div>
            <p class="text-sm font-medium text-pink-600 dark:text-pink-400 mt-2"><span data-translate="yape_amount">Monto a Yapear: S/ </span><span
                class="yape-total font-bold">0.00</span></p>

            <div class="mt-4 pt-4 border-t border-gray-200 dark:border-gray-600 text-left">
              <h3 class="text-md font-semibold text-gray-900 dark:text-white mb-2" data-translate="verify_payment">2. Verifica tu pago</h3>
              <p class="text-xs text-gray-500 dark:text-gray-300 mb-3"><span data-translate="yape_op_desc">Introduce el Número de Operación de tu Yape.</span></p>
              <input type="text" id="numero_operacion_yape" name="numero_operacion_yape"
                class="text-gray-900 border-gray-200 bg-white w-full rounded-lg dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:placeholder-gray-400 placeholder-gray-500 p-4 text-sm shadow-sm"
                placeholder="Ej. 12345678" />
            </div>
            <!-- Optional QR reader -->
            <details class="text-left mt-4">
                <summary class="text-xs text-purple-600 dark:text-purple-400 cursor-pointer font-medium hover:underline"><span data-translate="qr_prompt">¿O prefieres usar tu cámara y escanear el comprobante?</span></summary>
                <div class="mt-2">
                    <div id="qr-reader-yape" class="mx-auto w-full max-w-sm rounded-lg overflow-hidden border border-gray-200 dark:border-gray-700 bg-white" style="display:none;"></div>
                    <button type="button" id="btn-scan-qr-yape" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg text-sm w-full transition-colors flex justify-center items-center gap-2 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        <span data-translate="btn_scan_yape">Escanear Comprobante Yape</span>
                    </button>
                    <div id="qr-result-yape" class="mt-4 hidden p-3 bg-green-100 text-green-800 rounded-lg text-sm font-medium border border-green-200">
                    <span data-translate="qr_detected">¡Código detectado!</span><br><span id="qr-scanned-text-yape" class="font-bold break-words"></span>
                    </div>
                </div>
            </details>
          </div>

          <!-- Plin Checkout Section -->
          <div id="info_plin"
            class="hidden space-y-4 bg-gray-50 dark:bg-gray-700 p-4 rounded-lg border border-gray-200 dark:border-gray-600 text-center">
            <h3 class="text-md font-semibold text-gray-900 dark:text-white" data-translate="plin_step_1">1. Escanea el QR de Plin para Pagar</h3>
            <div class="bg-white p-2 rounded-xl inline-block shadow-sm">
              <img src="{{ asset('imagenes/i__principal/QR-plin.png') }}" alt="Código QR Plin"
                class="mx-auto h-[180px] w-auto border-4 border-white rounded-lg" />
            </div>
            <p class="text-sm font-medium text-blue-600 dark:text-blue-400 mt-2"><span data-translate="plin_amount">Monto a Plinear: S/ </span><span
                class="yape-total font-bold">0.00</span></p>

            <div class="mt-4 pt-4 border-t border-gray-200 dark:border-gray-600 text-left">
              <h3 class="text-md font-semibold text-gray-900 dark:text-white mb-2" data-translate="verify_payment">2. Verifica tu pago</h3>
              <p class="text-xs text-gray-500 dark:text-gray-300 mb-3"><span data-translate="plin_op_desc">Introduce el Número de Operación de tu Plin.</span></p>
              <input type="text" id="numero_operacion_plin" name="numero_operacion_plin"
                class="text-gray-900 border-gray-200 bg-white w-full rounded-lg dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:placeholder-gray-400 placeholder-gray-500 p-4 text-sm shadow-sm"
                placeholder="Ej. 12345678" />
            </div>
            <!-- Optional QR reader -->
            <details class="text-left mt-4">
                <summary class="text-xs text-blue-600 dark:text-blue-400 cursor-pointer font-medium hover:underline"><span data-translate="qr_prompt">¿O prefieres usar tu cámara y escanear el comprobante?</span></summary>
                <div class="mt-2">
                    <div id="qr-reader-plin" class="mx-auto w-full max-w-sm rounded-lg overflow-hidden border border-gray-200 dark:border-gray-700 bg-white" style="display:none;"></div>
                    <button type="button" id="btn-scan-qr-plin" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg text-sm w-full transition-colors flex justify-center items-center gap-2 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        <span data-translate="btn_scan_plin">Escanear Comprobante Plin</span>
                    </button>
                    <div id="qr-result-plin" class="mt-4 hidden p-3 bg-green-100 text-green-800 rounded-lg text-sm font-medium border border-green-200">
                    <span data-translate="qr_detected">¡Código detectado!</span><br><span id="qr-scanned-text-plin" class="font-bold break-words"></span>
                    </div>
                </div>
            </details>
          </div>

          <button type="submit" id="btn-submit-compra"
            class="mt-6 w-full bg-pink-600 rounded-xl px-5 p-4 hover:bg-pink-700 font-bold text-white shadow-lg shadow-pink-500/30 transition-all flex justify-center items-center gap-2"
            data-translate="btn_purchase">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                clip-rule="evenodd" />
            </svg>
            CONFIRMAR PAGO
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
      const infoPlin = document.getElementById('info_plin');

      function actualizarVistaPago() {
        const selectedRadio = document.querySelector('input[name="metodo_pago"]:checked');
        if (!selectedRadio) return;

        const valorSeleccionado = selectedRadio.value;

        infoTarjeta.classList.add('hidden');
        infoYape.classList.add('hidden');
        infoPlin.classList.add('hidden');

        if (valorSeleccionado === 'tarjeta') {
          infoTarjeta.classList.remove('hidden');
        } else if (valorSeleccionado === 'yape') {
          infoYape.classList.remove('hidden');
        } else if (valorSeleccionado === 'plin') {
          infoPlin.classList.remove('hidden');
        }
      }

      radiosMetodoPago.forEach(radio => {
        radio.addEventListener('change', actualizarVistaPago);
      });

      actualizarVistaPago();

      // Formateo de Tarjeta de Crédito/Débito
      const inputTarjetaNum = document.getElementById('tarjeta_num');
      if (inputTarjetaNum) {
        inputTarjetaNum.addEventListener('input', function (e) {
          let value = e.target.value.replace(/\D/g, ''); // Solo números
          if (value.length > 16) value = value.slice(0, 16);
          let formattedValue = '';
          for (let i = 0; i < value.length; i++) {
            if (i > 0 && i % 4 === 0) formattedValue += ' ';
            formattedValue += value[i];
          }
          e.target.value = formattedValue;
        });
      }

      // Formateo de Fecha (MM/AA)
      const inputTarjetaFecha = document.getElementById('tarjeta_fecha');
      if (inputTarjetaFecha) {
        inputTarjetaFecha.addEventListener('input', function (e) {
          let value = e.target.value.replace(/\D/g, ''); // Solo números
          if (value.length > 4) value = value.slice(0, 4);
          if (value.length > 2) {
            e.target.value = value.slice(0, 2) + '/' + value.slice(2);
          } else {
            e.target.value = value;
          }
        });
      }

      // Formateo de CVC
      const inputTarjetaCvc = document.getElementById('tarjeta_cvc');
      if (inputTarjetaCvc) {
        inputTarjetaCvc.addEventListener('input', function (e) {
          let value = e.target.value.replace(/\D/g, ''); // Solo números
          if (value.length > 3) value = value.slice(0, 3);
          e.target.value = value;
        });
      }

      // Integración Lector QR (html5-qrcode) para múltiples contenedores
      function initQrScanner(btnId, readerDivId, resultDivId, resultTextId, inputTargetId) {
        const btnScan = document.getElementById(btnId);
        const qrReaderDiv = document.getElementById(readerDivId);
        const qrResultDiv = document.getElementById(resultDivId);
        const qrScannedText = document.getElementById(resultTextId);
        const targetInput = document.getElementById(inputTargetId);

        if (btnScan) {
          btnScan.addEventListener('click', () => {
            btnScan.style.display = 'none';
            qrReaderDiv.style.display = 'block';

            const html5QrCode = new Html5Qrcode(readerDivId);
            const config = { fps: 10, qrbox: { width: 250, height: 250 } };

            html5QrCode.start({ facingMode: "environment" }, config, onScanSuccess)
              .catch((err) => {
                console.error("Error al iniciar cámara: ", err);
                alert("No se pudo acceder a la cámara. Revisa los permisos.");
                btnScan.style.display = 'block';
                qrReaderDiv.style.display = 'none';
              });

            function onScanSuccess(decodedText, decodedResult) {
              html5QrCode.stop().then((ignore) => {
                qrReaderDiv.style.display = 'none';
                qrResultDiv.classList.remove('hidden');
                qrScannedText.textContent = decodedText;
                if(targetInput) targetInput.value = decodedText.trim();
              }).catch((err) => {
                console.log("Stop failed: ", err);
              });
            }
          });
        }
      }

      initQrScanner('btn-scan-qr-yape', 'qr-reader-yape', 'qr-result-yape', 'qr-scanned-text-yape', 'numero_operacion_yape');
      initQrScanner('btn-scan-qr-plin', 'qr-reader-plin', 'qr-result-plin', 'qr-scanned-text-plin', 'numero_operacion_plin');

      // Actualizar hidden input total y monto de yape/plin
      const totalSpan = document.getElementById('cart-total-amount');
      const totalInput = document.getElementById('total_pago_input');
      const yapeTotalSpans = document.querySelectorAll('.yape-total');
      if (totalSpan) {
        const configObs = { childList: true, characterData: true, subtree: true };
        const callback = function () {
          if (totalInput) totalInput.value = totalSpan.textContent;
          yapeTotalSpans.forEach(el => el.textContent = totalSpan.textContent);
        };
        const observer = new MutationObserver(callback);
        observer.observe(totalSpan, configObs);

        // Trigger once manually on load
        if (totalInput) totalInput.value = totalSpan.textContent;
        yapeTotalSpans.forEach(el => el.textContent = totalSpan.textContent);
      }

      // Interceptar envío del formulario para simular la compra con SweetAlert
      const form = document.getElementById('checkout-form');
      if (form) {
        form.addEventListener('submit', function (e) {
          e.preventDefault();

          // Validación de Método de Pago requerido
          const selectedRadio = document.querySelector('input[name="metodo_pago"]:checked');
          if (!selectedRadio) {
            swal({
              title: window.translations?.[localStorage.getItem('misjhon-language') || 'es']?.alert_payment_title || 'Seleccione un método de pago',
              text: window.translations?.[localStorage.getItem('misjhon-language') || 'es']?.alert_payment_text || 'Por favor, indique con qué método de pago desea realizar su compra.',
              icon: 'warning',
              button: window.translations?.[localStorage.getItem('misjhon-language') || 'es']?.alert_ok || 'Aceptar'
            });
            return;
          }

          if (selectedRadio) {
            if (selectedRadio.value === 'tarjeta') {
              const tarjetaNum = document.getElementById('tarjeta_num').value.replace(/\s+/g, '');
              const tarjetaFecha = document.getElementById('tarjeta_fecha').value.trim();
              const tarjetaCvc = document.getElementById('tarjeta_cvc').value.trim();

              const numRegex = /^\d{16}$/;
              const fechaRegex = /^(0[1-9]|1[0-2])\/?([0-9]{2})$/;
              const cvcRegex = /^\d{3}$/;

              if (!numRegex.test(tarjetaNum)) {
                swal({
                  title: window.translations?.[localStorage.getItem('misjhon-language') || 'es']?.alert_card_num_title || 'Número de tarjeta inválido',
                  text: window.translations?.[localStorage.getItem('misjhon-language') || 'es']?.alert_card_num_text || 'Por favor, ingrese un número de tarjeta válido de 16 dígitos numéricos sin letras.',
                  icon: 'warning',
                  button: window.translations?.[localStorage.getItem('misjhon-language') || 'es']?.alert_ok || 'Aceptar'
                });
                return;
              }

              if (!fechaRegex.test(tarjetaFecha)) {
                swal({
                  title: window.translations?.[localStorage.getItem('misjhon-language') || 'es']?.alert_card_date_title || 'Fecha inválida',
                  text: window.translations?.[localStorage.getItem('misjhon-language') || 'es']?.alert_card_date_text || 'Por favor, ingrese una fecha de vencimiento válida en el formato MM/AA.',
                  icon: 'warning',
                  button: window.translations?.[localStorage.getItem('misjhon-language') || 'es']?.alert_ok || 'Aceptar'
                });
                return;
              }

              if (!cvcRegex.test(tarjetaCvc)) {
                swal({
                  title: window.translations?.[localStorage.getItem('misjhon-language') || 'es']?.alert_card_cvc_title || 'CVC inválido',
                  text: window.translations?.[localStorage.getItem('misjhon-language') || 'es']?.alert_card_cvc_text || 'Por favor, ingrese un CVC válido de 3 dígitos numéricos.',
                  icon: 'warning',
                  button: window.translations?.[localStorage.getItem('misjhon-language') || 'es']?.alert_ok || 'Aceptar'
                });
                return;
              }
            } else if (selectedRadio.value === 'yape') {
              const numOperacion = document.getElementById('numero_operacion_yape').value.trim();
              if (!numOperacion) {
                swal({
                  title: window.translations?.[localStorage.getItem('misjhon-language') || 'es']?.alert_required_title || 'Campo requerido',
                  text: window.translations?.[localStorage.getItem('misjhon-language') || 'es']?.alert_required_yape_text || 'Por favor, ingrese el Número de Operación de Yape.',
                  icon: 'warning',
                  button: window.translations?.[localStorage.getItem('misjhon-language') || 'es']?.alert_ok || 'Aceptar'
                });
                return;
              }
            } else if (selectedRadio.value === 'plin') {
              const numOperacion = document.getElementById('numero_operacion_plin').value.trim();
              if (!numOperacion) {
                swal({
                  title: window.translations?.[localStorage.getItem('misjhon-language') || 'es']?.alert_required_title || 'Campo requerido',
                  text: window.translations?.[localStorage.getItem('misjhon-language') || 'es']?.alert_required_plin_text || 'Por favor, ingrese el Número de Operación de Plin.',
                  icon: 'warning',
                  button: window.translations?.[localStorage.getItem('misjhon-language') || 'es']?.alert_ok || 'Aceptar'
                });
                return;
              }
            }
          }

          // Mostrar SweetAlert de éxito
          const direccionValue = document.getElementById('direccion').value.trim() || 'la dirección indicada';
          swal({
            title: window.translations?.[localStorage.getItem('misjhon-language') || 'es']?.alert_success_title || '¡Compra Realizada!',
            text: `En un plazo de 14 días llegará su pedido a la dirección: ${direccionValue}.`,
            icon: 'success',
            button: window.translations?.[localStorage.getItem('misjhon-language') || 'es']?.alert_success_btn || 'Seguir Comprando',
          }).then((result) => {
            // Limpiar el carrito
            localStorage.removeItem('misjhon_cart');

            // Actualizar la vista (badge)
            if (typeof window.updateCartBadge === 'function') {
              window.cart = [];
              window.updateCartBadge();
            }

            // Redirigir al inicio o enviar el formulario real si el backend lo requiere.
            form.submit();
          });
        });
      }
    });
  </script>
  <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
</x-layout>