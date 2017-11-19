# Create visual composer addons
You can Create addons for Visual composer very easy for wordpress website.

## First you need to do
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
Whene you finished your programe then you need to call this function.
if you do not call this function on your programe will not work.

# Add addons
```php
$changeName = QVisual::add(array(
    'name' => 'NameChanging',
    'base' => 'your shortcode name',
    // if you not set default value from QVisual::start(); function thene you can set it here
    'icon' =>  'Icon location',
    'category' => 'Category Name'
));
// Create a Input box under $changeName option 
Qvisual::textfield($changeName,array(
    'heading' => 'title',
    'value' =>'this is text field',
    'param_name'=>'shortcode param name'
));

// Create a textarea under $changeName option 
Qvisual::textarea($changeName,array(
    'heading' => 'title',
    'value' =>'this is text field',
    'param_name'=>'shortcode param name'
));

```

# All Fields Here functions
```php
QVisual::textfield();
QVisual::textarea();
QVisual::textarea_html();
QVisual::dropdown();
QVisual::attach_image();
QVisual::attach_images();
QVisual::posttypes();
QVisual::colorpicker();
QVisual::exploded_textarea();
QVisual::widgetised_sidebars();
QVisual::textarea_raw_html();
QVisual::vc_link();
QVisual::checkbox();
QVisual::loop();
QVisual::css();

```

### If you need to see all fields you just call 
```php 
QVisual::info();
```
# Thank you





