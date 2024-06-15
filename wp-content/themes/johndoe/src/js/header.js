
export default class Header {
  constructor() {
    this.header = document.querySelector('.header');
    this.hero = document.querySelector('.hero');
    this.timeout = null;
    this.isDesktop = window.innerWidth > 1024;
    this.itemsWithSubmenu = document.querySelectorAll('.menu-item-has-children');
    this.allMenuItems = document.querySelectorAll('.menu-item');
    this.burger = document.querySelector(".burger");

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

    this.itemsWithSubmenu.forEach((item) => {
      item.addEventListener('click', this.handleSubmenu);
    });
    this.burger.addEventListener("click", this.handleBurgerClick);
    this.allMenuItems.forEach((item) => {
      item.addEventListener('click', this.handleMenuItemClick);
    } );
  }

  handleMenuItemClick = (e) => {
    if (this.isDesktop) return;
    const menuItem = e.target.closest('.menu-item');
    if (menuItem.classList.contains('menu-item-has-children')) return;
    document.body.classList.remove('nav-open');
  }

  handleBurgerClick = () => {
    document.body.classList.toggle("nav-open");
  }

  observer() {
    const observer = new IntersectionObserver(this.handleIntersection.bind(this), {
      root: null,
      threshold: 0,
      rootMargin: '-80px',
    });
    observer.observe(this.hero);
  }

  handleIntersection(entries) {
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
    if (menuItem.classList.contains('active')) {
      menuItem.classList.remove('active');
      document.body.classList.remove('nav-open');
      return;
    }
    e.preventDefault();
    console.log(this)
    this.itemsWithSubmenu.forEach((item) => {
      console.log(item, menuItem)
      if (item !== menuItem) {
        item.classList.remove('active');
      }
    });
    menuItem.classList.add('active');
  }
}