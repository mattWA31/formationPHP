<?php
	function somme($tab) {
		$resultat = 0;
		foreach($tab as $element) {
			$resultat += $element;
		}
		return $resultat;
	}

?>