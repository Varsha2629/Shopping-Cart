<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="{{URL('/')}}">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="{{ URL('/shopping-cart') }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart
              <span class="badge">{{ Session::has('cart') ? Session::get('cart') ->totalQty :'' }}</span>
              </a></li>
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> User Management <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                                              
                        <li role="separator" class="divider"></li>
                        @if (Auth::check())
                        <li><a href="{{ URL('/user/profile') }}">User Profile</a></li>
                        <li><a href="{{ URL('/user/logout')}}">Logout</a></li>
                        @else
                        <li><a href="{{ URL('/user/signup') }}">Sign Up</a></li>
                        <li><a href="{{ URL('/user/signin') }}">Sign In</a></li>
                        @endif
                        
                    </ul>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>