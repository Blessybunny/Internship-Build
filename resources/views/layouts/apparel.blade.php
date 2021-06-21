@extends('layouts.master')

@section('title')
    {{ $apparel->name }}
@endsection

@section('content')

    <!-- MAIN CONTENT -->
    <form action = "{{ url('/apparels/view', ['id' => $apparel->id]) }}" method = "POST">
        @csrf
        <!-- Page Content -->
        <div class = "main section">
            <div class = "container">
                
                <!-- Header -->
                <div class = "row">
                    <div class = "col">
                        <h3>APPARELS</h3>
                        <hr/>
                    </div>
                </div>
                
                <!-- Properties - Shirt -->
                @if ($apparel->type === "shirt")
                    <div class = "properties row">
                        <div class = "col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <img src = "{{ asset($apparel->img_url) }}"/>
                        </div>
                        <div class = "col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                            <h3>{{ $apparel->name }}</h3>
                            <h4>PHP {{ $apparel->price }}</h4>
                            <hr/>
                            <p>Shipping calculated at checkout.</p>
                            <hr/>
                            @if ($apparel->stock_xs > 0 or $apparel->stock_sm > 0 or $apparel->stock_md > 0 or $apparel->stock_lg > 0 or $apparel->stock_xl > 0)
                                <table class = "table custom">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label>Size</label>
                                                <select name = "apparel-size" id = "form-size" class = "form-control selectpicker" onchange = "displayStock(value, {{ $apparel->stock_xs }}, {{ $apparel->stock_sm }}, {{ $apparel->stock_md }}, {{ $apparel->stock_lg }}, {{ $apparel->stock_xl }} )">
                                                    @if ($apparel->stock_xs > 0)
                                                        <option value = "xs">Extra small</option>
                                                    @endif
                                                    @if ($apparel->stock_sm > 0)
                                                        <option value = "sm">Small</option>
                                                    @endif
                                                    @if ($apparel->stock_md > 0)
                                                        <option value = "md">Medium</option>
                                                    @endif
                                                    @if ($apparel->stock_lg > 0)
                                                        <option value = "lg">Large</option>
                                                    @endif
                                                    @if ($apparel->stock_xl > 0)
                                                        <option value = "xl">Extra large</option>
                                                    @endif
                                                </select>
                                            </td>
                                            <td class = "text-center">
                                                <label>Remaining Stock</label>
                                                <h3 id = "form-stock"></h3>
                                            </td>
                                            <td class = "text-left">
                                                <label>Quantity</label>
                                                <input name = "apparel-quantity" id = "form-quantity" class = "form-control" type = "number" value = "1" onfocusout = "quantityCheck(value)" />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type = "button" class = "btn btn-primary" data-toggle = "modal" data-target = "#sizeChartModal">
                                    <i class = "material-icons">bar_chart</i> Size Chart
                                </button>
                                <script>window.onload = () => displayStock(document.getElementById(`form-size`).value, {{ $apparel->stock_xs }}, {{ $apparel->stock_sm }}, {{ $apparel->stock_md }}, {{ $apparel->stock_lg }}, {{ $apparel->stock_xl }} );</script>
                            @else
                                <br/>
                                <h4>This product is sold out.</h4>
                                <script>window.onload = () => document.getElementById('purchase-buttons').innerHTML = null;</script>
                            @endif
                        </div>
                    </div>
                @endif
                
                <!-- Properties - Accessory -->
                @if ($apparel->type === "accessory")
                    <div class = "properties row">
                        <div class = "col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <img src = "{{ asset($apparel->img_url) }}"/>
                        </div>
                        <div class = "col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                            <h3>{{ $apparel->name }}</h3>
                            <h4>PHP {{ $apparel->price }}</h4>
                            <hr/>
                            <p>Shipping calculated at checkout.</p>
                            <hr/>
                            @if ($apparel->stock_universal > 0)
                                <table class = "table custom">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label>Quantity</label>
                                                <input name = "apparel-quantity" id = "form-quantity" class = "form-control" type = "number" value = "1" onfocusout = "quantityCheck(value)" />
                                            </td>
                                            <td class = "text-center">
                                                <label>Remaining Stock</label>
                                                <h3 id = "form-stock">{{ $apparel->stock_universal }}</h3>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @else
                                <br/>
                                <h4>This product is sold out.</h4>
                                <script>window.onload = () => document.getElementById('purchase-buttons').innerHTML = null;</script>
                            @endif
                        </div>
                    </div>
                @endif
                
                <!-- Purchase Options -->
                <div id = "purchase-buttons" class = "properties row">
                    <div class = "col">
                        <hr/>
                        <div class = "buttons">
                            <button onclick = "window.alert('Dummy button clicked!')" type = "button" class = "btn btn-primary">
                                <i class = "material-icons">add_shopping_cart</i> Add To Cart
                            </button>
                            <div class = "padding"></div>
                            <button onclick = "buyNow('{{ $apparel->type }}')" type = "button" class = "btn btn-primary" data-toggle = "modal" data-target = "#purchaseModal">
                                <i class = "material-icons">paid</i> Buy Now
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal - Size Chart -->
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
                    <div class = "modal-body">
                        <table class = "table custom">
                            <thead>
                                <tr>
                                    <th>Size</th>
                                    <th class = "text-center">Width (Inches)</th>
                                    <th class = "text-center">Length (Inches)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Extra small</td>
                                    <td class = "text-center">18</td>
                                    <td class = "text-center">26</td>
                                </tr>
                                <tr>
                                    <td>Small</td>
                                    <td class = "text-center">19</td>
                                    <td class = "text-center">27</td>
                                </tr>
                                <tr>
                                    <td>Medium</td>
                                    <td class = "text-center">20</td>
                                    <td class = "text-center">28</td>
                                </tr>
                                <tr>
                                    <td>Large</td>
                                    <td class = "text-center">21</td>
                                    <td class = "text-center">29</td>
                                </tr>
                                <tr>
                                    <td>Extra large</td>
                                    <td class = "text-center">22</td>
                                    <td class = "text-center">30</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal - Payment Process -->
        <div class = "modal fade" id = "purchaseModal">
            <div class = "modal-dialog">
                <div class = "modal-content">
                    
                    <!-- Product size and quantity -->
                    <div class = "modal-header">
                        <h4 class = "modal-title">Product: {{ $apparel->name }}
                            <br/>
                            <small id = "modal-details"></small>
                        </h4>
                        <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
                            <i class = "material-icons">clear</i>
                        </button>
                    </div>
                    
                    <!-- Fill-up form -->
                    <div class = "modal-body">
                        
                        <!-- Email -->
                        <div class = "row">
                            <div class = "col-12">
                                <h4>Contact Information</h4>
                                <input name = "email" type = "email" class = "form-control" placeholder = "Enter email address" required />
                                <small class = "form-text text-muted">Email address</small>
                            </div>
                        </div>

                        <!-- Navigation tabs -->
                        <div class = "tabs row">
                            <div class = "col">
                                <h4>Delivery Method</h4>
                                <ul class = "nav navbar-nav" data-tabs = "tabs">
                                    <li class = "nav-item">
                                        <a onclick = "deliveryMethod('ship')" class = "nav-link active" href = "#tab-ship" data-toggle = "tab">Ship</a>
                                    </li>
                                    <li class = "nav-item">
                                        <a onclick = "deliveryMethod('pick-up')" class = "nav-link" href = "#tab-pick-up" data-toggle = "tab">Pickup</a>
                                    </li>
                                </ul>
                            </div>
                            <div class = "hidden">
                                <input id = "hidden-radio-delivery-method-ship" type = "radio" name = "delivery-method" value = "ship" checked />
                                <input id = "hidden-radio-delivery-method-pick-up" type = "radio" name = "delivery-method" value = "pick-up" />
                                <input type = "text" name = "apparel-id" value = "{{ $apparel->id }}" />
                            </div>
                        </div>

                        <!-- Content wrapper -->
                        <div class = "row tab-content">
                            
                            <!-- Ship -->
                            <div class = "tab-pane active" id = "tab-ship">
                                <div class = "container">
                                    <div class = "row">
                                        <!-- Payment method -->
                                        <div class = "col-12">
                                            <h4>Payment Method</h4>
                                            <select name = "payment-method" class = "form-control selectpicker">
                                                <option value = "C.O.D.">C.O.D. (Cash on delivery)</option>
                                                <option value = "PayPal">PayPal</option>
                                            </select>
                                        </div>
                                        <!-- Full name -->
                                        <div class = "col-12">
                                            <h4>Shipping Address</h4>
                                            <input id = "input-name" name = "name" type = "text" class = "form-control" placeholder = "Enter full name" required />
                                            <small class = "form-text text-muted">Full Name</small>
                                        </div>
                                        <!-- Address -->
                                        <div class = "col-12">
                                            <input id = "input-address" name = "address" type = "text" class = "form-control" placeholder = "Enter address" required />
                                            <small class = "form-text text-muted">Address</small>
                                        </div>
                                        <!-- Postal code -->
                                        <div class = "col-6">
                                            <input id = "input-postal-code" name = "postal-code" type = "text" class = "form-control" placeholder = "Enter postal code" required />
                                            <small class = "form-text text-muted">Postal Code</small>
                                        </div>
                                        <!-- City -->
                                        <div class = "col-6">
                                            <input id = "input-city" name = "city" type = "text" class = "form-control" placeholder = "Enter city name" required />
                                            <small class = "form-text text-muted">City</small>
                                        </div>
                                        <!-- Region -->
                                        <div class = "col-6">
                                            <select name = "region" class = "form-control selectpicker">
                                                <option value = "Abra">Abra</option>
                                                <option value = "Agusan del Norte">Agusan del Norte</option>
                                                <option value = "Agusan del Sur">Agusan del Sur</option>
                                                <option value = "Aklan">Aklan</option>
                                                <option value = "Albay">Albay</option>
                                                <option value = "Antique">Antique</option>
                                                <option value = "Apayao">Apayao</option>
                                                <option value = "Aurora">Aurora</option>
                                                <option value = "Basilan">Basilan</option>
                                                <option value = "Bataan">Bataan</option>
                                                <option value = "Batanes">Batanes</option>
                                                <option value = "Batangas">Batangas</option>
                                                <option value = "Benguet">Benguet</option>
                                                <option value = "Biliran">Biliran</option>
                                                <option value = "Bohol">Bohol</option>
                                                <option value = "Bukidnon">Bukidnon</option>
                                                <option value = "Bulacan">Bulacan</option>
                                                <option value = "Cagayan">Cagayan</option>
                                                <option value = "Camarines Norte">Camarines Norte</option>

                                                <option value = "Camarines Sur">Camarines Sur</option>
                                                <option value = "Camiguin">Camiguin</option>
                                                <option value = "Capiz">Capiz</option>
                                                <option value = "Catanduanes">Catanduanes</option>
                                                <option value = "Cavite">Cavite</option>
                                                <option value = "Cebu">Cebu</option>
                                                <option value = "Compostela Valley">Compostela Valley</option>
                                                <option value = "Cotabato">Cotabato</option>
                                                <option value = "Davao Occidental">Davao Occidental</option>
                                                <option value = "Davao Oriental">Davao Oriental</option>
                                                <option value = "Davao del Norte">Davao del Norte</option>
                                                <option value = "Davao del Sur">Davao del Sur</option>
                                                <option value = "Dinagat Islands">Dinagat Islands</option>
                                                <option value = "Eastern Samar">Eastern Samar</option>
                                                <option value = "Guimaras">Guimaras</option>
                                                <option value = "Ifugao">Ifugao</option>
                                                <option value = "Ilocos Norte">Ilocos Norte</option>
                                                <option value = "Ilocos Sur">Ilocos Sur</option>
                                                <option value = "Iloilo">Iloilo</option>
                                                <option value = "Isabela">Isabela</option>

                                                <option value = "Kalinga">Kalinga</option>
                                                <option value = "La Union">La Union</option>
                                                <option value = "Laguna">Laguna</option>
                                                <option value = "Lanao del Norte">Lanao del Norte</option>
                                                <option value = "Lanao del Sur">Lanao del Sur</option>
                                                <option value = "Leyte">Leyte</option>
                                                <option value = "Maguindanao">Maguindanao</option>
                                                <option value = "Marinduque">Marinduque</option>
                                                <option value = "Masbate">Masbate</option>
                                                <option value = "Metro Manila">Metro Manila</option>
                                                <option value = "Misamis Occidental">Misamis Occidental</option>
                                                <option value = "Misamis Oriental">Misamis Oriental</option>
                                                <option value = "Mountain Province">Mountain Province</option>
                                                <option value = "Negros Occidental">Negros Occidental</option>
                                                <option value = "Negros Oriental">Negros Oriental</option>
                                                <option value = "Northern Samar">Northern Samar</option>
                                                <option value = "Nueva Ecija">Nueva Ecija</option>
                                                <option value = "Nueva Vizcaya">Nueva Vizcaya</option>
                                                <option value = "Occidental Mindoro">Occidental Mindoro</option>
                                                <option value = "Oriental Mindoro">Oriental Mindoro</option>

                                                <option value = "Palawan">Palawan</option>
                                                <option value = "Pampanga">Pampanga</option>
                                                <option value = "Pangasinan">Pangasinan</option>
                                                <option value = "Quezon">Quezon</option>
                                                <option value = "Quirino">Quirino</option>
                                                <option value = "Rizal">Rizal</option>
                                                <option value = "Romblon">Romblon</option>
                                                <option value = "Samar">Samar</option>
                                                <option value = "Sarangani">Sarangani</option>
                                                <option value = "Siquijor">Siquijor</option>
                                                <option value = "Sorsogon">Sorsogon</option>
                                                <option value = "South Cotabato">South Cotabato</option>
                                                <option value = "Southern Leyte">Southern Leyte</option>
                                                <option value = "Sultan Kudarat">Sultan Kudarat</option>
                                                <option value = "Sulu">Sulu</option>
                                                <option value = "Surigao del Norte">Surigao del Norte</option>
                                                <option value = "Surigao del Sur">Surigao del Sur</option>
                                                <option value = "Tarlac">Tarlac</option>
                                                <option value = "Tawi-Tawi">Tawi-Tawi</option>

                                                <option value = "Zambales">Zambales</option>
                                                <option value = "Zamboanga Sibugay">Zamboanga Sibugay</option>
                                                <option value = "Zamboanga del Norte">Zamboanga del Norte</option>
                                                <option value = "Zamboanga del Sur">Zamboanga del Sur</option>
                                            </select>
                                            <small class = "form-text text-muted">Region</small>
                                        </div>
                                        <!-- Country -->
                                        <div class = "col-6">
                                            <select name = "country" class = "form-control selectpicker">
                                                <option value = "Philippines" selected>Philippines</option>
                                            </select>
                                            <small class = "form-text text-muted">Country</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Pick-up -->
                            <div class = "tab-pane" id = "tab-pick-up">
                                <div class = "container">
                                    <div class = "row">
                                        <div class = "col-12">
                                            <h4>Pickup Locations</h4>
                                            <div class = "form-check form-check-radio">
                                                <label class = "form-check-label">
                                                    <input class = "form-check-input" type = "radio" name = "pickup-location" value = "Naduma Store (SM Baguio Branch)" checked />
                                                    <p>
                                                        Naduma Store (SM Baguio branch)<br/><br/>
                                                        Ex 0223 North Terrace, SM City Upper Sesson Road,<br/>
                                                        Baguio City PH-BEN
                                                    </p>
                                                    <span class = "circle">
                                                        <span class = "check"></span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <!-- Submit -->
                        <div class = "modal-footer justify-content-center">
                            <button type = "submit" class = "btn btn-primary btn-round">
                                <i class = "material-icons">shopping_cart</i> Complete Order
                            </button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scripts -->
        <script>
            //Display stock quantity... for size selection
            function displayStock (value, qty_xs, qty_sm, qty_md, qty_lg, qty_xl) {
                let stock = document.getElementById(`form-stock`);
                switch (value) {
                    case `xs`: stock.innerHTML = qty_xs; break;
                    case `sm`: stock.innerHTML = qty_sm; break;
                    case `md`: stock.innerHTML = qty_md; break;
                    case `lg`: stock.innerHTML = qty_lg; break;
                    case `xl`: stock.innerHTML = qty_xl; break;
                }
                document.getElementById(`form-quantity`).value = 1;
            }
            
            //Quantity check... with minimum and maximum
            function quantityCheck () {
                let quantity = document.getElementById(`form-quantity`),
                    stock = parseInt(document.getElementById(`form-stock`).innerHTML);
                if (quantity.value <= 0) quantity.value = 1;
                else if (quantity.value >= stock) quantity.value = stock;
            }
            
            //Print size and quantity selected to modal
            function buyNow (type) {
                let details = document.getElementById(`modal-details`),
                    size = document.getElementById(`form-size`),
                    quantity = document.getElementById(`form-quantity`).value;
                switch (type) {
                    case 'shirt': details.innerHTML = `Size: ${size.options[size.selectedIndex].text}<br/>Quantity: ${quantity}<br/>Price: PHP ${ ({{ $apparel->price }} * quantity).toFixed(2) }`; break;
                    case 'accessory': details.innerHTML = `Quantity: ${quantity}<br/>Price: PHP ${ ({{ $apparel->price }} * quantity).toFixed(2) }`; break;
                }
            }
            
            //Delivery method change... toggle between required fields
            function deliveryMethod (type) {
                let ship = document.getElementById(`hidden-radio-delivery-method-ship`),
                    pickUp = document.getElementById(`hidden-radio-delivery-method-pick-up`),
                    shipInputs = [
                        document.getElementById(`input-name`),
                        document.getElementById(`input-address`),
                        document.getElementById(`input-postal-code`),
                        document.getElementById(`input-city`)
                    ];

                //Ship delivery method
                if (type === `ship`) {
                    ship.checked = true;
                    for (let i = 0, ii = shipInputs.length; i < ii; i++) {
                        shipInputs[i].required = true;
                    }
                }

                //Pick-up delivery method
                else if (type === `pick-up`) {
                    pickUp.checked = true;
                    for (let i = 0, ii = shipInputs.length; i < ii; i++) {
                        shipInputs[i].required = false;
                    }
                }
            }
        </script>
        
    </form>

@endsection