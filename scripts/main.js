function filterBtn(button) {
  changeColor(button);
  filterMovies(button);
}

function changeColor(button) {
  let buttons = document.querySelectorAll(".genrebtn");
  buttons.forEach(function (btn) {
    btn.classList.remove("selected");
  });
  button.classList.add("selected");
}

function filterMovies(button) {
  const filterValue = button.getAttribute("data-filter");
  const movieCells = document.querySelectorAll('.moviecol');

  movieCells.forEach(cell => {
    const cellFilter = cell.getAttribute("data-filter");
    if (filterValue === "all" || filterValue === cellFilter) {
      cell.style.display = "";
    } else {
      cell.style.setProperty("display", "none", "important")
    }
  });
}

function replaceEmptySrc(image) {
  if (image.getAttribute('src') === '') {
     image.src = 'assets/undraw_avatar.svg';
  }
}