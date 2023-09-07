<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
@if(backpack_user()->hasRole('admin') || backpack_user()->hasRole('teacher'))
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('user') }}'><i class='nav-icon la la-users'></i> کاربران</a></li>
@endif
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('lesson') }}'><i class='nav-icon la la-book'></i> دروس</a></li>
