<?php
$this->breadcrumbs['P3 Page Translations'] = array('admin');
$this->breadcrumbs[] = $model->id;
?>
<?php $this->widget("TbBreadcrumbs", array("links" => $this->breadcrumbs)) ?>
<h1>
    P3 Page Translation
    <small>View #<?php echo $model->id ?></small>
</h1>


<?php $this->renderPartial("_toolbar", array("model" => $model)); ?>

<h2>
    Data
</h2>

<p>
    <?php
    $this->widget('TbDetailView', array(
                                       'data'       => $model,
                                       'attributes' => array(
                                           'id',
                                           array(
                                               'name'  => 'p3_page_id',
                                               'value' => ($model->p3Page !== null) ?
                                                   '<span class=label>CBelongsToRelation</span><br/>' . CHtml::link($model->p3Page->_label, array('p3Page/view',
                                                                                                                                                  'id' => $model->p3Page->id), array('class' => 'btn')) :
                                                   'n/a',
                                               'type'  => 'html',
                                           ),
                                           'language',
                                           array('name' => 'seoUrl',
                                                 'type' => 'url',
                                           ),
                                           'pageTitle',
                                           'menuName',
                                           'keywords',
                                           'description',
                                       ),
                                  )); ?></p>


<h2>
    Relations
</h2>

<div class='row'>
</div>
