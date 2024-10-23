<!DOCTYPE html>
<html lang="en">
@include('admin.layout.header') 


<body>
@include('admin.layout.left_sidebar') 

            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="{{ route('admin.index') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="{{ route('enquiry.list') }}">All Enquiry</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="box-inn-sp">
                                
                                <div class="inn-title">
                                  
                                    <h4>All Enquiry</h4>
                                    @if (session('success'))
                                        <div class="alert alert-danger">
                                        {{session('success')}}
                                        </div>
                                    @endif
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <ul id="dr-users" class="dropdown-content">
                                        <li><a href="#!">Add New</a>
                                        </li>
                                        <li><a href="#!">Edit</a>
                                        </li>
                                        <li><a href="#!">Update</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                        </li>
                                        <li><a href="#!"><i class="material-icons">subject</i>View All</a>
                                        </li>
                                    </ul>

                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Client Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>City</th>
                                                    <th>State</th>
                                                    <th>Package</th>
                                                    <th>View</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($user as $row)
                                                <tr>
                                                    <td><span class="list-enq-name">{{ $row->name }}</span>
                                                </td>
                                                <td>{{ $row->phone }}</td>
                                                <td>{{ $row->email }}</td>
                                                    <td><a href="#"><span class="list-enq-city">{{ $row->city }}</span></a>
                                                    </td>
                                                    <td>{{ $row->state }}</td>
                                                    <td>{{ $row->package }}</td>
                                                    <td>
                                                        <a href="{{ route('enquiry.view',$row->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('enquiry.edit',$row->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('enquiry.delete',$row->id) }}"><i style="background: #F44336 !important" class="fa fa-trash-o" aria-hidden="true"></i></a>
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

    <!--======== SCRIPT FILES =========-->
    @include('admin.layout.footer')

</body>

</html>