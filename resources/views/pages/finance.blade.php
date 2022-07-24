@extends('pages.app')
@section('content')
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div id="tradingview_d280d" style="height: 500px"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
        <script type="text/javascript">
            new TradingView.widget(
                {
                    "autosize": true,
                    "symbol": "NASDAQ:AAPL",
                    "timezone": "Etc/UTC",
                    "theme": "dark",
                    "style": "1",
                    "locale": "en",
                    "toolbar_bg": "#f1f3f6",
                    "enable_publishing": true,
                    "withdateranges": true,
                    "range": "YTD",
                    "hide_side_toolbar": false,
                    "allow_symbol_change": true,
                    "details": true,
                    "hotlist": true,
                    "calendar": true,
                    "show_popup_button": true,
                    "popup_width": "1000",
                    "popup_height": "650",
                    "container_id": "tradingview_d280d"
                }
            );
        </script>
    </div>
    <!-- TradingView Widget END -->
@stop
