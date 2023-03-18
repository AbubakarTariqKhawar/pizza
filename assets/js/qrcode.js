document.getElementById("fqr").style.display = "none";
document.getElementById("showQr").style.display = "none";

function getQr() {
    //let data = orderQr;
    let size = '205x205';

    //let imag = '<img src="https://api.qrserver.com/v1/create-qr-code/?data='+data+'&amp;size='+size+'" alt="qr" title="qr" />';

    document.getElementById("fqr").style.display = "block";
    document.getElementById("showQr").style.display = "block";
    //document.getElementById("showQr").innerHTML = imag;
    document.getElementById("qrButton").style.display = "none";
    
  }