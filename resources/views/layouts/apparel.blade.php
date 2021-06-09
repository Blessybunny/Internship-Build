@extends('layouts.master')

@section('title')
    {{ $apparel->name }}
@endsection

@section('content')

    <!-- MAIN CONTENT -->
    <div class = "main section">
        <div class = "container">
            
            <!-- Header -->
            <div class = "row">
                <div class = "col">
                    <h3>APPARELS</h3>
                    <hr/>
                </div>
            </div>
            
            <!-- Properties -->
            <div class = "properties row">
                <div class = "col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <img src = "{{ asset($apparel->img_url) }}"/>
                </div>
                <div class = "col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <h3>{{ $apparel->name }}</h3>
                    <h4>PHP {{ $apparel->price }}</h4>
                    <h6>{{ $apparel->sold }} Sold</h6>
                    <hr/>
                    <p>Shipping calculated at checkout.</p>
                    <br/>
                    <br/>
                    <button type = "button" class=  "btn btn-primary" data-toggle = "modal" data-target = "#sizeChartModal">
                        <i class = "material-icons">bar_chart</i> Size Chart
                    </button>
                    @if ($apparel->type === "shirt")
                        @if ($apparel->stock_xs > 0 or $apparel->stock_s > 0 or $apparel->stock_m > 0 or $apparel->stock_l > 0 or $apparel->stock_xl > 0)
                            <form>
                                <table class = "table-custom">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class = "form-group">
                                                    <label for = "">Size</label>
                                                    <select class = "form-control selectpicker" data-style = "btn btn-link" id = "exampleFormControlSelect1" onchange = "displayStock(value)">
                                                        <option value = "" disabled selected>Select Size</option>
                                                        @if ($apparel->stock_xs > 0)
                                                            <option value = "xs">XS</option>
                                                        @endif
                                                        @if ($apparel->stock_s > 0)
                                                            <option value = "s">S</option>
                                                        @endif
                                                        @if ($apparel->stock_m > 0)
                                                            <option value = "m">M</option>
                                                        @endif
                                                        @if ($apparel->stock_l > 0)
                                                            <option value = "l">L</option>
                                                        @endif
                                                        @if ($apparel->stock_xl > 0)
                                                        <option value = "xl">XL</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class = "form-group">
                                                    <label for = "">Quantity</label>
                                                    <input type = "number" class = "form-control" id = "exampleFormControlInput1" placeholder = "Enter Quantity">
                                                </div>
                                            </td>
                                            <td>
                                                <div class = "form-group">
                                                    <label for = "">Remaining Stock</label>
                                                    <br/>
                                                    <p class = "hidden" id = "stock-display-xs">{{ $apparel->stock_xs }}</p>
                                                    <p class = "hidden" id = "stock-display-s">{{ $apparel->stock_s }}</p>
                                                    <p class = "hidden" id = "stock-display-m">{{ $apparel->stock_m }}</p>
                                                    <p class = "hidden" id = "stock-display-l">{{ $apparel->stock_l }}</p>
                                                    <p class = "hidden" id = "stock-display-xl">{{ $apparel->stock_xl }}</p>
                                                </div>
                                            </td>
                                    </tbody>
                                </table>
                            </form>
                            <script>
                                function displayStock (value) {
                                    let ids = [
                                        document.getElementById(`stock-display-xs`),
                                        document.getElementById(`stock-display-s`),
                                        document.getElementById(`stock-display-m`),
                                        document.getElementById(`stock-display-l`),
                                        document.getElementById(`stock-display-xl`)
                                    ];
                                    for (let i = 0, ii = ids.length; i < ii; i++) {
                                        ids[i].className = `hidden`;
                                    }
                                    switch (value) {
                                        case `xs`: ids[0].className = `visible`; break;
                                        case `s`: ids[1].className = `visible`; break;
                                        case `m`: ids[2].className = `visible`; break;
                                        case `l`: ids[3].className = `visible`; break;
                                        case `xl`: ids[4].className = `visible`; break;
                                    }
                                }
                            </script>
                        @else
                            <h4>This product is sold out.</h4>
                            <script>
                                window.onload = () => {
                                    document.getElementById(`button-container`).innerHTML = null;
                                };
                            </script>
                        @endif
                    @endif
                    @if ($apparel->type === "accessory")
                        @if ($apparel->stock_universal > 0)
                            <form>
                                <table class = "table-custom">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class = "form-group">
                                                    <label for = "">Quantity</label>
                                                    <input type = "number" class = "form-control" id = "exampleFormControlInput1" placeholder = "Enter Quantity">
                                                </div>
                                            </td>
                                            <td>
                                                <div class = "form-group">
                                                    <label for = "">Remaining Stock</label>
                                                    <br/>
                                                    <p>{{ $apparel->stock_universal }}</p>
                                                </div>
                                            </td>
                                    </tbody>
                                </table>
                            </form>
                        @else
                            <h4>This product is sold out.</h4>
                            <script>
                                window.onload = () => {
                                    document.getElementById(`button-container`).innerHTML = null;
                                };
                            </script>
                        @endif
                    @endif
                </div>
            </div>
                      
            <!-- Shopping buttons -->
            <div id = "button-container" class = "properties row">
                <div class = "col">
                    <hr/>
                    <div class = "buttons">
                        <button type = "button" class=  "btn btn-lg btn-primary">
                            <i class = "material-icons">add_shopping_cart</i> Add To Cart
                        </button>
                        <div class = "padding"></div>
                        <button type = "button" class=  "btn btn-lg btn-primary">
                            <i class = "material-icons">paid</i> Buy Now
                        </button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <!-- MODALS - Size Chart -->
    <div class = "modal fade" id = "sizeChartModal">
        <div class = "modal-dialog modal-dialog-centered">
            <div class = "modal-content">
                <div class = "modal-header">
                    <h4 class = "modal-title">Size Chart
                        <br/>
                        <small>Adult Sized Round Neck Shirt</small>
                    </h4>
                    <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
                        <i class = "material-icons">clear</i>
                    </button>
                </div>
                <div class = "modal-body container">
                    <table class = "table custom">
                        <thead>
                            <tr>
                                <th class = "text-center">Size</th>
                                <th class = "text-center">Width (Inches)</th>
                                <th class = "text-center">Length (Inches)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class = "text-center">XS</td>
                                <td class = "text-center">18</td>
                                <td class = "text-center">26</td>
                            </tr>
                            <tr>
                                <td class = "text-center">S</td>
                                <td class = "text-center">19</td>
                                <td class = "text-center">27</td>
                            </tr>
                            <tr>
                                <td class = "text-center">M</td>
                                <td class = "text-center">20</td>
                                <td class = "text-center">28</td>
                            </tr>
                            <tr>
                                <td class = "text-center">L</td>
                                <td class = "text-center">21</td>
                                <td class = "text-center">29</td>
                            </tr>
                            <tr>
                                <td class = "text-center">XL</td>
                                <td class = "text-center">22</td>
                                <td class = "text-center">30</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection