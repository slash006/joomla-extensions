<style>

    #slideshow-container {

        position: relative;
        overflow: hidden;
        width:100%;
        padding-left: 0;
        padding-right: 0;
    }


    #slideshow-container > .moduletable {

        position: absolute;
        overflow: hidden;
        width: 100%;

    }
    
    .moduletable > div {
        
        height: 420px;
        background-size: cover;
        background-position: center;
    }


</style>

<script>

    jQuery( document ).ready(function() {

        var length = jQuery('#slideshow-container > div').length;
        if(length == 1 || length == undefined)
            return;

        jQuery("#slideshow-container > div:gt(0)").hide();

        setInterval(function() {
            jQuery('#slideshow-container > div:first')
                .fadeOut(<?php echo $params->get('out-duration', ''); ?>)
                .next()
                .fadeIn(<?php echo $params->get('in-duration', ''); ?>)
                .end()
                .appendTo('#slideshow-container');
        }, <?php echo $params->get('interval', ''); ?>);
    });



</script>