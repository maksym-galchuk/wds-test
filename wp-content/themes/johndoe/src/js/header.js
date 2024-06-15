const sectionHeroEl = document.querySelector('.hero');
const headerEl = document.querySelector('.header');
let timeout = null;

const observer = new IntersectionObserver(
  (entries) => {
    const ent = entries[0];
    if (!ent.isIntersecting) {
      if (timeout) {
        clearTimeout(timeout);
        headerEl.classList.remove('slide-out-up');
      }
      document.body.classList.add('sticky');
    } else {
      timeout = setTimeout(() => {
        document.body.classList.remove('sticky');
        headerEl.classList.remove('slide-out-up');
      } , 500);
      headerEl.classList.add('slide-out-up');
    }
  },
  {
    root: null,
    threshold: 0,
    rootMargin: '-80px',
  }
);
observer.observe(sectionHeroEl);