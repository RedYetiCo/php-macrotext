<?php if( $_SERVER[ 'REQUEST_METHOD' ] == "POST" ) : ?>

	<?php

		$structure = array(
			" " => array( "  ", "  ", "  ", "  ", "  " ),
			"_" => array( "      ", "      ", "      ", "      ", "888888" ),
			"." => array( "    ", "    ", "    ", "    ", " 88 " ),
			"," => array( "    ", "    ", "    ", " oo ", " Y' " ),
			"-" => array( "      ", "      ", "888888", "      ", "      " ),
			"!" => array( "88", "88", "88", "  ", "88" ),
			"?" => array( ".o88o.", "''  88", "  o8Y'", "  ''  ", "  88  " ),
			"a" => array( ".o88o.", "88  88", "888888", "88  88", "88  88" ),
			"b" => array( "8888o.", "88  88", "8888Y'", "88  88", "8888Y'" ),
			"c" => array( ".o8888", "88    ", "88    ", "88    ", "'Y8888" ),
			"d" => array( "8888o.", "88  88", "88  88", "88  88", "8888Y'" ),
			"e" => array( "888888", "88    ", "8888  ", "88    ", "888888" ),
			"f" => array( "888888", "88    ", "8888  ", "88    ", "88    " ),
			"g" => array( ".o8888", "88    ", "88  88", "88  88", "'Y8888" ),
			"h" => array( "88  88", "88  88", "888888", "88  88", "88  88" ),
			"i" => array( "88", "88", "88", "88", "88" ),
			"j" => array( "    88", "    88", "    88", "88  88", "'Y88Y'" ),
			"k" => array( "88  88", "88 .8'", "8888' ", "88 '8.", "88  88" ),
			"l" => array( "88    ", "88    ", "88    ", "88    ", "888888" ),
			"m" => array( "888888o.", "88 88 88", "88 88 88", "88 88 88", "88 88 88" ),
			"n" => array( "8888o.", "88  88", "88  88", "88  88", "88  88" ),
			"o" => array( ".o88o.", "88  88", "88  88", "88  88", "'Y88Y'" ),
			"p" => array( "8888o.", "88  88", "8888Y'", "88    ", "88    " ),
			"q" => array( ".o88o.", "88  88", "88  88", "'Y8888", "    88" ),
			"r" => array( "8888o.", "88  88", "8888Y'", "88  88", "88  88" ),
			"s" => array( ".o8888", "88    ", "'Y88o.", "    88", "8888Y'" ),
			"t" => array( "888888", "  88  ", "  88  ", "  88  ", "  88  " ),
			"u" => array( "88  88", "88  88", "88  88", "88  88", "'Y88Y'" ),
			"v" => array( "88  88", "88  88", "88  88", "88 .8'", "888'  " ),
			"w" => array( "88 88 88", "88 88 88", "88 88 88", "88 88 88", "888888Y'" ),
			"x" => array( "88  88", "'8..8'", " '88' ", ".8''8.", "88  88" ),
			"y" => array( "88  88", "88  88", "'Y8888", "    88", "8888Y'" ),
			"z" => array( "888888", "   .8'", "  oY  ", ".8'   ", "888888" )
		);

		$output = array( "", "", "", "", "" );
		for( $i = 0; $i <= strlen( $_POST[ 'q' ] ); $i ++ ) {
			$i_char = strtolower( substr( $_POST[ 'q' ], $i, 1 ) );
			for( $ii = 0; $ii < 5; $ii ++ ) {
				$output[ $ii ] .= " ".$structure[ $i_char ][ $ii ];
			}
		}

	?>
	<pre><?php echo implode( "\n", $output ); ?></pre>

<?php endif; ?>
<form method="POST">
	<input type="text" name="q" value="<?php echo htmlspecialchars( @$_POST[ 'q' ] ); ?>">
	<button type="submit">Write It!</button>
</form>
