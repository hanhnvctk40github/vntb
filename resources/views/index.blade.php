@extends('master')
@section('content')
<div class="main-content left">
	<!-- BEGIN .panel -->
	<div class="panel">
		<div class="slider">
			<div class="slider-image">
				@if(isset($article) && $article)
				<a href="{{route('detail',['id'=>$article->id])}}" class="active">
					<span class="slider-overlay">
						<strong>VNTB – {{$article->title}}</strong>
						<span>
							<p>Nguyễn Nam &nbsp; (VNTB) – Miền Nam quá thiệt thòi</p>
						</span>
					</span>
					<img src="{{asset('assets/upload/article/'.$article->background_image)}}" class="setborder">
				</a>
				@endif
			</div>
			<ul class="slider-navigation">
				@if(isset($articles) && $articles)
				@foreach($articles as $article)
				<li class="">
					<a href="{{route('detail',['id'=>$article->id])}}" data-target="1">
						<strong>VNTB – {{$article->title}}</strong>
						<span>
							<p>Ngọc Vân &nbsp; (VNTB) –&nbsp;{{$article->description}}</p>
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
			<a href="/category/news/" class="upper-title">đọc thêm</a>
		</div>
		<div class="article-grid-list">
			@if(isset($articles) && $articles)
			@foreach($articles as $article)
			<div class="item">

				<div class="item-header">
					<a href="{{route('detail',['id'=>$article->id])}}" class="overset-image load-effect">
							<img src="{{asset('assets/upload/article/'.$article->background_image)}}" class="item-photo litespeed-loaded">
					</a>
		</div>
		<div class="item-content">
			<div class="post-category" style="color: #214a82;">
				<a href="/">VNTB</a>
			</div>
			<h4><a href="{{route('detail',['id'=>$article->id])}}">
					{{$article->title}}</a></h4>
			<p>Ngọc Vân &nbsp; (VNTB) –&nbsp;{{$article->description}}</p>
			<a href="{{route('detail',['id'=>$article->id])}}" class="novo-read-more">đọc thêm<i class="fa fa-angle-double-right"></i></a>
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
				@if(isset($article) && $article)
				<div class="item main-artice">
					<div class="item-header">
						<a href="{{route('detail',['id'=>$article->id])}}">
							<img src="{{asset('assets/upload/article/'.$article->background_image)}}" class="item-photo litespeed-loaded" />
						</a>
						<div class="article-slide">
							<h3><a href="{{route('detail',['id'=>$article->id])}}">{{$article->title}}</a></h3>
							<a href="{{route('detail',['id'=>$article->id])}}" class="info-line">
								<span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{date('d/m/Y', strtotime($article->created_at))}}</span>
								<span><i class="fa fa-comment-o"></i>&nbsp;&nbsp;0 Comments</span>
							</a>
						</div>
					</div>
					<div class="item-content">
						<p>Ngọc Vân &nbsp; (VNTB) –&nbsp;Có lẽ Chế độ bắt đầu run sợ trước viễn cảnh phải đối diện với hàng</p>
					</div>
				</div>
				@endif
				@if(isset($articles) && $articles)
				@foreach($articles as $article)
				<div class="item">
					<a href="{{route('detail',['id'=>$article->id])}}">
						<img src="{{asset('assets/upload/article/'.$article->background_image)}}" class="item-photo litespeed-loaded">
					</a>
					<div class="item-content">
						<h3><a href="{{route('detail',['id'=>$article->id])}}">{{$article->title}}</a></h3>
						<span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{date('d/m/Y', strtotime($article->created_at))}}</span>
						<a href="{{route('detail',['id'=>$article->id])}}"><span><i class="fa fa-comment-o"></i>&nbsp;&nbsp;0 Comments</span></a>

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
				@if(isset($article) && $article)
				<div class="item main-artice">
					<div class="item-header">
						<a href="{{route('detail',['id'=>$article->id])}}">
							<img src="{{asset('assets/upload/article/'.$article->background_image)}}" class="item-photo litespeed-loaded" />
						</a>
						<div class="article-slide">
							<h3><a href="{{route('detail',['id'=>$article->id])}}">{{$article->title}}</a></h3>
							<a href="{{route('detail',['id'=>$article->id])}}" class="info-line">
								<span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{date('d/m/Y', strtotime($article->created_at))}}</span>
								<span><i class="fa fa-comment-o"></i>&nbsp;&nbsp;0 Comments</span>
							</a>
						</div>
					</div>
					<div class="item-content">
						<p>Ngọc Vân &nbsp; (VNTB) –&nbsp;Có lẽ Chế độ bắt đầu run sợ trước viễn cảnh phải đối diện với hàng</p>
					</div>
				</div>
				@endif
				@if(isset($articles) && $articles)
				@foreach($articles as $article)
				<div class="item">
					<a href="{{route('detail',['id'=>$article->id])}}">
						<img src="{{asset('assets/upload/article/'.$article->background_image)}}" class="item-photo litespeed-loaded">
					</a>
					<div class="item-content">
						<h3><a href="{{route('detail',['id'=>$article->id])}}">{{$article->title}}</a></h3>
						<span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{date('d/m/Y', strtotime($article->created_at))}}</span>
						<a href="{{route('detail',['id'=>$article->id])}}"><span><i class="fa fa-comment-o"></i>&nbsp;&nbsp;0 Comments</span></a>

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
				@if(isset($article) && $article)
				<div class="item main-artice">
					<div class="item-header">
						<a href="{{route('detail',['id'=>$article->id])}}">
							<img src="{{asset('assets/upload/article/'.$article->background_image)}}" class="item-photo litespeed-loaded" />
						</a>
						<div class="article-slide">
							<h3><a href="{{route('detail',['id'=>$article->id])}}">{{$article->title}}</a></h3>
							<a href="{{route('detail',['id'=>$article->id])}}" class="info-line">
								<span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{date('d/m/Y', strtotime($article->created_at))}}</span>
								<span><i class="fa fa-comment-o"></i>&nbsp;&nbsp;0 Comments</span>
							</a>
						</div>
					</div>
					<div class="item-content">
						<p>Ngọc Vân &nbsp; (VNTB) –&nbsp;Có lẽ Chế độ bắt đầu run sợ trước viễn cảnh phải đối diện với hàng</p>
					</div>
				</div>
				@endif
				@if(isset($articles) && $articles)
				@foreach($articles as $article)
				<div class="item">
					<a href="{{route('detail',['id'=>$article->id])}}">
						<img src="{{asset('assets/upload/article/'.$article->background_image)}}" class="item-photo litespeed-loaded">
					</a>
					<div class="item-content">
						<h3><a href="{{route('detail',['id'=>$article->id])}}">{{$article->title}}</a></h3>
						<span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{date('d/m/Y', strtotime($article->created_at))}}</span>
						<a href="{{route('detail',['id'=>$article->id])}}"><span><i class="fa fa-comment-o"></i>&nbsp;&nbsp;0 Comments</span></a>

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
				@if(isset($article) && $article)
				<div class="item main-artice">
					<div class="item-header">
						<a href="{{route('detail',['id'=>$article->id])}}">
							<img src="{{asset('assets/upload/article/'.$article->background_image)}}" class="item-photo litespeed-loaded" />
						</a>
						<div class="article-slide">
							<h3><a href="{{route('detail',['id'=>$article->id])}}">{{$article->title}}</a></h3>
							<a href="{{route('detail',['id'=>$article->id])}}" class="info-line">
								<span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{date('d/m/Y', strtotime($article->created_at))}}</span>
								<span><i class="fa fa-comment-o"></i>&nbsp;&nbsp;0 Comments</span>
							</a>
						</div>
					</div>
					<div class="item-content">
						<p>Ngọc Vân &nbsp; (VNTB) –&nbsp;Có lẽ Chế độ bắt đầu run sợ trước viễn cảnh phải đối diện với hàng</p>
					</div>
				</div>
				@endif
				@if(isset($articles) && $articles)
				@foreach($articles as $article)
				<div class="item">
					<a href="{{route('detail',['id'=>$article->id])}}">
						<img src="{{asset('assets/upload/article/'.$article->background_image)}}" class="item-photo litespeed-loaded">
					</a>
					<div class="item-content">
						<h3><a href="{{route('detail',['id'=>$article->id])}}">{{$article->title}}</a></h3>
						<span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{date('d/m/Y', strtotime($article->created_at))}}</span>
						<a href="{{route('detail',['id'=>$article->id])}}"><span><i class="fa fa-comment-o"></i>&nbsp;&nbsp;0 Comments</span></a>

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
		<a href="/category/economy/" class="upper-title">đọc thêm</a>
	</div>
	<!-- START .blog-lis-->
	<div class="blog-list style-2">
		@if(isset($article) && $article)
		<div class="item post-44325 post type-post status-publish format-standard has-post-thumbnail hentry category-economy category-news category-vntb tag-doan-hung-quoc tag-gia-tri-kinh-te tag-joe-biden tag-kinh-te-de-hieu">
			<div class="item-header">
				<a href="{{route('detail',['id'=>$article->id])}}" class="item-photo">
					<img src="{{asset('assets/upload/article/'.$article->background_image)}}"></a>
				<h3>
					<a href="{{route('detail',['id'=>$article->id])}}">VNTB – {{$article->title}}</a>
				</h3>
			</div>
			<div class="item-content">
				<p>{{$article->description}}</p>
			</div>
			<div class="item-footer">
				<span class="foot-categories">
					<a href="{{route('detail',['id'=>$article->id])}}" class="category-link" style="color: #214a82">
						<strong>Kinh tế</strong>
					</a>
					<a href="{{route('detail',['id'=>$article->id])}}" class="category-link" style="color: #214a82">
						<strong>Tin mới</strong>
					</a>
					<a href="{{route('detail',['id'=>$article->id])}}" class="category-link" style="color: #214a82">
						<strong>VNTB</strong>
					</a>
				</span>
				<span class="right">
					<a href="/2021/04/">
						<i class="fa fa-clock-o"></i>{{date('d/m/Y', strtotime($article->created_at))}}</a>
					<a href="{{route('detail',['id'=>$article->id])}}">
						<i class="fa fa-comment"></i> 0 </a>
				</span>
			</div>
		</div>
		@endif


		@if(isset($article) && $article)
		<div class="item post-44325 post type-post status-publish format-standard has-post-thumbnail hentry category-economy category-news category-vntb tag-doan-hung-quoc tag-gia-tri-kinh-te tag-joe-biden tag-kinh-te-de-hieu">
			<div class="item-header">
				<a href="{{route('detail',['id'=>$article->id])}}" class="item-photo">
					<img src="{{asset('assets/upload/article/'.$article->background_image)}}"></a>
				<h3>
					<a href="{{route('detail',['id'=>$article->id])}}">VNTB – {{$article->title}}</a>
				</h3>
			</div>
			<div class="item-content">
				<p>{{$article->description}}</p>
			</div>
			<div class="item-footer">
				<span class="foot-categories">
					<a href="{{route('detail',['id'=>$article->id])}}" class="category-link" style="color: #214a82">
						<strong>Kinh tế</strong>
					</a>
					<a href="{{route('detail',['id'=>$article->id])}}" class="category-link" style="color: #214a82">
						<strong>Tin mới</strong>
					</a>
					<a href="{{route('detail',['id'=>$article->id])}}" class="category-link" style="color: #214a82">
						<strong>VNTB</strong>
					</a>
				</span>
				<span class="right">
					<a href="/2021/04/">
						<i class="fa fa-clock-o"></i>{{date('d/m/Y', strtotime($article->created_at))}}</a>
					<a href="{{route('detail',['id'=>$article->id])}}">
						<i class="fa fa-comment"></i> 0 </a>
				</span>
			</div>
		</div>
		@endif
	</div>
	<!-- END .panel -->
