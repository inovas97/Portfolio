const bars = document.querySelector(".bars");
const full_menu_list = document.querySelector(".full_menu_list");
bars.addEventListener("click", () => {
    full_menu_list.classList.toggle("open");
});