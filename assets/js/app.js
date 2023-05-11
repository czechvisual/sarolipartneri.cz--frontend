// Mobile menu

function openMenu() {
  const element = document.getElementById("app-header");
  element.classList.add("app-header-opened");
  document.body.classList.toggle('lock-scroll');
}

function closeMenu() {
  const element = document.getElementById("app-header");
  element.classList.remove("app-header-opened");
  document.body.classList.remove('lock-scroll');
}

// Sticky nav

function stickyNav() {
  const header = document.querySelector('.app-header');

  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 0) {
    header.classList.add('is-fixed');
  } else {
    header.classList.remove('is-fixed');
  }
}

window.addEventListener('scroll', stickyNav);
window.addEventListener('DOMContentLoaded', stickyNav);

// Back to top

function backTop() {
  const button = document.getElementById("go-top");

  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    button.classList.add('is-visible');
  } else {
    button.classList.remove('is-visible');
  }
}

function goTop() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

window.addEventListener('scroll', backTop);
window.addEventListener('DOMContentLoaded', backTop);

// Modal

const openButton = document.querySelector("[data-open-modal]")
const modal = document.querySelector("[data-modal]")

openButton.addEventListener("click", () => {
  modal.showModal()
})

modal.addEventListener("click", e => {
  const dialogDimensions = modal.getBoundingClientRect()
  if (
    e.clientX < dialogDimensions.left ||
    e.clientX > dialogDimensions.right ||
    e.clientY < dialogDimensions.top ||
    e.clientY > dialogDimensions.bottom
  ) {
    modal.close()
  }
})


