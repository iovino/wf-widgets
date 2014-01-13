<h1>Examples</h1>
<ul>
    <?php foreach($this->data['examples'] as $file => $example) : ?>
        <li><a href="/examples/<?php echo $file ?>"><?php echo $example ?></a></li>
    <?php endforeach ?>
</ul>
