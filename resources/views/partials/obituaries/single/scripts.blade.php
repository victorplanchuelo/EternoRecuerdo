<script>
    $(document).ready(function() {
        $('#myCarousel').carousel({interval: false, pause: false});
        $(this).find(".video-camilo-sesto")[0].pause();
        
        $("#myCarousel").on('slid.bs.carousel', function(){
            if($(this).find(".video-camilo-sesto").parent().hasClass("active"))
            {
                $(this).find(".video-camilo-sesto")[0].play();
            }
        });

        $("#myCarousel").on('slide.bs.carousel', function(){
            if($(this).find(".video-camilo-sesto").parent().hasClass("active"))
            {
                $(this).find(".video-camilo-sesto")[0].pause();
                $(this).find(".video-camilo-sesto")[0].currentTime = 0;
            }
        });

        $('#modal-ramos .ramo').on('click', function(e) {
            e.stopPropagation();
            $('#modal-ramos .ramo img').css('border', '1px solid #dee2e6');
            $(this).find('img').css("border", "3px solid red");
            //marcar el ramo
        });

        $('#modal-velas .vela').on('click', function(e) {
            e.stopPropagation();
            $('#modal-velas .vela img').css('border', '1px solid #dee2e6');
            $(this).find('img').css("border", "3px solid red");
            //marcar la vela
        });

        $('#modal-velas .close').on('click', function() {
            $('#modal-velas .vela img').css('border', '1px solid #dee2e6');
        });

        $('#modal-ramos .close').on('click', function() {
            $('#modal-ramos .ramo img').css('border', '1px solid #dee2e6');
        });
    });
</script>