<?php
require_once( dirname(__FILE__) . '../../../../wp-config.php');
require_once( dirname(__FILE__) . '/functions.php');
header("Content-type: text/css");
 
global $options;
 
foreach ($options as $value) {
        if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); } }
?>
/*

General styling

*/

body {
	margin:0;
	background-color:<?php echo $water_body_bgcolor; ?>;
	font-family:<?php echo $water_font_family; ?>;
	font-size:11px;
	color:<?php echo $water_body_color; ?>;
}

#wrapper {
    width:750px;
    margin:0 auto;
}

a:link, a:visited {
	text-decoration:none;
	color:<?php echo $water_maincolor_1; ?>;
}

a:hover {
    text-decoration:underline;
}

* {
padding:0;
margin:0;
}

/* Add Ons */
.portrait {float:left; margin-right:1em;}

/* HEADER */

#header {
    margin-bottom:20px;
}

    #title {
    width:340px;
    float:right;
    text-align:right;
    margin:38px 5px 0 0;
    line-height:22px;
    font-size:30px;
    font-weight:normal;
    color:<?php echo $water_maincolor_1; ?>;
    }
    
    #title a:hover {
        text-decoration:none;
        color:<?php echo $water_maincolor_2; ?>;
    }

    #topmenu {
        margin-top:40px;
        z-index:5;
        float:left;
        width:400px;
    }
    
        #topmenu a:link, #topmenu a:visited {
            color:<?php echo $water_body_color; ?>;
        }
        
        #topmenu a:hover {
            text-decoration:none;
        }
    
		#topmenu ul { 
			list-style:none;
			margin:0 0 0 5px;
			padding:0;
		}
				
				#topmenu ul li a:link, #topmenu ul li a:visited {
					display:block;
					line-height:11px;
					padding:5px 15px 2px 5px;
					margin:0 5px 0 0;
					font-size:11px;
					border-bottom:2px solid <?php echo $water_maincolor_1; ?>;
					text-transform:uppercase;
				}
				
				#topmenu ul li a:hover {
				    border-bottom:2px solid <?php echo $water_maincolor_2; ?>;
				}
				
				#topmenu ul li {
					display:block;
					float:left;
					position:relative; 
				}
				
				#topmenu ul li ul {
					display:block;
					position:absolute;
					top:auto;
					list-style:none;
					margin:0;
					padding:0;
					visibility:hidden;
					border-top:1px solid <?php echo $water_gray_1; ?>;
					width:220px;
				}
				
				#topmenu ul li:hover>ul {
					visibility:visible;
				}
				
				#topmenu ul li ul li {
					position:relative;
					float:none;
					line-height:18px;
					color:<?php echo $water_body_color; ?>;
					font-size:10px;
					_height:1px;
				}
				
				#topmenu ul li ul li a:link, #topmenu ul li ul li a:visited {
					display:block;
					margin:0;
					line-height:15px;
					padding:2px 0 2px 10px;
					color:#FFF;
					_height:1px;
					text-transform:none;
					border:0;
					background-color:<?php echo $water_maincolor_1; ?>;
				}
				
				#topmenu ul li ul li a:hover {
					background-color:<?php echo $water_maincolor_2; ?>;
				}
				
    #headerimage {
        clear:both;
        height:150px;
        border-top:1px solid <?php echo $water_gray_1; ?>;
        border-bottom:1px solid <?php echo $water_gray_1; ?>;
        background-image:url(<?php echo $water_header_image; ?>);
        background-repeat:no-repeat;
        background-position:center;
    }
    

/* SIDEBAR */

#sidebar {
    width:180px;
    float:right;
    margin:0 5px 0 0;
}

#sidebar a:link, #sidebar a:visited {
    color:<?php echo $water_body_color; ?>;
}

#sidebar a:hover {
    color:<?php echo $water_maincolor_1; ?>;
    text-decoration:none;
}


/* LISTS */

html>body .the_content ul {
	margin-left: 0px;
	padding: 0 0 0 30px;
	list-style: none;
	padding-left: 10px;
	text-indent: -10px;
	} 

html>body .the_content li {
	margin: 7px 0 8px 10px;
	}

.the_content ol {
	padding: 0 0 0 15px;
	margin: 0;
	text-indent:-5px;
}

.postmetadata ul, .postmetadata li {
	display: inline;
	list-style: none;
	}
	
#sidebar ul, #sidebar ul ol {
	margin: 0;
	padding: 0;
	}

#sidebar ul li {
	list-style: none;
	margin-bottom: 15px;
	}

