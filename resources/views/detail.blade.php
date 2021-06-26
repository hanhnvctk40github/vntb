@extends('master')
@section('metaTag')
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="VNTB - {{$article->title}}" />
<meta property="og:description" content="VNTB - {{$article->description}}" />
<meta property="og:image" content="{{asset('assets/upload/article/'.$article->background_image)}}" />
@endsection
@section('content')
<div class="main-content left">
    <!-- BEGIN .panel -->
    <div class="panel">
        <div class="shortcode-content hreview post-47188 post type-post status-publish format-standard has-post-thumbnail hentry category-economy category-news category-vntb tag-covid-19 tag-dong-gop-quy-phong-dich tag-quy-vac-xin-covid">
            <div class="article-head">

                <h1 class="fn entry-title">VNTB – {{$article->title}}</h1>

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
                            <a href="//2021/06/">
                                <i class="fa fa-clock-o"></i> {{date('d/m/Y', strtotime($article->created_at))}} </a>
                            <span class="value-title" title="2021-Jun-05"></span>
                        </span>
                    </div>
                    <div class="clear-float"></div>
                </div>
            </div>
            <div class="paragraph-row">
                <div class="column6">

                    <div class="review-photo">
                    <img src="{{asset('assets/upload/article/'.$article->background_image)}}" >
                    </div>

                </div>
                <div class="column6">

                    <!-- BEGIN .panel -->
                    <div class="panel">
                        <div class="p-title">
                            <h2>Overview</h2>
                        </div>
                        <ul>
                        </ul>
                        <!-- END .panel -->
                    </div>
                </div>
            </div>





            <h2><span style="color: #808080;"><strong>(VNTB) - {{$article->description}}</strong></span></h2>
            <p>{!! $article->content !!}</p>
            <p>_____________</p>
            <div class="yarpp yarpp-related yarpp-related-website yarpp-template-list">
                <!-- YARPP List -->
                <h3>Tin bài liên quan:</h3>
                <ol>
                    @if(isset($relatedArticles) && $relatedArticles)
                        @foreach($relatedArticles as $article)
                        <li><a href="{route('detail',['id'=>$article->id])}}" rel="bookmark" title="VNTB – {{$article->title}}">VNTB – {{$article->title}}</a></li>
                        @endforeach
                    @endif
                </ol>
            </div>


            <div class="article-foot">
                <div class="left">
                    <span>
                        <i class="fa fa-folder-open"></i>
                        Categories: </span>
                    <a href="//category/economy/" rel="category tag">Kinh tế</a>, <a href="//category/news/" rel="category tag">Tin mới</a>, <a href="//category/vntb/" rel="category tag">VNTB</a>
                </div>
                <div class="right">
                    <span>
                        <i class="fa fa-tags"></i>
                        Tags: </span>
                    <a href="//tag/covid-19/">Covid-19</a>, <a href="//tag/dong-gop-quy-phong-dich/">đóng góp quỹ phòng dịch</a>, <a href="//tag/quy-vac-xin-covid/">quỹ vắc xin Covid</a>
                </div>
                <div class="clear-float"></div>
            </div>


        </div>
        <!-- END .panel -->
    </div>

    <!-- <div class="panel">
        <div class="p-title">
            <h2>Write a Comment</h2>
        </div>
        <div id="writecomment">
            <a href="#" name="respond"></a>
            <div id="respond" class="comment-respond">
                <h3 id="reply-title" class="comment-reply-title"> <small><a rel="nofollow" id="cancel-comment-reply-link" href="/vntb-keu-goi-dong-gop-quy-vac-xin-covid-cong-ty-han-quoc-bi-lam-kho/#respond" style="display:none;">Click here to cancel reply.</a></small></h3>
                <form action="//wp-comments-post.php" method="post" id="" class="comment-form">
                    <p class="contact-info"><i class="fa fa-info"></i>Your e-mail address will not be published.<br>Required fields are marked<span class="required">*</span></p>
                    <p class="contact-form-message"><label for="c_message">Bình luận<span class="required">*</span></label><textarea name="Bình luận" id="comment" placeholder="Your message.."></textarea></p>
                    <p class="contact-form-user">
                        <input type="text" placeholder="Nickname" name="author" id="author">
                    </p>
                    <p class="contact-form-email">
                        <input type="text" placeholder="E-mail" name="email" id="email">
                    </p>
                    <p class="contact-form-website">
                        <input type="text" placeholder="Website" name="url" id="url">
                    </p>
                    <p class="form-submit"><input name="submit" type="submit" id="Đăng bình luận" class="submit button" value="Post a Comment"> <input type="hidden" name="comment_post_ID" value="47188" id="comment_post_ID" class="button">
                        <input type="hidden" name="comment_parent" id="comment_parent" value="0" class="button">
                    </p>
                </form>
            </div>
        </div>
    </div> -->

</div>
@endsection