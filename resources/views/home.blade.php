@extends('layouts.app');

<title>User Page</title>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            
            <div class="row">
                <a class="btn btn-primary" href="{{route('bill',['download'=>'pdf'])}}">Download PDF</a>
                @foreach ($productsView as $item)
                    <div class="col-4">
                        <form action="{{ route('orders.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="product_id" placeholder="" value="{{ $item->id }}">
                            <div class="card p-2">
                                <h4> ชื่อสินค้า : {{ $item->name }}</h4>
                                <p>ราคา : {{ $item->price }}</p>
                                <p>สินค้าคงเหลือ : {{ $item->number }}</p>
                                <button class="btn btn-success" type="submit">เพิ่มไปตะกร้า</button>
                            </div>
                            
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


@endsection
