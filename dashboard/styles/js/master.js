$(function(){
    $(".main-button").on("click", function(){
            $.ajax({
                url: "consulta.php",
                type: 'POST',
                data: $("#contact").serialize(),
                success: function (result) {
                    console.log('estou funfando')
                    $(".resposta").html(result);
                 },
                complete: $('#contact').trigger("reset"),
                error: function(result,status,error){
                    $(".resposta").html(result.responseText);
            }
            });
    });
});
