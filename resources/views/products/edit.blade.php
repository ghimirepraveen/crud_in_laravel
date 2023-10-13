 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
 </head>
 <body>
    <h1>Edit a product</h1>
    {{-- <div>
        @if(session()->has('success'))
  <div>

    {{session('success')}}
  </div>
  @endif  
 
    </div> --}}
    <div>

        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        
    </div>
    <form method="post" action="{{route('product.update',['product'=>$product])}}">
       @csrf
       @method('put') 
<div>
    <label>Name:</label>
    <input type="text" name="name" placeholder="FUll Name" value="{{$product->name}}">
</div>

<div>
    <label>QTY:</label>
    <input type="text" name="qty" placeholder="Quantity" value="{{$product->qty}}">
</div>

<div>
    <label>Price:</label>
    <input type="text" name="price" placeholder="PRICE" value="{{$product->price}}">
</div>

<div>
    <label>Description</label>
    <input type="text" name="description" placeholder="DESCRIPTION" value="{{$product->description}}">
</div>
<div>
    <input type="submit" value="Update">
  </div>
    </form>
 </body>
 </html>