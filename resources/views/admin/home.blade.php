@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="pt-2" style="background: #2d9241;color: white">
                        <h4 class="fw-bold me-3 mx-2">Thị Trường</h4>
                    </div>

                    <div class="card-body">
                        <canvas id="myChart" width="400" height="100"></canvas>
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
                                            {{$page->description}}
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
                datasets: [
                    {
                        label: "lượng giao dịch trong năm 2022",
                        data: [65, 59, 80, 81, 56, 55, 40, 50, 60, 70, 68, 69],
                        fill: true,
                        borderColor: "rgb(75, 192, 192)",
                        tension: 0.1,
                    },
                ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@stop
