                       
@extends('layouts.dealer')
 
 @section('title', 'Cart')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

 @section('content')
  
 @if (sizeof(Cart::content()) > 0)

<table class="table">
    <thead>
    <tr>
        <th class="table-image"></th>
        <th>Product</th>
        <th>Quantity</th>
        <th>Price</th>
        <th class="column-spacer"></th>
        <th></th>
    </tr>
    </thead>

    <tbody>
    @foreach (Cart::content() as $item)
        <tr>
            <td class="table-image"><a href="{{ url('/productsView', [$item->model->slug]) }}"><img src="{{ url('/../uploads/Products', [$item->model->image]) }}" alt="product" class="img-responsive cart-image" height="100" width="100"></a></td>
            <td><a href="{{ url('/productsView', [$item->model->slug]) }}">{{ $item->name }}</a></td>
            <td>
                <select class="quantity" data-id="{{ $item->rowId }}" >
                    <option {{ $item->qty == 1 ? 'selected' : '' }}>1</option>
                    <option {{ $item->qty == 2 ? 'selected' : '' }}>2</option>
                    <option {{ $item->qty == 3 ? 'selected' : '' }}>3</option>
                    <option {{ $item->qty == 4 ? 'selected' : '' }}>4</option>
                    <option {{ $item->qty == 5 ? 'selected' : '' }}>5</option>
               
            </td>
            <td>₦{{ $item->subtotal }}</td>
            <td class=""></td>
            <td>
                <form action="{{ url('cart', [$item->rowId]) }}" method="POST" class="side-by-side">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" class="btn btn-danger btn-sm" value="Remove">
                </form>

                <form action="{{ url('switchToWishlist', [$item->rowId]) }}" method="POST" class="side-by-side">
                    {!! csrf_field() !!}
                    <input type="submit" class="btn btn-success btn-sm" value="To Wishlist">
                </form>
            </td>
        </tr>

    @endforeach
    <tr>
        <td class="table-image"></td>
        <td></td>
        <td class="small-caps table-bg" style="text-align: right">Subtotal</td>
        <td>₦{{ Cart::instance('default')->subtotal() }}</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td class="table-image"></td>
        <td></td>
        <td class="small-caps table-bg" style="text-align: right">Tax</td>
        <td>₦{{ Cart::instance('default')->tax() }}</td>
        <td></td>
        <td></td>
    </tr>

    <tr class="border-bottom">
        <td class="table-image"></td>
        <td style="padding: 40px;"></td>
        <td class="small-caps table-bg" style="text-align: right">Your Total</td>
        <td class="table-bg">₦{{ Cart::total() }}</td>
        <td class="column-spacer"></td>
        <td></td>
    </tr>

    </tbody>
</table>

<a href="{{ url('user/categories') }}" class="btn btn-primary btn-lg">Continue Shopping</a> &nbsp;
<form method="post" role="form" class="col-md-6" action="{{ route('qrcodes.show_payment_page') }}">
                                    @if(Auth::guest())
                                {{-- Only logged out users get to see an email field --}}
                                    <label for="email"> Enter your email </label>
                                        <input type="email" name="email" required id="email" class="form-control"  placeholder="johndoe@gmail.com" >
                                    </div>

                                    @else 
                                    <input type="hidden" name="email"   value="{{ Auth::user()->email }}" >
                                    @endif
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                         <input type="hidden" name="name" value="{{ $item->name }}">  
                                         <input type="hidden" name="amount" value="{{ Cart::total() }}">
                                    {{ csrf_field() }}

                                    <form action="{{ url('/cart') }}" method="POST" class="side-by-side">
                   
	
                                    
                                    <button class="btn btn-success btn-lg" type="submit" value="Pay Now!">
                                    Proceed to Checkout
                                    </button>
                                        
                                </form>




<div style="float:right">
    <form action="{{ url('/emptyCart') }}" method="POST">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" class="btn btn-danger btn-lg" value="Empty Cart">
    </form>
</div>


@else

<h3>You have no items in your shopping cart</h3>
<a href="{{ url('/shop') }}" class="btn btn-primary btn-lg">Continue Shopping</a>

@endif

<div class="spacer"></div>

</div> <!-- end container -->

@endsection

@section('extra-js')
<script>
(function(){

₦.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': ₦('meta[name="csrf-token"]').attr('content')
    }
});

₦('.quantity').on('change', function() {
    var id = ₦(this).attr('data-id')
    ₦.ajax({
        type: "PATCH",
        url: '{{ url("/cart") }}' + '/' + id,
        data: {
            'quantity': this.value,
        },
        success: function(data) {
            window.location.href = '{{ url('/cart') }}';
        }
    });

});

})();

</script>
@endsection
