<style>
    .slideshow-element {
        
    }
    
    .slideshow-element h1 {
        text-align: center;
        padding-top: 200px;
        color: #333;
        
    }
    
    .slideshow-element h1 span {
  
        background-color: rgba(255,255,255,0.2);
        
    }
</style>
<div class="slideshow-element" style="background-image: url('<?php echo $params->get('background-url', ''); ?>')">
    
    <?php if($params->get('header', '')): ?>
    <div class="container">
       <div class='slideshow-description'><h2><?php echo $params->get('header', ''); ?></h2> 
                <?php echo $params->get('description', ''); ?> 
                </div>
        
        </div>
    <?php endif; ?>
</div>

