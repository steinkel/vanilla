<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         DebugKit 0.1
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

/**
 * @var \DebugKit\View\AjaxView $this
 * @var \DebugKit\Log\Engine\DebugKitLog $logger
 */
?>
<div class="c-log-panel">
    <?php if ($logger->noLogs()) : ?>
        <p class="c-flash c-flash--info">There were no log entries made this request</p>
    <?php else : ?>
        <?php foreach ($logger->all() as $logName => $logs) : ?>
            <h3><?= sprintf('%s Messages', h(ucfirst($logName))) ?> </h3>
            <table class="c-debug-table">
                <thead>
                <tr>
                    <th>Time</th>
                    <th>Message</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($logs as $log) : ?>
                    <tr>
                        <td><?= $log[0] ?></td>
                        <td><?= h($log[1]) ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
