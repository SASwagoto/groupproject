
//icon toggle
const iconToggle = (icon1, icon2) => {
    icon1.classList.toggle('d-none');
    icon2.classList.toggle('d-none');
};
//


const closeBtn = document.querySelector('.closeBtn');
const notifyPart = document.querySelector('.notification');

closeBtn.addEventListener('click', ()=>{
    notifyPart.classList.add('hidden');
});


//Slider Controller
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  freeMode: true,
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

var swiper = new Swiper(".corporateLaw", {
    slidesPerView: 4,
    spaceBetween: 30,
    freeMode: true,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  var swiper = new Swiper(".criminalLaw", {
    slidesPerView: 4,
    spaceBetween: 30,
    freeMode: true,
    loop: true,
    autoplay: {
      delay: 1500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });