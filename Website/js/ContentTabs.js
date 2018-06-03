/* codes for image slides */
function Selector(movieYear) {
    var i;
    var x = document.getElementsByClassName("contenttab");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(movieYear).style.display = "block";  
}

function SelectImageTab(tabselected) {
    var i;
    var j = document.getElementsByClassName("imagetab");
    for (i = 0; i < j.length; i++) {
       j[i].style.display = "none";  
    }
    document.getElementById(tabselected).style.display = "block";  
}

function SelectImageTab2(tabToSelect) {
    var i;
    var j = document.getElementsByClassName("imagetab2");
    for (i = 0; i < j.length; i++) {
       j[i].style.display = "none";  
    }
    document.getElementById(tabToSelect).style.display = "block";  
}




