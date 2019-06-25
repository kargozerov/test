<h2>из пиктуре пхп2</h2>
    <div class="grid">
        <h2><?php echo $pictures->getTitle(); ?></h2>
        <a href="/picture/show/<?php echo $pictures->getId();?>">
          <img src="/img/<?php echo $pictures->getPaths()[0]; ?>">
            <img src="/img/<?php echo $pictures->getPaths()[1]; ?>">
        </a>
    </div>

</div>
