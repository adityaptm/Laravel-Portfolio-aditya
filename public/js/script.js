// TYPING EFFECT
const phrases = ["Web Developer", "IoT Enthusiast", "Informatics Student"];
let pIdx = 0,
  cIdx = 0,
  isDeleting = false;
const textEl = document.getElementById("typing-text");

function typeEffect() {
  if (!textEl) return;
  const current = phrases[pIdx];
  textEl.textContent = isDeleting
    ? current.substring(0, cIdx--)
    : current.substring(0, cIdx++);
  if (!isDeleting && cIdx > current.length) {
    isDeleting = true;
    setTimeout(typeEffect, 2000);
  } else if (isDeleting && cIdx < 0) {
    isDeleting = false;
    pIdx = (pIdx + 1) % phrases.length;
    setTimeout(typeEffect, 500);
  } else {
    setTimeout(typeEffect, isDeleting ? 50 : 100);
  }
}
typeEffect();

// NAVBAR SCROLL
window.addEventListener(
  "scroll",
  () => {
    const navbar = document.getElementById("navbar");
    if (navbar) navbar.classList.toggle("scrolled", window.scrollY > 50);
  },
  { passive: true },
);

// HAMBURGER MENU
const burger = document.getElementById("hamburger");
const menu = document.getElementById("navMenu");
if (burger && menu) {
  burger.addEventListener("click", () => {
    menu.classList.toggle("active");
    burger.classList.toggle("active");
  });
}

// Tutup menu saat klik nav link (mobile)
document.querySelectorAll(".nav-link").forEach((link) => {
  link.addEventListener("click", () => {
    if (menu) menu.classList.remove("active");
    if (burger) burger.classList.remove("active");
  });
});

// IMAGE MODAL
const modal = document.getElementById("imageModal");
const modalImg = document.getElementById("modalImage");
const closeModal = document.querySelector(".close-modal");

document.querySelectorAll(".project-image[data-image]").forEach((el) => {
  el.addEventListener("click", () => {
    if (!modal || !modalImg) return;
    modalImg.src = el.getAttribute("data-image");
    modal.classList.add("show");
    document.body.style.overflow = "hidden";
  });
});

if (closeModal) {
  closeModal.addEventListener("click", () => {
    modal.classList.remove("show");
    document.body.style.overflow = "";
  });
}

if (modal) {
  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      modal.classList.remove("show");
      document.body.style.overflow = "";
    }
  });
}

// REVEAL ANIMATION
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((e) => {
      if (e.isIntersecting) {
        e.target.classList.add("visible");
        observer.unobserve(e.target);
      }
    });
  },
  { threshold: 0.1 },
);
document.querySelectorAll(".reveal").forEach((el) => observer.observe(el));
