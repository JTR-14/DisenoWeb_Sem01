<x-layout>

  <main>
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
    <header class="text-center">
      <div class="flex justify-center gap-6 text-gray-900 dark:text-white">
        <h2 class="text-xl font-bold text-gray-900 dark:text-white sm:text-3xl">Colección de Peluches</h2>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 14 14">
          <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M7 4.469c1.12 0 1.75-.63 1.75-1.75S8.12.969 7 .969s-1.75.63-1.75 1.75s.63 1.75 1.75 1.75m4.099 1.953C9.753 5.144 8.039 6.37 7 7.407c-1.038-1.038-2.752-2.263-4.098-.985C.678 8.534 5.045 12.736 7 13.058c1.956-.322 6.322-4.524 4.099-6.636" stroke-width="1" />
        </svg>
      </div>
      <p class="mx-auto text-sm mt-4 max-w-md text-gray-500 dark:text-gray-400">
        "Encuentre el peluche perfecto para regalar o para consentir a alguien especial. Nuestra colección incluye una variedad de adorables peluches que seguramente traerán sonrisas y alegría a cualquier ocasión."
      </p>
    </header>

    <ul class="mt-8 grid gap-4 grid-cols-2 sm:grid-cols-3 xl:grid-cols-4 md:gap-8">
      <li class="group block overflow-hidden rounded-t-2xl shadow-lg">
        <img src="{{ asset('imagenes/i__peluches/P1.png') }}" alt="" class="h-[250px] w-full object-cover transition duration-500 group-hover:scale-105 md:h-[350px] ">

        <div class="relative bg-gray-100 dark:bg-gray-800 pt-3 rounded-b-2xl px-3 pb-5 ">
          <h3 class="text-xs font-semibold text-center text-gray-800 dark:text-gray-200 group-hover:underline group-hover:underline-offset-4">
            Osito con corazón "Te quiero"
          </h3>
          <div class="flex flex-col gap-x-2 justify-around items-center mt-3 lg:flex-row flex-col gap-y-3">
            <p class="text-xl">
              <span class="tracking-wider text-gray-900 dark:text-white font-semibold font-mono font-semibold ">S/ 27.00</span>
            </p>
            <button class="w-30 rounded-md bg-pink-500 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-pink-600">
              Añadir al carrito </button>
          </div>
        </div>
      </li>

      <li class="group block overflow-hidden rounded-t-2xl">
        <img src="{{ asset('imagenes/i__peluches/P2.png') }}" alt="" class="h-[250px] w-full object-cover transition duration-500 group-hover:scale-105 md:h-[350px] ">

        <div class="relative bg-gray-100 dark:bg-gray-800 pt-3 rounded-b-2xl px-3 pb-5 ">
          <h3 class="text-xs font-semibold text-center text-gray-800 dark:text-gray-200 group-hover:underline group-hover:underline-offset-4">
            Pinguino antialergico con gorro y mochila
          </h3>
          <div class="flex flex-col gap-x-2 justify-around items-center mt-3 lg:flex-row flex-col gap-y-3">
            <p class="text-xl">
              <span class="tracking-wider text-gray-900 dark:text-white font-semibold font-mono font-semibold ">S/ 22.00</span>
            </p>
            <button class="w-30 rounded-md bg-pink-500 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-pink-600">
              Añadir al carrito </button>
          </div>
        </div>
      </li>

      <li class="group block overflow-hidden rounded-t-2xl">
        <img src="{{ asset('imagenes/i__peluches/P3.png') }}" alt="" class="h-[250px] w-full object-cover transition duration-500 group-hover:scale-105 md:h-[350px] ">

        <div class="relative bg-gray-100 dark:bg-gray-800 pt-3 rounded-b-2xl px-3 pb-5 ">
          <h3 class="text-xs font-semibold text-center text-gray-800 dark:text-gray-200 group-hover:underline group-hover:underline-offset-4">
            Osito musical con corazon "Love You"
          </h3>
          <div class="flex flex-col gap-x-2 justify-around items-center mt-3 lg:flex-row flex-col gap-y-3">
            <p class="text-xl">
              <span class="tracking-wider text-gray-900 dark:text-white font-semibold font-mono font-semibold ">S/ 23.00</span>
            </p>
            <button class="w-30 rounded-md bg-pink-500 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-pink-600">
              Añadir al carrito </button>
          </div>
        </div>
      </li>

      <li class="group block overflow-hidden rounded-t-2xl">
        <img src="{{ asset('imagenes/i__peluches/P4.png') }}" alt="" class="h-[250px] w-full object-cover transition duration-500 group-hover:scale-105 md:h-[350px] ">

        <div class="relative bg-gray-100 dark:bg-gray-800 pt-3 rounded-b-2xl px-3 pb-5 ">
          <h3 class="text-xs font-semibold text-center text-gray-800 dark:text-gray-200 group-hover:underline group-hover:underline-offset-4">
            Osito con corbatin celeste
          </h3>
          <div class="flex flex-col gap-x-2 justify-around items-center mt-3 lg:flex-row flex-col gap-y-3">
            <p class="text-xl">
              <span class="tracking-wider text-gray-900 dark:text-white font-semibold font-mono font-semibold ">S/ 23.00</span>
            </p>
            <button class="w-30 rounded-md bg-pink-500 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-pink-600">
              Añadir al carrito </button>
          </div>
        </div>
      </li>
      <li class="group block overflow-hidden rounded-t-2xl">
        <img src="{{ asset('imagenes/i__peluches/P5.png') }}" alt="" class="rounded-t-3xl h-[250px] w-full object-cover transition duration-500 group-hover:scale-105 md:h-[350px] ">

        <div class="relative bg-gray-100 dark:bg-gray-800 pt-3 rounded-b-3xl px-3 pb-5 ">
          <h3 class="text-xs font-semibold text-center text-gray-800 dark:text-gray-200 group-hover:underline group-hover:underline-offset-4">
            Peluche de Lopso dormido
          </h3>
          <div class="flex flex-col gap-x-2 justify-around items-center mt-3 lg:flex-row flex-col gap-y-3">
            <p class="text-xl">
              <span class="tracking-wider text-gray-900 dark:text-white font-semibold font-mono font-semibold ">S/ 27.00</span>
            </p>
            <button class="w-30 rounded-md bg-pink-500 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-pink-600">
              Añadir al carrito </button>
          </div>
        </div>
      </li>

      <li class="group block overflow-hidden rounded-t-2xl">
        <img src="{{ asset('imagenes/i__peluches/P6.png') }}" alt="" class="h-[250px] w-full object-cover transition duration-500 group-hover:scale-105 md:h-[350px] ">

        <div class="relative bg-gray-100 dark:bg-gray-800 pt-3 rounded-b-2xl px-3 pb-5 ">
          <h3 class="text-xs font-semibold text-center text-gray-800 dark:text-gray-200 group-hover:underline group-hover:underline-offset-4">
            Erizo peluche antialergico
          </h3>
          <div class="flex flex-col gap-x-2 justify-around items-center mt-3 lg:flex-row flex-col gap-y-3">
            <p class="text-xl">
              <span class="tracking-wider text-gray-900 dark:text-white font-semibold font-mono font-semibold ">S/ 26.00</span>
            </p>
            <button class="w-30 rounded-md bg-pink-500 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-pink-600">
              Añadir al carrito </button>
          </div>
        </div>
      </li>
    </ul>
  </div>
  </main>

</x-layout>


