<?php include_once("templates/header.php") ?>

<div class=" min-h-screen">
  <!-- card show -->
  <div class="mt-60">
    <h1 class="text-center text-4xl font-medium mb-6"><?= $contact['name'] ?></h1>
    <div class="flex flex-col items-center">
      <div class="text-left relative">
        <p class="text-xl mb-3 font-bold">Telefone: </p>
        <p><?= $contact['phone'] ?></p>
        <p class="text-xl mb-3 font-bold mt-6">Observações: </p>
        <p><?= $contact['observations'] ?></p>
        <a href="<?php $BASE_URL ?>index.php" class="absolute -bottom-20 -right-20 border-2 p-2 rounded-lg text-blue-500 border-blue-500 border-solid">Voltar</a>
      </div>
    </div>
  </div>
</div>

<?php include_once("templates/footer.php") ?>