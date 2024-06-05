//Click ảnh form chi tiết
const imgSamll = document.querySelectorAll(".content-left-picture-demo img");
const imgMain = document.querySelector(".content-left-picture img");
for (let index = 0; index < imgSamll.length; index++) {
  imgSamll[index].addEventListener("click", () => {
    imgMain.src = imgSamll[index].src;
  });
}
//So luong
document.addEventListener("DOMContentLoaded", () => {
  const iptSL = document.querySelector(".content-right-function input");
  const btnPlus = document.querySelector(".content-right-function-btnPlus");
  const btnMinus = document.querySelector(".content-right-function-btnMinus");
  let cout = parseInt(iptSL.value);

  btnPlus.addEventListener("click", () => {
    cout++;
    iptSL.value = cout;
  });

  btnMinus.addEventListener("click", () => {
    cout--;
    iptSL.value = cout;
  });
});
