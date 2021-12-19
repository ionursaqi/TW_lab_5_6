$('.login-btn').click(function (e) {
    e.preventDefault();

   console.log('------','login-btn is pressed.');

   let login = $('input[name = "login"]').val();
   let password = $('input[name = "password"]').val();

   $.ajax({
       url: './signin.php',
       type: 'POST',
       dataType: 'json',
       data:{
           login: login,
           password: password
       },


       success: function (data){

           if( data.status){
               document.location.href = '../home/home.php'
           }else {

               if(data.type === 0){

               }

               $('.msg').removeClass('none').text(data.message);
           }

       }
   })

});
