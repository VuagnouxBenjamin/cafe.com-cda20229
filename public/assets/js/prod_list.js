function showSidebar() {
    document.querySelector("#prod-filter-container").style.left = "0px";
}

function hideSidebar() {
    document.querySelector("#prod-filter-container").style.left = "-200vw";

}

document.querySelector(".show-filter-btn").addEventListener("click", showSidebar);
document.querySelector("#prod-filter-exit").addEventListener("click", hideSidebar);