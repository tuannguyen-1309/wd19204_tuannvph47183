var index = 1;
function changeImage() {
  var imgs = [
    "../images/banner.webp",
    "../images/banner2.webp",
    "../images/banner3.webp",
  ];
  document.getElementById("image").src = imgs[index];
  index++;
  if (index == 3) {
    index = 0;
  }
}
setInterval(changeImage, 3000);
