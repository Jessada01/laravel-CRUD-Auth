@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <br>
            <a class="btn btn-primary mb-3" href="{{ route('products.create') }}">สร้างสินค้า</a>
            <div class="row">
                @foreach ($productsView as $item)
                    <div class="col-4">
                        <br>
                        <form action="{{ route('orders.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="product_id" placeholder="" value="{{ $item->id }}">
                            <div class="card p-2">
                                <h4> ชื่อสินค้า {{ $item->name }}</h4>
                                <p>ราคา {{ $item->price }}</p>
                                <p>คงเหลือ {{ $item->number }}</p>
                            </div>
                            <a class="btn btn-warning mt-3 " href="{{ route('products.edit', $item->id) }}  ">แก้ไข</a>
                            
                            <td><a href="/delete/{{$item->id}}" Class="btn btn-danger mt-3">ลบ</a></td>

                            
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
