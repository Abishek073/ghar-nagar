// tabs
const tabs = document.querySelectorAll(".tab");
const tabContents = document.querySelectorAll(".tab__content");

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    const tabId = tab.getAttribute("data-tab");

    tabs.forEach((tab) => tab.classList.remove("tab__active"));
    tab.classList.add("tab__active");

    tabContents.forEach((content) => {
      content.getAttribute("id") === tabId
        ? content.classList.add("tab__content--active")
        : content.classList.remove("tab__content--active");
    });
  });
});

// burger menu
const burgerMenu = document.querySelector(".hamburger");
const nav = document.querySelector(".header__nav");

burgerMenu.addEventListener("click", () => {
  burgerMenu.classList.toggle("hamburger__active");
  nav.classList.toggle("header__nav--active");
});
