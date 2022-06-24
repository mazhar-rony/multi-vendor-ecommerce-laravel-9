<x-frontend.layout.master>

    <x-slot:title>
        Login or Register
    </x-slot>

{{-- Breadcumb Area --}}
    <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>Login &amp; Register</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Login &amp; Register</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
{{-- Breadcumb Area --}}

{{-- Login Area --}}
    <div class="bigshop_reg_log_area section_padding_100_50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="login_form mb-50">
                        <h5 class="mb-3">Login</h5>

                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" id="username" placeholder="Email or Username" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <div class="form-check">
                                <div class="custom-control custom-checkbox mb-3 pl-1">
                                    <input type="checkbox" class="custom-control-input" id="customChe">
                                    <label class="custom-control-label" for="customChe">Remember me for this computer</label>
                                </div>
                            </div>
                            {{--  <button type="submit" class="btn btn-primary btn-sm">Login</button>  --}}
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.dashboard.index') }}">Login</a>
                        </form>
                        <!-- Forget Password -->
                        <div class="forget_pass mt-15">
                            <a href="#">Forget Password?</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="login_form mb-50">
                        <h5 class="mb-3">Register</h5>

                        <form action="my-account.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="username" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="username" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" placeholder="Repeat Password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- Login Area End --}}}

</x-frontend.layout.master>