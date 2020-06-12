<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Tell us about our site please</legend>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="inf">Is our site informative?</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="inf-0">
      <input type="radio" name="inf" id="inf-0" value="y" checked="checked">
      Yes
    </label>
	</div>
  <div class="radio">
    <label for="inf-1">
      <input type="radio" name="inf" id="inf-1" value="n">
      No
    </label>
	</div>
  </div>
</div>

<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="about">How you will tell about our service (from 1 to 5)</label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="about-0">
      <input type="checkbox" name="about" id="about-0" value="1">
      1
    </label>
    <label class="checkbox-inline" for="about-1">
      <input type="checkbox" name="about" id="about-1" value="2">
      2
    </label>
    <label class="checkbox-inline" for="about-2">
      <input type="checkbox" name="about" id="about-2" value="3">
      3
    </label>
    <label class="checkbox-inline" for="about-3">
      <input type="checkbox" name="about" id="about-3" value="4">
      4
    </label>
    <label class="checkbox-inline" for="about-4">
      <input type="checkbox" name="about" id="about-4" value="5">
      5
    </label>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="products">What products do you use?</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="products-0">
      <input type="checkbox" name="products" id="products-0" value="site">
      Site builder
    </label>
	</div>
  <div class="checkbox">
    <label for="products-1">
      <input type="checkbox" name="products" id="products-1" value="dns">
      DNS Resolver
    </label>
	</div>
  <div class="checkbox">
    <label for="products-2">
      <input type="checkbox" name="products" id="products-2" value="json">
      HTML Json Parser
    </label>
	</div>
  <div class="checkbox">
    <label for="products-3">
      <input type="checkbox" name="products" id="products-3" value="live">
      Live chat html
    </label>
	</div>
  <div class="checkbox">
    <label for="products-4">
      <input type="checkbox" name="products" id="products-4" value="dhost">
      DNS Hosting
    </label>
	</div>
  <div class="checkbox">
    <label for="products-5">
      <input type="checkbox" name="products" id="products-5" value="drs">
      Domain Register Service
    </label>
	</div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="anything">Tell anything about our service</label>  
  <div class="col-md-4">
  <input id="anything" name="anything" type="text" placeholder="Your service is not good, but ..." class="form-control input-md" required="">
  <span class="help-block">Required</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Enter your email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="email@example.com" class="form-control input-md" required="">
  <span class="help-block">Required</span>  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Send Information</button>
  </div>
</div>

</fieldset>
</form>

  </body>
</html>