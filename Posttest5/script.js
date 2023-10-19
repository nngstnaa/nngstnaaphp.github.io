window.addEventListener("DOMContentLoaded", () => {
  const body = document.querySelector("body");
  const modeToggle = document.querySelector(".dark-light");
  const cta = document.getElementById("cta");
  const image = document.querySelector(".gambar-kecil");

  modeToggle.addEventListener("click", () => {
    modeToggle.classList.toggle("active");
    body.classList.toggle("dark");
  });

  // pop up
  cta.addEventListener("click", () => {
    const url = new URL("https://www.google.com");
    const name = "google";
    window.open(url, name, "width=500,height=500");
  });

  // image hover
  image.addEventListener("mouseover", () => {
    image.style.transform = "rotate(3deg)";
  });

  image.addEventListener("mouseout", () => {
    image.style.transform = "rotate(0deg)";
  });

  let animation;
  cta.addEventListener("mouseover", () => {
    animation = cta.animate(
      [
        { transform: "translateY(0px)" },
        { transform: "translateY(5px)" },
        { transform: "translateY(0px)" },
      ],
      {
        duration: 500,
        iterations: Infinity,
        easing: "ease-in-out",
      }
    );
  });

  cta.addEventListener("mouseout", () => {
    animation.cancel();
  });

  if (
    window.matchMedia &&
    window.matchMedia("(prefers-color-scheme: dark)").matches
  ) {
    body.classList.add("dark-light");
  }
});
