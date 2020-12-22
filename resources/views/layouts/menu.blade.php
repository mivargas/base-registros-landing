<li class="{{ Request::is('landingUses*') ? 'active' : '' }}">
    <a href="{!! route('landingUses.index') !!}"><i class="fa fa-edit"></i><span>Landing Uses</span></a>
</li>

<li class="{{ Request::is('landingOptions*') ? 'active' : '' }}">
    <a href="{!! route('landingOptions.index') !!}"><i class="fa fa-edit"></i><span>Landing Options</span></a>
</li>
@can('users.index')
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>
@endcan()
@can('roles.index')
<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>
@endcan()

