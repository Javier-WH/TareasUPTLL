const selection = document.getElementById("taskIcon");
const icon = document.getElementById("displayed-icon");

icon.src = `http://localhost:8000/IMG/icons/icon${selection.value}.png`

selection.addEventListener("change", () => {
    icon.src = `http://localhost:8000/IMG/icons/icon${selection.value}.png`
})