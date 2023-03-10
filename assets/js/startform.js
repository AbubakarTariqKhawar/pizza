
  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }

  function saveR(rate,description){
    let r = rate;
    let d = description;
    alert('checking rating');
    alert(r);
    alert('checking description');
    alert(d);

  }


  fetch('http://localhost/AbubakarTariq_Restaurante/pizza/api', {
    method: 'get'
  }).then((response) => response.text())
  .then(function(response) {
    document.getElementById("allorderjava").innerHTML = response;
  });


  fetch('http://localhost/AbubakarTariq_Restaurante/pizza/api', {
        method: 'post',
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({
            nombre: "David",
            edad: 18
        })
    }).then((response) => response.text())
    .then(function(response) {
            console.log(response);
    });