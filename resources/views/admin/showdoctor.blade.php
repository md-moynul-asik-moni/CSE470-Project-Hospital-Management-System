

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
  		 <div class="container-scroller">
   


      
    	<div class="container-fluid page-body-wrapper">

    		<div align="center" style="padding:100px">
    		<table>
    				
    		<tr align="center" style="background-color:#04AD4E;">
    		 <th style="padding:10px">Doctor Name</th>
    		 <th style="padding:10px">Phone</th>
    		 <th style="padding:10px">Speciality</th>
    		 <th style="padding:10px">Room No</th>
    		 <th style="padding:10px">Image</th>
    		 <th style="padding:10px">Delete</th>
    		  <th style="padding:10px">Update</th>
  
    		</tr>
            @foreach($data as $doctor)
            <tr align="center" style="background-color:#5C6B63;">
              <td>{{$doctor->name}}</td>
        
              <td>{{$doctor->phone}}</td>
              <td>{{$doctor->speciality}}</td>
              <td>{{$doctor->room}}</td>
              
              <td><img height="100" width="100" src="docotorimage/{{$doctor->image}}"></td>
              
              <td><a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>

              <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>
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