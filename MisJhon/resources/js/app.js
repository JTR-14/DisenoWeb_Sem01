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
});
