
function clickMore() {
    var moreText = document.getElementById("moreafter");
    var btnText = document.getElementById("more");

        btnText.innerHTML = ""; 
        moreText.style.display = "inline";
    
}

function isChecked() {
    if(document.getElementById("kami").checked){
        document.getElementById("warehousekami").src = "https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/warehouse-with-shipper.png";
        document.getElementById("textKami2").style.color = "#03a9fa";
        document.getElementById("textKami1").style.color = "lightgray";
    }else{
        document.getElementById("warehousekami").src = "https://assets-cdn.shipper.id/shipper-id-v5-web/release-5.7.3/assets/images/warehouse-without-shipper.png";
        document.getElementById("textKami1").style.color = "#dc3545";
        document.getElementById("textKami2").style.color = "lightgray";
    }
}

