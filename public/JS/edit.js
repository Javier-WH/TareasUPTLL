const selection = document.getElementById("taskIcon");
const icon = document.getElementById("displayed-icon");

getIcon(parseInt(selected));

selection.addEventListener("change", () => {
    getIcon(parseInt(selection.value));
})

function getIcon(num) {
    switch (num) {
        case 1:
            icon.src = icon1;
            break;
        case 2:
            icon.src = icon2;
            break;
        case 3:
            icon.src = icon3;
            break;
        case 4:
            icon.src = icon4;
            break;
        case 5:
            icon.src = icon5;
            break;
        case 6:
            icon.src = icon6;
            break;
        case 7:
            icon.src = icon7;
            break;
        case 8:
            icon.src = icon8;
            break;
        case 9:
            icon.src = icon9;
            break;
        case 10:
            icon.src = icon10;
            break;
        case 11:
            icon.src = icon11;
            break;
        case 12:
            icon.src = icon12;
            break;
        case 13:
            icon.src = icon13;
            break;
        case 14:
            icon.src = icon14;
            break;
        case 15:
            icon.src = icon15;
            break;

        default:
            break;
    }
}