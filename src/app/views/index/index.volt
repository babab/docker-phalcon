{% extends "base.volt" %}

{% block content %}

<h2 class="page-header">Your setup works</h2>
<h5>
    Loaded modules
</h5>

<p>{{ extensions }}</p>
<div class="well">
  <h5 class="pull-right">
      <span class="label label-warning">DEVELOPMENT MODE</span>
  </h5>
  See <a class="btn btn-link btn-lg" href="/index/phpinfo">/index/phpinfo</a>
  for more information.
</div>

{% endblock %}
