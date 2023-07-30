<div class="card">
    <div class="card-header">
        <?= $product->getCategory()->getName(); ?> <i class="<?= $product->getCategory()->getIcon(); ?>"></i>
    </div>
    <img src="<?= $product->getImage() ?>" class="card-img-top" alt=" <?= $product->getName() ?>">
    <div class="card-body">
        <h5 class="card-title"> <?= $product->getName() ?></h5>
        <p class="card-text"><strong>Prezzo:</strong> $ <?= $product->getPrice() ?></p>
        <p class="card-text"><strong>Misure:</strong> <?= $product->getSize() ?></p>
        <p class="card-text"><strong>Colore:</strong> <?= $product->getColor() ?></p>
    </div>
</div>