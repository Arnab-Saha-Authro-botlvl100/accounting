<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts.head')
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="/addorder" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-4">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="date">Booking Date</label>
                            <div class="input-group date" style="width: 100%">
                                <input type="text" class="form-control datepicker" name="date" id="date" placeholder="Booking Date" required />
                               
                            </div>      
                        </div>
                        <div class="form-group col-md-6">
                            <label for="type">Type</label>
                            <select class="form-control select2" name="type" id="type" placeholder="Select type" required>
                                <option value="">Select Type</option>
                                @foreach($types as $type)
                                    <option value="{{ $type->id }}">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                
                    <div class=" form-group">
                        <label for="agent">Agent</label>
                        <select class="form-control select2" name="agent" id="agent" placeholder="Select agent" required>
                            <option value="">Select Agent</option>
                            @foreach($agents as $agent)
                                <option value="{{ $agent->id }}">{{ $agent->name }}</option>
                            @endforeach
                        </select>
                    </div>
                
                    <div class="row">
                        <div class="col-md-6">
                            <label for="seller">Seller</label>
                            <input type="text" class="form-control" name="seller" id="seller" placeholder="Enter seller name">
                        </div>
                        <div class="col-md-6">
                            <label for="contact">Contact No</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter contact number" required>
                        </div>
                    </div>
                </div>
                
                <div class="form-group col-md-8">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="name">Customer Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter customer name" required>
                        </div>

                        <div class="col-md-4">
                            <label for="passport_no">Passport</label>
                            <input type="text" class="form-control" name="passport_no" id="passport_no" placeholder="Enter passport" required>
                        </div>

                        <div class="col-md-2">
                            <label for="contact_amount">Agent Amount</label>
                            <input type="text" class="form-control" name="contact_amount" id="contact_amount" placeholder="Enter agent amount" required>
                        </div>

                        <div class="col-md-2">
                            <label for="payable_amount">Supplier Amount</label>
                            <input type="text" class="form-control" name="payable_amount" id="payable_amount" placeholder="Enter agent amount" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="other_expense">Other Expense</label>
                            <input type="text" class="form-control" name="other_expense" id="other_expense" placeholder="Enter other amount">
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="country">Country</label>
                            <select class="form-control select2" name="country" id="country" required>
                                <option value="">Select Country</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cabo Verde">Cabo Verde</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czechia">Czechia</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Eswatini">Eswatini</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Greece">Greece</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Holy See">Holy See</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia">Micronesia</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="North Korea">North Korea</option>
                                <option value="North Macedonia">North Macedonia</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestine State">Palestine State</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Korea">South Korea</option>
                                <option value="South Sudan">South Sudan</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-Leste">Timor-Leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States of America">United States of America</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City">Vatican City</option>

                            </select>
                            
                        </div>
                        <div class="col-md-4 form-group">
                            <label for="supplier">Supplier</label>
                            <select class="form-control select2" name="supplier" id="supplier" required>
                                <option value="country">Select Supplier</option>
                                @foreach($suppliers as $supplier)
                                    <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9 form-group">
                            <label for="remark">Remark</label>
                            <textarea id="remark" name="remark" class="form-control"></textarea>
                        </div>
                        <div class="col-md-3 form-group">
                            <label for="invoice">Invoices</label>
                            <input type="text" id="invoice" name="invoice" readonly class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
           
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
    </div>
    
    <div class="container-fluid mt-5">
        <table class="table table-striped table-bordered table-hover" id="ordertable">
            <thead class="thead-dark">
                <tr>
                    <th>Serial Number</th>
                    <th>Seller</th>
                    <th>Type</th>
                    <th>Agent</th>
                    <th>Date</th>
                    <th>Contact</th>
                    <th>Customer</th>
                    <th>Passport</th>
                    <th>Agent Amount</th>
                    <th>Supplier Amount</th>
                    <th>Country</th>
                    <th>Supplier</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $key=>$order)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $order->seller }}</td>
                        <td>{{ $order->type }}</td>
                        <td>{{ $order->agent }}</td>
                        <td>{{ $order->date }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->passport_no }}</td>
                        <td>{{ $order->contact_amount }}</td>
                        <td>{{ $order->payable_amount }}</td>
                        <td>{{ $order->country }}</td>
                        <td>{{ $order->supplier }}</td>
                        <td><!-- Your action buttons or links go here --></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>


    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                autoclose: true
            });
    
            $('.select2').select2();

            $('#ordertable').DataTable();

            $('#invoice').val(generateRandomString());

            function generateRandomString(length = 10) {
                const characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                let randomString = '';

                for (let i = 0; i < length; i++) {
                    const randomIndex = Math.floor(Math.random() * characters.length);
                    randomString += characters.charAt(randomIndex);
                }

                return randomString;
            }
        });

        
    </script>
    
    
</body>
</html>