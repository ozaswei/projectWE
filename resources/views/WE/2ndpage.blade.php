@extends('WE.layout.master')
@section('header')
    <style>
        .profileImageDiv {
            display: flex;
            justify-content: center;

        }

        .profileImage {
            width: 150px;
        }

        .uploadImageDiv {
            text-align: center;
        }

        .searchField {
            text-align: center;
        }

        .row {
            margin-left: 0;
            margin-right: 0;
        }

        .suggestionBoxCss {
            width: 100%;
            margin-top: 10px;
            border: 1px solid black;
            border-radius: 25px;
            text-align: center;
            color: black;
        }

        .suggestionBoxCss:hover {
            background-color: royalblue;
            color: white;
        }

        .searchResultBox {
            width: 100%;
            height: 56px;
            margin-top: 10px;
            border: 1px solid black;
            text-align: center;
            overflow: hidden;
            overflow-wrap: break-word;
        }

        .ajax-load {
            background: #e1e1e1;
            padding: 10px 0;
            width: 100%;
        }
    </style>
@endsection
@section('mainBody')
{{--    <div class="container mt-1 pb-4 bg-white">--}}
        {{--        <div class="profileImageDiv pt-2">--}}
        {{--            <img src="{{URL::to('/images/Profile_Pic_Sample.png')}}" class="profileImage">--}}
        {{--        </div>--}}
        {{--        <div class="uploadImageDiv mt-2">--}}
        {{--            <form class="form">--}}
        {{--                <div class="file-upload-wrapper" data-text="Select your file!">--}}
        {{--                    <input name="file-upload-field" type="file" class="file-upload-field" value="">--}}
        {{--                </div>--}}
        {{--            </form>--}}
        {{--        </div>--}}

        {{--        <div class="mt-3">--}}
        {{--            <form>--}}
        {{--                <input type="text" style="width: 100%" class="form-control searchField"--}}
        {{--                       placeholder="What do you want to find in Wonderland USA ?">--}}
        {{--            </form>--}}
        {{--        </div>--}}
        {{--        <div class="row mt-2" style="width: 100%">--}}
        {{--            <div class="col-md-4 col-sm-12 col-12">--}}
        {{--                <a href="">--}}
        {{--                    <div class="suggestionBoxCss">--}}
        {{--                        Find Your Soul Mate--}}
        {{--                    </div>--}}
        {{--                </a>--}}
        {{--            </div>--}}
        {{--            <div class="col-md-4 col-sm-12 col-12">--}}
        {{--                <a href="">--}}
        {{--                    <div class="suggestionBoxCss">--}}
        {{--                        Getting Green Card--}}
        {{--                    </div>--}}
        {{--                </a>--}}
        {{--            </div>--}}
        {{--            <div class="col-md-4 col-sm-12 col-12">--}}
        {{--                <a href="">--}}
        {{--                    <div class="suggestionBoxCss">--}}
        {{--                        Find College--}}
        {{--                    </div>--}}
        {{--                </a>--}}
        {{--            </div>--}}

        {{--            <div class="col-md-4 col-sm-12 col-12">--}}
        {{--                <a href="">--}}
        {{--                    <div class="suggestionBoxCss">--}}
        {{--                        Find a Traveling Buddy--}}
        {{--                    </div>--}}
        {{--                </a>--}}
        {{--            </div>--}}

        {{--            <div class="col-md-4 col-sm-12 col-12">--}}
        {{--                <a href="">--}}
        {{--                    <div class="suggestionBoxCss">--}}
        {{--                        Start a Business--}}
        {{--                    </div>--}}
        {{--                </a>--}}
        {{--            </div>--}}
        {{--            <div class="col-md-4 col-sm-12 col-12">--}}
        {{--                <a href="">--}}
        {{--                    <div class="suggestionBoxCss">--}}
        {{--                        Safe Place To live--}}
        {{--                    </div>--}}
        {{--                </a>--}}
        {{--            </div>--}}
        {{--            </a>--}}
{{--    </div>--}}
    {{--        <hr/>--}}
    <div class="row">
        <div class="col-md-12" id="post-data">
            <div class="scrolling-pagination">
                @foreach($posts as $post)
                    <div class="main-blog">
                        <div class="blog-img">
                            <a href="/blog/{{ $post->slug }}">
                                <img src="{{ $post->image }}" class="img-fluid" alt="{{ $post->title }}">
                            </a>
                        </div>
                        <div class="blog-detail">
                            <a href="/blog/{{ $post->slug }}">
                                <h6 class="">{{ $post->title }}</h6>
                            </a>
                        </div>
                    </div>
                @endforeach
                {{ $posts->links() }}
            </div>
        </div>
    </div>

    <div class="ajax-load text-center" style="display:none">
        <p>Loading More post</p>
    </div>
@endsection

@section('footer')
    <script type="text/javascript">
        $(document).ready(function () {

        });
    </script>
@endsection
