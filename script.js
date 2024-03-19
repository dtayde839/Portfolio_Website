const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => {
	hamburger.classList.toggle("active");
	navMenu.classList.toggle("active");
})

// ################################## dark theme ############################

let icon = document.getElementById("icon");


icon.onclick = function(){
	document.body.classList.toggle("change-theme");
}

//################################### nav item ##############################

function hideNavMenu(){
	var navMenu = document.querySelector(".nav-menu");
	navMenu.classList.toggle("active");
}

