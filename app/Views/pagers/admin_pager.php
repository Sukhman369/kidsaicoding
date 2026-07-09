<?php $pager->setSurroundCount(2) ?>

<nav aria-label="Page navigation" style="margin-top: 24px; display: flex; justify-content: center;">
    <ul style="display: inline-flex; list-style: none; padding: 0; margin: 0; background: #fff; border: 1px solid var(--border); border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.02); align-items: center;">
        
        <?php if ($pager->hasPrevious()) : ?>
            <li style="margin: 0; border-right: 1px solid var(--border);">
                <a href="<?= $pager->getFirst() ?>" aria-label="First" style="display: block; padding: 10px 14px; text-decoration: none; color: var(--text-main); font-weight: 600; font-size: 13px; transition: background 0.2s;" onmouseover="this.style.background='#f8fafc'" onmouseout="this.style.background='none'">
                    First
                </a>
            </li>
            <li style="margin: 0; border-right: 1px solid var(--border);">
                <a href="<?= $pager->getPrevious() ?>" aria-label="Previous" style="display: block; padding: 10px 14px; text-decoration: none; color: var(--text-main); font-weight: 600; font-size: 13px; transition: background 0.2s;" onmouseover="this.style.background='#f8fafc'" onmouseout="this.style.background='none'">
                    «
                </a>
            </li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link) : ?>
            <li style="margin: 0; border-right: 1px solid var(--border); <?= $link['active'] ? 'background: #4f46e5;' : '' ?>">
                <a href="<?= $link['uri'] ?>" style="display: block; padding: 10px 16px; text-decoration: none; font-weight: 700; font-size: 13px; color: <?= $link['active'] ? '#ffffff' : 'var(--text-main)' ?>; transition: background 0.2s;" <?= !$link['active'] ? 'onmouseover="this.style.background=\'#f1f5f9\'" onmouseout="this.style.background=\'none\'"' : '' ?>>
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>

        <?php if ($pager->hasNext()) : ?>
            <li style="margin: 0; border-right: 1px solid var(--border);">
                <a href="<?= $pager->getNext() ?>" aria-label="Next" style="display: block; padding: 10px 14px; text-decoration: none; color: var(--text-main); font-weight: 600; font-size: 13px; transition: background 0.2s;" onmouseover="this.style.background='#f8fafc'" onmouseout="this.style.background='none'">
                    »
                </a>
            </li>
            <li style="margin: 0;">
                <a href="<?= $pager->getLast() ?>" aria-label="Last" style="display: block; padding: 10px 14px; text-decoration: none; color: var(--text-main); font-weight: 600; font-size: 13px; transition: background 0.2s;" onmouseover="this.style.background='#f8fafc'" onmouseout="this.style.background='none'">
                    Last
                </a>
            </li>
        <?php endif ?>

    </ul>
</nav>
