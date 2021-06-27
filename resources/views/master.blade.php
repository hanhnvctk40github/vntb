<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html lang="vi-VN">
<!--<![endif]-->
<!-- BEGIN head -->

<head>

	<!-- Meta Tags -->

	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<!-- Meta Keywords -->
	<meta name="description" content="Việt Nam Thời Báo (VNTB). Diễn đàn Hội nhà báo độc lập Việt Nam, cung cấp thông tin chính trị xã hội, 
pháp luật, kinh tế tài chính... Phản ảnh trung thực, cập nhật tin tức 24/7">
	<meta name="keywords" content="Tin mới,Tin Mới nhật,Tin tức,Đối điện,Tin tức 24h,Cải cách tư pháp,Phạm Chí Dũng,IJAVN, 
Diễn Đàn,Tin mới nóng,Dân Chủ,Chính Trị,Kinh tế,Xã hội,Nước Úc,Nguyễn Quang Duy,luật bán nước,Mốc son tháng Bảy!,Khánh Hoà,
Thế Giới,về Hội,VNTB,Virus corona,thêm bình luận,mùa dịch corona,cập nhật tin tức mới nhất,Hồ Duy Hải,Bưu cục Cầu Voi,
vietnamthoibao,thoibao,bao,thoi,mới,biểu nào dám,đại biểu nào,nào dám bỏ,Có đại biểu,đảng chính trị,chính phủ Úc,Anh Khoa,
dám bỏ lá,không đồng ý?,bỏ lá phiếu,Nguyễn Phú Trọng,Dấu ấn,lá phiếu không đồng,bỏ lá phiếu không,Châu Văn Khảm,Nước Úc,
dám bỏ lá phiếu,cách Tư pháp Trung,Có đại biểu nào, nào dám bỏ lá,biểu tình chống TQ,Người Việt ở Úc,Nguyễn Quang Duy,Nguyễn Quang Duy,
anh hùng lao động,Bình Thuận Minh Bạch,Đại Biểu Quốc Hội,Chân Dung Anh Hùng,Nguyễn Văn Đông,anh hùng lao động,Bình,chính sách Trung Quốc,
Hồ Cẩm Đào,Khánh An,Angela Merkel,David Hutt,eu,Quách An,Quan hệ Đức,Trung,Derek Chauvin,George Floyd,Mai Tú Ân,mạng xã hội,biểu tình ở Mỹ,
Bưu cục Cầu Voi,Bưu cục Cầu Voi,Cải cách tư pháp,Ngô Huy Cương,Ngô Huy Cương,Trần Dzạ Dzũng,đường sắt Cát Linh,Hà Đông,Hà Nội,Nguyễn Huy Cường,
BS Trần Văn Phúc,đào tạo bác sĩ,cấm xe máy,Út Sài Gòn,Hong Kong,người tị nạn,Anh Khoa,Biếm Hoạ Chủ Nhật,Siêu cường Corona,Trần Thế Kỷ,cho,
chợ truyền thống,Diệp Chi,siêu thị,Vi tiểu bảo,Nguyễn Ngọc Hoà,quan hệ Việt,Mỹ,kỳ thị,Từ Thức,bộ Công an,giám định tư pháp,Minh Tú,
bộ Công an,đối thoại,Đồng Tâm 9/1/2020,Đồng Tâm,Hữu Sự,minh bạch,trấn áp tinh thần,Trịnh Bá Phương,cụ Lê Đình Kình,đất quốc phòng">
	@yield('metaTag')
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{asset('assets/favicon.ico')}}" type="image/x-icon">

	<link rel="alternate" type="application/rss+xml" href="/feed/" title="Việt Nam Thời Báo latest posts">
	<link rel="alternate" type="application/rss+xml" href="/comments/feed/" title="Việt Nam Thời Báo latest comments">
	<link rel="pingback" href="/xmlrpc.php">

	<title>Việt Nam Thời Báo – {{isset($title) && $title ? $title : 'Tin tức trung thực, phản biện không ngừng'}}</title>
	<style>
		#wpadminbar #wp-admin-bar-wccp_free_top_button .ab-icon:before {
			content: "\f160";
			color: #02CA02;
			top: 3px;
		}

		#wpadminbar #wp-admin-bar-wccp_free_top_button .ab-icon {
			transform: rotate(45deg);
		}
	</style>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel="stylesheet" id="wp-block-library-css" href="{{asset('assets/style.min.css')}}" type="text/css" media="all">
	<link rel="stylesheet" id="tds-style-frontend-css" href="{{asset('assets/style-front.min.css')}}" type="text/css" media="all">
	<link rel="stylesheet" id="wordpress-popular-posts-css-css" href="{{asset('assets/wpp.css')}}" type="text/css" media="all">
	<link rel="stylesheet" id="novomag-style-css" href="{{asset('assets/main-stylesheet.css')}}" type="text/css" media="all">
	<link rel="stylesheet" id="child-style-css" href="{{asset('assets/style.css')}}" type="text/css" media="all">
	<link rel="stylesheet" id="google-fonts-1-css" href="{{asset('assets/css')}}" type="text/css" media="all">
	<link rel="stylesheet" id="google-fonts-2-css" href="{{asset('assets/css(1)')}}" type="text/css" media="all">
	<link rel="stylesheet" id="google-fonts-3-css" href="{{asset('assets/css(2)')}}" type="text/css" media="all">
	<link rel="stylesheet" id="reset-css" href="{{asset('assets/reset.css')}}" type="text/css" media="all">
	<link rel="stylesheet" id="main-stylesheet-css" href="{{asset('assets/main-stylesheet(1).css')}}" type="text/css" media="all">
	<link rel="stylesheet" id="lightbox-css" href="{{asset('assets/lightbox.css')}}" type="text/css" media="all">
	<link rel="stylesheet" id="shortcodes-css" href="{{asset('assets/shortcodes.css')}}" type="text/css" media="all">
	<link rel="stylesheet" id="owl-carousel-css" href="{{asset('assets/owl.carousel.css')}}" type="text/css" media="all">
	<link rel="stylesheet" id="responsive-css" href="{{asset('assets/responsive.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!--[if lt IE 8]>
