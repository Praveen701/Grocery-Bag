@extends('layouts.app')

@section('content')


<div class="container mt-5">
    <h1>Add Grocery List</h1>
    <form action="/additem" method="POST">
        @csrf
        <div class="form-group">
            <label>Item name</label>
         
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Enter Item Name">
            @if($errors->has('name'))
                <small id="name" class="form-text text-danger">Enter Item Name</small>
            @endif
        </div>
        <div class="form-group">
            <label>Item quantity</label>
            <input type="text" class="form-control" id="quantity" name="quantity" value="{{old('quantity')}}" placeholder="Enter Item Quantity">
            @if($errors->has('quantity'))
                <small id="quantity" class="form-text text-danger">Enter Item Quantity</small>
            @endif
        </div>
        <div class="form-group">
            <label>Item status</label>
            <select value="" id="status" name="status" class="form-control">
                <option @if(old('status')=='0') selected @endif value="0" selected>Pending</option>
                  <option @if(old('status')=='1') selected @endif value="1">Bought</option>
                  <option @if(old('status')=='2') selected @endif value="2">Not Available</option>
             </select>
              @if($errors->has('status'))
                  <small id="status" class="form-text text-danger">Select Country</small>
              @endif
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control" id="date" name="date" value="{{old('date')}}" placeholder="Enter Date">
            @if($errors->has('date'))
                <small id="date" class="form-text text-danger">Enter Date</small>
            @endif
        </div>
        <div class="form-group">
            <input type="submit" value="Add" class="btn btn-danger">
        </div>
    </form>
</div>

@endsection