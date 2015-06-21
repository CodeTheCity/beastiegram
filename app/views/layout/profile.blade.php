<div class="profile_information">
    <div class="user_avatar"></div>
    <div class="user_information">
        <div class="user_information_body">
            <p>{{Auth::user()->username}}</p>
        </div>
        <div class="user_information_body">
            <span>Team: </span>{{Auth::user()->teamDetails()->team_name}}
        </div>
        <div class="user_information_body">
            <span>Team location: </span>{{Auth::user()->teamDetails()->city}}
        </div>
    </div>
</div>