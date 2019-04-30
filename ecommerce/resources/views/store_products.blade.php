@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Store Product</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="alert" id="message" style="display: none"></div>
                    <form method="post" id="upload_form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                        <table class="table">
                        <tr>
                            <td width="40%" align="right"><label>Product</label></td>
                            <td width="30"><input type="text" name="product_name" id="product" value="" /></td>
                        
                        </tr>
                        <tr>
                                <td width="40%" align="right"><label>Brand</label></td>
                                <td width="30"><input type="text" name="brand" id="brand" value="" /></td>
                            
                        </tr>
                        <tr>
                                <td width="40%" align="right"><label>Quantity</label></td>
                                <td width="30"><input type="number" name="quantity" id="quantity" value="" /></td>
                            
                        </tr>
                        <tr>
                        <td width="40%" align="right"><label>Select Product Image</label></td>
                        <td width="30"><input type="file" name="image"  id="select_file" /></td>
                        </tr>
                        <tr>
                            <td width="30%" align="right"><input type="submit" name="upload" id="upload" class="btn btn-primary" value="Save"></td>
                        </tr>
                        </table>
                        </div>
                    </form>




                    



                </div>
            </div>
        </div>
    </div>
</div>



@endsection
