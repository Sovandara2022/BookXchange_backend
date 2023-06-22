
@extends('layout.master')

@section('dyncontent')

{{-- <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" /> --}}

{{-- @push('styles')
    
    <link href="{{ asset('.css') }}" rel="stylesheet">
@endpush --}}
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<style>
    


button {
  padding: 10px;
  background-color: #f00;
  color: #fff;
  border: none;
  cursor: pointer;
}


 </style>

    <body class="sb-nav-fixed">

        
                    <div class="crud">
                        <div class="container-xl">
                            <div class="table-responsive">
                                <div class="table-wrapper">
                                    <div class="table-title">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h2>TOTAL<b>Users</b></h2> 
                                                
                                            </div>
                                            <div class="col-sm-6">
                                               
                                                <!-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						 -->
                                            </div>
                                        </div>
                                    </div>
                                   
                        
                                    
                                    <table class="table table-striped table-hover">
    <thead>
        <tr>
            <th> </th>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
         
            
       
    



        </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
            <tr>
                <td class="book-row" >
                <img src="data:image/png;base64,{{ base64_encode($user->image) }}" alt="Image" width="120" height="120" style="border-radius:50%;">
   </td>
                <td class="book-row" >{{ $user->user_id }}</td>
                <td class="book-row" >{{ $user->name }}</td>
                <td class="book-row" >{{ $user->email }}</td>
                <td class="book-row" >{{ $user->phone }}</td>
                <td class="book-row">
    
                <a href='{{ route("name.detail", ["user_id" => $user->user_id]) }}' class="btn btn-info btn-sm">Detail</a>

</td>
            </tr>
        @endforeach
    </tbody>
</table>

                                    
                                    
                                    
                                    
                                    <div class="clearfix">
                                        <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                                          <ul class="pagination">
                                            <li class="page-item disabled"><a href="#">Previous</a></li>
                                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                                            <li class="page-item"><a href="#" class="page-link">4</a></li>
                                            <li class="page-item"><a href="#" class="page-link">5</a></li>
                                            <li class="page-item"><a href="#" class="page-link">Next</a></li>
                                           </ul>
                                        </div>
                                  </div>
                           



                                  </div>


<a href="{{ route('user.index') }}" class="btn btn-primary">Back</a>
</div>





        <footer>
            @include('layout.footer')
            {{-- footer --}}
        </footer>
       
    </body>