</div>
<!-- BEGIN .panel -->
<div class="panel">
	<div class="p-title">
		<h2 style="background-color: #214a82;">Thế Giới</h2>
		<a href="/category/world/" class="upper-title">đọc thêm</a>
	</div>
	<div class="article-grid-list">
		@if(isset($articles) && $articles)
		@foreach($articles as $article)
		<div class="item">

			<div class="item-header">
				<a href="{{route('detail',['id'=>$article->id])}}" class="overset-image load-effect">
					<img src="{{asset('assets/upload/article/'.$article->background_image)}}" class="item-photo litespeed-loaded">
				</a>
			</div>
			<div class="item-content">
				<div class="post-category" style="color: #214a82;">
					<a href="/">VNTB</a>
				</div>
				<h4><a href="{{route('detail',['id'=>$article->id])}}">
						{{$article->title}}</a></h4>
				<p>Ngọc Vân &nbsp; (VNTB) –&nbsp;{{$article->description}}</p>
				<a href="{{route('detail',['id'=>$article->id])}}" class="novo-read-more">đọc thêm<i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
		@endforeach
		@endif
	</div>
	<!-- END .panel -->
</div> <!-- BEGIN .panel -->
<div class="panel">
	<div class="p-title">
		<h2 style="background-color: #214a82;">VNTB</h2>
	</div>
	<a href="/category/vntb/" class="upper-title">đọc thêm<i class="fa fa-caret-right"></i></a>
	<div>
		<div class="panel-split">
			<div class="left-side">
				<div class="article-list">

					@if(isset($article) && $article)
					<div class="item main-artice">
						<div class="item-header">
							<a href="{{route('detail',['id'=>$article->id])}}">
								<img src="{{asset('assets/upload/article/'.$article->background_image)}}"></a>
							<div class="article-slide">
								<h3><a href="{{route('detail',['id'=>$article->id])}}">VNTB – {{$article->title}}</a></h3>
								<a href="{{route('detail',['id'=>$article->id])}}" class="info-line">
									<span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{date('d/m/Y', strtotime($article->created_at))}}</span>
									<span><i class="fa fa-comment-o"></i>&nbsp;&nbsp;0 Bình luận</span>
								</a>
							</div>
						</div>
						<div class="item-content">
							<p>Ngọc Vân &nbsp; (VNTB) –&nbsp;{{$article->description}}</p>
						</div>
					</div>
					@endif
				</div>
			</div>
			<div class="right-side">
				<div class="article-list">
					@if(isset($articles) && $articles)
					@foreach($articles as $article)
					<div class="item">
						<a href="{{route('detail',['id'=>$article->id])}}">
							<img src="{{asset('assets/upload/article/'.$article->background_image)}}" class="item-photo litespeed-loaded"></a>
						<div class="item-content">
							<h3><a href="{{route('detail',['id'=>$article->id])}}">VNTB – {{$article->title}}</a></h3>
							<span><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{date('d/m/Y', strtotime($article->created_at))}}</span>
							<a href="{{route('detail',['id'=>$article->id])}}#comments"><span><i class="fa fa-comment-o"></i>&nbsp;&nbsp;0 Bình luận</span></a>

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