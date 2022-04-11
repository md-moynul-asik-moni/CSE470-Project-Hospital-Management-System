

<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
   
      <!--sidebar-->
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')


        <!-- partial -->
    	<div class="container-fluid page-body-wrapper">

    		<div align="center" style="padding:100px">
    			<table>
    				
    				<tr align="center" style="background-color:#04AD4E;">
    					<th style="padding:10px">Patient Name</th>
    					<th style="padding:10px">Email</th>
    					<th style="padding:10px">Phone</th>
    					<th style="padding:10px">Doctor Name</th>
    					<th style="padding:10px">Date</th>
    					<th style="padding:10px">Message</th>
    					<th style="padding:10px">Staus</th>
              <th style="padding:10px">Approve</th>
              <th style="padding:10px">Cancel</th>
              <th style="padding:10px">Send Mail</th>

    				</tr>
            @foreach($data as $appoint)
            <tr align="center" style="background-color:#5C6B63;">
              <td>{{$appoint->name}}</td>
              <td>{{$appoint->email}}</td>
              <td>{{$appoint->phone}}</td>
              <td>{{$appoint->doctor}}</td>
              <td>{{$appoint->date}}</td>
              <td>{{$appoint->message}}</td>
              <td>{{$appoint->status}}</td>
              <td><a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approve</a></td>
              <td><a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Cancel</a></td>
               <td><a class="btn btn-primary" href="{{url('emailview',$appoint->id)}}">Send Mail</a></td>
            </tr>

            @endforeach
    			</table>


    		</div>

    	</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>