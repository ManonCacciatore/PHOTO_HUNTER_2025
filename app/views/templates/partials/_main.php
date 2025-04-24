<main class="my-10">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-wrap -m-4">
            <div class="p-4 md:w-2/3">
                <?php echo $content; ?>
            </div>
            <!-- ASIDE -->
            <aside class="p-4 md:w-1/3">
                <?php include '../app/views/templates/partials/_aside.php'; ?>
            </aside>
        </div>
    </div>
</main>