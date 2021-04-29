@extends('layouts.app')

@section('content')


<div class="container mt-5">
    <h1>Add Grocery List</h1>
    <form action="/edititem/{{$data->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Item name</label>
         
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')?? $data->name}}" placeholder="Enter Item Name">
            @if($errors->has('name'))
                <small id="name" class="form-text text-danger">Enter Item Name</small>
            @endif
        </div>
        <div class="form-group">
            <label>Item quantity</label>
            <input type="text" class="form-control" id="quantity" name="quantity" value="{{old('quantity')?? $data->quantity}}" placeholder="Enter Item Quantity">
            @if($errors->has('quantity'))
                <small id="quantity" class="form-text text-danger">Enter Item Quantity</small>
            @endif
        </div>
        <div class="form-group">
            <label>Item status</label>
            <select value="" id="status" name="status" class="form-control">
                <option @if($data->status=='0') selected @endif value="0" selected>Pending</option>
                  <option @if($data->status=='1') selected @endif value="1">Bought</option>
                  <option @if($data->status=='2') selected @endif value="2">Not Available</option>
             </select>
              @if($errors->has('status'))
                  <small id="status" class="form-text text-danger">Select Country</small>
              @endif
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control" id="date" name="date" value="{{old('date')?? $data->date}}" placeholder="Enter Date">
            @if($errors->has('date'))
                <small id="date" class="form-text text-danger">Enter Date</small>
            @endif
        </div>
        <div class="form-group">
            <input type="submit" value="Update" class="btn btn-danger">
        </div>
    </form>
</div>

@endsection