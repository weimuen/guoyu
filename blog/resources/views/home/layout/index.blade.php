<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="/home/css/style.css" />
    <!--[if IE 6]>
    <script src="/home/js/iepng.js" type="text/javascript"></script>
        <script type="text/javascript">
           EvPNG.fix('div, ul, img, li, input, a'); 
        </script>
    <![endif]-->    
    <script type="text/javascript"  src="/home/js/jquery-1.11.1.min_044d0927.js"></script>
    <script type="text/javascript"  src="/home/js/jquery.bxslider_e88acd1b.js"></script>
    
    <script type="text/javascript"  src="/home/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript"  src="/home/js/menu.js"></script>    
        
    <script type="text/javascript"  src="/home/js/select.js"></script>
    
    <script type="text/javascript"  src="/home/js/lrscroll.js"></script>
    
    <script type="text/javascript"  src="/home/js/iban.js"></script>
    <script type="text/javascript"  src="/home/js/fban.js"></script>
    <script type="text/javascript"  src="/home/js/f_ban.js"></script>
    <script type="text/javascript"  src="/home/js/mban.js"></script>
    <script type="text/javascript"  src="/home/js/bban.js"></script>
    <script type="text/javascript"  src="/home/js/hban.js"></script>
    <script type="text/javascript"  src="/home/js/tban.js"></script>
    
    <script type="text/javascript"  src="/home/js/lrscroll_1.js"></script>
    
    
