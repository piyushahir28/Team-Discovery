function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
 
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
  let button = document.querySelector('.two');
  let button2 = document.querySelector('hr');
  let button1 = document.querySelector('.one');
  let v = document.querySelector(".ex4");
  let r = document.querySelector(".ex3");

button.onclick = function () {
  
  button2.style.marginLeft = ("8%") ;
  button1.classList.remove("one");
  this.classList.add('one');
  v.classList.add("nine");
  r.classList.remove("nine");

  
 
};
button1.onclick = function () {
  this.classList.add('one');
  button2.style.marginLeft = ("0%") ;
  button.classList.remove("underline2");
  button.classList.remove("one"); 
  v.classList.remove("nine");
  r.classList.add("nine");

};
 var one = document.querySelectorAll(".Approve");
 let d = document.getElementsByClassName("detail");
 let k = document.getElementsByClassName("Approve");

 for(let i=0 ; i< d.length ; i++)
 {
 let Approve = document.getElementsByClassName("Status");
 let dis = document.getElementsByClassName("Approve");
  console.log(Approve[i].innerHTML);
 
if(Approve[i].innerHTML === 'Verifed'){
    
   one[i].classList.add("four");
  }
else{
   dis[i].disabled = true; 
   one[i].classList.add('five');
}
 }