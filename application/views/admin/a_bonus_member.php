<?=isset($admin_header) ? $admin_header : ''?>
<div class="app">

	
<?=isset($admin_menu) ? $admin_menu : ''?>
	<section class="layout">
	
<?=isset($admin_left) ? $admin_left : ''?>
	

		<section class="main-content">

			<header class="header navbar bg-default">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="javascript:;">单人积分赠送</a>
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
                                                    <form id="theForm" name="theForm" role="form" class="form-horizontal bordered-group"  method="post" action="<?=site_url('/admin/a_bonus/member_submit')?>">
														<div class="form-group">
                                                            <label class="col-sm-2 control-label">会员帐号</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" value="" name="user" id="user">
                                                            </div>
                                                        </div>  
														<div class="form-group">
                                                            <label class="col-sm-2 control-label">积分赠送日期</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control Wdate" value="<?=date("Ymd")?>" name="ymd" id="ymd" onClick="WdatePicker({dateFmt:'yyyyMMdd'})" style="width:20%">
                                                            </div>
                                                        </div>  
														<div class="form-group">
                                                            <label class="col-sm-2 control-label"></label>
                                                            <div class="col-sm-10">
                                                                <button class="btn btn-default" type="submit" >提交</button>
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
		   user: "required",
		   ymd: "required"
		},
		messages: {
		   user: "请输入会员帐号",
		   ymd: "请输入积分赠送日期"
	   }
	});
});
</script>
<?=isset($admin_footer) ? $admin_footer : ''?>