let mainMenu;

mainMenu = document.getElementById("main-nav");
document.getElementById("mobile-btn").addEventListener("click", mobileBehaviour);
 function mobileBehaviour (){
     //alert("Ho")
     displayMenu()
 }

 function displayMenu(){
     mainMenu.classList.toggle("is-display")
 }
