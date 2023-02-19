@extends('master')
@section('content')
<div class="main-content left">
	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="slider">
			<div class="slider-image">
				@if(isset($article) && $article)
				<a href='{{asset("bai-viet/".$article->id."/". $article->title)}}' class="active">
					<span class="slider-overlay">
						<strong> {{$article->title}}</strong>
						<span>
							<p>&nbsp;{{$article->description}}</p>
						</span>
					</span>
					<img src="{{asset('assets/upload/article/'.$article->background_image)}}" class="setborder" />
				</a>
				@endif
			</div>
			<ul class="slider-navigation">
				@if(isset($articlesBreakings) && $articlesBreakings)
				@foreach($articlesBreakings as $article)
				<li class="">
					<a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}' data-target="1">
						<strong> {{$article->title}}</strong>
						<span>
							<p>&nbsp;{{$article->description}}</p>
						</span>
					</a>
				</li>
					@endforeach
					@endif


			</ul>
		</div>
		<!-- END .panel -->
	</div>

	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="p-title">
			<h2 style="background-color: #214a82;">Tin mới</h2>
		</div>
		<div class="article-grid-list">
			@if(isset($mostReadArticles) && $mostReadArticles)
			@foreach($articlesNew as $article)
			<div class="item">

				<div class="item-header">
					<a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}' class="overset-image load-effect">
							<img src="{{asset('assets/upload/article/'.$article->background_image)}}" class="item-photo litespeed-loaded" width="100%"/>
					</a>
		    </div>
            <div class="item-content">
                <div class="post-category" style="color: #214a82;">
                    <a href="/">Tin Tức An Nam</a>
                </div>
                <h4><a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}'>
                        {{$article->title}}</a></h4>
                <p>&nbsp;{{$article->description}}</p>
            </div>
	</div>
	@endforeach
	@endif
</div>
<!-- END .panel -->
</div> <!-- BEGIN .panel-split -->
<div class="panel-split">
	<div class="left-side">
		<!-- BEGIN .panel -->
		<div class="panel">
			<div class="p-title">
				<h2 style="background-color: #214a82;">Đối Diện</h2>
			</div>

			<div class="article-list">
				@if(isset($articleDoidien) && $articleDoidien)
				<div class="item main-artice">
					<div class="item-header">
						<a href='{{asset("bai-viet/".$articleDoidien->id."/". $articleDoidien->seo_title)}}'>
							<img src="{{asset('assets/upload/article/'.$articleDoidien->background_image)}}" class="item-photo litespeed-loaded" />
						</a>
						<div class="article-slide">
							<h3><a href='{{asset("bai-viet/".$articleDoidien->id."/". $articleDoidien->seo_title)}}'>{{$articleDoidien->title}}</a></h3>
							<a href='{{asset("bai-viet/".$articleDoidien->id."/". $articleDoidien->seo_title)}}' class="info-line">
								{{-- <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{date('d/m/Y', strtotime($articleDoidien->created_at))}}</span> --}}
								<span><i class="fa fa-comment-o"></i>&nbsp;&nbsp;Bình luận</span>
							</a>
						</div>
					</div>
					<div class="item-content">
						<p>&nbsp;{{$articleDoidien->description}}</p>
					</div>
				</div>
				@endif
				@if(isset($articleDoidiens) && $articleDoidiens)
				@foreach($articleDoidiens as $article)
				<div class="item">
					<a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}'>
						<img src="{{asset('assets/upload/article/'.$article->background_image)}}" class="item-photo litespeed-loaded"/>
					</a>
					<div class="item-content">
						<h3><a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}'>{{$article->title}}</a></h3>
						{{-- <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{date('d/m/Y', strtotime($article->created_at))}}</span> --}}
						<a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}'><span><i class="fa fa-comment-o"></i>&nbsp;&nbsp;Bình luận</span></a>

					</div>
				</div>
				@endforeach
				@endif

			</div>
			<!-- END .panel -->
		</div>

	</div>


	<div class="right-side">
		<!-- BEGIN .panel -->
		<div class="panel">
			<div class="p-title">
				<h2 style="background-color: #214a82;">Dân Chủ</h2>
			</div>

			<div class="article-list">
				@if(isset($articleDanchu) && $articleDanchu)
				<div class="item main-artice">
					<div class="item-header">
						<a href='{{asset("bai-viet/".$articleDanchu->id."/". $articleDanchu->seo_title)}}'>
							<img src="{{asset('assets/upload/article/'.$articleDanchu->background_image)}}" class="item-photo litespeed-loaded" />
						</a>
						<div class="article-slide">
							<h3><a href='{{asset("bai-viet/".$articleDanchu->id."/". $articleDanchu->seo_title)}}'>{{$articleDanchu->title}}</a></h3>
							<a href='{{asset("bai-viet/".$articleDanchu->id."/". $articleDanchu->seo_title)}}' class="info-line">
								{{-- <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{date('d/m/Y', strtotime($articleDanchu->created_at))}}</span> --}}
								<span><i class="fa fa-comment-o"></i>&nbsp;&nbsp;Bình luận</span>
							</a>
						</div>
					</div>
					<div class="item-content">
						<p>&nbsp;{{$articleDanchu->description}}</p>
					</div>
				</div>
				@endif
				@if(isset($articleDanchus) && $articleDanchus)
				@foreach($articleDanchus as $article)
				<div class="item">
					<a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}'>
						<img src="{{asset('assets/upload/article/'.$article->background_image)}}" class="item-photo litespeed-loaded"/>
					</a>
					<div class="item-content">
						<h3><a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}'>{{$article->title}}</a></h3>
						{{-- <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{date('d/m/Y', strtotime($article->created_at))}}</span> --}}
						<a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}'><span><i class="fa fa-comment-o"></i>&nbsp;&nbsp;Bình luận</span></a>

					</div>
				</div>
				@endforeach
				@endif

			</div>
			<!-- END .panel -->
		</div>

	</div>


