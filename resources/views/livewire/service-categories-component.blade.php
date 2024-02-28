<div>
<header>
        <nav class="navbar">
            <span class="menu-btn material-symbols-rounded">menu</span>
            <a href="#" class="logo">
                <img src="{{ asset('assets/images/logo.png')}}" alt="logo">
                <h2>Online Home Services</h2>
            </a>
            <ul class="links">
                <span class="close-btn material-symbols-rounded">close</span>
                <li><a href="/">Home</a></li>
                <li><a href="{{route('home.service_categories')}}">Services</a></li>
                <li><a href="#">Appliances</a></li>
                <li><a href="#">Special Services</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
            @if(Route::has('login'))
              @auth
                  @if(Auth::user()->utype === 'ADM')
                  <li class="login-btn" style="list-style: none;">My Account(Admin)</li>
                  <ul class="drop-down one-column hover-fade" style="list-style: none;">
                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                  </ul>
               @elseif(Auth::user()->utype === 'SVP')
               <li class="login-btn" style="list-style: none;">My Account(Service Provider)</li>
                  <ul class="drop-down one-column hover-fade" style="list-style: none;">
                    <li><a href="{{route('sprovider.dashboard')}}">Dashboard</a></li>
                    <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                  </ul>
                @else   
                <li class="login-btn" style="list-style: none;">My Account(Customer)</li>
                  <ul class="drop-down one-column hover-fade" style="list-style: none;">
                    <li><a href="{{route('customer.dashboard')}}">Dashboard</a></li>
                    <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                  </ul>
            @endif
            <form method="POST" id="logout-form" action="{{route('logout')}}">
                @csrf
            </form>
    @else
    <li class="login-btn" style="list-style: none;">LOG IN</li>
    @endif
@endif
        </nav>
    </header>
<div class="container">
        <h1>Our Services</h1>
        <div class="row">
        @foreach($scategories as $scategory)
            <div class="service">
               <i class="fa"><a href="#"><img class="icon-img"  src="{{ asset('assets/images/categories')}}/{{$scategory->image}}" alt="{{$scategory->name}}"></a></i>
              <h5>{{$scategory->name}}</h5>
            </div>
            @endforeach
        </div>
    </div>
</div>
