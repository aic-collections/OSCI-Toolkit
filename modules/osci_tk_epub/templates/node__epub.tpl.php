<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
	  xmlns:epub="http://www.idpf.org/2007/ops">
<head>
	<meta name="robots" content="noindex" />
	<title><?php print $title; ?></title>
	<?php print drupal_get_css(); ?>
</head>
<body class="<?php print $classes; ?> node-<?php print $node->nid; ?>">
	<?php print drupal_render($content); ?>
</body>
</html>