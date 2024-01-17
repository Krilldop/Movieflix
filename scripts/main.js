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
    const cellFilters = cell.getAttribute("data-filter").split(' ');
    if (filterValue === "all" || cellFilters.includes(filterValue)) {
      cell.style.display = "";
    } else {
      cell.style.setProperty("display", "none", "important")
    }
  });
}

function replaceEmptySrc(image) {
  if (image.getAttribute('src') === 'assets/users/.jpg') {
     image.src = 'assets/undraw_avatar.svg';
  }
}

var stars = document.querySelectorAll('.star-icon');
                  
document.addEventListener('click', function(e){
  if(e.target && e.target.classList.contains('star-icon')) {
    var classStar = e.target.classList;
    if(!classStar.contains('active')){
      stars.forEach(function(star){
        star.classList.remove('active');
      });
      classStar.add('active');
    }
  }
});

document.addEventListener('DOMContentLoaded', function() {
  var ratingInput = document.getElementById('ratingValue');

  stars.forEach(function(star) {
    star.addEventListener('click', function() {
      stars.forEach(function(s) {
        s.classList.remove('active');
      });
      this.classList.add('active');

      ratingInput.value = this.getAttribute('data-value');
    });
  });
});