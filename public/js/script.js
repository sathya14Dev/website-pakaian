const sideMenu = document.getElementById("side-menu");

const openMenu = () => {
    sideMenu.classList.remove("-right-64");
    sideMenu.classList.add("right-0");
};

const closeMenu = () => {
    sideMenu.classList.remove("right-0");
    sideMenu.classList.add("-right-64");
};
