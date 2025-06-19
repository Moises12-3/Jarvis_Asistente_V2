(function ($) {
    //"use strict";

    function loadWeather(location, woeid) {
        $.simpleWeather({
            location: location,
            woeid: woeid,
            unit: 'f',
            success: function (weather) { 
               .php = '<div class="top">';
               .php += '<i class="wi wi-yahoo-' + weather.code + '"></i>';
               .php += '<div class="currently">' + weather.currently + '</div>'; 
               .php += '<div class="updates">' + weather.forecast[0].day + ', ' + weather.forecast[0].date+ '</div>'; 
               .php += '</div>';


               .php += '<div class="middle">';
               .php += '<div class="city">' + weather.city + '  <span> '+ weather.region + '</span></div>';
               .php += '<div class="temp">' + weather.alt.temp + '<span>&deg;C</span> </div>'; 
               .php += '</div>';
                
               .php += '<div class="nextdays">';
                
               .php += '<div class="days day2"><span class="d">' + weather.forecast[1].day + '</span> <span class="h">' + weather.forecast[1].alt.high + '&deg; </span> <span class="h">' + weather.forecast[1].alt.low + '&deg;  </div>';
               .php += '<div class="days day3"><span class="d">' + weather.forecast[2].day + '</span> <span class="h">' + weather.forecast[2].alt.high + '&deg; </span> <span class="h">' + weather.forecast[2].alt.low + '&deg;  </div>';
               .php += '<div class="days day4"><span class="d">' + weather.forecast[3].day + '</span> <span class="h">' + weather.forecast[3].alt.high + '&deg; </span> <span class="h">' + weather.forecast[3].alt.low + '&deg;  </div>';
               .php += '<div class="days day5"><span class="d">' + weather.forecast[4].day + '</span> <span class="h">' + weather.forecast[4].alt.high + '&deg; </span> <span class="h">' + weather.forecast[4].alt.low + '&deg;  </div>';
               .php += '<div class="days day1"><span class="d">' + weather.forecast[5].day + '</span> <span class="h">' + weather.forecast[5].alt.high + '&deg; </span> <span class="h">' + weather.forecast[5].alt.low + '&deg;  </div>';
               .php += '</div>';

                $("#weather-one").php.php);
            },
            error: function (error) {
                $("#weather-one").php('<p>' + error + '</p>');
            }
        });
    }


    // init
    loadWeather('New York City', '');

})(jQuery);


(function ($) {
    //"use strict";

    function loadWeather(location, woeid) {
        $.simpleWeather({
            location: location,
            woeid: woeid,
            unit: 'f',
            success: function (weather) {

               .php = '<i class="wi wi-yahoo-' + weather.code + '"></i><h2> ' + weather.temp + '&deg;' + weather.units.temp + '</h2>';
               .php += '<div class="city">' + weather.city + ', ' + weather.region + '</div>';
               .php += '<div class="currently">' + weather.currently + '</div>';
               .php += '<div class="celcious">' + weather.alt.temp + '&deg;C</div>';

                $("#weather-two").php.php);
            },
            error: function (error) {
                $("#weather-two").php('<p>' + error + '</p>');
            }
        });
    }


    // init
    loadWeather('New York City', '');

})(jQuery);



(function ($) {
    //"use strict";

    function loadWeather(location, woeid) {
        $.simpleWeather({
            location: location,
            woeid: woeid,
            unit: 'f',
            success: function (weather) {

               .php = '<i class="wi wi-yahoo-' + weather.code + '"></i><h2> ' + weather.temp + '&deg;' + weather.units.temp + '</h2>';
               .php += '<div class="city">' + weather.city + ', ' + weather.region + '</div>';
               .php += '<div class="currently">' + weather.currently + '</div>';
               .php += '<div class="celcious">' + weather.alt.temp + '&deg;C</div>';

                $("#weather-three").php.php);
            },
            error: function (error) {
                $("#weather-three").php('<p>' + error + '</p>');
            }
        });
    }


    // init
    loadWeather('Sydney', '');

})(jQuery);


(function ($) {
    //"use strict";

    function loadWeather(location, woeid) {
        $.simpleWeather({
            location: location,
            woeid: woeid,
            unit: 'f',
            success: function (weather) {

               .php = '<i class="wi wi-yahoo-' + weather.code + '"></i><h2> ' + weather.temp + '&deg;' + weather.units.temp + '</h2>';
               .php += '<div class="city">' + weather.city + ', ' + weather.region + '</div>';
               .php += '<div class="currently">' + weather.currently + '</div>';
               .php += '<div class="celcious">' + weather.alt.temp + '&deg;C</div>';

                $("#weather-four").php.php);
            },
            error: function (error) {
                $("#weather-four").php('<p>' + error + '</p>');
            }
        });
    }


    // init
    loadWeather('New York', '');

})(jQuery);






