function adjustNavbarContent(){

//Adjust navbar top and avoid overlap
  const navbarHeight = document.querySelector('.navbar').offsetHeight;
    console.log(navbarHeight);
  const adjustTop = document.querySelector("#fix-top");
  adjustTop.style.height = navbarHeight + "px";
}

adjustNavbarContent();

window.addEventListener("resize", adjustNavbarContent);
