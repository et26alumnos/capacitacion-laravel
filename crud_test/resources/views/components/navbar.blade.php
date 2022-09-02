<nav class="w-full inline-flex h-12 items-center justify-center">
    <?php
        foreach ($tables as $tableName) {
            ?>
                <div class="w-auto text-base align-center">
                    <a class="text-gray-200 no-underline hover:bg-gray-700 hover:text-white hover:underline decoration-indigo-600 cursor-pointer px-4 py-3"><?php echo ucfirst($tableName->Tables_in_classicmodels) ?></a>
                </div>
           <?php 
        }
    ?>
</nav>