<title>国羽图书</title>
</head>
<body>  
@include('home.layout.header')
<!--Begin Menu Begin-->
<div class="menu_bg">
    <div class="menu">
        <!--Begin 商品分类详情 Begin-->    
        <div class="nav">
             @section('content')
            
             @show  

                   
                </ul>   
                <div class="op_btns clearfix">
                    <a href="#" class="op_btn op_prev"><span></span></a>
                    <a href="#" class="op_btn op_next"><span></span></a>
                </div>        
            </div>
        </div>
        <script type="text/javascript">
        //var jq = jQuery.noConflict();
        (function(){
            $(".bxslider").bxSlider({
                auto:true,
                prevSelector:jq(".top_slide_wrap .op_prev")[0],nextSelector:jq(".top_slide_wrap .op_next")[0]
            });
        })();
        </script>
        <!--End Banner End-->
        <div class="inews">
            <div class="news_t">
                <span class="fr"><a href="#">更多 ></a></span>最新动态
            </div>
            <ul>
                <li><span>[ 特惠 ]</span><a href="#">掬一轮明月 表无尽惦念</a></li>
                <li><span>[ 公告 ]</span><a href="#">好奇金装成长裤新品上市</a></li>
                <li><span>[ 特惠 ]</span><a href="#">大牌闪购 · 抢！</a></li>
                <li><span>[ 公告 ]</span><a href="#">发福利 买车就抢千元油卡</a></li>
                <li><span>[ 公告 ]</span><a href="#">家电低至五折</a></li>
            </ul>
            <div class="charge_t">
                话费充值<div class="ch_t_icon"></div>
            </div>
            <form>
            <table border="0" style="width:205px; margin-top:10px;" cellspacing="0" cellpadding="0">
              <tr height="35">
                <td width="33">号码</td>
                <td><input type="text" value="" class="c_ipt" /></td>
              </tr>
              <tr height="35">
                <td>面值</td>
                <td>
                    <select class="jj" name="city">
                      <option value="0" selected="selected">100元</option>
                      <option value="1">50元</option>
                      <option value="2">30元</option>
                      <option value="3">20元</option>
                      <option value="4">10元</option>
                    </select>
                    <span style="color:#ff4e00; font-size:14px;">￥99.5</span>
                </td>
              </tr>
              <tr height="35">
                <td colspan="2"><input type="submit" value="立即充值" class="c_btn" /></td>
              </tr>
            </table>
            </form>
        </div>
    </div>
    <!--Begin 热门商品 Begin-->
    <div class="content mar_10">
        <div class="h_l_img">
            <div class="img"><img  src="/home/goods/1.jpg" width="188" height="188" /></div>
            <div class="pri_bg">
                <span class="price fl">￥53.00</span>
                <span class="fr">16R</span>
            </div>
        </div>
        <div class="hot_pro">           
            <div id="featureContainer">
                <div id="feature">
                    <div id="block">
                        <div id="botton-scroll">
                            <ul class="featureUL">
                                <li class="featureBox">
                                    <div class="box">
                                        <div class="h_icon"><img  src="/home/images/hot.png" width="50" height="50" /></div>
                                        <div class="imgbg">
                                            <a href="#"><img  src="/home/goods/3.jpg" width="160" height="136" /></a>
                                        </div>                                        
                                        <div class="name">
                                            <a href="#">
                                            <h2>曾国藩</h2>
                                            </a>
                                        </div>
                                        <div class="price">
                                            <font>￥<span>189</span></font> &nbsp; 
                                        </div>
                                    </div>
                                </li>
                                <li class="featureBox">
                                    <div class="box">
                                        <div class="h_icon"><img  src="/home/images/hot.png" width="50" height="50" /></div>
                                        <div class="imgbg">
                                            <a href="#"><img  src="/home/goods/2.jpg" width="160" height="136" /></a>
                                        </div>                                        
                                        <div class="name">
                                            <a href="#">
                                            <h2>雨纱</h2>
                                           
                                            </a>
                                        </div>
                                        <div class="price">
                                            <font>￥<span>5288</span></font> &nbsp; 
                                        </div>
                                    </div>
                                </li>
                                <li class="featureBox">
                                    <div class="box">
                                        <div class="h_icon"><img  src="/home/images/hot.png" width="50" height="50" /></div>
                                        <div class="imgbg">
                                            <a href="#"><img  src="/home/goods/4.jpg" width="160" height="136" /></a>
                                        </div>                                        
                                        <div class="name">
                                            <a href="#">
                                            <h2>鲁迅全集</h2>
                                            </a>
                                        </div>
                                        <div class="price">
                                            <font>￥<span>368</span></font> &nbsp; 
                                        </div>
                                    </div>
                                </li>
                                <li class="featureBox">
                                    <div class="box">
                                        <div class="h_icon"><img  src="/home/images/hot.png" width="50" height="50" /></div>
                                        <div class="imgbg">
                                            <a href="#"><img  src="/home/goods/5.jpg" width="160" height="136" /></a>
                                        </div>                                        
                                        <div class="name">
                                            <a href="#">
                                            <h2>湘行散记</h2>
                                            </a>
                                        </div>
                                        <div class="price">
                                            <font>￥<span>280</span></font> &nbsp; 
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a class="h_prev" href="home/cates/index">Previous</a>
                    <a class="h_next" href="home/cates/index">Next</a>
                </div>
            </div>
        </div>
    </div>
    <!--Begin 限时特卖 Begin-->
    <div class="i_t mar_10">
        <span class="fl">新书上架</span>
        <span class="i_mores fr"><a href="#">更多</a></span>
    </div>
    <div class="content">
        <div class="i_sell">
            <div id="imgPlay">
                <ul class="imgs" id="actor">
                    <li><a href="#"><img  src="/home/images/tm_r.jpg" width="211" height="357" /></a></li>
                    <li><a href="#"><img  src="/home/images/tm_r.jpg" width="211" height="357" /></a></li>
                    <li><a href="#"><img  src="/home/images/tm_r.jpg" width="211" height="357" /></a></li>
                </ul>
                <div class="previ">上一张</div>
                <div class="nexti">下一张</div>
            </div>        
        </div>
        <div class="sell_right">
            <div class="sell_1">
                <div class="s_img"><a href="#"><img  src="/home/goods/6.jpg" width="185" height="155" /></a></div>
                <div class="s_price">￥<span>89</span></div>
                <div class="s_name">
                    <h2><a href="#">罗生门</a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
            <div class="sell_2">
                <div class="s_img"><a href="#"><img  src="/home/goods/7.jpg" width="185" height="155" /></a></div>
                <div class="s_price">￥<span>289</span></div>
                <div class="s_name">
                    <h2><a href="#">德芙巧克力</a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
            <div class="sell_b1">
                <div class="sb_img"><a href="#"><img  src="/home/goods/8.jpg" width="242" height="356" /></a></div>
                <div class="s_price">￥<span>289</span></div>
                <div class="s_name">
                    <h2><a href="#">摆渡人</a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
            <div class="sell_3">
                <div class="s_img"><a href="#"><img  src="/home/goods/9.jpg" width="185" height="155" /></a></div>
                <div class="s_price">￥<span>289</span></div>
                <div class="s_name">
                    <h2><a href="#">传记</a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
            <div class="sell_4">
                <div class="s_img"><a href="#"><img  src="/home/goods/10.jpg" width="185" height="155" /></a></div>
                <div class="s_price">￥<span>289</span></div>
                <div class="s_name">
                    <h2><a href="#"></a>浮生六记</h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
            <div class="sell_b2">
                <div class="sb_img"><a href="#"><img  src="/home/goods/11.jpg" width="242" height="356" /></a></div>
                <div class="s_price">￥<span>289</span></div>
                <div class="s_name">
                    <h2><a href="#">自在独行</a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
        </div>
    </div>
    <!--End 新书上架 End-->
   


@include('home.layout.footer') 
</div>

</body>


<!--[if IE 6]>
<script src="//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->
</html>

