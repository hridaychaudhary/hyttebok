@php
$urlAdmin=config('fast.admin_prefix');
@endphp

@can('dashboard')
@php
$isDashboardActive = Request::is($urlAdmin);
@endphp
<li class="nav-item">
    <a href="{{ route('dashboard') }}" class="nav-link {{ $isDashboardActive ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>@lang('menu.dashboard')</p>
    </a>
</li>
@endcan

@can('generator_builder.index')
@php
$isUserActive = Request::is($urlAdmin.'*generator_builder*');
@endphp
<li class="nav-item">
    <a href="{{ route('generator_builder.index') }}" class="nav-link {{ $isUserActive ? 'active' : '' }}">
        <i class="nav-icon fas fa-coins"></i>
        <p>@lang('menu.generator_builder.title')</p>
    </a>
</li>
@endcan

@can('attendances.index')
@php
$isUserActive = Request::is($urlAdmin.'*attendances*');
@endphp

<li class="nav-item">
    <a href="{{ route('attendances.index') }}" class="nav-link {{ $isUserActive ? 'active' : '' }}">
        <i class="nav-icon fas fa-calendar-alt"></i>

        <p>@lang('menu.attendances.title')</p>
    </a>
</li>
@endcan

@canany(['users.index','roles.index','permissions.index'])
@php
$isUserActive = Request::is($urlAdmin.'*users*');
$isRoleActive = Request::is($urlAdmin.'*roles*');
$isPermissionActive = Request::is($urlAdmin.'*permissions*');
@endphp
<li class="nav-item {{($isUserActive||$isRoleActive||$isPermissionActive)?'menu-open':''}} ">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-shield-virus"></i>
        <p>
            @lang('menu.user.title')
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        @can('users.index')
        <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link {{ $isUserActive ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    @lang('menu.user.users')
                </p>
            </a>
        </li>
        @endcan
        @can('roles.index')
        <li class="nav-item">
            <a href="{{ route('roles.index') }}" class="nav-link {{ $isRoleActive ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-shield"></i>
                <p>
                    @lang('menu.user.roles')
                </p>
            </a>
        </li>
        @endcan
        @can('permissions.index')
        <li class="nav-item ">
            <a href="{{ route('permissions.index') }}" class="nav-link {{ $isPermissionActive ? 'active' : '' }}">
                <i class="nav-icon fas fa-shield-alt"></i>
                <p>
                    @lang('menu.user.permissions')
                </p>
            </a>
        </li>
        @endcan
    </ul>
</li>
@endcan
@can('fileUploads.index')
<li class="nav-item">
    <a href="{{ route('fileUploads.index') }}" class="nav-link {{ Request::is('fileUploads*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-file-alt"></i>
        <p>@lang('models/fileUploads.plural')</p>
    </a>
</li>
@endcan
<!-- <li class="nav-item">
    <a href="{{ route('testers.index') }}"
       class="nav-link {{ Request::is('testers*') ? 'active' : '' }}">
        <p>@lang('models/testers.plural')</p>
    </a>
</li> -->

<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-shield-virus"></i>
        <p>
           Category
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        
        <li class="nav-item">
            <a href="{{ route('category.create') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Add Category
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('category.index') }}" class="nav-link">
                <i class="nav-icon fas fa-user-shield"></i>
                <p>
                    view category
                </p>
            </a>
        </li>
   
    </ul>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-shield-virus"></i>
        <p>
           Post
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        
        <li class="nav-item">
            <a href="{{ route('post.create') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Add Post
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('post.index') }}" class="nav-link">
                <i class="nav-icon fas fa-user-shield"></i>
                <p>
                    View Post
                </p>
            </a>
        </li>
   
    </ul>
    <li class="nav-item">
        <a href="{{ route('homeSliderImage.index') }}" class="nav-link {{ Request::is('admin/homeSliderImage*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-file-alt"></i>
            <p>SliderImage</p>
        </a>
    </li>
</li>