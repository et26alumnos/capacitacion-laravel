<div class="text-white overflow-x-scroll">
    <table class="border-spacing-3">
        <thead>
            <tr>
                <?php foreach($tableColsName as $col){ ?>
                <th>
                    <?php echo $col->Field; ?>
                </th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($tableData as $row){
            ?>
            <tr class="text-center">
                <?php foreach($row as $cell){ ?>
                    <td><?php echo $cell ?></td>
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
