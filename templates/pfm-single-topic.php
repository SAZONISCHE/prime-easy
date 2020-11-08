<div class="prime-forum-item <?php pfm_the_topic_classes(); ?>">
    <?php pfm_the_topic_manager(); ?>
    <div class="prime-forum-icon">
        <?php pfm_the_icon('fa-comments-o'); ?>
    </div>
    <div class="prime-forum-title-topic">
        <div class="prime-general-title"><?php pfm_the_forum_icons(); ?><a class="prime-general-title-ex" title="<?php _e('Go to topic','wp-recall'); ?>" href="<?php pfm_the_topic_permalink(); ?>"><?php pfm_the_topic_name(); ?></a><?php pfm_page_navi(array('type'=>'topic')); ?>
        </div>
	    <span class="prime-forum-count-topic" ><span><?php pfm_the_post_count(); ?></span><p><?php _e('Messages','wp-recall'); ?></p></span>
    </div>
    <div class="prime-last-items prime-last-items-topic">
	<?php 
		global $PrimeTopic, $PrimeQuery;
		$lastPostEx = $PrimeQuery->search_topic_last_post($PrimeTopic->topic_id);
		echo '<a class="prime-forum-home-modern-avatar" href="'.get_author_posts_url($lastPostEx->user_id).'">'.get_avatar($lastPostEx->user_id, 40).'</a>'; 		
	?>    	
        <span><?php _e('Last message','wp-recall'); ?></span>
        <span><?php pfm_the_last_post(); ?></span>
    </div>
</div>
