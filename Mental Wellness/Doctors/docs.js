$(document).ready(function () {

    $('.btn1').on('click', function(){

        $("#Schedule").css("display", "block")
        $("#Experience").css("display", "none")
        $(".btn2").removeClass("opened")
        $("#Qualification").css("display","none")
        $(".btn3").removeClass("opened")
        $(".btn1").addClass("opened")
    })

    $('.btn2').on('click', function () {
        
        $("#Schedule").css("display", "none")
        $(".btn1").removeClass("opened")
        $("#Experience").css("display", "block")
        $(".btn3").removeClass("opened")
        $(".btn2").addClass("opened")
        $("#Qualification").css("display","none")
        
    });

    $('.btn3').on('click', function(){
        
        $("#Schedule").css("display", "none")
        $(".btn2").removeClass("opened")
        $("#Experience").css("display", "none")
        $(".btn1").removeClass("opened")
        $("#Qualification").css("display","block")
        $(".btn3").addClass("opened")
    });
});
