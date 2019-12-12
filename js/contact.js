
//--------------------------------------------------CONTACT US MSG

document.querySelector("#send_msg").addEventListener('click', function(){
    var name = document.querySelector("#name").value;
    var mail = document.querySelector("#mail").value;
    var msg = document.querySelector("#msg").value;
    
    
    if(name == "" || mail == "" || msg == ""){
//        alert("Input your details");
        Swal.fire({
          icon: 'error',
          title: 'Please input the correct details',
          text: 'No field should be empty!',
//          footer: '<a href>Why do I have this issue?</a>'
        })
        
    } else {
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Message send successful',
          text: 'Our team would get back to you shortly!',
          showConfirmButton: false,
          timer: 4000
        })
    }
    
    
});


