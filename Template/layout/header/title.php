<?php global $themeNebulaConfig; ?>
<div class="header">
    <?php if (!isset($themeNebulaConfig['logo'])) : ?>
        <?= $this->url->link('K<span>B</span>', 'DashboardController', 'show', array(), false, '', t('Dashboard')) ?>
    <?php else: ?>
        <?= $this->url->link('<img src="'.$this->url->dir().'plugins/Nebula/Assets/images/'.$themeNebulaConfig['logo'].'" />', 'DashboardController', 'show', array(), false, '', t('Dashboard')) ?>
    <?php endif ?>
    <h2>
        <?php if (! empty($project) && ! empty($task)): ?>
            <?= $this->url->link($this->text->e($project['name']), 'BoardViewController', 'show', array('project_id' => $project['id'])) ?>
        <?php else: ?>
            <?= $this->text->e($title) ?>
        <?php endif ?>
        <small>
            <?php if (! empty($description)): ?>
                <?= $this->app->tooltipHTML($description) ?>
            <?php endif ?>
        </small>
    </h2>
</div>
