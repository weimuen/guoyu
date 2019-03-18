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
                  <li><a href="Member_User.html">我的订单</a></li>
                    <li><a href="Member_Collect.html">我的收藏</a></li>
                    
                    
                </ul>
            </div>
            <div class="left_m">
              <div class="left_m_t t_bg3">我的商品</div>
                <ul>
                  <li><a href="Member_Safe.html">商品列表</a></li>
                    <li><a href="Member_Packet.html">添加商品</a></li>
                    
                </ul>
            </div>
            
        </div>
<div class="m_right">
            <p></p>
            <div class="mem_tit">收货地址</div>
      <div class="address">
              <div class="a_close"><a href="#"><img src="home/images/a_close.png" /></a></div>
              <table border="0" class="add_t" align="center" style="width:98%; margin:10px auto;" cellspacing="0" cellpadding="0">
                  <tr>
                    <td colspan="2" style="font-size:14px; color:#ff4e00;">杨杨公司</td>
                  </tr>
                  <tr>
                    <td align="right" width="80">收货人姓名：</td>
                    <td>杨杨</td>
                  </tr>
                  <tr>
                    <td align="right">配送区域：</td>
                    <td>四川成都市武侯区三环以内</td>
                  </tr>
                  <tr>
                    <td align="right">详细地址：</td>
                    <td>科华北路66号世外桃源写字楼3楼</td>
                  </tr>
                  <tr>
                    <td align="right">手机：</td>
                    <td>12345678998</td>
                  </tr>
                  <tr>
                    <td align="right">电话：</td>
                    <td>028-12345678</td>
                  </tr>
                  <tr>
                    <td align="right">电子邮箱：</td>
                    <td>123456789@qq.com</td>
                  </tr>
                  <tr>
                    <td align="right">标志建筑：</td>
                    <td>世外桃源</td>
                  </tr>
                </table>
        
                <p align="right">
                  <a href="#" style="color:#ff4e00;">设为默认</a>&nbsp; &nbsp; &nbsp; &nbsp; <a href="#" style="color:#ff4e00;">编辑</a>&nbsp; &nbsp; &nbsp; &nbsp; 
                </p>

            </div>

            <div class="mem_tit">
              <a href="#"><img src="/home/images/add_ad.gif" /></a>
            </div>
            <table border="0" class="add_tab" style="width:930px;"  cellspacing="0" cellpadding="0">
              <tr>
                <td width="135" align="right">配送地区</td>
                <td colspan="3" style="font-family:'宋体';">
                  <select class="jj" name="country" style="background-color:#f6f6f6;">
                      <option value="0" selected="selected">请选择...</option>
                      <option value="1">中国</option>
                      <option value="2">中国</option>
                      <option value="3">中国</option>
                      <option value="4">中国</option>
                    </select>
                  <select class="jj" name="province">
                      <option value="0" selected="selected">请选择...</option>
                      <option value="1">四川</option>
                      <option value="2">重庆</option>
                      <option value="3">北京</option>
                      <option value="4">云南</option>
                    </select>
                    <select class="jj" name="city">
                      <option value="0" selected="selected">请选择...</option>
                      <option value="1">成都</option>
                      <option value="2">宜宾</option>
                      <option value="3">南充</option>
                      <option value="4">绵阳</option>
                    </select>
                    <select class="jj" name="area">
                      <option value="0" selected="selected">请选择...</option>
                      <option value="1">武侯区</option>
                      <option value="2">成华区</option>
                      <option value="3">锦江区</option>
                      <option value="4">青羊区</option>
                    </select>
                    （必填）
                </td>
              </tr>
              <tr>
                <td align="right">收货人姓名</td>
                <td style="font-family:'宋体';"><input type="text" value="姓名" class="add_ipt" />（必填）</td>
                <td align="right">电子邮箱</td>
                <td style="font-family:'宋体';"><input type="text" value="12345678@qq.com" class="add_ipt" />（必填）</td>
              </tr>
              <tr>
                <td align="right">详细地址</td>
                <td style="font-family:'宋体';"><input type="text" value="世外桃源" class="add_ipt" />（必填）</td>
                <td align="right">邮政编码</td>
                <td style="font-family:'宋体';"><input type="text" value="610000" class="add_ipt" /></td>
              </tr>
              <tr>
                <td align="right">手机</td>
                <td style="font-family:'宋体';"><input type="text" value="1361234587" class="add_ipt" />（必填）</td>
                <td align="right">电话</td>
                <td style="font-family:'宋体';"><input type="text" value="028-12345678" class="add_ipt" /></td>
              </tr>
              <tr>
                <td align="right">标志建筑</td>
                <td style="font-family:'宋体';"><input type="text" value="世外桃源大酒店" class="add_ipt" /></td>
                <td align="right">最佳送货时间</td>
                <td style="font-family:'宋体';"><input type="text" value="" class="add_ipt" /></td>
              </tr>
            </table>
            <p align="right">
              <a href="#">删除</a>&nbsp; &nbsp; <a href="#" class="add_b">确认修改</a>
            </p> 
           

            
        </div>
    </div>
@endsection