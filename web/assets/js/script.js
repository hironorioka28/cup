(function($) {
    var counter = 0,
        timer;

    startTimer();

    $("#carousel .next").on("click", function() {
        stopTimer();
        slideShow(false);
    });
    $("#carousel .prev").on("click", function() {
        stopTimer();
        slideShow(true);
    });

    $("#testButton .start").on("click", function() {
        console.log("start");
        startTimer();
    });

    $("#testButton .stop").on("click", function() {
        console.log("stop");
        stopTimer();
    });

    $("#thumbnail button").on("click", function() {
        stopTimer();
        counter = $(this).parent().index();
        $("#carousel .mainImg li").removeClass("current").eq(counter).addClass("current");
        $("#carousel .thumbnail li").removeClass("current").eq(counter).addClass("current");
        $("#carousel .mainImg li").eq(counter).addClass("current");
        $("#carousel .thumbnail li").eq(counter).addClass("current");
    });

    function startTimer() {
        timer = setInterval(function() {
            slideShow(false);
        }, 3000);
    }

    function stopTimer() {
        clearInterval(timer);
    }

    function slideShow(reverse) {
        if (reverse) {
            counter--;
        } else {
            counter++;
        }
        $("#carousel .mainImg li").removeClass("current").eq(counter).addClass("current");
        $("#carousel .thumbnail li").removeClass("current").eq(counter).addClass("current");
        if (reverse) {
            if (counter < 0) {
                counter = $("#carousel .mainImg li").length - 1;
                counter = $("#carousel .thumbnail li").length - 1;
            }
        } else {
            if (counter > $("#carousel .mainImg li").length - 1) {
                counter = 0;
            }
        }
        $("#carousel .mainImg li").eq(counter).addClass("current");
        $("#carousel .thumbnail li").eq(counter).addClass("current");
    }

})(jQuery);
