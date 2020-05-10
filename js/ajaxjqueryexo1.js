$(document).ready(function(){

    $("#button").click(function(){
        $.ajax({
            url : 'https://world.openfoodfacts.org/category/non-alcoholic-beverages/.json',
            method : "GET",
            dataType :"json",
            success : function (reponse) {
                console.log(reponse);
                var result = JSON.stringify(reponse);
                $("#result").text(result);
            }
        });

    });

});
