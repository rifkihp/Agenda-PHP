<?php include_once("templates/header.php") ?>

<!-- global container -->
<div class="flex items-center justify-center min-h-screen">
    <!-- form container -->
    <div class="relative flex flex-col justify-center w-1/2 p-6">
        <a href="<?php $BASE_URL ?>index.php" class="absolute -top-10 border-2 p-2 rounded-lg text-blue-500 border-blue-500 border-solid">Voltar</a>
        <div class="mb-10">
            <h1 class="text-6xl font-bold text-center">Editar Contato</h1>
        </div>
        <form action="<?php $BASE_URL ?>config/process.php" method="POST" class="text-2xl">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $contact["id"] ?>">
            <div>
                <label class="block font-medium my-4" for="name">Nome do contato:</label>
                <input class="w-full border border-slate-400 rounded-lg p-4" type="text" id="name" name="name" placeholder="Digite o nome" value="<?= $contact['name'] ?>" required>
            </div>
            <div>
                <label class="block font-medium my-4" for="telefone">Telefone do contato:</label>
                <input class="w-full border border-slate-400 rounded-lg p-4" type="text" id="phone" name="phone" placeholder="Digite o telefone" value="<?= $contact['phone'] ?>" required>
            </div>
            <div>
                <label class=" block font-medium my-4" for="observations">Observações:</label>
                <textarea class="w-full border border-slate-400 rounded-lg p-4 " id="observations" name="observations" cols="10" rows="3" placeholder="Insira as observações"><?= $contact["observations"] ?></textarea>
            </div>
            <button type="submit" class=" py-4 px-6 bg-blue-500 text-white rounded-lg mt-4 hover:bg-opacity-90 transition-opacity duration-500">Atualizar</button>
        </form>
    </div>

</div>


<?php include_once("templates/footer.php") ?>