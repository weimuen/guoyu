@extends('home.layout.person')


@section('content')
    <!--Begin 用户中心 Begin -->
  <div class="m_content">
  <div class="m_left">
      <div class="left_n">管理中心</div>
        <div class="left_m">
          <div class="left_m_t t_bg1">个人资料</div>
            <ul>
    <li><a href="/homes/person/personInfo">个人信息</a></li>
      <li><a href="/homes/person/personAddress" class="now">收货地址</a></li>
                   
                </ul>
            </div>
            <div class="left_m">
              <div class="left_m_t t_bg2">订单管理</div>
                <ul>
                  <li><a href="/homes/person/personOrder">我的订单</a></li>
                    <li><a href="Member_Collect.html">我的收藏</a></li>
                   
                </ul>
            </div>
            <div class="left_m">
              <div class="left_m_t t_bg3">我的商品</div>
                <ul>
                  <li><a href="Member_Safe.html">添加商品</a></li>
                    <li><a href="Member_Packet.html">商品列表</a></li>
                   
                </ul>
            </div>
          </div>
        </div>  
<div class="m_right">
          <div class="m_des">
              <table border="0" style="width:870px; line-height:22px;" cellspacing="0" cellpadding="0">
                  <tbody><tr valign="top">
                    <td width="115"><img src="/home/images/user.jpg" width="90" height="90"></td>
                    <td>
                      <div class="m_user">TRACY</div>
                        <p>
                            等级：注册用户 <br>
                            <font color="#ff4e00">您还差 270 积分达到 分红100</font><br>
                            上一次登录时间: 2015-09-28 18:19:47<br>
                            您还没有通过邮件认证 <a href="#" style="color:#ff4e00;">点此发送认证邮件</a>
                        </p>
                        <div class="m_notice">
                          用户中心公告！
                        </div>
                    </td>
                  </tr>
                </tbody></table>  
            </div>
            
            <div class="mem_t">资产信息</div>
            <table border="0" class="mon_tab" style="width:870px; margin-bottom:20px;" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td width="33%">用户等级：<span style="color:#555555;">普通会员</span></td>
                <td width="33%">消费金额：<span>￥200元</span></td>
                <td width="33%">返还积分：<span>99R</span></td>
              </tr>
              <tr>
                <td>账户余额：<span>￥200元</span></td>
                <td>红包个数：<span style="color:#555555;">3个</span></td>
                <td>红包价值：<span>￥50元</span></td>
              </tr>
              <tr>
                <td colspan="3">订单提醒：
                  <font style="font-family:'宋体';">待付款(<span>0</span>) &nbsp; &nbsp; &nbsp; &nbsp; 待收货(<span>2</span>) &nbsp; &nbsp; &nbsp; &nbsp; 待评论(<span>1</span>)</font>
                </td>
              </tr>
            </tbody></table>

            <div class="mem_t">账号信息</div>
            <table border="0" class="mon_tab" style="width:870px; margin-bottom:20px;" cellspacing="0" cellpadding="0">
              <tbody><tr>
                <td width="40%">用户ID：<span style="color:#555555;">12345678</span></td>
                <td width="60%">邀请人：<span style="color:#555555;">邀请人姓名</span></td>
              </tr>
              <tr>
                <td>电&nbsp; &nbsp; 话：<span style="color:#555555;">1861111111</span></td>
                <td>邮&nbsp; &nbsp; 箱：<span style="color:#555555;">12345678@qq.com</span></td>
              </tr>
              <tr>
                <td>身份证号：<span style="color:#555555;">522555123456789</span></td>
                <td>注册时间：<span style="color:#555555;">2015-10-10</span></td>
              </tr>
            </tbody></table>
               
            
        </div>
          <!--End 用户中心 End--> 
    <!--Begin Footer Begin -->
    <div class="b_btm_bg b_btm_c">
        <div class="b_btm">
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/home/images/b1.png" width="62" height="62" /></td>
                <td><h2>正品保障</h2>正品行货  放心购买</td>
              </tr>
            </table>
      <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/home/images/b2.png" width="62" height="62" /></td>
                <td><h2>满38包邮</h2>满38包邮 免运费</td>
              </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/home/images/b3.png" width="62" height="62" /></td>
                <td><h2>天天低价</h2>天天低价 畅选无忧</td>
              </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/home/images/b4.png" width="62" height="62" /></td>
                <td><h2>准时送达</h2>收货时间由你做主</td>
              </tr>
            </table>
        </div>
    </div>
    <div class="b_nav">
      <dl>                                                                                            
          <dt><a href="#">新手上路</a></dt>
            <dd><a href="#">售后流程</a></dd>
            <dd><a href="#">购物流程</a></dd>
            <dd><a href="#">订购方式</a></dd>
            <dd><a href="#">隐私声明</a></dd>
            <dd><a href="#">推荐分享说明</a></dd>
        </dl>
        <dl>
          <dt><a href="#">配送与支付</a></dt>
            <dd><a href="#">货到付款区域</a></dd>
            <dd><a href="#">配送支付查询</a></dd>
            <dd><a href="#">支付方式说明</a></dd>
        </dl>
        <dl>
          <dt><a href="#">会员中心</a></dt>
            <dd><a href="#">资金管理</a></dd>
            <dd><a href="#">我的收藏</a></dd>
            <dd><a href="#">我的订单</a></dd>
        </dl>
        <dl>
          <dt><a href="#">服务保证</a></dt>
            <dd><a href="#">退换货原则</a></dd>
            <dd><a href="#">售后服务保证</a></dd>
            <dd><a href="#">产品质量保证</a></dd>
        </dl>
        <dl>
          <dt><a href="#">联系我们</a></dt>
            <dd><a href="#">网站故障报告</a></dd>
            <dd><a href="#">购物咨询</a></dd>
            <dd><a href="#">投诉与建议</a></dd>
        </dl>
        <div class="b_tel_bg">
          <a href="#" class="b_sh1">新浪微博</a>            
          <a href="#" class="b_sh2">腾讯微博</a>
            <p>
            服务热线：<br />
            <span>400-123-4567</span>
            </p>
        </div>
        <div class="b_er">
            <div class="b_er_c"><img src="/home/images/er.gif" width="118" height="118" /></div>
            <img src="/home/images/ss.png" />
        </div>
    </div>    
    <div class="btmbg">
    <div class="btm">
          备案/许可证编号：蜀ICP备12009302号-1-www.dingguagua.com   Copyright © 2015-2018 尤洪商城网 All Rights Reserved. 复制必究 , Technical Support: Dgg Group <br />
            <img src="/home/images/b_1.gif" width="98" height="33" /><img src="/home/images/b_2.gif" width="98" height="33" /><img src="/home/images/b_3.gif" width="98" height="33" /><img src="/home/images/b_4.gif" width="98" height="33" /><img src="/home/images/b_5.gif" width="98" height="33" /><img src="/home/images/b_6.gif" width="98" height="33" />
        </div>      
    </div>
    <!--End Footer End -->    
</div>

</body>


<!--[if IE 6]>
<script src="//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->
</html>

@endsection
