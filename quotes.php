<?php include "includes/db_config.php"; ?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <title>Duas Rotas App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
<link rel="manifest" href="images/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="css/bootstrap-social.css" >
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/weather-icons.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
    <link href="css/main.css" rel="stylesheet" media="screen">
    <style>
		body {
			background: #000;
			color: #A89C77;	
		}
		
		.cbp-qtrotator {
	position: relative;
	margin: 3em auto 5em auto;
	max-width: 1200px;
	width: 100%;
	min-height: 400px;
}

.cbp-qtrotator .cbp-qtcontent {
	position: absolute;
	min-height: 200px;
	border-top: 0px solid #f4f4f4;
	border-bottom: 0px solid #f4f4f4;
	padding: 2em 0;
	top: 0;
	z-index: 0;
	opacity: 0;
	width: 100%;
}

.no-js .cbp-qtrotator .cbp-qtcontent {
	border-bottom: none;
}

/* Currently visible */
.cbp-qtrotator .cbp-qtcontent.cbp-qtcurrent,
.no-js .cbp-qtrotator .cbp-qtcontent {
	position: relative; 
	z-index: 100;
	pointer-events: auto;
	opacity: 1;
}

.cbp-qtrotator .cbp-qtcontent:before,
.cbp-qtrotator .cbp-qtcontent:after {
	content: " ";
	display: table;
}

.cbp-qtrotator .cbp-qtcontent:after {
	clear: both;
}

.cbp-qtprogress {
	position: absolute;
	background: #A89C77;
	height: 1px;
	width: 0%;
	top: 0;
	z-index: 1000;
}


	</style>
  </head>
  <body>

      <div class="container vertical-center" style="margin-top:15%;">
<div id="cbp-qtrotator" class="cbp-qtrotator">
<?php // Attempt select query execution
$sql = "SELECT * FROM quotes ORDER BY RAND() LIMIT 5 ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){?>
       
	<div class="cbp-qtcontent">
		<blockquote style="font-size:6rem;">
		  <p><?php echo $row['quote']; ?></p>
		  <footer><?php echo $row['auteur']; ?></footer>
		</blockquote>
	</div>
	    <?php }
        // Close result set
        mysqli_free_result($result);
    } 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
} 
?>
</div>


    </div> <!-- /container -->

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/alert.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquery.cbpQTRotator.min.js"></script>
		<script>
			$( function() {
				/*
				- how to call the plugin:
				$( selector ).cbpQTRotator( [options] );
				- options:
				{
					// default transition speed (ms)
					speed : 700,
					// default transition easing
					easing : 'ease',
					// rotator interval (ms)
					interval : 8000
				}
				- destroy:
				$( selector ).cbpQTRotator( 'destroy' );
				*/

				$( '#cbp-qtrotator' ).cbpQTRotator({
					speed: 700,
					interval: 6000
					
					});

			} );
		</script>
    <script>
/**
 * jquery.cbpQTRotator.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
;( function( $, window, undefined ) {

	'use strict';

	// global
	var Modernizr = window.Modernizr;

	$.CBPQTRotator = function( options, element ) {
		this.$el = $( element );
		this._init( options );
	};

	// the options
	$.CBPQTRotator.defaults = {
		// default transition speed (ms)
		speed : 1000,
		// default transition easing
		easing : 'ease',
		// rotator interval (ms)
		interval : 8000
	};

	$.CBPQTRotator.prototype = {
		_init : function( options ) {

			// options
			this.options = $.extend( true, {}, $.CBPQTRotator.defaults, options );
			// cache some elements and initialize some variables
			this._config();
			// show current item
			this.$items.eq( this.current ).addClass( 'cbp-qtcurrent' );
			// set the transition to the items
			if( this.support ) {
				this._setTransition();
			}
			// start rotating the items
			this._startRotator();

		},
		_config : function() {

			// the content items
			this.$items = this.$el.children( 'div.cbp-qtcontent' );
			// total items
			this.itemsCount = this.$items.length;
			// current item´s index
			this.current = 0;
			// support for CSS Transitions
			this.support = Modernizr.csstransitions;
			// add the progress bar
			if( this.support ) {
				this.$progress = $( '' ).appendTo( this.$el );
			}

		},
		_setTransition : function() {
			setTimeout( $.proxy( function() {
				this.$items.css( 'transition', 'opacity ' + this.options.speed + 'ms ' + this.options.easing );
			}, this ), 25 );
		},
		_startRotator: function() {

			if( this.support ) {
				this._startProgress();
			}

			setTimeout( $.proxy( function() {
				if( this.support ) {
					this._resetProgress();
				}
				this._next();
				this._startRotator();
			}, this ), this.options.interval );

		},
		_next : function() {

			// hide previous item
			this.$items.eq( this.current ).removeClass( 'cbp-qtcurrent' );
			// update current value
			this.current = this.current < this.itemsCount - 1 ? this.current + 1 : 0;
			// show next item
			this.$items.eq( this.current ).addClass('cbp-qtcurrent');

		},
		_startProgress : function() {
			
			setTimeout( $.proxy( function() {
				this.$progress.css( { transition : 'width ' + this.options.interval + 'ms linear', width : '100%' } );
			}, this ), 25 );

		},
		_resetProgress : function() {
			this.$progress.css( { transition : 'none', width : '0%' } );
		},
		destroy : function() {
			if( this.support ) {
				this.$items.css( 'transition', 'none' );
				this.$progress.remove();
			}
			this.$items.removeClass( 'cbp-qtcurrent' ).css( {
				'position' : 'relative',
				'z-index' : 100,
				'pointer-events' : 'auto',
				'opacity' : 1
			} );
		}
	};

	var logError = function( message ) {
		if ( window.console ) {
			window.console.error( message );
		}
	};

	$.fn.cbpQTRotator = function( options ) {
		if ( typeof options === 'string' ) {
			var args = Array.prototype.slice.call( arguments, 1 );
			this.each(function() {
				var instance = $.data( this, 'cbpQTRotator' );
				if ( !instance ) {
					logError( "cannot call methods on cbpQTRotator prior to initialization; " +
					"attempted to call method '" + options + "'" );
					return;
				}
				if ( !$.isFunction( instance[options] ) || options.charAt(0) === "_" ) {
					logError( "no such method '" + options + "' for cbpQTRotator instance" );
					return;
				}
				instance[ options ].apply( instance, args );
			});
		} 
		else {
			this.each(function() {	
				var instance = $.data( this, 'cbpQTRotator' );
				if ( instance ) {
					instance._init();
				}
				else {
					instance = $.data( this, 'cbpQTRotator', new $.CBPQTRotator( options, this ) );
				}
			});
		}
		return this;
	};

} )( jQuery, window );
</script>

    </body>
</html>