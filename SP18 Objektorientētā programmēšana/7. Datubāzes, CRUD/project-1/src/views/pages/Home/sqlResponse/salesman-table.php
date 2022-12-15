<div class="table-container w-full md:w-2/3 rounded-t-md md:mt-4 md:mr-4">
  <table class="table">
    <thead>
      <tr class="table-row">
        <?php foreach ($columnNames as $props): ?>
        <th class="table-header">
          <?= $props['label'] ?>
        </th>
        <?php endforeach ?>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($salesman as $man): ?>
      <tr class="table-row">
        <?php foreach ($man as $value): ?>
        <td class="table-data">
          <?php print(htmlspecialchars($value)) ?>
        </td>
        <?php endforeach ?>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>