@extends('layouts.app')

@section('content')
<div class="container">

   <h2 class="mb-4">商品一覧画面</h2>

   

  <div class="products mt-5">
   
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>iD</th>
                    <th>商品名</th>
                    <th>メーカー</th>
                    <th>価格</th>
                    <th>在庫数</th>
                    <th>コメント</th>
                    <th>商品画像</th>
                    <th><a href="{{ route('testcreates') }}" class="btn btn-primary mb-1">新規登録</a></th>
                </tr>
            </thead>

            <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->company->company_name??''}}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->comment }}</td>
                    <td><img src="{{ asset($product->img_path) }}" alt="商品画像" width="100"></td>
                    </td>
                    <td>
                        <a href="{{ route('testshow', $product) }}" class="btn btn-info btn-sm mx-1">詳細</a>
                        <form method="POST" action="{{ route('testdestroy', $product) }}" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm mx-1">削除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
   
   
         </table>
   </div>
   {{ $products->links() }} 
</div>
@endsection
