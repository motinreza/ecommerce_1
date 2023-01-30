<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="/home/images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/bootstrap.css') }}" />
    <!-- font awesome style -->
    <link href="{{ asset('home/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('home/css/responsive.css') }}" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<div class="hero_area">

    @include('home.header')

@include('home.product_view')

<div class="mb-5">
    <div class="row justify-content-center pb-5">
        <div class="col-md-6">
            <h3 class="text-center">Comments</h3>
            <form action="{{ url('add_comment') }}" method="Post">
                @csrf
                <textarea name="comment" id="" cols="30" rows="10" class="form-control" placeholder="Comment something here.."></textarea>
                <input type="submit" value="Comment" class="btn btn-danger float-right" style="background-color: #ff0000;">
            </form>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h4>All Comments</h4>

            @foreach($comment as $comment)
                <div>
                    <b>{{ $comment->name }}</b>
                    <p>{{ $comment->comment }}</p>
                    <a  href="javascript::void(0);" onclick="reply(this)" data-Commentid="{{ $comment->id }}" style="color:blue;">Reply</a>
                </div>

                @foreach($reply as $rep)

                    @if($rep->comment_id == $comment->id)
                        <div class="pl-5">
                            <b>{{ $rep->name }}</b>
                            <p>{{ $rep->reply }}</p>
                            <a  href="javascript::void(0);" onclick="reply(this)" data-Commentid="{{ $comment->id }}" style="color:blue;">Reply</a>
                        </div>
                    @endif

                @endforeach

            @endforeach

            <div class="replyDiv" style="display: none;">
                <form action="{{ url('add_reply') }}" method="Post">
                    @csrf
                    <input type="text" id="commentId" name="commentId" hidden>
                    <textarea name="reply" id="" cols="30" rows="3" placeholder="Write something here.." class="form-control mb-2"></textarea>
                    <button type="submit" class="bg-white border-0 text-primary" style="background-color: #0c63e4; color:blue;">Reply</button>

                    <a href="javascript::void(0);" class="btn btn-outline-danger btn-sm" onclick="reply_close(this)">Close</a>
                </form>
            </div>
        </div>
    </div>
</div>

@include('home.footer')

<div class="cpy_">
    <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

        Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

    </p>
</div>

<script type="text/javascript">

    function reply(caller){
        document.getElementById('commentId').value=$(caller).attr('data-Commentid');

        $('.replyDiv').insertAfter($(caller));
        $('.replyDiv').show();
    }

    function reply_close(caller){
        $('.replyDiv').hide();
    }

</script>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var scrollpos = localStorage.getItem('scrollpos');
        if (scrollpos) window.scrollTo(0, scrollpos);
    });

    window.onbeforeunload = function(e) {
        localStorage.setItem('scrollpos', window.scrollY);
    };
</script>

<!-- jQery -->
<script src="home/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="home/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="home/js/bootstrap.js"></script>
<!-- custom js -->
<script src="home/js/custom.js"></script>
</body>
</html>
