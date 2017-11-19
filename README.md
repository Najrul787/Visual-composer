# Create visual composer addons
You can Create addons for Visual composer very easy for wordpress website.

## What you to do
First you need to [Download](https://www.github.com/Najrul787/Visual-composer/archive/master.zip) this file.
then you need to include/require [visual.php](https://github.com/Najrul787/Visual-composer/blob/master/visual.php) file in function.php

## How to use it
```php
QVisual::start($icon,$category);
```
Set default ``` icon ``` and ``` category ``` on visual composer

```php 
Qvisual::end();
```
Whene you finished your programe thene you need to call this function.
if you do not call this your programe will not work.

# field function
```php
$changeName = QVisual::add(array(
    'name' => 'NameChanging',
    'base' => 'your shortcode name'
));
Qvisual::textfield();
