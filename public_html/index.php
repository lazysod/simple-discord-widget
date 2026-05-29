<!DOCTYPE html>
<html lang="en">
<head>
  <link id="discordTheme" href="./discord/css/light.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Simple Discord Widget</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="./css/custom.css" rel="stylesheet">
  <!-- Discord CSS -->
  <link href="./discord/css/discord.css" rel="stylesheet">
  <!-- Bootstrap core JavaScript -->
  <!-- Load Fontawesome -->
  <link href="./css/fontawesome/all.css" rel="stylesheet">

  <!-- Load Bootstrap and Discord JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="./discord/js/discord.js"></script>

  <script>
    function changeCSS(cssFile) {
      var themeStylesheet = document.getElementById("discordTheme");
      if (themeStylesheet) {
        themeStylesheet.setAttribute("href", cssFile);
      }
    }
  </script>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Simple Discord Widget</a>

    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">Simple Discord Widget</h1>
        <p class="lead">Home grown Discord widget for bootstrap</p>
        <ul class="list-unstyled">
          <li>Bootstrap 5.3.3</li>
          <li>Vanilla JavaScript (fetch)</li>
          <li>Fontawesome 5.13.0</li>
        </ul>
        <div class="d-flex justify-content-center gap-2 mb-4">
          <button type="button" onclick="changeCSS('./discord/css/light.css');" class="btn btn-primary">Light Theme</button>
          <button type="button" onclick="changeCSS('./discord/css/dark.css');" class="btn btn-primary">Dark Theme</button>
        </div>
      </div>
    </div>
    <div class="row g-4">
    <div class="col-lg-4" id="discordWidget"></div>
      <div class="col-lg-6">
        <ol>
          <li><p>First add the CSS</p>
              <code><pre><?php echo htmlspecialchars('<link href="./discord/css/discord.css" rel="stylesheet">');?></pre></code>
              choose either light
              <code><pre><?php echo htmlspecialchars('<link href="./discord/css/light.css" rel="stylesheet">');?></pre></code>
              or dark theme
              <code><pre><?php echo htmlspecialchars('<link href="./discord/css/dark.css" rel="stylesheet">');?></pre></code>
            </li>
          <li>
            <p>
              Keep the <i>discord</i> folder inside <i>public_html</i>.
            </p>
          </li>
          <li>
            <p>Edit the discord config with all required changes</p>
            <code><pre><?php echo htmlspecialchars('/public_html/discord/discordConfig.php');?></pre></code></li>
          </li>
          <li>
            <p>
            Then add the link to the JS 
            </p>
            <code><pre><?php echo htmlspecialchars('<script src="./discord/js/discord.js"></script>'); ?></pre></code>
          </li>
          <li>
            <p>Add  the required ID "discordWidget" to the colum you want the widget to appear on </p>
            <code><pre><?php echo htmlspecialchars('<div class="col-lg-4" id="discordWidget"></div>'); ?></pre></code>
          </li>
      </ol>
        
        
        
      </div>
    </div>
  </div>
</body>
</html>
