@extends('admin.master')

@section('content')
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-body">
                    @if(!empty(Session::get('success')))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(!empty(Session::get('fail')))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    <section id="cart_items">
                        <div class="container">
                            <div class="breadcrumbs">
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Shopping Cart</li>
                                </ol>
                            </div>
                            <div class="table-responsive cart_info">
                                <table class="table table-condensed">
                                    <thead>
                                        <tr class="cart_menu">
                                            <td class="image">Item</td>
                                            <td class="name">Product</td>
                                            <td class="price">Unit Price</td>
                                            <td class="quantity">Quantity</td>
                                            <td class="total">Total Price</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $product)
                                        <tr class="product-row" data-product-id="{{ $product->id }}">
                                            <td class="cart_product">
                                                <a href=""><img src="{{ asset('product/images/'. $product->image) }}" width="100px;" height="100px;"></a>
                                            </td>
                                            <td>
                                                <h4><a href="">{{ $product->product_name }}</a></h4>
                                            </td>
                                            <td class="cart_price">
                                                <p class="unit-price">${{ $product->price }}</p>
                                            </td>
                                            <td class="cart_quantity">
                                                <div class="cart_quantity_button">
                                                    <a class="cart_quantity_up" href="#"><i class="fas fa-plus"></i></a>
                                                    <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                                    <a class="cart_quantity_down" href="#"><i class="fas fa-minus"></i></a>
                                                </div>
                                            </td>
                                            <td class="cart_total">
                                                <p class="cart_total_price">${{ $product->price }}</p>
                                            </td>
                                            <td class="cart_delete">
                                                <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section> <!--/#cart_items-->

                    <section id="do_action">
                        <div class="container">
                            <div class="heading">
                                <h3>What would you like to do next?</h3>
                                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                            </div>
                            <div class="row">
                              <div class="col-sm-6 col-sm-offset-6"> <!-- Move to the right side -->
                                  <div class="total_area" style="border: 1px solid #ddd; padding: 15px;"> <!-- Add a border and padding -->
                                      <form action="/update-cart" method="post"> <!-- Specify the correct action URL -->
                                          @csrf <!-- Include a CSRF token for security, assuming you're using Laravel -->
                                          <ul>
                                              <li>Cart Sub Total <span id="cart-subtotal" class="text-primary">$0.00</span></li>
                                              <li>Eco Tax <span class="text-success">$2.00</span></li>
                                              <li>Shipping Cost <span class="text-info">Free</span></li>
                                              <li>Total <span id="cart-total" class="text-danger">$0.00</span></li>
                                          </ul>
                                          <a class="btn btn-primary update" href="#">Update Cart</a>
                                          <button type="submit" class="btn btn-success check_out">Check Out</button> <!-- Use a button instead of an anchor for form submission -->
                                      </form>
                                  </div>
                              </div>
                          </div>


                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection