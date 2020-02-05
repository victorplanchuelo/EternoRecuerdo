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
    });
</script>