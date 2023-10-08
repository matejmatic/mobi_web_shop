

 <!-- Navbar  -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-md-3">
      <div class="container">
        <a class="navbar-brand" href="{{ route('welcome') }}">Web Shop</a>
        
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('welcome') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('products') }}">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('cart.show') }}">Cart ({{ Gloudemans\Shoppingcart\Facades\Cart::content()->count() }})</a>
            </li>
            @auth
            <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('order') }}">Order</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
            </li>
            @endauth
            @guest
            <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('login') }}">Sign in</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('register') }}">Sign up</a>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

