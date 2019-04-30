@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
           
               
                <h2>All supplier products</h2>
               
                    <div class="row">
                    @foreach ($products as $product)
                    &nbsp;
                    <div class="card">
                    <div class="card-header" style="text-align:center">{{$product->name}}</div>
                    <div class="card-body"><img src="/images/{{$product->image}}" width="200px" height="200px"></div> 
                    <div class="card-footer" style="text-align:center">{{$product->brand}} (Quantity: {{$product->quantity}} )</div>
                    </div>
                    
                    
                    @endforeach
                    </div>

                   
                
            
       
    </div>
</div>
@endsection
