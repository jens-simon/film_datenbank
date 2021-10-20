<article>
    <h2><?=  bereinige($film['titel']) ?></h2>
    <ul>
        <li>
            Veröffentlichung:
            <?= formatiereDatum($film['veroeffentlichung']) ?>
        </li>
        <li>
            Dauer:
            <?= $film['dauer'] ?>
        </li>
        <?php if (!empty($film['genre_id'])): ?>
            <li>
                Genre:
                <?= bereinige($film['genre_titel']) ?>
            </li>
        <?php endif; ?>
    </ul>
</article>