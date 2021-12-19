$('.button-fdbk').click(function (e) {
    e.preventDefault();

   console.log('------','login-btn is pressed.');

   let login = $('input[name = "login"]').val();
   let email = $('input[name = "email"]').val();
   let feedback = $('input[name = "feedback"]').val();


    $.ajax({
       url: './feed-back.php',
       type: 'POST',
       dataType: 'json',
       data:{
           login: login,
           email: email,
           feedback: feedback
       },


       success: function (data){

           if( data.status){
               document.location.href = '../Feedback/feedback.php'
           }else {

               if(data.type === 0){

               }

               $('.msg').removeClass('none').text(data.message);
           }

       }
   })

});