</div> <!-- BEGIN .panel-split -->
<div class="panel-split">
	<div class="left-side">
		<!-- BEGIN .panel -->
		<div class="panel">
			<div class="p-title">
				<h2 style="background-color: #214a82;">Diễn Đàn</h2>
			</div>

			<div class="article-list">
				@if(isset($articleDiendan) && $articleDiendan)
				<div class="item main-artice">
					<div class="item-header">
						<a href='{{asset("bai-viet/".$articleDiendan->id."/". $articleDiendan->seo_title)}}'>
							<img src="{{asset('assets/upload/article/'.$articleDiendan->background_image)}}" class="item-photo litespeed-loaded" />
						</a>
						<div class="article-slide">
							<h3><a href='{{asset("bai-viet/".$articleDiendan->id."/". $articleDiendan->seo_title)}}'>{{$articleDiendan->title}}</a></h3>
							<a href='{{asset("bai-viet/".$articleDiendan->id."/". $articleDiendan->seo_title)}}' class="info-line">
								{{-- <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{date('d/m/Y', strtotime($articleDiendan->created_at))}}</span> --}}
								<span><i class="fa fa-comment-o"></i>&nbsp;&nbsp;Bình luận</span>
							</a>
						</div>
					</div>
					<div class="item-content">
						<p>&nbsp;{{$articleDiendan->description}}</p>
					</div>
				</div>
				@endif
				@if(isset($articleDiendans) && $articleDiendans)
				@foreach($articleDiendans as $article)
				<div class="item">
					<a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}'>
						<img src="{{asset('assets/upload/article/'.$article->background_image)}}" class="item-photo litespeed-loaded"/>
					</a>
					<div class="item-content">
						<h3><a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}'>{{$article->title}}</a></h3>
						{{-- <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{date('d/m/Y', strtotime($article->created_at))}}</span> --}}
						<a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}'><span><i class="fa fa-comment-o"></i>&nbsp;&nbsp;Bình luận</span></a>

					</div>
				</div>
				@endforeach
				@endif

			</div>
			<!-- END .panel -->
		</div>

	</div>


	<div class="right-side">
		<!-- BEGIN .panel -->
		<div class="panel">
			<div class="p-title">
				<h2 style="background-color: #033567;">Chính Trị</h2>
			</div>

			<div class="article-list">
				@if(isset($articleChinhtri) && $articleChinhtri)
				<div class="item main-artice">
					<div class="item-header">
						<a href='{{asset("bai-viet/".$articleChinhtri->id."/". $articleChinhtri->seo_title)}}'>
							<img src="{{asset('assets/upload/article/'.$articleChinhtri->background_image)}}" class="item-photo litespeed-loaded" />
						</a>
						<div class="article-slide">
							<h3><a href='{{asset("bai-viet/".$articleChinhtri->id."/". $articleChinhtri->seo_title)}}'>{{$articleChinhtri->title}}</a></h3>
							<a href='{{asset("bai-viet/".$articleChinhtri->id."/". $articleChinhtri->seo_title)}}' class="info-line">
								{{-- <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{date('d/m/Y', strtotime($articleChinhtri->created_at))}}</span> --}}
								<span><i class="fa fa-comment-o"></i>&nbsp;&nbsp;Bình luận</span>
							</a>
						</div>
					</div>
					<div class="item-content">
						<p>&nbsp;{{$articleChinhtri->description}}</p>
					</div>
				</div>
				@endif
				@if(isset($articleChinhtris) && $articleChinhtris)
				@foreach($articleChinhtris as $article)
				<div class="item">
					<a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}'>
						<img src="{{asset('assets/upload/article/'.$article->background_image)}}" class="item-photo litespeed-loaded"/>
					</a>
					<div class="item-content">
						<h3><a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}'>{{$article->title}}</a></h3>
						{{-- <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{date('d/m/Y', strtotime($article->created_at))}}</span> --}}
						<a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}'><span><i class="fa fa-comment-o"></i>&nbsp;&nbsp;Bình luận</span></a>

					</div>
				</div>
				@endforeach
				@endif

			</div>
			<!-- END .panel -->
		</div>

	</div>


