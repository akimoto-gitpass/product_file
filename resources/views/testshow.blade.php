@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
    <h2 class="mb-4">商品情報詳細画面</h2>
    <div class="card">
    <div class="card-body">

    <dl class="row mt-3" >
        <dt class="col-sm-3">商品情報ID</dt>
        <dd class="col-sm-9">{{ $product->id }}</dd>

        <dt class="col-sm-3">商品画像</dt>
        <dd class="col-sm-9"><img src="{{ asset($product->img_path) }}" width="150"></dd>

        <dt class="col-sm-3">商品名</dt>
        <dd class="col-sm-9">{{ $product->product_name }}</dd>

        <dt class="col-sm-3">メーカー名</dt>
        <dd class="col-sm-9">{{ $product->company->company_name??'' }}</dd>

        <dt class="col-sm-3">価格</dt>
        <dd class="col-sm-9">{{ $product->price }}</dd>

        <dt class="col-sm-3">在庫数</dt>
        <dd class="col-sm-9">{{ $product->stock }}</dd>

        <dt class="col-sm-3">コメント</dt>
        <dd class="col-sm-9">{{ $product->comment }}</dd>

    </dl>
    <a href="{{ route('testedit', $product) }}" class="btn btn-primary mt-1">編集</a>
    <a href="{{ route('home') }}" class="btn btn-primary mt-1">戻る</a>

</div>
</div>
</div>
</div>
</div>
@endsection