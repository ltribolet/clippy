<?php


/*
|--------------------------------------------------------------------------
| Application HTML Macros
|--------------------------------------------------------------------------
|
| Here is where you can register your HTML macros.
|
*/

HTML::macro('nav_link', function($url, $text)
{
	$class = ( Request::url() == $url || Request::url().'/' == $url ) ? ' class="active"' : '';
	return '<li'.$class.'><a href="'.URL::to($url).'">'.$text.'</a></li>';
});

/*
|--------------------------------------------------------------------------
| Application Form Macros
|--------------------------------------------------------------------------
|
| Here is where you can register your form macros.
|
*/

Form::macro('language_select', function($id, $name, $class){

	$form = '<select id="'.$id.'" name="'.$name.'" class="'.$class.'">';

	foreach (glob("/js/ace/mode-*.js") as $filename) {
		preg_match('/(\w+).js$/', $filename, $match);

		$name = $match[1];

		$languages = array('name' => preg_replace('/_/', ' ', $name), 'safe_name' => $name);

		$form .= '<option value="'.$languages['name'].'">'.$languages['name'].'</option>';
	}

	$form .= '</select>';

	return $form;
});

