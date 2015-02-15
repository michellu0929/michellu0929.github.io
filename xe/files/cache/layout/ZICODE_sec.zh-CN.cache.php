<?php if(!defined("__XE__")) exit(); $layout_info = new stdClass;
$layout_info->site_srl = "";
$layout_info->layout = "ZICODE_sec";
$layout_info->type = "";
$layout_info->path = "./layouts/ZICODE_sec/";
$layout_info->title = "";
$layout_info->description = "
        This layout is XpressEngine official ver 2.
		author information
        design : jieun Kim
        publishing : chanmyung Jung
       	development : zero
    ";
$layout_info->version = "1.0";
$layout_info->date = "20111228";
$layout_info->homepage = "http://www.xpressengine.com";
$layout_info->layout_srl = $layout_srl;
$layout_info->layout_title = $layout_title;
$layout_info->license = "";
$layout_info->license_link = "";
$layout_info->layout_type = "P";
$layout_info->author = array();
$layout_info->author[0] = new stdClass;
$layout_info->author[0]->name = "";
$layout_info->author[0]->email_address = "developers@xpressengine.com";
$layout_info->author[0]->homepage = "http://www.xpressengine.com";
$layout_info->extra_var = new stdClass;
$layout_info->extra_var->colorset = new stdClass;
$layout_info->extra_var->colorset->group = "";
$layout_info->extra_var->colorset->title = "color set";
$layout_info->extra_var->colorset->type = "select";
$layout_info->extra_var->colorset->value = $vars->colorset;
$layout_info->extra_var->colorset->description = "please choose the \"color set\" you want.";
$layout_info->extra_var->colorset->options = array();
$layout_info->extra_var->colorset->options["black"] = new stdClass;
$layout_info->extra_var->colorset->options["black"]->val = "black (default)";
$layout_info->extra_var->colorset->options["blue"] = new stdClass;
$layout_info->extra_var->colorset->options["blue"]->val = "blue";
$layout_info->extra_var->colorset->options["sky"] = new stdClass;
$layout_info->extra_var->colorset->options["sky"]->val = "sky blue";
$layout_info->extra_var->colorset->options["cyan"] = new stdClass;
$layout_info->extra_var->colorset->options["cyan"]->val = "cyan";
$layout_info->extra_var->colorset->options["purple"] = new stdClass;
$layout_info->extra_var->colorset->options["purple"]->val = "purple";
$layout_info->extra_var->colorset->options["orange"] = new stdClass;
$layout_info->extra_var->colorset->options["orange"]->val = "orange";
$layout_info->extra_var->layout_type = new stdClass;
$layout_info->extra_var->layout_type->group = "";
$layout_info->extra_var->layout_type->title = "type of layout";
$layout_info->extra_var->layout_type->type = "select";
$layout_info->extra_var->layout_type->value = $vars->layout_type;
$layout_info->extra_var->layout_type->description = "";
$layout_info->extra_var->layout_type->options = array();
$layout_info->extra_var->layout_type->options["ce"] = new stdClass;
$layout_info->extra_var->layout_type->options["ce"]->val = "contents + sub-menu (default)";
$layout_info->extra_var->layout_type->options["c"] = new stdClass;
$layout_info->extra_var->layout_type->options["c"]->val = "only contents";
$layout_info->extra_var->layout_background = new stdClass;
$layout_info->extra_var->layout_background->group = "";
$layout_info->extra_var->layout_background->title = "background of layout";
$layout_info->extra_var->layout_background->type = "select";
$layout_info->extra_var->layout_background->value = $vars->layout_background;
$layout_info->extra_var->layout_background->description = "";
$layout_info->extra_var->layout_background->options = array();
$layout_info->extra_var->layout_background->options["N"] = new stdClass;
$layout_info->extra_var->layout_background->options["N"]->val = "No";
$layout_info->extra_var->layout_background->options["Y"] = new stdClass;
$layout_info->extra_var->layout_background->options["Y"]->val = "Yes";
$layout_info->extra_var->logo_image = new stdClass;
$layout_info->extra_var->logo_image->group = "";
$layout_info->extra_var->logo_image->title = "Logo image (with margin)";
$layout_info->extra_var->logo_image->type = "image";
$layout_info->extra_var->logo_image->value = $vars->logo_image;
$layout_info->extra_var->logo_image->description = "Enter a logo image to be displayed on the top left of the layout. In consideration of the margin, please use an image with a height of 40px.";
$layout_info->extra_var->logo_image_2 = new stdClass;
$layout_info->extra_var->logo_image_2->group = "";
$layout_info->extra_var->logo_image_2->title = "Logo image (no margin)";
$layout_info->extra_var->logo_image_2->type = "image";
$layout_info->extra_var->logo_image_2->value = $vars->logo_image_2;
$layout_info->extra_var->logo_image_2->description = "Displays a logo image on the top left of the layout, with no margin. ";
$layout_info->extra_var->logo_url = new stdClass;
$layout_info->extra_var->logo_url->group = "";
$layout_info->extra_var->logo_url->title = "Logo image link";
$layout_info->extra_var->logo_url->type = "text";
$layout_info->extra_var->logo_url->value = $vars->logo_url;
$layout_info->extra_var->logo_url->description = "Please enter the URL to redirect when a user clicks the logo.";
$layout_info->extra_var->title_sub = new stdClass;
$layout_info->extra_var->title_sub->group = "";
$layout_info->extra_var->title_sub->title = "Subheading";
$layout_info->extra_var->title_sub->type = "text";
$layout_info->extra_var->title_sub->value = $vars->title_sub;
$layout_info->extra_var->title_sub->description = "Enter a subheading which is displayed at the top of the body.";
$layout_info->extra_var->title_main = new stdClass;
$layout_info->extra_var->title_main->group = "";
$layout_info->extra_var->title_main->title = "Heading";
$layout_info->extra_var->title_main->type = "text";
$layout_info->extra_var->title_main->value = $vars->title_main;
$layout_info->extra_var->title_main->description = "Enter a heading which is displayed at the top of the body.";
$layout_info->extra_var->title_image = new stdClass;
$layout_info->extra_var->title_image->group = "";
$layout_info->extra_var->title_image->title = "Image for heading";
$layout_info->extra_var->title_image->type = "image";
$layout_info->extra_var->title_image->value = $vars->title_image;
$layout_info->extra_var->title_image->description = "Add an image (155x142) for heading.";
$layout_info->extra_var->title_description = new stdClass;
$layout_info->extra_var->title_description->group = "";
$layout_info->extra_var->title_description->title = "Description";
$layout_info->extra_var->title_description->type = "textarea";
$layout_info->extra_var->title_description->value = $vars->title_description;
$layout_info->extra_var->title_description->description = "Enter the contents to be displayed on the top of the body (you can use HTML; 'h4' is reserved for subheading, 'a' for link, and 'ul' for list).";
$layout_info->extra_var->title_display = new stdClass;
$layout_info->extra_var->title_display->group = "";
$layout_info->extra_var->title_display->title = "Display heading";
$layout_info->extra_var->title_display->type = "select";
$layout_info->extra_var->title_display->value = $vars->title_display;
$layout_info->extra_var->title_display->description = "";
$layout_info->extra_var->title_display->options = array();
$layout_info->extra_var->title_display->options["main"] = new stdClass;
$layout_info->extra_var->title_display->options["main"]->val = "On main menus only";
$layout_info->extra_var->title_display->options["all"] = new stdClass;
$layout_info->extra_var->title_display->options["all"]->val = "On all menus";
$layout_info->extra_var->right_title = new stdClass;
$layout_info->extra_var->right_title->group = "";
$layout_info->extra_var->right_title->title = "Title for submenu";
$layout_info->extra_var->right_title->type = "text";
$layout_info->extra_var->right_title->value = $vars->right_title;
$layout_info->extra_var->right_title->description = "";
$layout_info->extra_var->sitemap_image = new stdClass;
$layout_info->extra_var->sitemap_image->group = "";
$layout_info->extra_var->sitemap_image->title = "Sitemap Image";
$layout_info->extra_var->sitemap_image->type = "image";
$layout_info->extra_var->sitemap_image->value = $vars->sitemap_image;
$layout_info->extra_var->sitemap_image->description = "Add an image which is displayed on the left side of the bottom left sitemap.";
$layout_info->extra_var->sitemap_url = new stdClass;
$layout_info->extra_var->sitemap_url->group = "";
$layout_info->extra_var->sitemap_url->title = "Sitemap image link";
$layout_info->extra_var->sitemap_url->type = "text";
$layout_info->extra_var->sitemap_url->value = $vars->sitemap_url;
$layout_info->extra_var->sitemap_url->description = "Please enter the URL to redirect when a user clicks the sitemap image.";
$layout_info->extra_var->banner_image_1 = new stdClass;
$layout_info->extra_var->banner_image_1->group = "";
$layout_info->extra_var->banner_image_1->title = "#1 Bottom right banner image";
$layout_info->extra_var->banner_image_1->type = "image";
$layout_info->extra_var->banner_image_1->value = $vars->banner_image_1;
$layout_info->extra_var->banner_image_1->description = "Add a banner image which is displayed on the bottom right submenu area.";
$layout_info->extra_var->banner_url_1 = new stdClass;
$layout_info->extra_var->banner_url_1->group = "";
$layout_info->extra_var->banner_url_1->title = "#1 Bottom right banner image link";
$layout_info->extra_var->banner_url_1->type = "text";
$layout_info->extra_var->banner_url_1->value = $vars->banner_url_1;
$layout_info->extra_var->banner_url_1->description = "Please enter the URL to redirect when a user clicks the banner image.";
$layout_info->extra_var->banner_image_2 = new stdClass;
$layout_info->extra_var->banner_image_2->group = "";
$layout_info->extra_var->banner_image_2->title = "#2 Bottom right banner image";
$layout_info->extra_var->banner_image_2->type = "image";
$layout_info->extra_var->banner_image_2->value = $vars->banner_image_2;
$layout_info->extra_var->banner_image_2->description = "Add a banner image which is displayed on the bottom right submenu area.";
$layout_info->extra_var->banner_url_2 = new stdClass;
$layout_info->extra_var->banner_url_2->group = "";
$layout_info->extra_var->banner_url_2->title = "#2 Bottom right banner image link";
$layout_info->extra_var->banner_url_2->type = "text";
$layout_info->extra_var->banner_url_2->value = $vars->banner_url_2;
$layout_info->extra_var->banner_url_2->description = "Please enter the URL to redirect when a user clicks the banner image.";
$layout_info->extra_var->banner_image_3 = new stdClass;
$layout_info->extra_var->banner_image_3->group = "";
$layout_info->extra_var->banner_image_3->title = "#3 Bottom right banner image";
$layout_info->extra_var->banner_image_3->type = "image";
$layout_info->extra_var->banner_image_3->value = $vars->banner_image_3;
$layout_info->extra_var->banner_image_3->description = "Add a banner image which is displayed on the bottom right submenu area.";
$layout_info->extra_var->banner_url_3 = new stdClass;
$layout_info->extra_var->banner_url_3->group = "";
$layout_info->extra_var->banner_url_3->title = "#3 Bottom right banner image link";
$layout_info->extra_var->banner_url_3->type = "text";
$layout_info->extra_var->banner_url_3->value = $vars->banner_url_3;
$layout_info->extra_var->banner_url_3->description = "Please enter the URL to redirect when a user clicks the banner image.";
$layout_info->extra_var->banner_image_4 = new stdClass;
$layout_info->extra_var->banner_image_4->group = "";
$layout_info->extra_var->banner_image_4->title = "#4 Bottom right banner image";
$layout_info->extra_var->banner_image_4->type = "image";
$layout_info->extra_var->banner_image_4->value = $vars->banner_image_4;
$layout_info->extra_var->banner_image_4->description = "Add a banner image which is displayed on the bottom right submenu area.";
$layout_info->extra_var->banner_url_4 = new stdClass;
$layout_info->extra_var->banner_url_4->group = "";
$layout_info->extra_var->banner_url_4->title = "#4 Bottom right banner image link";
$layout_info->extra_var->banner_url_4->type = "text";
$layout_info->extra_var->banner_url_4->value = $vars->banner_url_4;
$layout_info->extra_var->banner_url_4->description = "Please enter the URL to redirect when a user clicks the banner image.";
$layout_info->extra_var->banner_image_5 = new stdClass;
$layout_info->extra_var->banner_image_5->group = "";
$layout_info->extra_var->banner_image_5->title = "#5 Bottom right banner image";
$layout_info->extra_var->banner_image_5->type = "image";
$layout_info->extra_var->banner_image_5->value = $vars->banner_image_5;
$layout_info->extra_var->banner_image_5->description = "Add a banner image which is displayed on the bottom right submenu area.";
$layout_info->extra_var->banner_url_5 = new stdClass;
$layout_info->extra_var->banner_url_5->group = "";
$layout_info->extra_var->banner_url_5->title = "#5 Bottom right banner image link";
$layout_info->extra_var->banner_url_5->type = "text";
$layout_info->extra_var->banner_url_5->value = $vars->banner_url_5;
$layout_info->extra_var->banner_url_5->description = "Please enter the URL to redirect when a user clicks the banner image.";
$layout_info->extra_var->banner_image_6 = new stdClass;
$layout_info->extra_var->banner_image_6->group = "";
$layout_info->extra_var->banner_image_6->title = "#6 Bottom right banner image";
$layout_info->extra_var->banner_image_6->type = "image";
$layout_info->extra_var->banner_image_6->value = $vars->banner_image_6;
$layout_info->extra_var->banner_image_6->description = "Add a banner image which is displayed on the bottom right submenu area.";
$layout_info->extra_var->banner_url_6 = new stdClass;
$layout_info->extra_var->banner_url_6->group = "";
$layout_info->extra_var->banner_url_6->title = "#6 Bottom right banner image link";
$layout_info->extra_var->banner_url_6->type = "text";
$layout_info->extra_var->banner_url_6->value = $vars->banner_url_6;
$layout_info->extra_var->banner_url_6->description = "Please enter the URL to redirect when a user clicks the banner image.";
$layout_info->extra_var_count = "26";
$layout_info->menu_count = "1";
$layout_info->menu = new stdClass;
$layout_info->default_menu = "main_menu";
$layout_info->menu->main_menu = new stdClass;
$layout_info->menu->main_menu->name = "main_menu";
$layout_info->menu->main_menu->title = "Menu";
$layout_info->menu->main_menu->maxdepth = "2";
$layout_info->menu->main_menu->menu_srl = $vars->main_menu;
$layout_info->menu->main_menu->xml_file = "./files/cache/menu/".$vars->main_menu.".xml.php";
$layout_info->menu->main_menu->php_file = "./files/cache/menu/".$vars->main_menu.".php";