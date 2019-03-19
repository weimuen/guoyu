@extends('home.layout.index')

@section('content')
 <!--Begin Menu Begin-->
<div class="menu_bg">
    <div class="menu">

        <!--Begin 商品分类详情 Begin-->    
        <div class="nav">
            <div class="nav_t">首页</div>
            <div class="leftNav">
                <ul>
                     @foreach($cates_data as $k=>$v)      
                    <li>
                        <div class="fj">
                            <span class="n_img"><span></span><img src="/home/goods/1.jpg" ></span>
                            <span class="fl"><a href="/cates/{{$v->id}}">{{$v->cname}}</span>
                        </div>
                        <div class="zj">
                            <div class="zj_l"> 
                               @foreach($v['sub'] as $kk=>$vv)
                                <div class="zj_l_c">
                                    <h2><a href="/cates/{{$vv->id}}">{{$vv->cname}}</h2>
                                    @foreach($vv['sub'] as $kkk=>$vvv)
                                    <a href="/cates/{{$vvv->id}}">{{$vvv->cname}}</a>
                                    @endforeach
                                </div>
                               @endforeach
                                
                               
                               
                                
                            </div>
                            <div class="zj_r">
                                <a href="#"><img src="/home/goods/1.jpg" width="236" height="200" /></a>
                                <a href="#"><img src="/home/goods/2.jpg" width="236" height="200" /></a>
                            </div>
                        </div>
                    </li>        
                    @endforeach
                   
                   
                    
                    
                   
                   
                                       
                                       
                </ul>            
            </div>
        </div>  
        <!--End 商品分类详情 End-->                                                     
        
        <div class="m_ad">中秋送好礼！</div>
    </div>
 
</div>
</div>
<!--End Menu End--> 
<div class="i_bg bg_color">
    <div class="i_ban_bg">
        <!--Begin Banner Begin-->
        <div class="banner">        
            <div class="top_slide_wrap">
                <ul class="slide_box bxslider">
                    @foreach($slids as $k=>$v)
                    <a href="{{$v->surl}}"><img src="/upload/public/{{$v->simg}}" width="740" height="401"></a>
                    @endforeach
                </ul>  
        

@endsection