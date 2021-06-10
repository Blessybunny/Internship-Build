@extends('layouts.master')

@section('title')
    {{ $apparel->name }}
@endsection

@section('content')

    <!-- MAIN CONTENT -->
    <form action = "{{ url('/apparels/view', ['id' => $apparel->id]) }}" method = "POST">
        @csrf
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
                            @if ($apparel->stock_xs > 0 or $apparel->stock_s > 0 or $apparel->stock_m > 0 or $apparel->stock_l > 0 or $apparel->stock_xl > 0)
                                <table class = "table custom">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label>Size</label>
                                                <select id = "form-stock-size" class = "form-control selectpicker" onchange = "displayStock(value)">
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
                                            </td>
                                            <td class = "text-center">
                                                <label>Remaining Stock</label>
                                                <h3 class = "hidden" id = "stock-display-xs">{{ $apparel->stock_xs }}</h3>
                                                <h3 class = "hidden" id = "stock-display-s">{{ $apparel->stock_s }}</h3>
                                                <h3 class = "hidden" id = "stock-display-m">{{ $apparel->stock_m }}</h3>
                                                <h3 class = "hidden" id = "stock-display-l">{{ $apparel->stock_l }}</h3>
                                                <h3 class = "hidden" id = "stock-display-xl">{{ $apparel->stock_xl }}</h3>
                                            </td>
                                            <td class = "text-left">
                                                <label>Quantity</label>
                                                <input onfocusout = "quantityCheck(value)" id = "form-stock-quantity" type = "number" class = "form-control" value = "1"/>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type = "button" class = "btn btn-primary" data-toggle = "modal" data-target = "#sizeChartModal">
                                    <i class = "material-icons">bar_chart</i> Size Chart
                                </button>
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
                                            case `xs`: ids[0].className = ``; break;
                                            case `s`: ids[1].className = ``; break;
                                            case `m`: ids[2].className = ``; break;
                                            case `l`: ids[3].className = ``; break;
                                            case `xl`: ids[4].className = ``; break;
                                        }
                                    }
                                    window.onload = () => {
                                        displayStock(document.getElementById(`form-stock-size`).value);
                                    };
                                </script>
                            @else
                                <br/>
                                <h4>This product is sold out.</h4>
                                <script>
                                    window.onload = () => document.getElementById('purchase-buttons').innerHTML = null;
                                </script>
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
                                                <input onfocusout = "quantityCheck(value)" id = "form-stock-quantity" type = "number" class = "form-control" value = "1"/>
                                            </td>
                                            <td class = "text-center">
                                                <label>Remaining Stock</label>
                                                <h3>{{ $apparel->stock_universal }}</h3>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @else
                                <br/>
                                <h4>This product is sold out.</h4>
                                <script>
                                    window.onload = () => document.getElementById('purchase-buttons').innerHTML = null;
                                </script>
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
                <script>
                    function quantityCheck () {
                        let quantity = document.getElementById(`form-stock-quantity`);
                        if (quantity.value <= 0) quantity.value = 1;
                    }
                </script>

            </div>
        </div>

        <!-- MODAL - Size Chart -->
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

        <!-- MODAL - Payment Process -->
        <div class = "modal fade" id = "purchaseModal">
            <div class = "modal-dialog">
                <div class = "modal-content">
                    <div class = "modal-header">
                        <h4 class = "modal-title">Product: {{ $apparel->name }}
                            <br/>
                            <small id = "form-stock-selected"></small>
                        </h4>
                        <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
                            <i class = "material-icons">clear</i>
                        </button>
                    </div>
                    <div class = "modal-body">
                        <hr/>
                        <form class = "form" method = "" action = "">
                            <!-- Email -->
                            <div class = "row">
                                <div class = "col-12">
                                    <h4>Contact Information</h4>
                                    <input name = "email" type = "email" class = "form-control" placeholder = "Enter email address" required/>
                                    <small class = "form-text text-muted">Email address</small>
                                </div>
                            </div>
                            
                            <!-- Navigation tabs -->
                            <div class = "tabs row">
                                <div class = "col">
                                    <h4>Delivery Method</h4>
                                    <ul class = "nav navbar-nav" data-tabs = "tabs">
                                        <li class = "nav-item">
                                            <a onclick = "changeDeliveryMethod('ship')" class = "nav-link active" href = "#tab-ship" data-toggle = "tab">Ship</a>
                                        </li>
                                        <li class = "nav-item">
                                            <a onclick = "changeDeliveryMethod('pick-up')" class = "nav-link" href = "#tab-pick-up" data-toggle = "tab">Pickup</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class = "hidden">
                                    <input id = "hidden-radio-delivery-method-ship" type = "radio" name = "delivery-method" value = "ship" checked/>
                                    <input id = "hidden-radio-delivery-method-pick-up" type = "radio" name = "delivery-method" value = "pick-up"/>
                                </div>
                                <script>
                                    function changeDeliveryMethod (type) {
                                        //Vaiables
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
                                                <input id = "input-name" name = "name" type = "text" class = "form-control" placeholder = "Enter full name" required/>
                                                <small class = "form-text text-muted">Full Name</small>
                                            </div>
                                            <!-- Address -->
                                            <div class = "col-12">
                                                <input id = "input-address" name = "address" type = "text" class = "form-control" placeholder = "Enter address" required/>
                                                <small class = "form-text text-muted">Address</small>
                                            </div>
                                            <!-- Postal code -->
                                            <div class = "col-6">
                                                <input id = "input-postal-code" name = "postal-code" type = "text" class = "form-control" placeholder = "Enter postal code" required/>
                                                <small class = "form-text text-muted">Postal Code</small>
                                            </div>
                                            <!-- City -->
                                            <div class = "col-6">
                                                <input id = "input-city" name = "city" type = "text" class = "form-control" placeholder = "Enter city name" required/>
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
                                                        <input class = "form-check-input" type = "radio" name = "radio-location" id = "" value = "" checked/>
                                                        <h5>Naduma Store (SM Baguio branch)</h5>
                                                        <p>
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function buyNow (type) {
                let selected = document.getElementById(`form-stock-selected`),
                    quantity = document.getElementById(`form-stock-quantity`).value;
                if (type === `shirt`) {
                    selected.innerHTML = `Size: ${document.getElementById(`form-stock-size`).value}<br/>Quantity: ${quantity}`;
                }
                else if (type === `accessory`) {
                    selected.innerHTML = `Quantity: ${quantity}`;
                }
            }
        </script>
    </form>

@endsection