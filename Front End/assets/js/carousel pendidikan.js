const wrapperThree = document.querySelector(".pengurus-tiga .wrapper");
const carouselThree = document.querySelector(".pengurus-tiga .carousel");
const arrowBtnsThree = document.querySelectorAll(".pengurus-tiga .wrapper");
const carouselChildrensThree = [...carouselThree.children];
let isDraggingThree = false, isAutoPlayThree = true, startXThree, startScrollLeftThree, timeoutIdThree;