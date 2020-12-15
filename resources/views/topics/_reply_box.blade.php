	@include('shared._error')


	<div class="reply-box">
		<form action="{{ route('replies.store') }}" method="POST" accept-charset="utf-8">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="topic_id" value="{{ $topic->id }}">
			<div class="form-group">
				<textarea class="form-control" row="3" placeholder="分享你的见解~" name="content"></textarea>
			</div>
			<button type="submit" class="btn btn-primary btn-sm"><i class="fa far-share mr-1"></i> 回复</button>
		</form>
	</div>
	<hr>