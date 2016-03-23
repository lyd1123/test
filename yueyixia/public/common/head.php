     <link rel="stylesheet" href="../css/lanrenzhijia.css" media="all">
	 <script src="js/jquery.min.js"></script>
<script>
jQuery(document).ready(function($) {
	$('.theme-login').click(function(){
		$('.theme-popover-mask').fadeIn(100);
		$('.theme-popover').slideDown(200);
	})
	$('.theme-poptit .close').click(function(){
		$('.theme-popover-mask').fadeOut(100);
		$('.theme-popover').slideUp(200);
	})

	$('.theme-zhuce').click(function(){
		$('.theme-popover-mask').fadeIn(100);
		$('.zhuce').slideDown(200);
	})
	$('.theme-poptit .close').click(function(){
		$('.theme-popover-mask').fadeOut(100);
		$('.zhuce').slideUp(200);
	})
	

})
</script>
		<div class="header print-hide">
  <div class="header__wrapper">
    <div class="header__logo">
      <div class="navbar-logo">
  <a href="http://www.fishtrip.cn/">
    <img alt="大鱼自助游" src="img/view/logo-black.png" title="大鱼自助游" height="31" width="54">
</a></div>


    </div>
		<?php
			if(!empty(session('name'))){
		?>
<div class="header__user-menu js-home-nav-guest-menu">
        <ul class="fishui-list fishui-list--inline navbar-user-menu">
  <li class="flist__item navbar-menu-hot">
    <a href="javascript:;" class="header__link js-show-app-modal" rel="nofollow"><i class="iconfont icon-iphone"></i>下载大鱼APP</a>
  </li>
  <li class="flist__item navbar-menu-hot">
    <a href="http://www.fishtrip.cn/preferentials/" class="header__link" target="_blank">我的钱包</a>
  </li>
  <li class="flist__item"><a href="http://www.fishtrip.cn/orders/my" class="header__link">订单</a></li>
  <li class="flist__item"><a href="http://www.fishtrip.cn/favorites" class="header__link">收藏</a></li>
  <li class="flist__item">
    <div class="user-menu user_logged_in dropdown">
  <a class="umenu__button user-avatar dropdown-toggle header__link" data-toggle="dropdown">
    <img alt="小鱼儿441243495号" class="uavatar__pic" src="http://static03.fishtrip.cn/assets/avatar-default-small-2f53ef89faea912409d250f342324aba.png" height="36" width="36">
    <span class="uavatar__text"><?php echo session('name')?></span>
    <i class="caret umenu__caret"></i>
  </a>

  <ul class="dropdown-menu umenu__menu" role="menu">
      <li><a href="http://www.fishtrip.cn/orders/my_drawback">我的退款</a></li>

    <li>
      <a href="http://www.fishtrip.cn/comments">消息中心</a>
    </li>

    <li>
      <a href="/edit">设置</a>
    </li>

    <li>
      <a href="/logout">退出</a>
    </li>
  </ul>
</div>

  </li>
</ul>

    </div>
		<?}else{?>
    <div class="header__user-menu js-home-nav-guest-menu">
        <ul class="fishui-list fishui-list--inline navbar-guest-menu">
  <li class="flist__item navbar-menu-hot">
    <a href="javascript:;" class="header__link js-show-app-modal" rel="nofollow"><i class="iconfont icon-iphone"></i>下载大鱼APP</a>
  </li>
  <li class="flist__item navbar-menu-hot">
    <a href="/money" class="header__link" target="_blank">我的钱包</a>
  </li>
  <li class="flist__item">
     <a class="btn btn-primary btn-large theme-zhuce" href="javascript:;">注册</a>
  </li>
  <li class="flist__item">
    <a class="btn btn-primary btn-large theme-login" href="javascript:;">登录</a>
  </li>
</ul>

    </div>
<?php  }?>
    <div class="header__search">
      
<div class="navbar-search js-navbar-search is-active">
  <form accept-charset="UTF-8" action="/search" class="nsearch__wrap nsearch__form" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" value="✓" type="hidden"></div>
    <span class="nsearch__icon-pin yicon-place-pin"></span>
    <input class="nsearch__text jnsearch__input" data-placeholder="台湾 - 花莲" id="q" name="q" value="台湾 - 花莲" type="text">
    <button class="nsearch__icon-search jnsearch__btn jnsearch__popup">
      <span class="yicon-search-nav"></span>
