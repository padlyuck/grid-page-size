<?php
/**
 * @var View $this
 */
?>
<?php
use webvimark\extensions\GridPageSize\GridPageSize;
use yii\helpers\Html;
use yii\web\View;

/** @var GridPageSize $context */
$context = $this->context;
?>
<div class="form-inline pull-right">
	<?php if ( $context->enableClearFilters ): ?>
		<span id="<?= ltrim($context->gridId, '#') ?>-clear-filters-btn"
			  class="btn btn-sm btn-default <?= $context->clearFilterDisabledClass; ?>">
			<?= GridPageSize::t('app', 'Clear filters') ?>
		</span>
	<?php endif; ?>
	<?= $context->text ?>
	<?= Html::dropDownList(
		'gridPageSize', \Yii::$app->request->cookies->getValue($context->paramName, 20),
		$this->context->dropDownOptions,
		['class'=>'form-control input-sm']
	) ?>
</div>