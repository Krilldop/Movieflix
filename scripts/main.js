function changeColor(button) {
  let buttons = document.querySelectorAll(".genrebtn");
  buttons.forEach(function (btn) {
    btn.classList.remove("selected");
  });
  button.classList.add("selected");
}
