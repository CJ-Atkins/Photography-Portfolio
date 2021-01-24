const landingPageSliderImg = document.querySelectorAll(
  ".landing-page-slider-img"
);

// LANDING PAGE BACKGROUND SLIDER IMAGE FUNCTION
const landingPageSliderDelay = 4000;
let landingPageSliderCount = 0;

landingPageSliderImg[landingPageSliderCount].style.opacity = "1";

setInterval(landingPageSliderNextImg, landingPageSliderDelay);

function landingPageSliderNextImg() {
  landingPageSliderImg[landingPageSliderCount].style.zIndex = "-2";
  const templandingPageSliderCount = landingPageSliderCount;
  setTimeout(() => {
    landingPageSliderImg[templandingPageSliderCount].style.opacity = "0";
  }, 2000);

  landingPageSliderCount =
    (landingPageSliderCount + 1) % landingPageSliderImg.length;

  landingPageSliderImg[landingPageSliderCount].style.opacity = "1";
  landingPageSliderImg[landingPageSliderCount].style.zIndex = "-1";
}
