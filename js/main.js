(() => {
  "use strict";

  const header = document.querySelector("[data-header]");
  const menuButton = document.querySelector("[data-menu-button]");
  const nav = document.querySelector("[data-nav]");
  const backToTop = document.querySelector(".back-to-top");
  const navLinks = [...document.querySelectorAll("[data-nav] a")];

  const closeMenu = () => {
    if (!menuButton || !nav) return;
    menuButton.setAttribute("aria-expanded", "false");
    nav.classList.remove("is-open");
    document.body.classList.remove("menu-open");
  };

  menuButton?.addEventListener("click", () => {
    const willOpen = menuButton.getAttribute("aria-expanded") !== "true";
    menuButton.setAttribute("aria-expanded", String(willOpen));
    nav?.classList.toggle("is-open", willOpen);
    document.body.classList.toggle("menu-open", willOpen);
  });

  navLinks.forEach((link) => link.addEventListener("click", closeMenu));

  const capabilityCards = [...document.querySelectorAll("[data-capability-card]")];
  const activateCapabilityCard = (selectedCard) => {
    capabilityCards.forEach((card) => {
      const isSelected = card === selectedCard;
      card.classList.toggle("is-active", isSelected);
      card.setAttribute("aria-pressed", String(isSelected));
    });
  };

  capabilityCards.forEach((card) => {
    card.addEventListener("click", () => activateCapabilityCard(card));
    card.addEventListener("keydown", (event) => {
      if (event.key !== "Enter" && event.key !== " ") return;
      event.preventDefault();
      activateCapabilityCard(card);
    });
  });

  window.addEventListener(
    "scroll",
    () => {
      const scrolled = window.scrollY > 24;
      header?.classList.toggle("is-scrolled", scrolled);
      backToTop?.classList.toggle("is-visible", window.scrollY > 640);
    },
    { passive: true }
  );

  const sections = [...document.querySelectorAll("main section[id]")];
  if ("IntersectionObserver" in window) {
    const sectionObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;
          navLinks.forEach((link) => {
            link.classList.toggle("active", link.hash === `#${entry.target.id}`);
          });
        });
      },
      { rootMargin: "-35% 0px -58%", threshold: 0 }
    );
    sections.forEach((section) => sectionObserver.observe(section));

    const revealObserver = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;
          entry.target.classList.add("is-visible");
          observer.unobserve(entry.target);
        });
      },
      { rootMargin: "0px 0px -8%", threshold: 0.08 }
    );
    document.querySelectorAll(".reveal").forEach((item) => revealObserver.observe(item));
  } else {
    document.querySelectorAll(".reveal").forEach((item) => item.classList.add("is-visible"));
  }

  document.querySelectorAll("[data-year]").forEach((item) => {
    item.textContent = String(new Date().getFullYear());
  });
})();
