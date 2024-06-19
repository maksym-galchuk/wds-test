
export default class Header {
  constructor() {
    this.header = document.querySelector('.header');
    this.hero = document.querySelector('.hero');
    this.timeout = null;
    this.isDesktop = window.innerWidth > 1024;
    this.itemsWithSubmenu = document.querySelectorAll('.header .menu-item-has-children');
    this.allMenuItems = document.querySelectorAll('.header .menu-item');
    this.burger = document.querySelector(".header .burger");

    this.init();
  }

  init() {
    this.initEvents();
    this.observer();
  }

  initEvents() {
    window.addEventListener('resize', () => {
      this.isDesktop = window.innerWidth > 1024;
    });

    this.burger.addEventListener("click", this.toggleNav);
    this.allMenuItems.forEach((item) => {
      item.addEventListener('click', this.handleMenuItemClick);
    } );
  }

  handleMenuItemClick = (e) => {
    const menuItem = e.target.closest('.menu-item');
    const link = e.target

    if (menuItem.classList.contains('menu-item-has-children')) {
      return this.handleSubmenu(e)
    }

    const href = link.getAttribute('href');

    if (href.startsWith("#")) {
      e.preventDefault();
      const sectionEl = document.querySelector(href);
      const yOffset = this.header.offsetHeight;
      const y = sectionEl.getBoundingClientRect().top + window.scrollY - yOffset;
      window.scrollTo({top: y, behavior: 'smooth'});
      this.toggleNav();
    }
  }

  observer = () => {
    const observer = new IntersectionObserver(this.handleIntersection, {
      root: null,
      threshold: 0,
      rootMargin: '-80px',
    });
    observer.observe(this.hero);
  }

  handleIntersection = (entries) => {
    const ent = entries[0];
    if (!ent.isIntersecting) {
      if (this.timeout) {
        clearTimeout(this.timeout);
        this.header.classList.remove('slide-out-up');
      }
      document.body.classList.add('sticky');
    } else {
      this.timeout = setTimeout(() => {
        document.body.classList.remove('sticky');
        this.header.classList.remove('slide-out-up');
      } , 500);
      this.header.classList.add('slide-out-up');
    }
  }

  handleSubmenu = (e) => {
    const menuItem = e.target.closest('.menu-item-has-children');
    if (this.isDesktop) {
      return;
    }
    e.preventDefault();
    if (menuItem.classList.contains('active')) {
      menuItem.classList.remove('active');
      return;
    }
    this.itemsWithSubmenu.forEach((item) => {
      if (item !== menuItem) {
        item.classList.remove('active');
      }
    });
    menuItem.classList.add('active');
  }

  toggleNav = () => {
    document.body.classList.toggle('nav-open');
    this.itemsWithSubmenu.forEach((item) => {
      item.classList.remove('active');
    });
  }
}