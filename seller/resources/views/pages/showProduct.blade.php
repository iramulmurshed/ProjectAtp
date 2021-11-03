
@foreach($products as $product)
    <a href="/view_single_product/{{$product->p_id}}">view single product</a>

    {{$product->p_id}} <br>
    {{$product->p_name}} <br>
    {{$product->p_type}} <br>
    {{$product->p_des}} <br>
    {{$product->p_price}} <br>
    {{$product->p_status}} <br> <br> <br>

@endforeach
