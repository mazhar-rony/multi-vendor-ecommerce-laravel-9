<aside id="leftsidebar" class="sidebar">
    {{-- User Info --}}
    <div class="user-info">
        <div class="image">
            <img src="{{ asset('ui/backend/assets/images/user.jpg') }}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mazhar</div>
            <div class="email">mazhar@amazing.com</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ route('customer.login') }}"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    {{-- #User Info --}}
    {{-- Menu --}}
    <div class="menu">
        <ul class="list">
            @if (Request::is('admin*'))
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard.index') }}">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>
            <li class="{{ Request::is('admin/products*') ? 'active' : '' }}">
                <a href="{{ route('admin.product.index') }}">
                    <i class="material-icons">widgets</i>
                    <span>Product</span>
                </a>
            </li>
            @endif
        </ul>
    </div>
    {{-- #Menu --}}
    {{-- Footer --}}
    <div class="legal">
        <div class="copyright">                   
                &copy; <a href="{{route('home.index')}}">Amazing</a>. All Rights Reserved. Developed
                by <br><a href="#" target="_blank">Dev_MSDF.</a> <b>Version: </b> 1.0.0
        </div>
    </div>
    {{-- #Footer --}}
</aside>