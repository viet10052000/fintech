@extends('pages.app')
@section('content')
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Tổng Quan Thị Trường</h2>
                    </div>
                    <div class="pt-2 text-center" style="background: #2d9241;color: white">
                        <h2 class="fw-bold me-3">Tổng Quan Thị Trường</h2>
                    </div>
                    <div class="mx-2 text-end mt-2">
                        <a href="https://www.cophieu68.vn/stockonline.php?o=stockname" title="">Xem Đầy Đủ Ở Đây>></a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table-hover table">
                                <tr id="board_header_first" class="tr_header">
                                    <td rowspan="2" align="center" class="">
                                        <a href="https://www.cophieu68.vn/stockonline.php?o=stockname" title="">MãCK</a>
                                    </td>
                                    <td rowspan="2" align="center"></td>
                                    <td rowspan="2">Giá<br>Trần</td>
                                    <td rowspan="2" align="center" class="">
                                        <a href="https://www.cophieu68.vn/stockonline.php?o=open" title="">Giá<br>TC</a>
                                    </td>
                                    <td rowspan="2">Giá<br>Sàn</td>

                                    <td align="center" colspan="6">Dư Mua</td>

                                    <td rowspan="2" align="center" class="">
                                        <a href="https://www.cophieu68.vn/stockonline.php?o=close" title="">Giá<br>Khớp</a>
                                    </td>
                                    <td rowspan="2" align="center">
                                        KL<br>Khớp
                                    </td>
                                    <td rowspan="2" align="center" class="">
                                        <a href="https://www.cophieu68.vn/stockonline.php?o=price_change" title="">+/-</a>
                                    </td>

                                    <td align="center" colspan="6">Dư Bán</td>

                                    <td rowspan="2" align="center" class="td_asc">

                                        <a href="https://www.cophieu68.vn/stockonline.php?o=volume" title=""> Khối Lượng</a>
                                        <br>
                                        <i class="fa fa-sort-numeric-desc"></i> &nbsp;
                                    </td>
                                    <td rowspan="2" align="right">Mở <br>cửa</td>
                                    <td rowspan="2" align="right">Cao <br> nhất</td>
                                    <td rowspan="2" align="right">Thấp<br> nhất</td>
                                    <td rowspan="2" align="center" class="">
                                        <a href="https://www.cophieu68.vn/stockonline.php?o=foreigner_buy_volume" title="Nhà đầu tư nước ngoài mua">NN<br>Mua</a>
                                    </td>
                                    <td rowspan="2" align="center" class="">
                                        <a href="https://www.cophieu68.vn/stockonline.php?o=foreigner_sell_volume" title="Nhà đầu tư nước ngoài bán">NN<br>Bán</a>
                                    </td>
                                </tr>
                                <tr id="board_header" class="tr_header">
                                    <td align="center" class="">
                                        Giá3
                                    </td>
                                    <td align="center" class="">
                                        <a href="https://www.cophieu68.vn/stockonline.php?o=klm3" title="">KL3</a>
                                    </td>
                                    <td align="center" class="">
                                        Giá2
                                    </td>
                                    <td align="center" class="">
                                        <a href="https://www.cophieu68.vn/stockonline.php?o=klm2" title="">KL2</a>
                                    </td>
                                    <td align="center" class="">
                                        Giá1
                                    </td>
                                    <td align="center" class="">
                                        <a href="https://www.cophieu68.vn/stockonline.php?o=klm1" title="">KL1</a>
                                    </td>


                                    <td align="center" class="">
                                        Giá1
                                    </td>
                                    <td align="center" class="">
                                        <a href="https://www.cophieu68.vn/stockonline.php?o=klb1" title="">KL1</a>
                                    </td>
                                    <td align="center" class="">
                                        Giá2
                                    </td>
                                    <td align="center" class="">
                                        <a href="https://www.cophieu68.vn/stockonline.php?o=klb2" title="">KL2</a>
                                    </td>
                                    <td align="center" class="">
                                        Giá3
                                    </td>
                                    <td align="center" class="">
                                        <a href="https://www.cophieu68.vn/stockonline.php?o=klb3" title="">KL3</a>
                                    </td>
                                </tr>
                                <tr id="tr_ssi" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('ssi')" ondblclick="dbfunction('ssi')" class="ui-sortable-handle">
                                    <td id="ssi_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=ssi" title="" target="_blank" id="s_SSI" class="stockname" >SSI</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('ssi')" onclick="showMoreInfoAtBottom('ssi')"></a></td>
                                    <td id="ssi_ceiling" align="right" class="td_buy"><span class="price_ceiling2">22.75</span></td>
                                    <td id="ssi_open" align="right" class="td_buy"><span class="price2">21.30</span></td>
                                    <td id="ssi_floor" align="right" class="td_buy"><span class="price_floor2">19.85</span></td>

                                    <td id="ssi_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">20.75</span></td>
                                    <td id="ssi_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">50,800</span></td>
                                    <td id="ssi_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">20.80</span></td>
                                    <td id="ssi_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">362,400</span></td>

                                    <td id="ssi_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">20.85</span></td>
                                    <td id="ssi_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">205,800</span></td>

                                    <td id="ssi_close" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">20.90</span></td>
                                    <td id="ssi_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">1,423,300</span></td>
                                    <td id="ssi_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">-0.40</span></td>

                                    <td id="ssi_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">20.90</span></td>
                                    <td id="ssi_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">138,500</span></td>
                                    <td id="ssi_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">20.95</span></td>
                                    <td id="ssi_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">39,800</span></td>
                                    <td id="ssi_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">21</span></td>
                                    <td id="ssi_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">139,200</span></td>

                                    <td id="ssi_volume" align="right" class="td_buy_vol"><span class="price3">17,909,200</span></td>
                                    <td id="ssi_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="price2">21.30</span></td>
                                    <td id="ssi_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">21.50</span></td>
                                    <td id="ssi_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">20.90</span></td>

                                    <td id="ssi_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">1,036,100</span></td>
                                    <td id="ssi_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">762,500</span></td>
                                </tr>
                                <tr id="tr_hpg" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('hpg')" ondblclick="dbfunction('hpg')" class="ui-sortable-handle">
                                    <td id="hpg_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=hpg" title="" target="_blank" id="s_HPG" class="stockname" >HPG</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('hpg')" onclick="showMoreInfoAtBottom('hpg')"></a></td>
                                    <td id="hpg_ceiling" align="right" class="td_buy"><span class="price_ceiling2">24.25</span></td>
                                    <td id="hpg_open" align="right" class="td_buy"><span class="price2">22.70</span></td>
                                    <td id="hpg_floor" align="right" class="td_buy"><span class="price_floor2">21.15</span></td>

                                    <td id="hpg_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">22.10</span></td>
                                    <td id="hpg_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">452,200</span></td>
                                    <td id="hpg_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">22.15</span></td>
                                    <td id="hpg_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">262,800</span></td>

                                    <td id="hpg_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">22.20</span></td>
                                    <td id="hpg_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">117,000</span></td>

                                    <td id="hpg_close" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">22.20</span></td>
                                    <td id="hpg_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">1,556,400</span></td>
                                    <td id="hpg_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">-0.50</span></td>

                                    <td id="hpg_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">22.25</span></td>
                                    <td id="hpg_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">1,900</span></td>
                                    <td id="hpg_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">22.30</span></td>
                                    <td id="hpg_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">130,200</span></td>
                                    <td id="hpg_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">22.35</span></td>
                                    <td id="hpg_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">65,200</span></td>

                                    <td id="hpg_volume" align="right" class="td_buy_vol"><span class="price3">16,642,200</span></td>
                                    <td id="hpg_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="price2">22.70</span></td>
                                    <td id="hpg_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">22.80</span></td>
                                    <td id="hpg_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">22.20</span></td>

                                    <td id="hpg_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">912,300</span></td>
                                    <td id="hpg_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">1,293,500</span></td>
                                </tr>
                                <tr id="tr_vnd" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('vnd')" ondblclick="dbfunction('vnd')" class="ui-sortable-handle">
                                    <td id="vnd_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=vnd" title="" target="_blank" id="s_VND" class="stockname" >VND</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('vnd')" onclick="showMoreInfoAtBottom('vnd')"></a></td>
                                    <td id="vnd_ceiling" align="right" class="td_buy"><span class="price_ceiling2">20.45</span></td>
                                    <td id="vnd_open" align="right" class="td_buy"><span class="price2">19.15</span></td>
                                    <td id="vnd_floor" align="right" class="td_buy"><span class="price_floor2">17.85</span></td>

                                    <td id="vnd_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">18.85</span></td>
                                    <td id="vnd_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">64,000</span></td>
                                    <td id="vnd_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">18.90</span></td>
                                    <td id="vnd_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">303,700</span></td>

                                    <td id="vnd_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">18.95</span></td>
                                    <td id="vnd_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">3,300</span></td>

                                    <td id="vnd_close" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">18.95</span></td>
                                    <td id="vnd_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">988,600</span></td>
                                    <td id="vnd_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">-0.20</span></td>

                                    <td id="vnd_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">19</span></td>
                                    <td id="vnd_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">50,000</span></td>
                                    <td id="vnd_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">19.05</span></td>
                                    <td id="vnd_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">71,700</span></td>
                                    <td id="vnd_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">19.10</span></td>
                                    <td id="vnd_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">166,000</span></td>

                                    <td id="vnd_volume" align="right" class="td_buy_vol"><span class="price3">15,427,200</span></td>
                                    <td id="vnd_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">19.25</span></td>
                                    <td id="vnd_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">19.40</span></td>
                                    <td id="vnd_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">18.95</span></td>

                                    <td id="vnd_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">324,400</span></td>
                                    <td id="vnd_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">27,900</span></td>
                                </tr>
                                <tr id="tr_shb" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('shb')" ondblclick="dbfunction('shb')" class="ui-sortable-handle">
                                    <td id="shb_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=shb" title="" target="_blank" id="s_SHB" class="stockname" >SHB</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('shb')" onclick="showMoreInfoAtBottom('shb')"></a></td>
                                    <td id="shb_ceiling" align="right" class="td_buy"><span class="price_ceiling2">15.65</span></td>
                                    <td id="shb_open" align="right" class="td_buy"><span class="price2">14.65</span></td>
                                    <td id="shb_floor" align="right" class="td_buy"><span class="price_floor2">13.65</span></td>

                                    <td id="shb_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">14.25</span></td>
                                    <td id="shb_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">29,500</span></td>
                                    <td id="shb_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">14.30</span></td>
                                    <td id="shb_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">168,900</span></td>

                                    <td id="shb_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">14.35</span></td>
                                    <td id="shb_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">137,500</span></td>

                                    <td id="shb_close" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">14.35</span></td>
                                    <td id="shb_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">1,126,800</span></td>
                                    <td id="shb_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">-0.30</span></td>

                                    <td id="shb_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">14.40</span></td>
                                    <td id="shb_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">47,300</span></td>
                                    <td id="shb_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">14.45</span></td>
                                    <td id="shb_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">145,100</span></td>
                                    <td id="shb_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">14.50</span></td>
                                    <td id="shb_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">183,500</span></td>

                                    <td id="shb_volume" align="right" class="td_buy_vol"><span class="price3">14,386,200</span></td>
                                    <td id="shb_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">14.70</span></td>
                                    <td id="shb_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">14.95</span></td>
                                    <td id="shb_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">14.35</span></td>

                                    <td id="shb_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">86,300</span></td>
                                    <td id="shb_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">212,300</span></td>
                                </tr>
                                <tr id="tr_hqc" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('hqc')" ondblclick="dbfunction('hqc')" class="ui-sortable-handle">
                                    <td id="hqc_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=hqc" title="" target="_blank" id="s_HQC" class="stockname" >HQC</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('hqc')" onclick="showMoreInfoAtBottom('hqc')"></a></td>
                                    <td id="hqc_ceiling" align="right" class="td_buy"><span class="price_ceiling2">5.27</span></td>
                                    <td id="hqc_open" align="right" class="td_buy"><span class="price2">4.93</span></td>
                                    <td id="hqc_floor" align="right" class="td_buy"><span class="price_floor2">4.59</span></td>

                                    <td id="hqc_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">5.03</span></td>
                                    <td id="hqc_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">2,100</span></td>
                                    <td id="hqc_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">5.04</span></td>
                                    <td id="hqc_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">10,800</span></td>

                                    <td id="hqc_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">5.05</span></td>
                                    <td id="hqc_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">19,100</span></td>

                                    <td id="hqc_close" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">5.05</span></td>
                                    <td id="hqc_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">372,400</span></td>
                                    <td id="hqc_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">0.12</span></td>

                                    <td id="hqc_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">5.09</span></td>
                                    <td id="hqc_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">4,300</span></td>
                                    <td id="hqc_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">5.10</span></td>
                                    <td id="hqc_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">106,700</span></td>
                                    <td id="hqc_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">5.11</span></td>
                                    <td id="hqc_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">11,300</span></td>

                                    <td id="hqc_volume" align="right" class="td_buy_vol"><span class="price3">11,920,500</span></td>
                                    <td id="hqc_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">4.90</span></td>
                                    <td id="hqc_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">5.25</span></td>
                                    <td id="hqc_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">4.82</span></td>

                                    <td id="hqc_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">246,700</span></td>
                                    <td id="hqc_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">11,000</span></td>
                                </tr>
                                <tr id="tr_aaa" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('aaa')" ondblclick="dbfunction('aaa')" class="ui-sortable-handle">
                                    <td id="aaa_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=aaa" title="" target="_blank" id="s_AAA" class="stockname" >AAA</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('aaa')" onclick="showMoreInfoAtBottom('aaa')"></a></td>
                                    <td id="aaa_ceiling" align="right" class="td_buy"><span class="price_ceiling2">12.85</span></td>
                                    <td id="aaa_open" align="right" class="td_buy"><span class="price2">12.05</span></td>
                                    <td id="aaa_floor" align="right" class="td_buy"><span class="price_floor2">11.25</span></td>

                                    <td id="aaa_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">12.35</span></td>
                                    <td id="aaa_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">40,700</span></td>
                                    <td id="aaa_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">12.40</span></td>
                                    <td id="aaa_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">194,800</span></td>

                                    <td id="aaa_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">12.45</span></td>
                                    <td id="aaa_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">127,500</span></td>

                                    <td id="aaa_close" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">12.50</span></td>
                                    <td id="aaa_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">259,900</span></td>
                                    <td id="aaa_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">0.45</span></td>

                                    <td id="aaa_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">12.50</span></td>
                                    <td id="aaa_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">11,900</span></td>
                                    <td id="aaa_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">12.55</span></td>
                                    <td id="aaa_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">99,100</span></td>
                                    <td id="aaa_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">12.60</span></td>
                                    <td id="aaa_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">208,600</span></td>

                                    <td id="aaa_volume" align="right" class="td_buy_vol"><span class="price3">11,841,900</span></td>
                                    <td id="aaa_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">12.15</span></td>
                                    <td id="aaa_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="price_ceiling2">12.85</span></td>
                                    <td id="aaa_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">12</span></td>

                                    <td id="aaa_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">60,200</span></td>
                                    <td id="aaa_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">19,100</span></td>
                                </tr>
                                <tr id="tr_stb" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('stb')" ondblclick="dbfunction('stb')" class="ui-sortable-handle">
                                    <td id="stb_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=stb" title="" target="_blank" id="s_STB" class="stockname" >STB</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('stb')" onclick="showMoreInfoAtBottom('stb')"></a></td>
                                    <td id="stb_ceiling" align="right" class="td_buy"><span class="price_ceiling2">24.70</span></td>
                                    <td id="stb_open" align="right" class="td_buy"><span class="price2">23.10</span></td>
                                    <td id="stb_floor" align="right" class="td_buy"><span class="price_floor2">21.50</span></td>

                                    <td id="stb_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">22.90</span></td>
                                    <td id="stb_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">129,200</span></td>
                                    <td id="stb_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">22.95</span></td>
                                    <td id="stb_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">139,300</span></td>

                                    <td id="stb_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">23</span></td>
                                    <td id="stb_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">305,800</span></td>

                                    <td id="stb_close" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">23</span></td>
                                    <td id="stb_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">1,631,400</span></td>
                                    <td id="stb_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">-0.10</span></td>

                                    <td id="stb_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="price2">23.10</span></td>
                                    <td id="stb_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="price2">3,700</span></td>
                                    <td id="stb_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">23.15</span></td>
                                    <td id="stb_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">87,500</span></td>
                                    <td id="stb_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">23.20</span></td>
                                    <td id="stb_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">117,900</span></td>

                                    <td id="stb_volume" align="right" class="td_buy_vol"><span class="price3">11,581,700</span></td>
                                    <td id="stb_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">23.30</span></td>
                                    <td id="stb_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">23.50</span></td>
                                    <td id="stb_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">23</span></td>

                                    <td id="stb_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">1,561,300</span></td>
                                    <td id="stb_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">766,100</span></td>
                                </tr>
                                <tr id="tr_lpb" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('lpb')" ondblclick="dbfunction('lpb')" class="ui-sortable-handle">
                                    <td id="lpb_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=lpb" title="" target="_blank" id="s_LPB" class="stockname" >LPB</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('lpb')" onclick="showMoreInfoAtBottom('lpb')"></a></td>
                                    <td id="lpb_ceiling" align="right" class="td_buy"><span class="price_ceiling2">15.65</span></td>
                                    <td id="lpb_open" align="right" class="td_buy"><span class="price2">14.65</span></td>
                                    <td id="lpb_floor" align="right" class="td_buy"><span class="price_floor2">13.65</span></td>

                                    <td id="lpb_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">14.30</span></td>
                                    <td id="lpb_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">103,300</span></td>
                                    <td id="lpb_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">14.35</span></td>
                                    <td id="lpb_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">37,600</span></td>

                                    <td id="lpb_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">14.40</span></td>
                                    <td id="lpb_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">134,600</span></td>

                                    <td id="lpb_close" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">14.40</span></td>
                                    <td id="lpb_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">433,500</span></td>
                                    <td id="lpb_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">-0.25</span></td>

                                    <td id="lpb_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">14.45</span></td>
                                    <td id="lpb_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">10,100</span></td>
                                    <td id="lpb_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">14.50</span></td>
                                    <td id="lpb_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">151,500</span></td>
                                    <td id="lpb_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">14.55</span></td>
                                    <td id="lpb_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">28,000</span></td>

                                    <td id="lpb_volume" align="right" class="td_buy_vol"><span class="price3">11,043,100</span></td>
                                    <td id="lpb_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">14.90</span></td>
                                    <td id="lpb_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">15.05</span></td>
                                    <td id="lpb_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">14.40</span></td>

                                    <td id="lpb_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">1,450,900</span></td>
                                    <td id="lpb_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">258,800</span></td>
                                </tr>
                                <tr id="tr_hng" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('hng')" ondblclick="dbfunction('hng')" class="ui-sortable-handle">
                                    <td id="hng_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=hng" title="" target="_blank" id="s_HNG" class="stockname" >HNG</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('hng')" onclick="showMoreInfoAtBottom('hng')"></a></td>
                                    <td id="hng_ceiling" align="right" class="td_buy"><span class="price_ceiling2">6.91</span></td>
                                    <td id="hng_open" align="right" class="td_buy"><span class="price2">6.46</span></td>
                                    <td id="hng_floor" align="right" class="td_buy"><span class="price_floor2">6.01</span></td>

                                    <td id="hng_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">6.39</span></td>
                                    <td id="hng_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">300</span></td>
                                    <td id="hng_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">6.40</span></td>
                                    <td id="hng_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">151,300</span></td>

                                    <td id="hng_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">6.41</span></td>
                                    <td id="hng_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">35,800</span></td>

                                    <td id="hng_close" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">6.41</span></td>
                                    <td id="hng_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">609,300</span></td>
                                    <td id="hng_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">-0.05</span></td>

                                    <td id="hng_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">6.45</span></td>
                                    <td id="hng_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">1,000</span></td>
                                    <td id="hng_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="price2">6.46</span></td>
                                    <td id="hng_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="price2">600</span></td>
                                    <td id="hng_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">6.49</span></td>
                                    <td id="hng_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">14,000</span></td>

                                    <td id="hng_volume" align="right" class="td_buy_vol"><span class="price3">9,982,100</span></td>
                                    <td id="hng_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">6.50</span></td>
                                    <td id="hng_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">6.81</span></td>
                                    <td id="hng_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">6.41</span></td>

                                    <td id="hng_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">158,500</span></td>
                                    <td id="hng_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">6,100</span></td>
                                </tr>
                                <tr id="tr_hag" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('hag')" ondblclick="dbfunction('hag')" class="ui-sortable-handle">
                                    <td id="hag_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=hag" title="" target="_blank" id="s_HAG" class="stockname" >HAG</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('hag')" onclick="showMoreInfoAtBottom('hag')"></a></td>
                                    <td id="hag_ceiling" align="right" class="td_buy"><span class="price_ceiling2">11.85</span></td>
                                    <td id="hag_open" align="right" class="td_buy"><span class="price2">11.10</span></td>
                                    <td id="hag_floor" align="right" class="td_buy"><span class="price_floor2">10.35</span></td>

                                    <td id="hag_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">10.75</span></td>
                                    <td id="hag_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">205,200</span></td>
                                    <td id="hag_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">10.80</span></td>
                                    <td id="hag_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">329,800</span></td>

                                    <td id="hag_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">10.85</span></td>
                                    <td id="hag_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">9,200</span></td>

                                    <td id="hag_close" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">10.85</span></td>
                                    <td id="hag_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">493,300</span></td>
                                    <td id="hag_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">-0.25</span></td>

                                    <td id="hag_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">10.90</span></td>
                                    <td id="hag_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">137,400</span></td>
                                    <td id="hag_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">10.95</span></td>
                                    <td id="hag_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">92,100</span></td>
                                    <td id="hag_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">11</span></td>
                                    <td id="hag_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">405,100</span></td>

                                    <td id="hag_volume" align="right" class="td_buy_vol"><span class="price3">9,516,800</span></td>
                                    <td id="hag_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">11</span></td>
                                    <td id="hag_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">11.30</span></td>
                                    <td id="hag_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">10.70</span></td>

                                    <td id="hag_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">8,900</span></td>
                                    <td id="hag_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">11,100</span></td>
                                </tr>
                                <tr id="tr_gex" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('gex')" ondblclick="dbfunction('gex')" class="ui-sortable-handle">
                                    <td id="gex_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=gex" title="" target="_blank" id="s_GEX" class="stockname" >GEX</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('gex')" onclick="showMoreInfoAtBottom('gex')"></a></td>
                                    <td id="gex_ceiling" align="right" class="td_buy"><span class="price_ceiling2">23.80</span></td>
                                    <td id="gex_open" align="right" class="td_buy"><span class="price2">22.25</span></td>
                                    <td id="gex_floor" align="right" class="td_buy"><span class="price_floor2">20.70</span></td>

                                    <td id="gex_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">22.55</span></td>
                                    <td id="gex_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">7,400</span></td>
                                    <td id="gex_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">22.60</span></td>
                                    <td id="gex_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">66,500</span></td>

                                    <td id="gex_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">22.65</span></td>
                                    <td id="gex_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">62,600</span></td>

                                    <td id="gex_close" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">22.70</span></td>
                                    <td id="gex_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">174,100</span></td>
                                    <td id="gex_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">0.45</span></td>

                                    <td id="gex_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">22.70</span></td>
                                    <td id="gex_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">74,600</span></td>
                                    <td id="gex_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">22.75</span></td>
                                    <td id="gex_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">29,700</span></td>
                                    <td id="gex_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">22.80</span></td>
                                    <td id="gex_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">59,000</span></td>

                                    <td id="gex_volume" align="right" class="td_buy_vol"><span class="price3">9,357,000</span></td>
                                    <td id="gex_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">22.40</span></td>
                                    <td id="gex_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">23.25</span></td>
                                    <td id="gex_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="price2">22.25</span></td>

                                    <td id="gex_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">2,106,700</span></td>
                                    <td id="gex_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">22,200</span></td>
                                </tr>
                                <tr id="tr_flc" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('flc')" ondblclick="dbfunction('flc')" class="ui-sortable-handle">
                                    <td id="flc_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=flc" title="" target="_blank" id="s_FLC" class="stockname" >FLC</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('flc')" onclick="showMoreInfoAtBottom('flc')"></a></td>
                                    <td id="flc_ceiling" align="right" class="td_buy"><span class="price_ceiling2">6.27</span></td>
                                    <td id="flc_open" align="right" class="td_buy"><span class="price2">5.86</span></td>
                                    <td id="flc_floor" align="right" class="td_buy"><span class="price_floor2">5.45</span></td>

                                    <td id="flc_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">5.78</span></td>
                                    <td id="flc_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">151,100</span></td>
                                    <td id="flc_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">5.79</span></td>
                                    <td id="flc_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">35,900</span></td>

                                    <td id="flc_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">5.80</span></td>
                                    <td id="flc_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">35,600</span></td>

                                    <td id="flc_close" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">5.80</span></td>
                                    <td id="flc_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">204,200</span></td>
                                    <td id="flc_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">-0.06</span></td>

                                    <td id="flc_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">5.81</span></td>
                                    <td id="flc_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">31,200</span></td>
                                    <td id="flc_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">5.82</span></td>
                                    <td id="flc_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">5,300</span></td>
                                    <td id="flc_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">5.83</span></td>
                                    <td id="flc_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">6,500</span></td>

                                    <td id="flc_volume" align="right" class="td_buy_vol"><span class="price3">8,705,400</span></td>
                                    <td id="flc_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">5.96</span></td>
                                    <td id="flc_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">6.25</span></td>
                                    <td id="flc_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">5.78</span></td>

                                    <td id="flc_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">152,300</span></td>
                                    <td id="flc_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">2,200</span></td>
                                </tr>
                                <tr id="tr_pow" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('pow')" ondblclick="dbfunction('pow')" class="ui-sortable-handle">
                                    <td id="pow_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=pow" title="" target="_blank" id="s_POW" class="stockname" >POW</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('pow')" onclick="showMoreInfoAtBottom('pow')"></a></td>
                                    <td id="pow_ceiling" align="right" class="td_buy"><span class="price_ceiling2">14.25</span></td>
                                    <td id="pow_open" align="right" class="td_buy"><span class="price2">13.35</span></td>
                                    <td id="pow_floor" align="right" class="td_buy"><span class="price_floor2">12.45</span></td>

                                    <td id="pow_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">13</span></td>
                                    <td id="pow_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">1,312,000</span></td>
                                    <td id="pow_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">13.05</span></td>
                                    <td id="pow_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">1,012,500</span></td>

                                    <td id="pow_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">13.10</span></td>
                                    <td id="pow_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">699,800</span></td>

                                    <td id="pow_close" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">13.15</span></td>
                                    <td id="pow_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">482,800</span></td>
                                    <td id="pow_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">-0.20</span></td>

                                    <td id="pow_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">13.15</span></td>
                                    <td id="pow_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">58,500</span></td>
                                    <td id="pow_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">13.20</span></td>
                                    <td id="pow_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">142,400</span></td>
                                    <td id="pow_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">13.25</span></td>
                                    <td id="pow_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">86,800</span></td>

                                    <td id="pow_volume" align="right" class="td_buy_vol"><span class="price3">8,481,200</span></td>
                                    <td id="pow_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">13.40</span></td>
                                    <td id="pow_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">13.45</span></td>
                                    <td id="pow_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">13.05</span></td>

                                    <td id="pow_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">77,100</span></td>
                                    <td id="pow_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">153,800</span></td>
                                </tr>
                                <tr id="tr_vpb" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('vpb')" ondblclick="dbfunction('vpb')" class="ui-sortable-handle">
                                    <td id="vpb_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=vpb" title="" target="_blank" id="s_VPB" class="stockname" >VPB</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('vpb')" onclick="showMoreInfoAtBottom('vpb')"></a></td>
                                    <td id="vpb_ceiling" align="right" class="td_buy"><span class="price_ceiling2">30.15</span></td>
                                    <td id="vpb_open" align="right" class="td_buy"><span class="price2">28.20</span></td>
                                    <td id="vpb_floor" align="right" class="td_buy"><span class="price_floor2">26.25</span></td>

                                    <td id="vpb_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">28.05</span></td>
                                    <td id="vpb_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">193,700</span></td>
                                    <td id="vpb_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">28.10</span></td>
                                    <td id="vpb_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">177,900</span></td>

                                    <td id="vpb_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">28.15</span></td>
                                    <td id="vpb_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">34,300</span></td>

                                    <td id="vpb_close" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">28.15</span></td>
                                    <td id="vpb_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">319,900</span></td>
                                    <td id="vpb_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">-0.05</span></td>

                                    <td id="vpb_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="price2">28.20</span></td>
                                    <td id="vpb_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="price2">162,800</span></td>
                                    <td id="vpb_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">28.25</span></td>
                                    <td id="vpb_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">72,300</span></td>
                                    <td id="vpb_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">28.30</span></td>
                                    <td id="vpb_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">166,300</span></td>

                                    <td id="vpb_volume" align="right" class="td_buy_vol"><span class="price3">7,270,700</span></td>
                                    <td id="vpb_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">28.30</span></td>
                                    <td id="vpb_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">28.50</span></td>
                                    <td id="vpb_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">28.10</span></td>

                                    <td id="vpb_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3"></span></td>
                                    <td id="vpb_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3"></span></td>
                                </tr>
                                <tr id="tr_mbb" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('mbb')" ondblclick="dbfunction('mbb')" class="ui-sortable-handle">
                                    <td id="mbb_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=mbb" title="" target="_blank" id="s_MBB" class="stockname" >MBB</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('mbb')" onclick="showMoreInfoAtBottom('mbb')"></a></td>
                                    <td id="mbb_ceiling" align="right" class="td_buy"><span class="price_ceiling2">27.35</span></td>
                                    <td id="mbb_open" align="right" class="td_buy"><span class="price2">25.60</span></td>
                                    <td id="mbb_floor" align="right" class="td_buy"><span class="price_floor2">23.85</span></td>

                                    <td id="mbb_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">25.45</span></td>
                                    <td id="mbb_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">3,000</span></td>
                                    <td id="mbb_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">25.50</span></td>
                                    <td id="mbb_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">627,300</span></td>

                                    <td id="mbb_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">25.55</span></td>
                                    <td id="mbb_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">11,000</span></td>

                                    <td id="mbb_close" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">25.55</span></td>
                                    <td id="mbb_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">303,300</span></td>
                                    <td id="mbb_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">-0.05</span></td>

                                    <td id="mbb_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="price2">25.60</span></td>
                                    <td id="mbb_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="price2">11,500</span></td>
                                    <td id="mbb_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">25.65</span></td>
                                    <td id="mbb_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">67,800</span></td>
                                    <td id="mbb_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">25.70</span></td>
                                    <td id="mbb_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">264,900</span></td>

                                    <td id="mbb_volume" align="right" class="td_buy_vol"><span class="price3">7,085,100</span></td>
                                    <td id="mbb_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="price2">25.60</span></td>
                                    <td id="mbb_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">25.90</span></td>
                                    <td id="mbb_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">25.55</span></td>

                                    <td id="mbb_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">406,000</span></td>
                                    <td id="mbb_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">400,500</span></td>
                                </tr>
                                <tr id="tr_dxg" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('dxg')" ondblclick="dbfunction('dxg')" class="ui-sortable-handle">
                                    <td id="dxg_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=dxg" title="" target="_blank" id="s_DXG" class="stockname" >DXG</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('dxg')" onclick="showMoreInfoAtBottom('dxg')"></a></td>
                                    <td id="dxg_ceiling" align="right" class="td_buy"><span class="price_ceiling2">23.85</span></td>
                                    <td id="dxg_open" align="right" class="td_buy"><span class="price2">22.30</span></td>
                                    <td id="dxg_floor" align="right" class="td_buy"><span class="price_floor2">20.75</span></td>

                                    <td id="dxg_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">21.90</span></td>
                                    <td id="dxg_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">294,200</span></td>
                                    <td id="dxg_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">21.95</span></td>
                                    <td id="dxg_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">143,600</span></td>

                                    <td id="dxg_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">22</span></td>
                                    <td id="dxg_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">235,200</span></td>

                                    <td id="dxg_close" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">22</span></td>
                                    <td id="dxg_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">506,800</span></td>
                                    <td id="dxg_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">-0.30</span></td>

                                    <td id="dxg_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">22.05</span></td>
                                    <td id="dxg_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">5,700</span></td>
                                    <td id="dxg_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">22.10</span></td>
                                    <td id="dxg_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">8,300</span></td>
                                    <td id="dxg_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">22.15</span></td>
                                    <td id="dxg_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">11,900</span></td>

                                    <td id="dxg_volume" align="right" class="td_buy_vol"><span class="price3">6,995,400</span></td>
                                    <td id="dxg_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">22.20</span></td>
                                    <td id="dxg_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">22.45</span></td>
                                    <td id="dxg_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">21.90</span></td>

                                    <td id="dxg_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">546,300</span></td>
                                    <td id="dxg_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">523,900</span></td>
                                </tr>
                                <tr id="tr_nkg" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('nkg')" ondblclick="dbfunction('nkg')" class="ui-sortable-handle">
                                    <td id="nkg_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=nkg" title="" target="_blank" id="s_NKG" class="stockname" >NKG</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('nkg')" onclick="showMoreInfoAtBottom('nkg')"></a></td>
                                    <td id="nkg_ceiling" align="right" class="td_buy"><span class="price_ceiling2">20.80</span></td>
                                    <td id="nkg_open" align="right" class="td_buy"><span class="price2">19.45</span></td>
                                    <td id="nkg_floor" align="right" class="td_buy"><span class="price_floor2">18.10</span></td>

                                    <td id="nkg_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">19.10</span></td>
                                    <td id="nkg_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">87,600</span></td>
                                    <td id="nkg_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">19.15</span></td>
                                    <td id="nkg_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">25,100</span></td>

                                    <td id="nkg_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">19.20</span></td>
                                    <td id="nkg_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">121,500</span></td>

                                    <td id="nkg_close" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">19.25</span></td>
                                    <td id="nkg_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">295,900</span></td>
                                    <td id="nkg_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">-0.20</span></td>

                                    <td id="nkg_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">19.25</span></td>
                                    <td id="nkg_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">16,400</span></td>
                                    <td id="nkg_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">19.30</span></td>
                                    <td id="nkg_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">31,500</span></td>
                                    <td id="nkg_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">19.35</span></td>
                                    <td id="nkg_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">45,000</span></td>

                                    <td id="nkg_volume" align="right" class="td_buy_vol"><span class="price3">6,988,700</span></td>
                                    <td id="nkg_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">19.35</span></td>
                                    <td id="nkg_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">19.60</span></td>
                                    <td id="nkg_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">19.20</span></td>

                                    <td id="nkg_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">71,300</span></td>
                                    <td id="nkg_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">300</span></td>
                                </tr>
                                <tr id="tr_hcm" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('hcm')" ondblclick="dbfunction('hcm')" class="ui-sortable-handle">
                                    <td id="hcm_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=hcm" title="" target="_blank" id="s_HCM" class="stockname" >HCM</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('hcm')" onclick="showMoreInfoAtBottom('hcm')"></a></td>
                                    <td id="hcm_ceiling" align="right" class="td_buy"><span class="price_ceiling2">27.05</span></td>
                                    <td id="hcm_open" align="right" class="td_buy"><span class="price2">25.30</span></td>
                                    <td id="hcm_floor" align="right" class="td_buy"><span class="price_floor2">23.55</span></td>

                                    <td id="hcm_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">24.55</span></td>
                                    <td id="hcm_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">22,000</span></td>
                                    <td id="hcm_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">24.60</span></td>
                                    <td id="hcm_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">86,100</span></td>

                                    <td id="hcm_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">24.65</span></td>
                                    <td id="hcm_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">42,400</span></td>

                                    <td id="hcm_close" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">24.65</span></td>
                                    <td id="hcm_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">499,100</span></td>
                                    <td id="hcm_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">-0.65</span></td>

                                    <td id="hcm_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">24.70</span></td>
                                    <td id="hcm_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">1,400</span></td>
                                    <td id="hcm_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">24.80</span></td>
                                    <td id="hcm_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">1,000</span></td>
                                    <td id="hcm_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">24.85</span></td>
                                    <td id="hcm_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">100</span></td>

                                    <td id="hcm_volume" align="right" class="td_buy_vol"><span class="price3">6,173,100</span></td>
                                    <td id="hcm_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">25</span></td>
                                    <td id="hcm_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">25.50</span></td>
                                    <td id="hcm_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">24.65</span></td>

                                    <td id="hcm_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">10,800</span></td>
                                    <td id="hcm_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">44,300</span></td>
                                </tr>
                                <tr id="tr_dig" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('dig')" ondblclick="dbfunction('dig')" class="ui-sortable-handle">
                                    <td id="dig_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=dig" title="" target="_blank" id="s_DIG" class="stockname" >DIG</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('dig')" onclick="showMoreInfoAtBottom('dig')"></a></td>
                                    <td id="dig_ceiling" align="right" class="td_buy"><span class="price_ceiling2">38.90</span></td>
                                    <td id="dig_open" align="right" class="td_buy"><span class="price2">36.40</span></td>
                                    <td id="dig_floor" align="right" class="td_buy"><span class="price_floor2">33.90</span></td>

                                    <td id="dig_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">35.60</span></td>
                                    <td id="dig_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">192,500</span></td>
                                    <td id="dig_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">35.65</span></td>
                                    <td id="dig_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">54,500</span></td>

                                    <td id="dig_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">35.70</span></td>
                                    <td id="dig_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">65,500</span></td>

                                    <td id="dig_close" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">35.70</span></td>
                                    <td id="dig_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">327,800</span></td>
                                    <td id="dig_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">-0.70</span></td>

                                    <td id="dig_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">35.75</span></td>
                                    <td id="dig_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">7,600</span></td>
                                    <td id="dig_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">35.80</span></td>
                                    <td id="dig_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">44,700</span></td>
                                    <td id="dig_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">35.85</span></td>
                                    <td id="dig_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">41,500</span></td>

                                    <td id="dig_volume" align="right" class="td_buy_vol"><span class="price3">6,017,800</span></td>
                                    <td id="dig_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">36</span></td>
                                    <td id="dig_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">36.55</span></td>
                                    <td id="dig_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">35.60</span></td>

                                    <td id="dig_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">9,900</span></td>
                                    <td id="dig_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">1,800</span></td>
                                </tr>
                                <tr id="tr_kbc" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('kbc')" ondblclick="dbfunction('kbc')" class="ui-sortable-handle">
                                    <td id="kbc_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=kbc" title="" target="_blank" id="s_KBC" class="stockname" >KBC</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('kbc')" onclick="showMoreInfoAtBottom('kbc')"></a></td>
                                    <td id="kbc_ceiling" align="right" class="td_buy"><span class="price_ceiling2">39.40</span></td>
                                    <td id="kbc_open" align="right" class="td_buy"><span class="price2">36.85</span></td>
                                    <td id="kbc_floor" align="right" class="td_buy"><span class="price_floor2">34.30</span></td>

                                    <td id="kbc_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">36.70</span></td>
                                    <td id="kbc_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">31,400</span></td>
                                    <td id="kbc_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">36.75</span></td>
                                    <td id="kbc_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">23,800</span></td>

                                    <td id="kbc_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">36.80</span></td>
                                    <td id="kbc_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">226,000</span></td>

                                    <td id="kbc_close" nowrap="nowrap" align="right" class="td_buy"><span class="price2">36.85</span></td>
                                    <td id="kbc_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="price2">301,600</span></td>
                                    <td id="kbc_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="price2">0</span></td>

                                    <td id="kbc_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="price2">36.85</span></td>
                                    <td id="kbc_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="price2">9,200</span></td>
                                    <td id="kbc_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">36.90</span></td>
                                    <td id="kbc_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">2,200</span></td>
                                    <td id="kbc_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">37</span></td>
                                    <td id="kbc_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">63,200</span></td>

                                    <td id="kbc_volume" align="right" class="td_buy_vol"><span class="price3">5,970,400</span></td>
                                    <td id="kbc_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">36.80</span></td>
                                    <td id="kbc_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">37.50</span></td>
                                    <td id="kbc_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">36.50</span></td>

                                    <td id="kbc_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">96,400</span></td>
                                    <td id="kbc_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">568,300</span></td>
                                </tr>
                                <tr id="tr_mwg" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('mwg')" ondblclick="dbfunction('mwg')" class="ui-sortable-handle">
                                    <td id="mwg_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=mwg" title="" target="_blank" id="s_MWG" class="stockname" >MWG</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('mwg')" onclick="showMoreInfoAtBottom('mwg')"></a></td>
                                    <td id="mwg_ceiling" align="right" class="td_buy"><span class="price_ceiling2">68.50</span></td>
                                    <td id="mwg_open" align="right" class="td_buy"><span class="price2">64.10</span></td>
                                    <td id="mwg_floor" align="right" class="td_buy"><span class="price_floor2">59.70</span></td>

                                    <td id="mwg_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">64.20</span></td>
                                    <td id="mwg_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">23,100</span></td>
                                    <td id="mwg_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">64.30</span></td>
                                    <td id="mwg_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">58,500</span></td>

                                    <td id="mwg_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">64.40</span></td>
                                    <td id="mwg_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">22,700</span></td>

                                    <td id="mwg_close" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">64.50</span></td>
                                    <td id="mwg_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">143,400</span></td>
                                    <td id="mwg_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">0.40</span></td>

                                    <td id="mwg_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">64.50</span></td>
                                    <td id="mwg_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">22,900</span></td>
                                    <td id="mwg_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">64.60</span></td>
                                    <td id="mwg_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">1,300</span></td>
                                    <td id="mwg_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">64.70</span></td>
                                    <td id="mwg_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">16,800</span></td>

                                    <td id="mwg_volume" align="right" class="td_buy_vol"><span class="price3">5,454,700</span></td>
                                    <td id="mwg_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">64.90</span></td>
                                    <td id="mwg_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">66.80</span></td>
                                    <td id="mwg_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">64.20</span></td>

                                    <td id="mwg_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">3,207,300</span></td>
                                    <td id="mwg_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">1,584,500</span></td>
                                </tr>
                                <tr id="tr_vix" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('vix')" ondblclick="dbfunction('vix')" class="ui-sortable-handle">
                                    <td id="vix_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=vix" title="" target="_blank" id="s_VIX" class="stockname" >VIX</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('vix')" onclick="showMoreInfoAtBottom('vix')"></a></td>
                                    <td id="vix_ceiling" align="right" class="td_buy"><span class="price_ceiling2">11.70</span></td>
                                    <td id="vix_open" align="right" class="td_buy"><span class="price2">10.95</span></td>
                                    <td id="vix_floor" align="right" class="td_buy"><span class="price_floor2">10.20</span></td>

                                    <td id="vix_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">10.60</span></td>
                                    <td id="vix_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">125,500</span></td>
                                    <td id="vix_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">10.65</span></td>
                                    <td id="vix_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">79,600</span></td>

                                    <td id="vix_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">10.70</span></td>
                                    <td id="vix_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">220,500</span></td>

                                    <td id="vix_close" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">10.75</span></td>
                                    <td id="vix_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">320,900</span></td>
                                    <td id="vix_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">-0.20</span></td>

                                    <td id="vix_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">10.75</span></td>
                                    <td id="vix_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">134,200</span></td>
                                    <td id="vix_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">10.80</span></td>
                                    <td id="vix_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">168,100</span></td>
                                    <td id="vix_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">10.85</span></td>
                                    <td id="vix_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">58,300</span></td>

                                    <td id="vix_volume" align="right" class="td_buy_vol"><span class="price3">5,315,100</span></td>
                                    <td id="vix_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">11</span></td>
                                    <td id="vix_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">11.05</span></td>
                                    <td id="vix_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">10.65</span></td>

                                    <td id="vix_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3"></span></td>
                                    <td id="vix_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">23,100</span></td>
                                </tr>
                                <tr id="tr_ita" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('ita')" ondblclick="dbfunction('ita')" class="ui-sortable-handle">
                                    <td id="ita_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=ita" title="" target="_blank" id="s_ITA" class="stockname" >ITA</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('ita')" onclick="showMoreInfoAtBottom('ita')"></a></td>
                                    <td id="ita_ceiling" align="right" class="td_buy"><span class="price_ceiling2">7.97</span></td>
                                    <td id="ita_open" align="right" class="td_buy"><span class="price2">7.45</span></td>
                                    <td id="ita_floor" align="right" class="td_buy"><span class="price_floor2">6.93</span></td>

                                    <td id="ita_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">7.43</span></td>
                                    <td id="ita_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">29,100</span></td>
                                    <td id="ita_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">7.44</span></td>
                                    <td id="ita_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">11,700</span></td>

                                    <td id="ita_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="price2">7.45</span></td>
                                    <td id="ita_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="price2">50,900</span></td>

                                    <td id="ita_close" nowrap="nowrap" align="right" class="td_buy"><span class="price2">7.45</span></td>
                                    <td id="ita_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="price2">158,800</span></td>
                                    <td id="ita_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="price2">0</span></td>

                                    <td id="ita_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">7.46</span></td>
                                    <td id="ita_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">107,600</span></td>
                                    <td id="ita_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">7.47</span></td>
                                    <td id="ita_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">10,000</span></td>
                                    <td id="ita_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">7.48</span></td>
                                    <td id="ita_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">7,400</span></td>

                                    <td id="ita_volume" align="right" class="td_buy_vol"><span class="price3">4,881,100</span></td>
                                    <td id="ita_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="price2">7.45</span></td>
                                    <td id="ita_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">7.60</span></td>
                                    <td id="ita_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">7.39</span></td>

                                    <td id="ita_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">136,600</span></td>
                                    <td id="ita_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">3,600</span></td>
                                </tr>
                                <tr id="tr_pvd" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('pvd')" ondblclick="dbfunction('pvd')" class="ui-sortable-handle">
                                    <td id="pvd_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=pvd" title="" target="_blank" id="s_PVD" class="stockname" >PVD</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('pvd')" onclick="showMoreInfoAtBottom('pvd')"></a></td>
                                    <td id="pvd_ceiling" align="right" class="td_buy"><span class="price_ceiling2">18.20</span></td>
                                    <td id="pvd_open" align="right" class="td_buy"><span class="price2">17.05</span></td>
                                    <td id="pvd_floor" align="right" class="td_buy"><span class="price_floor2">15.90</span></td>

                                    <td id="pvd_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">16.90</span></td>
                                    <td id="pvd_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">42,300</span></td>
                                    <td id="pvd_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">16.95</span></td>
                                    <td id="pvd_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">4,600</span></td>

                                    <td id="pvd_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">17</span></td>
                                    <td id="pvd_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">86,200</span></td>

                                    <td id="pvd_close" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">17</span></td>
                                    <td id="pvd_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">515,400</span></td>
                                    <td id="pvd_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">-0.05</span></td>

                                    <td id="pvd_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">17.10</span></td>
                                    <td id="pvd_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">18,400</span></td>
                                    <td id="pvd_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">17.20</span></td>
                                    <td id="pvd_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">99,300</span></td>
                                    <td id="pvd_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">17.25</span></td>
                                    <td id="pvd_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">127,100</span></td>

                                    <td id="pvd_volume" align="right" class="td_buy_vol"><span class="price3">4,870,900</span></td>
                                    <td id="pvd_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">17</span></td>
                                    <td id="pvd_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">17.50</span></td>
                                    <td id="pvd_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">17</span></td>

                                    <td id="pvd_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">76,800</span></td>
                                    <td id="pvd_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">189,700</span></td>
                                </tr>
                                <tr id="tr_vcg" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('vcg')" ondblclick="dbfunction('vcg')" class="ui-sortable-handle">
                                    <td id="vcg_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=vcg" title="" target="_blank" id="s_VCG" class="stockname" >VCG</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('vcg')" onclick="showMoreInfoAtBottom('vcg')"></a></td>
                                    <td id="vcg_ceiling" align="right" class="td_buy"><span class="price_ceiling2">22.20</span></td>
                                    <td id="vcg_open" align="right" class="td_buy"><span class="price2">20.75</span></td>
                                    <td id="vcg_floor" align="right" class="td_buy"><span class="price_floor2">19.30</span></td>

                                    <td id="vcg_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">20.95</span></td>
                                    <td id="vcg_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">1,200</span></td>
                                    <td id="vcg_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">21</span></td>
                                    <td id="vcg_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">58,500</span></td>

                                    <td id="vcg_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">21.05</span></td>
                                    <td id="vcg_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">7,600</span></td>

                                    <td id="vcg_close" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">21.10</span></td>
                                    <td id="vcg_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">268,900</span></td>
                                    <td id="vcg_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">0.35</span></td>

                                    <td id="vcg_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">21.10</span></td>
                                    <td id="vcg_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">118,600</span></td>
                                    <td id="vcg_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">21.15</span></td>
                                    <td id="vcg_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">1,900</span></td>
                                    <td id="vcg_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">21.20</span></td>
                                    <td id="vcg_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">5,300</span></td>

                                    <td id="vcg_volume" align="right" class="td_buy_vol"><span class="price3">4,551,600</span></td>
                                    <td id="vcg_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="price2">20.75</span></td>
                                    <td id="vcg_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">21.75</span></td>
                                    <td id="vcg_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="price2">20.75</span></td>

                                    <td id="vcg_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">8,000</span></td>
                                    <td id="vcg_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">4,400</span></td>
                                </tr>
                                <tr id="tr_dbc" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('dbc')" ondblclick="dbfunction('dbc')" class="ui-sortable-handle">
                                    <td id="dbc_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=dbc" title="" target="_blank" id="s_DBC" class="stockname" >DBC</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('dbc')" onclick="showMoreInfoAtBottom('dbc')"></a></td>
                                    <td id="dbc_ceiling" align="right" class="td_buy"><span class="price_ceiling2">27.20</span></td>
                                    <td id="dbc_open" align="right" class="td_buy"><span class="price2">25.45</span></td>
                                    <td id="dbc_floor" align="right" class="td_buy"><span class="price_floor2">23.70</span></td>

                                    <td id="dbc_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">26.20</span></td>
                                    <td id="dbc_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">75,100</span></td>
                                    <td id="dbc_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">26.25</span></td>
                                    <td id="dbc_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">55,600</span></td>

                                    <td id="dbc_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">26.30</span></td>
                                    <td id="dbc_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">78,800</span></td>

                                    <td id="dbc_close" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">26.40</span></td>
                                    <td id="dbc_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">333,500</span></td>
                                    <td id="dbc_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">0.95</span></td>

                                    <td id="dbc_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">26.40</span></td>
                                    <td id="dbc_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">82,100</span></td>
                                    <td id="dbc_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">26.45</span></td>
                                    <td id="dbc_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">24,000</span></td>
                                    <td id="dbc_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">26.50</span></td>
                                    <td id="dbc_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">105,400</span></td>

                                    <td id="dbc_volume" align="right" class="td_buy_vol"><span class="price3">4,479,000</span></td>
                                    <td id="dbc_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">25.70</span></td>
                                    <td id="dbc_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">26.75</span></td>
                                    <td id="dbc_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">25.65</span></td>

                                    <td id="dbc_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">44,700</span></td>
                                    <td id="dbc_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">1,100</span></td>
                                </tr>
                                <tr id="tr_tcb" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('tcb')" ondblclick="dbfunction('tcb')" class="ui-sortable-handle">
                                    <td id="tcb_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=tcb" title="" target="_blank" id="s_TCB" class="stockname" >TCB</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('tcb')" onclick="showMoreInfoAtBottom('tcb')"></a></td>
                                    <td id="tcb_ceiling" align="right" class="td_buy"><span class="price_ceiling2">39.40</span></td>
                                    <td id="tcb_open" align="right" class="td_buy"><span class="price2">36.85</span></td>
                                    <td id="tcb_floor" align="right" class="td_buy"><span class="price_floor2">34.30</span></td>

                                    <td id="tcb_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">37</span></td>
                                    <td id="tcb_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">179,100</span></td>
                                    <td id="tcb_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">37.05</span></td>
                                    <td id="tcb_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">38,900</span></td>

                                    <td id="tcb_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">37.10</span></td>
                                    <td id="tcb_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">4,700</span></td>

                                    <td id="tcb_close" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">37.10</span></td>
                                    <td id="tcb_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">199,100</span></td>
                                    <td id="tcb_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">0.25</span></td>

                                    <td id="tcb_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">37.15</span></td>
                                    <td id="tcb_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">27,400</span></td>
                                    <td id="tcb_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">37.20</span></td>
                                    <td id="tcb_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">41,600</span></td>
                                    <td id="tcb_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">37.25</span></td>
                                    <td id="tcb_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">56,300</span></td>

                                    <td id="tcb_volume" align="right" class="td_buy_vol"><span class="price3">4,424,700</span></td>
                                    <td id="tcb_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">37.30</span></td>
                                    <td id="tcb_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">37.90</span></td>
                                    <td id="tcb_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">37.05</span></td>

                                    <td id="tcb_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3"></span></td>
                                    <td id="tcb_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3"></span></td>
                                </tr>
                                <tr id="tr_vib" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('vib')" ondblclick="dbfunction('vib')" class="ui-sortable-handle">
                                    <td id="vib_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=vib" title="" target="_blank" id="s_VIB" class="stockname" >VIB</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('vib')" onclick="showMoreInfoAtBottom('vib')"></a></td>
                                    <td id="vib_ceiling" align="right" class="td_buy"><span class="price_ceiling2">26.85</span></td>
                                    <td id="vib_open" align="right" class="td_buy"><span class="price2">25.10</span></td>
                                    <td id="vib_floor" align="right" class="td_buy"><span class="price_floor2">23.35</span></td>

                                    <td id="vib_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">26.05</span></td>
                                    <td id="vib_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">17,500</span></td>
                                    <td id="vib_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">26.10</span></td>
                                    <td id="vib_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">40,000</span></td>

                                    <td id="vib_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">26.15</span></td>
                                    <td id="vib_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">3,700</span></td>

                                    <td id="vib_close" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">26.20</span></td>
                                    <td id="vib_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">492,600</span></td>
                                    <td id="vib_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">1.10</span></td>

                                    <td id="vib_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">26.20</span></td>
                                    <td id="vib_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">155,500</span></td>
                                    <td id="vib_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">26.25</span></td>
                                    <td id="vib_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">62,300</span></td>
                                    <td id="vib_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">26.30</span></td>
                                    <td id="vib_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">55,100</span></td>

                                    <td id="vib_volume" align="right" class="td_buy_vol"><span class="price3">4,380,500</span></td>
                                    <td id="vib_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">25.45</span></td>
                                    <td id="vib_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">26.45</span></td>
                                    <td id="vib_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">25.15</span></td>

                                    <td id="vib_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3"></span></td>
                                    <td id="vib_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3"></span></td>
                                </tr>
                                <tr id="tr_aph" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('aph')" ondblclick="dbfunction('aph')" class="ui-sortable-handle">
                                    <td id="aph_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=aph" title="" target="_blank" id="s_APH" class="stockname" >APH</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('aph')" onclick="showMoreInfoAtBottom('aph')"></a></td>
                                    <td id="aph_ceiling" align="right" class="td_buy"><span class="price_ceiling2">13.95</span></td>
                                    <td id="aph_open" align="right" class="td_buy"><span class="price2">13.05</span></td>
                                    <td id="aph_floor" align="right" class="td_buy"><span class="price_floor2">12.15</span></td>

                                    <td id="aph_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="price2">13.05</span></td>
                                    <td id="aph_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="price2">74,900</span></td>
                                    <td id="aph_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">13.10</span></td>
                                    <td id="aph_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">88,000</span></td>

                                    <td id="aph_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">13.15</span></td>
                                    <td id="aph_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">1,600</span></td>

                                    <td id="aph_close" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">13.15</span></td>
                                    <td id="aph_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">107,100</span></td>
                                    <td id="aph_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">0.10</span></td>

                                    <td id="aph_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">13.20</span></td>
                                    <td id="aph_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">12,900</span></td>
                                    <td id="aph_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">13.25</span></td>
                                    <td id="aph_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">16,700</span></td>
                                    <td id="aph_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="priceup2">13.30</span></td>
                                    <td id="aph_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="priceup2">75,800</span></td>

                                    <td id="aph_volume" align="right" class="td_buy_vol"><span class="price3">4,121,900</span></td>
                                    <td id="aph_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">13.10</span></td>
                                    <td id="aph_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">13.65</span></td>
                                    <td id="aph_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="price2">13.05</span></td>

                                    <td id="aph_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">89,900</span></td>
                                    <td id="aph_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3">300</span></td>
                                </tr>
                                <tr id="tr_hbc" onmouseover="hoverTR2(this, '#333');" onmouseout="outTR(this);" onclick="showMoreInfoAtBottom('hbc')" ondblclick="dbfunction('hbc')" class="ui-sortable-handle">
                                    <td id="hbc_stockname" class="td_stock" align="left">
                                        <a href="https://www.cophieu68.vn/snapshot.php?id=hbc" title="" target="_blank" id="s_HBC" class="stockname" >HBC</a>
                                    </td>
                                    <td class="td_stock"><a href="javascript:void(0)" onmouseover="showMoreInfoAtBottom('hbc')" onclick="showMoreInfoAtBottom('hbc')"></a></td>
                                    <td id="hbc_ceiling" align="right" class="td_buy"><span class="price_ceiling2">21.70</span></td>
                                    <td id="hbc_open" align="right" class="td_buy"><span class="price2">20.30</span></td>
                                    <td id="hbc_floor" align="right" class="td_buy"><span class="price_floor2">18.90</span></td>

                                    <td id="hbc_gm3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">19.70</span></td>
                                    <td id="hbc_klm3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">37,200</span></td>
                                    <td id="hbc_gm2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">19.75</span></td>
                                    <td id="hbc_klm2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">37,200</span></td>

                                    <td id="hbc_gm1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">19.80</span></td>
                                    <td id="hbc_klm1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">177,000</span></td>

                                    <td id="hbc_close" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">19.80</span></td>
                                    <td id="hbc_current_volume" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">451,400</span></td>
                                    <td id="hbc_price_change" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">-0.50</span></td>

                                    <td id="hbc_gb1" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">19.85</span></td>
                                    <td id="hbc_klb1" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">35,300</span></td>
                                    <td id="hbc_gb2" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">19.95</span></td>
                                    <td id="hbc_klb2" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">13,600</span></td>
                                    <td id="hbc_gb3" nowrap="nowrap" align="right" class="td_stock"><span class="pricedown2">20</span></td>
                                    <td id="hbc_klb3" nowrap="nowrap" align="right" class="td_stock_vol"><span class="pricedown2">700</span></td>

                                    <td id="hbc_volume" align="right" class="td_buy_vol"><span class="price3">3,754,000</span></td>
                                    <td id="hbc_price_open" nowrap="nowrap" align="right" class="td_buy"><span class="price2">20.30</span></td>
                                    <td id="hbc_price_highest" nowrap="nowrap" align="right" class="td_buy"><span class="priceup2">20.65</span></td>
                                    <td id="hbc_price_lowest" nowrap="nowrap" align="right" class="td_buy"><span class="pricedown2">19.80</span></td>

                                    <td id="hbc_fbvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3"></span></td>
                                    <td id="hbc_fsvolume" nowrap="nowrap" align="right" class="td_buy"><span class="price3"></span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
