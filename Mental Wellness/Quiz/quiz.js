src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"
$(document).ready(function(){

    window.totalq = $(".qno").length
    window.sum = $("input:checked").val()
    if($("input:checked").length<totalq)
    $(".submitbtn").click(function(){
        const inputs = $('input[type="radio"]:checked');
        let totalValue = 0;
    
        for (let i = 0; i < inputs.length; i++) {
          totalValue += parseInt(inputs[i].value);
        }
        var maxval = 12.5*totalq
       var cal= totalValue/maxval
       var per = cal*100
        if($("input:checked").length<totalq){
            alert("Please select all the answers")
        }
        else{
      
            $(".scoremssg").html("You have scored" + " " + per+"%")

            $('.modal-wrapper').toggleClass('open');
            $('.page-wrapper').toggleClass('blur-it');
             return false;
        }
 
    })

})

//modal form
$( document ).ready(function() {
    $('.btn-close ').on('click', function() {
        $('.modal-wrapper').removeClass('open');
    });
  });
  