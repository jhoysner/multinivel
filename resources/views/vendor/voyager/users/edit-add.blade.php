@extends('voyager::master')

@section('content')

    <h1 class="page-title">
        <i class="voyager-person"></i> Viewing User ({{$user->id}}) &nbsp;

                <a href="http://project-start.app/admin/users/454/edit" class="btn btn-info">
            <span class="glyphicon glyphicon-pencil"></span>&nbsp;
            Edit
        </a>
                <a href="http://project-start.app/admin/users" class="btn btn-warning">
            <span class="glyphicon glyphicon-list"></span>&nbsp;
            Return to List
        </a>
    </h1>

        <div class="container">

            <div class="row">
                <center>
                    <img class="img-responsive" src="http://project-start.app/storage/users/default.png" style="margin:2em 0em">
                </center>
                <div class="panel">
                        <br>
                        <div class="row">
                            <div class="container">

                                <div class="col-md-4">
                                    <label style="font-size:20px"><b>Name:</b> {{$user->name}} </label>
                                </div>

                                <div class="col-md-4">
                                    <label style="font-size:20px"><b>Middle Name:</b> {{$user->middle_name}} </label>
                                </div>

                                <div class="col-md-4">
                                    <label style="font-size:20px"><b>Last Name:</b> {{$user->last_name}} </label>
                                </div>
                            </div>

                        </div>
                        <br>

                        <div class="row">
                            <div class="container">

                                <div class="col-md-4">
                                    <label style="font-size:20px"><b>Full Name:</b> {{$user->full_name}} </label>
                                </div>

                                <div class="col-md-4">
                                    <label style="font-size:20px"><b>Email:</b> {{$user->email}} </label>
                                </div>

                                <div class="col-md-4">
                                     <label style="font-size:20px"><b>Phone:</b> {{$user->phone_number}} </label>
                                </div>
                            </div>

                        </div>

                        <br>

                        <div class="row">
                            <div class="container">
                                @if ($user->cooperative_level)

                                    <div class="col-md-4">
                                        <label style="font-size:20px"><b>Level:</b> {{$user->cooperative_level->level_name}} </label>
                                    </div>

                                @endif
                                <div class="col-md-4">
                                        <label style="font-size:20px"><b>Sponsor:</b>

                                            @if ($user->sponsor)
                                                <a href="{{url('admin/users/'.$user->sponsor->sponsor_id)}}">{{$user->sponsor->sponsor_id}}</a>
                                            @else
                                                 No Have
                                            @endif

                                        </label>
                                </div>

                            </div>
                        </div>
                        <br>
                        @if ($user->followers->isNotEmpty())
                        <hr>
                        <h2>More Information</h2>

                            <div class="row">
                                <div class="container">
                                  <h4>Followers</h4>
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="container">
                                             <table id="dataTable" class="table table-hover">
                                                 <thead>
                                                     <th>ID</th>
                                                     <th>Name</th>
                                                     <th>Leve</th>
                                                 </thead>
                                                 <tbody>
                                                    @foreach ($user->followers as $follower)
                                                        <tr>
                                                            <td><a href="{{url('admin/users/'.$follower->follower_id)}}">{{$follower->follower_id}} </a></td>
                                                            <td>{{$follower->user_follower->name}}</td>
                                                            <td>{{$follower->user_follower->cooperative_level->level_name}}</td>
                                                        </tr>
                                                    @endforeach
                                                 </tbody>
                                             </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if ($user->exisPaymentFollower($user))

                            <div class="row">
                                <div class="container">
                                  <h4>Payments</h4>
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="container">
                                             <table id="dataTable" class="table table-hover">
                                                 <thead>
                                                     <th>ID</th>
                                                     <th>IdFollower</th>
                                                     <th>Level</th>
                                                     <th>Amount</th>
                                                     <th>Date</th>
                                                 </thead>
                                                 <tbody>
                                                    @foreach ($user->followers as $follower)
                                                        <tr>
                                                            <td>
                                                             {{$follower->payment_sponsor->id}}
                                                            </td>
                                                            <td>
                                                             {{$follower->payment_sponsor->follower_id}}
                                                            </td>
                                                            <td>
                                                             {{$follower->payment_sponsor->cooperative_level->level_name}}
                                                            </td>
                                                            <td>
                                                                {{$follower->payment_sponsor->payment_amount}}
                                                            </td>
                                                            <td>
                                                                {{$follower->payment_sponsor->created_at}}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                 </tbody>
                                             </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                </div>
            </div>


@endsection