<link rel='stylesheet' id='ie-only-styles-css'  href='/wp-content/themes/novomag-theme/css/ie-ancient.css?ver=5.7' type='text/css' media='all' />
<![endif]-->
	<link rel="stylesheet" id="style-css" href="{{asset('assets/style(1).css')}}" type="text/css" media="all">
	<script id="wpcp_disable_Right_Click" type="text/javascript">
		document.ondragstart = function() {
			return false;
		}

		function nocontext(e) {
			return false;
		}
		document.oncontextmenu = nocontext;
	</script>
	<style>
		.unselectable {
			-moz-user-select: none;
			-webkit-user-select: none;
			cursor: default;
		}

		html {
			-webkit-touch-callout: none;
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
		}
	</style>
	<script id="wpcp_css_disable_selection" type="text/javascript">
		var e = document.getElementsByTagName('body')[0];
		if (e) {
			e.setAttribute('unselectable', on);
		}
	</script>
	<style type="text/css" id="wp-custom-css">
		.main-menu ul.menu>li ul.sub-menu>li>a,
		.main-menu ul.menu>li>a {
			color: #444;
			font-weight: bold;
		}

		.main-menu ul.menu>li:hover>a {
			border-bottom: 3px solid #084482;
			margin-bottom: -3px;
		}


		.header {
			background: #084482;
		}

		.article-list .item .item-header .article-slide .info-line {
			background: #084482;
		}


		@media only screen and (max-width: 600px) {

			.demo-settings {
				display: none !important;
			}

			.header-block>div {
				display: block;
				width: 180% !important;
				text-align: left;
				padding: 10px 0;
			}

			.header-block .header-banner img {
				width: 80% !important;
			}

			.header-block .header-logo img {
				width: auto;
				max-width: 56%;
			}

			.header-topmenu {
				display: none !important;
			}
		}

		@media only screen and (max-width: 900px) {
			.header-topmenu {
				display: none !important;
			}
		}


		#sidebar .widget>.w-title h3 {
			font-size: 16px;
			text-transform: capitalize;
		}

		.content .panel>.p-title h2 {

			text-transform: uppercase;
		}

		.main-menu ul.menu {
			background: #F0f0f0 !important;
		}


		.main-menu .search-block .search-value {
			color: #000 !important;
		}

		.main-menu .search-block .search-button {
			background: #fff !important;
		}

		.main-menu .search-block form {
			background: #fff !important;
		}

		.shortcode-content .panel {
			visibility: hidden !important;
		}

		.review-photo img {
			max-width: 200%;
			height: auto;
		}

		@media only screen and (max-width: 900px) {
			.review-photo img {
				max-width: 100% !important;
				height: auto !important;
			}
		}

		@media only screen and (max-width: 900px) {

			.content .panel>.p-title,
			#sidebar .widget>.w-title {
				display: block;
				background: #ededed;
				position: relative;
				margin-bottom: -35px;
			}
		}

		@media only screen and (max-width: 900px) {
			body .toggle-menu {
				display: block;
				color: grey;
			}
		}

		@media only screen and (max-width: 600px) {
			body .toggle-menu {
				display: block;
				color: grey;
			}
		}

		p {

			font-size: 115% !important;
			text-align: justify;

		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			text-align: justify;
		}
	</style>
