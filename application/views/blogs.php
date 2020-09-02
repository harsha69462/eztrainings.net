

<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
	<div class="breadcrumbs-inner">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="page-title">OUR BLOG</h1>
					<ul>
						<li>
							<a class="active" href="<?php echo base_url(''); ?>">Home</a>
						</li>
						<li>Blog</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Breadcrumbs End -->
<!-- Blog Single Start Here -->
<div class="single-blog-details sec-spacer">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12">
				<div class="single-image">
					<img src="<?php echo base_url('assets/images/blog/ai.jpg'); ?>" alt="single">
				</div><!-- .single-image End -->
				<h5 class="top-title">ARTIFICIAL INTELLIGENCE</h5>
				<p>
					The scientific understanding of the mechanisms underlying thought and intelligent behavior and their embodiment in machines.Artificial intelligence (AI) is wide-ranging branch of computer science concerned with building smart machines capable of performing tasks that typically require human intelligence. AI is an interdisciplinary science with multiple approaches, but advancements in machine learning and deep learning are creating a paradigm shift in virtually every sector of tech industry.
				</p>
				<p>
					It.was initially started in 1950 and followed by the year 1955, John Mc carthy who  is known as the founder of artificial intelligence introduced the term. Mc carthy along with Alan Turing,Alan New Well,Herbert A. Simon and Marvin Minsky is known as the founding fathers of AI.Alan suggested that if humans use available information, as well as reason, to solve problems to make decisions then why can't it be done with the help of machines?.Turing’s paper “computing Machinery and Intelligence” (1950), and its subsequent turing test, established the fundamental goal and vision of artificial intelligence. It is the endeavor to replicate or stimulate human intelligence in machines.
				</p>
				<p>
					As with nearly every technology trend that has risen before, it’s worth asking if AI is simply a fad or if it’s here to stay. Before you shrug it off, know that AI isn’t new. In fact, for more than 60 years, the field of AI has been steadily growing outside of the public spotlight. For instance, if you were to visit the Hilton in McLean, Virginia, you could be greeted by a friendly, 2-foot-tall robot named Connie. With the help of IBM’s cognitive computing technology Watson, Hilton created the world’s first AI-powered hotel concierge to help personalize guest experiences. When you check in, you’ll find her perched on the front desk answering questions about the hotel’s amenities or using her moving arms and fingers to literally point guests in the right direction of the perfect restaurant. According to an exclusive with Wired, Watson finished the entire process in 24 hours -- a task that would take humans 10 to 30 days to complete. But you don’t have to work at a Fortune 500 company to witness the value of AI. Consider the adoption in your own home. Thanks to the rise of the Internet of Things, even the least tech-y of people can personalize their lives from their pocket -- from optimizing the temperature of their home to reduce energy costs to ordering more laundry detergent from Alexa with their voice to using security cameras with facial recognition software so you know if it’s a human or a stray neighborhood pet at your door.
				</p>
				<p>
					And this is the point of AI-powered technologies. They’re designed to flow into the platforms and tools we already use and make even the most mundane tasks more efficient and accurate.Which points to why 37% of those surveyed on the adoption of artificial intelligence said they hadn’t encountered an AI technology, yet when this same group was asked if they used voice search technology, 63% responded “yes.” People are using AI every day without realizing it.AI is now also used in chatbots which are now tranforming marketing as in online shoppings,data-driven,social media etc.
				</p>

				<p>
					Predicting the future of work has always been the tempting topic but there’s the  rise of the remote worker, the habits of the millennial employee, or the collaborative benefits of an open office floor plan. But when you talk about the way we’ll work five years now, you can’t do so without considering the impact of AI.
				</p>
				<blockquote>
					<i class="fa fa-quote-right" aria-hidden="true"></i>
					AI is not the story of human versus machine.Instead its human and machine versus problem. It is about augmenting human intelligence with capabilities that just aren't available through traditional technology.
				</blockquote>
				<div class="share-section">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 life-style">
							<span class="author">
								<a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Keerthi CH </a>
							</span>
							<span class="comment">
								<a href="#">
									<i class="fa fa-commenting-o" aria-hidden="true"></i> 3
								</a>
							</span>
							<span class="date">
								<i class="fa fa-calendar" aria-hidden="true"></i> April 21, 2020
							</span>
							<span class="cat">
								<a href="#"><i class="fa fa-folder-o" aria-hidden="true"></i> AI </a>
							</span>
						</div>
						<div class="col-lg-6 col-md--12">
							<ul class="share-link1">
								<li><a href="#"> Tags:</a></li>
								<li><a href="#"> AI</a></li>
								<li><a href="#"> Future</a></li>
								<li><a href="#"> Technology</a></li>
							</ul>
						</div>
					</div>
				</div><!-- .share-section End -->

				<div class="share-section2">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<span> You Can Share It : </span>
						</div>
						<div class="col-sm-8">
							<form class="form-group" action="" method="post">
								<input type="text" class="form-control" name="comment" placeholder="Leave a comment here..."/>
								<input type="submit" name="post" value="Post comment" class="btn btn-success">
							</form>
						</div>

					</div>
				</div><!-- .share-section2 End -->

				<div class="author-comment">
					<h3 class="title-bg">Recent Comments</h3>
					<?php for ($i=0; $i < count($comment); $i++): ?>
						<!-- comment starts -->
						<div class="row mb-3">
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
								<div class="image-comments"><img src="<?php echo base_url('assets/images/blog-details/comment.png'); ?>" alt="Blog Details photo"></div>
							</div>
							<div class="row col-lg-10 col-md-10 col-sm-10 col-xs-12">
								<div class="col-md-8 dsc-comments">
									<h4><?php echo $comment[$i]['by_email']; ?></h4>
									<p><?php echo $comment[$i]['comment']; ?></p>
									<!-- <a href="#"> Reply</a> -->
									<a href="javascript:void(0)" data-toggle="collapse" data-target="<?php echo "#reply".$comment[$i]['id'] ?>">reply</a>
								</div>
								<div class="col-sm-4">
									<span class="reply"> <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $comment[$i]['date']; ?></span></span>
								</div>
							</div>
						</div>
						<!-- reply starts -->
						<div id="<?php echo "reply".$comment[$i]['id'] ?>" class="row collapse ml-5 mb-4">
							<form class="form-group" action="<?php echo base_url("replycomment/?cuid=".$comment[$i]['id']); ?>" method="post">
								<div class="d-flex">
									<input type="text" name="<?php echo "reply".$comment[$i]['id'] ?>" placeholder="Reply..." class="form-control " />
									<!-- <a href="<?php echo base_url("replycomment/?cuid=".$comment[$i]['id']); ?>"><i class='ml-2 fas fa-arrow-circle-right' style="font-size:36px"></i></a> -->
									<input type="submit" value="&#xf138;" style='font-size:27px;color:red' class="ml-2 fas fa-arrow-circle-right btn"/>
								</div>
							</form>
							<?php foreach($reply as $rep): ?>
								<?php if ($comment[$i]['id'] == $rep['comment_id']): ?>
									<div class="row">
										<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
											<div class="image-comments"><img src="<?php echo base_url('assets/images/blog-details/comment.png'); ?>" alt="Blog Details photo"></div>
										</div>
										<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 border-bottom">
											<span class="reply"> <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $rep['reply_date'] ?></span></span>
											<div class="dsc-comments">
												<h4><?php echo $rep['reply_by'] ?></h4>
												<p><?php echo $rep['reply'] ?></p>
												<!-- <a href="#"> Reply</a> -->
											</div>
										</div>
									</div>
								<?php endif; ?>
							<?php endforeach; ?>
						</div>
						<!-- reply ends -->
						<!-- comment ends -->
					<?php endfor; ?>



				</div><!-- .author-comment End -->
				<!-- .leave-comments-area end -->
			</div>
			<div class="col-lg-4 col-md-12">
				<div class="sidebar-area">
					<div class="latest-courses">
						<h3 class="title">Latest Updates</h3>
						<div class="post-item">
							<div class="post-img">
								<a href="<?php echo base_url(''); ?>"><img class="updates_custom" src="<?php echo base_url('assets/images/courses/fullstack.jpg'); ?>" alt="" title="News image"></a>
							</div>
							<div class="post-desc">
								<h4><a href="<?php echo base_url(''); ?>">FULL STACK WEB DEVELOPMENT</a></h4>
								<span class="duration">
									<i class="fa fa-clock-o" aria-hidden="true"></i> 33 Days
								</span>
								<span class="price">Price: <span>&#x20B9;3999</span></span>
							</div>
						</div><!-- .post-item end -->
						<div class="post-item">
							<div class="post-img">
								<a href="<?php echo base_url(''); ?>"><img class="updates_custom" src="<?php echo base_url('assets/images/courses/datascience.jpg'); ?>" alt="" title="News image"></a>
							</div>
							<div class="post-desc">
								<h4><a href="<?php echo base_url(''); ?>">DATA SCIENCE USING PYTHON</a></h4>
								<span class="duration">
									<i class="fa fa-clock-o" aria-hidden="true"></i> Starts 20th June 2020
								</span>
								<span class="price"><br>Price: <span>To be Updated</span></span>
							</div>
						</div><!-- .post-item end -->
						<div class="post-item">
							<div class="post-img">
								<a href="<?php echo base_url(''); ?>"><img class="updates_custom" src="<?php echo base_url('assets/images/blog-details/sm3.jpg'); ?>" alt="" title="News image"></a>
							</div>
							<div class="post-desc">
								<h4><a href="<?php echo base_url(''); ?>">DJANGO FRAMEWORK</a></h4>
								<span class="duration">
									<i class="fa fa-clock-o" aria-hidden="true"></i> Starts 15th May 2020
								</span>
								<span class="price"><br>Price: <span>To be Updated</span></span>
							</div>
						</div>
					</div>
				</div><!-- .sidebar-area end -->
			</div>
		</div>
	</div>
</div>
<!-- Blog Single End  -->
