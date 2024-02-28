<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Online Home Services</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('assets/css/service.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/service_cat.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Material Symbols Rounded' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('assets/js/script1.js') }}" defer></script>
    @livewireStyles
    <style>
        .drop-down {
            display: none; /* Hide the dropdown menu by default */
            color: black;
            background: #fff;
            padding: 4px;
            margin:2px;
        }
        .one-column li{
            margin:5px;
        }
        .login-btn:hover + .drop-down {
            position:absolute;
            display: block; /* Display the dropdown menu when login-btn is hovered */
        }
        .Account_admin:hover{
            position:relative;
            display:flex;
            flex-flow : column nowrap;
            justify-content: center;
            background-color:brown;
            
        }
        
       
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <span class="menu-btn material-symbols-rounded">menu</span>
            <a href="#" class="logo">
                <img src="{{ asset('assets/images/logo.png')}}" alt="logo">
                <h2>Online Home Services</h2>
            </a>
            <ul class="links">
                <span class="close-btn material-symbols-rounded">close</span>
                <li><a href="./base.blade.php">Home</a></li>
                <li><a href="{{route('home.service_categories')}}">Services</a></li>
                <li><a href="#">Appliances</a></li>
                <li><a href="#">Special Services</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
            @if(Route::has('login'))
              @auth
                  @if(Auth::user()->utype === 'ADM')
                  <div class = "Account_admin">


                      <div class="login-btn" style="list-style: none;">My Account(Admin)
                    </div>
                      
                        

                            <ul class="drop-down one-column" style="list-style: none; position:absolute; top:70%">
                                <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                <li><a href="{{route('admin.service_categories')}}">Service Categories</a></li>
                                <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            </ul>
                            
                
                </div>
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
    {{$slot}}
    @livewireScripts
</body>
</html>
