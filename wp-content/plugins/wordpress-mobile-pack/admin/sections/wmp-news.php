<?php 
// get news
$arrNews = WMobilePackAdmin::wmp_news_updates(); 

if(!empty($arrNews) && is_array($arrNews )):
	// if the news array is empty this section will not be displayed	
?>
    <div class="updates">
        <h2>News &amp; Updates</h2> 
        <div class="spacer-20"></div>
        <div class="details" id="news_updates">
            <!-- start news and updates -->
            <?php foreach($arrNews as $news):?>
                <?php if(isset($news["title"]) && $news["title"] != ''):?>
                	<p><strong><?php echo $news["title"];?></strong></p>
                    <div class="spacer-2"></div>
                <?php endif;?>
                <p>
					<?php 
						$content_length = 152;
						if(isset($news["title"]) && $news["title"] != ''){
							$content_length = 120;
						}
					?>	
					<?php echo substr($news["content"],0,$content_length);?> 
                    <?php if(isset($news["link"]) && $news["link"] != ''):?>
                    	<a href="<?php echo $news["link"];?>" target="_blank" title="read more">read more</a>
                    <?php endif;?> 
                </p> 
                <div class="spacer-20"></div>
                <div class="grey-dotted-line"></div>
                <div class="spacer-20"></div>
            <?php endforeach;?>    
        </div>
    </div>
    <div class="spacer-5"></div>
<?php endif;?>
<!-- add appticles social -->
<div class="appticles-updates">
    <!-- add content -->
    <div><p>Appticles Updates</p></div>
    <div class="social">
        <a href="https://www.facebook.com/appticles" target="_blank" title="Facebook" class="facebook"></a>
        <a href="https://twitter.com/appticles" target="_blank" title="Twitter" class="twitter"></a>
        <a href="https://plus.google.com/+AppticlesCom/" target="_blank" title="Google +" class="google-plus"></a>
    </div>
</div>


<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#news_updates').perfectScrollbar();
	});
</script>