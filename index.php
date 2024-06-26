<?php

	/*

		Single File PHP Gallery 4.11.0 (SFPG)

		See EULA in readme.txt for commercial use
		See readme.txt for configuration

		Released: 6-october-2022
		https://sye.dk/sfpg/
		by Kenny Svalgaard

	*/

	error_reporting(defined('ERROR_REPORT') ? ERROR_REPORT : 0);

	//	----------- CONFIGURATION START ------------

	option('GALLERY_ROOT', './');
	option('DATA_ROOT', './_sfpg_data/');
	option('PASSWORD', '');
	option('ADMIN', FALSE);  // WARNING - See description in readme.txt before setting to TRUE

	option('DIR_NAME_FILE', '_name.txt');
	option('DIR_THUMB_FILE', '_image.jpg');
	option('DIR_THUMB_FROM_ICONS_DIR', FALSE);
	option('DIR_DESC_FILE', '_desc.txt');
	option('DIR_BANNER_FILE', '_banner.txt');
	option('DIR_ROOT_BANNER_IN_SUBDIRS', TRUE);
	option('DIR_DESC_IN_GALLERY', TRUE);
	option('DIR_DESC_IN_INFO', TRUE);
	option('DIR_SORT_REVERSE', FALSE);
	option('DIR_SORT_BY_TIME', FALSE);
	option('DIR_EXCLUDE', ['_sfpg_data', '_sfpg_zip', '_sfpg_icons']);  // Use only lower case.
	option('DIR_EXCLUDE_REGEX', '');

	option('SHOW_IMAGE_EXT', FALSE);
	option('IMAGE_SORT_REVERSE', FALSE);
	option('IMAGE_SORT_BY_TIME', FALSE);
	option('IMAGE_EXIF_TIME', FALSE);
	option('ROTATE_IMAGES', TRUE);
	option('IMAGE_JPEG_QUALITY', 90);
	option('IMAGE_EXCLUDE_REGEX', '');

	option('SHOW_FILES', TRUE);
	option('SHOW_FILE_EXT', TRUE);
	option('FILE_IN_NEW_WINDOW', TRUE);
	option('FILE_THUMB_EXT', '.jpg');
	option('FILE_THUMB_DEFAULT', '');
	option('FILE_SORT_REVERSE', FALSE);
	option('FILE_SORT_BY_TIME', FALSE);
	option('FILE_EXCLUDE', ['_sfpg_zip']);  // Use only lower case.
	option('FILE_EXT_EXCLUDE', ['.php', '.txt', '.sell']);  // Use only lower case.
	option('FILE_EXCLUDE_REGEX', '');

	option('ICONS_DIR', '_sfpg_icons/');
	option('LINK_BACK', '');
	option('CHARSET', 'utf-8');
	option('DATE_FORMAT', 'Day Date Month Year Hour:Min:Sec');
	option('DESC_EXT', '.txt');
	option('HTML_DESCRIPTIONS', FALSE);  // WARNING - See description in readme.txt before configuring this option
	option('DESC_NL_TO_BR', FALSE);
	option('SORT_DIVIDER', '--');
	option('SORT_ALL_NATURAL', TRUE);
	option('FONT_SIZE', 12);
	option('UNDERSCORE_AS_SPACE', TRUE);
	option('SHOW_EXIF_INFO', TRUE);
	option('SHOW_IPTC_INFO', TRUE);
	option('PNG_TEXT_CHUNKS', TRUE);  // Use only lower case when set to an array.
	option('SHOW_INFO_BY_DEFAULT', FALSE);
	option('ROUND_CORNERS', 3);

	option('ZIP_ENABLE', FALSE);
	option('ZIP_FILES', FALSE);
	option('ZIP_FILE_THUMBS', FALSE);
	option('ZIP_SUB_GALLERIES', FALSE);
	option('ZIP_DESCRIPTIONS', FALSE);
	option('ZIP_COMPRESSION', FALSE);
	option('ZIP_CACHE_DAYS', 180);
	option('TEXT_ZIP_ROOT_NAME', 'Single File PHP Gallery');
	option('TEXT_ZIP_NOTHING', 'Nothing to zip.');
	option('TEXT_ZIP_DL', 'Download all images in this directory as a zip file:');
	option('TEXT_ZIP_BUTTON', 'Generate zip-file and download');
	option('TEXT_ZIP_WAIT', 'Zip is being generated. Please wait...');

	option('THUMB_MAX_WIDTH', 200);
	option('THUMB_MAX_HEIGHT', 150);
	option('THUMB_SQUARE', FALSE);
	option('THUMB_ENLARGE', FALSE);
	option('THUMB_JPEG_QUALITY', 75);
	option('THUMB_PNG_ALPHA', TRUE);
	option('LOW_IMAGE_RESAMPLE_QUALITY', FALSE);

	option('KEYBOARD_NAVIGATION', TRUE);
	option('WATERMARK', '');
	option('WATERMARK_FRACTION', 0.1);

	option('MPO_STEREO_IMAGE', TRUE);
	option('MPO_STEREO_DOTS', TRUE);
	option('MPO_STEREO_MAX_WIDTH', 300);
	option('MPO_STEREO_MAX_HEIGHT', 300);
	option('MPO_FULL_IMAGE', TRUE);
	option('MPO_FULL_ANAGLYPH', TRUE);
	option('MPO_FULL_MAX_WIDTH', 1200);
	option('MPO_FULL_MAX_HEIGHT', 800);
	option('MPO_SPACING', 20);

	option('INFO_BOX_WIDTH', 250);
	option('MENU_BOX_HEIGHT', 70);
	option('NAV_BAR_HEIGHT', 25);
	option('THUMB_BORDER_WIDTH', 1);
	option('THUMB_MARGIN', 10);
	option('THUMB_BOX_MARGIN', 7);
	option('THUMB_BOX_EXTRA_HEIGHT', 14);
	option('THUMB_CHARS_MAX', 20);
	option('FULLIMG_BORDER_WIDTH', 5);

	option('NAVI_CHARS_MAX', 100);
	option('OVERLAY_OPACITY', 0.9);
	option('FADE_DURATION_MS', 300);
	option('SLIDESHOW_DELAY_SEC', 5);

	option('SHOW_MAX_IMAGES', FALSE);
	option('SHOW_IMAGE_DAYS', FALSE);
	option('DELETE_IMAGE_DAYS', FALSE);
	option('DELETE_EMPTY_DIRS', FALSE);

	option('PAYPAL_ENABLED', FALSE);
	option('PAYPAL_ACCOUNT', '');
	option('PAYPAL_CURRENCY', 'USD');
	option('PAYPAL_EXTENSION', '.sell');
	option('RETURN_PROTOCOL', 'https');

	option('TEXT_PAYPAL_FOR_SALE', 'Sales information');
	option('TEXT_PAYPAL_PRICE', 'Price');
	option('TEXT_PAYPAL_STATUS', 'Status');
	option('TEXT_PAYPAL_AVAILABLE', 'Available');
	option('TEXT_PAYPAL_SOLD', 'Sold');
	option('TEXT_PAYPAL_ITEM_ID', 'Item ID');
	option('TEXT_PAYPAL_BUY', 'Buy this item');
	option('TEXT_PAYPAL_OUT_BACK', 'Item is no longer available. Click back and refresh the page to update status.');
	option('TEXT_PAYPAL_THANKS', 'Thank you for your purchase. The item will remain listed as available until seller have verified the purchase. Click here to return to the gallery: ');
	option('TEXT_PAYPAL_REDIRECT', 'Redirecting to PayPal. Please wait...');

	option('HTML_LANGUAGE', 'en-US');
	option('TEXT_DAYS', "['Sun','Mon','Tue','Wed','Thu','Fri','Sat']");
	option('TEXT_MONTHS', "['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec']");

	option('TEXT_GALLERY_NAME', 'Pi-Fi Gallery');
	option('TEXT_BANNER', '<h3>Images will automatically be deleted from the gallery after 30 days from the date of upload!</h3>');
	option('TEXT_HOME', 'Home');
	option('TEXT_CLOSE_IMG_VIEW', 'Close Image');
	option('TEXT_ACTUAL_SIZE', 'Actual Size');
	option('TEXT_PREVIOUS', '&#x25C4;&#xFE0E; Previous');
	option('TEXT_NEXT', 'Next &#x25BA;&#xFE0E;');
	option('TEXT_INFO', 'Info panel');
	option('TEXT_INFO_LABEL', 'Information');
	option('TEXT_DOWNLOAD', 'Download image');
	option('TEXT_SLIDESHOW', 'Slideshow');
	option('TEXT_NO_IMAGES', 'No Images in gallery');
	option('TEXT_DATE', 'Date');
	option('TEXT_FILESIZE', 'File size');
	option('TEXT_IMAGESIZE', 'Image size');
	option('TEXT_DIR_NAME', 'Gallery Name');
	option('TEXT_IMAGE_NAME', 'Image Name');
	option('TEXT_FILE_NAME', 'File Name');
	option('TEXT_DIRS', 'Directories');
	option('TEXT_DIR_MARK_START', '&#128193;&#xFE0E; ');
	option('TEXT_DIR_MARK_END', '');
	option('TEXT_IMAGES', 'Images');
	option('TEXT_IMAGE_NUMBER', 'Image number');
	option('TEXT_FILES', 'Files');
	option('TEXT_DESCRIPTION', 'Description');
	option('TEXT_DIRECT_LINK_GALLERY', 'Direct link to Gallery');
	option('TEXT_DIRECT_LINK_IMAGE', 'Direct link to Image');
	option('TEXT_NO_THUMB_FOR_FILE', 'No thumbnail for file');
	option('TEXT_IMAGE_LOADING', 'Image Loading ');
	option('TEXT_LINKS', 'Links');
	option('TEXT_NOT_SCALED', 'Not Scaled');
	option('TEXT_LINK_BACK', 'Back to my site');
	option('TEXT_SCALED_TO', 'Scaled to');
	option('TEXT_YES', 'Yes');
	option('TEXT_NO', 'No');
	option('TEXT_FIRST_VIEW', 'This is first view of this image. Refresh page to get information.');

	option('TEXT_LOGIN', 'Login');
	option('TEXT_LOGOUT', 'Logout');
	option('TEXT_ADMIN', 'Admin');
	option('TEXT_OK', 'OK');
	option('TEXT_CANCEL', 'Cancel');
	option('TEXT_DELETE', 'Delete');
	option('TEXT_RENAME', 'Rename');
	option('TEXT_MOVE', 'Move');
	option('TEXT_MOVE_TO', 'Move to');
	option('TEXT_MKDIR', 'Create Directory');
	option('TEXT_SET_DIR_THUMB', 'Dir Thumb');
	option('TEXT_REMOVE_THUMB', 'No images selected. Will remove current directory thumbnail and select new thumbnail.');
	option('TEXT_SETTING_THUMB', 'Setting directory thumbnail to: ');
	option('TEXT_WRONG_FILETYPE', 'Wrong filetype selected. Filetype must be same as set in DIR_THUMB_FILE: ');
	option('TEXT_UPLOAD', 'Upload');
	option('TEXT_INVERT_SELECTION', 'Invert Select');
	option('TEXT_NOTHING', 'Nothing Selected');
	option('TEXT_ONLY_ONE', 'Select only one element to use this function');
	option('TEXT_ONE_IMAGE', 'Select only one image to use this function');

	option('TEXT_EXIF', 'EXIF');
	option('TEXT_EXIF_DATE', 'Date');
	option('TEXT_EXIF_CAMERA', 'Camera');
	option('TEXT_EXIF_ISO', 'ISO');
	option('TEXT_EXIF_SHUTTER', 'Shutter Speed');
	option('TEXT_EXIF_APERTURE', 'Aperture');
	option('TEXT_EXIF_FOCAL', 'Focal Length');
	option('TEXT_EXIF_FLASH', 'Flash fired');
	option('TEXT_EXIF_LATITUDE', 'Latitude');
	option('TEXT_EXIF_LONGITUDE', 'Longitude');
	option('TEXT_EXIF_MAP', 'See on Google map');
	option('EXIF_MAP_LINK', 'https://maps.google.com/maps?q=[lat],[long]');
	option('TEXT_EXIF_MAP_EMBED', 'Image map');
	option('EXIF_MAP_EMBED_LINK', 'https://maps.google.com/maps?q=[lat],[long]&output=embed');

	option('TEXT_PNG_CHUNKS', 'PNG text chunks');
	option('TEXT_IPTC', 'IPTC');

	option('IPTC', [
		'2#005' => 'Document Title',
		'2#010' => 'Urgency',
		'2#015' => 'Category',
		'2#020' => 'Subcategories',
		'2#040' => 'Special Instructions',
		'2#055' => 'Creation Date',
		'2#080' => 'Author Byline',
		'2#085' => 'Author Title',
		'2#090' => 'City',
		'2#095' => 'State',
		'2#101' => 'Country',
		'2#103' => 'OTR',
		'2#105' => 'Headline',
		'2#110' => 'Source',
		'2#115' => 'Photo Source',
		'2#116' => 'Copyright',
		'2#120' => 'Caption',
		'2#122' => 'Caption Writer',
	]);

	option('COLOR_BODY_BACK', '#000000');
	option('COLOR_BODY_TEXT', '#aaaaaa');
	option('COLOR_BODY_LINK', '#ffffff');
	option('COLOR_BODY_HOVER', '#aaaaaa');

	option('COLOR_THUMB_BORDER', '#606060');
	option('COLOR_FULLIMG_BORDER', '#ffffff');

	option('COLOR_MARKED_BACK', '#ff0000');
	option('COLOR_MARKED_TEXT', '#000000');
	
	option('COLOR_DIR_BOX_BORDER', '#505050');
	option('COLOR_DIR_BOX_BACK', '#000000');
	option('COLOR_DIR_BOX_TEXT', '#aaaaaa');
	option('COLOR_DIR_HOVER', '#ffffff');
	option('COLOR_DIR_HOVER_TEXT', '#000000');

	option('COLOR_IMG_BOX_BORDER', '#505050');
	option('COLOR_IMG_BOX_BACK', '#202020');
	option('COLOR_IMG_BOX_TEXT', '#aaaaaa');
	option('COLOR_IMG_HOVER', '#ffffff');
	option('COLOR_IMG_HOVER_TEXT', '#000000');

	option('COLOR_FILE_BOX_BORDER', '#404040');
	option('COLOR_FILE_BOX_BACK', '#101010');
	option('COLOR_FILE_BOX_TEXT', '#aaaaaa');
	option('COLOR_FILE_HOVER', '#ffffff');
	option('COLOR_FILE_HOVER_TEXT', '#000000');

	option('COLOR_DESC_BOX_BORDER', '#404040');
	option('COLOR_DESC_BOX_BACK', '#202020');
	option('COLOR_DESC_BOX_TEXT', '#aaaaaa');

	option('COLOR_MENU_BACK', '#000000');
	option('COLOR_MENU_TOP', '#303030');

	option('COLOR_NAVBAR_BACK', '#202020');
	option('COLOR_NAVBAR_TOP', '#303030');

	option('COLOR_BUTTON_NAV_BORDER', '#404040');
	option('COLOR_BUTTON_NAV_BACK', '#101010');
	option('COLOR_BUTTON_NAV_TEXT', '#808080');

	option('COLOR_INFO_BACK', '#000000');
	option('COLOR_INFO_BORDER', '#606060');
	option('COLOR_INFO_TEXT', '#aaaaaa');

	option('COLOR_INFOBOX_BORDER', '#404040');
	option('COLOR_INFOBOX_BACK', '#101010');

	option('COLOR_BUTTON_BORDER', '#808080');
	option('COLOR_BUTTON_BACK', '#000000');
	option('COLOR_BUTTON_TEXT', '#aaaaaa');
	option('COLOR_BUTTON_BORDER_OFF', '#505050');
	option('COLOR_BUTTON_BACK_OFF', '#000000');
	option('COLOR_BUTTON_TEXT_OFF', '#505050');
	option('COLOR_BUTTON_HOVER', '#ffffff');
	option('COLOR_BUTTON_HOVER_TEXT', '#000000');
	option('COLOR_BUTTON_ON', '#aaaaaa');
	option('COLOR_BUTTON_TEXT_ON', '#000000');

	option('COLOR_OVERLAY', '#000000');

	//	----------- CONFIGURATION END ------------


	function option($name, $value)
	{
		if (!defined($name))
		{
			define($name, $value);
		}
	}


	function sfpg_array_sort(&$arr, &$arr_time, $sort_by_time, $sort_reverse)
	{
		if ($sort_by_time)
		{
			if ($sort_reverse)
			{
				array_multisort ($arr_time, SORT_DESC, SORT_NUMERIC, $arr);
			}
			else
			{
				array_multisort ($arr_time, SORT_ASC, SORT_NUMERIC, $arr);
			}
		}
		else
		{
			if (SORT_ALL_NATURAL)
			{
				natcasesort ($arr);
				$arr = array_values($arr);
				if ($sort_reverse)
				{
					$arr = array_reverse ($arr);
				}
			}
			else
			{
				if ($sort_reverse)
				{
					rsort ($arr);
				}
				else
				{
					sort ($arr);
				}
			}
		}
	}


	function sfpg_file_size($size)
	{
		$sizename = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
		return ($size ? round($size/pow(1024, ($i = floor(log($size, 1024)))), 2).' '.$sizename[$i] : '0 Bytes');
	}


	function sfpg_base64url_encode($plain)
	{
		$base64 = base64_encode($plain);
		$base64url = strtr($base64, '+/', '-_');
		return rtrim($base64url, '=');
	}


	function sfpg_base64url_decode($base64url)
	{
		$base64 = strtr($base64url, '-_', '+/');
		$plain = base64_decode($base64);
		return ($plain);
	}


	function sfpg_url_string($dir = '', $img = '')
	{
		$res = $dir.'*'.$img.'*';
		return sfpg_base64url_encode($res.hash('sha256', $res.SECURITY_PHRASE));
	}


	function sfpg_url_decode($string)
	{
		$get = explode('*', sfpg_base64url_decode($string));
		if (is_array($get) and (count($get)==3) and (hash('sha256', $get[0].'*'.$get[1].'*'.SECURITY_PHRASE) === $get[2]) and (strpos(GALLERY_ROOT.$get[0].$get[1], '/../') === FALSE) and (strpos($get[0].$get[1], '\\') === FALSE))
		{
			return [$get[0], $get[1]];
		}
		else
		{
			return FALSE;
		}
	}


	function block_html($str)
	{
		return str_replace(['&', '"', "'", '<', '>'], ['&amp;', '&quot;', '&#39;', '&lt;', '&gt;'], $str);
	}


	function clean_html($str)
	{
		if (HTML_DESCRIPTIONS === TRUE)
		{
			return $str;
		}
		elseif (is_string(HTML_DESCRIPTIONS) or is_array(HTML_DESCRIPTIONS))
		{
			// allowed tags
			$str = strip_tags($str, HTML_DESCRIPTIONS);
			return $str;
		}
		return block_html($str);
	}


	function sts($str, $nl_to_br=true)
	{
		return str_replace(["\r", "\n", "\\", "\"", "'"], ["", ($nl_to_br?"<br>":" "), "\\\\", "\\\"", "\'"], $str);
	}


	function sfpg_display_name($name, $show_ext)
	{
		$break_pos = strpos($name, SORT_DIVIDER);
		if ($break_pos !== FALSE)
		{
			$display_name = substr($name, $break_pos + strlen(SORT_DIVIDER));
		}
		else
		{
			$display_name = $name;
		}
		if (UNDERSCORE_AS_SPACE)
		{
			$display_name = str_replace('_', ' ', $display_name);
		}
		if (!$show_ext)
		{
			$display_name = substr($display_name, 0, strrpos($display_name, '.'));
		}
		return $display_name;
	}


	function sfpg_ext($file)
	{
		if (strrpos($file, '.') === FALSE)
		{
			return 'nodot';
		}
		else
		{
			return strtolower(substr($file, strrpos($file, '.')));
		}
	}


	function sfpg_image_type($file)
	{
		$type = sfpg_ext($file);
		if (($type == '.jpg') or ($type == '.jpeg') or ((MPO_FULL_IMAGE or MPO_STEREO_IMAGE) and ($type == '.mpo')))
		{
			return 'jpeg';
		}
		elseif ($type == '.png')
		{
			return 'png';
		}
		elseif ($type == '.gif')
		{
			return 'gif';
		}
		return FALSE;
	}


	function sfpg_mpo_image($file)
	{
		if (!$mpo = @file_get_contents($file))
		{
			return false;
		}
		$offset = 0;
		$marker = true;
		$imgOffset = [];
		$markA = chr(0xFF).chr(0xD8).chr(0xFF).chr(0xE1);
		$markB = chr(0xFF).chr(0xD9).chr(0xFF).chr(0xE0);
		while ($marker!==false)
		{
			$marker = strpos($mpo, $markA, $offset);
			if ($marker===false)
			{
				$marker = strpos($mpo, $markB, $offset);
			}
			if ($marker!==false)
			{
				$imgOffset[] = $marker;
				$offset = $marker+4;
			}
		}
		$imgOffset[] = strlen($mpo);
		if (count($imgOffset)<2)
		{
			return false;
		}
		if (count($imgOffset)>2)
		{
			$img_left = imagecreatefromstring(substr($mpo, $imgOffset[0], $imgOffset[1]-$imgOffset[0]));
			$img_right = imagecreatefromstring(substr($mpo, $imgOffset[1], $imgOffset[2]-$imgOffset[1]));
			list($mpo_stereo_width, $mpo_stereo_height) = sfpg_aspect_resize(imagesx($img_left), imagesy($img_left), MPO_STEREO_MAX_WIDTH, MPO_STEREO_MAX_HEIGHT, true);
			list($mpo_full_width, $mpo_full_height) = sfpg_aspect_resize(imagesx($img_left), imagesy($img_left), MPO_FULL_MAX_WIDTH, MPO_FULL_MAX_HEIGHT, false);
			$stereo_dot_space = 0;
			if (MPO_STEREO_DOTS)
			{
				$dot_size=3;
				$stereo_dot_space = 2*$dot_size+2*MPO_SPACING;
			}
			$stereo_align = 0;
			$new_img_width = 0;
			$new_img_height = 0;
			$full_offset_y = 0;
			if (MPO_STEREO_IMAGE)
			{
				$new_img_width += $mpo_stereo_width*2+MPO_SPACING;
				$new_img_height += $stereo_dot_space + $mpo_stereo_height + (MPO_FULL_IMAGE ? MPO_SPACING : 0);
				$full_offset_y = $mpo_stereo_height+MPO_SPACING+$stereo_dot_space;
			}
			$full_offset_x = round(($new_img_width-$mpo_full_width)/2);
			if (MPO_FULL_IMAGE)
			{
				if ($mpo_full_width > $new_img_width)
				{
					$new_img_width = $mpo_full_width;
					$stereo_align = (int)(($mpo_full_width-($mpo_stereo_width*2+MPO_SPACING))/2);
					$full_offset_x = 0;					
				}
				$new_img_height += $mpo_full_height;
			}
			$new_image = imagecreatetruecolor($new_img_width, $new_img_height);
			$tmp_left = imagecreatetruecolor($mpo_full_width, $mpo_full_height);
			imagecopyresampled($tmp_left, $img_left, 0, 0, 0, 0, $mpo_full_width, $mpo_full_height, imagesx($img_left), imagesy($img_left));
			$tmp_right = imagecreatetruecolor($mpo_full_width, $mpo_full_height);
			imagecopyresampled($tmp_right, $img_right, 0, 0, 0, 0, $mpo_full_width, $mpo_full_height, imagesx($img_right), imagesy($img_right));
			if (MPO_FULL_IMAGE)
			{
				if (MPO_FULL_ANAGLYPH)
				{
					$anaglyph_image = imagecreatetruecolor($mpo_full_width, $mpo_full_height);
					imagealphablending($anaglyph_image, false);
					for($y=0; $y<$mpo_full_height; $y++)
					{
						for($x=0; $x<$mpo_full_width; $x++)
						{
							$left_color = imagecolorat($tmp_left, $x, $y);
							$r = (int)(($left_color >> 16) & 255) * 0.299 + (($left_color >> 8) & 255) * 0.587 + (($left_color) & 255) * 0.114;
							if ($r > 255)
							{
								$r = 255;
							}
							$g = (imagecolorat($tmp_right, $x, $y) >> 8) & 255;
							$b = (imagecolorat($tmp_right, $x, $y)) & 255;
							imagesetpixel($anaglyph_image, $x, $y, imagecolorallocate($anaglyph_image, $r, $g, $b));
						}
					}
					imagecopyresampled($new_image, $anaglyph_image, $full_offset_x, $full_offset_y, 0, 0, $mpo_full_width, $mpo_full_height, $mpo_full_width, $mpo_full_height);
					imagedestroy($anaglyph_image);
					imagedestroy($tmp_left);
					imagedestroy($tmp_right);
				}
				else
				{
					imagecopyresampled($new_image, $img_left, $full_offset_x, $full_offset_y, 0, 0, $mpo_full_width, $mpo_full_height, imagesx($img_left), imagesy($img_left));
				}
			}
			if (MPO_STEREO_IMAGE)
			{
				imagecopyresampled($new_image, $img_left, $stereo_align, $stereo_dot_space, 0, 0, $mpo_stereo_width, $mpo_stereo_height, imagesx($img_left), imagesy($img_left));
				imagedestroy($img_left);
				imagecopyresampled($new_image, $img_right, $stereo_align+$mpo_stereo_width+MPO_SPACING, $stereo_dot_space, 0, 0, $mpo_stereo_width, $mpo_stereo_height, imagesx($img_right), imagesy($img_right));
				imagedestroy($img_right);
				$white = imagecolorallocate($new_image, 255, 255, 255);
				imagefilledrectangle($new_image, $stereo_align+(int)($mpo_stereo_width/2)-3, MPO_SPACING-3, $stereo_align+(int)($mpo_stereo_width/2)+3, MPO_SPACING+3, $white);
				imagefilledrectangle($new_image, $stereo_align+MPO_SPACING+(int)($mpo_stereo_width*1.5)-3, MPO_SPACING-3, $stereo_align+MPO_SPACING+(int)($mpo_stereo_width*1.5)+3, MPO_SPACING+3, $white);
			}
			return $new_image;
		}
		else
		{
			$image = imagecreatefromstring(substr($mpo, $imgOffset[0], $imgOffset[1]-$imgOffset[0]));
			list($mpo_width, $mpo_height) = sfpg_aspect_resize(imagesx($image), imagesy($image), MPO_FULL_MAX_WIDTH, MPO_FULL_MAX_HEIGHT, false);
			$new_image = imagecreatetruecolor($mpo_width, $mpo_height);
			imagecopyresampled($new_image, $image, 0, 0, 0, 0, $mpo_width, $mpo_height, imagesx($image), imagesy($image));
			imagedestroy($image);
			return $new_image;
		}
	}


	function sfpg_aspect_resize($image_width, $image_height, $max_width, $max_height, $enlarge)
	{
		if (($image_width < $max_width) and ($image_height < $max_height) and !$enlarge)
		{
			$new_img_height = $image_height;
			$new_img_width = $image_width;
		}
		else
		{
			$aspect_x = $image_width / $max_width;
			$aspect_y = $image_height / $max_height;
			if ($aspect_x > $aspect_y)
			{
				$new_img_width = $max_width;
				$new_img_height = $image_height / $aspect_x;
			}
			else
			{
				$new_img_height = $max_height;
				$new_img_width = $image_width / $aspect_y;
			}
		}
		return [(int)round($new_img_width), (int)round($new_img_height)];
	}


	function sfpg_mkdir($dir)
	{
		if (!is_dir($dir))
		{
			mkdir($dir, 0777, TRUE);
			return true;
		}
		return false;
	}


	function sfpg_get_dir($dir, $for_dir_info=FALSE, $for_zip=FALSE)
	{
		$dirs = [];
		$dirs_time = [];
		$images = [];
		$images_time = [];
		$files = [];
		$files_time = [];
		$misc = [];
		$directory_handle = @opendir(GALLERY_ROOT.$dir);
		if ($directory_handle != FALSE)
		{
			while(($var=readdir($directory_handle))!==false)
			{
				if (is_dir(GALLERY_ROOT.$dir.$var))
				{
					if (($var != '.') and ($var != '..') and !in_array(strtolower($var), DIR_EXCLUDE) and !@preg_match(DIR_EXCLUDE_REGEX, $var))
					{
						$dirs[] = $var;
						if (DIR_SORT_BY_TIME)
						{
							$dirs_time[] = filemtime(GALLERY_ROOT.$dir.$var.'/.');
						}
					}
				}
				elseif (sfpg_image_type($var))
				{
					if (($var != DIR_THUMB_FILE) and !@preg_match(IMAGE_EXCLUDE_REGEX, $var))
					{
						if ((DELETE_IMAGE_DAYS) and (filemtime(GALLERY_ROOT.$dir.$var)<(time()-(DELETE_IMAGE_DAYS*86400))))
						{
							unlink(GALLERY_ROOT.$dir.$var);
						}
						else
						{
							$images[] = $var;
							if (IMAGE_SORT_BY_TIME)
							{
								if (IMAGE_EXIF_TIME)
								{
									if ($img_info=@file_get_contents(DATA_ROOT.'info/'.$dir.$var))
									{
										$spl=unserialize($img_info);
										if (isset($spl['exifDate']))
										{
											$images_time[]=$spl['exifDate'];
										}
										else
										{
											$images_time[]=filemtime(GALLERY_ROOT.$dir.$var);
										}
									}
									else
									{
										$images_time[]=filemtime(GALLERY_ROOT.$dir.$var);
									}
								}
								else
								{
									$images_time[]=filemtime(GALLERY_ROOT.$dir.$var);
								}
							}
						}
					}
				}
				elseif (SHOW_FILES)
				{
					if (!in_array(strtolower($var), FILE_EXCLUDE) and !in_array(sfpg_ext($var), FILE_EXT_EXCLUDE) and !@preg_match(FILE_EXCLUDE_REGEX, $var))
					{
						$files[] = $var;
						if (FILE_SORT_BY_TIME)
						{
							$files_time[] = filemtime(GALLERY_ROOT.$dir.$var);
						}
					}
				}
				if ((sfpg_ext($var)==DESC_EXT)or(sfpg_ext($var)==PAYPAL_EXTENSION))
				{
					$misc[] = $var;
				}
			}
			if ($for_dir_info)
			{
				$misc = 0;
			}
			if (SHOW_FILES and !($for_zip and ZIP_FILES and ZIP_FILE_THUMBS)) // removes thumbnail images from being listed as images. Unless needed for zip.
			{
				foreach ($files as $val)
				{
					$fti = array_search($val.FILE_THUMB_EXT, $images);
					if ($fti !== FALSE)
					{
						if ($for_dir_info)
						{
							$misc++;
						}
						else
						{
							array_splice($images, $fti, 1);
							array_splice($images_time, $fti, 1);
						}
					}
				}
			}
			closedir($directory_handle);
			sfpg_array_sort($dirs, $dirs_time, DIR_SORT_BY_TIME, DIR_SORT_REVERSE);
			sfpg_array_sort($images, $images_time, IMAGE_SORT_BY_TIME, IMAGE_SORT_REVERSE);
			sfpg_array_sort($files, $files_time, FILE_SORT_BY_TIME, FILE_SORT_REVERSE);
			return [$dirs, $images, $files, $misc];
		}
		else
		{
			if ($dir=='')
			{
				exit('GALLERY_ROOT is not is not accessible.');
			}
			else
			{
				header('Location: '.$_SERVER['PHP_SELF']);
			}
			exit;
		}
	}


	function get_files_for_zip($dir_to_zip)
	{
		list($dirs, $images, $files, $misc) = sfpg_get_dir($dir_to_zip,FALSE,TRUE);
		$zip_list = $images;
		if (ZIP_FILES)
		{
			$zip_list = array_merge($zip_list, $files);
		}
		if (ZIP_DESCRIPTIONS)
		{
			$zip_list = array_merge($zip_list, $misc);
		}
		for($i=0; $i<count($zip_list); $i++)
		{
			$zip_list[$i] = $dir_to_zip.$zip_list[$i];
		}
		if (ZIP_SUB_GALLERIES)
		{
			foreach($dirs as $dir)
			{
				$zip_list = array_merge($zip_list, get_files_for_zip($dir_to_zip.$dir.'/'));
			}
		}
		return $zip_list;
	}


	function cleanup_zip_days($time, $dir)
	{
		$items = array_diff(scandir($dir),['.','..']);
		if (count($items)==0)
		{
			rmdir($dir);
		}
		else
		{
			foreach($items as $item)
			{
				if (is_dir($dir.'/'.$item))
				{
					cleanup_zip_days($time, $dir.'/'.$item);
				}
				elseif (filemtime($dir.'/'.$item) < $time)
				{
					unlink($dir.'/'.$item);
				}
			}
		}
	}


	function sfpg_browse_dirs()
	{
		echo '<!DOCTYPE html><html lang="'.HTML_LANGUAGE.'"><head><meta charset="'.CHARSET.'"></head><body onload="parent.sendData(document.getElementById(\'dataContainer\').innerHTML)"><div id="dataContainer"><br>'.
		'&nbsp;'.TEXT_MOVE_TO.': <b>'.TEXT_HOME.'/'.GALLERY.'</b><br><br>'.
		'<span class="sfpg_button" onclick="admMovePost(\''.sfpg_url_string(GALLERY,'').'\',\''.TEXT_HOME.'/'.GALLERY.'\')">OK</span>'.
		'<span class="sfpg_button" onclick="admMovePost(false,false)">'.TEXT_CANCEL.'</span><br><br>'.
		'<span class="sfpg_button" onclick="admMove(\''.sfpg_url_string().'\')">'.TEXT_HOME.'</span>';
		$dirs=explode('/',GALLERY);
		$path='';
		$postDiv='';
		foreach($dirs as $dir)
		{
			if ($dir)
			{
				$path.=$dir.'/';
				echo '<div class="in"><span class="sfpg_button" onclick="admMove(\''.sfpg_url_string($path,'').'\')">'.$dir.'</span>';
				$postDiv.='</div>';
			}
		}
		$items=@scandir(GALLERY_ROOT.GALLERY);
		if ($items!==false)
		{
			echo '<div class="in">';
			foreach($items as $var)
			{
				if ((is_dir(GALLERY_ROOT.GALLERY.$var)) and ($var != '.') and ($var != '..'))
				{
					echo '<span class="sfpg_button" onclick="admMove(\''.sfpg_url_string(GALLERY.$var.'/','').'\')">'.$var.'</span><br>';
				}
			}
		}
		echo $postDiv.'</div></div></div></body></html>';
	}


	function sfpg_div_num($input)
	{
		$tmp = explode('/', $input);
		if (count($tmp)==2)  // if input contains one /, like: "1/250"
		{
			if(is_numeric($tmp[0]) and is_numeric($tmp[1]) and ($tmp[1]!=0)) // if both sides are numbers and $tmp[1] is not 0.
			{
				return $tmp[0]/$tmp[1];
			}
		}
		if (is_numeric($input))
		{
			return $input;
		}
		return 0;
	}


	function sfpg_image($image_dir, $image_file, $func, $download=FALSE)
	{
		$image_path_file = DATA_ROOT.$func.'/'.$image_dir.$image_file;
		$image_type = sfpg_image_type($image_file);
		if ($func == 'image')
		{
			if (!file_exists($image_path_file))
			{
				$image_path_file = GALLERY_ROOT.$image_dir.$image_file;
			}
			if ($download)
			{		
				header('Content-Type: application/octet-stream');
				header('Content-Disposition: attachment; filename="'.$image_file.'"');
			}
			else
			{
				header('Content-Type: image/'.$image_type);
				header('Content-Disposition: filename="'.$image_file.'"');
			}
			readfile($image_path_file);
			exit;
		}
		if ($func == 'thumb')
		{
			if (file_exists($image_path_file))
			{
				header('Content-Type: image/'.$image_type);
				header('Content-Disposition: filename="'.$func.'_'.$image_file.'"');
				readfile($image_path_file);
				exit;
			}
			else
			{
				$max_width = THUMB_MAX_WIDTH;
				$max_height = THUMB_MAX_HEIGHT;
				$enlarge = THUMB_ENLARGE;
				$jpeg_quality = THUMB_JPEG_QUALITY;
				$source_img = GALLERY_ROOT.$image_dir.$image_file;
				$image_changed = FALSE;
				if ((MPO_FULL_IMAGE or MPO_STEREO_IMAGE) and (sfpg_ext($image_file)=='.mpo'))
				{
					if (!$image = sfpg_mpo_image($source_img))
					{
						exit;
					}
					$image_changed = TRUE;
				}
				elseif (!$image = imagecreatefromstring(file_get_contents($source_img)))
				{
					exit;
				}
				if (($func == 'thumb') and ($image_dir != ICONS_DIR))
				{
					sfpg_mkdir(DATA_ROOT.'info/'.$image_dir);
					$image_info = [];
					if (function_exists('exif_read_data'))
					{
						if (SHOW_EXIF_INFO)
						{
							$exif_data = @exif_read_data(GALLERY_ROOT.$image_dir.$image_file, 'IFD0');
							if ($exif_data !== FALSE)
							{
								if(isset($exif_data['DateTimeOriginal']))
								{
									$exif_time = explode(':', str_replace(' ', ':', $exif_data['DateTimeOriginal']));
									if(count($exif_time)==6)
									{
										$image_info['exifDate'] = block_html(mktime((int)$exif_time[3], (int)$exif_time[4], (int)$exif_time[5], (int)$exif_time[1], (int)$exif_time[2], (int)$exif_time[0]));
									}
								}
								if (isset($exif_data['Model']))
								{
									$image_info['exifModel'] = block_html($exif_data['Model']);
								}
								if (isset($exif_data['ISOSpeedRatings']))
								{
									$image_info['exifISOSpeedRatings'] = block_html($exif_data['ISOSpeedRatings']);
								}
								if(isset($exif_data['ExposureTime']))
								{
									$exp_time = round(sfpg_div_num($exif_data['ExposureTime']),2);
									if ($exp_time > 0.25)
									{
										$image_info['exifExposureTime'] = block_html($exp_time.'s');
									}
									else
									{
										$image_info['exifExposureTime'] = block_html($exif_data['ExposureTime'].'s');
									}
								}
								if(isset($exif_data['FNumber']))
								{
									$image_info['exifFNumber'] = block_html('f'.number_format(round(sfpg_div_num($exif_data['FNumber']),1),1));
								}
								if(isset($exif_data['FocalLength']))
								{
									$image_info['exifFocalLength'] = block_html(number_format(round(sfpg_div_num($exif_data['FocalLength']),1),1).'mm');
								}
								if(isset($exif_data['Flash']))
								{
									$image_info['exifFlash'] = block_html((($exif_data['Flash'] & 1) ? TEXT_YES : TEXT_NO));
								}
								if (isset($exif_data['GPSLatitude']) and isset($exif_data['GPSLongitude']))
								{
									$lat = $exif_data['GPSLatitude'];
									$lng = $exif_data['GPSLongitude'];
									$image_info['exifGPSLatitude'] = block_html(sfpg_div_num($lat[0])).'&deg;'.block_html(sfpg_div_num($lat[1]).'\''.sfpg_div_num($lat[2]).'"'.@$exif_data['GPSLatitudeRef']);
									$image_info['exifGPSLongitude'] = block_html(sfpg_div_num($lng[0])).'&deg;'.block_html(sfpg_div_num($lng[1]).'\''.sfpg_div_num($lng[2]).'"'.@$exif_data['GPSLongitudeRef']);
									$image_info['exifGPSLatitudeDec'] = block_html(round(((sfpg_div_num($lat[0]) + sfpg_div_num($lat[1])/60 + sfpg_div_num($lat[2])/3600)*(@$exif_data['GPSLatitudeRef']=='N'?1:-1)),12)); // limited to 12 decimals
									$image_info['exifGPSLongitudeDec'] = block_html(round(((sfpg_div_num($lng[0]) + sfpg_div_num($lng[1])/60 + sfpg_div_num($lng[2])/3600)*(@$exif_data['GPSLongitudeRef']=='W'?-1:1)),12));  // limited to 12 decimals
								}
							}
						}
						if (ROTATE_IMAGES and isset($exif_data['Orientation']))
						{
							$orientation = (int)$exif_data['Orientation'];
							if (($orientation>1) and ($orientation<9))
							{
								$image_width = imagesx($image);
								$image_height = imagesy($image);
								switch ($orientation)
								{
									case 2:
									{
										$rotate = @imagecreatetruecolor($image_width, $image_height);
										if (LOW_IMAGE_RESAMPLE_QUALITY)
										{
											imagecopyresized($rotate, $image, 0, 0, $image_width-1, 0, $image_width, $image_height, -$image_width, $image_height);
										}
										else
										{
											imagecopyresampled($rotate, $image, 0, 0, $image_width-1, 0, $image_width, $image_height, -$image_width, $image_height);
										}
										imagedestroy($image);
										$image_changed = TRUE;
										break;
									}
									case 3:
									{
										$rotate = imagerotate($image, 180, 0);
										imagedestroy($image);
										$image_changed = TRUE;
										break;
									}
									case 4:
									{
										$rotate = @imagecreatetruecolor($image_width, $image_height);
										if (LOW_IMAGE_RESAMPLE_QUALITY)
										{
											imagecopyresized($rotate, $image, 0, 0, 0, $image_height-1, $image_width, $image_height, $image_width, -$image_height);
										}
										else
										{
											imagecopyresampled($rotate, $image, 0, 0, 0, $image_height-1, $image_width, $image_height, $image_width, -$image_height);
										}
										imagedestroy($image);
										$image_changed = TRUE;
										break;
									}
									case 5:
									{
										$rotate = imagerotate($image, 270, 0);
										imagedestroy($image);
										$image = $rotate;
										$rotate = @imagecreatetruecolor($image_height, $image_width);
										if (LOW_IMAGE_RESAMPLE_QUALITY)
										{
											imagecopyresized($rotate, $image, 0, 0, 0, $image_width-1, $image_height, $image_width, $image_height, -$image_width);
										}
										else
										{
											imagecopyresampled($rotate, $image, 0, 0, 0, $image_width-1, $image_height, $image_width, $image_height, -$image_width);
										}
										$image_changed = TRUE;
										break;
									}
									case 6:
									{
										$rotate = imagerotate($image, 270, 0);
										imagedestroy($image);
										$image_changed = TRUE;
										break;
									}
									case 7:
									{
										$rotate = imagerotate($image, 90, 0);
										imagedestroy($image);
										$image = $rotate;
										$rotate = @imagecreatetruecolor($image_height, $image_width);
										if (LOW_IMAGE_RESAMPLE_QUALITY)
										{
											imagecopyresized($rotate, $image, 0, 0, 0, $image_width-1, $image_height, $image_width, $image_height, -$image_width);
										}
										else
										{
											imagecopyresampled($rotate, $image, 0, 0, 0, $image_width-1, $image_height, $image_width, $image_height, -$image_width);
										}
										$image_changed = TRUE;
										break;
									}
									case 8:
									{
										$rotate = imagerotate($image, 90, 0);
										imagedestroy($image);
										$image_changed = TRUE;
										break;
									}
								}
								$image = $rotate;
							}
						}
					}
					if(SHOW_IPTC_INFO)
					{
						$only_used_for_iptc = getimagesize(GALLERY_ROOT.$image_dir.$image_file, $info);
						if (isset($info['APP13']))
						{
							$iptcParsed = iptcparse($info['APP13']);
							foreach(IPTC as $iptcID => $iptcText)
							{
								if (isset($iptcParsed[$iptcID]))
								{
									$image_info[$iptcID] = block_html($iptcParsed[$iptcID][0]);
								}
							}
						}
					}
					if (PNG_TEXT_CHUNKS and (sfpg_ext($image_file)=='.png'))
					{
						if ($png_fp = @fopen(GALLERY_ROOT.$image_dir.$image_file, 'rb'))
						{
							if("\x89PNG\x0d\x0a\x1a\x0a" === fread($png_fp, 8)) // first 8 bytes in a PNG must be like this
							{
								$png_text_chunks=[];
								while(!feof($png_fp))
								{
									$chunk_info = @unpack('Nlength/a4type', fread($png_fp, 8));
									if(!$chunk_info or ($chunk_info['type'] == 'IEND'))
									{
										break;
									}
									if($chunk_info['type'] == 'tEXt')
									{
										$chunk_data = fread($png_fp, $chunk_info['length']);
										$chunk_crc = @unpack('Ncrc', fread($png_fp, 4));
										if($chunk_crc and ($chunk_crc['crc'] === crc32($chunk_info['type'].$chunk_data)))
										{
											list($keyword, $value) = explode("\0", $chunk_data);
											if((PNG_TEXT_CHUNKS === TRUE) or ((is_array(PNG_TEXT_CHUNKS)) and (in_array(strtolower($keyword), PNG_TEXT_CHUNKS))))
											{
												$png_text_chunks[]=$keyword;
												$png_text_chunks[]=$value;
											}
										}
									}
									else
									{
										fseek($png_fp, $chunk_info['length']+4, SEEK_CUR); // skipping the chunk + crc
									}
								}
								fclose($png_fp);
								if(count($png_text_chunks)>0)
								{
									$image_info['pngChunks'] = $png_text_chunks;
								}
							}
						}
					}
					if (WATERMARK)
					{
						$wm_file = GALLERY_ROOT.ICONS_DIR.WATERMARK;
						if (file_exists($wm_file))
						{
							if ($watermark = imagecreatefromstring(file_get_contents($wm_file)))
							{
								$image_width = imagesx($image);
								$image_height = imagesy($image);
								$ww = imagesx($watermark);
								$wh = imagesy($watermark);
								if (WATERMARK_FRACTION)
								{
									if ($image_width < $image_height)
									{
										$ww_new = round($image_width * WATERMARK_FRACTION);
									}
									else
									{
										$ww_new = round($image_height * WATERMARK_FRACTION);
									}
									$wh_new = round($wh * ($ww_new / $ww));
								}
								else
								{
									$ww_new = $ww;
									$wh_new = $wh;
								}
								imagecopyresampled ($image, $watermark, $image_width-$ww_new, $image_height-$wh_new, 0, 0, $ww_new, $wh_new, $ww, $wh);
								imagedestroy($watermark);
								$image_changed = TRUE;
							}
						}
					}
					if ($image_changed)
					{
						sfpg_mkdir(DATA_ROOT.'image/'.$image_dir);
						$new_full_img = DATA_ROOT.'image/'.$image_dir.$image_file;
						if ($image_type == 'jpeg')
						{
							imagejpeg($image, $new_full_img, IMAGE_JPEG_QUALITY);
						}
						elseif ($image_type == 'png')
						{
							imagepng($image, $new_full_img);
						}
						elseif ($image_type == 'gif')
						{
							imagegif($image, $new_full_img);
						}
					}
					$image_info['fileMTime'] = filemtime(GALLERY_ROOT.$image_dir.$image_file); // also used for deleting data if time have changed
					$image_info['fileSize'] = sfpg_file_size(filesize(GALLERY_ROOT.$image_dir.$image_file));
					$image_info['imageSizeX'] = block_html(imagesx($image));
					$image_info['imageSizeY'] = block_html(imagesy($image));
					file_put_contents(DATA_ROOT.'info/'.$image_dir.$image_file, serialize($image_info));
				}
				list($new_img_width, $new_img_height) = sfpg_aspect_resize(imagesx($image), imagesy($image), $max_width, $max_height, $enlarge);
				if(THUMB_SQUARE)
				{
					$new_img_width = $max_width;
					$new_img_height = $max_width;
				}
				$new_image = imagecreatetruecolor($new_img_width, $new_img_height);
				if(THUMB_PNG_ALPHA and ($image_type == 'png'))
				{
					imagealphablending($new_image, false);
					imagesavealpha($new_image,true);
				}
				if(LOW_IMAGE_RESAMPLE_QUALITY)
				{
					if(THUMB_SQUARE)
					{
						$min_size = min(imagesx($image), imagesy($image));
						imagecopyresized($new_image, $image, 0, 0, round((imagesx($image)- $min_size)/2), 0, $new_img_width, $new_img_height, $min_size, $min_size);
					}
					else
					{
						imagecopyresized($new_image, $image, 0, 0, 0, 0, $new_img_width, $new_img_height, imagesx($image), imagesy($image));
					}
				}
				else
				{
					if(THUMB_SQUARE)
					{
						$min_size = min(imagesx($image), imagesy($image));
						imagecopyresampled($new_image, $image, 0, 0, round((imagesx($image)- $min_size)/2), 0, $new_img_width, $new_img_height, $min_size, $min_size);
					}
					else
					{
						imagecopyresampled($new_image, $image, 0, 0, 0, 0, $new_img_width, $new_img_height, imagesx($image), imagesy($image));
					}
				}
				imagedestroy($image);
				sfpg_mkdir(DATA_ROOT.$func.'/'.$image_dir);
				header('Content-type: image/'.$image_type);
				header('Content-Disposition: filename="'.$func.'_'.$image_file.'"');
				if ($image_type == 'jpeg')
				{
					imagejpeg($new_image, NULL, $jpeg_quality);
					imagejpeg($new_image, $image_path_file, $jpeg_quality);
				}
				elseif ($image_type == 'png')
				{
					imagepng($new_image);
					imagepng($new_image, $image_path_file);
				}
				elseif ($image_type == 'gif')
				{
					imagegif($new_image);
					imagegif($new_image, $image_path_file);
				}
				imagedestroy($new_image);
			}
		}
	}


	function sfpg_dir_info($dir, $initial=TRUE)
	{
		list($dirs, $images, $files, $misc) = sfpg_get_dir($dir, TRUE);
		if ($initial)
		{
			$info['dirDirs'] = count($dirs);
			$info['dirImages'] = (int)(count($images)-$misc);
			$info['dirFiles'] = count($files);
			$info['dirTime'] = filemtime(GALLERY_ROOT.GALLERY.'.');
		}
		else
		{
			$info = [];
		}
		if ((DIR_THUMB_FILE) and file_exists(GALLERY_ROOT.$dir.DIR_THUMB_FILE))
		{
			$info['dirThumb'] = sfpg_url_string($dir, DIR_THUMB_FILE);
			return $info;
		}
		if (DIR_THUMB_FROM_ICONS_DIR and file_exists(GALLERY_ROOT.ICONS_DIR.DIR_THUMB_FILE))
		{
			$info['dirThumb'] = sfpg_url_string(ICONS_DIR, DIR_THUMB_FILE);
			return $info;
		}
		if (isset($images[0]))
		{
			$info['dirThumb'] = sfpg_url_string($dir, $images[0]);
			return $info;
		}
		foreach ($dirs as $subdir) // searching for dir-thumb in subdirs
		{
			$subresult = sfpg_dir_info($dir.$subdir.'/', FALSE);
			if (isset($subresult['dirThumb']))
			{
				$info['dirThumb'] = $subresult['dirThumb'];
				return $info;
			}
		}
		if ($initial and file_exists(GALLERY_ROOT.ICONS_DIR.DIR_THUMB_FILE))
		{
			$info['dirThumb'] = sfpg_url_string(ICONS_DIR, DIR_THUMB_FILE);
			return $info;
		}
		return $info;
	}


	function sfpg_set_dir_info($dir)
	{
		if (!sfpg_mkdir(DATA_ROOT.'info/'.$dir))
		{
			sfpg_clean_data_root($dir);
		}
		file_put_contents(DATA_ROOT.'info/'.$dir.'_sfpg_dir', serialize(sfpg_dir_info($dir)));
	}


	function sfpg_delete($element)
	{
		if (is_dir($element))
		{
			$items = array_diff(scandir($element),['.','..']);
			foreach ($items as $item)
			{
				sfpg_delete($element.'/'.$item);
			}
			rmdir($element);
		}
		elseif (file_exists($element))
		{
			unlink($element);
		}
	}


	function sfpg_delete_from_data_root($element)
	{
		sfpg_delete(DATA_ROOT.'info/'.$element);
		sfpg_delete(DATA_ROOT.'thumb/'.$element);
		sfpg_delete(DATA_ROOT.'image/'.$element);
		sfpg_delete(DATA_ROOT.'zip/'.$element);
	}


	function sfpg_clean_data_root($dir)
	{
		$items = array_diff(scandir(DATA_ROOT.'info/'.$dir),['.','..','_sfpg_dir']);
		foreach($items as $item)
		{
			if (!is_dir(GALLERY_ROOT.$dir.$item) and !file_exists(GALLERY_ROOT.$dir.$item))
			{
				sfpg_delete_from_data_root($dir.$item);
			}
		}
		$path='';
		$dirs=explode('/',$dir);
		foreach($dirs as $dirout)
		{
			if(file_exists(DATA_ROOT.'info/'.$path.'_sfpg_dir'))
			{
				unlink(DATA_ROOT.'info/'.$path.'_sfpg_dir');
			}
			$path.=$dirout.'/';
		}
	}


	function echo_js_array($name, $id, $array, $nl_to_br=true)
	{
		if(is_array($array))
		{
			$sep='';
			echo $name.'['.$id.'] = {';
			foreach($array as $key=>$val)
			{
				if(is_array($val))
				{
					$arrSep='';
					echo $sep.'"'.$key.'":[';
					foreach($val as $v)
					{
						echo $arrSep.'"'.sts($v, $nl_to_br).'"';
						$arrSep=', ';
					}
					echo ']';
				}
				else
				{
					echo $sep.'"'.$key.'":"'.sts($val, $nl_to_br).'"';
				}
				$sep=', ';
			}
			echo "};\n";
		}
	}


	function sfpg_random($nr)
	{
		$a='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$res='';
		for($i = 0; $i<$nr; $i++)
		{
			$res.=$a[mt_rand(0,strlen($a)-1)];
		}
		return $res;
	}


	function sfpg_javascript()
	{
		global $dirs, $images, $files, $misc;
		echo "<script>
		<!--

		var phpSelf = '".$_SERVER['PHP_SELF']."';

		var navInfo = [];
		var dirInfo = [];
		var imgInfo = [];
		var fileInfo = [];

		var slideshowActive = false;
		var slideshowSec = 0;

		var waitSpin = ['&bull;-----', '-&bull;----', '--&bull;---', '---&bull;--', '----&bull;-', '-----&bull;'];
		var waitSpinNr = 0;
		var waitSpinSpeed = 100;

		var showInfo = ".(TEXT_INFO?((isset($_GET["info"]) ? (($_GET["info"]=='1') ? "true" : "false") : (SHOW_INFO_BY_DEFAULT ? "true" : "false"))):"false").";

		var actualSize = false;
		var imageIsScaled = false;
		var naviOk = true;
		var index = false;
		var preloadImg = new Image();
		var preloaded = -1;

		var imgFullWidth;
		var imgFullHeight;
		
		var selectedDirs = [];
		var selectedImages = [];
		var selectedFiles = [];
		var selecting = false;
		var itd = isTouchDevice();

		";
		if (KEYBOARD_NAVIGATION)
		{
			echo"
			function keyNavigate(key)
			{
				if (!selecting)
				{
					var k = (window.event) ? event.keyCode : key.keyCode;
					if (k==73) /// i
					{
						toggleInfo(showInfo);
					}
					else if (index)
					{
						if (k==33 || k==38 || k==37) /// Page up, Arrow up, Arrow left
						{
							cycleImg(-1);
							return false;
						}
						else if (k==32 || k==34 || k==39 || k==40) /// Space, Page down, Arrow right, Arrow down
						{
							cycleImg(1);
							return false;
						}
						else if (k==27) /// Esc
						{
							closeImageView();
							return false;
						}
					}
					else
					{
						if (k==27 && navInfo.length>2) /// Esc
						{
							document.location=phpSelf+'?sfpg='+navInfo[navInfo.length-3]['navLink']+(showInfo?'&info=1':'&info=0');
							return false;
						}
					}
				}
			}
			document.onkeyup = keyNavigate;	";
		}
		echo"

		function gebi(id)
		{
			return document.getElementById(id);
		}


		function isDef(v)
		{
			return (typeof v != 'undefined')
		}


		function isTouchDevice()
		{
			var userAgent = window.navigator.userAgent;
			if ((userAgent.match(/iPad/i) || userAgent.match(/iPhone/i)))
			{
				return true;
			}
			return false;
		}


		function updateSize()
		{
			if (index)
			{
				if ((imgFullWidth==gebi('full').width) && (imgFullHeight==gebi('full').height))
				{
					if (gebi('img_resize'))
					{
						gebi('img_resize').innerHTML = '".sts(TEXT_NOT_SCALED)."';
					}
					imageIsScaled = false;
				}
				else
				{
					if (gebi('img_resize'))
					{
						gebi('img_resize').innerHTML = gebi('full').width + ' x ' + gebi('full').height;
					}
					imageIsScaled = true;
				}
			}
			var imgBoxThirdWidth=Math.floor(gebi('box_image').clientWidth/3);
			var imgBoxHeight=gebi('box_image').clientHeight;
			gebi('box_left').style.width = imgBoxThirdWidth+'px';
			gebi('box_left').style.height = imgBoxHeight+'px';
			gebi('box_left').style.right = (imgBoxThirdWidth*2)+'px';
			gebi('box_right').style.width = imgBoxThirdWidth+'px';
			gebi('box_right').style.height = imgBoxHeight+'px';
			gebi('box_right').style.right = '20px'; // 20px is to allow access to scrollbar
		}


		function fullSize()
		{
			actualSize = !actualSize;
			if(actualSize)
			{
				gebi('full').className = 'full_image_no_resize';
			}
			else
			{
				gebi('full').className = 'full_image';
			}
			updateSize();
			showMenu();
		}


		function showMenu()
		{
			if ((imgInfo.length>0)&&naviOk)
			{
				menu = '<span id=\"button_left\" class=\"sfpg_button\" onclick=\"cycleImg(-1)\">".sts(TEXT_PREVIOUS)."</span>';
				if (index)
				{
					menu += '<span id=\"button_close\" class=\"sfpg_button\" onclick=\"closeImageView()\">".sts(TEXT_CLOSE_IMG_VIEW)."</span>';
				}
				else
				{
					menu += '<span class=\"sfpg_button_disabled\">".sts(TEXT_CLOSE_IMG_VIEW)."</span>';
				}
				menu += '<span id=\"button_right\" class=\"sfpg_button\" onclick=\"cycleImg(1)\">".sts(TEXT_NEXT)."</span>';
				";
				if (TEXT_SLIDESHOW)
				{
					echo"
					if (slideshowActive)
					{
						menu += '<span class=\"sfpg_button_on\" onclick=\"slideshowActive=false; showMenu();\">".sts(TEXT_SLIDESHOW)."</span>';
					}
					else
					{
						menu += '<span class=\"sfpg_button\" onclick=\"slideshowActive=true; showMenu(); slideshow(true);\">".sts(TEXT_SLIDESHOW)."</span>';
					}";
				}
				echo "
			}
			else
			{
				menu = '<span class=\"sfpg_button_disabled\">".sts(TEXT_PREVIOUS)."</span>';
				menu += '<span class=\"sfpg_button_disabled\">".sts(TEXT_CLOSE_IMG_VIEW)."</span>';
				menu += '<span class=\"sfpg_button_disabled\">".sts(TEXT_NEXT)."</span>';
				".(TEXT_SLIDESHOW ? "menu += '<span class=\"sfpg_button_disabled\">".sts(TEXT_SLIDESHOW)."</span>';" : "")."
			}";
			if (TEXT_INFO)
			{
				echo "
				if (showInfo)
				{
					menu += '<span onclick=\"toggleInfo(showInfo);\" class=\"sfpg_button_on\">".sts(TEXT_INFO)."</span>';
				}
				else
				{
					menu += '<span onclick=\"toggleInfo(showInfo);\" class=\"sfpg_button\">".sts(TEXT_INFO)."</span>';
				}";
			}
			echo "
			if (index)
			{
				if (actualSize)
				{
					menu += '<span class=\"sfpg_button_on\" onclick=\"fullSize()\">".sts(TEXT_ACTUAL_SIZE)."</span>';
				}
				else
				{
					menu += '<span class=\"sfpg_button\" onclick=\"fullSize()\">".sts(TEXT_ACTUAL_SIZE)."</span>';
				}
			}
			else
			{
				menu += '<span class=\"sfpg_button_disabled\">".sts(TEXT_ACTUAL_SIZE)."</span>';
			}


			";
			if (LINK_BACK)
			{
				echo "menu += '<span class=\"sfpg_button\" onclick=\"window.location=\'".LINK_BACK."\'\">".sts(TEXT_LINK_BACK)."</span>';
				";
			}
			if (PASSWORD!=='')
			{
				echo "menu += '<span class=\"sfpg_button\" onclick=\"window.location=\'".$_SERVER['PHP_SELF']."?cmd=logout\'\">".sts(TEXT_LOGOUT)."</span>';";
			}
			if (ADMIN===TRUE)
			{
				echo"
					if (selecting)
					{
						menu = '<span class=\"sfpg_button\" onclick=\"admDelete()\">".sts(TEXT_DELETE)."</span>';
						menu += '<span class=\"sfpg_button\" onclick=\"admRename()\">".sts(TEXT_RENAME)."</span>';
						menu += '<span class=\"sfpg_button\" onclick=\"admMove()\">".sts(TEXT_MOVE)."</span>';
						menu += '<span class=\"sfpg_button\" onclick=\"admMakeDir()\">".sts(TEXT_MKDIR)."</span>';
						menu += '<span class=\"sfpg_button\" onclick=\"admSetThumb()\">".sts(TEXT_SET_DIR_THUMB)."</span>';
						menu += '<span class=\"sfpg_button\" onclick=\"admUpload(true)\">".sts(TEXT_UPLOAD)."</span>';
						menu += '<span class=\"sfpg_button\" onclick=\"admDesc()\">".sts(TEXT_DESCRIPTION)."</span>';
						menu += '<span class=\"sfpg_button\" onclick=\"admSell()\">".sts(TEXT_PAYPAL_FOR_SALE)."</span>';
						menu += '<span class=\"sfpg_button\" onclick=\"invertSelection()\">".sts(TEXT_INVERT_SELECTION)."</span>';
						menu += '<span class=\"sfpg_button_on\" onclick=\"toggleSelect()\">".sts(TEXT_ADMIN)."</span>';
					}
					else
					{
						menu += '<span class=\"sfpg_button\" onclick=\"toggleSelect()\">".sts(TEXT_ADMIN)."</span>';
					}
				";
			}
			echo"
			gebi('div_menu').innerHTML = menu;
		}


		function openImageView(imgId)
		{
			if (!index)
			{
				gebi('box_overlay').style.visibility='visible';
			}
			index = imgId;
			fillInfo('img', index);
			gebi('box_wait').style.visibility='visible';
			gebi('box_image').style.visibility='visible';
			gebi('box_left').style.visibility='visible';
			gebi('box_right').style.visibility='visible';
			preloadImage(index);
			showMenu();
			showImage(0);
		}


		function preloadImage(imgId)
		{
			if (preloaded != imgId)
			{
				preloadImg = new Image();
				preloadImg.src = '';
				preloadImg.src = phpSelf+'?cmd=image&sfpg='+imgInfo[imgId]['imageLink'];
				preloaded = imgId;
			}
		}

		";
		$date_format = str_replace('Year', "'+year+'", DATE_FORMAT);
		$date_format = str_replace('Nrmonth', "'+nrmon+'", $date_format);
		$date_format = str_replace('Month', "'+month+'", $date_format);
		$date_format = str_replace('Date', "'+date+'", $date_format);
		$date_format = str_replace('Hour', "'+hour+'", $date_format);
		$date_format = str_replace('Min', "'+min+'", $date_format);
		$date_format = str_replace('Sec', "'+sec+'", $date_format);
		$date_format = str_replace('Day', "'+day+'", $date_format);
		echo"
		function dateFormat(timestamp)
		{
			var dt = new Date(timestamp*1000);
			var days = ".TEXT_DAYS.";
			var months = ".TEXT_MONTHS.";
			var year = dt.getFullYear();
			var nrmon = dt.getMonth()+1;
			var month = months[dt.getMonth()];
			var date = dt.getDate();
			var hour = (dt.getHours()<10?'0'+dt.getHours():dt.getHours());
			var min = (dt.getMinutes()<10?'0'+dt.getMinutes():dt.getMinutes());
			var sec = (dt.getSeconds()<10?'0'+dt.getSeconds():dt.getSeconds());
			var day = days[dt.getDay()];
			return '".$date_format."';
		}

		function generateZip()
		{
			gebi('zipform').submit();
			gebi('zipspan').innerHTML = '".TEXT_ZIP_WAIT."';
		}

		function fillInfo(type, id)
		{
			if (!index || (type == 'img'))
			{
				var info='<div class=\"thumbimgbox\">';
				if (type == 'dir')
				{
					if (isDef(dirInfo[id]['dirThumb']))
					{
						info += '<img class=\"thumb\" alt=\"\" src=\"'+phpSelf+'?cmd=thumb&sfpg='+dirInfo[id]['dirThumb']+'\">';
					}
					else
					{
						info += '<br><br>".sts(TEXT_NO_IMAGES)."';
					}
					info += '</div>';
					info += '<strong>".sts(TEXT_DIR_NAME)."</strong><br><div class=\"sfpg_info_text\">'+dirInfo[id]['dirName'] + '</div><br>';";
					if (DIR_DESC_IN_INFO)
					{
						echo "
						if (isDef(dirInfo[id]['dirDesc']))
						{
							info += '<strong>".sts(TEXT_DESCRIPTION)."</strong><br><div class=\"sfpg_info_text\">'+dirInfo[id]['dirDesc']+'<br></div><br>';
						}";
					}
					if (TEXT_INFO_LABEL)
					{
						echo "
						info += '<strong>".sts(TEXT_INFO_LABEL)."</strong><br><div class=\"sfpg_info_text\">';
						info += '".sts(TEXT_DATE).": '+dateFormat(dirInfo[id]['dirTime'])+'<br>';
						info += '".sts(TEXT_DIRS).": '+dirInfo[id]['dirDirs']+'<br>';
						info += '".sts(TEXT_IMAGES).": '+dirInfo[id]['dirImages']+'<br>';";
						if (SHOW_FILES)
						{
							echo "
							info += '".sts(TEXT_FILES).": '+dirInfo[id]['dirFiles']+'<br>';";
						}
						echo "
						info += '</div><br>';
						";
					}
					echo "
					info += '<strong>".sts(TEXT_LINKS)."</strong><br><a href=\"'+phpSelf+'?sfpg='+dirInfo[id]['dirLink']+'\">".sts(TEXT_DIRECT_LINK_GALLERY)."</a><br>';";
					if (ZIP_ENABLE)
					{
						echo "
							info += '<br>".sts(TEXT_ZIP_DL)."<br><br>';
							info += '<span id=\"zipspan\"><form method=\"post\" id=\"zipform\"><input type=\"password\" id=\"password\" name=\"password\"><input type=\"hidden\" name=\"zipdl\" value=\"x\"></form><span class=\"sfpg_button\" onclick=\"generateZip()\">".sts(TEXT_ZIP_BUTTON)."</span></span><br><br>';"; // the password input is to make sure that web crawlers do not post the form
					}
					echo "
				}
				else if (type == 'img')
				{
					info += '<img class=\"thumb\" alt=\"\" src=\"'+phpSelf+'?cmd=thumb&sfpg='+imgInfo[id]['imageLink']+'\">';
					info += '</div>';
					info += '<strong>".sts(TEXT_IMAGE_NAME)."</strong><br><div class=\"sfpg_info_text\">'+imgInfo[id]['imageName'] + '</div><br>';
					";
					if(PAYPAL_ENABLED)
					{
						echo"
						if (isDef(imgInfo[id]['sellStatus']))
						{
							info += '<strong>".sts(TEXT_PAYPAL_FOR_SALE)."</strong><br><div class=\"sfpg_info_text\">';
							info += '".sts(TEXT_PAYPAL_PRICE)." (".sts(PAYPAL_CURRENCY)."): '+((isDef(imgInfo[id]['sellPrice']))?imgInfo[id]['sellPrice']:'')+'<br>';
							info += '".sts(TEXT_PAYPAL_STATUS).": '+(((isDef(imgInfo[id]['sellStatus']))&&(imgInfo[id]['sellStatus']==1))?'".sts(TEXT_PAYPAL_AVAILABLE)."':'".sts(TEXT_PAYPAL_SOLD)."')+'<br>';
							if (isDef(imgInfo[id]['sellID']))
							{
								info += '".sts(TEXT_PAYPAL_ITEM_ID).": '+imgInfo[id]['sellID']+'<br>';
							}
							if ((isDef(imgInfo[id]['sellStatus']))&&(imgInfo[id]['sellStatus']==1))
							{
								info += '<br><span onclick=\"window.location=\''+phpSelf+'?cmd=buy&sfpg='+imgInfo[id]['imageLink']+'\'\" class=\"sfpg_button\">".sts(TEXT_PAYPAL_BUY)."</span><br><br>';
							}
							else
							{
								info += '<br><span class=\"sfpg_button_disabled\">".sts(TEXT_PAYPAL_BUY)."</span><br><br>';
							}
							info += '</div><br>';
						}";
					}
					echo"
					if (!isDef(imgInfo[id]['firstView']))
					{
						if (isDef(imgInfo[id]['fileDescription']))
						{
							info += '<strong>".sts(TEXT_DESCRIPTION)."</strong><br><div class=\"sfpg_info_text\">'+imgInfo[id]['fileDescription']+'<br></div><br>';
						}";
						if (TEXT_INFO_LABEL)
						{
							echo "
							info += '<strong>".sts(TEXT_INFO_LABEL)."</strong><br><div class=\"sfpg_info_text\">';
							info += '".sts(TEXT_DATE).": '+dateFormat(imgInfo[id]['fileMTime'])+'<br>';
							info += '".sts(TEXT_IMAGESIZE).": '+imgInfo[id]['imageSizeX']+' x '+imgInfo[id]['imageSizeY']+'<br>';
							info += '".sts(TEXT_SCALED_TO).": <span id=\"img_resize\"></span><br>';
							info += '".sts(TEXT_FILESIZE).": '+imgInfo[id]['fileSize']+'<br>';
							info += '".sts(TEXT_IMAGE_NUMBER).": '+id+' / '+(imgInfo.length-1)+'<br>';
							info += '</div><br>';";
						}
						if (SHOW_EXIF_INFO)
						{
							echo"
							var exifInfo = (isDef(imgInfo[id]['exifDate'])?'".sts(TEXT_EXIF_DATE).": '+dateFormat(imgInfo[id]['exifDate'])+'<br>':'');
							exifInfo += (isDef(imgInfo[id]['exifModel'])?'".sts(TEXT_EXIF_CAMERA).": '+imgInfo[id]['exifModel']+'<br>':'');
							exifInfo += (isDef(imgInfo[id]['exifISOSpeedRatings'])?'".sts(TEXT_EXIF_ISO).": '+imgInfo[id]['exifISOSpeedRatings']+'<br>':'');
							exifInfo += (isDef(imgInfo[id]['exifExposureTime'])?'".sts(TEXT_EXIF_SHUTTER).": '+imgInfo[id]['exifExposureTime']+'<br>':'');
							exifInfo += (isDef(imgInfo[id]['exifFNumber'])?'".sts(TEXT_EXIF_APERTURE).": '+imgInfo[id]['exifFNumber']+'<br>':'');
							exifInfo += (isDef(imgInfo[id]['exifFocalLength'])?'".sts(TEXT_EXIF_FOCAL).": '+imgInfo[id]['exifFocalLength']+'<br>':'');
							exifInfo += (isDef(imgInfo[id]['exifFlash'])?'".sts(TEXT_EXIF_FLASH).": '+imgInfo[id]['exifFlash']+'<br>':'');
							exifInfo += (isDef(imgInfo[id]['exifGPSLatitude'])?'".sts(TEXT_EXIF_LATITUDE).": '+imgInfo[id]['exifGPSLatitude']+'<br>':'');
							exifInfo += (isDef(imgInfo[id]['exifGPSLongitude'])?'".sts(TEXT_EXIF_LONGITUDE).": '+imgInfo[id]['exifGPSLongitude']+'<br>':'');
							";
							if (TEXT_EXIF_MAP and EXIF_MAP_LINK)
							{
								echo "
								if (isDef(imgInfo[id]['exifGPSLatitudeDec']) && isDef(imgInfo[id]['exifGPSLongitudeDec']))
								{
									tmpStr = '<a target=\"_blank\" href=\"".sts(EXIF_MAP_LINK)."\">".sts(TEXT_EXIF_MAP)."</a>';
									tmpStr = tmpStr.replace('[lat]', imgInfo[id]['exifGPSLatitudeDec']);
									tmpStr = tmpStr.replace('[long]', imgInfo[id]['exifGPSLongitudeDec']);
									exifInfo += tmpStr;
								}
								";
							}
							echo "
							if (exifInfo != '')
							{
								info += '<strong>".sts(TEXT_EXIF)."</strong><br><div class=\"sfpg_info_text\">'+exifInfo+'</div><br>';
							}";
						}
						if (TEXT_EXIF_MAP_EMBED and EXIF_MAP_EMBED_LINK)
						{
							echo"
							if (isDef(imgInfo[id]['exifGPSLatitudeDec']) && isDef(imgInfo[id]['exifGPSLongitudeDec']))
							{
								tmpStr = '<iframe class=\"map_iframe\" src=\"".sts(EXIF_MAP_EMBED_LINK)."\"></iframe>';
								tmpStr = tmpStr.replace('[lat]', imgInfo[id]['exifGPSLatitudeDec']);
								tmpStr = tmpStr.replace('[long]', imgInfo[id]['exifGPSLongitudeDec']);
								info += '<strong>".sts(TEXT_EXIF_MAP_EMBED)."</strong><br>'+tmpStr+'<br><br>';
							}
							";
						}
						if (SHOW_IPTC_INFO)
						{
							echo "var iptcInfo = '';
							";
							foreach(IPTC as $iptcID => $iptcText)
							{
								echo"iptcInfo += (isDef(imgInfo[id]['".$iptcID."'])?'".sts($iptcText).": '+imgInfo[id]['".$iptcID."']+'<br>':'');
								";
							}
							echo"
							if (iptcInfo != '')
							{
								info += '<strong>".sts(TEXT_IPTC)."</strong><br><div class=\"sfpg_info_text\">'+iptcInfo+'</div><br>';
							}";
						}
						if (PNG_TEXT_CHUNKS)
						{
							echo"
							if (isDef(imgInfo[id]['pngChunks']))
							{
								info += '<strong>".sts(TEXT_PNG_CHUNKS)."</strong><br><div class=\"sfpg_info_text\">';
								var brsep='';
								for (i=0; i<imgInfo[id]['pngChunks'].length; i=i+2)
								{
									info += brsep+'<b>'+imgInfo[id]['pngChunks'][i]+'</b><br>'+imgInfo[id]['pngChunks'][i+1];
									brsep='<br><br>';
								}
								info += '</div><br>';
							}
							";
						}
						echo"
					}
					else
					{
						info += '<br><strong>".sts(TEXT_FIRST_VIEW)."</strong><br><br><span id=\"img_size\"></span><br><br>';
					}
					info += '<strong>".sts(TEXT_LINKS)."</strong><br>';
					info += '<a href=\"'+phpSelf+'?sfpg='+imgInfo[id]['imageLink']+'\">".sts(TEXT_DIRECT_LINK_IMAGE)."</a><br>';
					".(TEXT_DOWNLOAD ? "info += '<a href=\"'+phpSelf+'?cmd=dl&sfpg='+imgInfo[id]['imageLink']+'\">".sts(TEXT_DOWNLOAD)."</a><br><br>';" : "")."
				}
				else if (type == 'file')
				{
					if (isDef(fileInfo[id]['fileThumb']))
					{
						info += '<img class=\"thumb\" alt=\"\" src=\"'+phpSelf+'?cmd=thumb&sfpg='+fileInfo[id]['fileThumb']+'\">';
					}
					else
					{
						info += '<br><br>".sts(TEXT_NO_THUMB_FOR_FILE)."<br>';
					}
					info += '</div>';
					info += '<strong>".sts(TEXT_FILE_NAME)."</strong><br><div class=\"sfpg_info_text\">'+fileInfo[id]['fileName']+'</div><br>';
					if (isDef(fileInfo[id]['description']))
					{
						info += '<strong>".sts(TEXT_DESCRIPTION)."</strong><br><div class=\"sfpg_info_text\">'+fileInfo[id]['description']+'<br></div><br>';
					}";
					if (TEXT_INFO_LABEL)
					{
						echo "
						info += '<strong>".sts(TEXT_INFO_LABEL)."</strong><br><div class=\"sfpg_info_text\">';
						info += '".sts(TEXT_DATE).": '+dateFormat(fileInfo[id]['fileTime'])+'<br>';
						info += '".sts(TEXT_FILESIZE).": '+fileInfo[id]['fileSize']+'<br>';
						info += '</div><br>';";
					}
					echo "
				}
				info += '<br><br><small><a href=\"https://sye.dk/sfpg/\" target=\"_blank\" alt=\"\">Single File PHP Gallery</a></small>';
				gebi('box_inner_info').innerHTML = info;
			}
		}


		function toggleInfo(status)
		{
			if (status)
			{
				gebi('box_info').style.visibility='hidden';
				gebi('box_image').style.left='0px';
				gebi('box_gallery').style.left='0px';
				gebi('box_wait').style.left='0px';
			}
			else
			{
				gebi('box_info').style.visibility='visible';
				gebi('box_image').style.left='".INFO_BOX_WIDTH."px';
				gebi('box_gallery').style.left='".INFO_BOX_WIDTH."px';
				gebi('box_wait').style.left='".INFO_BOX_WIDTH."px';
			}
			showInfo = !status;
			showMenu();
			updateSize();
		}


		function openGallery(id, type)
		{
			window.location=phpSelf+'?sfpg='+((type=='nav')?navInfo[id]['navLink']:dirInfo[id]['dirLink'])+(showInfo?'&info=1':'&info=0');
		}


		function openFile(id)
		{
			".(FILE_IN_NEW_WINDOW ? "window.open(phpSelf+'?cmd=file&sfpg='+fileInfo[id]['fileLink']);" : "window.location=phpSelf+'?cmd=file&sfpg='+fileInfo[id]['fileLink'];")."
		}


		function nextImage(direction)
		{
			var nextIndex;
			if (!index)
			{
				if (direction > 0)
				{
					return 1;
				}
				else
				{
					return (imgInfo.length - 1);
				}
			}
			var nextImg = index + direction;
			if (nextImg > imgInfo.length - 1)
			{
				nextImg = 1;
			}
			if (nextImg < 1)
			{
				nextImg = imgInfo.length - 1;
			}
			return nextImg;
		}


		function cycleImg(direction)
		{
			if ((imgInfo.length>0)&&naviOk)
			{
				openImageView(nextImage(direction));
			}
		}


		function showImage(stage)
		{
			if(stage==0)
			{
				gebi('full').style.opacity='0';
				naviOk=false;
				showMenu();
				stage=1;
			}
			if(stage==1)
			{
				if (preloadImg.complete)
				{
					gebi('full').src = preloadImg.src;
					stage=2;
				}
			}
			if(stage==2)
			{
				if(gebi('full').complete)
				{
					naviOk=true;
					imgFullWidth = preloadImg.width;
					imgFullHeight = preloadImg.height;
					fillInfo('img', index);
					showMenu();
					updateSize();
					preloadImage(nextImage(1));
					gebi('full').style.opacity='1';
					gebi('box_wait').style.visibility='hidden';
					stage=3;
				}
			}
			if (waitSpinNr >= waitSpin.length)
			{
				waitSpinNr = 0;
			}
			gebi('wait').innerHTML = '<div class=\"loading\">".sts(TEXT_IMAGE_LOADING)."' + waitSpin[waitSpinNr] + '</div>';
			waitSpinNr++;
			if ((stage<3) && index)
			{
				setTimeout ('showImage('+stage+')',waitSpinSpeed);
			}
		}


		function closeImageView()
		{
			gebi('box_wait').style.visibility='hidden';
			gebi('box_image').style.visibility='hidden';
			gebi('full').style.opacity='0';
			gebi('box_left').style.visibility='hidden';
			gebi('box_right').style.visibility='hidden';
			slideshowActive = false;
			index = false;
			naviOk=true;
			actualSize=false;
			gebi('full').className = 'full_image';
			showMenu();
			gebi('box_overlay').style.visibility='hidden';
			gebi('full').src = '';
			fillInfo('dir', 0);
		}


		function thumbDisplayName(name)
		{
			dispName = name.substring(0,".THUMB_CHARS_MAX.");
			if (name.length > ".THUMB_CHARS_MAX.")
			{
				dispName += '...';
			}
			return dispName;
		}

		";
		if (ADMIN===TRUE)
		{
			echo"


		function toggleSelect()
		{
			if (selecting)
			{
				selecting = false;
				showMenu();
				selectedDirs = [];
				selectedImages = [];
				selectedFiles = [];
				for (i = 1; i < dirInfo.length; i++)
				{
					mouseOut(gebi('dir'+i), 'dir', i);
				}
				for (i = 1; i < imgInfo.length; i++)
				{
					mouseOut(gebi('img'+i), 'img', i);
				}
				for (i = 1; i < fileInfo.length; i++)
				{
					mouseOut(gebi('file'+i), 'file', i);
				}
			}
			else
			{
				selecting = true;
				showMenu();
			}
		}


		function invertSelection()
		{
			for (i = 1; i < dirInfo.length; i++)
			{
				selectElement(gebi('dir'+i), selectedDirs, i);
				gebi('dir'+i).className=(isSelected('dir', i)?'innerbox_marked':'innerboxdir');
			}
			for (i = 1; i < imgInfo.length; i++)
			{
				selectElement(gebi('img'+i), selectedImages, i);
				gebi('img'+i).className=(isSelected('img', i)?'innerbox_marked':'innerboximg');
				
			}
			for (i = 1; i < fileInfo.length; i++)
			{
				selectElement(gebi('file'+i), selectedFiles, i);
				gebi('file'+i).className=(isSelected('file', i)?'innerbox_marked':'innerboxfile');
			}
		}


		function admDelete()
		{
			var sel=selectedDirs.length + selectedImages.length + selectedFiles.length;
			if (sel==0)
			{
				alert('".sts(TEXT_NOTHING)."');
			}
			else
			{
				if (confirm('".sts(TEXT_DELETE)." '+(selectedDirs.length?'\\n'+selectedDirs.length+' ".sts(TEXT_DIRS)."':'')+(selectedImages.length?'\\n'+selectedImages.length+' ".sts(TEXT_IMAGES)."':'')+(selectedFiles.length?'\\n'+selectedFiles.length+' ".sts(TEXT_FILES)."':'')+'?') == true)
				{
					var form = makeForm();
					form.appendChild(makeInput('func','delete'));
					formAddSelected(form);
					submitForm(form);
				}
			}
		}


		function formAddSelected(form)
		{
			for (i=0; i<selectedDirs.length; i++)
			{
				form.appendChild(makeInput('elems[]',dirInfo[selectedDirs[i]]['dirLink']));
			}
			for (i=0; i<selectedImages.length; i++)
			{
				form.appendChild(makeInput('elems[]',imgInfo[selectedImages[i]]['imageLink']));
			}
			for (i=0; i<selectedFiles.length; i++)
			{
				form.appendChild(makeInput('elems[]',fileInfo[selectedFiles[i]]['fileLink']));
			}
		}


		function admRename()
		{
			var sel=selectedDirs.length + selectedImages.length + selectedFiles.length;
			if (sel>1)
			{
				alert('".sts(TEXT_ONLY_ONE)."');
			}
			else if (sel<1)
			{
				alert('".sts(TEXT_NOTHING)."');
			}
			else
			{
				if (selectedDirs.length>0)
				{
					oldName = dirInfo[selectedDirs[0]]['dirName'];
					oldEle = dirInfo[selectedDirs[0]]['dirLink'];
				}
				if (selectedImages.length>0)
				{
					oldName = imgInfo[selectedImages[0]]['imageName'];
					oldEle = imgInfo[selectedImages[0]]['imageLink'];
				}
				if (selectedFiles.length>0)
				{
					oldName = fileInfo[selectedFiles[0]]['fileName'];
					oldEle = fileInfo[selectedFiles[0]]['fileLink'];
				}
				var newName = prompt('".sts(TEXT_RENAME)."', oldName);
				if (newName != null)
				{
					var form = makeForm();
					form.appendChild(makeInput('func','rename'));
					form.appendChild(makeInput('eleToRen',oldEle));
					form.appendChild(makeInput('newName',newName));
					submitForm(form);
				}
			}
		}


		function admMove(dir)
		{
			var sel=selectedDirs.length + selectedImages.length + selectedFiles.length;
			if (sel<1)
			{
				alert('".sts(TEXT_NOTHING)."');
			}
			else
			{
				var ifrm = document.createElement('iframe');
				ifrm.setAttribute('src', phpSelf+'?cmd=dirs&sfpg='+dir);
				var ele=gebi('box_data');
				ele.innerHTML='';
				ele.appendChild(ifrm);
			}
		}


		function admMovePost(toFolder,toName)
		{
			var ele=gebi('box_admin');
			ele.style.visibility='hidden';
			ele.innerHTML='';
			if ((toFolder!==false) && (toName!==false))
			{
				if (confirm('".sts(TEXT_MOVE)." '+(selectedDirs.length?'\\n'+selectedDirs.length+' ".sts(TEXT_DIRS)."':'')+(selectedImages.length?'\\n'+selectedImages.length+' ".sts(TEXT_IMAGES)."':'')+(selectedFiles.length?'\\n'+selectedFiles.length+' ".sts(TEXT_FILES)."':'')+'\\n-> '+toName+'?') == true)
				{
					var form = makeForm();
					form.appendChild(makeInput('func','move'));
					form.appendChild(makeInput('toFolder',toFolder));
					formAddSelected(form);
					submitForm(form);
				}
			}
		}


		function admSetThumb()
		{
			var sendForm=false;
			var sel=selectedDirs.length + selectedImages.length + selectedFiles.length;
			if (sel<1)
			{
				if (confirm('".sts(TEXT_REMOVE_THUMB)."') == true)
				{
					sendForm=true;
				}
			}
			else if ((sel>1)||(selectedImages.length!=1))
			{
				alert('".sts(TEXT_ONE_IMAGE)."');
			}
			else
			{
				if (confirm('".sts(TEXT_SETTING_THUMB)."' + imgInfo[selectedImages[0]]['imageName']) == true)
				{
					sendForm=true;
				}
			}
			if (sendForm)
			{
				var form = makeForm();
				form.appendChild(makeInput('func','setthumb'));
				form.appendChild(makeInput('path',dirInfo[0]['dirLink']));
				formAddSelected(form);
				submitForm(form);
			}
		}


		function admSell()
		{
			var sel=selectedDirs.length + selectedImages.length + selectedFiles.length;
			if (sel<1)
			{
				alert('".sts(TEXT_NOTHING)."');
			}
			else if ((sel>1)||(selectedImages.length!=1))
			{
				alert('".sts(TEXT_ONE_IMAGE)."');
			}
			else
			{
				eName = imgInfo[selectedImages[0]]['imageName'];
				eLink = imgInfo[selectedImages[0]]['imageLink'];
				var ePrice = 0;
				var eStatus = 0;
				var eIdent = '';
				if (isDef(imgInfo[selectedImages[0]]['sellPrice']))
				{
					var ePrice = imgInfo[selectedImages[0]]['sellPrice'];
				}
				if (isDef(imgInfo[selectedImages[0]]['sellStatus']))
				{
					var eStatus = imgInfo[selectedImages[0]]['sellStatus'];
				}
				if (isDef(imgInfo[selectedImages[0]]['sellID']))
				{
					var eIdent = imgInfo[selectedImages[0]]['sellID'];
				}
				var boxForm = '<strong>".sts(TEXT_PAYPAL_FOR_SALE)."</strong>: '+eName+'<br><br>'+
				'<span class=\"sfpg_button\" onclick=\"admSellPost(\''+eLink+'\', \''+eName+'\', \'ok\')\">".sts(TEXT_OK)."</span>'+
				'<span class=\"sfpg_button\" onclick=\"admSellPost(\''+eLink+'\', \''+eName+'\',\'del\')\">".sts(TEXT_DELETE)."</span>'+
				'<span class=\"sfpg_button\" onclick=\"admSellPost(0,0,\'cancel\')\">".sts(TEXT_CANCEL)."</span><br><br>'+
				'".sts(TEXT_PAYPAL_PRICE)." (".sts(PAYPAL_CURRENCY)."): <input type=\"text\" value=\"'+ePrice+'\" id=\"ePrice\"><br><br>'+
				'".sts(TEXT_PAYPAL_STATUS)."<br>'+
				'<input type=\"radio\" id=\"eStatus1\" name=\"eStatus\" value=\"x\"'+(eStatus==1?' checked':'')+'><label for=\"eStatus1\">".sts(TEXT_PAYPAL_AVAILABLE)."</label><br>'+
				'<input type=\"radio\" id=\"eStatus2\" name=\"eStatus\" value=\"x\"'+(eStatus!=1?' checked':'')+'><label for=\"eStatus2\">".sts(TEXT_PAYPAL_SOLD)."</label><br><br>'+
				'".sts(TEXT_PAYPAL_ITEM_ID).": <input type=\"text\" value=\"'+eIdent+'\" id=\"eIdent\">';
				var ele=gebi('box_admin');
				ele.innerHTML=boxForm;
				ele.style.visibility='visible';
			}
		}


		function admSellPost(link, name, action)
		{
			var ePrice = gebi('ePrice').value;
			var eStatus = 0;
			if (gebi('eStatus1').checked)
			{
				eStatus = 1;
			}
			var eIdent = gebi('eIdent').value;
			var ele=gebi('box_admin');
			ele.style.visibility='hidden';
			ele.innerHTML='';
			if (action=='del')
			{
				if (confirm('".sts(TEXT_DELETE.' '.TEXT_PAYPAL_FOR_SALE).": '+name+'?') == true)
				{
					var form = makeForm();
					form.appendChild(makeInput('func','sell'));
					form.appendChild(makeInput('action','del'));
					form.appendChild(makeInput('ele',link));
					submitForm(form);
				}
			}
			if (action=='ok')
			{
				var form = makeForm();
				form.appendChild(makeInput('func','sell'));
				form.appendChild(makeInput('action','save'));
				form.appendChild(makeInput('ePrice',ePrice));
				form.appendChild(makeInput('eStatus',eStatus));
				form.appendChild(makeInput('eIdent',eIdent));
				form.appendChild(makeInput('ele',link));
				submitForm(form);
			}
		}


		function admDesc()
		{
			var sel=selectedDirs.length + selectedImages.length + selectedFiles.length;
			if (sel>1)
			{
				alert('".sts(TEXT_ONLY_ONE)."');
			}
			else
			{
				var eName;
				var eLink;
				var eDesc;
				if (selectedDirs.length>0)
				{
					eName = dirInfo[selectedDirs[0]]['dirName'];
					eLink = dirInfo[selectedDirs[0]]['dirLink'];
					eDesc = (isDef(dirInfo[selectedDirs[0]]['dirDesc'])?dirInfo[selectedDirs[0]]['dirDesc']:'');
				}
				else if (selectedImages.length>0)
				{
					eName = imgInfo[selectedImages[0]]['imageName'];
					eLink = imgInfo[selectedImages[0]]['imageLink'];
					eDesc = (isDef(imgInfo[selectedImages[0]]['fileDescription'])?imgInfo[selectedImages[0]]['fileDescription']:'');
				}
				else if (selectedFiles.length>0)
				{
					eName = fileInfo[selectedFiles[0]]['fileName'];
					eLink = fileInfo[selectedFiles[0]]['fileLink'];
					eDesc = (isDef(fileInfo[selectedFiles[0]]['description'])?fileInfo[selectedFiles[0]]['description']:'');
				}
				else
				{
					eName = dirInfo[0]['dirName'];
					eLink = dirInfo[0]['dirLink'];
					eDesc = (isDef(dirInfo[0]['dirDesc'])?dirInfo[0]['dirDesc']:'');
				}
				var boxForm = '".sts(TEXT_DESCRIPTION).": '+eName+'<br><br>'+
				'<span class=\"sfpg_button\" onclick=\"admDescPost(\''+eLink+'\', \''+eName+'\', \'ok\')\">".sts(TEXT_OK)."</span>'+
				'<span class=\"sfpg_button\" onclick=\"admDescPost(\''+eLink+'\', \''+eName+'\',\'del\')\">".sts(TEXT_DELETE)."</span>'+
				'<span class=\"sfpg_button\" onclick=\"admDescPost(0,0,\'cancel\')\">".sts(TEXT_CANCEL)."</span><br><br>'+
				'<textarea id=\"desctxt\" rows=\"20\" cols=\"100\">'+eDesc.replace(/<br>/gi,'<br>\\n')+'</textarea>';
				var ele=gebi('box_admin');
				ele.innerHTML=boxForm;
				ele.style.visibility='visible';
			}
		}


		function admUpload(show)
		{
			var ele=gebi('box_admin');
			if (show)
			{
				var boxForm = '".sts(TEXT_UPLOAD)." -> '+dirInfo[0]['dirName']+'<br><br>'+
				'<form action=\"'+phpSelf+'?sfpg='+dirInfo[0]['dirLink']+(showInfo?'&info=1':'&info=0')+'\" method=\"post\" multipart=\"\" enctype=\"multipart/form-data\">'+
				'<input type=\"file\" name=\"ulele[]\" multiple> '+
				'<input type=\"submit\" value=\"".sts(TEXT_UPLOAD)."\"> '+
				'<input type=\"button\" onclick=\"admUpload(false)\" value=\"".sts(TEXT_CANCEL)."\">'+
				'<input type=\"hidden\" name=\"func\" value=\"upload\" multiple>'+
				'</form>';
				ele.innerHTML=boxForm;
				ele.style.visibility='visible';
			}
			else
			{
				ele.innerHTML='';
				ele.style.visibility='hidden';
			}
		}


		function admDescPost(link, name, action)
		{
			var text=gebi('desctxt').value;
			var ele=gebi('box_admin');
			ele.style.visibility='hidden';
			ele.innerHTML='';
			if (action=='del')
			{
				if (confirm('".sts(TEXT_DELETE." ".TEXT_DESCRIPTION).": '+name+'?') == true)
				{
					var form = makeForm();
					form.appendChild(makeInput('func','desc'));
					form.appendChild(makeInput('action','del'));
					form.appendChild(makeInput('ele',link));
					submitForm(form);
				}
			}
			if (action=='ok')
			{
				var form = makeForm();
				form.appendChild(makeInput('func','desc'));
				form.appendChild(makeInput('action','save'));
				form.appendChild(makeInput('text',text));
				form.appendChild(makeInput('ele',link));
				submitForm(form);
			}
		}


		function sendData(data)
		{
			var ele=gebi('box_admin');
			ele.innerHTML=data;
			ele.style.visibility='visible';
		}


		function admMakeDir()
		{
			var newDir = prompt('".sts(TEXT_MKDIR)."');
			if (newDir)
			{
				var form = makeForm();
				form.appendChild(makeInput('func','makedir'));
				form.appendChild(makeInput('dir',newDir));
				form.appendChild(makeInput('path',dirInfo[0]['dirLink']));
				submitForm(form);
			}
		}


		function makeInput(name,value)
		{
			var inp = document.createElement('input');
			inp.setAttribute('type','hidden');
			inp.setAttribute('name',name);
			inp.setAttribute('value',value);
			return inp;
		}


		function makeForm()
		{
			var selectForm = document.createElement('form');
			selectForm.setAttribute('method','post');
			selectForm.setAttribute('id','selectForm');
			selectForm.setAttribute('action', phpSelf+'?sfpg='+dirInfo[0]['dirLink']+(showInfo?'&info=1':'&info=0'));
			return selectForm;
		}


		function submitForm(form)
		{
			document.getElementsByTagName('body')[0].appendChild(form);
			gebi('selectForm').submit();
		}


		function selectElement(that, arr, nr)
		{
			var ele = arr.indexOf(nr);
			if (ele == -1)
			{
				arr.push(nr);
			}
			else
			{
				arr.splice(ele, 1);
			}
		}
		";
		}
		echo "

		function isSelected(type, nr)
		{
			if (type == 'dir')
			{
				var ele = selectedDirs.indexOf(nr);
			}
			else if (type == 'img')
			{
				var ele = selectedImages.indexOf(nr);
			}
			else if (type == 'file')
			{
				var ele = selectedFiles.indexOf(nr);
			}
			if (ele == -1)
			{
				return false;
			}
			else
			{
				return true;
			}
		}


		function mouseOver(that, type, nr)
		{
			fillInfo(type, nr);
			if (isSelected(type, nr))
			{
				that.className='innerbox_marked';
			}
			else if (type=='dir')
			{
				that.className='innerboxdir_hover';
			}
			else if (type=='img')
			{
				that.className='innerboximg_hover';
			}
			else if (type=='file')
			{
				that.className='innerboxfile_hover';
			}
		}


		function mouseOut(that, type, nr)
		{
			fillInfo('dir', 0);
			if (isSelected(type, nr))
			{
				that.className='innerbox_marked';
			}
			else if (type=='dir')
			{
				that.className='innerboxdir';
			}
			else if (type=='img')
			{
				that.className='innerboximg';
			}
			else if (type=='file')
			{
				that.className='innerboxfile';
			}
		}


		function mouseClick(that, type, nr)
		{
			if (selecting)
			{
				if (type == 'dir')
				{
					selectElement(that, selectedDirs, nr);
					that.className=(isSelected(type, nr)?'innerbox_marked':'innerboxdir');
				}
				else if (type == 'img')
				{
					selectElement(that, selectedImages, nr);
					that.className=(isSelected(type, nr)?'innerbox_marked':'innerboximg');
				}
				else if (type == 'file')
				{
					selectElement(that, selectedFiles, nr);
					that.className=(isSelected(type, nr)?'innerbox_marked':'innerboxfile');
				}
			}
			else
			{
				if (type == 'dir')
				{
					openGallery(nr);
				}
				else if (type == 'img')
				{
					openImageView(nr);
				}
				else if (type == 'file')
				{
					openFile(nr);
				}
			}
		}


		function addElement(elementNumber, type)
		{
			var divClassName = 'thumbbox';
			var content='';
			if (type == 'dir')
			{
				content += '<div id=\"dir'+elementNumber+'\" onclick=\"mouseClick(this, \'dir\', '+elementNumber+')\"';
				if (!itd)
				{
					content += ' onmouseover=\"mouseOver(this, \'dir\', '+elementNumber+')\" onmouseout=\"mouseOut(this, \'dir\', '+elementNumber+')\"';
				}
				content += ' class=\"innerboxdir\">';
				content += '<div class=\"thumbimgbox\">';
				if (isDef(dirInfo[elementNumber]['dirThumb']))
				{
					content += '<img class=\"thumb\" alt=\"\" src=\"'+phpSelf+'?cmd=thumb&sfpg='+dirInfo[elementNumber]['dirThumb']+'\">';
				}
				else
				{
					content += '<br><br>".sts(TEXT_NO_IMAGES)."';
				}
				content += '</div>';
				". (THUMB_CHARS_MAX ? "content += '".TEXT_DIR_MARK_START."'+thumbDisplayName(dirInfo[elementNumber]['dirName'])+'".TEXT_DIR_MARK_END."';" : "")."
				content += '</div>';
			}
			else if (type == 'img')
			{
				content += '<div id=\"img'+elementNumber+'\" onclick=\"mouseClick(this, \'img\', '+elementNumber+')\"';
				if (!itd)
				{
					content += ' onmouseover=\"mouseOver(this, \'img\', '+elementNumber+')\" onmouseout=\"mouseOut(this, \'img\', '+elementNumber+')\"';
				}
				content += ' class=\"innerboximg\">';
				content += '<div class=\"thumbimgbox\"><img class=\"thumb\" alt=\"\" src=\"'+phpSelf+'?cmd=thumb&sfpg='+imgInfo[elementNumber]['imageLink']+'\"></div>';
				". (THUMB_CHARS_MAX ? "content += thumbDisplayName(imgInfo[elementNumber]['imageName']);" : "")."
				content += '</div>';
			}
			else if (type == 'file')
			{
				content += '<div id=\"file'+elementNumber+'\" onclick=\"mouseClick(this, \'file\', '+elementNumber+')\"';
				if (!itd)
				{
					content += ' onmouseover=\"mouseOver(this, \'file\', '+elementNumber+')\" onmouseout=\"mouseOut(this, \'file\', '+elementNumber+')\"';
				}
				content += ' class=\"innerboxfile\">';
				content += '<div class=\"thumbimgbox\">';
				if (isDef(fileInfo[elementNumber]['fileThumb']))
				{
					content += '<img class=\"thumb\" alt=\"\" src=\"'+phpSelf+'?cmd=thumb&sfpg='+fileInfo[elementNumber]['fileThumb']+'\">';
				}
				else
				{
					content += '<br><br>".sts(TEXT_NO_THUMB_FOR_FILE)."';
				}
				content += '</div>'; 
				". (THUMB_CHARS_MAX ? "content += thumbDisplayName(fileInfo[elementNumber]['fileName']);" : "")."
				content += '</div>';
			}
			else if (".(DIR_DESC_IN_GALLERY?'true':'false')." && (type == 'desc'))
			{
				if ((isDef(dirInfo[elementNumber]['dirDesc']) && (dirInfo[elementNumber]['dirDesc'] != '')))
				{
					divClassName = 'descbox';
					content += '<div class=\"innerboxdesc\">';
					content += (isDef(dirInfo[elementNumber]['dirDesc'])?dirInfo[elementNumber]['dirDesc']:'');
					content += '</div>';
				}
			}
			if (content != '')
			{
				var newdiv = document.createElement('div');
				newdiv.className = divClassName;
				newdiv.innerHTML = content;
				var boxC = gebi('box_gallery');
				boxC.appendChild(newdiv);
			}
		}


		function showGallery(initOpenImage)
		{
			showMenu();
			if (initOpenImage)
			{
				openImageView(initOpenImage);
			}
			else
			{
				fillInfo('dir', 0);
			}

			if (showInfo)
			{
				toggleInfo(false);
			}

			var navLinks = '';
			for (i = 1; i < navInfo.length; i++)
			{
				if (navInfo[i]['navLink'] != '')
				{
					navLinks += '<span class=\"sfpg_button_nav\" onclick=\"openGallery('+i+', \'nav\')\">'+navInfo[i]['navName']+'</span>';
				}
				else
				{
					navLinks += navInfo[i]['navName'];
				}
			}
			gebi('navi').innerHTML = navLinks;
			addElement(0, 'desc');
			for (i = 1; i < dirInfo.length; i++)
			{
				addElement(i, 'dir');
			}
			for (i = 1; i < imgInfo.length; i++)
			{
				addElement(i, 'img');
			}
			for (i = 1; i < fileInfo.length; i++)
			{
				addElement(i, 'file');
			}
		}


		function slideshow(click)
		{
			if(slideshowActive)
			{
				if(click)
				{
					openImageView(nextImage(1));
					slideshowSec=0;
				}
				if(slideshowSec>=".SLIDESHOW_DELAY_SEC.")
				{
					if(preloadImg.complete)
					{
						openImageView(nextImage(1));
						slideshowSec=0;
					}
				}
				slideshowSec++;
				setTimeout('slideshow(false)',1000);
			}
			else
			{
				slideshowSec=0;
			}
		}

		";
		
		if (PAYPAL_ENABLED)
		{
			echo "
			function paypal(id)
			{
				var SelfUrl = '".RETURN_PROTOCOL."://".@$_SERVER['DOMAIN_NAME'].$_SERVER['PHP_SELF']."';
				gebi('paypalReturn').value = SelfUrl+'?sold=1';
				gebi('paypalCancelReturn').value = SelfUrl+'?sfpg=".(sfpg_url_decode(@$_GET['sfpg'])!=FALSE?$_GET['sfpg']:'')."&info=1';
				gebi('paypalAmount').value = imgInfo[id]['sellPrice'];
				gebi('paypalItemName').value = imgInfo[id]['imageName'];
				if(isDef(imgInfo[id]['sellID']))
				{
					gebi('paypalItemNumber').value = imgInfo[id]['sellID'];
				}
				document.forms[\"_xclick\"].submit();
			}
			";
		}

		$nav_info=[];
		$nav_info['navLink'] = sfpg_url_string('');
		$nav_info['navName'] = TEXT_HOME;
		echo_js_array('navInfo', 1, $nav_info);

		$links = explode('/', GALLERY);
		$gal_dirs = '';
		if (GALLERY and is_array($links))
		{
			for ($i = 0; $i < count($links); $i++)
			{
				if ($links[$i]!=='')
				{
					$gal_dirs .= $links[$i].'/';
					$display_name = (in_array(DIR_NAME_FILE, $misc)?@file(GALLERY_ROOT.$gal_dirs.DIR_NAME_FILE):'');
					if ($display_name)
					{
						$display_name = trim($display_name[0]);
						$display_name = clean_html($display_name);
					}
					else
					{
						$display_name = sfpg_display_name($links[$i], TRUE);
					}
					$a_names[] = $display_name;
					$a_links[] = $gal_dirs;
				}
			}
			$link_disp_length = strlen(TEXT_HOME) + 4;
			$start_link = count($a_names)-1;
			for($i = count($a_names)-1; $i >= 0; $i--)
			{
				$link_disp_length += strlen($a_names[$i]) + 5;
				if ($link_disp_length < NAVI_CHARS_MAX)
				{
					$start_link = $i;
				}
			}
			$i = 2;
			for ($link_nr = $start_link; $link_nr < count($a_links); $link_nr++)
			{
				$nav_info=[];
				if(($start_link > 0) and ($link_nr == $start_link))
				{
					$nav_info['navLink'] = '';
					$nav_info['navName'] = ' ... ';
					echo_js_array('navInfo', $i, $nav_info);
					$i++;
				}
				else
				{
					$nav_info['navLink'] = '';
					$nav_info['navName'] = ' &#10137;&#xFE0E; ';
					echo_js_array('navInfo', $i, $nav_info);
					$i++;
				}
				$nav_info['navLink'] = sfpg_url_string($a_links[$link_nr]);
				$nav_info['navName'] = $a_names[$link_nr];
				echo_js_array('navInfo', $i, $nav_info);
				$i++;
			}
			$current_dir_link = sfpg_url_string($a_links[count($a_links)-1]);
			$current_dir_name = (count($a_links) == 0 ? TEXT_HOME : $a_names[count($a_links)-1]);
		}
		else
		{
			$current_dir_link = sfpg_url_string('');
			$current_dir_name = TEXT_HOME;
		}
		if ((DIR_THUMB_FILE) and file_exists(GALLERY_ROOT.GALLERY.DIR_THUMB_FILE) and file_exists(DATA_ROOT.'info/'.GALLERY.DIR_THUMB_FILE))
		{
			$filed=unserialize(file_get_contents(DATA_ROOT.'info/'.GALLERY.DIR_THUMB_FILE));
			if (filemtime(GALLERY_ROOT.GALLERY.DIR_THUMB_FILE)!=$filed['fileMTime'])
			{
				sfpg_delete_from_data_root(GALLERY.DIR_THUMB_FILE);
			}
		}

		$item = 1;
		foreach ($dirs as $val)
		{
			if (!file_exists(DATA_ROOT.'info/'.GALLERY.$val.'/_sfpg_dir'))
			{
				sfpg_set_dir_info(GALLERY.$val.'/');
			}
			$filed=unserialize(file_get_contents(DATA_ROOT.'info/'.GALLERY.$val.'/_sfpg_dir'));
			if (DELETE_EMPTY_DIRS and ($filed['dirDirs']==0) and ($filed['dirImages']==0) and ($filed['dirFiles']==0))
			{
				sfpg_set_dir_info(GALLERY.$val.'/'); // refreshing information before possible delete
				$filed=unserialize(file_get_contents(DATA_ROOT.'info/'.GALLERY.$val.'/_sfpg_dir'));
			}
			if (DELETE_EMPTY_DIRS and ($filed['dirDirs']===0) and ($filed['dirImages']===0) and ($filed['dirFiles']===0))
			{
				sfpg_delete(GALLERY.$val.'/');
			}
			else
			{
				$display_name = @file(GALLERY_ROOT.GALLERY.$val.'/'.DIR_NAME_FILE);
				if ($display_name)
				{
					$display_name = trim($display_name[0]);
					$display_name = clean_html($display_name);
				}
				else
				{
					$display_name = sfpg_display_name($val, TRUE);
				}
				$dir_info = [];
				$dir_info['dirName'] = $display_name;
				$dir_info['dirLink'] = sfpg_url_string((GALLERY.$val.'/'));
				if (isset($filed['dirThumb']))
				{
					$dir_info['dirThumb'] = $filed['dirThumb'];
				}
				$dir_info['dirTime'] = $filed['dirTime'];
				$dir_info['dirDirs'] = $filed['dirDirs'];
				$dir_info['dirImages'] = $filed['dirImages'];
				$dir_info['dirFiles'] = $filed['dirFiles'];
				$desc = @file_get_contents(GALLERY_ROOT.GALLERY.$val.'/'.DIR_DESC_FILE);
				if ($desc)
				{
					$dir_info['dirDesc'] = clean_html($desc);
				}
				echo_js_array('dirInfo', $item, $dir_info, DESC_NL_TO_BR);
				unset($dir_info); // not all dirs have dirDesc, so making sure that it is not reused
				$item++;
			}
		}
		if (!file_exists(DATA_ROOT.'info/'.GALLERY.'_sfpg_dir'))
		{
			sfpg_set_dir_info(GALLERY);
		}
		$filed=unserialize(file_get_contents(DATA_ROOT.'info/'.GALLERY.'_sfpg_dir'));
		if ((count($dirs) !== $filed['dirDirs']) or (count($images) !== $filed['dirImages']) or (count($files) !== $filed['dirFiles']))
		{
			sfpg_set_dir_info(GALLERY);
			$filed=unserialize(file_get_contents(DATA_ROOT.'info/'.GALLERY.'_sfpg_dir'));
		}
		$dir_info['dirName'] = $current_dir_name;
		$dir_info['dirLink'] = $current_dir_link;
		if (isset($filed['dirThumb']))
		{
			$dir_info['dirThumb'] = $filed['dirThumb'];
		}
		$dir_info['dirTime'] = $filed['dirTime'];
		$dir_info['dirDirs'] = $filed['dirDirs'];
		$dir_info['dirImages'] = $filed['dirImages'];
		$dir_info['dirFiles'] = $filed['dirFiles'];
		$desc = (in_array(DIR_DESC_FILE, $misc)?@file_get_contents(GALLERY_ROOT.GALLERY.DIR_DESC_FILE):'');
		if ($desc)
		{
			$dir_info['dirDesc'] = clean_html($desc);
		}
		echo_js_array('dirInfo', 0, $dir_info, DESC_NL_TO_BR);

		$img_direct_link = FALSE;
		$item = 1;
		foreach ($images as $val)
		{
			$showImage = true;
			if(SHOW_MAX_IMAGES)
			{
				if($item>=SHOW_MAX_IMAGES)
				{
					$showImage = false;
				}
			}
			if(SHOW_IMAGE_DAYS)
			{
				if(filemtime(GALLERY_ROOT.GALLERY.$val)<(time()-(SHOW_IMAGE_DAYS*86400)))
				{
					$showImage = false;
				}
			}
			if ($showImage)
			{
				if ($val == IMAGE)
				{
					$img_direct_link = ($item);
				}

				$image_info=[];
				if (file_exists(DATA_ROOT.'info/'.GALLERY.$val))
				{
					$image_info=unserialize(file_get_contents(DATA_ROOT.'info/'.GALLERY.$val));
					if (filemtime(GALLERY_ROOT.GALLERY.$val)!=$image_info['fileMTime']) // if image time have changed, delete data to have new thumb created
					{
						sfpg_delete_from_data_root(GALLERY.$val);
						$image_info['firstView']=1;
					}
					else
					{
						if (in_array($val.DESC_EXT, $misc)) // if description file exists, add to array
						{
							$desc=@file_get_contents(GALLERY_ROOT.GALLERY.$val.DESC_EXT);
							$image_info['fileDescription']=clean_html($desc);
						}
					}
				}
				else
				{
					$image_info['firstView']=1;
				}
				$image_info['imageName'] = sfpg_display_name($val, SHOW_IMAGE_EXT);
				$image_info['imageLink'] = sfpg_url_string(GALLERY, $val);
				if (PAYPAL_ENABLED)
				{
					$sell=(in_array($val.PAYPAL_EXTENSION,$misc)?@file(GALLERY_ROOT.GALLERY.$val.PAYPAL_EXTENSION,FILE_IGNORE_NEW_LINES):false);
					if ($sell!=false)
					{
						$image_info['sellPrice'] = $sell[0];
						$image_info['sellStatus'] = $sell[1];
						if (trim(@$sell[2])!='')
						{
							$image_info['sellID'] = $sell[2];
						}
					}
				}
				echo_js_array('imgInfo', $item, $image_info, DESC_NL_TO_BR);
				$item++;
			}
		}
		if ($img_direct_link)
		{
			define('IMAGE_ID_IN_URL', $img_direct_link);
		}
		else
		{
			define('IMAGE_ID_IN_URL', FALSE);
		}
		if (count($files))
		{
			$item=1;
			$icons=[];
			if (file_exists(GALLERY_ROOT.ICONS_DIR))
			{
				$icons=scandir(GALLERY_ROOT.ICONS_DIR);
			}
			foreach ($files as $val)
			{
				$file_info = [];
				$icon_file = @substr(sfpg_ext($val), 1).FILE_THUMB_EXT;
				$file_info['fileLink']=sfpg_url_string(GALLERY, $val);
				if (FILE_THUMB_EXT and file_exists(GALLERY_ROOT.GALLERY.$val.FILE_THUMB_EXT))
				{
					$file_info['fileThumb']=sfpg_url_string(GALLERY, $val.FILE_THUMB_EXT);
				}
				elseif (in_array($icon_file, $icons))
				{
					$file_info['fileThumb']=sfpg_url_string(ICONS_DIR, $icon_file);
				}
				elseif (FILE_THUMB_DEFAULT)
				{
					$file_info['fileThumb']=sfpg_url_string(ICONS_DIR, FILE_THUMB_DEFAULT);
				}
				$file_info['fileName']=sfpg_display_name($val, SHOW_FILE_EXT);
				$file_info['fileTime']=@filemtime(GALLERY_ROOT.GALLERY.$val);
				$file_info['fileSize']=sfpg_file_size(@filesize(GALLERY_ROOT.GALLERY.$val));
				if (in_array($val.DESC_EXT, $misc))
				{
					$desc=@file_get_contents(GALLERY_ROOT.GALLERY.$val.DESC_EXT);
					$file_info['description']=clean_html($desc);
				}
				echo_js_array('fileInfo', $item, $file_info, DESC_NL_TO_BR);
				$item++;
			}
		}
		echo "
		//-->
		</script>";
	}

	@include(DATA_ROOT.'sp.php');
	if (!defined('SECURITY_PHRASE'))
	{
		sfpg_mkdir(DATA_ROOT);
		file_put_contents(DATA_ROOT.'sp.php',"<?php if(function_exists('option')) option('SECURITY_PHRASE', '".sfpg_random(30)."'); ?>");
		@include(DATA_ROOT.'sp.php');
		if (!defined('SECURITY_PHRASE'))
		{
			echo '<br>PHP do not have access to create files in the defined DATA_ROOT ("'.DATA_ROOT.'").<br>See readme.txt for DATA_ROOT description.';
			exit;
		}
	}
	if (SECURITY_PHRASE=='')
	{
		echo '<br>The SECURITY_PHRASE in "'.DATA_ROOT.'sp.php" cannot be empty.<br>See readme.txt for DATA_ROOT description.';
		exit;
	}

	if (PASSWORD!=='')
	{
		session_name('SFPG_SESSID');
		session_start();
		if (isset($_GET['cmd']) and ($_GET['cmd']=='logout'))
		{
			session_unset();
			header('Location: '.$_SERVER['PHP_SELF']);
			exit;
		}
		if ((($_SESSION['sfpg_access']??FALSE)!==TRUE) or ($_SESSION['sfpg_self']!==$_SERVER['PHP_SELF']))
		{
			if (isset($_POST['pw']) and ($_POST['pw']===PASSWORD))
			{
				$_SESSION['sfpg_access']=TRUE;
				$_SESSION['sfpg_self']=$_SERVER['PHP_SELF'];
			}
			else
			{
				header('Content-Type: text/html; charset="'.CHARSET.'"');
				echo '<!DOCTYPE html><html lang="'.HTML_LANGUAGE.'"><head><meta name="viewport" content="width=device-width, initial-scale=1"><meta charset="'.CHARSET.'"><title></title></head><body>'.
				'<form  name="pf" action="'.$_SERVER['REQUEST_URI'].'" method="post">'.
				'<input type="password" name="pw" id="pw" autofocus>'.
				'<input type="submit" name="su" value="'.TEXT_LOGIN.'">'.
				'</form></body></html>';
				session_write_close();
				exit;
			}
		}
		session_write_close();
	}

	$get_set = FALSE;
	if (isset($_GET['sfpg']))
	{
		$get = sfpg_url_decode($_GET['sfpg']);
		if ($get)
		{
			define('GALLERY', $get[0]);
			define('IMAGE', $get[1]);
			$get_set = TRUE;
		}
	}
	if (!$get_set)
	{
		define('GALLERY', '');
		define('IMAGE', '');
	}

	if (ZIP_ENABLE and isset($_POST['zipdl']))
	{
		sfpg_mkdir(DATA_ROOT.'zip');
		$zip_link='./_sfpg_zip';
		if (!is_link($zip_link))
		{
			if (!symlink(realpath(DATA_ROOT.'zip'), $zip_link))
			{
				echo 'Unable to create symlink for zip download.';
				exit;
			}
		}
		if (ZIP_CACHE_DAYS !== FALSE)
		{
			cleanup_zip_days(time()-(ZIP_CACHE_DAYS*86400), DATA_ROOT.'zip');
		}
		$files_for_zip = get_files_for_zip(GALLERY);
		if (count($files_for_zip)>0)
		{
			sort($files_for_zip); // sorting before hash to make sure that hash function gets input in same order every time.
			$zip_hash = hash('sha256', serialize($files_for_zip));
			
			$zip_dir = DATA_ROOT.'zip/'.GALLERY;
			if (GALLERY == '')
			{
				$zip_name = TEXT_ZIP_ROOT_NAME.'.zip';
			}
			else
			{
				$from = strrpos(rtrim(GALLERY, '/'), '/');
				if ($from===FALSE)
				{
					$from = -1;
				}
				$zip_name = substr(GALLERY, $from+1, -1).'.zip';
			}
			if (file_exists($zip_dir.$zip_name) and file_exists($zip_dir.$zip_name.'.hash') and ($zip_hash === file_get_contents($zip_dir.$zip_name.'.hash')))
			{
				header('Location: '.$zip_link.'/'.GALLERY.$zip_name);
				exit;
			}
			else
			{
				sfpg_delete($zip_dir.$zip_name);
				sfpg_delete($zip_dir.$zip_name.'.hash');
			}
			sfpg_mkdir($zip_dir);
			file_put_contents($zip_dir.$zip_name.'.hash', $zip_hash);

			$zip = new ZipArchive();
			$zip->open($zip_dir.$zip_name, ZipArchive::CREATE | ZipArchive::OVERWRITE);
			$zip_index = 0;
			foreach($files_for_zip as $file)
			{
				$zip->addFile(realpath(GALLERY_ROOT.$file), substr($file, strlen(GALLERY)));
				if (ZIP_COMPRESSION)
				{
			    	$zip->setCompressionIndex($zip_index, ZipArchive::CM_DEFLATE);
				}
				else
				{
					$zip->setCompressionIndex($zip_index, ZipArchive::CM_STORE);
				}
				$zip_index++;
			}
			if ($zip->close())
			{
				header('Location: '.$zip_link.'/'.GALLERY.$zip_name);
				exit;
			}
			echo 'Unable to create zip file.';
			exit;
		}
		else
		{
			echo TEXT_ZIP_NOTHING;
			exit;
		}
	}

	if (isset($_GET['cmd']) and $get_set)
	{
		if ($_GET['cmd'] == 'thumb')
		{
			sfpg_image(GALLERY, IMAGE, 'thumb');
			exit;
		}

		if ($_GET['cmd'] == 'image')
		{
			sfpg_image(GALLERY, IMAGE, 'image');
			exit;
		}

		if (($_GET['cmd'] == 'dl') and TEXT_DOWNLOAD!='')
		{
			sfpg_image(GALLERY, IMAGE, 'image', TRUE);
			exit;
		}

		if (SHOW_FILES and ($_GET['cmd'] == 'file'))
		{
			if (preg_match("#^(/|([A-Z]:)?(\\\\|/))#i", GALLERY_ROOT)) // if GALLERY_ROOT is an absolute path
			{
				$download_path='./_sfpg_download';
				if (is_link($download_path))
				{
					$prefix = $download_path.'/';
				}
				elseif (symlink(rtrim(GALLERY_ROOT, '/'), $download_path))
				{
					$prefix = $download_path.'/';
				}
				else
				{
					echo 'Unable to access file.';
					exit;
				}
			}
			else
			{
				$prefix = GALLERY_ROOT;
			}
			header('Location: '.$prefix.GALLERY.IMAGE);
			exit;
		}
	}

	header('Content-Type: text/html; charset="'.CHARSET.'"');

	if (PAYPAL_ENABLED)
	{
		if (isset($_GET['sold']))
		{
			echo '<br>'.TEXT_PAYPAL_THANKS;
			echo '<a href="'.$_SERVER['PHP_SELF'].'" alt="">'.TEXT_HOME.'</a>';
			exit();
		}
	}

	if (ADMIN===TRUE)
	{
		if (isset($_POST['func']))
		{
			if ($_POST['func']==='move')
			{
				if (isset($_POST['toFolder']) and isset($_POST['elems']) and is_array($_POST['elems']) and (count($_POST['elems']) > 0))
				{
					$to_dir_array = sfpg_url_decode($_POST['toFolder']);
					if (($to_dir_array!==false) and ($to_dir_array[1]==='') and is_dir(GALLERY_ROOT.$to_dir_array[0]))
					{
						$to_dir=GALLERY_ROOT.$to_dir_array[0];
						foreach ($_POST['elems'] as $elem)
						{
							$move_elem = sfpg_url_decode($elem);
							if ($move_elem)
							{
								if (($move_elem[1]==='') and (is_dir(GALLERY_ROOT.$move_elem[0])))
								{
									$slash_pos=strrpos($move_elem[0],'/',-2);
									if($slash_pos!==FALSE)
									{
										$slash_pos+=1;
									}
									else
									{
										$slash_pos=0;
									}
									$dir_name = substr($move_elem[0],$slash_pos);
									rename(GALLERY_ROOT.$move_elem[0], $to_dir.$dir_name);
								}
								else
								{
									$file_to_move=GALLERY_ROOT.$move_elem[0].$move_elem[1];
									rename($file_to_move, $to_dir.$move_elem[1]);
									if (file_exists($file_to_move.DESC_EXT))
									{
										rename($file_to_move.DESC_EXT, $to_dir.$move_elem[1].DESC_EXT);
									}
									if (sfpg_image_type($file_to_move) and (file_exists($file_to_move.PAYPAL_EXTENSION)))
									{
										rename($file_to_move.PAYPAL_EXTENSION, $to_dir.$move_elem[1].PAYPAL_EXTENSION);
									}
									elseif (file_exists($file_to_move.FILE_THUMB_EXT))
									{
										rename($file_to_move.FILE_THUMB_EXT, $to_dir.$move_elem[1].FILE_THUMB_EXT);
									}
								}
							}
						}
					}
				}
			}
			if ($_POST['func']==='setthumb')
			{
				if (isset($_POST['elems']))
				{
					if (count($_POST['elems']) == 1)
					{
						$new_thumb = sfpg_url_decode($_POST['elems'][0]);
						if ($new_thumb)
						{
							if (sfpg_image_type($new_thumb[1])===sfpg_image_type(DIR_THUMB_FILE))
							{
								copy(GALLERY_ROOT.$new_thumb[0].$new_thumb[1], GALLERY_ROOT.$new_thumb[0].DIR_THUMB_FILE);
								sfpg_set_dir_info($new_thumb[0]);
							}
							else
							{
								echo TEXT_WRONG_FILETYPE.sfpg_image_type(DIR_THUMB_FILE);
								exit;
							}
						}
					}
				}
				else
				{
					if (isset($_POST['path']))
					{
						$path = sfpg_url_decode($_POST['path']);
						if ($path)
						{
							sfpg_delete(GALLERY_ROOT.$path[0].DIR_THUMB_FILE);
							sfpg_set_dir_info($path[0]);
						}
					}
				}
			}
			if ($_POST['func']==='delete')
			{
				if (isset($_POST['elems']) and is_array($_POST['elems']) and (count($_POST['elems']) > 0))
				{
					foreach ($_POST['elems'] as $elem)
					{
						$del_elem = sfpg_url_decode($elem);
						if ($del_elem)
						{
							$element=GALLERY_ROOT.$del_elem[0].$del_elem[1];
							sfpg_delete($element);
							if (!is_dir($element))
							{
								sfpg_delete($element.DESC_EXT);
								if (sfpg_image_type($element))
								{
									sfpg_delete($element.PAYPAL_EXTENSION);
								}
								else
								{
									sfpg_delete($element.FILE_THUMB_EXT);
								}
							}
						}
					}
				}
			}
			if (($_POST['func']==='makedir') and (isset($_POST['dir'])) and (isset($_POST['path'])))
			{
				$new_dir=$_POST['dir'];
				$path=$_POST['path'];
				if (($new_dir!=='') and $path)
				{
					$path = sfpg_url_decode($path);
					if ($path and ($path[1]===''))
					{
						$path=GALLERY_ROOT.$path[0];
						sfpg_mkdir($path.$new_dir);
					}
				}
			}
			if (($_POST['func']==='rename') and (isset($_POST['eleToRen'])) and (isset($_POST['newName'])))
			{
				$newName=$_POST['newName'];
				$eleToRen=$_POST['eleToRen'];
				if ($newName!=='' and $eleToRen)
				{
					$eleToRen = sfpg_url_decode($eleToRen);
					if ($eleToRen)
					{
						if ($eleToRen[1]!=='')
						{
							$newName.=((!SHOW_IMAGE_EXT and sfpg_image_type($eleToRen[1]))?sfpg_ext($eleToRen[1]):'');
							if ((!file_exists(GALLERY_ROOT.$eleToRen[0].$newName)) and (!is_dir(GALLERY_ROOT.$eleToRen[0].$newName)))
							{
								if (sfpg_image_type($eleToRen[1]))
								{
									if (file_exists(GALLERY_ROOT.$eleToRen[0].$eleToRen[1].PAYPAL_EXTENSION))
									{
										rename(GALLERY_ROOT.$eleToRen[0].$eleToRen[1].PAYPAL_EXTENSION, GALLERY_ROOT.$eleToRen[0].$newName.PAYPAL_EXTENSION);
									}
								}
								elseif (file_exists(GALLERY_ROOT.$eleToRen[0].$eleToRen[1].FILE_THUMB_EXT))
								{
									rename(GALLERY_ROOT.$eleToRen[0].$eleToRen[1].FILE_THUMB_EXT, GALLERY_ROOT.$eleToRen[0].$newName.FILE_THUMB_EXT);
								}
								if (file_exists(GALLERY_ROOT.$eleToRen[0].$eleToRen[1].DESC_EXT))
								{
									rename(GALLERY_ROOT.$eleToRen[0].$eleToRen[1].DESC_EXT, GALLERY_ROOT.$eleToRen[0].$newName.DESC_EXT);
								}
								rename(GALLERY_ROOT.$eleToRen[0].$eleToRen[1], GALLERY_ROOT.$eleToRen[0].$newName);
							}
						}
						else
						{
							$oldPath=GALLERY_ROOT.$eleToRen[0];
							$oldPath=rtrim($oldPath,'/');
							$newPath = substr($oldPath, 0, strrpos($oldPath, '/')+1).$newName;
							if ((!file_exists($newPath)) and (!is_dir($newPath)))
							{
								rename(GALLERY_ROOT.$eleToRen[0], $newPath);
							}
						}
					}
				}
			}
			if ($_POST['func']==='desc')
			{
				$action=@$_POST['action'];
				$text=@$_POST['text'];
				$ele=@$_POST['ele'];
				if (($action==='del') or ($text===''))
				{
					$eleWd = sfpg_url_decode($ele);
					if ($eleWd)
					{
						$element=GALLERY_ROOT.$eleWd[0].$eleWd[1];
						if (is_dir($element))
						{
							sfpg_delete($element.DIR_DESC_FILE);
						}
						else
						{
							sfpg_delete($element.DESC_EXT);
						}
					}
				}
				elseif ($action==='save')
				{
					$eleWd = sfpg_url_decode($ele);
					if ($eleWd)
					{
						$element=GALLERY_ROOT.$eleWd[0].$eleWd[1];
						if (is_dir($element))
						{
							$element.=DIR_DESC_FILE;
						}
						else
						{
							$element.=DESC_EXT;
						}
						file_put_contents($element,$text);
					}
				}
			}
			if ($_POST['func']==='sell')
			{
				$action=$_POST['action'];
				$ele=$_POST['ele'];
				if ($action==='del')
				{
					$eleWd = sfpg_url_decode($ele);
					if ($eleWd)
					{
						sfpg_delete(GALLERY_ROOT.$eleWd[0].$eleWd[1].PAYPAL_EXTENSION);
					}
				}
				elseif ($action==='save')
				{
					$eleWd = sfpg_url_decode($ele);
					if ($eleWd)
					{
						file_put_contents(GALLERY_ROOT.$eleWd[0].$eleWd[1].PAYPAL_EXTENSION,$_POST['ePrice']."\r\n".$_POST['eStatus']."\r\n".$_POST['eIdent']);
					}
				}
			}
			if ($_POST['func']==='upload')
			{
				if (isset($_FILES['ulele']))
				{
					$nrUlEle=count($_FILES['ulele']['name']);
					for ($i=0; $i<$nrUlEle; $i++)
					{
						if ($_FILES['ulele']['error'][$i]===0)
						{
							move_uploaded_file($_FILES['ulele']['tmp_name'][$i],GALLERY_ROOT.GALLERY.$_FILES['ulele']['name'][$i]);
						}
					}
				}
			}
		}
		if (isset($_GET['cmd']) and ($_GET['cmd'] == 'dirs'))
		{
			sfpg_browse_dirs();
			exit;
		}
	}


	list($dirs, $images, $files, $misc) = sfpg_get_dir(GALLERY);
	echo '<!DOCTYPE html><html lang="'.HTML_LANGUAGE.'"><head><meta name="viewport" content="width=device-width, initial-scale=1"><meta charset="'.CHARSET.'"><meta name="description" content="Single File PHP Gallery"><title>'.TEXT_GALLERY_NAME.'</title><style>'.
	'
	img
	{
		-ms-interpolation-mode:bicubic;
	}

	body.sfpg
	{
		background:'.COLOR_BODY_BACK.';
		color:'.COLOR_BODY_TEXT.';
		font-family:Arial, Helvetica, sans-serif;
		font-size:'.FONT_SIZE.'px;
		font-weight:normal;
		margin:0px;
		padding:0px;
		overflow:hidden;
	}

	body.sfpg a:active, body.sfpg a:link, body.sfpg a:visited, body.sfpg a:focus
	{
		color:'.COLOR_BODY_LINK.';
		text-decoration:none;
	}

	body.sfpg a:hover
	{
		color:'.COLOR_BODY_HOVER.';
		text-decoration:none;
	}

	table
	{
		border-spacing:0px;
		border-collapse:separate;
		font-size:'.FONT_SIZE.'px;
		height:100%;
		width:100%;
	}

	table.info td
	{
		padding:10px;
		vertical-align:top;
	}

	table.sfpg_disp
	{
		text-align:center;
		padding:0px;
		cellspacing:0px;
	}

	table.sfpg_disp td.menu
	{
		background:'.COLOR_MENU_BACK.';
		border-top:1px solid '.COLOR_MENU_TOP.';
		vertical-align:middle;
		white-space:nowrap;
	}

	table.sfpg_disp td.navi
	{
		height:'.NAV_BAR_HEIGHT.'px;
		background:'.COLOR_NAVBAR_BACK.';
		border-top:1px solid '.COLOR_NAVBAR_TOP.';
		vertical-align:middle;
		white-space:nowrap;
	}

	table.sfpg_disp td.mid
	{
		vertical-align:middle;
	}

	div.in
	{
		line-height:170%;
		padding-left:30px;
	}

	.sfpg_info_text
	{
		'.(ROUND_CORNERS?'border-radius:'.ROUND_CORNERS.'px;':'').'
		background:'.COLOR_INFO_BACK.';
		border:1px solid '.COLOR_INFO_BORDER.';
		color:'.COLOR_INFO_TEXT.';
		padding:1px 4px 1px 4px;
		width:'.(INFO_BOX_WIDTH - 35).'px;
	}

	.loading
	{
		'.(ROUND_CORNERS?'border-radius:'.ROUND_CORNERS.'px;':'').'
		background:'.COLOR_INFO_BACK.';
		border:1px solid '.COLOR_INFO_BORDER.';
		color:'.COLOR_INFO_TEXT.';
		width:200px;
		padding:20px 20px 20px 20px;
		margin:auto;
	}

	.sfpg_button, .sfpg_button_hover, .sfpg_button_on, .sfpg_button_nav, .sfpg_button_disabled
	{
		border-radius:15px;
		cursor:pointer;
		background:'.COLOR_BUTTON_BACK.';
		border:1px solid '.COLOR_BUTTON_BORDER.';
		color:'.COLOR_BUTTON_TEXT.';
		padding:2px 8px 2px 8px;
		margin:0px 5px 0px 5px;
		white-space:nowrap;
	}

	.sfpg_button:hover, .sfpg_button_nav:hover, .sfpg_button_on:hover
	{
		background:'.COLOR_BUTTON_HOVER.';
		color:'.COLOR_BUTTON_HOVER_TEXT.';
	}

	.sfpg_button_hover
	{
		background:'.COLOR_BUTTON_HOVER.';
		color:'.COLOR_BUTTON_HOVER_TEXT.';
	}

	.sfpg_button_on
	{
		background:'.COLOR_BUTTON_ON.';
		color:'.COLOR_BUTTON_TEXT_ON.';
	}

	.sfpg_button_disabled
	{
		cursor:default;
		border:1px solid '.COLOR_BUTTON_BORDER_OFF.';
		background:'.COLOR_BUTTON_BACK_OFF.';
		color:'.COLOR_BUTTON_TEXT_OFF.';
	}

	.sfpg_button_nav
	{
		border:1px solid '.COLOR_BUTTON_NAV_BORDER.';
		background:'.COLOR_BUTTON_NAV_BACK.';
		color:'.COLOR_BUTTON_NAV_TEXT.';
	}

	.thumbbox, .descbox
	{
		vertical-align:top;
		display:-moz-inline-stack;
		display:inline-block;
		zoom:1;
		*display:inline;
		width:'.((2 * (THUMB_BORDER_WIDTH + THUMB_MARGIN + THUMB_BOX_MARGIN)) + THUMB_MAX_WIDTH + 2).'px;
		height:'.((2 * (THUMB_BORDER_WIDTH + THUMB_MARGIN + THUMB_BOX_MARGIN)) + THUMB_MAX_HEIGHT + 2 + THUMB_BOX_EXTRA_HEIGHT).'px;
		margin:0px;
		padding:0px;
	}

	.descbox
	{
		width:'.(((2 * (THUMB_BORDER_WIDTH + THUMB_MARGIN + THUMB_BOX_MARGIN)) + THUMB_MAX_WIDTH + 2)*2).'px;
	}

	.thumbimgbox
	{
		width:'.((2 * (THUMB_BORDER_WIDTH + THUMB_MARGIN)) + THUMB_MAX_WIDTH).'px;
		height:'.((THUMB_BORDER_WIDTH * 2) + THUMB_MARGIN + THUMB_MAX_HEIGHT + 6).'px;
		margin:0px; 
		padding:0px;
	}

	.innerboxdir, .innerboximg, .innerboxfile, .innerboxdir_hover, .innerboximg_hover, .innerboxfile_hover, .innerbox_marked
	{
		'.(ROUND_CORNERS?'border-radius:'.(ROUND_CORNERS*2).'px;':'').'
		cursor:pointer;
		margin:'.THUMB_BOX_MARGIN.'px;
		padding:0px;
		width:'.((2 * (THUMB_BORDER_WIDTH + THUMB_MARGIN)) + THUMB_MAX_WIDTH + 2).'px;
		height:'.((2 * (THUMB_BORDER_WIDTH + THUMB_MARGIN)) + THUMB_MAX_HEIGHT + 2 + THUMB_BOX_EXTRA_HEIGHT).'px;
	}

	.innerboxdesc
	{
		text-align:left;
		overflow:auto;
		'.(ROUND_CORNERS?'border-radius:'.(ROUND_CORNERS*2).'px;':'').'
		margin:'.THUMB_BOX_MARGIN.'px;
		padding:5px;
		width:'.(2*(THUMB_BOX_MARGIN+(2 * (THUMB_BORDER_WIDTH + THUMB_MARGIN)) + THUMB_MAX_WIDTH + 2 - 5)).'px;
		height:'.((2 * (THUMB_BORDER_WIDTH + THUMB_MARGIN)) + THUMB_MAX_HEIGHT + 2 + THUMB_BOX_EXTRA_HEIGHT - 10).'px;
		border:1px solid '.COLOR_DESC_BOX_BORDER.';
		background:'.COLOR_DESC_BOX_BACK.';
		color:'.COLOR_DESC_BOX_TEXT.';
	}

	.innerboxdir, .innerboxdir_hover, .innerbox_marked
	{
		border:1px solid '.COLOR_DIR_BOX_BORDER.';
		background:'.COLOR_DIR_BOX_BACK.';
		color:'.COLOR_DIR_BOX_TEXT.';
	}

	.innerboximg, .innerboximg_hover
	{
		border:1px solid '.COLOR_IMG_BOX_BORDER.';
		background:'.COLOR_IMG_BOX_BACK.';
		color:'.COLOR_IMG_BOX_TEXT.';
	}

	.innerboxfile, .innerboxfile_hover
	{
		border:1px solid '.COLOR_FILE_BOX_BORDER.';
		background:'.COLOR_FILE_BOX_BACK.';
		color:'.COLOR_FILE_BOX_TEXT.';
	}

	.innerboxdir_hover
	{
		background:'.COLOR_DIR_HOVER.';
		color:'.COLOR_DIR_HOVER_TEXT.';
	}

	.innerboximg_hover
	{
		background:'.COLOR_IMG_HOVER.';
		color:'.COLOR_IMG_HOVER_TEXT.';
	}

	.innerboxfile_hover
	{
		background:'.COLOR_FILE_HOVER.';
		color:'.COLOR_FILE_HOVER_TEXT.';
	}

	.innerbox_marked
	{
		background:'.COLOR_MARKED_BACK.';
		color:'.COLOR_MARKED_TEXT.';
	}

	.full_image, .full_image_no_resize
	{
		cursor:pointer;
		border:'.FULLIMG_BORDER_WIDTH.'px solid '.COLOR_FULLIMG_BORDER.';
		width: auto;
		height : auto;
		max-height: 100%;
		max-width: 100%;
		opacity: 0;
		transition: opacity 0.5s;
	}

	.full_image_no_resize
	{
		max-height: none;
		max-width: none;
	}

	.banner
	{
		width:100%;
	}

	.thumb
	{
		'.(ROUND_CORNERS?'border-radius:'.ROUND_CORNERS.'px;':'').'
		margin:'.THUMB_MARGIN.'px '.THUMB_MARGIN.'px 5px '.THUMB_MARGIN.'px;
		border:'.THUMB_BORDER_WIDTH.'px solid '.COLOR_THUMB_BORDER.';
	}

	.box_image, .box_wait
	{
		padding:30px;
		position:absolute;
		top:0px;
		bottom:'.MENU_BOX_HEIGHT.'px;
		right:0px;
		left:0px;
		overflow:auto;
		visibility:hidden;
		text-align:center;
	}

	.box_wait
	{
		z-index:1020;
		'.(ROUND_CORNERS?'border-radius:'.(ROUND_CORNERS*2).'px;':'').'
	}

	.box_image
	{
		z-index:1030;
	}

	.map_iframe
	{
		width:100%;
		height:250px;
		border:0;
		scrolling:no;
		margin:0;
		'.(ROUND_CORNERS?'border-radius:'.ROUND_CORNERS.'px;':'').'
	}

	.wait
	{
		margin: 0;
		position: absolute;
		top: 50%;
		left: 50%;
		-ms-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
	}

	.box_hud
	{
		position:absolute;
		bottom:'.(MENU_BOX_HEIGHT+20).'px;
		right:0;
		z-index:1200;
		visibility:hidden;
		cursor:pointer;
	}

	.box_navi
	{
		position:absolute;
		bottom:0;
		left:0;
		height:'.MENU_BOX_HEIGHT.'px;
		width:100%;
		z-index:1120;
		overflow:auto;
		text-align:center;
	}

	.box_info
	{
		position:absolute;
		top:'.THUMB_BOX_MARGIN.'px;
		bottom:'.(MENU_BOX_HEIGHT + THUMB_BOX_MARGIN).'px;
		left:'.THUMB_BOX_MARGIN.'px;
		width:'.(INFO_BOX_WIDTH - (2*THUMB_BOX_MARGIN)).'px;
		z-index:1040;
		visibility:hidden;
		overflow:auto;
		border:1px solid '.COLOR_INFOBOX_BORDER.';
		'.(ROUND_CORNERS?'border-radius:'.(ROUND_CORNERS*2).'px;':'').'
		background:'.COLOR_INFOBOX_BACK.';
	}
	
	.box_inner_info
	{
		margin:5px;
	}

	.box_admin
	{
		position:absolute;
		width:100%;
		height:100%;
		visibility:hidden;
		overflow:auto;
		z-index:1240;
		background:'.COLOR_INFOBOX_BACK.';
	}

	.box_data
	{
		position:absolute;
		visibility:hidden;
	}

	.box_overlay
	{
		position:absolute;
		bottom:'.MENU_BOX_HEIGHT.'px;
		left:0;
		height:100%;
		width:100%;
		z-index:1010;
		overflow:hidden;
		visibility:hidden;
		background:'.COLOR_OVERLAY.';
		opacity:'.OVERLAY_OPACITY.';
	}

	.box_gallery
	{
		text-align:center;
		position:absolute;
		top:0px;
		bottom:'.MENU_BOX_HEIGHT.'px;
		left:0px;
		right:0px;
		z-index:1000;
		overflow:auto;
		-webkit-overflow-scrolling:touch;
	}
	#password
	{
		display:none;
		visibility:hidden;
	}
	'.
	'</style>';
	sfpg_javascript();
	echo '</head>';
	
	if (PAYPAL_ENABLED and $get_set and (@$_GET['cmd'] == 'buy') and IMAGE!='')
	{
		$sell=@file(GALLERY_ROOT.GALLERY.IMAGE.PAYPAL_EXTENSION,FILE_IGNORE_NEW_LINES);
		if (($sell==false) or ($sell[1]!=1))
		{
			echo '<body><br>'.TEXT_PAYPAL_OUT_BACK.'</body>';
		}
		else
		{
			echo '<body onload="paypal('.IMAGE_ID_IN_URL.');">'.
			'<br>'.TEXT_PAYPAL_REDIRECT.
			'<form  name="_xclick" action="https://www.paypal.com/cgi-bin/webscr" method="post">'.
			'<input type="hidden" name="cmd" value="_xclick">'.
			'<input type="hidden" name="business" value="'.PAYPAL_ACCOUNT.'">'.
			'<input type="hidden" name="currency_code" value="'.PAYPAL_CURRENCY.'">'.
			'<input type="hidden" id="paypalReturn" name="return" value="">'.
			'<input type="hidden" id="paypalCancelReturn" name="cancel_return" value="">'.
			'<input type="hidden" id="paypalItemName" name="item_name" value="">'.
			'<input type="hidden" id="paypalItemNumber" name="item_number" value="'.GALLERY.IMAGE.'">'.
			'<input type="hidden" id="paypalAmount" name="amount" value="">'.
			'</form>'.
			'</body>';
		}
	}
	else
	{
		echo '<body onresize="updateSize()" onload="showGallery('.(IMAGE_ID_IN_URL?IMAGE_ID_IN_URL:'false').')" class="sfpg">'.
		'<div id="box_navi" class="box_navi">'.
			'<table class="sfpg_disp">'.
				'<tr><td class="navi">'.
					'<div id="navi"></div>'.
				'</td></tr>'.
				'<tr><td class="menu">'.
					'<div id="div_menu"></div>'.
				'</td></tr>'.
			'</table>'.
		'</div>'.
		'<div id="box_image" class="box_image">'.
			'<img alt="" src="" id="full" class="full_image" onclick="closeImageView()" onmouseover="gebi(\'button_close\').className=\'sfpg_button_hover\'" onmouseout="gebi(\'button_close\').className=\'sfpg_button\'">'.
		'</div>'.
		'<div id="box_wait" class="box_wait">'.
			'<div id="wait" class="wait"></div>'.
		'</div>'.
		'<div id="box_info" class="box_info">'.
			'<div id="box_inner_info" class="box_inner_info"></div>'.
		'</div>'.
		'<div id="box_gallery" class="box_gallery">';
		$banner_file=FALSE;
		if (file_exists(GALLERY_ROOT.GALLERY.DIR_BANNER_FILE))
		{
			$banner_file=GALLERY_ROOT.GALLERY.DIR_BANNER_FILE;
		}
		elseif (DIR_ROOT_BANNER_IN_SUBDIRS and file_exists(GALLERY_ROOT.DIR_BANNER_FILE))
		{
			$banner_file=GALLERY_ROOT.DIR_BANNER_FILE;
		}
		if ($banner_file)
		{
			echo '<div class="banner">'.clean_html(@file_get_contents($banner_file)).'</div>';
		}
		elseif (TEXT_BANNER)
		{
			echo '<div class="banner">'.TEXT_BANNER.'</div>';
		}
		echo '</div>';
		if (ADMIN===TRUE)
		{
			echo'<div id="box_admin" class="box_admin"></div>';
			echo'<div id="box_data" class="box_data"></div>';
		}
		echo'<div id="box_overlay" class="box_overlay"></div>'.
		'<div id="box_left" onclick="cycleImg(-1)" onmouseover="gebi(\'button_left\').className=\'sfpg_button_hover\'" onmouseout="gebi(\'button_left\').className=\'sfpg_button\'" class="box_hud"></div>'.
		'<div id="box_right" onclick="cycleImg(1)" onmouseover="gebi(\'button_right\').className=\'sfpg_button_hover\'" onmouseout="gebi(\'button_right\').className=\'sfpg_button\'" class="box_hud"></div>'.
		'</body>';
	}
	echo '</html>';
?>
