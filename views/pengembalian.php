<?php
$number1 = 1;
$number = 1;

if (!defined('SECURE_ACCESS')) {
    die('DIRECT IS NOT PERMITTED');
}
include('templates/header.php') ?>

<div class="main-content bg-white">
    <section class="container my-5">
        <H1 class="mt-4">PENGEMBALIAN BUKU</H1>

        <div class="table table-responsiven my-4">
            <table class="table">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>TITLE</th>
                        <th>AUTHOR</th>
                        <th>PEMINJAM</th>
                        <th>BORROW AT</th>
                        <th>RETURN</th>
                        <th>DENDA</th>
                        <th>KEMBALI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data3 as $list) : ?>
                    <tr>
                        <td><?= $number++ ?></td>
                        <td><?= $list->getTitle() ?></td>
                        <td><?= $list->getAuthor() ?></td>
                        <td><?= $list->getName()?></td>
                        <td><?= $list->getBorrow() ?></td>
                        <td><?= $list->getReturn() ?></td>
                        <td></td>
                        <td><button class="btn btn-sm btn-primary mx-3">Kembalikan buku</button></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center">
            <div class="my-4">
                <a href="/">Back to Home</a>
            </div>
        </div>

        <div class="footer">
            <p>Copyright© <script>
                    document.write(new Date().getFullYear())
                </script> All Rights Reserved By <span class="text-primary">SMK PI LIBRARY</span></p>
        </div>
    </section>
</div>

<?php include('templates/footer.php') ?>