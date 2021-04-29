@extends('layouts.app')

@section('content')
<body>
<div class="container">
   
    <div class="container mt-5">
        <!-- top -->
        <div class="row">
            <div class="col-lg-6">
                <h1>View Grocery List</h1>
            </div>
        
            <div class="col-lg-6 float-right">
                <form action="/home" method="GET">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Date Filtering-->
                        <input type="date" value="{{ request()->get('date') }}" name="date" class="form-control">
                    </div>
                    <div class="col-lg-4">
                        <input type="submit" class="btn btn-danger mr-2" value="filter">
                        <a href="/home" class="btn btn-secondary" >Reset</a>
                    </div>
                </div>
            </form>
            </div>
         
        </div>
        <a href="/additem" class="btn btn-primary mt-2" >Add Item</a>
        <!-- // top -->
        <!-- Grocery Cards -->
        <div class="row mt-4">
            <!--- -->
           
            @if($data->count()>0)
           @foreach ($data as $row)
               
          
            <!-- Loop This -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{$row->name}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{$row->quantity}} Pcs.</h6>
                        @if ($row->status==0)
                        <p class="text-secondary"><b>PENDING</b></p>
                        @elseif($row->status==1)
                        <p class="text-success"><b>BOUGHT</b></p>
                        @else
                        <p class="text-danger"><b>NOT AVAILABLE</b></p>
                        @endif
                
                      <div class="row mt-3">
                        <div class="col-6"> <a href="/edititem/{{$row->id}}" class="btn btn-outline-info" >Update</a></div>
                        <div class="col-6"> <a href="/delete/{{$row->id}}" class="btn btn-outline-danger" >Delete</a></div>
                      </div>
                    </div>
               
                  </div>
            </div>
            @endforeach
            <!-- // Loop -->
        @else
        <p class="text-danger"><b>Sorry no data found</b></p>
        @endif

          

        </div>
    </div>

</div>
</body>
@endsection
