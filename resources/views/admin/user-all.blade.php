@include('admin.layout.header')
<!--== MAIN CONTRAINER ==-->

<body>
    @include('admin.layout.left_sidebar')
    <div class="sb2-2">
        <div class="sb2-2-2">
            <ul>
                <li><a href="{{route('admin.index')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Ui Form</a>
                </li>
            </ul>
        </div>
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>All User</h4>
                           @if(session('message'))
                            <div class="alert alert-danger">
<strong>{{(session('message'))}}</strong>
                           </div>
                           @endif
                            <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i
                                    class="material-icons">more_vert</i></a>
                            <ul id="dr-users" class="dropdown-content">
                                <li><a href="user-add.html">Add New</a>
                                </li>
                                <li><a href="user-edit.html">Edit</a>
                                </li>
                                <li><a href="#!">Update</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                </li>
                                <li><a href="user-view.html"><i class="material-icons">subject</i>View All</a>
                                </li>
                            </ul>

                            <!-- Dropdown Structure -->

                        </div>
                        <div class="tab-inn">
                            <div class="table-responsive table-desi">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>S.no</th>
                                            <th>User</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $index=>$user)
                                        <tr>
                                            <td>{{$index+1}}</td>
                                            <td><span class="list-img"><img
                                                        src="admin/images/sm/{{$user->user_image}}" alt=""></span>
                                            </td>
                                            <td><a href="#"><span class="list-enq-name">{{ $user->user_name}}</span></a>
                                            </td>
                                            <td>{{$user->user_email}}</td>

                                            <td>
    <div class="switch mar-bot-20">
        <label>
            Off
            <input type="checkbox" class="status-toggle" data-id="{{ $user->id }}" name="status" value="1" {{ $user->status == 1 ? 'checked' : '' }}>
            <span class="lever"></span> On
        </label>
    </div>
</td>



                                            <td>
                                                <a href="{{route('user-edit', $user->id)}}"><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            </td>
                                            <td>
                                                <a href="{{route('deletename', $user->id)}}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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
    <script>
    var csrfToken = '{{ csrf_token() }}';
    var updateuser = '{{route("updateuserstatus")}}';
</script>
    <script src="{{asset('admin/js/user_status.js')}}"></script>
</body>

</html>