@extends('pages.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="pt-2" style="background: #2d9241;color: white">
                        <h4 class="fw-bold me-3 mx-2">Thông chứng khoán thế giới</h4>
                    </div>
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div id="tradingview_450ff"></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                        <script type="text/javascript">
                            new TradingView.MediumWidget(
                                {
                                    "symbols": [
                                        [
                                            "Apple",
                                            "AAPL|1D"
                                        ],
                                        [
                                            "Google",
                                            "GOOGL|1D"
                                        ],
                                        [
                                            "Microsoft",
                                            "MSFT|1D"
                                        ],
                                        [
                                            "Meta",
                                            "NASDAQ:META|1D"
                                        ],
                                        [
                                            "Tesla",
                                            "NASDAQ:TSLA|1D"
                                        ],
                                        [
                                            "Amazon",
                                            "NASDAQ:AMZN|1D"
                                        ]
                                    ],
                                    "chartOnly": false,
                                    "width": "100%",
                                    "height": "600px",
                                    "locale": "vi_VN",
                                    "colorTheme": "dark",
                                    "isTransparent": false,
                                    "autosize": true,
                                    "showVolume": false,
                                    "hideDateRanges": false,
                                    "scalePosition": "right",
                                    "scaleMode": "Normal",
                                    "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
                                    "noTimeScale": false,
                                    "valuesTracking": "1",
                                    "chartType": "line",
                                    "fontColor": "#787b86",
                                    "gridLineColor": "rgba(42, 46, 57, 0.06)",
                                    "container_id": "tradingview_450ff"
                                }
                            );
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                    <div class="pt-2">
                        <h5 class="fw-bold me-3 mx-2 text-end">
                            <a href="https://vn.tradingview.com" style="color: black">Tra cứu thị trường Việt Nam >></a>
                        </h5>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="pt-2" style="background: #2d9241;color: white">
                        <h4 class="fw-bold me-3 mx-2">Tin Tức</h4>
                    </div>

                    <div class="card-body">
                        @foreach($pages as $page)
                            <a class="row mt-1 text-decoration-none" style="color:black;" href="{{route('page.detail',$page->id)}}">
                                <div class="col-2">
                                    <img style="width: 100%" src="{{$page->image}}" alt="{{$page->name}}">
                                </div>
                                <div class="col-10">
                                    <div class="fw-bold fs-7">{{ $page->title }}</div>
                                    <div class="p-1">Ngày đăng:{{$page->created_at}} - lượt xem: {{$page->view}}</div>
                                    <div>
                                        <p style="overflow: hidden;white-space: nowrap; text-overflow: ellipsis;">
                                            {!! html_entity_decode($page->description, ENT_QUOTES, 'UTF-8') !!}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    {{$pages->links("pagination::bootstrap-4")}}
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="pt-2" style="background: #2d9241;color: white">
                        <a class="fw-bold me-3 mx-2" style="color:white;" href="https://www.msn.com/vi-vn/money/watchlist?id=aqjuvh&tab=MostActives&cvid=98368bf9f0094852ac5c9df774362221">
                            Cổ phiếu có khối lượng giao dịch cao
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>SSI</td>
                                    <td>20.900,00</td>
                                    <td style="color: red">-1.88%</td>
                                </tr>
                                <tr>
                                    <td>HPG</td>
                                    <td>22.200,00</td>
                                    <td style="color: red">-2.20%</td>
                                </tr>
                                <tr>
                                    <td>VND</td>
                                    <td>18.950,00</td>
                                    <td style="color: red">-1.04%</td>
                                </tr>
                                <tr>
                                    <td>SHB</td>
                                    <td>14.350,00</td>
                                    <td style="color: red">-2.05%</td>
                                </tr>
                                <tr>
                                    <td>HQC</td>
                                    <td>5.050,00</td>
                                    <td style="color: green">+2.43%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="pt-2" style="background: #2d9241;color: white">
                        <a class="fw-bold me-3 mx-2" style="color:white;" href="https://www.msn.com/vi-vn/money/watchlist?id=aqjuvh&tab=MostActives&cvid=98368bf9f0094852ac5c9df774362221">
                            Cổ phiếu Tăng Mạnh Nhất
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <td>CLW</td>
                                <td>30.700,00</td>
                                <td style="color: green">+6.97%</td>
                            </tr>
                            <tr>
                                <td>HOT</td>
                                <td>30.850,00</td>
                                <td style="color: green">+6.93%</td>
                            </tr>
                            <tr>
                                <td>TNT</td>
                                <td>7.720,00</td>
                                <td style="color: green">+6.93%</td>
                            </tr>
                            <tr>
                                <td>BCM</td>
                                <td>66.500,00</td>
                                <td style="color: green">+6.91%</td>
                            </tr>
                            <tr>
                                <td>DAH</td>
                                <td>7.910,00</td>
                                <td style="color: green">+6.89%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="pt-2" style="background: #2d9241;color: white">
                        <a class="fw-bold me-3 mx-2" style="color:white;" href="https://www.msn.com/vi-vn/money/watchlist?id=aqjuvh&tab=MostActives&cvid=98368bf9f0094852ac5c9df774362221">
                            Các Loại Tiền
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <td>USD/EUR</td>
                                <td>0,98</td>
                                <td style="color: green">0.00%</td>
                            </tr>
                            <tr>
                                <td>USD/JPY</td>
                                <td>1,2</td>
                                <td style="color: green">0.00%</td>
                            </tr>
                            <tr>
                                <td>GBP/USD</td>
                                <td>1,29</td>
                                <td style="color: green">0.00%</td>
                            </tr>
                            <tr>
                                <td>USD/CAD</td>
                                <td>6,75</td>
                                <td style="color: green">0.00%</td>
                            </tr>
                            <tr>
                                <td>USD/CNY</td>
                                <td>7.910,00</td>
                                <td style="color: green">0.00%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="pt-2" style="background: #2d9241;color: white">
                        <a class="fw-bold me-3 mx-2" style="color:white;" href="https://www.msn.com/vi-vn/money/watchlist?id=aqjuvh&tab=MostActives&cvid=98368bf9f0094852ac5c9df774362221">
                            Tiền Mã Hóa
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <td>BTC</td>
                                <td>521.191.339,53</td>
                                <td style="color: red">-5.18%</td>
                            </tr>
                            <tr>
                                <td>ETH</td>
                                <td>35.701.944,36</td>
                                <td style="color: red">-4,63%</td>
                            </tr>
                            <tr>
                                <td>BNB</td>
                                <td>5.990.685,93</td>
                                <td style="color: red">-4.80%</td>
                            </tr>
                            <tr>
                                <td>ADA</td>
                                <td>11.259,77</td>
                                <td style="color: red">-3.58%</td>
                            </tr>
                            <tr>
                                <td>XRP</td>
                                <td>8.293,08</td>
                                <td style="color: red">-2.85%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="pt-2" style="background: #2d9241;color: white">
                        <h6 class="fw-bold me-3 mx-2">Tin Tức có nhiều lượt xem gần đây</h6>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                            @foreach($pagesView as $page)
                                <tr>
                                    <td class="col-8 fw-bold"><a class="text-decoration-none" style="color:black;" href="{{route('page.detail',$page->id)}}">{{$page->title}}</a></td>
                                    <td class="col-4">{{$page->view}} lượt xem</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
