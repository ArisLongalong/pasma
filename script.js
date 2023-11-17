let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
};

window.onscroll = () => {
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".slides-slider", {
  loop: true,
  spaceBetween: 20,
  autoHeight: true,
  grabCursor: true,
  breakpoints: {
    640: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

const monthYearElement = document.getElementById('monthYear');
const datesElement = document.getElementById('dates');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let currentDate = new Date();

const updateCalendar = () => {
  const currentYear = currentDate.getFullYear();
  const currentMonth = currentDate.getMonth();

  const firstDay = new Date(currentYear, currentMonth, 0);
  const lastDay = new Date(currentYear, currentMonth + 1, 0);
  const totalDays = lastDay.getDate();
  const firstDayIndex = firstDay.getDay();
  const lastDayIndex = lastDay.getDay();

  const monthYearString = currentDate.toLocaleString('default', {month: 'long', year: 'numeric'});
  monthYearElement.textContent = monthYearString;

  let datesHTML = '';

  for(let i = firstDayIndex; i > 0; i--) {
    const prevDate = new Date(currentYear, currentMonth, 0 - i + 1);
    datesHTML += `<div class ="date inactive">${prevDate.getDate()}</div>`;
  }

  for(let i = 1; i <= totalDays; i++) {
    const date = new Date(currentYear, currentMonth, i);
    const activeClass = date.toDateString() === new Date();
    datesHTML += `<div class ="date ${activeClass}">${i}</div>`;
  }

  for(let i = 1; i <= 7 - lastDayIndex; i++) {
    const nextDate = new Date(currentYear, currentMonth + 1, i);
    datesHTML += `<div class ="date inactive">${nextDate.getDate()}</div>`;
  }

  datesElement.innerHTML = datesHTML;
}

prevBtn.addEventListener('click', () => {
  currentDate.setMonth(currentDate.getMonth() - 1);
  updateCalendar();
})

nextBtn.addEventListener('click', () => {
  currentDate.setMonth(currentDate.getMonth() + 1);
  updateCalendar();
})

updateCalendar();