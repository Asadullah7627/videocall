<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Accept a payment</title>
    <meta name="description" content="A demo of a payment on Stripe" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css" />
    <script src="https://js.stripe.com/basil/stripe.js"></script>
    <script src="checkout.js" defer></script>
  </head>
  <body>
   <script src="https://resource.zegocloud.com/prebuilt/crypto-js.js"></script>
<script src="https://resource.zegocloud.com/prebuilt/prebuiltToken.js"></script>
<script src="https://zegocloud.github.io/zegocloud_prebuilt_webrtc/ZegoPrebuilt/index.umd.js"></script>

<script>

const TOKEN = generatePrebuiltToken(519965151,"010f749c8cc07de5a2ff625b1c497238",'room2','UserID-' + Math.random(),'jack'+ Math.random());

const zp = ZegoUIKitPrebuilt.create(TOKEN);
zp.joinRoom({
    container : document.querySelector("#root"),
});
</script>


    
  </body>
</html>