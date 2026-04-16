import './bootstrap';
import './translations.js';
import './language-selector.js';

document.addEventListener('DOMContentLoaded', () => {
    // === Menú Móvil ===
    const menuButton = document.getElementById("menu-button");
    const mobileMenu = document.getElementById("mobile-menu");

    if (menuButton && mobileMenu) {
        menuButton.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });
    }

    // === Cambio de Tema (Modo Oscuro/Claro) ===
    const themeToggleBtn = document.getElementById('theme-toggle');
    const htmlElement = document.documentElement;
    const themeText = document.getElementById('theme-text');

    function updateThemeUI(isDark) {
        if (!themeText) return;

        // Intentar usar traducciones si existen
        const lang = localStorage.getItem('misjhon-language') || 'es';
        if (window.translations && window.translations[lang]) {
            const keys = isDark ? 'theme_dark' : 'theme_light';
            themeText.textContent = window.translations[lang][keys] || (isDark ? 'Modo Oscuro' : 'Modo Claro');
        } else {
            themeText.textContent = isDark ? 'Modo Oscuro' : 'Modo Claro';
        }
    }

    if (themeToggleBtn) {
        const savedTheme = localStorage.getItem('theme');
        const osPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

        if (savedTheme === 'dark' || (!savedTheme && osPrefersDark)) {
            htmlElement.classList.add('dark');
            updateThemeUI(true);
        } else {
            htmlElement.classList.remove('dark');
            updateThemeUI(false);
        }

        themeToggleBtn.addEventListener('click', () => {
            const isDark = htmlElement.classList.toggle('dark');
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
            updateThemeUI(isDark);
        });
    }

    // === Carrito de Compras ===
    window.cart = JSON.parse(localStorage.getItem('misjhon_cart')) || [];

    // Función global para manejar clics desde 'onclick' en el HTML
    window.comprar = function(element) {
        // Soporte robusto para detectar qué botón disparó la acción
        let target = element;
        if (!target || !(target instanceof HTMLElement)) {
            // En handlers inline (onclick), window.event.target es el elemento clickeado
            target = (window.event ? (window.event.currentTarget || window.event.target) : null) || document.activeElement;
        }

        // Asegurarnos de que estamos en el elemento botón
        if (target && target.tagName !== 'BUTTON') {
            target = target.closest('button');
        }

        if (!target) return;

        // Buscar el contenedor del producto (usualmente un 'li' o un 'div' con clase relative)
        const itemContainer = target.closest('li') || target.closest('.group') || target.closest('.relative');
        
        if (itemContainer) {
            // 1. Buscar Título (h3 es el estándar, sino buscamos por clases comunes)
            const titleEl = itemContainer.querySelector('h3') || 
                            itemContainer.querySelector('.font-semibold') || 
                            itemContainer.querySelector('h2');
            
            // 2. Buscar Precio (Buscamos el símbolo de moneda S/)
            const priceEl = Array.from(itemContainer.querySelectorAll('span, p, b'))
                                 .find(el => el.textContent.includes('S/'));
            
            if (titleEl && priceEl) {
                const title = titleEl.textContent.trim();
                // Limpiar el texto del precio para obtener solo el número
                const priceRaw = priceEl.textContent.replace('S/', '').replace(',', '').trim();
                const price = parseFloat(priceRaw);

                if (!isNaN(price)) {
                    window.addToCart(title, price);
                    return;
                }
            }
        }
        
        // Failsafe mejorado: Al menos intentamos mostrar algo si el contenedor existe
        const fallbackTitle = itemContainer?.querySelector('h3')?.textContent.trim() || "Producto";
        
        swal({
          title: "¡Producto añadido!", 
          text: `Se ha agregado "${fallbackTitle}" al carrito`,
          icon: "success",
          button: "Aceptar",
        });
    };

    function updateCartBadge() {
        const badge = document.getElementById('cart-badge');
        if (badge) {
            badge.textContent = window.cart.length;
            if (window.cart.length > 0) {
                badge.classList.remove('hidden');
            } else {
                badge.classList.add('hidden');
            }
        }
    }

    window.renderCartTotal = function() {
        const totalSpan = document.getElementById('cart-total-amount');
        const cartItemsDiv = document.getElementById('cart-items-list');
        
        if (totalSpan) {
            let total = 0;
            let html = '';
            window.cart.forEach((item, index) => {
                total += item.price;
                html += `<div class="flex justify-between items-center text-sm py-2 border-b border-gray-200 dark:border-gray-700">
                  <span class="text-gray-700 dark:text-gray-300 truncate mr-2">${item.title}</span>
                  <div class="flex items-center">
                    <span class="font-semibold text-gray-900 dark:text-white mr-3">S/ ${item.price.toFixed(2)}</span>
                    <button type="button" onclick="removeFromCart(${index})" class="text-red-500 hover:text-red-700 font-bold" title="Eliminar">✕</button>
                  </div>
                </div>`;
            });
            totalSpan.textContent = total.toFixed(2);
            if (cartItemsDiv) {
                cartItemsDiv.innerHTML = window.cart.length > 0 ? html : '<p class="text-sm text-gray-500 dark:text-gray-400 text-center py-4">El carrito está vacío.</p>';
            }
        }
    }

    window.removeFromCart = function(index) {
        window.cart.splice(index, 1);
        localStorage.setItem('misjhon_cart', JSON.stringify(window.cart));
        updateCartBadge();
        renderCartTotal();
    };

    window.addToCart = function(title, price) {
        window.cart.push({ title: title, price: parseFloat(price) });
        localStorage.setItem('misjhon_cart', JSON.stringify(window.cart));
        updateCartBadge();
        renderCartTotal();
        
        // Mostrar alerta bonita
        swal({
            title: "¡Excelente elección!",
            text: `Se agregó "${title}" al carrito.\n   Precio: S/ ${price.toFixed(2)}`,
            icon: "success",
            button: "Aceptar",
        });
    };

    // Asignar eventos a los botones de productos (para los que no tienen onclick)
    const initCartButtons = () => {
        const productButtons = document.querySelectorAll('ul.grid li button, button.add-to-cart');
        productButtons.forEach(btn => {
            if (!btn.getAttribute('onclick') && !btn.dataset.initialized) {
                btn.dataset.initialized = "true";
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    window.comprar(this);
                });
            }
        });
    };

    initCartButtons();
    updateCartBadge();
    renderCartTotal();
});
