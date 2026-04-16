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
            <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-2" data-translate="order_summary">Resumen del Pedido</h3>
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
              <div class="space-y-2">
                <div class="flex items-center">
                  <input id="pago_tarjeta" name="metodo_pago" type="radio" value="tarjeta"
                    class="h-4 w-4 focus:ring-pink-500" {{ old('metodo_pago') == 'tarjeta' ? 'checked' : '' }}>
                  <label for="pago_tarjeta" class="ml-3 flex items-center text-sm font-medium text-gray-700 dark:text-gray-300 pointer-events-none">
                    <span data-translate="payment_card">Tarjeta de Crédito/Débito</span>
                    <div class="flex items-center gap-1.5 ml-3">
                      <!-- Visa SVG -->
                      <svg width="32" height="20" viewBox="0 0 32 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="shrink-0 shadow-sm rounded-sm">
                        <rect width="32" height="20" rx="2" fill="#1434CB"/>
                        <path d="M14.6728 14.86L16.1628 6.31494H18.5528L17.0528 14.86H14.6728ZM25.0228 6.18C24.6428 6.052 24.0728 5.952 23.2428 5.952C20.8928 5.952 19.2428 7.152 19.2328 8.87508C19.2128 10.1508 20.3728 10.864 21.2528 11.2828C22.1528 11.7188 22.4528 12.0008 22.4528 12.4188C22.4528 13.0608 21.6528 13.3448 20.9328 13.3448C19.9928 13.3448 19.4728 13.1168 19.0328 12.9128L18.5528 15.0768C19.0128 15.2848 19.8028 15.4808 20.6328 15.4968C23.1428 15.4968 24.7528 14.2888 24.7728 12.4488C24.7828 11.3808 24.1128 10.5608 22.5728 9.85281C21.7828 9.47681 21.3128 9.23281 21.3028 8.79681C21.3028 8.39681 21.7528 7.97681 23.1328 7.97681C23.9028 7.97681 24.4128 8.12881 24.8328 8.30881L25.0228 6.18ZM29.4128 14.86L28.0428 6.31494H26.1728L25.3328 10.8768L23.1428 6.31494H20.7128L24.2828 14.86H26.7928L27.2728 12.9648L28.1628 14.86H29.4128ZM11.3228 6.31494L10.0228 12.3088C9.79277 13.3448 8.14277 14.86 6.51277 14.86H3.13277L6.33277 6.31494H8.94277L7.28277 11.6688H11.3228Z" fill="white"/>
                      </svg>
                      <!-- Mastercard SVG -->
                      <svg width="32" height="20" viewBox="0 0 32 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="shrink-0 shadow-sm rounded-sm">
                        <rect width="32" height="20" rx="2" fill="#363A45"/>
                        <circle cx="12" cy="10" r="5.5" fill="#EB001B"/>
                        <circle cx="20" cy="10" r="5.5" fill="#F79E1B"/>
                        <path d="M16 14.47A5.48008 5.48008 0 0113.82 10 5.48008 5.48008 0 0116 5.53003 5.48008 5.48008 0 0118.18 10 5.48008 5.48008 0 0116 14.47Z" fill="#FF5F00"/>
                      </svg>
                      <!-- PayPal SVG -->
                      <svg width="32" height="20" viewBox="0 0 32 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="shrink-0 shadow-sm rounded-sm">
                        <rect width="32" height="20" rx="2" fill="#003087"/>
                        <path d="M19.8398 7.30606C19.8098 8.03606 19.4198 9.13606 18.5598 9.77606C17.7698 10.3661 16.5698 10.4861 15.4198 10.4861H14.0798L13.2398 15.7961H13.2498L11.9998 15.7961H10.5998L11.4998 10.1561L12.2998 5.08606H15.7898C17.6898 5.08606 19.1698 4.80606 20.1798 3.46606C20.9498 4.48606 21.2298 5.98606 21.0598 7.56606" fill="white"/>
                        <path d="M20.1798 3.46606C19.9898 1.72606 18.9598 0.38606 17.0998 -0.0539401C16.3298 -0.23394 15.5398 -0.21394 14.5798 -0.21394H9.5998V-0.22394H9.30985L7.35985 12.1261H10.3598L11.1498 7.10606V7.10606L11.4798 5.04606L11.5498 4.71606H14.2198C16.1198 4.71606 17.5998 4.43606 18.6098 3.09606C19.3798 4.11606 19.6598 5.61606 19.4898 7.19606" fill="#009CDE"/>
                      </svg>
                    </div>
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
                class="text-gray-900 border-gray-200 bg-white w-full rounded-lg dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-200 placeholder-gray-500 p-4 text-sm shadow-sm"
                placeholder="Número de Tarjeta (xxxx xxxx xxxx xxxx)"
                data-translate-placeholder="placeholder_card_number" />
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div>
                <label for="tarjeta_fecha" class="sr-only" data-translate="placeholder_card_date">Fecha (MM/AA)</label>
                <input type="text" id="tarjeta_fecha" name="tarjeta_fecha" value="{{ old('tarjeta_fecha') }}"
                  class="text-gray-900 border-gray-200 bg-white w-full rounded-lg dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-200 placeholder-gray-500 p-4 text-sm shadow-sm"
                  placeholder="MM/AA" data-translate-placeholder="placeholder_card_date" />
              </div>
              <div>
                <label for="tarjeta_cvc" class="sr-only" data-translate="placeholder_cvc">CVC</label>
                <input type="text" id="tarjeta_cvc" name="tarjeta_cvc" value="{{ old('tarjeta_cvc') }}"
                  class="text-gray-900 border-gray-200 bg-white w-full rounded-lg dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-200 placeholder-gray-500 p-4 text-sm shadow-sm"
                  placeholder="CVC" data-translate-placeholder="placeholder_cvc" />
              </div>
            </div>
          </div>

          <div id="info_yape" class="hidden text-center">
            <h3 class="text-md font-semibold text-gray-900 dark:text-white" data-translate="scan_to_pay">Escanea para Pagar (Yape)</h3>
            
            <!-- QR a mostrar para que el cliente pague -->
            <img src="{{ asset('imagenes/i__principal/QR.png') }}" alt="Código QR Yape" class="mx-auto mt-2 h-[150px]" />
            <p class="text-sm text-gray-500 dark:text-gray-400 mt-2 mb-4" data-translate="send_screenshot">Envía la captura de pantalla al WhatsApp.</p>

            <hr class="border-gray-200 dark:border-gray-700 my-4" />

            <!-- Lector QR para simular función de escaneo solicitada  -->
            <h3 class="text-md font-semibold text-gray-900 dark:text-white mb-2">Lector de Código QR Yape</h3>
            <div id="qr-reader" class="mx-auto w-full max-w-sm rounded-lg overflow-hidden border border-gray-200 dark:border-gray-700" style="display:none;"></div>
            <button type="button" id="btn-scan-qr" class="mt-2 bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg text-sm w-full transition-colors">
                Activar Cámara para Escanear
            </button>
            <div id="qr-result" class="mt-4 hidden p-3 bg-green-100 text-green-800 rounded-lg text-sm font-medium">
               ¡Código detectado!<br><span id="qr-scanned-text" class="font-bold break-words"></span>
            </div>
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
      
      // Integración Lector QR (html5-qrcode)
      let html5QrcodeScanner = null;
      const btnScan = document.getElementById('btn-scan-qr');
      const qrReaderDiv = document.getElementById('qr-reader');
      const qrResultDiv = document.getElementById('qr-result');
      const qrScannedText = document.getElementById('qr-scanned-text');

      if(btnScan) {
          btnScan.addEventListener('click', () => {
              btnScan.style.display = 'none';
              qrReaderDiv.style.display = 'block';
              
              const html5QrCode = new Html5Qrcode("qr-reader");
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
                  }).catch((err) => {
                      console.log("Stop failed: ", err);
                  });
              }
          });
      }

      // Actualizar hidden input total
      const totalSpan = document.getElementById('cart-total-amount');
      const totalInput = document.getElementById('total_pago_input');
      if(totalSpan && totalInput) {
          const configObs = { childList: true, characterData: true, subtree: true };
          const callback = function() {
              totalInput.value = totalSpan.textContent;
          };
          const observer = new MutationObserver(callback);
          observer.observe(totalSpan, configObs);
      }
    });
  </script>
  <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
</x-layout>