<!DOCTYPE html>
<html  dir="ltr" lang="es-mx" xml:lang="es-mx">
<head>
    <title>AF-DS9-2LS241: Plantilla CSS</title>
    <link rel="shortcut icon" href="http://moodlech.utp.ac.pa/theme/image.php/aardvark/theme/1439913337/favicon" />
	<link rel="apple-touch-icon-precomposed" href="http://moodlech.utp.ac.pa/theme/image.php/aardvark/theme/1439913337/apple-touch-icon" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, AF-DS9-2LS241: Plantilla CSS" />
<script type="text/javascript">
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"http:\/\/moodlech.utp.ac.pa","sesskey":"JG5uWdaOsW","loadingicon":"http:\/\/moodlech.utp.ac.pa\/theme\/image.php\/aardvark\/core\/1439913337\/i\/loading_small","themerev":"1439913337","slasharguments":1,"theme":"aardvark","jsrev":"1427907322","svgicons":true};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''};if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else me.path=component+'/'+component+'.'+me.type};
YUI_config = {"debug":false,"base":"http:\/\/moodlech.utp.ac.pa\/lib\/yuilib\/3.15.0\/","comboBase":"http:\/\/moodlech.utp.ac.pa\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui-patched":{"combine":true,"root":"3.15.0_1\/","patterns":{"dd-drag":{"group":"yui-patched"},"dd-gestures":{"group":"yui-patched"}},"modules":{"dd-drag":[],"dd-gestures":[]}},"yui2":{"base":"http:\/\/moodlech.utp.ac.pa\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"http:\/\/moodlech.utp.ac.pa\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"http:\/\/moodlech.utp.ac.pa\/theme\/yui_combo.php?m\/1427907322\/","combine":true,"comboBase":"http:\/\/moodlech.utp.ac.pa\/theme\/yui_combo.php?","ext":false,"root":"m\/1427907322\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-dock":{"requires":["base","node","event-custom","event-mouseenter","event-resize","escape","moodle-core-dock-loader"]},"moodle-core-dock-loader":{"requires":["escape"]},"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-formautosubmit":{"requires":["base","event-key"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-checknet":{"requires":["base-base","moodle-core-notification-alert","io-base"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-formchangechecker":{"requires":["base","event-focus"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core_availability-form":{"requires":["base","node","event","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-calendar-eventmanager":{"requires":["base","node","event-mouseenter","overlay","moodle-calendar-eventmanager-skin"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-toolboxes":{"requires":["node","base","event-key","node","io","moodle-course-coursebase","moodle-course-util"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-course-modchooser":{"requires":["moodle-core-chooserdialogue","moodle-course-coursebase"]},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-formatchooser":{"requires":["base","node","node-event-simulate"]},"moodle-form-passwordunmask":{"requires":["node","base"]},"moodle-form-showadvanced":{"requires":["node","base","selector-css3"]},"moodle-form-shortforms":{"requires":["node","base","selector-css3"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-question-qbankmanager":{"requires":["node","selector-css3"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-block_navigation-navigation":{"requires":["base","io-base","node","event-synthetic","event-delegate","json-parse"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-editor":{"requires":["node","io","overlay","escape","event","event-simulate","event-custom","yui-throttle","moodle-core-notification-dialogue","moodle-editor_atto-rangy","handlebars","timers"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_grader-scrollview":{"requires":["base","node"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-theme_bootstrapbase-bootstrap":{"requires":["node","selector-css3"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_html-button":{"requires":["moodle-editor_atto-plugin","event-valuechange"]},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]}}},"gallery":{"name":"gallery","base":"http:\/\/moodlech.utp.ac.pa\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"http:\/\/moodlech.utp.ac.pa\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1427907322\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"http:\/\/moodlech.utp.ac.pa\/lib\/javascript.php\/1427907322\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker"]}}};
M.yui.loader = {modules: {}};

//]]>
</script>
<link rel="stylesheet" type="text/css" href="http://moodlech.utp.ac.pa/theme/yui_combo.php?rollup/3.15.0/yui-moodlesimple-min.css" /><script type="text/javascript" src="http://moodlech.utp.ac.pa/theme/yui_combo.php?rollup/3.15.0_1/yui-moodlesimple-min.js&amp;rollup/1427907322/mcore-min.js"></script><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="http://moodlech.utp.ac.pa/theme/styles.php/aardvark/1439913337/all" />
<script type="text/javascript" src="http://moodlech.utp.ac.pa/lib/javascript.php/1427907322/lib/javascript-static.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
	    <!-- Google web fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> 
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" type='text/css' />
</head>


<body  id="page-mod-resource-view" class="format-weeks  path-mod path-mod-resource gecko dir-ltr lang-es_mx yui-skin-sam yui3-skin-sam moodlech-utp-ac-pa pagelayout-incourse course-196 context-12887 cmid-7357 category-6 has-region-side-pre used-region-side-pre has-region-side-post empty-region-side-post">

<div class="skiplinks"><a class="skip" href="#maincontent">Saltar a contenido principal</a></div>
<script type="text/javascript">
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>



<header role="banner" class="navbar navbar-fixed-top">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
		
            <a href="http://moodlech.utp.ac.pa"><a class="brand" href="http://moodlech.utp.ac.pa">MOODLECH</a>
			
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse collapse">
          <ul class="nav"><li class="dropdown langmenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Idioma">Español - México (es_mx)<b class="caret"></b></a><ul class="dropdown-menu"><li><a title="English (en)" href="http://moodlech.utp.ac.pa/mod/resource/view.php?id=7357&amp;lang=en">English (en)</a><li><a title="Español - México (es_mx)" href="http://moodlech.utp.ac.pa/mod/resource/view.php?id=7357&amp;lang=es_mx">Español - México (es_mx)</a></ul></ul>            <ul class="nav pull-right">
            <li><ul class="nav">

<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#cm_submenu_5"><img class="profilepic" src="http://moodlech.utp.ac.pa/user/pix.php?file=/1228/f1.jpg" width="80px" height="80px" title="Manuel Samudio" alt="Manuel Samudio" />
Manuel
<b class="caret"></b>
</a>
<ul class="dropdown-menu profiledrop"><li><a href="http://moodlech.utp.ac.pa/my"><img class="profileicon" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/theme/1439913337/profile/course" />Mis cursos</a></li><li><a href="http://moodlech.utp.ac.pa/user/profile.php"><img class="profileicon" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/theme/1439913337/profile/profile" />Ver perfil</a></li><li><a href="http://moodlech.utp.ac.pa/user/edit.php"><img class="profileicon" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/theme/1439913337/profile/edit" />Editar perfil</a></li><li><a href="http://moodlech.utp.ac.pa/user/files.php"><img class="profileicon" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/theme/1439913337/profile/files" />Mis archivos privados</a></li><li><a href="http://moodlech.utp.ac.pa/calendar/view.php?view=month"><img class="profileicon" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/theme/1439913337/profile/calendar" />Calendario</a></li><li><a target="_blank" href="http://correo.utp.ac.pa/"><img class="profileicon" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/theme/1439913337/footer-icons/icon-outlook-utp2" />Email</a></li><li><a href="http://moodlech.utp.ac.pa/login/logout.php"><img class="profileicon" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/theme/1439913337/profile/logout" />Salir</a></li></ul></li></ul></li>
            </ul>
            </div>
        </div>
    </nav>
</header>

<div id="page" class="container-fluid">

<header id="page-header" class="clearfix">
		
	<img style="width:100%; text-align: center;" src="http://moodlech.utp.ac.pa/images/01-banner-moodle2-utpch.png" />
	
            <nav class="breadcrumb-button"></nav>
        <span class="accesshide">Ruta a la página</span><ul class="breadcrumb"><li><a href="http://moodlech.utp.ac.pa/">Página Principal (home)</a> <span class="divider"> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&#x25BA;</span> </span></li><li><a href="http://moodlech.utp.ac.pa/my/">Mis cursos</a> <span class="divider"> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&#x25BA;</span> </span></li><li><a href="http://moodlech.utp.ac.pa/course/index.php?categoryid=6">Facultad Ingeniería de Sistemas Computacionales</a> <span class="divider"> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&#x25BA;</span> </span></li><li><a title="DESARROLLO DE SOFTWARE IX" href="http://moodlech.utp.ac.pa/course/view.php?id=196">AF-DS9-2LS241</a> <span class="divider"> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&#x25BA;</span> </span></li><li><span tabindex="0">16 de May - 22 de May</span> <span class="divider"> <span class="accesshide " ><span class="arrow_text">/</span>&nbsp;</span><span class="arrow sep">&#x25BA;</span> </span></li><li><a title="Archivo" href="http://moodlech.utp.ac.pa/mod/resource/view.php?id=7357">Plantilla CSS</a></li></ul>        <h1>DESARROLLO DE SOFTWARE IX</h1>

    	
		
		
</header>

    <div id="page-content" class="row-fluid">
        <div id="region-bs-main-and-pre" class="span9">
            <div class="row-fluid">
                <section id="region-main" class="span8 pull-right">
                    <div role="main"><span id="maincontent"></span><h2>Plantilla CSS</h2><div class="resourcecontent resourcegeneral">
  <iframe id="resourceobject" src="http://moodlech.utp.ac.pa/pluginfile.php/12887/mod_resource/content/1/plantilla.html">
    Haga clic en <a href="http://moodlech.utp.ac.pa/pluginfile.php/12887/mod_resource/content/1/plantilla.html" >plantilla.html</a> para ver el archivo.
  </iframe>
</div><div id="resourceintro" class="box mod_introbox"><div class="no-overflow"><p>Plantilla CSS para crear la Hoja de Estilo Correspondientes</p></div></div></div>                </section>
                <aside id="block-region-side-pre" class="span4 desktop-first-column block-region" data-blockregion="side-pre" data-droptarget="1"><a href="#sb-1" class="skip-block">Saltar Navegación</a><div id="inst4" class="block_navigation  block" role="navigation" data-block="navigation" data-instanceid="4" aria-labelledby="instance-4-header"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-4-header">Navegación</h2></div></div><div class="content"><ul class="block_tree list"><li class="type_unknown depth_1 contains_branch" aria-expanded="true"><p class="tree_item branch canexpand navigation_node"><a href="http://moodlech.utp.ac.pa/">Página Principal (home)</a></p><ul><li class="type_setting depth_2 item_with_icon"><p class="tree_item leaf hasicon"><a href="http://moodlech.utp.ac.pa/my/"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Mi hogar (área personal)</a></p></li>
<li class="type_course depth_2 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch"><span title="BIENVENIDOS AL CAMPUS VIRTUAL DE LA UNIVERSIDAD TECNOLÓGICA DE PANAMÁ SEDE CHIRIQUÍ" tabindex="0">Páginas del sitio</span></p><ul><li class="type_custom depth_3 item_with_icon"><p class="tree_item leaf hasicon"><a href="http://moodlech.utp.ac.pa/blog/index.php?courseid=0"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Blogs del sitio</a></p></li>
<li class="type_custom depth_3 item_with_icon"><p class="tree_item leaf hasicon"><a href="http://moodlech.utp.ac.pa/badges/view.php?type=1"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Insignias del sitio</a></p></li>
<li class="type_custom depth_3 item_with_icon"><p class="tree_item leaf hasicon"><a href="http://moodlech.utp.ac.pa/tag/search.php"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Marcas (tags)</a></p></li>
<li class="type_custom depth_3 item_with_icon"><p class="tree_item leaf hasicon"><a href="http://moodlech.utp.ac.pa/calendar/view.php?view=month"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Calendario</a></p></li>
<li class="type_activity depth_3 item_with_icon"><p class="tree_item leaf hasicon"><a title="Foro" href="http://moodlech.utp.ac.pa/mod/forum/view.php?id=1"><img alt="Foro" class="smallicon navicon" title="Foro" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/forum/1439913337/icon" />Novedades del sitio</a></p></li></ul></li>
<li class="type_user depth_2 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch"><span tabindex="0">Mi perfil</span></p><ul><li class="type_custom depth_3 item_with_icon"><p class="tree_item leaf hasicon"><a href="http://moodlech.utp.ac.pa/user/profile.php?id=1228"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Ver perfil</a></p></li>
<li class="type_custom depth_3 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch"><span tabindex="0">Mensajes en foros</span></p><ul><li class="type_custom depth_4 item_with_icon"><p class="tree_item leaf hasicon"><a href="http://moodlech.utp.ac.pa/mod/forum/user.php?id=1228"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Mensajes</a></p></li>
<li class="type_custom depth_4 item_with_icon"><p class="tree_item leaf hasicon"><a href="http://moodlech.utp.ac.pa/mod/forum/user.php?id=1228&amp;mode=discussions"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Discusiones</a></p></li></ul></li>
<li class="type_unknown depth_3 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch"><span tabindex="0">Blogs</span></p><ul><li class="type_custom depth_4 item_with_icon"><p class="tree_item leaf hasicon"><a href="http://moodlech.utp.ac.pa/blog/index.php?userid=1228"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Ver todas mis entradas</a></p></li>
<li class="type_custom depth_4 item_with_icon"><p class="tree_item leaf hasicon"><a href="http://moodlech.utp.ac.pa/blog/edit.php?action=add"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Añadir una nueva entrada</a></p></li></ul></li>
<li class="type_setting depth_3 item_with_icon"><p class="tree_item leaf hasicon"><a href="http://moodlech.utp.ac.pa/message/index.php?user1=1228"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Mensajes</a></p></li>
<li class="type_setting depth_3 item_with_icon"><p class="tree_item leaf hasicon"><a href="http://moodlech.utp.ac.pa/user/files.php"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Mis archivos privados</a></p></li>
<li class="type_setting depth_3 item_with_icon"><p class="tree_item leaf hasicon"><a href="http://moodlech.utp.ac.pa/badges/mybadges.php"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Mis insignias</a></p></li></ul></li>
<li class="type_system depth_2 contains_branch" aria-expanded="true"><p class="tree_item branch"><span tabindex="0">Curso actual</span></p><ul><li class="type_course depth_3 contains_branch" aria-expanded="true"><p class="tree_item branch canexpand"><a title="DESARROLLO DE SOFTWARE IX" href="http://moodlech.utp.ac.pa/course/view.php?id=196">AF-DS9-2LS241</a></p><ul><li class="type_unknown depth_4 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch"><a href="http://moodlech.utp.ac.pa/user/index.php?id=196">Participantes</a></p><ul><li class="type_custom depth_5 item_with_icon"><p class="tree_item leaf hasicon"><a href="http://moodlech.utp.ac.pa/blog/index.php?courseid=196"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Blogs del curso</a></p></li>
<li class="type_user depth_5 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch"><a href="http://moodlech.utp.ac.pa/user/view.php?id=1228&amp;course=196">Manuel Samudio</a></p><ul><li class="type_custom depth_6 item_with_icon"><p class="tree_item leaf hasicon"><a href="http://moodlech.utp.ac.pa/user/view.php?id=1228&amp;course=196"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Ver perfil</a></p></li>
<li class="type_custom depth_6 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch"><span tabindex="0">Mensajes en foros</span></p><ul><li class="type_custom depth_7 item_with_icon"><p class="tree_item leaf hasicon"><a href="http://moodlech.utp.ac.pa/mod/forum/user.php?id=1228&amp;course=196"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Mensajes</a></p></li>
<li class="type_custom depth_7 item_with_icon"><p class="tree_item leaf hasicon"><a href="http://moodlech.utp.ac.pa/mod/forum/user.php?id=1228&amp;course=196&amp;mode=discussions"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Discusiones</a></p></li></ul></li>
<li class="type_unknown depth_6 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch"><span tabindex="0">Blogs</span></p><ul><li class="type_custom depth_7 item_with_icon"><p class="tree_item leaf hasicon"><a href="http://moodlech.utp.ac.pa/blog/index.php?userid=1228"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Ver todas mis entradas</a></p></li>
<li class="type_custom depth_7 item_with_icon"><p class="tree_item leaf hasicon"><a href="http://moodlech.utp.ac.pa/blog/edit.php?action=add"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Añadir una nueva entrada</a></p></li></ul></li>
<li class="type_setting depth_6 item_with_icon"><p class="tree_item leaf hasicon"><a href="http://moodlech.utp.ac.pa/message/index.php?user1=1228&amp;viewing=course_196"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Mensajes</a></p></li>
<li class="type_setting depth_6 item_with_icon"><p class="tree_item leaf hasicon"><a href="http://moodlech.utp.ac.pa/user/files.php"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Mis archivos privados</a></p></li>
<li class="type_setting depth_6 item_with_icon"><p class="tree_item leaf hasicon"><a href="http://moodlech.utp.ac.pa/badges/mybadges.php"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Mis insignias</a></p></li></ul></li></ul></li>
<li class="type_unknown depth_4 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch"><span tabindex="0">Insignias</span></p><ul><li class="type_setting depth_5 item_with_icon"><p class="tree_item leaf hasicon"><a href="http://moodlech.utp.ac.pa/badges/view.php?type=2&amp;id=196"><img alt="Insignias de curso" class="smallicon navicon" title="Insignias de curso" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/badge" />Insignias de curso</a></p></li></ul></li>
<li class="type_structure depth_4 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch" id="expandable_branch_30_2848"><span tabindex="0">General</span></p></li>
<li class="type_structure depth_4 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch" id="expandable_branch_30_2870"><span tabindex="0">14 de March - 20 de March</span></p></li>
<li class="type_structure depth_4 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch" id="expandable_branch_30_2871"><span tabindex="0">21 de March - 27 de March</span></p></li>
<li class="type_structure depth_4 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch" id="expandable_branch_30_2872"><span tabindex="0">28 de March - 3 de April</span></p></li>
<li class="type_structure depth_4 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch" id="expandable_branch_30_2873"><span tabindex="0">4 de April - 10 de April</span></p></li>
<li class="type_structure depth_4 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch" id="expandable_branch_30_2874"><span tabindex="0">11 de April - 17 de April</span></p></li>
<li class="type_structure depth_4 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch" id="expandable_branch_30_2875"><span tabindex="0">18 de April - 24 de April</span></p></li>
<li class="type_structure depth_4 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch" id="expandable_branch_30_2876"><span tabindex="0">25 de April - 1 de May</span></p></li>
<li class="type_structure depth_4 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch" id="expandable_branch_30_2877"><span tabindex="0">2 de May - 8 de May</span></p></li>
<li class="type_structure depth_4 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch" id="expandable_branch_30_2878"><span tabindex="0">9 de May - 15 de May</span></p></li>
<li class="type_structure depth_4 contains_branch" aria-expanded="true"><p class="tree_item branch"><span tabindex="0">16 de May - 22 de May</span></p><ul><li class="type_activity depth_5 item_with_icon current_branch"><p class="tree_item leaf hasicon active_tree_node"><a title="Archivo" href="http://moodlech.utp.ac.pa/mod/resource/view.php?id=7357"><img alt="Archivo" class="smallicon navicon" title="Archivo" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/f/html-24" />Plantilla CSS</a></p></li></ul></li>
<li class="type_structure depth_4 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch" id="expandable_branch_30_2880"><span tabindex="0">23 de May - 29 de May</span></p></li>
<li class="type_structure depth_4 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch" id="expandable_branch_30_2881"><span tabindex="0">30 de May - 5 de June</span></p></li>
<li class="type_structure depth_4 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch" id="expandable_branch_30_2882"><span tabindex="0">6 de June - 12 de June</span></p></li>
<li class="type_structure depth_4 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch" id="expandable_branch_30_2883"><span tabindex="0">13 de June - 19 de June</span></p></li>
<li class="type_structure depth_4 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch" id="expandable_branch_30_2884"><span tabindex="0">20 de June - 26 de June</span></p></li>
<li class="type_structure depth_4 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch" id="expandable_branch_30_2885"><span tabindex="0">27 de June - 3 de July</span></p></li></ul></li></ul></li>
<li class="type_system depth_2 collapsed contains_branch" aria-expanded="false"><p class="tree_item branch" id="expandable_branch_0_mycourses"><a href="http://moodlech.utp.ac.pa/my/">Mis cursos</a></p></li></ul></li></ul></div></div><span id="sb-1" class="skip-block-to"></span><a href="#sb-2" class="skip-block">Saltar Administración</a><div id="inst5" class="block_settings  block" role="navigation" data-block="settings" data-instanceid="5" aria-labelledby="instance-5-header"><div class="header"><div class="title"><div class="block_action"></div><h2 id="instance-5-header">Administración</h2></div></div><div class="content"><div id="settingsnav" class="box block_tree_box"><ul class="block_tree list"><li class="type_course collapsed contains_branch" aria-expanded="false"><p class="tree_item branch root_node"><span tabindex="0">Administración del curso</span></p><ul><li class="type_setting collapsed item_with_icon"><p class="tree_item leaf"><a href="http://moodlech.utp.ac.pa/grade/report/index.php?id=196"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/grades" />Calificaciones</a></p></li></ul></li>
<li class="type_unknown collapsed contains_branch" aria-expanded="false"><hr /><p class="tree_item branch root_node" id="usersettings"><span tabindex="0">Ajustes de mi perfil</span></p><ul><li class="type_setting collapsed item_with_icon"><p class="tree_item leaf"><a href="http://moodlech.utp.ac.pa/user/edit.php?id=1228&amp;course=196"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Editar perfil</a></p></li>
<li class="type_setting collapsed item_with_icon"><p class="tree_item leaf"><a href="http://moodlech.utp.ac.pa/login/change_password.php?id=196"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Cambiar contraseña</a></p></li>
<li class="type_setting collapsed item_with_icon"><p class="tree_item leaf"><a href="http://moodlech.utp.ac.pa/message/edit.php?id=1228"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Mensajería</a></p></li>
<li class="type_unknown collapsed contains_branch" aria-expanded="false"><p class="tree_item branch"><span tabindex="0">Blogs</span></p><ul><li class="type_setting collapsed item_with_icon"><p class="tree_item leaf"><a href="http://moodlech.utp.ac.pa/blog/preferences.php"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Preferencias</a></p></li>
<li class="type_setting collapsed item_with_icon"><p class="tree_item leaf"><a href="http://moodlech.utp.ac.pa/blog/external_blogs.php"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Blogs externos</a></p></li>
<li class="type_setting collapsed item_with_icon"><p class="tree_item leaf"><a href="http://moodlech.utp.ac.pa/blog/external_blog_edit.php"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Registrar un blog externo</a></p></li></ul></li>
<li class="type_unknown collapsed contains_branch" aria-expanded="false"><p class="tree_item branch"><span tabindex="0">Insignias</span></p><ul><li class="type_setting collapsed item_with_icon"><p class="tree_item leaf"><a href="http://moodlech.utp.ac.pa/badges/preferences.php"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Preferencias</a></p></li>
<li class="type_setting collapsed item_with_icon"><p class="tree_item leaf"><a href="http://moodlech.utp.ac.pa/badges/mybackpack.php"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Configuraciones de mochila</a></p></li></ul></li>
<li class="type_custom collapsed contains_branch" aria-expanded="false"><p class="tree_item branch"><span tabindex="0">Reportes de actividad</span></p><ul><li class="type_custom collapsed item_with_icon"><p class="tree_item leaf"><a href="http://moodlech.utp.ac.pa/report/log/user.php?id=1228&amp;course=196&amp;mode=today"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Bitácoras de hoy</a></p></li>
<li class="type_custom collapsed item_with_icon"><p class="tree_item leaf"><a href="http://moodlech.utp.ac.pa/report/log/user.php?id=1228&amp;course=196&amp;mode=all"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Todas las bitácoras</a></p></li>
<li class="type_custom collapsed item_with_icon"><p class="tree_item leaf"><a href="http://moodlech.utp.ac.pa/report/outline/user.php?id=1228&amp;course=196&amp;mode=outline"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Esquema de reporte</a></p></li>
<li class="type_custom collapsed item_with_icon"><p class="tree_item leaf"><a href="http://moodlech.utp.ac.pa/report/outline/user.php?id=1228&amp;course=196&amp;mode=complete"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Reporte completo</a></p></li>
<li class="type_custom collapsed item_with_icon"><p class="tree_item leaf"><a href="http://moodlech.utp.ac.pa/report/stats/user.php?id=1228&amp;course=196"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Estadísticas</a></p></li>
<li class="type_custom collapsed item_with_icon"><p class="tree_item leaf"><a href="http://moodlech.utp.ac.pa/course/user.php?mode=grade&amp;id=196&amp;user=1228"><img alt="" class="smallicon navicon" title="" src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/core/1439913337/i/navigationitem" />Calificación</a></p></li></ul></li></ul></li></ul></div></div></div><span id="sb-2" class="skip-block-to"></span></aside>            </div>
        </div>
        <aside id="block-region-side-post" class="span3 block-region" data-blockregion="side-post" data-droptarget="1"></aside>    </div>

    <footer id="page-footer">
       <hr>
	<div class="row-fluid">
    	<!-- Widget 1 -->
    	<div class="span4">
    		<div id="footer-left" class="block-region">
    			<div class="region-content">
       			 &copy; 2016 Universidad Tecnológica de Panamá | Centro Regional de Chiriquí<div class="logininfo">Usted está ingresado como <a href="http://moodlech.utp.ac.pa/user/profile.php?id=1228" title="Ver perfil">Manuel Samudio</a> (<a href="http://moodlech.utp.ac.pa/login/logout.php?sesskey=JG5uWdaOsW">Salir</a>)</div><p class="helplink"></p>        		</div>
        	</div>
    	</div>

    	<!-- widget 2 -->
    	<div class="span4">
    		<div id="footer-middle" class="block-region">
    			<div class="region-content">
					
        		</div>
        	</div>
    	</div>

    	<!-- Widget 3 -->
    	<div class="span4">
    		<div id="footer-right" class="block-region">
    			<div class="region-content">
				

				       			
								
				<a target="_blank" href="https://www.youtube.com/user/UTPPanama "><span class="footer-icon youtube"><img src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/theme/1439913337/footer-icons/icon-youtube" /></span></a> 				
				
				
															
								
								
								
								
				<a target="_blank" href="https://www.facebook.com/pages/UTP-Sede-Chiriqui/288595827818519 "><span class="footer-icon facebook"><img src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/theme/1439913337/footer-icons/icon-fb" /></span></a> 				
				<a target="_blank" href="http://www.ch.utp.ac.pa/ "><span class="footer-icon website"><img src="http://moodlech.utp.ac.pa/theme/image.php/aardvark/theme/1439913337/footer-icons/icon-website" /></span></a> 				
				
				
				
				
				
        		</div>
        	</div>
    	</div>
	</div>

	    </footer>

    <script type="text/javascript">
//<![CDATA[
M.yui.add_module({"mathjax":{"name":"mathjax","fullpath":"http:\/\/cdn.mathjax.org\/mathjax\/2.3-latest\/MathJax.js?delayStartupUntil=configured"}});

//]]>
</script>
<script type="text/javascript" src="http://moodlech.utp.ac.pa/theme/javascript.php/aardvark/1439913337/footer"></script>
<script type="text/javascript">
//<![CDATA[
M.str = {"moodle":{"lastmodified":"\u00daltima modificaci\u00f3n","name":"Nombre","error":"Error","info":"Informaci\u00f3n","viewallcourses":"Ver todos los cursos","morehelp":"M\u00e1s ayuda","loadinghelp":"Cargando...","cancel":"Cancelar","yes":"S\u00ed","confirm":"Confirmar","no":"No","areyousure":"\u00bfEst\u00e1 Usted seguro?","closebuttontitle":"Cerrar","unknownerror":"Error desconocido"},"repository":{"type":"Tipo","size":"Tama\u00f1o","invalidjson":"Cadena JSON no v\u00e1lida","nofilesattached":"No se han adjuntado archivos","filepicker":"Selector de archivos","logout":"Salir","nofilesavailable":"No hay archivos disponibles","norepositoriesavailable":"Lo sentimos, ninguno de sus repositorios actuales puede devolver archivos en el formato solicitado.","fileexistsdialogheader":"El archivo existe","fileexistsdialog_editor":"Un archivo con ese nombre ha sido anexado al texto que Usted est\u00e1 editando","fileexistsdialog_filemanager":"Ya ha sido anexado un archivo con ese nombre","renameto":"Cambiar el nombre a \"{$a}\"","referencesexist":"Existen {$a} archivos de alias\/atajos que emplean este archivo como su or\u00edgen","select":"Seleccionar"},"admin":{"confirmation":"Confirmaci\u00f3n"}};
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
var navtreeexpansions4 = [{"id":"expandable_branch_30_2848","key":"2848","type":30},{"id":"expandable_branch_30_2870","key":"2870","type":30},{"id":"expandable_branch_30_2871","key":"2871","type":30},{"id":"expandable_branch_30_2872","key":"2872","type":30},{"id":"expandable_branch_30_2873","key":"2873","type":30},{"id":"expandable_branch_30_2874","key":"2874","type":30},{"id":"expandable_branch_30_2875","key":"2875","type":30},{"id":"expandable_branch_30_2876","key":"2876","type":30},{"id":"expandable_branch_30_2877","key":"2877","type":30},{"id":"expandable_branch_30_2878","key":"2878","type":30},{"id":"expandable_branch_30_2880","key":"2880","type":30},{"id":"expandable_branch_30_2881","key":"2881","type":30},{"id":"expandable_branch_30_2882","key":"2882","type":30},{"id":"expandable_branch_30_2883","key":"2883","type":30},{"id":"expandable_branch_30_2884","key":"2884","type":30},{"id":"expandable_branch_30_2885","key":"2885","type":30},{"id":"expandable_branch_0_mycourses","key":"mycourses","type":0}];
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
YUI().use('node', function(Y) {
M.util.load_flowplayer();
setTimeout("fix_column_widths()", 20);
 M.util.js_pending('random573f6919e205a1'); Y.on('domready', function() { M.util.init_maximised_embed(Y, "resourceobject");  M.util.js_complete('random573f6919e205a1'); });
Y.use("moodle-block_navigation-navigation",function() {M.block_navigation.init_add_tree({"id":"4","instance":"4","candock":false,"courselimit":"20","expansionlimit":0});
});
Y.use("moodle-block_navigation-navigation",function() {M.block_navigation.init_add_tree({"id":"5","instance":"5","candock":false});
});
M.util.help_popups.setup(Y);
Y.use("moodle-core-popuphelp",function() {M.core.init_popuphelp();
});
M.util.init_block_hider(Y, {"id":"inst4","title":"Navegaci\u00f3n","preference":"block4hidden","tooltipVisible":"Ocultar Navegaci\u00f3n bloque","tooltipHidden":"Mostrar bloque Navegaci\u00f3n"});
M.util.init_block_hider(Y, {"id":"inst5","title":"Administraci\u00f3n","preference":"block5hidden","tooltipVisible":"Ocultar Administraci\u00f3n bloque","tooltipHidden":"Mostrar bloque Administraci\u00f3n"});
Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"\nMathJax.Hub.Config({\n    config: [\"MMLorHTML.js\", \"Safe.js\"],\n    jax: [\"input\/TeX\",\"input\/MathML\",\"output\/HTML-CSS\",\"output\/NativeMML\"],\n    extensions: [\"tex2jax.js\",\"mml2jax.js\",\"MathMenu.js\",\"MathZoom.js\"],\n    TeX: {\n        extensions: [\"AMSmath.js\",\"AMSsymbols.js\",\"noErrors.js\",\"noUndefined.js\"]\n    },\n    menuSettings: {\n        zoom: \"Double-Click\",\n        mpContext: true,\n        mpMouse: true\n    },\n    errorSettings: { message: [\"!\"] },\n    skipStartupTypeset: true,\n    messageStyle: \"none\"\n});\n","lang":"en"});
});
 M.util.js_pending('random573f6919e205a5'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random573f6919e205a5'); });

});
//]]>
</script>

</div>
</body>
</html>
