<!DOCTYPE html>
<html lang="en">
@include('admin.layout.header') 

<body>
    <div class="blog-login">
        <div class="blog-login-in">
        @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
        <form action="{{ route('login.user') }}" method="POST">

            @csrf
                <img src="{{asset('admin/images/logo26-06-24.svg')}}" alt=""  style="transform: scale(1.5);"/>
                @if(session('success_message'))
    <div class="alert alert-success">
        {{ session('success_message') }}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif



                <div class="row">
                @error('email')
               <span class="text-danger">{{$message}}</span>
                    @enderror
                    <div class="input-field col s12">
                        <input id="first_name1" type="email" class="validate" name="email" placeholder="Enter user email">
                        <!-- <label for="first_name1">Email Address</label> -->
                    </div>
                 
                </div>
                <div class="row">
                @error('pws')
               <span class="text-danger">{{$message}}</span>
                    @enderror
                    <div class="input-field col s12">
                        <input id="last_name" type="password" class="validate" name="password" placeholder="Password">
                        <!-- <label for="last_name">Password</label> -->
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                        <button type="submit" class="waves-effect waves-light btn-large btn-log-in">Sign in</button>
                    </div>
                    
                </div>
                <a href="forgot.html" class="for-pass">Forgot Password?</a>
            </form>
        </div>
    </div>
@include('admin.layout.footer')
</body>

</html>