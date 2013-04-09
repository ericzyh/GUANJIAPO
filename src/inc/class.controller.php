<?php
class Controller
{
	public function loadModel($model)
	{
		global $config;
		$model_filename = strtolower(str_replace('Model', '', $model) . '.php');
		include_once($config['model_dir'] . $model_filename);
	}
	
	public function loadView($view, $vars='')
	{
		global $config;
		if (!empty($vars))
			{
				foreach ($vars as $key => $val)
				{
					$$key = $val;
				}
			}  
			include($config['view_dir'] . $view . '.php');
		 
	} 
}
?>