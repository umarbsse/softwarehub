<?php if ( post_password_required() ) {
	return;
} ?>
<section class="panel chat-box no-border">
	<div class="panel-heading" style="border-color: transparent;">
		<h4><span class="label label-warning"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> User Comments</span>
		</h4>
	</div>
	<div class="panel-body">

		<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
			<p class="no-comments">
				<?php _e( 'Comments are closed.' ); ?>
			</p>
		<?php endif; ?>
		<?php 
			$args = array('post_id' => get_the_ID(),'status'    => 'approve');
			$comments = get_comments($args);
			//var_dump($comments);
			foreach($comments as $comment) :
		?>				
		<div class="chat-user">
			<a href="javascript:;" class="chat-avatar pull-left">
				<img src="<?php echo esc_url( get_avatar_url( $comment->comment_author_email ) ); ?>" class="img-circle" title="user name" alt="">
			</a>
			<div class="message">
				<div class="panel">
					<div class="panel-body">
						<span><?php echo $comment->comment_author; ?></span>
						<p style="word-wrap: break-word;"><?php echo $comment->comment_content; ?></p>
						<hr>
                        <small><i class="fa fa-clock-o mg-r-xs"></i><?php echo $comment->comment_date; ?></small>
                    </div>
                </div>
            </div>
        </div>
		<?php
			endforeach;
			if (count($comments)==0) {
		?>
		<p>No Comments Found</p>
		<?php
			}
		?>
		<form action="<?php echo get_site_url(); ?>/wp-comments-post.php" method="post" id="commentform" class="comment-form">
			<h2 style="color: #444444;">Leave a Comment</h2>
			<hr>
			<div class="row">
				<div class="col-md-6">	
					<div class="form-group">
		            	<label>Name<sup class="required">*</sup></label>
		            	<input id="author" name="author" type="text" value="" size="30" maxlength="245" required="required" class="form-control">
		          	</div>			
				</div>				
			</div>
			<div class="row">
				<div class="col-md-6">	
					<div class="form-group">
		            	<label>Email<sup class="required">*</sup></label>
		            	<input id="email" name="email" type="text" class="form-control" size="30" maxlength="100"required="required">
		          	</div>			
				</div>				
			</div>
			<div class="row">
				<div class="col-md-6">	
					<div class="form-group">
		            	<label>Website</label>
		            	<input id="url" name="url" type="text" value="" size="30" maxlength="200" class="form-control">
		          	</div>			
				</div>				
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="exampleInputEmail1">Comment</label>
						<textarea class="form-control" id="comment" name="comment" required="required" maxlength="65525" rows="10"></textarea>
					</div>			
				</div>				
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<button type="submit" id="submit" name="submit" value="Post Comment" class="btn btn-success">Comment</button>
					</div>
					<input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>" id="comment_post_ID">
					<input type="hidden" name="comment_parent" id="comment_parent" value="0">			
				</div>				
			</div>
		</form>
    </div>
</section>
<div id="comments" class="comments-area">
	<?php //comment_form(); ?>
</div>