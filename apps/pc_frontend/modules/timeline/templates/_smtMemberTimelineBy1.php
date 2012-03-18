<?php use_helper('opUtil', 'Javascript'); ?>

<?php use_stylesheet('/opTimelinePlugin/css/colorbox.css') ?>
<?php use_javascript('/opTimelinePlugin/js/jquery.colorbox.js', 'last') ?>

<div class="row">
<div class="gadget_header span12">最新のタイムライン</div>
</div>
<div class="row">
  <div class="span12">
  <?php if (isset($createdAt) && isset($body)): ?>
  <?php echo op_format_activity_time(strtotime($createdAt)); ?> - <?php echo $body; ?>
  <?php else: ?>
  (タイムラインはまだありません。)
  <?php endif; ?>
  </div>
  <div class="span3 offset9">
  <?php  if (isset($createdAt) && isset($body)): ?>
  <?php echo link_to('もっと見る', '@member_timeline?id='.$memberId); ?>
  <?php endif; ?>
  </div>
</div>
