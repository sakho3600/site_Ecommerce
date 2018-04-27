var subMenu=document.getElementsByClassName('subMenu');
  for (var i = 0; i < subMenu.lenght; i++) {
       subMenu[i].addEventListner('click',fct);

  }
function fct(e) {
	  alert('hhhh');
}