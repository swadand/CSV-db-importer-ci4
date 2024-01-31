const editBtn = document.getElementsByName("edit");
const editMenu = document.getElementsByName("editMenu");

const overlay = document.getElementsById("overlay");

editBtn.addEventListener("click", function () {
  overlay.style.opacity = "60%";
  overlay.style.pointerEvents = "all";
  editMenu.style.visibility = "visible";
  editMenu.style.height = "100vh";
  editMenu.style.width = "100vw";
});

editBtn.addEventListener("click", function () {
  overlay.style.opacity = "0%";
  overlay.style.pointerEvents = "none";
  CartDiv.style.visibility = "hidden";
  editMenu.style.height = "0vh";
  editMenu.style.width = "0vw";
});
