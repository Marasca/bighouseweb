<?php
class BaseController {
	
	protected function view($view, array $data = array()) {
		if (!empty($data))
			extract($data);
		
		ob_start();
		require 'views/templates/master.php';
		$template = ob_get_clean();
		
		ob_start();
		require 'views/'.$view.'.php';
		$view = ob_get_clean();
		
		$html = str_replace('[VIEW]', $view, $template);
		echo $html;
	}

	protected function redirect($to, $status = null, $statusClass = null) {
		if ($status)
			$to .= '&status='.urlencode($status).'&statusClass='.$statusClass;
		
		header('Location: '.$to);
		exit;
	}
	
}
?>