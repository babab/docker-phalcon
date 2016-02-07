<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="device-width, initial-scale=1.0">
    <title>It works!</title>
    <link rel="stylesheet"
          href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/cyborg/bootstrap.min.css">
    <style>
      .tag {
          font-weight: bold;
      }
      .phalcon {
          font-size: 140%;
          font-weight: bold;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
          <div class="col-lg-6 col-lg-offset-3">
            {% block content %}{% endblock %}
          </div>
          <div class="col-lg-3"></div>
      </div>
    </div>
  </body>
</html>
