<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Online Home Services</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('assets/css/service.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/service_cat.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/aboutus.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/contactus.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/admindashboard.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Material Symbols Rounded' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src="{{ asset('assets/js/script1.js') }}" defer></script>
    <script src="{{ asset('assets/js/script2.js') }}" defer></script>
    @livewireStyles
    <style>
        .drop-down {
            /* Hide the dropdown menu by default */
            color: black;
            background: #fff;
            padding: 4px;
            margin: 2px;
        }

        .hide-header {
            display: none;
        }

        /* .one-column li{
            margin:5px;
        }
        .login-btn:hover + .drop-down {
            position:absolute;
            display: block; 
        }
        .Account_admin:hover{
            position:relative;
            display:flex;
            flex-flow : column nowrap;
            justify-content: center;
            background-color:brown;
            
        } */
        .form-content {
            display: block;
        }
    </style>
</head>

<body>
    <header id="header1" class="header1">
        <div class="blur-bg-overlay"></div>
        <div class="form-popup">
            <span class="close-btn material-symbols-rounded">close</span>
            <div class="form-box login">
                <div class="form-details">
                    <h2>Welcome Back</h2>
                    <p>Please log in using your personal information to stay connected with us.</p>
                </div>
                <div class="form-content">
                    <h2>LOGIN</h2>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="input-field">
                            <input type="text" name="email" required>
                            <label>Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password" required>
                            <label>Password</label>
                        </div>
                        <a href="#" class="forgot-pass">Forgot Password?</a>
                        <button type="submit">Log In</button>
                    </form>
                    <div class="bottom-link">
                        Don't have an account?
                        <a href="#" id="signup-link">Signup</a>
                    </div>
                </div>
            </div>
            <div class="form-box signup">
                <div class="form-details">
                    <h2>Create Account</h2>
                    <p>To become part of our community, please sign up using personal information</p>
                </div>
                <div class="form-content">
                    <h2>SIGNUP</h2>

                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="input-field">
                            <input type="text" name="name" required>
                            <label>Enter your name</label>
                        </div>
                        <div class="input-field">
                            <input type="email" name="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                            <label>Enter your email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password" required>
                            <label>Create password</label>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password_confirmation" required>
                            <label>Confirm password</label>
                        </div>
                        <div class="input-field">
                            <select name="registeras" id="register" required>
                                <option value="CST">Customer</option>
                                <option value="SVP">Service Provider/Worker</option>
                            </select>
                        </div>
                        <div class="policy-text">
                            <input type="checkbox" id="policy" required>
                            <label for="policy"></label>
                            I agree to the <a href="#"> Terms & Conditions</a>
                        </div>
                        <a href="#" class="forgot-pass">Forgot Password?</a>
                        <button type="submit">Sign Up</button>
                    </form>
                    <div class="bottom-link">
                        Already have an account?
                        <a href="#" id="login-link">Login</a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar">
            <span class="menu-btn material-symbols-rounded">menu</span>
            <a href="#" class="logo">
                <img src="{{ asset('assets/images/logo.png')}}" alt="logo">
                <h2>Online Home Services</h2>
            </a>
            <ul class="links">
                <span class="close-btn material-symbols-rounded">close</span>
                <li><a href="{{route('homepage')}}">Home</a></li>
                <li><a href="{{route('home.service_categories')}}">Services</a></li>
                <li><a href="#">Appliances</a></li>
                <li><a href="{{route('aboutus')}}">About Us</a></li>
                <li><a href="{{route('contactus')}}">Contact Us</a></li>
            </ul>
            </div>


            @if(Route::has('login'))
            @auth
            @if(Auth::user()->utype === 'ADM')
            <div class="Account_admin">


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
    </script>
</body>

</html>