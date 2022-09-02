<?php
use Illuminate\Support\Facades\DB;
$tables = DB::select('SHOW TABLES');
?>
<nav class="w-full inline-flex h-12 items-center justify-around border-b-gray-900 border-solid border-b-2">
    <div class="inline-flex">
        <?php
        foreach ($tables as $tableName) {
            ?>
        <div class="w-auto text-base align-center">
            <a href='/table/<?php echo $tableName->Tables_in_classicmodels; ?>'
                class="text-gray-200 no-underline hover:bg-gray-700 hover:text-white hover:underline decoration-indigo-600 cursor-pointer px-4 py-3">
                <?php echo ucfirst($tableName->Tables_in_classicmodels); ?>
            </a>
        </div>
        <?php 
        }
    ?>
    </div>
{{--     <div>
        <select name="limit" id="limit" class="text-black">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="50">50</option>
            <option value="100">100</option>
            <option value="*">Ver todos</option>
        </select>
    </div> --}}
</nav>
