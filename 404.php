<?php session_start();


?>

<?php require('cnx.php'); ?>

<!DOCTYPE html>

<html lang="fr">	

<head>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $resultat_site_internet8['Titre_Page_Head']; ?> | <?php echo $resultat_site_internet8['Titre_Page']; ?></title>
	<meta name="description" content="<?php echo $resultat_site_internet8['Description_Page']; ?>">
	<meta name="author" content="<?php echo $resultat_site_internet8['Créateur_Page']; ?>">
	<link rel="icon" type="image/png" href="<?php echo $resultat_site_internet8['Favicon_Page']; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php include('wp-includes/Php/Script_Header.php'); ?>
	
	<style>.ag-format-container {
  width: 1142px;
  margin: 0 auto;
}

.js-ag-hide {
  display: none;
}

.ag-page-404 {
  margin-top: -123px;
  background: url(https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/404-error-smoke-from-toaster/images/toaster-bg.png) no-repeat 50% 100%;
}

.ag-canvas-404_img {
  display: none;
}
.ag-canvas-404 {
  opacity: .7;
  filter: alpha(opacity=70);

  z-index: -1;
  position: absolute;
  left: 0;
  top: 0;
}

.ag-toaster-wrap {
  display: table;
  margin: 0 auto;
  padding: 200px 0 0;

  position: relative;
}
.ag-toaster {
  width: 340px;
  height: 217px;

  position: relative;
}
.ag-toaster_toast-handler {
  width: 155px;
  height: 200px;
  margin-left: 85px;
  padding-top: 60px;

  overflow: hidden;

  z-index: 1;
  position: absolute;
  top: -150px;
}
.ag-toaster_shadow {
  width: 165px;
  height: 9px;
  background: url(https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/404-error-smoke-from-toaster/images/sprite-toaster.png) -340px -195px no-repeat;

  position: absolute;
  left: 0;
  bottom: 91px;
}
.ag-toaster_toast {
  width: 159px;
  height: 171px;
  background: url(https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/404-error-smoke-from-toaster/images/sprite-toaster.png) -340px 0 no-repeat;

  z-index: -1;
  position: relative;
}
.ag-toaster_front {
  width: 340px;
  height: 217px;
  background: url(https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/404-error-smoke-from-toaster/images/sprite-toaster.png) 0 -18px no-repeat;

  z-index: 2;
  position: relative;
}
.ag-toaster_lever {
  width: 22px;
  height: 21px;
  background: url(https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/404-error-smoke-from-toaster/images/sprite-toaster.png) -340px -171px no-repeat;

  position: absolute;
  top: 75px;
  right: 12px;
}
.ag-toaster_back {
  width: 340px;
  height: 18px;
  background: url(https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/404-error-smoke-from-toaster/images/sprite-toaster.png) no-repeat;

  z-index: -3;
  position: relative;
}