</button></form>  <div class="nsearch__selector">
    <div class="city-selector js-city-selector" role="tabpanel">
  <ul class="cselector__tabs fishui-tabs nav js-city-selector-tabs" role="tablist">
      <li class="ftabs__tab" role="tab">
        <a href="#pane_231">台湾</a>
        <div class="yicon-corner ftabs__corner"></div>
      </li>
      <li class="ftabs__tab " role="tab">
        <a href="#pane_30">日本</a>
        <div class="yicon-corner ftabs__corner"></div>
      </li>
      <li class="ftabs__tab " role="tab">
        <a href="#pane_31">泰国</a>
        <div class="yicon-corner ftabs__corner"></div>
      </li>
      <li class="ftabs__tab " role="tab">
        <a href="#pane_37">韩国</a>
        <div class="yicon-corner ftabs__corner"></div>
      </li>
    <li class="cselector__tabs-tip"><span>更多目的地敬请期待</span></li>
  </ul>
  <div class="cselector__panes tab-content">
      <div class="tab-pane city-selector-pane active" id="pane_231" role="tabpanel">
        

  <div class="cpane__row">
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/taiwan/taibei/" class="">台北</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/taiwan/hualian/" class="">花莲</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/taiwan/kending/" class="">垦丁</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/taiwan/jiufen/" class="">九份</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/taiwan/gaoxiong/" class="">高雄</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/taiwan/qingjingnongchang/" class="">清境农场</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/taiwan/alishan/" class="">阿里山</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/taiwan/riyuetan/" class="">日月潭</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/taiwan/tainan/" class="">台南</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/taiwan/taizhong/" class="">台中</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/taiwan/taidong/" class="">台东</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/taiwan/outer-island/" class="">离岛</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/taiwan/yilan/" class="">宜兰</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/taiwan/miaoli/" class="">苗栗</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/taiwan/xinbei/" class="">新北</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/taiwan/nantou/" class="">南投</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/taiwan/jiayi/" class="">嘉义</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/taiwan/xinzhu/" class="">新竹</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/taiwan/zhanghua/" class="">彰化</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/taiwan/taoyuan/" class="">桃园</a>
      </span>
  </div>

 
      </div>
      <div class="tab-pane city-selector-pane " id="pane_30" role="tabpanel">
        

  <div class="cpane__row">
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/japan/jingdu/" class="">京都</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/japan/daban/" class="">大阪</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/japan/dongjing/" class="">东京</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/japan/beihaidao/" class="">北海道</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/japan/xianggen/" class="">箱根</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/japan/nailiang/" class="">奈良</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/japan/zhahuang/" class="">札幌</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/japan/fuliangye/" class="">富良野</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/japan/chengtian/" class="">成田</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/japan/fushishan/" class="">富士山</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/japan/mingguwu/" class="">名古屋</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/japan/shenhu/" class="">神户</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/japan/chongsheng/" class="">冲绳</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/japan/hanguan/" class="">函馆</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/japan/xuchuan/" class="">旭川</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/japan/guandongdiqu/" class="">关东地区</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/japan/guanxidiqu/" class="">关西地区</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/japan/zhongbudiqu/" class="">中部地区</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/japan/jiuzhoudiqu/" class="">九州地区</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/japan/zhongguodiqu/" class="">中国地区</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/japan/dongbeidiqu/" class="">东北地区</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/japan/siguodiqu/" class="">四国地区</a>
      </span>
  </div>

 
      </div>
      <div class="tab-pane city-selector-pane " id="pane_31" role="tabpanel">
        

  <div class="cpane__row">
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/thailand/chiang-mai/" class="">清迈</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/thailand/phuket/" class="">普吉岛</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/thailand/bangkok/" class="">曼谷</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/thailand/pai/" class="">拜县</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/thailand/koh-samui/" class="">苏梅岛</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/thailand/krabi/" class="">甲米</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/thailand/pattaya/" class="">芭提雅</a>
      </span>
  </div>

 
      </div>
      <div class="tab-pane city-selector-pane " id="pane_37" role="tabpanel">
        

  <div class="cpane__row">
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/korea/seoul/" class="">首尔</a>
      </span>
      <span class="cpane__city">
        <a href="http://www.fishtrip.cn/korea/busan/" class="">釜山</a>
      </span>
  </div>

 
      </div>
  </div>
</div>

  </div>
</div>


    </div>

    <div class="header__menu">
      <ul class="fishui-list fishui-list--inline navbar-menu ">
  <li class="flist__item">
    <a href="/like" class="header__link" target="_blank">大家喜欢</a>
  </li>
  <li class="flist__item"><a href="/feedback" class="header__link" target="_blank">大鱼旅行猎人</a></li>
  <li class="flist__item"><a href="http://www.fishtrip.cn/shareholder/" class="header__link" target="_blank">大鱼股东计划</a></li>
