@extends('layouts.dealer')

@section('content')



<div class="page-wrapper">
            <div class="content container-fluid">
            <div class="card-box">

    <div class="container">
       
        <h1>Your Wishlist</h1>

        <hr>

        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif

        @if (sizeof(Cart::instance('wishlist')->content()) > 0)

            <table class="table">
                <thead>
                <tr>
                    <th class="table-image"></th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th class="column-spacer"></th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                @foreach (Cart::instance('wishlist')->content() as $item)
                    <tr>
                    <td class="table-image"><img src="../uploads/Products/{{ $item->model->image }}" alt="product" height="80" width="80" class="img-responsive cart-image"></td>
                        <td>{{ $item->name }}</td>
                        <td>
                        {!! Form::open(['route' => ['cart.update',$item->rowId], 'method' => 'PUT']) !!}
                            <select class="quantity" name="quantity" value="{{$item->quantity}}">
                                <option {{ $item->quantity == 1 ? 'selected' : '' }}>1</option>
                                <option {{ $item->quantity == 2 ? 'selected' : '' }}>2</option>
                                <option {{ $item->quantity == 3 ? 'selected' : '' }}>3</option>
                                <option {{ $item->quantity == 4 ? 'selected' : '' }}>4</option>
                                <option {{ $item->quantity == 5 ? 'selected' : '' }}>5</option>

             
                            </select>
                            <input style="float: right"  type="submit" class="btn btn-primary btn-sm" value="Update">
                                      {!! Form::close() !!}
                        </td>
                        <td>₦{{ $item->subtotal }}</td>
                        <td class=""></td>
                        <td>
                            <form action="{{ url('wishlist', [$item->rowId]) }}" method="POST" class="side-by-side">
                                {!! csrf_field() !!}
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" class="btn btn-danger btn-sm" value="Remove">
                            </form>

                           <form action="{{ url('switchToCart', [$item->rowId]) }}" method="POST" class="side-by-side">
                                {!! csrf_field() !!}
                                <input type="submit" class="btn btn-success btn-sm" value="To Cart">
                            </form>
                        </td>
                    </tr>

                @endforeach
               


                </tbody>
            </table>

            <a href="/user/categories" class="btn btn-primary btn-lg">Continue Shopping</a> &nbsp;
            

            <form method="post" role="form" class="col-md-6" action="">
        <div class="form-group">
    
                    <input type="hidden" name="email"   value="{{ Auth::user()->email }}" >
    
                    {{ csrf_field() }}

<input type="hidden" name="user_id"  value="{{ Auth::user()->id }}" >
        <p>
        <button class="btn btn-primary btn-lg" type="submit" value="Pay Now!">
        <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
        </button>
        </p>
 </form>



       

         <a href="javascript:void">
                <form action="{{ url('/emptyCart') }}" method="POST">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" class="btn btn-danger btn-small" value="Empty Cart">
                </form>
            </a> 


        @else

            <h3>You have no items in your shopping cart</h3>
            <a href="{{ url('/categoryView') }}" class="btn btn-primary btn-lg">Continue Shopping</a>

        @endif

       

    </div> <!-- end container -->

    </div>
     </div>
</div>

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