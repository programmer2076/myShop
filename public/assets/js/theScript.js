"use strict";
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("navbar").style.padding = "15px 10px";
        document.getElementById("navbar").style.background = "rgb(13,0,0)";
        document.getElementById("navbar").style.background = "radial-gradient(#060000 0%,#070000 0%, #060000 0%, #272727 75%)";
        document.getElementById("navbar").style.boxShadow = "1px 0 1px 272727";
        document.getElementById("navbar").style.borderBottom = "1px solid ghostwhite";
        document.getElementById("bounce").style.display = "none";
        document.getElementById("galleryShow").style.marginTop = "50px";
        document.getElementById("overNav").style.marginTop = "0";
        // document.getElementById("logo").style.fontSize = "25px";
    } else {
        document.getElementById("navbar").style.padding = "30px 10px";
        document.getElementById("navbar").style.background = "none";
        document.getElementById("navbar").style.borderBottom = "none";
        document.getElementById("navbar").style.boxShadow = "none";
        document.getElementById("bounce").style.display = "block";
        document.getElementById("galleryShow").style.marginTop = "500px";
        document.getElementById("overNav").style.marginTop = "5px";
        // document.getElementById("logo").style.fontSize = "35px";
    }
}
function dropdownShow(id){
    document.getElementById(id).style.display="block";
}
function dropdownHide(id){
    document.getElementById(id).style.display="none";
}
function  searchInput() {
    document.getElementById("search").style.boxShadow="1px 1px 1px #242323";
}