@-webkit-keyframes an-bounce-in-up {
  0% {
    opacity: 0;

    -webkit-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;

    -webkit-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  80% {
    -webkit-transform: translateY(5px);
    transform: translateY(5px);
  }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

@-moz-keyframes an-bounce-in-up {
  0% {
    opacity: 0;

    -moz-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;

    -moz-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  80% {
    -moz-transform: translateY(5px);
    transform: translateY(5px);
  }
  100% {
    -moz-transform: translateY(0);
    transform: translateY(0);
  }
}

@-ms-keyframes an-bounce-in-up {
  0% {
    opacity: 0;
    filter: alpha(opacity=0);

    -ms-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;
    filter: alpha(opacity=100);

    -ms-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  80% {
    -ms-transform: translateY(5px);
    transform: translateY(5px);
  }
  100% {
    -ms-transform: translateY(0);
    transform: translateY(0);
  }
}

@-o-keyframes an-bounce-in-up {
  0% {
    opacity: 0;

    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;

    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  80% {
    -o-transform: translateY(5px);
    transform: translateY(5px);
  }
  100% {
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes an-bounce-in-up {
  0% {
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  80% {
    -webkit-transform: translateY(5px);
    -moz-transform: translateY(5px);
    -ms-transform: translateY(5px);
    -o-transform: translateY(5px);
    transform: translateY(5px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

.js-ag-animated {
  -webkit-animation-duration: .6s;
  -moz-animation-duration: .6s;
  -ms-animation-duration: .6s;
  -o-animation-duration: .6s;
  animation-duration: .6s;

  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
}
.js-ag-bounce-in-up {
  -webkit-animation-name: an-bounce-in-up;
  -moz-animation-name: an-bounce-in-up;
  -ms-animation-name: an-bounce-in-up;
  -o-animation-name: an-bounce-in-up;
  animation-name: an-bounce-in-up;
}

@media only screen and (max-width: 767px) {
  .ag-format-container {
    width: 96%;
  }

}

@media only screen and (max-width: 639px) {

}

@media only screen and (max-width: 479px) {

}

@media (min-width: 768px) and (max-width: 979px) {
  .ag-format-container {
    width: 750px;
  }

}

@media (min-width: 980px) and (max-width: 1161px) {
  .ag-format-container {
    width: 960px;
  }

}
</style>

	</head>

<body class="home blog">

<?php include('wp-includes/Php/Header.php') ?>
   
<?php include('wp-includes/Php/Update.php') ?>   
    
   
        <div class="sitewrap-inner">
        
        
        
        <div class="content-wrapper">		
       
    <div class="ag-page-404" align="center">
  <div class="ag-toaster-wrap">
    <div class="ag-toaster">
      <div class="ag-toaster_back"></div>
      <div class="ag-toaster_front">
        <div class="js-toaster_lever ag-toaster_lever"></div>
      </div>
      <div class="ag-toaster_toast-handler">
        <div class="ag-toaster_shadow"></div>
        <div class="js-toaster_toast ag-toaster_toast js-ag-hide"></div>
      </div>
    </div>

    <canvas id="canvas-404" class="ag-canvas-404"></canvas>
    <img class="ag-canvas-404_img" src="https://raw.githubusercontent.com/SochavaAG/example-mycode/master/pens/404-error-smoke-from-toaster/images/smoke.png">
  </div>
</div>



<br><br><br>


<div align="center">
  <h1 style="color: white;">CE N'EST PAS LE BON CHEMIN...</h1><br>
  <p style="color: white;">Ou une telle page n'existe tout simplement pas...
Souhaitez-vous revenir à la page d'accueil ? <a href="/">Accueil</a>.</p>
</div>

<script>(function ($) {
  $(function () {

$().ready(function () {
    (function () {
      var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
      window.requestAnimationFrame = requestAnimationFrame
    })();
    var canvas = document.getElementById('canvas-404');
    if (canvas === null)return;
    setTimeout(function () {
      $('.js-toaster_lever').delay(200).animate({top: 30}, 100);
      $('.js-toaster_toast').removeClass('js-ag-hide').addClass('js-ag-animated js-ag-bounce-in-up')
    }, 800);
    var ctx = canvas.getContext("2d"),
      loading = true;

    canvas.height = 210;
    canvas.width = 300;

    var parts = [],
      minSpawnTime = 100,
      lastTime = new Date().getTime(),
      maxLifeTime = Math.min(6000, (canvas.height / (1.5 * 60) * 1000)),
      emitterX = canvas.width / 2 - 50,
      emitterY = canvas.height - 10,
      smokeImage = new Image();

    function spawn() {
      if (new Date().getTime() > lastTime + minSpawnTime) {
        lastTime = new Date().getTime();
        parts.push(new smoke(emitterX, emitterY))
      }
    }
    function render() {
      if (loading) {
        load();
        return false
      }
      var len = parts.length;
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      while (len--)if (parts[len].y < 0 || parts[len].lifeTime > maxLifeTime) {
        parts.splice(len, 1)
      } else {
        parts[len].update();
        ctx.save();
        var offsetX = -parts[len].size / 2, offsetY = -parts[len].size / 2;
        ctx.translate(parts[len].x - offsetX, parts[len].y - offsetY);
        ctx.rotate(parts[len].angle / 180 * Math.PI);
        ctx.globalAlpha = parts[len].alpha;
        ctx.drawImage(smokeImage, offsetX, offsetY, parts[len].size, parts[len].size);
        ctx.restore()
      }
      spawn();
      requestAnimationFrame(render)
    }
    function smoke(x, y, index) {
      this.x = x;
      this.y = y;
      this.size = 1;
      this.startSize = 60;
      this.endSize = 69;
      this.angle = Math.random() * 359;
      this.startLife = new Date().getTime();
      this.lifeTime = 0;
      this.velY = -1 - (Math.random() * 0.5);
      this.velX = Math.floor(Math.random() * (-6) + 3) / 10
    }
    smoke.prototype.update = function () {
      this.lifeTime = new Date().getTime() - this.startLife;
      this.angle += 0.2;
      var lifePerc = ((this.lifeTime / maxLifeTime) * 100);
      this.size = this.startSize + ((this.endSize - this.startSize) * lifePerc * .1);
      this.alpha = 1 - (lifePerc * .01);
      this.alpha = Math.max(this.alpha, 0);
      this.x += this.velX;
      this.y += this.velY
    }
    smokeImage.src = document.getElementsByTagName('img')[0].src;
    smokeImage.onload = function () {
      loading = false
    };
    function load() {
      if (loading) {
        setTimeout(load, 3000);
      } else {
        render();
      }
    }

    render();
});

  });
})(jQuery);</script>
     
    </div>    
  
        <!-- /.content-wrapper -->
        
     <br>
         <?php include('wp-includes/Php/WootBox.php'); ?> 
        
       <?php include('wp-includes/Php/Menu_Footer.php'); ?>

<?php include('wp-includes/Php/Footer.php'); ?>

<?php include('wp-includes/Php/Script_Footer.php'); ?>


</body>
</html>