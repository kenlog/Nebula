<?php $has_project_creation_access = $this->user->hasAccess('ProjectCreationController', 'create'); ?>
<?php $is_private_project_enabled = $this->app->config('disable_private_project', 0) == 0; ?>

<?php if ($has_project_creation_access || (!$has_project_creation_access && $is_private_project_enabled)): ?>
    <div class="dropdown header-creation-menu">
        <a href="#" class="dropdown-menu dropdown-menu-link-icon"><i class="fa fa-plus fa-fw"></i><i class="fa fa-caret-down"></i></a>
        <ul>
            <?php if ($has_project_creation_access): ?>
                <li>
                    <?= $this->modal->medium('plus', t('New project'), 'ProjectCreationController', 'create') ?>
                </li>
            <?php endif ?>
            <?php if ($is_private_project_enabled): ?>
                <li>
                    <?= $this->modal->medium('lock', t('New private project'), 'ProjectCreationController', 'createPrivate') ?>
                </li>
            <?php endif ?>
            <?= $this->hook->render('template:header:creation-dropdown') ?>
        </ul>
    </div>
<?php endif ?>

    <div class="dropdown header-creation-menu">
        <a href="#" class="dropdown-menu dropdown-menu-link-icon"><i class="fa fa-bars fa-fw"></i><i class="fa fa-caret-down"></i></a>
        <ul>
            <li>
                <?= $this->url->icon('folder', t('Project management'), 'ProjectListController', 'show') ?>
            </li>
            <li>
                <i class="fa fa-th" aria-hidden="true"></i>
                <?= $this->url->link(t('Overview'), 'DashboardController', 'show', array('user_id' => $user['id'])) ?>
            </li>
            <li>
                <i class="fa fa-clone" aria-hidden="true"></i>
                <?= $this->url->link(t('My projects'), 'DashboardController', 'projects', array('user_id' => $user['id'])) ?>
            </li>
            <li>
                <i class="fa fa-tasks" aria-hidden="true"></i>
                <?= $this->url->link(t('My tasks'), 'DashboardController', 'tasks', array('user_id' => $user['id'])) ?>
            </li>
            <li>
                <i class="fa fa-sliders" aria-hidden="true"></i>
                <?= $this->url->link(t('My subtasks'), 'DashboardController', 'subtasks', array('user_id' => $user['id'])) ?>
            </li>
        </ul>
    </div>
