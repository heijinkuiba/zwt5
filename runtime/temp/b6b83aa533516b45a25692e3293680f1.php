<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"D:\wamp\www\zwt5\public/../application/index\view\index\item.html";i:1502934486;s:65:"D:\wamp\www\zwt5\public/../application/index\view\Public\top.html";i:1502173957;s:68:"D:\wamp\www\zwt5\public/../application/index\view\Public\footer.html";i:1502874012;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">

<meta name="apple-mobile-web-app-capable" content="yes">

<meta name="apple-mobile-web-app-status-bar-style" content="black">

<meta name="format-detection" content="telephone=no">
<title><?php echo $article['title']; ?></title>
<link rel="stylesheet" href="/static/index/css/base1.css">
<link rel="stylesheet" href="/static/index/css/style.css">
<link rel="stylesheet" href="/static/index/css/item/<?php echo $twonav['cssName']; ?>/public.css">
<link rel="stylesheet" href="/static/index/css/item/<?php echo $twonav['cssName']; ?>/<?php echo $sannav['cssName']; ?>.css">
<style>
	.jituan{
		background:#a6272c;
		color: #fff;
	}
	.tishi{
	    text-align:center;
		font-size:20px;
	}
	.fanhui {
	    background: #a6272c none repeat scroll 0 0;
	    color: #fff;
	    display: inline-block;
	    font-size: 16px;
	    height: 42px;
	    line-height: 42px;
	    text-align: center;
	    width: 140px;
	}
	.fanhui:hover{
		color: #fff;
	}	
</style>
</head>
<body>
<!-- 首页头部开始 -->
<!-- 头部 -->
		<div class="header-header">
			<div class="header clearfix">
				<!-- logo -->
				<div class="logo">
					<a href="javascript:;">
						
					</a>
				</div>

				<!-- nav -->
				<div class="nav">
					<ul class="navUl">
					<li class="">
							<a href="<?php echo url('index/index'); ?>">首页</a>
					</li>
						<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<li class="">
							<a href="<?php echo url('index/'.$vo['htmlName'],['id'=>$vo['id']]); ?>"><?php echo $vo['navName']; ?></a>
							<?php if(($vo['son']!='')): ?>
							<div class="subWraper down_2">
								<?php if(is_array($vo['son']) || $vo['son'] instanceof \think\Collection || $vo['son'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
					            <dl class="">
					                <dt><a  href="<?php echo url('index/'.$vo2['htmlName'],['id'=>$vo2['id']]); ?>"><?php echo $vo2['navName']; ?></a></dt>
									<?php if(($vo2['son']!='')): ?>
									<dd>
									<?php if(is_array($vo2['son']) || $vo2['son'] instanceof \think\Collection || $vo2['son'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo2['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?>
									<a href="<?php echo url('index/article',['pid'=>$vo3['id']]); ?>"><?php echo $vo3['navName']; ?></a>    
									<?php endforeach; endif; else: echo "" ;endif; ?>
									</dd>
									<?php endif; ?>
					            </dl>
					            <?php endforeach; endif; else: echo "" ;endif; ?>
        					</div>
        					<?php endif; ?> 
						</li>
						<?php endforeach; endif; else: echo "" ;endif; ?>	
					</ul>
				</div>
			</div>
		</div>
<!-- 首页头部结束-->


<!-- body -->
	<img src="/static/index/img/item/<?php echo $twonav['cssName']; ?>/<?php echo $sannav['cssName']; ?>_images/banner.jpg" alt="" width="100%">
	<?php if(($article!='')): ?>
	<div class="page-container">
		<div class="pageAbsout">
	    	<a href="/" class="indexlogo"></a>
	        <a href="">您所在的位置：</a>
	        <a href="/">竹文投</a> &gt;  
	        <a href="<?php echo url('index/'.$onenav['htmlName'],['id'=>$onenav['id']]); ?>"><?php echo $onenav['navName']; ?></a> &gt; 
	        <a href="<?php echo url('index/'.$twonav['htmlName'],['id'=>$twonav['id']]); ?>"><?php echo $twonav['navName']; ?></a> &gt; 
	        <a href="" class="cur"><?php echo $article['title']; ?></a>
		</div>
		<?php echo $article['introtext']; ?>
	</div>
	<?php else: ?>
		<div>
			<br />
			<div class="tishi">内容待更新，敬请期待。。。<br /><br />
			<p><a class="fanhui" href="#" onClick="javascript :history.back(-1);">返回</a></p></div>
			<br />
		</div>
	<?php endif; ?>




<!-- 底部开始 -->
	<!-- footer -->
		<div class="footer">	
			<div class="footer-container clearfix">
				<div class="rightfooter">
					<div class="erweima">
						<img width="90" height="90" src="/static/index/img/erweima.jpg"/>
					</div>
					<p>总部地址：上海市嘉定区南翔镇银翔路515号2号楼</p>
					<br>
					<p>邮编：201802&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;电话：021-69981183</p>
				</div>
				<div class="textfooter">
					<p>
						<a href="">法律声明</a>
						<a href="">联系方式</a>
						<a href="">技术支持</a>
					</p>

					<p>
						©2017 竹文品牌管理（上海）有限公司 | 
						<a href="" >沪ICP备16042968号-1</a>
					</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
</body>
<script src="/static/index/js/jquery-1.12.4.min.js"></script>
<script src="/static/index/js/index.js"></script>
<script>
	$(".down_2:nth-").css("display","block");

</script>
</html>