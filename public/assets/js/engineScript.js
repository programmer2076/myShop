// Start Search Program
function searchData(){
    let sVal = document.forms['searchForm']['search'].value;
    if(sVal.length !== 0 && sVal.length >= 3) {
        let xhttp;
        if (window.XMLHttpRequest) {
            xhttp = new XMLHttpRequest();
        } else {
            xhttp = new ActiveXObject('Microsoft.XMLHTTP')
        }
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let res = this.responseText;
                if(res != "0"){
                    document.getElementById('searchRetData').style.overflow="scroll";
                    document.getElementById('searchRetData').style.height="300px";
                    document.getElementById('searchRetData').innerHTML = res;
                }
            }
        };
        xhttp.open("GET", "/search/" + sVal, true);
        xhttp.send();
    }else if(sVal.length <= 3){
        document.getElementById('searchRetData').innerHTML="";
        document.getElementById('searchRetData').style.overflow="initial";
        document.getElementById('searchRetData').style.height="0";
    }
}
