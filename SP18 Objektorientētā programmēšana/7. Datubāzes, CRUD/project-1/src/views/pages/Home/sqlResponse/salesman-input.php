<div class="w-full md:w-1/3 p-4">
  <form class="max-w-[400px] w-full bg-gray-800 mx-auto rounded-md py-10 px-5" 
    id="submitForm"
    action="/handlesubmit"
    method="post"
    >

    <!-- input fields -->
    <?php foreach ($columnNames as $props): ?>
    <div class="mb-6">
      <label for=<?= $props['name'] ?> class="input-label">
        <?= $props['label'] ?>
      </label>
      <input type="text" name="<?= $props['name'] ?>" placeholder="<?= $props['placeholder'] ?>" class="input-text">
    </div>
    <?php endforeach ?>

    <!-- submit button -->
    <button type="submit" class="btn-submit">
      Push to database
    </button>

  </form>
</div>