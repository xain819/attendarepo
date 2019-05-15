<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Lockscreen</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url() ?>public/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<style>


      html,body {
        padding:0;
        margin:0;
        background:#fafafa;
        text-align:center;
      }

      body {
        padding-top:3em;
      }

      h1,
      h2 {
        margin-bottom:3rem;
        font-family:sans-serif;
        color:#666;
      }

      h2 {
        margin-top:2em;
      }

      .clock {
        position:relative;
        font-family:monaco,consolas,"courier new",monospace;
        font-size:3.5rem;
        line-height:1.375;
      }

      .clock:before,
      .clock:after {
        position:absolute;
        top:0;
        bottom:0;
        content:':';
        z-index:2;
        line-height:1.15;
        color:#333;
      }

      .clock:before {
        left:2.325em;
      }

      .clock:after {
        right:2.325em;
      }

      .clock span {
        position:relative;
        display:inline-block;
        padding:0 .25em;
        margin:0 .06125em;
        z-index:1;

        -webkit-transform:perspective(750);
        -moz-transform:perspective(750);
        -ms-transform:perspective(750);
        transform:perspective(750);

        -webkit-transform-style:preserve-3d;
        -moz-transform-style:preserve-3d;
        -ms-transform-style:preserve-3d;
        transform-style:preserve-3d;
      }

      .clock span:first-child {
        margin-left:0;
      }

      .clock span:last-child {
        margin-right:0;
      }

      .clock span:nth-child(2),
      .clock span:nth-child(4) {
        margin-right:.3em;
      }

      .clock span:nth-child(3),
      .clock span:nth-child(5) {
        margin-left:.3em;
      }

      .clock span:before,
      .clock span:after {
        position:absolute;
        left:0;
        top:0;
        right:0;
        bottom:0;
        color:#eee;
        text-shadow:0 1px 0 #fff;
        background:#333;
        border-radius:.125em;
        outline:1px solid transparent; /* fix jagged edges in ff */

        -webkit-backface-visibility:hidden;
        -moz-backface-visibility:hidden;
        -ms-backface-visibility:hidden;
        backface-visibility:hidden;

        -webkit-transition:-webkit-transform .75s, opacity .75s;
        -moz-transition:-moz-transform .75s, opacity .75s;
        -ms-transition:-ms-transform .75s, opacity .75s;
        transition:transform .75s, opacity .75s;
      }

      .clock span:before {
        opacity:1;
        z-index:1;
        content:attr(data-old);

        -webkit-transform-origin:0 0;
        -moz-transform-origin:0 0;
        -ms-transform-origin:0 0;
        transform-origin:0 0;

        -webkit-transform:translate3d(0,0,0) rotateX(0);
        -moz-transform:translate3d(0,0,0) rotateX(0);
        -ms-transform:translate3d(0,0,0) rotateX(0);
        transform:translate3d(0,0,0) rotateX(0);
      }

      .clock span:after {
        opacity:0;
        z-index:2;
        content:attr(data-now);

        -webkit-transform-origin:0 100%;
        -moz-transform-origin:0 100%;
        -ms-transform-origin:0 100%;
        transform-origin:0 100%;

        -webkit-transform:translate3d(0,-102.5%,0) rotateX(90deg);
        -moz-transform:translate3d(0,-102.5%,0) rotateX(90deg);
        -ms-transform:translate3d(0,-102.5%,0) rotateX(90deg);
        transform:translate3d(0,-102.5%,0) rotateX(90deg);
      }

      .clock .flip:before {
        opacity:0;
        -webkit-transform:translate3d(0,102.5%,0) rotateX(-90deg);
        -moz-transform:translate3d(0,102.5%,0) rotateX(-90deg);
        -ms-transform:translate3d(0,102.5%,0) rotateX(-90deg);
        transform:translate3d(0,102.5%,0) rotateX(-90deg);
      }

      .clock .flip:after {
        opacity:1;
        -webkit-transform:translate3d(0,0,0) rotateX(0);
        -moz-transform:translate3d(0,0,0) rotateX(0);
        -ms-transform:translate3d(0,0,0) rotateX(0);
        transform:translate3d(0,0,0) rotateX(0);
      }

</style>
<body class="hold-transition lockscreen">

  
  <div class="container bg-success" >
  <br>
     <div class="pull-right">
     <h4 class="pull-right">FullName:Jane Doe <a href="<?php echo base_url('Auth/logout');?>">LogOut</a></h4>
     </div>
   
    <div class="col-md-12">
      <div class="col-md-12">
        <h3>Room:SGYM</h3>
        <h4>Period: <span class="text-success">3rd</span> </h4>
      </div>
      <div class="col-md-6">
        <h4>Subject:<b>Physical Education</b></h4>
      </div>
      <div class="col-md-6">
        <h4>Teacher:<b>Jim Teacher</b></h4>
      </div>
      <div class="col-md-3">
        <h4>On Time:12:45:00</h4>
      </div>
      <div class="col-md-6">  
        <span class="clock"></span>
        <br>  <br>
      </div>
      <div class="col-md-3">
        <h4>Hall Pass Until:12:39:00</h4>
      </div>
    </div>
    

  </div>


  <!-- Automatic element centering -->
  <?php $this->load->view($view);?>
  <!-- /.center -->

  <!-- jQuery 2.2.3 -->
  <script src="<?= base_url() ?>public/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?= base_url() ?>public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<script>
$(document).ready(function(){
  $("#terminal_modal").modal("show");
  var Clock = (function(){

  var exports = function(element) {
    this._element = element;
    var html = '';
    for (var i=0;i<6;i++) {
      html += '<span>&nbsp;</span>';
    }
    this._element.innerHTML = html;
    this._slots = this._element.getElementsByTagName('span');
    this._tick();
  };

  exports.prototype = {

    _tick:function() {
      var time = new Date();
      this._update(this._pad(time.getHours()) + this._pad(time.getMinutes()) + this._pad(time.getSeconds()));
      var self = this;
      setTimeout(function(){
        self._tick();
      },1000);
    },

    _pad:function(value) {
      return ('0' + value).slice(-2);
    },

    _update:function(timeString) {

      var i=0,l=this._slots.length,value,slot,now;
      for (;i<l;i++) {

        value = timeString.charAt(i);
        slot = this._slots[i];
        now = slot.dataset.now;

        if (!now) {
          slot.dataset.now = value;
          slot.dataset.old = value;
          continue;
        }

        if (now !== value) {
          this._flip(slot,value);
        }
      }
    },

    _flip:function(slot,value) {

      // setup new state
      slot.classList.remove('flip');
      slot.dataset.old = slot.dataset.now;
      slot.dataset.now = value;

      // force dom reflow
      slot.offsetLeft;

      // start flippin
      slot.classList.add('flip');

    }

  };

  return exports;
  }());

  var i=0,clocks = document.querySelectorAll('.clock'),l=clocks.length;
  for (;i<l;i++) {
  new Clock(clocks[i]);
  }
})
</script>
