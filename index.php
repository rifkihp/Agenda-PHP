<?php include_once("templates/header.php") ?>

<!-- global container -->
<div class="flex flex-col items-center justify-center mt-20">
    <?php if (isset($printMsg) && $printMsg != "") : ?>
        <p id="msg" class="p-3 text-[#155724] bg-[#D4EDDA] w-[500px] text-center text-xl border border-[#c3e6cb] rounded-lg my-8"><?= $printMsg ?></p>
    <?php endif; ?>
    <!-- card contacts -->
    <div class="flex flex-col items-center justify-center ">
        <h1 class="text-4xl  font-medium mb-6">Minha Agenda</h1>
        <div class="w-full md:w-[800px] flex flex-col items-center my-6 md:h-[500px] md:overflow-auto ">
            <?php if (count($contacts) > 0) : ?>
                <table id="contacts-table" class="w-full  divide-y divide-gray-200 ">
                    <thead class="bg-slate-800 text-white ">
                        <tr class="">
                            <th class="px-6 py-2 text-left text-xl tracking-wider">#</th>
                            <th class="px-6 py-2 text-left text-xl tracking-wider">Nome</th>
                            <th class="px-6 py-2 text-left text-xl tracking-wider">Telefone</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y ">
                        <?php foreach ($contacts as $contact) : ?>
                            <tr>
                                <td class="px-6 py-4 text-left text-xl tracking-wider font-bold"><?= $contact['id'] ?>
                                </td>
                                <td class="px-6 py-4 text-left text-xl tracking-wider"><?= $contact['name'] ?></td>
                                <td class="px-6 py-4 text-left text-xl tracking-wider"><?= $contact['phone'] ?></td>

                                <td class="actions ">
                                    <a href="<?php $BASE_URL ?>show.php?id=<?= $contact['id'] ?>" class=" fas fa-eye check-ico text-green-600 text-right mr-3"></a>
                                    <a href="<?php $BASE_URL ?>edit.php?id=<?= $contact['id'] ?>" class="far fa-edit edit-ico text-cyan-600 text-right mr-3"></a>
                                    <form class="inline" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                                        <input type="hidden" name="type" value="delete">
                                        <input type="hidden" name="id" value="<?= $contact["id"] ?>">
                                        <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon text-red-600"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <p id="empty-list-text">Ainda Não há contatos na sua agenda</p>
                <a class="text-blue-800" href="<?php $BASE_URL ?>create.php">Adicione contatos aqui</a>
            <?php endif; ?>
        </div>

    </div>
</div>


<?php include_once("templates/footer.php") ?>