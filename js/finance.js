$(document).ready(function () {
    var api_key = 'q6BR4gNRtXWCDok8XxYz';
    
    if ($('.stocks').length > 0) {
        $.getJSON('https://www.quandl.com/api/v3/datasets/YAHOO/INDEX_DJI.json?api_key=' + api_key + '&column_index=4', function (data) {
            console.log('data: ' + data.dataset.data[0][1]);

            var last_price, price_change, perc_change;
            last_price = data.dataset.data[0][1];
            price_change = data.dataset.data[0][1] - data.dataset.data[1][1];
            perc_change = price_change/data.dataset.data[1][1] * 100;

            $('#stock-dji .last-price').html(last_price.toLocaleString());
            $('#stock-dji .price-change .text').html(price_change.toFixed(2) + ' (' + perc_change.toFixed(2) + '%)');

            if (price_change >= 0) $('#stock-dji .price-change').addClass('up');

            $('#stock-dji .info').addClass('loaded');
        });

        $.getJSON('https://www.quandl.com/api/v3/datasets/NASDAQOMX/XCQ.json?api_key=' + api_key + '&column_index=1', function (data) {
            console.log('data: ' + data.dataset.data[0][1]);

            var last_price, price_change, perc_change;
            last_price = data.dataset.data[0][1];
            price_change = data.dataset.data[0][1] - data.dataset.data[1][1];
            perc_change = price_change/data.dataset.data[1][1] * 100;

            $('#stock-nsd .last-price').html(last_price.toLocaleString());
            $('#stock-nsd .price-change .text').html(price_change.toFixed(2) + ' (' + perc_change.toFixed(2) + '%)');

            if (price_change >= 0) $('#stock-nsd .price-change').addClass('up');

            $('#stock-nsd .info').addClass('loaded');
        });

        $.getJSON('https://www.quandl.com/api/v3/datasets/YAHOO/INDEX_NYA.json?api_key=' + api_key + '&column_index=4', function (data) {
            console.log('data: ' + data.dataset.data[0][1]);

            var last_price, price_change, perc_change;
            last_price = data.dataset.data[0][1];
            price_change = data.dataset.data[0][1] - data.dataset.data[1][1];
            perc_change = price_change/data.dataset.data[1][1] * 100;

            $('#stock-nya .last-price').html(last_price.toLocaleString());
            $('#stock-nya .price-change .text').html(price_change.toFixed(2) + ' (' + perc_change.toFixed(2) + '%)');

            if (price_change >= 0) $('#stock-nya .price-change').addClass('up');

            $('#stock-nya .info').addClass('loaded');
        });

        $.getJSON('https://www.quandl.com/api/v3/datasets/YAHOO/INDEX_GSPC.json?api_key=' + api_key + '&column_index=4', function (data) {
            console.log('data: ' + data.dataset.data[0][1]);

            var last_price, price_change, perc_change;
            last_price = data.dataset.data[0][1];
            price_change = data.dataset.data[0][1] - data.dataset.data[1][1];
            perc_change = price_change/data.dataset.data[1][1] * 100;

            $('#stock-gspc .last-price').html(last_price.toLocaleString());
            $('#stock-gspc .price-change .text').html(price_change.toFixed(2) + ' (' + perc_change.toFixed(2) + '%)');

            if (price_change >= 0) $('#stock-gspc .price-change').addClass('up');

            $('#stock-gspc .info').addClass('loaded');
        });
    }
});