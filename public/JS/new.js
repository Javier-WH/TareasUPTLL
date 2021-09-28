const selection = document.getElementById("taskIcon");
const icon = document.getElementById("displayed-icon");

icon.src = `IMG/icons/icon${selection.value}.png`;
selection.addEventListener("change", () => {

    icon.src = `IMG/icons/icon${selection.value}.png`;
})