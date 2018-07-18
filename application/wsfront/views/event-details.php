<?php if(!empty($detail)){ ?>
<div class="post_section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 post_left">
				<div class="post_left_section post_left_border">
					<div class="post single_post">
						<div class="post_thumb">
							<img src="<?php echo base_url('picture/event/'.$detail[0]['ws_event_id'].'/zoom_xtra_'.$detail[0]['image'][0]['ws_event_image_path']); ?>" alt="" />
						</div>
						<!--end post thumb-->
						<div class="meta">
							<span class="date">Posted : <a href="#"><?php echo tanggal_indo(date('d-m-Y',$detail[0]['ws_event_date_create']), true); ?></a></span>
						</div>
						<!--end meta-->
						<h1><?php echo $detail[0]['ws_event_title']; ?></h1>
						<div class="post_desc"><?php echo $detail[0]['ws_event_desc']; ?></div>
						<!--end post desc-->
						<div class="post_bottom">
							<ul>
								<li class="like">
									<a href="#">
										<img src="<?php echo base_url('assets/wsfront'); ?>/img/news/like_icon.png" alt="" />
										<span>12</span>
									</a>
								</li>
								<li class="share">
									<a href="#">
										<img src="<?php echo base_url('assets/wsfront'); ?>/img/news/share_icon.png" alt="" />
										<span>12</span>
									</a>
								</li>
								<li class="favorite">
									<a href="#">
										<img src="<?php echo base_url('assets/wsfront'); ?>/img/news/favorite_icon.png" alt="" />
										<span>12</span>
									</a>
								</li>
							</ul>
						</div>
						<!--end post bottom-->
					</div>
					<!--end post-->
					<div class="related_post_sec single_post">
						<h3>Related Posts</h3>
						<ul>
							<li>
								<span class="rel_thumb">
									<a href=""><img src="<?php echo base_url('assets/wsfront'); ?>/img/news/related_thumb_01.png" alt=""></a>
								</span>
								<!--end rel_thumb-->
								<div class="rel_right">
									<h4><a href="">Lorem Ipsum dolar simt Amet simply dummy Text Lorem Ipsum dolar</a></h4>
									<div class="meta">
										<span class="author">By: <a href="#">Alexandra Jenmi</a></span>
										<span class="category"> <a href="#">Indesign</a></span>
										<span class="date">Posted: <a href="#">January 24, 2015</a></span>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation...</p>
								</div>
								<!--end rel right-->
							</li>
							<li>
								<span class="rel_thumb">
									<a href=""><img src="<?php echo base_url('assets/wsfront'); ?>/img/news/related_thumb_01.png" alt=""></a>
								</span>
								<!--end rel_thumb-->
								<div class="rel_right">
									<h4><a href="">Lorem Ipsum dolar simt Amet simply dummy Text Lorem Ipsum dolar</a></h4>
									<div class="meta">
										<span class="author">By: <a href="#">Alexandra Jenmi</a></span>
										<span class="category"> <a href="#">Indesign</a></span>
										<span class="date">Posted: <a href="#">January 24, 2015</a></span>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation...</p>
								</div>
								<!--end rel right-->
							</li>
						</ul>
					</div>
					<!--end single_post-->
					<div class="comments_section">
						<div class="comment_post">
							<h3>Comments</h3>
							<div class="comment_header">
								<ul>
									<li class="comment_count">1 comment</li>
									<li class="comment_favorite_count"><i class="fa fa-star"></i> <span>0</span></li>
								</ul>
							</div>
							<!--end comment header-->
							<form class="reply" action="#" method="post">
								<div class="postbox">
									<div class="avatar">
										<span class="user">
											<img alt="Avatar" src="<?php echo base_url('assets/wsfront'); ?>/img/news/avatar.png" />
										</span>
									</div>
									<div class="comments_field">
										<input type="text" class="form-control comments" placeholder="Leave a message...">
									</div>
									<!--end comments field-->
								</div>
								<!--end postbox-->
								<div id="post_list">
									<div class="comment_tools">
										<ul>
											<li class="sort"><a href="#">Best <i class="fa fa-caret-down"></i></a></li>
											<li class="community"><a href="#">Community</a></li>
											<li class="setting"><a href="#"><img src="<?php echo base_url('assets/wsfront'); ?>/img/news/setting.png" alt="" /> <i class="fa fa-caret-down"></i></a></li>
											<li class="share"><a href="#">Share <i class="fa fa-share-square-o"></i></a></li>
										</ul>
									</div>
									<!--end comment tools-->
									<div class="post-content" data-role="post-content">
										<div class="avatar">
											<span class="user">
												<img alt="Avatar" src="<?php echo base_url('assets/wsfront'); ?>/img/news/avatar.png" />
											</span>
										</div>
										<div class="post-body">
											<div class="post-top">
												<span class="post-byline">
													<span class="author publisher-anchor-color"><a href="#">Gavin Hoffman</a></span>
												</span>
												<span class="post-meta">
													<a  href="#">5 hours ago</a>
												</span>
											</div>
											<!--end post-top-->
											<div class="post-body-inner">
												<div  class="post-message">
													<p>I loving this DISQUS PSD - so easy to edit to see what my design looks like before I install :)</p>
												</div>
											</div>
											<!--end post-body-inner-->
											<ul class="comment_footer">
												<li data-role="voting" class="voting">
													<a  href="#">
														<span class="control left"><i class="fa fa-angle-up"></i></span>
													</a>
													<span title="Vote down" data-action="downvote" class="vote-down  count-1" role="button">
														<span class="control"><i class="fa fa-angle-down"></i></span>
													</span>
												</li>
												<li data-role="reply-link" class="reply">
													<a data-action="reply" href="#">Reply</a>
												</li>
												<li class="share">
													<a class="toggle"><span class="text">Share <i class="fa fa-angle-right"></i></span></a>
												</li>
											</ul>
										</div>
										<!--end post-body-->
									</div>
									<!--end post-content-->
								</div>
								<!--end post_list-->
							</form>
							<div class="comment_bottom_block">
								<ul>
									<li><a href="#"><i class="fa fa-rss"></i> &nbsp; Comment feed</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i> &nbsp; Subscribe via email</a></li>
								</ul>
							</div>
							<!--end comment_bottom_block-->
						</div>
						<!--end comment post-->
						<div class="comments_form">
							<h3>Post A Comment</h3>
							<form action="#" method="post">
								<div class="half">
									<input type="text" class="form-control" placeholder="Name">
								</div>
								<div class="half right">
									<input type="text" class="form-control" placeholder="Email">
								</div>
								<div class="full">
									<textarea rows="9" cols="10" class="form-control" placeholder="Write a comment"></textarea>
								</div>
								<input type="submit" class="commonBtn" value="Submit">
							</form>
						</div>
						<!--end comments form-->
					</div>
					<!--end comments section-->
				</div>
				<!--end post left section-->
			</div>
			<!--end post_left-->
			<div class="col-xs-12 col-sm-4 post_right">
				<div class="related_post_sec">
					<div class="list_block">
						<h3>Latest News</h3>
						<ul>
							<li>
								<span class="rel_thumb">
									<img src="<?php echo base_url('assets/wsfront'); ?>/img/news/rel_thumb.png" alt="" />
								</span>
								<!--end rel_thumb-->
								<div class="rel_right">
									<a href="news.html"><h4>Offered in small class sizes with great emphasis...</h4></a>
									<span class="date">Posted: <a href="#">January 24, 2015</a></span>
								</div>
								<!--end rel right-->
							</li>
							<li>
								<span class="rel_thumb">
									<img src="<?php echo base_url('assets/wsfront'); ?>/img/news/rel_thumb.png" alt="" />
								</span>
								<!--end rel_thumb-->
								<div class="rel_right">
									<a href="news.html"><h4>Offered in small class sizes with great emphasis...</h4></a>
									<span class="date">Posted: <a href="#">January 24, 2015</a></span>
								</div>
								<!--end rel right-->
							</li>
							<li>
								<span class="rel_thumb">
									<img src="<?php echo base_url('assets/wsfront'); ?>/img/news/rel_thumb.png" alt="" />
								</span>
								<!--end rel_thumb-->
								<div class="rel_right">
									<a href="news.html"><h4>Offered in small class sizes with great emphasis...</h4></a>
									<span class="date">Posted: <a href="#">January 24, 2015</a></span>
								</div>
								<!--end rel right-->
							</li>
							<li>
								<span class="rel_thumb">
									<img src="<?php echo base_url('assets/wsfront'); ?>/img/news/rel_thumb.png" alt="" />
								</span>
								<!--end rel_thumb-->
								<div class="rel_right">
									<a href="news.html"><h4>Offered in small class sizes with great emphasis...</h4></a>
									<span class="date">Posted: <a href="#">January 24, 2015</a></span>
								</div>
								<!--end rel right-->
							</li>
							<li>
								<span class="rel_thumb">
									<img src="<?php echo base_url('assets/wsfront'); ?>/img/news/rel_thumb.png" alt="" />
								</span>
								<!--end rel_thumb-->
								<div class="rel_right">
									<a href="news.html"><h4>Offered in small class sizes with great emphasis...</h4></a>
									<span class="date">Posted: <a href="#">January 24, 2015</a></span>
								</div>
								<!--end rel right-->
							</li>
						</ul>
						<a href="#" class="more_post">More</a>
					</div>
					<!-- end list_block -->
					<div class="list_block">
						<div class="upcoming_events">
							<h3>Upcoming Events</h3>
							<ul>
								<li class="related_post_sec single_post">
									<span class="date-wrapper">
										<span class="date"><span>24</span>January</span>
									</span>
									<div class="rel_right">
										<h4><a href="single-events.html">Offered in small class sizes with great emphasis...</a></h4>
										<div class="meta">
											<span class="place"><i class="fa fa-map-marker"></i>Main Campus</span>
											<span class="event-time"><i class="fa fa-clock-o"></i>11.00 pm</span>
										</div>
									</div>
								</li>
								<li class="related_post_sec single_post">
									<span class="date-wrapper">
										<span class="date"><span>24</span>January</span>
									</span>
									<div class="rel_right">
										<h4><a href="single-events.html">Offered in small class sizes with great emphasis...</a></h4>
										<div class="meta">
											<span class="place"><i class="fa fa-map-marker"></i>Main Campus</span>
											<span class="event-time"><i class="fa fa-clock-o"></i>11.00 pm</span>
										</div>
									</div>
								</li>
								<li class="related_post_sec single_post">
									<span class="date-wrapper">
										<span class="date"><span>24</span>January</span>
									</span>
									<div class="rel_right">
										<h4><a href="single-events.html">Offered in small class sizes with great emphasis...</a></h4>
										<div class="meta">
											<span class="place"><i class="fa fa-map-marker"></i>Main Campus</span>
											<span class="event-time"><i class="fa fa-clock-o"></i>11.00 pm</span>
										</div>
									</div>
								</li>
							</ul>
							<a href="" class="btn btn-default btn-block commonBtn">More Events</a>
						</div>
					</div>
					<!-- end list_block -->
					<div class="list_block">
						<h3>Facebook</h3>
						<div class="facebook_section">
							<img src="<?php echo base_url('assets/wsfront'); ?>/img/news/facebook.png" alt="" />
						</div>
						<!--end facebook section-->
					</div>
					<!-- end list_block -->
					<div class="list_block">
						<h3>Twitter</h3>
						<div class="twitter_section">
							<img src="<?php echo base_url('assets/wsfront'); ?>/img/news/twitter.png" alt="" />
						</div>
						<!--end facebook section-->
					</div>
					<!-- end list_block -->
					<!--
					<div class="list_block">
						<div class="newsletter">
							<h3>Newsletter</h3>
							<form action="#" method="post">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
								</div>
								<button type="submit" class="btn btn-default btn-block commonBtn">Subscribe</button>
							</form>
						</div>
					</div>
					-->
					<!-- end list_block -->
				</div>
				<!--end related_post_sec-->
			</div>
			<!--end post_right-->
		</div>
	</div>
</div>
<!--end post section-->
<?php } ?>