<?=isset($admin_header) ? $admin_header : ''?>
<div class="app">

	
<?=isset($admin_menu) ? $admin_menu : ''?>
	<section class="layout">
	
<?=isset($admin_left) ? $admin_left : ''?>
	

		<section class="main-content">

			<header class="header navbar bg-default">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="javascript:;">公告修改</a>
					</li>			
				</ul>
			</header>


			<div class="content-wrap">
				
				
				<div class="row">
					
					
					<div class="col-md-12">
						<section id="elements" class="tab-pane active">
                                    
                                    
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <section class="panel">
                                                <div class="panel-body">
                                                    <form id="theForm" name="theForm" role="form" class="form-horizontal bordered-group"  method="post" action="<?=site_url('/admin/notice/modify_submit')?>">
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">标题</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" value="<?=$row->title?>" name="title" id="title">
                                                            </div>
                                                        </div>  
														<div class="form-group">
                                                            <label class="col-sm-2 control-label">内容</label>
                                                            <div class="col-sm-10">
                                                                <textarea class="form-control" rows="3" name="content" id="content"><?=$row->content?></textarea>
                                                            </div>
                                                        </div>  
														<div class="form-group">
                                                            <label class="col-sm-2 control-label"></label>
                                                            <div class="col-sm-10">
                                                                <button class="btn btn-default" type="submit" >提交</button>	
																<input type="hidden" id="id" name="id" value="<?=$row->notice_id?>">
                                                            </div>
                                                        </div>  
														
                                                    </form>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    
                                </section>
					</div>
				</div>
			</div>

		<div class="site-overlay"></div></section>

	</section>
</div>
<script>
$(document).ready(function() {
	$("#theForm").validate({
	   rules: {
		   title: "required",
		   content: "required"
		},
		messages: {
		   title: "请输入标题",
		   content: "请输入内容"
	   }
	});
});
</script>
<?=isset($admin_footer) ? $admin_footer : ''?>