</ul>

    </div>

    <div class="header__flash">
      <div class="flash-messages js_flash_messages">
</div>

    </div>
    <div class="header__notify js_header_notify">
    </div>
  </div>

      <div class="seo-navigator">

    <a href="http://www.fishtrip.cn/">首页</a>
        &gt;<a href="http://www.fishtrip.cn/taiwan/">台湾</a>

        &gt;<a href="http://www.fishtrip.cn/taiwan/hualian/">花莲</a>
        &gt;<span>波斯菊乐活馆</span>       
</div>

</div>




<!--登陆遮罩层开始-->
	<div class="theme-popover">
     <div class="theme-poptit">
          <a href="javascript:;" title="关闭" class="close">×</a>
          <h3>欢迎登录约一下</h3>
     </div>
     <div class="theme-popbod dform">
           <form class="theme-signin" name="loginform" action="/login" method="post">
                <ol>
                     <li><h4>你必须先登录！</h4></li>
                     <li><strong>用户名：</strong><input class="ipt" type="text" name="name"  size="20" /></li>
                     <li><strong>密码：</strong><input class="ipt" type="password" name="pwd"  size="20" /></li>
						<input type="hidden" name="_token" value="{{csrf_token()}}" />
                     <li><input class="btn btn-primary" type="submit" name="submit" value=" 登 录 " /></li>
					 <li>使用第三方登陆</li>
					 <!-- 授权按钮 -->
					 <?php
							include_once( 'libweibo-master/config.php' );
						include_once( 'libweibo-master/saetv2.ex.class.php' );
						$o = new \SaeTOAuthV2( WB_AKEY , WB_SKEY );

						$code_url = $o->getAuthorizeURL( WB_CALLBACK_URL ); 
					?>
				<li><a  href="<?=$code_url?>"><img src="img/weibo.png" title="点击进入授权页面" alt="点击进入授权页面" border="0" /></a>
					 <a href="#" onclick='toQzoneLogin()'><img src="img/qq.png"></a>
				</li>
                </ol>
           </form>
     </div>
</div>
 <script type="text/javascript">
 //qq授权
			  var childWindow;
            function toQzoneLogin()
            {
                childWindow = window.open("Connect2.1/example/oauth/index.php","_self","width=450,height=320,menubar=0,scrollbars=1, resizable=1,status=1,titlebar=0,toolbar=0,location=1");
            }  
            
            function closeChildWindow()
            {
                childWindow.close();
            }
        </script>
	<!--登陆遮罩层结束-->
	<!--注册开始-->
	<div class="zhuce">
     <div class="theme-poptit">
          <a href="javascript:;" title="关闭" class="close">×</a>
          <h3>欢迎注册约一下</h3>
     </div>
     <div class="theme-popbod dform">
           <form class="theme-signin" name="loginform" action="/register" method="post">
                <ol>
                     <li><h4>注册约一下！</h4></li>
                     <li><strong>手机号：</strong><input class="ipt" type="text" name="tel"  size="20" placeholder='请输入您的手机号' id='tel'/><span id='sp_tel'></span></li>
					   <li><input class="ipt" type="text"  size="15" placeholder='点击获取验证码'/>
					   <div class="input-text" data-reactid=".1.1.1.1"><a href="javascript:;" class="input-link disabled" data-reactid=".1.1.1.1.0">获取验证码</a></div>
					   </li>
                     <li><strong>密码：</strong><input class="ipt" type="password" name="pwd"  size="20"  placeholder='请输入您的密码'  id='pwd'/><span id='sp_pwd'></span></li>
						<input type="hidden" name="_token" value="{{csrf_token()}}" />
                     <li><input class="btn btn-primary" type="submit" value=" 注册 " /></li>
                </ol>
           </form>
     </div>
</div>
<script type="text/javascript">
//验证手机号
	$('#tel').blur(function(){
		var tel=$('#tel').attr('value');
		var tel_r=/^1\d{10}$/;
		if(tel_r.test(tel)){
			$('#sp_tel').html('ok');
		}else{
			$('#sp_tel').html('手机号码无效');
		}
	})

	//验证密码
	$('#pwd').blur(function(){
		var pwd=$('#pwd').attr('value');
		var pwd_r=/^.{6,15}$/;
		if(pwd_r.test(pwd)){
			$('#sp_pwd').html('ok');
		}else{
			$('#sp_pwd').html('密码不能低于6位,大于15位');
		}
	})
</script>
	<!--注册结束-->