<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
<meta name="viewport" content="width = 620" />
<meta name="description" content="<?php e(t(DURA_SESSION_NAME))?>" />
<title><?php e(t(DURA_TITLE)) ?> | <?php e(t(DURA_SUBTITLE)) ?></title>
<link href="<?php echo DURA_URL; ?>/css/style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="http://www.google.com/jsapi"></script> 
<script type="text/javascript"><!--
google.load("language", "1"); 
google.load("jquery", "1");
google.load("jqueryui", "1");
duraUrl = "<?php e(DURA_URL) ?>";
GlobalMessageMaxLength = <?php e(DURA_MESSAGE_MAX_LENGTH) ?>;
useComet = <?php e(DURA_USE_COMET) ?>;
//-->
</script>
<script type="text/javascript" src="<?php e(DURA_URL) ?>/js/translator.js"></script>
<script type="text/javascript" src="<?php e(DURA_URL) ?>/js/language/<?php e(Dura::$language) ?>.js"></script>
<?php if ( Dura::$controller == 'room' ) : ?>
<script type="text/javascript" src="<?php e(DURA_URL) ?>/js/SoundManager2/script/soundmanager2-nodebug-jsmin.js"></script>

<script>
soundManager.url = '<?php e(DURA_URL) ?>/js/SoundManager2/swf/';
soundManager.onready(function() {
	messageSound = soundManager.createSound({
	  id: 'messageSound',
	  url: '<?php e(DURA_URL) ?>/js/sound.mp3',
	  volume: 100
	});
});
</script>

<script type="text/javascript" src="<?php e(DURA_URL) ?>/js/jquery.corner.js"></script>
<script type="text/javascript" src="<?php e(DURA_URL) ?>/js/jquery.chat.js"></script>
<?php endif ?>
<?php if ( file_exists(DURA_TEMPLATE_PATH.'/header.html') ) require(DURA_TEMPLATE_PATH.'/header.html'); ?>
</head>
<body>
<div id="body">
<?php e($content) ?>
</div>
</body>
</html>