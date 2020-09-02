<?php $this->load->view("account/user/layout/header"); ?>
<style>
.fileDiv {
	position: relative;
	overflow: hidden;
}
.upload_attachmentfile {
	position: absolute;
	opacity: 0;
	right: 0;
	top: 0;
}
.btnFileOpen {margin-top: -50px; }
.direct-chat-warning .right>.direct-chat-text {
	background: #212121;
	color: #212121;
	text-align: right;
}
.direct-chat-primary .right>.direct-chat-text {
	background: #212121;
	color: #fff;
	text-align: right;
	font-weight: bold;
}
.uploascss{
	height: 37px;
	background-color: #212121 !important;
	border: none;
}
.btnSend{
	background-color: #ff3115;
	color: #fff !important;
	font-weight: bold;
	margin-left: 5px;
}
.msgedit{
	background-color: rgba(0,0,0,0) !important;
	border: 2px solid;
	border-radius: 10px !important;
}
.spiner{}
	.spiner .fa-spin { font-size:24px;}
	.attachmentImgCls{ width:450px; margin-left: -25px; cursor:pointer; }
</style>
<div class="content-body">
	<div class="row">
		<div class="col-md-8" id="chatSection">
			<div class="box box-warning direct-chat direct-chat-primary">
				<div class="box-header with-border">
					<h3 class="box-title" id="ReciverName_txt"><?=$chatTitle;?></h3>
					<div class="box-tools pull-right">
						<span data-toggle="tooltip" title="Delete my messages" class="ClearChat"><i class="fa fa-comments"></i></span>
					</div>
				</div>
				<div class="box-body">
					<div class="direct-chat-messages" id="content">
						<div id="dumppy"></div>
					</div>
				</div>
				<div class="box-footer">
					<div class="input-group">
						<?php
						$obj=&get_instance();
						$obj->load->model('UserModel');
						$profile_url = $obj->UserModel->PictureUrl();
						$user=$obj->UserModel->GetUserData();
						?>
						<input type="hidden" id="Sender_Name" value="<?php $user[0]['name']; ?>">
						<input type="hidden" id="Sender_ProfilePic" value="<?php $profile_url; ?>">
						<input type="hidden" id="ReciverId_txt">
						<!-- <input type="text" name="message" placeholder="Message here..." class="form-control message msgedit"> -->
						<textarea name="message"  placeholder="Message here..." class="form-control message msgedit"></textarea>
						<span class="input-group-btn">
							<button type="button" class="btn btnSend" id="nav_down">Send</button>
							<div class="fileDiv btn btn-info uploascss"> <i class="fa fa-upload"></i>
								<input type="file" name="file" class="upload_attachmentfile"/>
							</div>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- col md 8 finish -->
		<div class="col-md-4">
			<!-- USERS LIST -->
			<div class="box box-danger">
				<div class="box-header with-border">
					<h3 class="box-title"><?=$strTitle;?></h3>
					<div class="box-tools pull-right">
						<span class="label label-danger"><?=count($vendorslist);?> <?=$strsubTitle;?></span>
						<!-- <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
						</button> -->
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body no-padding">
					<ul class="users-list clearfix">
						<?php if(!empty($vendorslist)){
							foreach($vendorslist as $v):
								?>
								<li class="selectVendor" id="<?=$v['id'];?>" title="<?=$v['name'];?>">
									<img src="<?=$v['profile_pic'];?>" id="roundimg" alt="<?=$v['name'];?>" title="<?=$v['name'];?>">
									<a class="users-list-name" href="#"><?=$v['name'];?></a>
								</li>
							<?php endforeach;?>
						<?php }else{?>
							<li>
								<a class="users-list-name" href="#">No mentors found</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- row end -->
</div>

<?php $this->load->view("account/user/layout/footer"); ?>
