<!DOCTYPE html>
<html lang="en">
@include('admin.layout.header') 

<body>
    <!--== MAIN CONTRAINER ==-->
@include('admin.layout.left_sidebar') 
    
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="{{ route('admin.index') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="{{ route('enquiry.edit',$user->id) }}"> Edit Enquiry</a>
                        </li>
                        <li class="page-back"><a href="index.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-add-blog sb2-2-1">
                    <div class="box-inn-sp">
                        @if (session('success'))
                                <div class="alert alert-success">
                                {{session('success')}}
                                </div>
                            @endif
                        <div class="inn-title">
                            <h4>Edit Enquiry</h4>
                            <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                            
                        </div>
                        <div class="bor">

                            
                            <form method="post" action="{{ route('enquiry.update',$user->id) }}">
                                @csrf
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input name="name" id="list-title" type="text" value="{{ $user->name }}" class="validate">
                                        <label for="list-title">Client Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name="phone" id="list-title" type="text" value="{{ $user->phone }}" class="validate">
                                        <label for="list-title">Phone</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name="email" id="list-title" type="text" value="{{ $user->email }}" class="validate">
                                        <label for="list-title">Email</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name="city" id="list-title" type="text" value="{{ $user->city }}" class="validate">
                                        <label for="list-title">City</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name="state" id="list-title" type="text" value="{{ $user->state }}" class="validate">
                                        <label for="list-title">State</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name="package" id="list-title" type="text" value="{{ $user->package }}" class="validate">
                                        <label for="list-title">package</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name="booking_date" id="list-title" type="text" value="{{ date("d-m-Y", strtotime($user->booking_date)) }}" class="validate">
                                        <label for="list-title">Booking Date</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name="fromdate" id="list-title" type="text" value="{{ date("d-m-Y", strtotime($user->fromdate)) }}" class="validate">
                                        <label for="list-title">From Date</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name="todate" id="list-title" type="text" value="{{ date("d-m-Y", strtotime($user->todate)) }}" class="validate">
                                        <label for="list-title">To Date</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name="noadults" id="list-title" type="text" value="{{ $user->noadults }}" class="validate">
                                        <label for="list-title">Number of Adults</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input name="nochildren" id="list-title" type="text" value="{{ $user->nochildren }}" class="validate">
                                        <label for="list-title">Number of children</label>
                                    </div>
                                    <div class="input-field col s6">
                                    <select name="status">
                                                <option value="" disabled selected>Choose your option</option>
                                                <option {{ ($user->status == 'In Progress') ? 'selected' : '' }} value="In Progress">In Progress</option>
                                                <option {{ ($user->status == 'Cancelled') ? 'selected' : '' }} value="Cancelled">Cancelled</option>
                                                <option {{ ($user->status == 'Finalized') ? 'selected' : '' }} value="Finalized">Finalized</option>
                                            </select>
                                            <label>Status</label>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" class="waves-effect waves-light btn-large" value="Submit">
                                    </div>
                                </div>
                            </form>
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