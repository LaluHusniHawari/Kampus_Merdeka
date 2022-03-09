alert("WELCOME TO GAME SOUND ANIMAL ")


// kambing
$("document").ready(function() {
    $("#kambing").click(function() {
        $(this).css({
            background: "url('img/kambing.jpg')",
            "background-size": "cover",
        });
    });
    $("#kambing").click(function() {
        $("<audio></audio>")
            .attr({
                src: "audio/kambing.mp3",
                volume: 0.4,
                autoplay: "autoplay",
            })
            .appendTo("body");
    });
    $("#kambing").mouseover(function() {
        $(this).css({
            background: "rgb(56, 84, 90)",
        });
    });

    //kucing
    $("#kucing").click(function() {
        $(this).css({
            background: "url('img/kucing.jpg')",
            "background-size": "cover",
        });
    });
    $("#kucing").click(function() {
        $("<audio></audio>")
            .attr({
                src: "audio/kucing.mp3",
                volume: 0.4,
                autoplay: "autoplay",
            })
            .appendTo("body");
    });
    $("#kucing").mouseover(function() {
        $(this).css({
            background: "rgb(56, 84, 90)",
        });
    });

    //ayam
    $("#ayam").click(function() {
        $(this).css({
            background: "url('img/ayam.jpeg')",
            "background-size": "cover",
        });
    });
    $("#ayam").click(function() {
        $("<audio></audio>")
            .attr({
                src: "audio/ayam.mp3",
                volume: 0.4,
                autoplay: "autoplay",
            })
            .appendTo("body");
    });
    $("#ayam").mouseover(function() {
        $(this).css({
            background: "rgb(56, 84, 90)",
        });
    });

    //singa
    $("#singa").click(function() {
        $(this).css({
            background: "url('img/singa.jpg')",
            "background-size": "cover",
        });
    });
    $("#singa").click(function() {
        $("<audio></audio>")
            .attr({
                src: "audio/singa.mp3",
                volume: 0.4,
                autoplay: "autoplay",
            })
            .appendTo("body");
    });
    $("#singa").mouseover(function() {
        $(this).css({
            background: "rgb(56, 84, 90)",
        });
    });


    //kuda
    $("#kuda").click(function() {
        $(this).css({
            background: "url('img/kuda.jpeg')",
            "background-size": "cover",
        });
    });
    $("#kuda").click(function() {
        $("<audio></audio>")
            .attr({
                src: "audio/kuda.mp3",
                volume: 0.4,
                autoplay: "autoplay",
            })
            .appendTo("body");
    });
    $("#kuda").mouseover(function() {
        $(this).css({
            background: "rgb(56, 84, 90)",
        });
    });




});