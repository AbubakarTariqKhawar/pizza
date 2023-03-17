let loadArder = 'asc';
fetch('http://localhost/github/pizza/pizza/apiReview', {
        method: 'post',
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({
            loadArder: loadArder
        })
        }).then((response) => response.text())
        .then(function(response) {
            document.getElementById("showReview").innerHTML = response;
        });


const selectElement = document.querySelector('.arder');

selectElement.addEventListener('change', (event) => {

    fetch('http://localhost/github/pizza/pizza/apiReview', {
        method: 'post',
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({
            loadArder: event.target.value
        })
        }).then((response) => response.text())
        .then(function(response) {
            document.getElementById("showReview").innerHTML = response;
        });

});