<style>
            @-webkit-keyframes bgslide {
                from {
                    background-position-x: 0;
                }
                to {
                    background-position-x: -200%;
                }
            }

            @keyframes bgslide {
                    from {
                        background-position-x: 0;
                    }
                    to {
                        background-position-x: -200%;
                    }
            }

            .wpp-widget-placeholder {
                margin: 0 auto;
                width: 60px;
                height: 3px;
                background: #dd3737;
                background: -webkit-gradient(linear, left top, right top, from(#dd3737), color-stop(10%, #571313), to(#dd3737));
                background: linear-gradient(90deg, #dd3737 0%, #571313 10%, #dd3737 100%);
                background-size: 200% auto;
                border-radius: 3px;
                -webkit-animation: bgslide 1s infinite linear;
                animation: bgslide 1s infinite linear;
            }
        </style>
        <link rel="alternate" type="application/rss+xml" title="RSS" href="https://vietnamthoibao.org/rsslatest.xml" />		<style type="text/css" id="wp-custom-css">
			.main-menu ul.menu > li ul.sub-menu > li > a, .main-menu ul.menu > li > a {
	color: #444;
	font-weight: bold;
}

.main-menu ul.menu > li:hover > a {
border-bottom: 3px solid #084482;
    margin-bottom: -3px;
}


.header {
	background: #084482;
}

.article-list .item .item-header .article-slide .info-line {
	background: #084482;
}


@media only screen and (max-width: 600px) {

	.demo-settings {
		display: none!important;
	}

	.header-block > div {
		display: block;
		width: 180%!important;
		text-align: left;
		padding: 10px 0;
	}

	.header-block .header-banner img {
		width: 80%!important;
	}

	.header-block .header-logo img {
		width: auto;
		max-width: 56%;
	}
	
	.header-topmenu {
			display: none!important;
	}
}

@media only screen and (max-width: 900px) {
		.header-topmenu {
			display: none!important;
	}
}


#sidebar .widget > .w-title h3 {
	font-size: 16px;
	 text-transform: capitalize;
}

.content .panel > .p-title h2{
		
	 text-transform: uppercase;
}

.main-menu ul.menu { 
	background: #F0f0f0!important;
}


.main-menu .search-block .search-value {
color: #000!important;	
}

.main-menu .search-block .search-button {
	background: #fff!important;
}

.main-menu .search-block form {
	background: #fff!important;
}

.shortcode-content .panel { 
visibility:hidden!important;	
}

.review-photo img {
    max-width: 200%;
    height: auto;
}

@media only screen and (max-width: 900px) {
	.review-photo img {
    max-width: 100%!important;
    height: auto!important;
	}
}
	
@media only screen and (max-width: 900px) {
.content .panel > .p-title, #sidebar .widget > .w-title {
    display: block;
    background: #ededed;
    position: relative;
    margin-bottom: -35px;
	}
}

@media only screen and (max-width: 900px) {
body .toggle-menu {
    display: block;
    color: grey;
	}
}

@media only screen and (max-width: 600px) {
body .toggle-menu {
    display: block;
    color: grey;
	}
}

p {

    font-size: 115%!important;
	 text-align: justify;
	
}
h1, h2, h3, h4, h5, h6 {
		 text-align: justify;
	}		</style>
	<!-- START - Open Graph and Twitter Card Tags 3.1.1 -->
	<!-- Facebook Open Graph -->
	<meta property="og:locale" content="vi_VN">
	<meta property="og:site_name" content="Việt Nam Thời Báo">
	<meta property="og:title" content="Homepage">
	<meta property="og:url" content="/">
	<meta property="og:type" content="website">
	<meta property="og:description" content="Tin tức trung thực, phản biện không ngừng">
	<meta property="og:image" content="/wp-content/uploads/2019/11/logo-IJAVN.png">
	<meta property="og:image:url" content="/wp-content/uploads/2019/11/logo-IJAVN.png">
	<meta property="og:image:secure_url" content="/wp-content/uploads/2019/11/logo-IJAVN.png">
	<meta property="og:image:width" content="319">
	<meta property="og:image:height" content="320">
	<meta property="article:publisher" content="https://www.facebook.com/ijavn.org/">
	<!-- Google+ / Schema.org -->
	<!-- Twitter Cards -->
	<!-- SEO -->
	<link rel="canonical" href="/">
	<!-- Misc. tags -->
	<!-- is_singular -->
	<!-- END - Open Graph and Twitter Card Tags 3.1.1 -->



	<!-- END head -->
	<style type="text/css" data-fbcssmodules="css:fb.css.basecss:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">
		.fb_hidden {
			position: absolute;
			top: -10000px;
			z-index: 10001
		}

		.fb_reposition {
			overflow: hidden;
			position: relative
		}

		.fb_invisible {
			display: none
		}

		.fb_reset {
			background: none;
			border: 0;
			border-spacing: 0;
			color: #000;
			cursor: auto;
			direction: ltr;
			font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
			font-size: 11px;
			font-style: normal;
			font-variant: normal;
			font-weight: normal;
			letter-spacing: normal;
			line-height: 1;
			margin: 0;
			overflow: visible;
			padding: 0;
			text-align: left;
			text-decoration: none;
			text-indent: 0;
			text-shadow: none;
			text-transform: none;
			visibility: visible;
			white-space: normal;
			word-spacing: normal
		}

		.fb_reset>div {
			overflow: hidden
		}

		@keyframes fb_transform {
			from {
				opacity: 0;
				transform: scale(.95)
			}

			to {
				opacity: 1;
				transform: scale(1)
			}
		}

		.fb_animate {
			animation: fb_transform .3s forwards
		}

		.fb_dialog {
			background: rgba(82, 82, 82, .7);
			position: absolute;
			top: -10000px;
			z-index: 10001
		}

		.fb_dialog_advanced {
			border-radius: 8px;
			padding: 10px
		}

		.fb_dialog_content {
			background: #fff;
			color: #373737
		}

		.fb_dialog_close_icon {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
			cursor: pointer;
			display: block;
			height: 15px;
			position: absolute;
			right: 18px;
			top: 17px;
			width: 15px
		}

		.fb_dialog_mobile .fb_dialog_close_icon {
			left: 5px;
			right: auto;
			top: 5px
		}

		.fb_dialog_padding {
			background-color: transparent;
			position: absolute;
			width: 1px;
			z-index: -1
		}

		.fb_dialog_close_icon:hover {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent
		}

		.fb_dialog_close_icon:active {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent
		}

		.fb_dialog_iframe {
			line-height: 0
		}

		.fb_dialog_content .dialog_title {
			background: #6d84b4;
			border: 1px solid #365899;
			color: #fff;
			font-size: 14px;
			font-weight: bold;
			margin: 0
		}

		.fb_dialog_content .dialog_title>span {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
			float: left;
			padding: 5px 0 7px 26px
		}

		body.fb_hidden {
			height: 100%;
			left: 0;
			margin: 0;
			overflow: visible;
			position: absolute;
			top: -10000px;
			transform: none;
			width: 100%
		}

		.fb_dialog.fb_dialog_mobile.loading {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
			min-height: 100%;
			min-width: 100%;
			overflow: hidden;
			position: absolute;
			top: 0;
			z-index: 10001
		}

		.fb_dialog.fb_dialog_mobile.loading.centered {
			background: none;
			height: auto;
			min-height: initial;
			min-width: initial;
			width: auto
		}

		.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
			width: 100%
		}

		.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
			background: none
		}

		.loading.centered #fb_dialog_loader_close {
			clear: both;
			color: #fff;
			display: block;
			font-size: 18px;
			padding-top: 20px
		}

		#fb-root #fb_dialog_ipad_overlay {
			background: rgba(0, 0, 0, .4);
			bottom: 0;
			left: 0;
			min-height: 100%;
			position: absolute;
			right: 0;
			top: 0;
			width: 100%;
			z-index: 10000
		}

		#fb-root #fb_dialog_ipad_overlay.hidden {
			display: none
		}

		.fb_dialog.fb_dialog_mobile.loading iframe {
			visibility: hidden
		}

		.fb_dialog_mobile .fb_dialog_iframe {
			position: sticky;
			top: 0
		}

		.fb_dialog_content .dialog_header {
			background: linear-gradient(from(#738aba), to(#2c4987));
			border-bottom: 1px solid;
			border-color: #043b87;
			box-shadow: white 0 1px 1px -1px inset;
			color: #fff;
			font: bold 14px Helvetica, sans-serif;
			text-overflow: ellipsis;
			text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
			vertical-align: middle;
			white-space: nowrap
		}

		.fb_dialog_content .dialog_header table {
			height: 43px;
			width: 100%
		}

		.fb_dialog_content .dialog_header td.header_left {
			font-size: 12px;
			padding-left: 5px;
			vertical-align: middle;
			width: 60px
		}

		.fb_dialog_content .dialog_header td.header_right {
			font-size: 12px;
			padding-right: 5px;
			vertical-align: middle;
			width: 60px
		}

		.fb_dialog_content .touchable_button {
			background: linear-gradient(from(#4267B2), to(#2a4887));
			background-clip: padding-box;
			border: 1px solid #29487d;
			border-radius: 3px;
			display: inline-block;
			line-height: 18px;
			margin-top: 3px;
			max-width: 85px;
			padding: 4px 12px;
			position: relative
		}

		.fb_dialog_content .dialog_header .touchable_button input {
			background: none;
			border: none;
			color: #fff;
			font: bold 12px Helvetica, sans-serif;
			margin: 2px -12px;
			padding: 2px 6px 3px 6px;
			text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
		}

		.fb_dialog_content .dialog_header .header_center {
			color: #fff;
			font-size: 16px;
			font-weight: bold;
			line-height: 18px;
			text-align: center;
			vertical-align: middle
		}

		.fb_dialog_content .dialog_content {
			background: url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
			border: 1px solid #4a4a4a;
			border-bottom: 0;
			border-top: 0;
			height: 150px
		}

		.fb_dialog_content .dialog_footer {
			background: #f5f6f7;
			border: 1px solid #4a4a4a;
			border-top-color: #ccc;
			height: 40px
		}

		#fb_dialog_loader_close {
			float: left
		}

		.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
			visibility: hidden
		}

		#fb_dialog_loader_spinner {
			animation: rotateSpinner 1.2s linear infinite;
			background-color: transparent;
			background-image: url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
			background-position: 50% 50%;
			background-repeat: no-repeat;
			height: 24px;
			width: 24px
		}

		@keyframes rotateSpinner {
			0% {
				transform: rotate(0deg)
			}

			100% {
				transform: rotate(360deg)
			}
		}

		.fb_iframe_widget {
			display: inline-block;
			position: relative
		}

		.fb_iframe_widget span {
			display: inline-block;
			position: relative;
			text-align: justify
		}

		.fb_iframe_widget iframe {
			position: absolute
		}

		.fb_iframe_widget_fluid_desktop,
		.fb_iframe_widget_fluid_desktop span,
		.fb_iframe_widget_fluid_desktop iframe {
			max-width: 100%
		}

		.fb_iframe_widget_fluid_desktop iframe {
			min-width: 220px;
			position: relative
		}

		.fb_iframe_widget_lift {
			z-index: 1
		}

		.fb_iframe_widget_fluid {
			display: inline
		}

		.fb_iframe_widget_fluid span {
			width: 100%
		}

		.fb_mpn_mobile_landing_page_slide_out {
			animation-duration: 200ms;
			animation-name: fb_mpn_landing_page_slide_out;
			transition-timing-function: ease-in
		}

		.fb_mpn_mobile_landing_page_slide_out_from_left {
			animation-duration: 200ms;
			animation-name: fb_mpn_landing_page_slide_out_from_left;
			transition-timing-function: ease-in
		}

		.fb_mpn_mobile_landing_page_slide_up {
			animation-duration: 500ms;
			animation-name: fb_mpn_landing_page_slide_up;
			transition-timing-function: ease-in
		}

		.fb_mpn_mobile_bounce_in {
			animation-duration: 300ms;
			animation-name: fb_mpn_bounce_in;
			transition-timing-function: ease-in
		}

		.fb_mpn_mobile_bounce_out {
			animation-duration: 300ms;
			animation-name: fb_mpn_bounce_out;
			transition-timing-function: ease-in
		}

		.fb_mpn_mobile_bounce_out_v2 {
			animation-duration: 300ms;
			animation-name: fb_mpn_fade_out;
			transition-timing-function: ease-in
		}

		.fb_customer_chat_bounce_in_v2 {
			animation-duration: 300ms;
			animation-name: fb_bounce_in_v2;
			transition-timing-function: ease-in
		}

		.fb_customer_chat_bounce_in_from_left {
			animation-duration: 300ms;
			animation-name: fb_bounce_in_from_left;
			transition-timing-function: ease-in
		}

		.fb_customer_chat_bounce_out_v2 {
			animation-duration: 300ms;
			animation-name: fb_bounce_out_v2;
			transition-timing-function: ease-in
		}

		.fb_customer_chat_bounce_out_from_left {
			animation-duration: 300ms;
			animation-name: fb_bounce_out_from_left;
			transition-timing-function: ease-in
		}

		.fb_customer_chat_bubble_animated_no_badge {
			box-shadow: 0 3px 12px rgba(0, 0, 0, .15);
			transition: box-shadow 150ms linear
		}

		.fb_customer_chat_bubble_animated_no_badge:hover {
			box-shadow: 0 5px 24px rgba(0, 0, 0, .3)
		}

		.fb_customer_chat_bubble_animated_with_badge {
			box-shadow: -5px 4px 14px rgba(0, 0, 0, .15);
			transition: box-shadow 150ms linear
		}

		.fb_customer_chat_bubble_animated_with_badge:hover {
			box-shadow: -5px 8px 24px rgba(0, 0, 0, .2)
		}

		.fb_invisible_flow {
			display: inherit;
			height: 0;
			overflow-x: hidden;
			width: 0
		}

		.fb_new_ui_mobile_overlay_active {
			overflow: hidden
		}

		@keyframes fb_mpn_landing_page_slide_in {
			0% {
				border-radius: 50%;
				margin: 0 24px;
				width: 60px
			}

			40% {
				border-radius: 18px
			}

			100% {
				margin: 0 12px;
				width: 100% - 24px
			}
		}

		@keyframes fb_mpn_landing_page_slide_in_from_left {
			0% {
				border-radius: 50%;
				left: 12px;
				margin: 0 24px;
				width: 60px
			}

			40% {
				border-radius: 18px
			}

			100% {
				left: 12px;
				margin: 0 12px;
				width: 100% - 24px
			}
		}

		@keyframes fb_mpn_landing_page_slide_out {
			0% {
				margin: 0 12px;
				width: 100% - 24px
			}

			60% {
				border-radius: 18px
			}

			100% {
				border-radius: 50%;
				margin: 0 24px;
				width: 60px
			}
		}

		@keyframes fb_mpn_landing_page_slide_out_from_left {
			0% {
				left: 12px;
				width: 100% - 24px
			}

			60% {
				border-radius: 18px
			}

			100% {
				border-radius: 50%;
				left: 12px;
				width: 60px
			}
		}

		@keyframes fb_mpn_landing_page_slide_up {
			0% {
				bottom: 0;
				opacity: 0
			}

			100% {
				bottom: 24px;
				opacity: 1
			}
		}

		@keyframes fb_mpn_bounce_in {
			0% {
				opacity: .5;
				top: 100%
			}

			100% {
				opacity: 1;
				top: 0
			}
		}

		@keyframes fb_mpn_fade_out {
			0% {
				bottom: 30px;
				opacity: 1
			}

			100% {
				bottom: 0;
				opacity: 0
			}
		}

		@keyframes fb_mpn_bounce_out {
			0% {
				opacity: 1;
				top: 0
			}

			100% {
				opacity: .5;
				top: 100%
			}
		}

		@keyframes fb_bounce_in_v2 {
			0% {
				opacity: 0;
				transform: scale(0, 0);
				transform-origin: bottom right
			}

			50% {
				transform: scale(1.03, 1.03);
				transform-origin: bottom right
			}

			100% {
				opacity: 1;
				transform: scale(1, 1);
				transform-origin: bottom right
			}
		}

		@keyframes fb_bounce_in_from_left {
			0% {
				opacity: 0;
				transform: scale(0, 0);
				transform-origin: bottom left
			}

			50% {
				transform: scale(1.03, 1.03);
				transform-origin: bottom left
			}

			100% {
				opacity: 1;
				transform: scale(1, 1);
				transform-origin: bottom left
			}
		}

		@keyframes fb_bounce_out_v2 {
			0% {
				opacity: 1;
				transform: scale(1, 1);
				transform-origin: bottom right
			}

			100% {
				opacity: 0;
				transform: scale(0, 0);
				transform-origin: bottom right
			}
		}

		@keyframes fb_bounce_out_from_left {
			0% {
				opacity: 1;
				transform: scale(1, 1);
				transform-origin: bottom left
			}

			100% {
				opacity: 0;
				transform: scale(0, 0);
				transform-origin: bottom left
			}
		}

		@keyframes fb_bounce_out_v2_mobile_chat_started {
			0% {
				opacity: 1;
				top: 0
			}

			100% {
				opacity: 0;
				top: 20px
			}
		}

		@keyframes fb_customer_chat_bubble_bounce_in_animation {
			0% {
				bottom: 6pt;
				opacity: 0;
				transform: scale(0, 0);
				transform-origin: center
			}

			70% {
				bottom: 18pt;
				opacity: 1;
				transform: scale(1.2, 1.2)
			}

			100% {
				transform: scale(1, 1)
			}
		}

		@keyframes slideInFromBottom {
			0% {
				opacity: .1;
				transform: translateY(100%)
			}

			100% {
				opacity: 1;
				transform: translateY(0)
			}
		}

		@keyframes slideInFromBottomDelay {
			0% {
				opacity: 0;
				transform: translateY(100%)
			}

			97% {
				opacity: 0;
				transform: translateY(100%)
			}

			100% {
				opacity: 1;
				transform: translateY(0)
			}
		}
	</style>
	<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" type="text/css">
</head>

<!-- BEGIN body -->

<body class="home page-template page-template-template-homepage page-template-template-homepage-php page page-id-37286 unselectable" style="cursor: default;">


	<!-- BEGIN .boxed -->
	<div class="boxed active">

		<!-- BEGIN .header -->
		<header class="header">
			<div class="header-topmenu">

				<!-- BEGIN .wrapper -->
				<div class="wrapper">
					<ul class="le-first">
						<li id="menu-item-3331" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home single"><a href="/">Trang chủ</a></li>
						<li id="menu-item-18487" class="menu-item menu-item-type-post_type menu-item-object-page single"><a href="/ve-ijavn/">Về IJAVN</a></li>
						<li id="menu-item-3334" class="menu-item menu-item-type-custom menu-item-object-custom single"><a href="/latest">Danh mục-Tác giả</a></li>
						<li id="menu-item-3335" class="menu-item menu-item-type-custom menu-item-object-custom single"><a href="/latest">Chuyên Mục</a></li>
						<li id="menu-item-28227" class="menu-item menu-item-type-post_type menu-item-object-page single"><a href="/lien-lac/">Liên Lạc</a></li>
						<li id="menu-item-28232" class="menu-item menu-item-type-post_type menu-item-object-page single"><a href="/huong-dan-gui-bai/">Hướng dẫn gửi bài</a></li>
						<li id="menu-item-18447" class="menu-item menu-item-type-taxonomy menu-item-object-category single"><a href="/category/english-only/">English only</a></li>
					</ul> <!-- END .wrapper -->
					<a href="/#" class="toggle-menu"><i class="fa fa-bars"></i> Toggle Menu</a>
				</div>

			</div>

			<!-- BEGIN .wrapper -->
			<div class="wrapper">

				<div class="header-block">
					<div class="header-logo">
						<a href="/"><img src="{{asset('assets/header-logo.png')}}" ></a>
					</div>

				</div>

				<!-- END .wrapper -->
			</div>

			<nav class="main-menu">

				<!-- BEGIN .wrapper -->
				<div class="wrapper">

					<ul class="menu menu" rel="Main Menu">
						<li id="menu-item-28221" class="normal-drop  menu-single menu-item menu-item-type-custom menu-item-object-custom"><a href="">Home</a></li>
						<li id="menu-item-1467" class="normal-drop menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/category/news/" style="border-bottom: 3px solid #214a82; ">Tin mới</a></li>
						<li id="menu-item-1474" class="normal-drop menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/category/opposite/" style="border-bottom: 3px solid #214a82; ">Đối Diện</a></li>
						<li id="menu-item-1491" class="normal-drop menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/category/forums/" style="border-bottom: 3px solid #214a82; ">Diễn Đàn</a></li>
						<li id="menu-item-1469" class="normal-drop menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/category/democracy/" style="border-bottom: 3px solid #214a82; ">Dân Chủ</a></li>
						<li id="menu-item-20508" class="normal-drop  menu-single menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/category/politics/" style="border-bottom: 3px solid #033567; ">Chính Trị</a></li>
						<li id="menu-item-1470" class="normal-drop menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/category/economy/" style="border-bottom: 3px solid #214a82; ">Kinh tế</a></li>
						<li id="menu-item-1471" class="normal-drop menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/category/society/" style="border-bottom: 3px solid #214a82; ">Xã hội</a></li>
						<li id="menu-item-1454" class="normal-drop menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/category/world/" style="border-bottom: 3px solid #214a82; ">Thế Giới</a></li>
						<li id="menu-item-1472" class="normal-drop menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/category/ijavn/" style="border-bottom: 3px solid #214a82; ">Về Hội</a></li>
					</ul> <!-- END .wrapper -->
					<a href="/#" class="toggle-menu"><i class="fa fa-bars"></i> Toggle Menu</a>
				</div>

			</nav>

			<!-- END .header -->
		</header>

		<!-- BEGIN .content -->
		<section class="content has-sidebar">
			<!-- BEGIN .wrapper -->
			<div class="wrapper">
				<!-- BEGIN .wrapper -->
				<div class="wrapper">

					<!-- BEGIN .breaking-news -->
					<div class="breaking-news isscrolling" rel="0">
						<div class="breaking-title">
							<h3>Breaking News</h3>
							<i></i>
						</div>
						<div class="breaking-block">
							<ul style="left: -1364px;">
								@if(isset($mostReadArticles) && $mostReadArticles)
									@foreach($mostReadArticles as $article)
									<li>
									<h4><a href="{{route('detail',['id'=>$article->id])}}">VNTB – {{$article->title}}</a></h4><i class="fa fa-exclamation"></i>
								</li>
									@endforeach
								@endif
								<li>
									<h4><a href="/">VNTB – Bắt bà Nguyễn Thúy Hạnh: Nhà nước muốn xóa bỏ quyền tự do ngôn luận</a></h4><i class="fa fa-exclamation"></i>
								</li>
								<li>
									<h4><a href="/">VNTB – Quốc hội lập pháp: góc nhìn từ một hội luận của BBC</a></h4><i class="fa fa-exclamation"></i>
								</li>
								<li>
									<h4><a href="/">VNTB – Ghi chép chuyện nọ xọ chuyện kia</a></h4><i class="fa fa-exclamation"></i>
								</li>
								<li>
									<h4><a href="/">VNTB – “Triệu tập” là gì trong chuyện tố tụng?</a></h4><i class="fa fa-exclamation"></i>
								</li>
								<li>
									<h4><a href="/">VNTB – Khi ‘quỹ dân sự’ đã bị nhà chức trách cố tình ‘chính trị hóa’</a></h4><i class="fa fa-exclamation"></i>
								</li>
							</ul>
						</div>
						<!-- END .breaking-news -->
					</div>

					<!-- END .wrapper -->
				</div>

			</div>
			<!-- BEGIN .wrapper -->
			<div class="wrapper">

				@yield('content')


				<!-- BEGIN #sidebar -->
				<aside id="sidebar" class="right" style="height: auto; min-height: 3763.11px;">
					<div class="widget_text widget-1 first widget">
						<div class="w-title">
							<h3>Đăng ký thành viên</h3>
						</div>
						<div class="textwidget custom-html-widget">
							<a href="/"><img src="{{asset('assets/member.jpg')}}"></a></div>
					</div>
					<!-- <div class="widget-2 widget">
						<form method="get" action="/" name="searchform">
							<div>
								<label class="screen-reader-text" for="s">Search for:</label>
								<input type="text" placeholder="search here" class="search" name="s" id="s">
								<input type="submit" id="searchsubmit" value="Search">
							</div>
						</form>
					</div> -->
					<div class="widget-3 last widget">
						<div class="w-title">
							<h3>Đọc nhiều nhất</h3>
						</div><!-- cached -->
						<!-- WordPress Popular Posts -->

						<ul class="wpp-list wpp-list-with-thumbnails">
							@if(isset($mostReadArticles) && $mostReadArticles)
								@foreach($mostReadArticles as $article)
								<li>
									<a href="{{route('detail',['id'=>$article->id])}}"><img src="{{$article->background_image}}"></a>
									<a href="{{route('detail',['id'=>$article->id])}}" class="wpp-post-title" target="_self">VNTB – {{$article->title}}</a>
								</li>
								@endforeach
							@endif
						</ul>

					</div>
					<!-- END #sidebar -->
				</aside>

				<!-- END .wrapper -->
			</div>

			<!-- BEGIN .content -->
		</section>



		<!-- BEGIN .footer -->
		<footer class="footer">

			<!-- BEGIN .wrapper -->
			<div class="wrapper">

				<!-- BEGIN .footer-widgets -->
				<div class="footer-widgets">

					<div class="widget_text widget-1 first widget">
						<div class="w-title">
							<h3>Ban biên tập:</h3>
						</div>
						<div class="textwidget custom-html-widget">
							<p>
								Nguyễn Tường Thụy - Phạm Chí Dũng
							</p>
							<br>
							<p>Email: <a href="mailto:%20banbientap@ijavn.org">banbientap@ijavn.org</a>
							</p>
						</div>
					</div>
					<div class="widget_text widget-2 last widget">
						<div class="w-title">
							<h3>Vượt tường lửa</h3>
						</div>
						<div class="textwidget custom-html-widget">
							<p>
								<a href="https://www.proxysite.com/" target="_blank" rel="noopener noreferrer">
								<img src="{{asset('assets/logo-proxysite.png')}}">
								</a>
							</p>


						</div>
					</div>
					<!-- END .footer-widgets -->
				</div>

				<!-- END .wrapper -->
			</div>

			<div class="footer-bottom">
				<!-- BEGIN .wrapper -->
				<div class="wrapper">

					<p class="left">Copyright 2021 Việt Nam Thời Báo - Hội nhà báo Độc lập Việt Nam (VNTB - IJAVN) . Theme của IJAVN <a href="/" target="_blank"></a></p>

					<div class="clear-float"></div>

					<!-- END .wrapper -->
				</div>
			</div>

			<!-- END .footer -->
		</footer>

		<!-- END .boxed -->
	</div>



	<div class="lightbox">
		<div class="lightcontent-loading">
			<a href="/#" onclick="javascript:lightboxclose();" class="light-close"><i class="fa fa-minus-square"></i>&nbsp;&nbsp;Close Window</a>
			<div class="loading-box">
				<h3>Loading, Please Wait!</h3>
				<span>This may take a second or two.</span>
				<span class="loading-image"><img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="/wp-content/themes/novomag-theme/images/loading.gif" title="Loading" alt="Loading" style="opacity: 1;"><noscript><img src="/wp-content/themes/novomag-theme/images/loading.gif" title="Loading" alt="Loading" /></noscript></span>
			</div>
		</div>
		<div class="lightcontent"></div>
	</div>


	<script>
		var _otSliderAuto = true;
		var _otSliderTime = 4;

		var _otSliderTime = (!_otSliderTime) ? 4 : _otSliderTime;
		var _otSliderCurrentPage = 0;

		function themesAutoLoad() {
			var thenextpage = (jQuery(".slider > .slider-navigation > li.active").next().index() == "-1") ? 0 : jQuery(".slider > .slider-navigation > li.active").next().index();
			setTimeout(function() {
				if (_otSliderAuto) {
					themesLoadPage(thenextpage);
					themesAutoLoad();
				}
			}, 1000 * _otSliderTime);
		}

		function themesCancelLoad() {
			_otSliderAuto = false;
		}

		function themesLoadPage(num) {
			jQuery(".slider > .slider-image > a").eq(num).addClass("active").siblings(".active").removeClass("active");
			jQuery(".slider > .slider-navigation > li").eq(num).addClass("active").siblings(".active").removeClass("active");
			_otSliderCurrentPage = num + 1;
		}
	</script>

	<a rel="nofollow" style="display:none;" href="/?blackhole=f23b16e4ff" title="Do NOT follow this link or you will be banned from the site!">Việt Nam Thời Báo</a>
	<div id="wpcp-error-message" class="msgmsg-box-wpcp warning-wpcp hideme"><span>Alert: </span>You are not allowed to copy content or view source</div>
	<script>
		var timeout_result;

		function show_wpcp_message(smessage) {
			if (smessage !== "") {
				var smessage_text = '<span>Alert: </span>' + smessage;
				document.getElementById("wpcp-error-message").innerHTML = smessage_text;
				document.getElementById("wpcp-error-message").className = "msgmsg-box-wpcp warning-wpcp showme";
				clearTimeout(timeout_result);
				timeout_result = setTimeout(hide_message, 3000);
			}
		}

		function hide_message() {
			document.getElementById("wpcp-error-message").className = "msgmsg-box-wpcp warning-wpcp hideme";
		}
	</script>
	<style type="text/css">
		#wpcp-error-message {
			direction: ltr;
			text-align: center;
			transition: opacity 900ms ease 0s;
			z-index: 99999999;
		}

		.hideme {
			opacity: 0;
			visibility: hidden;
		}

		.showme {
			opacity: 1;
			visibility: visible;
		}

		.msgmsg-box-wpcp {
			border: 1px solid #f5aca6;
			border-radius: 10px;
			color: #555;
			font-family: Tahoma;
			font-size: 11px;
			margin: 10px;
			padding: 10px 36px;
			position: fixed;
			width: 255px;
			top: 50%;
			left: 50%;
			margin-top: -10px;
			margin-left: -130px;
			-webkit-box-shadow: 0px 0px 34px 2px rgba(242, 191, 191, 1);
			-moz-box-shadow: 0px 0px 34px 2px rgba(242, 191, 191, 1);
			box-shadow: 0px 0px 34px 2px rgba(242, 191, 191, 1);
		}

		.msgmsg-box-wpcp span {
			font-weight: bold;
			text-transform: uppercase;
		}

		.warning-wpcp {
			background: #ffecec url('/wp-content/plugins/wp-content-copy-protector/images/warning.png') no-repeat 10px 50%;
		}
	</style>
	<link rel="stylesheet" id="yarppRelatedCss-css" href="{{asset('assets/related.css')}}" type="text/css" media="all">
	
	<link rel="stylesheet" href="{{asset('assets/phone.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('assets/ipad.css')}}" type="text/css">
	<script type="text/javascript" src="{{asset('assets/core.min.js.download')}}" id="jquery-ui-core-js"></script>
	<script type="text/javascript" src="{{asset('assets/jquery.floating_popup.1.3.min.js.download')}}" id="banner-js"></script>
	<script type="text/javascript" src="{{asset('assets/theme-scripts.js.download')}}" id="/wp-content/themes/novomag-theme/js/-scripts-js"></script>
	<script type="text/javascript" src="{{asset('assets/lightbox.js.download')}}" id="lightbox-js"></script>
	<script type="text/javascript" src="{{asset('assets/jquery.infinitescroll.min.js.download')}}" id="infinitescroll-js"></script>
	<script type="text/javascript" src="{{asset('assets/jquery.event.move.js.download')}}" id="move-js"></script>
	<script type="text/javascript" src="{{asset('assets/jquery.isotope.min.js.download')}}" id="isotope-js"></script>
	<script type="text/javascript" src="{{asset('assets/jquery.event.swipe.js.download')}}" id="swipe-js"></script>
	<script type="text/javascript" src="{{asset('assets/jquery.nicescroll.min.js.download')}}" id="nicescroll-js"></script>
	<script type="text/javascript" src="{{asset('assets/owl.carousel.min.js.download')}}" id="owl-carousel-js"></script>
	<script type="text/javascript" src="{{asset('assets/SmoothScroll.min.js.download')}}" id="smoothscroll-js"></script>
	<script type="text/javascript" src="{{asset('assets/novomag.js.download')}}" id="scripts-wp-js"></script>
	<script type="text/javascript" src="{{asset('assets/ot_gallery.js.download')}}" id="ot-gallery-js"></script>
	<script type="text/javascript" src="{{asset('assets/scripts.js.download')}}" id="ot-scripts-js"></script>
	<script type="text/javascript" src="{{asset('assets/wp-embed.min.js.download')}}" id="wp-embed-js"></script>
</body>

</html>