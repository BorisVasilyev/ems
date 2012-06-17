<p>
Controller called for URI
<code>
    <?= $_SERVER[ 'REQUEST_URI' ] ?>
</code>
</p>

<ul>
<?php foreach( $_SERVER as $key => $val ){ ?>
    <li>
    <b><?= ${key} ?>:</b>
    <tt><?= ${val} ?></tt>
    </li>
<?php } ?>
</ul>