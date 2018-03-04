<!DOCTYPE html>
<html>
  <head>
    <title>CryptoBlender - Global Cryptocurrency Mixer</title>
    <?=$head?>
  </head>
  <body>
    <?=$header?>
    <div id="particle-canvas">
        <div id="content">
            <h1>CryptoBlender</h1>
            <div style="width: 100%;">
              <div style="float: left; width: 50%; text-align: right;">
                <div id="info">
                  Why mix my coins?
                </div>
              </div>
              <div style="float: left; width: 50%; text-align: left;">
                <button type="button" id="go"
                onclick="main.move('ok!');"
                >START BLENDING ⇨</button>
              </div>
            </div>
        </div>
    </div>
  </body>
  <?=$foot?>
</html>
