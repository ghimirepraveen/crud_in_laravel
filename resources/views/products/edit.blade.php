 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 </head>
 <body>
    <style>
*{
    margin:0px;
}
    body{
        margin:2px;
background:blanchedalmond;

}
input{
    background-color: cornflowerblue;
    border-radius: 4px solid black;
 box-shadow: 5px 5px 10px 2px rgba(0, 0, 0, 0.3);


}
.btn{
    background-color: aquamarine;
margin: 0 100px ;


}
</style>
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
    <label class="col-sm-2 col-form-label">Name:</label>
    <input  type="text" name="name" placeholder="FUll Name" value="{{$product->name}}">
</div>

<div>
    <label class="col-sm-2 col-form-label">QTY:</label>
    <input type="text" name="qty" placeholder="Quantity" value="{{$product->qty}}">
</div>

<div>
    <label class="col-sm-2 col-form-label">Price:</label>
    <input type="text" name="price" placeholder="PRICE" value="{{$product->price}}">
</div>

<div>
    <label class="col-sm-2 col-form-label">Description</label>
    <input type="text" name="description" placeholder="DESCRIPTION" value="{{$product->description}}">
</div>
<div>
    <input class="btn" type="submit" value="Update">
  </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 </body>
 </html>