
# MyLocalHost - WIP

## Overview :

###### Realization of a Local Host Manager

The Local Host is composed of a launch file "MyLocalHost" which includes the configuration files.


You can move and launch your exercises from the "Show" and "WIP" folders.
A normal processing area is available.

###### In "Show" and "WIP" you can use the formatting system with the appropriate tags :
```html
	<h3> -> Titles 
	<p class='txt'> -> Statements
	<p class='cod'> -> Code Result
```

To display code :
```html
	<pre class='php'>
		<code>
		
			<!-- Your code with indent -->
			
		</code>
	</pre>
```

### Automatic generation of a navigation menu

A menu is automatically generated using code formatting. 
It references and directs to the desired item.

##### Before use this, start document with : 
```php
<?php $title = 'Your Title'; ?>
<?php include '../../MyLocalHost/assets/config/config.php'; ?>
```

And finish by :
```php
<?php Close(); ?>
```



# TO DO :

- Gérer la convertion des balises 'pre'
- Mettre en place la zone
- ...
