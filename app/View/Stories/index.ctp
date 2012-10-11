<script type="text/javascript" charset="utf-8">
$(function() {
  $('.sortable').sortable();
  $('.sortable').disableSelection();
});
</script>

<h2>Stories</h2>

<table class="table table-striped">
    <?php
        $headers = array('id', 'description', 'sprint', 'status', 'actions');

        echo "<thead><tr>";
        foreach ($headers as $header) {
            echo "<th>{$header}</th>";
        }
        echo "</tr></thead>";


        echo '<tbody class="sortable">';
        foreach ($stories as $row) {
            // @see <a href="http://stackoverflow.com/questions/3922007/problems-with-jquery-ui-sortable-and-tables">Problems with jQuery UI sortable and tables - Stack Overflow</a>
            echo "<tr>";

            $s = $row['Story'];
            $cells = array(
                $this->Html->link($s['id'], array('action' => 'edit', $s['id'])),
                $s['description'],
                $row['Sprint']['name'],
                $s['status'],
                $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $s['id']), array('escape' => false, 'title' => 'Edit'))
                    . ' ' . $this->Html->link('<i class="icon-remove"></i>', array('action' => 'delete', $s['id']), array('escape' => false, 'title' => 'Delete'))
            );

            foreach ($cells as $cell) {
                echo "<td>{$cell}</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";
    ?>
</table>

<div class="actions">
    <?php echo $this->Html->link('Add new story', array('action' => 'add'), array('class' => 'btn btn-primary')); ?>
</div>