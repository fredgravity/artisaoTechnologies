document.addEventListener("DOMContentLoaded", (e) => {
  setTimeout(() => {
    document.getElementById("home").classList.remove("show-body");
    document.getElementById("main-footer").classList.remove("show-body");

    document.getElementById("spinner").setAttribute("style", "display:none;");
    document.getElementById("header").classList.remove("show-body");

    window.addEventListener("scroll", scrollReveal);

    document.querySelector(".menu-btn").addEventListener("click", toggleMenu);

    // scrollReveal();
  }, 2000);
});

const scrollReveal = () => {
  let reveals = document.querySelectorAll(".reveal");
  //   console.log(reveals);
  for (let i = 0; i < reveals.length; i++) {
    let windowHeight = window.innerHeight;
    let revealTop = reveals[i].getBoundingClientRect().top;
    let revealPoint = 150;

    if (revealTop < windowHeight - revealPoint) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
      // reveals[i].classList.add("active-down");
    }
  }
};

let showMenu = false;

const toggleMenu = () => {
  if (!showMenu) {
    document.querySelector(".menu-btn").classList.add("close");
    document
      .querySelector(".sidebar")
      .setAttribute("style", "visibility:visible; margin-left:0px;");
    // document
    //   .querySelector(".sidebar")
    //   .setAttribute("style", "visibility:visible;");

    showMenu = true;
  } else {
    document.querySelector(".menu-btn").classList.remove("close");
    document
      .querySelector(".sidebar")
      .setAttribute("style", "visibility:hidden; margin-left:-250px;");
    // document
    //   .querySelector(".sidebar")
    //   .setAttribute("style", "visibility:hidden;");

    showMenu = false;
  }
};
