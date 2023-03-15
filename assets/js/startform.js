
  function openForm(order) {
    
    document.getElementById("myForm").style.display = "block";

    document.getElementById("orderId").value = order;
    
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }

  function saveR(user,order,rate,description){
    let star = rate;
    let finalRate = 0;
    let userId = user;
    let orderId = order;
    let d = description;
    if(d != '' && d != null && d != undefined){
      for (let i=0; i<star.length; i++){
        if(star[i].checked){
          if(i == 0){
            finalRate = 5;
          }
          if(i == 1){
            finalRate = 4;
          }
          if(i == 2){
            finalRate = 3;
          }
          if(i == 3){
            finalRate = 2;
          }
          if(i == 4){
            finalRate = 1;
          }
        }
  
      }

      if(finalRate != 0){
        fetch('http://localhost/github/pizza/pizza/api', {
        method: 'post',
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({
            userId: userId,
            orderId: orderId,
            description: d,
            finalRate: finalRate
        })
        }).then((response) => response.text())
        .then(function(response) {
                console.log(response);
                //notie.alert({ type: 1, text: 'Success!', time: 2 })
        });

      }else{
        document.getElementById("requireMsg").innerHTML = 'Plz Rate!';
      }

    }else{
      document.getElementById("requireMsg").innerHTML = 'Plz write some comment!';
    }
    
    
  }


  fetch('http://localhost/github/pizza/pizza/api', {
    method: 'get'
  }).then((response) => response.text())
  .then(function(response) {
    document.getElementById("allorderjava").innerHTML = response;
  });
