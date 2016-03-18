<?php
/*
 * Alpix
 */
class output {
	function put($value) {
		$search="ä";
		$replace="&auml;";
		$value=str_replace ( $search, $replace ,  $value  );
		$search1="Ä";
		$replace="&Auml;";
		$value=str_replace ( $search, $replace ,  $value  );
		$search1="ö";
		$replace="&ouml;";
		$value=str_replace ( $search, $replace ,  $value  );		
		$search1="Ö";
		$replace="&Ouml;";
		$value=str_replace ( $search, $replace ,  $value  );
		$replace="&ouml;";
		$value=str_replace ( $search, $replace ,  $value  );
		$search1="ü";
		$replace="&Ouml;";
		$value=str_replace ( $search, $replace ,  $value  );
		$replace="&uuml;";
		$value=str_replace ( $search, $replace ,  $value  );
		$search1="Ü";
		$replace="&Uuml;";
		$value=str_replace ( $search, $replace ,  $value  );
		$search1="ß";
		$replace="&szlig;";
		$value=str_replace ( $search, $replace ,  $value  );
		$search1="€";
		$replace="&euro;";
		$value=str_replace ( $search, $replace ,  $value  );
		$search1="&";
		$replace="&amp;";
		$value=str_replace ( $search, $replace ,  $value  );
		echo"$value";
	}
}
?>
