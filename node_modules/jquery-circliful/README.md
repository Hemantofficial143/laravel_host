# jquery-circliful
### An npm package for jQuery circle statistic plugin. 
Exmples: https://jsfiddle.net/9dajqcr1/

### Install 
```npm install jquery-circliful```

### Setup 
```require('jquery-circliful')(window, $);```

Or include ```./js/jquery.circliful.js``` to your scrip.

Add stylesheets from ```./css``` to your Site.


### How to use
Add an element to your Site with a unique id and an "container" around it that controls the size of your circle statistic, here a example with bootstrap:
```
    <div class="row">
        <div class="col-lg-2">
            <div id="test-circle"></div>
        </div>
    </div>
```

Add this code at the end of your site

```
	<script>
	    $( document ).ready(function() {
		$("#your-circle").circliful({
                    animationStep: 5,
                    foregroundBorderWidth: 5,
                    backgroundBorderWidth: 15,
                    percent: 75
               });
	   });
	</script>
```

More information on plugins repository: https://github.com/pguso/jquery-plugin-circliful
