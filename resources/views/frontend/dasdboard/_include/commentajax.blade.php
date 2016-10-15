<li>
    <div class="comment" id="comment-{{$comment->id}}" text_comment="{{$comment->comment}}">
        <p class="meta">
            <span class="author">{{$comment->user->first_name.' '.$comment->user->last_name}}</span>
            <span class="time">{{$comment->created_at}}</span></p>
        <div class="content">
            <p>{{$comment->comment}}</p>
        </div>
        <div class="actions">
            <a class="btnLike disabled" title="Bỏ thích" href="#like" scormid="{{$comment->theory->id}}" qaid="841354"><span style="">1</span>Thích</a>
            <!--a class="btnDislike" href="#dislike" scormid="16684" qaid="841354"><span>0</span> Không thích</a-->
            <a class="btnReply" href="#reply" scormid="{{$comment->theory->id}}" replyto="{{$comment->id}}"><span>0</span> Trả
                lời</a>
        </div>
    </div>
</li>