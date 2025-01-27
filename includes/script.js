const images = document.querySelectorAll(".images"),
  headings = document.querySelectorAll(".heading");

images.forEach((image) => {
  image.addEventListener("click", () => {
    image.classList.toggle("box-active");
    setTimeout(function () {
      image.lastElementChild.classList.toggle("letter-active");
    }, 10);
  });
});
