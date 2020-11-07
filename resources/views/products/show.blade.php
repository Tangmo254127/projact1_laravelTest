@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ลำดับ:</strong>
                {{ $product->name }}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ชื่อสินค้า:</strong>
                {{ $product->price }}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ราคา:</strong>
                {{ $product->count }}
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>หน่วยสินค้า:</strong>
                {{ $product->product }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>รหัสคลังสินค้า:</strong>
                {{ $product->count }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ชื่อผู้ผลิต:</strong>
                {{ $product->detail }}
            </div>
        </div>
             
               <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <a class="btn btn-success" href="{{ route('products.index') }}"> Back</a>
            </div>
    </div>
@endsection
