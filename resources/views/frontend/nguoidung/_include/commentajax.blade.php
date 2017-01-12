<li id="li-comment-{{$comment->id}}">
    <div class="comment" id="comment-{{$comment->id}}" text_comment="{{$comment->comment}}">
        <div class="pic" style="height: 60px;padding-right: 10px; float: left">
            <img src="{{asset($comment->user->image)}}" height="60px">
        </div>
        <div style="margin-left: 70px">
            <p class="meta">
                <span class="author">{{$comment->user->ho_ten}}</span>
                <span class="time">{{$comment->created_at}}</span></p>
            <div class="content">
                <p>{{$comment->comment}}</p>
            </div>
            <div class="actions">
                <a class="btnLike disabled" title="Bỏ thích" href="#like" scormid="{{$comment->theory->id}}"
                   qaid="841354"><span style="">{{$comment->like}}</span>Thích</a>
                <!--a class="btnDislike" href="#dislike" scormid="16684" qaid="841354"><span>0</span> Không thích</a-->
                <a class="btnReply" href="#reply" scormid="{{$comment->theory->id}}"
                   replyto="{{$comment->id}}"><span>0</span> Trả lời</a>
            </div>
        </div>
    </div>
    <ul class="comments" id="comments-{{$comment->id}}">
    </ul>
</li>