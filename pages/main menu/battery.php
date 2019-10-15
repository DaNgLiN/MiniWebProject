<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Battery Status API - Demo</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="cleartype" content="on">
    <meta name="HandheldFriendly" content="True">
    <link rel="stylesheet" href="src/styles.css">
  </head>
  <style>body {
    font: 100%/1.4em "Helvetica Neue", "Helvetica", "Arial", sans-serif;
    margin: 0 auto;
    padding: 0 0.625em;
    color: #444;
    -webkit-text-size-adjust: none;
}

/**
 * Small Screens
 */

.demo-header {
  margin-bottom: 80px;
  text-align: center;
}

.demo-title {
  font-size: 4em;
  line-height: 1em;
  text-align: center;
}

.battery-card {
  font-family: "Helvetica", Arial, sans-serif;
  display: block;
  width: 300px;
  overflow: hidden;
  border: 1px solid #D5D5D5;
  border-radius: 6px;
  font-weight: 100;
  margin: 0 auto;
}

.battery-title {
  background: #4c4c4c url('bolt.png') no-repeat 95% 15px;
  color: #fff;
  font-size: .9em;
  line-height: 50px;
  padding: 0 15px;
  font-weight: 100;
  margin: 0;
}

.battery-percentage {
  font-size: 2.5em;
  line-height: 50px;
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
}

.battery-box {
  margin: 0 auto;
  padding: 50px 0;
  text-align: center;
  border-bottom: 1px solid #D5D5D5;
}

.battery {
  display: inline-block;
  position: relative;
  border: 4px solid #000;
  width: 85px;
  height: 40px;
  border-radius: 4px;
  vertical-align: middle;
}

.battery:before {
  content: '';
  display: block;
  box-sizing: border-box;
  background: #000;
  height: 40px;
  position: absolute;
  border: 1px solid #fff;
}

.battery:after {
  content: '';
  display: block;
  background: #000;
  width: 6px;
  height: 16px;
  position: absolute;
  top: 50%;
  right: -11px;
  margin-top: -8px;
  border-radius: 0 4px 4px 0;
}

.battery-info {
  font-size: 12px;
  margin: 0 auto;
  padding: 15px 45px;
  overflow: hidden;
}

.battery-info dd {
  float: right;
  margin-top: -22px;
  text-align: left;
  width: 35%;
}

footer {
  margin: 70px auto 0;
  text-align: center;
}

.heart {
  font-style: normal;
  font-weight: 500;
  color: #c0392b;
  text-decoration: none;
}

#github-button {
  display: block;
  margin: 30px auto 0;
  position: relative;
  left: 40px;
}

#github-ribbon {
  display: inline-block;
  position: fixed;
  top: 0;
  right: 0;
  z-index: 100;
  border: 0;
  width: 149px;
  height: 149px;
}

.github-buttons {
  text-align: center;
  margin: 1em 0;
}



/**
 * Medium Screens
 */
@media all and (min-width:40em) {}

/**
 * Large Screens
 */
@media all and (min-width: 54em) {}</style>
  <body>

    <header class="demo-header">
      <h1 class="demo-title">Battery Status Info</h1>
      <p class="not-support" hidden>Your browser doesn't support the Battery Status API :(</p>
    </header>

    <article class="battery-card">
      <h1 class="battery-title">Battery Status</h1>

      <div class="battery-box">
        <strong class="battery-percentage"></strong>
        <i class="battery"></i>
      </div>

      <dl class="battery-info">
        <dt>Power Source</dt>
        <dd class="battery-status">---</dd>

        <dt>Level percentage</dt>
        <dd class="battery-level">---</dd>

        <dt>Fully charged in</dt>
        <dd class="battery-fully">---</dd>

        <dt>Remaining time</dt>
        <dd class="battery-remaining">---</dd>
      </dl>

    </article>

  </body>
</html>
<script>
(function() {
  'use strict';

  var battery;

  function toTime(sec) {
    sec = parseInt(sec, 10);

    var hours = Math.floor(sec / 3600),
        minutes = Math.floor((sec - (hours * 3600)) / 60),
        seconds = sec - (hours * 3600) - (minutes * 60);

    if (hours < 10) { hours   = '0' + hours; }
    if (minutes < 10) { minutes = '0' + minutes; }
    if (seconds < 10) { seconds = '0' + seconds; }

    return hours + ':' + minutes;
  }

  function readBattery(b) {
    battery = b || battery;

    var percentage = parseFloat((battery.level * 100).toFixed(2)) + '%',
        fully,
        remaining;

    if (battery.charging && battery.chargingTime === Infinity) {
      fully = 'Calculating...';
    } else if (battery.chargingTime !== Infinity) {
      fully = toTime(battery.chargingTime);
    } else {
      fully = '---';
    }

    if (!battery.charging && battery.dischargingTime === Infinity) {
      remaining = 'Calculating...';
    } else if (battery.dischargingTime !== Infinity) {
      remaining = toTime(battery.dischargingTime);
    } else {
      remaining = '---';
    }

    document.styleSheets[0].insertRule('.battery:before{width:' + percentage + '}', 0);
    document.querySelector('.battery-percentage').innerHTML = percentage;
    document.querySelector('.battery-status').innerHTML = battery.charging ? 'Adapter' : 'Battery';
    document.querySelector('.battery-level').innerHTML = percentage;
    document.querySelector('.battery-fully').innerHTML = fully;
    document.querySelector('.battery-remaining').innerHTML = remaining;

  }

  if (navigator.battery) {
    readBattery(navigator.battery);

  } else if (navigator.getBattery) {
    navigator.getBattery().then(readBattery);

  } else {
    document.querySelector('.not-support').removeAttribute('hidden');
  }

  window.onload = function () {
    battery.addEventListener('chargingchange', function() {
      readBattery();
    });

    battery.addEventListener("levelchange", function() {
      readBattery();
    });
  };
}());
</script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

  function hello(){
    $.getJSON("../../data/Battery/Battery.json", function(result){
      $.each(result, function(i, field){
        document.write(i+":"+field+"<br>")
      });
    });
  };
  hello()

</script> -->


