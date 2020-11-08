<div class="prime-forum-box">
    <div class="prime-forum-item <?php pfm_the_forum_classes(); ?>">
		<div class="prime-forum-icon">
			<?php pfm_the_icon('fa-folder-o'); ?>
		</div>
        <div class="prime-forum-title-forum">
            <div class="prime-forum-title-forum-info">
                <div class="prime-general-title"><a class="prime-general-title-ex" title="<?php _e('Go to forum','wp-recall'); ?>" href="<?php pfm_the_forum_permalink(); ?>"><?php pfm_the_forum_name(); ?></a><?php pfm_page_navi(array('type'=>'forum')); ?>
                </div>
                <div class="prime-forum-description"><?php pfm_the_forum_icons(); ?><?php pfm_the_forum_description(); ?></div>
                <?php if(pfm_have_subforums()): ?>         
                    <div class="prime-subforums-list">
                        <?php _e('Subforums:','wp-recall'); ?> <?php pfm_subforums_list(); ?>
                    </div>
                <?php endif; ?>
            </div>
            <span class="prime-forum-count-forum" ><span><?php pfm_the_topic_count(); ?></span><p><?php _e('Topics','wp-recall'); ?></p></span>         
        </div>
		<div class="prime-last-items">
			<?php
			global $PrimeForum, $PrimeQuery;
				$lastPostEx = $PrimeQuery->search_forum_last_post($PrimeForum->forum_id);
				echo '<div class="prime-forum-home-modern-avatar"><a href="'.get_author_posts_url($lastPostEx->user_id).'">'.get_avatar($lastPostEx->user_id, 40).'</a></div>';

			?>        
            <span><?php _e('Last topic','wp-recall'); ?>: <?php pfm_the_last_topic(); ?></span><span><?php _e('Last message','wp-recall'); ?></span><span><?php pfm_the_last_post(); ?></span>
        </div>
    </div>
</div>