<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

// @codingStandardsIgnoreFile

?>
<div class="block block-dashboard-orders">
    <?php $_orders = $block->getOrders(); ?>
    <div class="block-title order">
        <strong><?php /* @escapeNotVerified */ echo __('Recent Order') ?></strong>
        <?php if (sizeof($_orders->getItems()) > 0): ?>
            <a class="action view" href="<?php /* @escapeNotVerified */ echo $block->getUrl('sales/order/history') ?>">
                <span><?php /* @escapeNotVerified */ echo __('View All') ?></span>
            </a>
        <?php endif; ?>
    </div>
    <div class="block-content">
        <?php echo $block->getChildHtml()?>
        <?php if (sizeof($_orders->getItems()) > 0): ?>
            <div class="table-wrapper orders-recent">
                <table class="data table table-order-items recent" id="my-orders-table">
                    <caption class="table-caption"><?php /* @escapeNotVerified */ echo __('Recent Order') ?></caption>
                    <thead>
                    <tr>
                        <th scope="col" class="col id"><?php /* @escapeNotVerified */ echo __('Order #') ?></th>
                        <th scope="col" class="col date"><?php /* @escapeNotVerified */ echo __('Date') ?></th>
                        <th scope="col" class="col shipping"><?php /* @escapeNotVerified */ echo __('Ship To') ?></th>
                        <th scope="col" class="col total"><?php /* @escapeNotVerified */ echo __('Order Total') ?></th>
                        <th scope="col" class="col status"><?php /* @escapeNotVerified */ echo __('Status') ?></th>
                        <th scope="col" class="col actions"><?php /* @escapeNotVerified */ echo __('Action') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($_orders as $_order): ?>
                        <tr>
                            <td data-th="<?php echo $block->escapeHtml(__('Order #')) ?>" class="col id"><?php /* @escapeNotVerified */ echo $_order->getRealOrderId() ?></td>
                            <td data-th="<?php echo $block->escapeHtml(__('Date')) ?>" class="col date"><?php /* @escapeNotVerified */ echo $block->formatDate($_order->getCreatedAt()) ?></td>
                            <td data-th="<?php echo $block->escapeHtml(__('Ship To')) ?>" class="col shipping"><?php echo $_order->getShippingAddress() ? $block->escapeHtml($_order->getShippingAddress()->getName()) : '&nbsp;' ?></td>
                            <td data-th="<?php echo $block->escapeHtml(__('Order Total')) ?>" class="col total"><?php /* @escapeNotVerified */ echo $_order->formatPrice($_order->getGrandTotal()) ?></td>
                            <td data-th="<?php echo $block->escapeHtml(__('Status')) ?>" class="col status"><?php /* @escapeNotVerified */ echo $_order->getStatusLabel() ?></td>
                            <td data-th="<?php echo $block->escapeHtml(__('Actions')) ?>" class="col actions">
                                <a href="<?php /* @escapeNotVerified */ echo $block->getViewUrl($_order) ?>" class="action view">
                                    <span><?php /* @escapeNotVerified */ echo __('View Order') ?></span>
                                </a>
                                <?php if ($this->helper('Magento\Sales\Helper\Reorder')->canReorder($_order->getEntityId())) : ?>
                                    <a href="<?php /* @escapeNotVerified */ echo $block->getReorderUrl($_order) ?>" class="action order">
                                        <span><?php /* @escapeNotVerified */ echo __('Reorder') ?></span>
                                    </a>
                                <?php endif ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="message info empty"><span><?php /* @escapeNotVerified */ echo __('You have placed no orders.'); ?></span></div>
        <?php endif; ?>
    </div>
</div>
