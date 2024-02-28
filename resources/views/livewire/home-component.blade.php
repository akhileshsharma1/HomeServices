<div>
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
                <p>To become part of our community, please sign up  using personal information</p>
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
</div>

   