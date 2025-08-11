document.addEventListener("DOMContentLoaded", () => {
    const btn = document.querySelector("#masterDataBtn");
    const menu = document.querySelector("#masterDataMenu");
    const icon = document.querySelector("#masterDataIcon");

    if (btn && menu && icon) {
        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
            icon.classList.toggle("rotate-180");
        });
    }
});