</div>
<!-- BEGIN .panel -->
<div class="panel">
	<div class="p-title">
		<h2 style="background-color: #214a82;">Kinh tế</h2>
	</div>
	<!-- START .blog-lis-->
	<div class="blog-list style-2">
        @foreach ($articleKinhtes as $article)
            @if(isset($article) && $article)
            <div class="item post-44325 post type-post status-publish format-standard has-post-thumbnail hentry category-economy category-news tag-doan-hung-quoc tag-gia-tri-kinh-te tag-joe-biden tag-kinh-te-de-hieu">
                <div class="item-header">
                    <a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}' class="item-photo">
                        <img src="{{asset('assets/upload/article/'.$article->background_image)}}"/></a>
                    <h3>
                        <a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}'> {{$article->title}}</a>
                    </h3>
                </div>
                <div class="item-content">
                    <p>{{$article->description}}</p>
                </div>
                <div class="item-footer">
                    <span class="foot-categories">
                        <a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}' class="category-link" style="color: #214a82">
                            <strong>Kinh tế</strong>
                        </a>
                        <a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}' class="category-link" style="color: #214a82">
                            <strong>Tin mới</strong>
                        </a>
                        <a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}' class="category-link" style="color: #214a82">
                            <strong>Tin Tức An Nam</strong>
                        </a>
                    </span>
                    <span class="right">
                        <a href="/2021/04/">
                            <i class="fa fa-clock-o"></i>{{date('d/m/Y', strtotime($article->created_at))}}</a>
                        <a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}'>
                            <i class="fa fa-comment"></i> 0 </a>
                    </span>
                </div>
            </div>
            @endif
        @endforeach

	</div>
	<!-- END .panel -->
</div>
<!-- BEGIN .panel -->
<div class="panel">
	<div class="p-title">
		<h2 style="background-color: #214a82;">Thế Giới</h2>
	</div>
	<div class="article-grid-list">
		@if(isset($articleThegiois) && $articleThegiois)
		@foreach($articleThegiois as $article)
		<div class="item">

			<div class="item-header">
				<a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}' class="overset-image load-effect">
					<img src="{{asset('assets/upload/article/'.$article->background_image)}}" class="item-photo litespeed-loaded"/>
				</a>
			</div>
			<div class="item-content">
				<div class="post-category" style="color: #214a82;">
					<a href="/">Tin Tức An Nam</a>
				</div>
				<h4><a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}'>
						{{$article->title}}</a></h4>
				<p>&nbsp;{{$article->description}}</p>
			</div>
		</div>
		@endforeach
		@endif
	</div>
	<!-- END .panel -->
</div> <!-- BEGIN .panel -->
<div class="panel">
	<div class="p-title">
		<h2 style="background-color: #214a82;">Tin Tức An Nam</h2>
	</div>
	<div>
		<div class="panel-split">
			<div class="left-side">
				<div class="article-list">

					@if(isset($articleVntb) && $articleVntb)
					<div class="item main-artice">
						<div class="item-header">
							<a href='{{asset("bai-viet/".$articleVntb->id."/". $articleVntb->seo_title)}}'>
								<img src="{{asset('assets/upload/article/'.$articleVntb->background_image)}}"/></a>
							<div class="article-slide">
								<h3><a href='{{asset("bai-viet/".$articleVntb->id."/". $articleVntb->seo_title)}}'> {{$articleVntb->title}}</a></h3>
								<a href='{{asset("bai-viet/".$articleVntb->id."/". $articleVntb->seo_title)}}' class="info-line">
									{{-- <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{date('d/m/Y', strtotime($articleVntb->created_at))}}</span> --}}
									<span><i class="fa fa-comment-o"></i>&nbsp;&nbsp;Bình luận</span>
								</a>
							</div>
						</div>
						<div class="item-content">
							<p>&nbsp;{{$articleVntb->description}}</p>
						</div>
					</div>
					@endif
				</div>
			</div>
			<div class="right-side">
				<div class="article-list">
					@if(isset($articleVntbs) && $articleVntbs)
					@foreach($articleVntbs as $article)
					<div class="item">
						<a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}'>
							<img src="{{asset('assets/upload/article/'.$article->background_image)}}" class="item-photo litespeed-loaded"/></a>
						<div class="item-content">
							<h3><a href='{{asset("bai-viet/".$article->id."/". $article->seo_title)}}'> {{$article->title}}</a></h3>
							{{-- <span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{date('d/m/Y', strtotime($article->created_at))}}</span> --}}
							<a href="{{asset('bai-viet/{$article->title}/{$article->id}')}}#comments"><span><i class="fa fa-comment-o"></i>&nbsp;&nbsp;Bình luận</span></a>

						</div>
					</div>
					@endforeach
					@endif
				</div>
			</div>
		</div>
	</div>

	<!-- END .panel -->
</div>

</div>
@endsection
