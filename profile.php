<?php
session_start();
$currentUserID=$_SESSION['user'];
  if($currentUserID==NULL){
    header("Location:home.html");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://unpkg.com/konva@3.2.4/konva.min.js"></script>
  <link rel="stylesheet" href="profile.css">
  <title>Profile</title>
</head>
<body onload="show()">
  <div class="header">
  <a href="#default" class="logo" id="head">Let's Sketch</a>
  <div class="header-right">
    <a href="profile.php" class="active">Profile</a>
    <a href="previous.php">All Sketches</a>
    <a href="logout.php">Logout</a>
  </div>
</div>
  <div class="row">
    <div class="col-sm-8">
      <div id="container">
      </div>
    </div>
  <div class="col-sm-4">
    <div class="scrollmenu">
      <div class="dropdown1">
        <button onclick="show(Eyes)" class="dropbtn">Eyes
          <i class="fa fa-caret-down"></i>
        </button>
        <!--
        <div class="dropdown-content">
          <a onclick="show(this)">Average Brown</a><br>
          <a onclick="show(this)">Hooded</a><br>
          <a onclick="show(this)">Narrow</a><br>
        </div>
      -->
      </div>
  <div class="dropdown1">
    <button class="dropbtn">Eyebrows
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <!--<a onclick="show(this)">Straight</a><br>-->
      <a onclick="show(Eyebrows_arched)">Arched</a><br>
    </div>
  </div>
  <div class="dropdown1">
    <button class="dropbtn">Nose
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a onclick="show(Noses_avg_pointed)">Average Pointed</a><br>
      <a onclick="show(Noses_avg_with_round_base)">Average with round base</a><br>
      <a onclick="show(Noses_avg_with_broad_base)">Average with broad base</a><br>
    </div>
  </div>
  <div class="dropdown1">
    <button class="dropbtn">Lips
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a onclick="show(Lips_even)">Even</a><br>
      <a onclick="show(Lips_wide)">Wide</a><br>
      <!--<a onclick="show(this)">Thick</a><br>-->
    </div>
  </div>
  <div class="dropdown1">
    <button onclick="show(Jaw_Shapes)" class="dropbtn">JawShapes
      <i class="fa fa-caret-down"></i>
    </button>
    <!--
    <div class="dropdown-content">
      <a onclick="show(this)">Oval</a><br>
      <a onclick="show(this)">Rectangular</a><br>
      <a onclick="show(this)">Round</a><br>
    </div>
  -->
  </div>
  <div class="dropdown1">
    <button class="dropbtn">HeadShapes
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a onclick="show(Head_Shapes_round)">Round</a><br>
      <a onclick="show(Head_Shapes_square)">Square</a><br>
      <a onclick="show(Head_Shapes_pointed)">Pointed</a><br>
    </div>
  </div>
  <div class="dropdown1">
    <button onclick="show(Hairs)" class="dropbtn">Hair
      <i class="fa fa-caret-down"></i>
    </button>
    <!--
    <div class="dropdown-content">
      <a onclick="show(this)">Average Short</a><br>
      <a onclick="show(this)">Long</a><br>
      <a onclick="show(this)">Partially Bald</a><br>
    </div>
  -->
  </div>
  <div class="dropdown1">
    <button onclick="show(Moustaches)" class="dropbtn">Moustache
      <i class="fa fa-caret-down"></i>
    </button>
    <!--
    <div class="dropdown-content">
      <a onclick="show(this)">Short</a><br>
      <a onclick="show(this)">Thin</a><br>
      <a onclick="show(this)">Thick</a><br>
    </div>
  -->
  </div>
  <div class="dropdown1">
    <button class="dropbtn">Beard
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a onclick="show(Beards_full)">Full</a><br>
      <a onclick="show(Beards_oval)">Oval</a><br>
      <a onclick="show(Beards_square)">Square</a><br>
    </div>
  </div>

</div>


<div id="Beards_full" class = "features">
  <h3 style="text-align:center;">Beards - Full</h3>
  <main class="grid">
  <img onclick="loadBeards(this)" src="data/Beards/full/500.png">
  </main>
  <br>
  <br />
</div>
<div id="Beards_oval" class = "features">
  <h3 style="text-align:center;">Beards - Oval</h3>
  <main class="grid">
  <img onclick="loadBeards(this)" src="data/Beards/oval/302.png">
  <img onclick="loadBeards(this)" src="data/Beards/oval/305.png">
  </main>
  <br>
  <br />
</div>
<div id="Beards_square" class = "features">
  <h3 style="text-align:center;">Beards - Square</h3>
  <main class="grid">
  <img onclick="loadBeards(this)" src="data/Beards/square/400.png">
  <img onclick="loadBeards(this)" src="data/Beards/square/413.png">
  </main>
  <br>
  <br />
</div>
<div id="Eyebrows_arched" class = "features">
  <h2 style="text-align:center;">Eyebrows - Arched</h2>
  <main class="grid">
  <img onclick="loadEyebrows(this)" src="data/Eyebrows/Arched/602.png" >
  <img onclick="loadEyebrows(this)" src="data/Eyebrows/Arched/603.png" >
  <img onclick="loadEyebrows(this)" src="data/Eyebrows/Arched/604.png" >
  </main>
  <br>
  <br />
</div>
<div id="Eyebrows_plucked" class = "features">
  <h2 style="text-align:center;">Eyebrows - Plucked</h2>
  <main class="grid">
  <img onclick="loadEyebrows(this)" src="data/Eyebrows/Plucked/103.png" >
  <img onclick="loadEyebrows(this)" src="data/Eyebrows/Plucked/103.png" >
  <img onclick="loadEyebrows(this)" src="data/Eyebrows/Plucked/103.png" >
  </main>
  <br>
  <br />
</div>

<div id="Eyes" class = "features">
  <h2 style="text-align:center;">Eyes</h2>
  <main class="grid">
  <img onclick="loadEyes(this)" src="data/Eyes/100.png" >
  <img onclick="loadEyes(this)" src="data/Eyes/202.png" >
  <img onclick="loadEyes(this)" src="data/Eyes/301.png" >
  <img onclick="loadEyes(this)" src="data/Eyes/407.png" >
  <img onclick="loadEyes(this)" src="data/Eyes/503.png" >
  <img onclick="loadEyes(this)" src="data/Eyes/600.png" >
  </main>
  <br>
  <br />
</div>

<div id="Glasses_regular" class = "features">
  <h2 style="text-align:center;">Glasses - Regular</h2>
  <main class="grid">
  <img onclick="loadGlasses(this)" src="data/Glasses/Regular/101.png" >
  </main>
  <br>
  <br />
</div><div id="Glasses_tinted" class = "features">
  <h2 style="text-align:center;">Glasses-Tinted</h2>
  <main class="grid">
<img onclick="loadGlasses(this)" src="data/Glasses/Tinted/201.png" >
<img onclick="loadGlasses(this)" src="data/Glasses/Tinted/202.png" >
<img onclick="loadGlasses(this)" src="data/Glasses/Tinted/203.png" >
<img onclick="loadGlasses(this)" src="data/Glasses/Tinted/204.png" >
<img onclick="loadGlasses(this)" src="data/Glasses/Tinted/205.png" >
<img onclick="loadGlasses(this)" src="data/Glasses/Tinted/206.png" >
  </main>
  <br>
  <br />
</div><div id="Hairs" class = "features" >
  <h2 style="text-align:center;">Hairs</h2>
  <main class="grid">
<img onclick="loadHairs(this)" src="data/Hairs/1.png" >
<img onclick="loadHairs(this)" src="data/Hairs/2.png" >
<img onclick="loadHairs(this)" src="data/Hairs/3.png" >
<img onclick="loadHairs(this)" src="data/Hairs/215.png" >
<img onclick="loadHairs(this)" src="data/Hairs/301.png" >
<img onclick="loadHairs(this)" src="data/Hairs/308.png" >
<img onclick="loadHairs(this)" src="data/Hairs/317.png" >
<img onclick="loadHairs(this)" src="data/Hairs/342.png" >
<img onclick="loadHairs(this)" src="data/Hairs/352.png" >
<img onclick="loadHairs(this)" src="data/Hairs/436.png" >
  </main>
  <br>
  <br />
</div><div id="Head_Shapes_pointed" class="features">
  <h2 style="text-align:center;">Head Shapes-Pointed</h2>
  <main class="grid">
  <img onclick="loadHeadShapes(this)" src="data/HeadShapes/Pointed/101.png" >
  <img onclick="loadHeadShapes(this)" src="data/HeadShapes/Pointed/102.png" >
  <img onclick="loadHeadShapes(this)" src="data/HeadShapes/Pointed/103.png" >
  <img onclick="loadHeadShapes(this)" src="data/HeadShapes/Pointed/104.png" >
  <img onclick="loadHeadShapes(this)" src="data/HeadShapes/Pointed/105.png" >
  <img onclick="loadHeadShapes(this)" src="data/HeadShapes/Pointed/106.png" >
  </main>
  <br>
  <br />
</div><div id="Head_Shapes_round" class="features">
  <h2 style="text-align:center;">Head Shapes-Round</h2>
  <main class="grid">
  <img onclick="loadHeadShapes(this)" src="data/HeadShapes/Round/201.png" >
  <img onclick="loadHeadShapes(this)" src="data/HeadShapes/Round/202.png" >
  <img onclick="loadHeadShapes(this)" src="data/HeadShapes/Round/203.png" >
  <img onclick="loadHeadShapes(this)" src="data/HeadShapes/Round/204.png" >
  <img onclick="loadHeadShapes(this)" src="data/HeadShapes/Round/205.png" >
  <img onclick="loadHeadShapes(this)" src="data/HeadShapes/Round/206.png" >
  </main>
  <br>
  <br />
</div><div id="Head_Shapes_square" class="features">
  <h2 style="text-align:center;">Head Shapes-Square</h2>
  <main class="grid">
  <img onclick="loadHeadShapes(this)" src="data/HeadShapes/Square/301.png" >
  <img onclick="loadHeadShapes(this)" src="data/HeadShapes/Square/302.png" >
  <img onclick="loadHeadShapes(this)" src="data/HeadShapes/Square/303.png" >
  <img onclick="loadHeadShapes(this)" src="data/HeadShapes/Square/304.png" >
  <img onclick="loadHeadShapes(this)" src="data/HeadShapes/Square/305.png" >
  <img onclick="loadHeadShapes(this)" src="data/HeadShapes/Square/306.png" >
  </main>
  <br>
  <br />
</div><div id="Jaw_Shapes" class="features">
  <h2 style="text-align:center;">Jaw-Shapes</h2>
  <main class="grid">
  <img onclick="loadJawShapes(this)" src="data/JawShapes/300.png" >
  <img onclick="loadJawShapes(this)" src="data/JawShapes/301.png" >
  </main>
  <br>
  <br />

</div><div id="Lips_even" class="features">
  <h2 style="text-align:center;">Lips - Even</h2>
  <main class="grid">
  <img onclick="loadLips(this)" src="data/Lips/Even/301.png" >
  <img onclick="loadLips(this)" src="data/Lips/Even/304.png" >
  <img onclick="loadLips(this)" src="data/Lips/Even/315.png" >
  </main>
  <br>
  <br />
</div><div id="Lips_wide" class="features">
  <h2 style="text-align:center;">Lips - Wide</h2>
  <main class="grid">
  <img onclick="loadLips(this)" src="data/Lips/Wide/808.png" >
  <img onclick="loadLips(this)" src="data/Lips/Wide/810.png" >
  <img onclick="loadLips(this)" src="data/Lips/Wide/820.png" >
  </main>
  <br>
  <br />
</div><div id="Moustaches" class="features">
  <h2 style="text-align:center;">Moustaches</h2>
  <main class="grid">
  <img onclick="loadMoustaches(this)" src="data/Moustaches/short1/112.png" >
  <img onclick="loadMoustaches(this)" src="data/Moustaches/thick1/310.png" >
  <img onclick="loadMoustaches(this)" src="data/Moustaches/thin1/201.png" >
  </main>
  <br>
  <br />

</div><div id="Noses_avg_pointed" class="features">
  <h2 style="text-align:center;">Nose - Average-Pointed</h2>
  <main class="grid">
  <img onclick="loadNoses(this)" src="data/Noses/Average Pointed/400.png" >
  <img onclick="loadNoses(this)" src="data/Noses/Average Pointed/401.png" >
  <img onclick="loadNoses(this)" src="data/Noses/Average Pointed/402.png" >
  <img onclick="loadNoses(this)" src="data/Noses/Average Pointed/403.png" >
  <img onclick="loadNoses(this)" src="data/Noses/Average Pointed/404.png" >
</main>
  <br>
  <br />

</div><div id="Noses_avg_with_broad_base" class="features">
  <h2 style="text-align:center;">Nose - Average with broad base</h2>
  <main class="grid">
  <img onclick="loadNoses(this)" src="data/Noses/Average with broad base/505.png" >
  <img onclick="loadNoses(this)" src="data/Noses/Average with broad base/501.png" >
  <img onclick="loadNoses(this)" src="data/Noses/Average with broad base/502.png" >
  <img onclick="loadNoses(this)" src="data/Noses/Average with broad base/503.png" >
  <img onclick="loadNoses(this)" src="data/Noses/Average with broad base/504.png" >
  </main>
  <br>
  <br />

</div><div id="Noses_avg_with_round_base" class="features">
  <h2 style="text-align:center;">Nose - Average with round base</h2>
  <main class="grid">
  <img onclick="loadNoses(this)" src="data/Noses/Average with round base/200.png" >
  <img onclick="loadNoses(this)" src="data/Noses/Average with round base/201.png" >
  <img onclick="loadNoses(this)" src="data/Noses/Average with round base/202.png" >
  <img onclick="loadNoses(this)" src="data/Noses/Average with round base/203.png" >
  <img onclick="loadNoses(this)" src="data/Noses/Average with round base/204.png" >
  <img onclick="loadNoses(this)" src="data/Noses/Average with round base/205.png" >
  </main>
  <br>
  <br />

</div>
<!--
<div id="Noses" class="features">
  <h2 style="text-align:center;">Hooked,Nostrils not showing</h2>
  <main class="grid">
  <img src="data/Noses/Hooked,Nostrils not showing/600.png" >
  <img src="data/Noses/Hooked,Nostrils not showing/601.png" >
  <img src="data/Noses/Hooked,Nostrils not showing/602.png" >
  <img src="data/Noses/Hooked,Nostrils not showing/603.png" >
  <img src="data/Noses/Hooked,Nostrils not showing/604.png" >
  <img src="data/Noses/Hooked,Nostrils not showing/605.png" >
  </main>
  <br>
  <br />


</div><div id="Noses" class="features">
  <h2 style="text-align:center;">Hooked,Nostrils showing</h2>
  <main class="grid">
  <img src="data/Noses/Hooked,Nostrils showing/500.png" >
  <img src="data/Noses/Hooked,Nostrils showing/501.png" >
  <img src="data/Noses/Hooked,Nostrils showing/502.png" >
  <img src="data/Noses/Hooked,Nostrils showing/503.png" >
  <img src="data/Noses/Hooked,Nostrils showing/504.png" >
  </main>
  <br>
  <br />

</div><div id="Noses" class="features">
  <h2 style="text-align:center;">Large</h2>
  <main class="grid">
  <img src="data/Noses/Large/000.png" >
  <img src="data/Noses/Large/001.png" >
  <img src="data/Noses/Large/002.png" >
  <img src="data/Noses/Large/003.png" >
  <img src="data/Noses/Large/004.png" >
  </main>
  <br>
  <br />

</div>
-->
  <button type="button" class="btn btn-success" onclick="savecanvas()">Save</button>
</div>
</div>
<script>
  var width = 0.66*window.innerWidth;
  var height = window.innerHeight;

  function update(activeAnchor) {
    var group = activeAnchor.getParent();

    var topLeft = group.get('.topLeft')[0];
    var topRight = group.get('.topRight')[0];
    var bottomRight = group.get('.bottomRight')[0];
    var bottomLeft = group.get('.bottomLeft')[0];


    var anchorX = activeAnchor.getX();
    var anchorY = activeAnchor.getY();

    // update anchor positions
    switch (activeAnchor.getName()) {
      case 'topLeft':
        topRight.y(anchorY);
        bottomLeft.x(anchorX);
        break;
      case 'topRight':
        topLeft.y(anchorY);
        bottomRight.x(anchorX);
        break;
      case 'bottomRight':
        bottomLeft.y(anchorY);
        topRight.x(anchorX);
        break;
      case 'bottomLeft':
        bottomRight.y(anchorY);
        topLeft.x(anchorX);
        break;
    }

    image.position(topLeft.position());

    var width = topRight.getX() - topLeft.getX();
    var height = bottomLeft.getY() - topLeft.getY();
    if (width && height) {
      image.width(width);
      image.height(height);
    }
  }
  function addAnchor(group, x, y, name) {
    var stage = group.getStage();
    var layer = group.getLayer();

    var anchor = new Konva.Circle({
      x: x,
      y: y,
      stroke: '#666',
      fill: '#ddd',
      strokeWidth: 2,
      radius: 11,
      name: name,
      draggable: true,
      dragOnTop: false
    });

    anchor.on('dragmove', function() {
      update(this);
      layer.draw();
    });
    anchor.on('mousedown touchstart', function() {
      group.draggable(false);
      this.moveToTop();
    });
    anchor.on('dragend', function() {
      group.draggable(true);
      layer.draw();
    });
    // add hover styling
    anchor.on('mouseover', function() {
      var layer = this.getLayer();
      document.body.style.cursor = 'pointer';
      this.strokeWidth(4);
      layer.draw();
    });
    anchor.on('mouseout', function() {
      var layer = this.getLayer();
      document.body.style.cursor = 'default';
      this.strokeWidth(2);
      layer.draw();
    });

    group.add(anchor);
  }

  var stage = new Konva.Stage({
    container: 'container',
    width: width,
    height: height
  });

  var layer = new Konva.Layer();
  stage.add(layer);

  // eyes
  var eyes = new Konva.Image({
    width: 760,
    height: 550
  });

  // eyebrows
  var eyebrows = new Konva.Image({
    width: 760,
    height: 550
  });

  // lips
  var lips = new Konva.Image({
    width: 760,
    height: 550
  });

  // noses
  var noses = new Konva.Image({
    width: 740,
    height: 550
  });

  // jawshapes
  var jawshapes = new Konva.Image({
    width: 820,
    height: 550
  });

  // headshapes
  var headshapes = new Konva.Image({
    width: 800,
    height: 550
  });

  // hairs
  var hairs = new Konva.Image({
    width: 780,
    height: 550
  });

  // moustaches
  var moustaches = new Konva.Image({
    width: 760,
    height: 550
  });

  // beards
  var beards = new Konva.Image({
    width: 680,
    height: 550
  });

  // glasses
  var glasses = new Konva.Image({
    width: 760,
    height: 550
  });

  noses.zIndex(0);
  lips.zIndex(1);

  var lipsGroup = new Konva.Group({
    x: 165,
    y: 60,
    draggable: true
  });
  layer.add(lipsGroup);
  lipsGroup.add(lips);

  var nosesGroup = new Konva.Group({
    x: 177,
    y: 56,
    draggable: true
  });
  layer.add(nosesGroup);
  nosesGroup.add(noses);

  var eyesGroup = new Konva.Group({
    x: 165,
    y: 58,
    draggable: true
  });
  layer.add(eyesGroup);
  eyesGroup.add(eyes);


  var eyebrowsGroup = new Konva.Group({
    x: 165,
    y: 44,
    draggable: true
  });
  layer.add(eyebrowsGroup);
  eyebrowsGroup.add(eyebrows);



  var jawshapesGroup = new Konva.Group({
    x: 140,
    y: 100,
    draggable: true
  });
  layer.add(jawshapesGroup);
  jawshapesGroup.add(jawshapes);


  var headshapesGroup = new Konva.Group({
    x: 148,
    y: 50,
    draggable: true
  });
  layer.add(headshapesGroup);
  headshapesGroup.add(headshapes);


  var hairsGroup = new Konva.Group({
    x: 154,
    y: 29,
    draggable: true
  });
  layer.add(hairsGroup);
  hairsGroup.add(hairs);


  var moustachesGroup = new Konva.Group({
    x: 165,
    y: 58,
    draggable: true
  });
  layer.add(moustachesGroup);
  moustachesGroup.add(moustaches);


  var beardsGroup = new Konva.Group({
    x: 214,
    y: 118,
    draggable: true
  });
  layer.add(beardsGroup);
  beardsGroup.add(beards);


  var glassesGroup = new Konva.Group({
    x: 300,
    y: 200,
    draggable: true
  });
  layer.add(glassesGroup);
  glassesGroup.add(glasses);


  var imageObj4 = new Image();
  imageObj4.onload = function() {
    lips.image(imageObj4);
    layer.draw();
  };
  imageObj4.src = '';

  var imageObj1 = new Image();
  imageObj1.onload = function() {
    noses.image(imageObj1);
    layer.draw();
  };
  imageObj1.src = '';

  var imageObj2 = new Image();
  imageObj2.onload = function() {
    eyebrows.image(imageObj2);
    layer.draw();
  };
  imageObj2.src = '';

  var imageObj3 = new Image();
  imageObj3.onload = function() {
    eyes.image(imageObj3);
    layer.draw();
  };
  imageObj3.src = '';

  var imageObj5 = new Image();
  imageObj5.onload = function() {
    jawshapes.image(imageObj5);
    layer.draw();
  };
  imageObj5.src = '';

  var imageObj6 = new Image();
  imageObj6.onload = function() {
    headshapes.image(imageObj6);
    layer.draw();
  };
  imageObj6.src = '';

  var imageObj7 = new Image();
  imageObj7.onload = function() {
    hairs.image(imageObj7);
    layer.draw();
  };
  imageObj7.src = '';

  var imageObj8 = new Image();
  imageObj8.onload = function() {
    moustaches.image(imageObj8);
    layer.draw();
  };
  imageObj8.src = '';

  var imageObj9 = new Image();
  imageObj9.onload = function() {
    beards.image(imageObj9);
    layer.draw();
  };
  imageObj9.src = '';

  var imageObj10 = new Image();
  imageObj10.onload = function() {
    glasses.image(imageObj10);
    layer.draw();
  };
  imageObj10.src = '';

  function showAnchors() {
   this.find('Circle').show();
   layer.draw();
 }

 function hideAnchors() {
   this.find('Circle').hide();
   layer.draw();
 }

 eyebrowsGroup.on('mouseenter', showAnchors);
 eyebrowsGroup.on('mouseleave', hideAnchors);
 eyesGroup.on('mouseenter', showAnchors);
 eyesGroup.on('mouseleave', hideAnchors);
 nosesGroup.on('mouseenter', showAnchors);
 nosesGroup.on('mouseleave', hideAnchors);
 lipsGroup.on('mouseenter', showAnchors);
 lipsGroup.on('mouseleave', hideAnchors);
 jawshapesGroup.on('mouseenter', showAnchors);
 jawshapesGroup.on('mouseleave', hideAnchors);
 headshapesGroup.on('mouseenter', showAnchors);
 headshapesGroup.on('mouseleave', hideAnchors);
 hairsGroup.on('mouseenter', showAnchors);
 hairsGroup.on('mouseleave', hideAnchors);
 moustachesGroup.on('mouseenter', showAnchors);
 moustachesGroup.on('mouseleave', hideAnchors);
 beardsGroup.on('mouseenter', showAnchors);
 beardsGroup.on('mouseleave', hideAnchors);
 glassesGroup.on('mouseenter', showAnchors);
 glassesGroup.on('mouseleave', hideAnchors);

</script>
<script>
function show(x){
    $('.features').hide();
    $('#' + x.getAttribute("id")).show();
}
function loadNoses(x){
    imageObj1.src=x.src;
    /*addAnchor(nosesGroup, 100, 50, 'topLeft');
    addAnchor(nosesGroup, 300, 50, 'topRight');
    addAnchor(nosesGroup, 300, 260, 'bottomRight');
    addAnchor(nosesGroup, 100, 260, 'bottomLeft');*/
}
function loadEyebrows(x){
    imageObj2.src=x.src;
    /*addAnchor(eyebrowsGroup, 0, 0, 'topLeft');
    addAnchor(eyebrowsGroup, 300, 0, 'topRight');
    addAnchor(eyebrowsGroup, 300, 110, 'bottomRight');
    addAnchor(eyebrowsGroup, 0, 110, 'bottomLeft');*/
}
function loadEyes(x){
    imageObj3.src=x.src;
    /*addAnchor(eyesGroup, 100, 50, 'topLeft');
    addAnchor(eyesGroup, 300, 50, 'topRight');
    addAnchor(eyesGroup, 300, 260, 'bottomRight');
    addAnchor(eyesGroup, 100, 260, 'bottomLeft');*/
}
function loadLips(x){
    imageObj4.src=x.src;
    /*addAnchor(lipsGroup, 100, 50, 'topLeft');
    addAnchor(lipsGroup, 300, 50, 'topRight');
    addAnchor(lipsGroup, 300, 260, 'bottomRight');
    addAnchor(lipsGroup, 100, 260, 'bottomLeft');*/
}
function loadJawShapes(x){
    imageObj5.src=x.src;
    /*addAnchor(jawshapesGroup, 100, 50, 'topLeft');
    addAnchor(jawshapesGroup, 300, 50, 'topRight');
    addAnchor(jawshapesGroup, 300, 260, 'bottomRight');
    addAnchor(jawshapesGroup, 100, 260, 'bottomLeft');*/
}
function loadHeadShapes(x){
    imageObj6.src=x.src;
    /*addAnchor(headshapesGroup, 100, 50, 'topLeft');
    addAnchor(headshapesGroup, 300, 50, 'topRight');
    addAnchor(headshapesGroup, 300, 260, 'bottomRight');
    addAnchor(headshapesGroup, 100, 260, 'bottomLeft');*/
}
function loadHairs(x){
    imageObj7.src=x.src;
    /*addAnchor(hairsGroup, 100, 50, 'topLeft');
    addAnchor(hairsGroup, 300, 50, 'topRight');
    addAnchor(hairsGroup, 300, 260, 'bottomRight');
    addAnchor(hairsGroup, 100, 260, 'bottomLeft');*/
}
function loadMoustaches(x){
    imageObj8.src=x.src;
    /*addAnchor(moustachesGroup, 100, 50, 'topLeft');
    addAnchor(moustachesGroup, 300, 50, 'topRight');
    addAnchor(moustachesGroup, 300, 260, 'bottomRight');
    addAnchor(moustachesGroup, 100, 260, 'bottomLeft');*/
}
function loadBeards(x){
    imageObj9.src=x.src;
    /*addAnchor(beardsGroup, 100, 50, 'topLeft');
    addAnchor(beardsGroup, 300, 50, 'topRight');
    addAnchor(beardsGroup, 300, 260, 'bottomRight');
    addAnchor(beardsGroup, 100, 260, 'bottomLeft');*/
}
function loadGlasses(x){
    imageObj10.src=x.src;
    /*addAnchor(glassesGroup, 100, 50, 'topLeft');
    addAnchor(glassesGroup, 300, 50, 'topRight');
    addAnchor(glassesGroup, 300, 260, 'bottomRight');
    addAnchor(glassesGroup, 100, 260, 'bottomLeft');*/
}

function savecanvas(){
  var canvas = document.getElementsByTagName('canvas')[0];
  var dataURL = canvas.toDataURL();
  $.ajax({
    type: "POST",
    url: "save_canvas.php",
    data: {
       imgBase64: dataURL
    }
  }).done(function(o) {
    alert('Saved successfully');
  });

}

</script>
</body>
</html>
