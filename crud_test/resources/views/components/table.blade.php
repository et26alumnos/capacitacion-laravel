<div class="overflow-x-scroll">
    <table class="border-spacing-3 border-separate mx-auto">
        <thead class="text-white">
            <tr>
                <?php foreach($tableColsName as $col){ ?>
                <th class="border border-solid border-gray-900 bg-gray-900 px-1 py-2 rounded-lg">
                    <?php echo ucfirst($col->Field); ?>
                </th>
                <?php } ?>
            </tr>
        </thead>
        <tbody class="text-gray-200">
            <?php
                foreach($tableData as $row){
            ?>
            <tr class="text-center">
                <?php foreach($row as $cell){ ?>
                    <td class="border border-solid border-gray-900 bg-gray-900 px-1 py-2 rounded-lg"><?php echo $cell ?></td>
                <?php } ?>
            </tr>
            <?php
                }    
            ?>
        </tbody>
    </table>
    <pre>
    <?php
/*         var_dump($tableColsName); */
    ?>
    </pre>
</div>
