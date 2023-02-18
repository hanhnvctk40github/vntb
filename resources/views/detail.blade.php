@extends('master')
@section('metaTag')
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:type" content="article" />
<meta property="og:title" content=" {{$article->title}}" />
<meta property="og:description" content=" {{$article->description}}" />
<meta property="og:image" content="{{asset('assets/upload/article/'.$article->background_image)}}" />
@endsection
@section('content')
<div class="main-content left">
    <!-- BEGIN .panel -->
    <div class="panel">
        <div class="shortcode-content hreview post-47188 post type-post status-publish format-standard has-post-thumbnail hentry category-economy category-news tag-covid-19 tag-dong-gop-quy-phong-dich tag-quy-vac-xin-covid">
            <div class="article-head">

                <h1 class="fn entry-title" style="margin-top: 15px">{{$article->title}}</h1>

                <div class="article-info">

                    <div class="social-buttons left">
                        <a href="" class="social-thing facebook ot-share">
                            <i class="fa fa-facebook"></i>

                        </a>
                        <a href="" class="social-thing twitter ot-tweet" target="_blank">
                            <i class="fa fa-twitter"></i>

                        </a>
                        <a href="" class="social-thing linkedin ot-link">
                            <i class="fa fa-linkedin"></i>

                        </a>
                    </div>
                    <div class="right">
                        <span class="dtreviewed">
                            {{-- <a href="//2021/06/">
                                <i class="fa fa-clock-o"></i> {{date('d/m/Y', strtotime($article->created_at))}} </a> --}}
                            <span class="value-title" title="2021-Jun-05"></span>
                        </span>
                    </div>
                    <div class="clear-float"></div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="review-photo">
                    <img src="{{asset('assets/upload/article/'.$article->background_image)}}" width="100%" >
                    </div>
                </div>
            </div>
            <h3><span style="color: #808080;"><strong> {{$article->description}}</strong></span></h3>
            <p>{!! $article->content !!}</p>
            <hr>
            @if($article->status_button_register == 1)
            <div class="article-foot">
                <div class="" style="width 100%">
                    <div class="widget_text widget-1 first widget">
						<div class="w-title">
							<h3>Đăng ký thành viên Tin Tức An Nam</h3>
						</div>
						<div class="textwidget custom-html-widget">
							<a href="{{route('login')}}" style="display: block; margin-top: 30px"><img src="{{asset('assets/member.jpg')}}" /></a>
						</div>
					</div>
                </div>
                <div class="right">
                    <span>
                        <i class="fa fa-tags"></i>
                        Tags: Tin Tức An Nam</span>
                </div>
            </div>
            @endif

        </div>
        <!-- END .panel -->
    </div>

</div>
@endsection
