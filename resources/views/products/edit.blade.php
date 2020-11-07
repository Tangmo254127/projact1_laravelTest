@extends('products.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb ">
                <h2>แก้ไขข้อมูล</h2>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ลำดับ:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ราคา:</strong>
                    <input type="text" name="price" value="{{ $product->price }}" class="form-control" placeholder="Name">
                </div>
            </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>หน่วยนับ:</strong>
                    <input type="text" name="count" value="{{ $product->count }}" class="form-control" placeholder="Name">
                </div>
            </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>รหัสคลังสินค้า:</strong>
                    <input type="text" name="product" value="{{ $product->product }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>รหัสผู้ผลิต:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>

    </form>
@endsection