#sidebar ul p, #sidebar ul select {
	margin: 5px 0 8px;
	}

#sidebar ul ul, #sidebar ul ol {
	margin: 5px 0 0 5px;
	}

#sidebar ul ul ul, #sidebar ul ol {
	margin: 0 0 0 10px;
	}

#sidebar ul ul li, #sidebar ul ol li {
	margin: 3px 0 0;
	padding: 0;
	}

.the_content ul li:before, #sidebar ul ul li:before {
	content: "\00BB\00A0";
	color:<?php echo $water_maincolor_1; ?>;
	}


#sidebar #blogroll ul li h2 {display:none;}

/* CONTENT */

#content {
    margin:0 0 0 5px;
    width:520px;
    float:left;
}

.post {
    margin:0 0 30px 0;
    clear:both;
    text-align:justify;
}

    .post .posttitle, #sidebar h2 {
        font-size:20px;
        line-height:20px;
        color:<?php echo $water_maincolor_2; ?>;
        margin:0 0 2px 0;
        font-weight:normal;
    }
    
        .post a:link, .post a:visited {
            color:<?php echo $water_maincolor_2; ?>;
        }
    
        .post a:hover {
            color:<?php echo $water_maincolor_1; ?>;
            text-decoration:none;
        }
    
        .post a:link span, .post a:visited span {
            color:<?php echo $water_gray_1; ?>;
        }
        
        .post a:hover span {
            color:<?php echo $water_gray_2; ?>;
        }
        
    .post .postmeta {
        font-size:10px;
        line-height:10px;
        color:<?php echo $water_gray_1; ?>;
        text-transform:uppercase;
        margin:0 0 5px 0;
    }
    
        .post .postmeta a:link, .post .postmeta a:visited {
            color:<?php echo $water_gray_2; ?>;
        }
        
        .post .postmeta a:hover {
            color:<?php echo $water_maincolor_1; ?>;
            text-decoration:none;
        }
        
    .post p {
        margin:0 0 15px 0;
        line-height:15px;
    }
    
        .post p a:link,
        .post p a:visited,
        .post ul a:link,
        .post ol a:link,
        .post ul a:visited,
        .post ol a:visited {
            color:<?php echo $water_maincolor_1; ?>;
        }
    
        .post p a:hover,
        .post ul a:hover,
        .post ol a:hover {
            text-decoration:underline;
        }
        
        .post .the_content ul, .post .the_content ol {
            margin-bottom:15px;
        }
    
    .post blockquote {
        margin:0 0 15px 20px;
        padding:5px;
        border-top:1px solid <?php echo $water_maincolor_1; ?>;
        border-bottom:1px solid <?php echo $water_maincolor_1; ?>;
    }
    
        .post blockquote p {
            margin:0;
            font-style:italic;
        }
        
        .post blockquote blockquote {
            margin-top:15px;
            background-color:<?php echo $water_gray_3; ?>;
        }

	 .post .wp-smiley {
        float:none;
        border:0;
        margin:0;
    }


/* COMMENTS */

#commentlist, #trackbacks {
    list-style:none;
}

    #commentlist li {
        margin:0;
        padding:15px 10px 0 10px;
        border-bottom:1px solid <?php echo $water_maincolor_1; ?>;
    }

    #commentlist li.odd {
        background-color:<?php echo $water_gray_3; ?>;
    }
    
    #trackbacks li {
        padding:5px 10px 5px 10px;
    }

.post .commenttitle {
        font-size:16px;
        line-height:16px;
        color:<?php echo $water_maincolor_2; ?>;
        margin:0 0 2px 0;
        font-weight:normal;
    }
    
        .post #commentlist .commenttitle a:link, .post #commentlist .commenttitle a:visited {
            color:<?php echo $water_maincolor_2; ?>;
        }
    
        .post #commentlist .commenttitle a:hover {
            color:<?php echo $water_maincolor_1; ?>;
            text-decoration:none;
        }
        
        textarea {
            width:100%;
        }

/* FOOTER */
        
#footer {
    clear:both;
    border-top:1px solid <?php echo $water_gray_1; ?>;
}

    #footer p {
        margin:5px 0 30px 5px;
        color:<?php echo $water_gray_1; ?>;
        text-transform:uppercase;
        font-size:10px;
    }
    
    #footer a:link, #footer a:visited {
        color:<?php echo $water_gray_2; ?>;
    }
    
    #footer a:hover {
        color:<?php echo $water_maincolor_1; ?>;
        text-decoration:none;
    }