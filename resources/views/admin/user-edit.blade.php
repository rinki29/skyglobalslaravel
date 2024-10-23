<!DOCTYPE html>
<html lang="en">

 @include('admin.layout.header') 

<body>
@include('admin.layout.left_sidebar') 
<div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="{{route('user-all')}}"><i class="fa fa-user" aria-hidden="true"></i> All user</a>
                        </li>
                        <li class="active-bre"><a href="{{route('admin.index')}}"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Edit User Details</h4>
                                    @if(session('message'))
                                  
                                    <div class="alert alert-success">
  <strong> {{session('message')}}</strong>
</div>
                                 
                                    @endif
                                </div>
                                <div class="tab-inn">
                                    <form action="{{route('updateuser')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{$user->id }}" name="id">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="first_name" type="text" value="{{$user->user_name }}" class="validate" name="username">
                                                <label for="first_name">User Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="last_name" type="text" value="{{$user->user_email }}" class="validate" name="user_email">
                                                <label for="last_name">User Email</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="pws" type="password" value="" class="validate" name="password">
                                                <label for="phone">Update Password</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="status" type="text" value="{{$user->status }}" class="validate" name="user_status">
                                                <label for="cphone">Status</label>
                                            </div>
                                        </div>
                                        <div class="file-field input-field">
                                        <div class="btn">
                                            <span>File</span>
                                            <input type="file"  multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Upload user img" value="{{$user->user_image}}" name="user_img">
                                        </div>
                                    </div>
                                   
                                      
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="submit" class="waves-effect waves-light btn-large">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->
    <section>
        <div class="fixed-action-btn vertical">
            <a class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
                </li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
                </li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
                </li>
            </ul>
        </div>
    </section>
    @include('admin.layout.footer')
</body>

</html>