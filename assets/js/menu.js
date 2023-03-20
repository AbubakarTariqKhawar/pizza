let loadArder = 'all';
document.getElementById("noV").style.display = "block";
document.getElementById("ve").style.display = "block";


const selectElement = document.querySelector('.marder');

selectElement.addEventListener('change', (event) => {
    if(event.target.value == 'all'){
        document.getElementById("noV").style.display = "block";
        document.getElementById("ve").style.display = "block";

    }
    if(event.target.value == 'noV'){
        document.getElementById("noV").style.display = "block";
        document.getElementById("ve").style.display = "none";

    }
    if(event.target.value == 've'){
        document.getElementById("noV").style.display = "none";
        document.getElementById("ve").style.display = "block";

    }



});