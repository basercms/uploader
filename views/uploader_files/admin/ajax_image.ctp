<?php
/* SVN FILE: $Id$ */
/**
 * ファイルリスト
 *
 * PHP versions 4 and 5
 *
 * Baser :  Basic Creating Support Project <http://basercms.net>
 * Copyright 2008 - 2009, Catchup, Inc.
 *								18-1 nagao 1-chome, fukuoka-shi
 *								fukuoka, Japan 814-0123
 *
 * @copyright		Copyright 2008 - 2009, Catchup, Inc.
 * @link			http://basercms.net BaserCMS Project
 * @package			uploader.views
 * @since			Baser v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
?>
<?php echo $uploader->savedUrl.$file['UploaderFile']['name'] ?><br />
<?php echo $uploader->file($file,array('size'=>$size,'alt'=>$file['UploaderFile']['name'])) ?>
<br />
<?php echo $uploader->download($file) ?><br /><br />
<small>※ ブラウザで開いてしまう場合は右クリックメニューより保存します。</small>