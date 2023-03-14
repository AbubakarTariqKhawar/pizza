
  function openForm() {
    /*console.log('orer id');
    let hola = document.getElementById("orderID");
    console.log(hola);
    */
    document.getElementById("myForm").style.display = "block";

    
    
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }

  function saveR(rate,description){
    let star = rate;
    let d = description;
    
    for (let i=0; i<star.length; i++){
      if(star[i].checked){
        console.log(i+'it checked');
      }

    }
  }


  fetch('http://localhost/github/pizza/pizza/api', {
    method: 'get'
  }).then((response) => response.text())
  .then(function(response) {
    document.getElementById("allorderjava").innerHTML = response;
  });

/*
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

*/