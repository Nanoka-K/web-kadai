function toggleMenu() {
  const menu = document.querySelector(".menu-links");
  const icon = document.querySelector(".hamburger-icon");
  const body = document.body;

  menu.classList.toggle("open");
  icon.classList.toggle("open");
  body.classList.toggle("no-scroll");
}

// const staffContent = document.querySelector('.staffList');
// const arrow = document.querySelector('.staffList');

// const arrow = document.getElementById("arrow");
// const content = document.getElementById("content");

// arrow.addEventListener("click", () => {
//   content.classList.toggle("hidden");
//   arrow.classList.toggle("open");
// });

//ヘッダーに適用するグリッチの処理（仮）
setInterval(() => {
  const el = document.querySelector(".glitch");
  if(Math.random() > 0.7){
    el.style.transform = "translateX(" + (Math.random()*4-2) + "px)";
    setTimeout(()=> el.style.transform = "", 100);
  }
}, 2000);
 