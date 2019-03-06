
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css"  href="/admin/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css"  href="/admin/custom-plugins/picklist/picklist.css" media="screen">
<link rel="stylesheet" type="text/css"  href="/admin/plugins/select2/select2.css" media="screen">
<link rel="stylesheet" type="text/css"  href="/admin/plugins/ibutton/jquery.ibutton.css" media="screen">
<link rel="stylesheet" type="text/css"  href="/admin/plugins/cleditor/jquery.cleditor.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css"  href="/admin/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css"  href="/admin/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css"  href="/admin/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css"  href="/admin/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css"  href="/admin/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css"  href="/admin/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css"  href="/admin/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css"  href="/admin/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css"  href="/admin/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css"  href="/admin/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css"  href="/admin/css/themer.css" media="screen">
<link rel="stylesheet" type="text/css"  href="/admin/css/page_page.css" media="screen">

<title>MWS Admin - Form Elements</title>

</head>

<body>

    <!-- Themer (Remove if not needed) -->  
    <div id="mws-themer">
      
        <div id="mws-themer-css-dialog">
            <form class="mws-form">
                <div class="mws-form-row">
                    <div class="mws-form-item">
                        <textarea cols="auto" rows="auto" readonly="readonly"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Themer End -->

    <!-- Header -->
    <div id="mws-header" class="clearfix">
    
        <!-- Logo Container -->
        <div id="mws-logo-container">
        
            <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
            <div id="mws-logo-wrap">
                <img  src="/admin/images/mws-logo.png" alt="mws admin">
            </div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
            <!-- Notifications -->
            <div id="mws-user-notif" class="mws-dropdown-menu">
                <div class="mws-dropdown-box">
                    <div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                            <li class="read">
                                <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="read">
                                <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
                            <a href="#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                    <div class="mws-dropdown-content">
                        <ul class="mws-messages">
                            <li class="read">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="read">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
                            <a href="#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
                <!-- User Photo -->
                <div id="mws-user-photo">
                    <img  src="/admin/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, 管理员
                    </div>
                    <ul>
                        <li><a href="#">头像</a></li>
                        <li><a href="#">更改密码</a></li>
                        <li><a href="index.html">退出</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
        <!-- Necessary markup, do not remove -->
        <div id="mws-sidebar-stitch"></div>
        <div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <!-- Searchbox -->
            <div id="mws-searchbox" class="mws-inset">
                <form action="typography.html">
                    <input type="text" class="mws-search-input" placeholder="Search...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li class="active">
                        <a href="#"><i class="icon-users"></i>用户管理</a>
                        <ul>
                            <li><a href="/admins/users/create">用户添加</a></li>
                            <li><a href="/admins/users">用户列表</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#"><i class="icon-th-list"></i>分类管理</a>
                        <ul>
                            <li><a href="/admins/cates/create">分类添加</a></li>
                            <li><a href="/admins/cates">分类列表</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#"><i class="icon-t-shirt"></i>商品管理</a>
                        <ul>
                            <li><a href="/admins/goods/create">商品添加</a></li>
                            <li><a href="/admins/goods">商品列表</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#"><i class="icon-th"></i>订单管理</a>
                        <ul>
                    
                            <li><a href="/admins/orders">订单列表</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#"><i class="icon-windows"></i>友情链接管理</a>
                        <ul>
                            <li><a href="/admins/links/create">友情链接添加</a></li>
                            <li><a href="/admins/links">友情链接列表</a></li>
                        </ul>
                    </li>
                     
























































                    
                    
                     <li class="active">
                        <a href="#"><i class="icon-list-2"></i>评论管理</a>
                        <ul>
                            <li><a href="/admins/comments">作者列表</a></li>
                        </ul>
                    </li>
                     <li class="active">
                        <a href="#"><i class="icon-picture"></i>轮播管理</a>
                        <ul>
                            <li><a href="">添加轮播图</a></li>
                            <li><a href="">轮播图列表</a></li>
                        </ul>
                    </li>
                     <li class="active">
                        <a href="#"><i class="icon-cog"></i>网站配置</a>
                        <ul>
                            <li><a href="">配置项</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- 内容开始 -->
        <div id="mws-container" class="clearfix">
            @if (session('success'))
                <div class="mws-form-message success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="mws-form-massage error">
                    {{ session('error') }}
                </div>
            @endif


            @section('content')

            @show
        </div>
        <!-- 内容结束 -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script  src="/admin/js/libs/jquery-1.8.3.min.js"></script>
    <script  src="/admin/js/libs/jquery.mousewheel.min.js"></script>
    <script  src="/admin/js/libs/jquery.placeholder.min.js"></script>
    <script  src="/admin/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script  src="/admin/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script  src="/admin/jui/jquery-ui.custom.min.js"></script>
    <script  src="/admin/jui/js/jquery.ui.touch-punch.js"></script>

    <script  src="/admin/jui/js/globalize/globalize.js"></script>
    <script  src="/admin/jui/js/globalize/cultures/globalize.culture.en-US.js"></script>

    <!-- Plugin Scripts -->
    <script  src="/admin/custom-plugins/picklist/picklist.min.js"></script>
    <script  src="/admin/plugins/autosize/jquery.autosize.min.js"></script>
    <script  src="/admin/plugins/select2/select2.min.js"></script>
    <script  src="/admin/plugins/colorpicker/colorpicker-min.js"></script>
    <script  src="/admin/plugins/validate/jquery.validate-min.js"></script>
    <script  src="/admin/plugins/ibutton/jquery.ibutton.min.js"></script>
    <script  src="/admin/plugins/cleditor/jquery.cleditor.min.js"></script>
    <script  src="/admin/plugins/cleditor/jquery.cleditor.table.min.js"></script>
    <script  src="/admin/plugins/cleditor/jquery.cleditor.xhtml.min.js"></script>
    <script  src="/admin/plugins/cleditor/jquery.cleditor.icon.min.js"></script>

    <!-- Core Script -->
    <script  src="/admin/bootstrap/js/bootstrap.min.js"></script>
    <script  src="/admin/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script  src="/admin/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script  src="/admin/js/demo/demo.formelements.js"></script>

</body>
</html>
