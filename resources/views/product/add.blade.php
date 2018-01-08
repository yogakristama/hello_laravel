@extends ('layout2')

@section ('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">

    <h1>Add Product</h1>

    <!-- jika error di tulis diatas -->
    <!-- @if ($errors->any())
        <div class ="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
        <li> {{$error}} </li>
        @endforeach
        </ul>
        </div>
    @endif -->

    @if($success)
        <div class="alert alert-success" role="alert"> data succesfully saved.</div>
    @endif
            <form class ="form" method="POST">
                <div class="form-group">
                    <label for="product_name">Product Name</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name">
                
                @if ($errors->first('product_name'))
                    <div class="alert alert-danger">
                        <p>{{$errors->first('product_name')}}</p>
                    </div>
                    @endif

                </div>
                <div class="form-group">
                    <label for="product_price">Product Price</label>
                    <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Product Price">
                    
                    @if ($errors->first('product_price'))
                    <div class="alert alert-danger">
                        <p>{{$errors->first('product_price')}}</p>
                    </div>
                    @endif
                
                </div>
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <input type="text" class="form-control" id="rating" name="rating" placeholder="Rating">
                
                    @if ($errors->first('rating'))
                    <div class="alert alert-danger">
                        <p>{{$errors->first('rating')}}</p>
                    </div>
                    @endif

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-small">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>    
@endsection
