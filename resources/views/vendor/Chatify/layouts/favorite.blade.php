<div class="favorite-list-item">
    <img data-id="{{ $user->id }}" data-action="0" class="avatar av-m" 
        src="{{ ('https://weechat.s3.sa-east-1.amazonaws.com/weechat/'.config('chatify.user_avatar.folder').'/'.$user->avatar) }}">
    <br>
    <p>{{ strlen($user->name) > 5 ? substr($user->name,0,6).'..' : $user->name }}</p>
</div>