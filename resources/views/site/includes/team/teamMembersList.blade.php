<div class="teamMembers">
    <h1 class="teamMembersTitle">Our team</h1>
    <div class="teamMembersList">
        @foreach($data as $item)
            <div class="teamMembersListItem">
                <div class="teamMembersListItemWrapper">
                    <div class="teamMembersListItemAvatar" style="background-image: url('{{ $item['avatar'] }}')"></div>
                    <div class="teamMembersListItemWrapperInfo">
                        <h3 class="teamMembersListItemName">{{ $item['name'] }}</h3>
                        <h4 class="teamMembersListItemPosition">{{ $item['position'] }}</h4>
                    </div>
                </div>
                <div class="teamMembersListItemDesc">{!! $item['description'] !!}</div>
            </div>
        @endforeach
    </div>
</div>
