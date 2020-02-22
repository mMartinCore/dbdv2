@extends('layouts.app')

@section('content')
<style>
.container{
  font-family: sans-serif;
}
 
</style>
<div class="container">

    <br>

    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header"><h3>Online Users</h3></div>

                <div class="card-body">
  <img src="/dist/img/useronline.jpg" class="user-image" width="100%" height="50%" alt="User Image">
  <table class="table table-bordered hover stripe ">
    <thead  style=" width:100%;border-collapse:collapse;background-color:#3c8dbc; font-size:small; color:white" >
        <tr style="text-align:center" >
                                <th>Name</th>
                                <th>Division</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr  style="color:black; background:white;" >
                                     <td>{{ $user->firstName.' '. $user->lastName }}</td>
                                     <td>{{ $user->station->division->division }}</td>
                                     <td>{{ $user->email }}</td>
                                     <td>
                                         @if ($user->isOnline())
                                             <li class="text-success">
                                                    <small class="label label-success"><i class="fa fa-clock-o"></i> Online</small>
                                             </li>
                                         @else
                                             <li class="text-danger">

                                                <small class="label label-danger"> </i> Offline</small>
                                            </li>
                                         @endif
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
<script>

       /// $(document).ready(function(){




        //             // DataTable
        //         var dtable = $('.table').DataTable({
        //             "lengthMenu": [[  5,6,7,8,9,10, 25, 50,100, -1], [  5,6,7,8,9,10, 25, 50,100, "All"]],
        //              "sDom":"ltipr",
        // "columnDefs": [
        //   { "orderable": false, "targets":0},
        //   { "orderable": false, "targets": 1},



        // ]});




        // });
         </script>  
         <br><br><br>

@endsection

