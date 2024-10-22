<!DOCTYPE html>
<html lang="en">
@include('admin.layout.header') 

<body>
    <div class="blog-login">
        <div class="blog-login-in">
        <form action="{{ route('register') }}" method="POST">

            @csrf
                <img src="{{asset('admin/images/logo26-06-24.svg')}}" alt=""  style="transform: scale(1.5);"/>
                <div class="row">
                @error('username')
               <span class="text-danger">{{$message}}</span>
                    @enderror
                    <div class="input-field col s12">
                        <input id="first_name1" type="text" class="validate" name="username" placeholder="User Name" value="{{ old('username') }}">
                    </div>
                  
                </div>
                <div class="row">
                @error('email')
               <span class="text-danger">{{$message}}</span>
                    @enderror
                    <div class="input-field col s12">
                        <input id="first_name1" type="email" class="validate" name="email" placeholder="Email Address" value="{{ old('email') }}">
                        <!-- <label for="first_name1">Email Address</label> -->
                    </div>
                 
                </div>
                <div class="row">
                @error('pws')
               <span class="text-danger">{{$message}}</span>
                    @enderror
                    <div class="input-field col s12">
                        <input id="last_name" type="password" class="validate" name="pws" placeholder="Password">
                        <!-- <label for="last_name">Password</label> -->
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <button type="submit" class="waves-effect waves-light btn-large btn-log-in">Register</button>
                    </div>
                </div>
                <a href="forgot.html" class="for-pass">Forgot Password?</a>
            </form>
        </div>
    </div>
@include('admin.layout.footer')
</body>

</html>