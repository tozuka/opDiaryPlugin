<?php
include_page_title(__('Edit the diary'));
?>

<?php
$options = array('form' => array($form));
$options['url'] = 'diary/update?id='.$diary->getId();
$options['button'] = __('Save');
include_box('formDiary', '', '', $options);
?>