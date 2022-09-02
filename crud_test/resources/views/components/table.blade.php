<div class="text-white">
    <table class="border-spacing-1">
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
            <tr>
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
