const categoriesButton = document.querySelector(".categories");
const categoriesOption = document.querySelector(".categories-option");

categoriesButton.addEventListener("click", () => {
    categoriesOption.classList.toggle("-translate-y-2");
    categoriesOption.classList.toggle("translate-y-0");
    // Toggle opacity for the fade animation
    categoriesOption.classList.toggle("opacity-0");
    categoriesOption.classList.toggle("opacity-100");

    // Toggle visibility so you can't click hidden checkboxes
    categoriesOption.classList.toggle("invisible");
});
