
$(document).ready(function () {


    $(document).on('keydown', function(event){
        if (event.which  == 68){
            $("#player img").removeClass("up");
            $("#player img").removeClass("down");
            $("#player img").removeClass("left");
            $("#player img").addClass("right");
            goes("right");
        }
        if (event.which  == 87){
            $("#player img").removeClass("left");
            $("#player img").removeClass("down");
            $("#player img").removeClass("right");
            $("#player img").addClass("up");
            goes("up");
        }
        if (event.which  == 65){
            $("#player img").removeClass("up");
            $("#player img").removeClass("down");
            $("#player img").removeClass("right");
            $("#player img").addClass("left");
            goes("left");
        }
        if (event.which  == 83){
            $("#player img").removeClass("up");
            $("#player img").removeClass("left");
            $("#player img").removeClass("right");
            $("#player img").addClass("down");
            goes("down");
        }

        $("#player #go").removeClass("hidden");
        $("#player #stop").addClass("hidden");
    });

    $(document).on('keyup', function(){
        $("#player #go").addClass("hidden");
        $("#player #stop").removeClass("hidden");
    });
});

function goes(when){
    var offsetTop = $("#player").position().top;
    var offsetLeft = $("#player").position().left;
    if(when == "right"){
        offsetLeft += 10;
    }
    if(when == "left"){
        offsetLeft -= 10;
    }
    if(when == "down"){
        offsetTop += 10;
    }
    if(when == "up"){
        offsetTop -= 10;
    }
    console.log(offsetLeft, offsetTop);
    $("#player").css("top",offsetTop);
    $("#player").css("left",offsetLeft);
}