@extends('pages.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="pt-2 text-center" style="background: #2d9241;color: white">
                        <h2 class="fw-bold me-3">Tiền Tệ Hôm Nay</h2>
                    </div>
                    <div class="mx-2 text-end mt-2">
                        <a href="https://www.msn.com/vi-vn/money/currencyconverter?fromMaestro=true&duration=1D&id=avyufr" title=""
                           style="color: black;font-size: 20px;font-weight: bold">
                            Tra cứu chuyển đổi tiền tệ ở đây >>
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <th class="col-3 text-center">Tên loại tiền</th>
                                <th class="col-3 text-center">Giá trị</th>
                                <th class="col-3 text-center">Thay đổi</th>
                                <th class="col-3 text-center">Thay đổi theo %</th>
                                </thead>
                                <tbody>
                                <tr class="text-center" data-v-10041377="">
                                    <td data-v-10041377="">EUR/USD</td>
                                    <td data-v-10041377="">1.0708</td>
                                    <td data-v-10041377="" style="color:red;">-0.0001</td>
                                    <td data-v-10041377="" style="color:red;">-0.01%</td>
                                </tr>
                                <tr class="text-center" data-v-10041377="">
                                    <td data-v-10041377="">USD/JPY</td>
                                    <td data-v-10041377="">128.5920</td>
                                    <td data-v-10041377="" style="color:green;">+0.0104</td>
                                    <td data-v-10041377="" style="color:green;">+0.01%</td>
                                </tr>
                                <tr class="text-center" data-v-10041377="">
                                    <td data-v-10041377="">GBP/USD</td>
                                    <td data-v-10041377="">1.2578</td>
                                    <td data-v-10041377="" style="color:red;">-0.0001</td>
                                    <td data-v-10041377="" style="color:red;">-0.01%</td>
                                </tr>
                                <tr class="text-center" data-v-10041377="">
                                    <td data-v-10041377="">EUR/GBP</td>
                                    <td data-v-10041377="">0.8514</td>
                                    <td data-v-10041377="" style="color:red;">-0.0000</td>
                                    <td data-v-10041377="" style="color:red;">-0.00%</td>
                                </tr>
                                <tr class="text-center" data-v-10041377="">
                                    <td data-v-10041377="">USD/CHF</td>
                                    <td data-v-10041377="">0.9590</td>
                                    <td data-v-10041377="" style="color:green;">+0.0000</td>
                                    <td data-v-10041377="" style="color:green;">+0.00%</td>
                                </tr>
                                <tr class="text-center" data-v-10041377="">
                                    <td data-v-10041377="">EUR/JPY</td>
                                    <td data-v-10041377="">137.6960</td>
                                    <td data-v-10041377="" style="color:green;">+0.0021</td>
                                    <td data-v-10041377="" style="color:green;">+0.00%</td>
                                </tr>
                                <tr class="text-center" data-v-10041377="">
                                    <td data-v-10041377="">EUR/CHF</td>
                                    <td data-v-10041377="">1.0269</td>
                                    <td data-v-10041377="" style="color:red;">-0.0001</td>
                                    <td data-v-10041377="" style="color:red;">-0.01%</td>
                                </tr>
                                <tr class="text-center" data-v-10041377="">
                                    <td data-v-10041377="">USD/CAD</td>
                                    <td data-v-10041377="">1.2658</td>
                                    <td data-v-10041377="" style="color:green;">+0.0000</td>
                                    <td data-v-10041377="" style="color:green;">+0.00%</td>
                                </tr>
                                <tr class="text-center" data-v-10041377="">
                                    <td data-v-10041377="">AUD/USD</td>
                                    <td data-v-10041377="">0.7165</td>
                                    <td data-v-10041377="" style="color:red;">-0.0000</td>
                                    <td data-v-10041377="" style="color:red;">-0.00%</td>
                                </tr>
                                <tr class="text-center" data-v-10041377="">
                                    <td data-v-10041377="">GBP/JPY</td>
                                    <td data-v-10041377="">161.7320</td>
                                    <td data-v-10041377="" style="color:green;">+0.0034</td>
                                    <td data-v-10041377="" style="color:green;">+0.00%</td>
                                </tr>
                                <tr class="text-center" data-v-10041377="">
                                    <td data-v-10041377="">AUD/CAD</td>
                                    <td data-v-10041377="">0.9069</td>
                                    <td data-v-10041377="" style="color:red;">-0.0000</td>
                                    <td data-v-10041377="" style="color:red;">-0.00%</td>
                                </tr>
                                <tr class="text-center" data-v-10041377="">
                                    <td data-v-10041377="">AUD/CHF</td>
                                    <td data-v-10041377="">0.6871</td>
                                    <td data-v-10041377="" style="color:red;">-0.0000</td>
                                    <td data-v-10041377="" style="color:red;">-0.00%</td>
                                </tr>
                                <tr class="text-center" data-v-10041377="">
                                    <td data-v-10041377="">AUD/JPY</td>
                                    <td data-v-10041377="">92.1370</td>
                                    <td data-v-10041377="" style="color:green;">+0.0033</td>
                                    <td data-v-10041377="" style="color:green;">+0.00%</td>
                                </tr>
                                <tr class="text-center" data-v-10041377="">
                                    <td data-v-10041377="">AUD/NZD</td>
                                    <td data-v-10041377="">1.1028</td>
                                    <td data-v-10041377="" style="color:green;">+0.0000</td>
                                    <td data-v-10041377="" style="color:green;">+0.00%</td>
                                </tr>
                                <tr class="text-center" data-v-10041377="">
                                    <td data-v-10041377="">CAD/CHF</td>
                                    <td data-v-10041377="">0.7577</td>
                                    <td data-v-10041377="" style="color:green;">+0.0000</td>
                                    <td data-v-10041377="" style="color:green;">+0.00%</td>
                                </tr>
                                <tr class="text-center" data-v-10041377="">
                                    <td data-v-10041377="">CAD/JPY</td>
                                    <td data-v-10041377="">101.5920</td>
                                    <td data-v-10041377="" style="color:green;">+0.0080</td>
                                    <td data-v-10041377="" style="color:green;">+0.01%</td>
                                </tr>
                                <tr class="text-center" data-v-10041377="">
                                    <td data-v-10041377="">CHF/JPY</td>
                                    <td data-v-10041377="">134.0900</td>
                                    <td data-v-10041377="" style="color:green;">+0.0099</td>
                                    <td data-v-10041377="" style="color:green;">+0.01%</td>
                                </tr>
                                <tr class="text-center" data-v-10041377="">
                                    <td data-v-10041377="">EUR/AUD</td>
                                    <td data-v-10041377="">1.4945</td>
                                    <td data-v-10041377="" style="color:red;">-0.0000</td>
                                    <td data-v-10041377="" style="color:red;">-0.00%</td>
                                </tr>
                                <tr class="text-center" data-v-10041377="">
                                    <td data-v-10041377="">EUR/CAD</td>
                                    <td data-v-10041377="">1.3554</td>
                                    <td data-v-10041377="" style="color:red;">-0.0001</td>
                                    <td data-v-10041377="" style="color:red;">-0.01%</td>
                                </tr>
                                <tr class="text-center" data-v-10041377="">
                                    <td data-v-10041377="">EUR/NOK</td>
                                    <td data-v-10041377="">10.0988</td>
                                    <td data-v-10041377="" style="color:red;">-0.0004</td>
                                    <td data-v-10041377="" style="color:red;">-0.00%</td>
                                </tr>
                                <tr class="text-center" data-v-10041377="">
                                    <td data-v-10041377="">EUR/NZD</td>
                                    <td data-v-10041377="">1.6481</td>
                                    <td data-v-10041377="" style="color:green;">+0.0000</td>
                                    <td data-v-10041377="" style="color:green;">+0.00%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
